<div class="col-lg-3">
    <div class="shop_sidebar_wrapper">
        <div class="shop_Search">
            <form action="#!">
                <input type="text" class="form-control" placeholder="Search...">
                <button><img src="assets/img/svg/search.svg" alt="img"></button>
            </form>
        </div>
        <div class="shop_sidebar_boxed">
            <h4>Product Categories</h4>
            <form action="#!">
                <label class="custom_boxed">Woman Dresses
                    <input type="radio" checked="checked" name="radio">
                    <span class="checkmark"></span>
                </label>
                <label class="custom_boxed">T-shirts
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>
                <label class="custom_boxed">Fashion
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>
                <label class="custom_boxed">Bags
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>
                <label class="custom_boxed">Jackets
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>
                <label class="custom_boxed">Shoes
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>
                <label class="custom_boxed">Jeans
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>
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
        <div class="shop_sidebar_boxed">
            <h4>Color</h4>
            <div class="product-variable-color">
                <label for="modal-product-color-red6">
                    <input name="modal-product-color" id="modal-product-color-red6" class="color-select" type="radio" checked="">
                    <span class="product-color-red"></span>
                </label>
                <label for="modal-product-color-tomato1">
                    <input name="modal-product-color" id="modal-product-color-tomato1" class="color-select" type="radio">
                    <span class="product-color-tomato"></span>
                </label>
                <label for="modal-product-color-green2">
                    <input name="modal-product-color" id="modal-product-color-green2" class="color-select" type="radio">
                    <span class="product-color-green"></span>
                </label>
                <label for="modal-product-color-light-green3">
                    <input name="modal-product-color" id="modal-product-color-light-green3" class="color-select" type="radio">
                    <span class="product-color-light-green"></span>
                </label>
                <label for="modal-product-color-blue4">
                    <input name="modal-product-color" id="modal-product-color-blue4" class="color-select" type="radio">
                    <span class="product-color-blue"></span>
                </label>
                <label for="modal-product-color-light-blue5">
                    <input name="modal-product-color" id="modal-product-color-light-blue5" class="color-select" type="radio">
                    <span class="product-color-light-blue"></span>
                </label>
            </div>
        </div>
        <div class="shop_sidebar_boxed">
            <h4>Size</h4>
            <form action="#!" id="sizes_input">
                <label class="custom_boxed">XS
                    <input type="radio" checked="checked" name="radio">
                    <span class="checkmark"></span>
                </label>
                <label class="custom_boxed">S
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>
                <label class="custom_boxed">M
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>
                <label class="custom_boxed">L
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>
                <label class="custom_boxed">XL
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>
            </form>
        </div>
        <div class="shop_sidebar_boxed">
            <h4>Brand</h4>
            <form action="#!">
                <label class="custom_boxed">Next
                    <input type="radio" checked="checked" name="radio">
                    <span class="checkmark"></span>
                </label>
                <label class="custom_boxed">Adidas
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>
                <label class="custom_boxed">Calvin Klein
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>
                <label class="custom_boxed">Nike
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>
                <label class="custom_boxed">Geox
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>
                <label class="custom_boxed">River Island
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>
                <div class="clear_button">
                    <button class="theme-btn-one btn_sm btn-black-overlay">Clear Filter</button>
                </div>
            </form>
        </div>
    </div>
</div>






@push('scripts')
    <script>
        const maxVal = {{$priceRange['max']}};
        const minVal = {{$priceRange['min']}};
        $(function () {
            //range filter
            var handle1 = $( ".myCustom-handle1 span" );
            var handle2 = $( ".myCustom-handle2 span" );
            $("#slider").slider({
                range: true,
                min: minVal,
                max: maxVal,
                step: 1,
                values: [minVal, maxVal],
                animate: 300,
                create: function(event, ui ) {
                    handle1.text( $( this ).slider(  "values", 0 ) );
                    handle2.text( $( this ).slider(  "values", 1 ) );
                },
                slide: function (event, ui) {
                    for (var i = 0; i < ui.values.length; ++i) {
                        $("input.sliderValue[data-index=" + i + "]").val(ui.values[i]);
                    }
                    handle1.text(ui.values[0]);
                    handle2.text(ui.values[1]);
                }
            });
            $("input.sliderValue").change(function () {
                var $this = $(this);
                $("#slider").slider("values", $this.data("index"), $this.val());
                console.log($this.data("index"));
                $(`.myCustom-handle${$this.data("index") + 1}`).find('span').text($this.val());
            });
        });
    </script>
@endpush
