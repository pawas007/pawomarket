<section id="common_banner_one">
    <div class="container ">
        <div class="row">
            <div class="col-lg-12">
                <div class="common_banner_text">
                    <h2>{{$currentPage}}</h2>
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><i class="fas fa-slash"></i></li>

                        @isset($parent)
                            <li><a href="{{route('blog')}}">Blog</a></li>
                            <li><i class="fas fa-slash"></i></li>
                            @endisset


                        <li class="active">{{$currentPage}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
