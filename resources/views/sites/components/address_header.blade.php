@include('sites.components.success')
<nav class="woocommerce-MyAccount-navigation">
    <ul>
        <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--dashboard">
            <a href="{{route('sites.my-account')}}">Dashboard</a>
        </li>
        <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--orders">
            <a href="https://goatstee.com/my-account/orders/">Orders</a>
        </li>
        <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--downloads">
            <a href="https://goatstee.com/my-account/downloads/">Downloads</a>
        </li>
        <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-address is-active">
            <a href="{{route('user.address')}}">Addresses</a>
        </li>
        <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--payment-methods">
            <a href="https://goatstee.com/my-account/payment-methods/">Payment Methods</a>
        </li>
        <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-account">
            <a href="https://goatstee.com/my-account/edit-account/">Account Details</a>
        </li>
        <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--customer-logout">
            <a href="https://goatstee.com/my-account/customer-logout/">Logout</a>
        </li>
    </ul>
</nav>