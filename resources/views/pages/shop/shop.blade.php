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
                    @if(count($products))
                        @foreach($products as $product)
                            {{$product->currency_symbol}}

{{$product}}
{{--                            @foreach($product->attribute_values as $val)--}}
{{--                            --}}
{{--                            @endforeach--}}
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="product_wrappers_one">
                                    <div class="thumb">
                                        <a href="product-single.html" class="image">
                                            <img src="assets/img/product-image/product3.png" alt="Product">
                                            <img class="hover-image" src="assets/img/product-image/product4.png"
                                                 alt="Product">
                                        </a>
                                        <div class="badges">
                                            @if($product->hot)
                                                <span class="hot">Hot</span>
                                            @endif
                                            @if($product->new)
                                                <span class="new">New</span>
                                            @endif
                                        </div>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                    class="far fa-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview"
                                               title="Quick view"
                                               data-toggle="modal" data-target="#exampleModalCenter"><i
                                                    class="fas fa-expand"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i
                                                    class="fas fa-exchange-alt"></i></a>
                                        </div>
                                        <a href="#offcanvas-add-cart" title="Add To Cart"
                                           class="add-to-cart offcanvas-toggle">Add
                                            To Cart</a>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="product-single.html">{{$product->name}}</a></h5>
                                        <div class="price">
                                            <span class="new">{{$product->currency_symbol}} {{$product->price}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    @else
                        <div class="col-lg-12">
                            <h3 class="h3 pt-3 text-center">Products not found</h3>
                        </div>
                    @endif
                    <div class="col-lg-12">
                        @include('pages.partials.pagination', ['paginator' => $products])
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

@include('pages.partials.instagram')

@endsection
