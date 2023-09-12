@extends('layout.admin')

@section('title',  isset($post) ? "Редактировать статью ID {$post->id}" : 'Добавить статью')

@section('content')
    <div>
        <h3>{{ isset($post) ? "Редактировать статью ID {$post->id}" : 'Добавить статью' }}</h3>



            <form enctype="multipart/form-data"  method="POST" action="{{ isset($post) ? route("admin.posts.update", $post->id) : route("admin.posts.store") }}">
                @csrf

                @if(isset($post))
                    @method('PUT')
                @endif

                <input name="title" type="text"  @error('title')  @enderror" placeholder="Название" value="{{ $post->title ?? '' }}" />

                @error('title')
                <p>{{ $message }}</p>
                @enderror

                <input name="preview" type="text"  @error('preview') @enderror" placeholder="Кратко" value="{{ $post->preview ?? '' }}" />

                @error('preview')
                <p class="text-red-500">{{ $message }}</p>
                @enderror

                <input name="description" type="text" @error('description')  @enderror" placeholder="Описание" value="{{ $post->description ?? '' }}" />

                @error('description')
                <p class="text-red-500">{{ $message }}</p>
                @enderror

                @if(isset($post) && $post->thumbnail)
                    <div>
                        <img class="h-64 w-64" src="{{ $post->thumbnail }}">
                    </div>
                @endif

                <input name="thumbnail" type="file" class="w-full h-12" placeholder="Обложка" />

                @error('thumbnail')
                <p>{{ $message }}</p>
                @enderror

                <button type="submit" >Сохранить</button>
            </form>
        </div>

@endsection
