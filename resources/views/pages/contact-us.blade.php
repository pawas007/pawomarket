@extends('layouts.app')
@section('pages')
    @include('pages.partials.banner',[
    'currentPage' => 'Contact Us'

  ])
@section('title', 'Contact Us')
    <section id="contact_area" class="ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact_info">
                        <h3>Contact Information</h3>
                        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                            Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                            Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                            Proin eget tortor risus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.
                            Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus magna justo,
                            lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictum
                            porta.
                            Proin eget tortor risus. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="left_side_contact">
                        <ul>
                            <li class="address_location">
                                <i class="fas fa-map-marker-alt"></i>
                                <p>32, Choto Mirzapur, Ahsan Ahmed Road Khulna 9100, Bangladesh</p>
                            </li>
                            <li class="address_location">
                                <i class="fas fa-phone-volume"></i>
                                <div class="contact_widget">
                                    <a href="#!">+1 (833) 287-3077</a>
                                    <a href="#!">+1 (833) 528-8619</a>
                                </div>
                            </li>
                            <li class="address_location">
                                <i class="far fa-envelope"></i>
                                <div class="contact_widget">
                                    <a href="mailto:demo235@gmail.com">demo@gmail.com</a>
                                    <a href="mailto:demo235@gmail.com">demo@gmail.com</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-8">

                    <div class="contact_form_one">
                        <h3>Get In Touch</h3>
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{session('success')}}
                            </div>
                        @endif
                        <form class="field_form" method="post" action="{{route('create.contacts')}}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text"
                                               class="form-control @error('name') is-invalid @enderror"
                                               placeholder="Name*"
                                               name="name"
                                               value="{{ old('name') }}"

                                        >
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text"
                                               class="form-control @error('email') is-invalid @enderror"
                                               placeholder="Email*"
                                               name="email"
                                               value="{{ old('email') }}"
                                        >
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text"
                                               name="phone"
                                               placeholder="Phone*"
                                               class="form-control @error('phone') is-invalid @enderror"
                                               value="{{ old('phone') }}"

                                        >
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text"
                                               name="subject"
                                               placeholder="Subject*"
                                               class="form-control @error('subject') is-invalid @enderror"
                                               value="{{ old('subject')}}"
                                        >
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <textarea rows="7"
                                                  name="message"
                                                  placeholder="Message*"
                                                  class="form-control @error('message') is-invalid @enderror"
                                        >
                                            {{ old('message') }}

                                        </textarea>
                                    </div>
                                    <div class="submit_bitton_contact_one">
                                        <button class="theme-btn-one btn-black-overlay btn_md">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="map_area">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.6962663570607!2d89.56355961427838!3d22.813715829827952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff901efac79b59%3A0x5be01a1bc0dc7eba!2sAnd+IT!5e0!3m2!1sen!2sbd!4v1557901943656!5m2!1sen!2sbd"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
