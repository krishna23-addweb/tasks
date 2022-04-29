<div id="sidebar" class="sidebar sidebar-with-footer">
  <!-- Aplication Brand -->
  <div class="app-brand">
    <a href="/index22.html">
      <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30" height="33" viewBox="0 0 30 33">
        <g fill="none" fill-rule="evenodd">
          <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
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



      <li class="has-sub active expand">
        <!--<a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                      aria-expanded="false" aria-controls="dashboard">
                      <i class="mdi mdi-view-dashboard-outline"></i>
                      <span class="nav-text">Dashboard</span> <b class="caret"></b>
                    </a>-->
        <a href="index22.php"><i class="mdi mdi-view-dashboard-outline"></i><span class="nav-text">Dashboard</span></a>

      </li>
      <li class="has-sub">
        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#authentication" aria-expanded="false" aria-controls="authentication">
          <span class="nav-text">Authentication</span> <b class="caret"></b>
        </a>
        <ul class="collapse" id="authentication">
          <div class="sub-menu">

            <li>
              <a href="sign-in.php">Sign In</a>
            </li>

            <li>
              <a href="sign-up.php">Sign Up</a>
            </li>

          </div>
        </ul>
      </li>
      <?php
      ob_start();
      try {
        $conn = new PDO("mysql:host=localhost;dbname=admin_panel", "root", "");
        $sql = 'select * from Category';
        $q = $conn->query($sql);
        $q->setFetchMode(PDO::FETCH_ASSOC);
        while ($row = $q->fetch()) {
          $img_url = $row['Image_path'];

          $table = $row['Table'];

      ?>
          <li class="has-sub">
            <!--<a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#ui-elements"
                      aria-expanded="false" aria-controls="ui-elements"></a>-->
            <?php echo "<a href=collection.php?table=$table>"; ?><i class="mdi mdi-folder-multiple-outline"></i>
            <span class="nav-text"><?php echo $table; ?></span> </a>


          </li>
      <?php
        }
      } catch (PDOException $e) {
        die("Could not connect to the database :" . $e->getMessage());
      }
      ?>

    </ul>
  </div>
</div>