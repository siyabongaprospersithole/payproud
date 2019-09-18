<?php

include('connect.php');

$fin = mysqli_query($con,"select * from generalusers");
while($run = mysqli_fetch_array($fin)){
	$username = $run['username'];

	$get = mysqli_query($con,"select * from generalusers where sponsor = '$username'");
	if(mysqli_num_rows($get) >= 3){
		echo "$username <br/>";
	}
}