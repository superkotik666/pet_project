@extends('layout.app')

@section('title', 'Статьи')

@section('content')
    @include('partials.header')
    @foreach($posts as $post)
    <div class="container">
        <div class="row">

            <div class="col-md-8">
                <div class="card mb-3">
                    <img src="news1.jpg" class="card-img-top" alt="Изображение">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{!! $post->preview !!}</p>
                        <a href="{{ route("posts.show", $post->id) }}" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!-- Ваша своя пагинация -->
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        @for ($i = 1; $i <= $posts->lastPage(); $i++)
                            <li class="page-item {{ $i == $posts->currentPage() ? 'active' : '' }}">
                                <a class="page-link" href="{{ $posts->url($i) }}">{{ $i }}</a>
                            </li>
                        @endfor
                    </ul>
                </nav>
            </div>
        </div>
    </div>

@endsection







