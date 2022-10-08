<?php
	session_start();
	if(!isset($_SESSION['member_id']))
	{
		header("location:login.php");
	}
	else
	{
		$member_id=$_SESSION['member_id'];
	}
?>

<!-- alumni_profile.php -->
<!-- Interface of insert data. -->
<html>
<head>
<title>My Personal Profile</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<style>
form {
	
   width :500px;
   margin:auto;
   padding:50px; 
   font-weight:bold;   
   font-size:60px;
   font-family:"Times New Roman", Times, serif;
 	
}

body {
	background-image:url("1280.png");
	
}

td {
	border: 3px dotted black;
    padding: 20px;
	background-clip: content-box;
}
h1{
	font-family:"Times New Roman", Times, serif;
}

input[type=button], input[type=submit], input[type=reset] {
    background-color: #4CAF50;
    border: none;
    color: white;
	font-family:"Times New Roman", Times, serif;
	font-size:30px;
	padding: 16px 32px;
    text-decoration: none;
    margin: 5px 2px;
    cursor: pointer;
}
table {
	
	width:600px;
}
</style>

<body bgcolor="#FFFFFF" text="#000000">
<?php include 'alumni_header.php'?><style><?php include 'content2.css'?></style>
<h1>Manage Personal Profile</h1>
<div class="container">
 <form method="post" action="profile_insert.php">
 <table width="600px">
    <tr>
       <td>IC Number:</td>
	   <td><input type="text" name="m_ic" size="30"></td>
    </tr>

	<tr>
	   <td>Gender :</td>
       <td><input type="radio" name="gender" value="male" size="25">Male<input type="radio" name="gender" value="female" size="25">Female</td>
    </tr>
	
	
    <tr>
	   <td>Date Of Birth:</td>
	   <td><input type="text" name="DOB" size="30"></td>
	</tr>
    
	<tr>
	   <td>Address:</td>
       <td><input type="text" name="address" size="30"></td>
    </tr>
	
	<tr>
	    <td>Contact Number:</td>
        <td><input type="text" name="contact_no" size="30"></td>
    </tr>
	
	<tr>
	   <td>Email Address:</td>
       <td><input type="textarea" name="email" size="30"></td>
    </tr>
	
    <tr>
	   <td>Batch:</td>
       <td><input type="text" name="batch" size="30"></td>
    </tr>

    <tr>
	    <td>Programme:</td>
        <td><input type="text" name="programme" size="30"></td>
    </tr>

	<tr>
	  <td>Graduation Year:</td>
      <td><input type="text" name="graduation_year" size="30"></td>
    </tr>

	<tr>
      <td colspan="2" align="center"><input type="submit" value="Update">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Reset"></td>
      
	 </tr>
</form>

</div>
</body>
</html>