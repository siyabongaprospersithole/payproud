<?php
include 'connect.php';
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

$get = mysqli_query($con,"select * from generalusers where Level = ''");
while($run = mysqli_fetch_array($get)){
	$username = $run['username'];
	$check = mysqli_query($con,"select * from paymenthistory where username = '$username' and amount = '200'");
	if(mysqli_num_rows($check) >= 1){

	}else{
		$check2 = mysqli_query($con,"select * from ghrequests where phusername = '$username' and amount = '200'");
		if(mysqli_num_rows($check2) == 0){
		   if($username != 'Company' || $username != 'trianglesuccesstree'){
		   	$date = dateformat2();
		   	$pair = randomPass();
		   	   if(mysqli_query($con,"insert into ghrequests (username,phusername,ghpair,amount,date) values ('Company','$username','$pair','200','$date')")=== TRUE){
                      echo "$username <br/>";
               }
		   }
			

		      }
			}
}
