<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="100%" border="0">
 
  <tr>
    <td><strong>COURSES OFFERED IN JANUARY :</strong></td>
  </tr>
  <tr>
    <td><span class="welcome">
      <?php
  include("personal_db.inc");
$sql1="select * from  course_cal where month='jan'" ;
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
  <tr>
    <td><strong>COURSES OFFERED IN FEBRUARY :</strong></td>
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
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>COURSES OFFERED IN MARCH :</strong></td>
  </tr>
  <tr>
    <td><span class="welcome">
      <?php
  include("personal_db.inc");
$sql1="select * from  course_cal where month='Mar'" ;
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
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>COURSES OFFERED IN APRIL :</strong></td>
  </tr>
  <tr>
    <td><span class="welcome">
      <?php
  include("personal_db.inc");
$sql1="select * from  course_cal where month='Apr'" ;
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
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>COURSES OFFERED IN MAY :</strong></td>
  </tr>
  <tr>
    <td><span class="welcome">
      <?php
  include("personal_db.inc");
$sql1="select * from  course_cal where month='May'" ;
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
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>COURSES OFFERED IN JUNE :</strong></td>
  </tr>
  <tr>
    <td><span class="welcome">
      <?php
  include("personal_db.inc");
$sql1="select * from  course_cal where month='Jun'" ;
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
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>COURSES OFFERED IN JULY :</strong></td>
  </tr>
  <tr>
    <td><span class="welcome">
      <?php
  include("personal_db.inc");
$sql1="select * from  course_cal where month='jul'" ;
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
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>COURSES OFFERED IN AUGUST :</strong></td>
  </tr>
  <tr>
    <td><span class="welcome">
      <?php
  include("personal_db.inc");
$sql1="select * from  course_cal where month='Aug'" ;
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
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>COURSES OFFERED IN SEPTEMBER :</strong></td>
  </tr>
  <tr>
    <td><span class="welcome">
      <?php
  include("personal_db.inc");
$sql1="select * from  course_cal where month='Sep'" ;
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
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>COURSES OFFERED IN OCTOBER :</strong></td>
  </tr>
  <tr>
    <td><span class="welcome">
      <?php
  include("personal_db.inc");
$sql1="select * from  course_cal where month='Oct'" ;
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
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>COURSES OFFERED IN NOVEMBER :</strong></td>
  </tr>
  <tr>
    <td><span class="welcome">
      <?php
  include("personal_db.inc");
$sql1="select * from  course_cal where month='Nov'" ;
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
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>COURSES OFFERED IN DECEMBER :</strong></td>
  </tr>
  <tr>
    <td><span class="welcome">
      <?php
  include("personal_db.inc");
$sql1="select * from  course_cal where month='Dec'" ;
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
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>