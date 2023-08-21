@extends('layout.app')

@section('title', 'Статьи')

@section('content')
    @include('partials.header')
    @foreach($posts as $post)

        <div>
            <img src="/storage/posts/{{$post->thumbnail}}">
        </div>


        <h2>{{$post->title}}</h2>
        <h3>{{$post->description}}</h3>

    @endforeach
    {{$posts->links()}} // пагинация
@endsection
