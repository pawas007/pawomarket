<ul>
    <li>
        <a href="{{route('home')}}"
           class=" main-menu-link {{ Request::routeIs('home') ? 'active' : '' }}">Home
        </a>
    </li>
    <li>
        <a href="{{route('blog')}}"
           class=" main-menu-link {{ Request::routeIs('blog') ? 'active' : '' }}">
            Blog
        </a>
    </li>

    @guest
        <li><a href="{{ route('login') }}">Log in</a></li>
    @endguest
    @auth

        <li><a href="{{ route('dashboard') }}">My account </a></li>
    @endauth
</ul>
