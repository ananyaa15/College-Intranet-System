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
$mentor=$_POST['Mentor'];
$start=$_POST['S'];
$end=$_POST['E'];

echo $mentor;
echo $start;
echo $end;
if($mentor=="")
mysql_query("UPDATE batch SET StartRNo='".$start."' ,EndRNo='".$end."' where ClassId='$_POST[ClassId]' and BatchName='$_POST[BatchName]'");
else
mysql_query("UPDATE batch SET MentorId='".$mentor."',StartRNo='".$start."' ,EndRNo='".$end."' where ClassId='$_POST[ClassId]' and BatchName='$_POST[BatchName]'");
mysql_close($con)

?>
</body>
</html>
