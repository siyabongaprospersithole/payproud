<?php

include('connect.php');
include('functions.php');


mysqli_query($con,"delete from ghrequests where username = 'Nokubonga' Limit 1");
mysqli_query($con,"delete from ghrequests where username = 'Queen' Limit 1");
mysqli_query($con,"delete from ghrequests where username = 'tsatsi' Limit 1");
mysqli_query($con,"delete from ghrequests where username = 'okuhle' Limit 1");
mysqli_query($con,"delete from ghrequests where username = 'nkuli' Limit 1");
mysqli_query($con,"delete from ghrequests where username = 'madlebe' Limit 1");
mysqli_query($con,"delete from ghrequests where username = 'zwelly' Limit 1");
mysqli_query($con,"delete from ghrequests where username = 'baluh80' Limit 1");

