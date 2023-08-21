@extends('layout.app')

@section('title', 'Главная страничка')

@section('content')

    @foreach($posts as $post)
    @include('partials.header')
<div>
    <img src="/storage/posts/{{$post->thumbnail}}">
</div>

    WELCOME DARLING
        <h2>{{$post->title}}</h2>
        <h3>{{$post->description}}</h3>

    @endforeach
@endsection

