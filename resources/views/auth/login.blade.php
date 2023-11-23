
@extends('layout.app')

@section('title', 'Авторизация')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">


                <form method="POST" action="{{ route('login_process') }}" class="mt-4">
                    @csrf

                    <div class="container" style="margin-top: 200px; width: 1300px; position: relative; right: 320px;">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div class="border border-primary rounded p-4">
                                    <h1>Вход</h1>

                                    <form method="POST" action="{{ route('login_process') }}" class="mt-4">
                                        @csrf

                                        <div class="mb-3">
                                            <input name="email" type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" />

                                            @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Пароль" />

                                            @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>

                                        <p>
                                        <div>
                                            <a href="{{ route('forgot') }}">Забыли пароль?</a>
                                        </div>
                                        </p>

                                        <div>
                                            <a href="{{ route('register') }}">Регистрация</a>
                                        </div>

                                        <button type="submit" class="btn btn-primary mt-3">Войти</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
