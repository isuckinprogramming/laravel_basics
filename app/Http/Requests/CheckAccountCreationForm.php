<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
class CheckAccountCreationForm extends FormRequest
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
            "register-name" => "required|string|max:75|min:5|unique:accounts,name",
            "register-email" => "required|email|string|max:320|unique:accounts,email",
            "register-password" => "required|string|max:75|min:5",
        ];
    }

    public function messages()
    {
        return[
            "register-name.required" => "The field register-name must be filled and not empty.",
            "register-name.string" => "The username should be of the datatype string.",
            "register-name.max" => "The username must be 75 or less characters.",
            "register-name.min" => "The username must be 5 or more characters.",
            "register-name.unique" => "The name is already taken.",

            "register-email.required" => "The field register-email must be filled and not empty.",
            "register-email.email" => "There register-email field must contain a valid email.",
            "register-email.string" => "The email should be of the datatype string.",
            "register-email.unique" => "The email is already taken.",
            "register-email.max" => "The maximum limit for the number of characters for the email is 320.",

            "register-password.required" => "The field register-password must be filled and not empty.",
            "register-password.string" => "The password should be of the datatype string.",
            "register-password.max" => "The maximum limit for the number of characters for the password is 75.",
            "register-password.min" => "The minimum limit for the number of characters for the password is 5."
        ];

    }

}
