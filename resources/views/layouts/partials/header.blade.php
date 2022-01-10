<!-- Preloader Area -->
<div id="preloader">
    <div id="status">
        <img src="/assets/img/loader.gif" alt="img">
    </div>
</div>
<!-- Start Header Area -->
<header class="header-section d-none d-xl-block">
    <div class="header-wrapper">
        <div class="header-bottom header-bottom-color--golden section-fluid sticky-header sticky-color--golden">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex align-items-center justify-content-between">
                        <!-- Start Header Logo -->
                        <div class="header-logo">
                            <div class="logo">
                                <a href="{{route('home')}}"><img src="/assets/img/logo.png" alt="logo" /></a>
                            </div>
                        </div>
                        <!-- End Header Logo -->

                        <!-- Start Header Main Menu -->
                        <div class="main-menu menu-color--black menu-hover-color--golden">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="{{route('home')}}" class=" main-menu-link {{ Request::routeIs('home') ? 'active' : '' }}">Home
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('blog')}}" class=" main-menu-link {{ Request::routeIs('blog') ? 'active' : '' }}">
                                            Blog
                                        </a>
                                    </li>
                                    @guest
                                        <li><a href="{{ route('login') }}">Log in</a></li>
                                    @endguest
                                    @auth

                                        <li>  <a href="{{ route('dashboard') }}">My account </a></li>
                                    @endauth
                                </ul>
                            </nav>
                        </div>
                        <!-- End Header Main Menu Start -->

                        <!-- Start Header Action Link -->
                        <ul class="header-action-link action-color--black action-hover-color--golden">
                            <li>
                                <a href="#offcanvas-wishlish" class="offcanvas-toggle">
                                    <i class="far fa-heart"></i>
                                    <span class="item-count">3</span>
                                </a>
                            </li>
                            <li>
                                <a href="#offcanvas-add-cart" class="offcanvas-toggle">
                                    <i class="fas fa-shopping-bag"></i>
                                    <span class="item-count">4</span>
                                </a>
                            </li>
                            <li>
                                <a href="#search" class="search_width">
                                    <img src="/assets/img/svg/search.svg" alt="img" />
                                </a>
                            </li>
                            <li>
                                <a href="#offcanvas-about" class="offacnvas offside-about offcanvas-toggle">
                                    <i class="fas fa-bars"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- End Header Action Link -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Start Header Area -->

<!-- Start Mobile Header -->
<div class="mobile-header sticky-header sticky-color--golden mobile-header-bg-color--golden section-fluid d-lg-block d-xl-none">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex align-items-center justify-content-between">
                <!-- Start Mobile Left Side -->
                <div class="mobile-header-left">
                    <ul class="mobile-menu-logo">
                        <li>
                            <a href="{{route('home')}}">
                                <div class="logo">
                                    <img src="/assets/img/logo.png" alt="logo" />
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End Mobile Left Side -->

                <!-- Start Mobile Right Side -->
                <div class="mobile-right-side">
                    <ul class="header-action-link action-color--black action-hover-color--golden">
                        <li>
                            <a href="#search" class="search_width">
                                <img src="/assets/img/svg/search.svg" alt="img" />
                            </a>
                        </li>
                        <li>
                            <a href="#offcanvas-wishlish" class="offcanvas-toggle">
                                <i class="far fa-heart"></i>
                                <span class="item-count">3</span>
                            </a>
                        </li>
                        <li>
                            <a href="#offcanvas-add-cart" class="offcanvas-toggle">
                                <i class="fas fa-shopping-bag"></i>
                                <span class="item-count">4</span>
                            </a>
                        </li>
                        <li>
                            <a href="#mobile-menu-offcanvas" class="offcanvas-toggle offside-menu">
                                <i class="fas fa-bars"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End Mobile Right Side -->
            </div>
        </div>
    </div>
</div>
<!-- End Mobile Header -->

