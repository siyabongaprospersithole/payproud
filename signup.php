<?php

include_once('includes/connect.php');
include_once('includes/functions.php');
if(isset($_GET['ref'])){
    $ref = mysqli_real_escape_string($con,trim($_GET['ref']));
    $get = mysqli_query($con,"select * from generalusers where id = '$ref'");
    if(mysqli_num_rows($get) == 1){
        $_SESSION['ref'] = $ref;
    }
}

?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from slimhamdi.net/bayya/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Mar 2019 09:47:25 GMT -->
<head>

    <meta charset="utf-8" />
    <title>Payround Create Account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Bitcoin investment with monthly returns you can trust, with over 5000 investors, no documentation needed and your returns are tax free">
    <meta name="keywords" content="create payproud, payproud investment create account, sign up payproud" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="https://payproud.net/home/images/favicon.png">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://payproud.net/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://payproud.net/css/magnific-popup.css">
    <link rel="stylesheet" href="https://payproud.net/css/select2.min.css">
    <link rel="stylesheet" href="https://payproud.net/css/style.css">
	<link rel="stylesheet" href="https://payproud.net/css/skins/orange.css">
	
	<!-- Live Style Switcher - demo only -->
    <link rel="alternate stylesheet" type="text/css" title="orange" href="https://payproud.net/css/skins/orange.css" />
    <link rel="alternate stylesheet" type="text/css" title="green" href="https://payproud.net/css/skins/green.css" />
    <link rel="alternate stylesheet" type="text/css" title="blue" href="https://payproud.net/css/skins/blue.css" />
    <link rel="stylesheet" type="text/css" href="https://payproud.net/css/styleswitcher.css" />
