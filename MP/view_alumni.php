<?php include "db_connection.php"?>

<?php
	$sql = "SELECT members.member_id, members.firstname, members.lastname, members.member_status, members_info.batch, members_info.programme, payment.payment_status
			FROM members, payment, members_info
			WHERE members.member_id = payment.member_id AND
			 members.member_id = members_info.member_id";
	$result = $conn->query($sql);
	
	
?>
<html>
<head>
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
</style>
<body>
<?php include 'admin_header.php'; ?><style><?php include 'content.css'; ?></style>

<div class="container">
<form action="approve_status.php" METHOD="post">

<h1>Manage Alumni</h1>
<table class="line" width="200px" border="0" align="center" cellpadding="3" cellspacing="1">
<tr>
<td  class="line" align="center" bgcolor="#E6E6E6"><strong>Member ID</strong></td>
<td  class="line" align="center" bgcolor="#E6E6E6"><strong>Name</strong></td>
<td  class="line" align="center" bgcolor="#E6E6E6"><strong>Batch</strong></td>
<td  class="line" align="center" bgcolor="#E6E6E6"><strong>Program</strong></td>
<td  class="line" align="center" bgcolor="#E6E6E6"><strong>Payment Status</strong></td>
<td  class="line" align="center" bgcolor="#E6E6E6"><strong>Member Status</strong></td>
<td  class="line" align="center" bgcolor="#E6E6E6"><strong></strong></td>

</tr>

<?php
	
	
if ($result->num_rows > 0) {
		
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<tr>
					<td><center>" . $row['member_id']. "</td>
					<td><center>" . $row['firstname']. " " . $row['lastname']. "</td></center> 
					<td><center>" . $row['batch']."</td></center> 
					<td><center>" . $row['programme']. "</td></center>
					<td><center>" . $row['payment_status']. "</td></center>
					<td><center>" . $row['member_status']. "</td></center>";
			
			echo"<td><a href='approve_status.php?id=".$row['member_id']. "'>&nbspApprove&nbsp</a></td>				
				  </tr>";
				  
				
				  
		}
			echo "</table>";
	}
	else {
		echo "0 results";
	}

	$conn->close();
?> 
<br>
<br>

</table>
<br>
<br>
</div>
</body>
</html>