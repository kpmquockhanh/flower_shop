@extends('layouts.master')
@section('breadcumb')
    @include('layouts.breadcumb')
@stop
@section('content')
    <div class="login-register-area pt-70 pb-75">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                    <div class="login-register-wrapper">
                        <div class="login-register-tab-list nav">
                            <a class="active" data-toggle="tab" href="#lg1">
                                <h4> login </h4>
                            </a>
                            {{--<a data-toggle="tab" href="#lg2">--}}
                                {{--<h4> register </h4>--}}
                            {{--</a>--}}
                        </div>
                        <div class="tab-content">
                            <div id="lg1" class="tab-pane active">
                                <div class="login-form-container" style="background: #f8f9f9 !important;">
                                    <div class="login-register-form">
                                        <form action="{{route('login')}}" method="post">
                                            @csrf()
                                            @if ($errors->has('email'))
                                                <div class="text-danger">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </div>
                                            @endif
                                            <input type="text" name="email" placeholder="Email" value="{{old('email')}}">
                                            @if ($errors->has('password'))
                                                <div class="text-danger">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </div>
                                            @endif
                                            <input type="password" name="password" placeholder="Password" value="{{old('password')}}">

                                            <div class="button-box">
                                                <div class="login-toggle-btn">
                                                    <input type="checkbox" name="remember" id="remember">
                                                    <label for="remember">Remember me</label>
                                                    <a href="#">Forgot Password?</a>
                                                </div>
                                                <button type="submit"><span>Login</span></button>
                                                <span class="login-toggle-btn">
                                                    <a href="{{route('register')}}" class="btn-switch float-right"><span>Register</span></a>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop