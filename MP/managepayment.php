<?php include "db_connection.php"?>

<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
	error_reporting(0);

	
	$id = $_REQUEST['id'];
	$date= $_REQUEST['date'];
	$membership = $_REQUEST['membership'];
	$total = $_REQUEST['total'];
	
	
	$sql = "INSERT INTO payment(member_id, pay_date, typemembership,totalpayment)
			VALUES('$id', '$date', '$membership', '$total')";
	
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
	font-size:64px;
}

</style>
</head>

<body>
<?php include 'admin_header.php'; ?><style><?php include 'content.css'; ?></style>

<form form method="post" enctype="multipart/form-data">
<div class="contain">
<br>

<h1>Key In Payment</h1>
<br>
<table>
	<tr>
		<td>Member ID</td>
		<td><input type="text" name='id'/></input>
	<tr>
		<td>Date of Payment</td>
		<td><input type="date" name="date"/></td>
	</tr>
	<tr>
		<td>Type of MemberShip</td>
		<td><select name="membership">
			<option value="yearly">Yearly membership</option>
			<option value="life">Life membership</option>
			</select>
	</tr>
	<tr>
		<td>Total Payment</td>
		<td><input type="text" name='total'></input>
	</tr>
	
		<td></td>
		<td><input type="submit" value="Submit" style="float:right;"/></td>
	</tr>
</table>
<br>
<br>
<br>
<br>

</form>

</div>
</div>
</body>
</html>