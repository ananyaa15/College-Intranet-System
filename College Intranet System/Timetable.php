<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script type="text/javascript">
function ShowTimetable(str)
{
if (str=="")
  {
  document.getElementById("Timetable").innerHTML="";
  
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
    document.getElementById("Timetable").innerHTML=xmlhttp.responseText;	
    }
  }
xmlhttp.open("GET","getTimetable.php?q="+str,true);
xmlhttp.send();
}
</script>


</head>

<body>
<table width="800" border="0">
  <tr>
    <th scope="col">&nbsp;</th>
  </tr>
  
    <td><form id="form1" name="form1" method="post" action="Timetable2.php">
      <label>Select Class
      <?php
$hostname="localhost";
$username="root";
$password="";
$link=mysql_connect($hostname,$username,$password);
mysql_select_db("cisdatabase") or die("unable to connect");
$result=mysql_query("select ClassId  from class");
 
echo '<select name="ClassId" Id="ClassId" onchange="ShowTimetable(this.value)">'; 
echo '<option value="">Select Class</option>'; 
while($myrow = mysql_fetch_array($result))
{
echo '<option value='.$myrow['ClassId'].'>'.$myrow['ClassId'].'</option>';  
}  
echo "</select>";

?>
      </label><div id="Timetable"></div>
<input type="Submit" Value="Submit"/>
	  </form>
  &nbsp;
  
  <tr>
    <td><p>&nbsp;</p>
      <p>&nbsp;</p></td>
  </tr>
</table>

</body>
</html>
