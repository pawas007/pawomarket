@extends('layouts.account')
@section('title', 'Tags edit')
@section('pages')
    <div class="row"><h2 class="mb-3">Tag edit</h2></div>
    <div class="row">
        @include('pages.partials.messages')
    </div>
    <div class="row">
        <form action="{{route('tag.update',$tag)}}" class="w-100" method="post">
            @method('PUT')
            @csrf

            <div class="row">
                <div class="form-group  col-9 ">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Tag name"
                           value="{{$tag->name}}" name="name">
                </div>
                <div class="form-group  col-3 ">
                    <button type="submit" class="theme-btn-one bg-black btn_sm">Save</button>
                </div>
            </div>
        </form>
    </div>
@endsection
