<style>
    .nav-link:hover {
        text-decoration: underline;
        color: blue;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNav">
            <img src="{{ asset('img/dc-logo.png') }}" alt="DC Logo" width="50" height="50">
            <ul class="navbar-nav">
                <li class="nav-item {{ Request::is('characters') ? 'active' : '' }}">
                    <a class="nav-link" href="/characters">CHARACTERS</a>
                </li>
                <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                    <a class="nav-link" href="/">COMICS</a>
                </li>
                <li class="nav-item {{ Request::is('movies') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('pagina2') }}">MOVIES</a>
                </li>
                <li class="nav-item {{ Request::is('tv') ? 'active' : '' }}">
                    <a class="nav-link" href="/tv">TV</a>
                </li>
                <li class="nav-item {{ Request::is('games') ? 'active' : '' }}">
                    <a class="nav-link" href="/games">GAMES</a>
                </li>
                <li class="nav-item {{ Request::is('collectibles') ? 'active' : '' }}">
                    <a class="nav-link" href="/collectibles">COLLECTIBLES</a>
                </li>
                <li class="nav-item {{ Request::is('videos') ? 'active' : '' }}">
                    <a class="nav-link" href="/videos">VIDEOS</a>
                </li>
                <li class="nav-item {{ Request::is('fans') ? 'active' : '' }}">
                    <a class="nav-link" href="/fans">FANS</a>
                </li>
                <li class="nav-item {{ Request::is('news') ? 'active' : '' }}">
                    <a class="nav-link" href="/news">NEWS</a>
                </li>
                <li class="nav-item {{ Request::is('shop') ? 'active' : '' }}">
                    <a class="nav-link" href="/shop">SHOP</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
