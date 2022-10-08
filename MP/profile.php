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
<!DOCTYPE html>
<html>
<head>

<style>

form {
	
   width :500px;
   margin:auto;
   padding:50px; 
   font-weight:bold;   
   font-size:60px;
   font-family:"Times New Roman", Times, serif;
 	
}

body.b1 {
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
table.t1 {
	
	width:600px;
}

</style>
</head>

<body class="b1">
<?php include 'alumni_header.php'?>
<table class="t1" align="center">
<?php
     include "alumni_connect.php";
	 $sql="SELECT *  from members_info where member_id='$member_id'";
	 $result=$conn->query($sql);
	 
	 while($row = $result->fetch_assoc())
	 {
		 	 
		 echo "<tr>";
		 echo "<td>IC Number :</td>";
		 echo "<td>".$row['m_ic']."</td>";
		 echo "</tr>";
		 
		 echo "<tr>";
		 echo "<td>Gender :</td>";
		 echo "<td>".$row['gender']."</td>";
		 echo "</tr>";
		 
		 echo "<tr>";
		 echo "<td>Date Of Birth:</td>";
		 echo "<td>".$row['DOB']."</td>";
		 echo "</tr>";
		 
		 echo "<tr>";
		 echo "<td>Address :</td>";
		 echo "<td>".$row['address']."</td>";
		 echo "</tr>";
		 
		 echo "<tr>";
		 echo "<td>Email Address :</td>";
		 echo "<td>".$row['email']."</td>";
		 echo "</tr>";
		 
		 echo "<tr>";
		 echo "<td>Batch :</td>";
		 echo "<td>".$row['batch']."</td>";
		 echo "</tr>";
		 
		 echo "<tr>";
		 echo "<td>Programme :</td>";
		 echo "<td>".$row['programme']."</td>";
		 echo "</tr>";
		 
		 echo "<tr>";
		 echo "<td>Graduation Year :</td>";
		 echo "<td>".$row['graduation_year']."</td>";
		 echo "</tr>";
		 		 		 
	 }	 
?>
     <tr>
	   <td align="right"><a href="alumni_profile.php">Back</a></td>
</table>
</body>
</html>
