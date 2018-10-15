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
                        <div class="product-img" style="height: 200px;">
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