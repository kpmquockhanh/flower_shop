const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/js/app.js', 'public/js')
//    .sass('resources/sass/app.scss', 'public/css');

mix.styles([
    'public/assets/plugins/contact-form-7/includes/css/styles.css',
    'public/assets/plugins/magik-catalog-mode/assets/css/mgkcmo_style.css',
    'public/assets/plugins/magik-infinite-scroller/assets/css/mgkisr_style.css',
    'public/assets/plugins/magik-wooajax-search/assets/css/mgkwooas_style.css',
    'public/assets/plugins/woocommerce/assets/css/woocommerce-layout.css',
    'public/assets/plugins/woocommerce/assets/css/woocommerce-smallscreen.css',
    'public/assets/plugins/woocommerce/assets/css/woocommerce.css',
    'public/assets/includes/css/dashicons.min.css',
    'public/assets/plugins/woo-variation-swatches/assets/css/frontend.min.css',
    'public/assets/plugins/woo-variation-swatches/assets/css/wvs-theme-override.min.css',
    'public/assets/plugins/woo-variation-swatches/assets/css/frontend-tooltip.min.css',
    'public/assets/plugins/yith-woocommerce-compare/assets/css/colorbox.css',
    'public/assets/plugins/yith-woocommerce-compare/assets/css/widget.css',
    'public/assets/plugins/yith-woocommerce-quick-view/assets/css/yith-quick-view.css',
    'public/assets/plugins/woocommerce/assets/css/prettyPhoto.css',
    'public/assets/plugins/yith-woocommerce-wishlist/assets/css/jquery.selectBox.css',
    'public/assets/plugins/yith-woocommerce-wishlist/assets/css/style.css',
    'public/assets/plugins/yith-woocommerce-wishlist/assets/css/font-awesome.min.css',
    'public/assets/themes/creta/skins/default/bootstrap.min.css',
    'public/assets/themes/creta/css/font-awesome.css',
    'public/assets/themes/creta/css/simple-line-icons.css',
    'public/assets/themes/creta/css/owl.carousel.css',
    'public/assets/themes/creta/css/owl.theme.css',
    'public/assets/themes/creta/css/flexslider.css',
    'public/assets/themes/creta/css/jquery.bxslider.css',
    'public/assets/themes/creta/css/magikautosearch.css',
    'public/assets/themes/creta/style.css',
    'public/assets/themes/creta/skins/default/blogs.css',
    'public/assets/themes/creta/skins/default/revslider.css',
    'public/assets/themes/creta/skins/default/mgk_menu.css',
    'public/assets/themes/creta/skins/default/style.css',
    'public/assets/themes/creta/skins/default/jquery.mobile-menu.css',
    'public/assets/plugins/mailchimp-for-wp/assets/css/form-basic.min.css',
], 'public/css/klpflower.css');

mix.scripts([
    'public/assets/themes/creta/js/bootstrap.min.js',
    'public/assets/themes/creta/js/jquery.cookie.min.js',
    'public/assets/themes/creta/js/countdown.js',
    'public/assets/themes/creta/js/parallax.js',
    'public/assets/themes/creta/js/common.js',
    'public/assets/themes/creta/js/revslider.js',
    'public/assets/themes/creta/js/jquery.bxslider.min.js',
    'public/assets/themes/creta/js/jquery.flexslider.js',
    'public/assets/themes/creta/js/jquery.mobile-menu.min.js',
    'public/assets/themes/creta/js/owl.carousel.min.js',
    'public/themes/creta/js/cloud-zoom.js',
    'public/assets/plugins/megamenu/js/maxmegamenu.js',
    'public/assets/includes/js/jquery/ui/core.min.js',
    'public/assets/includes/js/jquery/ui/widget.min.js',
    'public/assets/includes/js/jquery/ui/mouse.min.js',
    'public/assets/includes/js/jquery/ui/slider.min.js',
    'public/assets/includes/js/underscore.min.js',
], 'public/js/klpflower.js');
