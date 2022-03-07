@extends('layouts.account')
@section('pages')
@section('title', 'Product create')


<div class="messages">
    @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif
    @if($errors->any())

        @foreach($errors->all() as $error)
            <div class="alert alert-danger">
                {{$error}}
            </div>
        @endforeach
    @endif
</div>
<style type="text/css">
    .gridly {
        position: relative;
        width: 960px;
    }

    .brick {
        width: 140px;
        height: 140px;
        background: rebeccapurple;
        border-radius: 0.25rem;
    }

    .delete-gallery-item {
        font-size: 25px;
        width: 25px;
        height: 24px;
        position: absolute;
        right: 5px;
        top: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(255, 255, 255, 0.3);
        cursor: pointer;
        border-radius: 0.25rem;
    }

</style>
<section id="account_edit">
    <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="account_setting_heading">
                        <h2>Product create</h2>
                    </div>
                    <div class="row">
                        <div class="form-group   col-12 mb-0">
                            <label>Name</label>
                            <input type="text" class="form-control  @error('name') is-invalid @enderror"
                                   value="{{old('name')}}"
                                   name="name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group  col-6 mb-0 ">
                            <label>Price</label>
                            <input type="number" class="form-control  @error('price') is-invalid @enderror"
                                   value="{{old('price')}}"
                                   name="price">
                        </div>
                        <div class="form-group  col-6 mb-0">
                            <label>Old Price</label>
                            <input type="number" class="form-control  @error('old_price') is-invalid @enderror"
                                   value="{{old('old_price')}}"
                                   name="old_price">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group  col-12 mb-0">
                            <label>Vendor code</label>
                            <input type="text" class="form-control  @error('vendor_code') is-invalid @enderror"
                                   value="{{old('vendor_code')}}"
                                   name="vendor_code">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group  col-12 mb-0">
                            <label>Description</label>
                            <textarea rows="5"
                                      name="description"
                                      class="form-control @error('description') is-invalid @enderror"
                                      placeholder="Description"
                            >{{old('description')}}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group  col-12 mb-0">
                            <label>Information</label>
                            <textarea rows="5"
                                      name="information"
                                      class="form-control @error('information') is-invalid @enderror"
                                      placeholder="Description"
                            >{{old('information')}}</textarea>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <div class="product_gallery">
                                <div class="upload__box">
                                    <div class="upload__btn-box">
                                        <label>
                                            <p class="theme-btn-one bg-black btn_sm button-upload-txt">Upload images</p>
                                            <input type="file" multiple="" data-max_length="20" name="gallery[]"
                                                   class="upload__inputfile">
                                        </label>
                                    </div>

                                    {{old('gallery')}}

                                    <div class="upload__img-wrap"></div>
                                </div>
                            </div>
                        </div>
                    </div>


                    {{--                    <div class="row">--}}
                    {{--                        <div class="col-12">--}}
                    {{--                            <h4 class="h4">Product gallery</h4>--}}
                    {{--                            <div class="gridly">--}}
                    {{--                                <div class="brick" data-id="1" id="1">--}}
                    {{--                                    <span class="delete-gallery-item">×</span>--}}
                    {{--                                </div>--}}
                    {{--                                <div class="brick" data-id="2" id="2">--}}
                    {{--                                    <span class="delete-gallery-item">×</span>--}}
                    {{--                                </div>--}}
                    {{--                                <div class="brick" data-id="3" id="3">--}}
                    {{--                                    <span class="delete-gallery-item">×</span>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="col-12 mb-4">--}}
                    {{--                            <button class="theme-btn-one bg-black btn_sm" id="change_position">Change position</button>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}


                    <button type="submit" class="theme-btn-one bg-black btn_sm">Add</button>
                </div>
                <div class="col-lg-4">
                    <h5 class="h5 mt-5">Attributes</h5>
                    <div class="row">
                        <div class="form-group mr-2 mb-0">
                            <label class="select_width">New
                                <input type="checkbox" class="form-control  @error('name') is-invalid @enderror"
                                       value="1"
                                       @if(old('new')) checked @endif
                                       name="new"> </label>
                        </div>
                        <div class="form-group  mb-0">
                            <label class="select_width">Hot
                                <input type="checkbox" class="form-control  @error('hot') is-invalid @enderror"
                                       value="1"
                                       @if(old('hot')) checked @endif
                                       name="hot"> </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>


@endsection
