<?php
$seo_title= "";
$seo_description= "";
$seo_keywords= "";
$seo_robots="index, follow";
$seo_canonical= "https://pidatacenters.com/with-pi-you-dont-wannacry";
$og_sitename= "https://pidatacenters.com";
$og_type= "website";
$og_title= "";
$og_description= "";
?>

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


         <!-- main starts here -->
         <div class="about-banner">
                 <div class="about-banner-blk">
                      <img src="images/blogs-banner.jpg" alt="blogs-banner" width="1920" height="210">
                         <h2>Blogs</h2>
                     
                 </div>
         </div>
          <!--board-of-directors starts here -->
          <div class="case-block">
              <div class="container">
                  <div class="case-block-main greenshape1">
				  
                             <img src="dashboard/uploads/6180PRO (1).jpg" alt="blog-1-img" width="450" height="248">
             
              
                      
                      
                      <p>
The “WannaCry” ransomware attack – one of the largest ever cyber attacks brought computer systems across the globe to their knees, locking people out of their data and demanding that they pay a ransom or lose everything. More than 200,000 computers (at its conservative best) in 150 countries have been affected. Russia and India are the most affected with victims including hospitals, banks, telecommunications companies and handful of federal organizations.</p>
                         <p>What is WannaCry and who is it targeting?</p>
                         <p>These attacks, known in the cyber community as WannaCrypt or WannaCry, used a vulnerability in certain versions of Microsoft Windows to implant malicious software which encrypted user data files. Then the program puts up a screen demanding you pay money to get access back.</p>
                         <p>Also Read: <a href="https://pidatacenters.com/blog-details?id=13/blog_title=Demystifying_Goods_&amp;Services_Tax" style="display:inline-block">Demystifying Goods and Service Tax (GST)</a></p>
                         <p>Who got most affected? </p>
                         <p>Two primary reasons, for being the target, are ‘out of date or un updated software’ and ‘pirated software’. Those establishments / service providers who acquire licenses through illegal channels or are procuring pirated softwares won’t patch softwares and are by definition out of date. Establishments which had an up-to-date software keeping, did not fall a prey to the attacks.  </p>
                         <p>Is your data safe at Pi? </p>
                         <p>At Pi we have aggressive testing and implementation procedures to ensure our operating systems and applications are always kept at the most current levels possible.  Our in and out-bound communications are monitored 24X7 for malicious traffic, and every system operated by Pi is designed for sophisticated malware protection.  Our Security Operations Centre, manned 24X7 throughout the year stands ready to respond at the first indication of a problem.  This “defense in depth” is designed to provide redundant layers of protection and will keep you from ever having to “cry” over the loss of your data.</p>
                         <p>Habour1™, Pi’s enterprise cloud platform, is Payment Card Industry Security Standard (PCI DSS) compliant; the standards apply to any or all entities that store, process or transmit information. Knowing that Pi has done everything it can to ensure the safety and security of data, customers need not worry about any potential vulnerability in the system.</p>
                        
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
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