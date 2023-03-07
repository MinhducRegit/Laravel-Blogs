<?php

namespace App\Http\Requests\Authentication;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|string|min:6',
            'email'=> 'bail|required|email|unique:users',
            'password'=> 'required|min:6|max:20',
            'password_confirm' => 'required|same:password',
            'gender'=> 'required',

        ];
    }

    public function messages() 
    {
        return [
         'string' => ':attribute phải là kiểu chữ',
         'min' => ':attribute phải lớn hơn :min kí tự',
         'max' => ':attribute phải nhỏ hơn :max kí tự',
         'same' => ':attribute chưa đúng ',
         'unique' => ':attribute đã tồn tại trên hệ thống'
        ];
     }
 
     public function attributes()
    {
         return [
             'name' => 'Tên',
             'email' => 'Email',
             'password' => 'Mật Khẩu',
             'password_confirm' => 'Mật Khẩu nhập lại',
             'gender' => 'Địa chỉ',
             ];
     }
 
     public function withValidator($validator)
     {
     $validator->after(function ($validator) {
         if ($validator->errors()->count() > 0){
             $validator->errors()->add('msg', 'Dữ liệu bạn nhập chưa đúng, vui lòng xem lại');
         }
         });
     }
}
