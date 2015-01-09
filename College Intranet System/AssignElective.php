<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script type="text/javascript">
function showStudent(str)
{
if (str=="")
  {
  document.getElementById("student").innerHTML="";
  
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
    document.getElementById("student").innerHTML=xmlhttp.responseText;	
    }
  }
xmlhttp.open("GET","getStudentElective.php?q="+str,true);
xmlhttp.send();
}
function showElective(str)
{
if (str=="")
  {
  document.getElementById("Elective").innerHTML="";
  
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
    document.getElementById("Elective").innerHTML=xmlhttp.responseText;	
    }
  }
xmlhttp.open("GET","getElective.php?q="+str,true);
xmlhttp.send();
}
</script>
</head>

<body>
<form id="form1" name="form1" method="post" action="AssignElective2.php">
<table width="800" border="0">
  
<tr>
  <td width="128"> Class </td>
  <td width="144">
      <?php
$hostname="localhost";
$username="root";
$password="";
$link=mysql_connect($hostname,$username,$password);
mysql_select_db("cisdatabase") or die("unable to connect");
$result=mysql_query("select *  from class ");
if($result)
{ 
echo '<select name="ClassId" onchange="showStudent(this.value)">'; 
echo '<option value="">Select Class</option>'; 
while($myrow = mysql_fetch_array($result))
{
echo '<option value='.$myrow['ClassId'].'>'.$myrow['ClassId'].'</option>';  
}  
echo "</select>";
}
?></td>
</tr>
<tr><td>Student</td><td><div id="student"></div></td></tr>
  <tr>
    <td>Select Elective</td>
	<td><div id="Elective"></div></td>
  </tr>
  <tr><td><input type="submit" name="Submit" value="Submit" /></td></tr>
</table>
</form>
</body>
</html>
