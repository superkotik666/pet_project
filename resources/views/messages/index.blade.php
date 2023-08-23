@extends('layout.app')

@section('content')




    <div class="container">
        <h1>Messages</h1>
        <ul>
            @foreach ($messages as $message)
                <li>
                    From: {{ $message->sender->name }}<br>
                    To: {{ $message->receiver->name }}<br>
                    {{ $message->content }}
                </li>
            @endforeach
        </ul>
    </div>
@endsection
