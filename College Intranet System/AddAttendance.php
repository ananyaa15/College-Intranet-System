<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	background-color: #666633;
}
-->
</style>
<script type="text/javascript">
function showSubjectStud(str)
{
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
xmlhttp.open("GET","getSubjectStud.php?q="+str,true);
xmlhttp.send();
}
</script>


</head>

<body>
<table width="800" height="500" border="0" align="center">
  <tr>
    <th height="99" bgcolor="#669933" scope="col">ADD ATTENDANCE </th>
  </tr>
  <tr>
    <td height="300"><form id="form3" name="form3" method="post" action="">
      <p>Date
        <select name="select">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
        </select>
        <select name="select2">
          <option value="jan">jan</option>
          <option value="feb">feb</option>
          <option value="mar">mar</option>
        </select>
        <select name="select3">
          <option value="2011">2011</option>
          <option value="2012">2012</option>
          <option value="2013">2013</option>
          </select>
      </p>
      <p>time
        <select name="select4">
          <option value="9:15">9:15</option>
          <option value="10:15">10:15</option>
          <option value="11:15">11:15</option>
        </select>
</p>
      <p>CLASS::
       
      <?php
$hostname="localhost";
$username="root";
$password="";
$link=mysql_connect($hostname,$username,$password);
mysql_select_db("cisdatabase") or die("unable to connect");
$result=mysql_query("select *  from class ");
if($result)
{ 
echo '<select name="ClassId" onchange="showSubjectStud(this.value)">'; 
echo '<option value="">Select Class</option>'; 
while($myrow = mysql_fetch_array($result))
{
echo '<option value='.$myrow['ClassId'].'>'.$myrow['ClassId'].'</option>';  
}  
echo "</select>";
}
?>
</p>
      <p><div id="s"></div></p>
     
      <input type="submit" name="Submit" value="Submit" />
      
    </form>
    <label><br />
    </label>
    <p><BR />
</p>
    </td>
  </tr>
  <tr>
    <td height="46" bgcolor="#669933">&nbsp;</td>
  </tr>
</table>
</body>
</html>
