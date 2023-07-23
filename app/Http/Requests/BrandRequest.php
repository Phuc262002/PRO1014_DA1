<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;


use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
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
        $brandID = $this->route('brand');

        return [
            
            'name' => [
                'required',
                Rule::unique('brands')->ignore($brandID),
                'max:255',
            ],
            'slug' => [
                'required',
                Rule::unique('brands')->ignore($brandID),
                'max:255',
            ],
            'nation' => 'required',
            'image_brand' => 'required|max:255',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'Vui lòng nhập tên thương hiệu.',
            'name.unique' => 'Tên thương hiệu đã tồn tại.',
            'nation.required' => 'Vui lòng nhập quốc gia.',
            'image_brand.required' => 'Vui lòng chọn hình ảnh sản phẩm.',
            'image_brand.max' => 'Độ dài tối đa của hình ảnh là 255 ký tự.',
            'slug.required' => 'Vui lòng nhập slug.',
            'slug.unique' => 'slug đã tồn tại.',
            
        ];
    }
}
