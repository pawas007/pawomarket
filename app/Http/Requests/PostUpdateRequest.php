<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class PostUpdateRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => [
                'required',
                Rule::unique('posts', 'title')->ignore($this->id)
            ],
            'contents' => 'required',
            'short_description' => 'required',
            'image' => 'mimes:jpeg,jpg,png',
                ];

    }
}
