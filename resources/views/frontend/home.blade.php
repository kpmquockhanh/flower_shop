@extends('frontend.layouts.master')
@section('title', 'Trang chủ')

@section('content')
    @php
        $categories = \App\Category::query()->get();
    @endphp
    @include('frontend.layouts.slider')
    <div class="content-page">
        <div class="container">
            <div class="category-product">
                <div class="navbar nav-menu">
                    <div class="navbar-collapse">
                        <ul class="nav navbar-nav">

                            <li>
                                <div class="new_title">
                                    <h2>Sản phẩm <strong>mới</strong></h2>

                                </div>
                            </li>

                            @foreach($categories as $key => $cate)
                                <li class=" {{!$key?'active':''}} ">
                                    <a href="#{{$cate->cate_code}}" data-toggle="tab">{{$cate->cate_name}}</a>
                                </li>

                            @endforeach
                            {{--<li class="divider"></li>--}}

                        </ul>


                    </div>
                </div>

                <!-- Tab panes -->
                <div class="product-bestseller">

                    <div class="product-bestseller-content">
                        <div class="product-bestseller-list">
                            <div class="tab-container">

                                @foreach($categories as $key => $cate)
                                    @php
                                        $flowers  = $flowerByCategoryId[$cate->id];
                                    @endphp
                                    <div class="tab-panel {{!$key?'active':''}}" id="{{$cate->cate_code}}">
                                        <div class="category-products">
                                            @if (!$flowers)
                                                <div>Không có hoa nào được hiển thị.</div>
                                            @endif
                                            <ul class="products-grid">
                                                @foreach ($flowers as $flower)
                                                    @if (!$flower)
                                                        <div>Không có hoa nào được hiển thị.</div>
                                                        @else
                                                        <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                                            <div class="item-inner">
                                                                <div class="item-img">
                                                                    <div class="item-img-info">
                                                                        <a href="{{route('product.index', ['id'=> $flower->id])}}" title="{{$flower->name}}" class="product-image">
                                                                            <figure class="img-responsive" style="height: 250px;">
                                                                                <img class="lazy" alt="{{$flower->name}}" data-src="{{asset('images/'.$flower->image)}}" style="height: 100%;width: unset;" >
                                                                            </figure>

                                                                        </a>
                                                                        @if ($flower->saleoff)
                                                                            <div class="new-label new-top-left">
                                                                                Sale {{$flower->saleoff*100}}%
                                                                            </div>
                                                                        @endif


                                                                        <div class="box-hover">
                                                                            <ul class="add-to-links">
                                                                                <li>
                                                                                    <a class="link-quickview" href="#"
                                                                                       data-product_id="{{$flower->id}}">Xem nhanh</a>
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
                                                                        <div class="item-title">
                                                                            <a href="{{route('product.index', ['id' => $flower->id])}}"
                                                                                                   title="{{$flower->name}}"> {{$flower->name}}</a>
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
                                                                                          @if ($flower->saleoff)
                                                                                              <del>
                                                                                              <span class="woocommerce-Price-amount amount">
                                                                                                  <span class="woocommerce-Price-currencySymbol"></span>{{number_format($flower->price)}} đ</span>
                                                                                          </del>
                                                                                          @endif
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
                                                                                    <span>Thêm vào giỏ hàng</span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    @endif


                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('frontend.layouts.best-sell', ['flowers' => $hotFlowers])



    {{--@include('frontend.layouts.blog')--}}
@stop

@section('script')
    <script type="text/javascript">
        jQuery('.timer-grid').each(function(){
            var countTime=jQuery(this).attr('data-time');
            jQuery(this).countdown(countTime,function(event){jQuery(this).html('<div class="day box-time-date"><span class="number">'+event.strftime('%D')+' </span>days</div> <div class="hour box-time-date"><span class="number">'+event.strftime('%H')+'</span>hrs</div><div class="min box-time-date"><span class="number">'+event.strftime('%M')+'</span> mins</div> <div class="sec box-time-date"><span class="number">'+event.strftime('%S')+' </span>sec</div>')});

        });
        jQuery('.lazy').lazy();
    </script>
    <script type='text/javascript'>
        jQuery(document).ready(function() {
            jQuery('#rev_slider_4').show().revolution({
                dottedOverlay: 'none',
                delay: 5000,
                startwidth: 915,
                startheight: 450,
                hideThumbs: 200,
                thumbWidth: 200,
                thumbHeight: 50,
                thumbAmount: 2,
                navigationType: 'thumb',
                navigationArrows: 'solo',
                navigationStyle: 'round',
                touchenabled: 'on',
                onHoverStop: 'on',
                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,
                spinner: 'spinner0',
                keyboardNavigation: 'off',
                navigationHAlign: 'center',
                navigationVAlign: 'bottom',
                navigationHOffset: 0,
                navigationVOffset: 20,
                soloArrowLeftHalign: 'left',
                soloArrowLeftValign: 'center',
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,
                soloArrowRightHalign: 'right',
                soloArrowRightValign: 'center',
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,
                shadow: 0,
                fullWidth: 'on',
                fullScreen: 'off',
                stopLoop: 'off',
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: 'off',
                autoHeight: 'off',
                forceFullWidth: 'on',
                fullScreenAlignForce: 'off',
                minFullScreenHeight: 0,
                hideNavDelayOnMobile: 1500,
                hideThumbsOnMobile: 'off',
                hideBulletsOnMobile: 'off',
                hideArrowsOnMobile: 'off',
                hideThumbsUnderResolution: 0,
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                fullScreenOffsetContainer: ''
            });
        });
    </script>
@stop
