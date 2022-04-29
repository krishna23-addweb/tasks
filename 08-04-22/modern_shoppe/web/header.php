<?php
ob_start();
error_reporting(0);
// session_start();
if(!isset($_SESSION['name']))
{
	$name=$_SESSION['name'];
}

?>
<div class="top-header navbar navbar-default"><!--header-one-->
		<div class="container">
				<div class="nav navbar-nav wow fadeInLeft animated" data-wow-delay=".5s">
					<p>Welcome to Modern Shoppe  </p>
				</div>
				<div class="nav navbar-nav wow fadeInLeft animated" data-wow-delay=".5s">
					<p><?php if($_SESSION['name']!="")
					{
						echo "<h4>".$_SESSION['name']."</h4>";
					}
					else
					{
						echo "<a href=register.php>Register </a> Or <a href=signin.php>Sign In </a>";
					}

					 ?>
					</p>
				</div>
				<div class="nav navbar-nav navbar-right social-icons wow fadeInRight animated" data-wow-delay=".5s">
					<ul>
						<li><a href="#"> </a></li>
						<li><a href="#" class="pin"> </a></li>
						<li><a href="#" class="in"> </a></li>
						<?php if($_SESSION['name']!="")
						{
						?>
							<div class="btn_form">
								<?php echo "<a href=logout.php class=add-cart item_add>Logout</a>	";?>
							</div>
						<?php
						}
							else{
							?>
								<div class="btn_form">
								<?php echo "<a href=signin.php class=add-cart item_add>Login</a>	";?>
							</div>
							<?php
							}
							?>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="header-two navbar navbar-default"><!--header-two-->
			<div class="container">
				<div class="nav navbar-nav header-two-left">
					
					<!-- <ul>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 892</li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">mail@example.com</a></li>			
					</ul> -->
				</div>
				<div class="nav navbar-nav logo wow zoomIn animated" data-wow-delay=".7s">
					<h1><a href="index.html">Modern <b>Shoppe</b><span class="tag">Everything for Mens world </span> </a></h1>
				</div>
				<div class="nav navbar-nav navbar-right header-two-right">
					<div class="header-right my-account">
						<a href="contact.html"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> CONTACT US</a>						
					</div>
					<div class="header-right my-account">
						<a href="wishlist.php"><i style="color: #ff5a10; font-size:22px" class="fa fa-heart-o"></i></a>	&nbsp;&nbsp;&nbsp;&nbsp;					
					</div>
					<div class="header-right cart">
						<a href="Cart.php"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
						<h4><a href="Cart.php">
								<span class="simpleCart_total"> $0.00 </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> 0 </span>) 
						</a></h4>
						<div class="cart-box">
							<p><a href="javascript:;" class="simpleCart_empty">Empty cart</a></p>
							<div class="clearfix"> </div>
						</div>
					</div>
					
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="top-nav navbar navbar-default"><!--header-three-->
			<div class="container">
				<nav class="navbar" role="navigation">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<!--navbar-header-->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav top-nav-info">
							<li><a href="dashboard.php" class="active">Home</a></li>
							<li><a href="collection.php?table=Tshirts" class="active">T-shirts</a></li>
							<li><a href="collection.php?table=Shirts" class="active">Shirts</a></li>

							<li><a href="collection.php?table=Watches" class="active">Watches</a></li>
							<li><a href="collection.php?table=Shoes" class="active">Shoes</a></li>
							<li><a href="collection.php?table=Laptop" class="active">Laptop</a></li>
							<li><a href="collection.php?table=Mobile" class="active">Mobile</a></li>
							<li><a href="collection.php?table=Bags" class="active">Bags</a></li>
							<li><a href="collection.php?table=Bottomwear" class="active">Bottomwear</a></li>

							
							
							<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
						</ul>
						
				</nav>
				<div id="cd-search" class="cd-search">
					<form>
						<input type="search" name="search" onkeypress="f1()">
					</form>
				</div>
			</div>
		</div>


		<?php
ob_start();
function f1(){
	$name=$_REQUEST['search'];
	//$name=strtolower($name);
	echo "abc";
	echo $name;
    $con=mysqli_connect("localhost","root","","admin_panel");
    $query=mysqli_query($con,"select * from Category where Product_name='$name'") or die("error in query");
    while($row=mysqli_fetch_array($query)){
        $pname=$row['Product_name'];
    }
	header('Location:collection.php?table=$pname');
}
?>