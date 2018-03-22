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
                                @include('sites.components.address_header')

                                <div class="woocommerce-MyAccount-content">


                                    <p>
                                        The following addresses will be used on the checkout page by default.</p>

                                    <div class="u-columns woocommerce-Addresses col2-set addresses">

                                        <div class="u-column1 col-1 woocommerce-Address">
                                            <header class="woocommerce-Address-title title">
                                                <h3>Billing Address</h3>
                                                @if(empty(\Illuminate\Support\Facades\Auth::user()->billing_first_name))
                                                    <a href="{{route('user.show-billing-address')}}" class="edit">Edit</a>
                                                @else
                                                    <a href="{{route('user.edit-billing-address')}}" class="edit">Edit</a>
                                                @endif
                                            </header>
                                            @if(empty(\Illuminate\Support\Facades\Auth::user()->billing_first_name))
                                            <address>
                                                You have not set up this type of address yet.		</address>
                                            @else
                                            <address>
                                                {{\Illuminate\Support\Facades\Auth::user()->billing_first_name . ' ' .
                                                 \Illuminate\Support\Facades\Auth::user()->billing_last_name}}
                                                <br/>
                                                {{ \Illuminate\Support\Facades\Auth::user()->billing_company }}
                                                <br/>
                                                {{ \Illuminate\Support\Facades\Auth::user()->billing_address_1 }}
                                                @if(!empty(\Illuminate\Support\Facades\Auth::user()->billing_city))
                                                <br/>
                                                {{ \Illuminate\Support\Facades\Auth::user()->billing_city }}
                                                @endif
                                                <br/>
                                                {{ \Illuminate\Support\Facades\Auth::user()->billing_country }}
                                                <br/>
                                            </address>
                                            @endif
                                        </div>


                                        <div class="u-column2 col-2 woocommerce-Address">
                                            <header class="woocommerce-Address-title title">
                                                <h3>Shipping Address</h3>
                                                @if(empty(\Illuminate\Support\Facades\Auth::user()->shipping_first_name))
                                                    <a href="{{route('user.show-shipping-address')}}" class="edit">Edit</a>
                                                @else
                                                    <a href="{{route('user.edit-shipping-address')}}" class="edit">Edit</a>
                                                @endif
                                            </header>
                                            @if(empty(\Illuminate\Support\Facades\Auth::user()->shipping_first_name))
                                                <address>
                                                    You have not set up this type of address yet.		</address>
                                            @else
                                                <address>
                                                    {{\Illuminate\Support\Facades\Auth::user()->shipping_first_name . ' ' .
                                                     \Illuminate\Support\Facades\Auth::user()->shipping_last_name}}
                                                    <br/>
                                                    {{ \Illuminate\Support\Facades\Auth::user()->shipping_company }}
                                                    <br/>
                                                    {{ \Illuminate\Support\Facades\Auth::user()->shipping_address_1 }}
                                                    @if(!empty(\Illuminate\Support\Facades\Auth::user()->shipping_city))
                                                        <br/>
                                                        {{ \Illuminate\Support\Facades\Auth::user()->shipping_city }}
                                                    @endif
                                                    <br/>
                                                    {{ \Illuminate\Support\Facades\Auth::user()->shipping_country }}
                                                    <br/>
                                                </address>
                                            @endif
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