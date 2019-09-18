<?php

include('connect.php');

$get = mysqli_query($con,"select * from generalusers where Level = '' and verified = ''");

while ($run = mysqli_fetch_array($get)) {
	$username = $run['Level'];

	$sel = mysqli_query($con,"select * from ghrequests where phusername = '$username'");
	if(mysqli_num_rows($sel) == 0){
		echo "$username <br/>";
	}
}