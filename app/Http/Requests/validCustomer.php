<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validCustomer extends FormRequest
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
            'customerEmail' => 'required|email',
            'customerPass' => 'required|min:4',
        ];
    }

    public function messages()
    {
        return [
            'customerEmail.required' => 'Email is required',
            'customerEmail.email' => 'Please give your email',
            'customerPass.required' => 'Your password is required',
            'customerPass.min' => 'Atleat 4 value is required',
        ];
    }
}
