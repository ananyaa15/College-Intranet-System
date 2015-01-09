
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">
function showDetails(str)
{
var str2=document.getElementById("ClassId");
//document.write(str2);
alert(str2.value);
if (str=="")
  {
  document.getElementById("Details").innerHTML="";
  
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
    document.getElementById("Details").innerHTML=xmlhttp.responseText;	
    }
  }
xmlhttp.open("GET","getMentorSE.php?q="+str+"&q2="+str2.value,true);
xmlhttp.send();
}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="ModifyBatch2.php">
<table width="800" border="0">
  <tr>
    <td colspan="4"><p>Select Class Name        
          <?php
$hostname="localhost";
$username="root";
$password="";
$link=mysql_connect($hostname,$username,$password);
mysql_select_db("cisdatabase") or die("unable to connect");
$result=mysql_query("select DISTINCT ClassId  from batch ");
if($result)
{ 
echo '<select name="ClassId" id="ClassId">'; 
while($myrow = mysql_fetch_array($result))
{
echo '<option value='.$myrow['ClassId'].'>'.$myrow['ClassId'].'</option>';  
}  
echo "</select>";
}
?></td>
  </tr>
  <tr>
    <td>
      <label>Select Batch
        <select name="BatchName" onchange="showDetails(this.value)">
			<option>Select Batch Name</option>
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
        </select>
        </label>
    
    </td>
  </tr>
  <tr>
    <td><div id="Details"></div></td>
  </tr>
  <tr>
          <td>MENTOR ID </td>
          <td><?php
$hostname="localhost";
$username="root";
$password="";
$link=mysql_connect($hostname,$username,$password);
mysql_select_db("cisdatabase") or die("unable to connect");
$result=mysql_query("select TeacherId  from teacher");
if($result)
{ 
echo '<select name="Mentor">'; 
echo '<option value="">Select New Mentor</option>';  
while($myrow = mysql_fetch_array($result))
{
echo '<option value='.$myrow['TeacherId'].'>'.$myrow['TeacherId'].'</option>';  
}  
echo "</select>";
}
?>
            &nbsp;</td></tr>
			<tr>
          <td>NEW START ROLL NO. </td>
          <td><input name="S" type="text" id="S" onblur="MM_validateForm('sa','','RisNum');return document.MM_returnValue" /></td>
          
        </tr>
        <tr>
          <td>NEW END ROLL NO. </td>
          <td><input name="E" type="text" id="E" onblur="MM_validateForm('ea','','RisNum');return document.MM_returnValue" /></td>
          
        </tr>
		<tr><td><input type="submit" name="Submit" value="Modify" /></td></tr>
</table>
</form>
</body>
</html>
