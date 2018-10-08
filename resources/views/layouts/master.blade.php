<!DOCTYPE html>
<html>
    <head>
        @include('layouts.header')
    </head>
    <body>
        @include('layouts.navbar')
        @yield('breadcumb')
        @yield('slider')
        @yield('content')
        @include('layouts.footer')

        <!-- all js here -->
        <script src="{{asset('assets/js/vendor/jquery-1.12.0.min.js')}}"></script>
        <script src="{{asset('assets/js/popper.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('assets/js/ajax-mail.js')}}"></script>
        <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins.js')}}"></script>
        <script src="{{asset('assets/js/main.js')}}"></script>
        <script src="{{asset('backend/js/plugins/axios.min.js')}}"></script>
        <script src="{{asset('backend/js/plugins/iziToast.min.js')}}"></script>
    </body>
</html>
