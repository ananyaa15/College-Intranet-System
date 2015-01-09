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

$sql="INSERT INTO person (UserId, FirstName,LastName,DOB,Gender,Address,PhoneNo,Email)
VALUES
('$_POST[UserId]','$_POST[FirstName]','$_POST[LastName]','$_POST[Dob]','$_POST[Gender]','$_POST[Address]','$_POST[PhoneNo]','$_POST[EmailId]')";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }


$sql="INSERT INTO login (UserId, Role)
VALUES
('$_POST[UserId]','$_POST[Role]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
mysql_close($con)

?>
</body>
</html>
