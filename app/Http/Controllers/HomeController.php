<?php

namespace App\Http\Controllers;

use App\Messages;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function list() {
        $messages = Messages::all();
        return view('list', [
            'messages' => $messages,
        ]);
    }

    public function detail($id) {
        $message = Messages::findOrFail($id);
        return view('detail', [
            'message' => $message,
        ]);
    }

}
