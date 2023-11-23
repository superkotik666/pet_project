<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentForm;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index (){
        $posts = Post::query()->orderBy("created_at" , "DESC")->paginate(3);
        return view('posts.index', [
            "posts" => $posts,
        ]);
    }
    public function show($id)
    {
        $post = Post::findOrFail($id); // находит выбранный пост
        return view('posts.show', [
            "post" => $post,
        ]);
    }


    public function makeComment($id, CommentForm $request){
        $post = Post::findOrFail($id); // находит выбранный пост
        $post->comments()->create($request->validated()); // добавление комментария
        return redirect(route("posts.show", $id)); //перезагрузка страницы для добавления комментария
    }

}
