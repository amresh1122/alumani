<?php include "db_connection.php"?>

<?php
	
	$sql = "SELECT ann_id, ann_topic, ann_pic, ann_date
			FROM annoucement";
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
	font-size:58px;
}

.con{
	text-align:right;
}

table,td{
	padding:5px;
}

.txt{
	text-align:right;
	
}
</style>


<body>
<?php include 'header.php'; ?><style><?php include 'content.css'; ?></style>

<div class="container">

<h1>Announcement</h1>
<br><br>
<table class="line" width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
<tr>
<td  class="line" align="center" bgcolor="#E6E6E6" width="10%;"><strong>#</strong></td>
<td  class="line" align="center" bgcolor="#E6E6E6" width="0%;"><strong>Title</strong></td>
<td  class="line" align="center" bgcolor="#E6E6E6"><strong>Person In Charge</strong></td>
<td  class="line" align="center" bgcolor="#E6E6E6"><strong>Date & Time</strong></td>
<td  class="line" align="center" bgcolor="#E6E6E6" width="10%;"><strong></strong></td>

			
</tr>


<?php
	
		// output data of each row
		while($row = mysqli_fetch_object($result)) {
		?>
		
			<tr>
					<td><center><?php echo $row->ann_id?></center></td>
					<td><center><?php echo $row->ann_topic?></center></td>
					<td><center><?php echo $row->ann_pic?></center></td>
					<td><center><?php echo $row->ann_date?></center></td>
					
					<td>
						<button class = "btn btn-primary btn-lg" data-toggle = "modal" data-target = "#myModal" id="<?php echo $row->ann_id; ?>" onclick="showDetails(this);">
						View</button>
					</td>
			</tr>
				
<?php } ?> 
</div>
</table>



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
               This Modal title
            </h4>
         </div>
         
         <div class = "modal-body">
		 <class="txt">
            <p>Topic: <span id="title"></span></p>
            <p>Description: <span id="desc"></span></p>
            <p>Person In Charge: <span id="pic"></span></p>
            <br><br><br><hr>
			<h6>Date&Time: <span id="date"></span></h6>
         </div>
         
        
         
      </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
  
</div><!-- /.modal -->
  
<script>
function showDetails(button)
{
	var ann_id = button.id;
	
	$.ajax({
		url: "announcement.php",
		method: "GET",
		data: {"ann_id": ann_id},
		success: function(response){
			
			var row = JSON.parse(response);
			
			$("#title").text(row.ann_topic);
			$("#desc").text(row.ann_description);
			$("#pic").text(row.ann_pic);
			$("#date").text(row.ann_date);
			
		}
		});
		
}
</script>

</body>
</html>