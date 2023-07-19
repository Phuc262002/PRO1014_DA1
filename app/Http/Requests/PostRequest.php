<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PostRequest extends FormRequest
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
        $postId = $this->route('post');

        return [
            'title' => 'required|max:255',
            'slug' => 'required|max:255',
            'slug' => [
                'required',
                Rule::unique('posts')->ignore($postId),
                'max:255',
            ],
            'description' => 'required',
            'content' => 'required',
            'img_post' => 'required',
            'category_id' => 'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     */

    public function messages(): array
    {
        return [
            'title.required' => 'Vui lòng nhập tên tiêu đề Blog.',
            'title.unique' => 'Tên tiêu đề Blog đã tồn tại.',
            'description.required' => 'Vui lòng nhập mô tả Blog.',
            'slug.required' => 'Vui lòng nhập slug.',
            'slug.unique' => 'Slug đã tồn tại.',
            'content.required' => 'Vui lòng nhập nội dung Blog.',
            'img_post.required' => 'Vui lòng thêm hình ảnh.',
            'category_id.required' => 'Vui lòng chọn thể loại.',
        ];
    }
}
