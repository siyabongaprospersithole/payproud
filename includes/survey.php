<?php

include('connect.php');
include('functions.php');


$sql = mysqli_query($con,"select * from ghrequests");
while ($run = mysqli_fetch_array($sql)) {
  $username = $run['username'];
  $amount = $run['amount'];

  if($amount == "200"){
    $get = mysqli_query($con,"select * from generalusers where username = '$username'");
    $ben = mysqli_fetch_array($get);
    $level = $ben['Level'];
    if($level != ''){
       mysqli_query($con,"delete from ghrequests where username = '$username' and amount = '200'");
    }
   
  }else if($amount == "600"){
    mysqli_query($con,"update ghrequests set amount = '400' where username = '$username' and amount = '600'");
  }else if($amount == "2100"){
    mysqli_query($con,"update ghrequests set amount = '1500' where username = '$username' and amount = '2100'");
  }else if($amount == "7100"){
    mysqli_query($con,"update ghrequests set amount = '6100' where username = '$username' and amount = '7100'");
  }else if($amount == "20000"){
    mysqli_query($con,"update ghrequests set amount = '15000' where username = '$username' and amount = '20000'");
  }
}