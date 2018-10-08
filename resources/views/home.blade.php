@extends('layouts.master')
@section('slider')
    @include('layouts.slider')
@stop
@section('content')
    <div class="product-area pt-40 pb-70">
        <div class="container">
            <div class="product-top-bar section-border mb-35">
                <div class="section-title-wrap">
                    <h3 class="section-title section-bg-white">Featured Products</h3>
                </div>
                <div class="product-tab-list nav section-bg-white">
                    <a class="active" data-toggle="tab" href="#tab1">
                        <h4>All </h4>
                    </a>
                    <a data-toggle="tab" href="#tab2">
                        <h4>Winter </h4>
                    </a>
                    <a data-toggle="tab" href="#tab3">
                        <h4> Various  </h4>
                    </a>
                    <a data-toggle="tab" href="#tab4">
                        <h4>Greens </h4>
                    </a>
                </div>
            </div>
            <div class="tab-content jump">
                <div id="tab1" class="tab-pane active">
                    <div class="featured-product-active owl-carousel product-nav">
                        @foreach ($flowers as $i=>$flower)
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img alt="" src="{{asset('images/'.$flower->image)}}">
                                    </a>
                                    @if ($flower->saleoff != 0)

                                        <span>-{{$flower->saleoff*100}}%</span>
                                    @endif
                                    <div class="product-action">
                                        <a class="action-wishlist" href="#" title="Wishlist">
                                            <i class="icon-heart"></i>
                                        </a>
                                        <a class="action-cart" href="#" title="Add To Cart" data-id="{{$flower->id}}">
                                            <i class="icon-handbag"></i>
                                        </a>
                                        <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                            <i class="icon-magnifier-add"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content text-center">
                                    <h4>
                                        <a href="product-details.html">{{$flower->name}} </a>
                                    </h4>
                                    <div class="product-price-wrapper">
                                        <span>{{$flower->price*(1-$flower->saleoff)}} VNĐ</span>
                                        <span class="product-price-old">{{$flower->price}} VNĐ </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div id="tab2" class="tab-pane">
                    <div class="featured-product-active owl-carousel product-nav">
                        @foreach ($flowers as $i=>$flower)
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img alt="" src="{{asset('images/'.$flower->image)}}">
                                    </a>
                                    @if ($flower->saleoff != 0)

                                        <span>-{{$flower->saleoff*100}}%</span>
                                    @endif
                                    <div class="product-action">
                                        <a class="action-wishlist" href="#" title="Wishlist">
                                            <i class="icon-heart"></i>
                                        </a>
                                        <a class="action-cart" href="#" title="Add To Cart" data-id="{{$flower->id}}">
                                            <i class="icon-handbag"></i>
                                        </a>
                                        <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                            <i class="icon-magnifier-add"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content text-center">
                                    <h4>
                                        <a href="product-details.html">{{$flower->name}} </a>
                                    </h4>
                                    <div class="product-price-wrapper">
                                        <span>{{$flower->price*(1-$flower->saleoff)}} VNĐ</span>
                                        <span class="product-price-old">{{$flower->price}} VNĐ </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div id="tab3" class="tab-pane">
                    <div class="featured-product-active owl-carousel product-nav">
                        @foreach ($flowers as $i=>$flower)
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img alt="" src="{{asset('images/'.$flower->image)}}">
                                    </a>
                                    @if ($flower->saleoff != 0)

                                        <span>-{{$flower->saleoff*100}}%</span>
                                    @endif
                                    <div class="product-action">
                                        <a class="action-wishlist" href="#" title="Wishlist">
                                            <i class="icon-heart"></i>
                                        </a>
                                        <a class="action-cart" href="#" title="Add To Cart" data-id="{{$flower->id}}">
                                            <i class="icon-handbag"></i>
                                        </a>
                                        <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                            <i class="icon-magnifier-add"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content text-center">
                                    <h4>
                                        <a href="product-details.html">{{$flower->name}} </a>
                                    </h4>
                                    <div class="product-price-wrapper">
                                        <span>{{$flower->price*(1-$flower->saleoff)}} VNĐ</span>
                                        <span class="product-price-old">{{$flower->price}} VNĐ </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div id="tab4" class="tab-pane">
                    <div class="featured-product-active owl-carousel product-nav">
                        @foreach ($flowers as $i=>$flower)
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img alt="" src="{{asset('images/'.$flower->image)}}">
                                    </a>
                                    @if ($flower->saleoff != 0)

                                        <span>-{{$flower->saleoff*100}}%</span>
                                    @endif
                                    <div class="product-action">
                                        <a class="action-wishlist" href="#" title="Wishlist">
                                            <i class="icon-heart"></i>
                                        </a>
                                        <a class="action-cart" href="#" title="Add To Cart" data-id="{{$flower->id}}">
                                            <i class="icon-handbag"></i>
                                        </a>
                                        <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                            <i class="icon-magnifier-add"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content text-center">
                                    <h4>
                                        <a href="product-details.html">{{$flower->name}} </a>
                                    </h4>
                                    <div class="product-price-wrapper">
                                        <span>{{$flower->price*(1-$flower->saleoff)}} VNĐ</span>
                                        <span class="product-price-old">{{$flower->price}} VNĐ </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="testimonials-area bg-img pt-120 pb-115" style="background-image:url({{asset('assets/img/bg/bg-1.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 ml-auto col-12">
                    <div class="testimonial-active owl-carousel">
                        <div class="single-testimonial text-center">
                            <div class="testimonial-img">
                                <img alt="" src="{{asset('assets/img/icon-img/testi.png')}}">
                            </div>
                            <p>When a beautiful design is combined with powerful technology,<br> it truly is an artwork. I love how my website operates and looks with this theme. <br>Thank you for the awesome product. </p>
                            <h4>Samia Robiul</h4>
                        </div>
                        <div class="single-testimonial text-center">
                            <div class="testimonial-img">
                                <img alt="" src="{{asset('assets/img/icon-img/testi.png')}}">
                            </div>
                            <p>“ Lorem ipsum dolor sit, con adipisicing elit, sed do eiusmod tempor <br>incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud <br>exercitati ullamco laboris  ” </p>
                            <h4> Tayeb Rayed</h4>
                        </div>
                        <div class="single-testimonial text-center">
                            <div class="testimonial-img">
                                <img alt="" src="{{asset('assets/img/icon-img/testi.png')}}">
                            </div>
                            <p>When a beautiful design is combined with powerful ,<br> technology it truly is an artwork. I love how my website operates and looks with this  <br>theme. Thank you for the awesome product. </p>
                            <h4>Hamim Ahamed</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="best-selling-product pt-70 pb-75 gray-bg">
        <div class="container">
            <div class="product-top-bar section-border mb-35">
                <div class="section-title-wrap">
                    <h3 class="section-title section-bg-gray">Best Selling Products</h3>
                </div>
            </div>
            <div class="best-selling-wrap">
                <div class="best-selling-active owl-carousel product-nav">
                    <div class="single-best-selling">
                        <div class="row">
                            <div class="col-lg-6 col-xl-5 col-md-6">
                                <div class="single-best-img">
                                    <img class="tilter" src="{{asset('assets/img/banner/deal-1.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-7 col-md-6">
                                <div class="deals-content text-center deal-mrg">
                                    <img alt="" src="{{asset('assets/img/icon-img/deals-2.png')}}">
                                    <h2>Hot Deal ! Sale Up To <span>20% Off</span></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. </p>
                                    <div class="timer timer-style">
                                        <div data-countdown="2018/09/01"></div>
                                    </div>
                                    <div class="deals-btn">
                                        <a href="#">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-best-selling">
                        <div class="row">
                            <div class="col-lg-6 col-xl-5 col-md-6">
                                <div class="single-best-img">
                                    <img class="tilter" src="{{asset('assets/img/banner/deal-1.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-7 col-md-6">
                                <div class="deals-content text-center deal-mrg">
                                    <img alt="" src="{{asset('assets/img/icon-img/deals-2.png')}}">
                                    <h2>Hot Deal ! Sale Up To <span>20% Off</span></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. </p>
                                    <div class="timer timer-style">
                                        <div data-countdown="2018/09/01"></div>
                                    </div>
                                    <div class="deals-btn">
                                        <a href="#">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-area pt-70 pb-70">
        <div class="container">
            <div class="product-top-bar section-border mb-35">
                <div class="section-title-wrap">
                    <h3 class="section-title section-bg-white">Hot Flower</h3>
                </div>
            </div>
            <div class="featured-product-active hot-flower owl-carousel product-nav">
                @foreach ($flowers as $i=>$flower)
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img alt="" src="{{asset('images/'.$flower->image)}}">
                            </a>
                            @if ($flower->saleoff != 0)

                                <span>-{{$flower->saleoff*100}}%</span>
                            @endif
                            <div class="product-action">
                                <a class="action-wishlist" href="#" title="Wishlist">
                                    <i class="icon-heart"></i>
                                </a>
                                <a class="action-cart" href="#" title="Add To Cart" data-id="{{$flower->id}}">
                                    <i class="icon-handbag"></i>
                                </a>
                                <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                    <i class="icon-magnifier-add"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content text-center">
                            <h4>
                                <a href="product-details.html">{{$flower->name}} </a>
                            </h4>
                            <div class="product-price-wrapper">
                                <span>{{$flower->price*(1-$flower->saleoff)}} VNĐ</span>
                                <span class="product-price-old">{{$flower->price}} VNĐ </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="new-year-offer-area pb-75">
        <div class="container">
            <div class="new-year-offer-wrap pt-70 pb-75 bg-img" style="background-image:url({{asset('assets/img/banner/banner-4.jpg')}});">
                <div class="new-year-offer-content text-center">
                    <h4>New Year Offer</h4>
                    <h3>Fresh flowers for any special occasion</h3>
                    <a href="#">Discover now</a>
                </div>
            </div>
        </div>
    </div>
@endsection