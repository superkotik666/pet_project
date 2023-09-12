@extends('layout.app')

@section('title', 'Авторизация')

@section('content')
    <div>
        <div>
            <h1>Вход для админа</h1>

            <form method="POST" action="{{ route("admin.login_process") }}" >
                @csrf

                <input name="email" type="text"  @error('email') @enderror" placeholder="Email" />

                @error('email')
                <p>{{ $message }}</p>
                @enderror

                <input name="password" type="password"  @error('password')  @enderror" placeholder="Пароль" />

                @error('password')
                <p>{{ $message }}</p>
                @enderror

                <button type="submit">Войти</button>
            </form>
        </div>
    </div>
@endsection
