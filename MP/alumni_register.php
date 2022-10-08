<html>
<script type="text/javascript">
function Redirect()
{
 location.href='login.php' 
 } 
</script>
<body bgcolor="darkblue;">
<?php
    include 'alumni_connect.php';
//only in php
$username =   $_REQUEST['regusername'];
$password =   $_REQUEST['regpassword'];
$firstname =  ucfirst($_REQUEST['regfirstname']);
$lastname =   ucfirst($_REQUEST['reglastname']);
 
 
 if (empty($username) == true) {
 $mess_username=  "<script language=javascript> 
            alert(\"User name Cannot be empty.\");
			  location.href='alumni_registerform.php'
			</script>"; 
   echo $mess_username;
    }
else if (empty($password) == true) {
 $mess_password=  "<script language=javascript> 
            alert(\"Password Cannot be empty.\");
			  location.href='alumni_registerform.php'
			</script>"; 
   echo $mess_password;
    }
else if (empty($firstname) == true) {
 $mess_firstname=  "<script language=javascript> 
            alert(\"First Name Cannot be empty.\");
			  location.href='alumni_registerform.php'
			</script>"; 
   echo $mess_firstname;
    }
else if(empty($lastname) == true) {
 $mess_lastname=  "<script language=javascript> 
            alert(\"Last name Cannot be empty.\");
			  location.href='alumni_registerform.php'
			</script>"; 
   echo $mess_lastname;
    }

	
	if (mysqli_num_rows(mysqli_query($conn,"SELECT *
 FROM members WHERE username = '$username' AND
	password = '$password'"))) {
	
 $message=  "<script language=javascript> 
            alert(\"Username and Password Already Exist.\");
			  location.href='alumni_registerform.php'
			</script>"; 
   echo $message;
 
   }
   else 
{
 $sql = mysqli_query($conn,"INSERT INTO members (username, password, firstname, lastname)
             VALUES ('$username', '$password', '$firstname','$lastname')");
 $result=mysqli_query($conn,$sql);
 $sql2 = "SELECT member_id FROM members WHERE username = '$username' AND firstname = '$firstname'";
 $result2=$conn->query($sql2);
 while($row = $result2->fetch_assoc()) 
 {   		
	$member_id=$row['member_id'];
  	$sql3 = mysqli_query($conn,"INSERT INTO members_info (member_id)
             VALUES ('$member_id')");
	$result3=mysqli_query($conn,$sql3);
 }
 mysqli_close($conn);
	}
?>

<font face="comic sans ms" color="white">
<h1><br>
<center>
Congratulation you have registered successfully

</h1>
<center>
 <input type="button"  value="LOGIN PAGE" onClick='Redirect()'
title="Click here to return to login page."/> 
</center>
</font>
</center>
</body>	
</html>
