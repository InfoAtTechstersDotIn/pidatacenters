<?php include('php/inner-header.php');?>
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
                                               <h2>Contact Us</h2>
                     
                 </div>
         </div>
          <!--what-is-noc starts here -->
          
          <div class="write-to-us ">
				<div class="write-to-us-main branches">
                    
                    <div class="write-to-us-lt-cnt row">
					<div class="write-to-us-lt col-md-5">
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
                              <p class="paraclass ">Survey # 49/P, Plot no -12. IT<br> Park, Autonagar, Mangalagiri,<br> Andhra Pradesh 522503</p>
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
                                  <!--<li>
                                    <p class="animated fadeInLeft wow"><i class="fa fa-map-marker" aria-hidden="true"></i>
SRR Middle East FZCO Technology Park, Mina-Jebel Ali, National Industrial Park,Dubai, The United Arab Emirates.</p>  
                                </li>-->
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
                                  <!--<li>
                                    <p class="animated fadeInLeft wow"><i class="fa fa-map-marker" aria-hidden="true"></i>
SRR Middle East FZCO Technology Park, Mina-Jebel Ali, National Industrial Park,Dubai, The United Arab Emirates.</p>  
                                </li>-->
                              </ul>
                              <br>
                        </div>
</div>
					    </div>
					    

					</div>
						</div>
					<div class="write-to-us-rt col-md-7">
						  <h2>WRITE TO US</h2>
						  <form action="data-new/send2.php" method="post">                            <ul class="row">
                                <li class="col-md-6">
                                    <label>First Name</label>
                                    <input type="text" name="firstname">
                                </li>
                                <li class="col-md-6">
                                    <label>Phone</label>
                                    <input type="text" name="phone">
                                </li>
                                <li class="col-md-12">
                                    <label>Email Address</label>
                                    <input type="email" name="email">
                                </li>
                                <li class="col-md-12">
                                    <label>Message</label>
                                    <textarea name="message" style="margin-block: revert;">                                    </textarea>                               
                                </li>
                                <li>
                                    <button name="submit">Send Message</button>
                                </li>
                            </ul>
                            </form>

						</div>
                        </div>
					</div>
				</div>

        
            <div class="about-banner1 knowledge111">
             <div class="container">
                 <div class="about-banner-blk1">
                       <a href="https://www.google.com/maps/place/Pi+Datacenters+PVT+LTD/@16.421067,80.55841,13z/data=!4m5!3m4!1s0x0:0xdbdd8b5fc0716feb!8m2!3d16.4210672!4d80.5584101?hl=en-US" class="view-location"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;View Location</a>
                   </div>     
             </div>
         </div>
          
    
          
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