<script type="text/javascript">
    $(function() {
    $('#color').click();
});
</script>
    <!-- Template JS Files -->
    <script src="https://payproud.net/js/modernizr.js"></script>
    <style type="text/css">
        .content {
    padding-top: 40px;
    padding-bottom: 40px;
}
.sky-form {
    box-shadow: none;
  
}
.sky-form {
    margin: 0;
    outline: none;
   
    font: 13px/1.55 Arial, sans-serif;
    color: #666;
}
.sky-form {
    border: none !important;
}
* {
    border-radius: 0;
}
element {
    display: none;
}
.modal {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1050;
    display: none;
    overflow: hidden;
    -webkit-overflow-scrolling: touch;
    outline: 0;
}
.fade {
    opacity: 0;
    -webkit-transition: opacity .15s linear;
    -o-transition: opacity .15s linear;
    transition: opacity .15s linear;
}
.headline {
    border-bottom: 0px;
}
.form-headline {
    border-bottom: 1px dotted #e4e9f0 !important;
}
.headline {
    display: block;
    margin: 10px 0 25px 0;
    border-bottom: 1px dotted #e4e9f0;
}
* {
    border-radius: 0;
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.sky-form {
    font: 13px/1.55 Arial, sans-serif;
    color: #666;
}
.headline h2, .headline h3, .headline h4 {
    border-bottom: 1px solid #CD0511;
}
.headline h2, .headline h3, .headline h4 {
    margin: 0 0 -1px 0;
    padding-bottom: 5px;
    display: inline-block;
    border-bottom: 2px solid #CD0511;
}
.headline h2 {
    font-size: 22px;
}
.fxs_asset_label, .fxs_headline_base_rules, .fxs_headline_muted, h1, h2, h3, h4, h5 {
    color: #1b1c23;
    letter-spacing: -.02rem;
    margin: 0 0 .33em;
}
h1, h2, h3, h4, h5, h6 {
    color: #444444;
    margin-top: 5px;
    text-shadow: none;
    font-weight: normal;
    font-family: "Open Sans", Arial, sans-serif;
}
    </style>

</head>

<body class="light">
    
    <!-- SVG Preloader Ends -->
	<!-- Live Style Switcher Starts - demo only -->
  
    <!-- Live Style Switcher Ends - demo only -->
    <!-- Wrapper Starts -->
    <div class="wrapper">
        <!-- Header Starts -->
        <header class="header" style="background-color: #1c65c9;">
            <div class="container">
                <div class="row">
                    <!-- Logo Starts -->
                    <div class="main-logo col-xs-12 col-md-3 col-md-2 col-lg-2 hidden-xs">
                     
  
   <a href="Welcome-To-PayProud">
                            <img id="logo" class="img-responsive" srcset="https://payproud.net/home/images/logo-light2x.png 2x" src="https://payproud.net/home/images/logo-light2x.png" alt="logo">
                        </a>
  
                    </div>
                    <!-- Logo Ends -->
                    <!-- Statistics Starts -->
                    <div class="col-md-7 col-lg-7">
                        <ul class="unstyled bitcoin-stats text-center">
                            <li>
                                <h6 style="color: white;">support@payproud.net</h6><span style="color: white;">contact us</span></li>
                            <li>
                                <h6 style="color: white;">members@payproud.net</h6><span style="color: white;">members contact</span></li>
                                 <li>
                                <h6 style="color: white;">+41 475643 343234</h6><span style="color: white;">Tel contact</span></li>
                          
                        </ul>
                    </div>
                    <!-- Statistics Ends -->
                    <!-- User Sign In/Sign Up Starts -->
                   <div class="col-md-3 col-lg-3">
                        <ul class="unstyled user">
                            <li class="sign-in"><a href="https://payproud.net/Login" style="color: white;" class="btn btn-primary"><i class="fa fa-user" style="color: white;"></i> sign in</a></li>
                            <li class="sign-up"><a href="" class="btn btn-primary"><i class="fa fa-user-plus"></i> register</a></li>
                        </ul>
                    </div>
                    <!-- User Sign In/Sign Up Ends -->
                </div>
            </div>
            <!-- Navigation Menu Starts -->
            <nav class="site-navigation navigation" id="site-navigation">
                <div class="container">
                    <div class="site-nav-inner">
                        <!-- Logo For ONLY Mobile display Starts -->
                        <a class="logo-mobile" href="Welcome-To-PayProud">
							<img id="logo-mobile" class="img-responsive" srcset="home/images/logo2x.png 2x" src="home/images/logo2x.png" alt="logo">
						</a>
                        <!-- Logo For ONLY Mobile display Ends -->
                        <!-- Toggle Icon for Mobile Starts -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
                        <!-- Toggle Icon for Mobile Ends -->
                        <div class="collapse navbar-collapse navbar-responsive-collapse">
                            <!-- Main Menu Starts -->
                            <ul class="nav navbar-nav">
                              <li><a href="https://payproud.net/Welcome-To-PayProud">Home</a></li>
                                <li><a href="https://payproud.net/More-About-Payproud">About Us</a></li>
                                <li><a href="https://payproud.net/Welcome-To-PayProud#pricing">How To Invest</a></li>
                                <li><a href="https://payproud.net/Welcome-To-PayProud#call-action-al">Recruit Program</a></li>
                                <li><a href="https://payproud.net/images/certificate.jpg">Certification</a></li>
                                <li><a href="https://payproud.net/terms.php">Terms</a></li>
                                <li><a href="#contact">Contact</a></li>
                                <!-- Search Icon Ends -->
                            </ul>
                            <!-- Main Menu Ends -->
                        </div>
                    </div>
                </div>
               
            </nav>
            <!-- Navigation Menu Ends -->
        </header>
        <!-- Header Ends -->
        <!-- Slider Starts -->
        
        <!-- Slider Ends -->
        <!-- Features Section Starts -->
       <br/>
        <!-- Features Section Ends -->
        <!-- About Section Starts -->
        <section class="about-us">
            <div class="container content s-results ar-reverse">
<div class="row">
<div class="col-md-9 ar-reverse">

<form id="live_form" name="live_form" method="POST" class="sky-form">
<input type="hidden" name="_xsrf" value="2|ea2069e2|2e0f8b980cbed0436fbeb73bcdb8a518|1552832946">




<div id="div_client_type_group" class="reg-group">

<div class="row">







<div class="row-height">

</div>


</div>
</div>



<div id="div_personal_info_group" class="reg-group" style="">
<div class="headline form-headline margin-top-0">
<h2> Personal Information </h2>
<span id="errorCount_div_personal_info_group" class="error-count pull-right"></span>



</div>
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="form-group margin-bottom-20">
<div id="div_header_english_chars">








<div>

</div>
</div>
</div>
</div>
<div class="row-height">



<div class="col-md-6 col-sm-6 col-md-height col-xs-12">
<div class="form-group margin-bottom-20">
<div id="div_country">
<div>
<label for="country">Country of Residence:</label>

<select name="country" id="country" class="required-field form-control">

<option value="">Please Select</option>





<option value="AX">Aland Islands</option>




<option value="AL">Albania</option>




<option value="DZ">Algeria</option>




<option value="AS">American Samoa</option>




<option value="AD">Andorra</option>




<option value="AO">Angola</option>




<option value="AI">Anguilla</option>




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




<option value="BZ">Belize</option>




<option value="BJ">Benin</option>




<option value="BM">Bermuda</option>




<option value="BT">Bhutan</option>




<option value="BO">Bolivia</option>




<option value="BQ">Bonaire; Sint Eustatius; Saba</option>




<option value="BW">Botswana</option>




<option value="BR">Brazil</option>




<option value="IO">British Indian Ocean Territory</option>




<option value="BN">Brunei Darussalam</option>




<option value="BG">Bulgaria</option>




<option value="BF">Burkina Faso</option>




<option value="BI">Burundi</option>




<option value="KH">Cambodia</option>




<option value="CM">Cameroon</option>




<option value="CV">Cape Verde</option>




<option value="KY">Cayman Islands</option>




<option value="CF">Central African Republic</option>




<option value="TD">Chad</option>




<option value="CL">Chile</option>




<option value="CN">China</option>




<option value="CO">Colombia</option>




<option value="KM">Comoros</option>




<option value="CK">Cook Islands</option>




<option value="CR">Costa Rica</option>




<option value="HR">Croatia (LOCAL Name: Hrvatska)</option>




<option value="CW">Curacao</option>




<option value="CZ">Czech Republic</option>




<option value="DK">Denmark</option>




<option value="DJ">Djibouti</option>




<option value="DM">Dominica</option>




<option value="DO">Dominican Republic</option>




<option value="EC">Ecuador</option>




<option value="EG">Egypt</option>




<option value="SV">El Salvador</option>




<option value="GQ">Equatorial Guinea</option>




<option value="EE">Estonia</option>




<option value="ET">Ethiopia</option>




<option value="FO">Faroe Islands</option>




<option value="FJ">Fiji</option>




<option value="FI">Finland</option>




<option value="FR">France</option>




<option value="GF">French Guiana</option>




<option value="PF">French Polynesia</option>




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




<option value="GW">Guinea-bissau</option>




<option value="GY">Guyana</option>




<option value="VA">Holy See (VATICAN City State)</option>




<option value="HN">Honduras</option>




<option value="HK">Hong Kong</option>




<option value="HU">Hungary</option>




<option value="IS">Iceland</option>




<option value="IN">India</option>




<option value="ID">Indonesia</option>




<option value="IR">Iran (ISLAMIC Republic Of)</option>




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




<option value="LA">Lao Peoples Democratic Republic</option>




<option value="LV">Latvia</option>




<option value="LB">Lebanon</option>




<option value="LS">Lesotho</option>




<option value="LI">Liechtenstein</option>




<option value="LT">Lithuania</option>




<option value="LU">Luxembourg</option>




<option value="MO">Macau</option>




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




<option value="MX">Mexico</option>




<option value="FM">Micronesia Federated States of</option>




<option value="MD">Moldova Republic of</option>




<option value="MC">Monaco</option>




<option value="MN">Mongolia</option>




<option value="ME">Montenegro</option>




<option value="MS">Montserrat</option>




<option value="MA">Morocco</option>




<option value="MZ">Mozambique</option>




<option value="NA">Namibia</option>




<option value="NR">Nauru</option>




<option value="NP">Nepal</option>




<option value="NL">Netherlands</option>




<option value="AN">Netherlands Antilles</option>




<option value="NC">New Caledonia</option>




<option value="NZ">New Zealand</option>




<option value="NI">Nicaragua</option>




<option value="NE">Niger</option>




<option value="NG">Nigeria</option>




<option value="NU">Niue</option>




<option value="NF">Norfolk Island</option>




<option value="NO">Norway</option>




<option value="OM">Oman</option>




<option value="PK">Pakistan</option>




<option value="PW">Palau</option>




<option value="PA">Panama</option>




<option value="PG">Papua New Guinea</option>




<option value="PY">Paraguay</option>




<option value="PE">Peru</option>




<option value="PH">Philippines</option>




<option value="PL">Poland</option>




<option value="PT">Portugal</option>




<option value="QA">Qatar</option>




<option value="RE">Reunion</option>




<option value="RO">Romania</option>




<option value="RU">Russian Federation</option>




<option value="RW">Rwanda</option>




<option value="KN">Saint Kitts and Nevis</option>




<option value="LC">Saint Lucia</option>




<option value="MF">Saint Martin</option>




<option value="WS">Samoa</option>




<option value="SM">San Marino</option>




<option value="ST">Sao Tome and Principe</option>




<option value="SA">Saudi Arabia</option>




<option value="SN">Senegal</option>




<option value="RS">Serbia</option>




<option value="SC">Seychelles</option>




<option value="SG">Singapore</option>




<option value="SX">Sint Maarten</option>




<option value="SK">Slovakia (SLOVAK Republic)</option>




<option value="SI">Slovenia</option>




<option value="SB">Solomon Islands</option>




<option value="ZA">South Africa</option>




<option value="KR">South Korea</option>




<option value="ES">Spain</option>




<option value="LK">Sri Lanka</option>




<option value="PM">St. Pierre and Miquelon</option>




<option value="SR">Suriname</option>




<option value="SZ">Swaziland</option>




<option value="SE">Sweden</option>




<option value="CH">Switzerland</option>




<option value="TW">Taiwan; Republic of China (ROC)</option>




<option value="TJ">Tajikistan</option>




<option value="TZ">Tanzania United Republic of</option>




<option value="TH">Thailand</option>




<option value="TL">Timor-leste</option>




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




<option value="AE">United Arab Emirates</option>




<option value="UK">United Kingdom</option>




<option value="UY">Uruguay</option>




<option value="UZ">Uzbekistan</option>




<option value="VU">Vanuatu</option>




<option value="VE">Venezuela</option>




<option value="VN">Viet Nam</option>




<option value="VG">Virgin Islands (BRITISH)</option>




<option value="WF">Wallis and Futuna Islands</option>




<option value="ZM">Zambia</option>




<option value="ZW">Zimbabwe</option>

</select>

</div>









</div>
</div>
</div>
<div class="col-md-6 col-sm-6 col-md-height col-xs-12">
<div class="form-group margin-bottom-20">
<div id="div_title">
<div>
<label for="title">Title:</label>

<select name="title" id="title" class="required-field form-control">

<option value="">Please Select</option>





<option value="1">Mr.</option>




<option value="2">Ms.</option>




<option value="3">Mrs.</option>

</select>

</div>









</div>
</div>
</div>


</div>








<div class="row-height">














<div class="col-md-6 col-sm-6 col-md-height col-xs-12">
<div class="form-group margin-bottom-20">
<div id="div_fname">




<div>
<label for="fname">Full First Name(s):</label>

<input type="text" name="fname" id="fname" value="" placeholder="As shown on your Identity Document" class="required-field form-control">

</div>










</div>
</div>
</div>





















<div class="col-md-6 col-sm-6 col-md-height col-xs-12">
<div class="form-group margin-bottom-20">
<div id="div_lname">




<div>
<label for="lname">Full Last Name(s):</label>

<input type="text" name="lname" id="lname" value="" placeholder="As shown on your Identity Document" class="required-field form-control">

</div>










</div>
</div>
</div>


</div>
<div class="row-height">
<div class="col-md-6 col-sm-6 col-md-height col-xs-12">
<div class="form-group margin-bottom-20">
<div id="div_email">
<div>
<label for="email">Email Address:</label>

<input type="text" name="email" onblur="email(this)" id="email" value="" placeholder="" class="required-field form-control">

</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-6 col-md-height col-xs-12">
<div class="form-group margin-bottom-20">
<div id="div_birth_day">
<div>
<label for="birth_day">ID Number or Passport:</label>
<input type="text" name="birthyear" id="birthyear" value="" placeholder="" class="required-field form-control">

</div>


</div>
</div>
</div>


</div>








<div class="row-height">














<div class="col-md-6 col-sm-6 single-md-6 col-xs-12">
<div class="form-group margin-bottom-20">
<div id="div_phone">













<div>
<label for="phone">Phone Number:</label>

<input type="text" name="phone" id="cell" class="required-field form-control" value="">

</div>

</div>
</div>
</div>







<div class="col-md-6 col-sm-6 single-md-6 col-xs-12">
<div class="form-group margin-bottom-20">
<div id="div_phone">













<div>
<label for="phone">Password:</label>

<input type="password" name="wallet" id="password" class="required-field form-control" value="">

</div>

</div>
</div>
</div>



<div class="col-md-6 col-sm-6 single-md-6 col-xs-12">
<div class="form-group margin-bottom-20">
<div id="div_phone">













<div>
<label for="phone">Confirm Password:</label>

<input type="password" name="wallet" id="confirm_password" class="required-field form-control" value="">

</div>

</div>
</div>
</div>


</div>


</div>
</div>



<div id="div_joint_fields_group" class="reg-group" style="display: none;">
<div class="headline form-headline margin-top-0">
<h2> Personal Information Person 2 </h2>
<span id="errorCount_div_joint_fields_group" class="error-count pull-right"></span>

</div>
<div class="row">







<div class="row-height">














<div class="col-md-6 col-sm-6 col-md-height col-xs-12">
<div class="form-group margin-bottom-20">
<div id="div_country2">











<div>
<label for="country2">Country of Residence:</label>

<select name="country2" id="country2" class="required-field form-control" disabled="disabled">

<option value="">Please Select</option>





<option value="ZA">South Africa</option>

</select>

</div>









</div>
</div>
</div>





















<div class="col-md-6 col-sm-6 col-md-height col-xs-12">
<div class="form-group margin-bottom-20">
<div id="div_myHF_PersonalTitle2">















<div>
<label for="myHF_PersonalTitle2">Title:</label>

<select name="myHF_PersonalTitle2" id="myHF_PersonalTitle2" class="required-field form-control" disabled="disabled">

<option value="">Please Select</option>





<option value="1">Mr.</option>




<option value="2">Ms.</option>




<option value="3">Mrs.</option>

</select>

</div>









</div>
</div>
</div>


</div>








<div class="row-height">














<div class="col-md-6 col-sm-6 col-md-height col-xs-12">
<div class="form-group margin-bottom-20">
<div id="div_fname2">




<div>
<label for="fname2">Full First Name(s):</label>

<input type="text" name="fname2" id="fname2" value="" placeholder="As shown on your Identity Document" class="required-field form-control" disabled="disabled">

</div>










</div>
</div>
</div>





















<div class="col-md-6 col-sm-6 col-md-height col-xs-12">
<div class="form-group margin-bottom-20">
<div id="div_lname2">




<div>
<label for="lname2">Full Last Name(s):</label>

<input type="text" name="lname2" id="lname2" value="" placeholder="As shown on your Identity Document" class="required-field form-control" disabled="disabled">

</div>










</div>
</div>
</div>


</div>








<div class="row-height">














<div class="col-md-6 col-sm-6 col-md-height col-xs-12">
<div class="form-group margin-bottom-20">
<div id="div_email2">




<div>
<label for="email2">Email Address:</label>

<input type="text" name="email2" id="email2" onblur="email(this)" value="" placeholder="" class="required-field form-control" disabled="disabled">

</div>










</div>
</div>
</div>





















<div class="col-md-6 col-sm-6 col-md-height col-xs-12">
<div class="form-group margin-bottom-20">
<div id="div_birth_day2">
















<div>
<label for="birth_day2">Date of Birth:</label>
<div class="row">
<div class="col-md-3 col-sm-3 col-xs-12">
<select size="1" id="birth_day2_day" name="birth_day2_day" class="form-control required-field " disabled="disabled">
<option value="">dd</option>




<option value="1">1</option>




<option value="2">2</option>




<option value="3">3</option>




<option value="4">4</option>




<option value="5">5</option>




<option value="6">6</option>




<option value="7">7</option>




<option value="8">8</option>




<option value="9">9</option>




<option value="10">10</option>




<option value="11">11</option>




<option value="12">12</option>




<option value="13">13</option>




<option value="14">14</option>




<option value="15">15</option>




<option value="16">16</option>




<option value="17">17</option>




<option value="18">18</option>




<option value="19">19</option>




<option value="20">20</option>




<option value="21">21</option>




<option value="22">22</option>




<option value="23">23</option>




<option value="24">24</option>




<option value="25">25</option>




<option value="26">26</option>




<option value="27">27</option>




<option value="28">28</option>




<option value="29">29</option>




<option value="30">30</option>




<option value="31">31</option>

</select>
</div>
<div class="col-md-3 col-sm-3 col-xs-12">
<select id="birth_day2_month" name="birth_day2_month" class="form-control required-field " disabled="disabled">
<option value="">mm</option>




<option value="1">1</option>




<option value="2">2</option>




<option value="3">3</option>




<option value="4">4</option>




<option value="5">5</option>




<option value="6">6</option>




<option value="7">7</option>




<option value="8">8</option>




<option value="9">9</option>




<option value="10">10</option>




<option value="11">11</option>




<option value="12">12</option>

</select>
</div>
<div class="col-md-3 col-sm-3 col-xs-12">
<select name="birth_day2_year" id="birth_day2_year" class="form-control required-field " disabled="disabled">
<option value="">yyyy</option>




<option value="2001">2001</option>




<option value="2000">2000</option>




<option value="1999">1999</option>




<option value="1998">1998</option>




<option value="1997">1997</option>




<option value="1996">1996</option>




<option value="1995">1995</option>




<option value="1994">1994</option>




<option value="1993">1993</option>




<option value="1992">1992</option>




<option value="1991">1991</option>




<option value="1990">1990</option>




<option value="1989">1989</option>




<option value="1988">1988</option>




<option value="1987">1987</option>




<option value="1986">1986</option>




<option value="1985">1985</option>




<option value="1984">1984</option>




<option value="1983">1983</option>




<option value="1982">1982</option>




<option value="1981">1981</option>




<option value="1980">1980</option>




<option value="1979">1979</option>




<option value="1978">1978</option>




<option value="1977">1977</option>




<option value="1976">1976</option>




<option value="1975">1975</option>




<option value="1974">1974</option>




<option value="1973">1973</option>




<option value="1972">1972</option>




<option value="1971">1971</option>




<option value="1970">1970</option>




<option value="1969">1969</option>




<option value="1968">1968</option>




<option value="1967">1967</option>




<option value="1966">1966</option>




<option value="1965">1965</option>




<option value="1964">1964</option>




<option value="1963">1963</option>




<option value="1962">1962</option>




<option value="1961">1961</option>




<option value="1960">1960</option>




<option value="1959">1959</option>




<option value="1958">1958</option>




<option value="1957">1957</option>




<option value="1956">1956</option>




<option value="1955">1955</option>




<option value="1954">1954</option>




<option value="1953">1953</option>




<option value="1952">1952</option>




<option value="1951">1951</option>




<option value="1950">1950</option>




<option value="1949">1949</option>




<option value="1948">1948</option>




<option value="1947">1947</option>




<option value="1946">1946</option>




<option value="1945">1945</option>




<option value="1944">1944</option>




<option value="1943">1943</option>




<option value="1942">1942</option>




<option value="1941">1941</option>




<option value="1940">1940</option>




<option value="1939">1939</option>

</select>
</div>
</div>
</div>


</div>
</div>
</div>


</div>








<div class="row-height">














<div class="col-md-6 col-sm-6 single-md-6 col-xs-12">
<div class="form-group margin-bottom-20">
<div id="div_phone2">













<div>
<label for="phone2">Phone Number:</label>
<div class="row">
<div class="col-md-3 col-sm-3 col-xs-12">
<input readonly="" id="phone2_prefix" class="form-control" name="phone2_prefix" disabled="disabled">
</div>
<div class="col-md-9 col-sm-3 col-xs-12">
<input type="text" name="phone2" id="phone2" class="required-field form-control" value="" disabled="disabled">
</div>
</div>
</div>

</div>
</div>
</div>


</div>








<div class="row-height">














<div class="col-md-6 col-sm-6 col-md-height col-xs-12">
<div class="form-group margin-bottom-20">
<div id="div_joint_relationship">









</div>
</div>
</div>





















<div class="col-md-6 col-sm-6 col-md-height col-xs-12">
<div class="form-group margin-bottom-20">
<div id="div_joint_relationship_other">




<div>
<label for="joint_relationship_other">Please specify:</label>

<input type="text" name="joint_relationship_other" id="joint_relationship_other" value="" placeholder="" class="required-field form-control" disabled="disabled">

</div>










</div>
</div>
</div>


</div>


</div>
</div>
<div id="div_company_representative_group" class="reg-group" style="display: none;">
<div class="row">
<div class="row-height">
<div class="col-md-6 col-sm-6 col-md-height col-xs-12">
<div class="form-group margin-bottom-20">
<div id="div_country">


<div>
<label for="country">Country of Residence:</label>

<select name="country" id="country" class="required-field form-control" disabled="disabled">

<?php include_once('includes/country.php'); ?>

</select>

</div>
</div>
</div>
</div>

<div class="col-md-6 col-sm-6 col-md-height col-xs-12">
<div class="form-group margin-bottom-20">
<div id="div_title">
<div>
<label for="title">Title:</label>
<select name="title" id="title" class="required-field form-control" disabled="disabled">
<option value="">Please Select</option>
<option value="Mr">Mr.</option>
<option value="Ms">Ms.</option>
<option value="Mrs">Mrs.</option>
</select>
</div>
</div>
</div>
</div>


</div>


<div class="row-height">

<div class="col-md-6 col-sm-6 col-md-height col-xs-12">
<div class="form-group margin-bottom-20">
<div id="div_fname">




<div>
<label for="fname">Full First Name(s):</label>

<input type="text" name="fname" id="fname" value="" placeholder="As shown on your Identity Document" class="required-field form-control" disabled="disabled">

</div>










</div>
</div>
</div>





















<div class="col-md-6 col-sm-6 col-md-height col-xs-12">
<div class="form-group margin-bottom-20">
<div id="div_lname">




<div>
<label for="lname">Full Last Name(s):</label>

<input type="text" name="lname" id="lname" value="" placeholder="As shown on your Identity Document" class="required-field form-control" disabled="disabled">

</div>










</div>
</div>
</div>


</div>








<div class="row-height">














<div class="col-md-6 col-sm-6 col-md-height col-xs-12">
<div class="form-group margin-bottom-20">
<div id="div_email">




<div>
<label for="email">Email Address:</label>

<input type="text" name="email" id="email" value="" placeholder="" class="required-field form-control" disabled="disabled">

</div>










</div>
</div>
</div>





















<div class="col-md-6 col-sm-6 col-md-height col-xs-12">
<div class="form-group margin-bottom-20">
<div id="div_birth_day">














<div>
<label for="birth_day">Date of Birth:</label>
<div class="row">
<div class="col-md-3 col-sm-3 col-xs-12">
<select size="1" id="birthday" name="birth_day_day" class="form-control required-field " disabled="disabled">
<option value="">dd</option>




<option value="1">1</option>




<option value="2">2</option>




<option value="3">3</option>




<option value="4">4</option>




<option value="5">5</option>




<option value="6">6</option>




<option value="7">7</option>




<option value="8">8</option>




<option value="9">9</option>




<option value="10">10</option>




<option value="11">11</option>




<option value="12">12</option>




<option value="13">13</option>




<option value="14">14</option>




<option value="15">15</option>




<option value="16">16</option>




<option value="17">17</option>




<option value="18">18</option>




<option value="19">19</option>




<option value="20">20</option>




<option value="21">21</option>




<option value="22">22</option>




<option value="23">23</option>




<option value="24">24</option>




<option value="25">25</option>




<option value="26">26</option>




<option value="27">27</option>




<option value="28">28</option>




<option value="29">29</option>




<option value="30">30</option>




<option value="31">31</option>

</select>
</div>
<div class="col-md-3 col-sm-3 col-xs-12">
<select id="birthmonth" name="birthmonth" class="form-control required-field " disabled="disabled">
<option value="">mm</option>




<option value="1">1</option>




<option value="2">2</option>




<option value="3">3</option>




<option value="4">4</option>




<option value="5">5</option>




<option value="6">6</option>




<option value="7">7</option>




<option value="8">8</option>




<option value="9">9</option>




<option value="10">10</option>




<option value="11">11</option>




<option value="12">12</option>

</select>
</div>
<div class="col-md-3 col-sm-3 col-xs-12">
<select name="birth_day_year" id="birthyear" class="form-control required-field " disabled="disabled">
<option value="">yyyy</option>




<option value="2001">2001</option>




<option value="2000">2000</option>




<option value="1999">1999</option>




<option value="1998">1998</option>




<option value="1997">1997</option>




<option value="1996">1996</option>




<option value="1995">1995</option>




<option value="1994">1994</option>




<option value="1993">1993</option>




<option value="1992">1992</option>




<option value="1991">1991</option>




<option value="1990">1990</option>




<option value="1989">1989</option>




<option value="1988">1988</option>




<option value="1987">1987</option>




<option value="1986">1986</option>




<option value="1985">1985</option>




<option value="1984">1984</option>




<option value="1983">1983</option>




<option value="1982">1982</option>




<option value="1981">1981</option>




<option value="1980">1980</option>




<option value="1979">1979</option>




<option value="1978">1978</option>




<option value="1977">1977</option>




<option value="1976">1976</option>




<option value="1975">1975</option>




<option value="1974">1974</option>




<option value="1973">1973</option>




<option value="1972">1972</option>




<option value="1971">1971</option>




<option value="1970">1970</option>




<option value="1969">1969</option>




<option value="1968">1968</option>




<option value="1967">1967</option>




<option value="1966">1966</option>




<option value="1965">1965</option>




<option value="1964">1964</option>




<option value="1963">1963</option>




<option value="1962">1962</option>




<option value="1961">1961</option>




<option value="1960">1960</option>




<option value="1959">1959</option>




<option value="1958">1958</option>




<option value="1957">1957</option>




<option value="1956">1956</option>




<option value="1955">1955</option>




<option value="1954">1954</option>




<option value="1953">1953</option>




<option value="1952">1952</option>




<option value="1951">1951</option>




<option value="1950">1950</option>




<option value="1949">1949</option>




<option value="1948">1948</option>




<option value="1947">1947</option>




<option value="1946">1946</option>




<option value="1945">1945</option>




<option value="1944">1944</option>




<option value="1943">1943</option>




<option value="1942">1942</option>




<option value="1941">1941</option>




<option value="1940">1940</option>




<option value="1939">1939</option>

</select>
</div>
</div>
</div>


</div>
</div>
</div>


</div>



</div>
</div>



<div id="div_subscriptions_center" class="reg-group" style="">

<div class="row">












<div class="col-md-12 col-sm-12 col-xs-12">
<div class="form-group margin-bottom-20">
<div id="div_header_email">
</div>
</div>
</div>
</div>
</div>



<div id="div_terms" class="reg-group" style="">
<div class="headline form-headline margin-top-0">
<h2> Terms &amp; Conditions </h2>
<span id="errorCount_div_terms" class="error-count pull-right"></span>

</div>
<div class="row">














<div class="col-md-12 col-sm-12 col-xs-12">
<div class="form-group margin-bottom-20">
<div id="div_iagree">





<label class="checkbox">

<i></i>




By signing up, you do agree to Payround terms and conditions
</label>
<label class="input">
      <div class="g-recaptcha" style="margin: 0px auto;" data-sitekey="6LeG1FkUAAAAADBYpZ5YcPhTfqZSaCqNfDJTKlQr" data-callback="verifyCaptcha"></div>
<label for="">&nbsp;</label>
<button class="btn btn-success btn-block" id="dRegister" name="Register" type="button" >REGISTER</button>
</label>
<label class="input">
<label for="">&nbsp;</label>
<div id="message"></div>
</label>
</div>
</div>
</div>



</div>
</div>

<div class="row">

</div>

</form>
<div>
<div class="hidden750 hidden990">



<style>
.header-v6 .mega-menu .nav, .header-v6 .mega-menu .dropup, .header-v6 .mega-menu .dropdown, .header-v6 .mega-menu .collapse {
position: static;
}
.topmenuBackground {
background: BLACK;
}
.header h5{
margin-right: 64px;
letter-spacing:1px;
margin-top: 21px;
}
.margin-bottom-40 {
margin-bottom: 37px;
}
.slogan-container h5{
margin-right: 264px;
letter-spacing: 1px;
margin-top: 21px;
}
h4 {
font-size: 40px;
line-height: 1.2;
text-align: left;
margin-bottom: 10px;
font-weight: 300;
font-family: Lato;
}
b {
font-weight:700;
}
h6 {
font-size: 18px;
line-height: 1.4;
text-align: left;
margin-bottom: 20px;
font-weight: 300;
font-family: Lato;
}
.titleTop {
position: relative;
bottom: 23px;
color: #EEEEEE;
text-align:center;
font-size: 1.4rem;
font-family: Lato;
}
.headerNavBar .menu-container-slogan{
margin-left:200px;
margin-right:200px;
}
.form-control:focus {
    border-color: #bbb;
    box-shadow: 0 0 2px #c9c9c9;
}
.form-control:focus {
    border-color: #66afe9;
    outline: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);
}
select[multiple], select[size] {
    height: auto;
}
.form-control {
    box-shadow: none;
    border-radius: 0;
}
.form-control {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
        border-top-color: rgb(204, 204, 204);
        border-right-color: rgb(204, 204, 204);
        border-bottom-color: rgb(204, 204, 204);
        border-left-color: rgb(204, 204, 204);
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
button, input, select, textarea {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}
button, select {
    text-transform: none;
}
button, input, optgroup, select, textarea {
    margin: 0;
    font: inherit;
        font-size: inherit;
        line-height: inherit;
        font-family: inherit;
    color: inherit;
}
</style>


</div>
</div>
<div></div></div>
        </section>
        <!-- About Section Ends -->
        <!-- Features and Video Section Starts -->
        
      
        <!-- Quote and Chart Section Ends -->
       
        <!-- Blog Section Ends -->
        <!-- Call To Action Section Starts -->
        <section class="call-action-all">
			<div class="call-action-all-overlay">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<!-- Call To Action Text Starts -->
							<div class="action-text">
								<h2>Get Started Today With Payround USA</h2>
								<p class="lead">login to your account number</p>
							</div>
							<!-- Call To Action Text Ends -->
							<!-- Call To Action Button Starts -->
							<p class="action-btn"><a class="btn btn-primary" href="Login">Login Now</a></p>
							<!-- Call To Action Button Ends -->
						</div>
					</div>
				</div>
			</div>
        </section>
        <!-- Call To Action Section Ends -->
        <!-- Footer Starts -->
            <?php include_once 'includes/footer.php'; ?>
        <!-- Footer Ends -->
		<!-- Back To Top Starts  -->
        <a href="#" id="back-to-top" class="back-to-top fa fa-arrow-up"></a>
		<!-- Back To Top Ends  -->
		
        <!-- Template JS Files -->
        <script src="http://https://payproud.net/js/jquery-2.2.4.min.js"></script>
        <script src="https://payproud.net/js/bootstrap.min.js"></script>
        <script src="https://payproud.net/js/select2.min.js"></script>
        <script src="https://payproud.net/js/jquery.magnific-popup.min.js"></script>
        <script src="https://payproud.net/js/custom.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
		<script type="text/javascript">
       
  $(function(){
        $("#dRegister").click(function(){   

             var response = grecaptcha.getResponse();
    if(response.length == 0) { 
       $("#message").html("<div class='alert alert-warning'>Please verify you are human</div>");
                
    }else{
          var country = $("#country").val();
          var title = $("#title").val();
          var lname = $("#lname").val();
          var fname = $("#fname").val();
          var email = $("#email").val();
         
          var birthyear = $("#birthyear").val();
          var cell = $("#cell").val();
        
          var  password = $("#password").val();
          var confirm_password = $("#confirm_password").val();
         
          if(lname == "" || fname == "" || email == "" || birthyear == "" || cell == "" || password == "" || title == "" || country == ""){
            $("#message").html("<div class='alert alert-danger'>Please Fill all fields</div>");
          }else if(password != confirm_password){
            $("#message").html("<div class='alert alert-danger'>Passwords do not match</div>");
          }else{
              $.post("includes/register.php",{lname: lname,fname: fname,email: email,country: country,title: title,cell: cell,birthyear: birthyear,password: password})
         .done(function(data){
            if(data == "Success"){
               $("#message").html("<div class='alert alert-success'>Successfully registered, Please check your</div>");
             
            }
          else if(data == "exists"){
            $("#message").html("<div class='alert alert-warning'><b>Sorry!<b/> username already exists.</div>");
                $("#registration").hide();
           } else if(data == "phone"){
            $("#message").html("<div class='alert alert-warning'><b>Sorry!<b/> CellPhone Number exists.</div>");
                $("#registration").hide();
           } else if(data == "email"){
              $("#message").html("<div class='alert alert-warning'><b>Sorry!<b/> Email Address Exists.</div>");
               
           }
            else{
                $("#message").html("<div class='alert alert-warning'>"+data+"</div>");
               
               }
           
         });
          }
      }
        
           
                      
 });
          
}); 


 function email(inputtxt) {

          

         alert("sds");



        }     
        </script>
		<!-- Live Style Switcher JS File - only demo -->
		<script src="https://payproud.net/js/styleswitcher.js"></script>

    </div>
    <!-- Wrapper Ends -->
</body>


<!-- Mirrored from slimhamdi.net/bayya/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Mar 2019 09:47:48 GMT -->
</html>