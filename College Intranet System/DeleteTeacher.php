<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table width="800" height="370" border="0" align="center">
  <tr>
    <th height="81" scope="col">&nbsp;</th>
  </tr>
  <tr>
    <td height="163"><form id="form1" name="form1" method="post" action="DeleteTeacher2.php">
      <label>
      <div align="center">
      </div>
      </label>
      <p>&nbsp;</p>
      <p>
        <label>
         <div align="center">
         <div align="center">Select Teacher Name
            <?php
$hostname="localhost";
$username="root";
$password="";
$link=mysql_connect($hostname,$username,$password);
mysql_select_db("cisdatabase") or die("unable to connect");
$result=mysql_query("select TeacherId from teacher ");
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
         </div>
        </label>
        <p align="center">&nbsp;</p>
        <p align="center">
          <input type="submit" name="Submit" value="Delete" />
        </p>
        <p>
        <label>
        <div align="center">
    </form>    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>

