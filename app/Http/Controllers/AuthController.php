<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthFormRequest;


class AuthController extends Controller
{

    public function showLoginForm()
    {

        return view("auth.login");
    }



    public function login(AuthFormRequest $request)
    {
        $data = $request->validated(); // Получить проверенные входные данные

        if(auth("web")->attempt($data)) {
            return view("page");
        }

        return redirect(route("login"))->withErrors(["email" => "Пользователь не найден, либо данные введены не правильно"]);
    }



    public function logout()
    {
        auth("web")->logout();

        return redirect(route("login"));
    }
    public function notauth()
    {
        return view('auth.notauth');
    }

}
