<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest{
    public function authorize(){
        return true;
    }

    public function rules(){
        if($this->method() == 'POST'){
            return [
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'website' => 'required',
                'address' => 'required',
                'image' => 'required',
                'p_name' => 'required',
                'p_email' => 'required',
                'p_phone' => 'required',
            ];
        }
    }

    public function messages(){
        return [
            'name.required' => 'Please enter name',
            'email.required' => 'Please enter email address',
            'phone.required' => 'Please enter phone number',
            'website.required' => 'Please enter website',
            'address.required' => 'Please enter address',
            'image.required' => 'Please select image',
            'p_name.required' => 'Please enter name',
            'p_email.required' => 'Please enter email',
            'p_phone.required' => 'Please enter phone number',
        ];
    }
}
