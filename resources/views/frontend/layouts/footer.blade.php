<footer>
    <!-- BEGIN INFORMATIVE FOOTER -->
    <div class="footer-inner">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12 col-lg-8">
                    <div class="footer-column pull-left" style="width: 45%;">
                        <aside id="text-2" class="widget widget_text"><h4>Thông tin nhóm</h4>
                            <div class="textwidget">
                                <ul class="links">
                                    <li><a href="https://www.facebook.com/kpmquockhanh">Lưu Quốc Khánh</a></li>
                                    <li><a href="https://www.facebook.com/tuyen.kien1237">Vũ Thị Kim Tuyến</a></li>
                                </ul>
                            </div>
                            <h4>Liên hệ</h4>
                            <div class="textwidget">
                                <ul class="links">
                                    <li>
                                        <a style="">
                                            Đại học Công nghiệp Hà Nội
                                        </a>
                                    </li>
                                    <li>
                                        <a style="">
                                            +84989594241
                                        </a>
                                    </li>
                                    <li>
                                        <a style="">
                                            nhom5ptpm@gmail.com
                                        </a>
                                    </li>

                                    <li>
                                        <a style="">
                                            Nhóm 5 KTPM1 K10 HaUI
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </aside>                                            </div>
                    <div class="footer-column pull-left" style="width: 45%;">
                        <aside id="text-5" class="widget widget_text">

                            <div class="mapouter">
                                <div class="gmap_canvas">
                                    <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=university%20of%20san%20francisco&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                    <a href="https://www.pureblack.de"></a>
                                </div>
                                <style>
                                    .mapouter{position:relative;text-align:right;}
                                    .gmap_canvas {overflow:hidden;background:none!important;}
                                </style>
                            </div>
                        </aside>
                    </div>
                </div>

                <div class="col-xs-12 col-lg-4">
                    <div class="footer-column-last">

                        <div class="newsletter-wrap">
                            <form class="mc4wp-form mc4wp-form-1276 mc4wp-form-basic" method="post" action="{{route('subscribe')}}">
                                <div class="mc4wp-form-fields"><p>
                                        @csrf
                                        <label>ĐĂNG KÍ NHẬN EMAIL: </label>
                                        <input type="email"  name="email" placeholder="Địa chỉ email của bạn" required />
                                    </p>

                                    <p>
                                        <input type="submit" value="Đăng kí" />
                                    </p>
                                </div>
                            </form>
                        </div>
                        {{--<div class="social">--}}
                            {{--<h4>Follow Us</h4>--}}
                            {{--<ul>--}}
                                {{--<li class="fb pull-left"><a target="_blank" href='#'></a></li>--}}
                                {{--<li class="tw pull-left"><a target="_blank" href='#'></a></li>--}}
                                {{--<li class="googleplus pull-left"><a target="_blank" href='#'></a></li>--}}
                                {{--<li class="rss pull-left"><a target="_blank" href='#'></a></li>--}}
                                {{--<li class="pintrest pull-left"><a target="_blank" href='#'></a></li>--}}
                                {{--<li class="linkedin pull-left"><a target="_blank" href='#'></a></li>--}}
                                {{--<li class="youtube pull-left"><a target="_blank" href='#'></a></li> </ul>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
            <!--row-->

        </div>
        <!--container-->

    </div>
    <!--footer-middle-->
    <div class="footer-middle">
        <div class="container">
            <div class="row">

                <div style="text-align: center;"><a href="/"><img src="{{asset('img/logo-footer.png')}}" alt="logo" /> </a></div>
                <address>
                    <a>Copyright ©2018, klpflower.com, All rights reserved.</a>
                </address>
            </div>
        </div>
    </div>



</footer>
