<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \App\Http\Requests\UserRegisterRequest;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller {

    /**
     * 注册页面
     *
     * @return \Illuminate\View\View
     */
	public function getRegister ()
    {
        return view('user.register');
    }

    /**
     * @param \App\Http\Requests\UserRegisterRequest $request
     */
    public function postRegister (UserRegisterRequest $request)
    {
        User::create($request->all());

        redirect()->action('WelcomeController@index');
    }







}
