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
<table width="1002" height="461" border="0">
  <tr>
    <th width="996" scope="col">&nbsp;</th>
  </tr>
  <tr>
    <td height="193"><form id="form1" name="form1" method="post" action="AddBatch2.php">
      <table width="800" border="0">
        <tr>
          <td colspan="4"><p>Select Class Name        
          <?php
$hostname="localhost";
$username="root";
$password="";
$link=mysql_connect($hostname,$username,$password);
mysql_select_db("cisdatabase") or die("unable to connect");
$result=mysql_query("select ClassId  from class where ClassId NOT IN (select ClassId from batch) ");
if($result)
{ 
echo '<select name="ClassId">'; 
while($myrow = mysql_fetch_array($result))
{
echo '<option value='.$myrow['ClassId'].'>'.$myrow['ClassId'].'</option>';  
}  
echo "</select>";
}
?></td>
          </tr>
        <tr>
          <td width="521">BATCH</td>
          <td width="187">A </td>
          <td width="36"> B </td>
          <td width="38">C</td>
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
echo '<select name="MentorA">'; 
while($myrow = mysql_fetch_array($result))
{
echo '<option value='.$myrow['TeacherId'].'>'.$myrow['TeacherId'].'</option>';  
}  
echo "</select>";
}
?>
            &nbsp;</td>
          <td><?php
$hostname="localhost";
$username="root";
$password="";
$link=mysql_connect($hostname,$username,$password);
mysql_select_db("cisdatabase") or die("unable to connect");
$result=mysql_query("select TeacherId  from teacher");
if($result)
{ 
echo '<select name="MentorB">'; 
while($myrow = mysql_fetch_array($result))
{
echo '<option value='.$myrow['TeacherId'].'>'.$myrow['TeacherId'].'</option>';  
}  
echo "</select>";
}
?>
            &nbsp;</td>
          <td><?php
$hostname="localhost";
$username="root";
$password="";
$link=mysql_connect($hostname,$username,$password);
mysql_select_db("cisdatabase") or die("unable to connect");
$result=mysql_query("select TeacherId  from teacher");
if($result)
{ 
echo '<select name="MentorC">'; 
while($myrow = mysql_fetch_array($result))
{
echo '<option value='.$myrow['TeacherId'].'>'.$myrow['TeacherId'].'</option>';  
}  
echo "</select>";
}
?>
            &nbsp;</td>
        </tr>
        <tr>
          <td>START ROLL NO. </td>
          <td><input name="sa" type="text" id="sa" onblur="MM_validateForm('sa','','RisNum');return document.MM_returnValue" /></td>
          <td><input name="sb" type="text" id="sb" onblur="MM_validateForm('sb','','RisNum');return document.MM_returnValue" /></td>
          <td><input name="sc" type="text" id="sc" onblur="MM_validateForm('sc','','RisNum');return document.MM_returnValue" /></td>
        </tr>
        <tr>
          <td>END ROLL NO. </td>
          <td><input name="ea" type="text" id="ea" onblur="MM_validateForm('ea','','RisNum');return document.MM_returnValue" /></td>
          <td><input name="eb" type="text" id="eb" onblur="MM_validateForm('eb','','RisNum');return document.MM_returnValue" /></td>
          <td><input name="ec" type="text" id="ec" onblur="MM_validateForm('ec','','RisNum');return document.MM_returnValue" /></td>
        </tr>
      </table>
          <p>
            <input type="submit" name="Submit" value="Submit" />
          </p>
    </form>    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
