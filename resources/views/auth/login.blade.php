
@extends('layout.app')

@section('title', 'Авторизация')

@section('content')

            <h1>Вход</h1>

            <form method="POST" action="{{ route("login_process") }}" >
                @csrf

                <input name="email" type="text"  @error('email')  @enderror" placeholder="Email" />

                @error('email')
                <p>{{ $message }}</p>
                @enderror

                <input name="password" type="password"  @error('password')  @enderror placeholder="Пароль" />

                @error('password')
                <p class="text-red-500">{{ $message }}</p>
                @enderror



                <div>
                    <a href="{{ route("register") }}" >Регистрация</a>
                </div>

                <button type="submit" >Войти</button>
            </form>
        </div>
    </div>
@endsection
