<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAdminRequest extends FormRequest
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
        return [
            'email' => 'required|email|unique:users,email',
            'passwordAdmin' => 'required | min:5 | max: 16',
            'repasswordAdmin' => 'same:passwordAdmin',
            'address'  => 'required',
            'full_name' => 'required'
        ];
    }
}
