@extends('layout.app')

@section('content')
    <div class="container">
        <h1>Форум</h1>
        <form action="{{ route('forum.send') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="comment">Комментарий:</label>
                <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Отправить</button>
        </form>

        <h2>Чат:</h2>
        <ul class="list-group">
            @foreach ($comments as $comment)
                <li class="list-group-item">{{$comment->user->name}} написал: {{ $comment->text }} в {{$comment->created_at->format('H:i d F Y')}}</li>
            @endforeach
        </ul>
    </div>
@endsection
