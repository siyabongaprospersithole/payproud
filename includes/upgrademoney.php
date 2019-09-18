<?php

include('connect.php');
include('functions.php');
include('checklevel.php');

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
  return $str;
}



$get_all = mysqli_query($con,"select * from generalusers where Level != '' and Level != '1'");
while($run = mysqli_fetch_array($get_all)){
  $username = $run['username'];
  $le = cchecklevel($username);

 if($le == "3"){
   $gethistory = mysqli_query($con,"select * from paymenthistory where username = '$username' and amount = '600'");
   $getgh = mysqli_query($con,"select * from ghrequests where username = '$username' and amount = '600'");
   $gethistoryagain = mysqli_query($con,"select * from paymenthistory where username = '$username' and amount = '400'");
  
   $getghagain = mysqli_query($con,"select * from ghrequests where username = '$username' and amount = '400'");
   if(mysqli_num_rows($gethistory) < 1){
      if(mysqli_num_rows($getgh) < 1){
         if(mysqli_num_rows($getghagain) < 1){
           if(mysqli_num_rows($gethistoryagain) < 1){
               $rand = randomPass(31);
               $date = dateformat2();
               if(mysqli_query($con,"insert into ghrequests (username,phusername,amount,date,ghpair) values ('$username','Company','400','$date','$rand')") === TRUE){
               echo "$username will get R400 <br/>";
              }
           }
         }
      	
     }
   }
  }else if($le == "4"){
      $gethistory = mysqli_query($con,"select * from paymenthistory where username = '$username' and amount = '2100'");
   $getgh = mysqli_query($con,"select * from ghrequests where username = '$username' and amount = '2100'");
   $gethistoryagain = mysqli_query($con,"select * from paymenthistory where username = '$username' and amount = '1500'");
  $getghagain = mysqli_query($con,"select * from ghrequests where username = '$username' and amount = '1500'");
   if(mysqli_num_rows($gethistory) < 1){
      if(mysqli_num_rows($getgh) < 1){
         if(mysqli_num_rows($getghagain) < 1){
           if(mysqli_num_rows($gethistoryagain) < 1){
               $rand = randomPass(30);
               $date = dateformat2();
               if(mysqli_query($con,"insert into ghrequests (username,phusername,amount,date,ghpair) values ('$username','Company','1500','$date','$rand')") === TRUE){
               echo "$username will get R1500 <br/>";
              }
           }
         }
        
     }
   }
  }else if($le == "5"){
       $gethistory = mysqli_query($con,"select * from paymenthistory where username = '$username' and amount = '7100'");
   $getgh = mysqli_query($con,"select * from ghrequests where username = '$username' and amount = '7100'");
   $gethistoryagain = mysqli_query($con,"select * from paymenthistory where username = '$username' and amount = '6100'");
  $getghagain = mysqli_query($con,"select * from ghrequests where username = '$username' and amount = '6100'");
   if(mysqli_num_rows($gethistory) < 1){
      if(mysqli_num_rows($getgh) < 1){
         if(mysqli_num_rows($getghagain) < 1){
           if(mysqli_num_rows($gethistoryagain) < 1){
               $rand = randomPass(31);
               $date = dateformat2();
               if(mysqli_query($con,"insert into ghrequests (username,phusername,amount,date,ghpair) values ('$username','Company','6100','$date','$rand')") === TRUE){
               echo "$username will get R6100 <br/>";
              }
           }
         }
        
     }
   }
  }

  else if($le == "6"){
       $gethistory = mysqli_query($con,"select * from paymenthistory where username = '$username' and amount = '20000'");
   $getgh = mysqli_query($con,"select * from ghrequests where username = '$username' and amount = '20000'");
   $gethistoryagain = mysqli_query($con,"select * from paymenthistory where username = '$username' and amount = '16000'");
 $getghagain = mysqli_query($con,"select * from ghrequests where username = '$username' and amount = '16000'");
   if(mysqli_num_rows($gethistory) < 1){
      if(mysqli_num_rows($getgh) < 1){
         if(mysqli_num_rows($getghagain) < 1){
           if(mysqli_num_rows($gethistoryagain) < 1){
               $rand = randomPass(31);
               $date = dateformat2();
               if(mysqli_query($con,"insert into ghrequests (username,phusername,amount,date,ghpair) values ('$username','Company','16000','$date','$rand')") === TRUE){
               echo "$username will get R15000 <br/>";
              }
           }
         }
        
     }
   }
  }else if($le == "7"){
       $gethistory = mysqli_query($con,"select * from paymenthistory where username = '$username' and amount = '100000'");
   $getgh = mysqli_query($con,"select * from ghrequests where username = '$username' and amount = '100000'");
   if(mysqli_num_rows($gethistory) < 1){
      if(mysqli_num_rows($getgh) < 1){
      	$rand = randomPass(31);
      	$date = dateformat2();
         if(mysqli_query($con,"insert into ghrequests (username,phusername,amount,date,ghpair) values ('$username','Company','100000','$date','$rand')") === TRUE){
         	echo "$username will get 100000 <br/>";
         }
     }
   }
  }
}