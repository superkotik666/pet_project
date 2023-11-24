@extends('layout.app')

@section('title', 'ЛИЧНЫЙ КАБИНЕТ')
@include('partials.header')
@section('content')
@include('partials.modal')


<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            Ваш профиль
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="username">Имя пользователя:</label>
                <input type="text" class="form-control" id="username" value="{{$user->name}}" readonly>
            </div>
            <div class="form-group">
                <label for="userId">ID пользователя:</label>
                <input type="text" class="form-control" id="userId" value="{{$user->id}}" readonly>
            </div>
            <div class="form-group">
                <label for="email">Эл. почта:</label>
                <input type="email" class="form-control" id="email" value="{{$user->email}}" readonly>
            </div>
            <div class="form-group">
                <label for="creationDate">Дата создания профиля:</label>
                <input type="text" class="form-control" id="creationDate" value="{{$user->created_at}}" readonly>
            </div>
        </div>
    </div>
</div>



 @include('cookie')

@endsection





