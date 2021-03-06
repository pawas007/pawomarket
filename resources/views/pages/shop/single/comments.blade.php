<div class="comment_replay_box">
    <div class="content_title">
        <h3>Write a comment</h3>
    </div>
    @include('pages.partials.messages')
    <form class="field_form" method="post" action="{{route('add.product.comment')}}">
        @csrf
        <input type="number" hidden name="id" value="{{$id}}">
        <div class="row">
            <div class="form-group col-md-6">
                @if(auth()->user())
                    <input name="name" value="{{ auth()->user()->name }}" hidden>
                    <input
                        class="form-control @error('name') is-invalid @enderror"
                        placeholder="Your Name"
                        value="{{ auth()->user()->name}}"
                        name="name"
                        type="text"
                        disabled

                    ></div>
            <div class="form-group col-md-6">
                <input name="email" value="{{ auth()->user()->email }}" hidden>
                <input
                    class="form-control @error('email') is-invalid @enderror"
                    placeholder="Your Email"
                    value="{{ auth()->user()->email }}"
                    type="email" name="email" disabled>
            </div>
            @else
                <input name="name"
                       class="form-control @error('name') is-invalid @enderror"
                       placeholder="Your Name"
                       value="{{ old('name') }}"
                       name="name"
                       type="text"></div>
        <div class="form-group col-md-6">
            <input name="email"
                   class="form-control @error('email') is-invalid @enderror"
                   placeholder="Your Email"
                   value="{{ old('email') }}"
                   type="email" name="email">
        </div>
        @endif

        <div class="form-group col-md-12 product_rating">
            <div class="rating_wrp d-flex flex-row-reverse">

                <input type="radio" name="rating" value="5" id="r5">
                <label for="r5"></label>

                <input type="radio" name="rating" value="4" id="r4">
                <label for="r4"></label>

                <input type="radio" name="rating" value="3" id="r3">
                <label for="r3"></label>

                <input type="radio" name="rating" value="2" id="r2">
                <label for="r2"></label>

                <input type="radio" name="rating" value="1" id="r1" checked>
                <label for="r1"></label>

            </div>

        </div>

        <div class="form-group col-md-12">
                                        <textarea rows="5"
                                                  name="message"
                                                  class="form-control @error('message') is-invalid @enderror"
                                                  placeholder="Your Comment"
                                        >{{ old('message')}}</textarea>
        </div>
        <div class="form-group col-md-12">
            <button
                class="theme-btn-one btn_md btn-black-overlay"
                type="submit">Submit
            </button>
        </div>

    </form>
</div>
