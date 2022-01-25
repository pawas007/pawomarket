@push('scripts')
    <script>
        const maxVal = {{$priceRange['max']}};
        const minVal = {{$priceRange['min']}};
    </script>
@endpush
<div class="col-lg-3">
    <div class="shop_sidebar_wrapper">
        <div class="shop_Search">
            <form action="SEARCH">
                <input type="text" class="form-control" placeholder="Search...">
                <button><img src="assets/img/svg/search.svg" alt="img"></button>
            </form>
        </div>
        <div class="price_range shop_sidebar_boxed">
            <h4>Price</h4>
            <div id="slider">
                <div class="ui-slider-handle myCustom-handle1" id="custom-handle"><span></span></div>
                <div class="ui-slider-handle myCustom-handle2" id="custom-handle2"><span></span></div>
                <div class="values">
                    <input class="sliderValue" type="text" data-index="0" value="{{$priceRange['min']}}"
                           min="{{$priceRange['min']}}"
                           onkeyup="this.value = this.value.replace(/[A-Za-zА-Яа-яЁё]/, '');"/>
                    <input class="sliderValue" type="text" data-index="1" value="{{$priceRange['max']}}"
                           max="{{$priceRange['max']}}"
                           onkeyup="this.value = this.value.replace(/[A-Za-zА-Яа-яЁё]/, '');"/>
                </div>
            </div>
        </div>
        @foreach($attributes as $attribute)
            <div class="shop_sidebar_boxed">
                <h4>{{$attribute->name}}</h4>
                @foreach($attribute->values as $value)
                    @if($attribute->slug == 'colors')
                        <div class="product-variable-color">
                            <label for="modal-product-color-{{$value->value}}">
                                <input id="modal-product-color-{{$value->value}}" class="color-select" type="checkbox"
                                       name="attribute[]" value="{{$value->id}}">
                                <span style="background: {{$value->color_code}}"></span>
                            </label>
                        </div>
                    @else
                        <label class="custom_boxed">
                            {{$value->value}}
                            <input type="checkbox" name="attribute[]" value="{{$value->id}}">
                            <span class="checkmark"></span>
                        </label>
                    @endif
                @endforeach
            </div>
        @endforeach
    </div>
</div>
