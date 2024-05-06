<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckOrderCreate extends FormRequest
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
            "order-name" => "required|string|max:200",
            "order-price" => "required|numeric|min:1",
            "order-quantity" => "required|int|min:0",
            "order-category-id" => "required"
        ];
    }

    public function messages()
    {
        return[
            "order-name.required" => "There order-name field must be filled.",
            "order-name.string" => "The order-name field should be of the datatype string.",
            "order-name.max" => "The maximum limit for the number of characters for a name of an order is 200.",

            "order-quantity.required" => "There order-quantity field must be filled.",
            "order-quantity.int" => "The datatype of the quantity of an order should be of the datatype integer. Floating point numbers and any other datatypes are invalid.",
            "order-quantity.min" => "The minimum quantity value is 0. Lower values are invalid",

            "order-price.required" => "There order-price field must be filled.",
            "order-price.numeric" => "The datatype of the price of an order can be either a floating point number or an integer, any other datatypes are invalid..",
            "order-price.min" => "The minimum price value is 1. Values 0 and below are invalid.",

            "order-category-id.required" => "The order-category-id field must be filled."
        ];

    }
}
