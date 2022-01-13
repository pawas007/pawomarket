@extends('layouts.app')
@section('pages')
    @include('pages.partials.banner',[
    'currentPage' => 'Blog'

  ])
@section('title', 'Blog')
    <section id="blog_list_area" class="ptb-100">
        <div class="container">
            <div class="row">
                @if($posts)
                    <div class="col-lg-9">
                        @foreach($posts as  $post)
                            <div class="blog_list_item img-zoom-hover">
                                <div class="row">
                                    <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                                        <div class="blog_one_img">
                                            <a href="{{ route('single.blog',['slug' => $post->slug])}}">
                                                <img src="{{$post->image}}" alt="{{$post->title}}">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                                        <div class="blog_text">
                                            <h5 class="date_area">{{$post->create}}   </h5>
                                            <h4 class="heading"><a
                                                    href="{{ route('single.blog',['slug' => $post->slug]) }}">{{$post->title}}</a>
                                            </h4>
                                            <p class="para">{{$post->short_description}}</p>
                                            <a href="{{ route('single.blog',['slug' => $post->slug]) }}" class="button">Read
                                                More<i
                                                    class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        @include('pages.partials.pagination', ['paginator' => $posts])
                    </div>
                @else
                    <div class="col-lg-9">
                        <h2>Post not found</h2>
                    </div>
                @endif
                @include('pages.partials.sidebar.sidebar')
            </div>
        </div>
    </section>
@endsection