<!--  Start Offcanvas Mobile Menu Section -->
<div id="mobile-menu-offcanvas" class="offcanvas offcanvas-rightside offcanvas-mobile-menu-section">
    <!-- Start Offcanvas Header -->
    <div class="offcanvas-header text-right">
        <button class="offcanvas-close">
            <img src="/assets/img/svg/cancel.svg" alt="icon" />
        </button>
    </div>
    <!-- End Offcanvas Header -->
    <!-- Start Offcanvas Mobile Menu Wrapper -->
    <div class="offcanvas-mobile-menu-wrapper">
        <!-- Start Mobile Menu  -->
        <div class="mobile-menu-bottom">
            <!-- Start Mobile Menu Nav -->
            <div class="offcanvas-menu">
                <ul>
                    <li>
                        <a href="#" class="active"><span>Home</span></a>
                        <ul class="mobile-sub-menu">
                            <li><a class="active" href="index.html">Fashion</a></li>
                            <li><a href="furniture.html">Furniture</a></li>
                            <li><a href="electronics.html">Electronics</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><span>Shop</span></a>
                        <ul class="mobile-sub-menu">
                            <li>
                                <a href="#">Shop Layout</a>
                                <ul class="mobile-sub-menu">
                                    <li><a href="shop.html">Shop Four Grid</a></li>
                                    <li><a href="shop-2.html">Shop Three Grid</a></li>
                                    <li><a href="shop-3.html">Shop List View</a></li>
                                    <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                    <li> <a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="mobile-sub-menu">
                            <li>
                                <a href="#">Shop Pages</a>
                                <ul class="mobile-sub-menu">
                                    <li><a href="cart.html">Cart View One</a></li>
                                    <li><a href="cart-2.html">Cart View Two </a></li>
                                    <li><a href="empty-cart.html">Empty Cart</a></li>
                                    <li><a href="checkout.html">Checkout View One</a></li>
                                    <li><a href="checkout-2.html">Checkout View Two</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="compare.html">Compare</a></li>
                                    <li><a href="order-tracking.html">Order Tracking</a></li>
                                    <li><a href="order-completed.html">Order Complete</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="mobile-sub-menu">
                            <li>
                                <a href="#">Product Single</a>
                                <ul class="mobile-sub-menu">
                                    <li><a href="product-single.html">Product Single</a></li>
                                    <li><a href="product-single-2.html">Product Single Two</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><span>Feature</span></a>
                        <ul class="mobile-sub-menu">
                            <li><a href="product-hover.html">Product Hover</a></li>
                            <li><a href="email-order-success.html">Order Success</a></li>
                            <li><a href="email-template-one.html">Email Template 1</a></li>
                            <li><a href="email-template-two.html">Email Template 2</a></li>
                            <li><a href="email-template-three.html">Email Template 3</a></li>
                            <li><a href="lookbook.html">LookBook</a></li>
                            <li><a href="invoice-1.html">Invoice 1</a></li>
                            <li><a href="invoice-2.html">Invoice 2</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><span>Blogs</span></a>
                        <ul class="mobile-sub-menu">
                            <li><a href="blog-gride-1.html">Blog Grid View One</a></li>
                            <li><a href="blog-gride-2.html">Blog Grid View Two</a></li>
                            <li><a href="blog-list.html">Blog List View</a></li>
                            <li><a href="blog-single.html">Blog Single View One </a></li>
                            <li><a href="blog-single-2.html">Blog Single View TWo</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><span>Pages</span></a>
                        <ul class="mobile-sub-menu">
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="vendor.html">Vendor</a></li>
                            <li><a href="my-account.html">My Account</a></li>
                            <li><a href="contact-us.html">Contact Us One</a></li>
                            <li><a href="contact-us-2.html">Contact Us Two</a></li>
                            <li><a href="coming-Soon.html">Coming Soon</a></li>
                            <li><a href="faq.html">Frequently Questions</a></li>
                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                            <li><a href="404.html">404 Page</a></li>
                            <li><a href="login.html">Login</a></li>

                        </ul>
                    </li>
                    @guest
                        <li><a href="{{ route('login') }}">Log in</a></li>
                    @endguest
                    @auth

                        <li>  <a href="{{ route('dashboard') }}">My account </a></li>
                    @endauth
                </ul>
            </div>
            <!-- End Mobile Menu Nav -->
        </div>
        <!-- End Mobile Menu -->

        <!-- Start Mobile contact Info -->
        <div class="mobile-contact-info">
            <div class="logo">
                <a href="index.html"><img src="/assets/img/logo-white.png" alt="img" /></a>
            </div>

            <address class="address">
                <span>Address: Your address goes here.</span>
                <span>Call Us: 0123456789, 0123456789</span>
                <span>Email: demo@example.com</span>
            </address>

            <ul class="social-link">
                <li>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </li>
            </ul>

            @guest
                <ul class="user-link">

                    <li><a href="{{ route('login') }}">Log in</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>

                </ul>
            @endguest
            @auth
                <div class="user_account">
                    <a href="{{ route('dashboard') }}">
                        @if(auth()->user()->avatar)
                            <img src="{{auth()->user()->avatar}}" alt="avatar">
                        @endif



                        {{auth()->user()->name}}</a>




                </div>
            @endauth
        </div>
        <!-- End Mobile contact Info -->
    </div>
    <!-- End Offcanvas Mobile Menu Wrapper -->
