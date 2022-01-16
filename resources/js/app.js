/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');



$('.drop_down_trigger').on('click',function (e){
    e.preventDefault()
    $(this).parent().toggleClass('drop_active');
})



document.getElementById('postImage').addEventListener('change', function(){
    if (this.files[0] ) {
        var picture = new FileReader();
        picture.readAsDataURL(this.files[0]);
        picture.addEventListener('load', function(event) {
            document.getElementById('uploadedImage').setAttribute('src', event.target.result);
            document.getElementById('uploadedImage').style.display = 'block';
        });
    }
});
