@extends('layouts.account')
@section('title', 'Tags')
@section('pages')
    <div class="row"><h2 class="mb-3">Tags</h2></div>
    <div class="row">
        @include('pages.partials.messages')
    </div>
    <div class="row">
        <form action="{{route('tag.store')}}" class="w-100" method="post">
            @csrf
            <div class="row">
                <div class="form-group  col-9 ">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Tag name"
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
            @foreach($tags as  $tag)
                <tr>
                    <th scope="col">{{$tag->id}}</th>
                    <th scope="col">{{$tag->name}}</th>
                    <th scope="col">{{$tag->slug}}</th>
                    <th scope="col">
                        <div class="wrap_action d-flex">
                            <form action="{{route('tag.destroy',$tag->id)}}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="theme-btn-one bg-black ">Delete</button>
                            </form>
                            <span class='px-1'>| </span>

                            <form action="{{route('tag.destroy',$tag->id)}}" method="post">
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
        @include('pages.partials.pagination', ['paginator' => $tags])</div>
@endsection
