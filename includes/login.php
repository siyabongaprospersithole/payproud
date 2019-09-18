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

if(isset($_POST['email']) && isset($_POST['password'])){
  $username = mysqli_real_escape_string($con,trim($_POST['email']));
  $password = mysqli_real_escape_string($con,trim($_POST['password']));
  $passwordd = mysqli_real_escape_string($con,trim($_POST['password']));
  $lastlogin = dateformat2();
  $password = md5($password);
  $fill = mysqli_query($con,"SELECT * FROM generalusers WHERE email = '$username' AND password = '$password'");

  if(mysqli_num_rows($fill) == 1){
    $g = mysqli_query($con,"select * from generalusers where email = '$username'");
    $get = mysqli_fetch_array($g);
    //$ref = $get['ref'];



    $id =$get['id'];

    $_SESSION['user_id'] = $id;
    
    $on = "Online";

         if(mysqli_query($con,"update generalusers set last_login = '$lastlogin' where email = '$username'") === TRUE)
      {
     
         if($id == "758"){
               echo "Company";
         }else{
               echo "Success";
         }
       
      } else{
        echo "nooo";
      }
     
    
       
     
    
    


  }else{
    echo "wrong";
  }
  
}