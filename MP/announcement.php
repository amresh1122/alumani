<?php include "db_connection.php"?>

<?php
	
	$ann_id = $_GET["ann_id"];
	
	$sql = "SELECT ann_topic, ann_description, ann_pic, ann_date FROM annoucement WHERE ann_id=$ann_id";
	
	$result = mysqli_query($conn,$sql);
	
	$row = mysqli_fetch_object($result);
	echo json_encode($row);
?>