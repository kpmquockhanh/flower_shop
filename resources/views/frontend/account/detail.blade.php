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
                                        @if ($errors->first())
                                            <div class="text-danger">{{$errors->first()}}</div>
                                        @endif
                                            <form class="woocommerce-EditAccountForm edit-account" action="{{route('user.detail')}}" method="post">

                                                @csrf
                                                <p class="">
                                                    <label for="account_display_name">Display name&nbsp;<span class="required">*</span></label>
                                                    <input type="text" class=" input-text" name="name" id="name" value="{{\Illuminate\Support\Facades\Auth::guard('user')->user()->name}}" style="width: 100%;">
                                                    <div>
                                                        <em>This will be how your name will be displayed in the account section and in reviews</em>
                                                    </div>
                                                </p>
                                                <div class="clear"></div>

                                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                    <label for="account_email">Email address&nbsp;<span class="required">*</span></label>
                                                    <input type="email" class="woocommerce-Input woocommerce-Input--email input-text" name="email" id="account_email" autocomplete="email" value="{{\Illuminate\Support\Facades\Auth::guard('user')->user()->email}}" style="width: 100%;">
                                                </p>

                                                <fieldset>
                                                    <legend>Password change</legend>

                                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                        <label for="password_current">Current password (leave blank to leave unchanged)</label>
                                                        <input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="old_password" autocomplete="off" style="width: 100%;">
                                                    </p>
                                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                        <label>New password (leave blank to leave unchanged)</label>
                                                        <input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="password" autocomplete="off" style="width: 100%;">
                                                    </p>
                                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                        <label for="">Confirm new password</label>
                                                        <input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="password_confirmation" id="password_2" autocomplete="off" style="width: 100%;">
                                                    </p>
                                                </fieldset>
                                                <div class="clear"></div>


                                                <p>
                                                    <input type="hidden" id="save-account-details-nonce" name="save-account-details-nonce" value="317f255adb"><input type="hidden" name="_wp_http_referer" value="/creta/my-account/edit-account/">		<button type="submit" class="woocommerce-Button button" name="save_account_details" value="Save changes">Save changes</button>
                                                    <input type="hidden" name="action" value="save_account_details">
                                                </p>

                                            </form>

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
