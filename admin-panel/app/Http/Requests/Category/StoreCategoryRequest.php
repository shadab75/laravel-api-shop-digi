<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
            'parent_id'=>'nullable|integer',
            'name'=>'required|string|max:255|unique:categories,name',
            'description'=>'required|string|max:600',
            'is_active'=>'required|integer',
            'categoryable_type'=>'required|string|max:255',
            'categoryable_id'=>'required|integer',
            'attribute_ids'=>'required|array',
            'attribute_ids.*'=>'exists:attributes,id',
        ];
    }
}
