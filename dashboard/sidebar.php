<?php
include"z_db.php";
$username=$_SESSION['username'];
?>
<div class="app-menu navbar-menu">
  <!-- LOGO -->
  <div class="navbar-brand-box">
    <!-- Dark Logo-->
<?php
    $rr=mysqli_query($con,"SELECT ufile FROM logo");
$r = mysqli_fetch_row($rr);
$ufile = $r[0];
?>

    <a href="index.html" class="logo logo-dark">
      <span class="logo-sm">
        <img src="uploads/logo/<?php print $ufile?>" alt="" height="22">
      </span>
      <span class="logo-lg">
        <img src="uploads/logo/<?php print $ufile?>" alt="" height="30">
      </span>
    </a>
    <!-- Light Logo-->
    <a href="index.html" class="logo logo-light">
      <span class="logo-sm">
        <img src="uploads/logo/<?php print $ufile?>" alt="" height="22">
      </span>
      <span class="logo-lg">
        <img src="uploads/logo/<?php print $ufile?>" alt="" height="30">
      </span>
    </a>
    <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
      <i class="ri-record-circle-line"></i>
    </button>
  </div>

  <div id="scrollbar">
    <div class="container-fluid">

      <div id="two-column-menu">
      </div>
      <ul class="navbar-nav" id="navbar-nav">
        <li class="menu-title"><span data-key="t-menu">Menu</span></li>


        <li class="nav-item">
                <a href="dashboard" class="nav-link" data-key="t-analytics">  <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards"> Dashboard </span></a>
              </li>

              <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarB" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarLanding">
                                <i class="ri-file-list-3-line"></i> <span data-key="t-landing">Manage Blog</span>
                            </a>
                            <div class="menu-dropdown collapse" id="sidebarB" style="">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="http://103.210.73.24/dashboard/add-blog.php" class="nav-link" data-key="t-one-page"> Add New </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="http://103.210.73.24/dashboard/bloglist.php" class="nav-link" data-key="t-nft-landing">Blog lists </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

              <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarLanding" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarLanding">
                                <i class="ri-checkbox-multiple-line"></i> <span data-key="t-landing">Manage Case Studies</span>
                            </a>
                            <div class="menu-dropdown collapse" id="sidebarLanding" style="">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="http://103.210.73.24/dashboard/add-service.php" class="nav-link" data-key="t-one-page"> Add Case Studies </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="http://103.210.73.24/dashboard/services.php" class="nav-link" data-key="t-nft-landing"> Case Studies List </a>
                                    </li>
                                </ul>
                            </div>
                        </li>


                        <!--<li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarPot" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarLanding">
                                <i class="ri-rhythm-fill"></i> <span data-key="t-landing">Manage Brochures</span>
                            </a>
                            <div class="menu-dropdown collapse" id="sidebarPot" style="">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="http://103.210.73.24/dashboard/add-portfolio.php" class="nav-link" data-key="t-one-page"> Add New </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="http://103.210.73.24/dashboard/portfolio.php" class="nav-link" data-key="t-nft-landing"> Brochures List </a>
                                    </li>
                                </ul>
                            </div>
                        </li>-->

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarSl" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarLanding">
                                <i class="ri-image-fill"></i> <span data-key="t-landing">Manage Awards</span>
                            </a>
                            <div class="menu-dropdown collapse" id="sidebarSl" style="">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="http://103.210.73.24/dashboard/add-awards.php" class="nav-link" data-key="t-one-page"> Add New </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="http://103.210.73.24/dashboard/awardslist.php" class="nav-link" data-key="t-nft-landing"> Awards List </a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </li>
                        <!--<li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarSll" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarLanding">
                                <i class="ri-image-fill"></i> <span data-key="t-landing">Manage Recognition
                        </span>
                            </a>
                            <div class="menu-dropdown collapse" id="sidebarSll" style="">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="http://103.210.73.24/dashboard/add-recongnition.php" class="nav-link" data-key="t-one-page"> Add New </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="http://103.210.73.24/dashboard/recongnitionlist.php" class="nav-link" data-key="t-nft-landing"> Recognition
                         List </a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </li>-->
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarSlle" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarLanding">
                                <i class="ri-image-fill"></i> <span data-key="t-landing">Manage Testimonials
                        </span>
                            </a>
                            <div class="menu-dropdown collapse" id="sidebarSlle" style="">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="http://103.210.73.24/dashboard/add-testimonials.php" class="nav-link" data-key="t-one-page"> Add New </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="http://103.210.73.24/dashboard/testimonialslist.php" class="nav-link" data-key="t-nft-landing"> Testimonials
                         List </a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </li>
                        <!--<li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarX" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarLanding">
                                <i class="ri-chrome-fill"></i> <span data-key="t-landing">Manage video</span>
                            </a>
                            <div class="menu-dropdown collapse" id="sidebarX" style="">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="http://103.210.73.24/dashboard/add-social.php" class="nav-link" data-key="t-one-page"> Add New </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="http://103.210.73.24/dashboard/social-links.php" class="nav-link" data-key="t-nft-landing">Video List </a>
                                    </li>
                                </ul>
                            </div>
                        </li>-->

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarT" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarLanding">
                                <i class="ri-message-line"></i> <span data-key="t-landing">Manage Gallery</span>
                            </a>
                            <div class="menu-dropdown collapse" id="sidebarT" style="">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="http://103.210.73.24/dashboard/add-testimony.php" class="nav-link" data-key="t-one-page">Add Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="http://103.210.73.24/dashboard/testimonylist.php" class="nav-link" data-key="t-nft-landing"> All Gallerys </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarW" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarLanding">
                                <i class="ri-rocket-line"></i> <span data-key="t-landing"> Job Posts</span>
                            </a>
                            <div class="menu-dropdown collapse" id="sidebarW" style="">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="http://103.210.73.24/dashboard/add-job.php" class="nav-link" data-key="t-one-page"> Add New </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="http://103.210.73.24/dashboard/joblist.php" class="nav-link" data-key="t-nft-landing"> All job lists </a>
                                    
                                </ul>
                            </div>
                        </li>
						
						
						  <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarWv" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarLanding">
                                <i class="ri-rocket-line"></i> <span data-key="t-landing"> Leads</span>
                            </a>
                            <div class="menu-dropdown collapse" id="sidebarWv" style="">
                                <ul class="nav nav-sm flex-column">
                                   
                                    <li class="nav-item">
                                        <a href="http://103.210.73.24/dashboard/contactlist.php" class="nav-link" data-key="t-nft-landing"> Contact us </a>
                                    
                                </ul>
                            </div>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarK" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarLanding">
                                <i class="ri-tools-fill"></i> <span data-key="t-landing"> Site Configuration </span>
                            </a>
                            <div class="menu-dropdown collapse" id="sidebarK" style="">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="http://103.210.73.24/dashboard/updatecontact.php" class="nav-link" data-key="t-one-page"> Site Settings </a>
                                    </li>
                                    <!--<li class="nav-item">
                                        <a href="sections" class="nav-link" data-key="t-nft-landing"> Section Titles </a>
                                    </li>-->
                                    <li class="nav-item">
                                        <a href="http://103.210.73.24/dashboard/updatelogo.php" class="nav-link" data-key="t-nft-landing"> Update Logo </a>
                                    </li>
                                    <!--<li class="nav-item">
                                        <a href="contact" class="nav-link" data-key="t-nft-landing"> Update Contact </a>
                                    </li>-->
                                </ul>
                            </div>
                        </li>









      </ul>
    </div>
    <!-- Sidebar -->
  </div>

  <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
