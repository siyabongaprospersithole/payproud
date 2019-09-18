<?php
include 'includes/connect.php';
include 'includes/functions.php';

 $id = $_SESSION['user_id'];
 

session_destroy();
header("location: index.php");
 ?>