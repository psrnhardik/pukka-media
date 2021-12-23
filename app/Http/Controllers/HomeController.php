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
        }

        $ip = $request->ip();

        $ip_result = IpAddress::select('ip_address')->where(['ip_address' => $ip])->first();

        if($ip_result){
            $input['download'] = false;
        }else{
            IpAddress::create(['ip_address' => $ip]);
            $input['download'] = true;
        }

        $p_name = $request->p_name;
        $p_email = $request->p_email;
        $p_phone = $request->p_phone;
        $contact = Contact::select('name', 'email', 'phone')->where(['name' => $p_name, 'email' => $p_email, 'phone' => $p_phone])->first();

        if(!$contact){
            Contact::create(['name' => $p_name, 'email' => $p_email, 'phone' => $p_phone]);
        }

        return view('process', ['data' => $input]);
    }

    public function remove_image(Request $request){
        $path = public_path().'/uploads/image/'.$request->image;

        if(\File::delete($path))
            return response()->json(['code' => 200]);
        else
            return response()->json(['code' => 201]);
    }
}