</div>
<!-- ...:::: End Offcanvas Mobile Menu Section :::... -->

<!-- Start OffcanvasSect Mobile Menu ion -->
<div id="offcanvas-about" class="offcanvas offcanvas-rightside offcanvas-mobile-about-section">
    <!-- Start Offcanvas Header -->
    <div class="offcanvas-header text-right">
        <button class="offcanvas-close">
            <img src="/assets/img/svg/cancel.svg" alt="icon" />
        </button>
    </div>
    <!-- End Offcanvas Header -->
    <!-- Start Offcanvas Mobile Menu Wrapper -->
    <!-- Start Mobile contact Info -->
    <div class="mobile-contact-info">
        <address class="address">
            <img src="/assets/img/logo-white.png" alt="logo" />
            <span>Address: Your address goes here.</span>
            <span>Call Us: 0123456789, 0123456789</span>
            <span>Email: demo@example.com</span>
        </address>

        <ul class="social-link">
            <li>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </li>
            <li>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </li>
            <li>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </li>
        </ul>
        @guest
        <ul class="user-link">

                <li><a href="{{ route('login') }}">Log in</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>

        </ul>
        @endguest
        @auth
            <div class="user_account">
                <a href="{{ route('dashboard') }}">
                                    @if(auth()->user()->avatar)
                                        <img src="{{auth()->user()->avatar}}" alt="avatar">
                                    @endif



                    {{auth()->user()->name}}</a>




            </div>
        @endauth
    </div>
    <!-- End Mobile contact Info -->
</div>
<!-- ...:::: End Offcanvas Mobile Menu Section :::... -->

