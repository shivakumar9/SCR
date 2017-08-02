<?php
session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- DW6 -->
<head>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<!-- Copyright 2005 Macromedia, Inc. All rights reserved. -->
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>STTCMLY</title>
<link rel="stylesheet" href="emx_nav_left.css" type="text/css" />
<style type="text/css">
body {
	background-image: url();
	background-color: #1C6EA0;
}
</style>
<script type="text/javascript">
<!--
var time = 3000;
var numofitems = 7;

//menu constructor
function menu(allitems,thisitem,startstate){ 
  callname= "gl"+thisitem;
  divname="subglobal"+thisitem;  
  this.numberofmenuitems = allitems;
  this.caller = document.getElementById(callname);
  this.thediv = document.getElementById(divname);
  this.thediv.style.visibility = startstate;
}

//menu methods
function ehandler(event,theobj){
  for (var i=1; i<= theobj.numberofmenuitems; i++){
    var shutdiv =eval( "menuitem"+i+".thediv");
    shutdiv.style.visibility="hidden";
  }
  theobj.thediv.style.visibility="visible";
}
				
function closesubnav(event){
  if ((event.clientY <48)||(event.clientY > 107)){
    for (var i=1; i<= numofitems; i++){
      var shutdiv =eval('menuitem'+i+'.thediv');
      shutdiv.style.visibility='hidden';
    }
  }
}
// -->
</script>
</head>
<body onmousemove="closesubnav(event);">
<!-- end masthead -->
<!--end pagecell1-->
<br />
<table width="100%" border="0">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="191">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="315">&nbsp;</td>
    <td><span class="feature">
       <?php
	   include("personal_db.inc");
$uname=$_POST['userid'];
$pwd=$_POST['password'];



$sql="select * from users where email='$uname' AND Psw='$pwd'";
$result=mysql_query($sql);
//echo $sql;
$count=mysql_num_rows($result);
$row=mysql_fetch_array($result);
$status=$row['status'];
$idlen=strlen($uname);
$passlen=strlen($pwd);
if($count!=0 && $idlen>=1 && $passlen>=1)
{

$email =$row['email'];
		//$fname =$row['fname'];
		$lname =$row['lname'];
		 $status =$row['status'];
if($status=='user')
{
	$_SESSION['email']=$email;
				//$_SESSION['fname']=$fname;
				$_SESSION['lname']=$lname;
echo"<script>location='user/user_home.php'</script>";
}
else
{
$_SESSION['email']=$email;
				//$_SESSION['fname']=$fname;
				$_SESSION['lname']=$lname;
echo"<script>location='admin/security.php'</script>";

 }
 }
 
 
    else if($idlen<1)
		  {
		    echo "<script> alert('You forgot to enter your userid') </script>";
			 echo "<script> location='login.html' </script>";
		  }
		  
		else if($passlen<1)
		  {
		    echo "<script> alert('You forgot to enter your password') </script>";
			 echo "<script> location='login.html' </script>";
		  }  
		  
  else
  {
  echo "<script>alert('.....!please check your username & password again')</script>";
 echo "<script> location='login.html' </script>";

  }
?></span></td>
    <td>&nbsp;</td>
  </tr>
</table>
<script type="text/javascript">
    <!--
      var menuitem1 = new menu(7,1,"hidden");
			var menuitem2 = new menu(7,2,"hidden");
			var menuitem3 = new menu(7,3,"hidden");
			var menuitem4 = new menu(7,4,"hidden");
			var menuitem5 = new menu(7,5,"hidden");
			var menuitem6 = new menu(7,6,"hidden");
			var menuitem7 = new menu(7,7,"hidden");
    // -->
    </script>
</body>
</html>
