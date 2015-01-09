<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script language="javascript" type="text/javascript">

/*function hideDiv() { 
if (document.getElementById) { 
document.getElementById('testdiv').style.visibility = 'hidden'; 
} 
} 
function showDiv() {                                                                    //<body onload="hidediv()">
if (document.getElementById) { 
document.getElementById('testdiv').style.visibility = 'visible'; 
} 
*/
function activateN()
{
//if(N.checked==true)
{
	QbId1.disabled=true;
	QbId2.disabled=false;
}
}
function activateO()
{
//if(O.checked==true)
{
	QbId1.disabled=false;
	QbId2.disabled=true;
}
}

   function validate()
	 {

    if(!document.getElementById("CorrectAns").value==(document.getElementById("Op1").value||document.getElementById("Op2").value||document.getElementById("Op3").value||document.getElementById("Op4").value))alert("Correct ans does not match with any of the options");
   return false;
   else return true;
    }
	
	
	
	
	
function changeIt()
{
var i = 1;
my_div.innerHTML = my_div.innerHTML +"<br><input type='text' name='mytext'+ i>"

}


</script>
</head>

<body  onload="javascript:hideDiv()">
<table width="975" height="281" border="0">
  <tr>
    <th scope="col">ADD QUESTION BANK </th>
  </tr>
  <tr>
    <td><form id="form1" name="form1" method="post" action="AddQuesBank2.php"  onSubmit="return validate()">
      <p>
        
        <input name="radiobutton" type="radio" id="N"  onclick="activateN()" />
        <label >Create New Ques Bank</label>
      </p>
      <p>
        
        <input name="radiobutton" type="radio"  id="O" onclick="activateO()" />
       <label> Add to Existing Ques Bank</label>
	</p>	
		
     <div id="selectQB" >
	 
	 
        <label>Select Ques Bank Id</label>
        <?php
$hostname="localhost";
$username="root";
$password="";
$link=mysql_connect($hostname,$username,$password);
mysql_select_db("cisdatabase") or die("unable to connect");
$result=mysql_query("select *  from onlineexam ");
if($result)
{ 
echo '<select name="QbId1"Id="QbId1" disabled="disabled">'; 
while($myrow = mysql_fetch_array($result))
{
echo '<option value='.$myrow['QbId'].'>'.$myrow['QbId'].'</option>';  
}  
echo "</select>";
}
?>
        
      </div>
	  <div id="CreateQB">
      <p><label>
      Enter Ques Bank Id
          <input name="QbId2" type="text" id="QbId2" disabled="disabled" /></label>
      <p>&nbsp;
  <label>Enter Question
  <textarea name="Ques" id="Ques"></textarea>
  </label>
      </p>
      <p>
        <label>option 1
        <input name="Op1" type="text" id="Op1" />
        </label>
      </p>
      <p>
        <label>option 2
        <input name="Op2" type="text" id="Op2" />
        </label>
</p>
      <p>
        <label>option 3
        <input name="Op3" type="text" id="Op3" />
        </label>
</p>
      <p>
        <label>option 4
        <input name="Op4" type="text" id="Op4" />
        </label>
</p>
      <p>
        <label>Correct Ans
        <input name="CorrectAns" type="text" id="CorrectAns" />
        </label>
      </p>
      <p>
        <input type="submit" name="Submit" value="SAVE" />
      </p></div>
    </form>
	</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
