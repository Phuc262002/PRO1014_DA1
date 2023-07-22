<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookServiceRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'book_date' => 'required',
            'book_time' => 'required',
            'service_id' => 'required',
            'pet_name'  => 'required',
        ];
    }
    public function messages(): array
    {
        return [

            'book_date.required' => 'Vui lòng chọn ngày.',
            
            'book_time.required' => 'Vui lòng chọn giờ.',
        
            'service_id.required' => 'Vui lòng chọn dịch vụ',

            'pet_name.required' => 'Vui lòng nhập tên thú cưng',

        ];
    }
}
