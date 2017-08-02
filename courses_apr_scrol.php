<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
  include("personal_db.inc");
$sql1="select * from  course_cal where month='Apr'"  ;
$data1=mysql_query($sql1);
$count=mysql_num_rows($data1);
if($count!=0)
{
		echo"<marquee behavior='scroll' width='100%' height='138px'  direction='up' onmouseover='this.stop();' onmouseout='this.start();'><table width='100%' border='0' cellpadding='0' cellspacing='0' >";

	{
	$sql1="select * from  course_cal where month='Apr' order by sr_no desc";
	$data=mysql_query($sql1);
	
	while($row=mysql_fetch_array($data))
		{
		 $forward=$row['course_n'];
		 echo "<tr>";		 
		 echo "<td><div class='break_word'><a href='courses_monthly.php' target='courses_monthly.php'>".$row['course_n']."</a></div></td>";
				echo "</tr>";
		}
	}

echo "</table></marquee>";
}
else
echo"No Courses";
?>
</body>
</html>
