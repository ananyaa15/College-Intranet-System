<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table width="800" border="0">
  <tr>
    <th height="63" scope="col">&nbsp;</th>
  </tr>
  <tr>
    <td height="239"><form id="form1" name="form1" method="post" action="AddSubject2.php">
      <label>Department Name
       <?php
$hostname="localhost";
$username="root";
$password="";
$link=mysql_connect($hostname,$username,$password);
mysql_select_db("cisdatabase") or die("unable to connect");
$result=mysql_query("select *  from department ");
if($result)
{ 
echo '<select name="DeptId">'; 
while($myrow = mysql_fetch_array($result))
{
echo '<option value='.$myrow['DeptId'].'>'.$myrow['DeptName'].'</option>';  
}  
echo "</select>";
}
?> 
        </label>
      <p>
        <label>Semester 
        <select name="Semester">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
                </select>
        </label>
</p>
      <p>
        <label>Subject Name
        <input type="text" name="SubjectName" />
        </label>
      </p>
      <p>
        <label>Is Elective
        <input name="Elective" type="radio" value="YES" />
        </label>
      </p>
      <p>
        <input type="submit" name="ADD" value="Add" />
      </p>
    </form>
    </td>
  </tr>
  <tr>
    <td height="249">&nbsp;</td>
  </tr>
</table>

</body>
</html>
