<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav" style="padding-top: 42px">
            
    <li class="nav-item dashboard-nav-item">
      <a class="nav-link" href="<?=BASE_URL?>dashboard">
        <i class="menu-icon typcn typcn-document-text"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>

    <li class="nav-item registration-nav-item">
        <!-- <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"> -->
        <a class="nav-link" href="" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="menu-icon typcn typcn-coffee"></i>
            <span class="menu-title">Registrations</span>
        </a>
        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar" style="">
            <div class="py-2 collapse-inner rounded">
                <a class="collapse-item nav-link" href="<?=BASE_URL?>registrations/pending"><span class="menu-title">Pending</span></a>
                <a class="collapse-item nav-link" href="<?=BASE_URL?>registrations/approved"><span class="menu-title">Approved</span></a>
                <a class="collapse-item nav-link" href="<?=BASE_URL?>registrations/rejected"><span class="menu-title">Rejected</span></a>
            </div>
        </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="<?=BASE_URL?>pipeline">
        <i class="menu-icon typcn typcn-shopping-bag"></i>
        <span class="menu-title">Pipeline</span>
      </a>
    </li>
    <li class="nav-item">
    	<a class="nav-link" href="<?=BASE_URL?>knowledge-center">
        	<i class="menu-icon"></i>
                <span class="menu-title">Knowledge Center</span>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="<?=BASE_URL?>gtm/">
                <i class="menu-icon typcn typcn-user-outline"></i>
                <span class="menu-title">Go To Market</span>
        </a>
    </li>
    <li class="nav-item profile-nav-item">
    	<a class="nav-link"  href="<?=BASE_URL?>profile" >
        	<i class="menu-icon typcn typcn-document-add"></i>
        	<span class="menu-title">My Profile</span>
      	</a>
      
    </li>            
</ul>
</nav>


