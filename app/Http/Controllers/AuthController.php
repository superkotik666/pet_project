<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPassword;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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

    public function login(Request $request)
    {
        $data = $request->validate([

            "email" => ["required", "email", "string"],
            "password" => ["required"]
        ]);

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


    public function showForgotForm()
    {
        return view("auth.forgot");
    }


    public function forgot(Request $request){

        $data = $request->validate(
            ["email" => ["required", "email", "string", "exists:users"],]);

        $user = User::where(["email" => $data["email"]])->first(); // выбираем пользователя, у которого имэйл совпадает с введенным в форму

        $password = uniqid(); // мы взяли уникальную последовательнось символов
        $user->password =bcrypt($password); //захешировали эту последовательность
        $user->save(); // и присвоили данное значение выбранному юзеру, выполнив замену пороля в таблице, сохранив результат

        Mail::to($user)->send(new ForgotPassword($password)); // отправляем выбранному юзеру новый пароль на имэйл

        return redirect(route('home'));


    }

}
