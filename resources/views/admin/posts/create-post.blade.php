@extends('layouts.account')
@section('title', 'Create post')
@section('pages')
    <section id="account_edit">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading">
                            <h2>Create post</h2>
                        </div>
                        @include('pages.partials.messages')
                        <form action="{{route('post.store')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-8">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control" value="{{old('title')}}" name="title">
                                    </div>
                                    <div class="form-group">
                                        <label>Short description</label>
                                        <textarea rows="5"
                                                  name="short_description"
                                                  class="form-control @error('short_description') is-invalid @enderror"
                                                  placeholder="Your Content"
                                        >{{old('short_description')}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Post content</label>
                                        <textarea rows="10"
                                                  name="content"
                                                  class="form-control @error('message') is-invalid @enderror"
                                                  placeholder="Your Content"
                                        >{{old('content')}}</textarea>
                                    </div>
                                </div>
                                <div class="col-4 sidebar-admin">
                                    <div class="drop_down_box">
                                        <a href="#" class="drop_down_trigger">Categories<i class="fa fa-angle-down"></i></a>
                                        <div class="drop_down_container">
                                            @if($categories)
                                            <div class="list-container">
                                                @foreach($categories as $category)
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                               id="{{$category->slug}}" name="categories[]"
                                                               value="{{$category->id}}">
                                                        <label class="form-check-label" for="{{$category->slug}}">
                                                            {{$category->name}}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                                @endif
                                        </div>
                                    </div>
                                    <div class="drop_down_box">
                                        <a href="#" class="drop_down_trigger">Tags<i class="fa fa-angle-down"></i></a>
                                        <div class="drop_down_container">

                                            @if($tags)
                                                <div class="list-container">
                                                    @foreach($tags as $tag)
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                   id="{{$tag->slug}}" name="tags[]"
                                                                   value="{{$tag->id}}">
                                                            <label class="form-check-label" for="{{$tag->slug}}">
                                                                {{$tag->name}}
                                                            </label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="post_image mt-5">
                                        <input type='file' id="postImage" style="display: none">
                                        <label for="postImage" class="postImage">
                                            <img id="uploadedImage" src="/assets/img/blog/default.jpg" alt="Uploaded Image" accept="image/png, image/jpeg">
                                        </label>
                                    </div>


                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <button
                                        class="theme-btn-one btn_md btn-black-overlay"
                                        type="submit">Create
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>


            </div>
        </div>
    </section>
@endsection
