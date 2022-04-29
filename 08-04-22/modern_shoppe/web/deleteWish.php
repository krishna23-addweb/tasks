<?php
$id=$_REQUEST['id'];

$con=mysqli_connect("localhost","root","","admin_panel");
$query=mysqli_query($con,"delete from Wishlist where Pid='$id'");
header('Location:wishlist.php');
mysqli_close($con);
?>