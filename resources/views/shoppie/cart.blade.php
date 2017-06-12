@extends('layouts.layout')
@section('content')
<section class="page-content">

<div class="page-block page-block-top light-bg grid-container">
<div class="breadcrumbs grid-100 middle-color">
<a href="homepage.html" class="dark-color active-hover">Home</a>
<strong class="active-color">Shopping cart</strong>
</div>
</div>

<div class="page-block page-block-bottom cream-bg grid-container">

<div class="content-holder grid-100">
<div class="cart-header well-shadow well-table light-bg margin-bottom hide-on-mobile">
<div class="well-box-middle grid-60 tablet-grid-60">Product name</div>
<div class="well-box-middle align-center grid-10 tablet-grid-10">Quantity</div>
<div class="well-box-middle align-center grid-15 tablet-grid-15">Unit Price</div>
<div class="well-box-middle align-center last grid-15 tablet-grid-15 active-color">Total Price</div>
</div>
<div class="cart-product-list well-shadow">

<div class="cart-product well-table light-bg">
<div class="well-box-middle cart-product-image align-center grid-10 tablet-grid-10">
<a href="products-detail.html" title="Tommy Mancini">
<img src="images/photos/img-cart-dummy.jpg" alt=""/>
</a>
</div>
<div class="well-box-middle well-border-gradient grid-50 tablet-grid-50">
<div class="cart-product-info">
<div class="cart-product-title">
<a href="products-detail.html" title="Tommy Mancini" class="header-font dark-color active-hover"><strong>Tommy Mancini</strong></a>
<a href="products-grid.html" title="Women’s Suit Jacket" class="cart-product-category middle-color dark-hover">Women’s Suit Jacket</a>
</div>
<div class="cart-product-options">
<label for="product-color1" class="dark-color">Color</label>
<div class="custom-selectbox dark-color light-gradient active-hover">
<select name="product-color[]" id="product-color1">
<option value="Brown">Brown</option>
<option value="Blue">Blue</option>
<option value="Green">Green</option>
<option value="Yellow">Yellow</option>
<option value="Magenta" selected="selected">Magenta</option>
<option value="Cyan">Cyan</option>
<option value="Black">Black</option>
<option value="White">White</option>
<option value="Red">Red</option>
</select>
</div>
<label for="product-size1" class="dark-color">Size</label>
<div class="custom-selectbox dark-color light-gradient active-hover">
<select name="product-size[]" id="product-size1">
<option value="XS">XS</option>
<option value="S">S</option>
<option value="M">M</option>
<option value="L">L</option>
<option value="XL" selected="selected">XL</option>
<option value="XXL">XXL</option>
</select>
</div>
</div>
</div>
</div>
<div class="well-box-middle well-border-gradient align-center grid-10 tablet-grid-10">
<input type="text" name="product-quantity[]" class="text-input product-quantity dark-color light-bg" value="3" onclick="$(this).select()">
</div>
<div class="well-box-middle well-border-gradient align-center grid-15 tablet-grid-15 middle-color">
<strong>85,40 €</strong>
</div>
<div class="well-box-middle align-center last grid-15 tablet-grid-15 active-color">
<strong>256,20 €</strong>
</div>
<a class="cart-product-remove circle-button dark-bg active-bg-hover hide-on-desktop" href="#"><span class="cancel"></span></a>
</div>

