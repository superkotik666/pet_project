<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PostFormRequest;
use Illuminate\Http\Request;
use App\Models\Post;

class AdmPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::orderBy("created_at", "DESC")->paginate(3);

        return view("admin.posts.index", [
            "posts" => $posts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.posts.create', []);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostFormRequest $request)
    {
        $post = Post::create($request->validated());

        return redirect(route('admin.posts.index'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view("admin.posts.create", [
            "post" => $post,
        ]);
    }


    /**
     * Update the specified resource in storage.
     */


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::destroy($id);

        return redirect(route('admin.posts.index'));
    }
}
