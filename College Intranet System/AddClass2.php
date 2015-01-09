<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("cisdatabase", $con);

$sql="INSERT INTO class (ClassId, DeptId, RoomNo,Semester)
VALUES
('$_POST[ClassName]','$_POST[DeptId]','$_POST[RoomNo]','$_POST[Semester]')";

if (mysql_query($sql,$con))
  {
  
/*$expire=time()+60*60;
setcookie("class", $_POST['ClassName'], $expire);




  header ("location: /AddBatch.php"); */
  
  }
mysql_close($con)

?>


