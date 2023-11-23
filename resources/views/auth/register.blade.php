@extends('layout.app')

@section('title', 'Регистрация')

@section('content')

    <form method="POST" action="{{ route("register_process") }}" style="position: relative; left: 40px ; margin-top: 40px">
        @csrf
        <p>СТРАНИЦА РЕГИСТРАЦИИ</p>
        <p>Придумайте имя</p>
        <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Имя" style="width: 400px">
        @error('name')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror
        <p>Введите адрес электронной почты</p>
        <input name="email" type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" style="width: 400px">
        @error('email')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror
        <p>Придумайте пароль</p>
        <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" style="width: 400px">
        @error('password')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror
        <p>Повторите введенный пароль</p>
        <input name="password_confirmation" type="password" class="form-control" style="width: 400px">
        <div>
            <a href="{{ route("login") }}">Есть аккаунт?</a>
        </div>
        <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
    </form>
@endsection
