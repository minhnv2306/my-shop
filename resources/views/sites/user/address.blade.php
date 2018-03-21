@extends('layouts.sites')
@section('title', 'Address')
@section('content')
    <div id="content" class="site-content">
        <div class="container">


            <div id="primary" class="content-area">
                <main id="main" class="site-main" itemprop="mainContentOfPage">



                    <article id="post-13" class="post-13 page type-page status-publish hentry no-post-thumbnail entry" itemscope="itemscope" itemtype="http://schema.org/CreativeWork">

                        <h1 class="page-title" itemprop="headline">Addresses</h1>
                        <div class="entry-content" itemprop="text">
                            <div class="woocommerce">
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


                                <div class="woocommerce-MyAccount-content">


                                    <p>
                                        The following addresses will be used on the checkout page by default.</p>

                                    <div class="u-columns woocommerce-Addresses col2-set addresses">

                                        <div class="u-column1 col-1 woocommerce-Address">
                                            <header class="woocommerce-Address-title title">
                                                <h3>Billing Address</h3>
                                                <a href="{{route('user.show-billing-address')}}" class="edit">Edit</a>
                                            </header>
                                            <address>
                                                You have not set up this type of address yet.		</address>
                                        </div>


                                        <div class="u-column2 col-2 woocommerce-Address">
                                            <header class="woocommerce-Address-title title">
                                                <h3>Shipping Address</h3>
                                                <a href="https://goatstee.com/my-account/edit-address/shipping" class="edit">Edit</a>
                                            </header>
                                            <address>
                                                You have not set up this type of address yet.		</address>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div><!-- .entry-content -->
                    </article><!-- #post-## -->
                </main><!-- #main -->
            </div><!-- #primary -->

        </div><!-- .container -->
    </div><!-- #content -->


@endsection
@section('script')
@endsection