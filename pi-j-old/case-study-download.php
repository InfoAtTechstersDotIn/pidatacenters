<?php include('php/inner-header.php');?>
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
				  
<style>
    .tab-navigation{
    width:185px;
    margin-left: auto;
    padding-top: 30px;
    }
</style>
         <!-- main starts here -->
         <div class="about-banner">
                 <div class="about-banner-blk">
                      <img src="images/contact-us.jpg" alt="Contact-us-banner1" width="1920" height="210">
                                               <h2>Case Study Download</h2>
                     
                 </div>
         </div>
          <!--what-is-noc starts here -->
          
          <div class="write-to-us ">
				<div class="write-to-us-main branches">
                    
                    <div class="write-to-us-lt-cnt row">
					<!--<div class="write-to-us-lt col-md-5">
					    <div class="sel-top">
					        <div class="tab-container" style="background:#012e6a">
                        <div class="tab-navigation">   
					        <select class="head-off" id="select-box">
					            <option value="1">DC Locations</option>
					            <option value="2">Head Office</option>
					        </select>
					        </div>
<div id="tab-1" class="tab-content">
    						  <div class="contact-information">
                               <h3 class=" cont">Contact Information</h3>
                              <p class="paraclass "><b style="color:#ffffff;">Vijayawada DC</b> <br> Survey # 49/P, Plot no -12. IT<br> Park, Autonagar, Mangalagiri,<br> Andhra Pradesh 522503</p>
                                  <p class="paraclass "><b style="color:#ffffff;">Kochi DC</b> <br> Kottapuram Road, Aroor<br> Kochi - Kerala <br> Pin: 682042</p>
                              <ul>
                                
                                   <li>
                                    <p class=""><a href="tel:+918978517793"><i class="fa fa-phone" aria-hidden="true"></i>08978517793</a></p>  
                                </li>
                                  <li>
                                    <p class=""><a href="mailto:sales@pidatacenters.com"><i class="fa fa-envelope" aria-hidden="true"></i>
sales@pidatacenters.com,</a>
<a href="mailto:marcom@pidatacenters.com">
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;marcom@pidatacenters.com</a>
</p>  
                                </li>
                                 
                              </ul>
                              <br>
                        </div>
</div>
<div id="tab-2" class="tab-content">
    						  <div class="contact-information">
                               <h3 class=" cont">Contact Information</h3>
                              <p class="paraclass ">Pi DataCenters Pvt. Ltd.
B904 & 905
The Platina, Gachibowli,
Hyderabad, Telangana.Pin: 500032</p>
                              <ul>
                                
                                   <li>
                                    <p class=""><a href="tel:+918978517793"><i class="fa fa-phone" aria-hidden="true"></i>8978517793</a></p>  
                                </li>
                                  <li>
                                   <p class=""><a href="mailto:sales@pidatacenters.com"><i class="fa fa-envelope" aria-hidden="true"></i>
sales@pidatacenters.com,</a>
<a href="mailto:marcom@pidatacenters.com">
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;marcom@pidatacenters.com</a>
</p>  
                                </li>
                                 
                              </ul>
                              <br>
                        </div>
</div>
					    </div>
					    

					</div>
						</div>-->

						<?php
						

$todo= mysqli_real_escape_string($conn,$_GET['id']);
$r="SELECT * from service where id= '$todo'";
$k=mysqli_query($conn,$r)or die(mysql_error());

