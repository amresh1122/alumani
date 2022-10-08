<!-- update_profile.php -->
<!-- Interface of update data. -->

<?php
include("alumni_connect.php");

$idURL = $_GET['member_id'];

$query = "SELECT * FROM members WHERE member_id = '$idURL'";
$result = mysqli_query($conn,$query) or die ("Could not execute query in update_profile.php");
$row = mysqli_fetch_assoc($result);

        
	$DOB= $row['DOB'];
	$gender = $row['gender'];
	$email = $row['email'];
	$address = $row['address'];
	$city = $row['city'];
	$contact_no = $row['mobile_no'];
	$session = $row['session'];
	$course = $row['course'];
	$myfile = $row['myfile'];
	$comment = $row['comment'];
	$designation = $row['designation'];
	$organisation = $row['organisation'];

//@mysql_free_result($result);
?>
<html>
<head>
<title>My Personal Profile</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<style>
form {
	
width :500px;
margin:auto;
padding:20px;
background:#663366;
font-size:20px;
font-family:Verdana;
color:white;	
	
}
input[type =text]{
	width:80%;
	padding:5px;
	font-size:18px;
}
input[type =submit]{
    padding:5px;
	font-size:20px;
	width:100px;
}
input[type =reset]{
    padding:5px;
	font-size:20px;
	width:100px;
}
select{
font-size:20px;
padding:5px;
background:#e0d3e8;

}
</style>
<body bgcolor="#FFFFFF" text="#000000">
<form method="post" action="update_profile_success.php">
<h3>PERSONAL DETAILS</h3>
D.O.B          :
<br><br>
<input type="text" name="DOB" size="25">
<br></br>
Gender                :
<br></br>
<input type="radio" name="gender" value="male" size="25">Male<input type="radio" name="gender" value="female" size="25">Female
<br>

<h3>CONTACT INFORMATION</h3>
Address               :
<br></br>
<input type="text" name="address" size="25">
<br></br>
Email Address         :
<br></br>
<input type="text" name="email" size="25">
<br></br>
City                  :
<br></br>
<input type="text" name="city" size="25">
<br></br>
Contact No            :
<br></br>
<input type="text" name="contact_no" size="25">
<br></br>

<h3>ACADEMIC DETAILS</h3>
Session (Eg:2017 To 2018)  :
<br></br>
<input type="text" name="session" size="25">
<br></br>
Course                :
<br></br>
<input type="text" name="course" size="25">
<br></br>
Attach Your Picture   :
<br></br>
<input type="file" name="myfile" size="25">
<br></br>
Comment               : 
<br></br>
<textarea name="comment" cols="54" rows="8"></textarea>
<br>

<h3>JOB DETAILS</h3>
Designation           :
<br></br>
<input type="text" name="designation" size="25">
<br></br>
Organisation          :
<br></br>
<input type="text" name="organisation" size="25">
<br></br>

<input type ="hidden" name="member_id">
<input type ="submit" value=" Update">
<input type ="reset" value=" Reset ">
<br>
</form>
<hr>
</body>
</html>