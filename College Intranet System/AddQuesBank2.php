
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("cisdatabase", $con);

$sql="INSERT INTO onlineexam (QbId, Ques, Op1, Op2,Op3,Op4, CorrectAns)
VALUES
('$_POST[QbId]','$_POST[Ques]','$_POST[Op1]','$_POST[Op2]','$_POST[Op3]','$_POST[Op4]','$_POST[CorrectAns]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
mysql_close($con)

?>

