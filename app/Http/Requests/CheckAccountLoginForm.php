<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckAccountLoginForm extends FormRequest
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
            "login-email" => "required|email|string|max:320",
            "login-password" => "required|string|max:75|min:5",
        ];
    }

    public function messages()
    {
        return[
            "login-email.required" => "The field login-email must be filled and not empty.",
            "login-email.email" => "There login-email field must contain a valid email.",
            "login-email.string" => "The email should be of the datatype string.",
            "login-email.max" => "The maximum limit for the number of characters for the email is 320.",

            "login-password.required" => "The field login-password must be filled and not empty.",
            "login-password.string" => "The password should be of the datatype string.",
            "login-password.max" => "The maximum limit for the number of characters for the password is 75.",
            "login-password.min" => "The minimum limit for the number of characters for the password is 5."
        ];

    }

}
