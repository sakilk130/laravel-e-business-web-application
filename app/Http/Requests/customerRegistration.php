<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\customerDB;

class customerRegistration extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'customerName' => 'required',
            'customerEmail' => 'required|email|unique:customers,email',
            'customerPass' => 'required|min:4',
            'customerRepass' => 'required|same:customerPass',
            'phone' => 'required|regex:/(01)[0-9]/|min:11|max:11',
            'adress' => 'required',
            'image' => 'required|image',

        ];
    }

    public function messages()
    {
        return [
            'customerName.required' => 'Your name is required',
            'customerEmail.required' => 'Email is required',
            'customerEmail.email' => 'Please enter valid email',
            'customerPass.required' => 'Your password is required',
            'customerPass.min' => 'Atleast four charecter',
            'customerRepass.required' => 'Your repassword is required',
            'customerRepass.same' => 'Did not match with password',
            'customerEmail.unique' => 'Email is already register',
            'phone.required' => 'Phone Number is required',
            'phone.regex' => 'Phone number not vadlid',
            'phone.min' => 'minimum 11 degit required',
            'phone.max' => 'maximum 11 degit avaiable',
            'adress.required' => 'Your adress is required',
            'image.required' => 'Image is required',
            'image.image' => 'This is not an image',

 

        ];
    }
}
