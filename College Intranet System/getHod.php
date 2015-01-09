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

$sql="SELECT * FROM department WHERE DeptId = '".$q."'";

$result = mysql_query($sql);

/*echo "<table><tr>";
echo "<td>" . $row['FirstName'] . "</td>";
echo "<td>Existing Department : </td>";
echo "<td>" . $row['DeptName'] . "</td>";
echo "<td>   Existing Room No. : </td>";
echo "<td>" . $RoomNo . "</td>";
echo "</tr></table>";*/
echo '<table><tr><td>Existing Head Of Department:</td>';
while($row = mysql_fetch_array($result))
  {
 echo '<td>' . $row['HodId'] . '</td></tr>';
 }
 echo '<tr><td>Select New Department</td>';
 echo '<td><input type="text" name="NewDeptName" /></td></tr>';
 echo '<tr><td>Select New Head of Department</td>';
 echo '<td><select name="NewHod" >'; 
echo '<option value="">Select New Hod</option>';
$sql="SELECT * FROM teacher WHERE DeptId = '".$q."'";
$result = mysql_query($sql);
 
while($myrow = mysql_fetch_array($result))
{
echo '<option value='.$myrow['TeacherId'].'>'.$myrow['TeacherId'].'</option>';  
}  
echo "</select></td></tr></table>";

mysql_close($con);
?>
</body>
</html>
