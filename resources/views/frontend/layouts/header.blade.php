<header id="header" >
    <div class="header-container">

        <div class="header-top">
            <div class="container">
                <div class="row">

                    <div class="col-xs-12 col-sm-6">

                        <div class="dropdown block-language-wrapper">
                            <a role="button" data-toggle="dropdown" data-target="#" class="block-language dropdown-toggle" href="#">
                                <img src="{{asset('assets/themes/creta/images/english.png')}}" alt="English">
                                English<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="{{asset('assets/themes/creta/images/english.png')}}" alt="English">    English</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="{{asset('assets/themes/creta/images/francais.png')}}" alt="French"> French </a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="{{asset('assets/themes/creta/images/german.png')}}" alt="German">   German</a></li>
                            </ul>
                        </div>


                        <div class="dropdown block-currency-wrapper">
                            <a role="button" data-toggle="dropdown" data-target="#" class="block-currency dropdown-toggle" href="http://wpdemo.magikthemes.com/creta/?currency=USD">USD <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="http://wpdemo.magikthemes.com/creta/?currency=USD">
                                        $ - Dollar        </a>
                                </li>

                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="?currency=GBP">
                                        &#163; - Pound        </a>
                                </li>
                            </ul>
                        </div>

                        <div class="welcome-msg">
                            Default welcome msg!
                        </div>

                    </div>
                    <div class="col-xs-6 hidden-xs">
                        <div class="toplinks">
                            <div class="links">
                                <!-- Header Top Links -->
                                <ul id="menu-toplinks" class="top-links1 mega-menu1">
                                    {{--<li id="nav-menu-item-2118" class="menu-item menu-item-type-post_type menu-item-object-page  narrow ">--}}
                                        {{--<a href="http://wpdemo.magikthemes.com/creta/my-account/" class=""><span>My Account</span></a>--}}
                                    {{--</li>--}}
                                    <li id="nav-menu-item-2077" class="menu-item menu-item-type-post_type menu-item-object-page  narrow ">
                                        <a href="http://wpdemo.magikthemes.com/creta/shop/" class=""><span>Shop</span></a>
                                    </li>
                                    <li id="nav-menu-item-2125" class="menu-item menu-item-type-post_type menu-item-object-page  narrow ">
                                        <a href="http://wpdemo.magikthemes.com/creta/wishlist-2/" class=""><span>Wishlist</span></a>
                                    </li>
                                    <li id="nav-menu-item-2119" class="menu-item menu-item-type-post_type menu-item-object-page  narrow ">
                                        <a href="{{route('cart.checkout')}}" class=""><span>Checkout</span></a>
                                    </li>
                                    @if (!\Illuminate\Support\Facades\Auth::guard('user')->check())
                                        <li id="nav-menu-item-2290" class="menu-item menu-item-type-post_type menu-item-object-page  narrow ">
                                            <a href="http://wpdemo.magikthemes.com/creta/track-order/" class=""><span>Track Order</span></a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{route('login')}}"> Login/Register</a>
                                        </li>
                                    @else

                                        <li class="menu-item"><a href="{{route('user.account')}}">Hello {{\Illuminate\Support\Facades\Auth::guard('user')->user()->name}}</a>
                                        </li>

                                        <li class="menu-item"><a href="{{route('logout')}}">Logout</a>
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
                        <form name="myform"  method="GET" action="http://wpdemo.magikthemes.com/creta/">
                            <input type="text" placeholder="Search entire store here..." maxlength="70" name="s" class="mgksearch" value="">

                            <input type="hidden" value="product" name="post_type">

                            <button class="search-btn-bg" type="submit"><span class="glyphicon glyphicon-search"></span></button>

                        </form>
                    </div>


                </div>

                <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12 logo-block">
                    <!-- Header Logo -->
                    <div class="logo">
                        <a class="logo" title="Creta Demo" href="{{route('home')}}"> <img
                                    alt="Creta Demo" src="{{asset('assets/uploads/sites/26/2016/02/logo.png')}}"
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