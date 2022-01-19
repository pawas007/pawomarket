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
                    <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-8">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                                           value="{{old('title')}}" name="title">
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
                                              class="form-control @error('content') is-invalid @enderror"
                                              placeholder="Your Content"
                                              id="postContent"
                                    >{{old('content')}}</textarea>
                                </div>
                            </div>
                            <div class="col-4 sidebar-admin">
                                <div class="drop_down_box">
                                    <a href="#" class="drop_down_trigger">Categories<i class="fa fa-angle-down"></i></a>
                                    <div class="drop_down_container">
                                        @if($categories)
                                            <div class="list-container listCategory">
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
                                        <div class="modal_drop">
                                            <div class="input-group  mb-0 mt-2">
                                                <input type="text" class="form-control categoryName" placeholder="Add category">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-secondary addCategory" type="button">
                                                        Add
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="errors-category alert alert-danger mt-2 mb-0 ">
                                            </div>
                                            <div class="susses-category alert alert-success mt-2 mb-0">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="drop_down_box">
                                    <a href="#" class="drop_down_trigger">Tags<i class="fa fa-angle-down"></i></a>
                                    <div class="drop_down_container">

                                        @if($tags)
                                            <div class="list-container listTag">
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
                                            <div class="modal_drop">
                                                <div class="input-group  mb-0 mt-2">
                                                    <input type="text" class="form-control tagName" placeholder="Add tag">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-secondary addTag" type="button">
                                                            Add
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="errors-tag alert alert-danger mt-2 mb-0 ">
                                                </div>
                                                <div class="susses-tag alert alert-success mt-2 mb-0">
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="post_image mt-5">
                                    <input type='file' name="image" id="postImage" style="display:none;">
                                    <label for="postImage" class="postImage @error('image') is-invalid @enderror">
                                        <img id="uploadedImage" src="/assets/img/blog/default.jpg" alt="Uploaded Image"
                                             accept="image/png, image/jpeg">
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
@push('scripts')
    <script src="https://cdn.tiny.cloud/1/ty8x4wde3tocgap1wbzvjqhpcvzkcqn2lfox7hym00e1ngr5/tinymce/5/tinymce.min.js"
            referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#postContent',

            height: 500,
            plugins: [
                'advlist autolink link lists charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime nonbreaking',
                'table emoticons template paste help'
            ],
            toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
                'bullist numlist outdent indent | print preview media fullscreen | ' +
                'forecolor backcolor emoticons | help',
            menu: {
                favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
            },
            menubar: 'favs file edit view insert format tools table help',

        });
    </script>
@endpush
