<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class EditProductRequest extends FormRequest
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
            'category'=>'required|min:5',
            'sub_category'=>'required|min:5',
            'product_name'=>'required|min:5',
            'product_brand'=>'required|min:5',
            'product_description'=>'required|min:10',
            'shipping_charge'=>'required|numeric',
            'product_availability'=>'required|min:5',
            'product_stock'=>'required|numeric',
            'price'=>'required|numeric',
            'discount'=>'required|numeric',
            'product_image'=>'mimes:jpeg,jpg,png,gif|required|max:10000',
        ];
    }
}
