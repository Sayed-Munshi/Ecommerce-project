<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
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
            'shipping_type' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'zip_code' => 'required|numeric',
            'address' => 'required',
            'charge' => 'required',
            'payment_type' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'address.required' => "The shipping address field is required!",
            'ship_name.required' => "The name field is required!",
            'ship_email.required' => "The email field is required!",
            'ship_phone.required' => "The phone field is required!",
            'ship_zip_code.required' => "The zip code field is required!",
            'ship_address.required' => "The sipping address field is required!",
            'charge.required' => "The delivery option box is required!",
            'payment_type.required' => "The payment option box is required!",
        ];
    }
}
