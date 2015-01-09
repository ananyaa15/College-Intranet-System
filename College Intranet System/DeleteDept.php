<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table width="800" height="439" border="0" align="center">
  <tr>
    <th height="90" scope="col">&nbsp;</th>
  </tr>
  <tr>
    <td height="281"><form id="form1" name="form1" method="post" action="DeleteDept2.php">
      <label>
      <div align="center">Department Name
	   <?php
$hostname="localhost";
$username="root";
$password="";
$link=mysql_connect($hostname,$username,$password);
mysql_select_db("cisdatabase") or die("unable to connect");
$result=mysql_query("select *  from department ");
if($result)
{ 
echo '<select name="DeptName">'; 
while($myrow = mysql_fetch_array($result))
{
echo '<option value='.$myrow['DeptName'].'>'.$myrow['DeptName'].'</option>';  
}  
echo "</select>";
}
?>  
        <br />
        <br />
        <br />
        <input type="submit" name="Submit" value="Delete" />
      </div>
      </label>
    </form>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
