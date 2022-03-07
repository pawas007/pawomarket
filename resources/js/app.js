/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./axios/createTagCategory')
require('./axios/fastCheck')
require('./axios/cart')
require('./product-gallery')

$('.drop_down_trigger').on('click', function (e) {
    e.preventDefault()
    $(this).parent().toggleClass('drop_active');
})

$('.custom-dropdown-trigger').on('click', function (e) {
    e.preventDefault()
    $(this).parent().toggleClass('active')

})

let subHasActive = $('.sub-menu-custom a').hasClass('active');
subHasActive && $('.sub-menu-custom a.active').parent().parent().prev().addClass('active');
subHasActive && $('.sub-menu-custom a.active').parent().parent().parent().addClass('active');

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








