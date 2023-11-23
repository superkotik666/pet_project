<?php

namespace App\Http\Controllers;

use App\Models\Forum_comment;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function showPage()
    {
        $comments = Forum_comment::all();
        return view('forum.forum', compact('comments'));
    }

    public function send(Request $request)
    {
        // Здесь вы можете добавить логику, связанную с обработкой отправки сообщений
        $comment = new Forum_comment;
        $comment->text = $request->input('comment');
        $comment->save();

        return redirect()->back(); // Перенаправляем пользователя обратно на страницу с формой
    }
}

