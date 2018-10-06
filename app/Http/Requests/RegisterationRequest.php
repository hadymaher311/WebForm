<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterationRequest extends FormRequest
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
            'name' => 'required|string|min:3',
            'email' => 'required|email|unique:registerations',
            'facebook_link' => 'required|url',
            'faculty' => 'required|string',
            'university' => 'required|string',
            'academic_year' => 'required|string',
            'phone' => 'required|string|min:11|max:11',
            'why' => 'required|string',
        ];
    }
}
