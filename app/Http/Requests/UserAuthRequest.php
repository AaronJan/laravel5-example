<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class UserAuthRequest extends FormRequest {

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
		$rules = [];

        $rules = [
            'name'            => 'required|between:4,16',
            'password'        => 'required|between:6,20',
        ];

        return $rules;
	}

    public function messages()
    {
        return [
            'name.required'            => '用户名为必填项目.',
            'name.between'             => '用户名长度为:min到:max个字符.',

            'password.required'        => '密码为必填项目.',
            'password.between'         => '密码长度为:min到:max个字符.',
        ];
    }

}
