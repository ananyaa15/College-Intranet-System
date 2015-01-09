<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">
function showDeptRoom(str)
{
if (str=="")
  {
  document.getElementById("DeptRoom").innerHTML="";
  
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
   if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("DeptRoom").innerHTML=xmlhttp.responseText;	
    }
  }
xmlhttp.open("GET","getDeptRoom.php?q="+str,true);
xmlhttp.send();
}
</script>









<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	background-color: #666633;
}

-->
</style></head>

<body>
<table width="800" height="440" border="0" align="center">
  <tr>
    <td height="290">
<table border="1">
<form id="form1" name="form1" method="post" action="ModifyClass2.php">

<tr>
  <td width="128">Existing Class Name </td>
  <td width="144">
      <?php
include ("db.php");
$result=mysql_query("select *  from class ");
if($result)
{ 
echo '<select name="ClassId" onchange="showDeptRoom(this.value)">'; 
echo '<option value="">Select Class</option>'; 
while($myrow = mysql_fetch_array($result))
{
echo '<option value='.$myrow['ClassId'].'>'.$myrow['ClassId'].'</option>';  
}  
echo "</select>";
}
?></td>
<td colspan="6">
<div id="DeptRoom">
  </div></td>
<tr>
  <td>      New Class Name</td>
  <td><input type="text" name="NewClassId" /></td>
  <td>New Semester</td>
  <td><select name="Semester">
  			<option value="">Select New Semester</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
                </select></td>
        <td>New Department </td>
        <td><?php
$hostname="localhost";
$username="root";
$password="";
$link=mysql_connect($hostname,$username,$password);
mysql_select_db("cisdatabase") or die("unable to connect");
$result=mysql_query("select *  from department ");
if($result)
{ 
echo '<select name="NewDept" >'; 
echo '<option value="">Select New Dept</option>'; 
while($myrow = mysql_fetch_array($result))
{
echo '<option value='.$myrow['DeptId'].'>'.$myrow['DeptName'].'</option>';  
}  
echo "</select>";
}
?></td>
        <td>New Room No. </td>
        <td>
        <?php
$hostname="localhost";
$username="root";
$password="";
$link=mysql_connect($hostname,$username,$password);
mysql_select_db("cisdatabase") or die("unable to connect");
$result=mysql_query("select *  from class ");
if($result)
{ 
echo '<select name="NewRoom" >'; 
echo '<option value="">Select New Room</option>'; 
while($myrow = mysql_fetch_array($result))
{
echo '<option value='.$myrow['RoomNo'].'>'.$myrow['RoomNo'].'</option>';  
}  
echo "</select>";
}
?>        </td>
<tr><td colspan="6">
        <input type="submit" name="Submit" value="Modify" />
      </td></tr>
    </form></table>    </td>
  </tr>
  <tr>
    <td height="46" bgcolor="#669933">&nbsp;</td>
  </tr>
</table>
</body>
</html>
