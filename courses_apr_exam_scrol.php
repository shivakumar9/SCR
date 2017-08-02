<?php
  include("personal_db.inc");


		echo"<marquee behavior='scroll' width='100%' height='220px'  direction='up' onmouseover='this.stop();' onmouseout='this.start();'><table width='100%' border='0' cellpadding='0' cellspacing='0' >";








 include("personal_db.inc");
            $sql="select * from  examination"  ;
$data=mysql_query($sql);
while($res=mysql_fetch_array($data))
{
$text=$res['img1'];
$title=$res['subject'];

echo"<tr><td width='80%'><a href='notices_new.php' target='notices_new.php'>$title</a></td></tr>";

 }    









$sql2="select * from evnt_title where status='active' ";
$res2=mysql_query($sql2);
while($row2=mysql_fetch_array($res2))
{
$event_name=$row2['event_name'];
$date=$row2['date'];
echo "<tr><td><a href='evnt_pht.php?date=$date' target='evnt_pht.php?date=$date'>$event_name</a></td></tr>";
}





$sql2="select * from infra_title where status='active' ";
$res2=mysql_query($sql2);
while($row2=mysql_fetch_array($res2))
{
$event_name=$row2['event_name'];
$date=$row2['date'];
echo "<tr><td><a href='infra_details.php?date=$date' target='infra_details.php?date=$date'>$event_name</a></td></tr>";
}







echo "</table></marquee>";

?>
