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
                                        <div class="comment_content">
                                            <div class="d-flex">
                                                <div class="meta_data">
                                                    <h6>John Becker</h6>
                                                    <div class="comment-time">april 15, 2018, 10:30 PM</div>
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
                        <hr>
                        <div class="comment_replay_box">
                            <div class="content_title">
                                <h3>Write a comment</h3>
                            </div>
                            <form class="field_form" method="post" action="{{route('add.comment')}}">
                                @csrf
                                <input type="number" hidden name="id" value="{{$singlePost->id}}">
                                <input type="text" hidden name="type" value="post">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <input name="name"
                                               class="form-control @error('name') is-invalid @enderror"
                                               placeholder="Your Name"
                                               value="{{ old('name') }}"
                                               name="name"
                                               type="text"></div>
                                    <div class="form-group col-md-6">
                                        <input name="email"
                                               class="form-control @error('email') is-invalid @enderror"
                                               placeholder="Your Email"
                                               value="{{ old('email') }}"
                                               type="email" name="email">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <textarea rows="5"
                                                  name="message"
                                                  class="form-control @error('message') is-invalid @enderror"
                                                  placeholder="Your Comment"
                                        >{{ old('message')}}</textarea>
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
