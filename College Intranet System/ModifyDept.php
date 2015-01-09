<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">
function showHod(str)
{
if (str=="")
  {
  document.getElementById("Hod").innerHTML="";
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
    document.getElementById("Hod").innerHTML=xmlhttp.responseText;
	//showNewHod(str);
    }
  }
xmlhttp.open("GET","getHod.php?q="+str,true);
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
    <th height="96" bgcolor="#669933" scope="col">&nbsp;</th>
  </tr>
  <tr>
    <td height="290">
<table border="1">
<form id="form1" name="form1" method="post" action="ModifyDept2.php">
<tr><td>Existing Department Name </td>
<td>
      <?php
$hostname="localhost";
$username="root";
$password="";
$link=mysql_connect($hostname,$username,$password);
mysql_select_db("cisdatabase") or die("unable to connect");
$result=mysql_query("select *  from department ");
if($result)
{ 
echo '<select name="DeptId" onchange="showHod(this.value)">'; 
echo '<option value="">Select Department</option>'; 
while($myrow = mysql_fetch_array($result))
{
echo '<option value='.$myrow['DeptId'].'>'.$myrow['DeptName'].'</option>';  
}  
echo "</select>";
}
?>  
</td></tr><tr><td colspan="2">
        <div id="Hod"></div>
        </td></tr>
<tr><td colspan="2">
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
