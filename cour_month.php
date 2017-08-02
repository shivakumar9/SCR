<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="100%" border="0" height="100%">
  <tr>
    <td>COURSES :</td>
    <td>&nbsp;</td>
    <td><a href="cour_cal.php">Annual Course Calender</a></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><p>&nbsp;</p>
      <p>SIGNAL AND TELECOMMUNICATION TRAINING CENTER, Moula-ali, provides courses in both signalling and telecommunications to the newly recruited employees selected through RRB.</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>
    <td width="1%">&nbsp;</td>
    <td width="6%">&nbsp;</td>
  </tr>
  <tr>
    <td width="28%" align="left"> Refresher courses </td>
    <td width="3%" align="left">&nbsp;</td>
    <td colspan="3"><div>Refresher course for all technicians of SCR is given once for every 4 years, which is manditory. It helps in Refreshing knowledge of the trainee employees.</div></td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td width="62%">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="left">Initial courses </td>
    <td align="left">&nbsp;</td>
    <td colspan="3"><div>
      <p>Initial courses are given to newly recruited employees selected through RRB. They are trained in all subjects pertaining to signalling, from basics of signalling, basics of electrical &amp; electronic equipments, all signalling gears including modern signalling.</p>
    </div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Equipment courses </td>
    <td>&nbsp;</td>
    <td colspan="3"><div>Equipment Courses are the specialized courses for specific equipments like BLOCK INSTRUMENTS, POINTS, COLOR LIGHT SIGNALS, INTEGRATED POWER SUPPLY (IPS), SSDAC, SSI &amp; DATA LOGGERS, TRACK CIRCUITS &amp; POINT MACHINES.</div>
      &nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Induction courses </td>
    <td>&nbsp;</td>
    <td colspan="3"><div>It &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; to the group D staff like helpers, to give them sufficient working knowledge.</div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Foundation courses </td>
    <td>&nbsp;</td>
    <td colspan="3"><div>Foundation courses is given to the employees who are promted from group D(Helpers) to group C(Technicians).</div>
      &nbsp;</td>
  </tr>
  <tr>
    <td height="20">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5"><?php
            include("personal_db.inc");
            $sql="select * from  courses where status='active'"  ;
$data=mysql_query($sql);
	echo "<table width='100%'>";
while($res=mysql_fetch_array($data))
{
$text=$res['course_text'];
$title=$res['course_name'];

echo"<tr><td width='33%'>$title</td><td></td></tr>";
echo "<tr><td></td><td><div id='naveen'>$text</div></td></tr>";
 }    
 echo "</table>";     
          ?>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>
  </tr>
</table>
</body>
</html>