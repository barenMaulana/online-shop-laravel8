<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProduct extends FormRequest
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
        $rules = [
            'product_name' => 'required|min:3',
            'product_price' => 'required',
            'product_qty' => 'required',
            'product_description' => 'required|min:10',
            'old_pict' => 'required',
            'product_image' => 'image|mimes:jpg,jpeg,png|max:700'
        ];
        return $rules;
    }
}
