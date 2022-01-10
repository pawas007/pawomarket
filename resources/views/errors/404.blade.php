@extends('layouts.app')
@section('pages')
    @include('pages.partials.banner',[
        'currentPage' => '404'
])
    <section id="error_area" class="ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="erorr_wrapper">
                    <h1>404</h1>
                    <h3>We are sorry, the page you've requested is not available</h3>
                    <form action="#!">
                        <div class="input-group">
                            <input type="text" class="form-control">
                            <button><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                    <a href="index.html" class="theme-btn-one btn-black-overlay btn_md">Back To Home Page</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
