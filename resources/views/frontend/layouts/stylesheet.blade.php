    <script type='text/javascript' src='{{asset('assets/includes/js/jquery/jquery.js')}}'></script>

    @include('frontend.preloader.preloader')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--<link rel="profile" href="http://gmpg.org/xfn/11">--}}
    {{--<link rel="pingback" href="http://wpdemo.magikthemes.com/creta/xmlrpc.php">--}}
    {{--<script>document.documentElement.className = document.documentElement.className + ' yes-js js_active js'</script>--}}
    <title>Flower shop</title>
    <style>
        .wishlist_table .add_to_cart, a.add_to_wishlist.button.alt {
            border-radius: 16px; -moz-border-radius: 16px; -webkit-border-radius: 16px;
        }
    </style>
    <link rel='stylesheet' id='contact-form-7-css'  href='{{asset('assets/plugins/contact-form-7/includes/css/styles.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='mgkssh_style-css'  href='{{asset('assets/plugins/magik-catalog-mode/assets/css/mgkcmo_style.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='mgkisr-style-css'  href='{{asset('assets/plugins/magik-infinite-scroller/assets/css/mgkisr_style.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='mgkwooas-style-css'  href='{{asset('assets/plugins/magik-wooajax-search/assets/css/mgkwooas_style.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-layout-css'  href='{{asset('assets/plugins/woocommerce/assets/css/woocommerce-layout.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-smallscreen-css'  href='{{asset('assets/plugins/woocommerce/assets/css/woocommerce-smallscreen.css')}}' type='text/css' media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css'  href='{{asset('assets/plugins/woocommerce/assets/css/woocommerce.css')}}' type='text/css' media='all' />
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required { visibility: visible; }
    </style>
    <link rel='stylesheet' id='dashicons-css'  href='{{asset('assets/includes/css/dashicons.min.css')}}' type='text/css' media='all' />
    <style id='dashicons-inline-css' type='text/css'>
        [data-font="Dashicons"]:before {font-family: 'Dashicons' !important;content: attr(data-icon) !important;speak: none !important;font-weight: normal !important;font-variant: normal !important;text-transform: none !important;line-height: 1 !important;font-style: normal !important;-webkit-font-smoothing: antialiased !important;-moz-osx-font-smoothing: grayscale !important;}
    </style>
    <link rel='stylesheet' id='woo-variation-swatches-css'  href='{{asset('assets/plugins/woo-variation-swatches/assets/css/frontend.min.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='woo-variation-swatches-theme-override-css'  href='{{asset('assets/plugins/woo-variation-swatches/assets/css/wvs-theme-override.min.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='woo-variation-swatches-tooltip-css'  href='{{asset('assets/plugins/woo-variation-swatches/assets/css/frontend-tooltip.min.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='jquery-colorbox-css'  href='{{asset('assets/plugins/yith-woocommerce-compare/assets/css/colorbox.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='yith-woocompare-widget-css'  href='{{asset('assets/plugins/yith-woocommerce-compare/assets/css/widget.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='yith-quick-view-css'  href='{{asset('assets/plugins/yith-woocommerce-quick-view/assets/css/yith-quick-view.css')}}' type='text/css' media='all' />
    <style id='yith-quick-view-inline-css' type='text/css'>

        #yith-quick-view-modal .yith-wcqv-main{background:#ffffff;}
        #yith-quick-view-close{color:#cdcdcd;}
        #yith-quick-view-close:hover{color:#ff0000;}
    </style>
    <link rel='stylesheet' id='woocommerce_prettyPhoto_css-css'  href='{{asset('assets/plugins/woocommerce/assets/css/prettyPhoto.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='jquery-selectBox-css'  href='{{asset('assets/plugins/yith-woocommerce-wishlist/assets/css/jquery.selectBox.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='yith-wcwl-main-css'  href='{{asset('assets/plugins/yith-woocommerce-wishlist/assets/css/style.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='yith-wcwl-font-awesome-css'  href='{{asset('assets/plugins/yith-woocommerce-wishlist/assets/css/font-awesome.min.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='magikCreta-Fonts-css'  href='https://fonts.googleapis.com/css?family=Open+Sans%3A700%2C600%2C800%2C400%7CRaleway%3A400%2C300%2C600%2C500%2C700%2C800&#038;subset=latin%2Clatin-ext&#038;ver=1.0.0' type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap.min-css'  href='{{asset('assets/themes/creta/skins/default/bootstrap.min.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-css'  href='{{asset('assets/themes/creta/css/font-awesome.css')}}' type='text/css' media='all' />
    <style id='font-awesome-inline-css' type='text/css'>
        [data-font="FontAwesome"]:before {font-family: 'FontAwesome' !important;content: attr(data-icon) !important;speak: none !important;font-weight: normal !important;font-variant: normal !important;text-transform: none !important;line-height: 1 !important;font-style: normal !important;-webkit-font-smoothing: antialiased !important;-moz-osx-font-smoothing: grayscale !important;}
    </style>
    <link rel='stylesheet' id='simple-line-icons-css'  href='{{asset('assets/themes/creta/css/simple-line-icons.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='owl.carousel-css'  href='{{asset('assets/themes/creta/css/owl.carousel.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='owl.theme-css'  href='{{asset('assets/themes/creta/css/owl.theme.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='flexslider-css'  href='{{asset('assets/themes/creta/css/flexslider.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='jquery.bxslider-css'  href='{{asset('assets/themes/creta/css/jquery.bxslider.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='search-css'  href='{{asset('assets/themes/creta/css/magikautosearch.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='style-css'  href='{{asset('assets/themes/creta/style.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='blog-css'  href='{{asset('assets/themes/creta/skins/default/blogs.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='revslider-css'  href='{{asset('assets/themes/creta/skins/default/revslider.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='layout-css'  href='{{asset('assets/themes/creta/skins/default/style.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='mgk_menu-css'  href='{{asset('assets/themes/creta/skins/default/mgk_menu.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='jquery.mobile-menu-css'  href='{{asset('assets/themes/creta/skins/default/jquery.mobile-menu.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='mc4wp-form-basic-css'  href='{{asset('assets/plugins/mailchimp-for-wp/assets/css/form-basic.min.css')}}' type='text/css' media='all' />