<div class="cart-product well-table light-bg">
<div class="well-box-middle cart-product-image align-center grid-10 tablet-grid-10">
<a href="products-detail.html" title="Tommy Mancini">
<img src="images/photos/img-cart-dummy.jpg" alt=""/>
</a>
</div>
<div class="well-box-middle well-border-gradient grid-50 tablet-grid-50">
<div class="cart-product-info">
<div class="cart-product-title">
<a href="products-detail.html" title="Tommy Mancini" class="header-font dark-color active-hover"><strong>Tommy Mancini</strong></a>
<a href="products-grid.html" title="Women’s Suit Jacket" class="cart-product-category middle-color dark-hover">Women’s Suit Jacket</a>
</div>
<div class="cart-product-options">
<label for="product-color2" class="dark-color">Color</label>
<div class="custom-selectbox dark-color light-gradient active-hover">
<select name="product-color[]" id="product-color2">
<option value="Brown">Brown</option>
<option value="Blue">Blue</option>
<option value="Green">Green</option>
<option value="Yellow">Yellow</option>
<option value="Magenta" selected="selected">Magenta</option>
<option value="Cyan">Cyan</option>
<option value="Black">Black</option>
<option value="White">White</option>
<option value="Red">Red</option>
</select>
</div>
<label for="product-size2" class="dark-color">Size</label>
<div class="custom-selectbox dark-color light-gradient active-hover">
<select name="product-size[]" id="product-size2">
<option value="XS">XS</option>
<option value="S">S</option>
<option value="M">M</option>
<option value="L">L</option>
<option value="XL" selected="selected">XL</option>
<option value="XXL">XXL</option>
</select>
</div>
</div>
</div>
</div>
<div class="well-box-middle well-border-gradient align-center grid-10 tablet-grid-10">
<input type="text" name="product-quantity[]" class="text-input product-quantity dark-color light-bg" value="1" onclick="$(this).select()">
</div>
<div class="well-box-middle well-border-gradient align-center grid-15 tablet-grid-15 middle-color">
<strong>85,40 €</strong>
</div>
<div class="well-box-middle align-center last grid-15 tablet-grid-15 active-color">
<strong>85,40 €</strong>
</div>
<a class="cart-product-remove circle-button dark-bg active-bg-hover hide-on-desktop" href="#"><span class="cancel"></span></a>
</div>

<div class="cart-product well-table light-bg">
<div class="well-box-middle cart-product-image align-center grid-10 tablet-grid-10">
<a href="products-detail.html" title="Tommy Mancini">
<img src="images/photos/img-cart-dummy.jpg" alt=""/>
</a>
</div>
<div class="well-box-middle well-border-gradient grid-50 tablet-grid-50">
<div class="cart-product-info">
<div class="cart-product-title">
<a href="products-detail.html" title="Tommy Mancini" class="header-font dark-color active-hover"><strong>Tommy Mancini</strong></a>
<a href="products-grid.html" title="Women’s Suit Jacket" class="cart-product-category middle-color dark-hover">Women’s Suit Jacket</a>
</div>
<div class="cart-product-options">
<label for="product-color3" class="dark-color">Color</label>
<div class="custom-selectbox dark-color light-gradient active-hover">
<select name="product-color[]" id="product-color3">
<option value="Brown">Brown</option>
<option value="Blue">Blue</option>
<option value="Green">Green</option>
<option value="Yellow">Yellow</option>
<option value="Magenta" selected="selected">Magenta</option>
<option value="Cyan">Cyan</option>
<option value="Black">Black</option>
<option value="White">White</option>
<option value="Red">Red</option>
</select>
</div>
<label for="product-size3" class="dark-color">Size</label>
<div class="custom-selectbox dark-color light-gradient active-hover">
<select name="product-size[]" id="product-size3">
<option value="XS">XS</option>
<option value="S">S</option>
<option value="M">M</option>
<option value="L">L</option>
<option value="XL" selected="selected">XL</option>
<option value="XXL">XXL</option>
</select>
</div>
</div>
</div>
</div>
<div class="well-box-middle well-border-gradient align-center grid-10 tablet-grid-10">
<input type="text" name="product-quantity[]" class="text-input product-quantity dark-color light-bg" value="15" onclick="$(this).select()">
</div>
<div class="well-box-middle well-border-gradient align-center grid-15 tablet-grid-15 middle-color">
<strong>85,40 €</strong>
</div>
<div class="well-box-middle align-center last grid-15 tablet-grid-15 active-color">
<strong>1 281,00 €</strong>
</div>
<a class="cart-product-remove circle-button dark-bg active-bg-hover hide-on-desktop" href="#"><span class="cancel"></span></a>
</div>

