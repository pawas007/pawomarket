@extends('layouts.account')
@section('title', 'Category edit')
@section('pages')
    <div class="row"><h2 class="mb-3">Category edit</h2></div>
    <div class="row">
        @include('pages.partials.messages')
    </div>
    <div class="row">
        <form action="{{route('categoryPost.update',$categoryPost)}}" class="w-100" method="post">
            @method('PUT')
            @csrf

            <div class="row">
                <div class="form-group  col-9 ">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Tag name"
                           value="{{$categoryPost->name}}" name="name">
                </div>
                <div class="form-group  col-3 ">
                    <button type="submit" class="theme-btn-one bg-black btn_sm">Save</button>
                </div>
            </div>
        </form>
    </div>
@endsection
