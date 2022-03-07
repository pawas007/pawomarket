@extends('layouts.app')
@section('pages')
    @include('pages.partials.banner',[
    'currentPage' => 'Cart'

  ])
@section('title', 'Cart')




<section id="cart_area_two" class="ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="table_desc">
                    <div class="table_page table-responsive">
                        <table>
                            <!-- Start Cart Table Head -->
                            <thead>
                            <tr>
                                <th class="product_thumb">Image</th>
                                <th class="product_name">Product</th>
                                <th class="product-price">Price</th>
                                <th class="product_quantity">Quantity</th>
                                <th class="product_total">Total</th>
                                <th class="product_remove">Remove</th>
                            </tr>
                            </thead> <!-- End Cart Table Head -->
                            <tbody>
                            <!-- Start Cart Single Item-->




                            @if(count($cardItems))

                                @foreach($cardItems as $item)

                                    <tr>

                                        <td class="product_thumb">
                                            {{$item}}
                                            <a href="{{route('products.show', $item->id)}}">
                                                <img src="assets/img/product-image/product1.png" alt="img"></a>
                                        </td>
                                        <td class="product_name">
                                            <a href="{{route('products.show', $item->id)}}">{{$item->name}}</a>
                                        </td>
                                        <td class="product-price">{{$item->price}}</td>
                                        <td class="product_quantity">
                                            <div class="plus-minus-input">
                                                <div class="input-group-button">
                                                    <button type="button" class="button" data-quantity="minus"
                                                            data-field="quantity1">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                </div>

                                                <input class="form-control" type="number" name="quantity" value="{{$item->quantity}}">
                                                <div class="input-group-button">
                                                    <button type="button" class="button" data-quantity="plus"
                                                            data-field="quantity">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="product_total">{{$item->quantity * $item->price }} </td>
                                        <td class="product_remove"><a href="#"><i class="far fa-trash-alt"></i></a></td>
                                    </tr> <!-- End Cart Single Item-->


                                @endforeach

                                @endif




                            </tbody>
                        </table>
                    </div>
                    <div class="cart_submit">
                        <button class="theme-btn-one btn-black-overlay btn_sm" type="submit">update cart</button>
                    </div>
                </div>
                <div class="coupon_inner_two">
                    <input class="mb-2" placeholder="Coupon code" type="text">
                    <button type="submit" class="theme-btn-one btn-black-overlay btn_sm">Apply coupon</button>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="coupon_code right" data-aos="fade-up" data-aos-delay="400">
                    <h3>Cart Total</h3>
                    <div class="coupon_inner">
                        <div class="cart_subtotal">
                            <p>Subtotal</p>
                            <p class="cart_amount">$215.00</p>
                        </div>
                        <div class="cart_subtotal ">
                            <p>Shipping</p>
                            <p class="cart_amount"><span>Flat Rate:</span> $255.00</p>
                        </div>
                        <a href="#">Calculate shipping</a>

                        <div class="cart_subtotal">
                            <p>Total</p>
                            <p class="cart_amount">$215.00</p>
                        </div>
                        <div class="checkout_btn">
                            <a href="checkout.html" class="theme-btn-one btn-black-overlay btn_sm">Proceed to
                                Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@include('pages.partials.instagram')

@endsection
