<!DOCTYPE html>
<html>
<body>
<head>
<style>

table{
	
	border:0px solid;
	font-size:14px;
	width:600px;
	background-color:#ffffb3;	
}
td {
	
	border:1px solid;
	font-size: 20px;
	border: 10px dotted black;
	padding: 15px;

    background-clip: content-box;
	  
}
input {
       
   background-color:#ffff80;
   border-radius:5px;          	
}

textarea {
   
   background-color:#ffff80;
   

}
body {
	
	background-image: url("alumni-hero-1.jpg");
	font-family: Arial, Helvetica, sans-serif;
	color:#000000;
	
	
}
input.c1{
	
    width:100px;
	height:70px;
	font-family:"Times New Roman", Times, serif;
	font-size:30px;
}
span.sp1{
	font-family: "Times New Roman", Times, serif;
	font-weight: bold;
	font-style:italic;
	size:20px;
	font: 20px;
	
}
span.sp2{
	
	font-family: "Times New Roman", Times, serif;
	font-style:italic;
}
span.sp3{
	font-style:italic;
	font-family: "Times New Roman", Times, serif;
	font-size:15px;
	
}
</style>
</head>
<center>
<table>
<form method="post">
	 <tr>
        <td><span class=sp1>Forum Name</td>
		<td><input size="50" type="text" name="post_title" /></td>
     </tr>	 
	 <tr>
        <td colspan="2" align="right"><input class="c1" type="submit" name="Search" /></td>
     </tr>
</form>
</table>
</center>
<br>
<hr>
<br>
<table align="center">
<?php
include 'alumni_connect.php';
if(isset($_POST['Search'])){
	$post_title=$_REQUEST['post_title'];
	$sql="SELECT * from forum_post where post_title='$post_title'";
	$result=$conn->query($sql);
	while($row = $result->fetch_assoc()) 
			{
   				echo "<tr>";
				echo "<td><span class=sp1>".$row['post_id']." | ".$row['post_body']."
				<br>Post By: ".$row['post_author']." | Post Date: ".$row['post_time']." </td>";
                echo "</tr>";
   			}	
}  
?>   
</table>
</body>
</html>