<!-- footer Area -->
<footer id="footer_one">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                <div class="footer_left_side">
                    <a class="logo_head" href="{{route('home')}}">Pawo</a>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati culpa assumenda voluptas
                        placeat amet consectetur adipisicing elit. Obcaecati culpa assumenda voluptas placeat.
                    </p>
                    <div class="footer_left_side_icon">
                        <ul>
                            <li>
                                <a href="#!"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#!"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#!"><i class="fab fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#!"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#!"><i class="fab fa-google-plus-g"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="footer_one_widget">
                    <h3>INFORMATION</h3>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                        <li><a href="faq.html">Frequently Questions</a></li>
                        <li><a href="order-tracking.html">Order Tracking</a></li>
                        <li><a href="compare.html">Compare</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 col-12">
                <div class="footer_one_widget">
                    <h3>Your Account</h3>
                    <ul>
                        <li><a href="cart.html">Cart View One</a></li>
                        <li><a href="cart-2.html">Cart View Two </a></li>
                        <li><a href="empty-cart.html">Empty Cart</a></li>
                        <li><a href="checkout.html">Checkout View One</a></li>
                        <li><a href="checkout-2.html">Checkout View Two</a></li>
                        <li><a href="wishlist.html">Wishlist</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="footer_one_widget">
                    <h3>NEWSLETTER</h3>
                    <div id="mc_embed_signup" class="subscribe-form">


                        <form action="{{route('subscribe.store')}}" method="POST">
                            @csrf

                            <div class="mc-form">
                                @if($errors->has('email'))
                                    <div class="alert alert-danger">
                                        {{$errors->first('email')}}
                                    </div>
                                @endif
                                @if(session()->has('subscribeSuccess'))
                                    <div class="alert alert-success">
                                        {{ session()->get('subscribeSuccess') }}
                                    </div>
                                @endif
                                    <input class="form-control @error('email') is-invalid @enderror" type="text"
                                       placeholder="Your Mail*" name="email" value="{{old('email')}}"/>

                                <div class="clear d-flex align-items-end justify-content-between">
                                    <button class="theme-btn-one btn_md" type="submit">
                                        <i class="icon-cursor"></i> Subscribe
                                    </button>
                                    <a href="{{route('unsubscribe')}}">unsubscribe</a>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- CopyRight Area -->
<section id="copyright_one">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="copyright_left">
                    <h6>© CopyRight 2021 <span>Pawo tech</span></h6>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="copyright_right">
                    <img src="/assets/img/common/payment.png" alt="img"/>
                </div>
            </div>
        </div>
    </div>
</section>

@include('modals.modals')

