<?php include "db_connection.php"?>

<?php
	
	$event_id = $_GET["event_id"];
	
	$sql = "SELECT * FROM event WHERE event_id=$event_id";
	
	$result = mysqli_query($conn,$sql);
	
	$row = mysqli_fetch_object($result);
	echo json_encode($row);
?>