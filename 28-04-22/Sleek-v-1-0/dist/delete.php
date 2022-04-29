<?php

ob_start();
include('commonData.php');
$id=$_REQUEST['id'];
$table=$_REQUEST['table'];
$con = mysqli_connect("localhost","root","","admin_panel") or die("error in connection");
$query= mysqli_query($con,"delete from $table where Pid='$id'") or die ("error in query");  
header("Location:collection.php?table=$table");
mysqli_close($con);
?>