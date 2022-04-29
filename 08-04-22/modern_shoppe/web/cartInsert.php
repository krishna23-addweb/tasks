                            <?php
							ob_start();
							$id = $_REQUEST['id'];
							$name = $_REQUEST['name'];


							$conn = new PDO("mysql:host=localhost;dbname=admin_panel", "root", "");
							$sql = "select * from $name where Pid=:Pid";
							$query = $conn->prepare($sql);
							$query->bindParam(':Pid', $id, PDO::PARAM_STR);
							//$q = $pdo->query($sql);
							$query->execute();
							$query->setFetchMode(PDO::FETCH_ASSOC);
							while ($row = $query->fetch()) {
								$img = $row['Image_path'];
								$brand = $row['Brand'];
								$price = $row['Price'];
							}

							$sql1 = 'insert into Cart(Id, Image_path, Price, Brand, Name) values(:Id, :Image_path, :Price, :Brand, :Name)';
							echo $sql1;
							$query1 = $conn->prepare($sql1);
							$query1->bindParam(':Id', $id, PDO::PARAM_STR);
							$query1->bindParam(':Image_path', $img, PDO::PARAM_STR);
							$query1->bindParam(':Price', $price, PDO::PARAM_STR);
							$query1->bindParam(':Brand', $brand, PDO::PARAM_STR);
							$query1->bindParam(':Name', $name, PDO::PARAM_STR);
							// $query -> bindParam(':quantity', $quantity, PDO::PARAM_STR);
							// $query -> bindParam(':Total_price', $total, PDO::PARAM_STR);
							// echo $query;
							$query1->execute();

							header("Location:details.php?id=$id&table=$name");
							?>