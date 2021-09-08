<!--Extend welcome.blade-->
@extends('frontEnd.welcome')
<!--Start Dynamic Title From welcome.blade-->
@section('title')
Checkout | IDB Shop
@endsection

<!--Start Dynamic Section From welcome.blade-->
@section('mainContent')
<!-- banner -->
<?php use App\Product;?>
<style>
    #bill_ship_form .sign-up input{
        color: black;
    }
</style>
<div class="page-head">
	<div class="container">
		<h3>Check Out</h3>
	</div>
</div>
<!-- //banner -->
<!-- check out -->
<div class="checkout">
        <div class="container">
            <h3>My Shopping Bag</h3>            
            <div class="row">
                <div class="col-md-8">
                    <div class="checkout-left">

                        <div class="checkout-left-basket animated wow slideInLeft" data-wow-delay=".5s">

                            <div class="login-grids">
                                <div class="login">
                                    <div class="login-bottom user-acount">
                                        <form action="" method="post" id="bill_ship_form">
                                          <div class="col-md-6">
                                           <input type="hidden" id="userId" value="{{Auth::user()->id}}">
                                           <input type="hidden" id="user_detail_id" value="">
                                            <h5 class="billing">Billing Address</h5>
                                            
                                            <div class="sign-up">
                                                <h5>First Name*</h5>
                                                <input type="text" id="b_first_name" value="" required="">
                                                <h5>Last Name*</h5>
                                                <input type="text" id="b_last_name" value="" required="">
                                            </div>
                                            <div class="sign-up">
                                                <h5>Company Name :</h5>
                                                <input type="text" id="b_company_name" value="" required="">
                                            </div>
                                            <div class="sign-up">
                                                <h5>Email :</h5>
                                                <input type="text" id="b_email" value="" required="">
                                            </div>
                                            <div class="sign-up">
                                                <h5>Phone :</h5>
                                                <input type="text" id="b_phone" value="" required="">
                                            </div>
                                            <div class="sign-up">
                                                <h5>Country :</h5>
                                                <select class="country" id="b_country" required="">
                                            <option value="AF">Afghanistan</option>
                                            <option value="AX">Åland Islands</option>
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
                                            <option value="BE">Belgium</option>
                                            <option value="BZ">Belize</option>
                                            <option value="BJ">Benin</option>
                                            <option value="BM">Bermuda</option>
                                            <option value="BT">Bhutan</option>
                                            <option value="BO">Bolivia, Plurinational State of</option>
                                            <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                            <option value="BA">Bosnia and Herzegovina</option>
                                            <option value="BW">Botswana</option>
                                            <option value="BV">Bouvet Island</option>
                                            <option value="BR">Brazil</option>
                                            <option value="IO">British Indian Ocean Territory</option>
                                            <option value="BN">Brunei Darussalam</option>
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
                                            <option value="CG">Congo</option>
                                            <option value="CD">Congo, the Democratic Republic of the</option>
                                            <option value="CK">Cook Islands</option>
                                            <option value="CR">Costa Rica</option>
                                            <option value="CI">Côte d'Ivoire</option>
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
                                            <option value="FK">Falkland Islands (Malvinas)</option>
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
                                            <option value="VA">Holy See (Vatican City State)</option>
                                            <option value="HN">Honduras</option>
                                            <option value="HK">Hong Kong</option>
                                            <option value="HU">Hungary</option>
                                            <option value="IS">Iceland</option>
                                            <option value="IN">India</option>
                                            <option value="ID">Indonesia</option>
                                            <option value="IR">Iran, Islamic Republic of</option>
                                            <option value="IQ">Iraq</option>
                                            <option value="IE">Ireland</option>
                                            <option value="IM">Isle of Man</option>
                                            <option value="IL">Israel</option>
                                            <option value="IT">Italy</option>
                                            <option value="JM">Jamaica</option>
                                            <option value="JP">Japan</option>
                                            <option value="JE">Jersey</option>
                                            <option value="JO">Jordan</option>
                                            <option value="KZ">Kazakhstan</option>
                                            <option value="KE">Kenya</option>
                                            <option value="KI">Kiribati</option>
                                            <option value="KP">Korea, Democratic People's Republic of</option>
                                            <option value="KR">Korea, Republic of</option>
                                            <option value="KW">Kuwait</option>
                                            <option value="KG">Kyrgyzstan</option>
                                            <option value="LA">Lao People's Democratic Republic</option>
                                            <option value="LV">Latvia</option>
                                            <option value="LB">Lebanon</option>
                                            <option value="LS">Lesotho</option>
                                            <option value="LR">Liberia</option>
                                            <option value="LY">Libya</option>
                                            <option value="LI">Liechtenstein</option>
                                            <option value="LT">Lithuania</option>
                                            <option value="LU">Luxembourg</option>
                                            <option value="MO">Macao</option>
                                            <option value="MK">Macedonia, the former Yugoslav Republic of</option>
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
                                            <option value="FM">Micronesia, Federated States of</option>
                                            <option value="MD">Moldova, Republic of</option>
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
                                            <option value="MP">Northern Mariana Islands</option>
                                            <option value="NO">Norway</option>
                                            <option value="OM">Oman</option>
                                            <option value="PK">Pakistan</option>
                                            <option value="PW">Palau</option>
                                            <option value="PS">Palestinian Territory, Occupied</option>
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
                                            <option value="RE">Réunion</option>
                                            <option value="RO">Romania</option>
                                            <option value="RU">Russian Federation</option>
                                            <option value="RW">Rwanda</option>
                                            <option value="BL">Saint Barthélemy</option>
                                            <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                            <option value="KN">Saint Kitts and Nevis</option>
                                            <option value="LC">Saint Lucia</option>
                                            <option value="MF">Saint Martin (French part)</option>
                                            <option value="PM">Saint Pierre and Miquelon</option>
                                            <option value="VC">Saint Vincent and the Grenadines</option>
                                            <option value="WS">Samoa</option>
                                            <option value="SM">San Marino</option>
                                            <option value="ST">Sao Tome and Principe</option>
                                            <option value="SA">Saudi Arabia</option>
                                            <option value="SN">Senegal</option>
                                            <option value="RS">Serbia</option>
                                            <option value="SC">Seychelles</option>
                                            <option value="SL">Sierra Leone</option>
                                            <option value="SG">Singapore</option>
                                            <option value="SX">Sint Maarten (Dutch part)</option>
                                            <option value="SK">Slovakia</option>
                                            <option value="SI">Slovenia</option>
                                            <option value="SB">Solomon Islands</option>
                                            <option value="SO">Somalia</option>
                                            <option value="ZA">South Africa</option>
                                            <option value="GS">South Georgia and the South Sandwich Islands</option>
                                            <option value="SS">South Sudan</option>
                                            <option value="ES">Spain</option>
                                            <option value="LK">Sri Lanka</option>
                                            <option value="SD">Sudan</option>
                                            <option value="SR">Suriname</option>
                                            <option value="SJ">Svalbard and Jan Mayen</option>
                                            <option value="SZ">Swaziland</option>
                                            <option value="SE">Sweden</option>
                                            <option value="CH">Switzerland</option>
                                            <option value="SY">Syrian Arab Republic</option>
                                            <option value="TW">Taiwan, Province of China</option>
                                            <option value="TJ">Tajikistan</option>
                                            <option value="TZ">Tanzania, United Republic of</option>
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
                                            <option value="GB">United Kingdom</option>
                                            <option value="US">United States</option>
                                            <option value="UM">United States Minor Outlying Islands</option>
                                            <option value="UY">Uruguay</option>
                                            <option value="UZ">Uzbekistan</option>
                                            <option value="VU">Vanuatu</option>
                                            <option value="VE">Venezuela, Bolivarian Republic of</option>
                                            <option value="VN">Viet Nam</option>
                                            <option value="VG">Virgin Islands, British</option>
                                            <option value="VI">Virgin Islands, U.S.</option>
                                            <option value="WF">Wallis and Futuna</option>
                                            <option value="EH">Western Sahara</option>
                                            <option value="YE">Yemen</option>
                                            <option value="ZM">Zambia</option>
                                            <option value="ZW">Zimbabwe</option>
                                        </select>

                                            </div>
                                            <div class="sign-up">
                                                <h5>Address 1 :</h5>
                                                <input type="text" id="b_address1" value="" required="">
                                            </div>
                                            <div class="sign-up">
                                                <h5>Address 2 :</h5>
                                                <input type="text" id="b_address2" value="" required="">
                                            </div>
                                            <div class="sign-up">
                                                <h5>City/Town :</h5>
                                                <input type="text" id="b_city" value="" required="">

                                            </div>
                                            <div class="sign-up">
                                                <h5>District :</h5>
                                                <input type="text" id="b_district" value="" required="">

                                            </div>
                                            <div class="sign-up">
                                                <h5>ZIP :</h5>
                                                <input type="text" id="b_zip" value="" required="">
                                            </div>
                                            
                                            <div class="sign-up">
                                                    <div class="input-group">                                           
                                                        <h5 id="shipForm" name="shipForm" style="color: darkcyan; font-weight:bold; cursor:pointer;"> Click Here For Your Shipping Address.</h5>
                                                    </div>
                                            </div>                                       
                                            
                                            
                                            <div id="shippingForm">
                                            
                                            <h5 class="shipping">Shipping Address</h5>
                                            
                                            <div class="sign-up">
                                                    <div class="input-group">                                           
                                                        <input type="checkbox" id="ship" name="ship"> <label for="ship" style="color: darkcyan;"> Use Billing Address As Shipping Address.</label>
                                                    </div>
                                            </div>
                                            
                                            <div class="sign-up">
                                                <h5>First Name*</h5>
                                                <input type="text" id="s_first_name" value="" required="">
                                                <h5>Last Name*</h5>
                                                <input type="text" id="s_last_name" value="" required="">
                                            </div>
                                            <div class="sign-up">
                                                <h5>Company Name :</h5>
                                                <input type="text" id="s_company_name" value="" required="">
                                            </div>
                                            <div class="sign-up">
                                                <h5>Email :</h5>
                                                <input type="text" id="s_email" value="" required="">
                                            </div>
                                            <div class="sign-up">
                                                <h5>Phone :</h5>
                                                <input type="text" id="s_phone" value="" required="">
                                            </div>
                                            <div class="sign-up">
                                                <h5>Country :</h5>
                                                <select class="country" id="s_country" required="">
                                            <option value="AF">Afghanistan</option>
                                            <option value="AX">Åland Islands</option>
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
                                            <option value="BE">Belgium</option>
                                            <option value="BZ">Belize</option>
                                            <option value="BJ">Benin</option>
                                            <option value="BM">Bermuda</option>
                                            <option value="BT">Bhutan</option>
                                            <option value="BO">Bolivia, Plurinational State of</option>
                                            <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                            <option value="BA">Bosnia and Herzegovina</option>
                                            <option value="BW">Botswana</option>
                                            <option value="BV">Bouvet Island</option>
                                            <option value="BR">Brazil</option>
                                            <option value="IO">British Indian Ocean Territory</option>
                                            <option value="BN">Brunei Darussalam</option>
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
                                            <option value="CG">Congo</option>
                                            <option value="CD">Congo, the Democratic Republic of the</option>
                                            <option value="CK">Cook Islands</option>
                                            <option value="CR">Costa Rica</option>
                                            <option value="CI">Côte d'Ivoire</option>
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
                                            <option value="FK">Falkland Islands (Malvinas)</option>
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
                                            <option value="VA">Holy See (Vatican City State)</option>
                                            <option value="HN">Honduras</option>
                                            <option value="HK">Hong Kong</option>
                                            <option value="HU">Hungary</option>
                                            <option value="IS">Iceland</option>
                                            <option value="IN">India</option>
                                            <option value="ID">Indonesia</option>
                                            <option value="IR">Iran, Islamic Republic of</option>
                                            <option value="IQ">Iraq</option>
                                            <option value="IE">Ireland</option>
                                            <option value="IM">Isle of Man</option>
                                            <option value="IL">Israel</option>
                                            <option value="IT">Italy</option>
                                            <option value="JM">Jamaica</option>
                                            <option value="JP">Japan</option>
                                            <option value="JE">Jersey</option>
                                            <option value="JO">Jordan</option>
                                            <option value="KZ">Kazakhstan</option>
                                            <option value="KE">Kenya</option>
                                            <option value="KI">Kiribati</option>
                                            <option value="KP">Korea, Democratic People's Republic of</option>
                                            <option value="KR">Korea, Republic of</option>
                                            <option value="KW">Kuwait</option>
                                            <option value="KG">Kyrgyzstan</option>
                                            <option value="LA">Lao People's Democratic Republic</option>
                                            <option value="LV">Latvia</option>
                                            <option value="LB">Lebanon</option>
                                            <option value="LS">Lesotho</option>
                                            <option value="LR">Liberia</option>
                                            <option value="LY">Libya</option>
                                            <option value="LI">Liechtenstein</option>
                                            <option value="LT">Lithuania</option>
                                            <option value="LU">Luxembourg</option>
                                            <option value="MO">Macao</option>
                                            <option value="MK">Macedonia, the former Yugoslav Republic of</option>
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
                                            <option value="FM">Micronesia, Federated States of</option>
                                            <option value="MD">Moldova, Republic of</option>
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
                                            <option value="MP">Northern Mariana Islands</option>
                                            <option value="NO">Norway</option>
                                            <option value="OM">Oman</option>
                                            <option value="PK">Pakistan</option>
                                            <option value="PW">Palau</option>
                                            <option value="PS">Palestinian Territory, Occupied</option>
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
                                            <option value="RE">Réunion</option>
                                            <option value="RO">Romania</option>
                                            <option value="RU">Russian Federation</option>
                                            <option value="RW">Rwanda</option>
                                            <option value="BL">Saint Barthélemy</option>
                                            <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                            <option value="KN">Saint Kitts and Nevis</option>
                                            <option value="LC">Saint Lucia</option>
                                            <option value="MF">Saint Martin (French part)</option>
                                            <option value="PM">Saint Pierre and Miquelon</option>
                                            <option value="VC">Saint Vincent and the Grenadines</option>
                                            <option value="WS">Samoa</option>
                                            <option value="SM">San Marino</option>
                                            <option value="ST">Sao Tome and Principe</option>
                                            <option value="SA">Saudi Arabia</option>
                                            <option value="SN">Senegal</option>
                                            <option value="RS">Serbia</option>
                                            <option value="SC">Seychelles</option>
                                            <option value="SL">Sierra Leone</option>
                                            <option value="SG">Singapore</option>
                                            <option value="SX">Sint Maarten (Dutch part)</option>
                                            <option value="SK">Slovakia</option>
                                            <option value="SI">Slovenia</option>
                                            <option value="SB">Solomon Islands</option>
                                            <option value="SO">Somalia</option>
                                            <option value="ZA">South Africa</option>
                                            <option value="GS">South Georgia and the South Sandwich Islands</option>
                                            <option value="SS">South Sudan</option>
                                            <option value="ES">Spain</option>
                                            <option value="LK">Sri Lanka</option>
                                            <option value="SD">Sudan</option>
                                            <option value="SR">Suriname</option>
                                            <option value="SJ">Svalbard and Jan Mayen</option>
                                            <option value="SZ">Swaziland</option>
                                            <option value="SE">Sweden</option>
                                            <option value="CH">Switzerland</option>
                                            <option value="SY">Syrian Arab Republic</option>
                                            <option value="TW">Taiwan, Province of China</option>
                                            <option value="TJ">Tajikistan</option>
                                            <option value="TZ">Tanzania, United Republic of</option>
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
                                            <option value="GB">United Kingdom</option>
                                            <option value="US">United States</option>
                                            <option value="UM">United States Minor Outlying Islands</option>
                                            <option value="UY">Uruguay</option>
                                            <option value="UZ">Uzbekistan</option>
                                            <option value="VU">Vanuatu</option>
                                            <option value="VE">Venezuela, Bolivarian Republic of</option>
                                            <option value="VN">Viet Nam</option>
                                            <option value="VG">Virgin Islands, British</option>
                                            <option value="VI">Virgin Islands, U.S.</option>
                                            <option value="WF">Wallis and Futuna</option>
                                            <option value="EH">Western Sahara</option>
                                            <option value="YE">Yemen</option>
                                            <option value="ZM">Zambia</option>
                                            <option value="ZW">Zimbabwe</option>
                                        </select>

                                            </div>
                                            <div class="sign-up">
                                                <h5>Address 1 :</h5>
                                                <input type="text" id="s_address1" value="" required="">
                                            </div>
                                            <div class="sign-up">
                                                <h5>Address 2 :</h5>
                                                <input type="text" id="s_address2" value="" required="">
                                            </div>
                                            <div class="sign-up">
                                                <h5>City/Town :</h5>
                                                <input type="text" id="s_city" value="" required="">

                                            </div>
                                            <div class="sign-up">
                                                <h5>District :</h5>
                                                <input type="text" id="s_district" value="" required="">

                                            </div>
                                            <div class="sign-up">
                                                <h5>ZIP :</h5>
                                                <input type="text" id="s_zip" value="" required="">
                                            </div>
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                        
                                            <h5 class="shipping">Shipping Method</h5>
                                            <div class="sign-up">
                                                <div class="input-group">
                                                    <label class="radio-inline">
                                                        <input type="radio" name="optradio"><small>৳</small>0.00(Free-Only Inside Dhaka)
                                                    </label>
                                                    <br>
                                            
                                                    <label class="radio-inline">
                                                        <input type="radio" name="optradio">Flat Rate(Inside Dhaka-30 TK, Outside Dhaka-100 TK)
                                                    </label>
                                                    <br><label class="radio-inline">
                                                        <input type="radio" name="optradio">Fixed
                                                    </label>
                                                    
                                                </div>
                                                <h5 class="shipping">Coupon Code</h5>
                                                
                                                <div class="sign-up">   
                                                    
                                                    <input type="text" id="coupon_code" class="form-control">
                                                    <button type="button" id="couponUpdate" class="btn btn-info btn-xs pull-right">Update</button>      
                                                    
                                                </div>
                                                
                                                <h5 class="shipping">Comment</h5>
                                                <div class="sign-up">
                                                <textarea id="comment" name="comment" class="form-control"></textarea></div>
                                                
                                                <h5 class="shipping">Gift Wrap</h5>
                                                <div class="sign-up">                                                   <input type="checkbox" id="gift_wrap" name="gift_wrap"> <label for="gift_wrap" style="color: darkcyan;font-size: 14px; font-style:italic;">Want To Wrap Your Gift</label>
                                                </div>
                                            </div>                                      
                                    </div>
                                        </form>
                                    </div>
                                    
                                    <div class="clearfix"></div>
                                </div>
                                <p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
                            </div>

                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-4">
                    <div class="checkout-left">


                        <div class="checkout-left-basket animated wow slideInLeft" data-wow-delay=".5s">
                            <h4>Shopping basket</h4>
                            <?php foreach(Cart::content() as $row) :?>
                            <ul>
                                <li><?php echo $row->name; ?> <i>-</i> <span><small>৳</small><?php echo $row->total; ?></span></li>
                            </ul>
                            <?php endforeach;?>
                            <ul>
                                <li style="border-top: #999 solid 1px">Total <i>-</i> <span><small>৳</small>{{Cart::total()}}</span></li>
                            </ul>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                
                <div class="checkout-right-basket animated wow slideInRight pull-right" data-wow-delay=".5s" style="margin:3em 0 0 0em;">
                    <a href="{{url('/checkout')}}">Place Order <span class="glyphicon glyphicon-menu-right" aria-hidden="true" style="padding-left: 10px;"></span></a>
	            </div>
            </div>
        </div>
    </div>
	
