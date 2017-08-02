<?php
session_start();
if(!isset($_SESSION['email']))
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>

<body>

<table width="100%" height="308" border="0" align="right">
        <tr>
          <td  height="65" bgcolor="#6e6e6e"><h1><span class="style1">NOTICE BOARD</span></h1></td>
        </tr>
        <tr>
          <td height="600" bgcolor="#C5C5C5"><?php
		  
include("personal_db.inc");


$sql1="select * from notice where status='active' "  ;
$data1=mysql_query($sql1);
$count=mysql_num_rows($data1);
//echo $count;
//echo $sql1;
$no_pages=$count/6;
$no_pages=ceil($no_pages);
if(isset($_GET['start']))
{
$st= $_GET['start'];
}
else
{
$st=0;
}


if(isset($_GET['end']))
{
$en=6;
}
else
{
$en=6;
}

if(isset($_GET['start']))
{
$no=$_GET['start']+1;
}
else
{
$no=1;
}
//echo $status;
if($count!=0)
{








$sql="select * from notice where status='active' order by id desc limit $st,$en ";

$res=mysql_query($sql);

while($data=mysql_fetch_array($res))
{
	
	$id=$data['id'];
	//$share=$data['share'];
	
	//$sql2="select * from  comment where photo_id='$id' order by photo_id limit $second_count,2 " ;
//$data2=mysql_query("select * from  comment where photo_id='$id'  ");
//$count2=mysql_fetch_array($data2);
	
	
	

	
$res1=mysql_query($sql1);

$data1=mysql_fetch_array($res1);

	
	
	
	echo "<div id='pranay'><div id='blue_link'>";
echo "<table width='634' height='50' border='0'>";
  echo "<tr>";
    echo "<td width='60' height='78'>";echo "<input type='image' name='imageField' src='$data[1]'  width='60'  align='center' /></a>";echo "</td>";
    echo "<td colspan='3'>"; 
 echo "<strong>";
  echo $data[0];
 echo "</strong>";
 
 
  

echo "<h10></h10>";
echo "<strong>";
		echo "<h10></h10>";
		echo "</strong>";
		
  
  
  
  
   
 echo "<h10></h10>";
   echo "</td>";
  echo "</tr>";
  echo "<tr>";
    echo "<td rowspan='3'>&nbsp;</td>";
    echo "<td  height='20' colspan='2'>";
	
	$img=$data['img'];
	$len=strlen($img);
	
	if($len>19)
  
   //while($count2=mysql_fetch_array($data2))
  {
	
	
	
	
	
	
	 echo "<input type='image' name='imageField' src='$data[2]' width='300' align='left' /> <div align='center' /> </div></td>"; 
	echo "</tr>";
	
	 echo "<tr>";
    
    echo "<td  height='20' colspan='1'>";
	 echo "<div class='break'>$data[5]</div></td>";
    echo "<td width='247'></td>";
  echo "</tr>";
	
  }
	
	
	
	
	else
	{
	
  echo "<tr>";
    
    echo "<td  height='20' colspan='1'>";
	 echo "<div class='break'>$data[5]</div></td>";
    echo "<td width='247'></td>";
  echo "</tr>";
	}
  
  
 
	  
	  echo "<tr>";
    
    echo "<td  height='20' colspan='1'>";
	
	 echo "<div class='mediam'>"; echo "$data[4]"; echo "</div>";
	 
 
// $teja=mysql_query("select * from  notice where id='$id' and user_id='$lname' ");
//$teja1=mysql_num_rows($teja);
// while($teja2=mysql_fetch_array($teja))


 //echo "<a href='admin_delete_notice_image.php?id=$teja2[3]' title='Delete'><div class='left'>  Delete</div></a>"; 
 
 
 echo "</form>";
 
 echo "</td>";
  echo "</tr>";
  
 
  //echo "</table>";
  
  
  
  
  echo "<tr>";
    echo "<td height='30' colspan='4'>&nbsp;</td>
  </tr>
  <tr>";
    echo "<td height='23' colspan='4'>&nbsp;</td>
  </tr>";

$no++;
}
echo "<table>";
echo "<tr><div ><td width='80'>Next page</td>";
echo "<td width='600'>";
for($i=1;$i<=$no_pages;$i++)
		{
			$start=($i-1)*6;
			$end=$i*6;
			echo"<a href='notice.php?start=$start&end=$end'>$i</a> &nbsp;";
		}

echo "</td></div></tr>";

echo "</table>";
echo "</div></div>";
}

?></td>
        </tr>
</table>




</body>
</html>