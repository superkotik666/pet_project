<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterFormRequest;
use App\Models\User;


class RegisterController extends Controller
{
    public function showRegisterForm()
    {
        return view("auth.register");
    }

    public function register(RegisterFormRequest $request)
    {
        $data = $request->validated();

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
}
