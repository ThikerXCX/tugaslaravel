<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <div class="navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @foreach($navbars as $navbar => $url)
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ $url }}">{{
                        $navbar
                    }}</a>
                </li>
                @endforeach
            </ul>
            <ul class="navbar-nav ms-auto">
                @guest
                <li class="nav-item">
                    <a
                        class="nav-link"
                        aria-current="page"
                        href="{{ route('register') }}"
                        >Register</a
                    >
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link"
                        aria-current="page"
                        href="{{ route('login') }}"
                        >Login</a
                    >
                </li>
                @else
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        id="navbarDropdown"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        {{ Auth::user()->name }}
                    </a>
                    <ul
                        class="dropdown-menu dropdown-menu-end"
                        aria-labelledby="navbarDropdown"
                    >
                        <li><a class="dropdown-item" href="{{ route('dashboard') }}">Dasboard</a></li>
                        <li>
                            <a class="dropdown-item" href="#">Another action</a>
                        </li>
                        <li><hr class="dropdown-divider" /></li>
                        <li>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
