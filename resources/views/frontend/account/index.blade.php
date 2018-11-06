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

                                        <p>Hello <strong>{{\Illuminate\Support\Facades\Auth::guard('user')->user()->name}}</strong>
                                            (not <strong>{{\Illuminate\Support\Facades\Auth::guard('user')->user()->name}}</strong>?
                                            <a href="{{route('logout')}}">Log out</a>)</p>

                                        <p>From your account dashboard you can view your <a href="#">recent orders</a>, manage your <a href="#">shipping and billing addresses</a>, and <a href="#">edit your password and account details</a>.</p>

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
