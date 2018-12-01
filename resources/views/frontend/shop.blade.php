@extends('frontend.layouts.master')
@section('title','Shop')
@section('content')
    <div class="main-container col2-left-layout  bounceInUp animated">
        <div class="container">
            <div class="row">

                <div id="column-left" class="col-left sidebar col-sm-3 col-xs-12 ">
                    <div id="woocommerce_product_categories-2" class="block woocommerce widget_product_categories">
                        <div class="block-title">Chủ đề </div>
                        <ul class="product-categories">
                            {{--<li class="cat-item cat-item-30 cat-parent"><a href="http://wpdemo.magikthemes.com/creta/product-category/men/">Anniversary</a>--}}
                                {{--<ul class="children" style="display: none;">--}}
                                    {{--<li class="cat-item cat-item-47 cat-parent"><a href="http://wpdemo.magikthemes.com/creta/product-category/men/jackets/">Favourite Flowers</a>--}}
                                        {{--<ul class="children" style="display: none;">--}}
                                            {{--<li class="cat-item cat-item-67"><a href="http://wpdemo.magikthemes.com/creta/product-category/men/jackets/coats/">Lilies</a></li>--}}
                                            {{--<li class="cat-item cat-item-70"><a href="http://wpdemo.magikthemes.com/creta/product-category/men/jackets/formal-jackets/">Orchids</a></li>--}}
                                            {{--<li class="cat-item cat-item-62"><a href="http://wpdemo.magikthemes.com/creta/product-category/men/jackets/blazers/">Roses Bouquet</a></li>--}}
                                            {{--<li class="cat-item cat-item-49"><a href="http://wpdemo.magikthemes.com/creta/product-category/men/jackets/leather-jackets/">Tulips</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--<li class="cat-item cat-item-33 cat-parent"><a href="http://wpdemo.magikthemes.com/creta/product-category/men/shoes/">Flower with</a>--}}
                                        {{--<ul class="children" style="display: none;">--}}
                                            {{--<li class="cat-item cat-item-40"><a href="http://wpdemo.magikthemes.com/creta/product-category/men/shoes/canvas-shoes/">Congratulations</a></li>--}}
                                            {{--<li class="cat-item cat-item-50"><a href="http://wpdemo.magikthemes.com/creta/product-category/men/shoes/leather-shoes/">Get Well Soon</a></li>--}}
                                            {{--<li class="cat-item cat-item-41"><a href="http://wpdemo.magikthemes.com/creta/product-category/men/shoes/casual-shoes/">Good Luck</a></li>--}}
                                            {{--<li class="cat-item cat-item-35"><a href="http://wpdemo.magikthemes.com/creta/product-category/men/shoes/sports-shoes/">I Am Sorry</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--<li class="cat-item cat-item-42 cat-parent"><a href="http://wpdemo.magikthemes.com/creta/product-category/men/dresses/">Flowers &amp; Combos</a>--}}
                                        {{--<ul class="children" style="display: none;">--}}
                                            {{--<li class="cat-item cat-item-68"><a href="http://wpdemo.magikthemes.com/creta/product-category/men/dresses/designer/">Flower &amp; Card</a></li>--}}
                                            {{--<li class="cat-item cat-item-46"><a href="http://wpdemo.magikthemes.com/creta/product-category/men/dresses/hoodies-dresses/">Flower &amp; Chocolates</a></li>--}}
                                            {{--<li class="cat-item cat-item-65"><a href="http://wpdemo.magikthemes.com/creta/product-category/men/dresses/casual/">Flower &amp; Dry Fruit</a></li>--}}
                                            {{--<li class="cat-item cat-item-44"><a href="http://wpdemo.magikthemes.com/creta/product-category/men/dresses/evening/">Flower &amp; Teddy Bear</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            @foreach($categories as $category)
                                <li class="cat-item {{isset($queries['cate'])?$queries['cate'] == $category->id?'current-cat':'':''}}">
                                    <a href="{{route('shop', array_merge($queries,['cate' => $category->id]))}}">{{$category->cate_name}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div id="color_filter" class="block woocommerce widget_layered_nav woocommerce-widget-layered-nav">
                        <div class="block-title">Lọc theo giá</div>
                        <ul class="woocommerce-widget-layered-nav-list">
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term {{isset($queries['price'])?'':'chosen'}}">
                                <a rel="nofollow" href="{{route('shop', array_except($queries, ['price']))}}">Tất cả</a>
                                {{--<span class="count">(2)</span>--}}
                            </li>
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term {{isset($queries['price'])?$queries['price']==50000?'chosen':'':''}}">
                                <a rel="nofollow" href="{{route('shop', array_merge($queries, ['price'=>50000]))}}">Lớn hơn 50,000đ</a>
                                {{--<span class="count">(2)</span>--}}
                            </li>
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term {{isset($queries['price'])?$queries['price']==100000?'chosen':'':''}}">
                                <a rel="nofollow" href="{{route('shop', array_merge($queries, ['price'=>100000]))}}">Lớn hơn 100,000đ</a>
                                {{--<span class="count">(10)</span>--}}
                            </li>
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term {{isset($queries['price'])?$queries['price']==300000?'chosen':'':''}}">
                                <a rel="nofollow" href="{{route('shop', array_merge($queries, ['price'=>300000]))}}">Lớn hơn 300,000đ</a>
                                {{--<span class="count">(10)</span>--}}
                            </li>
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term {{isset($queries['price'])?$queries['price']==500000?'chosen':'':''}}">
                                <a rel="nofollow" href="{{route('shop', array_merge($queries, ['price'=>500000]))}}">Lớn hơn 500,000đ</a>
                                {{--<span class="count">(10)</span>--}}
                            </li>
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term {{isset($queries['price'])?$queries['price']==1000000?'chosen':'':''}}">
                                <a rel="nofollow" href="{{route('shop', array_merge($queries, ['price'=>1000000]))}}">Lớn hơn 1,000,000đ</a>
                                {{--<span class="count">(10)</span>--}}
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-9 col-xs-12">

                    <div class="col-main">

                        <div class="page-heading">
                            <h2>
                                <span class="page-heading-title">
                                    Cửa hàng
                                </span>
                            </h2>
                            <div class="toolbar">

                                <p class="woocommerce-result-count">
                                    Hiển thị {{$fromItem}}–{{$toItem}} của {{$flowers->total()}} kết quả tìm được</p>

                                <form class="woocommerce-ordering" method="get">
                                    <div id="sort-by">

                                        <label class="left">Sắp xếp theo: </label>
                                        <select name="orderby" class="orderby">
                                            <option value="menu_order" selected="selected">Mặc định</option>
                                            <option value="popularity">Độ phổ biến</option>
                                            <option value="rating">Đánh giá</option>
                                            <option value="date">Mới nhất</option>
                                            <option value="price">Giá tăng dần</option>
                                            <option value="price-desc">Giá giảm dần</option>
                                        </select>
                                        <input type="hidden" name="paged" value="1">
                                    </div>
                                </form>

                            </div>
                        </div>

                        <div class="category-products">

                            @if (!$flowers->count())
                                <div>Không có hoa nào được hiển thị.</div>
                            @endif
                            <ul class="products-grid products">

                                @foreach($flowers as $index => $flower)
                                        <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6 {{$index%3==0?'wide-first':''}}{{$index%3==2?'last':''}}">
                                            <div class="item-inner">
                                                <div class="item-img">
                                                    <div class="item-img-info">
                                                        <div class="pimg">

                                                            <a href="{{route('product.index', ['id'=>$flower->id])}}" class="product-image">
                                                                <img class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazy" data-src="{{asset('images/'.$flower->image)}}" alt="" style="width: auto;height: 300px;">
                                                            </a>

                                                        </div>
                                                        <div class="box-hover">
                                                            <ul class="add-to-links">

                                                                <li>

                                                                    <a title="Quick View" class="yith-wcqv-button quickview link-quickview" data-product_id="{{$flower->id}}">Xem nhanh</a></li>

                                                                {{--<li><a href="/creta/shop/?add_to_wishlist=1577" data-product-id="1577" data-product-type="simple" class="add_to_wishlist link-wishlist" title="Add to WishList">Add to WishList</a></li>--}}
                                                                {{--<li><a class="compare add_to_compare_small link-compare" data-product_id="1577" href="http://wpdemo.magikthemes.com/creta?action=yith-woocompare-add-product&amp;id=1577" title="Add to Compare">Add to Compare</a></li>--}}

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title">
                                                            <a href="{{route('product.index', ['id' => $flower->id])}}">
                                                                {{$flower->name}}
                                                            </a>
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="rating">
                                                                <div class="ratings">
                                                                    <div class="rating-box">
                                                                        <div style="width:0%" class="rating"></div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                    <span class="woocs_price_code">
                                                                        <span class="woocs_price_code">
                                                                             @if ($flower->saleoff)
                                                                                <del>
                                                                        <span class="woocommerce-Price-amount amount">{{number_format($flower->price)}}
                                                                            <span class="woocommerce-Price-currencySymbol">đ</span>
                                                                        </span>
                                                                        </del>
                                                                            @endif
                                                                            <ins>
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    {{number_format($flower->sale_price)}}<span class="woocommerce-Price-currencySymbol">đ</span>
                                                                                </span>
                                                                            </ins>
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="action">
                                                                <a href="#" data-quantity="1" class="button product_type_simple ajax_add_to_cart btn-cart" data-product_id="{{$flower->id}}" rel="nofollow">Thêm vào giỏ hàng</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                @endforeach


                            </ul>
                            <div class="after-loop">
                                <div class="woocommerce-pagination pager pages">
                                    <ul class="page-numbers">
                                        <li style="display: none;"><span aria-current="page" class="page-numbers current">1</span></li>
                                        <li style="display: none;"><a class="page-numbers" href="http://wpdemo.magikthemes.com/creta/shop/page/2/">2</a></li>
                                        <li style="display: none;"><a class="page-numbers" href="http://wpdemo.magikthemes.com/creta/shop/page/3/">3</a></li>
                                        <li style="display: none;">
                                            <a class="next page-numbers" href="http://wpdemo.magikthemes.com/creta/shop/page/2/">
                                                <div class="page-separator-next">»</div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="" style="display: flex; justify-content: center">
                            {{$flowers->appends($queries)->links()}}
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
        /* <![CDATA[ */
        var woocommerce_price_slider_params = {"currency_format_num_decimals":"0","currency_format_symbol":"$","currency_format_decimal_sep":".","currency_format_thousand_sep":",","currency_format":"%s%v"};
        /* ]]> */

        jQuery('.lazy').lazy();
    </script>
@stop