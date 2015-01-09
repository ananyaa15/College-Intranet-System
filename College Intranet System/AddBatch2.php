<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("cisdatabase", $con);

$ClassId=$_POST['ClassId'];
echo $ClassId;
//echo "ClassId=". $_SESSION['class'];
$sql="INSERT INTO batch 
VALUES
('$ClassId','A','$_POST[MentorA]','$_POST[sa]','$_POST[ea]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  
  $sql="INSERT INTO batch 
VALUES
('$ClassId','B','$_POST[MentorB]','$_POST[sb]','$_POST[eb]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  
  $sql="INSERT INTO batch 
VALUES
('$ClassId','C','$_POST[MentorC]','$_POST[sc]','$_POST[ec]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
mysql_close($con)

?>

