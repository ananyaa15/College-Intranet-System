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
$name=$_POST['NewDeptName'];
if($name!="")
	mysql_query("UPDATE department SET DeptName='".$name."' where DeptId='$_POST[DeptId]'");
$hod=$_POST['NewHod'];

echo $name;
echo $hod;
if($hod!="")
mysql_query("UPDATE department SET HodId='".$hod."' where DeptId='$_POST[DeptId]'");
mysql_close($con)

?>
</body>
</html>
