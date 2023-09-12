@extends('layout.admin')

@section('title', 'Статьи')

@section('content')

        <h3>Статьи</h3>

        <div>
            <a href="{{ route("admin.posts.create") }}" >Добавить</a>
        </div>

        <div>
            <div>
                <div>
                    <table>
                        <thead>
                        <tr>
                            <th>
                                Заголовок</th>
                            <th></th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td>
                                    <div>{{ $post->title }}</div>
                                </td>

                                <td>
                                    <a href="{{ route("admin.posts.edit", $post->id) }}" >Редактировать</a>

                                    <form action="{{ route("admin.posts.destroy", $post->id) }}" method="POST">
                                        @csrf

                                        @method('DELETE')

                                        <button type="submit" >Удалить</button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    {{ $posts->links() }}
                </div>
            </div>
        </div>

@endsection
