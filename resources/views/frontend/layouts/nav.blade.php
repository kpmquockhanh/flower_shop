<nav>
    <div class="container">
        <div class="mm-toggle-wrap">
            <div class="mm-toggle">
                <a class="mobile-toggle">
                    <i class="fa fa-reorder"></i>
                </a>
            </div>
        </div>
        <div id="main-menu-new">
            <div class="nav-inner">
                <ul id="menu-mainmenu" class="main-menu mega-menu">
                    <li id="nav-menu-item-2127" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home current-menu-ancestor current-menu-parent menu-item-has-children active has-sub narrow ">
                        <a href="/" class=" current ">
							<span>
								<i class="fa fa-home"></i>
							</span>
                        </a>
                    </li>
                    <li id="nav-menu-item-2008" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children has-sub wide col-6">
                        <a href="{{route('home')}}" class="">
                            <span>Trang chủ</span>
                        </a>
                    </li>
                    <li class="menu-item has-sub wide col-6">
                        <a href="#" class="">
                            <span>Chủ đề</span>
                        </a>
                        <div class="mgk-popup" style="display: none; left: 0px; right: auto;">
                            <div class="inner" style="">
                                <ul class="sub-menu">
                                    @foreach ( \App\Category::all()->chunk(4) as $chunk)
                                    <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children  sub" data-cols="1" style="width: 16.6667%;">
                                        <ul class="sub-menu">

                                            @foreach ($chunk as $category)
                                                <li class="menu-item menu-item-type-custom menu-item-object-custom " data-cols="1" style="width: 100%;">
                                                    <a href="{{route('shop', ['cate'=>$category->id])}}" class="">
                                                        <span>{{$category->cate_name}}</span>
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </li>
                    {{--<li id="nav-menu-item-2037" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat  narrow ">--}}
                        {{--<a href="#" class="">--}}
                            {{--<span>Demo</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    <li id="nav-menu-item-2038" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children ">
                        <a href="{{route('shop')}}" class="">
                            <span>Shop</span>
                        </a>
                    </li>
                    {{--<li id="nav-menu-item-2038" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has-sub narrow">--}}
                        {{--<a href="#" class="">--}}
                            {{--<span>Ý nghĩa hoa</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li id="nav-menu-item-2327" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children  has-sub wide  col-4">--}}
                        {{--<a href="#" class="">--}}
                            {{--<span>Shop</span>--}}
                        {{--</a>--}}
                        {{--<div class="mgk-popup">--}}
                            {{--<div class="inner" style="">--}}
                                {{--<ul class="sub-menu">--}}
                                    {{--<li id="nav-menu-item-2283" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  sub" data-cols="1">--}}
                                        {{--<a href="#" class="">--}}
                                            {{--<span>Product Layouts</span>--}}
                                        {{--</a>--}}
                                        {{--<ul class="sub-menu">--}}
                                            {{--<li id="nav-menu-item-2166" class="menu-item menu-item-type-post_type menu-item-object-product ">--}}
                                                {{--<a href="#" class="">--}}
                                                    {{--<span>Single Product</span>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                            {{--<li id="nav-menu-item-2167" class="menu-item menu-item-type-post_type menu-item-object-product ">--}}
                                                {{--<a href="#" class="">--}}
                                                    {{--<span>Variable Product</span>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                            {{--<li id="nav-menu-item-2169" class="menu-item menu-item-type-post_type menu-item-object-product ">--}}
                                                {{--<a href="#" class="">--}}
                                                    {{--<span>Grouped Product</span>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                            {{--<li id="nav-menu-item-2168" class="menu-item menu-item-type-post_type menu-item-object-product ">--}}
                                                {{--<a href="#" class="">--}}
                                                    {{--<span>External Product</span>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                            {{--<li id="nav-menu-item-2288" class="menu-item menu-item-type-post_type menu-item-object-product ">--}}
                                                {{--<a href="#" class="">--}}
                                                    {{--<span>Hot Deal Product</span>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--<li id="nav-menu-item-2284" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  sub" data-cols="1">--}}
                                        {{--<a href="#" class="">--}}
                                            {{--<span>Shop Layout</span>--}}
                                        {{--</a>--}}
                                        {{--<ul class="sub-menu">--}}
                                            {{--<li id="nav-menu-item-2285" class="menu-item menu-item-type-custom menu-item-object-custom ">--}}
                                                {{--<a href="#" class="">--}}
                                                    {{--<span>Shop Left Sidebar</span>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                            {{--<li id="nav-menu-item-2286" class="menu-item menu-item-type-custom menu-item-object-custom ">--}}
                                                {{--<a href="#" class="">--}}
                                                    {{--<span>Shop Right Sidebar</span>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                            {{--<li id="nav-menu-item-2287" class="menu-item menu-item-type-custom menu-item-object-custom ">--}}
                                                {{--<a href="#" class="">--}}
                                                    {{--<span>Shop Full Width</span>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                            {{--<li id="nav-menu-item-2280" class="menu-item menu-item-type-post_type menu-item-object-page ">--}}
                                                {{--<a href="#" class="">--}}
                                                    {{--<span>Product Category</span>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                            {{--<li id="nav-menu-item-2277" class="menu-item menu-item-type-post_type menu-item-object-page ">--}}
                                                {{--<a href="#" class="">--}}
                                                    {{--<span>Hot Deals</span>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--<li id="nav-menu-item-2289" class="women-img menu-item menu-item-type-custom menu-item-object-custom imgitem " data-cols="2" style="height:138px; margin-top:20px;background-image:url({{asset('assets/uploads/sites/26/2017/07/menu-banner2-1.png')}});;background-position:center center;;background-repeat:no-repeat;;background-size:cover;"></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                </ul>
            </div>
        </div>
    </div>
</nav>
