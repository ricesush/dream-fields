<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function create(Request $request)
    {

        $message = new Message;
        $message->name = $request->name;
        $message->contactNum = $request->contactNum;
        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->message = $request->message;

        $message->save();
        return redirect()->route('inquire')->with('success', "new message added!");   
    }
}