<div class="cart-product well-table light-bg">
<div class="well-box-middle cart-product-image align-center grid-10 tablet-grid-10">
<a href="products-detail.html" title="Tommy Mancini">
<img src="images/photos/img-cart-dummy.jpg" alt=""/>
</a>
</div>
<div class="well-box-middle well-border-gradient grid-50 tablet-grid-50">
<div class="cart-product-info">
<div class="cart-product-title">
<a href="products-detail.html" title="Tommy Mancini" class="header-font dark-color active-hover"><strong>Tommy Mancini</strong></a>
<a href="products-grid.html" title="Women’s Suit Jacket" class="cart-product-category middle-color dark-hover">Women’s Suit Jacket</a>
</div>
<div class="cart-product-options">
<label for="product-color4" class="dark-color">Color</label>
<div class="custom-selectbox dark-color light-gradient active-hover">
<select name="product-color[]" id="product-color4">
<option value="Brown">Brown</option>
<option value="Blue">Blue</option>
<option value="Green">Green</option>
<option value="Yellow">Yellow</option>
<option value="Magenta" selected="selected">Magenta</option>
<option value="Cyan">Cyan</option>
<option value="Black">Black</option>
<option value="White">White</option>
<option value="Red">Red</option>
</select>
</div>
<label for="product-size4" class="dark-color">Size</label>
<div class="custom-selectbox dark-color light-gradient active-hover">
<select name="product-size[]" id="product-size4">
<option value="XS">XS</option>
<option value="S">S</option>
<option value="M">M</option>
<option value="L">L</option>
<option value="XL" selected="selected">XL</option>
<option value="XXL">XXL</option>
</select>
</div>
</div>
</div>
</div>
<div class="well-box-middle well-border-gradient align-center grid-10 tablet-grid-10">
<input type="text" name="product-quantity[]" class="text-input product-quantity dark-color light-bg" value="3" onclick="$(this).select()">
</div>
<div class="well-box-middle well-border-gradient align-center grid-15 tablet-grid-15 middle-color">
<strong>85,40 €</strong>
</div>
<div class="well-box-middle align-center last grid-15 tablet-grid-15 active-color">
<strong>256,20 €</strong>
</div>
<a class="cart-product-remove circle-button dark-bg active-bg-hover hide-on-desktop" href="#"><span class="cancel"></span></a>
</div>

<div class="cart-product well-table light-bg last">
<div class="well-box-middle cart-product-image align-center grid-10 tablet-grid-10">
<a href="products-detail.html" title="Tommy Mancini">
<img src="images/photos/img-cart-dummy.jpg" alt=""/>
</a>
</div>
<div class="well-box-middle well-border-gradient grid-50 tablet-grid-50">
<div class="cart-product-info">
<div class="cart-product-title">
<a href="products-detail.html" title="Tommy Mancini" class="header-font dark-color active-hover"><strong>Tommy Mancini</strong></a>
<a href="products-grid.html" title="Women’s Suit Jacket" class="cart-product-category middle-color dark-hover">Women’s Suit Jacket</a>
</div>
<div class="cart-product-options">
<label for="product-color5" class="dark-color">Color</label>
<div class="custom-selectbox dark-color light-gradient active-hover">
<select name="product-color[]" id="product-color5">
<option value="Brown">Brown</option>
<option value="Blue">Blue</option>
<option value="Green">Green</option>
<option value="Yellow">Yellow</option>
<option value="Magenta" selected="selected">Magenta</option>
<option value="Cyan">Cyan</option>
<option value="Black">Black</option>
<option value="White">White</option>
<option value="Red">Red</option>
</select>
</div>
<label for="product-size5" class="dark-color">Size</label>
<div class="custom-selectbox dark-color light-gradient active-hover">
<select name="product-size[]" id="product-size5">
<option value="XS">XS</option>
<option value="S">S</option>
<option value="M">M</option>
<option value="L">L</option>
<option value="XL" selected="selected">XL</option>
<option value="XXL">XXL</option>
</select>
</div>
</div>
</div>
</div>
<div class="well-box-middle well-border-gradient align-center grid-10 tablet-grid-10">
<input type="text" name="product-quantity[]" class="text-input product-quantity dark-color light-bg" value="10" onclick="$(this).select()">
</div>
<div class="well-box-middle well-border-gradient align-center grid-15 tablet-grid-15 middle-color">
<strong>85,40 €</strong>
</div>
<div class="well-box-middle align-center last grid-15 tablet-grid-15 active-color">
<strong>854,00 €</strong>
</div>
<a class="cart-product-remove circle-button dark-bg active-bg-hover hide-on-desktop" href="#"><span class="cancel"></span></a>
</div>
</div>
</div>
<div class="grid-100 grid-parent margin-bottom clearfix">
<div class="grid-55 tablet-grid-55 cart-shipping margin-bottom">
<div class="well-shadow well-box last light-bg">
<div class="sidebar-shadow push-40 tablet-push-40"></div>
<div class="sidebar grid-40 tablet-grid-40">

