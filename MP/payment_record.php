<?php include "db_connection.php"?>

<?php

	$sql = "SELECT payment.payment_id,payment.member_id,payment.pay_date,payment.typemembership,payment.totalpayment, payment.payment_status,members.firstname, members.lastname 
			FROM payment,members
			WHERE payment.member_id = members.member_id";
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
<h1>Payment Record</h1>
<table class="line" width="200px" border="0" align="center" cellpadding="3" cellspacing="1">
<tr>
<td  class="line" align="center" bgcolor="#E6E6E6"><strong>#</strong></td>
<td  class="line" align="center" bgcolor="#E6E6E6"><strong>Member ID</strong></td>
<td  class="line" align="center" bgcolor="#E6E6E6"><strong>Name</strong></td>
<td  class="line" align="center" bgcolor="#E6E6E6"><strong>Date</strong></td>
<td  class="line" align="center" bgcolor="#E6E6E6"><strong>Membership Type</strong></td>
<td  class="line" align="center" bgcolor="#E6E6E6"><strong>Payment Status</strong></td>
<td  class="line" align="center" bgcolor="#E6E6E6"><strong>Total Payment (RM)</strong></td>

</tr>

<?php
if ($result->num_rows > 0) {
		
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<tr>
					<td><center>" . $row['payment_id']. "</td>
					<td><center>" . $row['member_id']. "</td></center> 
					<td><center>" . $row['firstname']."". $row['lastname']. "</td></center> 
					<td><center>" . $row['pay_date']. "</td></center>
					<td><center>" . $row['typemembership']. "</td></center>
					<td><center>" . $row['payment_status']. "</td></center>
					<td><center>" . $row['totalpayment']. "</td></center>
				  </tr>"
				  ;
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
<table>
	<td class="con"><a href="update_payment.php">Update</a>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</td>
	</tr>
</table>
<br>
<br>
</div>
</body>
</html>