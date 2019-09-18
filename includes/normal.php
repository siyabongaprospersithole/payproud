<?php

include('connect.php');
include('functions.php');
include('checklevel.php');


$get_all = mysqli_query($con,"select * from generalusers where Level != ''");

while($run = mysqli_fetch_array($get_all)){
  $username = $run['username'];
  $g = mysqli_query($con,"select * from generalusers where sponsor = '$username' and Level != ''");
  if(mysqli_num_rows($g) >= 3){
       $le = cchecklevel($username);

     mysqli_query($con,"update generalusers set Level = '$le' where username = '$username'");
  }else{
  	 mysqli_query($con,"update generalusers set Level = '1' where username = '$username'");
  }
 
}