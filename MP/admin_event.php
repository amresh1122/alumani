<?php include "db_connection.php"?>

<?php

	$sql = "SELECT * FROM event";
	$result = $conn->query($sql);
	
	
?>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
td{
	bgcolor:"#FFFFFF";
}

.line{
	border: 1px solid white;
}

h1{
	text-align: center;
	font-size:64px;
}


.con{
	text-align:right;
}

table,td{
	padding:5px;
}
</style>
<body>
<?php include 'admin_header.php'; ?><style><?php include 'content.css'; ?></style>

<div class="container">
<h1>Event</h1>
<br><br>
<a href="add_event.php" style="float:right;"><strong>ADD</strong></a>
<table class="line" width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
<tr>
<td  class="line" align="center" bgcolor="#E6E6E6" width="10%"><strong>#</strong></td>
<td  class="line" align="center" bgcolor="#E6E6E6" width="60%"><strong>Event Name</strong></td>
<td  class="line" align="center" bgcolor="#E6E6E6"><strong>Event Category</strong></td>
<td  class="line" align="center" bgcolor="#E6E6E6" width="10%"><strong></strong></td>


</tr>



<?php
	
		// output data of each row
		while($row = mysqli_fetch_object($result)) {
		?>
			<tr>	
					<td><center><?php echo $row->event_id?></center></td>
					<td><center><?php echo $row->event_name?></center></td>
					<td><center><?php echo $row->event_type?></center></td>
			
					<td>
						<button class = "btn btn-primary btn-lg" data-toggle = "modal" data-target = "#myModal" 
						id="<?php echo $row->event_id; ?>" onclick="showDetails(this);">
						View</button>
					</td>
			</tr>
				  
		
<?php } ?> 
</table>
<br>
<br>
<br>
<table>
	<td class="con"><a href="update_event.php">Update</a>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="delete_event.php">Delete</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</td>
	</tr>
</table>
</div>
		<br>


<!-- Modal -->
<div class = "modal fade" id = "myModal" tabindex = "-1" role = "dialog" 
   aria-labelledby = "myModalLabel" aria-hidden = "true">
   
   <div class = "modal-dialog">
      <div class = "modal-content">
         
         <div class = "modal-header">
            <button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">
                  &times;
            </button>
            
            <h4 class = "modal-title" id = "myModalLabel">
               Event Details
            </h4>
         </div>
         
         <div class = "modal-body">
		 <class="txt">
            <p>Event Name: <span id="name"></span></p>
            <p>Category: <span id="category"></span></p>
            <p>Description: <span id="desc"></span></p>
            <p>Date: <span id="date"></span></p>
            <p>Time: <span id="time"></span></p>
            <p>Venue: <span id="venue"></span></p>
         </div>
         
        
         
      </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
  
</div><!-- /.modal -->
  
<script>
function showDetails(button)
{
	var event_id = button.id;
	
	$.ajax({
		url: "view_event.php",
		method: "GET",
		data: {"event_id": event_id},
		success: function(response){
			
			var row = JSON.parse(response);
			
			$("#name").text(row.event_name);
			$("#category").text(row.event_type);
			$("#desc").text(row.description);
			$("#date").text(row.event_date);
			$("#time").text(row.event_time);
			$("#venue").text(row.event_venue);
			
		}
		});
		
}
</script>

</body>
</html>