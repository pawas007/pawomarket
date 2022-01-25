/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./axios/createTagCategory')

$('.drop_down_trigger').on('click', function (e) {
    e.preventDefault()
    $(this).parent().toggleClass('drop_active');
})

$('.custom-dropdown-trigger').on('click', function (e) {
    e.preventDefault()
    $(this).parent().toggleClass('active')

})

let subHasActive = $('.sub-menu-custom a').hasClass('active');
subHasActive &&$('.sub-menu-custom a.active').parent().parent().prev().addClass('active');
subHasActive &&$('.sub-menu-custom a.active').parent().parent().parent().addClass('active');

$('#postImage , #accountImage').on('change', function () {
        if (this.files[0]) {
            var picture = new FileReader();
            picture.readAsDataURL(this.files[0]);
            picture.addEventListener('load', function (event) {
                document.getElementById('uploadedImage').setAttribute('src', event.target.result);

            });
        }
    }
);



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

