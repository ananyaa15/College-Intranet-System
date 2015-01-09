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
$name=$_POST['NewClassId'];
if($name=="")
	$name=$_POST['ClassId'];
$dept=$_POST['NewDept'];
$sem=$_POST['Semester'];
$room=$_POST['NewRoom'];


echo $name;
echo $dept;
echo $room;
echo $sem;
if($name!="")
mysql_query("UPDATE class SET ClassId='".$name."' where ClassId='$_POST[ClassId]'");
if($dept!="")
mysql_query("UPDATE class SET DeptId='".$dept."' where ClassId='$_POST[ClassId]'");
if($room!="")
mysql_query("UPDATE class SET RoomNo='".$room."' where ClassId='$_POST[ClassId]'");
if($sem!="")
mysql_query("UPDATE class SET Semester='".$sem."' where ClassId='$_POST[ClassId]'");
mysql_close($con)

?>
</body>
</html>
