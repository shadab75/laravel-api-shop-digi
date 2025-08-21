<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            //
            'name'=>'required|string|max:255|unique:products,name,'.$this->product->id,
            'brand_id'=>'required|integer',
            'is_active'=>'integer|integer',
            'tag_ids'=>'required|array',
            'tag_ids.*'=>'exists:tags,id',
            'description'=>'required|string|max:600',
            'primary_image'=>'image|required|mimes:jpg,jpeg,png,svg|max:2048',
            'images.*' => 'image|required|mimes:jpg,jpeg,png,svg|max:2048',
            'category_id'=>'required|integer',
            'attributes' => 'required|array',
            'attributes.*.id' => 'required|exists:attributes,id',
            'attributes.*.value' => 'required|string|max:255',
            'variation_values' => 'required|array',
            'variation_values.*.value' => 'required|string',
            'variation_values.*.price' => 'required|string',
            'variation_values.*.quantity' => 'required|integer',
            'variation_values.*.sale_price' => 'nullable|integer',
            'variation_values.*.date_on_sale_from' => 'nullable|string',
            'variation_values.*.date_on_sale_to' => 'nullable|string',
        ];
    }
}
