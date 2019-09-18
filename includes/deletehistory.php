<?php

include('connect.php');
include('functions.php');
include('checklevel.php');


$get_all = mysqli_query($con,"select * from paymenthistory");

while($run = mysqli_fetch_array($get_all)){
  $username = $run['username'];
  $amount = $run['amount'];
  
  if($amount != "200"){
  	 $get = mysqli_query($con,"select * from paymenthistory where username = '$username' and amount = '$amount'");
     if(mysqli_num_rows($get) > 1){
  	if(mysqli_query($con, "delete from paymenthistory where username = '$username' and amount = '$amount' limit 1") === TRUE){
  		echo "found $username with amount $amount <br/>";
  	}
  }
  }
  
 
}