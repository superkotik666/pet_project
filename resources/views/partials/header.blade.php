<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">Простой учебный сайт</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    @auth("web")
                        <a class="nav-link" href="{{ route("logout") }}">Выйти</a>
                    @endauth
                    <a class="nav-link" >Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" >О нас</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" >Контакты</a>
                </li>
            </ul>
        </div>
    </div>
</nav>



