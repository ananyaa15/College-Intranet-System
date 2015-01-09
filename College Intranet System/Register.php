<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script language="javascript" type="text/javascript" src="datetimepicker.js">
</script>
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

function MM_goToURL() { //v3.0
  var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
  for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
}
//-->
</script>
</head>

<body>
<p>&nbsp;</p>
<table width="964" height="613" border="0" >
  <tr>
    <th scope="col">&nbsp;</th>
  </tr>
  <tr>
    <td height="475"><form id="form1" name="form1" method="post" action="Register2.php">
      <label>First Name
        <input name="FirstName" type="text" id="FirstName"  />
        </label>
      <p>
        <label>Last Name
        <input name="LastName" type="text" id="LastName"  />
        </label>
</p>
      <p>
        <label>User Id</label>
        <input name="UserId" type="text" id="UserId" />
      </p>
      <p>Date Of Birth
        <input name="Dob" type="text" id="demo1" onblur="MM_validateForm('Address','','R');return document.MM_returnValue" size="25" />
        <a href="javascript:NewCal('demo1','ddmmyyyy')"><img src="cal.gif" width="16" height="16" border="0" alt="Pick a date" /></a>&nbsp;</p>
      <p>
        <label>Phone No.
        <input name="PhoneNo" type="text" id="PhoneNo" onblur="MM_validateForm('PhoneNo','','RisNum');return document.MM_returnValue"  />
        </label>
</p>
      <p>
        <label>Address
        <textarea name="Address" id="Address" ></textarea>
        </label>
      </p>
      <p>
        <label>Email Id 
        <input name="EmailId" type="text" id="EmailId" onblur="MM_validateForm('EmailId','','RisEmail');return document.MM_returnValue" />
        </label>
</p>
      <p>Role
        <select name="Role" id="Role">
          <option value="student">Student</option>
          <option value="teacher">Teacher</option>
          <option value="admin">Administrator</option>
        </select>
      </p>
      <p>
        <label>Gender
        <input name="Gender" type="radio" value="Male" />
        Male 
        <input name="Gender" type="radio" value="Female" />
        Female        </label>
      </p>
      <p>
        <input type="submit" name="Submit" value="Submit" onclick="MM_validateForm('FirstName','','R');MM_validateForm('FirstName','','R');MM_validateForm('LastName','','R');MM_validateForm('UserId','','R');MM_validateForm('PhoneNo','','RisNum');MM_validateForm('EmailId','','NisEmail');MM_validateForm('Address','','R');return document.MM_returnValue" />
        <input type="reset" name="Submit2" value="Reset" />
        <input name="Submit3" type="submit" onclick="MM_goToURL('parent','HomePage.php');return document.MM_returnValue" value="Cancel" />
		
      </p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
	  
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    </form>    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
