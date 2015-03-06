<?php namespace App\Services;

use App\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function validator(array $data)
    {
        $messages = [
            'name.required'            => '用户名为必填项目.',
            'name.between'             => '用户名长度为:min到:max个字符.',

            'password.required'        => '密码为必填项目.',
            'password.between'         => '密码长度为:min到:max个字符.',

            'password_repeat.required' => '请重复输入一次密码.',
            'password_repeat.same'     => '两次输入的密码不一致.',
        ];

        return Validator::make($data, [
            'name'            => 'required|between:4,16',
            'password'        => 'required|between:6,20',
            'password_repeat' => 'required|same:password',
        ], $messages);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     *
     * @return User
     */
    public function create(array $data)
    {
        return User::create([
            'name'     => $data['name'],
            'password' => bcrypt($data['password']),
        ]);
    }

}
