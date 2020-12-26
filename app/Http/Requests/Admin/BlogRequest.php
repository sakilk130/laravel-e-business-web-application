<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
            'blog_title'=>'required|min:5|max:300|string',
            'blog_drescription'=>'required|min:10|max:15000|string',
            'image'=>'mimes:jpeg,jpg,png,gif|required|max:10000',
        ];
    }
}
