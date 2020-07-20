<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|min:5|max:500'
        ];
    }

    public function messages() {
        return [
'name.required' => 'Please add your name',
'email.required' => 'Please add your email',
'message.required' => 'Please add your message'
        ];
    }
}