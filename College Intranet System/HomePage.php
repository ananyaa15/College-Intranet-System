<html>
<head>
<title>HOMEPAGE</title>
<style type="text/css">
.noticestyle
{
width:700px;
height:400px;
background-image:url('green-blank-blackboard.jpg');
background-repeat:no-repeat;
-moz-background-size:150px,150px;
transition:width 2s, height 2s;
-moz-transition:width 2s, height 2s, -moz-transform 2s; /* Firefox 4 */
-webkit-transition:width 2s, height 2s, -webkit-transform 2s; /* Safari and Chrome */
-o-transition:width 2s, height 2s, -o-transform 2s; /* Opera */
color:white;
padding-left:30px;
}
h1
{
   font-family:arial;
 <!--  text-shadow:5px 5px 5px red;
 -->  
text-align:center;
}
a:link,a:visited
{
   display:block;
   color:white;
   background-color:red;
   font-family:arial;
   padding: 4px;
   size: 12px;
   text-decoration:none;
}

a:hover
{
   background-color:pink;
}



</style>

<script type="text\javascript">

validate
{
var n;

}

</script>
</head>
<body>

<table>
    <tr>
        <td>
            <h1>SHAH AND ANCHOR KUTCHHI ENGINEERING COLLEGE</h1>
        </td>
    </tr>
    <tr>
        <td>
            <table>
                <tr>
                    <td><a href="home.html">HOME</a></td>
                    <td><a href="about.html">ABOUT</a></td>
                    <td><a href="attendance.html">ATTENDANCE</a></td>
                    <td><a href="noticeboard.html">NOTICE BOARD</a></td>
                    <td><a href="facultydiary.html">FACULTY DIARY</a></td>
                    <td><a href="e-library.html">E-LIBRARY</a></td>
                    <td><a href="feedback.html">FEEDBACK</a></td>
                    <td><a href="onlinetest.html">ONLINE TEST</a></td>
                    <td><a href="contactus.html">CONTACT US</a></td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>
            <table>
                <tr>
                    <td class="noticestyle">
                    <?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("cisdatabase", $con);

$query = "Select * from noticeboard ";
$result = mysql_query($query);
while($row = mysql_fetch_array($result))
{
	echo $row['Notice'];
}
mysql_close($con)

?>

                    </td>
                    <td>
                    <form name="login" method="post"action="Login.php">
  User Id&nbsp;&nbsp; &nbsp;: <input type="text" name="UserId" id="UserId" /><br />
Password :  <input  type="password" name="Password" id="Password" />
  
<br /> 

<input type="Submit" name="Submit" value="Login"/>
   </form>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

</body>
</html>
