<?php include "db_connection.php"?>

<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
	error_reporting(0);
 
if(isset($_POST['submit']))
{
	$title = $_REQUEST['title'];
	$pic = $_REQUEST['pic'];
	$datetime=date("d/m/y h:i:s");
	$des = $_REQUEST['desc'];
	
	if(empty($title)==TRUE || empty($pic)==TRUE || empty($des)==TRUE)
	{
		$mess_title="<script language=javascript>
		alert(\"Infromation cannot empty.\");
		location.href='add_announcement.php'
		</script>";
		echo $mess_title;
	}
	
	
	$sql = "INSERT INTO annoucement(ann_topic, ann_pic, ann_date, ann_description)
			VALUES('$title', '$pic', '$datetime', '$des')";
	
	$result=mysqli_query($conn,$sql);
	
	if($result)
	    {
		    printf("Insert success");
	    }
	    else
	   {
		  die("Insert failed");}
	}
}

	
	
?>

<html>
<head>
<style>
body,html{
	width:100%;
}

table{
	width:50%;
	
}
table, td{
	padding: 15px;
	
}

h1{
	text-align: center;
	font-size:64px;
}

</style>
</head>

<body>
<?php include 'admin_header.php'; ?><style><?php include 'content.css'; ?></style>

<form form method="post" enctype="multipart/form-data">
<div class="contain">
<br>

<h1>New Announcement</h1>
<br>
<table>
	<tr>
		<td>Title</td>
		<td><input type="text" name='title'/></td>
	</tr>
	<tr>
		<td>Description</td>
		<td><textarea rows="10" cols="50" name='desc'></textarea></td>
	</tr>
	<tr>
		<td>Person In Charge</td>
		<td><input type="text" name='pic'/></td>
	</tr>
	<tr>
		<td><button type="button" onclick="history.back();">Back</button></td>
		<td><input type="submit" name="submit" style="float:right;"/></td>
	</tr>
</table>
<br>
<br>
<br>
<br>

</form>

</div>

</body>
</html>