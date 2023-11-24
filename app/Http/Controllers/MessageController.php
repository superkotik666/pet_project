<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class MessageController extends Controller
{
    public function send(Request $request)
    {
        $user = Auth::user();

        $this->validate($request, [
            'receiver_id' => 'required|exists:users,id',
            'content' => 'required|string|max:255',
        ]);

        Message::create([
            'sender_id' => $user->id,
            'receiver_id' => $request->input('receiver_id'),
            'content' => $request->input('content'),
        ]);

        return redirect()->back();
    }
}
