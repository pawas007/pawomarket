@extends('layouts.app')
@section('pages')
    @include('pages.partials.banner',[
    'currentPage' => 'Shop'

  ])
@section('title', 'Shop')
    <section id="shop_main_area" class="ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="product_filter">
                    <div class="customs_selects">
                        <select name="product" class="customs_sel_box">
                            <option value="Filter">Filter</option>
                            <option value="Most_Popular">Most Popular</option>
                            <option value="Best_Seller">Best Seller</option>
                            <option value="Tranding">Tranding</option>
                            <option value="Featured">Featured</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="product_shot">
                    <div class="product_shot_title">
                        <p> Sort By
                            :</p>
                    </div>
                    <div class="customs_selects">
                        <select name="product" class="customs_sel_box">
                            <option value="Popularity">Sort by Popularity</option>
                            <option value="newness">Sort by newness</option>
                            <option value="low">price: low to high</option>
                            <option value="high">price: high to low</option>
                        </select>
                    </div>
                    <div class="product_shot_view">
                        <ul>
                            <li><a href="shop-3.html"><i class="fas fa-list"></i></a></li>
                            <li><a href="shop-2.html"><i class="fas fa-th-large"></i></a></li>
                            <li><a href="shop.html"><i class="fas fa-th"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="shop_sidebar_wrapper">
                    <div class="shop_Search">
                        <form action="#!">
                            <input type="text" class="form-control" placeholder="Search...">
                            <button><img src="assets/img/svg/search.svg" alt="img"></button>
                        </form>
                    </div>
                    <div class="shop_sidebar_boxed">
                        <h4>Product Categories</h4>
                        <form action="#!">
                            <label class="custom_boxed">Woman Dresses
                                <input type="radio" checked="checked" name="radio">
                                <span class="checkmark"></span>
                            </label>
                            <label class="custom_boxed">T-shirts
                                <input type="radio" name="radio">
                                <span class="checkmark"></span>
                            </label>
                            <label class="custom_boxed">Fashion
                                <input type="radio" name="radio">
                                <span class="checkmark"></span>
                            </label>
                            <label class="custom_boxed">Bags
                                <input type="radio" name="radio">
                                <span class="checkmark"></span>
                            </label>
                            <label class="custom_boxed">Jackets
                                <input type="radio" name="radio">
                                <span class="checkmark"></span>
                            </label>
                            <label class="custom_boxed">Shoes
                                <input type="radio" name="radio">
                                <span class="checkmark"></span>
                            </label>
                            <label class="custom_boxed">Jeans
                                <input type="radio" name="radio">
                                <span class="checkmark"></span>
                            </label>
                        </form>
                    </div>
                    <div class="shop_sidebar_boxed">
                        <h4>Price</h4>
                        <div class="price_filter">
                            <div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 33.6364%; width: 37.5758%;">
                                </div>
                                <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 12.1212%;">
                                    </span>
                                <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 80.303%;">
                                    </span>
                                <div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 12.1212%; width: 68.1818%;"></div></div>
                            <div class="price_slider_amount">
                                <span>Price :</span>
                                <input type="text" id="amount" name="price" placeholder="Add Your Price">
                            </div>
                        </div>
                    </div>
                    <div class="shop_sidebar_boxed">
                        <h4>Color</h4>
                        <div class="product-variable-color">
                            <label for="modal-product-color-red6">
                                <input name="modal-product-color" id="modal-product-color-red6" class="color-select" type="radio" checked="">
                                <span class="product-color-red"></span>
                            </label>
                            <label for="modal-product-color-tomato1">
                                <input name="modal-product-color" id="modal-product-color-tomato1" class="color-select" type="radio">
                                <span class="product-color-tomato"></span>
                            </label>
                            <label for="modal-product-color-green2">
                                <input name="modal-product-color" id="modal-product-color-green2" class="color-select" type="radio">
                                <span class="product-color-green"></span>
                            </label>
                            <label for="modal-product-color-light-green3">
                                <input name="modal-product-color" id="modal-product-color-light-green3" class="color-select" type="radio">
                                <span class="product-color-light-green"></span>
                            </label>
                            <label for="modal-product-color-blue4">
                                <input name="modal-product-color" id="modal-product-color-blue4" class="color-select" type="radio">
                                <span class="product-color-blue"></span>
                            </label>
                            <label for="modal-product-color-light-blue5">
                                <input name="modal-product-color" id="modal-product-color-light-blue5" class="color-select" type="radio">
                                <span class="product-color-light-blue"></span>
                            </label>
                        </div>
                    </div>
                    <div class="shop_sidebar_boxed">
                        <h4>Size</h4>
                        <form action="#!" id="sizes_input">
                            <label class="custom_boxed">XS
                                <input type="radio" checked="checked" name="radio">
                                <span class="checkmark"></span>
                            </label>
                            <label class="custom_boxed">S
                                <input type="radio" name="radio">
                                <span class="checkmark"></span>
                            </label>
                            <label class="custom_boxed">M
                                <input type="radio" name="radio">
                                <span class="checkmark"></span>
                            </label>
                            <label class="custom_boxed">L
                                <input type="radio" name="radio">
                                <span class="checkmark"></span>
                            </label>
                            <label class="custom_boxed">XL
                                <input type="radio" name="radio">
                                <span class="checkmark"></span>
                            </label>
                        </form>
                    </div>
                    <div class="shop_sidebar_boxed">
                        <h4>Brand</h4>
                        <form action="#!">
                            <label class="custom_boxed">Next
                                <input type="radio" checked="checked" name="radio">
                                <span class="checkmark"></span>
                            </label>
                            <label class="custom_boxed">Adidas
                                <input type="radio" name="radio">
                                <span class="checkmark"></span>
                            </label>
                            <label class="custom_boxed">Calvin Klein
                                <input type="radio" name="radio">
                                <span class="checkmark"></span>
                            </label>
                            <label class="custom_boxed">Nike
                                <input type="radio" name="radio">
                                <span class="checkmark"></span>
                            </label>
                            <label class="custom_boxed">Geox
                                <input type="radio" name="radio">
                                <span class="checkmark"></span>
                            </label>
                            <label class="custom_boxed">River Island
                                <input type="radio" name="radio">
                                <span class="checkmark"></span>
                            </label>
                            <div class="clear_button">
                                <button class="theme-btn-one btn_sm btn-black-overlay">Clear Filter</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="product_wrappers_one">
                            <div class="thumb">
                                <a href="product-single.html" class="image">
                                    <img src="assets/img/product-image/product1.png" alt="Product">
                                    <img class="hover-image" src="assets/img/product-image/product2.png" alt="Product">
                                </a>
                                <div class="actions">
                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="far fa-heart"></i></a>
                                    <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-expand"></i></a>
                                    <a href="compare.html" class="action compare" title="Compare"><i class="fas fa-exchange-alt"></i></a>
                                </div>
                                <a href="#offcanvas-add-cart" title="Add To Cart" class="add-to-cart offcanvas-toggle">Add To Cart</a>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="product-single.html">Black T-Shirt For Woman</a></h5>
                                <span class="price">
                                        <span class="new">$38.50</span>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="product_wrappers_one">
                            <div class="thumb">
                                <a href="product-single.html" class="image">
                                    <img src="assets/img/product-image/product3.png" alt="Product">
                                    <img class="hover-image" src="assets/img/product-image/product4.png" alt="Product">
                                </a>
                                <span class="badges">
                                        <span class="new">New</span>
                                    </span>
                                <div class="actions">
                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="far fa-heart"></i></a>
                                    <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-expand"></i></a>
                                    <a href="compare.html" class="action compare" title="Compare"><i class="fas fa-exchange-alt"></i></a>
                                </div>
                                <a href="#offcanvas-add-cart" title="Add To Cart" class="add-to-cart offcanvas-toggle">Add To Cart</a>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="product-single.html">T-Shirt Form Girls</a></h5>
                                <span class="price">
                                        <span class="new">$38.50</span>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="product_wrappers_one">
                            <div class="thumb">
                                <a href="product-single.html" class="image">
                                    <img src="assets/img/product-image/product5.png" alt="Product">
                                    <img class="hover-image" src="assets/img/product-image/product6.png" alt="Product">
                                </a>
                                <span class="badges">
                                        <span class="hot">Hot</span>
                                    </span>
                                <div class="actions">
                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="far fa-heart"></i></a>
                                    <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-expand"></i></a>
                                    <a href="compare.html" class="action compare" title="Compare"><i class="fas fa-exchange-alt"></i></a>
                                </div>
                                <a href="#offcanvas-add-cart" title="Add To Cart" class="add-to-cart offcanvas-toggle">Add To Cart</a>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="product-single.html">White Black Line Dress</a></h5>
                                <span class="price">
                                        <span class="new">$38.50</span>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="product_wrappers_one">
                            <div class="thumb">
                                <a href="product-single.html" class="image">
                                    <img src="assets/img/product-image/product3.png" alt="Product">
                                    <img class="hover-image" src="assets/img/product-image/product5.png" alt="Product">
                                </a>
                                <div class="actions">
                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="far fa-heart"></i></a>
                                    <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-expand"></i></a>
                                    <a href="compare.html" class="action compare" title="Compare"><i class="fas fa-exchange-alt"></i></a>
                                </div>
                                <a href="#offcanvas-add-cart" title="Add To Cart" class="add-to-cart offcanvas-toggle">Add To Cart</a>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="product-single.html">Blue Dress For Woman</a></h5>
                                <span class="price">
                                        <span class="new">$38.50</span>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="product_wrappers_one">
                            <div class="thumb">
                                <a href="product-single.html" class="image">
                                    <img src="assets/img/product-image/product7.png" alt="Product">
                                    <img class="hover-image" src="assets/img/product-image/product5.png" alt="Product">
                                </a>
                                <span class="badges">
                                        <span class="new">New</span>
                                    </span>
                                <div class="actions">
                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="far fa-heart"></i></a>
                                    <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-expand"></i></a>
                                    <a href="compare.html" class="action compare" title="Compare"><i class="fas fa-exchange-alt"></i></a>
                                </div>
                                <a href="#offcanvas-add-cart" title="Add To Cart" class="add-to-cart offcanvas-toggle">Add To Cart</a>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="product-single.html">Woman Full Sliv Dresss</a></h5>
                                <span class="price">
                                        <span class="new">$38.50</span>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="product_wrappers_one">
                            <div class="thumb">
                                <a href="product-single.html" class="image">
                                    <img src="assets/img/product-image/product3.png" alt="Product">
                                    <img class="hover-image" src="assets/img/product-image/product4.png" alt="Product">
                                </a>
                                <span class="badges">
                                        <span class="hot">Hot</span>
                                    </span>
                                <div class="actions">
                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="far fa-heart"></i></a>
                                    <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-expand"></i></a>
                                    <a href="compare.html" class="action compare" title="Compare"><i class="fas fa-exchange-alt"></i></a>
                                </div>
                                <a href="#offcanvas-add-cart" title="Add To Cart" class="add-to-cart offcanvas-toggle">Add To Cart</a>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="product-single.html">Blue Dress For Woman</a></h5>
                                <span class="price">
                                        <span class="new">$38.50</span>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="product_wrappers_one">
                            <div class="thumb">
                                <a href="product-single.html" class="image">
                                    <img src="assets/img/product-image/product1.png" alt="Product">
                                    <img class="hover-image" src="assets/img/product-image/product2.png" alt="Product">
                                </a>
                                <div class="actions">
                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="far fa-heart"></i></a>
                                    <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-expand"></i></a>
                                    <a href="compare.html" class="action compare" title="Compare"><i class="fas fa-exchange-alt"></i></a>
                                </div>
                                <a href="#offcanvas-add-cart" title="Add To Cart" class="add-to-cart offcanvas-toggle">Add To Cart</a>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="product-single.html">White Black Line Dress</a></h5>
                                <span class="price">
                                        <span class="new">$38.50</span>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="product_wrappers_one">
                            <div class="thumb">
                                <a href="product-single.html" class="image">
                                    <img src="assets/img/product-image/product3.png" alt="Product">
                                    <img class="hover-image" src="assets/img/product-image/product4.png" alt="Product">
                                </a>
                                <span class="badges">
                                        <span class="new">New</span>
                                    </span>
                                <div class="actions">
                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="far fa-heart"></i></a>
                                    <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-expand"></i></a>
                                    <a href="compare.html" class="action compare" title="Compare"><i class="fas fa-exchange-alt"></i></a>
                                </div>
                                <a href="#offcanvas-add-cart" title="Add To Cart" class="add-to-cart offcanvas-toggle">Add To Cart</a>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="product-single.html">Woman Full Sliv Dresss</a></h5>
                                <span class="price">
                                        <span class="new">$738.50</span>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="product_wrappers_one">
                            <div class="thumb">
                                <a href="product-single.html" class="image">
                                    <img src="assets/img/product-image/product1.png" alt="Product">
                                    <img class="hover-image" src="assets/img/product-image/product2.png" alt="Product">
                                </a>
                                <div class="actions">
                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="far fa-heart"></i></a>
                                    <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-expand"></i></a>
                                    <a href="compare.html" class="action compare" title="Compare"><i class="fas fa-exchange-alt"></i></a>
                                </div>
                                <a href="#offcanvas-add-cart" title="Add To Cart" class="add-to-cart offcanvas-toggle">Add To Cart</a>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="product-single.html">Black T-Shirt For Woman</a></h5>
                                <span class="price">
                                        <span class="new">$58.50</span>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <!-- pagination start -->
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">«</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">»</span>
                                </a>
                            </li>
                        </ul>
                        <!-- pagination end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
