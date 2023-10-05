<?php
$seo_title="Case Studies - Pi Datacenter | Studies & Success Stories with inferences";
$seo_description="Pi Datacenters' case studies on successful implementation of Data analytics & storage in Industries, with significant observations & experiences. Data Center Case studies in Banking, Large Scale Government, Power Grids, Healthcare, Cloud Migration, Cybersecurity & more.";
$seo_keywords= "data center Case Studies, cloud migration, cyber security, data center services, best data ceenters, data center networking";
?>

<?php include('php/inner-header.php');?>
         <!-- main starts here -->
       <?php
$servername = "localhost";
$username = "marcom";
$password = "TR*viv3mo?!q";
$dbname = "search8c_pi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?> 
         <div class="about-banner">
                 <div class="about-banner-blk">
                      <img src="images/case-studies.jpg" alt="case-studie-banner" width="1920" height="210">
                         <h2>Case Studies</h2>
                     
                 </div>
         </div>
          <!--board-of-directors starts here -->
          <div class="case-block">
              <div class="container">
                  <div class="case-block-main">
                      <!--<h3>Our <span style="color: #7BBC42;font-weight: 400;">Case Studies</span></h3>
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dui mauris, vehicula vel commodo at, sollicitudin sed magna. Quisque nec ligula ligula. Ut tincidunt molestie auctor. Morbi in lacus sit amet odio ornare tincidunt ut vitae nunc. Praesent iaculis luctus nisl, quis</p>-->
                         <ul  class="slider">
                            <li>
                             <ul class="row">
							 <?php

/*$r="SELECT * from service ORDER BY id DESC";
$g=mysqli_query($conn,$r)or die(mysql_error());
if(mysqli_num_rows($g)>0)
{
while($row=mysqli_fetch_array($g))
{
	$id="$row[id]";
	$service_title="$row[service_title]";
	$service_desc= "$row[service_desc]";
	$case_study_title = "$row[case_study_title]";
 $ufile="$row[ufile]";
 $cfile="$row[cfile]";*/
                                  
							
