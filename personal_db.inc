<?php
$mname="localhost";
$user_name="root";
$pwd="";
$db="sttcmly";
$con=@mysql_connect($mname,$user_name,$pwd) or die("can not connect to SERVER");
mysql_select_db($db,$con) or die("can not find DATA BASE");
?>
