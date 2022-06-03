<?php
ob_start();

?>
<!DOCTYPE html>
<html>

<head>
    <title>Modern Shoppe a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Sign In :: w3layouts</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Modern Shoppe Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--//for-mobile-apps -->
    <!--Custom Theme files -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--//Custom Theme files -->
    <!--js-->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <!--//js-->
    <!--cart-->
    <script src="js/simpleCart.min.js"></script>
    <!--cart-->
    <!--web-fonts-->
    <link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
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
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
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
    <!--breadcrumbs-->
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow fadeInUp" data-wow-delay=".5s">
                <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Sign In</li>
            </ol>
        </div>
    </div>
    <!--//breadcrumbs-->
    <!--login-->
    <div class="login-page">
        <div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
            <h3 class="title">Payment</h3>
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit curabitur </p> -->
        </div>
        <div class="widget-shadow">
            <div class="login-top wow fadeInUp animated" data-wow-delay=".7s">
                <h4>Welcome to Modern Shoppe ! </h4>
            </div>
            <div class="login-body wow fadeInUp animated" data-wow-delay=".7s">
                <form method="post" action="placed.php">

                    Mode of Payment: <br><br><input type="radio" name="radio1" value="Home" required="">&nbsp;&nbsp;&nbsp;<label>Cash on delivery</label>&nbsp;&nbsp;&nbsp;

                    <input type="submit" name="Done" value="Place Order"  >
                    
                </form>
            </div>
        </div>
        <!-- <div class="login-page-bottom">
			<h5> - OR -</h5>
			<div class="social-btn"><a href="#"><i>Sign In with Facebook</i></a></div>
			<div class="social-btn sb-two"><a href="#"><i>Sign In with Twitter</i></a></div>
		</div> -->
    </div>
    <!--//login-->
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

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--//smooth-scrolling-of-move-up-->
    <!--Bootstrap core JavaScript
    ================================================== -->
    <!--Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>

</html>

<!-- // ob_start();
// if(isset($_POST['Sign_In'])){
//     $email=$_POST['email'];
//     $password=$_POST['password'];

// 	$con=mysqli_connect("localhost","root","","admin_panel") or die(" error in connection");
//     $q="select * from User_register where Email='$email' and Password='$password'";

//     $query = mysqli_query($con,$q ) or die("error in query");
// 	$abc=mysqli_fetch_array($query);
// 	$fname=$abc['Name'];
//     $rows = mysqli_num_rows($query);
//     if($rows>0){
//         session_start();
// 		$_SESSION['name']=$fname;
// 		$_SESSION['email']=$email;
//         header('Location:dashboard.php');
//     }
//     else{
//         echo "incorrect username or password";
//     }
    
//     mysqli_close($con);
// }
 -->

<?php
if (isset($_POST['Done'])) {
    session_start();
    $to = $_SESSION['email'];
    $subject = "Order Confirmed";
    $message = "Order Placed Successfully";

    require_once 'PHPMailer.php';
    require_once 'Exception.php';
    require_once 'SMTP.php';
    $err = array();

    $mail = new PHPMailer\PHPMailer\PHPMailer();

    $mail->isSMTP();  // the mailer is set to use SMTP
    $mail->SMTPDebug = 1; // 1 - errors & messages; 2 - messages only
    $mail->Host = "smtp.gmail.com";  // specify main and backup server
    $mail->SMTPAuth = true; // SMTP authentication is turned on
    $mail->Username = "krishna.a.addweb@gmail.com";  // SMTP username
    $mail->Password = "addweb@456"; // SMTP password
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->From = "krishna.a.addweb@gmail.com";
    $mail->FromName = "Modern Shoppee";

    $mail->AddAddress("tanisha.20mc2n024@jecrcu.edu.in");
    $mail->AddReplyTo("tanisha.20mc2n024@jecrcu.edu.in", "Hello");

    $mail->WordWrap = 50;  // set word wrap to 50 characters
    $mail->IsHTML(true);
    $mail->Subject = $subject;
    $mail->Body    = $message;
    $mail->AltBody = "This is the body in plain text for non-HTML mail clients";

    if (!$mail->Send()) {
        //$err['mail'] = $mail->ErrorInfo;
    }
}
?>