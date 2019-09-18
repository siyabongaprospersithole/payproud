<?php

include_once('includes/connect.php');
include_once('includes/functions.php');


?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from slimhamdi.net/bayya/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Mar 2019 09:47:25 GMT -->
<head>

    <meta charset="utf-8" />
    <title>Login to your Account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Login to your payproud dashbaord">
    <meta name="keywords" content="payproud login, how to login to payproud, login to payproud now" />
    <!-- Favicon -->
 <link rel="shortcut icon" href="home/images/favicon.png">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/select2.min.css">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/skins/orange.css">
	
	<!-- Live Style Switcher - demo only -->
    <link rel="alternate stylesheet" type="text/css" title="orange" href="css/skins/orange.css" />
    <link rel="alternate stylesheet" type="text/css" title="green" href="css/skins/green.css" />
    <link rel="alternate stylesheet" type="text/css" title="blue" href="css/skins/blue.css" />
    <link rel="stylesheet" type="text/css" href="css/styleswitcher.css" />
<script type="text/javascript">
    $(function() {
    $('#color').click();
});
</script>
    <!-- Template JS Files -->
    <script src="js/modernizr.js"></script>
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
        <header class="header" style="background-color: #1c65c9 ;">
            <div class="container">
                <div class="row">
                    <!-- Logo Starts -->
                   
                       <div class="main-logo col-xs-12 col-md-3 col-md-2 col-lg-2 hidden-xs">
                     
  
   <a href="index.php">
                            <img id="logo" class="img-responsive" srcset="home/images/logo-light2x.png 2x" src="home/images/logo-light2x.png" alt="logo">
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
                            <li class="sign-in"><a href=" style="color: white;" class="btn btn-primary"><i class="fa fa-user" style="color: white;"></i> sign in</a></li>
                            <li class="sign-up"><a href="signup.php" class="btn btn-primary"><i class="fa fa-user-plus"></i> register</a></li>
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
                         <a class="logo-mobile" href="index.php">
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
                                <li><a href="index.php">Home</a></li>
                                <li><a href="aboutus.php">About Us</a></li>
                                <li><a href="index.php#pricing">How To Invest</a></li>
                                <li><a href="index.php#call-action-al">Recruit Program</a></li>
                                <li><a href="images/certificate.jpg">Certification</a></li>
                                <li><a href="terms.php">Terms</a></li>
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
<h2 class="text-center"> Login Authentication</h2>
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









</div>
</div>
</div>
<div class="col-md-6 col-sm-6 col-md-height col-xs-12">
<div class="form-group margin-bottom-20">
<div id="div_title">
<div>
<label for="title">Code:</label>


<input type="text" name="lname" id="email" value="" class="required-field form-control">
Check your emails for a verification code

</div>









</div>
</div>
</div>


</div>








<div class="row-height">














<div class="col-md-6 col-sm-6 col-md-height col-xs-12">
<div class="form-group margin-bottom-20">
<div id="div_fname">


</div>
</div>
</div>





















<div class="col-md-6 col-sm-6 col-md-height col-xs-12">
<div class="form-group margin-bottom-20">
<div id="div_lname">




<div>

</div>










</div>
</div>
</div>


</div>
<div class="row-height">
<div class="col-md-6 col-sm-6 col-md-height col-xs-12">
<div class="form-group margin-bottom-20">
<div id="div_email">

</div>
</div>
</div>
<div class="col-md-6 col-sm-6 col-md-height col-xs-12">
<div class="form-group margin-bottom-20">
<div id="div_emaily">
<div>

<div id="message"></div>
<button class="btn btn-success btn-block" id="login" name="Register" type="button" >Login</button>
     <a href="forgot.php">Forgot Password</a>
</div>


</div>
</div>
</div>


</div>








<div class="row-height">

</div>


</div>
</div>



<div id="div_joint_fields_group" class="reg-group" style="display: none;">
<div class="row">







<div class="row-height">





















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











</div>
</div>
</div>





















<div class="col-md-6 col-sm-6 col-md-height col-xs-12">
<div class="form-group margin-bottom-20">
<div id="div_birth_day2">



















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

<div id="div_terms" class="reg-group" style="">
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
								<h2>Get Started Today With Payround Russia</h2>
								<p class="lead">Open account and start Bitcoin Investing!</p>
							</div>
							<!-- Call To Action Text Ends -->
							<!-- Call To Action Button Starts -->
							<p class="action-btn"><a class="btn btn-primary" href="signup.html">Register Now</a></p>
							<!-- Call To Action Button Ends -->
						</div>
					</div>
				</div>
			</div>
        </section>
        <!-- Call To Action Section Ends -->
           <?php include_once 'includes/footer.php'; ?>
        <!-- Footer Ends -->
		<!-- Back To Top Starts  -->
        <a href="#" id="back-to-top" class="back-to-top fa fa-arrow-up"></a>
		<!-- Back To Top Ends  -->
		
        <!-- Template JS Files -->
        <script src="js/jquery-2.2.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/select2.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/custom.js"></script>
		<script type="text/javascript">
       
  $(function(){
        $("#login").click(function(){   
         
          var email = $("#email").val();
         
          var  password = $("#password").val();
        
         if(email == "" || password == ""){
             $("#message").html("<div class='alert alert-warning'>Sorry, some fields are empty.</div>");
             
           }
      else {
         $.post("includes/login.php", {email: email,password: password})
         .done(function(data){
            if(data == "Success"){
               $("#message").html("<div class='alert alert-success'>redirecting you to your profile</div>");
               window.location = 'home/';
               
            }else if(data == "Company"){
               window.location = 'home/loftoffice/';
            }
          
            else{
                $("#message").html("<div class='alert alert-warning'>Username or Password is incorrect</div>");
                
                 
               }
           
         });
           
         }
           
                      
 });
          
});      
        </script>
		<!-- Live Style Switcher JS File - only demo -->
		<script src="js/styleswitcher.js"></script>

    </div>
    <!-- Wrapper Ends -->
</body>


<!-- Mirrored from slimhamdi.net/bayya/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Mar 2019 09:47:48 GMT -->
</html>