<?php include "db_connection.php"?>

<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
	error_reporting(0);
	
	
	
	$name = $_REQUEST['name'];
	$type = $_REQUEST['type'];
	$desc = $_REQUEST['desc'];
	$date = $_REQUEST['date'];
	$time = $_REQUEST['time'];
	$venue = $_REQUEST['venue'];
	
	
	
	
	$sql = "INSERT INTO event(event_name,event_type,description,event_date,event_time, event_venue)
			VALUES('$name', '$type', '$desc', '$date', '$time', '$venue')";
	
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

<h1>Add Event</h1>
<br>
<table>
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
		<td><button type="button" onclick="history.back();">Back</button></td>
		<td><input type="submit" value="Submit" style="float:right;"/></td>
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