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
/*
$sql="SELECT TeacherId from teacher WHERE DeptId = '".$q."'";

$result = mysql_query($sql);


echo '<select name="NewH" id="NewH" onchange="showMe()">';
echo '<option value="">Select Head</option>';  
while($myrow = mysql_fetch_array($result))
{
echo '<option value='.$myrow['TeacherId'].'>'.$myrow['TeacherId'].'</option>';  
}  
echo '</select>';
*/
$sql="SELECT * from class WHERE ClassId = '".$q."'";

$result = mysql_query($sql);
while($row=mysql_fetch_array($result))
{
  $DeptId=$row['DeptId'];
  echo $DeptId;
  
  $Semester=$row['Semester']; 
  echo $Semester;
}
$timeslot=array("9.15-10.15","10.15-11.15","11.15-12.15","1.00-2.00","2.00-3.00","3.00-4.000","4.00-5.00");
$sql="SELECT * from subject WHERE DeptId = '".$DeptId."' AND Semester='".$Semester."'";

$sql2="SELECT * from teacher";


echo "<table><tr><th></th><th>MONDAY</th>
<th>TUESDAY</th>
<th>WEDNESDAY</th>
<th>THURSDAY</th>
<th>FRIDAY</th>
<th>SATURDAY</th></tr>";
for ($i=0; $i<7; $i++)
{
	echo "<tr><td>".$timeslot[$i]."</td>";
	for($j=0;$j<6;$j++)
	{
		echo "<td>";
		$result = mysql_query($sql);
		//echo "<select id='SubjectId' >";



		$sid= "SubjectId".$i.$j;
		echo "<select id='".$sid."' name='".$sid."'>";
		while($row=mysql_fetch_array($result))
		{  
			 echo "<option value=".$row['SubjectId'].">".$row['SubjectName']."</option>";  
		}
		echo "</select></br>";
		
		$result2 = mysql_query($sql2);
		$tid= "TeacherId".$i.$j;
		echo "<select id='".$tid."' name='".$tid."'>";
		while($row=mysql_fetch_array($result2))
		{  
			 echo "<option value=".$row['TeacherId'].">".$row['TeacherId']."</option>";  
		}
		echo "</select></td>";	
	}
	echo "</tr>";
}
echo "</table>";

mysql_close($con);
?>
</body>
</html>
