<!-- view_profile.php -->
<!-- To display all information of alumni database. -->
<html>
<head>
<title>View My Personal Profile</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<ol>
<?php
include("alumni_connect.php");

$query = "SELECT * member_id FROM members_info";

$result = mysqli_query($conn,$query);

if (mysqli_num_rows($result)>0){
    // output data of each row
    while($row = mysqli_fetch_assoc($result)){
        $info_id = $row["info_id"];
	$DOB= $row["DOB"];
	$gender = $row["gender"];
	$email = $row["email"];
	$address = $row["address"];
	$city = $row["city"];
	$contact_no = $row["mobile_no"];
	$session = $row["session"];
	$course = $row["course"];
	$myfile = $row["myfile"];
	$comment = $row["comment"];
	$designation = $row["designation"];
	$organisation = $row["organisation"];
	?>
	<li>
	DOB        : <?php echo $DOB; ?><br>
	Gender     : <?php echo $gender; ?><br>
	Email Address : <?php echo $email; ?><br>
	Address       : <?php echo $address; ?><br>
	City          : <?php echo $city; ?><br>
    Mobile Number : <?php echo $contact_no; ?><br>
	Session       : <?php echo $session; ?><br>
	Course        : <?php echo $course; ?><br>
    My File       : <?php echo $myfile; ?><br>
	Comment       : <?php echo nl2br($comment); ?><br>
	Designation   : <?php echo $designation; ?><br>
	Organisation  : <?php echo $organisation; ?><br>
	Tindakan : <a href="update_profile.php?id=<?php echo $info_id; ?>">Update Profile</a> /  <a href="Edit_Profile.php?id=<?php echo $info_id; ?>">Padam</a><br>
    </li>
	<?php
    }
} else {
    echo "0 results";

}
?>
</ol>
<div align="center"> <a href="index.php">Balik ke Halaman Utama</a> |
<a href="profile_insert.php">Add Profile</a>  </div>

</body>
</html>