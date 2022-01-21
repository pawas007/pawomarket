@extends('layouts.account')
@section('title', 'Post categories')
@section('pages')
    <div class="row"><h2 class="mb-3">Post categories</h2></div>
    <div class="row">
        @include('pages.partials.messages')
    </div>
    <div class="row">
        <form action="{{route('categoryPost.store')}}" class="w-100" method="post">
            @csrf
            <div class="row">
                <div class="form-group  col-9 ">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Category name"
                           value="{{old('name')}}" name="name">
                </div>
                <div class="form-group  col-3 ">
                    <button type="submit" class="theme-btn-one bg-black btn_sm">Save</button>
                </div>
            </div>
        </form>
    </div>
    <div class="row">
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Slug</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categoryPosts as  $categoryPost)
                <tr>
                    <th scope="col">{{$categoryPost->id}}</th>
                    <th scope="col">{{$categoryPost->name}}</th>
                    <th scope="col">{{$categoryPost->slug}}</th>
                    <th scope="col">
                        <div class="wrap_action d-flex">
                            <form action="{{route('categoryPost.destroy',$categoryPost->id)}}" method="post" class="mr-2">
                                @method('delete')
                                @csrf
                                <button type="submit" class="theme-btn-one bg-black ">Delete</button>
                            </form>
                            <form action="{{route('categoryPost.edit',$categoryPost)}}" method="get">
                                @method('delete')
                                @csrf
                                <button type="submit" class="theme-btn-one bg-black ">Edit</button>
                            </form>
                        </div>


                    </th>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
    @include('pages.partials.pagination', ['paginator' => $categoryPosts])
@endsection
