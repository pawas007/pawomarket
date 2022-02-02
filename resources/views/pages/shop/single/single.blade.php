@extends('layouts.app')
@section('pages')
    @include('pages.partials.banner',[
    'currentPage' => 'Shop'

  ])
@section('title', $product->name)
@push('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/theme/slick.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/theme/slick-theme.css') }}"/>
@endpush
@push('scripts')
    <script src="{{ asset('assets/js/theme/slick.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/theme/slick-slider.js') }}" defer></script>
@endpush
<!-- Product Single Area -->
<section id="product_single_two" class="ptb-100">
    <div class="container">
        <div class="row area_boxed">
            <div class="col-lg-4">
                <div class="product_single_two_img slider-for">
                    <div class="product_img_two_slider">
                        <img src="/assets/img/product-image/product1.png" alt="img"/>
                    </div>
                    <div class="product_img_two_slider">
                        <img src="/assets/img/product-image/product2.png" alt="img"/>
                    </div>
                    <div class="product_img_two_slider">
                        <img src="/assets/img/product-image/product3.png" alt="img"/>
                    </div>
                    <div class="product_img_two_slider">
                        <img src="/assets/img/product-image/product4.png" alt="img"/>
                    </div>
                    <div class="product_img_two_slider">
                        <img src="/assets/img/product-image/product5.png" alt="img"/>
                    </div>
                    <div class="product_img_two_slider">
                        <img src="/assets/img/product-image/product6.png" alt="img"/>
                    </div>
                </div>
                <div class="slider-nav">
                    <div class="nav_img">
                        <img src="/assets/img/product-image/product1.png" alt="img"/>
                    </div>
                    <div class="nav_img">
                        <img src="/assets/img/product-image/product2.png" alt="img"/>
                    </div>
                    <div class="nav_img">
                        <img src="/assets/img/product-image/product3.png" alt="img"/>
                    </div>
                    <div class="nav_img">
                        <img src="/assets/img/product-image/product4.png" alt="img"/>
                    </div>
                    <div class="nav_img">
                        <img src="/assets/img/product-image/product5.png" alt="img"/>
                    </div>
                    <div class="nav_img">
                        <img src="/assets/img/product-image/product6.png" alt="img"/>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="product_details_right_one">
                    <div class="modal_product_content_one">
                        {{$product}}
                        <h3>{{$product->name}} {{$product->vendor_code}}</h3>
                        <div class="reviews_rating">
                            @for( $i = 1; $i <= $ratingSummary;$i++)
                                <span><i class="fas fa-star"></i></span>
                            @endfor
                            <span>( {{$product->comments->count()}} Customer Review)</span>
                        </div>
                        <h4>{{$product->currency_symbol}} {{$product->price}}


                            @if($product->old_price)
                                <del>
                                    {{$product->currency_symbol}}
                                {{$product->old_price}}</del>
                                @endif
                        </h4>
                        <div class="customs_selects">
                            <select name="product" class="customs_sel_box">
                                <option value="volvo">Size</option>
                                <option value="saab">XL</option>
                                <option value="mercedes">S</option>
                                <option value="audi">M</option>
                                <option value="audi">L</option>
                            </select>
                        </div>
                        <div class="variable-single-item">
                            <span>Color</span>
                            <div class="product-variable-color">
                                <label for="modal-product-color-red1">
                                    <input name="modal-product-color" id="modal-product-color-red1"
                                           class="color-select" type="radio" checked="">
                                    <span class="product-color-red"></span>
                                </label>
                                <label for="modal-product-color-green3">
                                    <input name="modal-product-color" id="modal-product-color-green3"
                                           class="color-select" type="radio">
                                    <span class="product-color-green"></span>
                                </label>

                                <label for="modal-product-color-blue5">
                                    <input name="modal-product-color" id="modal-product-color-blue5"
                                           class="color-select" type="radio">
                                    <span class="product-color-blue"></span>
                                </label>
                            </div>
                        </div>
                        <form action="#!" id="product_count_form_two">
                            <div class="product_count_one">
                                <div class="plus-minus-input">
                                    <div class="input-group-button">
                                        <button type="button" class="button" data-quantity="minus"
                                                data-field="quantity">
                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                    <input class="form-control" type="number" name="quantity" value="0">
                                    <div class="input-group-button">
                                        <button type="button" class="button" data-quantity="plus"
                                                data-field="quantity">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="links_Product_areas">
                            <ul>
                                <li>
                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                            class="far fa-heart"></i>Add To Wishlist</a>
                                </li>
                                <li>
                                    <a href="compare.html" class="action compare" title="Compare"><i
                                            class="fas fa-exchange-alt"></i>Add To Compare</a>
                                </li>
                            </ul>
                            <a href="cart.html" class="theme-btn-one btn-black-overlay btn_sm">Add To Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="product_details_tabs">
                    <ul class="nav nav-tabs">
                        <li><a data-toggle="tab" href="#description" class="active">Description</a></li>
                        <li><a data-toggle="tab" href="#additional">Additional Information</a></li>
                        <li><a data-toggle="tab" href="#review">Review</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="description" class="tab-pane fade in show active">
                            <div class="product_description">
                                {{$product->description}}
                            </div>
                        </div>
                        <div id="additional" class="tab-pane fade">
                            <div class="product_additional">
                                {{$product->information}}
                            </div>
                        </div>
                        <div id="review" class="tab-pane fade">
                            <div class="product_reviews">
                                <ul>
                                    @if( $product->comments->count())
                                        @foreach($product->comments as $comment)
                                            <li class="media">
                                                <div class="media-body">
                                                    <div class="media-header">
                                                        <div class="media-name">
                                                            <h4>{{$comment->name}}</h4>
                                                        </div>
                                                    </div>
                                                    <div class="media-pragraph">
                                                        <div class="product_review_strat">

                                                            @for( $i = 1; $i <= $comment->rating;$i++)


                                                                <span><a href="#!"><i
                                                                            class="fas fa-star"></i></a></span>


                                                            @endfor

                                                        </div>
                                                        <p>{{$comment->message}}</p>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    @else
                                        <p class="h5">No Reviews</p>
                                    @endif
                                </ul>
                                @include('pages.shop.single.comments',['id'=> $product->id])
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@include('pages.partials.instagram')

@endsection
