<?php

namespace App\Http\Requests\Authentication;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email'=> 'bail|required|email',
            'password'=> 'required'
        ];
    }
    public function messages() 
    {
       return [
        'email' => 'Bạn chưa nhập :attribute',
        'password' => 'Bạn chưa nhập  :attribute'
       ];
    }

    public function attributes() 
    {
        return [
            'email' => 'Email',
            'password' => 'Password',
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if ($validator->errors()->count() > 0){
                $validator->errors()->add('msg', 'Tên đăng nhập hoặc mật khẩu không chính xác');
            }
            });
        }
}
