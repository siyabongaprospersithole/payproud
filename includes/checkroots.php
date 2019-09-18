<?php
include('includes/connect.php');
include('includes/functions.php');
include('includes/dateformats.php');
if(loggedin())
{
$user_id = $_SESSION['user_id'];
if($user_id == "Company"){
  header("Location: ../../loftoffice/");
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
$getuser = mysqli_query($con,"SELECT * FROM generalusers WHERE id = '$user_id'");
$fetchuser= mysqli_fetch_array($getuser);
$name = $fetchuser['name'];
$email = $fetchuser['email'];
$title = $fetchuser['title'];
$country = $fetchuser['country'];
$dob = $fetchuser['birth'];
$usersponsor = $fetchuser['sponsor'];



  $surname = $fetchuser['surname'];
  $phone = $fetchuser['cell'];
  
  //getting funds
  $getmoney = mysqli_query($con,"SELECT * FROM available WHERE id = '$user_id'");
  $fetchmoney = mysqli_fetch_array($getmoney);
  $funds = $fetchmoney['funds'];
  $bonus = $fetchmoney['bonus'];
  if(mysqli_num_rows($getmoney) < 1){
     if($funds == ""){
    $funds = 0;
  }
   if($bonus == ""){
    $bonus = 0;
  }

  

  }
  $getref = mysqli_query($con,"SELECT * FROM generalusers WHERE ref = '$user_id'");
  $ref_count = 0;
  while($run = mysqli_fetch_array($getref)){
    $ref_count++;
  }


$getdepo = mysqli_query($con,"select * from deposits where user_id = '$user_id'");
$rundepo = mysqli_fetch_array($getdepo);
$depoamount = $rundepo['amount'];
$depodate = $rundepo['date'];
$depostatus = $rundepo['status'];
$depoplan = $rundepo['plan'];
$depostart = $rundepo['start_date'];
$depotran = $rundepo['trans_id'];
$dep = $date = date_create($depostart);
date_add($dep,date_interval_create_from_date_string("2 years"));


 $gettran = mysqli_query($con,"select * from transactions where user_id = '$user_id' and transaction_id = '$depotran'");
 $run_tran = mysqli_fetch_array($gettran);
 $usdd_amount = $run_tran['usd_amount'];
                           $btcc_amount = $run_tran['btc_amount'];
                           $statuss = $run_tran['status'];
                           $quotee = $run_tran['quote'];
                           $trann = substr($rundepo['trans_id'], 6);

$ch = "warning";
$gn = "Investment is not yet live";
if($depostatus == "Success"){
  $ch = "success";
  $gn = "Your Investment live";
}

$depoend = date_format($dep,'Y-m-d');
    $get_wallet = mysqli_query($con,"SELECT * FROM wallet_user WHERE user_id = '$user_id'");
  $fecthwalllet = mysqli_fetch_array($get_wallet);
  $wallet = $fecthwalllet['wallet'];
    $bit_type = $fecthwalllet['bit_type'];

$get = mysqli_query($con,"select * from deposits where user_id = '$user_id'");
  
  $run = mysqli_fetch_array($get);
  $amoun = $run['amount'];
 

require_once( "lib/cryptobox.class.php" );

  
  /**** CONFIGURATION VARIABLES ****/ 
  
  $filename     = "my_file1.zip"; // filename for download
  $dir      = "protected";    // name of your directory with your files; nobody should have direct web access to that directory
  $userID     = "$user_id";       // optional; place your registered userID or md5(userID) here (user1, user7, uo43DC, etc).
                    // or leave empty userID - system will autogenerate userID and save in cookies
  $userFormat   = "COOKIE";     // save userID in cookies (or you can use IPADDRESS, SESSION)
  $orderID    = md5($dir.$filename);  // file name hash as order id
  $amountUSD    = $amoun;       // file download price (0.2 USD)
  $period     = "24 HOURS";   // download link will be valid for 24 hours
  $def_language = "en";       // default Payment Box Language
  $public_key   = "39090AAQz984Bitcoin77BTCPUBqBNMqYciQBBA4La1IQs3ZfX"; // from gourl.io
  $private_key  = "39090AAQz984Bitcoin77BTCPRVWVhZr7c9s80MauuA7qdjvvS";// from gourl.io

  
  // *** For convert Euro/GBP/etc. to USD/Bitcoin, use function convert_currency_live() with Google Finance
  // *** examples: convert_currency_live("EUR", "BTC", 22.37) - convert 22.37 Euro to Bitcoin
  // *** convert_currency_live("EUR", "USD", 22.37) - convert 22.37 Euro to USD

  // IMPORTANT: Please read description of options here - https://gourl.io/api-php.html#options  
  
  /********************************/


  
  
  
  /** PAYMENT BOX **/
  $options = array(
      "public_key"  => $public_key,   // your public key from gourl.io
      "private_key" => $private_key,  // your private key from gourl.io
      "webdev_key"  => "",    // optional, gourl affiliate key
      "orderID"     => $orderID,    // file name hash as order id
      "userID"      => $userID,     // unique identifier for every user
      "userFormat"  => $userFormat,   // save userID in COOKIE, IPADDRESS or SESSION
      "amount"      => 0,       // file price in coins OR in USD below
      "amountUSD"   => $amountUSD,  // we use file price in USD
      "period"      => $period,     // download link valid period
      "language"    => $def_language  // text on EN - english, FR - french, etc
  );

  // Initialise Payment Class
  $box = new Cryptobox ($options);
  
  // coin name
  $coinName = $box->coin_name(); 
  
  // Generate Download Link
  $download_link =  "//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" . 
            (strpos($_SERVER["REQUEST_URI"], "?")?"&":"?")."dd=1";
  $download_link = "href='".htmlspecialchars($download_link, ENT_QUOTES, 'UTF-8')."'";
  
  // Warning message if not paid
  if (!$box->is_paid()) 
    $download_link = "onclick='alert(\"You need to send investment amount first !\")' href='#a'";

  
  
  
  // Optional - Language selection list for payment box (html code)
  $languages_list = display_language_box($def_language);





  // ...
  // Also you need to use IPN function cryptobox_new_payment($paymentID = 0, $payment_details = array(), $box_status = "") 
  // for send confirmation email, update database, update user membership, etc.
  // You need to modify file - cryptobox.newpayment.php, read more - https://gourl.io/api-php.html#ipn
  // ...
    
?>

<!DOCTYPE html>
<html lang="zxx" class="js">
<!-- Mirrored from demo.themenio.com/tokenwiz/transaction-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Mar 2019 20:57:16 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fully featured and complete ICO Dashboard template for ICO backend management.">
    <!-- Fav Icon -->
    <link rel="shortcut icon" href="images/favicon.png">
    <!-- Site Title  -->
    <title><?php echo "$name $surname - Transaction_detail";?></title>
    <!-- Vendor Bundle CSS -->
    <link rel="stylesheet" href="assets/css/vendor.bundle49f7.css?ver=104">
    <!-- Custom styles for this template -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src='js/cryptobox.min.js' type='text/javascript'></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" crossorigin="anonymous"></script>
    <script src="<?php echo CRYPTOBOX_JS_FILES_PATH; ?>support.min.js" crossorigin="anonymous"></script> 

    <link rel="stylesheet" href="assets/css/style49f7.css?ver=104" id="layoutstyle">
  
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o), m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../../www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-91615293-2', 'auto');
        ga('send', 'pageview');
    </script>
</head>

<body class="page-user">
    <div class="topbar-wrap">
        <div class="topbar is-sticky">
            <div class="container">
                 <div class="d-flex justify-content-between align-items-center">
                    <ul class="topbar-nav d-lg-none">
                        <li class="topbar-nav-item relative">
                            <a class="toggle-nav" href="#">
                                <div class="toggle-icon"><span class="toggle-line"></span><span class="toggle-line"></span><span class="toggle-line"></span><span class="toggle-line"></span></div>
                            </a>
                        </li>
                        <!-- .topbar-nav-item -->
                    </ul>
                    <!-- .topbar-nav -->
                    <a class="topbar-logo" href="index.php"><img src="images/logo-light2x.png" srcset="images/logo-light2x.png 2x" alt="logo"></a>
                    <ul class="topbar-nav">
                        <li class="topbar-nav-item relative"><span class="user-welcome d-none d-lg-inline-block">Welcome! <?php echo "$name $surname";?></span><a class="toggle-tigger user-thumb" href="#"><em class="ti ti-user"></em></a>
                            <div class="toggle-class dropdown-content dropdown-content-right dropdown-arrow-right user-dropdown">
                                <div class="user-status">
                                   <h6 class="user-status-title">Balance</h6>
                                    <div class="user-status-balance"><?php echo "$funds";?><small>USD</small></div>
                                </div>
                                <ul class="user-links">
                                    <li><a href="profile.php"><i class="ti ti-id-badge"></i>My Profile</a></li>
                                    
                                </ul>
                                <ul class="user-links bg-light">
                                    <li><a href="logout.php"><i class="ti ti-power-off"></i>Logout</a></li>
                                </ul>
                            </div>
                        </li>
                        <!-- .topbar-nav-item -->
                    </ul>
                    <!-- .topbar-nav -->
                </div>
            </div>
            <!-- .container -->
        </div>
        <!-- .topbar -->
         <?php include_once 'includes/nav.php'; ?>
        <!-- .navbar -->
    </div>
    <!-- .topbar-wrap -->
    <div class="page-content">
        <div class="container">
            <div class="card content-area">
                <div class="card-innr">
                    <div class="card-head d-flex justify-content-between align-items-center">
                        <h4 class="card-title mb-0">Transaction Details</h4><a href="transactions.php" class="btn btn-sm btn-auto btn-primary d-sm-block d-none"><em class="fas fa-arrow-left mr-3"></em>Back</a><a href="investments.php" class="btn btn-icon btn-sm btn-primary d-sm-none"><em class="fas fa-arrow-left"></em></a></div>
                    <div class="gaps-1-5x"></div>
                    <div class="data-details d-md-flex">
                        <div class="fake-class"><span class="data-details-title">Tranx Date</span><span class="data-details-info"><?php echo "$depodate";?></span></div>
                        <div class="fake-class"><span class="data-details-title">Tranx Status</span><span class="badge badge-<?php echo $ch;?> ucap"><?php echo "$depostatus";?></span></div>
                        <div class="fake-class"><span class="data-details-title">Tranx Duration</span><span class="data-details-info">24 monthly return <strong>@</strong> 15%</span></div>
                    </div>
                    <div class="gaps-3x"></div>
                    <h6 class="card-sub-title">Transaction Info</h6>
                    <ul class="data-details-list">
                        <li>
                            <div class="data-details-head">Transaction Type</div>
                            <div class="data-details-des"><strong><?php echo "$depoplan Plan";?></strong></div>
                        </li>
                        <!-- li -->
                        <li>
                            <div class="data-details-head">Deposit Amount</div>
                            <div class="data-details-des"><strong><?php echo "$depoamount USD";?></strong></div>
                        </li>
                        <!-- li -->
                        <li>
                            <div class="data-details-head">Month</div>
                            <div class="data-details-des"><strong>0</strong></div>
                        </li>
                        <!-- li -->
                         <li>
                            <div class="data-details-head">Start-of-contract</div>
                            <div class="data-details-des"><span><?php echo "$depodate";?></span> <span></span></div>
                        </li>
                        <li>
                            <div class="data-details-head">End-of-contract</div>
                            <div class="data-details-des"><span><?php echo "$depoend";?></span> <span></span></div>
                        </li>
                        <li>
                            <div class="data-details-head">Investment</div>
                            <div class="data-details-des"><span><?php echo "$gn";?></span> <span></span></div>
                        </li>
                        <!-- li -->
                       
                        <!-- li -->
                    </ul>
                    <!-- .data-details -->
                    <div class="gaps-3x"></div>
                    <h6 class="card-sub-title">Transaction Status</h6>
                    
                  
               <?php 
                   if($box->is_paid()){
                  



                if($depostatus == "Pending"){
                  $gets = mysqli_query($con,"select * from crypto_payments where userID = '$user_id'");
                  $get_arr = mysqli_fetch_array($gets);
                  $tranid = $get_arr['txID'];
                  $tran_date = $get_arr['txDate'];
                  $am = $get_arr['amount'];
                  $daa = $tran_date;
                   $date = date_create($tran_date);
date_add($date, date_interval_create_from_date_string('2 years'));
$new_date = date_format($date, 'Y-m-d');
                  


                 if(mysqli_query($con,"update deposits set status = 'Success' where user_id = $user_id") === TRUE){
  
    if(mysqli_query($con,"update deposits set trans_id = '$tranid' where user_id = $user_id") === TRUE){
           if(mysqli_query($con,"update deposits set end_date = '$new_date' where user_id = $user_id") === TRUE){
             if(mysqli_query($con,"update deposits set start_date = '$daa' where user_id = $user_id") === TRUE){
              if(mysqli_query($con,"insert into transactions (user_id,transaction_id,btc_amount,date,status,quote,usd_amount) values ('$user_id','$tranid','$am','$tran_date','Success','$depoplan Plan','$amoun')") === TRUE){
             
               $usersponsor = $fetchuser['sponsor'];
               if($usersponsor == ""){
                     header("Location: locate.php");

               }// user has no sponsor
               else{

                   $ref_sponsor_one = $amoun * 7 / 100;
                   $ref_sponsor_two = $amoun * 5 / 100;
                   $ref_sponsor_third = $amoun * 3 / 100;
                   $rand = randomPass(13);
                   if(mysqli_query($con,"insert into available (user_id,bonus) values ('$usersponsor','$ref_sponsor_one')") === TRUE){
                    mysqli_query($con,"insert into transactions (user_id,transaction_id,btc_amount,date,status,quote,usd_amount) values ('$usersponsor','$rand','$am','$tran_date','Success','Referral Bonus','$ref_sponsor_one')");


                      $getsponsortwo = mysqli_query($con,"select * from generalusers where id = '$usersponsor'");
                      $sponsortwo = mysqli_fetch_array($getsponsortwo);
                      $usersponsortwo = $sponsortwo['sponsor'];
                      if($usersponsortwo == ""){
                           header("Location: locate.php");

                      }else{
                       if(mysqli_query($con,"insert into available (user_id,bonus) values ('$usersponsortwo','$ref_sponsor_two')") === TRUE){
                              $getsponsorth = mysqli_query($con,"select * from generalusers where id = '$usersponsortwo'");
                              $sponsorth = mysqli_fetch_array($getsponsorth);
                              mysqli_query($con,"insert into transactions (user_id,transaction_id,btc_amount,date,status,quote,usd_amount) values ('$usersponsor','$rand','$am','$tran_date','Success','Referral Bonus','$ref_sponsor_one')");


                              
                               $usersponsorth = $sponsorth['sponsor'];
                               if($usersponsorth == ""){
                                 header("Location: locate.php");
                               }else{
                                if(mysqli_query($con,"insert into available (user_id,bonus) values ('$usersponsorth','$ref_sponsor_third')") === TRUE){
                                       header("Location: locate.php");
                                }
                               }
                       } 
                      } 
                   }

                 }
              }
             }
           }
    }
  
}

                }
                ?>
 <div class="row">
    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 text-center">
        <div class="card box-shadow">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal acrypto_addr_title"><span class="acrypto_texts_title">Bitcoin Plan Deposit</span><span class="acrypto_loading_icon mr-3 float-left" style="display:none"> <svg class="svg-inline--fa fa-laptop fa-w-20" aria-hidden="true" data-prefix="fas" data-icon="laptop" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M512 64v256H128V64h384m16-64H112C85.5 0 64 21.5 64 48v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zm100 416H389.5c-3 0-5.5 2.1-5.9 5.1C381.2 436.3 368 448 352 448h-64c-16 0-29.2-11.7-31.6-26.9-.5-2.9-3-5.1-5.9-5.1H12c-6.6 0-12 5.4-12 12v36c0 26.5 21.5 48 48 48h544c26.5 0 48-21.5 48-48v-36c0-6.6-5.4-12-12-12z"></path></svg><!-- <i class="fas fa-laptop"></i> --></span><span class="acrypto_loading_icon mr-3 float-left" style="display:none"> <svg class="svg-inline--fa fa-sync-alt fa-w-16 fa-spin" aria-hidden="true" data-prefix="fas" data-icon="sync-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M370.72 133.28C339.458 104.008 298.888 87.962 255.848 88c-77.458.068-144.328 53.178-162.791 126.85-1.344 5.363-6.122 9.15-11.651 9.15H24.103c-7.498 0-13.194-6.807-11.807-14.176C33.933 94.924 134.813 8 256 8c66.448 0 126.791 26.136 171.315 68.685L463.03 40.97C478.149 25.851 504 36.559 504 57.941V192c0 13.255-10.745 24-24 24H345.941c-21.382 0-32.09-25.851-16.971-40.971l41.75-41.749zM32 296h134.059c21.382 0 32.09 25.851 16.971 40.971l-41.75 41.75c31.262 29.273 71.835 45.319 114.876 45.28 77.418-.07 144.315-53.144 162.787-126.849 1.344-5.363 6.122-9.15 11.651-9.15h57.304c7.498 0 13.194 6.807 11.807 14.176C478.067 417.076 377.187 504 256 504c-66.448 0-126.791-26.136-171.315-68.685L48.97 471.03C33.851 486.149 8 475.441 8 454.059V320c0-13.255 10.745-24 24-24z"></path></svg><!-- <i class="fas fa-sync-alt fa-spin"></i> --></span></h4></div>
            <div class="card-body">
                <div class="acrypto_paid_total">
                    <h1 style="margin-top: 10px; cursor: pointer;" class="card-title acrypto_copy_amount" data-original-title="Copy Amount" data-placement="bottom" data-toggle="tooltip"><span class="acrypto_amount"><?php echo "$btcc_amount";?></span> <small class="text-muted"><span class="acrypto_coinlabel">BTC</span></small></h1></div>
                <br>
                <div class="acrypto_copy_transaction" style="cursor: pointer;" data-original-title="Copied!" data-placement="bottom" data-toggle="tooltip"><img class="acrypto_paidimg" style="max-width: 100%; width: 250px; height: auto;" src="images/paid.png" alt="Paid"></div>
                <br>
                <br>
                <h1 class="display-4 acrypto_paymentcaptcha_successful" style="line-height:1.5;">Payment Successfully Received!</h1>
                <br>
                <div class="lead acrypto_paymentcaptcha_date">Received on <b><?php echo "$depodate";?></b></div>
                <br>
                <br><a href="investments.php" class="acrypto_button_details btn btn-lg btn-block btn-outline-primary" style="white-space:normal"><span class="glyphicon glyphicon-bitcoin"></span>&nbsp; Investments</a></div>
        </div>
    </div>
</div>

                <?php

                   }else{


                        echo $box->display_cryptobox(); 
                   
                   }

              ?>
                    <!-- .data-details -->
                </div>
            </div>
            <!-- .card -->
        </div>
        <!-- .container -->
    </div>
    <!-- .page-content -->
    <div class="footer-bar">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-8">
                    <ul class="footer-links">
                       
                        <li><a href="regular-page.html">Privacy Policy</a></li>
                        <li><a href="regular-page.html">Terms of Condition</a></li>
                    </ul>
                </div>
                <!-- .col -->
                <div class="col-md-4 mt-2 mt-sm-0">
                    <div class="d-flex justify-content-between justify-content-md-end align-items-center guttar-25px pdt-0-5x pdb-0-5x">
                        <div class="copyright-text">&copy; 2019 Payproud.</div>
                        <div class="lang-switch relative"><a href="#" class="lang-switch-btn toggle-tigger">En <em class="ti ti-angle-up"></em></a>
                            <div class="toggle-class dropdown-content dropdown-content-up">
                                <ul class="lang-list">
                                    <li><a href="#">Fr</a></li>
                                    <li><a href="#">Bn</a></li>
                                    <li><a href="#">Lt</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .col -->
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
    </div>
    <!-- .footer-bar -->
 
</body>
<!-- Mirrored from demo.themenio.com/tokenwiz/transaction-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Mar 2019 20:57:16 GMT -->
</html>
<?php
}else{
header("../../Index.php");
}
?>
