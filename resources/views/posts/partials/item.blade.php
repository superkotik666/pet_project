
<div>
      <div>
            <a href="{{ route("posts.show", $post->id) }}">
                <img src="{{ $post->thumbnail }}">
            </a>
        </div>

            <h2>{{ $post->title }}</h2>
<p>
    {!! $post->preview !!}
</p>
</div>
</div>
</div>