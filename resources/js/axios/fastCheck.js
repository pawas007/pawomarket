import axios from "axios";

$('.quickview').on('click', function (e) {
    e.preventDefault();

    let url = $(this).attr('href');


    axios.get(url)

        .then(function (responce) {
            let product = responce.data

            $('.product_modal .product-title').text(product.name + ' ' + product.vendor_code);
            $('.product_modal .product_price').text(product.currency_symbol + ' ' + product.price);
            $('.product_modal .product_info').text(product.information);



            $('#fast_check_product').addClass('show')
        });





})


$('.close_modal_fast').on('click', function (e) {
    e.preventDefault();
    $('#fast_check_product').removeClass('show');
})










