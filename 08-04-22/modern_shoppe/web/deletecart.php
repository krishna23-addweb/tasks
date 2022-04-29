<?php
$id=$_REQUEST['id'];

$con=mysqli_connect("localhost","root","","admin_panel");
$query=mysqli_query($con,"delete from Cart where id='$id'");
header('Location:Cart.php');
mysqli_close($con);
?>