@extends('layout.app')

@section('title', 'ЛИЧНЫЙ КАБИНЕТ')
@include('partials.header')
@section('content')



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


<div>
    <a href="{{ route("forum") }}" >Перейти к форуму</a>
</div>
