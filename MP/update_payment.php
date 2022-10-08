<?php include "db_connection.php"?>

<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
	error_reporting(0);
		
	$id = $_REQUEST['id'];

	
	$sql = "UPDATE payment
			SET payment_status = 'PAID'
			WHERE payment_id = $id";
	
	$result=mysqli_query($conn,$sql);
	
	if($result)
	    {
		    printf("Insert success");
	    }
	    else
	   {
		  die("Insert failed");}
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
	font-size:58px;
}

</style>
</head>

<body>
<?php include 'admin_header.php'; ?><style><?php include 'content.css'; ?></style>

<form form method="post" enctype="multipart/form-data">
<div class="contain">
<br>

<h1>Update Payment Status</h1>
		<center>Member ID 
		<input type="text" name='id'></input>
		<input type="submit" value="Update" style="float:right;"/>
		<br>
		<br>
		<br>
		<br>
		<br>
	<?php include "view_payment_record.php"?>
</div>
</form>
</body>
</html>