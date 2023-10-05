<?php
$seo_title= "";
$seo_description= "";
$seo_keywords= "";
$seo_robots="index, follow";
$seo_canonical= "https://pidatacenters.com/how-to-kickback-procrastination";
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
				  
                             <img src="dashboard/uploads/468PRO.jpg" alt="blog-1-img" width="450" height="248">
             
              
                      <p>Being lazy is good, exciting and interesting. It is the best feeling always. Be lazy, be happy, stay in comfort. The word is procrastination, coined around 1588 A.D, but being widely used in 20th century. It is the after effects of laziness. Delaying things, missing targets, skipping deadlines, act of being lazy and repeating the same subconsciously.</p>
                      <p>Bill Gates inspired millions around the globe, so was I among them. I was fascinated with his intelligence, quick response, thought process and ideology. Building products to reach every human and for greater sustainability of mankind was his foresight in every decision. Unfortunately, lately I was attracted towards his famous statement – “I choose a lazy person to do a hard job. Because a lazy person will find an easy way to do it.”</p>
                                     <p>Prepare to plan, plan to execute, execute to deliver is my motto in life. Every aspect in my life, be it daily chores, routine job, professional targets, personal commitments and many more are closely associated with it. I love being lazy and feel things happen overnight. Remember there is no lookback in life. In technical terms, there is no CTRL+Z in life. Either you do it or don’t. You’ve to deal with it. Period.</p>
                      <p>The act of laziness helped me in delivering few fantastic moments in my life. 80% of any given time, I use to stand by and think of preparation towards the job. The remaining 20% of time goes into executing the plan relentlessly with much more productivity. While I chose this option rather being conventional, this enabled me to gain insights of various shortcuts, innovations, optimized thinking and efficient smart work.</p>
                      <p>I don’t panic. I act being lazy. I am not lazy. I take time to prepare myself. What happens if you don’t plan and execute? Seconds burn to minutes. Hours burn to days. No look back again. Time flies at its own pace. Either you control it or get controlled. Hard work is forgotten word. Be smart, act wise, learn to innovate and survive by innovation.</p>
                                            

                                            
                      

                      
                    
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
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