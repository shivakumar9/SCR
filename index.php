<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>STTCMLY</title>
<meta name="keywords" content="carousel theme, free templates, image carousel, darkgray, pixelated background, templatemo, CSS, HTML" />
<meta name="description" content="Carousel Theme with darkgray background - free CSS template provided by templatemo.com" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" type="image/x-icon" href="favicon.gif">
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
            require("personal_db.inc");
            $sql="select * from  bgcolor_db  where status='active' "  ;
$data=mysqli_query($con,$sql);
$res=mysqli_fetch_array($data);
$color=$res['color_code'];
echo "$color";
   
          ?>">

<div id="templatemo_header_wrapper" >
  <div id="logo" align="left"><a href="index.php"></a></div>

<div id="site_title">
	  <h3>
      

      <strong>INDIAN RAILWAYS </strong></h3>
	  <h2 id="site_title"><strong>SIGNAL & TELECOMMUNICATION TRAINING CENTER</strong></h2>
</div>
<!-- end of templatemo_menu -->
    <div class="cleaner">
      <div id="templatemo_menu" class="ddsmoothmenu">
        <ul>
          <li><a href="index.php" class="selected">Home</a></li>
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
          <li><a href="#">Courses</a>
            <ul>
              <li><span class="top"></span><span class="bottom"></span></li>
              <li><a href="courses.php">Signalling</a></li>
              <li><a href="courses.php">Telecommunications</a></li>
            </ul>
          </li>
          <li><a href="events.php">Events</a></li>
          <li><a href="#">Notice Board</a>
          <ul>
              <li><span class="top"></span><span class="bottom"></span></li>
              <li><a href="examination.php">examination</a></li>
              <li><a href="questionbank.php">Question Bank</a></li>
            </ul>
          </li>
          <li><a href="faculty.html">Faculty</a></li>
          <li><a href="login.html">Login</a></li>
          <li><a href="contact_us.html">Contact Us</a></li>
        </ul>
        <br style="clear: left" />
      </div>
    </div>
</div>	
<!-- END of templatemo_header_wrapper -->
<div id="templatemo_main">
  
  <div id="shiva">
  <div id="box">
    <table width="100%" height="746" border="0" align="right">
      <tr>
        <td height="24" colspan="2"><iframe width="100%" height="280px" src="slider.html" frameborder="0" id="pra" name="pra"></iframe></td>
        </tr>
      <tr>
        <td width="66%" height="24">Welcome To Signal &amp; Telecommunication Training Center Website,</td>
        <td width="34%">&nbsp;</td>
      </tr>
      <tr>
        <td>
          <table width="100%" border="0">
            <tr>
              <td width="98%" rowspan="2"><marquee onmouseover="this.stop();" onmouseout="this.start();"><p><a href="">Welcome to STTC, Moulali Official Website</a></p></marquee>
          <p>&nbsp;</p>
          <p>SIGNAL &amp; TELECOMMUNICATION TRAINING CENTER gives both theoretical &amp; practical training for both signalling &amp; telecommunications trainees. With over a many years in training employees for the world's largest employer &quot;INDIAN RAILWAYS&quot;, STTC makes it own significant mark over the expansion and developement of INDIAN RAILWAYS.SIGNAL &amp; TELECOMMUNICATION TRAINING CENTER gives both theoretical &amp; practical training for both signalling &amp; telecommunications trainees. With over a many years in training employees for the world's largest employer &quot;INDIAN RAILWAYS&quot;, STTC makes it own significant mark over the expansion and developement of INDIAN RAILWAYS.SIGNAL &amp; TELECOMMUNICATION TRAINING CENTER gives both theoretical &amp; practical training for both signalling &amp; telecommunications trainees. With over a many years in training employees for the world's largest employer &quot;INDIAN RAILWAYS&quot;, STTC makes it own significant mark over the expansion and developement of INDIAN RAILWAYS.SIGNAL &amp; TELECOMMUNICATION TRAINING CENTER gives both theoretical &amp; practical training for both signalling &amp; telecommunications trainees. With over a many years in training employees for the world's largest employer &quot;INDIAN RAILWAYS&quot;, STTC makes it own significant mark over the expansion and developement of INDIAN RAILWAYS.</p>
          <p>&nbsp;</p>
          <p> SIGNAL &amp; TELECOMMUNICATION TRAINING CENTER gives both theoretical &amp; practical training for both signalling &amp; telecommunications trainees. With over a many years in training employees for the world's largest employer &quot;INDIAN RAILWAYS&quot;, STTC makes it own significant mark over the expansion and developement of INDIAN RAILWAYS.SIGNAL &amp; TELECOMMUNICATION TRAINING CENTER gives both theoretical &amp; practical training for both signalling &amp; telecommunications trainees. With over a many years in training employees for the world's largest employer &quot;INDIAN RAILWAYS&quot;, STTC makes it own significant mark over the expansion and developement of INDIAN RAILWAYS.SIGNAL &amp; TELECOMMUNICATION TRAINING CENTER gives both theoretical &amp; practical training for both signalling &amp; telecommunications trainees. With over a many years in training employees for the world's largest employer &quot;INDIAN RAILWAYS&quot;, STTC makes it own significant mark over the expansion and developement of INDIAN RAILWAYS. SIGNAL &amp; TELECOMMUNICATION TRAINING CENTER gives both theoretical &amp; practical training for both signalling &amp; telecommunications trainees. With over a many years in training employees for the world's largest employer &quot;INDIAN RAILWAYS&quot;, STTC makes it own significant mark over the expansion and developement of INDIAN RAILWAYS.</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p> SIGNAL &amp; TELECOMMUNICATION TRAINING CENTER gives both theoretical &amp; practical training for both signalling &amp; telecommunications trainees. With over a many years in training employees for the world's largest employer &quot;INDIAN RAILWAYS&quot;, STTC makes it own significant mark over the expansion and developement of INDIAN RAILWAYS. SIGNAL &amp; TELECOMMUNICATION TRAINING CENTER gives both theoretical &amp; practical training for both signalling &amp; telecommunications trainees. With over a many years in training employees for the world's largest employer &quot;INDIAN RAILWAYS&quot;, STTC makes it own significant mark over the expansion and developement of INDIAN RAILWAYS.</p>
          <p>&nbsp;</p>
          <p><?php
            include("personal_db.inc");
            $sql="select * from  home where status='active'"  ;
