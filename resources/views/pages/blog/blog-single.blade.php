@extends('layouts.app')
@section('pages')

    @include('pages.partials.banner',[
    'parent'=>'Blog',
    'currentPage' => $singlePost->title

    ])


    <section id="blog_single_area" class="ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="blog_single_content">


                        @if($singlePost->image)
                            <div class="blog_single_img img-zoom-hover">
                                <img src="{{$singlePost->image}}" alt="{{$singlePost->title}}">
                            </div>

                        @endif
                        <div class="blog_single_widget">
                            <div class="blog_single_date">
                                <ul>
                                    <li>{{$singlePost->create}} </li>
                                </ul>
                            </div>
                            <div class="blog_single_first_Widget">
                                <h2>{{$singlePost->title}}</h2>

                                {!! $singlePost->content !!}
                            </div>


                            <div class="single_categoris_bottom">
                                @if($singlePost->tags)
                                    <ul>

                                        @foreach($singlePost->tags as $tag)

                                            <li><a href="{{route('tag',$tag->slug)}}"> {{$tag->name}}</a></li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        </div>

                        <div class="single_comment_area">
                            <div class="content_title">
                                <h3>(03) Comments</h3>
                            </div>
                            <ul class="list_none comment_list">
                                <li class="comment_info">
                                    <div class="d-flex">
                                        <div class="comment_user">
                                            <img src="/assets/img/user/user3.png" alt="user3">
                                        </div>
                                        <div class="comment_content">
                                            <div class="d-flex">
                                                <div class="meta_data">
                                                    <h6><a href="#">Alden Smith</a></h6>
                                                    <div class="comment-time">MARCH 5, 2018, 6:05 PM</div>
                                                </div>
                                                <div class="ml-auto">
                                                    <a href="#" class="comment-reply"><i class="ion-reply-all"></i>Reply</a>
                                                </div>
                                            </div>
                                            <p>We denounce with righteous indignation and dislike men who are so
                                                beguiled and demoralized by the charms of pleasure of the moment, so
                                                blinded by desire that the cannot foresee the pain and trouble that.</p>
                                        </div>
                                    </div>
                                    <ul class="children">
                                        <li class="comment_info">
                                            <div class="d-flex">
                                                <div class="comment_user">
                                                    <img src="/assets/img/user/user1.png" alt="user1">
                                                </div>
                                                <div class="comment_content">
                                                    <div class="d-flex align-items-md-center">
                                                        <div class="meta_data">
                                                            <h6><a href="#">Daisy Lana</a></h6>
                                                            <div class="comment-time">april 8, 2018, 5:15 PM</div>
                                                        </div>
                                                        <div class="ml-auto">
                                                            <a href="#" class="comment-reply"><i
                                                                    class="ion-reply-all"></i>Reply</a>
                                                        </div>
                                                    </div>
                                                    <p>We denounce with righteous indignation and dislike men who are so
                                                        beguiled and demoralized by the charms of pleasure of the
                                                        moment, so blinded by desire that the cannot foresee the pain
                                                        and trouble that.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="comment_info">
                                    <div class="d-flex">
                                        <div class="comment_user">
                                            <img src="/assets/img/user/user2.png" alt="user2">
                                        </div>
                                        <div class="comment_content">
                                            <div class="d-flex">
                                                <div class="meta_data">
                                                    <h6><a href="#">John Becker</a></h6>
                                                    <div class="comment-time">april 15, 2018, 10:30 PM</div>
                                                </div>
                                                <div class="ml-auto">
                                                    <a href="#" class="comment-reply"><i class="ion-reply-all"></i>Reply</a>
                                                </div>
                                            </div>
                                            <p>We denounce with righteous indignation and dislike men who are so
                                                beguiled and demoralized by the charms of pleasure of the moment, so
                                                blinded by desire that the cannot foresee the pain and trouble that.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="comment_replay_box">
                            <div class="content_title">
                                <h3>Write a comment</h3>
                            </div>
                            <form class="field_form">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <input name="name" class="form-control" placeholder="Your Name"
                                               required="required" type="text">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <input name="email" class="form-control" placeholder="Your Email"
                                               required="required" type="email">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <input name="website" class="form-control" placeholder="Your Website"
                                               required="required" type="text">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <textarea rows="3" name="message" class="form-control"
                                                  placeholder="Your Comment" required="required"></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <button value="Submit" name="submit"
                                                class="theme-btn-one btn_md btn-black-overlay"
                                                title="Submit Your Message!" type="submit">Submit
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @include('pages.partials.sidebar.sidebar')
            </div>
        </div>
    </section>
@endsection
