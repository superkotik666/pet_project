<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthFormRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function showLoginForm()
    {

        return view("auth.login");
    }

    public function showRegisterForm()
    {
        return view("auth.register");
    }

    public function login(AuthFormRequest $request)
    {
        $data = $request->validated(); // Получить проверенные входные данные

        if(auth("web")->attempt($data)) {
            return view("page");
        }

        return redirect(route("login"))->withErrors(["email" => "Пользователь не найден, либо данные введены не правильно"]);
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            "name" => ["required", "string"],
            "email" => ["required", "email", "string", "unique:users,email"],
            "password" => ["required", "confirmed"]
        ]);

        $user = User::create([
            "name" => $data['name'],
            "email" => $data['email'],
            "password" => bcrypt($data["password"])
        ]);

        if($user) {
            //event(new Registered($user));

            auth("web")->login($user);
        }

        return redirect(route("page"));
    }

    public function logout()
    {
        auth("web")->logout();

        return redirect(route("home"));
    }
    public function notauth()
    {
        return view('auth.notauth');
    }

}
