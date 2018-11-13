@extends('frontend.layouts.master')
@section('content')
    @include('frontend.layouts.slider')
    <div class="content-page">
        <div class="container">
            <div class="category-product">
                <div class="navbar nav-menu">
                    <div class="navbar-collapse">
                        <ul class="nav navbar-nav">

                            <li>
                                <div class="new_title">
                                    <h2>Sản phẩm <strong>mới </strong></h2>

                                </div>
                            </li>


                            <li class=" active ">
                                <a href="#newcat-30" data-toggle="tab">Anniversary    </a>
                            </li>
                            <li class="divider"></li>
                            <li class="">
                                <a href="#newcat-45" data-toggle="tab">Everyday Occasions    </a>
                            </li>
                            <li class="divider"></li>
                            <li class="">
                                <a href="#newcat-37" data-toggle="tab">Occasion    </a>
                            </li>
                            <li class="divider"></li>
                            <li class="">
                                <a href="#newcat-39" data-toggle="tab">Special Occasion    </a>
                            </li>
                            <li class="divider"></li>
                        </ul>


                    </div>
                </div>

                <!-- Tab panes -->
                <div class="product-bestseller">

                    <div class="product-bestseller-content">
                        <div class="product-bestseller-list">
                            <div class="tab-container">
                                <div class="tab-panel active " id="newcat-30">
                                    <div class="category-products">
                                        @if (!$flowers->count())
                                            <div>Noting in this DB.</div>
                                        @endif
                                        <ul class="products-grid">
                                            @foreach ($flowers as $flower)
                                                <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                                    <div class="item-inner">
                                                        <div class="item-img">
                                                            <div class="item-img-info">
                                                                <a href="{{route('product.index', ['id'=> $flower->id])}}" title="{{$flower->name}}" class="product-image">
                                                                    <figure class="img-responsive" style="height: 250px;">
                                                                        <img alt="{{$flower->name}}" src="{{asset('images/'.$flower->image)}}" style="height: 100%; width: unset;">
                                                                    </figure>

                                                                </a>
                                                                <div class="new-label new-top-left">
                                                                    Sale {{$flower->saleoff*100}}%
                                                                </div>

                                                                <div class="box-hover">
                                                                    <ul class="add-to-links">
                                                                        <li>
                                                                            <a class="link-quickview" href="#"
                                                                               data-product_id="{{$flower->id}}">Quick View</a>
                                                                        </li>
                                                                        {{--<li>--}}
                                                                            {{--<a href="#"  data-product-id="30"--}}
                                                                               {{--data-product-type="simple" class="add_to_wishlist link-wishlist" >Add to Wishlist</a>--}}
                                                                        {{--</li>--}}
                                                                        {{--<li>--}}
                                                                            {{--<a href="#" class="compare link-compare add_to_compare" data-product_id="30"--}}
                                                                            {{-->Add to Compare</a>--}}

                                                                        {{--</li>--}}
                                                                    </ul>
                                                                </div>


                                                            </div>
                                                        </div>
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title"><a href="#"
                                                                                           title="Bunch of Assorted Gerberas in a Glass Vase"> {{$flower->name}}</a>
                                                                </div>
                                                                <div class="item-content">
                                                                    <div class="rating">
                                                                        <div class="ratings">
                                                                            <div class="rating-box">
                                                                                <div style="width:0%" class="rating"> </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item-price">
                                                                        <div class="price-box">
                                                                            <span class="regular-price">
                                                                                  <span class="woocs_price_code" data-product-id="30">
                                                                                      <span class="woocs_price_code" data-product-id="30">
                                                                                          <del>
                                                                                              <span class="woocommerce-Price-amount amount">
                                                                                                  <span class="woocommerce-Price-currencySymbol"></span>{{number_format($flower->price)}} đ</span>
                                                                                          </del>
                                                                                          <ins>
                                                                                              <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span>{{number_format($flower->price*(1-$flower->saleoff))}} đ</span>
                                                                                          </ins>
                                                                                      </span>
                                                                                  </span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="action">
                                                                        <a class="single_add_to_cart_button add_to_cart_button  product_type_simple ajax_add_to_cart button btn-cart" title='Add to cart' data-quantity="1" data-product_id="{{$flower->id}}"
                                                                           href='#'>
                                                                            <span>Add to cart </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-panel " id="newcat-45">
                                    <div class="category-products">
                                        <ul class="products-grid">
                                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                                <div class="item-inner">
                                                    <div class="item-img">
                                                        <div class="item-img-info">
                                                            <a href="#" title="Bouquet of White Gerberas" class="product-image">
                                                                <figure class="img-responsive">
                                                                    <img alt="Bouquet of White Gerberas" src="{{asset('assets/uploads/sites/26/2017/07/product1-277x366.jpg')}}">
                                                                </figure>

                                                            </a>
                                                            <div class="new-label new-top-left">
                                                                Sale            </div>

                                                            <div class="box-hover">
                                                                <ul class="add-to-links">
                                                                    <li>
                                                                        <a class="yith-wcqv-button link-quickview" href="#"
                                                                           data-product_id="1733">Quick View</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""  data-product-id="1733"
                                                                           data-product-type="simple" class="add_to_wishlist link-wishlist">Add to Wishlist</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="#" class="compare link-compare add_to_compare" data-product_id="1733"
                                                                        >Add to Compare</a>

                                                                    </li>
                                                                </ul>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"><a href="#"
                                                                                       title="Bouquet of White Gerberas"> Bouquet of White Gerberas </a>
                                                            </div>
                                                            <div class="item-content">
                                                                <div class="rating">
                                                                    <div class="ratings">
                                                                        <div class="rating-box">
                                                                            <div style="width:0%" class="rating"> </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item-price">
                                                                    <div class="price-box">
                    <span class="regular-price">
                          <span class="woocs_price_code" data-product-id="1733"><span class="woocs_price_code" data-product-id="1733"><del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>90.00</span></del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>80.00</span></ins></span></span>                     </span>

                                                                    </div>
                                                                </div>
                                                                <div class="action">
                                                                    <a class="single_add_to_cart_button add_to_cart_button  product_type_simple ajax_add_to_cart button btn-cart" title='Add to cart' data-quantity="1" data-product_id="1733"
                                                                       href='#'>
                                                                        <span>Add to cart </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                                <div class="item-inner">
                                                    <div class="item-img">
                                                        <div class="item-img-info">
                                                            <a href="#" title="Glass Vase of Pink Roses" class="product-image">
                                                                <figure class="img-responsive">
                                                                    <img alt="Glass Vase of Pink Roses" src="{{asset('assets/uploads/sites/26/2017/07/product2-277x366.jpg')}}">
                                                                </figure>

                                                            </a>
                                                            <div class="new-label new-top-left">
                                                                Sale            </div>

                                                            <div class="box-hover">
                                                                <ul class="add-to-links">
                                                                    <li>
                                                                        <a class="yith-wcqv-button link-quickview" href="#"
                                                                           data-product_id="93">Quick View</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="/creta/?add_to_wishlist=93"  data-product-id="93"
                                                                           data-product-type="simple" class="add_to_wishlist link-wishlist"                                >Add to Wishlist</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="#" class="compare link-compare add_to_compare" data-product_id="93"
                                                                        >Add to Compare</a>

                                                                    </li>
                                                                </ul>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"><a href="#"
                                                                                       title="Glass Vase of Pink Roses"> Glass Vase of Pink Roses </a>
                                                            </div>
                                                            <div class="item-content">
                                                                <div class="rating">
                                                                    <div class="ratings">
                                                                        <div class="rating-box">
                                                                            <div style="width:0%" class="rating"> </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item-price">
                                                                    <div class="price-box">
                    <span class="regular-price">
                          <span class="woocs_price_code" data-product-id="93"><span class="woocs_price_code" data-product-id="93"><del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>13.99</span></del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>12.00</span></ins></span></span>                     </span>

                                                                    </div>
                                                                </div>
                                                                <div class="action">
                                                                    <a class="single_add_to_cart_button add_to_cart_button  product_type_simple ajax_add_to_cart button btn-cart" title='Add to cart' data-quantity="1" data-product_id="93"
                                                                       href='#'>
                                                                        <span>Add to cart </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                                <div class="item-inner">
                                                    <div class="item-img">
                                                        <div class="item-img-info">
                                                            <a href="#" title="Glass Vase of Pink Roses" class="product-image">
                                                                <figure class="img-responsive">
                                                                    <img alt="Glass Vase of Pink Roses" src="{{asset('assets/uploads/sites/26/2017/07/product2-277x366.jpg')}}">
                                                                </figure>

                                                            </a>
                                                            <div class="new-label new-top-left">
                                                                Sale            </div>

                                                            <div class="box-hover">
                                                                <ul class="add-to-links">
                                                                    <li>
                                                                        <a class="yith-wcqv-button link-quickview" href="#"
                                                                           data-product_id="93">Quick View</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="/creta/?add_to_wishlist=93"  data-product-id="93"
                                                                           data-product-type="simple" class="add_to_wishlist link-wishlist"                                >Add to Wishlist</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="#" class="compare link-compare add_to_compare" data-product_id="93"
                                                                        >Add to Compare</a>

                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"><a href="#"
                                                                                       title="Glass Vase of Pink Roses"> Glass Vase of Pink Roses </a>
                                                            </div>
                                                            <div class="item-content">
                                                                <div class="rating">
                                                                    <div class="ratings">
                                                                        <div class="rating-box">
                                                                            <div style="width:0%" class="rating"> </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item-price">
                                                                    <div class="price-box">
                                                                        <span class="regular-price">
                                                                              <span class="woocs_price_code" data-product-id="93">
                                                                                  <span class="woocs_price_code" data-product-id="93">
                                                                                      <del>
                                                                                          <span class="woocommerce-Price-amount amount">
                                                                                              <span class="woocommerce-Price-currencySymbol">&#36;</span>13.99</span>
                                                                                      </del>
                                                                                      <ins>
                                                                                          <span class="woocommerce-Price-amount amount">
                                                                                              <span class="woocommerce-Price-currencySymbol">&#36;</span>12.00</span>
                                                                                      </ins>
                                                                                  </span>
                                                                              </span>
                                                                        </span>

                                                                    </div>
                                                                </div>
                                                                <div class="action">
                                                                    <a class="single_add_to_cart_button add_to_cart_button  product_type_simple ajax_add_to_cart button btn-cart" title='Add to cart' data-quantity="1" data-product_id="93"
                                                                       href='#'>
                                                                        <span>Add to cart </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                                <div class="item-inner">
                                                    <div class="item-img">
                                                        <div class="item-img-info">
                                                            <a href="#" title="Round Handle Basket of Mixed Roses" class="product-image">
                                                                <figure class="img-responsive">
                                                                    <img alt="Round Handle Basket of Mixed Roses" src="{{asset('assets/uploads/sites/26/2017/07/product5-277x366.jpg')}}">
                                                                </figure>

                                                            </a>
                                                            <div class="new-label new-top-left">
                                                                Sale            </div>

                                                            <div class="box-hover">
                                                                <ul class="add-to-links">
                                                                    <li>
                                                                        <a class="yith-wcqv-button link-quickview" href="#"
                                                                           data-product_id="24">Quick View</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="/creta/?add_to_wishlist=24"  data-product-id="24"
                                                                           data-product-type="simple" class="add_to_wishlist link-wishlist"                                >Add to Wishlist</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="#" class="compare link-compare add_to_compare" data-product_id="24"
                                                                        >Add to Compare</a>

                                                                    </li>
                                                                </ul>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"><a href="#"
                                                                                       title="Round Handle Basket of Mixed Roses"> Round Handle Basket of Mixed Roses </a>
                                                            </div>
                                                            <div class="item-content">
                                                                <div class="rating">
                                                                    <div class="ratings">
                                                                        <div class="rating-box">
                                                                            <div style="width:0%" class="rating"> </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item-price">
                                                                    <div class="price-box">
                    <span class="regular-price">
                          <span class="woocs_price_code" data-product-id="24"><span class="woocs_price_code" data-product-id="24"><del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>39.99</span></del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>37.00</span></ins></span></span>                     </span>

                                                                    </div>
                                                                </div>
                                                                <div class="action">
                                                                    <a class="single_add_to_cart_button add_to_cart_button  product_type_simple ajax_add_to_cart button btn-cart" title='Add to cart' data-quantity="1" data-product_id="24"
                                                                       href='#'>
                                                                        <span>Add to cart </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-panel " id="newcat-37">
                                    <div class="category-products">
                                        <ul class="products-grid">
                                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                                <div class="item-inner">
                                                    <div class="item-img">
                                                        <div class="item-img-info">
                                                            <a href="#" title="Bouquet of White Gerberas" class="product-image">
                                                                <figure class="img-responsive">
                                                                    <img alt="Bouquet of White Gerberas" src="{{asset('assets/uploads/sites/26/2017/07/product1-277x366.jpg')}}">
                                                                </figure>

                                                            </a>
                                                            <div class="new-label new-top-left">
                                                                Sale            </div>

                                                            <div class="box-hover">
                                                                <ul class="add-to-links">
                                                                    <li>
                                                                        <a class="yith-wcqv-button link-quickview" href="#"
                                                                           data-product_id="1733">Quick View</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="/creta/?add_to_wishlist=1733"  data-product-id="1733"
                                                                           data-product-type="simple" class="add_to_wishlist link-wishlist"                                >Add to Wishlist</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="#" class="compare link-compare add_to_compare" data-product_id="1733"
                                                                        >Add to Compare</a>

                                                                    </li>
                                                                </ul>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"><a href="#"
                                                                                       title="Bouquet of White Gerberas"> Bouquet of White Gerberas </a>
                                                            </div>
                                                            <div class="item-content">
                                                                <div class="rating">
                                                                    <div class="ratings">
                                                                        <div class="rating-box">
                                                                            <div style="width:0%" class="rating"> </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item-price">
                                                                    <div class="price-box">
                    <span class="regular-price">
                          <span class="woocs_price_code" data-product-id="1733"><span class="woocs_price_code" data-product-id="1733"><del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>90.00</span></del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>80.00</span></ins></span></span>                     </span>

                                                                    </div>
                                                                </div>
                                                                <div class="action">
                                                                    <a class="single_add_to_cart_button add_to_cart_button  product_type_simple ajax_add_to_cart button btn-cart" title='Add to cart' data-quantity="1" data-product_id="1733"
                                                                       href='#'>
                                                                        <span>Add to cart </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                                <div class="item-inner">
                                                    <div class="item-img">
                                                        <div class="item-img-info">
                                                            <a href="#" title="Glass Vase of Pink Roses" class="product-image">
                                                                <figure class="img-responsive">
                                                                    <img alt="Glass Vase of Pink Roses" src="{{asset('assets/uploads/sites/26/2017/07/product2-277x366.jpg')}}">
                                                                </figure>

                                                            </a>
                                                            <div class="new-label new-top-left">
                                                                Sale            </div>

                                                            <div class="box-hover">
                                                                <ul class="add-to-links">
                                                                    <li>
                                                                        <a class="yith-wcqv-button link-quickview" href="#"
                                                                           data-product_id="93">Quick View</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="/creta/?add_to_wishlist=93"  data-product-id="93"
                                                                           data-product-type="simple" class="add_to_wishlist link-wishlist"                                >Add to Wishlist</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="#" class="compare link-compare add_to_compare" data-product_id="93"
                                                                        >Add to Compare</a>

                                                                    </li>
                                                                </ul>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"><a href="#"
                                                                                       title="Glass Vase of Pink Roses"> Glass Vase of Pink Roses </a>
                                                            </div>
                                                            <div class="item-content">
                                                                <div class="rating">
                                                                    <div class="ratings">
                                                                        <div class="rating-box">
                                                                            <div style="width:0%" class="rating"> </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item-price">
                                                                    <div class="price-box">
                    <span class="regular-price">
                          <span class="woocs_price_code" data-product-id="93"><span class="woocs_price_code" data-product-id="93"><del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>13.99</span></del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>12.00</span></ins></span></span>                     </span>

                                                                    </div>
                                                                </div>
                                                                <div class="action">
                                                                    <a class="single_add_to_cart_button add_to_cart_button  product_type_simple ajax_add_to_cart button btn-cart" title='Add to cart' data-quantity="1" data-product_id="93"
                                                                       href='#'>
                                                                        <span>Add to cart </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                                <div class="item-inner">
                                                    <div class="item-img">
                                                        <div class="item-img-info">
                                                            <a href="#" title="Bunch of Assorted Gerberas in a Glass Vase" class="product-image">
                                                                <figure class="img-responsive">
                                                                    <img alt="Bunch of Assorted Gerberas in a Glass Vase" src="{{asset('assets/uploads/sites/26/2017/07/product4-277x366.jpg')}}">
                                                                </figure>

                                                            </a>
                                                            <div class="new-label new-top-left">
                                                                Sale            </div>

                                                            <div class="box-hover">
                                                                <ul class="add-to-links">
                                                                    <li>
                                                                        <a class="yith-wcqv-button link-quickview" href="#"
                                                                           data-product_id="30">Quick View</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="/creta/?add_to_wishlist=30"  data-product-id="30"
                                                                           data-product-type="simple" class="add_to_wishlist link-wishlist"                                >Add to Wishlist</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="#" class="compare link-compare add_to_compare" data-product_id="30"
                                                                        >Add to Compare</a>

                                                                    </li>
                                                                </ul>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"><a href="#"
                                                                                       title="Bunch of Assorted Gerberas in a Glass Vase"> Bunch of Assorted Gerberas in a Glass Vase </a>
                                                            </div>
                                                            <div class="item-content">
                                                                <div class="rating">
                                                                    <div class="ratings">
                                                                        <div class="rating-box">
                                                                            <div style="width:0%" class="rating"> </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item-price">
                                                                    <div class="price-box">
                    <span class="regular-price">
                          <span class="woocs_price_code" data-product-id="30"><span class="woocs_price_code" data-product-id="30"><del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>85.99</span></del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>49.99</span></ins></span></span>                     </span>

                                                                    </div>
                                                                </div>
                                                                <div class="action">
                                                                    <a class="single_add_to_cart_button add_to_cart_button  product_type_simple ajax_add_to_cart button btn-cart" title='Add to cart' data-quantity="1" data-product_id="30"
                                                                       href='#'>
                                                                        <span>Add to cart </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                                <div class="item-inner">
                                                    <div class="item-img">
                                                        <div class="item-img-info">
                                                            <a href="#" title="Round Handle Basket of Mixed Roses" class="product-image">
                                                                <figure class="img-responsive">
                                                                    <img alt="Round Handle Basket of Mixed Roses" src="{{asset('assets/uploads/sites/26/2017/07/product5-277x366.jpg')}}">
                                                                </figure>

                                                            </a>
                                                            <div class="new-label new-top-left">
                                                                Sale            </div>

                                                            <div class="box-hover">
                                                                <ul class="add-to-links">
                                                                    <li>
                                                                        <a class="yith-wcqv-button link-quickview" href="#"
                                                                           data-product_id="24">Quick View</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="/creta/?add_to_wishlist=24"  data-product-id="24"
                                                                           data-product-type="simple" class="add_to_wishlist link-wishlist"                                >Add to Wishlist</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="#" class="compare link-compare add_to_compare" data-product_id="24"
                                                                        >Add to Compare</a>

                                                                    </li>
                                                                </ul>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"><a href="#"
                                                                                       title="Round Handle Basket of Mixed Roses"> Round Handle Basket of Mixed Roses </a>
                                                            </div>
                                                            <div class="item-content">
                                                                <div class="rating">
                                                                    <div class="ratings">
                                                                        <div class="rating-box">
                                                                            <div style="width:0%" class="rating"> </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item-price">
                                                                    <div class="price-box">
                    <span class="regular-price">
                          <span class="woocs_price_code" data-product-id="24"><span class="woocs_price_code" data-product-id="24"><del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>39.99</span></del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>37.00</span></ins></span></span>                     </span>

                                                                    </div>
                                                                </div>
                                                                <div class="action">
                                                                    <a class="single_add_to_cart_button add_to_cart_button  product_type_simple ajax_add_to_cart button btn-cart" title='Add to cart' data-quantity="1" data-product_id="24"
                                                                       href='#'>
                                                                        <span>Add to cart </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-panel " id="newcat-39">
                                    <div class="category-products">
                                        <ul class="products-grid">
                                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                                <div class="item-inner">
                                                    <div class="item-img">
                                                        <div class="item-img-info">
                                                            <a href="#" title="Glass Vase of Pink Roses" class="product-image">
                                                                <figure class="img-responsive">
                                                                    <img alt="Glass Vase of Pink Roses" src="{{asset('assets/uploads/sites/26/2017/07/product2-277x366.jpg')}}">
                                                                </figure>

                                                            </a>
                                                            <div class="new-label new-top-left">
                                                                Sale            </div>

                                                            <div class="box-hover">
                                                                <ul class="add-to-links">
                                                                    <li>
                                                                        <a class="yith-wcqv-button link-quickview" href="#"
                                                                           data-product_id="93">Quick View</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="/creta/?add_to_wishlist=93"  data-product-id="93"
                                                                           data-product-type="simple" class="add_to_wishlist link-wishlist"                                >Add to Wishlist</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="#" class="compare link-compare add_to_compare" data-product_id="93"
                                                                        >Add to Compare</a>

                                                                    </li>
                                                                </ul>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"><a href="#"
                                                                                       title="Glass Vase of Pink Roses"> Glass Vase of Pink Roses </a>
                                                            </div>
                                                            <div class="item-content">
                                                                <div class="rating">
                                                                    <div class="ratings">
                                                                        <div class="rating-box">
                                                                            <div style="width:0%" class="rating"> </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item-price">
                                                                    <div class="price-box">
                    <span class="regular-price">
                          <span class="woocs_price_code" data-product-id="93"><span class="woocs_price_code" data-product-id="93"><del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>13.99</span></del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>12.00</span></ins></span></span>                     </span>

                                                                    </div>
                                                                </div>
                                                                <div class="action">
                                                                    <a class="single_add_to_cart_button add_to_cart_button  product_type_simple ajax_add_to_cart button btn-cart" title='Add to cart' data-quantity="1" data-product_id="93"
                                                                       href='#'>
                                                                        <span>Add to cart </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                                <div class="item-inner">
                                                    <div class="item-img">
                                                        <div class="item-img-info">
                                                            <a href="#" title="Bunch of Assorted Gerberas in a Glass Vase" class="product-image">
                                                                <figure class="img-responsive">
                                                                    <img alt="Bunch of Assorted Gerberas in a Glass Vase" src="{{asset('assets/uploads/sites/26/2017/07/product4-277x366.jpg')}}">
                                                                </figure>

                                                            </a>
                                                            <div class="new-label new-top-left">
                                                                Sale            </div>

                                                            <div class="box-hover">
                                                                <ul class="add-to-links">
                                                                    <li>
                                                                        <a class="yith-wcqv-button link-quickview" href="#"
                                                                           data-product_id="30">Quick View</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="/creta/?add_to_wishlist=30"  data-product-id="30"
                                                                           data-product-type="simple" class="add_to_wishlist link-wishlist">Add to Wishlist</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="#" class="compare link-compare add_to_compare" data-product_id="30"
                                                                        >Add to Compare</a>

                                                                    </li>
                                                                </ul>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"><a href="#"
                                                                                       title="Bunch of Assorted Gerberas in a Glass Vase"> Bunch of Assorted Gerberas in a Glass Vase </a>
                                                            </div>
                                                            <div class="item-content">
                                                                <div class="rating">
                                                                    <div class="ratings">
                                                                        <div class="rating-box">
                                                                            <div style="width:0%" class="rating"> </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item-price">
                                                                    <div class="price-box">
                    <span class="regular-price">
                          <span class="woocs_price_code" data-product-id="30"><span class="woocs_price_code" data-product-id="30"><del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>85.99</span></del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>49.99</span></ins></span></span>                     </span>

                                                                    </div>
                                                                </div>
                                                                <div class="action">
                                                                    <a class="single_add_to_cart_button add_to_cart_button  product_type_simple ajax_add_to_cart button btn-cart" title='Add to cart' data-quantity="1" data-product_id="30"
                                                                       href='#'>
                                                                        <span>Add to cart </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                                <div class="item-inner">
                                                    <div class="item-img">
                                                        <div class="item-img-info">
                                                            <a href="#" title="Round Handle Basket of Mixed Roses" class="product-image">
                                                                <figure class="img-responsive">
                                                                    <img alt="Round Handle Basket of Mixed Roses" src="{{asset('assets/uploads/sites/26/2017/07/product5-277x366.jpg')}}">
                                                                </figure>

                                                            </a>
                                                            <div class="new-label new-top-left">
                                                                Sale            </div>

                                                            <div class="box-hover">
                                                                <ul class="add-to-links">
                                                                    <li>
                                                                        <a class="yith-wcqv-button link-quickview" href="#"
                                                                           data-product_id="24">Quick View</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="/creta/?add_to_wishlist=24"  data-product-id="24"
                                                                           data-product-type="simple" class="add_to_wishlist link-wishlist"                                >Add to Wishlist</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="#" class="compare link-compare add_to_compare" data-product_id="24"
                                                                        >Add to Compare</a>

                                                                    </li>
                                                                </ul>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"><a href="#"
                                                                                       title="Round Handle Basket of Mixed Roses"> Round Handle Basket of Mixed Roses </a>
                                                            </div>
                                                            <div class="item-content">
                                                                <div class="rating">
                                                                    <div class="ratings">
                                                                        <div class="rating-box">
                                                                            <div style="width:0%" class="rating"> </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item-price">
                                                                    <div class="price-box">
                    <span class="regular-price">
                          <span class="woocs_price_code" data-product-id="24"><span class="woocs_price_code" data-product-id="24"><del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>39.99</span></del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>37.00</span></ins></span></span>                     </span>

                                                                    </div>
                                                                </div>
                                                                <div class="action">
                                                                    <a class="single_add_to_cart_button add_to_cart_button  product_type_simple ajax_add_to_cart button btn-cart" title='Add to cart' data-quantity="1" data-product_id="24"
                                                                       href='#'>
                                                                        <span>Add to cart </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                                <div class="item-inner">
                                                    <div class="item-img">
                                                        <div class="item-img-info">
                                                            <a href="#" title="Glass Vase with Red and White Roses" class="product-image">
                                                                <figure class="img-responsive">
                                                                    <img alt="Glass Vase with Red and White Roses" src="{{asset('assets/uploads/sites/26/2017/07/product7-277x366.jpg')}}">
                                                                </figure>

                                                            </a>

                                                            <div class="box-hover">
                                                                <ul class="add-to-links">
                                                                    <li>
                                                                        <a class="yith-wcqv-button link-quickview" href="#"
                                                                           data-product_id="1574">Quick View</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="/creta/?add_to_wishlist=1574"  data-product-id="1574"
                                                                           data-product-type="simple" class="add_to_wishlist link-wishlist"                                >Add to Wishlist</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="#" class="compare link-compare add_to_compare" data-product_id="1574"
                                                                        >Add to Compare</a>

                                                                    </li>
                                                                </ul>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"><a href="#"
                                                                                       title="Glass Vase with Red and White Roses"> Glass Vase with Red and White Roses </a>
                                                            </div>
                                                            <div class="item-content">
                                                                <div class="rating">
                                                                    <div class="ratings">
                                                                        <div class="rating-box">
                                                                            <div style="width:0%" class="rating"> </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item-price">
                                                                    <div class="price-box">
                    <span class="regular-price">
                          <span class="woocs_price_code" data-product-id="1574"><span class="woocs_price_code" data-product-id="1574"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>325.00</span></span></span>                     </span>

                                                                    </div>
                                                                </div>
                                                                <div class="action">
                                                                    <a class="single_add_to_cart_button add_to_cart_button  product_type_simple ajax_add_to_cart button btn-cart" title='Add to cart' data-quantity="1" data-product_id="1574"
                                                                       href='#'>
                                                                        <span>Add to cart </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('frontend.layouts.best-sell')



    {{--@include('frontend.layouts.blog')--}}
@stop
@section('script')
    <script type="text/javascript">
        jQuery('.timer-grid').each(function(){
            var countTime=jQuery(this).attr('data-time');
            jQuery(this).countdown(countTime,function(event){jQuery(this).html('<div class="day box-time-date"><span class="number">'+event.strftime('%D')+' </span>days</div> <div class="hour box-time-date"><span class="number">'+event.strftime('%H')+'</span>hrs</div><div class="min box-time-date"><span class="number">'+event.strftime('%M')+'</span> mins</div> <div class="sec box-time-date"><span class="number">'+event.strftime('%S')+' </span>sec</div>')});

        });
    </script>
@stop