<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;


use Illuminate\Foundation\Http\FormRequest;

class CouponRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        if (auth()->user()->is_admin == true) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $CouponID = $this->route('coupon');
        return [
            'coupon_name' => 'required',
            'coupon_hash_id' => [
                'required',
                Rule::unique('coupons')->ignore($CouponID),
                'max:255',
            ],
            'discount' => 'required|numeric',
        ];
    }
    public function messages(): array
    {
        return [
            'coupon_hash_id.required' => 'Vui lòng nhập mã giảm giá.',
            'coupon_hash_id.unique' => 'Mã giảm giá đã tồn tại.',
            'coupon_name.required' => 'Vui lòng nhập tên phiếu giảm giá.',
            'coupon_name.unique' => 'Tên phiếu giảm giá đã tồn tại.',
            'discount.required' => 'Vui lòng nhập số tiền giảm giá.',
            'discount.numeric' => 'Vui lòng nhập giá tiền bằng số.',
        ];
    }
}