?>
                                 <li class="col-md-4">
                                <div class="case-content">
                                <figure>
                                    <img src="dashboard/uploads/services/leading.png" alt="case-studies-1" width="450" height="248">
                                </figure>
                                    <h4>Leading NBFC</h4>
                                    <!--<p><?php //print($blog_desc);?></p>-->
                                    <!--<a href="#modal-1" class="download">Download case study</a>-->
									<!--<a href="case-study-download.php" download class="download">Download case study</a>-->
 									
									<a href="leading-nbfc.php"  class="download">Download case study</a> 
                                 </div>
                             </li>
                             <li class="col-md-4">
                                <div class="case-content">
                                <figure>
                                    <img src="dashboard/uploads/services/7263Educational.jpg" alt="case-studies-1" width="450" height="248">
                                </figure>
                                    <h4>Premier Educational Institution (On-Premise DC Built)</h4>
                                    <!--<p><?php //print($blog_desc);?></p>-->
                                    <!--<a href="#modal-1" class="download">Download case study</a>-->
									<!--<a href="case-study-download.php" download class="download">Download case study</a>-->
 									
									<a href="educationalsector-dc-build-dc-design-case-study.php"  class="download">Download case study</a> 
                                 </div>
                             </li>
							
							
							 <li class="col-md-4">
                                <div class="case-content">
                                <figure>
                                    <img src="dashboard/uploads/services/59472.jpg" alt="case-studies-1" width="450" height="248">
                                </figure>
                                    <h4>Biotech Enterprise</h4>
                                    <!--<p><?php //print($blog_desc);?></p>-->
                                    <!--<a href="#modal-1" class="download">Download case study</a>-->
									<!--<a href="case-study-download.php" download class="download">Download case study</a>-->
 									
									<a href="biotechnology-data-migration-cloud-case-study.php"  class="download">Download case study</a> 
                                 </div>
                             </li>
							 
							  <li class="col-md-4">
                                <div class="case-content">
                                <figure>
                                    <img src="dashboard/uploads/services/268813.jpg" alt="case-studies-1" width="450" height="248">
                                </figure>
                                    <h4>Case Study Genus Power Infrastructures Ltd</h4>
                                    <!--<p><?php //print($blog_desc);?></p>-->
                                    <!--<a href="#modal-1" class="download">Download case study</a>-->
									<!--<a href="case-study-download.php" download class="download">Download case study</a>-->
 									
									<a href="power-utility-api-managed-services-case-study.php"  class="download">Download case study</a> 
                                 </div>
                             </li>
							 
							 <li class="col-md-4">
                                <div class="case-content">
                                <figure>
                                    <img src="dashboard/uploads/services/369112.jpg" alt="case-studies-1" width="450" height="248">
                                </figure>
                                    <h4>Robert Bosch Case Study</h4>
                                    <!--<p><?php //print($blog_desc);?></p>-->
                                    <!--<a href="#modal-1" class="download">Download case study</a>-->
									<!--<a href="case-study-download.php" download class="download">Download case study</a>-->
 									
									<a href="manufacturing-industry-cloud-infrastructure-case-study.php"  class="download">Download case study</a> 
                                 </div>
                             </li>
							 
							 <li class="col-md-4">
                                <div class="case-content">
                                <figure>
                                    <img src="dashboard/uploads/services/722911.jpg" alt="case-studies-1" width="450" height="248">
                                </figure>
                                    <h4>Infrastructure for Implementing & Hosting SAP HANA®</h4>
                                    <!--<p><?php //print($blog_desc);?></p>-->
                                    <!--<a href="#modal-1" class="download">Download case study</a>-->
									<!--<a href="case-study-download.php" download class="download">Download case study</a>-->
 									
									<a href="retail-industry-sap-hana-infrastructure-case-study.php"  class="download">Download case study</a> 
                                 </div>
                             </li>
							  <li class="col-md-4">
                                <div class="case-content">
                                <figure>
                                    <img src="dashboard/uploads/services/35510.jpg" alt="case-studies-1" width="450" height="248">
                                </figure>
                                    <h4>Enabling Advanced  Banking Processes</h4>
                                    <!--<p><?php //print($blog_desc);?></p>-->
                                    <!--<a href="#modal-1" class="download">Download case study</a>-->
									<!--<a href="case-study-download.php" download class="download">Download case study</a>-->
 									
									<a href="banking-hybrid-cloud-pi-cloud-case-study.php"  class="download">Download case study</a> 
                                 </div>
                             </li>
							 
							  <li class="col-md-4">
                                <div class="case-content">
                                <figure>
                                    <img src="dashboard/uploads/services/19949.jpg" alt="case-studies-1" width="450" height="248">
                                </figure>
                                    <h4>Cybersecurity @Pi®</h4>
                                    <!--<p><?php //print($blog_desc);?></p>-->
                                    <!--<a href="#modal-1" class="download">Download case study</a>-->
									<!--<a href="case-study-download.php" download class="download">Download case study</a>-->
 									
									<a href="cybersecurity-pi-cloud-case-study.php"  class="download">Download case study</a> 
                                 </div>
                             </li>
							 <li class="col-md-4">
                                <div class="case-content">
                                <figure>
                                    <img src="dashboard/uploads/services/59618.jpg" alt="case-studies-1" width="450" height="248">
                                </figure>
                                    <h4>Case Study Globally Acclaimed FinTech Organization</h4>
                                    <!--<p><?php //print($blog_desc);?></p>-->
                                    <!--<a href="#modal-1" class="download">Download case study</a>-->
									<!--<a href="case-study-download.php" download class="download">Download case study</a>-->
 									
									<a href="banking-fintech-colocation-digital-security-case-study.php"  class="download">Download case study</a> 
                                 </div>
                             </li>
							 
							  <li class="col-md-4">
                                <div class="case-content">
                                <figure>
                                    <img src="dashboard/uploads/services/34517.jpg" alt="case-studies-1" width="450" height="248">
                                </figure>
                                    <h4> Case Study on One Of India's Largest Small Finance Bank</h4>
                                    <!--<p><?php //print($blog_desc);?></p>-->
                                    <!--<a href="#modal-1" class="download">Download case study</a>-->
									<!--<a href="case-study-download.php" download class="download">Download case study</a>-->
 									
									<a href="banking-cloud-infrastructure-disaster-recovery-case-study.php"  class="download">Download case study</a> 
                                 </div>
                             </li>
							
							<li class="col-md-4">
                                <div class="case-content">
                                <figure>
                                    <img src="dashboard/uploads/services/15356.jpg" alt="case-studies-1" width="450" height="248">
                                </figure>
                                    <h4> Making A Bank Digitally Powerful</h4>
                                    <!--<p><?php //print($blog_desc);?></p>-->
                                    <!--<a href="#modal-1" class="download">Download case study</a>-->
									<!--<a href="case-study-download.php" download class="download">Download case study</a>-->
 									
									<a href="banking-opex-model-cloud-pi-cloud-case-study.php"  class="download">Download case study</a> 
                                 </div>
                             </li>
							 <li class="col-md-4">
                                <div class="case-content">
                                <figure>
                                    <img src="dashboard/uploads/services/48725.jpg" alt="case-studies-1" width="450" height="248">
                                </figure>
                                    <h4> DR Solution Enabling Business Continuity During COVID-19</h4>
                                    <!--<p><?php //print($blog_desc);?></p>-->
                                    <!--<a href="#modal-1" class="download">Download case study</a>-->
									<!--<a href="case-study-download.php" download class="download">Download case study</a>-->
 									
									<a href="manufacturing-industry-drsolution-businesscontinuity-case-study.php"  class="download">Download case study</a> 
                                 </div>
                             </li>
							 
							  <li class="col-md-4">
                                <div class="case-content">
                                <figure>
                                    <img src="dashboard/uploads/services/22614.jpg" alt="case-studies-1" width="450" height="248">
                                </figure>
                                    <h4> Wi-Fi ON Cloud</h4>
                                    <!--<p><?php //print($blog_desc);?></p>-->
                                    <!--<a href="#modal-1" class="download">Download case study</a>-->
									<!--<a href="case-study-download.php" download class="download">Download case study</a>-->
 									
									<a href="educational-institution-wifi-on-cloud-case-study.php"  class="download">Download case study</a> 
                                 </div>
                             </li>
							 <li class="col-md-4">
                                <div class="case-content">
                                <figure>
                                    <img src="dashboard/uploads/services/27143.jpg" alt="case-studies-1" width="450" height="248">
                                </figure>
                                    <h4> Enabling Digital Banking</h4>
                                    <!--<p><?php //print($blog_desc);?></p>-->
                                    <!--<a href="#modal-1" class="download">Download case study</a>-->
									<!--<a href="case-study-download.php" download class="download">Download case study</a>-->
 									
									<a href="banking-dc-dr-infrastructure-pi-cloud-case-study.php"  class="download">Download case study</a> 
                                 </div>
                             </li>
							 
							  <li class="col-md-4">
                                <div class="case-content">
                                <figure>
                                    <img src="dashboard/uploads/services/758015.jpg" alt="case-studies-1" width="450" height="248">
                                </figure>
                                    <h4> Cloud  Migration Public Cloud to pi-cloud®</h4>
                                    <!--<p><?php //print($blog_desc);?></p>-->
                                    <!--<a href="#modal-1" class="download">Download case study</a>-->
									<!--<a href="case-study-download.php" download class="download">Download case study</a>-->
 									
									<a href="cloud-migration-public-cloud-to-privatecloud-pi-cloud-case-study.php"  class="download">Download case study</a> 
                                 </div>
                             </li>
							 <li class="col-md-4">
                                <div class="case-content">
                                <figure>
                                    <img src="dashboard/uploads/services/847414.jpg" alt="case-studies-1" width="450" height="248">
                                </figure>
                                    <h4> Case Study Oaknet  Healthcare</h4>
                                    <!--<p><?php //print($blog_desc);?></p>-->
                                    <!--<a href="#modal-1" class="download">Download case study</a>-->
									<!--<a href="case-study-download.php" download class="download">Download case study</a>-->
 									
									<a href="healthcare-sap-managed-services-dr-case-study.php"  class="download">Download case study</a> 
                                 </div>
                             </li>
							
							
							
							
							
                             <!--<li class="col-md-4">
                                 <div class="case-content">
                                <figure>
                                    <img src="images/case-studies-2.png" alt="case-studies-2" width="450" height="248">
                                </figure>
                                    <h4>DR Solution Enabling to Business Continuity During COVID-19</h4>
                                    <p>The customer was able to secure a DR solution in record time and have been also replicating huge volumes of data within...</p>
                                    <a href="#modal-1" class="download">Download case study</a>
                                 </div>
                             </li>
                                 <li class="col-md-4">
                                <div class="case-content">
                                <figure>
                                    <img src="images/case-studies-3.png" alt="case-studies-3" width="450" height="248">
                                </figure>
                                    <h4>DR Solution Enabling to Business Continuity During COVID-19</h4>
                                    <p>The customer was able to secure a DR solution in record time and have been also replicating huge volumes of data within...</p>
                                    <a href="#modal-1" class="download">Download case study</a>
                                 </div>
                             </li>
                                 <li class="col-md-4">
                                <div class="case-content">
                                <figure>
                                    <img src="images/case-studies-4.png" alt="case-studies-4" width="450" height="248">
                                </figure>
                                    <h4>DR Solution Enabling to Business Continuity During COVID-19</h4>
                                    <p>The customer was able to secure a DR solution in record time and have been also replicating huge volumes of data within...</p>
                                    <a href="#modal-1" class="download">Download case study</a>
                                 </div>
                             </li>
                                 <li class="col-md-4">
                               <div class="case-content">
                                <figure>
                                    <img src="images/case-studies-5.png" alt="case-studies-5" width="450" height="248">
                                </figure>
                                    <h4>DR Solution Enabling to Business Continuity During COVID-19</h4>
                                    <p>The customer was able to secure a DR solution in record time and have been also replicating huge volumes of data within...</p>
                                    <a href="#modal-1" class="download">Download case study</a>
                                 </div>
                             </li>
                                 <li class="col-md-4">
                                <div class="case-content">
                                <figure>
                                    <img src="images/case-studies-6.png" alt="case-studies-6" width="450" height="248">
                                </figure>
                                    <h4>DR Solution Enabling to Business Continuity During COVID-19</h4>
                                    <p>The customer was able to secure a DR solution in record time and have been also replicating huge volumes of data within...</p>
                                    <a href="#modal-1" class="download">Download case study</a>
                                 </div>
                             </li>-->
                             
                         </ul>
                             </li>
                            <!--<li>
                             <ul class="row">
                             <li class="col-md-4">
                                <div class="case-content">
                                <figure>
                                    <img src="images/case-studies-1.png" alt="case-studies-1" width="450" height="248">
                                </figure>
                                    <h4>DR Solution Enabling to Business Continuity During COVID-19</h4>
                                    <p>The customer was able to secure a DR solution in record time and have been also replicating huge volumes of data within...</p>
                                    <a href="#modal-1" class="download">Download case study</a>
                                 </div>
                             </li>
                             <li class="col-md-4">
                                  <a href="#modal-video-2">
                                 <div class="case-content">
                                <figure>
                                    <img src="images/case-studies-2.png" alt="case-studies-2" width="450" height="248">
                                </figure>
                                    <h4>DR Solution Enabling to Business Continuity During COVID-19</h4>
                                    <p>The customer was able to secure a DR solution in record time and have been also replicating huge volumes of data within...</p>
                                    <a href="#modal-1" class="download">Download case study</a>
                                 </div>
                                 </a>
                             </li>
                                 <li class="col-md-4">
                                      <a href="#modal-video-3">
                                <div class="case-content">
                                <figure>
                                    <img src="images/case-studies-3.png" alt="case-studies-3" width="450" height="248">
                                </figure>
                                    <h4>DR Solution Enabling to Business Continuity During COVID-19</h4>
                                    <p>The customer was able to secure a DR solution in record time and have been also replicating huge volumes of data within...</p>
                                    <a href="#modal-1" class="download">Download case study</a>
                                 </div>
                                     </a>
                             </li>
                                 <li class="col-md-4">
                                      <a href="#modal-video-4">
                                <div class="case-content">
                                <figure>
                                    <img src="images/case-studies-4.png" alt="case-studies-4" width="450" height="248">
                                </figure>
                                    <h4>DR Solution Enabling to Business Continuity During COVID-19</h4>
                                    <p>The customer was able to secure a DR solution in record time and have been also replicating huge volumes of data within...</p>
                                    <a href="#modal-1" class="download">Download case study</a>
                                 </div>
                                     </a>
                             </li>
                                 <li class="col-md-4">
                                      <a href="#modal-video-5">
                               <div class="case-content">
                                <figure>
                                    <img src="images/case-studies-5.png" alt="case-studies-5" width="450" height="248">
                                </figure>
                                    <h4>DR Solution Enabling to Business Continuity During COVID-19</h4>
                                    <p>The customer was able to secure a DR solution in record time and have been also replicating huge volumes of data within...</p>
                                    <a href="#modal-1" class="download">Download case study</a>
                                 </div>
                                     </a>
                             </li>
                                 <li class="col-md-4">
                                      <a href="#modal-video-6">
                                <div class="case-content">
                                <figure>
                                    <img src="images/case-studies-6.png" alt="case-studies-6" width="450" height="248">
                                </figure>
                                    <h4>DR Solution Enabling to Business Continuity During COVID-19</h4>
                                    <p>The customer was able to secure a DR solution in record time and have been also replicating huge volumes of data within...</p>
                                    <a href="#modal-1" class="download">Download case study</a>
                                 </div>
                                     </a>
                             </li>
                             
                         </ul>
                             </li>-->
                              <!--<li>
                             <ul class="row">
                             <li class="col-md-4">
                                <div class="case-content">
                                <figure>
                                    <img src="images/case-studies-1.png" alt="case-studies-1" width="450" height="248">
                                </figure>
                                    <h4>DR Solution Enabling to Business Continuity During COVID-19</h4>
                                    <p>The customer was able to secure a DR solution in record time and have been also replicating huge volumes of data within...</p>
                                    <a href="#modal-1" class="download">Download case study</a>
                                 </div>
                             </li>
                             <li class="col-md-4">
                                  <a href="#modal-video-2">
                                 <div class="case-content">
                                <figure>
                                    <img src="images/case-studies-2.png" alt="case-studies-2" width="450" height="248">
                                </figure>
                                    <h4>DR Solution Enabling to Business Continuity During COVID-19</h4>
                                    <p>The customer was able to secure a DR solution in record time and have been also replicating huge volumes of data within...</p>
                                    <a href="#modal-1" class="download">Download case study</a>
                                 </div>
                                 </a>
                             </li>
                                 <li class="col-md-4">
                                      <a href="#modal-video-3">
                                <div class="case-content">
                                <figure>
                                    <img src="images/case-studies-3.png" alt="case-studies-3" width="450" height="248">
                                </figure>
                                    <h4>DR Solution Enabling to Business Continuity During COVID-19</h4>
                                    <p>The customer was able to secure a DR solution in record time and have been also replicating huge volumes of data within...</p>
                                    <a href="#modal-1" class="download">Download case study</a>
                                 </div>
                                     </a>
                             </li>
                                 <li class="col-md-4">
                                      <a href="#modal-video-4">
                                <div class="case-content">
                                <figure>
                                    <img src="images/case-studies-4.png" alt="case-studies-4" width="450" height="248">
                                </figure>
                                    <h4>DR Solution Enabling to Business Continuity During COVID-19</h4>
                                    <p>The customer was able to secure a DR solution in record time and have been also replicating huge volumes of data within...</p>
                                    <a href="#modal-1" class="download">Download case study</a>
                                 </div>
                                     </a>
                             </li>
                                 <li class="col-md-4">
                                      <a href="#modal-video-5">
                               <div class="case-content">
                                <figure>
                                    <img src="images/case-studies-5.png" alt="case-studies-5" width="450" height="248">
                                </figure>
                                    <h4>DR Solution Enabling to Business Continuity During COVID-19</h4>
                                    <p>The customer was able to secure a DR solution in record time and have been also replicating huge volumes of data within...</p>
                                    <a href="#modal-1" class="download">Download case study</a>
                                 </div>
                                     </a>
                             </li>
                                 <li class="col-md-4">
                                      <a href="#modal-video-6">
                                <div class="case-content">
                                <figure>
                                    <img src="images/case-studies-6.png" alt="case-studies-6" width="450" height="248">
                                </figure>
                                    <h4>DR Solution Enabling to Business Continuity During COVID-19</h4>
                                    <p>The customer was able to secure a DR solution in record time and have been also replicating huge volumes of data within...</p>
                                    <a href="#modal-1" class="download">Download case study</a>
                                 </div>
                                     </a>
                             </li>
                             
                         </ul>
                             </li>-->
                         </ul>
                          
                        
                      
                  </div>
              </div>
          </div>
             <?php include('php/footer.php');?>
          
          <div id="modal-1" class="modalDialog">
	<div class="fill-your-details">
		
		<div class="modal-content">
             <div class="modal-container">
                 <a href="#close" title="Close" class="close">x</a>
    <div class="modal-body">
      <div class=" row">
          <div class="fill-your-details-cnt">
              <h4>Fill Your Details</h4>
              <form>
                <ul class="row">
                <li class="col-md-6">
                    <label>Full Name</label>
                    <input type="text" >    
                </li>
                    <li class="col-md-6">
                    <label>Company Name</label>
                    <input type="text" >    
                </li>
                    <li class="col-md-6">
                    <label>Mobile No</label>
                    <input type="text" >    
                </li>
                    <li class="col-md-6">
                    <label>Email Address</label>
                    <input type="text" >    
                </li>
                    <li class="col-12">
                   <button>Download case study</button>   
                </li>
              </ul>
                  </form>
          </div>
        </div>
    </div>
  </div>
        </div>
	</div>
