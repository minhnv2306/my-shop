@extends('layouts.sites')
@section('title', 'Cart')
@section('content')
    <div id="content" class="site-content">
        <div class="container">


            <div id="primary" class="content-area">
                <main id="main" class="site-main" itemprop="mainContentOfPage">


                    <article id="post-11" class="post-11 page type-page status-publish hentry no-post-thumbnail entry"
                             itemscope="itemscope" itemtype="http://schema.org/CreativeWork">
                        <h1 class="page-title" itemprop="headline">Cart</h1>
                        @if(!empty(session('messages')))
                            <div class="entry-content" itemprop="text">
                                <div class="woocommerce">
                                    <div class="woocommerce-message"><a href="{{route('home')}}" class="button wc-forward">Continue Shopping</a> {{session('messages')}}</div>
                                </div>
                            </div>
                        @endif

                        <div class="entry-content" itemprop="text" id="my-cart-content">
                        </div>
                    </article><!-- #post-## -->
                </main><!-- #main -->
            </div><!-- #primary -->

        </div><!-- .container -->
    </div><!-- #content -->



@endsection
@section('script')
    <script>
        $.ajax({url: "/show-my-cart/" + localStorage.getItem("hash"), success: function(result){
                $('#my-cart-content').html(result);
            }});
    </script>
@endsection