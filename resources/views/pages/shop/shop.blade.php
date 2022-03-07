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
            @include('pages.shop.filter-sidebar',['priceRange'=>$priceRange])
            <div class="col-lg-9">
                <div class="row">
                    @if(count($products))
                        @foreach($products as $product)

                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="product_wrappers_one">
                                    <div class="thumb">
                                        <a href="{{route('products.show', $product)}}" class="image">
                                            @if(!isset($product->gallery[0]))
                                                <img src="assets/img/no-image.jpg" alt="Product">
                                            @else

                                                @endif


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

                                            <a href="/product/fastshow/{{$product->id}}"  class="action quickview"><i
                                                    class="fas fa-expand"></i></a>


                                            <a href="compare.html" class="action compare" title="Compare"><i
                                                    class="fas fa-exchange-alt"></i></a>
                                        </div>
                                        <a href="/addToCart" class="add-to-cart" data-productid="{{$product->id}}" data-quantity="1">Add To Cart</a>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="{{route('products.show', $product)}}">{{$product->name}}</a></h5>
                                        <div class="price">
                                            <span class="new">   {{$product->currency_symbol}} {{$product->price}}</span>
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
