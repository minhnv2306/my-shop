@extends('layouts.sites')
@section('title', 'Home Page')
@section('content')
    <div id="content" class="site-content">
        <div class="container">


            <div id="primary" class="content-area">
                <main id="main" class="site-main" itemprop="mainContentOfPage">
                    <aside id="shopy-products-2" class="widget widget-shopy-products"><h3 class="widget-title">
                            <span>Recent Products</span></h3>
                        <div class="woocommerce columns-4">

                            <ul class="products">

                                @if(!empty($products[0]))
                                    <li class="post-2779250 product type-product status-publish has-post-thumbnail yith-wishlist entry first instock taxable shipping-taxable purchasable product-type-variable has-children">
                                        <a href="{{route('sites.products.show', ['product' => $products[0]->id])}}"
                                           class="woocommerce-LoopProduct-link"><!-- Featured Image From URL plugin -->
                                            <img src="{{$products[0]->avatar}}"
                                                 alt="I Am A Taurus Woman Funny T Shirt"></img>
                                            <h3>{{$products[0]->name}}</h3>

                                            <span class="price"><span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">&#36;</span>{{$products[0]->price}}</span></span>
                                        </a><a href="{{route('sites.products.show', ['product' => $products[0]->id])}}"
                                               rel="nofollow" data-product_id="2779250" data-product_sku=""
                                               data-quantity="1"
                                               class="button add_to_cart_button product_type_variable"><i
                                                    class="fa fa-shopping-cart"></i></a>
                                        <div class="clear"></div>
                                    </li>
                                @endif
                                @if(!empty($products[1]))
                                    <li class="post-2779088 product type-product status-publish has-post-thumbnail yith-wishlist entry  instock taxable shipping-taxable purchasable product-type-variable has-children">
                                        <a href="{{route('sites.products.show', ['product' => $products[1]->id])}}"
                                           class="woocommerce-LoopProduct-link"><!-- Featured Image From URL plugin -->
                                            <img src="{{$products[1]->avatar}}"></img>
                                            <h3>{{$products[1]->name}}</h3>

                                            <span class="price"><span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">&#36;</span>{{$products[1]->price}}</span></span>
                                        </a><a href="{{route('sites.products.show', ['product' => $products[1]->id])}}"
                                               rel="nofollow" data-product_id="2779088" data-product_sku=""
                                               data-quantity="1"
                                               class="button add_to_cart_button product_type_variable"><i
                                                    class="fa fa-shopping-cart"></i></a>
                                        <div class="clear"></div>
                                    </li>
                                @endif
                                @if(!empty($products[2]))
                                    <li class="post-2778926 product type-product status-publish has-post-thumbnail yith-wishlist entry  instock taxable shipping-taxable purchasable product-type-variable has-children">
                                        <a href="{{route('sites.products.show', ['product' => $products[2]->id])}}"
                                           class="woocommerce-LoopProduct-link"><!-- Featured Image From URL plugin -->
                                            <img src="{{$products[2]->avatar}}"></img>
                                            <h3>{{$products[2]->name}}</h3>

                                            <span class="price"><span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">&#36;</span>{{$products[2]->price}}</span></span>
                                        </a><a href="{{route('sites.products.show', ['product' => $products[2]->id])}}"
                                               rel="nofollow" data-product_id="2778926" data-product_sku=""
                                               data-quantity="1"
                                               class="button add_to_cart_button product_type_variable"><i
                                                    class="fa fa-shopping-cart"></i></a>

                                        <div class="clear"></div>
                                    </li>
                                @endif
                                @if(!empty($products[3]))

                                    <li class="post-2779007 product type-product status-publish has-post-thumbnail yith-wishlist entry last instock taxable shipping-taxable purchasable product-type-variable has-children">
                                        <a href="{{route('sites.products.show', ['product' => $products[3]->id])}}"
                                           class="woocommerce-LoopProduct-link"><!-- Featured Image From URL plugin -->
                                            <img src="{{($products[3]->avatar)}}"></img>
                                            <h3>{{$products[3]->name}}</h3>

                                            <span class="price"><span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">&#36;</span>{{$products[3]->price}}</span></span>
                                        </a><a href="{{route('sites.products.show', ['product' => $products[3]->id])}}"
                                               rel="nofollow" data-product_id="2779007" data-product_sku=""
                                               data-quantity="1"
                                               class="button add_to_cart_button product_type_variable"><i
                                                    class="fa fa-shopping-cart"></i></a>
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
                                            <img src="{{($sale_products[0]->avatar)}}"
                                                 alt="Total Solar Eclipse Summer August 21st 2017 T Shirt"></img>
                                            <h3>{{$sale_products[0]->name}}</h3>

                                            <span class="price"><span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">&#36;</span>{{$sale_products[0]->price}}</span></span>
                                        </a><a href="{{route('sites.products.show', ['product' => $sale_products[0]->id])}}"
                                               rel="nofollow" data-product_id="2693694" data-product_sku=""
                                               data-quantity="1"
                                               class="button add_to_cart_button product_type_variable"><i
                                                    class="fa fa-shopping-cart"></i></a>

                                        <div class="clear"></div>
                                    </li>
                                @endif
                                @if(!empty($sale_products[1]))
                                    <li class="post-2293410 product type-product status-publish has-post-thumbnail yith-wishlist entry  instock taxable shipping-taxable purchasable product-type-variable has-children">
                                        <a href="{{route('sites.products.show', ['product' => $sale_products[1]->id])}}"
                                           class="woocommerce-LoopProduct-link"><!-- Featured Image From URL plugin -->
                                            <img src="{{($sale_products[1]->avatar)}}"
                                                 alt="Catholics Vs Convicts On Back 1988 Classic T Shirt"></img>
                                            <h3>{{$sale_products[1]->name}}</h3>

                                            <span class="price"><span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">&#36;</span>{{$sale_products[1]->price}}</span></span>
                                        </a><a href="{{route('sites.products.show', ['product' => $sale_products[1]->id])}}"
                                               rel="nofollow" data-product_id="2293410" data-product_sku=""
                                               data-quantity="1"
                                               class="button add_to_cart_button product_type_variable"><i
                                                    class="fa fa-shopping-cart"></i></a>
                                        <div class="clear"></div>
                                    </li>
                                @endif
                                @if(!empty($sale_products[2]))

                                    <li class="post-952080 product type-product status-publish has-post-thumbnail yith-wishlist entry  instock taxable shipping-taxable purchasable product-type-variable has-children">
                                        <a href="{{route('sites.products.show', ['product' => $sale_products[2]->id])}}"
                                           class="woocommerce-LoopProduct-link"><!-- Featured Image From URL plugin -->
                                            <img src="{{($sale_products[2]->avatar)}}"
                                                 alt="Donald J Trump President Inauguration Day 2017 T-shirt"></img>
                                            <h3>{{$sale_products[2]->name}}</h3>

                                            <span class="price"><span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">&#36;</span>{{$sale_products[2]->price}}</span></span>
                                        </a><a href="{{route('sites.products.show', ['product' => $sale_products[2]->id])}}"
                                               rel="nofollow" data-product_id="952080" data-product_sku=""
                                               data-quantity="1"
                                               class="button add_to_cart_button product_type_variable"><i
                                                    class="fa fa-shopping-cart"></i></a>
                                        <div class="clear"></div>
                                    </li>
                                @endif
                                @if(!empty($products[3]))

                                    <li class="post-76717 product type-product status-publish has-post-thumbnail yith-wishlist entry last instock taxable shipping-taxable purchasable product-type-variable has-children">
                                        <a href="{{route('sites.products.show', ['product' => $sale_products[3]->id])}}"
                                           class="woocommerce-LoopProduct-link"><!-- Featured Image From URL plugin -->
                                            <img src="{{($sale_products[3]->avatar)}}"
                                                 alt="S-mi-le t shirt Mo-re Roman-Atwood - T Shirt"></img>
                                            <h3>{{$sale_products[3]->name}}</h3>

                                            <span class="price"><span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">&#36;</span>{{$sale_products[3]->price}}</span></span>
                                        </a><a href="{{route('sites.products.show', ['product' => $sale_products[3]->id])}}"
                                               rel="nofollow" data-product_id="76717" data-product_sku=""
                                               data-quantity="1"
                                               class="button add_to_cart_button product_type_variable"><i
                                                    class="fa fa-shopping-cart"></i></a>

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


