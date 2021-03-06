<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12" id="cart-refresh">
    <div class="top-cart-contain pull-right ajax-cart">
        <div class="mini-cart">
            <div data-hover="dropdown" class="basket dropdown-toggle">
                <a href="{{route('cart.index')}}">
                    <span class="cart_count">{{$carts->count()}} </span>
                    <span class="price">Giỏ hàng /
            <span class="woocs_special_price_code">
                <span class="woocommerce-Price-amount amount">
                    <span class="woocommerce-Price-currencySymbol"></span>{{number_format($carts->sum(function ($cart){return $cart->flower?$cart->flower->sale_price*$cart->quantity:0;}), 0,',','.')}} đ</span></span></span> </a>
            </div>
            <div class="top-cart-content" style="display: none;">
                @if (!$carts->count())
                    <p class="a-center noitem">
                        Xin lỗi, không có gì trong giỏ hàng.
                    </p>
                @else
                    <ul class="mini-products-list" id="cart-sidebar">
                        @foreach ($carts as $item)
                            <li class="itemlast">
                                <div class="item-inner">
                                    <a class="product-image" href="{{route('product.index', ['id' => $item->flower->id])}}" title="{{$item->flower->name}}">
                                        <img width="300" height="300" src="{{asset('images/'.$item->flower->image)}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="">
                                    </a>
                                    <div class="product-details">
                                        <div class="access">
                                            {{--<a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a>--}}
                                            <a href="#" title="Xóa khỏi giỏ hàng" data-id="{{$item->id}}" class="btn-remove1">Xóa</a>
                                        </div>
                                        <strong>{{$item->quantity}}</strong> x <span class="price"><span class="woocs_special_price_code"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span>{{number_format($item->flower->sale_price,0,',','.')}} đ</span></span></span>
                                        <p class="product-name"><a href="{{route('product.index', ['id' => $item->flower->id])}}" title="Bunch of Assorted Gerberas in a Glass Vase">{{$item->flower->name}}</a> </p>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
            @endif
            <!--actions-->
                <div class="actions">
                    <button class="btn-checkout" title="Checkout" type="button" onclick="window.location.assign('{{route('cart.checkout')}}')">
                        <span>Thanh toán</span> </button>
                    <a class="view-cart" type="button" onclick="window.location.assign('{{route('cart.index')}}')">
                        <span>Xem giỏ hàng</span> </a>
                </div>
            </div>
        </div>
    </div>
</div>