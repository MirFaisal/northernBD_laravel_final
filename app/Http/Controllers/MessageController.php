<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    //
    function store(Request $request)
    {
        // dd($request->all());
        $message = new Message();
        $message->full_name = $request->name;
        $message->email = $request->_replyto;
        $message->phone = $request->telephone;
        $message->message = $request->message;
        $message->save();

        return redirect()->back();
    }
}
