<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorRequest extends FormRequest
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
            'name' => 'required| string| max:191',
            'email' => 'required| string| email| unique:users| max:191',
            'password' => 'required| min:8| max:191',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前を入力してください',
            'name.max' => '名前は:max文字以内で入力してください',

            'email.required' => 'メールアドレスを入力してください',
            'email.unique' => 'そのメールアドレスは使用されています',

            'password.required' => 'パスワードを入力してください',
        ];
    }
}
