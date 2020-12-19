<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
            'customerEmail' => 'required|email',
            'customerPass' => 'required|min:4',
            'customerRepass' => 'required|same:customerPass',
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
        ];
    }
}
