<!-- alumni_connect.php -->

<?php
 error_reporting(0);
// Connect to the database

$conn = mysqli_connect("localhost","root","");
// Make sure we connected succesfully

if(!$conn)
{
    die('Connection Failed'.mysqli_error($conn));
}
else 

// Select the database to use
mysqli_select_db($conn,"alumni");
?>