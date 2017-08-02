<?php
session_start();
if(isset($_SESSION['email']))
{
session_destroy();
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>STTCMLY</title>
<meta name="keywords" content="carousel theme, free templates, image carousel, darkgray, pixelated background, templatemo, CSS, HTML" />
<meta name="description" content="Carousel Theme with darkgray background - free CSS template provided by templatemo.com" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="js/jquery-1-4-2.min.js"></script> 
<!--script type="text/javascript" src="/jqueryui/js/jquery-ui-1.7.2.custom.min.js"></script--> 
<script type="text/javascript" src="js/jquery-ui.min.js"></script> 
<script type="text/javascript" src="js/showhide.js"></script> 
<script type="text/JavaScript" src="js/jquery.mousewheel.js"></script> 

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script> 

<!-- Load the CloudCarousel JavaScript file -->
<script type="text/JavaScript" src="js/cloud-carousel.1.0.5.js"></script>
 
<script type="text/javascript">
$(document).ready(function(){
						   
	// This initialises carousels on the container elements specified, in this case, carousel1.
	$("#carousel1").CloudCarousel(		
		{			
			reflHeight: 40,
			reflGap:2,
			titleBox: $('#da-vinci-title'),
			altBox: $('#da-vinci-alt'),
			buttonLeft: $('#slider-left-but'),
			buttonRight: $('#slider-right-but'),
			yRadius:30,
			xPos: 480,
			yPos: 32,
			speed:0.15,
		}
	);
});
 
</script>

</head>

<body id="home" bgcolor="<?php
            include("personal_db.inc");
            $sql="select * from  bgcolor_db  where status='active' "  ;
$data=mysql_query($sql);
$res=mysql_fetch_array($data);
$color=$res['color_code'];
echo "$color";
   
          ?>">

<div id="templatemo_header_wrapper">
	<div id="logo" align="left"><a href="index.html"></a></div>
  <div id="site_title">
    <h3> <strong>INDIAN RAILWAYS </strong></h3>
    <h2 id="site_title"><strong>SIGNAL &amp; TELECOMMUNICATION TRAINING CENTER</strong></h2>
</div>
  <div class="cleaner">
    <div id="templatemo_menu" class="ddsmoothmenu">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about_us.php">About Us</a></li>
        <li><a href="#">Infrastucture</a>
          <ul>
            <li><span class="top"></span><span class="bottom"></span></li>
            <li><a href="Lab_Facilities.html">Lab Facilities</a></li>
            <li><a href="Lecture_Halls.html">Lecture Halls</a></li>
            <li><a href="Hostels.html">Hostels</a></li>
            <li><a href="new.html">Newly Added</a></li>
          </ul>
        </li>
        <li><a href="courses.php">Courses</a>
          <ul>
            <li><span class="top"></span><span class="bottom"></span></li>
            <li><a href="courses.php">Signalling</a></li>
            <li><a href="courses.php">Telecommunications</a></li>
          </ul>
        </li>
        <li><a href="events.php">Events</a></li>
        <li><a href="examination.php">Examination</a></li>
        <li><a href="faculty.html">Faculty</a></li>
        <li><a href="login.html" class="selected">Login</a></li>
        <li><a href="contact_us.html">Contact Us</a></li>
      </ul>
      <br style="clear: left" />
    </div>
  </div>
  <!-- end of templatemo_menu -->
  <div class="cleaner"></div>
</div>	<!-- END of templatemo_header_wrapper -->
<div id="templatemo_main">
  <div id="shiva">
    <div id="box">
      <table width="100%" height="338" border="0" align="right">
        <tr>
          <td width="49%" height="60">ADMINISTRATORS ACCOUNTS :</td>
          <td width="51%" >&nbsp;</td>
        </tr>
        <tr>
          <td height="193"><div id="shashi">
            <form id="form1" name="form1" method="post" action="user_login_action.php">
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <table width="81%" border="0" align="center" cellpadding="1" cellspacing="1 ">
                <tr>
                  <td colspan="4" align="center">Login</td>
                  </tr>
                <tr>
                  <td colspan="4" align="center">&nbsp;</td>
                </tr>
                <tr>
                  <td width="27%" align="right">Username :</td>
                  <td colspan="3"><label>
                    <input name="userid" type="text" id="userid" maxlength="50" />
                    </label></td>
                  </tr>
                <tr>
                  <td align="right">Password :</td>
                  <td colspan="3"><input name="password" type="password" id="password" maxlength="50" /></td>
                  </tr>
                <tr>
                  <td align="right"><label></label></td>
                  <td width="21%" align="justify"><label>
                    <input type="submit" name="Submit" value="Login" />
                    </label></td>
                  <td width="22%"><input type="reset" name="Submit2" value="Reset" /></td>
                  <td width="30%">&nbsp;</td>
                  </tr>
                <tr>
                  <td colspan="4"><label></label></td>
                </tr>
                </table>
              </form>
          </div></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </div>
  </div>
  <div class="cleaner"></div>
</div>
<!-- END of templatemo_main --><!-- END of tempatemo_bottom_wrapper -->

<div id="templatemo_footer_wrapper">
    <div id="templatemo_footer">
    	Copyright © STTC, Moulali | Designed by STTC
    </div> <!-- END of templatemo_footer_wrapper -->
</div> <!-- END of templatemo_footer -->

</body>
</html>