<div class="col-sm-12" id="content">
    <div class="col-main">
        <div class="static-contain">
            <div class="page-title">
                <h2 class="entry-title">
                    Cart
                </h2>
            </div>
            <div class="page-content">
                <div class="woocommerce">
                    <form class="woocommerce-cart-form" action="#" method="post">
                        <div class="col-main">
                            <div class="cart wow bounceInUp animated" style="visibility: visible;">
                                @if (!$carts->count())
                                    <p class="cart-empty">Your cart is currently empty.</p>
                                    <p class="return-to-shop">
                                        <a class="button wc-backward" href="{{route('home')}}">
                                            Return to shop		</a>
                                    </p>
                                @else
                                    <div class="table-responsive">
                                        <table class="shop_table shop_table_responsive1 cart woocommerce-cart-form__contents data-table cart-table" id="shopping-cart-table" cellspacing="0">
                                            <thead>
                                            <tr>
                                                <th>&nbsp;</th>
                                                <th>Product</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Total</th>
                                                <th>&nbsp;</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach ($carts as $item)
                                                <tr class="woocommerce-cart-form__cart-item cart_item">
                                                    <td class="image">
                                                        <a href="#"><img width="300" height="300" src="#" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt=""></a>
                                                    </td>
                                                    <td>
                                                        <h2 class="product-name">
                                                            <a href="#">Bunch of Assorted Gerberas in a Glass Vase</a>
                                                        </h2>
                                                    </td>
                                                    <td class="a-center hidden-table">
                                                                <span class="cart-price">
                                                                    <span class="price">
                                                                        <span class="woocs_special_price_code">
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                49.99
                                                                            </span>
                                                                        </span>
                                                                    </span>
                                                                </span>
                                                    </td>
                                                    <td class="product-quantity" data-title="Quantity">
                                                        <div class="quantity">
                                                            <div class="pull-left">
                                                                <div class="custom pull-left">
                                                                    <input type="number" id="quantity_5bd70df08388a" class="input-text qty text" step="1" min="0" max="219" name="cart[34173cb38f07f89ddbebc2ac9128303f][qty]" value="2" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric" aria-labelledby="Bunch of Assorted Gerberas in a Glass Vase quantity">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="product-subtotal" data-title="Total">
                                                        <span class="woocs_special_price_code"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>99.98</span></span>
                                                    </td>
                                                    <td class="product-remove">
                                                        <a href="#" class="button remove-item" aria-label="Remove this item" data-product_id="30" data-product_sku="tsh3432"></a>
                                                    </td>
                                                </tr>

                                            @endforeach

                                            </tbody>
                                            <tfoot>
                                            <tr class="first last">
                                                <td class="a-right last" colspan="50">
                                                    <button onclick="location.href = '{{route('home')}}'" class="button btn-continue" title="Continue Shopping" type="button"><span>Continue Shopping</span>
                                                    </button>
                                                    <input type="submit" class="button btn-update" name="update_cart" value="Update cart" disabled="">
                                                    <button id="empty_cart_button" class="button" title="Clear Cart" name="clear-cart" type="submit"><span>Clear Cart</span></button>
                                                    <input type="hidden" id="_wpnonce" name="_wpnonce" value="ec78d0edc0"><input type="hidden" name="_wp_http_referer" value="/creta/cart/">
                                                </td>
                                            </tr>
                                            </tfoot>
                                        </table>

                                    </div>
                                    <div class="cart-collaterals row">
                                        <div class="col-sm-6">
                                            <div class="coupon discount">
                                                <h3>Discount Codes</h3>
                                                <div id="discount-coupon-form">
                                                    <label for="coupon_code"> Enter your coupon code if you have one:</label>
                                                    <input type="text" name="coupon_code" class="input-text fullwidth" id="coupon_code" value="" placeholder="Coupon code"> <input type="submit" class="button" name="apply_coupon" value="Apply Coupon">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="cart_totals totals ">
                                                <h2>Cart Totals</h2>
                                                <table cellspacing="0" class="shop_table shop_table_responsive">
                                                    <tbody>
                                                    <tr class="cart-subtotal">
                                                        <th>Subtotal</th>
                                                        <td data-title="Subtotal"><span class="woocs_special_price_code"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>119.98</span></span></td>
                                                    </tr>
                                                    <tr class="shipping">
                                                        <th>Shipping</th>
                                                        <td data-title="Shipping">
                                                            <ul id="shipping_method">
                                                                <li>
                                                                    <input type="radio" name="shipping_method[0]" data-index="0" id="shipping_method_0_legacy_flat_rate" value="legacy_flat_rate" class="shipping_method" checked="checked">
                                                                    <label for="shipping_method_0_legacy_flat_rate">Flat Rate: <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>1.00</span></label>
                                                                </li>
                                                                <li>
                                                                    <input type="radio" name="shipping_method[0]" data-index="0" id="shipping_method_0_legacy_free_shipping" value="legacy_free_shipping" class="shipping_method">
                                                                    <label for="shipping_method_0_legacy_free_shipping">Free Shipping: <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>0.00</span></label>
                                                                </li>
                                                            </ul>
                                                            <p><a href="#" class="shipping-calculator-button">Calculate shipping</a></p>
                                                            <section class="shipping-calculator-form" style="display:none;">
                                                                <p class="form-row form-row-wide" id="calc_shipping_country_field">
                                                                    <select name="calc_shipping_country" id="calc_shipping_country" class="country_to_state country_select" rel="calc_shipping_state">
                                                                        <option value="">Select a country…</option>
                                                                        <option value="AX">Åland Islands</option>
                                                                        <option value="AF">Afghanistan</option>
                                                                        <option value="AL">Albania</option>
                                                                        <option value="DZ">Algeria</option>
                                                                        <option value="AS">American Samoa</option>
                                                                        <option value="AD">Andorra</option>
                                                                        <option value="AO">Angola</option>
                                                                        <option value="AI">Anguilla</option>
                                                                        <option value="AQ">Antarctica</option>
                                                                        <option value="AG">Antigua and Barbuda</option>
                                                                        <option value="AR">Argentina</option>
                                                                        <option value="AM">Armenia</option>
                                                                        <option value="AW">Aruba</option>
                                                                        <option value="AU">Australia</option>
                                                                        <option value="AT">Austria</option>
                                                                        <option value="AZ">Azerbaijan</option>
                                                                        <option value="BS">Bahamas</option>
                                                                        <option value="BH">Bahrain</option>
                                                                        <option value="BD">Bangladesh</option>
                                                                        <option value="BB">Barbados</option>
                                                                        <option value="BY">Belarus</option>
                                                                        <option value="PW">Belau</option>
                                                                        <option value="BE">Belgium</option>
                                                                        <option value="BZ">Belize</option>
                                                                        <option value="BJ">Benin</option>
                                                                        <option value="BM">Bermuda</option>
                                                                        <option value="BT">Bhutan</option>
                                                                        <option value="BO">Bolivia</option>
                                                                        <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                                                                        <option value="BA">Bosnia and Herzegovina</option>
                                                                        <option value="BW">Botswana</option>
                                                                        <option value="BV">Bouvet Island</option>
                                                                        <option value="BR">Brazil</option>
                                                                        <option value="IO">British Indian Ocean Territory</option>
                                                                        <option value="VG">British Virgin Islands</option>
                                                                        <option value="BN">Brunei</option>
                                                                        <option value="BG">Bulgaria</option>
                                                                        <option value="BF">Burkina Faso</option>
                                                                        <option value="BI">Burundi</option>
                                                                        <option value="KH">Cambodia</option>
                                                                        <option value="CM">Cameroon</option>
                                                                        <option value="CA">Canada</option>
                                                                        <option value="CV">Cape Verde</option>
                                                                        <option value="KY">Cayman Islands</option>
                                                                        <option value="CF">Central African Republic</option>
                                                                        <option value="TD">Chad</option>
                                                                        <option value="CL">Chile</option>
                                                                        <option value="CN">China</option>
                                                                        <option value="CX">Christmas Island</option>
                                                                        <option value="CC">Cocos (Keeling) Islands</option>
                                                                        <option value="CO">Colombia</option>
                                                                        <option value="KM">Comoros</option>
                                                                        <option value="CG">Congo (Brazzaville)</option>
                                                                        <option value="CD">Congo (Kinshasa)</option>
                                                                        <option value="CK">Cook Islands</option>
                                                                        <option value="CR">Costa Rica</option>
                                                                        <option value="HR">Croatia</option>
                                                                        <option value="CU">Cuba</option>
                                                                        <option value="CW">Curaçao</option>
                                                                        <option value="CY">Cyprus</option>
                                                                        <option value="CZ">Czech Republic</option>
                                                                        <option value="DK">Denmark</option>
                                                                        <option value="DJ">Djibouti</option>
                                                                        <option value="DM">Dominica</option>
                                                                        <option value="DO">Dominican Republic</option>
                                                                        <option value="EC">Ecuador</option>
                                                                        <option value="EG">Egypt</option>
                                                                        <option value="SV">El Salvador</option>
                                                                        <option value="GQ">Equatorial Guinea</option>
                                                                        <option value="ER">Eritrea</option>
                                                                        <option value="EE">Estonia</option>
                                                                        <option value="ET">Ethiopia</option>
                                                                        <option value="FK">Falkland Islands</option>
                                                                        <option value="FO">Faroe Islands</option>
                                                                        <option value="FJ">Fiji</option>
                                                                        <option value="FI">Finland</option>
                                                                        <option value="FR">France</option>
                                                                        <option value="GF">French Guiana</option>
                                                                        <option value="PF">French Polynesia</option>
                                                                        <option value="TF">French Southern Territories</option>
                                                                        <option value="GA">Gabon</option>
                                                                        <option value="GM">Gambia</option>
                                                                        <option value="GE">Georgia</option>
                                                                        <option value="DE">Germany</option>
                                                                        <option value="GH">Ghana</option>
                                                                        <option value="GI">Gibraltar</option>
                                                                        <option value="GR">Greece</option>
                                                                        <option value="GL">Greenland</option>
                                                                        <option value="GD">Grenada</option>
                                                                        <option value="GP">Guadeloupe</option>
                                                                        <option value="GU">Guam</option>
                                                                        <option value="GT">Guatemala</option>
                                                                        <option value="GG">Guernsey</option>
                                                                        <option value="GN">Guinea</option>
                                                                        <option value="GW">Guinea-Bissau</option>
                                                                        <option value="GY">Guyana</option>
                                                                        <option value="HT">Haiti</option>
                                                                        <option value="HM">Heard Island and McDonald Islands</option>
                                                                        <option value="HN">Honduras</option>
                                                                        <option value="HK">Hong Kong</option>
                                                                        <option value="HU">Hungary</option>
                                                                        <option value="IS">Iceland</option>
                                                                        <option value="IN">India</option>
                                                                        <option value="ID">Indonesia</option>
                                                                        <option value="IR">Iran</option>
                                                                        <option value="IQ">Iraq</option>
                                                                        <option value="IE">Ireland</option>
                                                                        <option value="IM">Isle of Man</option>
                                                                        <option value="IL">Israel</option>
                                                                        <option value="IT">Italy</option>
                                                                        <option value="CI">Ivory Coast</option>
                                                                        <option value="JM">Jamaica</option>
                                                                        <option value="JP">Japan</option>
                                                                        <option value="JE">Jersey</option>
                                                                        <option value="JO">Jordan</option>
                                                                        <option value="KZ">Kazakhstan</option>
                                                                        <option value="KE">Kenya</option>
                                                                        <option value="KI">Kiribati</option>
                                                                        <option value="KW">Kuwait</option>
                                                                        <option value="KG">Kyrgyzstan</option>
                                                                        <option value="LA">Laos</option>
                                                                        <option value="LV">Latvia</option>
                                                                        <option value="LB">Lebanon</option>
                                                                        <option value="LS">Lesotho</option>
                                                                        <option value="LR">Liberia</option>
                                                                        <option value="LY">Libya</option>
                                                                        <option value="LI">Liechtenstein</option>
                                                                        <option value="LT">Lithuania</option>
                                                                        <option value="LU">Luxembourg</option>
                                                                        <option value="MO">Macao S.A.R., China</option>
                                                                        <option value="MK">Macedonia</option>
                                                                        <option value="MG">Madagascar</option>
                                                                        <option value="MW">Malawi</option>
                                                                        <option value="MY">Malaysia</option>
                                                                        <option value="MV">Maldives</option>
                                                                        <option value="ML">Mali</option>
                                                                        <option value="MT">Malta</option>
                                                                        <option value="MH">Marshall Islands</option>
                                                                        <option value="MQ">Martinique</option>
                                                                        <option value="MR">Mauritania</option>
                                                                        <option value="MU">Mauritius</option>
                                                                        <option value="YT">Mayotte</option>
                                                                        <option value="MX">Mexico</option>
                                                                        <option value="FM">Micronesia</option>
                                                                        <option value="MD">Moldova</option>
                                                                        <option value="MC">Monaco</option>
                                                                        <option value="MN">Mongolia</option>
                                                                        <option value="ME">Montenegro</option>
                                                                        <option value="MS">Montserrat</option>
                                                                        <option value="MA">Morocco</option>
                                                                        <option value="MZ">Mozambique</option>
                                                                        <option value="MM">Myanmar</option>
                                                                        <option value="NA">Namibia</option>
                                                                        <option value="NR">Nauru</option>
                                                                        <option value="NP">Nepal</option>
                                                                        <option value="NL">Netherlands</option>
                                                                        <option value="NC">New Caledonia</option>
                                                                        <option value="NZ">New Zealand</option>
                                                                        <option value="NI">Nicaragua</option>
                                                                        <option value="NE">Niger</option>
                                                                        <option value="NG">Nigeria</option>
                                                                        <option value="NU">Niue</option>
                                                                        <option value="NF">Norfolk Island</option>
                                                                        <option value="KP">North Korea</option>
                                                                        <option value="MP">Northern Mariana Islands</option>
                                                                        <option value="NO">Norway</option>
                                                                        <option value="OM">Oman</option>
                                                                        <option value="PK">Pakistan</option>
                                                                        <option value="PS">Palestinian Territory</option>
                                                                        <option value="PA">Panama</option>
                                                                        <option value="PG">Papua New Guinea</option>
                                                                        <option value="PY">Paraguay</option>
                                                                        <option value="PE">Peru</option>
                                                                        <option value="PH">Philippines</option>
                                                                        <option value="PN">Pitcairn</option>
                                                                        <option value="PL">Poland</option>
                                                                        <option value="PT">Portugal</option>
                                                                        <option value="PR">Puerto Rico</option>
                                                                        <option value="QA">Qatar</option>
                                                                        <option value="RE">Reunion</option>
                                                                        <option value="RO">Romania</option>
                                                                        <option value="RU">Russia</option>
                                                                        <option value="RW">Rwanda</option>
                                                                        <option value="ST">São Tomé and Príncipe</option>
                                                                        <option value="BL">Saint Barthélemy</option>
                                                                        <option value="SH">Saint Helena</option>
                                                                        <option value="KN">Saint Kitts and Nevis</option>
                                                                        <option value="LC">Saint Lucia</option>
                                                                        <option value="SX">Saint Martin (Dutch part)</option>
                                                                        <option value="MF">Saint Martin (French part)</option>
                                                                        <option value="PM">Saint Pierre and Miquelon</option>
                                                                        <option value="VC">Saint Vincent and the Grenadines</option>
                                                                        <option value="WS">Samoa</option>
                                                                        <option value="SM">San Marino</option>
                                                                        <option value="SA">Saudi Arabia</option>
                                                                        <option value="SN">Senegal</option>
                                                                        <option value="RS">Serbia</option>
                                                                        <option value="SC">Seychelles</option>
                                                                        <option value="SL">Sierra Leone</option>
                                                                        <option value="SG">Singapore</option>
                                                                        <option value="SK">Slovakia</option>
                                                                        <option value="SI">Slovenia</option>
                                                                        <option value="SB">Solomon Islands</option>
                                                                        <option value="SO">Somalia</option>
                                                                        <option value="ZA">South Africa</option>
                                                                        <option value="GS">South Georgia/Sandwich Islands</option>
                                                                        <option value="KR">South Korea</option>
                                                                        <option value="SS">South Sudan</option>
                                                                        <option value="ES">Spain</option>
                                                                        <option value="LK">Sri Lanka</option>
                                                                        <option value="SD">Sudan</option>
                                                                        <option value="SR">Suriname</option>
                                                                        <option value="SJ">Svalbard and Jan Mayen</option>
                                                                        <option value="SZ">Swaziland</option>
                                                                        <option value="SE">Sweden</option>
                                                                        <option value="CH">Switzerland</option>
                                                                        <option value="SY">Syria</option>
                                                                        <option value="TW">Taiwan</option>
                                                                        <option value="TJ">Tajikistan</option>
                                                                        <option value="TZ">Tanzania</option>
                                                                        <option value="TH">Thailand</option>
                                                                        <option value="TL">Timor-Leste</option>
                                                                        <option value="TG">Togo</option>
                                                                        <option value="TK">Tokelau</option>
                                                                        <option value="TO">Tonga</option>
                                                                        <option value="TT">Trinidad and Tobago</option>
                                                                        <option value="TN">Tunisia</option>
                                                                        <option value="TR">Turkey</option>
                                                                        <option value="TM">Turkmenistan</option>
                                                                        <option value="TC">Turks and Caicos Islands</option>
                                                                        <option value="TV">Tuvalu</option>
                                                                        <option value="UG">Uganda</option>
                                                                        <option value="UA">Ukraine</option>
                                                                        <option value="AE">United Arab Emirates</option>
                                                                        <option value="GB">United Kingdom (UK)</option>
                                                                        <option value="US">United States (US)</option>
                                                                        <option value="UM">United States (US) Minor Outlying Islands</option>
                                                                        <option value="VI">United States (US) Virgin Islands</option>
                                                                        <option value="UY">Uruguay</option>
                                                                        <option value="UZ">Uzbekistan</option>
                                                                        <option value="VU">Vanuatu</option>
                                                                        <option value="VA">Vatican</option>
                                                                        <option value="VE">Venezuela</option>
                                                                        <option value="VN" selected="selected">Vietnam</option>
                                                                        <option value="WF">Wallis and Futuna</option>
                                                                        <option value="EH">Western Sahara</option>
                                                                        <option value="YE">Yemen</option>
                                                                        <option value="ZM">Zambia</option>
                                                                        <option value="ZW">Zimbabwe</option>
                                                                    </select>
                                                                </p>
                                                                <p class="form-row form-row-wide" id="calc_shipping_state_field" style="display: none;">
                                                                    <input type="hidden" class="hidden" name="calc_shipping_state" id="calc_shipping_state" value="" placeholder="State / County">
                                                                </p>
                                                                <p class="form-row form-row-wide validate-required" id="calc_shipping_city_field">
                                                                    <input type="text" class="input-text" value="" placeholder="Town / City" name="calc_shipping_city" id="calc_shipping_city">
                                                                </p>
                                                                <p class="form-row form-row-wide" id="calc_shipping_postcode_field">
                                                                    <input type="text" class="input-text" value="" placeholder="Postcode / ZIP" name="calc_shipping_postcode" id="calc_shipping_postcode">
                                                                </p>
                                                                <p><button type="submit" name="calc_shipping" value="1" class="button">Update totals</button></p>
                                                                <input type="hidden" id="woocommerce-shipping-calculator-nonce" name="woocommerce-shipping-calculator-nonce" value="2e5393591c"><input type="hidden" name="_wp_http_referer" value="/creta/cart/">
                                                            </section>
                                                        </td>
                                                    </tr>
                                                    <tr class="order-total">
                                                        <th>Total</th>
                                                        <td data-title="Total"><strong><span class="woocs_special_price_code"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>120.98</span></span></strong> </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <div class="wc-proceed-to-checkout">
                                                    <a href="#" class="button btn-proceed-checkout">
                                                        <span>Proceed to Checkout</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- .entry-content -->
        </div>
    </div>
</div>
