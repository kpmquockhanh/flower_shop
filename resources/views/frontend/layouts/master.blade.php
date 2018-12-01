
<!DOCTYPE html>
<html lang="en-US" id="parallax_scrolling">
<head>
   @include('frontend.layouts.stylesheet')
    <title>@yield('title', 'Không tiêu đề') - klpflower.com</title>
</head>
<body class="woocommerce woocommerce-page" >
<div id="page" class="page catalog-category-view">

    <!-- Header -->
    @include('frontend.layouts.header')
    @include('frontend.layouts.nav')
    <!-- end header -->


    @yield('content')


    @include('frontend.layouts.features-box')

    @include('frontend.layouts.footer')

</div>

<div class="menu-overlay"></div>
<div id="nav-panel" class="">
    <div class="mobile-search">
        <div class="search-box">
            <form name="myform"  method="GET" action="{{route('shop')}}">
                <input type="text" placeholder="Nhập từ cần tìm kiếm..." maxlength="70" name="s" class="mgksearch" value="">
                <button class="search-btn-bg" type="submit">
                    <span class="glyphicon glyphicon-search"></span>
                </button>

            </form>
        </div>
        <div class="search-autocomplete" id="search_autocomplete1" style="display: none;"></div></div><div class="menu-wrap">
        <ul id="menu-mainmenu-1" class="mobile-menu accordion-menu">
            <li class="homecustom menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home">
                <a href="{{route('home')}}" class=" current "><i class="fa fa-home"></i> Trang chủ</a>
            </li>
            <li id="accordion-menu-item-2008" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children  has-sub"><a href="#" class="">Chủ đề</a>
                <span class="arrow"></span>
                <ul class="sub-menu">
                    @php $categories = \App\Category::all(); @endphp
                    @foreach ($categories as $category)
                        <li id="accordion-menu-item-2009" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children  has-sub">
                            <a href="{{route('shop', ['cate'=> $category->id])}}" class="">{{$category->cate_name}}</a>
                        </li>
                    @endforeach
                </ul>
            </li>

            <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="{{route('shop')}}" class="">Shop</a></li>
            {{--<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#" class="">Ý nghĩa hoa</a></li>--}}

        </ul>
    </div>
    <div class="menu-wrap">
        <ul id="menu-toplinks-1" class="top-links1 accordion-menu">
            <li id="accordion-menu-item-2118" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="{{route('user.account')}}" class="">Tài khoản</a></li>
            {{--<li id="accordion-menu-item-2125" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="#" class="">Wishlist</a></li>--}}
            <li id="accordion-menu-item-2119" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="{{route('cart.checkout')}}" class="">Thanh toán</a></li>
            <li id="accordion-menu-item-2290" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="{{route('check-order')}}" class="">Kiểm tra đơn hàng</a></li>
            <li class="menu-item"><a href="{{route('login')}}">Đăng nhập</a></li>
            <li class="menu-item"><a href="{{route('register')}}">Đăng kí</a></li>
        </ul>
    </div>
</div>
<script type='text/javascript' src='{{asset('assets/includes/js/jquery/jquery.js')}}'></script>
<script type='text/javascript' src='{{asset('js/axios.min.js')}}'></script>
{{--<script type='text/javascript' src='{{asset('assets/includes/js/jquery/ui/core.min.js')}}'></script>--}}
{{--<script type='text/javascript' src='{{asset('assets/includes/js/jquery/ui/widget.min.js')}}'></script>--}}
{{--<script type='text/javascript' src='{{asset('assets/includes/js/jquery/ui/mouse.min.js')}}'></script>--}}
{{--<script type='text/javascript' src='{{asset('assets/includes/js/jquery/ui/slider.min.js')}}'></script>--}}

<script type='text/javascript' src='{{asset('assets/themes/creta/js/bootstrap.min.js')}}'></script>
{{--<script type='text/javascript' src='{{asset('assets/plugins/woocommerce/assets/js/frontend/price-slider.min.js')}}'></script>--}}
<script type='text/javascript' src='{{asset('assets/themes/creta/js/owl.carousel.min.js')}}'></script>
<script type='text/javascript' src='{{asset('assets/themes/creta/js/jquery.mobile-menu.min.js')}}'></script>
<script type="text/javascript" src="{{asset('assets/plugins/jquery.lazy.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/plugins/jquery.lazy.plugins.min.js')}}"></script>
{{--<script type="text/javascript" src="{{asset('assets/main.js')}}"></script>--}}
{{--<script type='text/javascript' src='{{asset('assets/themes/creta/js/cloud-zoom.js')}}'></script>--}}
<script type='text/javascript' src='{{asset('js/klpflower.js')}}'></script>
<script>
    jQuery(document).ready(function($){
        jQuery('#preloader').fadeOut();
    });
    jQuery(document).ready(function($){
        jQuery().UItoTop();
    });
</script>
@yield('script')
</body>
</html>
