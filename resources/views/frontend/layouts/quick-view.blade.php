<div id="yith-quick-view-modal" class="open">
    <div class="yith-quick-view-overlay"></div>
    <div class="yith-wcqv-wrapper" style="left: 98.5px; top: 177px; width: 984px; height: 584px;">
        <div class="yith-wcqv-main">
            <div class="yith-wcqv-head">
                <a href="#" id="yith-quick-view-close" class="yith-wcqv-close">X</a>
            </div>
            <div id="yith-quick-view-content" class="woocommerce single-product">
                <div class="product">
                    <div id="product-30" class="product post-30 type-product status-publish has-post-thumbnail product_cat-men product_cat-fabric-handbags product_cat-furniture product_cat-beaded-handbags product_cat-clothing-swimwear product_cat-canvas-shoes product_cat-beach-clothing product_cat-handbags product_cat-jackets product_cat-singles product_cat-sling-bag product_cat-shoes product_cat-dresses product_cat-leather-shoes product_cat-music product_cat-swimsuits product_cat-tshirts product_cat-women product_cat-jewellery product_cat-formal-jackets product_cat-albums product_cat-bikinis product_cat-swimwear product_cat-dresses-apparel product_cat-backpack product_tag-womens-tshirts notblog first instock sale shipping-taxable purchasable product-type-simple">
                        <div class="images product-image">
                            <div class="sale-label sale-top-left">
                                Sale {{$flower->saleoff*100}}%
                            </div>
                            <div class="images" data-columns="4" style="opacity: 1; transition: opacity 0.25s ease-in-out 0s;">
                                <figure class="woocommerce-product-gallery__wrapper product-full">
                                    <div class="woocommerce-product-gallery__image ">
                                        <a class="woocommerce-main-image zoom cloud-zoom">
                                            <img id="product-zoom" src="{{'images/'.$flower->image}}" class="attachment-shop_single size-shop_single wp-post-image" >
                                        </a>
                                    </div>
                                </figure>
                            </div>
                        </div>
                        <div class="summary entry-summary">
                            <div class="summary-content">
                                <div class="product-name">
                                    <h1 itemprop="name" class="product_title entry-title">{{$flower->name}}</h1>
                                </div>
                                <div class="price-block">
                                    <div class="price-box price">
                      <span class="woocs_price_code" data-product-id="30">
                        <del>
                          <span class="amount">{{number_format($flower->price)}} đ</span>
                        </del>
                        <ins>
                          <span class=" amount">{{number_format($flower->sale_price)}} đ</span>
                        </ins>
                      </span>
                                    </div>
                                    <p class="availability in-stock pull-right">
                                        <span> In Stock</span>
                                    </p>
                                </div>
                                <div class="woocommerce-product-details__short-description short-description">
                                    <h2>Overview</h2>
                                    <p>{!! $flower->message !!}</p>
                                </div>
                                <form class="cart" action="" method="post" enctype="multipart/form-data">
                                    <div class="quantity">
                                        <div class="pull-left">
                                            <div class="custom pull-left">
                                                <input type="number" id="quantity_5be2eef8e1fb8" class="input-text qty text" step="1" min="1" max="217" name="quantity" value="1" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric" aria-labelledby="">
                                            </div>
                                        </div>
                                    </div>
                                    <a type="submit" class="single_add_to_cart_button button alt ajax_add_to_cart " data-quantity="1" data-product_id="{{$flower->id}}">Add to cart</a>
                                </form>
                                <div class="product_meta">
                      <span class="sku_wrapper">SKU:
                        <span class="sku">tsh3432</span>
                      </span>
                                    <span class="posted_in">Categories: empty
                        {{--<a href="http://wpdemo.magikthemes.com/creta/product-category/men/" rel="tag">Anniversary</a>,--}}
                        {{--<a href="http://wpdemo.magikthemes.com/creta/product-category/women/handbags/fabric-handbags/" rel="tag">Anniversary Flowers</a>,--}}
                        {{--<a href="http://wpdemo.magikthemes.com/creta/product-category/furniture/" rel="tag">Birthday</a>,--}}
                        {{--<a href="http://wpdemo.magikthemes.com/creta/product-category/women/handbags/beaded-handbags/" rel="tag">Birthday Flowers</a>,--}}
                        {{--<a href="http://wpdemo.magikthemes.com/creta/product-category/women/swimwear/clothing-swimwear/" rel="tag">Christmas</a>,--}}
                        {{--<a href="http://wpdemo.magikthemes.com/creta/product-category/men/shoes/canvas-shoes/" rel="tag">Congratulations</a>,--}}
                        {{--<a href="http://wpdemo.magikthemes.com/creta/product-category/women/swimwear/beach-clothing/" rel="tag">Diwali</a>,--}}
                        {{--<a href="http://wpdemo.magikthemes.com/creta/product-category/women/handbags/" rel="tag">Everyday Occasions</a>,--}}
                        {{--<a href="http://wpdemo.magikthemes.com/creta/product-category/men/jackets/" rel="tag">Favourite Flowers</a>,--}}
                        {{--<a href="http://wpdemo.magikthemes.com/creta/product-category/music/singles/" rel="tag">Flower Bouquet</a>,--}}
                        {{--<a href="http://wpdemo.magikthemes.com/creta/product-category/women/handbags/sling-bag/" rel="tag">Flower Bouquets</a>,--}}
                        {{--<a href="http://wpdemo.magikthemes.com/creta/product-category/men/shoes/" rel="tag">Flower with</a>,--}}
                        {{--<a href="http://wpdemo.magikthemes.com/creta/product-category/men/dresses/" rel="tag">Flowers &amp; Combos</a>,--}}
                        {{--<a href="http://wpdemo.magikthemes.com/creta/product-category/men/shoes/leather-shoes/" rel="tag">Get Well Soon</a>,--}}
                        {{--<a href="http://wpdemo.magikthemes.com/creta/product-category/music/" rel="tag">Mixed Flowers</a>,--}}
                        {{--<a href="http://wpdemo.magikthemes.com/creta/product-category/women/swimwear/swimsuits/" rel="tag">New Year</a>,--}}
                        {{--<a href="http://wpdemo.magikthemes.com/creta/product-category/women/apparel/tops-tees/tshirts/" rel="tag">New Year Flowers</a>,--}}
                        {{--<a href="http://wpdemo.magikthemes.com/creta/product-category/women/" rel="tag">Occasion</a>,--}}
                        {{--<a href="http://wpdemo.magikthemes.com/creta/product-category/women/jewellery/" rel="tag">Occasional Day</a>,--}}
                        {{--<a href="http://wpdemo.magikthemes.com/creta/product-category/men/jackets/formal-jackets/" rel="tag">Orchids</a>,--}}
                        {{--<a href="http://wpdemo.magikthemes.com/creta/product-category/music/albums/" rel="tag">Precious Flowers</a>,--}}
                        {{--<a href="http://wpdemo.magikthemes.com/creta/product-category/women/swimwear/bikinis/" rel="tag">Rakhi</a>,--}}
                        {{--<a href="http://wpdemo.magikthemes.com/creta/product-category/women/swimwear/" rel="tag">Upcoming Occasions</a>,--}}
                        {{--<a href="http://wpdemo.magikthemes.com/creta/product-category/women/apparel/dresses-apparel/" rel="tag">Valentine Day Flowers</a>,--}}
                        {{--<a href="http://wpdemo.magikthemes.com/creta/product-category/women/handbags/backpack/" rel="tag">Wedding Flowers</a>--}}
                      </span>
                                    <span class="tagged_as">Tag: empty
                        {{--<a href="http://wpdemo.magikthemes.com/creta/product-tag/womens-tshirts/" rel="tag">womens tshirts</a>--}}
                      </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>