@extends('layouts.sites')
@section('title', 'Address')
@section('content')
    <div id="content" class="site-content">
        <div class="container">


            <div id="primary" class="content-area">
                <main id="main" class="site-main" itemprop="mainContentOfPage">



                    <article id="post-13" class="post-13 page type-page status-publish hentry no-post-thumbnail entry" itemscope="itemscope" itemtype="http://schema.org/CreativeWork">

                        <h1 class="page-title" itemprop="headline">Account Details</h1>
                        <div class="entry-content" itemprop="text">
                            <div class="woocommerce">
                                @include('sites.components.address_header')
                                @include('sites.components.error')
                                <div class="woocommerce-MyAccount-content" style="width: 75%">

                                    {!! Form::open([
                                        'method' => 'POST',
                                        'route' => 'user.save-account'
                                    ]) !!}

                                        <p class="woocommerce-FormRow woocommerce-FormRow--first form-row form-row-first">
                                            <label for="account_first_name">First name <span class="required">*</span></label>
                                            <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="first_name" id="account_first_name"
                                                   value="{{\Illuminate\Support\Facades\Auth::user()->first_name}}" />
                                        </p>
                                        <p class="woocommerce-FormRow woocommerce-FormRow--last form-row form-row-last">
                                            <label for="account_last_name">Last name <span class="required">*</span></label>
                                            <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="last_name" id="account_last_name"
                                                   value="{{\Illuminate\Support\Facades\Auth::user()->last_name}}" />
                                        </p>
                                        <div class="clear"></div>

                                        <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                            <label for="account_email">Email address <span class="required">*</span></label>
                                            <input type="email" class="woocommerce-Input woocommerce-Input--email input-text" name="email" id="account_email" value="{{\Illuminate\Support\Facades\Auth::user()->email}}" />
                                        </p>

                                        <fieldset>
                                            <legend>Password Change</legend>

                                            <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                                <label for="password_current">Current Password (leave blank to leave unchanged)</label>
                                                <input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="password_current" id="password_current" />
                                            </p>
                                            <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                                <label for="password_1">New Password (leave blank to leave unchanged)</label>
                                                <input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="new_password" id="password_1" />
                                            </p>
                                            <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                                <label for="password_2">Confirm New Password</label>
                                                <input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="new_password_confirmation" id="password_2" />
                                            </p>
                                        </fieldset>
                                        <div class="clear"></div>


                                        <p>
                                            <button class="woocommerce-Button button">Save changes</button>
                                        </p>

                                    </form>

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