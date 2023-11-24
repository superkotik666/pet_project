@extends('layout.app')

@section('title', 'Статьи')

@section('content')
    @include('partials.header')

    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mt-10 mb-20">
        @foreach($posts as $post)
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <a href="{{ route("posts.show", $post->id) }}" class="text-decoration-none">
                            <img src="{{ $post->thumbnail }}" class="card-img" alt="{{ $post->title }}">
                        </a>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h2 class="card-title">{{ $post->title }}</h2>
                            <hr class="my-2"> <!-- Добавляем горизонтальную черту между заголовком и описанием -->
                            <p class="card-text">{!! $post->preview !!}</p>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach

        {{ $posts->links() }}
    </div>
@endsection
