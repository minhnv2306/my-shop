@extends('layouts.sites')
@section('title', 'Home Page')
@section('content')
    <div id="content" class="site-content">
        <div class="container">


            <div id="primary" class="content-area">
                <main id="main" class="site-main" itemprop="mainContentOfPage">

                    <aside id="shopy-slider-2" class="widget widget-shopy-slider">
                        <div class="slider owl-carousel">
                            <div class="slider-item"><img width="970" height="290"
                                                          src="https://goatstee.com/wp-content/uploads/2016/11/img01.jpg"
                                                          class="attachment-shopy-slider size-shopy-slider"
                                                          alt="img01"
                                                          srcset="https://goatstee.com/wp-content/uploads/2016/11/img01.jpg 970w, https://goatstee.com/wp-content/uploads/2016/11/img01-768x230.jpg 768w, https://goatstee.com/wp-content/uploads/2016/11/img01-120x36.jpg 120w"
                                                          sizes="(max-width: 970px) 100vw, 970px"
                                                          itemprop="image"/><span
                                        class="overlay"><span class="overlay-text"><span class="slider-text"></span><a
                                                class="slider-link" href="">Shop Now</a></span></span></div>
                        </div>
                    </aside>
                    <aside id="shopy-products-2" class="widget widget-shopy-products"><h3 class="widget-title">
                            <span>Recent Products</span></h3>
                        <div class="woocommerce columns-4">

                            <ul class="products">

                                @if(!empty($products[0]))
                                    <li class="post-2779250 product type-product status-publish has-post-thumbnail yith-wishlist entry first instock taxable shipping-taxable purchasable product-type-variable has-children">
                                        <a href="{{route('sites.products.show', ['product' => $products[0]->id])}}"
                                           class="woocommerce-LoopProduct-link"><!-- Featured Image From URL plugin -->
                                            <img src="{{getLinkImage($products[0]->avatar)}}"
                                                 alt="I Am A Taurus Woman Funny T Shirt"></img>
                                            <h3>{{$products[0]->name}}</h3>

                                            <span class="price"><span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">&#36;</span>{{$products[0]->price}}</span></span>
                                        </a><a href="https://goatstee.com/product/i-am-a-taurus-woman-funny-t-shirt/"
                                               rel="nofollow" data-product_id="2779250" data-product_sku=""
                                               data-quantity="1"
                                               class="button add_to_cart_button product_type_variable"><i
                                                    class="fa fa-shopping-cart"></i></a>
                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2779250">
                                            <div class="yith-wcwl-add-button show" style="display:block">


                                                <a href="/?add_to_wishlist=2779250" rel="nofollow"
                                                   data-product-id="2779250" data-product-type="variable"
                                                   class="add_to_wishlist">
                                                    Add to Wishlist</a>
                                                <img src="https://goatstee.com/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif"
                                                     class="ajax-loading" alt="loading" width="16" height="16"
                                                     style="visibility:hidden"/>
                                            </div>

                                            <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                                <span class="feedback">Product added!</span>
                                                <a href="https://goatstee.com/product/i-am-a-taurus-woman-funny-t-shirt/view/"
                                                   rel="nofollow">
                                                    Browse Wishlist </a>
                                            </div>

                                            <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                                <span class="feedback">The product is already in the wishlist!</span>
                                                <a href="https://goatstee.com/product/i-am-a-taurus-woman-funny-t-shirt/view/"
                                                   rel="nofollow">
                                                    Browse Wishlist </a>
                                            </div>

                                            <div style="clear:both"></div>
                                            <div class="yith-wcwl-wishlistaddresponse"></div>

                                        </div>

                                        <div class="clear"></div>
                                    </li>
                                @endif
                                @if(!empty($products[1]))
                                    <li class="post-2779088 product type-product status-publish has-post-thumbnail yith-wishlist entry  instock taxable shipping-taxable purchasable product-type-variable has-children">
                                        <a href="{{route('sites.products.show', ['product' => $products[1]->id])}}"
                                           class="woocommerce-LoopProduct-link"><!-- Featured Image From URL plugin -->
                                            <img src="{{getLinkImage($products[1]->avatar)}}"></img>
                                            <h3>{{$products[1]->name}}</h3>

                                            <span class="price"><span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">&#36;</span>{{$products[1]->price}}</span></span>
                                        </a><a href="https://goatstee.com/product/armed-forces-day-honor-their-sacrifice-military-t-shirt/"
                                               rel="nofollow" data-product_id="2779088" data-product_sku=""
                                               data-quantity="1"
                                               class="button add_to_cart_button product_type_variable"><i
                                                    class="fa fa-shopping-cart"></i></a>
                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2779088">
                                            <div class="yith-wcwl-add-button show" style="display:block">


                                                <a href="/?add_to_wishlist=2779088" rel="nofollow"
                                                   data-product-id="2779088" data-product-type="variable"
                                                   class="add_to_wishlist">
                                                    Add to Wishlist</a>
                                                <img src="https://goatstee.com/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif"
                                                     class="ajax-loading" alt="loading" width="16" height="16"
                                                     style="visibility:hidden"/>
                                            </div>

                                            <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                                <span class="feedback">Product added!</span>
                                                <a href="https://goatstee.com/product/armed-forces-day-honor-their-sacrifice-military-t-shirt/view/"
                                                   rel="nofollow">
                                                    Browse Wishlist </a>
                                            </div>

                                            <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                                <span class="feedback">The product is already in the wishlist!</span>
                                                <a href="https://goatstee.com/product/armed-forces-day-honor-their-sacrifice-military-t-shirt/view/"
                                                   rel="nofollow">
                                                    Browse Wishlist </a>
                                            </div>

                                            <div style="clear:both"></div>
                                            <div class="yith-wcwl-wishlistaddresponse"></div>

                                        </div>

                                        <div class="clear"></div>
                                    </li>
                                @endif
                                @if(!empty($products[2]))
                                    <li class="post-2778926 product type-product status-publish has-post-thumbnail yith-wishlist entry  instock taxable shipping-taxable purchasable product-type-variable has-children">
                                        <a href="{{route('sites.products.show', ['product' => $products[2]->id])}}"
                                           class="woocommerce-LoopProduct-link"><!-- Featured Image From URL plugin -->
                                            <img src="{{getLinkImage($products[2]->avatar)}}"></img>
                                            <h3>{{$products[2]->name}}</h3>

                                            <span class="price"><span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">&#36;</span>{{$products[2]->price}}</span></span>
                                        </a><a href="https://goatstee.com/product/zombie-jesus-day-easter-tshirt/"
                                               rel="nofollow" data-product_id="2778926" data-product_sku=""
                                               data-quantity="1"
                                               class="button add_to_cart_button product_type_variable"><i
                                                    class="fa fa-shopping-cart"></i></a>
                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2778926">
                                            <div class="yith-wcwl-add-button hide" style="display:none">


                                                <a href="/?add_to_wishlist=2778926" rel="nofollow"
                                                   data-product-id="2778926" data-product-type="variable"
                                                   class="add_to_wishlist">
                                                    Add to Wishlist</a>
                                                <img src="https://goatstee.com/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif"
                                                     class="ajax-loading" alt="loading" width="16" height="16"
                                                     style="visibility:hidden"/>
                                            </div>

                                            <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                                <span class="feedback">Product added!</span>
                                                <a href="https://goatstee.com/product/zombie-jesus-day-easter-tshirt/view/"
                                                   rel="nofollow">
                                                    Browse Wishlist </a>
                                            </div>

                                            <div class="yith-wcwl-wishlistexistsbrowse show" style="display:block">
                                                <span class="feedback">The product is already in the wishlist!</span>
                                                <a href="https://goatstee.com/product/zombie-jesus-day-easter-tshirt/view/"
                                                   rel="nofollow">
                                                    Browse Wishlist </a>
                                            </div>

                                            <div style="clear:both"></div>
                                            <div class="yith-wcwl-wishlistaddresponse"></div>

                                        </div>

                                        <div class="clear"></div>
                                    </li>
                                @endif
                                @if(!empty($products[3]))

                                    <li class="post-2779007 product type-product status-publish has-post-thumbnail yith-wishlist entry last instock taxable shipping-taxable purchasable product-type-variable has-children">
                                        <a href="{{route('sites.products.show', ['product' => $products[3]->id])}}"
                                           class="woocommerce-LoopProduct-link"><!-- Featured Image From URL plugin -->
                                            <img src="{{getLinkImage($products[3]->avatar)}}"></img>
                                            <h3>{{$products[3]->name}}</h3>

                                            <span class="price"><span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">&#36;</span>{{$products[3]->price}}</span></span>
                                        </a><a href="https://goatstee.com/product/im-the-juan-for-you-funny-cinco-de-mayo-saying-t-shirt/"
                                               rel="nofollow" data-product_id="2779007" data-product_sku=""
                                               data-quantity="1"
                                               class="button add_to_cart_button product_type_variable"><i
                                                    class="fa fa-shopping-cart"></i></a>
                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2779007">
                                            <div class="yith-wcwl-add-button hide" style="display:none">


                                                <a href="/?add_to_wishlist=2779007" rel="nofollow"
                                                   data-product-id="2779007" data-product-type="variable"
                                                   class="add_to_wishlist">
                                                    Add to Wishlist</a>
                                                <img src="https://goatstee.com/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif"
                                                     class="ajax-loading" alt="loading" width="16" height="16"
                                                     style="visibility:hidden"/>
                                            </div>

                                            <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                                <span class="feedback">Product added!</span>
                                                <a href="https://goatstee.com/product/im-the-juan-for-you-funny-cinco-de-mayo-saying-t-shirt/view/"
                                                   rel="nofollow">
                                                    Browse Wishlist </a>
                                            </div>

                                            <div class="yith-wcwl-wishlistexistsbrowse show" style="display:block">
                                                <span class="feedback">The product is already in the wishlist!</span>
                                                <a href="https://goatstee.com/product/im-the-juan-for-you-funny-cinco-de-mayo-saying-t-shirt/view/"
                                                   rel="nofollow">
                                                    Browse Wishlist </a>
                                            </div>

                                            <div style="clear:both"></div>
                                            <div class="yith-wcwl-wishlistaddresponse"></div>

                                        </div>

                                        <div class="clear"></div>
                                    </li>
                                @endif

                            </ul>


                        </div>
                    </aside>
                    <aside id="shopy-products-3" class="widget widget-shopy-products"><h3 class="widget-title">
                            <span>Best Selling</span></h3>
                        <div class="woocommerce columns-4">

                            <ul class="products">

                                @if(!empty($sale_products[0]))
                                    <li class="post-2693694 product type-product status-publish has-post-thumbnail yith-wishlist entry first instock taxable shipping-taxable purchasable product-type-variable has-children">
                                        <a href="{{route('sites.products.show', ['product' => $sale_products[0]->id])}}"
                                           class="woocommerce-LoopProduct-link"><!-- Featured Image From URL plugin -->
                                            <img src="{{getLinkImage($sale_products[0]->avatar)}}"
                                                 alt="Total Solar Eclipse Summer August 21st 2017 T Shirt"></img>
                                            <h3>{{$sale_products[0]->name}}</h3>

                                            <span class="price"><span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">&#36;</span>{{$sale_products[0]->price}}</span></span>
                                        </a><a href="https://goatstee.com/product/total-solar-eclipse-summer-august-21st-2017-t-shirt/"
                                               rel="nofollow" data-product_id="2693694" data-product_sku=""
                                               data-quantity="1"
                                               class="button add_to_cart_button product_type_variable"><i
                                                    class="fa fa-shopping-cart"></i></a>
                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2693694">
                                            <div class="yith-wcwl-add-button show" style="display:block">


                                                <a href="/?add_to_wishlist=2693694" rel="nofollow"
                                                   data-product-id="2693694" data-product-type="variable"
                                                   class="add_to_wishlist">
                                                    Add to Wishlist</a>
                                                <img src="https://goatstee.com/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif"
                                                     class="ajax-loading" alt="loading" width="16" height="16"
                                                     style="visibility:hidden"/>
                                            </div>

                                            <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                                <span class="feedback">Product added!</span>
                                                <a href="https://goatstee.com/product/total-solar-eclipse-summer-august-21st-2017-t-shirt/view/"
                                                   rel="nofollow">
                                                    Browse Wishlist </a>
                                            </div>

                                            <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                                <span class="feedback">The product is already in the wishlist!</span>
                                                <a href="https://goatstee.com/product/total-solar-eclipse-summer-august-21st-2017-t-shirt/view/"
                                                   rel="nofollow">
                                                    Browse Wishlist </a>
                                            </div>

                                            <div style="clear:both"></div>
                                            <div class="yith-wcwl-wishlistaddresponse"></div>

                                        </div>

                                        <div class="clear"></div>
                                    </li>
                                @endif
                                @if(!empty($sale_products[1]))
                                    <li class="post-2293410 product type-product status-publish has-post-thumbnail yith-wishlist entry  instock taxable shipping-taxable purchasable product-type-variable has-children">
                                        <a href="{{route('sites.products.show', ['product' => $sale_products[1]->id])}}"
                                           class="woocommerce-LoopProduct-link"><!-- Featured Image From URL plugin -->
                                            <img src="{{getLinkImage($sale_products[1]->avatar)}}"
                                                 alt="Catholics Vs Convicts On Back 1988 Classic T Shirt"></img>
                                            <h3>{{$sale_products[1]->name}}</h3>

                                            <span class="price"><span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">&#36;</span>{{$sale_products[1]->price}}</span></span>
                                        </a><a href="https://goatstee.com/product/catholics-vs-convicts-on-back-1988-classic-t-shirt/"
                                               rel="nofollow" data-product_id="2293410" data-product_sku=""
                                               data-quantity="1"
                                               class="button add_to_cart_button product_type_variable"><i
                                                    class="fa fa-shopping-cart"></i></a>
                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2293410">
                                            <div class="yith-wcwl-add-button hide" style="display:none">


                                                <a href="/?add_to_wishlist=2293410" rel="nofollow"
                                                   data-product-id="2293410" data-product-type="variable"
                                                   class="add_to_wishlist">
                                                    Add to Wishlist</a>
                                                <img src="https://goatstee.com/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif"
                                                     class="ajax-loading" alt="loading" width="16" height="16"
                                                     style="visibility:hidden"/>
                                            </div>

                                            <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                                <span class="feedback">Product added!</span>
                                                <a href="https://goatstee.com/product/catholics-vs-convicts-on-back-1988-classic-t-shirt/view/"
                                                   rel="nofollow">
                                                    Browse Wishlist </a>
                                            </div>

                                            <div class="yith-wcwl-wishlistexistsbrowse show" style="display:block">
                                                <span class="feedback">The product is already in the wishlist!</span>
                                                <a href="https://goatstee.com/product/catholics-vs-convicts-on-back-1988-classic-t-shirt/view/"
                                                   rel="nofollow">
                                                    Browse Wishlist </a>
                                            </div>

                                            <div style="clear:both"></div>
                                            <div class="yith-wcwl-wishlistaddresponse"></div>

                                        </div>

                                        <div class="clear"></div>
                                    </li>
                                @endif
                                @if(!empty($sale_products[2]))

                                    <li class="post-952080 product type-product status-publish has-post-thumbnail yith-wishlist entry  instock taxable shipping-taxable purchasable product-type-variable has-children">
                                        <a href="{{route('sites.products.show', ['product' => $sale_products[2]->id])}}"
                                           class="woocommerce-LoopProduct-link"><!-- Featured Image From URL plugin -->
                                            <img src="{{getLinkImage($sale_products[2]->avatar)}}"
                                                 alt="Donald J Trump President Inauguration Day 2017 T-shirt"></img>
                                            <h3>{{$sale_products[2]->name}}</h3>

                                            <span class="price"><span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">&#36;</span>{{$sale_products[2]->price}}</span></span>
                                        </a><a href="https://goatstee.com/product/donald-j-trump-president-inauguration-day-2017-t-shirt/"
                                               rel="nofollow" data-product_id="952080" data-product_sku=""
                                               data-quantity="1"
                                               class="button add_to_cart_button product_type_variable"><i
                                                    class="fa fa-shopping-cart"></i></a>
                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-952080">
                                            <div class="yith-wcwl-add-button show" style="display:block">


                                                <a href="/?add_to_wishlist=952080" rel="nofollow"
                                                   data-product-id="952080" data-product-type="variable"
                                                   class="add_to_wishlist">
                                                    Add to Wishlist</a>
                                                <img src="https://goatstee.com/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif"
                                                     class="ajax-loading" alt="loading" width="16" height="16"
                                                     style="visibility:hidden"/>
                                            </div>

                                            <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                                <span class="feedback">Product added!</span>
                                                <a href="https://goatstee.com/product/donald-j-trump-president-inauguration-day-2017-t-shirt/view/"
                                                   rel="nofollow">
                                                    Browse Wishlist </a>
                                            </div>

                                            <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                                <span class="feedback">The product is already in the wishlist!</span>
                                                <a href="https://goatstee.com/product/donald-j-trump-president-inauguration-day-2017-t-shirt/view/"
                                                   rel="nofollow">
                                                    Browse Wishlist </a>
                                            </div>

                                            <div style="clear:both"></div>
                                            <div class="yith-wcwl-wishlistaddresponse"></div>

                                        </div>

                                        <div class="clear"></div>
                                    </li>
                                @endif
                                @if(!empty($products[3]))

                                    <li class="post-76717 product type-product status-publish has-post-thumbnail yith-wishlist entry last instock taxable shipping-taxable purchasable product-type-variable has-children">
                                        <a href="{{route('sites.products.show', ['product' => $sale_products[3]->id])}}"
                                           class="woocommerce-LoopProduct-link"><!-- Featured Image From URL plugin -->
                                            <img src="{{getLinkImage($sale_products[3]->avatar)}}"
                                                 alt="S-mi-le t shirt Mo-re Roman-Atwood - T Shirt"></img>
                                            <h3>{{$sale_products[3]->name}}</h3>

                                            <span class="price"><span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">&#36;</span>{{$sale_products[3]->price}}</span></span>
                                        </a><a href="https://goatstee.com/product/s-mi-le-t-shirt-mo-re-roman-atwood-t-shirt/"
                                               rel="nofollow" data-product_id="76717" data-product_sku=""
                                               data-quantity="1"
                                               class="button add_to_cart_button product_type_variable"><i
                                                    class="fa fa-shopping-cart"></i></a>
                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-76717">
                                            <div class="yith-wcwl-add-button show" style="display:block">


                                                <a href="/?add_to_wishlist=76717" rel="nofollow" data-product-id="76717"
                                                   data-product-type="variable" class="add_to_wishlist">
                                                    Add to Wishlist</a>
                                                <img src="https://goatstee.com/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif"
                                                     class="ajax-loading" alt="loading" width="16" height="16"
                                                     style="visibility:hidden"/>
                                            </div>

                                            <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                                <span class="feedback">Product added!</span>
                                                <a href="https://goatstee.com/product/s-mi-le-t-shirt-mo-re-roman-atwood-t-shirt/view/"
                                                   rel="nofollow">
                                                    Browse Wishlist </a>
                                            </div>

                                            <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                                <span class="feedback">The product is already in the wishlist!</span>
                                                <a href="https://goatstee.com/product/s-mi-le-t-shirt-mo-re-roman-atwood-t-shirt/view/"
                                                   rel="nofollow">
                                                    Browse Wishlist </a>
                                            </div>

                                            <div style="clear:both"></div>
                                            <div class="yith-wcwl-wishlistaddresponse"></div>

                                        </div>

                                        <div class="clear"></div>
                                    </li>
                                @endif
                            </ul>

                        </div>
                    </aside>
                </main><!-- #main -->
            </div><!-- #primary -->

        </div><!-- .container -->
    </div><!-- #content -->
@endsection


