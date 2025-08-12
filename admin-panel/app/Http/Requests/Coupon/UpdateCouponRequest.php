<?php

namespace App\Http\Requests\Coupon;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCouponRequest extends FormRequest
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
            'name'=>'required|string|max:255|unique:coupons,name,'.$this->coupon->id,
            'code'=>'required|string|max:255|unique:coupons,code,'.$this->coupon->id,
            'description'=>'required|string|max:600',
            'type'=>'required|string|max:255',
            'amount'=>'required_if:type,=,amount',
            'percentage'=>'required_if:type,=,percentage',
            'max_percentage_amount'=>'required_if:type,=,percentage',
            'expired_at'=>'required'
        ];
    }
}
