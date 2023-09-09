@extends('layout.app')

@section('title', 'ЛИЧНЫЙ КАБИНЕТ')

@section('content')

@include('partials.header')

@endsection

<div>Вы успешно авторизированы!</div>
<p>
<div>
    <a href="{{ route("posts.index") }}" >Перейти к новостям</a>
</div>
</p>

<div>
    <a href="{{ route("messages") }}" >Перейти в личные сообщения</a>
</div>
