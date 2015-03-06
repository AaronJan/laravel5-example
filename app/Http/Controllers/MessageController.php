<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Message;
use Illuminate\Http\Request;
use App\Http\Requests\MessageRequest;

class MessageController extends Controller {

	public function store(MessageRequest $request)
    {
        Message::create($request->all());

        return redirect('/');
    }

}
