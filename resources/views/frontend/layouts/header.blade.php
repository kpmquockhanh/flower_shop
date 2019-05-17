<header id="header" >
    <div class="header-container">

        <div class="header-top">
            <div class="container">
                <div class="row">

                    <div class="col-xs-12 col-sm-6">

                        <div class="dropdown block-language-wrapper">
                            <a role="button" data-toggle="dropdown" data-target="#" class="block-language dropdown-toggle" href="#">
                                <img src="{{asset('img/vietnam.png')}}" alt="VietNam">
                                Việt nam
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="{{asset('img/vietnam.png')}}" alt="Việt Nam">    Việt Nam</a></li>
{{--                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="{{asset('assets/themes/creta/images/english.png')}}" alt="English">    English</a></li>--}}
                                {{--<li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="{{asset('assets/themes/creta/images/francais.png')}}" alt="French"> French </a></li>--}}
                                {{--<li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="{{asset('assets/themes/creta/images/german.png')}}" alt="German">   German</a></li>--}}
                            </ul>
                        </div>


                        <div class="dropdown block-currency-wrapper">
                            <a role="button" data-toggle="dropdown" data-target="#" class="block-currency dropdown-toggle" href="#">đ <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="#">
                                        đ - Viet Nam Dong
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="welcome-msg">
                            Chào mừng bạn đến với website bán hoa số một Việt nam!
                        </div>

                    </div>
                    <div class="col-xs-6 hidden-xs">
                        <div class="toplinks">
                            <div class="links">
                                <!-- Header Top Links -->
                                <ul id="menu-toplinks" class="top-links1 mega-menu1">
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page narrow ">
                                        <a href="{{route('admin.dashboard')}}" class="" target="_blank"><span>Admin</span></a>
                                    </li>
                                    {{--<li id="nav-menu-item-2118" class="menu-item menu-item-type-post_type menu-item-object-page  narrow ">--}}
                                        {{--<a href="#" class=""><span>My Account</span></a>--}}
                                    {{--</li>--}}
                                    {{--<li class="menu-item menu-item-type-post_type menu-item-object-page  narrow ">--}}
                                        {{--<a href="#" class=""><span>Shop</span></a>--}}
                                    {{--</li>--}}
                                    {{--<li class="menu-item menu-item-type-post_type menu-item-object-page  narrow ">--}}
                                        {{--<a href="#" class=""><span>Wishlist</span></a>--}}
                                    {{--</li>--}}
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page  narrow ">
                                        <a href="{{route('cart.checkout')}}" class=""><span>Thanh toán</span></a>
                                    </li>
                                    @if (\Illuminate\Support\Facades\Auth::guard('user')->check())
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page  narrow ">
                                            <a href="{{route('check-order')}}" class=""><span>Kiểm tra đơn hàng</span></a>
                                        </li>
                                    @endif
                                    @if (!\Illuminate\Support\Facades\Auth::guard('user')->check())
                                        <li class="menu-item">
                                            <a href="{{route('login')}}">Đăng nhập / Đăng kí</a>
                                        </li>
                                    @else

                                        <li class="menu-item"><a href="{{route('user.account')}}">Xin chào {{\Illuminate\Support\Facades\Auth::guard('user')->user()->name}}</a>
                                        </li>

                                        <li class="menu-item"><a href="{{route('logout')}}">Đăng xuất</a>
                                        </li>
                                    @endif

                                </ul>
                                <!-- End Header Top Links -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 hidden-xs">


                    <div class="search-box">
                        <form method="GET" action="{{route('shop')}}">
                            <input type="text" placeholder="Tìm hoa bạn cần tại đây..." maxlength="70" name="s" class="mgksearch" value="">

                            <button class="search-btn-bg" type="submit"><span class="glyphicon glyphicon-search"></span></button>

                        </form>
                    </div>


                </div>

                <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12 logo-block">
                    <!-- Header Logo -->
                    <div class="logo">
                        <a class="logo" title="klpflower.com" href="{{route('home')}}"> <img
                                    alt="klpflower.com" src="{{asset('img/logo small.png')}}"
                                    height="35"
                                    width="116"> </a>
                    </div>

                    <!-- End Header Logo -->

                </div>
                @if (\Illuminate\Support\Facades\Auth::guard('user')->check())
                    @include('frontend.cart.cart')
                @endif

            </div>
        </div>
    </div>
</header>
