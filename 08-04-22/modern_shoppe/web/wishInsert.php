<?php
ob_start();
$id = $_REQUEST['id'];
$brand = $_REQUEST['brand'];
$name = $_REQUEST['name'];
$price = $_REQUEST['price'];
$img = $_REQUEST['img'];
$mail = $_SESSION['email'];

try {
	$conn = new PDO("mysql:host=localhost;dbname=admin_panel", "root", "");

	$sql1 = 'insert into Wishlist(Pid, Image_path, Price, Brand, Name, Email) values(:Pid,:Image_path,:Price,:Brand,:Name, :Email)';
	$query = $conn->prepare($sql1);
	$query->bindParam(':Pid', $id, PDO::PARAM_STR);
	$query->bindParam(':Image_path', $img, PDO::PARAM_STR);
	$query->bindParam(':Price', $price, PDO::PARAM_STR);
	$query->bindParam(':Brand', $brand, PDO::PARAM_STR);
	$query->bindParam(':Name', $name, PDO::PARAM_STR);
	$query1->bindParam(':Email', $mail, PDO::PARAM_STR);
	//echo $query;
	$query->execute();
	// echo "inserted";
	header("Location:details.php?id=$id&table=$name");
} catch (PDOException $e) {
	die("Could not connect to the database :" . $e->getMessage());
}
