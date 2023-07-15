<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductRequest extends FormRequest
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
        $productId = $this->route('product');

        return [
            'sku' => [
                'required',
                Rule::unique('products')->ignore($productId),
                'max:255',
            ],
            'name' => [
                'required',
                Rule::unique('products')->ignore($productId),
                'max:255',
            ],
            'slug' => [
                'required',
                Rule::unique('products')->ignore($productId),
                'max:255',
            ],
            'price' => 'required|numeric',
            'discount_price' => 'required|numeric',
            // 'discount_end' => 'required|date',
            'quantity' => 'required|numeric',
            'description_summary' => 'required',
            'description_detail' => 'required',
            'brand_id' => 'required',
            'category_id' => 'required',
            'image_main' => 'required',
            'status' => 'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     */

    public function messages(): array
    {
        return [
            'sku.required' => 'Vui lòng nhập mã sản phẩm.',
            'sku.unique' => 'Mã sản phẩm đã tồn tại.',
            'name.required' => 'Vui lòng nhập tên sản phẩm.',
            'name.unique' => 'Tên sản phẩm đã tồn tại.',
            'slug.required' => 'Vui lòng nhập slug.',
            'slug.unique' => 'Slug đã tồn tại.',
            'price.required' => 'Vui lòng nhập giá sản phẩm.',
            'price.numeric' => 'Giá sản phẩm phải là số.',
            'discount_price.required' => 'Vui lòng nhập giá khuyến mãi.',
            'discount_price.numeric' => 'Giá khuyến mãi phải là số.',
            // 'discount_end.required' => 'Vui lòng nhập ngày kết thúc khuyến mãi.',
            // 'discount_end.date' => 'Ngày kết thúc khuyến mãi không hợp lệ.',
            'quantity.required' => 'Vui lòng nhập số lượng sản phẩm.',
            'quantity.numeric' => 'Số lượng sản phẩm phải là số.',
            'description_summary.required' => 'Vui lòng nhập mô tả ngắn.',
            'description_detail.required' => 'Vui lòng nhập mô tả chi tiết.',
            'brand_id.required' => 'Vui lòng chọn thương hiệu.',
            'category_id.required' => 'Vui lòng chọn danh mục.',
            'image_main.required' => 'Vui lòng chọn ảnh sản phẩm.',
            'status.required' => 'Vui lòng chọn trạng thái.',
        ];
    }
}
