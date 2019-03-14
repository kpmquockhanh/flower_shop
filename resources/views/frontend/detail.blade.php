@extends('frontend.layouts.master')
@section('content')
    <div class="main-container col1-layout wow bounceInUp animated" style="visibility: visible;">
        <div class="main">
            <div class="container">
                <div class="row">

                    <div class="">

                        <div class="product-view ">

                            <div id="product-113" class="post-113 product type-product status-publish has-post-thumbnail product_cat-men product_cat-furniture product_cat-beaded-handbags product_cat-handbags product_cat-jackets product_cat-shoes product_cat-dresses product_cat-women product_cat-jewellery product_tag-beaded-handbags product_tag-handbags notblog first instock shipping-taxable purchasable product-type-simple">

                                <div class="product-essential">

                                    <div class="product-img-box col-lg-4 col-sm-5 col-xs-12">

                                        <div class="images product-image">

                                            <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4" style="opacity: 1; transition: opacity 0.25s ease-in-out 0s;">

                                                <figure class="woocommerce-product-gallery__wrapper product-full">
                                                    <div data-thumb="#" class="woocommerce-product-gallery__image ">
                                                        <a class="woocommerce-main-image zoom cloud-zoom">
                                                            <img id="product-zoom" class="attachment-shop_single size-shop_single wp-post-image " src="{{asset('images/'.$flower->image)}}" data-zoom-image="#" data-large_image="#" data-large_image_width="800" data-large_image_height="800"></a>
                                                    </div>

                                                </figure>

                                            </div>
                                        </div>

                                    </div>

                                    <div class="product-shop col-lg-8 col-sm-7 col-xs-12">
                                        <div id="prev-next" class="product-next-prev">
                                            <a href="{{ route('product.index', ['id' => $flower->id + 1]) }}" class="product-next"><span></span></a>
                                            <a href="{{ route('product.index', ['id' => $flower->id + -1]) }}" class="product-prev"><span></span></a>
                                        </div>
                                        <!--#prev-next -->

                                        <div class="product-name">
                                            <h1 itemprop="name" class="product_title entry-title">{{$flower->name}}</h1></div>
                                        <div class="price-block">
                                            <div class="price-box price"><span class="woocs_price_code" data-product-id="113"><span class="woocs_price_code" data-product-id="113">
                                                        <span class="woocommerce-Price-amount amount">{{number_format($flower->price)}} <span class="woocommerce-Price-currencySymbol">đ</span></span>
                                            </span>
                                            </span>
                                            </div>
                                            {{--<p class="availability in-stock pull-right"><span> In Stock</span></p>--}}
                                        </div>

                                        <div class="woocommerce-product-details__short-description short-description">
                                            <h2>Thông điệp</h2>
                                            <p>{!! $flower->message !!}</p>
                                        </div>

                                        <div class="action pull-right">
                                            <a class="single_add_to_cart_button add_to_cart_button  product_type_simple ajax_add_to_cart button btn-cart" title='Add to cart' data-quantity="1" data-product_id="{{$flower->id}}"
                                               href='#'>
                                                <span>Thêm vào giỏ hàng </span>
                                            </a>
                                        </div>

                                        {{--<div class="yith-wcwl-add-to-wishlist add-to-wishlist-113">--}}
                                            {{--<div class="yith-wcwl-add-button show" style="display:block">--}}

                                                {{--<a href="/creta/product/basket-of-roses-with-dairymilk-silk/?add_to_wishlist=113" rel="nofollow" data-product-id="113" data-product-type="simple" class="add_to_wishlist">--}}
                                                    {{--Add to Wishlist</a>--}}
                                                {{--<img src="#" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden">--}}
                                            {{--</div>--}}

                                            {{--<div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">--}}
                                                {{--<span class="feedback">Product added!</span>--}}
                                                {{--<a href="#" rel="nofollow">--}}
                                                    {{--Browse Wishlist	        </a>--}}
                                            {{--</div>--}}

                                            {{--<div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">--}}
                                                {{--<span class="feedback">The product is already in the wishlist!</span>--}}
                                                {{--<a href="#" rel="nofollow">--}}
                                                    {{--Browse Wishlist	        </a>--}}
                                            {{--</div>--}}

                                            {{--<div style="clear:both"></div>--}}
                                            {{--<div class="yith-wcwl-wishlistaddresponse"></div>--}}

                                        {{--</div>--}}

                                        {{--<div class="clear"></div><a href="#" class="compare button" data-product_id="113" rel="nofollow">Compare</a>--}}
                                        <div class="product_meta">

                                            <span class="posted_in">Thể loại:
                                                @foreach ($flower->categories->load('category') as $key => $category)
                                                    @if ($key)
                                                        ,
                                                    @endif
                                                        <a href="{{route('shop', ['cate'=> $category->category_id])}}" rel="tag">{{$category->category->cate_name}}</a>
                                                @endforeach
                                                {{--<a href="#" rel="tag">Anniversary</a>,--}}
                                                {{--<a href="#" rel="tag">Birthday</a>,--}}
                                                {{--<a href="#" rel="tag">Birthday Flowers</a>,--}}
                                                {{--<a href="#" rel="tag">Everyday Occasions</a>,--}}
                                                {{--<a href="#" rel="tag">Favourite Flowers</a>,--}}
                                                {{--<a href="#" rel="tag">Flower with</a>,--}}
                                                {{--<a href="#" rel="tag">Flowers &amp; Combos</a>,--}}
                                                {{--<a href="#" rel="tag">Occasion</a>,--}}
                                                {{--<a href="#" rel="tag">Occasional Day</a>--}}
                                            </span>
                                            {{--<span class="tagged_as">Tags: <a href="#" rel="tag">beaded handbags</a>, <a href="#" rel="tag">handbags</a></span>--}}

                                        </div>

                                        <div class="social">
                                            <ul>
                                                <li class="fb pull-left">
                                                    <a onclick="window.open('https://www.facebook.com/sharer.php?s=100&amp;p[url]={{route('product.index', ['id' => $flower->id])}}','sharer', 'toolbar=0,status=0,width=620,height=280');" href="javascript:;">

                                                    </a>
                                                </li>

                                                <li class="tw pull-left">
                                                    <a onclick="popUp=window.open('http://twitter.com/home?status={{route('product.index', ['id' => $flower->id])}}','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;" href="javascript:;">

                                                    </a>
                                                </li>

                                                <li class="googleplus pull-left">
                                                    <a href="javascript:;" onclick="popUp=window.open('https://plus.google.com/share?url={{route('product.index', ['id' => $flower->id])}}','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;">

                                                    </a>
                                                </li>

                                                <li class="linkedin pull-left">
                                                    <a onclick="popUp=window.open('http://linkedin.com/shareArticle?mini=true&amp;url={{route('product.index', ['id' => $flower->id])}}','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;" href="javascript:;">

                                                    </a>
                                                </li>

                                                <li class="pintrest pull-left">
                                                    <a onclick="popUp=window.open('http://pinterest.com/pin/create/button/?url={{route('product.index', ['id' => $flower->id])}}','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;" href="javascript:;">

                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>
                                <!-- #productess;-->
                            </div>
                            <!-- ##product-id;; -->
                        </div>
                        <!--  -->
                    </div>
                    @include('frontend.layouts.related-products', ['flowers' => $relatedFlowers])
                </div>
            </div>

        </div>
    </div>
@stop
@section('title',$flower->name.' - '.'klpflower.com')

