<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Message;
use Illuminate\Http\Request;
use App\Http\Requests\MessageRequest;
use Auth;

class MessageController extends Controller {

	public function store(MessageRequest $request)
    {
        $message = new Message($request->all());

        Auth::user()->messages()->save($message);

        return redirect('/');
    }

}
