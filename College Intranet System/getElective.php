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

$sql="SELECT * FROM student WHERE StudentId = '".$q."'";


$result = mysql_query($sql);



while($row = mysql_fetch_array($result))
  {
 
 $class=$row['ClassId'];
 $sem=$row['Semester'];
 
  
 
  }
echo $class;
echo $sem;
$sql="SELECT DeptId FROM class WHERE ClassId = '".$class."'";


$result = mysql_query($sql);



while($row = mysql_fetch_array($result))
  {
 
 $dept=$row['DeptId'];
 }
 $sql="SELECT SubjectId,SubjectName from subject where DeptId= '".$dept."' AND Semester='".$sem."'";


$result = mysql_query($sql);

echo '<select name="ElectiveId">'; 
echo '<option value="">Select Elective</option>'; 
while($myrow = mysql_fetch_array($result))
{
echo '<option value='.$myrow['SubjectId'].'>'.$myrow['SubjectName'].'</option>';  
}  
echo "</select>";
 

mysql_close($con);
?>
</body>
</html>
