<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class PageController extends Controller
{
    public function showPage()
    {
        $users = User::where('id', '!=', Auth::id())->get();
        $user = Auth::user();
        $messages = Message::where('receiver_id', $user->id)
            ->orWhere('sender_id', $user->id)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('page', compact('messages' , 'users'));
    }



}
