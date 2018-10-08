<header class="header-area clearfix">
    <div class="header-top">
        <div class="container">
            <div class="border-bottom-1">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="welcome-area">
                            <p>Hihi</p>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-12">
                        <div class="account-curr-lang-wrap f-right">
                            <ul>
                                @if (\Auth::guard('user')->check())
                                    <li class="top-hover"><a href="#">{{trans('dic.hello', ['name' => Auth::user()->name])}} <i class="ion-chevron-down"></i></a>
                                        <ul>
                                            <li><a href="{{route('user.account')}}">My account</a></li>
                                            <li><a href="{{route('logout')}}">Log me out!</a></li>
                                        </ul>
                                    </li>
                                @else
                                    <li class="top-hover"><a href="#">Login/Register <i class="ion-chevron-down"></i></a>
                                        <ul>
                                            <li><a href="{{route('login')}}">Login </a></li>
                                            <li><a href="{{route('register')}}">Register </a></li>

                                        </ul>
                                    </li>
                                @endif
                                {{--<li class="top-hover"><a href="#">$Doller (US) <i class="ion-chevron-down"></i></a>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="#">Taka (BDT)</a></li>--}}
                                        {{--<li><a href="#">Riyal (SAR)</a></li>--}}
                                        {{--<li><a href="#">Rupee (INR)</a></li>--}}
                                        {{--<li><a href="#">Dirham (AED)</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                <li><a href="#"><img alt="flag" src="{{asset('assets/img/icon-img/'.config('app.locale').'.jpg')}}">{{config('app.locale')}}<i class="ion-chevron-down"></i></a>
                                    <ul>
                                        <li><a href="{{route('user.change-language', ['vi'])}}"><img alt="flag" src="{{asset('assets/img/icon-img/vi.jpg')}}">VI</a></li>
                                        <li><a href="{{route('user.change-language', ['en'])}}"><img alt="flag" src="{{asset('assets/img/icon-img/en.jpg')}}">EN</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom transparent-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="logo">
                        <a href="/">
                            <img alt="" src="assets/img/logo/logo.png">
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-6">
                    <div class="header-bottom-right">
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <li><a href="{{route('home')}}">home</a>
                                    </li>
                                    <li><a href="about-us.html">about</a></li>
                                    <li class="mega-menu-position top-hover"><a href="shop.html">shop</a>
                                        <ul class="mega-menu">
                                            <li>
                                                <ul>
                                                    <li class="mega-menu-title">Categories 01</li>
                                                    <li><a href="shop.html">Aconite</a></li>
                                                    <li><a href="shop.html">Ageratum</a></li>
                                                    <li><a href="shop.html">Allium</a></li>
                                                    <li><a href="shop.html">Anemone</a></li>
                                                    <li><a href="shop.html">Angelica</a></li>
                                                    <li><a href="shop.html">Angelonia</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li class="mega-menu-title">Categories 02</li>
                                                    <li><a href="shop.html">Balsam</a></li>
                                                    <li><a href="shop.html">Baneberry</a></li>
                                                    <li><a href="shop.html">Bee Balm</a></li>
                                                    <li><a href="shop.html">Begonia</a></li>
                                                    <li><a href="shop.html">Bellflower</a></li>
                                                    <li><a href="shop.html">Bergenia</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li class="mega-menu-title">Categories 03</li>
                                                    <li><a href="shop.html">Caladium</a></li>
                                                    <li><a href="shop.html">Calendula</a></li>
                                                    <li><a href="shop.html">Carnation</a></li>
                                                    <li><a href="shop.html">Catmint</a></li>
                                                    <li><a href="shop.html">Celosia</a></li>
                                                    <li><a href="shop.html">Chives</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li class="mega-menu-title">Categories 04</li>
                                                    <li><a href="shop.html">Daffodil</a></li>
                                                    <li><a href="shop.html">Dahlia</a></li>
                                                    <li><a href="shop.html">Daisy</a></li>
                                                    <li><a href="shop.html">Diascia</a></li>
                                                    <li><a href="shop.html">Dusty Miller</a></li>
                                                    <li><a href="shop.html">Dame’s Rocket</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="top-hover"><a href="blog-left-sidebar.html">blog</a>
                                        <ul class="submenu">
                                            <li><a href="blog-masonry.html">Blog Masonry</a></li>
                                            <li><a href="#">Blog Standard <span><i class="ion-ios-arrow-right"></i></span></a>
                                                <ul class="lavel-menu">
                                                    <li><a href="blog-left-sidebar.html">left sidebar</a></li>
                                                    <li><a href="blog-right-sidebar.html">right sidebar</a></li>
                                                    <li><a href="blog-no-sidebar.html">no sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Post Types <span><i class="ion-ios-arrow-right"></i></span> </a>
                                                <ul class="lavel-menu">
                                                    <li><a href="blog-details-standerd.html">Standard post</a></li>
                                                    <li><a href="blog-details-audio.html">audio post</a></li>
                                                    <li><a href="blog-details-video.html">video post</a></li>
                                                    <li><a href="blog-details-gallery.html">gallery post</a></li>
                                                    <li><a href="blog-details-link.html">link post</a></li>
                                                    <li><a href="blog-details-quote.html">quote post</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="top-hover"><a href="#">pages</a>
                                        <ul class="submenu">
                                            <li><a href="about-us.html">about us </a></li>
                                            <li><a href="shop.html">shop Grid</a></li>
                                            <li><a href="shop-list.html">shop list</a></li>
                                            <li><a href="product-details.html">product details</a></li>
                                            <li><a href="cart-page.html">cart page</a></li>
                                            <li><a href="checkout.html">checkout</a></li>
                                            <li><a href="wishlist.html">wishlist</a></li>
                                            <li><a href="my-account.html">my account</a></li>
                                            <li><a href="login-register.html">login / register</a></li>
                                            <li><a href="contact.html">contact</a></li>
                                            <li><a href="testimonial.html">Testimonials</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        @if (isset($carts))
                            <div class="header-cart">
                                <a href="#">
                                    <div class="cart-icon">
                                        <i class="ion-bag"></i>
                                        <span class="count-style">{{$carts->getContent()->count()}}</span>
                                    </div>
                                    <div class="cart-text">
                                        <span class="digit">My Cart</span>
                                        <span>$0.00</span>
                                    </div>
                                </a>
                                @if (!$carts->isEmpty())
                                    <div class="shopping-cart-content p-4">
                                        <ul>
                                            @foreach ($carts->getContent() as $item)
                                                <li class="single-shopping-cart">
                                                    <div class="shopping-cart-img">
                                                        <a href="#"><img alt="" src="{{asset('images/'.$item->attributes->image)}}" style="width: 100%;"></a>
                                                    </div>
                                                    <div class="shopping-cart-title">
                                                        <h4><a href="#">{{$item->name}} </a></h4>
                                                        <h6>Qty: {{$item->quantity}}</h6>
                                                        <h6>Sale 30%</h6>
                                                        <span>{{$item->price}}</span>
                                                    </div>
                                                    <div class="shopping-cart-delete">
                                                        <a href="#" data-id="{{$item->id}}"><i class="ion ion-close"></i></a>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                        <div class="shopping-cart-total">
                                            <h4>Shipping : <span>$0</span></h4>
                                            <h4>Total : <span class="shop-total">{{$carts->getTotal()}}</span></h4>
                                        </div>
                                        <div class="shopping-cart-btn">
                                            <a href="cart-page.html">view cart</a>
                                            <a href="checkout.html">checkout</a>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="mobile-menu-area">
                <div class="mobile-menu">
                    <nav id="mobile-menu-active">
                        <ul class="menu-overflow">
                            <li><a href="#">home</a>
                                <ul>
                                    <li><a href="index.html">home version 1</a></li>
                                    <li><a href="index-2.html">home version 2</a></li>
                                </ul>
                            </li>
                            <li><a href="#">pages</a>
                                <ul>
                                    <li><a href="about-us.html">about us </a></li>
                                    <li><a href="shop.html">shop Grid</a></li>
                                    <li><a href="shop-list.html">shop list</a></li>
                                    <li><a href="product-details.html">product details</a></li>
                                    <li><a href="cart-page.html">cart page</a></li>
                                    <li><a href="checkout.html">checkout</a></li>
                                    <li><a href="wishlist.html">wishlist</a></li>
                                    <li><a href="my-account.html">my account</a></li>
                                    <li><a href="login-register.html">login / register</a></li>
                                    <li><a href="contact.html">contact</a></li>
                                    <li><a href="testimonial.html">Testimonials</a></li>
                                </ul>
                            </li>
                            <li><a href="shop.html"> Shop </a>
                                <ul>
                                    <li><a href="#">Categories 01</a>
                                        <ul>
                                            <li><a href="shop.html">Aconite</a></li>
                                            <li><a href="shop.html">Ageratum</a></li>
                                            <li><a href="shop.html">Allium</a></li>
                                            <li><a href="shop.html">Anemone</a></li>
                                            <li><a href="shop.html">Angelica</a></li>
                                            <li><a href="shop.html">Angelonia</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">BLOG</a>
                                <ul>
                                    <li><a href="blog-masonry.html">Blog Masonry</a></li>
                                    <li><a href="#">Blog Standard</a>
                                        <ul>
                                            <li><a href="blog-left-sidebar.html">left sidebar</a></li>
                                            <li><a href="blog-right-sidebar.html">right sidebar</a></li>
                                            <li><a href="blog-no-sidebar.html">no sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Post Types</a>
                                        <ul>
                                            <li><a href="blog-details-standerd.html">Standard post</a></li>
                                            <li><a href="blog-details-audio.html">audio post</a></li>
                                            <li><a href="blog-details-video.html">video post</a></li>
                                            <li><a href="blog-details-gallery.html">gallery post</a></li>
                                            <li><a href="blog-details-link.html">link post</a></li>
                                            <li><a href="blog-details-quote.html">quote post</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="contact.html"> Contact us </a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>