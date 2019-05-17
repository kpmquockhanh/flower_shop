@extends('frontend.layouts.master')
@section('title')
    Kiểm tra đơn hàng
@stop
@section('content')
    <div class="main-container col1-layout wow bounceInUp">
        <div class="main container">
            <div class="row">
                <div class="col-sm-12" id="content">
                    <div class="col-main">

                        <div class="static-contain">
                            <div class="page-title">
                                <h2 class="entry-title">
                                    Kiểm tra đơn hàng</h2>
                            </div>

                            <div class="page-content">
                                <div class="woocommerce">
                                    <form class="woocommerce-cart-form" action="{{route('cart.update')}}" method="post">
                                        @csrf
                                        <div class="col-main">
                                            <div class="cart wow bounceInUp animated" style="visibility: visible;">
                                                @if (!$orders->count())
                                                    <p class="cart-empty">Bạn chưa có đơn hàng nào.</p>
                                                    <p class="return-to-shop">
                                                        <a class="button wc-backward" href="{{route('home')}}">
                                                            Tiếp tục chọn sản phẩm</a>
                                                    </p>
                                                @else
                                                    <div class="table-responsive">
                                                        <table class="shop_table shop_table_responsive1 cart woocommerce-cart-form__contents data-table cart-table" id="shopping-cart-table" cellspacing="0">
                                                            <thead>
                                                            <tr>
                                                                <th>Mã đơn hàng</th>
                                                                <th>Tổng tiền</th>
                                                                <th>Trạng thái</th>
                                                                <th>Sản phẩm</th>
                                                                <th>Thời gian đặt</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>

                                                            @foreach ($orders as $item)
                                                                <tr class="woocommerce-cart-form__cart-item cart_item">
                                                                    <td>
                                                                        <h2 class="product-name">
                                                                            <a href="#">{{$item->id}}</a>
                                                                        </h2>
                                                                    </td>
                                                                    <td class="a-center hidden-table">
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <strong>{{number_format($item->total_price)}}</strong> đ
                                                                        </span>
                                                                    </td>
                                                                    <td class="product-quantity" data-title="Quantity">
                                                                       <span>
                                                                           {{ $item->status }}
                                                                       </span>
                                                                    </td>
                                                                    <td>
                                                                        <ul style="padding: 0">
                                                                            @foreach ($item->flowers as $flower)
                                                                                <li>
                                                                                    <a href="{{ route('product.index', ['id' => $flower->id]) }}">{{ $flower->name }}</a>
                                                                                </li>
                                                                            @endforeach
                                                                        </ul>
                                                                    </td>
                                                                    <td class="product-subtotal" data-title="Total">
                                                                        {{ $item->created_at->diffForHumans() }}
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
                                            </div>
                                            @endif
                                        </div>
                                </div>
                                </form>
                            </div>
                            <!-- .entry-content -->
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@stop
