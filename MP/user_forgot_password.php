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

 if (isset($_REQUEST['retrieve']))
 {
 // Grab User submitted information
$admin = $_REQUEST["admin"];
$firstname = $_REQUEST["firstname"];
$lastname = $_REQUEST["lastname"];


		$sql="SELECT password from members where (username='$admin' AND firstname='$firstname' AND lastname='$lastname')";
		$result=$conn->query($sql);
		
			
			while($row = $result->fetch_assoc()) 
			{
   				
				echo "Your Password : ".$row['password'];
				
   			}
	        
		    if(result==false){
				
				$message="Sorry Invalid Password And User Name Please Try Again.";
				echo $message; 
				header("refresh:5;url=index.php");
			}
		$conn->close();
 }			
?>
<body>

<div class="bg">
<center>
<form name="retrieve"  method="post">
<table>
<tr>
	<td height="45">
		<h1 style="text-align:center">Retrieve Password</h1>
	</td>
	
	</tr>	
	
	<tr>
		<td valign="bottom" height="35">
			<label for="admin">Username</label></td>
		</td>
	</tr>
	<tr>
		<td height="25"><input type="text" placeholder="Username" name="admin" size="30">
		</td>
	</tr>
	
	<tr>
		<td valign="bottom" height="35">
			<label for="admin">First Name</label></td>
		</td>
	</tr>
	<tr>
		<td height="25"><input type="text" placeholder="firstname" name="firstname" size="30">
		</td>
	</tr>
	
	<tr>
		<td valign="bottom" height="35">
			<label for="admin">Last Name</label></td>
		</td>
	</tr>
	<tr>
		<td height="25"><input type="text" placeholder="lastname" name="lastname" size="30">
		</td>
	</tr>		
	<tr>
		<td>
			<button type="submit" name="retrieve">Retrieve</button>
			<button type="submit" name="login" formaction="login.php">Login</button>
		</td>
	</tr>
	
	
</table>
</center>
</form>
</center>
</div>
</body>
</html>