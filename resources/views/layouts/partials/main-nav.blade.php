<ul>
    <li>
        <a href="{{route('home')}}"
           class=" main-menu-link {{ Request::routeIs('home') ? 'active' : '' }}">Home
        </a>
    </li>
    <li>
        <a href="{{route('shop')}}"
           class=" main-menu-link {{ Request::routeIs('shop') ? 'active' : '' }}">
            Shop
        </a>
    </li>


    <li>
        <a href="{{route('blog')}}"
           class=" main-menu-link {{ Request::routeIs('blog') ? 'active' : '' }}">
            Blog
        </a>
    </li>
    <li class="has-dropdown">
        <a href="#"
           class=" main-menu-link {{ Request::routeIs('about') ? 'active' : '' }}">
            About Us

            <i class="fa fa-angle-down"></i>
        </a>

        <ul class="sub-menu">
            <li>
                <a href="{{route('about')}}"
                   class=" main-menu-link {{ Request::routeIs('about') ? 'active' : '' }}">
                    About us
                </a>
            </li>
            <li>
                <a href="{{route('contacts')}}"
                   class=" main-menu-link {{ Request::routeIs('contacts') ? 'active' : '' }}">
                    Contact us
                </a>
            </li>
            <li>
                <a href="{{route('faq')}}"
                   class=" main-menu-link {{ Request::routeIs('faq') ? 'active' : '' }}">
                    Faq
                </a>
            </li>
            <li>
                <a href="{{route('privacy-policy')}}"
                   class=" main-menu-link {{ Request::routeIs('privacy-policy') ? 'active' : '' }}">
                    Privacy policy
                </a>
            </li>


        </ul>
    </li>
    @guest
        <li><a href="{{ route('login') }}">Log in</a></li>
    @endguest
    @auth

        <li><a href="{{ route('dashboard') }}">My account </a></li>
    @endauth
</ul>
