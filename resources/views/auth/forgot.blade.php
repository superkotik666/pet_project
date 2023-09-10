@extends('layout.app')

@section('title', 'Восстановление пароля')

@section('content')

            <h1>Восстановление пароля</h1>

            <form  method="POST" action="{{ route("forgot_process") }}">
                @csrf

                <input name="email" type="text"  @error('email') border-red-500 @enderror" placeholder="Email" />

                @error('email')
                <p>{{ $message }}</p>
                @enderror
              <p>
                <div>
                    <a href="{{ route("login") }}" >Вспомнил пароль</a>
                </div> </p>

                <button type="submit" >Восстановить</button>
            </form>

@endsection