<!-- Start Offcanvas Addcart Section -->
<div id="offcanvas-add-cart" class="offcanvas offcanvas-rightside offcanvas-add-cart-section">
    <!-- Start Offcanvas Header -->
    <div class="offcanvas-header text-right">
        <button class="offcanvas-close">
            <img src="/assets/img/svg/cancel.svg" alt="icon" />
        </button>
    </div>
    <!-- End Offcanvas Header -->

    <!-- Start  Offcanvas Addcart Wrapper -->
    <div class="offcanvas-add-cart-wrapper">
        <h4 class="offcanvas-title">Shopping Cart</h4>
        <ul class="offcanvas-cart">
            <li class="offcanvas-cart-item-single">
                <div class="offcanvas-cart-item-block">
                    <a href="#" class="offcanvas-cart-item-image-link">
                        <img src="/assets/img/product-image/product1.png" alt="img" class="offcanvas-cart-image" />
                    </a>
                    <div class="offcanvas-cart-item-content">
                        <a href="#" class="offcanvas-cart-item-link">Car Wheel</a>
                        <div class="offcanvas-cart-item-details">
                            <span class="offcanvas-cart-item-details-quantity">1 x </span>
                            <span class="offcanvas-cart-item-details-price">$49.00</span>
                        </div>
                    </div>
                </div>
                <div class="offcanvas-cart-item-delete text-right">
                    <a href="#" class="offcanvas-cart-item-delete"><i class="far fa-trash-alt"></i></a>
                </div>
            </li>
            <li class="offcanvas-cart-item-single">
                <div class="offcanvas-cart-item-block">
                    <a href="#" class="offcanvas-cart-item-image-link">
                        <img src="/assets/img/product-image/product2.png" alt="img" class="offcanvas-cart-image" />
                    </a>
                    <div class="offcanvas-cart-item-content">
                        <a href="#" class="offcanvas-cart-item-link">Car Vails</a>
                        <div class="offcanvas-cart-item-details">
                            <span class="offcanvas-cart-item-details-quantity">3 x </span>
                            <span class="offcanvas-cart-item-details-price">$500.00</span>
                        </div>
                    </div>
                </div>
                <div class="offcanvas-cart-item-delete text-right">
                    <a href="#" class="offcanvas-cart-item-delete">
                        <i class="far fa-trash-alt"></i>
                    </a>
                </div>
            </li>
            <li class="offcanvas-cart-item-single">
                <div class="offcanvas-cart-item-block">
                    <a href="#" class="offcanvas-cart-item-image-link">
                        <img src="/assets/img/product-image/product3.png" alt="img" class="offcanvas-cart-image" />
                    </a>
                    <div class="offcanvas-cart-item-content">
                        <a href="#" class="offcanvas-cart-item-link">Shock Absorber</a>
                        <div class="offcanvas-cart-item-details">
                            <span class="offcanvas-cart-item-details-quantity">1 x </span>
                            <span class="offcanvas-cart-item-details-price">$350.00</span>
                        </div>
                    </div>
                </div>
                <div class="offcanvas-cart-item-delete text-right">
                    <a href="#" class="offcanvas-cart-item-delete"><i class="far fa-trash-alt"></i></a>
                </div>
            </li>
            <li class="offcanvas-cart-item-single">
                <div class="offcanvas-cart-item-block">
                    <a href="#" class="offcanvas-cart-item-image-link">
                        <img src="/assets/img/product-image/product4.png" alt="img" class="offcanvas-cart-image" />
                    </a>
                    <div class="offcanvas-cart-item-content">
                        <a href="#" class="offcanvas-cart-item-link">Woman Dress</a>
                        <div class="offcanvas-cart-item-details">
                            <span class="offcanvas-cart-item-details-quantity">1 x </span>
                            <span class="offcanvas-cart-item-details-price">$250.00</span>
                        </div>
                    </div>
                </div>
                <div class="offcanvas-cart-item-delete text-right">
                    <a href="#" class="offcanvas-cart-item-delete"><i class="far fa-trash-alt"></i></a>
                </div>
            </li>
        </ul>
        <div class="offcanvas-cart-total-price">
            <span class="offcanvas-cart-total-price-text">Subtotal:</span>
            <span class="offcanvas-cart-total-price-value">$170.00</span>
        </div>
        <ul class="offcanvas-cart-action-button">
            <li>
                <a href="cart.html" class="theme-btn-one btn-black-overlay btn_md">View Cart</a>
            </li>
            <li>
                <a href="checkout.html" class="theme-btn-one btn-black-overlay btn_md">Checkout</a>
            </li>
        </ul>
    </div>
    <!-- End  Offcanvas Addcart Wrapper -->
</div>
<!-- End  Offcanvas Addcart Section -->

