<!--update_profile_success.php-->
<!--To update data of update_profile.php into database.-->
<?php
include ("alumni_connect.php");

extract ($_POST);

$query = "UPDATE members SET DOB = '$DOB', gender = '$gender', email = '$email', address ='$address', city= '$city', mobile_no= '$contact_no', session='$session', course='$course', myfile='$myfile', comment='$comment', designation='$designation', organisation='$organisation' WHERE member_id= '$member_id'";

$result = mysqli_query($conn,$query) or die ("Could not execute query in update_profile.php");
if($result){
 echo "<script type = 'text/javascript'> window.location='view_profile.php' </script>";
}
?>