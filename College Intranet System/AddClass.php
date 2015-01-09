
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
</head>

<body>
<table width="909" border="0" align="center">
  <tr>
    <th width="903" height="89" scope="col">&nbsp;</th>
  </tr>
  <tr>
    <td height="202"><form id="form1" name="form1" method="post" action="AddClass2.php"> 
      <label>
      <div align="center">
        <p>Enter Department Name        
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
        </p>
        <p>
          <label>
          <div align="center">
          Enter class name
          <input type="text" name="ClassName" /><p>

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
        </label></p>
          <br />
          Room No
          <input name="RoomNo" type="text" />
          </label>
      </div>
      </label>
      <p>&nbsp;</p>
      <p>
        <label></label>
        <p>&nbsp;</p>
      <p align="center">
        <input type="submit" name="Submit" value="Add" />
      </p>
    </form></td>
  </tr>
  <tr>
    <td height="66">&nbsp;</td>
  </tr>
</table>
</body>
</html>
