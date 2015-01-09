<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("cisdatabase", $con);
$result = mysql_query("SELECT  MaxRno, TotalStudent FROM class WHERE ClassId='$_POST[ClassId]' ");

while($row = mysql_fetch_array($result))
{
	$RollNo=$row['MaxRno'];
	$totalstud=$row['TotalStudent'];	
}
$RollNo++;
$totalstud++;
$result=mysql_query("Select FirstName,LastName from person WHERE UserId='$_POST[StudentId]'");
while($row=mysql_fetch_array($result))
{
	$studname=$row['FirstName']." ".$row['LastName'];
}
$sql="INSERT INTO student (StudentId, StudentName, ClassId, RollNo)
VALUES
('$_POST[StudentId]','$studname','$_POST[ClassId]','$RollNo')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

$sql="UPDATE class SET MaxRno='$RollNo' ,TotalStudent='$totalstud'
WHERE ClassId='$_POST[ClassId]'";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
mysql_close($con)

?>
</body>
</html>
