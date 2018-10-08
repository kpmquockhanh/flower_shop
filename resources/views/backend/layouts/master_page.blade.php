<!doctype html>
<html lang="en">
<head>
    @include('backend.layouts.header')
</head>
<body class="@yield('class-body')">
    @include('backend.layouts.navbar_page')
    @yield('content')
    @include('backend.layouts.footer')
    @yield('script')
</body>
</html>