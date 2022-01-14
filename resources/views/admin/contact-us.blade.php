@extends('layouts.account')

@section('pages')
@section('title', 'Contact request')
@include('pages.partials.messages')
    @include('pages.partials.messages')
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Subject</th>
            <th scope="col">Phone</th>
            <th scope="col">Message</th>
        </tr>
        </thead>
        <tbody>
        @foreach($contactList as $contact)
            <tr>
                <th scope="col">{{$contact->id}}</th>
                <th scope="col">{{$contact->name}}</th>
                <th scope="col">{{$contact->email}}</th>
                <th scope="col">{{$contact->subject}}</th>
                <th scope="col">{{$contact->phone}}</th>
                <th scope="col " class="message-action"> message
                    <span class="content">  {{$contact->message}}</span>
                </th>
            </tr>
        @endforeach
        </tbody>
    </table>
@include('pages.partials.pagination', ['paginator' => $contactList])
@endsection
