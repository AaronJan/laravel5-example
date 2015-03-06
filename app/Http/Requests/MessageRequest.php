<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Auth\Guard;

class MessageRequest extends FormRequest {

    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->auth->check();
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
            'content' => 'required|between:1,500',
        ];

        return $rules;
    }

    public function messages()
    {
        return [
            'content.required' => '请填写留言.',
            'content.between'  => '留言长度为:min到:max个字符.',
        ];
    }

}
