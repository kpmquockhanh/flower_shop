<div class="breadcrumb-area gray-bg">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="index.html">Home</a></li>
                @foreach(\Request::segments() as $index => $segment)
                    <li class="active capitalize">{{$segment}}</li>
                @endforeach

            </ul>
        </div>
    </div>
</div>