@extends('layouts.app')
@section('pages')

    @include('pages.partials.banner',[
    'parent'=>'Blog',
    'currentPage' => $singlePost->title

    ])

@section('title', $singlePost->title)
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
                                @if(!$singlePost->tags->isEmpty())
                                    <p class="pb-2">Tags:</p>
                                    <ul>
                                        @foreach($singlePost->tags as $tag)
                                            <li><a href="{{route('post.tag',$tag->slug)}}"> {{$tag->name}}</a></li>
                                        @endforeach
                                    </ul>
                                @endif
                                    @if(!$singlePost->categories->isEmpty())
                                        <p class="pb-2 mt-2">Categories:</p>
                                        <ul>
                                            @foreach($singlePost->categories as $category)
                                                <li><a href="{{route('post.category', $category->slug)}}"> {{ $category->name}}</a></li>
                                            @endforeach
                                        </ul>
                                    @endif
                            </div>
                        </div>
                        <hr>
                        @include('pages.partials.comments',['comments' => $singlePost->comments, 'type'=>'post','id'=>$singlePost->id])
                    </div>
                </div>
                @include('pages.partials.sidebar.sidebar')
            </div>
        </div>
    </section>
@endsection
