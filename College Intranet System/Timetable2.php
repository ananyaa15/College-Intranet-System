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

$Timeslot=array("9.15-10.15","10.15-11.15","11.15-12.15","1.00-2.00","2.00-3.00","3.00-4.000","4.00-5.00");
$Day=array("MONDAY","TUESDAY","WEDNESDAY","THURSDAY","FRIDAY","SATURDAY");

$Class=$_POST['ClassId'];
for ($i=0; $i<7; $i++)
{
	for($j=0;$j<6;$j++)
	{
		$sid= "SubjectId".$i.$j;
		$Sub[$i][$j]= $_POST[$sid];
	
		$tid= "TeacherId".$i.$j;
		$Teach[$i][$j]= $_POST[$tid];
	
	}
}
for ($i=0; $i<7; $i++)
{
	for($j=0;$j<6;$j++)
	{
		$result=mysql_query("select * from cst where ClassId='".$Class."' AND TeacherId='".$Teach[$i][$j]."' AND SubjectId='".$Sub[$i][$j]."'");
		while($row=mysql_fetch_array($result))
		{
			$CstId=$row['CstId'];
		}
		if($CstId=="")
		{
			$result = mysql_query("SELECT  * FROM cst ORDER BY (CstId) ");
			$CstId="CST0"; // if no records are present
			while($row = mysql_fetch_array($result))
			{
				$CstId=$row['CstId'];	
			}
			$Id=substr($CstId, 3); // CST has 3 characters
			$Id++;
			$CstId="CST".$Id;
			
			$sql="INSERT INTO cst (CstId, ClassId, SubjectId, TeacherId)
			VALUES
			('$CstId','$Class','$Sub[$i][$j]','$Teach[$i][$j]')";
			
			if (!mysql_query($sql,$con))
			  {
			  die('Error: ' . mysql_error());
			  }	
		}
		$result = mysql_query("SELECT  * FROM timetable ORDER BY (CstDtId) ");
		$CstDtId="CSTDT0"; // if no records are present
		while($row = mysql_fetch_array($result))
		{
			$CstDtId=$row['CstDtId'];
				
		}
		echo $CstDtId;
		$Id=substr($CstDtId, 5); // CSTDT has 5 characters
		echo $Id;
		$Id++;
		$CstDtId="CSTDT".$Id;
			
		$sql="INSERT INTO timetable (CstDtId,CstId, Day,Timeslot) VALUES
			('$CstDtId','$CstId','$Day[$j]','$Timeslot[$i]')";
			
		if (!mysql_query($sql,$con))
		{
			die('Error: ' . mysql_error());
		}	
	
	}
}












mysql_close($con)

?>
</body>
</html>