<div class="sidebar-box sidebar-top">
<nav class="submenu shoppie-tabs">
<ul>
<li>
<a href="#tab-shipping" class="dark-color active-hover selected">Estimate Shipping & Taxe</a>
</li>
<li class="sidebar-divider"></li>
<li>
<a href="#tab-voucher" class="dark-color active-hover">Use Gift Voucher</a>
</li>
<li class="sidebar-divider"></li>
<li>
<a href="#tab-coupon" class="dark-color active-hover">Use Coupon Code</a>
</li>
</ul>
</nav>
</div>
</div>
<div class="grid-60 tablet-grid-60 no-right-padding">

<div id="tab-shipping">
<p class="middle-color">Enter destination to get a shipping estimate</p>
<form class="content-form" action="#" method="POST">
<div class="form-input">
<label for="country" class="middle-color">Country <span class="active-color">*</span></label>
<div class="custom-selectbox dark-color light-gradient active-hover">
<select name="country" id="country">
<option value="">-- Select --</option>
<option value="Afghanistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antarctica">Antarctica</option>
<option value="Antigua and Barbuda">Antigua and Barbuda</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Aruba">Aruba</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermuda">Bermuda</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
<option value="Botswana">Botswana</option>
<option value="Bouvet Island">Bouvet Island</option>
<option value="Brazil">Brazil</option>
<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
<option value="Brunei Darussalam">Brunei Darussalam</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cote D'ivoire">Cote D'ivoire</option>
<option value="Croatia">Croatia</option>
<option value="Cuba">Cuba</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
<option value="French Southern Territories">French Southern Territories</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guinea-bissau">Guinea-bissau</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
<option value="Korea, Republic of">Korea, Republic of</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macao">Macao</option>
<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
<option value="Madagascar">Madagascar</option>
<option value="Malawi">Malawi</option>
<option value="Malaysia">Malaysia</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
<option value="Moldova, Republic of">Moldova, Republic of</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Namibia">Namibia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherlands">Netherlands</option>
<option value="Netherlands Antilles">Netherlands Antilles</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="Northern Mariana Islands">Northern Mariana Islands</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau">Palau</option>
<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Philippines">Philippines</option>
<option value="Pitcairn">Pitcairn</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Reunion">Reunion</option>
<option value="Romania">Romania</option>
<option value="Russian Federation">Russian Federation</option>
<option value="Rwanda">Rwanda</option>
<option value="Saint Helena">Saint Helena</option>
<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
<option value="Saint Lucia">Saint Lucia</option>
<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
<option value="Samoa">Samoa</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome and Principe">Sao Tome and Principe</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Serbia and Montenegro">Serbia and Montenegro</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syrian Arab Republic">Syrian Arab Republic</option>
<option value="Taiwan, Province of China">Taiwan, Province of China</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
<option value="Thailand">Thailand</option>
<option value="Timor-leste">Timor-leste</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad and Tobago">Trinidad and Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Emirates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States">United States</option>
<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
<option value="Uruguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Venezuela">Venezuela</option>
<option value="Viet Nam">Viet Nam</option>
<option value="Virgin Islands, British">Virgin Islands, British</option>
<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
<option value="Wallis and Futuna">Wallis and Futuna</option>
<option value="Western Sahara">Western Sahara</option>
<option value="Yemen">Yemen</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
</select>
</div>
</div>
<div class="form-input">
<label for="region" class="middle-color">Region / State</label>
<div class="custom-selectbox dark-color light-gradient active-hover">
<select name="region" id="region">
<option value="">-- Select --</option>
<option value="AL">AL - Alabama</option>
<option value="AK">AK - Alaska</option>
<option value="AP">AP - Armed Forces Pacific</option>
<option value="AE">AE - Armed Forces Europe</option>
<option value="AA">AA - Armed Forces America</option>
<option value="AZ">AZ - Arizona</option>
<option value="AR">AR - Arkansas</option>
<option value="CA">CA - California</option>
<option value="CO">CO - Colorado</option>
<option value="CT">CT - Connecticut</option>
<option value="DC">DC - Washington D.C.</option>
<option value="DE">DE - Delaware</option>
<option value="FL">FL - Florida</option>
<option value="GA">GA - Georgia</option>
<option value="GU">GU - Guam</option>
<option value="HI">HI - Hawaii</option>
<option value="ID">ID - Idaho</option>
<option value="IL">IL - Illinois</option>
<option value="IN">IN - Indiana</option>
<option value="IA">IA - Iowa</option>
<option value="KS">KS - Kansas</option>
<option value="KY">KY - Kentucky</option>
<option value="LA">LA - Louisiana</option>
<option value="ME">ME - Maine</option>
<option value="MD">MD - Maryland</option>
<option value="MA">MA - Massachusetts</option>
<option value="MI">MI - Michigan</option>
<option value="MN">MN - Minnesota</option>
<option value="MS">MS - Mississippi</option>
<option value="MO">MO - Missouri</option>
<option value="MT">MT - Montana</option>
<option value="NE">NE - Nebraska</option>
<option value="NV">NV - Nevada</option>
<option value="NH">NH - New Hampshire</option>
<option value="NJ">NJ - New Jersey</option>
<option value="NM">NM - New Mexico</option>
<option value="NY">NY - New York</option>
<option value="NC">NC - North Carolina</option>
<option value="ND">ND - North Dakota</option>
<option value="OH">OH - Ohio</option>
<option value="OK">OK - Oklahoma</option>
<option value="OR">OR - Oregon</option>
<option value="PA">PA - Pennsylvania</option>
<option value="RI">RI - Rhode Island</option>
<option value="SC">SC - South Carolina</option>
<option value="SD">SD - South Dakota</option>
<option value="TN">TN - Tennessee</option>
<option value="TX">TX - Texas</option>
<option value="UT">UT - Utah</option>
<option value="VT">VT - Vermont</option>
<option value="VA">VA - Virginia</option>
<option value="VI">VI - Virgin Islands</option>
<option value="WA">WA - Washington</option>
<option value="WV">WV - West Virginia</option>
<option value="WI">WI - Wisconsin</option>
<option value="WY">WY - Wyoming</option>
</select>
</div>
</div>
<div class="form-input">
<label for="post_code" class="middle-color">Post code <span class="active-color">*</span></label>
<input type="text" class="text-input dark-color light-bg" name="post_code" id="post_code" value=""/>
</div>
<div class="align-right">
<button class="button-normal light-color middle-gradient dark-gradient-hover" type="submit">Get Quotes</button>
</div>
</form>
</div>

