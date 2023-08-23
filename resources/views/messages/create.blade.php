
@extends('layout.app')

@section('content')
    <div class="container">
        <h1>Send Message</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form method="POST" action="{{ route('messages.send') }}">
            @csrf
            <label for="receiver_id">To:</label>
            <select name="receiver_id" id="receiver_id">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
            <br>
            <label for="content">Message:</label>
            <textarea name="content" id="content" rows="4"></textarea>
            <br>
            <button type="submit">Send</button>
        </form>
    </div>
@endsection
