@extends('frontend.layouts.master')
@section('content')
    <div class="main-container col1-layout wow bounceInUp">
        <div class="main container">
            <div class="row">
                <div class="col-sm-12" id="content">
                    <div class="col-main">

                        <div class="static-contain">
                            <div class="page-title">
                                <h2 class="entry-title">
                                    Track Order      </h2>
                            </div>

                            <div class="page-content">
                                <div class="woocommerce">
                                    <form action="http://wpdemo.magikthemes.com/creta/track-order/" method="post" class="track_order">

                                        <p>To track your order please enter your Order ID in the box below and press the "Track" button. This was given to you on your receipt and in the confirmation email you should have received.</p>

                                        <p class="form-row form-row-first"><label for="orderid">Order ID</label> <input class="input-text" type="text" name="orderid" id="orderid" value="" placeholder="Found in your order confirmation email."></p>	<p class="form-row form-row-last"><label for="order_email">Billing email</label> <input class="input-text" type="text" name="order_email" id="order_email" value="" placeholder="Email you used during checkout."></p>	<div class="clear"></div>

                                        <p class="form-row"><button type="submit" class="button" name="track" value="Track">Track</button></p>
                                        <input type="hidden" id="woocommerce-order-tracking-nonce" name="woocommerce-order-tracking-nonce" value="d15f6af2ce"><input type="hidden" name="_wp_http_referer" value="/creta/track-order/">
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
