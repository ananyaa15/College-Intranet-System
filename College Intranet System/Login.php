<?php 
$dbuser = "root";
	$dbpass = "";
	$dbhost = "localhost";	
    mysql_connect($dbhost,$dbuser,$dbpass);
	mysql_select_db("CISdatabase");

$uname=$_POST['UserId']; 
$pass=$_POST['Password'];

$uname = mysql_real_escape_string($uname);
$pass = mysql_real_escape_string($pass);

$query = "Select * from Login where UserId ='".$uname."' AND Password='".$pass."';";
$result = mysql_query($query);
$count =mysql_num_rows($result);
		
if( $count == 1){
session_start();
$_SESSION['uname']="Kinjal";
$_SESSION['UserId']=$row['UserId'];
$_SESSION['Role']=$row['Role'];

header("location:LoginSuccess.php");

	
}
else
echo "Wrong UserName or Password";

?>