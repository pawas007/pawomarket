@extends('layouts.app')
@section('pages')

    @include('pages.partials.banner',[
        'currentPage' => 'Login'

        ])


    <section id="login_area" class="ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-12 col-sm-12 col-12">
                <div class="account_form">
                    <h3>Login</h3>
                    <form  method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="default-form-box">
                            <label>{{ __('E-Mail Address') }}</label>

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="default-form-box">
                            <label>Passwords <span>*</span></label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="login_submit">
                            <button class="theme-btn-one btn-black-overlay btn_md" type="submit">        {{ __('Login') }}</button>

                        </div>

                        @include('auth.partials.social')


                        <div class="remember_area">
                            <label class="checkbox-default" >
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <span>      {{ __('Remember Me') }}</span>
                            </label>
                        </div>

                        <div class="row justify-content-between m-0">

                            <a  href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                            <a href="{{ route('register') }}">Create Your Account</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
