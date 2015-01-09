<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<?php
$q=$_GET["q"];

$con = mysql_connect('localhost', 'root', '');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("cisdatabase", $con);

$sql="SELECT * FROM teacher WHERE TeacherId = '".$q."'";

$result = mysql_query($sql);

while($row = mysql_fetch_array($result))
  {
 $DeptId=$row['DeptId'];
$HeadId=$row['HeadId'];
  }
$sql="SELECT * FROM department WHERE DeptId = '".$DeptId."'";

$result = mysql_query($sql);



while($row = mysql_fetch_array($result))
  {
echo "<table><tr>";
echo "<td>" . $row['FirstName'] . "</td>";
echo "<td>Existing Department : </td>";
echo "<td>" . $row['DeptName'] . "</td>";
echo "<td>   Existing Hod : </td>";
echo "<td>" . $HeadId . "</td>";
echo "</tr></table>";
  }
  
mysql_close($con);
?>
</body>
</html>
