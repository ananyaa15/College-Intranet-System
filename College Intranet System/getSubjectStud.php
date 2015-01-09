<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<?php
$c=$_GET["q"];

$con = mysql_connect('localhost', 'root', '');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("cisdatabase", $con);
$sql="SELECT * FROM cst WHERE ClassId = '".$c."'";
$result = mysql_query($sql);

echo '<select name="SubjectId">'; 
echo '<option value="">Select Subject</option>'; 
while($myrow = mysql_fetch_array($result))
{
echo '<option value='.$myrow['SubjectId'].'>'.$myrow['SubjectName'].'</option>';  
}  
echo "</select>";
 
$sql="SELECT * FROM student WHERE ClassId = '".$c."'";
$result = mysql_query($sql);

echo "<table><tr><th>RollNo</th><th>Student Name</th><th>Attendance</th></tr>";


while($myrow = mysql_fetch_array($result))
{
echo "<tr><td>";
echo $myrow['RollNo'];
echo "</td><td>";
echo $myrow['StudentName'];
echo "</td><td>";
echo "<input type='checkbox' id=c".$row['RollNo']." checked='true'/>" ;
echo "</td></tr>";



}
echo "</table>";





mysql_close($con);
?>
</body>
</html>
