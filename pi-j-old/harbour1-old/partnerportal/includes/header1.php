<div id="loader">
    <div class="loader"></div>
</div>

<div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center" style="background: #fff;box-shadow: 0 4px 16px 0 rgb(167 175 183 / 33%);">
            <a class="navbar-brand brand-logo" href="https://harbour1.in/partners" target="_blank">
            <img src="https://partnerportal.pidatacenters.com/assets/images/PiPartnerProgramlogo.svg?vmay02" alt="logo" style="max-width: 120px;" /> </a>
            <a class="navbar-brand brand-logo-mini" href="https://harbour1.in/partners" target="_blank">
            <img src="assets/images/logo-mini.svg" alt="logo" /> </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
            <ul class="navbar-nav">
            <!-- <li class="nav-item font-weight-semibold d-none d-lg-block">Help : +050 2992 709</li> -->
            
            </ul>
            <!-- <form class="ml-auto search-form d-none d-md-block" action="#">
            <div class="form-group">
                <input type="search" class="form-control" placeholder="Search Here">
            </div>
            </form> -->
            <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
                <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <!-- <img class="img-xs rounded-circle" src="assets/images/faces/face8.jpg" alt="Profile image">  -->
                <img alt="User Image" class="user-image img-xs rounded-circle" src="http://via.placeholder.com/160x160">
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                    <!-- <img class="img-md rounded-circle" src="assets/images/faces/face8.jpg" alt="Profile image"> -->
                    <img alt="User Image" class="user-image img-md rounded-circle" src="http://via.placeholder.com/160x160">
                    <p class="mb-1 mt-3 font-weight-semibold user-name"></p>
                    <p class="font-weight-light text-muted mb-0 user-email"></p>
                </div>
                <!-- <a class="dropdown-item">My Profile <span class="badge badge-pill badge-danger">1</span><i class="dropdown-item-icon ti-dashboard"></i></a>
                <a class="dropdown-item">Messages<i class="dropdown-item-icon ti-comment-alt"></i></a>
                <a class="dropdown-item">Activity<i class="dropdown-item-icon ti-location-arrow"></i></a> -->
                <a class="dropdown-item" href="<?=BASE_URL?>change-password">Change Password</a>
                <a class="dropdown-item signout">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
                </div>
            </li>


            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>
      