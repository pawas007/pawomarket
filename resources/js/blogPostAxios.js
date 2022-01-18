import axios from "axios";
const config = {
    headers: {
        'Content-Type': 'application/json',
        'Accept': 'application/json'
    }
}
$('.addCategory').on('click', function () {
    let data = {
        name: $('.categoryName').val()
    }
    axios.post('/admin/categoryPost', data, config)
        .then(function (response) {
            if (response.data.status === false && response.data.errors) {
                $('.susses-category').fadeOut()
                $('.errors-category').fadeIn()
                $('.errors-category').text(response.data.errors.name[0]);


            } else {
                $('.errors-category').fadeOut()
                $('.susses-category').fadeIn()
                $('.susses-category').text(response.data.message);
                axios.get('/admin/categoryPost').then(function (categories) {
                    let categoriesList
                    categories.data.forEach((item) => {
                        categoriesList +=
                        `  <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="${item.slug}" name="categories[]" value="${item.id}">
                                       <label class="form-check-label" for="${item.slug}">${item.name}</label>
                            </div>`
                    })
                    $('.listCategory').html(categoriesList)
                    $('.categoryName').val('')
                });
            }
        })
        .catch(function (error) {
            // handle error
            console.log(error);
        })
})


