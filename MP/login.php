<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="login.css" rel="stylesheet">
</head>
	<style>
	</style>
<?php
include 'admin_connect.php';

 if (isset($_REQUEST['login']))
 {
 // Grab User submitted information
$admin = $_REQUEST["admin"];
$adminpass = $_REQUEST["adminpass"];
$admintype = $_REQUEST["user"];

if($admintype=="alumni")
	{
		$al_result="SELECT member_id from members where username='$admin' AND password='$adminpass'";
		$al_count=$conn->query($al_result);
		
		if ($al_count->num_rows > 0) 
		{
			while($al_row = $al_count->fetch_assoc()) 
			{
   				$member_id=$al_row['member_id'];
				session_start();
				$_SESSION['member_id']=$al_row['member_id'];
  				header("location:alumni_header.php");
   			}
		}
		else
		{
				$al_message="Sorry Invalid Password And User Name Please Try Again.";
				echo $al_message; 
				header("refresh:2;url=index.php");
		}
		$conn->close();
	}
	else if($admintype=="admin")
	{
		$ad_result= "SELECT * from admin where a_username='$admin' AND a_pass='$adminpass'";
		$ad_count=$conn->query($ad_result);
		if ($ad_count->num_rows > 0) 
		{	
			while($dl_row = $ad_count->fetch_assoc()) 
			{
   				session_start();
  				$_SESSION['a_username']=$ad_row['a_username'];
	  			header("location:admin_index.php");
   			}
		}
		else
		{
		$ad_message=  "<script language=javascript> 
            alert(\"Sorry Invalid Password And User Name Please Try Again.\");</script>"; 
			header("refresh:1;url=ttesting.php");
		}
		$conn->close();
		}
	}	
?>
<body>

<div class="bg">
<center>
<form name="login"  method="post">
<table>
<tr>
	<td height="45">
		<h1 style="text-align:center">Login Form</h1>
	</td>
	
	</tr>
	
	<tr>
		<td height="55"><center>
			<select name="user">
			<option value="alumni">Alumni</option>
			<option value="admin">Administrator</option>
			</select>
			</center>
		</td>
	</tr>
	
	<tr>
		<td valign="bottom" height="35">
			<label for="admin">Username</label></td>
		</td>
	</tr>
	<tr>
		<td height="25"><input type="text" placeholder="Username" name="admin" size="30" required>
		</td>
	</tr>
	
	<tr>
		<td valign="bottom" height="35">
			<label for="adminpass">Password</label></td>
		</td>
	</tr>
	<tr>
		<td height="25"><input type="password" placeholder="Password" name="adminpass" size="30" required>
		</td>
	</tr>
	<tr>
		<td height="40">
			<a href="user_forgot_password.php">Forget password?</a>
		</td>
	</tr>
	<tr>
		<td>
			<button type="submit" name="login">LOGIN </button>
		</td>
	</tr>
	
	
</table>
</center>
</form>
</center>
</div>
</body>
</html>