</div>
         
          
         <!--footer ends-->
      </div>
      <!-- wrapper ends -->
       <script src="js/wow.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
       <script src="js/custom.js"></script>
        <script src="js/main-pi.js"></script>
       <script>
         $(document).ready(function(e){
             var TabBlock = {
         s: {
         animLen: 200
         },
         
         init: function() {
         TabBlock.bindUIActions();
         TabBlock.hideInactive();
         },
         
         bindUIActions: function() {
         $('.tabBlock-tabs').on('click', '.tabBlock-tab', function(){
         TabBlock.switchTab($(this));
         });
         },
         
         hideInactive: function() {
         var $tabBlocks = $('.tabBlock');
         
         $tabBlocks.each(function(i) {
         var 
         $tabBlock = $($tabBlocks[i]),
         $panes = $tabBlock.find('.tabBlock-pane'),
         $activeTab = $tabBlock.find('.tabBlock-tab.is-active');
         
         $panes.hide();
         $($panes[$activeTab.index()]).show();
         });
         },
         
         switchTab: function($tab) {
         var $context = $tab.closest('.tabBlock');
         
         if (!$tab.hasClass('is-active')) {
         $tab.siblings().removeClass('is-active');
         $tab.addClass('is-active');
         
         TabBlock.showPane($tab.index(), $context);
         }
         },
         
         showPane: function(i, $context) {
         var $panes = $context.find('.tabBlock-pane');
         
         // Normally I'd frown at using jQuery over CSS animations, but we can't transition between unspecified variable heights, right? If you know a better way, I'd love a read it in the comments or on Twitter @johndjameson
         $panes.slideUp(TabBlock.s.animLen);
         $($panes[i]).slideDown(TabBlock.s.animLen);
         }
         };
         
         $(function() {
         TabBlock.init();
         });
         });
      </script>
      <script>
         $(document).ready(function() {
                 $('.slider').slick({
                 slidesToShow: 1,
                  dots: true,
                  arrows: false,
  //adaptiveHeight: true,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        slidesToShow: 1
      }
    }
  ]
});
             
             
              //animation
             wow = new WOW(
                       {
                           animateClass: 'animated',
                           offset: 100,
                           mobile: true
                       }
               );
               wow.init(); 
             }); 
              
      </script>
 <script>
    /* jQuery
================================================== */
$(function() {
$('.acc__title').click(function(j) {

var dropDown = $(this).closest('.acc__card').find('.acc__panel');
$(this).closest('.acc').find('.acc__panel').not(dropDown).slideUp();

if ($(this).hasClass('active')) {
$(this).removeClass('active');
} else {
$(this).closest('.acc').find('.acc__title.active').removeClass('active');
$(this).addClass('active');
}

dropDown.stop(false, true).slideToggle();
j.preventDefault();
});
});

 </script>
        <script>
  $(function () {
    var fx = function fx() {
    $(".stat-number").each(function (i, el) {
        var data = parseInt(this.dataset.n, 10);
        var props = {
            "from": {
                "count": 0
            },
                "to": { 
                "count": data
            }
        };
        $(props.from).animate(props.to, {
            duration: 3000 * 1,
            step: function (now, fx) {
                $(el).text(Math.ceil(now));
            },
            complete:function() {
                if (el.dataset.sym !== undefined) {
                  el.textContent = el.textContent.concat(el.dataset.sym)
                }
            }
        });
    });
    };
    
    var reset = function reset() {
        //console.log($(this).scrollTop())
        if ($(this).scrollTop() > 1990) {
            $(this).off("scroll");
          fx()
        }
    };
    
    $(window).on("scroll", reset);
});
       </script>
      <script>
          $(document).ready(function(){
              $('nav ul li a').click(function(){
                $('nav ul li a').removeClass("active");
                $(this).addClass("active");
            });
            });
       </script>
       <script>
       const modalBox = document.querySelector(".modal-container");
const modalBtn = document.querySelector(".modal-btn");
const closeBtn = document.querySelector(".close-btn");

modalBtn.addEventListener("click", () => {
  modalBox.style = "display: block;";
});

closeBtn.addEventListener("click", () => {
  modalBox.style = "display: none;";
});

window.addEventListener("click", (e) => {
  if (e.target == modalBox) {
    modalBox.style = "display: none;";
  }
});
       </script>
   </body>
</html>