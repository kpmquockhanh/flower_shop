@extends('frontend.layouts.master')
@section('content')
    {{--@include('frontend.layouts.slider')--}}
    <div class="main-container col1-layout wow bounceInUp animated" style="visibility: visible;">
        <div class="main container">
            <div class="row">
                <div class="col-sm-12" id="content">
                    <div class="col-main">
                        <div class="static-contain">
                            <div class="page-title">
                                <h2 class="entry-title">
                                    Giỏ hàng
                                </h2>
                            </div>
                            <div class="page-content">
                                <div class="woocommerce">
                                    <form class="woocommerce-cart-form" action="{{route('cart.update')}}" method="post">
                                        @csrf
                                        <div class="col-main">
                                            <div class="cart wow bounceInUp animated" style="visibility: visible;">
                                                @if (!$carts->count())
                                                    <p class="cart-empty">Giỏ hàng của bạn đang không có gì.</p>
                                                    <p class="return-to-shop">
                                                        <a class="button wc-backward" href="{{route('home')}}">
                                                            Tiếp tục chọn sản phẩm</a>
                                                    </p>
                                                @else
                                                <div class="table-responsive">
                                                    <table class="shop_table shop_table_responsive1 cart woocommerce-cart-form__contents data-table cart-table" id="shopping-cart-table" cellspacing="0">
                                                        <thead>
                                                        <tr>
                                                            <th>&nbsp;</th>
                                                            <th>Sản phẩm</th>
                                                            <th>Giá</th>
                                                            <th>Số lượng</th>
                                                            <th>Tổng</th>
                                                            <th>&nbsp;</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>

                                                            @foreach ($carts as $item)
                                                                <tr class="woocommerce-cart-form__cart-item cart_item">
                                                                    <td class="image">
                                                                        <a href="#"><img width="300" height="300" src="#" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt=""></a>
                                                                    </td>
                                                                    <td>
                                                                        <h2 class="product-name">
                                                                            <a href="#">{{$item->flower->name}}</a>
                                                                        </h2>
                                                                    </td>
                                                                    <td class="a-center hidden-table">
                                                                <span class="cart-price">
                                                                    <span class="price">
                                                                        <span class="woocs_special_price_code">
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                {{number_format($item->flower->sale_price)}} đ
                                                                            </span>
                                                                        </span>
                                                                    </span>
                                                                </span>
                                                                    </td>
                                                                    <td class="product-quantity" data-title="Quantity">
                                                                        <div class="quantity">
                                                                            <div class="pull-left">
                                                                                <div class="custom pull-left">
                                                                                    <input type="number" class="input-text quantity_change" name="quantities[]" step="1" min="1" old-value="{{$item->quantity}}" value="{{$item->quantity}}">
                                                                                    <input type="text" hidden name="ids[]" value="{{$item->id}}">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="product-subtotal" data-title="Total">
                                                                        <span class="woocs_special_price_code"><span class="woocommerce-Price-amount amount">{{number_format($item->flower->sale_price*$item->quantity)}} <span class="woocommerce-Price-currencySymbol">đ</span></span></span>
                                                                    </td>
                                                                    <td class="product-remove">
                                                                        <a href="#" class="button remove-item" aria-label="Remove this item" data-product_id="{{$item->id}}" ></a>
                                                                    </td>
                                                                </tr>
                                                            @endforeach

                                                        </tbody>
                                                        <tfoot>
                                                        <tr class="first last">
                                                            <td class="a-right last" colspan="50">
                                                                <button onclick="location.href = '{{route('home')}}'" class="button btn-continue" title="Continue Shopping" type="button">
                                                                    <span>Tiếp tục mua hàng</span>
                                                                </button>
                                                                <input type="submit" class="button btn-update" value="Update cart" disabled>
                                                                <button id="empty_cart_button" class="button" title="Clear Cart" name="clear-cart" type="submit"><span>Xoá toàn bộ giỏ hàng</span></button>
                                                            </td>
                                                        </tr>
                                                        </tfoot>
                                                    </table>

                                                </div>
                                                <div class="cart-collaterals row">
                                                    {{--<div class="col-sm-6">--}}
                                                        {{--<div class="coupon discount">--}}
                                                            {{--<h3>Discount Codes</h3>--}}
                                                            {{--<div id="discount-coupon-form">--}}
                                                                {{--<label for="coupon_code"> Enter your coupon code if you have one:</label>--}}
                                                                {{--<input type="text" name="coupon_code" class="input-text fullwidth" id="coupon_code" value="" placeholder="Coupon code"> <input type="submit" class="button" name="apply_coupon" value="Apply Coupon">--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="cart_totals totals ">
                                                            <h2>Tổng giỏ hàng <strong>{{number_format($subtotal)}} đ</strong></h2>
                                                            <div class="wc-proceed-to-checkout">
                                                                <a href="{{route('cart.checkout')}}" class="button btn-proceed-checkout">
                                                                    <span>Xác nhận thanh toán</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- .entry-content -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
