@extends('frontend.layouts.master')
@section('content')
    <div class="main-container col1-layout wow bounceInUp animated" style="visibility: visible;">
        <div class="main container">
            <div class="row">
                <div class="col-sm-12" id="content">
                    <div class="col-main">
                        <div class="static-contain">
                            <div class="page-title">
                                <h2 class="entry-title">
                                    Thanh toán
                                </h2>
                            </div>
                            <div class="page-content">
                                <div class="woocommerce">
                                    <form name="checkout" method="post" class="checkout woocommerce-checkout"
                                          action="{{route('cart.checkout.add')}}"
                                          enctype="multipart/form-data">
                                        @csrf
                                        <div class="col2-set" id="customer_details">
                                            <div class="col-1">
                                                <div class="woocommerce-billing-fields">
                                                    @if ($errors->first())
                                                        <div class="text-danger">
                                                            <strong>{{ $errors->first() }}</strong>
                                                        </div>
                                                    @endif
                                                    <div class="step-title">
                                                        <h3 class="one_page_heading">Chi tiết hóa đơn</h3>
                                                    </div>

                                                    <fieldset class="group-select">
                                                        <div class="woocommerce-billing-fields__field-wrapper">
                                                            @if ($errors->first() && !old('name'))
                                                                <div class="text-danger">
                                                                    <strong>{{ $errors->first() }}</strong>
                                                                </div>
                                                            @endif

                                                            <p class="form-row form-row-wide">
                                                                <label for="billing_first_name" class="">Tên&nbsp;<abbr
                                                                            class="required"
                                                                            title="required">*</abbr></label>
                                                                <span class="woocommerce-input-wrapper">
                                                                    <input type="text" class="input-text "
                                                                           name="name"
                                                                           placeholder=""
                                                                           value="{{\Illuminate\Support\Facades\Auth::guard('user')->user()->name}}">
                                                                </span>
                                                            </p>

                                                            <p class="form-row form-row-wide address-field "
                                                               id="billing_country_field" data-priority="40"></p>
                                                            <p class="form-row form-row-wide address-field validate-required"
                                                               id="billing_address_1_field" data-priority="50">
                                                                <label for="billing_address_1"
                                                                       class="">Địa chỉ&nbsp;<abbr class="required"
                                                                                                   title="required">*</abbr></label>
                                                                <span class="woocommerce-input-wrapper">
                                                                    <input type="text" class="input-text "
                                                                           name="address"
                                                                           id="billing_address_1"
                                                                           placeholder="Your address"
                                                                           value="{{\Illuminate\Support\Facades\Auth::guard('user')->user()->address}}" autocomplete="address-line1">
                                                                </span>
                                                            </p>
                                                            <p class="form-row form-row-wide validate-required validate-phone"
                                                               id="billing_phone_field" data-priority="100">
                                                                <label for="billing_phone" class="">Số điện thoại&nbsp;<abbr
                                                                            class="required"
                                                                            title="required">*</abbr></label>
                                                                <span class="woocommerce-input-wrapper">
                                                                    <input type="tel" class="input-text "
                                                                           name="phone" id="billing_phone"
                                                                           placeholder="" value="" autocomplete="tel">
                                                                </span>
                                                            </p>
                                                            <p class="form-row form-row-wide validate-required validate-email"
                                                               id="billing_email_field" data-priority="110">
                                                                <label for="billing_email" class="">Email&nbsp;</label>
                                                                <span class="woocommerce-input-wrapper">
                                                                    <input type="email" class="input-text "
                                                                           name="billing_email" id="billing_email"
                                                                           placeholder="" value="{{\Illuminate\Support\Facades\Auth::guard('user')->user()->email}}"
                                                                           autocomplete="email username">
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="woocommerce-additional-fields">
                                                    <div class="woocommerce-additional-fields__field-wrapper">
                                                        <p class="form-row notes" id="order_comments_field"
                                                           data-priority="">
                                                            <label for="order_comments" class="">Ghi chú&nbsp;
                                                                <span
                                                                        class="optional">(tùy chọn)</span>
                                                            </label>
                                                            <span class="woocommerce-input-wrapper">
                                                                <textarea
                                                                        name="note" class="input-text "
                                                                        placeholder="Ghi chú gửi tới người vận chuyển hàng"
                                                                        rows="2" cols="5"></textarea>
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 id="order_review_heading">Đơn hàng của bạn</h3>
                                        <div id="order_review" class="woocommerce-checkout-review-order">
                                            <table class="shop_table woocommerce-checkout-review-order-table">
                                                <thead>
                                                <tr>
                                                    <th class="product-name">Sản phẩm</th>
                                                    <th class="product-total">Tổng</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @if (!$carts->count())
                                                    <tr>
                                                        <td colspan="2">
                                                            <div>không có gì.</div>
                                                        </td>
                                                    </tr>
                                                @endif
                                                @foreach($carts as $item)
                                                    <tr class="cart_item">
                                                        <td class="product-name">
                                                            {{$item->flower->name}} <strong
                                                                    class="product-quantity">× {{$item->quantity}}</strong>
                                                        </td>
                                                        <td class="product-total">
                                                            <span class="woocs_special_price_code">
                                                                <span class="woocommerce-Price-amount amount">{{number_format($item->flower->sale_price*$item->quantity)}}
                                                                    đ</span></span>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                                <tfoot>
                                                <tr class="cart-subtotal">
                                                    <th>Tổng giá</th>
                                                    <td><span class="woocs_special_price_code"><span
                                                                    class="woocommerce-Price-amount amount">{{number_format($subtotal)}}
                                                                <span class="woocommerce-Price-currencySymbol">đ</span></span></span>
                                                    </td>
                                                </tr>
                                                <tr class="shipping">
                                                    <th>Đơn vị vận chuyển</th>
                                                    <td data-title="Shipping">
                                                        @if ($shippers->count())
                                                            <ul id="shipping_method">
                                                                @foreach($shippers as $shipper)
                                                                    <li>
                                                                        <input type="radio" name="shipping_method" id="shipping_method_0_legacy_flat_rate" class="shipping_method"
                                                                               checked="checked" value="{{ $shipper->id }}">
                                                                        <label for="shipping_method_0_legacy_flat_rate">{{$shipper->shipper_name}}
                                                                            {{--<span class="woocommerce-Price-amount amount">1000</span>--}}
                                                                        </label>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                            @else
                                                            <label for="shipping_method_0_legacy_flat_rate">
                                                                Không có đơn vị vận chuyển khả dụng.
                                                            </label>
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Giá ship</th>
                                                    <td>
                                                        @if ($subtotal >= 1000000)
                                                            0 đ
                                                        @else
                                                            {{ number_format(30000) }} đ
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr class="order-total">
                                                    <th>Tổng tiền</th>
                                                    <td>
                                                        <strong>
                                                            <span class="woocs_special_price_code">
                                                                <span class="woocommerce-Price-amount amount">
                                                                    {{number_format($subtotal + ($subtotal >= 1000000 ? 0 : 30000))}}
                                                                    <span class="woocommerce-Price-currencySymbol">đ</span>
                                                                </span>
                                                            </span>
                                                        </strong>
                                                    </td>
                                                </tr>
                                                </tfoot>
                                            </table>
                                            <div id="payment" class="woocommerce-checkout-payment">
                                                @if (count($payments))
                                                    <ul class="wc_payment_methods payment_methods methods">
                                                        @foreach ($payments as $key => $payment)
                                                            <li class="wc_payment_method payment_method_bacs">
                                                                <input id="payment_method_bacs" type="radio" class="input-radio"
                                                                       name="payment_method" value="{{ $payment->id }}"
                                                                       {{ $key === 0 ? 'checked':'' }}
                                                                       data-order_button_text="">
                                                                <label for="payment_method_bacs">{{ $payment->payment_type }}</label>
                                                                {{--<div class="payment_box payment_method_bacs"--}}
                                                                     {{--style="display: block;">--}}
                                                                    {{--<p>Thanh toán khi nhận hàng.</p>--}}
                                                                {{--</div>--}}
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @else

                                                @endif
                                                <div class="form-row place-order">
                                                    <button type="submit" class="button alt" id="place_order" data-value="Place order">
                                                        Đặt hàng
                                                    </button>
                                                </div>
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
