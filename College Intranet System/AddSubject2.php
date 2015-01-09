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


// For generating Primary Key
mysql_select_db("cisdatabase", $con);
$result = mysql_query("SELECT  * FROM subject ORDER BY (SubjectId) ");
$SubjectId="SUB0"; // if no records are present
while($row = mysql_fetch_array($result))
{
	$SubjectId=$row['SubjectId'];	
}
$Id=substr($SubjectId, 3); // SUB has 3 characters
$Id++;
$SubjectId="SUB".$Id;

$sql="INSERT INTO subject(SubjectId,DeptId,Semester,SubjectName,IsElective) 
VALUES
('$SubjectId','$_POST[DeptId]','$_POST[Semester]','$_POST[SubjectName]', '$_POST[Elective]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
mysql_close($con)
?>
</body>
</html>
