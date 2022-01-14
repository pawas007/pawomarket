@push('scripts')
    <script src="{{ asset('assets/js/theme/timer.js') }}" defer></script>
@endpush
@section('title', 'Home')
@extends('layouts.app')
@section('pages')

    <!-- Banner Area -->
    <section id="banner_one">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner_text_one">
                        <h1 class="wow flipInX" data-wow-duration="3.0s" data-wow-delay=".3s">Live For <span
                                class="wow flipInX" data-wow-duration="2.0s" data-wow-delay=".5s">Fashion</span></h1>
                        <h3>Save Up To 50%</h3>
                        <a href="shop-3.html" class="theme-btn-one bg-black btn_md">Shop Now</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero_img">
                        <img src="/assets/img/common/man.png" alt="img" class="wow slideInRight"
                             data-wow-duration="3.0s" data-wow-delay=".3s">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product variation -->
    <section id="product_variation_one" class="pt-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="product_variation_one_boxed img-zoom-hover">
                        <img src="/assets/img/offer/woman.png" alt="img"/>
                        <div class="product_var_one_text">
                            <h4 class="color_one">Outerwear</h4>
                            <h2>New</h2>
                            <h4>Collection</h4>
                            <a href="shop-2.html" class="theme-btn-one bg-black btn_sm">Shop Now</a>
                        </div>
                    </div>
                    <div class="product_variation_one_boxed img-zoom-hover">
                        <img src="/assets/img/offer/woman1.png" alt="img"/>
                        <div class="product_var_one_text">
                            <h4 class="color_one">Summer</h4>
                            <h2>Hot</h2>
                            <h4>Collection</h4>
                            <a href="shop.html" class="theme-btn-one bg-black btn_sm">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product_variation_one_boxed img-zoom-hover">
                        <img src="/assets/img/offer/bag.png" alt="img"/>
                        <div class="product_var_one_text_center">
                            <h2 class="color_one">10% Offer</h2>
                            <h4>No Selected Models</h4>
                            <a href="shop-3.html" class="theme-btn-one bg-black btn_sm">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product_variation_one_boxed img-zoom-hover">
                        <img src="/assets/img/offer/woman4.png" alt="img"/>
                        <div class="product_var_one_text">
                            <h2>New</h2>
                            <h4 class="color_one">Arrivals</h4>
                            <a href="shop-2.html" class="theme-btn-one bg-black btn_sm">Shop Now</a>
                        </div>
                    </div>
                    <div class="product_variation_one_boxed img-zoom-hover">
                        <img src="/assets/img/offer/kids.png" alt="img"/>
                        <div class="product_var_one_text">
                            <h2>Hot</h2>
                            <h4 class="color_one">Offer</h4>
                            <a href="shop.html" class="theme-btn-one bg-black btn_sm">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hot Product Area -->
    <section id="hot_Product_area" class="ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center_heading">
                        <h2>Hot Product</h2>
                        <p>Mauris luctus nisi sapien tristique dignissim ornare</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- <div id="isotope-filters">
                        <button class="btn active" data-filter="*">
              <span>New Arrival</span>
            </button>
                        <button class="btn" data-filter=".logo">
              <span>Trending</span>
            </button>
                        <button class="btn" data-filter=".web">
              <span>Best Sellers</span>
            </button>
                        <button class="btn" data-filter=".mobile">
              <span>Featured</span>
            </button>
                        <button class="btn" data-filter=".desktop">
              <span>On sall</span>
            </button>
                    </div> -->
                    <div class="tabs_center_button">
                        <ul class="nav nav-tabs">
                            <li><a data-toggle="tab" href="#new_arrival" class="active">New Arrival</a></li>
                            <li><a data-toggle="tab" href="#trending">Trending</a></li>
                            <li><a data-toggle="tab" href="#best_sellers">Best Sellers</a></li>
                            <li><a data-toggle="tab" href="#featured">Featured</a></li>
                            <li><a data-toggle="tab" href="#on_sall">On sall</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="tabs_el_wrapper">
                        <div class="tab-content">
                            <div id="new_arrival" class="tab-pane fade show in active">
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="product_wrappers_one">
                                            <div class="thumb">
                                                <a href="product-single.html" class="image">
                                                    <img src="/assets/img/product-image/product1.png" alt="Product"/>
                                                    <img class="hover-image"
                                                         src="/assets/img/product-image/product2.png"
                                                         alt="Product"/>
                                                </a>
                                                <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="far fa-heart"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                       title="Quick view" data-toggle="modal"
                                                       data-target="#exampleModalCenter"><i
                                                            class="fas fa-expand"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="fas fa-exchange-alt"></i></a>
                                                </div>
                                                <a href="#offcanvas-add-cart" title="Add To Cart"
                                                   class="add-to-cart offcanvas-toggle">Add To
                                                    Cart</a>
                                            </div>
                                            <div class="content">
                                                <h5 class="title">
                                                    <a href="product-single.html">Blue Dress For Woman</a>
                                                </h5>
                                                <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="product_wrappers_one">
                                            <div class="thumb">
                                                <a href="product-single.html" class="image">
                                                    <img src="/assets/img/product-image/product3.png" alt="Product"/>
                                                    <img class="hover-image"
                                                         src="/assets/img/product-image/product4.png"
                                                         alt="Product"/>
                                                </a>
                                                <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="far fa-heart"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                       title="Quick view" data-toggle="modal"
                                                       data-target="#exampleModalCenter"><i
                                                            class="fas fa-expand"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="fas fa-exchange-alt"></i></a>
                                                </div>
                                                <a href="#offcanvas-add-cart" title="Add To Cart"
                                                   class="add-to-cart offcanvas-toggle">Add To
                                                    Cart</a>
                                            </div>
                                            <div class="content">
                                                <h5 class="title">
                                                    <a href="product-single.html">Woman Full Sliv Dresss</a>
                                                </h5>
                                                <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="product_wrappers_one">
                                            <div class="thumb">
                                                <a href="product-single.html" class="image">
                                                    <img src="/assets/img/product-image/product5.png" alt="Product"/>
                                                    <img class="hover-image"
                                                         src="/assets/img/product-image/product6.png"
                                                         alt="Product"/>
                                                </a>
                                                <span class="badges">
                                                <span class="hot">Hot</span>
                                            </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="far fa-heart"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                       title="Quick view" data-toggle="modal"
                                                       data-target="#exampleModalCenter"><i
                                                            class="fas fa-expand"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="fas fa-exchange-alt"></i></a>
                                                </div>
                                                <a href="#offcanvas-add-cart" title="Add To Cart"
                                                   class="add-to-cart offcanvas-toggle">Add To
                                                    Cart</a>
                                            </div>
                                            <div class="content">
                                                <h5 class="title">
                                                    <a href="product-single.html">Blue Dress For Woman </a>
                                                </h5>
                                                <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="product_wrappers_one">
                                            <div class="thumb">
                                                <a href="product-single.html" class="image">
                                                    <img src="/assets/img/product-image/product7.png" alt="Product"/>
                                                    <img class="hover-image"
                                                         src="/assets/img/product-image/product8.png"
                                                         alt="Product"/>
                                                </a>
                                                <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="far fa-heart"></i></a>
                                                    <a href="#!" class="action quickview" data-link-action="quickview"
                                                       title="Quick view" data-toggle="modal"
                                                       data-target="#exampleModalCenter">
                                                        <i class="fas fa-expand"></i>
                                                    </a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="fas fa-exchange-alt"></i></a>
                                                </div>
                                                <a href="#offcanvas-add-cart" title="Add To Cart"
                                                   class="add-to-cart offcanvas-toggle">Add To
                                                    Cart</a>
                                            </div>
                                            <div class="content">
                                                <h5 class="title">
                                                    <a href="product-single.html">Woman Full Sliv Dresss</a>
                                                </h5>
                                                <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="product_wrappers_one">
                                            <div class="thumb">
                                                <a href="product-single.html" class="image">
                                                    <img src="/assets/img/product-image/product9.png" alt="Product"/>
                                                    <img class="hover-image"
                                                         src="/assets/img/product-image/product10.png"
                                                         alt="Product"/>
                                                </a>
                                                <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="far fa-heart"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                       title="Quick view" data-toggle="modal"
                                                       data-target="#exampleModalCenter"><i
                                                            class="fas fa-expand"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="fas fa-exchange-alt"></i></a>
                                                </div>
                                                <a href="#offcanvas-add-cart" title="Add To Cart"
                                                   class="add-to-cart offcanvas-toggle">Add To
                                                    Cart</a>
                                            </div>
                                            <div class="content">
                                                <h5 class="title">
                                                    <a href="product-single.html">Woman Full Sliv Dress</a>
                                                </h5>
                                                <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="product_wrappers_one">
                                            <div class="thumb">
                                                <a href="product-single.html" class="image">
                                                    <img src="/assets/img/product-image/product11.png" alt="Product"/>
                                                    <img class="hover-image"
                                                         src="/assets/img/product-image/product12.png"
                                                         alt="Product"/>
                                                </a>
                                                <span class="badges">
                                            <span class="hot">Hot</span>
                                        </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="far fa-heart"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                       title="Quick view" data-toggle="modal"
                                                       data-target="#exampleModalCenter"><i
                                                            class="fas fa-expand"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="fas fa-exchange-alt"></i></a>
                                                </div>
                                                <a href="#offcanvas-add-cart" title="Add To Cart"
                                                   class="add-to-cart offcanvas-toggle">Add To
                                                    Cart</a>
                                            </div>
                                            <div class="content">
                                                <h5 class="title">
                                                    <a href="product-single.html">Black T-Shirt For Woman
                                                    </a>
                                                </h5>
                                                <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="product_wrappers_one">
                                            <div class="thumb">
                                                <a href="product-single.html" class="image">
                                                    <img src="/assets/img/product-image/product13.png" alt="Product"/>
                                                    <img class="hover-image"
                                                         src="/assets/img/product-image/product14.png"
                                                         alt="Product"/>
                                                </a>
                                                <span class="badges">
                                            <span class="new">New</span>
                                        </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="far fa-heart"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                       title="Quick view" data-toggle="modal"
                                                       data-target="#exampleModalCenter"><i
                                                            class="fas fa-expand"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="fas fa-exchange-alt"></i></a>
                                                </div>
                                                <a href="#offcanvas-add-cart" title="Add To Cart"
                                                   class="add-to-cart offcanvas-toggle">Add To
                                                    Cart</a>
                                            </div>
                                            <div class="content">
                                                <h5 class="title">
                                                    <a href="product-single.html">Blue Dress For Woman</a>
                                                </h5>
                                                <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="product_wrappers_one">
                                            <div class="thumb">
                                                <a href="product-single.html" class="image">
                                                    <img src="/assets/img/product-image/product5.png" alt="Product"/>
                                                    <img class="hover-image"
                                                         src="/assets/img/product-image/product6.png"
                                                         alt="Product"/>
                                                </a>
                                                <span class="badges">
                                            <span class="new">New</span>
                                        </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="far fa-heart"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                       title="Quick view" data-toggle="modal"
                                                       data-target="#exampleModalCenter"><i
                                                            class="fas fa-expand"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="fas fa-exchange-alt"></i></a>
                                                </div>
                                                <a href="#offcanvas-add-cart" title="Add To Cart"
                                                   class="add-to-cart offcanvas-toggle">Add To
                                                    Cart</a>
                                            </div>
                                            <div class="content">
                                                <h5 class="title">
                                                    <a href="product-single.html">Woman Full Sliv Dresss</a>
                                                </h5>
                                                <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="trending" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="product_wrappers_one">
                                            <div class="thumb">
                                                <a href="product-single.html" class="image">
                                                    <img src="/assets/img/product-image/product1.png" alt="Product"/>
                                                    <img class="hover-image"
                                                         src="/assets/img/product-image/product2.png"
                                                         alt="Product"/>
                                                </a>
                                                <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="far fa-heart"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                       title="Quick view" data-toggle="modal"
                                                       data-target="#exampleModalCenter"><i
                                                            class="fas fa-expand"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="fas fa-exchange-alt"></i></a>
                                                </div>
                                                <a href="#offcanvas-add-cart" title="Add To Cart"
                                                   class="add-to-cart offcanvas-toggle">Add To
                                                    Cart</a>
                                            </div>
                                            <div class="content">
                                                <h5 class="title">
                                                    <a href="product-single.html">Blue Dress For Woman</a>
                                                </h5>
                                                <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="product_wrappers_one">
                                            <div class="thumb">
                                                <a href="product-single.html" class="image">
                                                    <img src="/assets/img/product-image/product3.png" alt="Product"/>
                                                    <img class="hover-image"
                                                         src="/assets/img/product-image/product4.png"
                                                         alt="Product"/>
                                                </a>
                                                <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="far fa-heart"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                       title="Quick view" data-toggle="modal"
                                                       data-target="#exampleModalCenter"><i
                                                            class="fas fa-expand"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="fas fa-exchange-alt"></i></a>
                                                </div>
                                                <a href="#offcanvas-add-cart" title="Add To Cart"
                                                   class="add-to-cart offcanvas-toggle">Add To
                                                    Cart</a>
                                            </div>
                                            <div class="content">
                                                <h5 class="title">
                                                    <a href="product-single.html">Woman Full Sliv Dresss</a>
                                                </h5>
                                                <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="product_wrappers_one">
                                            <div class="thumb">
                                                <a href="product-single.html" class="image">
                                                    <img src="/assets/img/product-image/product5.png" alt="Product"/>
                                                    <img class="hover-image"
                                                         src="/assets/img/product-image/product6.png"
                                                         alt="Product"/>
                                                </a>
                                                <span class="badges">
                                                <span class="hot">Hot</span>
                                            </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="far fa-heart"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                       title="Quick view" data-toggle="modal"
                                                       data-target="#exampleModalCenter"><i
                                                            class="fas fa-expand"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="fas fa-exchange-alt"></i></a>
                                                </div>
                                                <a href="#offcanvas-add-cart" title="Add To Cart"
                                                   class="add-to-cart offcanvas-toggle">Add To
                                                    Cart</a>
                                            </div>
                                            <div class="content">
                                                <h5 class="title">
                                                    <a href="product-single.html">Blue Dress For Woman </a>
                                                </h5>
                                                <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="product_wrappers_one">
                                            <div class="thumb">
                                                <a href="product-single.html" class="image">
                                                    <img src="/assets/img/product-image/product7.png" alt="Product"/>
                                                    <img class="hover-image"
                                                         src="/assets/img/product-image/product8.png"
                                                         alt="Product"/>
                                                </a>
                                                <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="far fa-heart"></i></a>
                                                    <a href="#!" class="action quickview" data-link-action="quickview"
                                                       title="Quick view" data-toggle="modal"
                                                       data-target="#exampleModalCenter">
                                                        <i class="fas fa-expand"></i>
                                                    </a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="fas fa-exchange-alt"></i></a>
                                                </div>
                                                <a href="#offcanvas-add-cart" title="Add To Cart"
                                                   class="add-to-cart offcanvas-toggle">Add To
                                                    Cart</a>
                                            </div>
                                            <div class="content">
                                                <h5 class="title">
                                                    <a href="product-single.html">Woman Full Sliv Dresss</a>
                                                </h5>
                                                <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="best_sellers" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="product_wrappers_one">
                                            <div class="thumb">
                                                <a href="product-single.html" class="image">
                                                    <img src="/assets/img/product-image/product9.png" alt="Product"/>
                                                    <img class="hover-image"
                                                         src="/assets/img/product-image/product10.png"
                                                         alt="Product"/>
                                                </a>
                                                <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="far fa-heart"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                       title="Quick view" data-toggle="modal"
                                                       data-target="#exampleModalCenter"><i
                                                            class="fas fa-expand"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="fas fa-exchange-alt"></i></a>
                                                </div>
                                                <a href="#offcanvas-add-cart" title="Add To Cart"
                                                   class="add-to-cart offcanvas-toggle">Add To
                                                    Cart</a>
                                            </div>
                                            <div class="content">
                                                <h5 class="title">
                                                    <a href="product-single.html">Woman Full Sliv Dress</a>
                                                </h5>
                                                <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="product_wrappers_one">
                                            <div class="thumb">
                                                <a href="product-single.html" class="image">
                                                    <img src="/assets/img/product-image/product11.png" alt="Product"/>
                                                    <img class="hover-image"
                                                         src="/assets/img/product-image/product12.png"
                                                         alt="Product"/>
                                                </a>
                                                <span class="badges">
                                            <span class="hot">Hot</span>
                                        </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="far fa-heart"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                       title="Quick view" data-toggle="modal"
                                                       data-target="#exampleModalCenter"><i
                                                            class="fas fa-expand"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="fas fa-exchange-alt"></i></a>
                                                </div>
                                                <a href="#offcanvas-add-cart" title="Add To Cart"
                                                   class="add-to-cart offcanvas-toggle">Add To
                                                    Cart</a>
                                            </div>
                                            <div class="content">
                                                <h5 class="title">
                                                    <a href="product-single.html">Black T-Shirt For Woman
                                                    </a>
                                                </h5>
                                                <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="product_wrappers_one">
                                            <div class="thumb">
                                                <a href="product-single.html" class="image">
                                                    <img src="/assets/img/product-image/product13.png" alt="Product"/>
                                                    <img class="hover-image"
                                                         src="/assets/img/product-image/product14.png"
                                                         alt="Product"/>
                                                </a>
                                                <span class="badges">
                                            <span class="new">New</span>
                                        </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="far fa-heart"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                       title="Quick view" data-toggle="modal"
                                                       data-target="#exampleModalCenter"><i
                                                            class="fas fa-expand"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="fas fa-exchange-alt"></i></a>
                                                </div>
                                                <a href="#offcanvas-add-cart" title="Add To Cart"
                                                   class="add-to-cart offcanvas-toggle">Add To
                                                    Cart</a>
                                            </div>
                                            <div class="content">
                                                <h5 class="title">
                                                    <a href="product-single.html">Blue Dress For Woman</a>
                                                </h5>
                                                <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="product_wrappers_one">
                                            <div class="thumb">
                                                <a href="product-single.html" class="image">
                                                    <img src="/assets/img/product-image/product5.png" alt="Product"/>
                                                    <img class="hover-image"
                                                         src="/assets/img/product-image/product6.png"
                                                         alt="Product"/>
                                                </a>
                                                <span class="badges">
                                            <span class="new">New</span>
                                        </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="far fa-heart"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                       title="Quick view" data-toggle="modal"
                                                       data-target="#exampleModalCenter"><i
                                                            class="fas fa-expand"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="fas fa-exchange-alt"></i></a>
                                                </div>
                                                <a href="#offcanvas-add-cart" title="Add To Cart"
                                                   class="add-to-cart offcanvas-toggle">Add To
                                                    Cart</a>
                                            </div>
                                            <div class="content">
                                                <h5 class="title">
                                                    <a href="product-single.html">Woman Full Sliv Dresss</a>
                                                </h5>
                                                <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="featured" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="product_wrappers_one">
                                            <div class="thumb">
                                                <a href="product-single.html" class="image">
                                                    <img src="/assets/img/product-image/product1.png" alt="Product"/>
                                                    <img class="hover-image"
                                                         src="/assets/img/product-image/product2.png"
                                                         alt="Product"/>
                                                </a>
                                                <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="far fa-heart"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                       title="Quick view" data-toggle="modal"
                                                       data-target="#exampleModalCenter"><i
                                                            class="fas fa-expand"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="fas fa-exchange-alt"></i></a>
                                                </div>
                                                <a href="#offcanvas-add-cart" title="Add To Cart"
                                                   class="add-to-cart offcanvas-toggle">Add To
                                                    Cart</a>
                                            </div>
                                            <div class="content">
                                                <h5 class="title">
                                                    <a href="product-single.html">Blue Dress For Woman</a>
                                                </h5>
                                                <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="product_wrappers_one">
                                            <div class="thumb">
                                                <a href="product-single.html" class="image">
                                                    <img src="/assets/img/product-image/product3.png" alt="Product"/>
                                                    <img class="hover-image"
                                                         src="/assets/img/product-image/product4.png"
                                                         alt="Product"/>
                                                </a>
                                                <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="far fa-heart"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                       title="Quick view" data-toggle="modal"
                                                       data-target="#exampleModalCenter"><i
                                                            class="fas fa-expand"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="fas fa-exchange-alt"></i></a>
                                                </div>
                                                <a href="#offcanvas-add-cart" title="Add To Cart"
                                                   class="add-to-cart offcanvas-toggle">Add To
                                                    Cart</a>
                                            </div>
                                            <div class="content">
                                                <h5 class="title">
                                                    <a href="product-single.html">Woman Full Sliv Dresss</a>
                                                </h5>
                                                <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="product_wrappers_one">
                                            <div class="thumb">
                                                <a href="product-single.html" class="image">
                                                    <img src="/assets/img/product-image/product5.png" alt="Product"/>
                                                    <img class="hover-image"
                                                         src="/assets/img/product-image/product6.png"
                                                         alt="Product"/>
                                                </a>
                                                <span class="badges">
                                                <span class="hot">Hot</span>
                                            </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="far fa-heart"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                       title="Quick view" data-toggle="modal"
                                                       data-target="#exampleModalCenter"><i
                                                            class="fas fa-expand"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="fas fa-exchange-alt"></i></a>
                                                </div>
                                                <a href="#offcanvas-add-cart" title="Add To Cart"
                                                   class="add-to-cart offcanvas-toggle">Add To
                                                    Cart</a>
                                            </div>
                                            <div class="content">
                                                <h5 class="title">
                                                    <a href="product-single.html">Blue Dress For Woman </a>
                                                </h5>
                                                <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="product_wrappers_one">
                                            <div class="thumb">
                                                <a href="product-single.html" class="image">
                                                    <img src="/assets/img/product-image/product7.png" alt="Product"/>
                                                    <img class="hover-image"
                                                         src="/assets/img/product-image/product8.png"
                                                         alt="Product"/>
                                                </a>
                                                <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="far fa-heart"></i></a>
                                                    <a href="#!" class="action quickview" data-link-action="quickview"
                                                       title="Quick view" data-toggle="modal"
                                                       data-target="#exampleModalCenter">
                                                        <i class="fas fa-expand"></i>
                                                    </a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="fas fa-exchange-alt"></i></a>
                                                </div>
                                                <a href="#offcanvas-add-cart" title="Add To Cart"
                                                   class="add-to-cart offcanvas-toggle">Add To
                                                    Cart</a>
                                            </div>
                                            <div class="content">
                                                <h5 class="title">
                                                    <a href="product-single.html">Woman Full Sliv Dresss</a>
                                                </h5>
                                                <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="on_sall" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="product_wrappers_one">
                                            <div class="thumb">
                                                <a href="product-single.html" class="image">
                                                    <img src="/assets/img/product-image/product1.png" alt="Product"/>
                                                    <img class="hover-image"
                                                         src="/assets/img/product-image/product2.png"
                                                         alt="Product"/>
                                                </a>
                                                <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="far fa-heart"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                       title="Quick view" data-toggle="modal"
                                                       data-target="#exampleModalCenter"><i
                                                            class="fas fa-expand"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="fas fa-exchange-alt"></i></a>
                                                </div>
                                                <a href="#offcanvas-add-cart" title="Add To Cart"
                                                   class="add-to-cart offcanvas-toggle">Add To
                                                    Cart</a>
                                            </div>
                                            <div class="content">
                                                <h5 class="title">
                                                    <a href="product-single.html">Blue Dress For Woman</a>
                                                </h5>
                                                <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="product_wrappers_one">
                                            <div class="thumb">
                                                <a href="product-single.html" class="image">
                                                    <img src="/assets/img/product-image/product3.png" alt="Product"/>
                                                    <img class="hover-image"
                                                         src="/assets/img/product-image/product4.png"
                                                         alt="Product"/>
                                                </a>
                                                <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="far fa-heart"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                       title="Quick view" data-toggle="modal"
                                                       data-target="#exampleModalCenter"><i
                                                            class="fas fa-expand"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="fas fa-exchange-alt"></i></a>
                                                </div>
                                                <a href="#offcanvas-add-cart" title="Add To Cart"
                                                   class="add-to-cart offcanvas-toggle">Add To
                                                    Cart</a>
                                            </div>
                                            <div class="content">
                                                <h5 class="title">
                                                    <a href="product-single.html">Woman Full Sliv Dresss</a>
                                                </h5>
                                                <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="product_wrappers_one">
                                            <div class="thumb">
                                                <a href="product-single.html" class="image">
                                                    <img src="/assets/img/product-image/product5.png" alt="Product"/>
                                                    <img class="hover-image"
                                                         src="/assets/img/product-image/product6.png"
                                                         alt="Product"/>
                                                </a>
                                                <span class="badges">
                                                <span class="hot">Hot</span>
                                            </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="far fa-heart"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                       title="Quick view" data-toggle="modal"
                                                       data-target="#exampleModalCenter"><i
                                                            class="fas fa-expand"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="fas fa-exchange-alt"></i></a>
                                                </div>
                                                <a href="#offcanvas-add-cart" title="Add To Cart"
                                                   class="add-to-cart offcanvas-toggle">Add To
                                                    Cart</a>
                                            </div>
                                            <div class="content">
                                                <h5 class="title">
                                                    <a href="product-single.html">Blue Dress For Woman </a>
                                                </h5>
                                                <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Offer Time Area -->
    <section id="offer_timer_one">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-4 col-md-7 offset-md-4 col-sm-12 col-12">
                    <div class="offer_time_flex">
                        <div class="count_down">
                            <div id="countdown">
                                <ul>
                                    <li><span id="days"></span>days</li>
                                    <li><span id="hours"></span>Hours</li>
                                    <li><span id="minutes"></span>Minutes</li>
                                    <li><span id="seconds"></span>Seconds</li>
                                </ul>
                            </div>
                        </div>
                        <div class="offer_timer_text">
                            <h2>20% OFF FOR ALL T-SHIRT COLLECTION</h2>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro quisquam, odit assumenda
                                sit modi commodi esse necessitatibus temporibus aperiam veritatis eveniet!
                            </p>
                            <a href="#!" class="theme-btn-one bg-black btn_md">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- To Days Area -->
    <section id="to_days_area" class="ptb-100 slider_arrows_one">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center_heading">
                        <h2>ToDay's Deal</h2>
                        <p>Mauris luctus nisi sapien tristique dignissim ornare</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="todays_slider owl-carousel owl-them">
                        <div class="product_wrappers_one">
                            <div class="thumb">
                                <a href="product-single.html" class="image">
                                    <img src="/assets/img/product-image/product1.png" alt="Product"/>
                                    <img class="hover-image" src="/assets/img/product-image/product2.png"
                                         alt="Product"/>
                                </a>
                                <span class="badges">
                  <span class="hot">Hot</span>
                                </span>
                                <div class="actions">
                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                            class="far fa-heart"></i></a>
                                    <a href="#" class="action quickview" data-link-action="quickview" title="Quick view"
                                       data-toggle="modal" data-target="#exampleModalCenter"><i
                                            class="fas fa-expand"></i></a>
                                    <a href="compare.html" class="action compare" title="Compare"><i
                                            class="fas fa-exchange-alt"></i></a>
                                </div>
                                <a href="#offcanvas-add-cart" title="Add To Cart" class="add-to-cart offcanvas-toggle">Add
                                    To Cart</a>
                            </div>
                            <div class="content">
                                <h5 class="title">
                                    <a href="product-single.html">Black T-Shirt For Woman</a>
                                </h5>
                                <span class="price">
                  <span class="new">$38.50</span>
                                </span>
                            </div>
                        </div>
                        <div class="product_wrappers_one">
                            <div class="thumb">
                                <a href="product-single.html" class="image">
                                    <img src="/assets/img/product-image/product3.png" alt="Product"/>
                                    <img class="hover-image" src="/assets/img/product-image/product4.png"
                                         alt="Product"/>
                                </a>
                                <span class="badges">
                  <span class="new">New</span>
                                </span>
                                <div class="actions">
                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                            class="far fa-heart"></i></a>
                                    <a href="#" class="action quickview" data-link-action="quickview" title="Quick view"
                                       data-toggle="modal" data-target="#exampleModalCenter"><i
                                            class="fas fa-expand"></i></a>
                                    <a href="compare.html" class="action compare" title="Compare"><i
                                            class="fas fa-exchange-alt"></i></a>
                                </div>
                                <a href="#offcanvas-add-cart" title="Add To Cart" class="add-to-cart offcanvas-toggle">Add
                                    To Cart</a>
                            </div>
                            <div class="content">
                                <h5 class="title">
                                    <a href="product-single.html">T-Shirt Form Girls</a>
                                </h5>
                                <span class="price">
                  <span class="new">$38.50</span>
                                </span>
                            </div>
                        </div>
                        <div class="product_wrappers_one">
                            <div class="thumb">
                                <a href="product-single.html" class="image">
                                    <img src="/assets/img/product-image/product5.png" alt="Product"/>
                                    <img class="hover-image" src="/assets/img/product-image/product6.png"
                                         alt="Product"/>
                                </a>
                                <span class="badges">
                  <span class="hot">Hot</span>
                                </span>
                                <div class="actions">
                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                            class="far fa-heart"></i></a>
                                    <a href="#" class="action quickview" data-link-action="quickview" title="Quick view"
                                       data-toggle="modal" data-target="#exampleModalCenter"><i
                                            class="fas fa-expand"></i></a>
                                    <a href="compare.html" class="action compare" title="Compare"><i
                                            class="fas fa-exchange-alt"></i></a>
                                </div>
                                <a href="#offcanvas-add-cart" title="Add To Cart" class="add-to-cart offcanvas-toggle">Add
                                    To Cart</a>
                            </div>
                            <div class="content">
                                <h5 class="title">
                                    <a href="product-single.html">Blue Dress For Woman</a>
                                </h5>
                                <span class="price">
                  <span class="new">$38.50</span>
                                </span>
                            </div>
                        </div>
                        <div class="product_wrappers_one">
                            <div class="thumb">
                                <a href="product-single.html" class="image">
                                    <img src="/assets/img/product-image/product7.png" alt="Product"/>
                                    <img class="hover-image" src="/assets/img/product-image/product8.png"
                                         alt="Product"/>
                                </a>
                                <span class="badges">
                  <span class="new">New</span>
                                </span>
                                <div class="actions">
                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                            class="far fa-heart"></i></a>
                                    <a href="#" class="action quickview" data-link-action="quickview" title="Quick view"
                                       data-toggle="modal" data-target="#exampleModalCenter"><i
                                            class="fas fa-expand"></i></a>
                                    <a href="compare.html" class="action compare" title="Compare"><i
                                            class="fas fa-exchange-alt"></i></a>
                                </div>
                                <a href="#offcanvas-add-cart" title="Add To Cart" class="add-to-cart offcanvas-toggle">Add
                                    To Cart</a>
                            </div>
                            <div class="content">
                                <h5 class="title">
                                    <a href="product-single.html">Woman Full Sliv Dresss</a>
                                </h5>
                                <span class="price">
                  <span class="new">$38.50</span>
                                </span>
                            </div>
                        </div>
                        <div class="product_wrappers_one">
                            <div class="thumb">
                                <a href="product-single.html" class="image">
                                    <img src="/assets/img/product-image/product9.png" alt="Product"/>
                                    <img class="hover-image" src="/assets/img/product-image/product10.png"
                                         alt="Product"/>
                                </a>
                                <span class="badges">
                  <span class="hot">Hot</span>
                                </span>
                                <div class="actions">
                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                            class="far fa-heart"></i></a>
                                    <a href="#" class="action quickview" data-link-action="quickview" title="Quick view"
                                       data-toggle="modal" data-target="#exampleModalCenter"><i
                                            class="fas fa-expand"></i></a>
                                    <a href="compare.html" class="action compare" title="Compare"><i
                                            class="fas fa-exchange-alt"></i></a>
                                </div>
                                <a href="#offcanvas-add-cart" title="Add To Cart" class="add-to-cart offcanvas-toggle">Add
                                    To Cart</a>
                            </div>
                            <div class="content">
                                <h5 class="title">
                                    <a href="product-single.html">Blue Dress For Woman</a>
                                </h5>
                                <span class="price">
                  <span class="new">$38.50</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Special offer -->
    <section id="special_offer_one">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="offer_banner_one text-center">
                        <h5>TRENDING</h5>
                        <h2>New Fashion</h2>
                        <p>
                            Consectetur adipisicing elit. Dolores nisi distinctio magni, iure deserunt doloribus optio
                        </p>
                        <a href="#!" class="theme-btn-one bg-whites btn_md">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if($lastPost)
        <!-- Latest Blog Arae -->
        <section id="blog_area_one" class="ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="center_heading">
                            <h2>Latest Blog</h2>
                            <p>Mauris luctus nisi sapien tristique dignissim ornare</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($lastPost as $post)
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="blog_one_item img-zoom-hover">
                                <div class="blog_one_img">
                                    <a href="{{ route('single.blog',['slug' => $post->slug]) }}">
                                        <img src="{{$post->image}}" alt="{{$post->title}}">
                                    </a>
                                </div>
                                <div class="blog_text">
                                    <h5 class="date_area">
                                        {{$post->create}}
                                    </h5>
                                    <h4 class="heading">
                                        <a href="{{ route('single.blog',['slug' => $post->slug]) }}"> {{$post->title}}</a>
                                    </h4>
                                    <p class="para">
                                        {{$post->short_description}}
                                    </p>
                                    <a href="{{ route('single.blog',['slug' => $post->slug]) }}" class="button">Read
                                        More<i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    @include('pages.partials.instagram')
@endsection
