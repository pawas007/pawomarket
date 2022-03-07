<!-- Start Offcanvas Addcart Section -->
<div id="offcanvas-add-cart" class="offcanvas offcanvas-rightside offcanvas-add-cart-section">
    <!-- Start Offcanvas Header -->
    <div class="offcanvas-header text-right">
        <button class="offcanvas-close">
            <img src="/assets/img/svg/cancel.svg" alt="icon"/>
        </button>
    </div>
    <!-- End Offcanvas Header -->
    <!-- Start  Offcanvas Addcart Wrapper -->
    <div class="offcanvas-add-cart-wrapper add-cart-wrapper-isempty">
        <h4 class="offcanvas-title">Shopping Cart</h4>

        <div class="empty_text_wrap">
            @if(!count(\Cart::getContent()))
                <h5 class="h5 empty-cart-text">Cart is empty </h5>
            @endif
        </div>




            <ul class="offcanvas-cart offcanvas-cart-modal">
                @foreach(\Cart::getContent() as $item)
                    <li class="offcanvas-cart-item-single">
                        <div class="offcanvas-cart-item-block">
                            <a href="{{route('products.show',$item->id)}}" class="offcanvas-cart-item-image-link">
                                <img src="/assets/img/product-image/product1.png" alt="img"
                                     class="offcanvas-cart-image"/>
                            </a>
                            <div class="offcanvas-cart-item-content">
                                <a href="{{route('products.show',$item->id)}}"
                                   class="offcanvas-cart-item-link">{{ $item->name}}</a>
                                <div class="offcanvas-cart-item-details">
                                    <span class="offcanvas-cart-item-details-quantity">{{ $item->quantity}} x </span>
                                    <span
                                        class="offcanvas-cart-item-details-price">{{ $item->associatedModel->currency_symbol}}  {{ $item->associatedModel->price}}</span>
                                </div>
                            </div>
                        </div>

                        <a href="remove" data-productid="{{$item->id}}"
                           class="offcanvas-cart-item-delete cart-item-delete"><i class="far fa-trash-alt"></i></a>

                    </li>
                @endforeach
            </ul>


            <div class="offcanvas-cart-total-price is_empty_card">
                <span class="offcanvas-cart-total-price-text">Subtotal:</span>
                <div class="offcanvas-cart-total-price-value ">
                    <span class="subTotalCart">  {{\Cart::getSubTotal()}} </span>


                    @if(session('currency'))
                        {{session('currency')}}
                    @else
                        {{$mainCurrency->code}}
                    @endif
                </div>
            </div>
            <ul class="offcanvas-cart-action-button  is_empty_card">
                <li>
                    <a href="{{route('cart.index')}}" class="theme-btn-one btn-black-overlay btn_md">View Cart</a>
                </li>
                <li>
                    <a href="checkout.html" class="theme-btn-one btn-black-overlay btn_md">Checkout</a>
                </li>
            </ul>






    </div>
    <!-- End  Offcanvas Addcart Wrapper -->
</div>
<!-- End  Offcanvas Addcart Section -->
