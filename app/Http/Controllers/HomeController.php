<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\IpAddress;
use App\Models\Contact;
use Illuminate\Support\Str;
use File, URL;

class HomeController extends Controller{
    public function index(Request $request){
        return view('index');
    }

    public function contact(Request $request){
        return view('contact');
    }
    
    public function contactus(ContactRequest $request){
        $input = $request->all();
        unset($input['_token']);
        unset($input['_method']);

        $input['file_name'] = '';
        $input['image'] = '';

        $crud = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'website' => $request->website,
            'address' => $request->address,
            'p_name' => $request->p_name,
            'p_email' => $request->p_email,
            'p_phone' => $request->p_phone
        ];

        if (!empty($request->file('image'))) {
            $file = $request->file('image');
            $filenameWithExtension = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $filenameToStore = time()."_".$filename.'.'.$extension;

            $folder_to_upload = public_path().'/uploads/image/';

            if (!\File::exists($folder_to_upload))
                \File::makeDirectory($folder_to_upload, 0777, true, true);

            if (!empty($request->file('image')))
                $file->move($folder_to_upload, $filenameToStore);

            $input['file_name'] = URL('/uploads/image').'/'.$filenameToStore;
            $input['image'] = $filenameToStore;

            $crud['image'] = $filenameToStore;
        }

        $ip = $request->ip();

        $ip_result = IpAddress::select('ip_address')->where(['ip_address' => $ip])->first();

        if($ip_result){
            $input['download'] = false;
        }else{
            IpAddress::create(['ip_address' => $ip]);
            $input['download'] = true;
        }

        $contact = Contact::where(['name' => $request->name, 'email' => $request->email, 'phone' => $request->phone])->first();

        if(!$contact){
            Contact::create($crud);
        }

        return view('process', ['data' => $input]);
    }
}
