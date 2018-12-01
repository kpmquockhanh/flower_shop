<div id="magik-slideshow" class="magik-slideshow">
    <div class="container">
        <div class="row">
            <div class="col-md-9">

                <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container'>
                    <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
                        <ul>
                            <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='{{asset('assets/uploads/sites/26/2017/07/slide-img1.jpg')}}'>
                                <img
                                        src="{{asset('assets/uploads/sites/26/2017/07/slide-img1.jpg')}}" data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat'
                                        alt="slider1"/> <div class="info">
                                    <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;max-width:auto;max-height:auto;white-space:nowrap;'><span>Đa dạng</span> </div>
                                    <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'><span>Hoa phong phú</span> </div>
                                    <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1450' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'>Mang đến cho bạn những mẫu hoa ưng ý nhất.</div>
                                    <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'><a href='#' class="buy-btn">Shop Now</a> </div>
                                </div>                                        <a class="s-link" href="#"></a>
                            </li>

                            <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='{{asset('assets/uploads/sites/26/2017/07/slide-img1.jpg')}}'>
                                <img
                                        src="{{asset('assets/uploads/sites/26/2017/07/slide-img2.jpg')}}" data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat'
                                        alt="slider2"/> <div class="info">
                                    <div class='tp-caption ExtraLargeTitle sft slide2  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;max-width:auto;max-height:auto;white-space:nowrap;padding-right:0px'><span>Siêu giảm giá</span> </div>
                                    <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'>Quà tặng đặc biệt</div>
                                    <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'>Những phần quà hấp dẫn đang chờ đón các bạn</div>
                                    <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'><a href='#' class="buy-btn">Mua ngay</a> </div>
                                </div>                                        <a class="s-link" href="#"></a>
                            </li>



                        </ul>
                        <div class="tp-bannertimer"></div>
                    </div>
                </div>

            </div>
            <div class="col-md-3 hot-deal">

                <ul class="products-grid">



                    @if ($hotFlowers->count())
                        @php $flower = $hotFlowers->first(); @endphp
                            <li class="right-space two-height item">
                                <div class="item-inner">
                                    <div class="item-img">

                                        <div class="item-img-info">
                                            <a href="#" title="{{$flower->name}}" class="product-image">
                                                <figure class="img-responsive">
                                                    <img alt="{{$flower->name}}" src="{{'images/'.$flower->image}}">
                                                </figure>
                                            </a>
                                            <div class="hot-label hot-top-left">
                                                hot            </div>


                                            <div class="box-hover">
                                                <ul class="add-to-links">
                                                    <li>
                                                        <a class="yith-wcqv-button link-quickview" href="#" data-product_id="{{$flower->id}}">Xem nhanh</a>
                                                    </li>
                                                    {{--<li>--}}
                                                    {{--<a href="/creta/?add_to_wishlist=30"  data-product-id="30"--}}
                                                    {{--data-product-type="simple" class="add_to_wishlist link-wishlist">Add to Wishlist</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                    {{--<a href="#" class="compare link-compare add_to_compare" data-product_id="">Add to Compare</a>--}}

                                                    {{--</li>--}}
                                                </ul>
                                            </div>

                                            <div class="box-timer">
                                                <div class="timer-grid"  data-time="{{\Carbon\Carbon::today()->addDay()->format('Y/m/d')}}">
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"><a href="#"
                                                                       title="{{$flower->name}}"> {{$flower->name}} </a>
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
                                                <span class="woocs_price_code" data-product-id="30">
                                                    <span class="woocs_price_code" data-product-id="30">
                                                        <del>
                                                            <span class="woocommerce-Price-amount amount">
                                                                {{--{{dd($flower->price)}}--}}
                                                                {{number_format($flower->price)}}
                                                                <span class="woocommerce-Price-currencySymbol">đ</span>

                                                            </span>
                                                        </del>
                                                        <ins>
                                                            <span class="woocommerce-Price-amount amount">
                                                                {{number_format($flower->sale_price)}}
                                                                <span class="woocommerce-Price-currencySymbol">đ</span>

                                                            </span>
                                                        </ins>
                                                    </span>
                                                </span>
                                                    </div>
                                                </div>
                                                <div class="action">
                                                    <a class="single_add_to_cart_button add_to_cart_button  product_type_simple ajax_add_to_cart button btn-cart" title='Thêm vào giỏ hàng' data-quantity="1" data-product_id="{{$flower->id}}"
                                                       href='#'>
                                                        <span>Thêm vào giỏ hàng</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </li>
                        @else
                        <p>Không có hoa nào.</p>
                    @endif

                </ul>



            </div>


        </div>
    </div>

    <!-- end Slider -->

</div>