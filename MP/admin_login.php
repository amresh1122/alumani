<!-- admin_login.php -->

<html>
<head>
<title>Login Security 1.0</title>
<script type="text/javascript">
function setFocus()
{
     document.getElementById("admin").focus();
}

function focusReset(){
		   document.login.admin.value="";
		   document.login.adminpass.value="";
		   document.login.admin.focus();
		}

function Blank_Validator()
{
if (document.login.admin.value == "" ) 
{
    alert("Please fill the user name.");
    document.login.admin.focus();
    return (false);
}
else  if (document.login.adminpass.value == ""  ){
 alert("Please fill the password.");
   document.login.admin.focus();
     return (false);
}
return (true);
}

function Redirect()
{
 location.href='alumni_welcome.php' 
} 
</script>
</head>
<style>

input[type='text'] { font-size: 20px; color: blue; }
input[type='password'] { font-size: 20px; color: blue;}

.uni, .uni td,.uni th, .uni tr
{
font-family:comic sans ms;
font-size:15pt;
color: white;
}
</style>
<?php
include 'admin_connect.php';

 if (isset($_REQUEST['ok']))
 {
 // Grab User submitted information
$admin = $_REQUEST["admin"];
$adminpass = $_REQUEST["adminpass"];

$result=mysqli_query($conn,"select * from admin where a_username='$admin' 
          AND a_pass='$adminpass'")or die (mysqli_error($conn));
		
$count=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);

if ($count > 0) 
  {
      session_start();
      $_SESSION['admin_id']=$row['admin_id'];
      $message =  "<script language=javascript>  location.href='admin_welcome.php' </script>";
  }
else
  {
            $message=  "<script language=javascript> 
            alert(\"Sorry Invalid Password And User Name Please Try Again.\");</script>"; 
  }
mysqli_close($conn);
}
?>

<br><br>
<font size=12 face="comic sans ms" color="white"> <center>
Admin Login Page </font> </center>
<br>
<body bgcolor =#FFE4C4; onload="setFocus()">
    <center>
    <form name="login"  method="post" action=""
	onsubmit="return Blank_Validator()" >
        <table  border class="uni">
            <tr>
                <td><label for="admin">Username</label></td>
                <td><input type="text" name="admin" id="admin"></td>
            </tr>
            <tr>
                <td><label for="adminpass">Password</label></td>
                <td><input type="password" name="adminpass" id="adminpass"></input></td>
            </tr>
            <tr>
                <td></td>
				<td>
				<input type="submit" style="float: right" name="ok" value="   LOGIN    " 
				title="Click here to login in the system">     
                
				 <input type="button" style="float: right" value=" CLEAR " onClick='focusReset()'
				title="Click here to clear the text box"/> 
            </tr>
			
        </table>
	 </form>
	 <font face="comic sans ms">
	 <center>
	  <input type="button"  value=" Forgot Password " onClick='Redirect()'
		  title='Click here if Admin forgot username/password.'>
		  </center> </font>
    </center>
    <?php echo $message ?>
</body>
</html>