<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="100%" border="0">
  <tr>
    <td align="center">SIGNALLING COURSES</td>
  </tr>
  <tr>
    <td><span class="welcome">
      <?php
  include("personal_db.inc");


$sql1="select * from  course_cal where course='Signalling' " ;
$data1=mysql_query($sql1);
$count=mysql_num_rows($data1);
//echo $count;
//echo $sql1;

//echo $status;
if($count!=0)
{
		echo"<table width='100%' border='1'>";
		echo"<tr>";
		echo"<th>Sr NO</th>";
		  echo"<th>Course</th>";
			echo"<th>Course Name</th>";
			echo"<th> Batch No </th>";
			echo"<th> From </th>";
			echo"<th> To </th>";
					echo"</tr>";
						$no=1;
		while($row=mysql_fetch_array($data1))
		{
	$sr_no=$row['sr_no'];
		$course=$row['course'];
		$course_n=$row['course_n'];
		$batch_no=$row['batch_no'];
		$c_from=$row['c_from'];
		$c_to=$row['c_to'];
		 echo "<tr>";
		 echo "<td>$no</td>"; 
		 echo "<td>" .$row['course']. "</td>";
		 echo "<td>".$row['course_n']."</td>";
		  echo "<td>" .$row['batch_no']. "</td>";
		 echo "<td>".$row['c_from']."</td>";
		  echo "<td>" .$row['c_to']. "</td>";
		 			
		echo "</tr>";
	
		$no++;
		 
		}
		
echo "</table>";
}

	

		
			
			

else
{
 echo"No Students";
}
?>
    </span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center">TELECOM COURSES</td>
  </tr>
  <tr>
    <td><span class="welcome">
      <?php
  include("personal_db.inc");


$sql1="select * from  course_cal where course='Telecom' " ;
$data1=mysql_query($sql1);
$count=mysql_num_rows($data1);
//echo $count;
//echo $sql1;

//echo $status;
if($count!=0)
{
		echo"<table width='100%' border='1'>";
		echo"<tr>";
		echo"<th>Sr NO</th>";
		  echo"<th>Course</th>";
			echo"<th>Course Name</th>";
			echo"<th> Batch No </th>";
			echo"<th> From </th>";
			echo"<th> To</th>";
					echo"</tr>";
						$no=1;
		while($row=mysql_fetch_array($data1))
		{
	$sr_no=$row['sr_no'];
		$course=$row['course'];
		$course_n=$row['course_n'];
		$batch_no=$row['batch_no'];
		$c_from=$row['c_from'];
		$c_to=$row['c_to'];
		 echo "<tr>";
		 echo "<td>$no</td>"; 
		 echo "<td>" .$row['course']. "</td>";
		 echo "<td>".$row['course_n']."</td>";
		  echo "<td>" .$row['batch_no']. "</td>";
		 echo "<td>".$row['c_from']."</td>";
		  echo "<td>" .$row['c_to']. "</td>";
		echo "</tr>";
	
		$no++;
		 
		}
		
echo "</table>";
}

	

		
			
			

else
{
 echo"No Students";
}
?>
    </span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>