@extends('layouts.account')
@section('pages')
@section('title', 'Instagram API')
    @include('pages.partials.messages')
<section id="account_edit" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                    <div class="account_setting_heading">
                        <h2>Instagram API</h2>
                        <p>Edit your account settings here.</p>
                    </div>
                    <form action="{{route('set.instagram.settings')}}" id="account_info_form" method="post">
                        @csrf
                        <div class="row">
                            <div class="form-group  col-lg-3 col-12 ">
                                <label >User name</label>
                                <input type="text" class="form-control  @error('name') is-invalid @enderror"  value="{{$accountData->name}}" name="name" >
                            </div>
                            <div class="form-group col-lg-3 col-12 ">
                                <label >User password</label>
                                <input type="password" class="form-control  @error('password') is-invalid @enderror"  value="{{$accountData->password}}"  name="password" >
                            </div>
                            <div class="form-group col-lg-3 col-12 ">
                                <label >Account name</label>
                                <input type="text" class="form-control  @error('account') is-invalid @enderror"  value="{{$accountData->account}}"  name="account" >
                            </div>
                        </div>
                        <button type="submit" class="theme-btn-one bg-black btn_sm">Update Information</button>
                        <a class="theme-btn-one bg-black btn_sm" href="{{route('get.instagram')}}">Get posts</a>
                        </form>


            </div>
        </div>
    </div>
</section>









@endsection
