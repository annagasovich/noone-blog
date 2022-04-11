<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('main') }}">На главную</a>
            </li>
            <li class="nav-item {{ (request()->is('articles*')) ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('articles') }}">Каталог статей</a>
            </li>
        </ul>
    </div>
</nav>
</div>
