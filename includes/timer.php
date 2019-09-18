<?php
include 'connect.php';

include_once 'checkbean.php';
$username = $_GET['username'];
$level = $_GET['Level'];

checkdownliners($username,$level);
