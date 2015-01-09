
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("cisdatabase", $con);

$sql="INSERT INTO department (DeptName)
VALUES
('$_POST[DeptName]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
mysql_close($con)

?>

