@extends('layouts.app')
@section('pages')
    @include('pages.partials.banner',[
    'currentPage' => 'About Us'

  ])
@section('title', 'About Us')
<!-- About-Top -->
<section id="about-top" class="ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="about_top_img">
                    <img src="assets/img/common/img-about.jpg" alt="img">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="about_top_left_content">
                    <h2>ABOUT OUR Andshop STORE</h2>
                    <h4>We believe that every project existing in digital world is a result of an idea and every
                        idea has a cause.</h4>
                    <p>For this reason, our each design serves an idea. Our strength in design is reflected by our
                        name, our care for details.
                        Our specialist won't be afraid to go extra miles just to approach near perfection. We don't
                        require everything to be perfect,
                        but we need them to be perfectly cared for. </p>
                    <p>That's a reason why we are willing to give contributions at best.Not a single detail is
                        missed out under Billey's
                        professional eyes. The amount of dedication and effort equals to the level of passion and
                        determination.
                        Get better, together as one. Proin eget tortor risus. Praesent sapien massa, convallis a
                        pellentesque nec,
                        egestas non nisi. Curabitur arcu erat, accumsan id imperdiet et,
                        porttitor at sem. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About progressbar -->

<section id="team_area" class="ptb-100 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="center_heading">
                    <h2>Expert Team</h2>
                    <p>Mauris luctus nisi sapien tristique dignissim ornare</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="team_slider owl-carousel owl-theme">
                    <div class="team-single">
                        <div class="team-img">
                            <img src="assets/img/team/team4.png" alt="img">
                        </div>
                        <div class="team-content">
                            <h4 class="team-name font--bold">Ms. Sandela</h4>
                            <span class="team-title">CEO</span>
                            <ul class="team-social pos-absolute">
                                <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#!"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#!"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-single">
                        <div class="team-img">
                            <img src="assets/img/team/team1.png" alt="img">
                        </div>
                        <div class="team-content">
                            <h4 class="team-name font--bold">Mr. Heroas</h4>
                            <span class="team-title">Head Of Markating</span>
                            <ul class="team-social pos-absolute">
                                <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#!"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#!"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-single">
                        <div class="team-img">
                            <img src="assets/img/team/team2.png" alt="img">
                        </div>
                        <div class="team-content">
                            <h4 class="team-name font--bold">Ms. Raka</h4>
                            <span class="team-title">Admin</span>
                            <ul class="team-social pos-absolute">
                                <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#!"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#!"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-single">
                        <div class="team-img">
                            <img src="assets/img/team/team3.png" alt="img">
                        </div>
                        <div class="team-content">
                            <h4 class="team-name font--bold">Ms. Valona</h4>
                            <span class="team-title">Manager</span>
                            <ul class="team-social pos-absolute">
                                <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#!"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#!"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Instagram Arae -->
    @include('pages.partials.instagram')
@endsection
