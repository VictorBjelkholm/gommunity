<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
    $messages = Message::all();
    return View::make('hello')->with('messages', $messages);
});

Route::post('messages', function(){
    $message = Input::get('message');

    $error = 'Message must be at least 6 characters long';
    if(strlen($message) > 5) {
        $messageObject = new Message;
        $messageObject->content = $message;
        $messageObject->save();
        $error = 'Successfully posted your message!';
    }

    $messages = Message::all();
	return View::make('hello')->with('error', $error)->with('messages', $messages);
});