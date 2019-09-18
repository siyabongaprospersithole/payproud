<?php

include('connect.php');
include('functions.php');


if(isset($_GET['username'])){
	$username = $_GET['username'];
	if(mysqli_query($con,"delete from generalusers where username = '$username'") === TRUE){

		if(mysqli_query($con,"delete from banking where username = '$username'") === TRUE){
		   if(mysqli_query($con,"delete from paymenthistory where username = '$username'") === TRUE){
		    echo "<script>window.history.back();</script>";
	     }
	  }
	}
}