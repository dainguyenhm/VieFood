<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'title' => 'required|unique:posts,title,'.$this->id,
            'content' => 'required',
        ];
        return $rules;
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'Vui lòng nhập tiêu đề tin tức',
            'title.unique' => 'Tiêu đề tin tức đã tồn tại',
            'content.required' => 'Vui lòng nhập nội dung tin tức',
        ];
    }
}
