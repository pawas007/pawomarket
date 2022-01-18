/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


require('./blogPostAxios')


$('.drop_down_trigger').on('click', function (e) {
    e.preventDefault()
    $(this).parent().toggleClass('drop_active');
})
$('.custom-dropdown-trigger').on('click', function (e) {
    e.preventDefault()
    $(this).parent().toggleClass('active')

})

let subHasActive = $('.sub-menu-custom a').hasClass('active');
subHasActive && $('.custom-dropdown-trigger,.has-dropdown-custom').addClass('active')


$('#postImage').on('change', function () {
        if (this.files[0]) {
            var picture = new FileReader();
            picture.readAsDataURL(this.files[0]);
            picture.addEventListener('load', function (event) {
                document.getElementById('uploadedImage').setAttribute('src', event.target.result);

            });
        }
    }
);
