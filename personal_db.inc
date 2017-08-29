<?php
$mname="localhost";
$user_name="root";
$pwd="";
$db="sttcmly";
$con=mysqli_connect($mname,$user_name,$pwd) or die("can not connect to SERVER");
mysqli_select_db($con,$db) or die("can not find DATA BASE");
?>
