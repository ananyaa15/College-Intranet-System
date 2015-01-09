<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<?php
$c=$_GET["q2"];
$sem=$_GET["q"];
$con = mysql_connect('localhost', 'root', '');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("cisdatabase", $con);
$sql="SELECT * FROM class WHERE ClassId = '".$c."'";
$result = mysql_query($sql);

while($myrow = mysql_fetch_array($result))
{
$dept=$myrow['DeptId'];
$sem=$myrow['Semester'];
} 
$sql="SELECT * FROM subject WHERE DeptId= '".$dept."' and Semester='".$sem."'";

$result = mysql_query($sql);

echo '<select name="SubjectId">'; 
echo '<option value="">Select Subject</option>'; 
while($myrow = mysql_fetch_array($result))
{
echo '<option value='.$myrow['SubjectId'].'>'.$myrow['SubjectName'].'</option>';  
}  
echo "</select>"; 

mysql_close($con);
?>
</body>
</html>
