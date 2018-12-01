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
                                    Kiểm tra đơn hàng (Đang xây dựng)      </h2>
                            </div>

                            <div class="page-content">
                                <div class="woocommerce">
                                    <form action="http://wpdemo.magikthemes.com/creta/track-order/" method="post" class="track_order">

                                        <p>Để kiểm tra đơn hàng vui lòng điền email và nhấn nút "Kiểm tra".</p>

                                        <p class="form-row form-row-first">
                                            <label for="orderid">Email</label>
                                            <input class="input-text" type="email" name="email_order" value="{{\Illuminate\Support\Facades\Auth::guard('user')->check()?\Illuminate\Support\Facades\Auth::guard('user')->user()->email:''}}" placeholder="Found in your order confirmation email.">
                                        </p>
                                        <div class="clear"></div>

                                        <p class="form-row">
                                            <button type="submit" class="button" name="track" value="Track" disabled>Kiểm tra</button>
                                        </p>
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
