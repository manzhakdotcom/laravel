<?php

namespace App\Http\Controllers;

use App\Messages;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function create(Request $request) {
        $message = new Messages();
        $message->title = $request->title;
        $message->content = $request->content;
        $message->save();
        return redirect('/')->with('success', 'Add message success.');
    }
}
