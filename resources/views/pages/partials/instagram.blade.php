<!-- Instagram Arae -->
@if($lastPost)
    <section id="instagram_area_one">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center_heading">
                        <h2>Follow Us Instagram</h2>
                        <p>Mauris luctus nisi sapien tristique dignissim ornare</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="instagram_post_slider owl-carousel owl-theme">
                        @foreach($lastPost as $instagramItem)
                        <div class="instgram_post">
                            <a href="{{$instagramItem['link']}}">
                                <i class="fab fa-instagram"></i>
                                <img src="/assets/img/instagram/{{$instagramItem['img']}}" alt="instagram" />
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif

