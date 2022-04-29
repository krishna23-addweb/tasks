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

  

  <!-- FAVICON -->
  <link href="assets/img/favicon.png" rel="shortcut icon" />
  
  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="assets/plugins/nprogress/nprogress.js"></script>
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
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
              <a href="/index22.html">
                <svg
                  class="brand-icon"
                  xmlns="http://www.w3.org/2000/svg"
                  preserveAspectRatio="xMidYMid"
                  width="30"
                  height="33"
                  viewBox="0 0 30 33"
                >
                  <g fill="none" fill-rule="evenodd">
                    <path
                      class="logo-fill-blue"
                      fill="#7DBCFF"
                      d="M0 4v25l8 4V0zM22 4v25l8 4V0z"
                    />
                    <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                  </g>
                </svg>
                <span class="brand-name">Sleek Dashboard</span>
              </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-scrollbar">

              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">
                

                
                  <li  class="has-sub active expand" >
                    <!--<a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                      aria-expanded="false" aria-controls="dashboard">
                      <i class="mdi mdi-view-dashboard-outline"></i>
                      <span class="nav-text">Dashboard</span> <b class="caret"></b>
                    </a>-->
                    <a href="index22.html"><i class="mdi mdi-view-dashboard-outline"></i><span class="nav-text">Dashboard</span></a>
                    
                  </li>
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#authentication"
                      aria-expanded="false" aria-controls="authentication">
                      <span class="nav-text">Authentication</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="authentication">
                      <div class="sub-menu">
                        
                        <li >
                          <a href="sign-in.php">Sign In</a>
                        </li>
                        
                        <li >
                            <a href="sign-up.php">Sign Up</a>
                        </li>
                        
                      </div>
                    </ul>
                  </li>
                  
                  <li  class="has-sub" >
                    <!--<a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#ui-elements"
                      aria-expanded="false" aria-controls="ui-elements"></a>-->
                      <a href="tshirt.php"><i class="mdi mdi-folder-multiple-outline"></i>
                      <span class="nav-text">T-shirt</span> </a>
                    
                    
                  </li>               
                  <li  class="has-sub" >
                    <!--<a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#charts"
                      aria-expanded="false" aria-controls="charts"></a>-->
                      <a href="shirt.php"><i class="mdi mdi-chart-pie"></i>
                      <span class="nav-text">Shirt</span> 
                    </a>
                    
                  </li>
                  <li  class="has-sub" >
                    <!--<a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pages"
                      aria-expanded="false" aria-controls="pages"></a>-->
                      <a href="watches.php"><i class="mdi mdi-image-filter-none"></i>
                      <span class="nav-text">Watches</span> 
                    </a>
                  </li>
                  <li  class="has-sub" >
                    <!--<a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#documentation"
                      aria-expanded="false" aria-controls="documentation">-->
                      <a href="footwear.php"><i class="mdi mdi-book-open-page-variant"></i>
                      <span class="nav-text">Footwear</span> 
                    </a>
                    
                  </li>
                  <li  class="has-sub" >
                    <!--<a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pages"
                      aria-expanded="false" aria-controls="pages">-->
                      <a href="bottomwear.php"><i class="mdi mdi-image-filter-none"></i>
                      <span class="nav-text">Bottomwear</span> 
                    </a>
                  </li>
                 <li  class="has-sub" >
                    <!--<a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pages"
                      aria-expanded="false" aria-controls="pages"></a>-->
                      <a href="Sunglasses.php"><i class="mdi mdi-image-filter-none"></i>
                      <span class="nav-text">Sunglasses</span> 
                    </a>
                  </li>
                  <li  class="has-sub" >
                    <!--<a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pages"
                      aria-expanded="false" aria-controls="pages">-->
                      <a href="headphones.php"><i class="mdi mdi-image-filter-none"></i>
                      <span class="nav-text">Headphones</span> 
                    </a>
                  </li>
                  <li  class="has-sub" >
                    <!--<a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pages"
                      aria-expanded="false" aria-controls="pages">-->
                      <a href="bags.php"><i class="mdi mdi-image-filter-none"></i>
                      <span class="nav-text">Bags</span> 
                    </a>
                  </li>
                  
              </ul>
            </div>
          </div>

        </aside>

      <div class="page-wrapper">
                  <!-- Header -->
          <header class="main-header " id="header">
            <nav class="navbar navbar-static-top navbar-expand-lg">
              <!-- Sidebar toggle button -->
              <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <!-- search form -->
              <div class="search-form d-none d-lg-inline-block">
                <div class="input-group">
                  <button type="button" name="search" id="search-btn" class="btn btn-flat">
                    <i class="mdi mdi-magnify"></i>
                  </button>
                  <input type="text" name="query" id="search-input" class="form-control" placeholder="'button', 'chart' etc."
                    autofocus autocomplete="off" />
                </div>
                <div id="search-results-container">
                  <ul id="search-results"></ul>
                </div>
              </div>

              <div class="navbar-right ">
                <ul class="nav navbar-nav">
                  <!-- Github Link Button -->
                  <li class="github-link mr-3">
                    <a class="btn btn-outline-secondary btn-sm" href="https://github.com/tafcoder/sleek-dashboard" target="_blank">
                      <span class="d-none d-md-inline-block mr-2">Source Code</span>
                      <i class="mdi mdi-github-circle"></i>
                    </a>

                  </li>
                  <li class="dropdown notifications-menu">
                    <button class="dropdown-toggle" data-toggle="dropdown">
                      <i class="mdi mdi-bell-outline"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li class="dropdown-header">You have 5 notifications</li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-plus"></i> New user registered
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-remove"></i> User deleted
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 07 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-chart-areaspline"></i> Sales report is ready
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 12 PM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-supervisor"></i> New client
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-server-network-off"></i> Server overloaded
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 05 AM</span>
                        </a>
                      </li>
                      <li class="dropdown-footer">
                        <a class="text-center" href="#"> View All </a>
                      </li>
                    </ul>
                  </li>
                  <!-- User Account -->
                  <li class="dropdown user-menu">
                    <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                      <img src="assets/img/user/user.png" class="user-image" alt="User Image" />
                      <span class="d-none d-lg-inline-block">Abdus Salam</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <!-- User image -->
                      <li class="dropdown-header">
                        <img src="assets/img/user/user.png" class="img-circle" alt="User Image" />
                        <div class="d-inline-block">
                          <?php
                          $a=$_SESSION['fname'];
                          $b=$_SESSION['email'];
                          echo $a ." <small class=pt-1>".$b."</small>";
                          ?>
                        </div>
                      </li>

                      <li>
                        <a href="profile.html">
                          <i class="mdi mdi-account"></i> My Profile
                        </a>
                      </li>
                      <!-- <li>
                        <a href="email-inbox.html">
                          <i class="mdi mdi-email"></i> Message
                        </a>
                      </li>
                      <li>
                        <a href="#"> <i class="mdi mdi-diamond-stone"></i> Projects </a>
                      </li>
                      <li>
                        <a href="#"> <i class="mdi mdi-settings"></i> Account Setting </a>
                      </li> -->

                      <li class="dropdown-footer">
                        <!-- <a href="logout.php"> <i class="mdi mdi-logout"></i> Log Out </a> -->
                        <a href="sign-in.php" onclick="<?php session_destroy();?>">Logout</a>
                        <!-- <form method="post">
                          <input type="submit" value="logout" name="logout" formaction="logout.php">
                        </form> -->
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>
          </header>
          <section> 
            <div class="row mt-4 mb-2 ml-3">
              <div class="col-md-3 col-lg-3 inner-section">
                <img src="data:image/jpeg;base64,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" width=150 height=200>
                <h2>T-Shirts</h2>
              </div>
              <div class="col-md-3 col-lg-3 inner-section">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGOtyjPxmyIkQ7cRG9z13HI8LCahcL1j6UFA&usqp=CAU" width=150 height=200>
                <h2>Shirts</h2>
              </div>
              <div class="col-md-3 col-lg-3 inner-section">
                <img src="data:image/jpeg;base64,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" width=150 height=200>
                <h2>Watches</h2>
              </div>
              <div class="col-md-3 col-lg-3 inner-section">
                <img src="data:image/jpeg;base64,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" width=150 height=200>
                <h2>Footwear</h2>
              </div>
            </div>
            <div class="row mt-2 mb-2 ml-3">
              <div class="col-md-3 col-lg-3 inner-section">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSB8pHKXqMoY2jIb67hRWkksRv4SudrsZ85Ig&usqp=CAU" width=150 height=200>
                <h2>BottomWear</h2>
              </div>
              <div class="col-md-3 col-lg-3 inner-section">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRnRXQhf86PaGD6F239FOrv5nFzqE4QMbGq6A&usqp=CAU" width=150 height=200>
                <h2>Sunglasses</h2>
              </div>
              <div class="col-md-3 col-lg-3 inner-section">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHDaPdm0kAx38l-AED7zqvWd3lTg8XLiwjEg&usqp=CAU" width=150 height=200>
                <h2>Headphones</h2>
              </div>
              <div class="col-md-3 col-lg-3 inner-section">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4_ObPWxXXfHz-mEudAAKbb-1nrig1yFX26G66aFoMcvxief9hHARy676Yf2Dx1y9fVZE&usqp=CAU" width=150 height=200>
                <h2>Bags</h2>
              </div>
            </div>
          </section>


         <footer class="footer mt-auto">
            <div class="copyright bg-white">
               <p>
                &copy; <span id="copy-year">2019</span> Copyright Sleek Dashboard Bootstrap Template by
                <a
                  class="text-primary"
                  href="http://www.iamabdus.com/"
                  target="_blank"
                  >Abdus</a>.
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


