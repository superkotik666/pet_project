<div>

    <a href="{{ route("home") }}"> На главную </a><br>

        @auth("web")
            <a href="{{ route("logout") }}" >Выйти</a>
        @endauth

        @guest("web")
            <a href="{{ route("login") }}" >Войти</a>
        @endguest



</div>
