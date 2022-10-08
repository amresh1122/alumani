<!DOCTYPE html>
<html>
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
<body>
<table align="center">

<?php 
   include("alumni_connect.php");
   $sql="SELECT * FROM forum";
   $result=$conn->query($sql);
   if ($result->num_rows > 0) 
	{	
			while($row = $result->fetch_assoc()) 
			{
   				
  				echo "<tr style=border:1px solid>
                       
					   <td><span class=sp1>Post#
					   ".$row['forum_id']."  ".$row['forum_name']."
                       </span><br>
                       <span class=sp2>".$row['forum_description']."					   
					   <br></span>
					   Posted by :
	                   <span class=sp3>".$row['forum_author']."     ".$row['date']."</span>
                                                        
                       
	                     <br><a href=#reply>Reply</a> | <a href='view_reply.php'>View Reply</a></td>
                       </tr>"; 
					   }
	}
	?>
	<?php
	if(isset($_POST['Comment'])){
	
	        $post_title=$_REQUEST['post_title'];
                $post_body = $_REQUEST['post_body'];
                $post_author = $_REQUEST['post_author'];
		date_default_timezone_set("Asia/Singapore");
		$post_time=date("Y-m-d h:i:sa");
		
		$sql2 = "INSERT INTO forum_post(post_title, post_body, post_author, post_time) VALUES ('$post_title', '$post_body', '$post_author', '$post_time')";
        if (mysqli_query($conn, $sql2)) {
      
        echo "<script>alert('Submit Message Successfully.')</script>";
	
         } else {
          echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);  
 
       }
	}

?>

</table>
<br>
<hr>
<br>
<div id="reply" align="center">
<table>
<form method="post">

     <tr>
        <td>Your Name</td>
		<td><input size="50" type="text" name="post_author" /></td>
     <tr>		

	 <tr>
        <td>Forum Name</td>
		<td><input size="50" type="text" name="post_title" /></td>
     <tr>
	 
	 <tr>
        <td>Reply Message</td>
		<td><textarea cols="60" row="5" name="post_body" ></textarea></td>
     <tr>
	 
	 <tr>
        <td colspan="2" align="right"><input type="submit" name="Comment" value="Comment" /></td>
     <tr>
</form>
</table>
    


</div>


</body>
</html>