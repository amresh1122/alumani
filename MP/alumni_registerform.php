<?php
  error_reporting(0);
  $username = $_REQUEST['regusername'];
  $password = $_REQUEST['regpassword'];
  $firstnname =$_REQUEST['regfirstname'];
  $lastname = $_REQUEST['reglastname'];
  ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>UMP FSKKP Alumni Registration Form</title>
<style>

body{
	background-image: url("abcd5.JPG");
	background-repeat:no-repeat;
	color:black;
	background-size:1400px 600px;
	background-position:center;
	padding:90px;		
}
background-image {
	opacity: 0.5;
    filter: alpha(opacity=50); /* For IE8 and earlier */
}
</style>
</head><br>
<script type="text/javascript">
function Redirect()
{
 location.href='login.php' 
 } 

 
function setFocus()
{
	//only in html; 
    //document.login.regusername.value="";
	//document.login.regpassword.value="";
	//document.login.regfirstname.value="";
	//document.login.reglastname.value="";
	document.login.regusername.focus();
}
  </script> 
 
<body style="color:black;" onload="setFocus()">
<FORM ACTION="alumni_register.php" METHOD="post" name="login">
<font face="comic sans ms" color="black">
<h1 align="Center">UMP FSKKP ALUMNI Registration Page</h1>

<table align="center">
<tr>
<td><font face="comic sans ms" color="white">User Name : </font></td>
<td><input name="regusername" type="text" size"20" value="<?php echo $username;?>"></input></td>
</tr>
<tr>
<td><font face="comic sans ms" color="white">Password : </font></td>
<td><input name="regpassword" type="password" size"20" value="<?php echo $password;?>"></input></td>
</tr>
<tr>
<td><font face="comic sans ms" color="white">First Name :</font>
</td><td><input name="regfirstname" type="text" size"20" value="<?php echo $firstname;?>"></input></td>
</tr>
<tr>
<td><font face="comic sans ms" color="white">Last Name :</font>
</td><td><input name="reglastname" type="text" size"20" value="<?php echo $lastname;?>"></input></td>
</tr>

<tr> <td>
<center>
 <input type="submit" value="REGISTER"
  title="Click here to save your records." >
  </input> </center> </td> 
  <td>
   <input type="button"  value=" CANCEL " onClick='Redirect()'
				title="Click here to cancel registration."/> 
  </td>
	<tr>
</table>
	</FORM> </font>
</body>
</html>