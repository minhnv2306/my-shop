@extends('layouts.sites')
@section('title', 'Cart')
@section('content')
    <div id="content" class="site-content">
        <div class="container">


            <div id="primary" class="content-area">
                <main id="main" class="site-main" itemprop="mainContentOfPage">


                    <article id="post-11" class="post-11 page type-page status-publish hentry no-post-thumbnail entry"
                             itemscope="itemscope" itemtype="http://schema.org/CreativeWork">

                    </article><!-- #post-## -->
                </main><!-- #main -->
            </div><!-- #primary -->

        </div><!-- .container -->
    </div><!-- #content -->



@endsection
@section('script')
    <script>
        $.ajax({url: "/show-my-cart/" + localStorage.getItem("hash"), success: function(result){
                $('#post-11').html(result);
            }});
    </script>
@endsection