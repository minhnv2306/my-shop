@extends('layouts.sites')
@section('title', 'My account')
@section('content')
    @if(\Illuminate\Support\Facades\Auth::check())
        <div id="content" class="site-content">
            <div class="container">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main" itemprop="mainContentOfPage">
                        <article id="post-13" class="post-13 page type-page status-publish hentry no-post-thumbnail entry" itemscope="itemscope" itemtype="http://schema.org/CreativeWork">
                            <h1 class="page-title" itemprop="headline">My Account</h1>
                            <div class="entry-content" itemprop="text">
                                <div class="woocommerce">
                                    <nav class="woocommerce-MyAccount-navigation">
                                        <ul>
                                            <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--dashboard is-active">
                                                <a href="https://goatstee.com/my-account/">Dashboard</a>
                                            </li>
                                            <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--orders">
                                                <a href="https://goatstee.com/my-account/orders/">Orders</a>
                                            </li>
                                            <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--downloads">
                                                <a href="https://goatstee.com/my-account/downloads/">Downloads</a>
                                            </li>
                                            <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-address">
                                                <a href="https://goatstee.com/my-account/edit-address/">Addresses</a>
                                            </li>
                                            <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--payment-methods">
                                                <a href="https://goatstee.com/my-account/payment-methods/">Payment Methods</a>
                                            </li>
                                            <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-account">
                                                <a href="https://goatstee.com/my-account/edit-account/">Account Details</a>
                                            </li>
                                            <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--customer-logout">
                                                <a href="/logout">Logout</a>
                                            </li>
                                        </ul>
                                    </nav>


                                    <div class="woocommerce-MyAccount-content">
                                        <p>
                                            Hello <strong>minh1101</strong> (not minh1101? <a href="https://goatstee.com/my-account/customer-logout/">Sign out</a>)</p>
                                        <p>
                                            From your account dashboard you can view your <a href="https://goatstee.com/my-account/orders/">recent orders</a>, manage your <a href="https://goatstee.com/my-account/edit-address/">shipping and billing addresses</a> and <a href="https://goatstee.com/my-account/edit-account/">edit your password and account details</a>.</p>
                                    </div>
                                </div>
                            </div><!-- .entry-content -->


                        </article><!-- #post-## -->



                    </main><!-- #main -->
                </div><!-- #primary -->

            </div><!-- .container -->
        </div><!-- #content -->
    @else
        <div id="content" class="site-content">
            <div class="container">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main" itemprop="mainContentOfPage">
                        <article id="post-13" class="post-13 page type-page status-publish hentry no-post-thumbnail entry" itemscope="itemscope" itemtype="http://schema.org/CreativeWork">

                            <h1 class="page-title" itemprop="headline">My Account</h1>
                            <div class="entry-content" itemprop="text">
                                <div class="woocommerce">

                                    @include('sites.components.error')

                                    <div class="u-columns col2-set" id="customer_login">
                                        <div class="u-column1 col-1">
                                            <h2>Login</h2>
                                            {!! Form::open([
                                                'url' => '/login',
                                                'method' => 'POST',
                                            ]) !!}
                                                <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                                    <label for="username">Username or email address <span class="required">*</span></label>
                                                    <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="username" value="" />
                                                </p>
                                                <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                                    <label for="password">Password <span class="required">*</span></label>
                                                    <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" />
                                                </p>
                                                <p class="form-row">
                                                    <button class="woocommerce-Button button" name="login">Login</button>
                                                    <label for="rememberme" class="inline">
                                                        <input class="woocommerce-Input woocommerce-Input--checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> Remember me	</label>
                                                </p>
                                                <p class="woocommerce-LostPassword lost_password">
                                                    <a href="https://goatstee.com/my-account/lost-password/">Lost your password?</a>
                                                </p>
                                            </form>
                                        </div>
                                        <div class="u-column2 col-2">
                                            <h2>Register</h2>
                                            {!! Form::open([
                                                'url' => '/register',
                                                'method' => 'POST'
                                            ]) !!}
                                                <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                                    <label for="reg_email">Email address <span class="required">*</span></label>
                                                    <input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" value="" />
                                                </p>
                                                <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                                    <label for="reg_password">Password <span class="required">*</span></label>
                                                    <input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="reg_password" />
                                                </p>
                                                <!-- Spam Trap -->
                                                <p class="woocomerce-FormRow form-row">
                                                    <button class="woocommerce-Button button">Register</button>
                                                </p>
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .entry-content -->
                        </article><!-- #post-## -->
                    </main><!-- #main -->
                </div><!-- #primary -->

            </div><!-- .container -->
        </div><!-- #content -->
    @endif
@endsection
@section('script')
@endsection