<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script type="text/javascript">
function ShowSubject(str)
{
var c=document.getElementById("ClassId").value;
if (str=="")
  {
  document.getElementById("s").innerHTML="";
  
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
    document.getElementById("s").innerHTML=xmlhttp.responseText;	
    }
  }
xmlhttp.open("GET","getSubject.php?q="+str+"&q2="+c,true);
xmlhttp.send();
}
</script>


</head>

<body>
<table width="946" height="252" border="0">
  <tr>
    <th height="53" scope="col">ASSIGN CLASSES AND SUBJECTS TO TEACHERS </th>
  </tr>
  <tr>
    <td><form id="form1" name="form1" method="post" action="AddCst2.php">
      <label>Select Class
      <?php
$hostname="localhost";
$username="root";
$password="";
$link=mysql_connect($hostname,$username,$password);
mysql_select_db("cisdatabase") or die("unable to connect");
$result=mysql_query("select ClassId  from class");
if($result)
{ 
echo '<select name="ClassId" Id="ClassId">'; 
while($myrow = mysql_fetch_array($result))
{
echo '<option value='.$myrow['ClassId'].'>'.$myrow['ClassId'].'</option>';  
}  
echo "</select>";
}

?>
      </label>
      <p>Select Semester
        <select name="semester" onchange="ShowSubject(this.value)">
		<option value="">Select Semester</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
        </select>
</p>
      <p>
        <label></label>
      Select Subject
      <div id="s"></div>
</p>
      <p>
        <label>Select Teacher
          <?php
$hostname="localhost";
$username="root";
$password="";
$link=mysql_connect($hostname,$username,$password);
mysql_select_db("cisdatabase") or die("unable to connect");
$result=mysql_query("select TeacherId  from teacher");
if($result)
{ 
echo '<select name="TeacherId">'; 
while($myrow = mysql_fetch_array($result))
{
echo '<option value='.$myrow['TeacherId'].'>'.$myrow['TeacherId'].'</option>';  
}  
echo "</select>";
}
?>
                  </label>
      </p>
      <p>
        <label>
        <input type="submit" name="Submit" value="Assign" />
        </label>
      </p>
    </form>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
