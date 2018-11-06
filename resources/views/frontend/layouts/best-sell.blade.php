<div class="bestsell-pro">
    <div class="container">

        <div class="slider-items-products">
            <div class="bestsell-block">
                <div id="bestsell-slider" class="product-flexslider hidden-buttons">

                    <div class="home-block-inner">
                        <div class="block-title">
                            <h2>Best<br>
                                <em> Seller</em></h2>

                        </div>
                        <div class="pretext">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Curabitur eu odio non justo euismod congue ut nec orci.                </div>
                        <a class="view_more_bnt" href="#">VIEW ALL</a>
                    </div>

                    <div class="slider-items slider-width-col4 products-grid block-content">

                        <!-- best seller category fashion -->
                        @foreach($flowers as $flower)
                            <div class="item">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info">
                                            <a href="#" title="Bunch of Assorted Gerberas in a Glass Vase" class="product-image">
                                                <figure class="img-responsive" style="height: 200px;">
                                                    <img alt="" src="{{asset('images/'.$flower->image)}}" style="width: 100%;">
                                                </figure>
                                            </a>
                                            <div class="new-label new-top-right">
                                                Sale            </div>
                                            <div class="box-hover">
                                                <ul class="add-to-links">
                                                    <li>
                                                        <a class="yith-wcqv-button link-quickview" href="#"
                                                           data-product_id="30">Quick View</a>
                                                    </li>
                                                    <li>
                                                        <a href="/creta/?add_to_wishlist=30"  data-product-id="30"
                                                           data-product-type="simple" class="add_to_wishlist link-wishlist"                                >Add to Wishlist</a>
                                                    </li>
                                                    <li>

                                                        <a href="#" class="compare link-compare add_to_compare" data-product_id="30"
                                                        >Add to Compare</a>

                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"><a href="#"
                                                                       title="Bunch of Assorted Gerberas in a Glass Vase"> {{$flower->name}} </a>
                                            </div>
                                            <div class="item-content">
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div style="width:0%" class="rating"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        <span class="woocs_price_code"><span class="woocs_price_code" data-product-id="30"><del><span class="woocommerce-Price-amount amount">{{number_format($flower->price)}} <span class="woocommerce-Price-currencySymbol">VNĐ</span></span></del> <ins><span class="woocommerce-Price-amount amount">{{number_format($flower->price*(1-$flower->saleoff))}} <span class="woocommerce-Price-currencySymbol">VNĐ</span></span></ins></span></span>                  </div>
                                                </div>
                                                <div class="action">
                                                    <a class="single_add_to_cart_button add_to_cart_button  product_type_simple ajax_add_to_cart button btn-cart" title='Add to cart' data-quantity="1" data-product_id="{{$flower->id}}"
                                                       href='#'>
                                                        <span>Add to cart </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>