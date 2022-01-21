@extends('layouts.app')
@section('title', 'Reset password')
@section('pages')
    <section id="login_area" class="ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-12 col-sm-10 col-10">
                    <div class="account_form">
                        <h2>{{ __('Reset Password') }}</h2>
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <input type="hidden" name="token" value="{{ $token }}">

                                <div class="col-12">
                                    <label for="email"
                                           class="col-form-label ">{{ __('E-Mail Address') }}</label>
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            <div class="col-12 ">
                                    <label for="password"
                                           class="col-form-label ">{{ __('Password') }}</label>
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            <div class="col-12">
                                    <label for="password-confirm"
                                           class=" col-form-label ">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required autocomplete="new-password">
                                </div>
                            <div class="row mt-5">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="theme-btn-one btn-black-overlay btn_md">
                                        {{ __('Reset Password') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
