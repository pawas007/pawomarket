<ul>
    <li>
        <a href="{{route('home')}}"
           class=" main-menu-link @activeroute('home')">Home
        </a>
    </li>
    <li>
        <a href="{{route('shop')}}"
           class=" main-menu-link @activeroute('shop')">
            Shop
        </a>
    </li>
    <li>
        <a href="{{route('blog')}}"
           class=" main-menu-link @activeroute('blog')">
            Blog
        </a>
    </li>
    <li class="has-dropdown">
        <a href="#"
           class=" main-menu-link  @activeroute('about') @activeroute('contacts') @activeroute('faq') @activeroute('privacy-policy')">
            About Us

            <i class="fa fa-angle-down"></i>
        </a>

        <ul class="sub-menu">
            <li>
                <a href="{{route('about')}}"
                   class=" main-menu-link @activeroute('about')">
                    About us
                </a>
            </li>
            <li>
                <a href="{{route('contacts')}}"
                   class=" main-menu-link @activeroute('contacts')">
                    Contact us
                </a>
            </li>
            <li>
                <a href="{{route('faq')}}"
                   class=" main-menu-link @activeroute('faq')">
                    Faq
                </a>
            </li>
            <li>
                <a href="{{route('privacy-policy')}}"
                   class=" main-menu-link @activeroute('privacy-policy')">
                    Privacy policy
                </a>
            </li>
        </ul>
    </li>

</ul>
