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
                                    My Account      </h2>
                            </div>

                            <div class="page-content">
                                <div class="row">

                                    <div class="col-sm-8">
                                        <p>
                                            The following addresses will be used on the checkout page by default.</p>

                                        <div class="u-columns woocommerce-Addresses col2-set addresses">

                                            <header class="woocommerce-Address-title title">

                                                <h3>Address <small><a href="#" class="edit">Edit</a></small></h3>
                                            </header>
                                            <div class="woocommerce-MyAccount-content">

                                                @if ($errors->first())
                                                    <div class="text-danger">{{$errors->first()}}</div>
                                                @endif
                                                <form method="post" action="{{route('user.addresses')}}">
                                                    @csrf
                                                    <div class="woocommerce-address-fields">

                                                        <div class="woocommerce-address-fields__field-wrapper">
                                                            <p class="form-row form-row-first validate-required" id="shipping_first_name_field" data-priority="10">
                                                                <div class="woocommerce-input-wrapper">
                                                                    <input type="text" class="input-text" name="address" placeholder="" value="" style="width: 100%;" required>
                                                                </div>
                                                            </p>

                                                        </div>


                                                        <p>
                                                            <button type="submit" class="button" name="save_address" value="Save address">Save address</button>
                                                            <input type="hidden" id="woocommerce-edit-address-nonce" name="woocommerce-edit-address-nonce" value="c9299a70ac"><input type="hidden" name="_wp_http_referer" value="/creta/my-account/edit-address/shipping/">				<input type="hidden" name="action" value="edit_address">
                                                        </p>
                                                    </div>

                                                </form>


                                            </div>
                                            @if (!\Illuminate\Support\Facades\Auth::guard('user')->user()->address)
                                                <address>You have not set up this type of address yet.</address>
                                                @else
                                                <address>{{\Illuminate\Support\Facades\Auth::guard('user')->user()->address}}.</address>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        @include('frontend.account.nav')
                                    </div>
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
