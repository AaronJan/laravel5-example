<?php
namespace App\Http\Controllers\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Carbon\Carbon;
use Illuminate\Http\Request;

class RegisterController extends Controller {

    public function getRegister()
    {
        return view('user.register');
    }

    public function postRegister()
    {
        return view('user.register');
    }

}
