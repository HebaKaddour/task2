<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            'email' => 'required|email|unique:users',
            'phone_number' => 'required|numeric|unique:users',
            'name' => 'required|string|max:255|unique:users',
            'profile_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'certificate' => 'required|file|mimes:pdf|max:2048',
            'password' => 'required|string|min:8|confirmed',
        ];
    }

    public function messages()
    {
        return [

        ];
    }
}