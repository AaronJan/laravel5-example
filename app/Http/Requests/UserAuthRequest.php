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
            'name.required'            => 'The :attribute field is required.',
            'name.between'             => 'The :attribute must be between :min and :max characters.',

            'password.required'        => 'The :attribute field is required.',
            'password.between'         => 'The :attribute must be between :min and :max characters.',
        ];
    }

}
