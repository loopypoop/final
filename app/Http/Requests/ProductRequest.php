<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'title' => 'required',
            'price' => 'required',
				'description' => 'required|min:5|max:500',
				'category' => 'required'
        ];
    }

    public function messages() {
        return [
				'title.required' => 'Please add product title',
				'price.required' => 'Please add price',
				'description.required' => 'Please add description',
				'category.required' => 'Add category'
        ];
    }
}
