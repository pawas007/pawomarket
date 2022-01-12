@extends('layouts.account')
@section('pages')
    @if(session('success'))
        <div class="alert alert-danger">
            {{session('success')}}
        </div>
    @endif
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
                <th scope="col">{{$post->title}}</th>
                <th scope="col">{{$post->create}}</th>
                <th scope="col"><a href="{{route('post.destroy',$post->id)}}">Delete</a> | <a href="{{route('post.edit',$post->id)}}">Edit</a></th>
            </tr>
        @endforeach
        </tbody>
    </table>
    @include('pages.partials.pagination', ['paginator' => $posts])
@endsection
