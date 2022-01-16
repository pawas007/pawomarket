<!-- Instagram Arae -->
@if($instagramLastPost )
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
                        @foreach($instagramLastPost  as $instagramItem)
                        <div class="instgram_post">
                            <a href="{{$instagramItem['link']}}" target="_blank">
                                <i class="fab fa-instagram"></i>
                                <img src="{{$instagramItem['img']}}" alt="instagram" />
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif

