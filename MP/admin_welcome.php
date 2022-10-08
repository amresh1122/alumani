<!--admin_welcome.php -->

<?php
include 'alumni_connect.php';
session_start();
if (!isset($_SESSION['admin_id'])){
header('location:admin_login.php');
}
?>
<html>
<body bgcolor="#F0FFFF;">
<hr noshade size="10" color="#9400D3">
<center> <h2> 
<font color="#9400D3" face="Comic Sans MS">
Welcome To The ALUMNI MANAGEMENT System
</center> </h2> </font>
<hr noshade size="10" color="#9400D3">
<br><br>
<center>
<?php
$admin_id=$_SESSION['admin_id'];
$result=mysqli_query($conn,"SELECT * FROM admin WHERE admin_id='$admin_id'")
or die(mysqli_error());
$row=mysqli_fetch_array($result);
$a_name=$row['a_name'];

?>
 
 <?php
echo "<br>";
echo "<font size=6 name='comic sans ms' color='white'>";
echo "Hello "  .$a_name;
echo "</font>";
?>
<br><br><br>
<font size=5 name="comic sans ms" >
<a href="admin_logout.php" title="Click here to Logout in the System.">
Logout</a>
</font> </center>
</body>
</html>
