<?php
$seo_title= "";
$seo_description= "";
$seo_keywords= "";
$seo_robots="index, follow";
$seo_canonical= "https://pidatacenters.com/unknown-water-my-experience";
$og_sitename= "https://pidatacenters.com";
$og_type= "website";
$og_title= "";
$og_description= "";
?>

<?php include('php/includes-techsters/header.php'); ?>
<?php
$servername = "172.20.119.52";
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
				  
                             <img src="dashboard/uploads/9644810X450PX.jpg" alt="blog-1-img" width="450" height="248">
             
              
                     <h3>First let me categorically state that this is my first honest attempt at blogging.</h3>
                      
                      <p>Guess there are always certain things which are new and so is my experience that I want to share with you all.</p>
                      <p>I think it was in the first week of Feb.’16 that a Job/Role was offered to me in a new <a href="https://www.pidatacenters.com/" style="display:inline-block">Data Center</a>
 Organization, which kind of made me realize that I am in the midst of going somewhere I have never been to. I had a settled job, family, and all the other amenities that every Techy these days are after.</p>
                      
                      <p>Though I always worked in organizations where the process was pretty much streamlined, I was pretty adamant that this role (in a new Commercial DC) is something I want to take on and challenge myself to prove yet again by. It took quite a bit of deliberation and lots of family discussions, to persuade and convince them to back my decision.</p>
                      
                      <p>Being a “change agent” is defined by one’s willingness to pursue, and actively challenge, the status quo</p>
                      <p>As we say in ITIL terminology, when the Change was ‘Approved’ by Home department, O’ Boy wasn’t I happy!! Of course I was and eagerly looking forward to a new exciting challenge ahead. I must admit there was an element of scepticism, owing to extremely humid weather conditions. But you win some and loose some, I Guess.</p>
                            <p>Still remember my First day at work in the new Organization. Welcome from the team, Introduction session with senior leadership, Struggling to go back to Hotel, etc. are things that cannot be forgotten easily.  I was elated to have met very receptive and congenial colleagues. After few days of Happy Ice breaking sessions with the team, we were down to the serious end of business, which is when I realized that the amount of growth potential this venture/My Role has. I always had a healthy appetite for continuous improvement, and when I saw roles/responsibilities that I have not explored so far, I was like a kid in the candy store J</p>
                            <p>But deep down, I knew that, to accomplish what I am after and to meet the high expectancies of leadership team, a complete paradigm shift was required.  Conscious effort was made and I personally see the desired results.  I must be fooling myself if I state or feel that the journey so far has been really smooth. Obviously there were few obstacles and/or difference of opinions, etc. but never the less, it has been some journey so far and hopefully it was be even better in the coming days/months.</p>
                            <p>What I have learnt from the experience so far is that Change is a complex process that requires careful consideration and planning.  Change is something we can no longer view as being imposed upon us. It must be what we are intentionally and purposefully seeking if we want to go where we’ve never gone before, so called untested waters.</p>
                            <p>Trust your instincts and believe in yourself. Feel the responsibility to stay foolish (Remember these words!!).  and that would be it (Not bad for a first time blogger Ha!!)</p>
                            <p>Ohhh, no prizes for guessing the organization and location..!!</p>
                          
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                  </div>
              </div>
          </div>
         <?php include('php/includes-techsters/footer.php'); ?>
          
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