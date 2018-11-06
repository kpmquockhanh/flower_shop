
<!DOCTYPE html>
<html lang="en-US" id="parallax_scrolling">
<head>
   @include('frontend.layouts.stylesheet')
</head>
<body class="home page-template page-template-homepage page-template-homepage-php page page-id-193 woocommerce-no-js woo-variation-swatches woo-variation-swatches-theme-creta woo-variation-swatches-theme-child-creta woo-variation-swatches-style-rounded woo-variation-swatches-attribute-behavior-blur woo-variation-swatches-tooltip-enabled woo-variation-swatches-stylesheet-enabled cms-index-index cms-home-page currency-usd" >
<div id="page" class="page catalog-category-view">

    <!-- Header -->
    @include('frontend.layouts.header')
    @include('frontend.layouts.nav')
    <!-- end header -->


    @yield('content')


    {{--<div class="bottom-banner-section">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}

                {{--<div class="col-md-4 col-sm-6">--}}
                    {{--<div class="bottom-banner-img1">--}}
                        {{--<a href="#">--}}
                            {{--<img src="#"--}}
                                 {{--alt="offer banner">--}}

                            {{--<div class="bottom-img-info">--}}
                                {{--<h3>Anniversary</h3>--}}
                                {{--<span class="line"></span>--}}
                            {{--</div> </a>--}}
                    {{--</div>--}}
                {{--</div>--}}



                {{--<div class="col-md-4 col-sm-6">--}}

                    {{--<div class="bottom-banner-img1">--}}
                        {{--<a href="#">--}}
                            {{--<img src="#"--}}
                                 {{--alt="offer banner">--}}
                            {{--<div class="bottom-img-info">--}}
                                {{--<h3>Occasion</h3>--}}
                                {{--<span class="line"></span>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                {{--</div>--}}


                {{--<div class="col-md-4 col-sm-6">--}}
                    {{--<div class="bottom-banner-img1">--}}
                        {{--<a href="#">--}}
                            {{--<img src="#"--}}
                                 {{--alt="offer banner">--}}
                            {{--<div class="bottom-img-info">--}}
                                {{--<h3>Birthday</h3>--}}
                                {{--<span class="line"></span>--}}
                            {{--</div> </a>--}}
                    {{--</div>--}}
                {{--</div>--}}


                {{--<div class="col-md-4 col-sm-6">--}}
                    {{--<div class="bottom-banner-img1">--}}
                        {{--<a href="#">--}}
                            {{--<img src="#"--}}
                                 {{--alt="offer banner">--}}
                            {{--<div class="bottom-img-info"> <span class="banner-overly"></span>--}}
                                {{--<h3>GET WELL</h3>--}}
                                {{--<span class="line"></span>--}}
                            {{--</div> </a>--}}
                    {{--</div>--}}
                {{--</div>--}}


                {{--<div class="col-md-8 col-sm-12">--}}
                    {{--<div class="bottom-banner-img1 last">--}}

                        {{--<a href="#">--}}
                            {{--<img src="#"--}}
                                 {{--alt="offer banner"> <span class="banner-overly"></span>--}}
                            {{--<div class="bottom-img-info">--}}
                                {{--<h3>up to <span>25%</span> off</h3><h6>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</h6>               </div>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                {{--</div>--}}

            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    <!-- end banner -->




   @include('frontend.layouts.brand-logo')


    @include('frontend.layouts.features-box')

    @include('frontend.layouts.footer')

</div>
<script type="text/javascript">
    jQuery(document).ready(function($){
        jQuery().UItoTop();
    });
</script>



<div class="menu-overlay"></div>
<div id="nav-panel" class="">
    <div class="mobile-search">
        <div class="search-box">
            <form name="myform"  method="GET" action="#">
                <input type="text" placeholder="Search entire store here..." maxlength="70" name="s" class="mgksearch" value="">

                <input type="hidden" value="product" name="post_type">

                <button class="search-btn-bg" type="submit"><span class="glyphicon glyphicon-search"></span></button>

            </form>
        </div>
        <div class="search-autocomplete" id="search_autocomplete1" style="display: none;"></div></div><div class="menu-wrap"><ul id="menu-mainmenu-1" class="mobile-menu accordion-menu"><li id="accordion-menu-item-2127" class="homecustom menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home current-menu-ancestor current-menu-parent menu-item-has-children active has-sub"><a href="#" class=" current "><i class="fa fa-home"></i></a>
                <span class="arrow"></span><ul class="sub-menu">
                    <li id="accordion-menu-item-2040" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home active"><a href="#" class="">Home Layout 1</a></li>
                    <li id="accordion-menu-item-2039" class="menu-item menu-item-type-custom menu-item-object-custom "><a href="#" class="">Home Layout 2</a></li>
                </ul>
            </li>
            <li id="accordion-menu-item-2008" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children  has-sub"><a href="#" class="">Occasion</a>
                <span class="arrow"></span><ul class="sub-menu">
                    <li id="accordion-menu-item-2009" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children  has-sub"><a href="#" class="">Special</a>
                        <span class="arrow"></span><ul class="sub-menu">
                            <li id="accordion-menu-item-2010" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#" class="">Valentine Day Flowers</a></li>
                            <li id="accordion-menu-item-2011" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#" class="">Friendship Day Flowers</a></li>
                            <li id="accordion-menu-item-2012" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#" class="">Rose Day Flowers</a></li>
                            <li id="accordion-menu-item-2013" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#" class="">New Year Flowers</a></li>
                        </ul>
                    </li>
                    <li id="accordion-menu-item-2023" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children  has-sub"><a href="#" class="">Upcoming</a>
                        <span class="arrow"></span><ul class="sub-menu">
                            <li id="accordion-menu-item-2024" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#" class="">Diwali</a></li>
                            <li id="accordion-menu-item-2025" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#" class="">Rakhi</a></li>
                            <li id="accordion-menu-item-2026" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#" class="">Christmas</a></li>
                            <li id="accordion-menu-item-2027" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#" class="">New Year</a></li>
                        </ul>
                    </li>
                    <li id="accordion-menu-item-2014" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children  has-sub"><a href="#" class="">Everyday</a>
                        <span class="arrow"></span><ul class="sub-menu">
                            <li id="accordion-menu-item-2015" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#" class="">Birthday Flowers</a></li>
                            <li id="accordion-menu-item-2016" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#" class="">Anniversary Flowers</a></li>
                            <li id="accordion-menu-item-2047" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#" class="">Wedding Flowers</a></li>
                            <li id="accordion-menu-item-2048" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#" class="">Flower Bouquets</a></li>
                        </ul>
                    </li>
                    <li id="accordion-menu-item-2018" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children  has-sub"><a href="#" class="">Occasional Day</a>
                        <span class="arrow"></span><ul class="sub-menu">
                            <li id="accordion-menu-item-2019" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#" class="">Womens Day Flowers</a></li>
                            <li id="accordion-menu-item-2020" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#" class="">Fathers Day Flowers</a></li>
                            <li id="accordion-menu-item-2021" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#" class="">Teachers Day Flowers</a></li>
                            <li id="accordion-menu-item-2022" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#" class="">Mothers Day Flowers</a></li>
                        </ul>
                    </li>
                    <li id="accordion-menu-item-2056" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children  has-sub"><a href="#" class="">Favourite</a>
                        <span class="arrow"></span><ul class="sub-menu">
                            <li id="accordion-menu-item-2057" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#" class="">Roses Bouquet</a></li>
                            <li id="accordion-menu-item-2058" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#" class="">Lilies</a></li>
                            <li id="accordion-menu-item-2059" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#" class="">Orchids</a></li>
                            <li id="accordion-menu-item-2060" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#" class="">Tulips</a></li>
                        </ul>
                    </li>
                    <li id="accordion-menu-item-2061" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children  has-sub"><a href="#" class="">Combos</a>
                        <span class="arrow"></span><ul class="sub-menu">
                            <li id="accordion-menu-item-2062" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#" class="">Flower &#038; Dry Fruit</a></li>
                            <li id="accordion-menu-item-2063" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#" class="">Flower &#038; Card</a></li>
                            <li id="accordion-menu-item-2064" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#" class="">Flower &#038; Teddy Bear</a></li>
                            <li id="accordion-menu-item-2065" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#" class="">Flower &#038; Chocolates</a></li>
                        </ul>
                    </li>
                    <li id="accordion-menu-item-2054" class="women-img menu-item menu-item-type-custom menu-item-object-custom "></li>
                    <li id="accordion-menu-item-2066" class="women-img menu-item menu-item-type-custom menu-item-object-custom "></li>
                </ul>
            </li>
            <li id="accordion-menu-item-2002" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children  has-sub"><a href="#" class="">Anniversary</a>
                <span class="arrow"></span><ul class="sub-menu">
                    <li id="accordion-menu-item-2003" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children  has-sub"><a href="#" class="">Flowers &#038; Combos</a>
                        <span class="arrow"></span><ul class="sub-menu">
                            <li id="accordion-menu-item-2004" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#" class="">Flower &#038; Dry Fruit</a></li>
                            <li id="accordion-menu-item-2028" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#" class="">Flower &#038; Card</a></li>
                            <li id="accordion-menu-item-2029" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#" class="">Flower &#038; Teddy Bear</a></li>
                            <li id="accordion-menu-item-2017" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#" class="">Flower &#038; Chocolates</a></li>
                        </ul>
                    </li>
                    <li id="accordion-menu-item-2005" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children  has-sub"><a href="#" class="">Flower with</a>
                        <span class="arrow"></span><ul class="sub-menu">
                            <li id="accordion-menu-item-2006" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#" class="">Get Well Soon</a></li>
                            <li id="accordion-menu-item-2035" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#" class="">Congratulations</a></li>
                            <li id="accordion-menu-item-2007" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#" class="">I Am Sorry</a></li>
                            <li id="accordion-menu-item-2036" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#" class="">Good Luck</a></li>
                        </ul>
                    </li>
                    <li id="accordion-menu-item-2030" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children  has-sub"><a href="#" class="">Favourite Flowers</a>
                        <span class="arrow"></span><ul class="sub-menu">
                            <li id="accordion-menu-item-2031" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#" class="">Roses Bouquet</a></li>
                            <li id="accordion-menu-item-2032" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#" class="">Lilies</a></li>
                            <li id="accordion-menu-item-2033" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#" class="">Orchids</a></li>
                            <li id="accordion-menu-item-2034" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#" class="">Tulips</a></li>
                        </ul>
                    </li>
                    <li id="accordion-menu-item-2055" class="men-img menu-item menu-item-type-custom menu-item-object-custom "></li>
                    <li id="accordion-menu-item-2069" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children  has-sub"><a href="#" class="">Mixed Flowers</a>
                        <span class="arrow"></span><ul class="sub-menu">
                            <li id="accordion-menu-item-2070" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#" class="">Precious Flowers</a></li>
                            <li id="accordion-menu-item-2129" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#" class="">Flowers &#038; Combos</a></li>
                            <li id="accordion-menu-item-2071" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#" class="">Flower Bouquet</a></li>
                            <li id="accordion-menu-item-2068" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#" class="">Flower &#038; Card</a></li>
                        </ul>
                    </li>
                    <li id="accordion-menu-item-2049" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children  has-sub"><a href="#" class="">Everyday Occasions</a>
                        <span class="arrow"></span><ul class="sub-menu">
                            <li id="accordion-menu-item-2050" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#" class="">Wedding Flowers</a></li>
                            <li id="accordion-menu-item-2051" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#" class="">Anniversary Flowers</a></li>
                            <li id="accordion-menu-item-2052" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#" class="">Flower Bouquets</a></li>
                            <li id="accordion-menu-item-2053" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#" class="">Birthday Flowers</a></li>
                        </ul>
                    </li>
                    <li id="accordion-menu-item-2072" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children  has-sub"><a href="#" class="">Special Occasion</a>
                        <span class="arrow"></span><ul class="sub-menu">
                            <li id="accordion-menu-item-2073" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#" class="">Valentine Day Flowers</a></li>
                            <li id="accordion-menu-item-2074" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#" class="">Friendship Day Flowers</a></li>
                            <li id="accordion-menu-item-2075" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#" class="">Rose Day Flowers</a></li>
                            <li id="accordion-menu-item-2076" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#" class="">New Year Flowers</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li id="accordion-menu-item-2037" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#" class="">Birthday</a></li>
            <li id="accordion-menu-item-2117" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children  has-sub"><a href="#" class="">Blog</a>
                <span class="arrow"></span><ul class="sub-menu">
                    <li id="accordion-menu-item-2330" class="menu-item menu-item-type-custom menu-item-object-custom "><a href="#" class="">Blog Left Sidebar</a></li>
                    <li id="accordion-menu-item-2331" class="menu-item menu-item-type-custom menu-item-object-custom "><a href="#" class="">Blog Right Sidebar</a></li>
                    <li id="accordion-menu-item-2332" class="menu-item menu-item-type-custom menu-item-object-custom "><a href="#" class="">Blog Full Width</a></li>
                </ul>
            </li>
            <li id="accordion-menu-item-2038" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has-sub"><a href="#" class="">Pages</a>
                <span class="arrow"></span><ul class="sub-menu">
                    <li id="accordion-menu-item-2326" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="#" class="">Contact Us</a></li>
                    <li id="accordion-menu-item-2122" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="#" class="">Typography</a></li>
                    <li id="accordion-menu-item-2120" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="#" class="">Full Width Page</a></li>
                    <li id="accordion-menu-item-2123" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="#" class="">Page – Left Sidebar</a></li>
                    <li id="accordion-menu-item-2121" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="#" class="">Page – Right Sidebar</a></li>
                    <li id="accordion-menu-item-2124" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="#" class="">Page – 3 Column</a></li>
                    <li id="accordion-menu-item-2278" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="#" class="">FAQs Page</a></li>
                    <li id="accordion-menu-item-2282" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="#" class="">About Us</a></li>
                    <li id="accordion-menu-item-2281" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="#" class="">Pricing Table</a></li>
                    <li id="accordion-menu-item-2279" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="#" class="">Track Order</a></li>
                </ul>
            </li>
            <li id="accordion-menu-item-2327" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children  has-sub"><a href="#" class="">Shop</a>
                <span class="arrow"></span><ul class="sub-menu">
                    <li id="accordion-menu-item-2283" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has-sub"><a href="#" class="">Product Layouts</a>
                        <span class="arrow"></span><ul class="sub-menu">
                            <li id="accordion-menu-item-2166" class="menu-item menu-item-type-post_type menu-item-object-product "><a href="#" class="">Single Product</a></li>
                            <li id="accordion-menu-item-2167" class="menu-item menu-item-type-post_type menu-item-object-product "><a href="#" class="">Variable Product</a></li>
                            <li id="accordion-menu-item-2169" class="menu-item menu-item-type-post_type menu-item-object-product "><a href="#" class="">Grouped Product</a></li>
                            <li id="accordion-menu-item-2168" class="menu-item menu-item-type-post_type menu-item-object-product "><a href="#" class="">External Product</a></li>
                            <li id="accordion-menu-item-2288" class="menu-item menu-item-type-post_type menu-item-object-product "><a href="#" class="">Hot Deal Product</a></li>
                        </ul>
                    </li>
                    <li id="accordion-menu-item-2284" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has-sub"><a href="#" class="">Shop Layout</a>
                        <span class="arrow"></span><ul class="sub-menu">
                            <li id="accordion-menu-item-2285" class="menu-item menu-item-type-custom menu-item-object-custom "><a href="#" class="">Shop Left Sidebar</a></li>
                            <li id="accordion-menu-item-2286" class="menu-item menu-item-type-custom menu-item-object-custom "><a href="#" class="">Shop Right Sidebar</a></li>
                            <li id="accordion-menu-item-2287" class="menu-item menu-item-type-custom menu-item-object-custom "><a href="#" class="">Shop Full Width</a></li>
                            <li id="accordion-menu-item-2280" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="#" class="">Product Category</a></li>
                            <li id="accordion-menu-item-2277" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="#" class="">Hot Deals</a></li>
                        </ul>
                    </li>
                    <li id="accordion-menu-item-2289" class="women-img menu-item menu-item-type-custom menu-item-object-custom "></li>
                </ul>
            </li>
        </ul></div><div class="menu-wrap"><ul id="menu-toplinks-1" class="top-links1 accordion-menu"><li id="accordion-menu-item-2118" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="#" class="">My Account</a></li>
            <li id="accordion-menu-item-2077" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="#" class="">Shop</a></li>
            <li id="accordion-menu-item-2125" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="#" class="">Wishlist</a></li>
            <li id="accordion-menu-item-2119" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="#" class="">Checkout</a></li>
            <li id="accordion-menu-item-2290" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="#" class="">Track Order</a></li>
            <li class="menu-item"><a href="#">Login</a></li><li class="menu-item"><a href="#">Register</a></li></ul></div></div>

<div id="yith-quick-view-modal">

    <div class="yith-quick-view-overlay"></div>

    <div class="yith-wcqv-wrapper">

        <div class="yith-wcqv-main">

            <div class="yith-wcqv-head">
                <a href="#" id="yith-quick-view-close" class="yith-wcqv-close">X</a>
            </div>

            <div id="yith-quick-view-content" class="woocommerce single-product"></div>

        </div>

    </div>

</div>
{{--<script>(function() {function addEventListener(element,event,handler) {--}}
        {{--if(element.addEventListener) {--}}
            {{--element.addEventListener(event,handler, false);--}}
        {{--} else if(element.attachEvent){--}}
            {{--element.attachEvent('on'+event,handler);--}}
        {{--}--}}
    {{--}function maybePrefixUrlField() {--}}
        {{--if(this.value.trim() !== '' && this.value.indexOf('http') !== 0) {--}}
            {{--this.value = "http://" + this.value;--}}
        {{--}--}}
    {{--}--}}

        {{--var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');--}}
        {{--if( urlFields && urlFields.length > 0 ) {--}}
            {{--for( var j=0; j < urlFields.length; j++ ) {--}}
                {{--addEventListener(urlFields[j],'blur',maybePrefixUrlField);--}}
            {{--}--}}
        {{--}/* test if browser supports date fields */--}}
        {{--var testInput = document.createElement('input');--}}
        {{--testInput.setAttribute('type', 'date');--}}
        {{--if( testInput.type !== 'date') {--}}

            {{--/* add placeholder & pattern to all date fields */--}}
            {{--var dateFields = document.querySelectorAll('.mc4wp-form input[type="date"]');--}}
            {{--for(var i=0; i<dateFields.length; i++) {--}}
                {{--if(!dateFields[i].placeholder) {--}}
                    {{--dateFields[i].placeholder = 'YYYY-MM-DD';--}}
                {{--}--}}
                {{--if(!dateFields[i].pattern) {--}}
                    {{--dateFields[i].pattern = '[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])';--}}
                {{--}--}}
            {{--}--}}
        {{--}--}}

    {{--})();--}}
{{--</script>--}}

{{--<link rel='stylesheet' id='woocommerce-currency-switcher-css'  href='{{asset('assets/plugins/woocommerce-currency-switcher/css/front.css')}}' type='text/css' media='all' />--}}
{{--<script type='text/javascript' src='{{asset('assets/plugins/magik-catalog-mode/assets/js/mgkcmo_common.js')}}'></script>--}}
{{--<script type='text/javascript' src='{{asset('assets/plugins/magik-infinite-scroller/assets/js/mgkisr_scoll.js')}}'></script>--}}
{{--<script type='text/javascript' src='{{asset('assets/plugins/magik-wooajax-search/assets/js/mgkwooas-autocomplete.js')}}'></script>--}}
{{--<script type='text/javascript' src='{{asset('assets/plugins/magik-wooajax-search/assets/js/mgkwooas-frontend.js')}}'></script>--}}
{{--<script type='text/javascript' src='{{asset('assets/themes/creta/js/mgk_menu.js')}}'></script>--}}
{{--<script type='text/javascript' src='{{asset('assets/includes/js/hoverIntent.min.js}}'></script>--}}
{{--<script type='text/javascript' src='{{asset('assets/plugins/woocommerce/assets/js/jquery-ui-touch-punch/jquery-ui-touch-punch.min.js')}}'></script>--}}
{{--<script type='text/javascript' src='{{asset('assets/plugins/woocommerce-currency-switcher/js/price-slider_33.js')}}'></script>--}}
{{--<script type='text/javascript' src='{{asset('assets/plugins/woocommerce-currency-switcher/js/jquery.ddslick.min.js')}}'></script>--}}
{{--<script type='text/javascript' src='{{asset('assets/plugins/woocommerce-currency-switcher/js/front.js')}}'></script>--}}
{{--<script type='text/javascript' src='#'></script>--}}
{{--<script type='text/javascript' src='#'></script>--}}
<script type='text/javascript' src='{{asset('js/axios.min.js')}}'></script>
<script type='text/javascript' src='{{asset('assets/main.js')}}'></script>
<script type='text/javascript' src='{{asset('assets/plugins/contact-form-7/includes/js/scripts.js')}}'></script>
<script type='text/javascript' src='{{asset('assets/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js')}}'></script>
<script type='text/javascript' src='{{asset('assets/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js')}}'></script>
<script type='text/javascript' src='{{asset('assets/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js')}}'></script>
<script type='text/javascript' src='{{asset('assets/plugins/woocommerce/assets/js/frontend/woocommerce.min.js')}}'></script>
<script type='text/javascript' src='{{asset('assets/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js')}}'></script>
<script type='text/javascript' src='{{asset('assets/plugins/woo-variation-swatches/assets/js/frontend.min.js')}}'></script>
<script type='text/javascript' src='{{asset('assets/plugins/yith-woocommerce-compare/assets/js/woocompare.min.js')}}'></script>
<script type='text/javascript' src='{{asset('assets/plugins/yith-woocommerce-compare/assets/js/jquery.colorbox-min.js')}}'></script>
<script type='text/javascript' src='{{asset('assets/plugins/yith-woocommerce-quick-view/assets/js/frontend.min.js')}}'></script>
<script type='text/javascript' src='{{asset('assets/plugins/woocommerce/assets/js/prettyPhoto/jquery.prettyPhoto.min.js')}}'></script>
<script type='text/javascript' src='{{asset('assets/plugins/yith-woocommerce-wishlist/assets/js/jquery.selectBox.min.js')}}'></script>
<script type='text/javascript' src='{{asset('assets/plugins/yith-woocommerce-wishlist/assets/js/jquery.yith-wcwl.js')}}'></script>
<script type='text/javascript' src='{{asset('assets/includes/js/comment-reply.min.js')}}'></script>
<script type='text/javascript' src='{{asset('assets/themes/creta/js/bootstrap.min.js')}}'></script>
<script type='text/javascript' src='{{asset('assets/themes/creta/js/jquery.cookie.min.js')}}'></script>
<script type='text/javascript' src='{{asset('assets/themes/creta/js/countdown.js')}}'></script>
<script type='text/javascript' src='{{asset('assets/themes/creta/js/parallax.js')}}'></script>
<script type='text/javascript' src='{{asset('assets/themes/creta/js/common.js')}}'></script>
<script type='text/javascript' src='{{asset('assets/themes/creta/js/revslider.js')}}'></script>
<script type='text/javascript' src='{{asset('assets/themes/creta/js/jquery.bxslider.min.js')}}'></script>
<script type='text/javascript' src='{{asset('assets/themes/creta/js/jquery.flexslider.js')}}'></script>
<script type='text/javascript' src='{{asset('assets/themes/creta/js/jquery.mobile-menu.min.js')}}'></script>
<script type='text/javascript' src='{{asset('assets/themes/creta/js/owl.carousel.min.js')}}'></script>
<script type='text/javascript' src='{{asset('assets/themes/creta/js/cloud-zoom.js')}}'></script>
<script type='text/javascript' src='{{asset('assets/plugins/megamenu/js/maxmegamenu.js')}}'></script>
<script type='text/javascript' src='{{asset('assets/includes/js/jquery/ui/core.min.js')}}'></script>
<script type='text/javascript' src='{{asset('assets/includes/js/jquery/ui/widget.min.js')}}'></script>
<script type='text/javascript' src='{{asset('assets/includes/js/jquery/ui/mouse.min.js')}}'></script>
<script type='text/javascript' src='{{asset('assets/includes/js/jquery/ui/slider.min.js')}}'></script>
<script type='text/javascript' src='{{asset('assets/includes/js/underscore.min.js')}}'></script>
<script type='text/javascript' src='{{asset('assets/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.min.js')}}'></script>
<script type='text/javascript' src='{{asset('assets/plugins/woocommerce/assets/js/frontend/single-product.min.js')}}'></script>
<script type='text/javascript' src='{{asset('assets/plugins/mailchimp-for-wp/assets/js/forms-api.min.js')}}'></script>

@yield('script')
</body>
</html>
