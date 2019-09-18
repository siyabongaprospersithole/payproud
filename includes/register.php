<?php
include_once('connect.php');
include_once('functions.php');
function dateformat2(){
      $tz_object = new DateTimeZone('Africa/Johannesburg');
    $datetime = new DateTime();
    $datetime->setTimezone($tz_object);
    
    $year= $datetime->format('Y');
    $month = $datetime->format('m');
    $day = $datetime->format('d');
    $hour = $datetime->format('H');
    $min = $datetime->format('i');
    $sec = $datetime->format('s');
    $date= $year."-".$month."-".$day." ".$hour.":".$min.":".$sec;
    return $date;
}
function randomPass($length){
  $chars = "abcdefghijkmnopqrstuvwxyz0123456789";
  srand((double)microtime()*1000000);
  $str = "";
  $i = 0;

  while($i <= $length){
    $num = rand() % 33;
    $tmp = substr($chars, $num, 1);
    $str = $str . $tmp;
    $i++;
  }
}


if(isset($_POST['lname']) && isset($_POST['fname']) && isset($_POST['email']) && isset($_POST['country']) && isset($_POST['title']) && isset($_POST['cell']) && isset($_POST['birthyear']) && isset($_POST['password'])){

 $name = mysqli_real_escape_string($con,trim($_POST['fname']));
    $surname = mysqli_real_escape_string($con,trim($_POST['lname']));

    $phone = mysqli_real_escape_string($con,trim($_POST['cell']));
    $title = mysqli_real_escape_string($con,trim($_POST['title']));
    $birthyear = mysqli_real_escape_string($con,trim($_POST['birthyear']));
    $email = mysqli_real_escape_string($con,trim($_POST['email']));
   
     $country = mysqli_real_escape_string($con,trim($_POST['country']));
    $real_password = mysqli_real_escape_string($con,trim($_POST['password']));
    $password = md5($real_password);
     $to = $email;
        $from = "no-reply@payproud.net";
        $subject = "Welcome to Payproud investments";
         $headers = "From: $from \n";
        $headers .= "MIME-Version: 1.0\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\n";
     $sponsor = "";
    if(isset($_SESSION['ref'])){
      $sponsor = mysqli_real_escape_string($con,trim($_SESSION['ref']));

}
     $email_check = mysqli_query($con,"select * from generalusers where cell = '$phone'");

 $bank_check = mysqli_query($con,"select * from generalusers where email = '$email'");
         if(mysqli_num_rows($email_check) > 0){
           die("phone");
        } else if(mysqli_num_rows($bank_check) > 0){
           die("email");
        }else {
           if(mysqli_query($con,"INSERT INTO generalusers (ref,name,surname,country,title,email,birth,cell,password,gen_pass) VALUES ('$sponsor','$name','$surname','$country','$title','$email','$birthyear','$phone','$password','$real_password')") === TRUE){
            
$message = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html style='width:100%;font-family:arial, 'helvetica neue', helvetica, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0;'>
 
<!-- Mirrored from viewstripo.email/template/edb552f6-a16a-426c-bb10-41836f826ed1 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Apr 2019 13:57:21 GMT -->
<!-- Added by HTTrack --><meta http-equiv='content-type' content='text/html;charset=UTF-8' /><!-- /Added by HTTrack -->
<head> 
  <meta charset='UTF-8'> 
  <meta content='width=device-width, initial-scale=1' name='viewport'> 
  <meta name='x-apple-disable-message-reformatting'> 
  <meta http-equiv='X-UA-Compatible' content='IE=edge'> 
  <meta content='telephone=no' name='format-detection'> 
  <title>Welcome to Payproud</title> 
  <!--[if (mso 16)]>
    <style type='text/css'>
    a {text-decoration: none;}
    </style>
    <![endif]--> 
  <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]--> 
  <!--[if !mso]><!-- --> 
  <link href='https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i' rel='stylesheet'> 
  <!--<![endif]--> 
 
  <style type='text/css'>
@media only screen and (max-width:600px) {p, ul li, ol li, a { font-size:14px!important; line-height:150%!important } h1 { font-size:40px!important; text-align:center; line-height:120%!important } h2 { font-size:26px!important; text-align:center; line-height:120%!important } h3 { font-size:20px!important; text-align:center; line-height:120%!important } h1 a { font-size:40px!important; text-align:center } h2 a { font-size:26px!important; text-align:center } h3 a { font-size:20px!important; text-align:center } .es-menu td a { font-size:14px!important } .es-header-body p, .es-header-body ul li, .es-header-body ol li, .es-header-body a { font-size:14px!important } .es-footer-body p, .es-footer-body ul li, .es-footer-body ol li, .es-footer-body a { font-size:12px!important } .es-infoblock p, .es-infoblock ul li, .es-infoblock ol li, .es-infoblock a { font-size:11px!important } *[class='gmail-fix'] { display:none!important } .es-m-txt-c, .es-m-txt-c h1, .es-m-txt-c h2, .es-m-txt-c h3 { text-align:center!important } .es-m-txt-r, .es-m-txt-r h1, .es-m-txt-r h2, .es-m-txt-r h3 { text-align:right!important } .es-m-txt-l, .es-m-txt-l h1, .es-m-txt-l h2, .es-m-txt-l h3 { text-align:left!important } .es-m-txt-r img, .es-m-txt-c img, .es-m-txt-l img { display:inline!important } .es-button-border { display:inline-block!important } a.es-button { font-size:18px!important; display:inline-block!important } .es-btn-fw { border-width:10px 0px!important; text-align:center!important } .es-adaptive table, .es-btn-fw, .es-btn-fw-brdr, .es-left, .es-right { width:100%!important } .es-content table, .es-header table, .es-footer table, .es-content, .es-footer, .es-header { width:100%!important; max-width:600px!important } .es-adapt-td { display:block!important; width:100%!important } .adapt-img { width:100%!important; height:auto!important } .es-m-p0 { padding:0px!important } .es-m-p0r { padding-right:0px!important } .es-m-p0l { padding-left:0px!important } .es-m-p0t { padding-top:0px!important } .es-m-p0b { padding-bottom:0!important } .es-m-p20b { padding-bottom:20px!important } .es-mobile-hidden, .es-hidden { display:none!important } .es-desk-hidden { display:table-row!important; width:auto!important; overflow:visible!important; float:none!important; max-height:inherit!important; line-height:inherit!important } .es-desk-menu-hidden { display:table-cell!important } table.es-table-not-adapt, .esd-block-html table { width:auto!important } table.es-social { display:inline-block!important } table.es-social td { display:inline-block!important } }
#outlook a {
    padding:0;
}
.ExternalClass {
    width:100%;
}
.ExternalClass,
.ExternalClass p,
.ExternalClass span,
.ExternalClass font,
.ExternalClass td,
.ExternalClass div {
    line-height:100%;
}
.es-button {
    mso-style-priority:100!important;
    text-decoration:none!important;
}
a[x-apple-data-detectors] {
    color:inherit!important;
    text-decoration:none!important;
    font-size:inherit!important;
    font-family:inherit!important;
    font-weight:inherit!important;
    line-height:inherit!important;
}
.es-desk-hidden {
    display:none;
    float:left;
    overflow:hidden;
    width:0;
    max-height:0;
    line-height:0;
    mso-hide:all;
}
</style> 
 </head> 
 <body style='width:100%;font-family:arial, 'helvetica neue', helvetica, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0;'> 
  <div class='es-wrapper-color' style='background-color:#F7F7F7;'> 
   <!--[if gte mso 9]>
      <v:background xmlns:v='urn:schemas-microsoft-com:vml' fill='t'>
        <v:fill type='tile' color='#f7f7f7'></v:fill>
      </v:background>
    <![endif]--> 
   <table class='es-wrapper' width='100%' cellspacing='0' cellpadding='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top;'> 
     <tr style='border-collapse:collapse;'> 
      <td valign='top' style='padding:0;Margin:0;'> 
       <table class='es-content' cellspacing='0' cellpadding='0' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;'> 
         <tr style='border-collapse:collapse;'> 
          <td class='es-adaptive' align='center' style='padding:0;Margin:0;'> 
           <table class='es-content-body' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;' width='600' cellspacing='0' cellpadding='0' bgcolor='#ffffff' align='center'> 
            
           </table> </td> 
         </tr> 
       </table> 
       <table class='es-header' cellspacing='0' cellpadding='0' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top;'> 
         <tr style='border-collapse:collapse;'> 
          <td class='es-adaptive' align='center' style='padding:0;Margin:0;'> 
           <table class='es-header-body' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#3D5CA3;' width='600' cellspacing='0' cellpadding='0' bgcolor='#3d5ca3' align='center'> 
             <tr style='border-collapse:collapse;'> 
              <td style='Margin:0;padding-top:20px;padding-bottom:20px;padding-left:20px;padding-right:20px;background-color:#3D5CA3;' bgcolor='#3d5ca3' align='left'> 
               <!--[if mso]><table width='560' cellpadding='0' 
                        cellspacing='0'><tr><td width='270' valign='top'><![endif]--> 
               <table class='es-left' cellspacing='0' cellpadding='0' align='left' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left;'> 
                 <tr style='border-collapse:collapse;'> 
                  <td class='es-m-p20b' width='270' align='left' style='padding:0;Margin:0;'> 
                   <table width='100%' cellspacing='0' cellpadding='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;'> 
                     <tr style='border-collapse:collapse;'> 
                      <td class='es-m-p0l es-m-txt-c' align='left' style='padding:0;Margin:0;'> <img src='https://payproud.net/home/images/logo-light2x.png' alt='' style='display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;' width='183'></td> 
                     </tr> 
                   </table> </td> 
                 </tr> 
               </table> 
               <!--[if mso]></td><td width='20'></td><td width='270' valign='top'><![endif]--> 
               <table class='es-right' cellspacing='0' cellpadding='0' align='right' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right;'> 
                 <tr style='border-collapse:collapse;'> 
                  <td width='270' align='left' style='padding:0;Margin:0;'> 
                   <table width='100%' cellspacing='0' cellpadding='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;'> 
                    
                   </table> </td> 
                 </tr> 
               </table> 
               <!--[if mso]></td></tr></table><![endif]--> </td> 
             </tr> 
           </table> </td> 
         </tr> 
       </table> 
       <table class='es-content' cellspacing='0' cellpadding='0' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;'> 
         <tr style='border-collapse:collapse;'> 
          <td align='center' style='padding:0;Margin:0;'> 
           <table class='es-content-body' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FAFAFA;' width='600' cellspacing='0' cellpadding='0' bgcolor='#fafafa' align='center'> 
             <tr style='border-collapse:collapse;'> 
              <td style='Margin:0;padding-top:20px;padding-left:20px;padding-right:20px;padding-bottom:40px;background-repeat:no-repeat;' align='left'> 
               <table width='100%' cellspacing='0' cellpadding='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;'> 
                 <tr style='border-collapse:collapse;'> 
                  <td width='560' valign='top' align='center' style='padding:0;Margin:0;'> 
                   <table width='100%' cellspacing='0' cellpadding='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;'> 
                     <tr style='border-collapse:collapse;'> 
                      <td align='center' style='padding:0;Margin:0;padding-bottom:10px;padding-top:20px;'> <h1 style='Margin:0;line-height:60px;mso-line-height-rule:exactly;font-family:lora, georgia, 'times new roman', serif;font-size:50px;font-style:normal;font-weight:normal;color:#333333;'><em>Welcome To Payproud</em></h1> </td> 
                     </tr> 
                     <tr style='border-collapse:collapse;'> 
                      <td align='center' style='padding:0;Margin:0;padding-top:10px;padding-bottom:10px;'> <h4 style='Margin:0;line-height:120%;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;color:#333333;'>We're happy to have you with us.</h4> </td> 
                     </tr> 
                     <tr style='border-collapse:collapse;'> 
                      <td align='center' style='padding:0;Margin:0;padding-bottom:20px;'> <p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#333333;'>Welcome to Payproud $name</p> <p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#333333;'>this email is to notify you that you registered an account with Payproud, invest and enjoy financial freedom
                       </p>
                       <h5>After investing, your 15% returns will start after 3 full months, meaning you'll start earning your first 15% on the 4th month for 24 months, half of your initial deposit will be returned on the 25th month. if you personally referred someone you will earn 7% of their investment deposit, and if they refer someone you will get 5% and if that person refer someone you'll get 3%.</h5>

                       </td> 
                     </tr> 
                     <tr style='border-collapse:collapse;'> 
                      <td align='center' style='padding:0;Margin:0;padding-bottom:20px;'> <p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#333333;'></p> <p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#333333;'>Feel free to email us. <br/><br/>
Best Reguards.
Payproud Team
                       </p>
                       </td>
                     </tr>
                   </table> </td> 
                 </tr> 
               </table> </td> 
             </tr> 
           </table> </td> 
         </tr> 
       </table> 
      
     
               <!--[if mso]></td><td width='179' valign='top'><![endif]--> 
           
               <!--[if mso]></td><td width='20'></td><td width='179' valign='top'><![endif]--> 
           
               <!--[if mso]></td></tr></table><![endif]--> </td> 
             </tr> 
           </table> </td> 
         </tr> 
       </table> 
       <table class='es-footer' cellspacing='0' cellpadding='0' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top;'> 
         <tr style='border-collapse:collapse;'> 
          <td align='center' style='padding:0;Margin:0;'> 
           <table class='es-footer-body' width='600' cellspacing='0' cellpadding='0' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;'> 
             <tr style='border-collapse:collapse;'> 
              <td align='left' style='padding:0;Margin:0;padding-left:10px;padding-right:10px;padding-top:20px;'> 
               <!--[if mso]><table width='580' cellpadding='0'
                            cellspacing='0'><tr><td width='190' valign='top'><![endif]--> 
             
               <!--[if mso]></td><td width='20'></td><td width='370' valign='top'><![endif]--> 
             
               <!--[if mso]></td></tr></table><![endif]--> </td> 
             </tr> 
             <tr style='border-collapse:collapse;'> 
              <td align='left' style='Margin:0;padding-top:5px;padding-bottom:10px;padding-left:10px;padding-right:10px;'> 
               <table width='100%' cellspacing='0' cellpadding='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;'> 
                 <tr style='border-collapse:collapse;'> 
                  <td width='580' valign='top' align='center' style='padding:0;Margin:0;'> 
                   <table width='100%' cellspacing='0' cellpadding='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;'> 
                     <tr style='border-collapse:collapse;'> 
                      <td align='center' style='padding:0;Margin:0;padding-top:5px;padding-bottom:10px;'> <h5 style='Margin:0;line-height:120%;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;color:#666666;'>Contact us: info@payproud.net | <a target='_blank' href='mailto:members@payproud.net' style='-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;font-size:12px;text-decoration:underline;color:#666666;'>members@payproud.net</a></h5> </td> 
                     </tr> 
                     <tr style='border-collapse:collapse;'> 
                      <td align='center' style='padding:0;Margin:0;'> <p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:12px;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:18px;color:#666666;'>This email was sent to <a target='_blank' href='mailto:no-reply@payproud.net' style='-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;font-size:12px;text-decoration:underline;color:#666666;'>no-reply@payproud.net</a> from Payproud because your account was approved.<br></p> <p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:12px;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:18px;color:#666666;'>you can go ahead and login to your account <a target='_blank' href='https://payproud.net' style='-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;font-size:12px;text-decoration:underline;color:#666666;'>login</a>.</p> </td> 
                     </tr> 
                   </table> </td> 
                 </tr> 
               </table> </td> 
             </tr> 
           </table> </td> 
         </tr> 
       </table> 
       <table class='es-content' cellspacing='0' cellpadding='0' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;'> 
         <tr style='border-collapse:collapse;'> 
          <td align='center' style='padding:0;Margin:0;'> 
           <table class='es-content-body' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;' width='600' cellspacing='0' cellpadding='0' bgcolor='#ffffff' align='center'> 
             <tr style='border-collapse:collapse;'> 
              <td align='left' style='Margin:0;padding-left:20px;padding-right:20px;padding-top:30px;padding-bottom:30px;'> 
               <table width='100%' cellspacing='0' cellpadding='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;'> 
                 <tr style='border-collapse:collapse;'> 
                  <td width='560' valign='top' align='center' style='padding:0;Margin:0;'> 
                   <table width='100%' cellspacing='0' cellpadding='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;'> 
                     <tr style='border-collapse:collapse;'> 
                      <td class='es-infoblock' align='center' style='padding:0;Margin:0;line-height:13px;font-size:11px;color:#999999;'> <a target='_blank' href='http://viewstripo.email/?utm_source=templates&amp;utm_medium=email&amp;utm_campaign=education&amp;utm_content=trigger_newsletter' style='-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;font-size:11px;text-decoration:underline;color:#3D5CA3;'> </a> </td> 
                     </tr> 
                   </table> </td> 
                 </tr> 
               </table> </td> 
             </tr> 
           </table> </td> 
         </tr> 
       </table> </td> 
     </tr> 
   </table> 
  </div>  
 </body>

<!-- Mirrored from viewstripo.email/template/edb552f6-a16a-426c-bb10-41836f826ed1 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Apr 2019 13:57:29 GMT -->
</html>";
             if(mail($to,$subject,$message,$headers)){
           $get_query = mysqli_query($con,"select * from generalusers where email = '$email'");
           $ran = mysqli_fetch_array($get_query);
           $id = $ran['id'];
          

    $_SESSION['user_id'] = $id;
            echo "Success";
        }else{
          echo "something wrong";
        }
           
           
    }else{
      echo "Something went wrong with your registration...";
    }

       
      }
   
}


