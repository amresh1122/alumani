<!DOCTYPE html>
<html>
<body>
<head>
<style>
body {
	
	background-image: url("1280.png");
       
	opacity:0.9;
	font-family: Arial, Helvetica, sans-serif;
	color:#000000;
	
}
td {
	
	border:1px solid;
	font-size: 20px;
	border: 10px dotted black;
	padding: 25px;
    background-clip: content-box;
	  
}
input[type=button], input[type=submit], input[type=reset]{
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
</head>
<form method="post">
<center>
<table>
  
  <tr>
    <td>Forum Author</td>
	<td><input type="text" name="forum_author" /></td>
  </tr>
  
  <tr>
    <td>Forum Name</td>
	<td><input type="text" name="forum_name" /></td>
  </tr>
  
  <tr>
    <td>Forum Description</td>
	<td><textarea  name="forum_description" cols="50" rows="5"></textarea></td>
  </tr>
  
  <tr>
     <td colspan="2" align="right"><input type="submit" name="add" value="Add Post" /></td>
  </tr>

  </table>
  </center>
  </form>

<?php
include("alumni_connect.php");
if(isset($_POST['add'])){
  $forum_name=$_REQUEST['forum_name'];
  $forum_description = $_REQUEST['forum_description'];
  $forum_author = $_REQUEST['forum_author'];
  date_default_timezone_set("Asia/Singapore");
  $date=date("Y-m-d h:i:sa");
  
  $sql = "INSERT INTO forum(forum_name, forum_description, forum_author, date) VALUES ('$forum_name', '$forum_description', '$forum_author', '$date')";
  if (mysqli_query($conn, $sql)) {
      
     echo "<script>alert('Add Post Successfully.')</script>";
	 header("location:forum_display_and_reply.php");
	
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);  
 
       }
}
?>

</body>
</html>