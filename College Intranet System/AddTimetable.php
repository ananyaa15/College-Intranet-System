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
function SetAllCheckBoxes(form3, FieldName, CheckValue)
{
	if(!document.forms[FormName])
		return;
	var objCheckBoxes = document.forms[FormName].elements[FieldName];
	if(!objCheckBoxes)
		return;
	var countCheckBoxes = objCheckBoxes.length;
	if(!countCheckBoxes)
		objCheckBoxes.checked = CheckValue;
	else
		// set the check value for all check boxes
		for(var i = 0; i < countCheckBoxes; i++)
			objCheckBoxes[i].checked = CheckValue;
}
</script>

</head>

<body>
<table width="800" height="500" border="0" align="center">
  <tr>
    <th height="99" bgcolor="#669933" scope="col">ADD TIMETABLE </th>
  </tr>
  <tr>
    <td height="300"><form id="form3" name="form3" method="post" action="">
      <p>&nbsp;</p>
      <p>&nbsp;<?php
$connect = mysql_connect("localhost", "root", "") or
die ("Hey loser, check your server connection.");
mysql_select_db("cisdatabase");
$quey1="select * from cst ORDER BY ClassId,SubjectId";
$result=mysql_query($quey1) or die(mysql_error());

?>
<table border=1 style="background-color:#F0F8FF;" >
<caption><EM>Time Table</EM></caption>
<tr>
<th>Class</th>
<th>Subject</th>
<th>Teacher</th>
<th>Day</th>
<th>Timeslot</th>
</tr>
<?php
$c=1;
while($row=mysql_fetch_array($result)){
echo "</td><tr><td>";
echo $row['ClassId'];
echo "</td><td>";
echo $row['SubjectName'];
echo "</td><td>";
echo $row['TeacherId'];
echo "</td><td>";

echo " <select id='day' name='day'>
                            <option value='MONDAY' >MONDAY</option>
                            <option value='TUESDAY'>TUESDAY</option>
                            <option value='WEDNESDAY'>WEDNESDAY</option>
                            <option value='THURSDAY'>THURSDAY</option>
                            <option value='FRIDAY'>FRIDAY</option>
							<option value='SATURDAY'>SATURDAY</option>
                            
                        </select>"; 
echo "</td><td>";						
echo " <select id='timeslot' name='timeslot'>
                            <option value='9.15-10.15' >9.15-10.15</option>
                            <option value='10.15-11.15'>10.15-11.15</option>
                            <option value='11.15-12.15'>11.15-12.15</option>
                            <option value='1.00-2.00'>1.00-2.00</option>
                            <option value='2.00-3.00'>2.00-3.00</option>
							<option value='3.00-4.00'>3.00-4.00</option>
							<option value='4.00-5.00'>4.00-5.00</option>
                            
                        </select>";
						echo "</td><td>"; 						

						echo "<input type='hidden' id='CstId' value='$row[CstId]'>";
echo "</td></tr>";


}
echo "</table>";
?></p>
      <input type="submit" name="Submit" value="Submit" />
      </p>
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
