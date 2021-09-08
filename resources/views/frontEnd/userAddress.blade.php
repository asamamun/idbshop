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
    .sign-up h4{
        color:dimgrey;
    }
	.disabledcontent {
    pointer-events: none;
    opacity: 0.9;
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
            <button class="btn btn-primary" id="editFormBtn">Edit</button>
            <div class="col-md-12 products-right">          
                
                
                    <div class="login-grids">
                        <div class="login">
                            <div class="login-bottom user-acount" style="margin:0;">
                                <form action="" method="post" id="bill_ship_form" class="disabledcontent">
                                  <input type="hidden" id="userId" value="{{Auth::user()->id}}">
                                <input type="hidden" id="user_detail_id" name="user_detail_id" value="">
                                   <div class="col-md-6">
                                   <div class="well" style="color:#FDA30E;padding-left:140px;"><h5>Billing Address</h5></div>
                                    <div class="sign-up">
                                                <h4>First Name*</h4>
                                                <input type="text" id="b_first_name" value="" required="">
                                                <h4>Last Name*</h4>
                                                <input type="text" id="b_last_name" value="" required="">
                                            </div>
                                            <div class="sign-up">
                                                <h4>Company Name :</h4>
                                                <input type="text" id="b_company_name" value="" required="">
                                            </div>
                                            <div class="sign-up">
                                                <h4>Email :</h4>
                                                <input type="text" id="b_email" value="" required="">
                                            </div>
                                            <div class="sign-up">
                                                <h4>Phone :</h4>
                                                <input type="text" id="b_phone" value="" required="">
                                            </div>
                                            <div class="sign-up">
                                                <h4>Country :</h4>
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
                                                <h4>Address 1 :</h4>
                                                <input type="text" id="b_address1" value="" required="">
                                            </div>
                                            <div class="sign-up">
                                                <h4>Address 2 :</h4>
                                                <input type="text" id="b_address2" value="" required="">
                                            </div>
                                            <div class="sign-up">
                                                <h4>City/Town :</h4>
                                                <input type="text" id="b_city" value="" required="">

                                            </div>
                                            <div class="sign-up">
                                                <h4>District :</h4>
                                                <input type="text" id="b_district" value="" required="">

                                            </div>
                                            <div class="sign-up">
                                                <h4>ZIP :</h4>
                                                <input type="text" id="b_zip" value="" required="">
                                            </div>
                                    </div>
                           
                            
                            
                             <div class="col-md-6">
                                   <div class="well" style="color:#FDA30E;padding-left:140px;"><h5>Shipping Address</h5></div>
                                   <div class="sign-up">
                                                    <div class="input-group">                                           
                                                        <input type="checkbox" id="ship" name="ship"> <label for="ship" style="color: darkcyan;"> Use Billing Address As Shipping Address.</label>
                                                    </div>
                                            </div>
                                            
                                            <div class="sign-up">
                                                <h4>First Name*</h4>
                                                <input type="text" id="s_first_name" value="" required="">
                                                <h4>Last Name*</h4>
                                                <input type="text" id="s_last_name" value="" required="">
                                            </div>
                                            <div class="sign-up">
                                                <h4>Company Name :</h4>
                                                <input type="text" id="s_company_name" value="" required="">
                                            </div>
                                            <div class="sign-up">
                                                <h4>Email :</h4>
                                                <input type="text" id="s_email" value="" required="">
                                            </div>
                                            <div class="sign-up">
                                                <h4>Phone :</h4>
                                                <input type="text" id="s_phone" value="" required="">
                                            </div>
                                            <div class="sign-up">
                                                <h4>Country :</h4>
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
                                                <h4>Address 1 :</h4>
                                                <input type="text" id="s_address1" value="" required="">
                                            </div>
                                            <div class="sign-up">
                                                <h4>Address 2 :</h4>
                                                <input type="text" id="s_address2" value="" required="">
                                            </div>
                                            <div class="sign-up">
                                                <h4>City/Town :</h4>
                                                <input type="text" id="s_city" value="" required="">

                                            </div>
                                            <div class="sign-up">
                                                <h4>District :</h4>
                                                <input type="text" id="s_district" value="" required="">

                                            </div>
                                            <div class="sign-up">
                                                <h4>ZIP :</h4>
                                                <input type="text" id="s_zip" value="" required="">
                                            </div>
                                    </div>
                                    
                                     <div class="sign-up" style="margin:10px;">
                                        <input type="button" class="btn btn-info btn-md pull-right" id="saveBtn" value="Save Address" style="color:#fff;">
                                    </div>
                                   
                         
                                </form>
                            </div>
                            
                            <div class="clearfix"></div>
                        </div>
                        
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
	
	$("#editFormBtn").click(function(){
		$("#bill_ship_form").removeClass("disabledcontent");
	});
    
    
    //shipping form
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
    
	
	//Billing & Shipping Address Add start
    
	$("#saveBtn").click(function(){
        $.ajax({
            type: "POST",
            url: url + '/addUserDetails',
			data:{
				b_first_name:$("#b_first_name").val(),
				b_last_name:$("#b_last_name").val(),
				b_company_name:$("#b_company_name").val(),
                b_email:$("#b_email").val(),
				b_phone:$("#b_phone").val(),
				b_country:$("#b_country").val(),
                b_address1:$("#b_address1").val(),
				b_address2:$("#b_address2").val(),
				b_city:$("#b_city").val(),
                b_district:$("#b_district").val(),
				b_zip:$("#b_zip").val(),
                s_first_name:$("#s_first_name").val(),
				s_last_name:$("#s_last_name").val(),
				s_company_name:$("#s_company_name").val(),
                s_email:$("#s_email").val(),
				s_phone:$("#s_phone").val(),
				s_country:$("#s_country").val(),
                s_address1:$("#s_address1").val(),
				s_address2:$("#s_address2").val(),
				s_city:$("#s_city").val(),
                s_district:$("#s_district").val(),
				s_zip:$("#s_zip").val(),
				
			},
            success: function (data) {
                
                alert(data.message);
				$("#bill_ship_form").addClass("disabledcontent");
                //location.reload();

                //$("#task" + task_id).remove();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
		
		
	});
	//Billing & Shipping Address Add end
    
    
    //Billing & Shipping Address Edit start
     
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
        
	//Billing & Shipping Address Edit end
    
   
    //Billing & Shipping Address Update Start    
    
    $("#updateBtn").click(function(){
            $.ajax({
            type: "PUT",
            url: url + '/updateUserDetails/'+$("#user_detail_id").val(),
			data:{
				b_first_name:$("#b_first_name").val(),
				b_last_name:$("#b_last_name").val(),
				b_company_name:$("#b_company_name").val(),
                b_email:$("#b_email").val(),
				b_phone:$("#b_phone").val(),
				b_country:$("#b_country").val(),
                b_address1:$("#b_address1").val(),
				b_address2:$("#b_address2").val(),
				b_city:$("#b_city").val(),
                b_district:$("#b_district").val(),
				b_zip:$("#b_zip").val(),
                s_first_name:$("#s_first_name").val(),
				s_last_name:$("#s_last_name").val(),
				s_company_name:$("#s_company_name").val(),
                s_email:$("#s_email").val(),
				s_phone:$("#s_phone").val(),
				s_country:$("#s_country").val(),
                s_address1:$("#s_address1").val(),
				s_address2:$("#s_address2").val(),
				s_city:$("#s_city").val(),
                s_district:$("#s_district").val(),
				s_zip:$("#s_zip").val(),
				
			},
            success: function (data) {
                
                alert(data.message);
                location.reload();

                //$("#task" + task_id).remove();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
    //Billing & Shipping Address Update End
    
    
    
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

