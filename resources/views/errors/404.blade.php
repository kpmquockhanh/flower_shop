
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>404</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,700" rel="stylesheet">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}" />

</head>

<body>

<div id="notfound">
    <div class="notfound">
        <div class="notfound-404">
            <h1>Oops!</h1>
            <h2>404 - Không tìm thấy trang bạn yêu cầu</h2>
        </div>
        @if (\Illuminate\Support\Facades\Request::segment(1) == 'admin')
            <a href="{{route('admin.dashboard')}}">Trở về Admin</a>
            @else
            <a href="{{route('home')}}">Trở về Trang chủ</a>
        @endif
    </div>
</div>

</body>

</html>
