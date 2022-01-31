@extends('layouts.app')
@section('title', 'Unsubscribe')
@section('pages')

    @include('pages.partials.banner',[
        'currentPage' => 'Unsubscribe'

        ])


    <section id="login_area" class="ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="account_form">
                        <h3>Unsubscribe</h3>
                        <form  method="POST" action="{{ route('login') }}">
                            @csrf
                            @if($errors->has('email'))
                                <div class="alert alert-danger">
                                    {{$errors->first('email')}}
                                </div>
                            @endif
                            @if(session()->has('subscribeSuccess'))
                                <div class="alert alert-success">
                                    {{ session()->get('subscribeSuccess') }}
                                </div>
                            @endif
                            <div class="default-form-box">
                                <label>{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" < autocomplete="email" autofocus>
                            </div>
                            <div class="login_submit">
                                <button class="theme-btn-one btn-black-overlay btn_md" type="submit">        {{ __('Login') }}</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
