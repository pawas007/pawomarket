<div class="top-header py-3">
    <div class="container">
        <div class="row align-items-center justify-content-between ">
            <div class="col-lg-6 col-md-7">
                <ul class="top-header-contact-info d-flex font-weight-bold">
                    <li><a class="ml-2" href="tel:+1234567898"><i class="fas fa-phone-volume"></i> (+123) 456-7898</a>
                    </li>
                    <li><i class="fas fa-street-view ml-3"></i> <span class="ml-2" href="#" target="_blank">6890 Blvd, The Bronx, NY
                            1058, USA</span>
                    </li>
                </ul>
            </div>
            <div class="col-auto d-flex">
                @if(count($currency))
                    <div class="top_header_dropdown" id="currency-checker">
                        <div class="current">
                            @if(session('currency'))
                                {{session('currency')}}
                            @else
                                {{$mainCurrency->code}}
                            @endif
                            @if(count($currency) > 1)

                                <i class="fa fa-angle-down"></i>
                            @endif
                        </div>
                        @if(count($currency) > 1)
                            <ul class="dropdown">
                                @foreach($currency as $currencySingle)
                                    @if(session('currency') !== $currencySingle->code)
                                        <li>
                                            <a href="{{route('change.currency',$currencySingle->id)}}">{{$currencySingle->code}}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>

                        @endif

                    </div>
                    <span class='mx-2'>|</span>
                @endif
                <div class="top_header_dropdown " id="lang-checker">
                    <div class="current"><img src="/assets//img/icon/united_kingdom_great_britain.png"> ENG <i
                            class="fa fa-angle-down"></i></div>
                    <ul class="dropdown">
                        <li><a href="#"><img src="/assets//img/icon/united_kingdom_great_britain.png"> ENG</a></li>
                        <li><a href="#"><img src="/assets//img/icon/ukraine.png"> UA</a></li>
                        <li><a href="#"><img src="/assets//img/icon/russian.png"> RU </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

