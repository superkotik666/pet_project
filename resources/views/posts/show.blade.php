
@extends('layout.app')

@section('title', $post->title)

@section('content')
    @include('partials.header')

    <div>


                <div>
                    <img src="/storage/posts/{{ $post->thumbnail }}" >
                </div>

                    <h2>{{ $post->title }}</h2>
                    <p>
                        {!! $post->description !!}
                    </p>
                </div>



            <div>
                <section>
                    <form method="POST" action="{{ route("comment", $post->id) }}">
                        @csrf

                        <textarea name="text"  @error('text')  @enderror" placeholder="Ваш комментарий..." spellcheck="false"></textarea>

                        @error('text')
                        <p>{{ $message }}</p>
                        @enderror

                        <button type="submit" >Написать</button>
                    </form>


                        @foreach($post->comments as $comment)

                                    <h3>{{ $comment->user->name }}</h3>


                                <p>{{ $comment->text }} </p>

                        @endforeach

                </section>


@endsection