<!-- Start Offcanvas Mobile Menu Section -->
<div id="offcanvas-wishlish" class="offcanvas offcanvas-rightside offcanvas-add-cart-section">
    <!-- Start Offcanvas Header -->
    <div class="offcanvas-header text-right">
        <button class="offcanvas-close">
            <img src="/assets/img/svg/cancel.svg" alt="icon" />
        </button>
    </div>
    <!-- ENd Offcanvas Header -->

    <!-- Start Offcanvas Mobile Menu Wrapper -->
    <div class="offcanvas-wishlist-wrapper">
        <h4 class="offcanvas-title">Wishlist</h4>
        <ul class="offcanvas-wishlist">
            <li class="offcanvas-wishlist-item-single">
                <div class="offcanvas-wishlist-item-block">
                    <a href="#" class="offcanvas-wishlist-item-image-link">
                        <img src="/assets/img/product-image/product5.png" alt="img" class="offcanvas-wishlist-image" />
                    </a>
                    <div class="offcanvas-wishlist-item-content">
                        <a href="#" class="offcanvas-wishlist-item-link">Car Wheel</a>
                        <div class="offcanvas-wishlist-item-details">
                                <span class="offcanvas-wishlist-item-details-quantity">1 x
                </span>
                            <span class="offcanvas-wishlist-item-details-price">$49.00</span>
                        </div>
                    </div>
                </div>
                <div class="offcanvas-wishlist-item-delete text-right">
                    <a href="#" class="offcanvas-wishlist-item-delete"><i class="far fa-trash-alt"></i></a>
                </div>
            </li>
            <li class="offcanvas-wishlist-item-single">
                <div class="offcanvas-wishlist-item-block">
                    <a href="#" class="offcanvas-wishlist-item-image-link">
                        <img src="/assets/img/product-image/product6.png" alt="img" class="offcanvas-wishlist-image" />
                    </a>
                    <div class="offcanvas-wishlist-item-content">
                        <a href="#" class="offcanvas-wishlist-item-link">Car Vails</a>
                        <div class="offcanvas-wishlist-item-details">
                                <span class="offcanvas-wishlist-item-details-quantity">3 x
                </span>
                            <span class="offcanvas-wishlist-item-details-price">$500.00</span>
                        </div>
                    </div>
                </div>
                <div class="offcanvas-wishlist-item-delete text-right">
                    <a href="#" class="offcanvas-wishlist-item-delete"><i class="far fa-trash-alt"></i></a>
                </div>
            </li>
            <li class="offcanvas-wishlist-item-single">
                <div class="offcanvas-wishlist-item-block">
                    <a href="#" class="offcanvas-wishlist-item-image-link">
                        <img src="/assets/img/product-image/product7.png" alt="img" class="offcanvas-wishlist-image" />
                    </a>
                    <div class="offcanvas-wishlist-item-content">
                        <a href="#" class="offcanvas-wishlist-item-link">Shock Absorber</a>
                        <div class="offcanvas-wishlist-item-details">
                                <span class="offcanvas-wishlist-item-details-quantity">1 x
                </span>
                            <span class="offcanvas-wishlist-item-details-price">$350.00</span>
                        </div>
                    </div>
                </div>
                <div class="offcanvas-wishlist-item-delete text-right">
                    <a href="#" class="offcanvas-wishlist-item-delete"><i class="far fa-trash-alt"></i></a>
                </div>
            </li>
        </ul>
        <ul class="offcanvas-wishlist-action-button">
            <li>
                <a href="wishlist.html" class="theme-btn-one btn-black-overlay btn_md">View wishlist</a>
            </li>
        </ul>
    </div>
    <!-- End Offcanvas Mobile Menu Wrapper -->
</div>
<!-- End Offcanvas Mobile Menu Section -->

<!-- Start Offcanvas Search Bar Section -->
<div id="search" class="search-modal">
    <button type="button" class="close">
        <img src="/assets/img/svg/cancel.svg" alt="icon" />
    </button>
    <form>
        <input type="search" placeholder="type keyword(s) here" />
        <button type="submit" class="btn btn-lg btn-golden">Search</button>
    </form>
</div>
<!-- End Offcanvas Search Bar Section -->

<!-- Offcanvas Overlay -->
<div class="offcanvas-overlay"></div>
