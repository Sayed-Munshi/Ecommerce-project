<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'product_name' => 'required',
            'category_id' => 'required|integer',
            'subcategory_id' => 'required',
            'purchase_price' => 'required|integer',
            'discount_type' => 'nullable',
            'discount_amount' => 'nullable|integer',
            'sell_price' => 'required|integer',
            'thumbnail_image' => 'required|mimes:png,jpg',
            'description' => 'required',
            'additional_description' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'category_id.required' => "The select category field is required!",
            'subcategory_id.required' => "The select subcategory field is required!",
        ];
    }
}
