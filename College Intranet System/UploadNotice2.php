<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
// For generating Primary Key
mysql_select_db("cisdatabase", $con);
$result = mysql_query("SELECT  * FROM noticeboard ORDER BY (NoticeId) ");
$NoticeId="NOTICE0"; // if no records are present
while($row = mysql_fetch_array($result))
{
	$NoticeId=$row['NoticeId'];	
}
$Id=substr($NoticeId, 6); // NOTICE has 6 characters
$Id++;
$NoticeId="NOTICE".$Id;


$UserId="M2008CM1042"; //Take it from Session...
echo $_POST[view];
if($_POST[view]=="ALL")
{
	echo "inside if";
	$DeptId="ALL";
	$Year="ALL";
	$ApplicableTo="ALL";
}
else
{
	$DeptId=$_POST['selectDept'];
	$Year=$_POST['selectYear'];
	$ApplicableTo=$_POST['selectApplicable'];
}
$Category=$_POST['selectCat'];
$Notice=$_POST['Notice'];
$DeptId=mysql_real_escape_string($DeptId);
$Year=mysql_real_escape_string($Year);
$ApplicableTo=mysql_real_escape_string($ApplicableTo);
$Category=mysql_real_escape_string($Category);
$Notice=mysql_real_escape_string($Notice);
echo $Notice;
echo $DeptId;
echo $Year;
echo $ApplicableTo;
echo $Category;
$sql="INSERT INTO noticeboard (NoticeId, UserId,Notice,DeptId, Year,ApplicableTo,Category)
VALUES
('$NoticeId','$UserId','$Notice','$DeptId','$Year','$ApplicableTo','$Category')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
mysql_close($con)




?>