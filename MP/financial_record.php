<?php include "db_connection.php"?>
<?php
	
	$sql = "SELECT financial.finance_id,members.member_id,financial.finance_date,financial.finance_type,financial.finance_amount, members.firstname, members.lastname
			FROM financial,members
			WHERE financial.member_id = members.member_id";

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

<h1>Financial Record</h1>
<p id="demo"></p>
<table class="line" width="200px" border="0" align="center" cellpadding="3" cellspacing="1">

<tr>
<td  class="line" align="center" bgcolor="#E6E6E6"><strong>#</strong></td>
<td  class="line" align="center" bgcolor="#E6E6E6"><strong>Member ID</strong></td>
<td  class="line" align="center" bgcolor="#E6E6E6"><strong>Name</strong></td>
<td  class="line" align="center" bgcolor="#E6E6E6"><strong>Date</strong></td>
<td  class="line" align="center" bgcolor="#E6E6E6"><strong>Purpose</strong></td>
<td  class="line" align="center" bgcolor="#E6E6E6"><strong>Amount</strong></td>


</tr>

<?php
if ($result->num_rows > 0) {
		
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<tr>
					<td><center>" . $row['finance_id']. "</td>
					<td><center>" . $row['member_id']. "</td></center> 
					<td><center>" . $row['firstname']."". $row['lastname']. "</td></center> 
					<td><center>" . $row['finance_date']. "</td></center>
					<td><center>" . $row['finance_type']. "</td></center>
					<td><center>" . $row['finance_amount']. "</td></center>
					
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

<br>
<br>
</div>
</body>
</html>