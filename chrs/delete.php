<?php
include('connect.php');
$get_id = $_GET['id']; 

	$result = mysqli_query($con,"DELETE FROM house where house_no='$get_id'");

header("location: modifiey.php");

?>