<?php

namespace App\Http\Controllers;

use App\Models\Forum_comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ForumController extends Controller
{
    public function showPage()
    {
        $comments = Forum_comment::with('user')->get();
        return view('forum.forum', compact('comments'));
    }



    public function send(Request $request)
    {

        $comment = new Forum_comment;
        $comment->text = $request->input('comment');
        $user = Auth::user();
        $comment->user_id = $user->id;
        $comment->user_name = $user->name;
        $comment->save();
        return redirect()->back();
    }
}

