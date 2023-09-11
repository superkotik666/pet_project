<?php


use Illuminate\Support\Facades\Route;


Route::resource('posts' , \App\Http\Controllers\Admin\AdmPostController::class);
