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
 $act = 0;
 $username = $run['username'];
     $getmydownliners = mysqli_query($con,"select * from generalusers where sponsor = '$username' and Level != ''");
     while($runmy = mysqli_fetch_array($getmydownliners)){
      $mainusernames = $runmy['username'];

      $getunder = mysqli_query($con,"select * from generalusers where sponsor = '$mainusernames' and Level != ''");
      while ($rununder = mysqli_fetch_array($getunder)) {
       

       
        $act++;
        
       }
     }


     if($act >= 9){
     	  $act2 = 0;
     $getmydownliners2 = mysqli_query($con,"select * from generalusers where sponsor = '$username' and Level != ''");
     while($runmy2 = mysqli_fetch_array($getmydownliners2)){
      $mainusernames2 = $runmy2['username'];

      $getunder2 = mysqli_query($con,"select * from generalusers where sponsor = '$mainusernames2' and Level != ''");
      while ($rununder2 = mysqli_fetch_array($getunder2)) {
        $rununderusername2 = $rununder2['username'];
    

        $getundercount2 = mysqli_query($con,"select * from generalusers where sponsor = '$rununderusername2' and Level != ''");
        while($rununder12 = mysqli_fetch_array($getundercount2)){
          $rununder1username2 = $rununder12['username'];

          $getundercount12 = mysqli_query($con,"select * from generalusers where sponsor = '$rununder1username2' and Level != ''");
          
          $act2++;        
        }
       }
     }
     if($act2 >= 27){
                 $act3 = 0;
     $getmydownliners3 = mysqli_query($con,"select * from generalusers where sponsor = '$username'  and Level != ''");
     while($runmy3 = mysqli_fetch_array($getmydownliners3)){
      $mainusernames3 = $runmy3['username'];

      $getunder3 = mysqli_query($con,"select * from generalusers where sponsor = '$mainusernames3' and Level != ''");
      while ($rununder3 = mysqli_fetch_array($getunder3)) {
        $rununderusername3 = $rununder3['username'];


        $getundercount3 = mysqli_query($con,"select * from generalusers where sponsor = '$rununderusername3' and Level != ''");
        while($rununder13 = mysqli_fetch_array($getundercount3)){
          $rununder1username3 = $rununder13['username'];

          $getundercount13 = mysqli_query($con,"select * from generalusers where sponsor = '$rununder1username3' and Level != ''");
         // $count = mysqli_num_rows($getundercount1);
        while($rununder23 = mysqli_fetch_array($getundercount13)){
           $rununder2username3 = $rununder23['username'];
        
          $getundercount23 = mysqli_query($con,"select * from generalusers where sponsor = '$rununder2username3' and Level != ''");
       
          $act3++;
      
        }         
        }
 
       }
     }

        if($act3 >= 81){
        	$act4 = 0;
                 $getmydownliners4 = mysqli_query($con,"select * from generalusers where sponsor = '$username' and Level != ''");
     while($runmy4 = mysqli_fetch_array($getmydownliners4)){
      $mainusernames4 = $runmy4['username'];

      $getunder4 = mysqli_query($con,"select * from generalusers where sponsor = '$mainusernames4' and Level != ''");
      while ($rununder4 = mysqli_fetch_array($getunder4)) {
        $rununderusername4 = $rununder4['username'];


        $getundercount4 = mysqli_query($con,"select * from generalusers where sponsor = '$rununderusername4' and Level != ''");
        while($rununder14 = mysqli_fetch_array($getundercount4)){
          $rununder1username4 = $rununder14['username'];
     
          $getundercount14 = mysqli_query($con,"select * from generalusers where sponsor = '$rununder1username4' and Level != ''");
         // $count = mysqli_num_rows($getundercount1);
        while($rununder24 = mysqli_fetch_array($getundercount14)){
           $rununder2username4 = $rununder24['username'];

          $getundercount24 = mysqli_query($con,"select * from generalusers where sponsor = '$rununder2username4' and Level != ''");
         // $count = mysqli_num_rows($getundercount2);

         while($rununder34 = mysqli_fetch_array($getundercount24)){
           $rununder3username4 = $rununder34['username'];
      
          $getundercount34 = mysqli_query($con,"select * from generalusers where sponsor = '$rununder3username4' and Level != ''");
        
          $act4++;
         }      
        }           
        }   
       }
     }
          if($act4 >= 243){
          	$act5 = 0;
                $getmydownliners5 = mysqli_query($con,"select * from generalusers where sponsor = '$username' and Level != ''");
     while($runmy5 = mysqli_fetch_array($getmydownliners5)){
      $mainusernames5 = $runmy5['username'];

      $getunder5 = mysqli_query($con,"select * from generalusers where sponsor = '$mainusernames5' and Level != ''");
      while ($rununder5 = mysqli_fetch_array($getunder5)) {
        $rununderusername5 = $rununder5['username'];


        $getundercount5 = mysqli_query($con,"select * from generalusers where sponsor = '$rununderusername5' and Level != ''");
        while($rununder15 = mysqli_fetch_array($getundercount5)){
          $rununder1username5 = $rununder15['username'];
 
          $getundercount15 = mysqli_query($con,"select * from generalusers where sponsor = '$rununder1username5' and Level != ''");
         // $count = mysqli_num_rows($getundercount1);
        while($rununder25 = mysqli_fetch_array($getundercount15)){
           $rununder2username5 = $rununder25['username'];

          $getundercount25 = mysqli_query($con,"select * from generalusers where sponsor = '$rununder2username5' and Level != ''");
         // $count = mysqli_num_rows($getundercount2);

         while($rununder35 = mysqli_fetch_array($getundercount25)){
           $rununder3username5 = $rununder35['username'];

          $getundercount35 = mysqli_query($con,"select * from generalusers where sponsor = '$rununder3username5' and Level != ''");
        // $count = mysqli_num_rows($getundercount3);
        while ($rununder45 = mysqli_fetch_array($getundercount35)) {
          $rununder4username5 = $rununder45['username'];

          $getundercount45 = mysqli_query($con,"select * from generalusers where sponsor = '$rununder4username5' and Level != ''");
           $act5++;
        }
     }
           }
         
        }
      
       }
     }
          if($act5 >= 729){
              $gethistory = mysqli_query($con,"select * from paymenthistory where username = '$username' and amount = '100000'");
      $getgh = mysqli_query($con,"select * from ghrequests where username = '$username' and amount = '100000'");
      $gethistoryagain = mysqli_query($con,"select * from paymenthistory where username = '$username' and amount = '100000'");
     $getghagain = mysqli_query($con,"select * from ghrequests where username = '$username' and amount = '100000'");
     mysqli_query($con,"update generalusers set Level = 'Complete' where username = '$username'");
     if(mysqli_num_rows($gethistory) < 1){
      if(mysqli_num_rows($getgh) < 1){
         if(mysqli_num_rows($getghagain) < 1){
           if(mysqli_num_rows($gethistoryagain) < 1){
               $rand = randomPass(30);
               $date = dateformat2();
               if(mysqli_query($con,"insert into ghrequests (username,phusername,amount,date,ghpair) values ('$username','Company','100000','$date','$rand')") === TRUE){
               echo "$username will get 100 000 <br/>";
              }
           }
         }
        
      }
        }
            
          }//729
          else {
             $gethistory = mysqli_query($con,"select * from paymenthistory where username = '$username' and amount = '20000'");
      $getgh = mysqli_query($con,"select * from ghrequests where username = '$username' and amount = '20000'");
      $gethistoryagain = mysqli_query($con,"select * from paymenthistory where username = '$username' and amount = '16000'");
     $getghagain = mysqli_query($con,"select * from ghrequests where username = '$username' and amount = '16000'");
     mysqli_query($con,"update generalusers set Level = '6' where username = '$username'");
     if(mysqli_num_rows($gethistory) < 1){
      if(mysqli_num_rows($getgh) < 1){
         if(mysqli_num_rows($getghagain) < 1){
           if(mysqli_num_rows($gethistoryagain) < 1){
               $rand = randomPass(30);
               $date = dateformat2();
               if(mysqli_query($con,"insert into ghrequests (username,phusername,amount,date,ghpair) values ('$username','Company','16000','$date','$rand')") === TRUE){
               echo "$username will get 16000 <br/>";
              }
           }
         }
        
      }
        }
          }//729

          }//243
          else{
                  $gethistory = mysqli_query($con,"select * from paymenthistory where username = '$username' and amount = '7100'");
      $getgh = mysqli_query($con,"select * from ghrequests where username = '$username' and amount = '7100'");
      $gethistoryagain = mysqli_query($con,"select * from paymenthistory where username = '$username' and amount = '6100'");
     $getghagain = mysqli_query($con,"select * from ghrequests where username = '$username' and amount = '6100'");
     mysqli_query($con,"update generalusers set Level = '5' where username = '$username'");
     if(mysqli_num_rows($gethistory) < 1){
      if(mysqli_num_rows($getgh) < 1){
         if(mysqli_num_rows($getghagain) < 1){
           if(mysqli_num_rows($gethistoryagain) < 1){
               $rand = randomPass(30);
               $date = dateformat2();
               if(mysqli_query($con,"insert into ghrequests (username,phusername,amount,date,ghpair) values ('$username','Company','6100','$date','$rand')") === TRUE){
               echo "$username will get 6100 <br/>";
              }
           }
         }
        
     }
        }
          }//243
        }//81
        else{
            $gethistory = mysqli_query($con,"select * from paymenthistory where username = '$username' and amount = '2100'");
      $getgh = mysqli_query($con,"select * from ghrequests where username = '$username' and amount = '2100'");
      $gethistoryagain = mysqli_query($con,"select * from paymenthistory where username = '$username' and amount = '1500'");
     $getghagain = mysqli_query($con,"select * from ghrequests where username = '$username' and amount = '1500'");
     mysqli_query($con,"update generalusers set Level = '4' where username = '$username'");
     if(mysqli_num_rows($gethistory) < 1){
      if(mysqli_num_rows($getgh) < 1){
         if(mysqli_num_rows($getghagain) < 1){
           if(mysqli_num_rows($gethistoryagain) < 1){
               $rand = randomPass(30);
               $date = dateformat2();
               if(mysqli_query($con,"insert into ghrequests (username,phusername,amount,date,ghpair) values ('$username','Company','1500','$date','$rand')") === TRUE){
               echo "$username will get 1500 <br/>";
              }
           }
         }
        
     }
        }
        }//end 81

     }//27
     else{
     	 $gethistory = mysqli_query($con,"select * from paymenthistory where username = '$username' and amount = '600'");
      $getgh = mysqli_query($con,"select * from ghrequests where username = '$username' and amount = '600'");
      $gethistoryagain = mysqli_query($con,"select * from paymenthistory where username = '$username' and amount = '400'");
     $getghagain = mysqli_query($con,"select * from ghrequests where username = '$username' and amount = '400'");
     mysqli_query($con,"update generalusers set Level = '3' where username = '$username'");
     if(mysqli_num_rows($gethistory) < 1){
      if(mysqli_num_rows($getgh) < 1){
         if(mysqli_num_rows($getghagain) < 1){
           if(mysqli_num_rows($gethistoryagain) < 1){
               $rand = randomPass(30);
               $date = dateformat2();
               if(mysqli_query($con,"insert into ghrequests (username,phusername,amount,date,ghpair) values ('$username','Company','400','$date','$rand')") === TRUE){
               echo "$username will get R400 <br/>";
              }
           }
         }
        
     }
        }
     }

     }//count is 9

    }