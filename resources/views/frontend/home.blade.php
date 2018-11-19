@extends('frontend.layouts.master')
@section('title', 'Trang chủ - klpflower.com')

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
                            {{--<li class="divider"></li>--}}

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
                                            <div>Không có hoa nào được hiển thị.</div>
                                        @endif
                                        <ul class="products-grid">
                                            @foreach ($flowers as $flower)
                                                <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                                    <div class="item-inner">
                                                        <div class="item-img">
                                                            <div class="item-img-info">
                                                                <a href="{{route('product.index', ['id'=> $flower->id])}}" title="{{$flower->name}}" class="product-image">
                                                                    <figure class="img-responsive" style="height: 250px;">
                                                                        <img alt="{{$flower->name}}" src="{{asset('images/'.$flower->image)}}" style="height: 100%;width: unset;" >
                                                                    </figure>

                                                                </a>
                                                                <div class="new-label new-top-left">
                                                                    Sale {{$flower->saleoff*100}}%
                                                                </div>

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
                                                                <div class="item-title"><a href="{{route('product.index', ['id' => $flower->id])}}"
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

                                            @endforeach
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