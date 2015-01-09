
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("cisdatabase", $con);
$result = mysql_query("SELECT  * FROM cst ORDER BY (CstId) ");
$CstId="CST0"; // if no records are present
while($row = mysql_fetch_array($result))
{
	$CstId=$row['CstId'];	
}
$Id=substr($CstId, 3); // NOTICE has 6 characters
$Id++;
$CstId="CST".$Id;

$sql="INSERT INTO cst (CstId, ClassId, SubjectId, TeacherId)
VALUES
('$CstId','$_POST[ClassId]','$_POST[SubjectId]','$_POST[TeacherId]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
mysql_close($con)

?>

