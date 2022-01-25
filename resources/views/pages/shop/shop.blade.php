@extends('layouts.app')
@section('pages')
    @include('pages.partials.banner',[
    'currentPage' => 'Shop'

  ])
@section('title', 'Shop')
<section id="shop_main_area" class="ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="product_shot">
                    <div class="product_shot_title">
                        <p> Sort By :</p>
                    </div>
                    <div class="customs_selects">
                        <select name="product" class="customs_sel_box">
                            <option value="newness">Sort by newness</option>
                            <option value="popularity">Sort by Popularity</option>
                            <option value="low">price: low to high</option>
                            <option value="high">price: high to low</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @include('pages.shop.filter-sidebar',['attributes'=>$attributes,'priceRange'=>$priceRange])
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

@include('pages.partials.instagram')

@endsection
