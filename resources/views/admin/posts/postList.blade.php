@extends('layouts.account')
@section('title', 'Posts')
@section('pages')
    @include('pages.partials.messages')
    <div class="row">
        <div class="col-12">
        <h2 class="h2">Post list</h2>
            <hr>
            <h6 class="h6">Search</h6>
            <form action="{{route('post.admin.search')}}" method="get">
     
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="search" placeholder="Post title" value="{{old('search', request()->search)}}">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" type="button">Search</button>
                    </div>
                </div>

            </form>
        </div>
    </div>

@if(count($posts))
    <div class="row">
        <div class="col-12">

            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Created</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as  $post)
                    <tr>
                        <th scope="col">{{$post->id}}</th>
                        <th scope="col">    <a href="{{route('single.blog',$post->slug)}}">{{$post->title}}</a></th>
                        <th scope="col">{{$post->create}}</th>
                        <th scope="col"><a href="{{route('post.destroy',$post->id)}}">Delete</a> | <a
                                href="{{route('post.edit',$post)}}">Edit</a></th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@else
    <div class="row">
        <div class="col-12">
            <h2 class="h2">Post not found</h2>
        </div></div>
    @endif
    @include('pages.partials.pagination', ['paginator' => $posts])


@endsection
