<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">Простой учебный сайт </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    @auth("web")
                        <a class="nav-link" href="{{ route("page") }}">Мой профиль</a>
                    @endauth
                        <a class="nav-link" href="{{ route("posts.index") }}" >Новости</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="openModalBtn" href="#"> Личные сообщения</a>
                    <a class="nav-link" href="{{ route("forum") }}" >Форум</a>
                </li>

                <li class="nav-item" style="right:auto ">
                    <a class="nav-link" href="{{ route("logout") }}">Выйти</a>
                </li>
            </ul>
        </div>
    </div>
</nav>



{{--href="{{ route("messages") }}"--}}
