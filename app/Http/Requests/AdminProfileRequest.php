<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminProfileRequest extends FormRequest
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
            'name'=>'required|min:5|max:10',
            'email'=>'required|email|email|min:6',
            'phone' => 'required|min:11|numeric',
            'address'=>'required|min:8',
            'store_name'=>'required|min:5|max:10',
            'profile_image'=> 'mimes:jpeg,jpg,png,gif|required|max:10000',
        ];
    }
}
