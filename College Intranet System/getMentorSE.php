<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<?php
$q=$_GET["q"];
$q2=$_GET["q2"];

$con = mysql_connect('localhost', 'root', '');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("cisdatabase", $con);

$sql="SELECT * FROM batch WHERE ClassId = '".$q2."' AND BatchName='".$q."'";

$result = mysql_query($sql);

while($row = mysql_fetch_array($result))
  {
echo "Existing Mentor : ";
echo  $row['MentorId'];
echo "&nbsp;&nbsp;&nbsp;&nbsp;Start Roll No. : ";
echo $row['StartRNo'] ;
echo "&nbsp;&nbsp;&nbsp;&nbsp;End Roll No. : ";
echo $row['EndRNo'] ;
  }
  
mysql_close($con);
?>
</body>
</html>