<!-- //check out -->
<!-- //product-nav -->

<script>
$(document).ready(function(){
    
    $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
    
    var url = "{{URL::to('/')}}";
    
    
    //shipping form
    $("#shippingForm").hide();
    
    $("#shipForm").click(function(){
        $("#shippingForm").toggle();
    });
    
    $("#ship").click(function(){    
        if ($(this).is(":checked")){
                var b_first_name = $("#b_first_name").val();
				var b_last_name = $("#b_last_name").val();
				var b_company_name = $("#b_company_name").val();
                var b_email = $("#b_email").val();
				var b_phone = $("#b_phone").val();
				var b_country = $("#b_country").val();
                var b_address1 = $("#b_address1").val();
				var b_address2 = $("#b_address2").val();
				var b_city = $("#b_city").val();
                var b_district = $("#b_district").val();
				var b_zip = $("#b_zip").val();
                    
                $("#s_first_name").val(b_first_name);
				$("#s_last_name").val(b_last_name);
				$("#s_company_name").val(b_company_name);
                $("#s_email").val(b_email);
				$("#s_phone").val(b_phone);
				$("#s_country").val(b_country);
                $("#s_address1").val(b_address1);
				$("#s_address2").val(b_address2);
				$("#s_city").val(b_city);
                $("#s_district").val(b_district);
				$("#s_zip").val(b_zip);
    }else{
                $("#s_first_name").val('');
				$("#s_last_name").val('');
				$("#s_company_name").val('');
                $("#s_email").val('');
				$("#s_phone").val('');
				$("#s_country").val('');
                $("#s_address1").val('');
				$("#s_address2").val('');
				$("#s_city").val('');
                $("#s_district").val('');
				$("#s_zip").val('');
    }
    });
    
    //shipping form
    
    
    
    //Billing & Shipping Address show start
     
    show();
    
    function show(){    
            $.ajax({
            type: "GET",
            url: url + '/showUserDetails/'+$("#userId").val(),
			success: function (data) {
                $.each(data, function(index, element) {
                
                $("#user_detail_id").val(element.id);
                $("#b_first_name").val(element.b_first_name);
				$("#b_last_name").val(element.b_last_name);
				$("#b_company_name").val(element.b_company_name);
                $("#b_email").val(element.b_email);
				$("#b_phone").val(element.b_phone);
				$("#b_country").val(element.b_country);
                $("#b_address1").val(element.b_address1);
				$("#b_address2").val(element.b_address2);
				$("#b_city").val(element.b_city);
                $("#b_district").val(element.b_district);
				$("#b_zip").val(element.b_zip);
                $("#s_first_name").val(element.s_first_name);
				$("#s_last_name").val(element.s_last_name);
				$("#s_company_name").val(element.s_company_name);
                $("#s_email").val(element.s_email);
				$("#s_phone").val(element.s_phone);
				$("#s_country").val(element.s_country);
                $("#s_address1").val(element.s_address1);
				$("#s_address2").val(element.s_address2);
				$("#s_city").val(element.s_city);
                $("#s_district").val(element.s_district);
				$("#s_zip").val(element.s_zip);
                    
                });
                
               //console.log(data);
                
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    }
        
	//Billing & Shipping Address show end
    
   
    
  //remove single item  start
    $(".timetable_sub").on('click','#removeitem',function(){
        var removebtn = $(this).parents('.rem1');
        //alert($("#removeitem").val());
        $.ajax({
                type: "DELETE",
                url: url + '/user/removeitem/'+$(this).val(),
                success: function (data) {
                    if(data.message =='Removed'){
                    //removebtn.remove();
                    //    updatecart();
						location.reload();
                    }
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });   
        });
    
    //remove single item end
    
    
    //update cart div start
    function updatecart(){
            //alert("called");
            $.ajax({
                type: "POST",
                url: url + '/user/updatecart',
                success: function (data) {
                    $("#cartContainer").html(data);

                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
    }
    //update cart div end
        
    //empty cart start

        $("#empty_cart").click(function(){
            //alert("clicked");
            $.ajax({
                type: "DELETE",
                url: url + '/user/emptycart',
                success: function (data) {

                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
            

        });

        //empty cart end
//update single item quantity
$(".timetable_sub").on("click",".updatequantitybtn",function(){
   // alert($(this).attr("data-id"));
	//var q = $(this).parent().find(".entry.value").text();
	//alert(q);
    $.ajax({
        type: "POST",
        url: url + '/user/updatecartitem',
		data:{
            rowid:$(this).attr("data-id"),
			quantity:$(this).parent().find(".entry.value").text(),
		},
        success: function (data) {
            alert(data.message);
            if(data.message=='updated')
            location.reload();
            },
        error: function (data) {
            console.log('Error:', data);
        }
    });
    //
});
//

});
</script>

@endsection

