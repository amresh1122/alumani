<?php include "db_connection.php"?>

<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		
	$id = $_REQUEST['id'];
	$name = $_REQUEST['name'];
	$type = $_REQUEST['type'];
	$desc = $_REQUEST['desc'];
	$date = $_REQUEST['date'];
	$time = $_REQUEST['time'];
	$venue = $_REQUEST['venue'];
	
	
	
	
	$sql = "UPDATE event
			SET event_id = '$id', event_name = '$name',event_type = '$type',description = '$desc',event_date = '$date',event_time = '$time', event_venue = '$venue'
			WHERE event_id = $id";
	
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

<h1>Update Event</h1>
<br>
<table>
	<tr>
		<td>Event ID </td>
		<td><input type="text" name='id'/></input>
	<tr>
	<tr>
		<td>Event Name </td>
		<td><input type="text" name='name'/></input>
	<tr>
		<td>Event Category </td>
		<td><select name='type'>
			<option value="Sport">Sport</option>
			<option value="Job">Job</option>
			<option value="Entertainment">Entertainment</option>
			<option value="Talk">Talk</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>Event Description</td>
		<td><textarea rows="10" cols="50" name='desc'></textarea></td>
	</tr>
	<tr>
		<td>Event Venue </td>
		<td><input type="text" name='venue'></input>
	</tr>
	<tr>
		<td>Event Date </td>
		<td><input type="date" name='date'></input>
	</tr>
	<tr>
		<td>Event Time </td>
		<td><input type="time" name='time'></input>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Update" style="float:right;"/></td>
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