@extends('layouts.account')
@section('pages')
@section('title', 'Currency')
@push('style')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css" rel="stylesheet">
@endpush
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js" defer></script>
@endpush
<div class="row"><h2 class="mb-3">Currency</h2></div>
<div class="row">
    @include('pages.partials.messages')
</div>
@if(count($apiCurrency))
<div class="row">
    <h6 class="h6">Add currency</h6>
</div>
<form action="{{route('store.currency')}}" method="POST">
    @csrf
    <div class="row d-flex align-items-center">
        <div class="form-group">
            <select class="selectpicker" data-live-search="true" name="code">
                @foreach($apiCurrency as  $key => $currency)
                    <option data-tokens="{{$key}}" value="{{$key}}">{{$key}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group ml-3">
            <input type="text" class="form-control @error('symbol') is-invalid @enderror"
                   value="{{old('symbol')}}" name="symbol" placeholder="Currency symbol">

        </div>
        <div class="form-group ml-2">
            <button type="submit" class="theme-btn-one bg-black btn_sm">Add</button>
        </div>
    </div>
</form>
@endif
@if(count($currencyList))
    <div class="row">
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Code</th>
                <th scope="col">Symbol</th>
                <th scope="col">Value</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($currencyList as $currency)
                <tr>
                    <th scope="col">{{$currency->id}}</th>
                    <th scope="col">{{$currency->code}}</th>
                    <th scope="col">{{$currency->symbol}}</th>
                    <th scope="col">
                        @if($currency->is_main)
                            Main currency
                        @else
                            {{$currency->value}}
                        @endif
                    </th>
                    <th scope="col">
                        @if(!$currency->is_main)
                        <a href="{{route('set.main.currency',$currency->id)}}">Set main</a>
                            |
                            <a href="{{route('remove.currency',$currency)}}">Remove</a>
                        @endif
                    </th>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a class="theme-btn-one bg-black btn_sm" href="{{route('update.currency')}}">Update currency</a>
    </div>
@endif
@endsection
