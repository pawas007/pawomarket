@extends('layouts.account')
@section('title', 'Account')
@section('pages')
    <section id="account_edit">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="account_setting">
                        <div class="account_setting_heading">
                            <h2>Account Details</h2>
                            <p>Edit your account settings and change your password here.</p>
                        </div>
                        @include('pages.partials.messages')
                        <form action="{{route('update.account',$user->id)}}" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="account_thumd d-flex justify-content-start align-baseline mb-3">
                                <div class="account_thumb_img @error('image') is-invalid @enderror">
                                    @if($user->avatar)
                                        <img src="{{Storage::url($user->avatar)}}" alt="img" id="uploadedImage"
                                             class="user_avatar">
                                    @endif
                                    <div class="fixed_icon hover-image"><input type="file" name="image"
                                                                               id="accountImage"><i
                                            class="fas fa-camera"></i></div>
                                </div>
                                <h4 class="ml-2">{{$user->name}} </h4>
                            </div>

                            <div class="form-group">
                                <label for="f_name">Name</label>
                                <input type="text" class="form-control  @error('name') is-invalid @enderror" id="f_name"
                                       value="{{old('name',$user->name)}}" name="name">
                            </div>
                            <div class="form-group">
                                <label for="email_address">Email Address

                                    @if($user->email_verified_at)
                                        <span> <i class="fas fa-check-circle" style="color: green"></i></span>
                                    @else
                                        <span> (not verified)</span>
                                    @endif
                                </label>
                                <input type="text" class="form-control  @error('email') is-invalid @enderror"
                                       id="email_address" value="{{old('email',$user->email)}}" name="email">
                                <button type="submit" class="theme-btn-one bg-black btn_sm mt-4">Update Information
                                </button>
                            </div>
                        </form>

                        <form action="{{route('update.password')}}" method="POST" id="account_info_form">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="current_password">Current Password</label>
                                <input type="password" class="form-control @error('current_password') is-invalid @enderror" id="current_password" name="current_password"
                                      value="{{old('current_password')}}"
                                       placeholder="Enter your current password">
                                <input type="password" class="form-control  @error('password') is-invalid @enderror" id="new_password"
                                       name="password"
                                       value="{{old('password')}}"
                                       placeholder="Enter your new password">
                                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="re_password"
                                       name="password_confirmation"
                                       value="{{old('password_confirmation')}}"
                                       placeholder="Re-type your new password">
                                <button type="submit" class="theme-btn-one bg-black btn_sm">Update Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
