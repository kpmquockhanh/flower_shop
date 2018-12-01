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
                                    Tài khoản của tôi      </h2>
                            </div>

                            <div class="page-content">
                                <div class="row">

                                    <div class="col-sm-8">

                                        <p>Xin chào <strong>{{\Illuminate\Support\Facades\Auth::guard('user')->user()->name}}</strong>
                                            (không phải <strong>{{\Illuminate\Support\Facades\Auth::guard('user')->user()->name}}</strong>?
                                            <a href="{{route('logout')}}">Log out</a>)</p>

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
