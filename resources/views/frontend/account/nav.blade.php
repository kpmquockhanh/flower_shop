<ul>
    {{--<li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--dashboard is-active">--}}
    {{--<a href="#">Dashboard</a>--}}
    {{--</li>--}}
    {{--<li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--orders">--}}
    {{--<a href="#">Orders</a>--}}
    {{--</li>--}}
    {{--<li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--downloads">--}}
    {{--<a href="#">Downloads</a>--}}
    {{--</li>--}}
    <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-address">
        <a href="{{route('user.addresses')}}">Addresses</a>
    </li>
    <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-account">
        <a href="{{route('user.detail')}}">Account details</a>
    </li>
    <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--customer-logout">
        <a href="{{route('logout')}}">Logout</a>
    </li>
</ul>