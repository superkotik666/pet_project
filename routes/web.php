<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotificationsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/





Route::get('/', [\App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login_process', [\App\Http\Controllers\AuthController::class, 'login'])->name('login_process');

Route::get('/register', [\App\Http\Controllers\RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register_process', [\App\Http\Controllers\RegisterController::class, 'register'])->name('register_process');

Route::middleware(['authorized'])->group(function () {
    Route::get('/my_page', [\App\Http\Controllers\PageController::class, 'showPage'])->name('page');


    Route::post('/messages/send', [\App\Http\Controllers\MessageController::class, 'send'])->name('messages.send');

    Route::get('/posts', [\App\Http\Controllers\PostController::class, 'index'])->name('posts.index');
    Route::get('/posts/{id}', [\App\Http\Controllers\PostController::class, 'show'])->name('posts.show');
    Route::post('/posts/comment/{id}', [\App\Http\Controllers\PostController::class, 'makeComment'])->name('comment');


    Route::get('/forum', [\App\Http\Controllers\ForumController::class, 'showPage'])->name('forum');
    Route::post('/forum/send', [\App\Http\Controllers\ForumController::class, 'send'])->name('forum.send');


});
Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

Route::get('/not_auth', [\App\Http\Controllers\AuthController::class, 'notauth'])->name('notauth');

Route::get('/mail_form', [\App\Http\Controllers\IndexController::class, 'showMailForm'])->name('contacts');
Route::post('/mail_form_process', [\App\Http\Controllers\IndexController::class, 'sendMailForm'])->name('contact_form_process');

Route::get('/forgot', [\App\Http\Controllers\AuthController::class, 'showForgotForm'])->name('forgot');
Route::post('/forgot_process', [\App\Http\Controllers\AuthController::class, 'forgot'])->name('forgot_process');



