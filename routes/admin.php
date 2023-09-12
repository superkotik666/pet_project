<?php


use Illuminate\Support\Facades\Route;


Route::middleware(['guest:admin'])->group(function (){
    Route::get('login', [\App\Http\Controllers\Admin\AdmAuthController::class, 'index'])->name('login');
    Route::post('login_process', [\App\Http\Controllers\Admin\AdmAuthController::class, 'login'])->name('login_process');
});


Route::middleware(['auth:admin'])->group(function () {
    Route::resource('posts', \App\Http\Controllers\Admin\AdmPostController::class);
    Route::get('logout', [\App\Http\Controllers\Admin\AdmAuthController::class, 'logout'])->name('logout');

});


