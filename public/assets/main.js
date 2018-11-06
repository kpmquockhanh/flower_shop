
jQuery('.ajax_add_to_cart').on('click', function (e) {
    e.preventDefault();
    jQuery('#preloader').fadeIn();
    let quantity = jQuery(this).attr('data-quantity');
    let id = jQuery(this).attr('data-product_id');

    axios.post('/cart/add-cart',{
       id: id,
       quantity: quantity,
    }).then(function (res) {
        if (res.data.status)
        {
            jQuery(res.data.data).replaceAll('#cart-refresh');
            if (jQuery(this).scrollTop() > 1)
            {
                // console.log(jQuery('#cart-refresh .ajax-cart'));
                jQuery('#cart-refresh .ajax-cart').addClass('sticky-topcart');
            }
            slideEffectAjax();
            jQuery('#preloader').fadeOut();
        }
        else
        {
            alert('Error');
        }
    }).catch(function (e) {
        if (e.response.status === 401)
            window.location = "/login";

        else
            console.log(e.response);
    });
});

jQuery('body').on('click', '.btn-remove1', function (e) {
    e.preventDefault();
    jQuery('#preloader').fadeIn();
    let id = jQuery(this).attr('data-id');

    axios.post('/cart/remove-cart',{
        id: id,
    }).then(function (res) {
        if (res.data.status)
        {
            jQuery(res.data.data).replaceAll('#cart-refresh');
            if (jQuery(this).scrollTop() > 1)
            {
                // console.log(jQuery('#cart-refresh .ajax-cart'));
                jQuery('#cart-refresh .ajax-cart').addClass('sticky-topcart');
            }
            slideEffectAjax();
            jQuery('#preloader').fadeOut();
        }else
        {
            alert(13);
        }
    }).catch(function (e) {
        console.log(e);
    });
});
jQuery('#empty_cart_button').on('click', function (e) {
    e.preventDefault();
    jQuery('#preloader').fadeIn();
    axios.get('/cart/remove-all-cart').then(function (res) {
        if (res.data.status)
        {
            jQuery(res.data.data).replaceAll('#cart-refresh');
            jQuery(res.data.data_page).replaceAll('#content');
            if (jQuery(this).scrollTop() > 1)
            {
                jQuery('#cart-refresh .ajax-cart').addClass('sticky-topcart');
            }
            slideEffectAjax();
            jQuery('#preloader').fadeOut();
        }else
        {
            alert("Hjx hjx");
        }
    }).catch(function (e) {
        console.log(e);
    });
});

jQuery('.quantity_change').on('change', function (e) {
    e.preventDefault();

    checkQuantity();

});

function checkQuantity() {
    let flag = false;
    jQuery('.quantity_change').each(function (i,e) {
        if (jQuery(e).val() !== jQuery(e).attr('old-value'))
        {
            flag = true;
            return;
        }

    });

    if (flag)
        jQuery('.btn-update').attr('disabled', false);
    else
        jQuery('.btn-update').attr('disabled', true);
}

jQuery('.button.remove-item').on('click', function (e) {
    e.preventDefault();
    jQuery('#preloader').fadeIn();
    let id = jQuery(this).attr('data-product_id');
    let parent = jQuery(this).parents('tr');

    axios.post('/cart/remove-cart',{
        id: id,
    }).then(function (res) {
        if (res.data.status)
        {
            jQuery(res.data.data).replaceAll('#cart-refresh');
            parent.remove();

            if (jQuery(this).scrollTop() > 1)
            {
                jQuery('#cart-refresh .ajax-cart').addClass('sticky-topcart');
            }
            slideEffectAjax();
            jQuery('#preloader').fadeOut();
        }else
        {
            alert(13);
        }
    }).catch(function (e) {
        console.log(e);
    });
});
