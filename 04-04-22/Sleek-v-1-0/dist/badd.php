<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Sleek - Admin Dashboard Template</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet"/>
  <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

  <!-- PLUGINS CSS STYLE -->
  <link href="assets/plugins/toaster/toastr.min.css" rel="stylesheet" />
  <link href="assets/plugins/nprogress/nprogress.css" rel="stylesheet" />
  <link href="assets/plugins/flag-icons/css/flag-icon.min.css" rel="stylesheet"/>
  <link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
  <link href="assets/plugins/ladda/ladda.min.css" rel="stylesheet" />
  <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
  <link href="assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />

  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="assets/css/sleek.css" />

  <link href="assets/img/favicon.png" rel="shortcut icon" />
  <script src="assets/plugins/nprogress/nprogress.js"></script>
  <style>
    input[type=button], input[type=submit], input[type=reset] {
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
</head>


  <body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>

    <div class="mobile-sticky-body-overlay"></div>

    <div class="wrapper">
      
              <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
        <aside class="left-sidebar bg-sidebar">
          <?php  include('includesidebar.php'); ?>
        </aside>
      <div class="page-wrapper">
                  <!-- Header -->
          <header class="main-header " id="header">
            <?php include('header.php'); ?>
          </header>
        <div class="content-wrapper">
          <div class="content">	
          <div class="card card-default">
										<div class="card-header card-header-border-bottom">
											<h2>Add More Bottomwear</h2>
										</div>
										<div class="card-body">
          <form enctype="multipart/form-data" method="post" class="form-pill">
          <div class="form-group">
						<label for="exampleFormControlInput3">Enter Id:</label>
            
            <input type-="text" name="id" class="form-control" id="exampleFormControlInput3"/><br/><br/>
          </div>
          <div class="form-group">
						<label for="exampleFormControlInput3">Enter Brand: </label>
            <input type="text" name="brand" class="form-control" id="exampleFormControlInput3"/><br/><br/>
          </div>
            <div class="form-group">
						<label for="exampleFormControlInput3">Enter Product_Details: </label>
            <input type="text" name="Product" class="form-control" id="exampleFormControlInput3"/><br/><br/>
            </div>
            <div class="form-group">
						<label for="exampleFormControlInput3">Enter Price: </label>
            <input type="number" name="Price" class="form-control" id="exampleFormControlInput3"/><br/><br/>
            </div>
            <div class="form-group">
						<label for="exampleFormControlInput3">Enter Size & fit : </label>
            <input type="text" name="Size" class="form-control" id="exampleFormControlInput3"/><br/><br/>
            </div>
            <div class="form-group">
						<label for="exampleFormControlInput3">Enter Material:</label>
            <input type="text" name="Material" class="form-control" id="exampleFormControlInput3"/><br/><br/>
            </div>
            <div class="form-group">
						<label for="exampleFormControlInput3">Enter Fabric:</label>
            <input type="text" name="Fabric" class="form-control" id="exampleFormControlInput3"/><br/><br/>
            </div>
            Select image :
            <input type="file" name="file"><br/><br/>
            <input type="submit" value="Upload" name="Submit1" > <br/><br/>
          </form>
</div>
</div>


        </div>
      </div>
   
    <footer class="footer mt-auto">
      <div class="copyright bg-white">
          <p>
                &copy; <span id="copy-year">2019</span> Copyright Sleek Dashboard Bootstrap Template by
                <a
                  class="text-primary"
                  href="http://www.iamabdus.com/"
                  target="_blank"
                  >Abdus</a
                >.
          </p>
      </div>
      <script>
                var d = new Date();
                var year = d.getFullYear();
                document.getElementById("copy-year").innerHTML = year;
      </script>
      </footer>

      </div>
  </div>
  
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/plugins/toaster/toastr.min.js"></script>
<script src="assets/plugins/slimscrollbar/jquery.slimscroll.min.js"></script>
<script src="assets/plugins/charts/Chart.min.js"></script>
<script src="assets/plugins/ladda/spin.min.js"></script>
<script src="assets/plugins/ladda/ladda.min.js"></script>
<script src="assets/plugins/jquery-mask-input/jquery.mask.min.js"></script>
<script src="assets/plugins/select2/js/select2.min.js"></script>
<script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
<script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
<script src="assets/plugins/daterangepicker/moment.min.js"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
<script src="assets/plugins/jekyll-search.min.js"></script>
<script src="assets/js/sleek.js"></script>
<script src="assets/js/chart.js"></script>
<script src="assets/js/date-range.js"></script>
<script src="assets/js/map.js"></script>
<script src="assets/js/custom.js"></script>

  </body>
</html>

<?php
ob_start();
$con=mysqli_connect("localhost","root","","admin_panel");
if(isset($_POST['Submit1']))
{ 
    $id=$_POST['id'];
    $brand=$_POST['brand'];
    $Product=$_POST['Product'];
    $Price=$_POST['Price'];
    $Size=$_POST['Size'];
    $Material=$_POST['Material'];
    $Fabric=$_POST['Fabric'];
    
    $filepath = "img/" . $_FILES["file"]["name"];

$sql = "INSERT INTO bottomwear VALUES ('$id','$brand','$Product',$Price,'$Size','$Material','$Fabric','$filepath')";
move_uploaded_file($_FILES["file"]["tmp_name"], $filepath);
$query =mysqli_query($con, $sql);
if($query) 
{
header('Location:bottomwear.php');
} 
else 
{
echo "Error !!";
}
} 
?>