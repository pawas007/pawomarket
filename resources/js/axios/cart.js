import axios from "axios";


let updateCartItems = (items) => {

    let toArray = Object.values(items);
    let products = '';

    toArray.forEach(element => {
        products += `
      <li class="offcanvas-cart-item-single">
                        <div class="offcanvas-cart-item-block">
                            <a href="/products/${element.id}" class="offcanvas-cart-item-image-link">
                                <img src="/assets/img/product-image/product1.png" alt="img"
                                     class="offcanvas-cart-image"/>
                            </a>
                            <div class="offcanvas-cart-item-content">
                                <a href="{{route('products.show',$item->id)}}"
                                   class="offcanvas-cart-item-link">${element.name}</a>
                                <div class="offcanvas-cart-item-details">
                                    <span class="offcanvas-cart-item-details-quantity">${element.quantity} x </span>
                                    <span
                                        class="offcanvas-cart-item-details-price">${element.associatedModel.currency_symbol}  ${element.price}</span>
                                </div>
                            </div>
                        </div>

                        <a href="remove" data-productid="${element.id}"
                           class="offcanvas-cart-item-delete cart-item-delete"><i class="far fa-trash-alt"></i></a></li>
`
    })
    $('.offcanvas-cart-modal').html(products)
}


const updateCart = () => {
    return axios.post('cart/count')
        .then(function (response) {
            if (!response.data.count) {
                $('.empty_text_wrap').html('<h5 class="h5 empty-cart-text">Cart is empty </h5>')
            } else {
                $('.empty-cart-text').remove()
            }

            $('.subTotalCart').text(response.data.subTotal);
            $('.item-count-cart').each(function () {
                $(this).text(response.data.count)
            })
        })
};


$('.add-to-cart').on('click', function (e) {
    e.preventDefault();
    let data = {
        quantity: 1,
        productid: $(this).data('productid')
    }
    axios.post('/cart/add', data)
        .then(function (response) {
            updateCartItems(response.data.cartItems)
            updateCart();
        })
        .catch(function (error) {

            console.log(error);
        })
})


$('body').on('click', '.cart-item-delete', function (e) {
    e.preventDefault();

    $(this).parent().remove();
    let data = {
        id: $(this).data('productid')
    }
    axios.post('cart/remove', data)
        .then(function (response) {

            updateCart();
        })
})





