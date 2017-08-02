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

<body id="home" bgcolor="#D1E7E7">
<div id="templatemo_header_wrapper">
  <div id="logo" align="left"><a href="index.php"></a></div>
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
        <li><a href="#" class="selected">Courses</a>
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
  <!-- end of templatemo_menu -->
  <div class="cleaner"></div>
  <div class="cleaner"></div>
</div>
<!-- END of templatemo_header_wrapper -->
<div id="templatemo_main">
  <div id="shiva">
    <div id="box"></div>
    <table width="100%" border="1" cellspacing="0" bordercolor="#C4D8E1">
      <tr align="center">
        <td colspan="6"><h3>MONTHLY COURSES CALENDER</h3></td>
      </tr>
      <tr align="center">
        <td><a href="courses_jan.php">JANUARY</a></td>
        <td><a href="courses_feb.php" >FEBRUARY</a></td>
        <td><a href="courses_mar.php" >MARCH</a></td>
        <td><a href="courses_apr.php" >APRIL</a></td>
        <td><a href="courses_may.php" >MAY</a></td>
        <td><a href="courses_jun.php" >JUNE</a></td>
      </tr>
      <tr align="center">
        <td><a href="courses_jul.php" >JULY</a></td>
        <td><a href="courses_aug.php" >AUGUST</a></td>
        <td><a href="courses_sep.php" >SEPTEMBER</a></td>
        <td><a href="courses_oct.php" >OCTOBER</a></td>
        <td><a href="courses_nov.php" >NOVEMBER</a></td>
        <td><a href="courses_dec.php" >DECEMBER</a></td>
      </tr>
      <tr align="center">
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="2"><a href="courses_monthly.php">ALL</a></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>
    <p>&nbsp;</p>
    <table width="100%" border="0">
      <tr>
        <td align="center">&nbsp;</td>
      </tr>
      <tr>
        <td>COURSES OFFERED IN FEBRUARY :</td>
      </tr>
      <tr>
        <td><span class="welcome">
          <?php
  include("personal_db.inc");
$sql1="select * from  course_cal where month='Feb'" ;
$data1=mysql_query($sql1);
$count=mysql_num_rows($data1);
//echo $count;
//echo $sql1;

//echo $status;

		echo"<table width='100%' border='0'  bgcolor=\"#DCE8ED\">";
		echo"<tr align='left' height='40px'>";
		
		  echo"<th>COURSE</th>";
			echo"<th>COURSE NAME</th>";
			echo"<th> BATCH NO </th>";
			echo"<th> FROM </th>";
			echo"<th> TO </th>";
					echo"</tr>";
						$no=1;
		while($row=mysql_fetch_array($data1))
		{
	
		 echo "<tr height='30px'>";
		 echo "<td>" .$row['course']. "</td>";
		 echo "<td>" .$row['course_n']. "</td>";
		 echo "<td>" .$row['batch_no']. "</td>";
		 echo "<td>" .$row['c_from']. "</td>";
		 echo "<td>".$row['c_to']."</td>";
		echo "</tr>";
	
		$no++;
		 
		}
		
echo "</table>";

	

		
			
	
?>
        </span></td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
      </tr>
    </table>
  </div>
</div>
<!-- END of templatemo_main --><!-- END of tempatemo_bottom_wrapper -->

<div id="templatemo_footer_wrapper">
    <div id="templatemo_footer">
    	Copyright © STTC, Moulali | Designed by STTC
    </div> <!-- END of templatemo_footer_wrapper -->
</div> <!-- END of templatemo_footer -->

</body>
</html>