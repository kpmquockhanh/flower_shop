<div class="sidebar" data-color="brown" data-active-color="danger">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
  -->
    <div class="logo">
        <a href="" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="{{asset('backend/img/logo-small.png')}}">
            </div>
        </a>
        <a href="/" class="simple-text logo-normal">
            Creative Tim
            <!-- <div class="logo-image-big">
              <img src="../assets/img/logo-big.png">
            </div> -->
        </a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="{{asset('backend/img/faces/ayo-ogunseinde-2.jpg')}}" />
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
              <span>
                  <strong>{{\Illuminate\Support\Facades\Auth::guard('admin')->user()->name_type}}</strong>
                {{\Illuminate\Support\Facades\Auth::guard('admin')->user()->name}}
                <b class="caret"></b>
              </span>
                </a>
                <div class="clearfix"></div>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li>
                            <a href="#">
                                <span class="sidebar-mini-icon">MP</span>
                                <span class="sidebar-normal">My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="sidebar-mini-icon">EP</span>
                                <span class="sidebar-normal">Edit Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="sidebar-mini-icon">S</span>
                                <span class="sidebar-normal">Settings</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.logout')}}">
                                <span class="sidebar-mini-icon">L</span>
                                <span class="sidebar-normal">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li class="active">
                <a href="/">
                    <i class="nc-icon nc-bank"></i>
                    <p>Tổng quan</p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#flower">
                    <i class="nc-icon nc-diamond"></i>
                    <p>
                        Sản phẩm
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse " id="flower">
                    <ul class="nav">
                        <li>
                            <a href="{{route('admin.flowers.list')}}">
                                <span class="sidebar-mini-icon">H</span>
                                <span class="sidebar-normal"> Danh sách hoa </span>
                            </a>
                        </li>
                        {{--<li>--}}
                            {{--<a href="">--}}
                                {{--<span class="sidebar-mini-icon">X</span>--}}
                                {{--<span class="sidebar-normal"> Danh sách hoa đã xóa </span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                    </ul>
                </div>
            </li>
            </li>
            <li>
                <a data-toggle="collapse" href="#account">
                    <i class="nc-icon nc-shop"></i>
                    <p>
                        Tài khoản
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse " id="account">
                    <ul class="nav">
                        <li>
                            <a href="{{route('admin.salers.list')}}">
                                <span class="sidebar-mini-icon">T</span>
                                <span class="sidebar-normal"> Danh sách tài khoản </span>

                            </a>
                        </li>

                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#bill">
                    <i class="nc-icon nc-paper"></i>
                    <p>
                        Hóa đơn
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse " id="bill">
                    <ul class="nav">
                        <li>
                            <a href="{{route('admin.orders.list')}}">
                                <span class="sidebar-mini-icon">H</span>
                                <span class="sidebar-normal"> Danh sách hóa đơn </span>

                            </a>
                        </li>

                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#delivery">
                    <i class="nc-icon nc-delivery-fast"></i>
                    <p>
                        Vận chuyển
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse " id="delivery">
                    <ul class="nav">
                        <li>
                            <a href="{{route('admin.shippers.list')}}">
                                <span class="sidebar-mini-icon">V</span>
                                <span class="sidebar-normal"> Danh sách vận chuyển </span>

                            </a>
                        </li>

                    </ul>
                </div>
            </li>
            <li>
                <a href="https://demos.creative-tim.com/paper-dashboard-2-pro/examples/charts.html">
                    <i class="nc-icon nc-chart-bar-32"></i>
                    <p>Demo</p>
                </a>
            </li>
        </ul>
    </div>
</div>