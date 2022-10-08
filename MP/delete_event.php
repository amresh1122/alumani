<?php include "db_connection.php"?>

<?php
		
	$id = $_REQUEST['id'];
	
	$sql = "DELETE FROM event
			WHERE event_id = $id";
			
	$result=mysqli_query($conn,$sql);
	
	
?>

<html>
<body>
<div>
<?php include 'admin_header.php'; ?><style><?php include 'content.css'; ?></style>
</div>
<form>
<center>
<div class="contain">
<br>

<h1>Delete Event</h1>
		Event ID 
		<input type="text" name='id'></input>
		<input type="submit" value="Delete" style="float:right;"/>
		<br>
		<br>
		<br>
		<br>
		<br>
	<?php include "view_event.php"?>

</div>
</form>
</body>
</html>