<div id="tab-voucher">
<p class="middle-color">Enter your voucher code to get discount</p>
<form class="content-form" action="#" method="POST">
<div class="form-input">
<label for="voucher_code" class="middle-color">Voucher code<span class="active-color">*</span></label>
<input type="text" class="text-input dark-color light-bg" name="voucher_code" id="voucher_code" value=""/>
</div>
<div class="align-right">
<button class="button-normal light-color middle-gradient dark-gradient-hover" type="submit">Use voucher</button>
</div>
</form>
</div>

<div id="tab-coupon">
<p class="middle-color">Enter your coupon code to get discount</p>
<form class="content-form" action="#" method="POST">
<div class="form-input">
<label for="coupon_code" class="middle-color">Coupon code <span class="active-color">*</span></label>
<input type="text" class="text-input dark-color light-bg" name="coupon_code" id="coupon_code" value=""/>
</div>
<div class="form-input">
<label for="coupon_source" class="middle-color">Coupon type</label>
<div class="custom-selectbox dark-color light-gradient active-hover">
<select name="coupon_source" id="coupon_source">
<option value="">-- Select --</option>
<option value="product">Product discount</option>
<option value="cart">Cart discount</option>
<option value="shipping">Shipping discount</option>
<option value="gift">Gift coupon</option>
</select>
</div>
</div>
<div class="align-right">
<button class="button-normal light-color middle-gradient dark-gradient-hover" type="submit">Use coupon</button>
</div>
</form>
</div>
</div>
</div>
</div>
<div class="grid-45 tablet-grid-45">
<div class="well-shadow well-box last light-bg align-right">
<dl class="cart-sub-total middle-color clearfix">
<dt class="uppercase">Sub total:</dt>
<dd>1 600,00 &euro;</dd>
<dt class="uppercase">Eco tax (-8,00):</dt>
<dd>8,00 &euro;</dd>
<dt class="uppercase">Vatt (10,0 %):</dt>
<dd>100,00 &euro;</dd>
</dl>
<dl class="cart-total clearfix">
<dt class="uppercase dark-color">Total:</dt>
<dd class="active-color">1 708,00 &euro;</dd>
</dl>
<a href="checkout-step-1.html" class="button-normal button-with-icon light-color active-gradient dark-gradient-hover">
Proceed to checkout <span><i class="icon-angle-right"></i></span>
</a>
</div>
</div>
</div>
</div>
</section>
@stop
