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
mix.styles('public/assets/plugins/yith-woocommerce-quick-view/assets/css/yith-quick-view.css', 'public/assets/plugins/yith-woocommerce-quick-view/assets/css/yith-quick-view.min.css');
mix.styles('public/assets/themes/creta/skins/default/style.css', 'public/assets/themes/creta/skins/default/style.min.css');
mix.styles('public/assets/themes/creta/skins/default/mgk_menu.css', 'public/assets/themes/creta/skins/default/mgk_menu.min.css');
// mix.styles([
//     'public/assets/plugins/woocommerce/assets/css/woocommerce-layout.css',
//     'public/assets/plugins/woocommerce/assets/css/woocommerce-smallscreen.css',
//     'public/assets/plugins/woocommerce/assets/css/woocommerce.css',
//     'public/assets/includes/css/dashicons.min.css',
//     'public/assets/plugins/yith-woocommerce-quick-view/assets/css/yith-quick-view.css',
//     'public/assets/themes/creta/skins/default/bootstrap.min.css',
//     'public/assets/themes/creta/css/font-awesome.css',
//     'public/assets/themes/creta/css/simple-line-icons.css',
//     'public/assets/themes/creta/css/owl.carousel.css',
//     'public/assets/themes/creta/css/owl.theme.css',
//     'public/assets/themes/creta/style.css',
//     'public/assets/themes/creta/skins/default/revslider.css',
//     'public/assets/themes/creta/skins/default/style.css',
//     'public/assets/themes/creta/skins/default/mgk_menu.css',
//     'public/assets/themes/creta/skins/default/jquery.mobile-menu.css',
//     'public/assets/plugins/mailchimp-for-wp/assets/css/form-basic.min.css',
// ], 'public/css/klpflower.css');

mix.babel([
    'public/assets/themes/creta/js/mgk_menu.js',
    'public/assets/themes/creta/js/countdown.js',
    'public/assets/themes/creta/js/common.js',
    'public/assets/themes/creta/js/revslider.js',
    'public/assets/main.js',
], 'public/js/klpflower.js');
