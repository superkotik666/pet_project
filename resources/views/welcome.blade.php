WELCOME DARLING

@extends('layout.app')

@section('title', 'Главная страничка')

@section('content')
    @include('partials.header')
    @foreach($posts as $post)

<div>
    <img src="/storage/posts/{{$post->thumbnail}}">
</div>


        <h2>{{$post->title}}</h2>
        <h3>{{$post->description}}</h3>

    @endforeach
@endsection

