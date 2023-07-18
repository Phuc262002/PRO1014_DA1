<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
        return [
            'name' => 'required|max:255',
            'image_service' => 'required',
            'description' => 'required',
            'icon' => 'required|max:255',
            'price' => 'required|numeric',
            'discount_price' => 'required|numeric',
            
            
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Vui lòng nhập tên sản phẩm.',
            'name.unique' => 'Tên sản phẩm đã tồn tại.',
            'image_service.required' => 'Vui lòng chọn hình ảnh sản phẩm.',
            'image_service.unique' => 'Hình ảnh sản phẩm đã tồn tại.',
            'icon.required' => 'Vui lòng nhập icon sản phẩm',
            'icon.unique' => 'icon sản phẩm đã tồn tại.',
            'price.required' => 'Vui lòng nhập giá sản phẩm.',
            'price.numeric' => 'Giá sản phẩm phải là số.',
            'discount_price.required' => 'Vui lòng nhập giá khuyến mãi.',
            'discount_price.numeric' => 'Giá khuyến mãi phải là số.',
            'description.required' => 'Vui lòng nhập mô tả ngắn.',
            
        ];
    }
}
