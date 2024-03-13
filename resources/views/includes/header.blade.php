<div class="header-top">
    <div class="container">
        <ul class="flex">
            <a href="#">
                <li>dc power visa®</li>
            </a>
            <a href="#">
                <li>additional dc sites</li>
            </a>
        </ul>
    </div>
</div>
<div class="header-bottom flex container">
    <div class="left">
        <a href="{{ route('home') }}"><img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo DC Comics"></a>
    </div>
    <div class="center">
        <ul class="flex">
            <li>
                <a href="{{ route('characters') }}">characters</a>
            </li>
            <li>
                <a href="{{ route('comics.index') }}">comics</a>
            </li>
            <li>
                <a href="{{ route('movies') }}">movies</a>
            </li>
            <li>
                <a href="{{ route('tv') }}">tv</a>
            </li>
            <li>
                <a href="{{ route('games') }}">games</a>
            </li>
            <li>
                <a href="{{ route('collectibles') }}">collectibles</a>
            </li>
            <li>
                <a href="{{ route('videos') }}">videos</a>
            </li>
            <li>
                <a href="{{ route('fans') }}">fans</a>
            </li>
            <li>
                <a href="{{ route('news') }}">news</a>
            </li>
            <li>
                <a href="{{ route('shop') }}">shop</a>
            </li>
        </ul>
    </div>
    <div class="right">
        <form action="">
            <input type="text" placeholder="Search">
            <i class="bi bi-search"></i>
        </form>
    </div>
</div>
