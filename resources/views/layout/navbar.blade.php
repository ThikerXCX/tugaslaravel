<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @foreach($navbars as $navbar => $url)
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ $url }}">{{ $navbar }}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
