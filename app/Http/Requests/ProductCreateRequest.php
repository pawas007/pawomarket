<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreateRequest extends FormRequest
{
//    /**
//     * Determine if the user is authorized to make this request.
//     *
//     * @return bool
//     */
//    public function authorize()
//    {
//        return false;
//    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'price' => 'required',
            'vendor_code' => 'required',
            'description' => 'required',
            'information' => 'required',

            'gallery.*' => 'mimes:jpg,jpeg,png,bmp|max:20000'


        ];
    }

    public function messages()
    {
        return [

            'gallery.*.mimes' => 'Only jpeg, png, jpg  images are allowed',

        ];
    }


}
