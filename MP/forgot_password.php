<?php
session_start();
require 'alumni_connect.php';

if(isset($_POST['recovery'])){
	$sql="SELECT *FROM members WHERE username='".$_POST['username']."'";
	$sqlq=mysqli_query($conn,$sql);
	if(!empty($_POST['username']) && mysqli_fetch_assoc($sqlq)>0 && !filter_var($_POST['username'],FILTER_VALIDATE_USERNAME==FALSE)){
		
		$_SESSION['i']
	}

}

?>

<!DOCTYPE html>
<html>
<head>
<title>Username/Password recovery</title>
</head>
<body>
<form action="forgot_password.php" method="post">
<input type="text" name="username" placeholder="Username"><span> </span>
<input type="submit" name="recovery" value="Recover">
</form>
</body>
</html>