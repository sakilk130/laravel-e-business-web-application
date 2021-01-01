<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class EditBlogRequest extends FormRequest
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
            'blog_title'=>'required|min:5|max:100|string',
            'blog_details'=>'required|min:10|max:255|string',
            'blog_image'=>'mimes:jpeg,jpg,png,gif|required|max:10000',
        ];
    }
}
