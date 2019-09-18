<?php
include_once('connect.php');
include_once('functions.php');
include_once('dateformats.php');




if(isset($_POST['email'])){
  $email = mysqli_real_escape_string($con,trim($_POST['email']));

  $lastlogin = dateformat2();
 
  $fill = mysqli_query($con,"SELECT * FROM generalusers WHERE email = '$email'");

  if(mysqli_num_rows($fill) == 1){
    $g = mysqli_query($con,"select * from generalusers where email = '$email'");
    $get = mysqli_fetch_array($g);
     

   
   
  
    $name = $get['name'];
    $title = $get['title'];
    $randd = randomPass(11);
    $new_pass = md5($randd);
    $pass = $randd;
    if(mysqli_query($con,"update generalusers set password = '$new_pass' where email = '$email'")===TRUE){
      if(mysqli_query($con,"update generalusers set gen_pass = '$pass' where email = '$email'")===TRUE){
          $to = "$email";
        $from = "no-reply@payproud.net";
        $subject = "New Password for $name";
        $message = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns:v='urn:schemas-microsoft-com:vml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
<meta name='viewport' content='width=device-width; initial-scale=1.0; maximum-scale=1.0;' />
<meta name='viewport' content='width=600,initial-scale = 2.3,user-scalable=no'>
<link href='https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Quicksand:300,400,700' rel='stylesheet'>
<!--<![endif]-->
<title>New Password</title>
<style type='text/css'>body{width:100%;background-color:#fff;margin:0;padding:0;-webkit-font-smoothing:antialiased;mso-margin-top-alt:0;mso-margin-bottom-alt:0;mso-padding-alt:0}p,h1,h2,h3,h4{margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0}span.preheader{display:none;font-size:1px}html{width:100%}table{font-size:14px;border:0}@media only screen and (max-width:640px){.main-header{font-size:20px!important}.main-section-header{font-size:28px!important}.show{display:block!important}.hide{display:none!important}.align-center{text-align:center!important}.no-bg{background:none!important}.main-image img{width:440px!important;height:auto!important}.divider img{width:440px!important}.container590{width:440px!important}.container580{width:400px!important}.main-button{width:220px!important}.section-img img{width:320px!important;height:auto!important}.team-img img{width:100%!important;height:auto!important}}@media only screen and (max-width:479px){.main-header{font-size:18px!important}.main-section-header{font-size:26px!important}.divider img{width:280px!important}.container590{width:280px!important}.container590{width:280px!important}.container580{width:260px!important}.section-img img{width:280px!important;height:auto!important}}</style>
<!--[if gte mso 9]><style type=”text/css”>body{font-family:arial,sans-serif!important}</style>
<![endif]-->
</head>
<body class='respond' leftmargin='0' topmargin='0' marginwidth='0' marginheight='0'>
<table style='display:none!important'>
<tr>
<td>
<div style='overflow:hidden;display:none;font-size:1px;color:#ffffff;line-height:1px;font-family:Arial;maxheight:0px;max-width:0px;opacity:0'>
Payproud
</div>
</td>
</tr>
</table>
<table border='0' width='100%' cellpadding='0' cellspacing='0' bgcolor='ffffff'>
<tr>
<td align='center'>
<table border='0' align='center' width='590' cellpadding='0' cellspacing='0' class='container590'>
<tr>
<td height='25' style='font-size:25px;line-height:25px'>&nbsp;</td>
</tr>
<tr>
<td align='center'>
<table border='0' align='center' width='590' cellpadding='0' cellspacing='0' class='container590'>
<tr>
<td align='center' height='70' style='height:70px'>
<a href='' style='display:block;border-style:none!important;border:0!important'><img width='100' border='0' style='display:block;width:100px' src='https://www.payproud.net/home/images/logo.png' alt='' /></a>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td height='25' style='font-size:25px;line-height:25px'>&nbsp;</td>
</tr>
</table>
</td>
</tr>
</table>
<table border='0' width='100%' cellpadding='0' cellspacing='0' bgcolor='ffffff' class='bg_color'>
<tr>
<td align='center'>
<table border='0' align='center' width='590' cellpadding='0' cellspacing='0' class='container590'>
<tr>
<td align='center' style='color:#343434;font-size:24px;font-family:Quicksand,Calibri,sans-serif;font-weight:700;letter-spacing:3px;line-height:35px' class='main-header'>
<div style='line-height:35px'>
New Password for <span style='color:#5caad2'>$title $name</span>
</div>
</td>
</tr>
<tr>
<td height='10' style='font-size:10px;line-height:10px'>&nbsp;</td>
</tr>
<tr>
<td align='center'>
<table border='0' width='40' align='center' cellpadding='0' cellspacing='0' bgcolor='eeeeee'>
<tr>
<td height='2' style='font-size:2px;line-height:2px'>&nbsp;</td>
</tr>
</table>
</td>
</tr>
<tr>
<td height='20' style='font-size:20px;line-height:20px'>&nbsp;</td>
</tr>
<tr>
<td align='left'>
<table border='0' width='590' align='center' cellpadding='0' cellspacing='0' class='container590'>
<tr>
<td align='left' style='color:#888;font-size:16px;font-family:'Work Sans', Calibri, sans-serif; line-height: 24px;'>
<p style='line-height:24px;margin-bottom:15px'>
$title $name,
</p>
<p style='line-height:24px;margin-bottom:15px'>
Your login details for the Payproud are as follows -
</p>
<p style='line-height:24px;margin-bottom:20px'>
Your Email: $email
</p>
<p style='line-height:24px;margin-bottom:20px'>
New Password: $randd
</p>
<p style='line-height:24px;margin-bottom:20px'>
Url: <a href='https//payproud.net'>https//payproud.net</a>
</p>
<p style='line-height:24px;margin-bottom:20px'>
Login and change password to something you can remember on your profile page
</p>
<table border='0' align='center' width='180' cellpadding='0' cellspacing='0' bgcolor='5caad2' style='margin-bottom:20px'>
<tr>
<td height='10' style='font-size:10px;line-height:10px'>&nbsp;</td>
</tr>
<tr>
<td align='center' style='color:#fff;font-size:14px;font-family:'Work Sans', Calibri, sans-serif; line-height: 22px; letter-spacing: 2px;'>
<div style='line-height:22px'>
<a href='https//payproud.net/login' style='color:#fff;text-decoration:none'>LOGIN</a>
</div>
</td>
</tr>
<tr>
<td height='10' style='font-size:10px;line-height:10px'>&nbsp;</td>
</tr>
</table>
<p style='line-height:24px'>
Best Regards,,</br>
Payproud Team
</p>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td height='40' style='font-size:40px;line-height:40px'>&nbsp;</td>
</tr>
</table>
</body>
</html>";
        $headers = "From: $from \n";
        $headers .= "MIME-Version: 1.0\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\n";
        
        if(mail($to,$subject,$message,$headers)){
           echo "Success";
        }else{
          echo "Oops";
        }
      }
    }
        
    
    
       
     
    
    


  }else{
    echo "wrong";
  }
  
}