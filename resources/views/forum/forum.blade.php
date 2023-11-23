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

        <h2>Комментарии:</h2>
        <ul>
            @foreach ($comments as $comment)
                <li>{{ $comment->text }}</li>
            @endforeach
        </ul>
    </div>
@endsection
