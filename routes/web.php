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

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('home');



Route::get('/login', [\App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login_process', [\App\Http\Controllers\AuthController::class, 'login'])->name('login_process');

Route::get('/register', [\App\Http\Controllers\AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register_process', [\App\Http\Controllers\AuthController::class, 'register'])->name('register_process');

Route::middleware(['authorized'])->group(function () {
    Route::get('/your_page', [\App\Http\Controllers\PageController::class, 'showPage'])->name('page');
    Route::get('/posts', [\App\Http\Controllers\PostController::class, 'index'])->name('posts.index');

    Route::get('/messages', [\App\Http\Controllers\MessageController::class, 'index']);
    Route::get('/messages/create', [\App\Http\Controllers\MessageController::class, 'create']);
    Route::post('/messages/send', [\App\Http\Controllers\MessageController::class, 'send'])->name('messages.send');

    Route::get('/notifications', [NotificationsController::class, 'index'])->name('notifications.index');
    Route::post('/notifications/mark-as-read/{id}', [NotificationsController::class, 'markAsRead'])->name('notifications.markAsRead');

});
Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

Route::get('/not_auth', [\App\Http\Controllers\AuthController::class, 'notauth'])->name('notauth');






