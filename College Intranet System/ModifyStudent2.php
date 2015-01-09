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
echo $_POST['ClassId'];
$c=$_POST['NewClassId'];
$c2=$_POST['ClassId'];
echo $c;
$s=$_POST['Student'];
echo $s;


if($c!="" && $c2!=$c)
{

mysql_query("UPDATE student SET ClassId='".$c."'  where StudentId='$_POST[Student]'");

$result = mysql_query("SELECT  MaxRno, TotalStudent FROM class WHERE ClassId='$_POST[NewClassId]' ");

while($row = mysql_fetch_array($result))
{
	$RollNo=$row['MaxRno'];
	echo $RollNo;
	$totalstudnew=$row['TotalStudent'];	
}
$RollNo++;
$totalstudnew++;
echo $RollNo;

$sql="UPDATE class SET MaxRno='$RollNo' ,TotalStudent='$totalstudnew'
WHERE ClassId='$_POST[NewClassId]'";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
mysql_query("UPDATE student SET RollNo='$RollNo' where StudentId='$_POST[Student]'");
// Old Class totalStudent decrement
$result = mysql_query("SELECT   TotalStudent FROM class WHERE ClassId='$_POST[ClassId]' ");

while($row = mysql_fetch_array($result))
{	
	$totalstudold=$row['TotalStudent'];	
}

$totalstudold--;

$sql="UPDATE class SET TotalStudent='$totalstudold'
WHERE ClassId='$_POST[ClassId]'";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
}
mysql_close($con)

?>
</body>
</html>