$data=mysqli_query($con,$sql);
	echo "<table width='100%'>";
while($res=mysqli_fetch_array($data,MYSQLI_ASSOC))
{
$text=$res['home_text'];
echo "<tr><td><p>&nbsp;</p>";
echo "<div id='naveen'>$text</div></td></tr>";
 }    
 echo "</table>";     
          ?>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          
          
              </td>
              <td width="2%">&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
          </table></td>
        <td height="212" ><div id="karthik"><table width="100%" height="757" border="0">
          <tr>
            <td height="25" bgcolor="#C4D8E1"><a href="courses_annual_cal.php">ANNUAL CALENDER</a></td>
          </tr>
          <tr>
            <td height="25">Click <a href="courses_annual_cal.php">here</a> to view annual calender</td>
          </tr>
          <tr>
            <td height="25">&nbsp;</td>
          </tr>
          
          <tr>
            <td height="25" bgcolor="#C4D8E1"><a href="courses_monthly.php">MONTHLY COURSES</a></td>
          </tr>
          <tr>
            <td height="25">Click <a href="courses_monthly.php">here</a> to view monthly calender</td>
          </tr>
          <tr>
            <td height="25">&nbsp;</td>
          </tr>
          <tr>
            <td height="25"><table width="100%" border="0">
              <tr>
                <td><a href="courses_jan.php" >JANUARY</a></td>
                <td><a href="courses_feb.php" >FEBRUARY</a></td>
              </tr>
              <tr>
                <td><a href="courses_mar.php" >MARCH</a></td>
                <td><a href="courses_apr.php" >APRIL</a></td>
              </tr>
              <tr>
                <td><a href="courses_may.php" >MAY</a></td>
                <td><a href="courses_jun.php" >JUNE</a></td>
              </tr>
              <tr>
                <td><a href="courses_jul.php" >JULY</a></td>
                <td><a href="courses_aug.php" >AUGUST</a></td>
              </tr>
              <tr>
                <td><a href="courses_sep.php" >SEPTEMBER</a></td>
                <td><a href="courses_oct.php" >OCTOBER</a></td>
              </tr>
              <tr>
                <td><a href="courses_nov.php" >NOVEMBER</a></td>
                <td><a href="courses_dec.php" >DECEMBER</a></td>
              </tr>
              <tr>
                <td colspan="2">Click on any of above months</td>
                </tr>
            </table></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#CCCCCC">CURRENT WORKING COURSES</td>
          </tr>
          <tr>
            <td height="153"><iframe frameborder="0" width="100%" height="180px" id="pranay" name="pranay" src="courses_apr_scrol.php" ></iframe></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#CCCCCC">RECENT UPDATES</td>
          </tr>
          <tr>
            <td height="153"><iframe frameborder="0" width="100%" height="300px" id="pranay" name="pranay" src="courses_apr_exam_scrol.php" ></iframe></td>
          </tr>
        </table></div></td>
      </tr>
     
    </table>
</div>
  
</div>
<div class="cleaner"></div>
</div> <!-- END of templatemo_main --><!-- END of tempatemo_bottom_wrapper -->

<div id="templatemo_footer_wrapper">
    <div id="templatemo_footer">
    	Copyright © STTC, Moulali | Designed by STTC
    </div> 
    <!-- END of templatemo_footer_wrapper -->
</div> <!-- END of templatemo_footer -->

</body>
</html>