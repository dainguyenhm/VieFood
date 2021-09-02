<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required|unique:products,name,'.$this->id,
            'unit_price' => 'required',
            'description' => 'required',
            'image' => 'mimes:jpeg,jpg,png,',
            'sub_category_id' => 'required',
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
            'name.required' => 'Vui lòng nhập tên sản phẩm',
            'name.unique' => 'Sản phẩm đã tồn tại',
            'unit_price.required' => 'Vui lòng nhập giá sản phẩm',
            'description.required' => 'Vui lòng nhập mô tả của sản phẩm',
            'image.mimes' => 'Chỉ được upload file có đuôi: jpeg,jpg,png',
            'sub_category_id.required' => 'Vui lòng chọn danh mục của sản phẩm',
        ];
    }
}
