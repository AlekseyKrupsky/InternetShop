<nav class="navbar navbar-expand-md navbar-dark  bg-dark">
    <a class="navbar-brand" href="{{route('welcome')}}">Главная</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin')}}">Админка</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Категории</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="#">Велосипеды</a>
                    <a class="dropdown-item" href="#">Мотоциклы</a>
                    <a class="dropdown-item" href="#">Автомобили</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('adm_about')}}">О нас</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" method="get" action="{{route('search')}}">
            {{csrf_field()}}
            <input class="form-control mr-sm-2" name="search" type="text" placeholder="Ищу..." aria-label="Search" required>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Искать</button>
        </form>
    </div>
</nav>