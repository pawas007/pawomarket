@extends('layouts.account')
@section('title', 'Account')
@section('pages')


    <section id="account_edit" >
        <div class="container">

            <div class="row">

                <div class="col-lg-12">
                    <div class="account_setting">
                        <div class="account_setting_heading">
                            <h2>Account Details</h2>
                            <p>Edit your account settings and change your password here.</p>
                        </div>


                            <div class="account_thumd d-flex justify-content-start align-baseline mb-3">
                                <div class="account_thumb_img">
                                    @if(auth()->user()->avatar)
                                        <img src="{{auth()->user()->avatar}}" alt="img" style="max-width: 200px">
                                    @endif
                                    <div class="fixed_icon hover-image"><input type="file"><i class="fas fa-camera"></i></div>
                                </div>
                                <h4 class="ml-2">{{auth()->user()->name}} </h4>
                            </div>




                        <form action="!#" id="account_info_form">
                            <div class="input-radio">
                                <span class="custom-radio"><input type="radio" value="1" name="id_gender"> Mr.</span>
                                <span class="custom-radio"><input type="radio" value="1" name="id_gender"> Mrs.</span>
                            </div>
                            <div class="form-group">
                                <label for="f_name">Name</label>
                                <input type="text" class="form-control" id="f_name" value="{{auth()->user()->name}}" required="">
                                <input type="text" class="form-control"  placeholder="Cage">
                            </div>
                            <div class="form-group">
                                <label for="email_address">Email Address</label>
                                <input type="text" class="form-control" id="email_address" value="{{auth()->user()->email}}" required="">
                                <button type="submit" class="theme-btn-one bg-black btn_sm">Update Information</button>
                            </div>

                            <div class="form-group">
                                <label for="current_password">Current Password</label>
                                <input type="password" class="form-control" id="current_password" placeholder="Enter your current password" required="">
                                <input type="password" class="form-control" id="new_password" placeholder="Enter your new password" required="">
                                <input type="password" class="form-control" id="re_password" placeholder="Re-type your new password" required="">
                                <button type="submit" class="theme-btn-one bg-black btn_sm">Update Password</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
