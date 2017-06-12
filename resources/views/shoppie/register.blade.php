@extends('layouts.layout')
@section('content')
<section class="page-content">

<div class="page-block page-block-top light-bg grid-container">
<div class="breadcrumbs grid-100 middle-color">
<a href="homepage.html" class="dark-color active-hover">Home</a>
<strong class="active-color">Register account</strong>
</div>
</div>

<div class="page-block page-block-bottom cream-bg grid-container">
<div class="sidebar-shadow push-25"></div>

<div class="sidebar grid-25 cream-gradient transition-all" id="sidebar-mobile">

<div class="sidebar-box sidebar-top cream-gradient">
<nav class="submenu">
<ul class="expandable-menu">
<li class="align-right back">
<a href="#sidebar-mobile" class="dark-color active-hover click-slide"><i class="icon-chevron-right"></i></a>
</li>
<li>
<a href="register.html" class="dark-color active-hover selected">Register account</a>
</li>
<li class="sidebar-divider"></li>
<li>
<a href="forgotten.html" class="dark-color active-hover">Forgotten password</a>
</li>
<li class="sidebar-divider"></li>
<li>
<a href="my-account.html" class="dark-color active-hover">My account</a>
</li>
<li class="sidebar-divider"></li>
<li>
<a href="wishlist.html" class="dark-color active-hover">Wish list</a>
</li>
<li class="sidebar-divider"></li>
<li>
<a href="my-account.html" class="dark-color active-hover">Order history</a>
</li>
<li class="sidebar-divider"></li>
<li>
<a href="my-account.html" class="dark-color active-hover">Downloads</a>
</li>
<li class="sidebar-divider"></li>
<li>
<a href="my-account.html" class="dark-color active-hover">Returns</a>
</li>
<li class="sidebar-divider"></li>
<li>
<a href="my-account.html" class="dark-color active-hover">Transactions</a>
</li>
<li class="sidebar-divider"></li>
<li>
<a href="my-account.html" class="dark-color active-hover">Newsletter</a>
</li>
</ul>
</nav>
</div>
</div>

<div class="content-with-sidebar grid-75">
<p>If you already have an account with us, please login at the <a href="log-in.html" class="active-color dark-hover"><strong>login page</strong></a></p>
<form class="content-form margin-bottom" action="#" method="POST">
<div class="with-shadow grid-100 light-bg margin-bottom clearfix">
<div class="content-page grid-100">
<h2 class="bigger-header with-border subheader-font">
Your personal details
</h2>
<div class="form-input">
<label for="first_name" class="middle-color">First name <span class="active-color">*</span></label>
<input type="text" class="text-input dark-color light-bg" name="first_name" id="first_name" value=""/>
</div>
<div class="form-input">
<label for="last_name" class="middle-color">Last name <span class="active-color">*</span></label>
<input type="text" class="text-input dark-color light-bg" name="last_name" id="last_name" value=""/>
</div>
<div class="form-input">
<label for="email" class="middle-color">E-mail <span class="active-color">*</span></label>
<input type="email" class="text-input dark-color light-bg" name="email" id="email" value=""/>
</div>
<div class="form-input">
<label for="phone" class="middle-color">Telephone <span class="active-color">*</span></label>
<input type="tel" class="text-input dark-color light-bg" name="phone" id="phone" value=""/>
</div>
<div class="form-input">
<label for="mobile" class="middle-color">Mobile</label>
<input type="tel" class="text-input dark-color light-bg" name="mobile" id="mobile" value=""/>
</div>
</div>
</div>
<div class="with-shadow grid-100 light-bg margin-bottom clearfix">
<div class="content-page grid-100">
<h2 class="bigger-header with-border subheader-font">
Your adress
</h2>
<div class="form-input">
<label for="company" class="middle-color">Company</label>
<input type="text" class="text-input dark-color light-bg" name="company" id="company" value=""/>
</div>
<div class="form-input">
<label for="street" class="middle-color">Street <span class="active-color">*</span></label>
<input type="text" class="text-input dark-color light-bg" name="street" id="street" value=""/>
</div>
<div class="form-input">
<label for="city" class="middle-color">City <span class="active-color">*</span></label>
<input type="text" class="text-input dark-color light-bg" name="city" id="city" value=""/>
</div>
<div class="form-input">
<label for="post_code" class="middle-color">Post code <span class="active-color">*</span></label>
<input type="text" class="text-input dark-color light-bg" name="post_code" id="post_code" value=""/>
</div>
<div class="form-input">
<label for="country" class="middle-color">Country <span class="active-color">*</span></label>
<div class="custom-selectbox dark-color light-gradient active-hover">
<select name="country" id="country">
<option value="">-- Please select --</option>
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
<option value="">-- Please select --</option>
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
</div>
</div>
<div class="with-shadow grid-100 light-bg margin-bottom clearfix">
<div class="content-page grid-100">
<h2 class="bigger-header with-border subheader-font">
Your password
</h2>
<div class="form-input">
<label for="password" class="middle-color">Password <span class="active-color">*</span></label>
<input type="password" class="text-input dark-color light-bg" name="password" id="password" value=""/>
</div>
<div class="form-input">
<label for="confirm_password" class="middle-color">Confirm password <span class="active-color">*</span></label>
<input type="password" class="text-input dark-color light-bg" name="confirm_password" id="confirm_password" value=""/>
</div>
</div>
</div>
<div class="with-shadow grid-100 light-bg margin-bottom clearfix">
<div class="content-page grid-100">
<h2 class="bigger-header with-border subheader-font">
Newsletter
</h2>
<div class="form-input">
<label class="middle-color">Subscribe</label>
<span class="input-radio-group">
<input type="radio" name="subscribe" id="subscribe_yes" value="yes" checked="checked"/>
<label for="subscribe_yes" class="active-hover">Yes</label>
<input type="radio" name="subscribe" id="subscribe_no" value="no"/>
<label for="subscribe_no" class="active-hover">No</label>
</span>
</div>
</div>
</div>
<p class="align-center middle-color">I have read and agree to the <a href="#" class="active-color dark-hover"><strong>Privacy Policy</strong></a></p>
<div class="form-submit">
<button type="submit" class="button-normal uppercase light-color middle-gradient dark-gradient-hover">Create new account</button>
</div>
</form>
</div>
</div>
</section>
@stop
