<?php
ob_start();
error_reporting(0);
session_start();
$email=$_SESSION['email'];
$name=$_SESSION['name'];
?>
<!DOCTYPE html>
<html>
<head>
    
	<title>Modern Shoppe a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Shoppe Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//for-mobile-apps -->
<!--Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--//Custom Theme files -->
<!--js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--//js-->
<!--cart-->
<script src="js/simpleCart.min.js"></script>
<!--cart-->
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'><link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Pompiere' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Fascinate' rel='stylesheet' type='text/css'>
<!--web-fonts-->
<!--animation-effect-->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
	<script>
	 new WOW().init();
	</script>
<!--//animation-effect-->
<!--start-smooth-scrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!--//end-smooth-scrolling-->
</head>
<body>
	<!--header-->
	<div class="header">
		<?php include('header.php'); ?>
	</div>
	<!--//header-->
	<!--banner-->
	<div class="banner">
		
			<div class="banner-text">			
				<div class="col-sm-5 banner-left wow fadeInLeft animated" data-wow-delay=".5s">			
					<h2>On Entire Fashion range</h2>
					<h3>Coming Soon </h3>
					<h4>Our New Designs</h4>
					<div class="count main-row">
						<ul id="example">
							<li><span class="hours">00</span><p class="hours_text">Hours</p></li>
							<li><span class="minutes">00</span><p class="minutes_text">Minutes</p></li>
							<li><span class="seconds">00</span><p class="seconds_text">Seconds</p></li>
						</ul>
							<div class="clearfix"> </div>
							<script type="text/javascript" src="js/jquery.countdown.min.js"></script>
							<script type="text/javascript">
								$('#example').countdown({
									date: '12/24/2020 15:59:59',
									offset: -8,
									day: 'Day',
									days: 'Days'
								}, function () {
									//alert('Done!');
								});
							</script>
					</div>

				</div>
				<div class="col-sm-7 b	banner-right wow fadeInRight animated" data-wow-delay=".5s">			
					<section class="slider grid">
						<div class="flexslider">
							<ul class="slides">
								
								<li>
									<img src="images/sale3.jpg" height="290px" width="716px" alt="">
								</li>
																
								<li>
									<img src="images/sale2.jpg" alt="">
								</li>
								
							</ul>
						</div>
					</section>
					<!--FlexSlider-->
					<script defer src="js/jquery.flexslider.js"></script>
					<script type="text/javascript">
						$(window).load(function(){
						  $('.flexslider').flexslider({
							animation: "pagination",
							start: function(slider){
							  $('body').removeClass('loading');
							}
						  });
						});
					</script>
					<!--End-slider-script-->
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>			
	<!--//banner-->
	<!--new-->
	<!-- <div class="new">
		<div class="container">
			<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
				<h3 class="title">New <span>Arrivals</span></h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit curabitur </p>
			</div>
			<div class="new-info">
				<div class="col-md-3 new-grid simpleCart_shelfItem wow flipInY animated" data-wow-delay=".5s">
					<div class="new-top">
						<a href="single.html"><img src="images/shoe.jpeg" width="218px" height="218px" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a class="item_add" href=""> Add to cart</a></li>
								<li><a href="single.html">Quick View </a></li>
								<li><a href="products.html">Show Details </a></li>
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a class="name" href="single.html">Shoes </a></h5>
						<div class="rating">
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span>☆</span>
						</div>	
						<div class="ofr">
							<p class="pric1"><del>$2000.00</del></p>
							<p><span class="item_price">$500.00</span></p>
						</div>
					</div>
				</div>
				<div class="col-md-3 new-grid new-mdl simpleCart_shelfItem wow flipInY animated" data-wow-delay=".7s">
					<div class="new-top">
						<a href="single.html"><img src="images/shirt.jpeg" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a class="item_add" href=""> Add to cart</a></li>
								<li><a href="single.html">Quick View </a></li>
								<li><a href="products.html">Show Details </a></li>
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a class="name" href="single.html">Shirts </a></h5>
						<div class="rating">
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span>☆</span>
						</div>	
						<div class="ofr">
							<p><span class="item_price">$50.00</span></p>
						</div>
					</div>
				</div>
				<div class="col-md-3 new-grid new-mdl1 simpleCart_shelfItem wow flipInY animated" data-wow-delay=".9s">
					<div class="new-top">
						<a href="single.html"><img src="images/w2.jpeg" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a class="item_add" href=""> Add to cart</a></li>
								<li><a href="single.html">Quick View </a></li>
								<li><a href="products.html">Show Details </a></li>
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a class="name" href="single.html">Watches </a></h5>
						<div class="rating">
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span>☆</span>
						</div>	
						<div class="ofr">
							<p><span class="item_price">$150.00</span></p>
						</div>
					</div>
				</div>
				<div class="col-md-3 new-grid simpleCart_shelfItem wow flipInY animated" data-wow-delay="1.1s">
					<div class="new-top">
						<a href="single.html"><img src="images/M1.png" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a class="item_add" href=""> Add to cart</a></li>
								<li><a href="single.html">Quick View </a></li>
								<li><a href="products.html">Show Details </a></li>
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a class="name" href="single.html">Mobiles </a></h5>
						<div class="rating">
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span>☆</span>
						</div>	
						<div class="ofr">
							<p class="pric1"><del>$5050.00</del></p>
							<p><span class="item_price">$3020.00</span></p>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>		 -->
	<!--//new-->
	<!--gallery-->
	<div class="gallery">
		<div class="container">
			<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
				<h3 class="title">Our<span> Products</span></h3>
				<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit curabitur </p> -->
			</div>
			<div class="gallery-info">
			<?php
				ob_start();
				try{
					$conn = new PDO("mysql:host=localhost;dbname=admin_panel","root","")	;
					$sql='select * from Category';
					$q=$conn->query($sql);
					$q->setFetchMode(PDO::FETCH_ASSOC);
                    while($row=$q->fetch())
                    {
						$img_url=$row['Image_path'];
						
						$table=$row['Table'];
			?>

				<div class = "col-md-3 gallery-grid wow flipInY animated" data-wow-delay=".5s">
					<a href = <?php echo "collection.php?table=$table" ?>><img src=<?php echo $img_url ?> class="img-responsive" alt=""/></a>
					<div class = "gallery-text simpleCart_shelfItem">
						<h5><a class="name" href=<?php echo "collection.php?table=$table" ?>> <?php echo "{$row['Table']}"; ?></a></h5>
						<!-- <p><span class="item_price">100$</span></p> -->
					</div>
				</div>

				<?php
					}
				}
				catch(PDOException $e){
					die("Could not connect to the database :" . $e->getMessage());
				}
				?>
				
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--//gallery-->
	<!--trend-->
	<?php
				ob_start();
				try{
					$conn = new PDO("mysql:host=localhost;dbname=admin_panel","root","")	;
					$sql='select * from Category';
					$q1=$conn->query($sql);
					$q1->setFetchMode(PDO::FETCH_ASSOC);
                    while($row1=$q1->fetch())
                    {
						$img_url=$row1['Image_path'];
						
						$table3=$row1['Table'];
					?>
	<div class="gallery">
		<div class="container">
			<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
				<h3 class="title"><?php echo $table3; ?></h3>
				<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit curabitur </p> -->
			</div>
			<div class="gallery-info">
			<?php
						
						//$conn = new PDO("mysql:host=localhost;dbname=admin_panel","root","")	;
						$sql1="select * from $table3 limit 0,4";
						$q2=$conn->query($sql1);
						$q2->setFetchMode(PDO::FETCH_ASSOC);
                    	while($row11=$q2->fetch())
                    	{
							$img_url=$row11['Image_path'];
							$tname=$row11['Name'];
			?>

							<div class = "col-md-3 gallery-grid wow flipInY animated" data-wow-delay=".5s">
							<a href = <?php echo "collection.php?table=$tname" ?>><img src=<?php echo $img_url ?> class="img-responsive" alt=""/></a>
							<div class = "gallery-text simpleCart_shelfItem">
							<h5><a class="name" href=<?php echo "collection.php?table=$tname" ?>> <?php echo $tname; ?></a></h5>
						<!-- <p><span class="item_price">100$</span></p> -->
							</div>
						</div>

					<?php
					}
				
				?>
				
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<?php
	}
}
catch(PDOException $e){
	die("Could not connect to the database :" . $e->getMessage());
}
?>
	<!--//trend-->
	<!--footer-->
	<div class="footer">
		<?php include('footer.php'); ?>
	</div>
	<!--//footer-->		
	<!--search jQuery-->
	<script src="js/main.js"></script>
	<!--//search jQuery-->
	<!--smooth-scrolling-of-move-up-->
	<script type="text/javascript">
		$(document).ready(function() {
		
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!--//smooth-scrolling-of-move-up-->
	<!--Bootstrap core JavaScript
    ================================================== -->
    <!--Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>
