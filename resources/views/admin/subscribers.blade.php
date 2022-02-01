@extends('layouts.account')

@section('pages')
@section('title', 'Subscribers')
<div class="row"><h2 class="mb-3">Subscribers</h2></div>


@if(count($subscribers))

    <div class="row">
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Email</th>
                <th scope="col">Active</th>
            </tr>
            </thead>
            <tbody>
            @foreach($subscribers as $subscriber)
                <tr>
                    <th scope="col">{{$subscriber->email}}</th>
                    <th scope="col">
                        @if($subscriber->active)
                            active
                        @else

                            unsubscribed
                        @endif
                    </th>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@else

    <div class="row"><h6 class="mb-3">Subscribers not found</h6></div>
@endif

@include('pages.partials.pagination', ['paginator' => $subscribers])
@endsection
