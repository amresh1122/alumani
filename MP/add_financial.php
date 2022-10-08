<?php include "db_connection.php"?>

<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
	error_reporting(0);
	
	$id = $_REQUEST['id'];
	$date= $_REQUEST['date'];
	$type = $_REQUEST['type'];
	$amount = $_REQUEST['amount'];
	
	
	$sql = "INSERT INTO financial(member_id, finance_date, finance_type,finance_amount)
			VALUES('$id', '$date', '$type', '$amount')";
	
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
	text-align: left;
	font-size:58px;
}

</style>
</head>

<body>
<?php include 'admin_header.php'; ?><style><?php include 'content.css'; ?></style>

<form form method="post" enctype="multipart/form-data">
<div class="contain">
<br>

<h1>Financial Information</h1>
<br>
<table>
	<tr>
		<td>Member ID</td>
		<td><input type="text" name="id"/></input>
	</tr>
	<tr>
		<td>Date</td>
		<td><input type="date" name="date"/></td>
	</tr>
	<tr>
		<td>Type</td>
		<td><select name="type">
			<option value="Membership Fee">Membership Fee</option>
			<option value="Cash Donation">Cash Donation</option>
			<option value="Present">Present</option>
			<option value="Expenses">Expenses</option>
			</select>
	</tr>
	<tr>
		<td>Amount</td>
		<td><input type="number" name="amount"/></input>
	</tr>
	<tr>
		
		<td><input type="submit" value="Submit" style="float:right;"/></td>
	</tr>
</table>

</form>

</div>
</div>
</body>
</html>