<?php
namespace App\Http\Controllers\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Carbon\Carbon;
use Illuminate\Http\Request;

class RegisterController extends Controller {

    public function index()
    {
        return view('user.register');
    }

    public function create()
    {
        $input = Request::all();

        $timeNow = Carbon::now();


    }
}
