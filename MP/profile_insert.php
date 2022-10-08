<?php
	session_start();
	if(!isset($_SESSION['member_id']))
	{
		header("location:login.php");
	}
	else
	{
		$member_id=$_SESSION['member_id'];
	}
?>
<!-- profile_insert.php -->
<!-- To insert data of masuk.php into database. -->
<?php

include("alumni_connect.php");

   $m_ic = $_REQUEST['m_ic'];
   $gender = $_REQUEST['gender'];
   $DOB = $_REQUEST['DOB'];
   $address = $_REQUEST['address'];
   $contact_no = $_REQUEST['contact_no'];
   $email = $_REQUEST['email'];
   $batch   = $_REQUEST['batch'];
   $programme = $_REQUEST['programme'];
   $graduation_year = $_REQUEST['graduation_year'];
   
   $query1 = "UPDATE members_info SET m_ic='$m_ic' where member_id='$member_id'";
   $result1=$conn->query($query1);
   $query2 = "UPDATE members_info SET gender='$gender' where member_id='$member_id'";
   $result2=$conn->query($query2);
   $query3 = "UPDATE members_info SET DOB='$DOB' where member_id='$member_id'";
   $result3=$conn->query($query3);
   $query4 = "UPDATE members_info SET address='$address' where member_id='$member_id'";
   $result4=$conn->query($query4);
   $query5 = "UPDATE members_info SET contact_no='$email' where member_id='$member_id'";
   $result5=$conn->query($query5);
   $query6 = "UPDATE members_info SET email='$email' where member_id='$member_id'";
   $result6=$conn->query($query6);
   $query7 = "UPDATE members_info SET batch='$batch'where member_id='$member_id'";
   $result7=$conn->query($query7);
   $query8 = "UPDATE members_info SET programme='$programme' where member_id='$member_id'";
   $result8=$conn->query($query8);
   $query9 = "UPDATE members_info SET graduation_year='$graduation_year' where member_id='$member_id'";
   $result9=$conn->query($query9);
   
   
   
   if ($result1==true || $result2==true ||$result3==true ||$result4==true ||$result5==true ||$result6==true ||$result7==true ||$result8==true ||$result9==true) {
     echo "<script>alert('Update Profile Successfully. Redirecting You To Alumni HomePage in 2 Second.....')</script>";
     header("refresh:2;url=profile.php");
	
   } 
   else 
   {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
   }


?>