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
            'username' => 'required|min:6',
            'email' => 'bail|required|email|unique:users',
            'password' => 'required|min:6|max:20',
            'password_confirm' => 'required|same:password',
        ];
    }

    public function messages()
    {
        return [
            'email' => ':attributes ' . __('msg.msg-wrong-data-type'),
            'min' => ':attribute ' . __('msg.msg-smaller') . ' :min ' . __('msg.characters'),
            'max' => ':attribute ' . __('msg.msg-bigger') . ' :max ' . __('msg.characters'),
            'same' => ':attribute ' . __('msg.msg-not-true'),
            'unique' => ':attribute ' . __('msg.msg-wrong-data-type')
        ];
    }

    public function attributes()
    {
        return [
            'username' => __('input_name.username'),
            'email' =>  __('input_name.email'),
            'password' => __('input_name.password'),
            'password_confirm' => __('input_name.password-confirm'),
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if ($validator->errors()->count() > 0) {
                $validator->errors()->add('msg', '');
            }
        });
    }
}