if(mysqli_num_rows($k)>0)
{
while($row=mysqli_fetch_object($k))
{
?>
<div class="col-md-6">
  <figure>
                                    <img src="dashboard/uploads/services/<?php echo $row ->ufile; ?>" alt="case-studies-1" width="450" height="248" style="width:285px;height:215px;margin:0 auto;">
                                </figure>
</div>
					<!--<div class="write-to-us-rt col-md-6">
						  <h2>Fill Your Details</h2>
						  <form action="thank-you-study.php" method="GET">                           
						  <ul class="row">
                                <li class="col-md-6">
                                    <label>Full Name</label>
                                    <input type="text" name="name" placeholder="Enter Name" required style="background:none">
                                </li>
                                <li class="col-md-6">
                                    <label>Phone</label>
                                    <input type="text" name="phone" placeholder="Enter Phone" pattern="[0-9]{10}" required style="background:none">
                                </li>
								 <li class="col-md-6">
                                    <label>Company Name</label>
                                     <input type="text" name="message" placeholder="Enter Company Name">                                                          
                                </li>
                                <li class="col-md-6">
                                    <label>Email Address</label>
                                    <input type="email" name="email" placeholder="Enter Business Email" required style="background:none">
                                    <input id="Email" style="background:none" name="email" type="email" required pattern="^[a-zA-Z0-9._%+-]+@(?!gmail.com)(?!yahoo.com)(?!hotmail.com)(?!yahoo.co.in)(?!aol.com)(?!live.com)(?!outlook.com)[a-zA-Z0-9_-]+.[a-zA-Z0-9-.]{2,61}$" oninvalid="setCustomValidity('Please enter business email')" onchange="try{setCustomValidity('')}catch(e){}')" placeholder="Enter Business Email">
                                </li>
                               
							    <li class="col-md-12"><input type="hidden" name="id" value="<?php echo $row->id;?>"></li>
                                <li>
                                    <button name="submit" name="submit">Submit</button>
                                </li>
                            </ul>
                            </form>

						</div>-->
						<div class="write-to-us-rt col-md-6">
						<iframe src="//searchmarketingsolved.com/Forms/gfembed/?f=3" width="100%" height="500" frameBorder="0" class="gfiframe"></iframe>
<script src="//searchmarketingsolved.com/Forms/wp-content/plugins/gravity-forms-iframe-develop/assets/scripts/gfembed.min.js" type="text/javascript"></script>
</div>
						 <?php

}
}
else
{
echo "<span>unable to submit</span>";


}
$conn->close();
?>
                        </div>
					</div>
				</div>

        
            <!--<div class="about-banner1 knowledge111">
             <div class="container">
                 <div class="about-banner-blk1">
                       <a href="https://www.google.com/maps/place/Pi+Datacenters+PVT+LTD/@16.421067,80.55841,13z/data=!4m5!3m4!1s0x0:0xdbdd8b5fc0716feb!8m2!3d16.4210672!4d80.5584101?hl=en-US" class="view-location"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;View Location</a>
                   </div>     
             </div>
         </div>-->
          

          
  <?php include('php/footer.php');?>
         
          
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
/* Allow only company emails */
document
  .getElementById("Email")
  .setAttribute(
    "pattern",
    "^[a-zA-Z0-9._%+-]+@(?!gmail.com)(?!yahoo.com)(?!hotmail.com)(?!yahoo.co.in)(?!aol.com)(?!live.com)(?!outlook.com)[a-zA-Z0-9_-]+.[a-zA-Z0-9-.]{2,61}$"
  ).setAttribute(
    "oninvalid",
    "setCustomValidity('Please enter business email')"
  ).setAttribute("onchange", "try{setCustomValidity('')}catch(e){}')");
</script>
       <script>
         $(document).ready(function() {
                 $('.slider1').slick({
                 slidesToShow: 4,
                  dots: true,
                  arrows: false,
  //adaptiveHeight: true,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        slidesToShow: 2
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
  const accordion = document.getElementsByClassName('knowledge-hub-faqs-cnt');

for (i=0; i<accordion.length; i++) {
  accordion[i].addEventListener('click', function () {
    this.classList.toggle('active')
  })
}

</script>
  <script>
    
      //hide all tabs first
$('.tab-content').hide();
//show the first tab content
$('#tab-1').show();

$('#select-box').change(function () {
   dropdown = $('#select-box').val();
  //first hide all tabs again when a new option is selected
  $('.tab-content').hide();
  //then show the tab content of whatever option value was selected
  $('#' + "tab-" + dropdown).show();                                    
});</script>
   </body>
</html>