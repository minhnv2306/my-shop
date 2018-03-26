<nav id="top-navigation" class="top-navigation" itemscope="itemscope"
     itemtype="http://schema.org/SiteNavigationElement">

    <div class="container">


        <div class="menu-wrapper">
            <ul id="menu-top-items" class="menu-top-items">
                <li id="menu-item-377686"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-377686">
                    <a href="{{route('sites.size-char')}}">Size Chart</a></li>
                <li id="menu-item-15"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15">
                    <a href="{{route('sites.my-account')}}">My Account</a></li>
                <li id="menu-item-16"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16">
                    <a href="#">Checkout</a></li>
                <li id="menu-item-17"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17">
                    <a href="{{route('carts.showMyCart')}}">Cart</a></li>
            </ul>
        </div>
    </div><!-- .container -->

</nav><!-- #top-navigation -->
<header id="masthead" class="site-header" itemscope="itemscope" itemtype="http://schema.org/WPHeader">

    <div class="container">

        <div class="site-branding">
            <div id="logo" itemscope itemtype="http://schema.org/Brand">
                <a href="{{route('home')}}" itemprop="url" rel="home">
                    <img itemprop="logo" src="/img/logo.png"
                         alt="Goatstee"/>
                </a>
            </div>
        </div>

        <div class="search-area">
            <form method="get" class="searchform" id="search-product-form" action="{{route('search')}}">
                <div>
                    <input type="text" class="textfield" name="s" id="s"
                           placeholder="Type the keyword to search &hellip;">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div>

        <div class="header-cart">

        </div>

    </div><!-- .container -->

</header><!-- #masthead -->


<nav id="primary-navigation" class="primary-navigation" itemscope="itemscope"
     itemtype="http://schema.org/SiteNavigationElement">

    <div class="container">

        <div class="menu-wrapper">
            <ul id="menu-primary-items" class="menu-primary-items">
                <li id="menu-item-33"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-33">
                    <a href="{{route('sites.about-us')}}">About Us</a></li>
                <li id="menu-item-39"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-39">
                    <a href="{{route('sites.contact-us')}}">Contact Us</a></li>
                <li id="menu-item-38"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38">
                    <a href="{{route('sites.faqs')}}">FAQs</a></li>
                <li id="menu-item-377685"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-377685">
                    <a href="{{route('sites.size-char')}}">Size Chart</a></li>
            </ul>
        </div>
    </div><!-- .container -->

</nav><!-- #primary-navigation -->