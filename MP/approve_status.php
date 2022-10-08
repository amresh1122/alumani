<?php include "db_connection.php"?>

<?php

$id = $_GET['id'];


$sql = "UPDATE members
			SET member_status='APPROVED'
			WHERE member_id = $id";
			
			$result=mysqli_query($conn,$sql);
	
	if($result)
	    {
			
			$mess_dateS="<script language=javascript>
			window.alert(\"Approved.\");
			location.href='view_alumni.php'
			</script>";
			echo $mess_dateS;
		   			
	    }
	    else
		{
		  die("Failed");
		}
mysqli_close($conn);
	?>
	

	