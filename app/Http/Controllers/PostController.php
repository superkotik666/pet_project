<?php

namespace App\Http\Controllers;

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


}
