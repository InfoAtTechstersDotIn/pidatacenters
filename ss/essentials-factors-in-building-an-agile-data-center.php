<?php
$seo_title= "";
$seo_description= "";
$seo_keywords= "";
$seo_robots="index, follow";
$seo_canonical= "https://pidatacenters.com/essentials-factors-in-building-an-agile-data-center";
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
				     
                             <img src="dashboard/uploads/853ALE-HOUSE.png" alt="blog-1-img" width="450" height="248">
							 <p></p><h3 dir="ltr">If we look at the scenario of data centers, nearly 75% of all the workloads of DC are Virtualized and this would further increase without any doubt. The major challenge IT admins generally face is that conventional storage is not properly equipped to deal with the virtualization because the storage is majorly for physical workloads.</h3>
<p dir="ltr">Problem could shoot up as legacy storage, with LUNs (Logical Unit Numbers) and Volumes that might house many individual virtual machines (VMs), which causes resident VMs to battle over limited resources which are in-house. This phenomenon if often called <a href="http://searchcloudcomputing.techtarget.com/definition/noisy-neighbor-cloud-computing-performance">“ Noisy Neighbour</a>”. The only solution here is to throw high-performance Flash Storage at the problem, and meanwhile this cannot fix the problem but postpones dealing with the problem which is undergoing.</p>
<p dir="ltr">While many companies would aspire to overcome this problem, unfortunately It becomes so expensive and sometimes this is not so efficient as it requires large number of disks to automate the diversified virtualized workloads.</p>
<p dir="ltr">Here are the five key things for data center modernization efforts</p>
<h3 dir="ltr">Speed</h3>
<p dir="ltr">The last thing generally employees at data center want is to get tied with IO performance and concerns related to latency even when using flash storage.</p>
<p dir="ltr">IO requests are handled in a chronological order with the conventional storage and so a mission-critical test gets blocked in between a big data base update which could be relatively not so important. Moreover, it is why boot storms and virus scans fluctuate VDI user experience.</p>
<p dir="ltr">If a single Virtual Machine acts like a noisy neighbour with in LUN and demands more than the required share of performance, it indirectly affects the performance of the other Virtual Machines in the network. The alternate for this to go ahead with VM Aware storage (VAS), which utilizes individual Virtual Machines as the unit.</p>
<p dir="ltr">VAS can provide each and every Virtual Machine its own performance line. Fortunately, there are no LUNs and so there are no neighbours. So ultimately in VAS storage Platform, it doesn’t effect the whole performance if one VM doesn’t work well.&nbsp; VM Aware Storage handles stack up actions one by one to finish the performance hiccups that can be so prevalent. Hence without the limitations of Physical Storage and traditional approaches, these application performs 6 times faster.</p>
<h3 dir="ltr">Quality of Service (QoS)</h3>
<p dir="ltr">There is a huge buzz around QoS, but unfortunately it is rarely defined. Earlier, storage systems used to set min and max IOPS at volume level, that is many different VMs inside get the same QoS.</p>
<p dir="ltr">VM Level Quality of Service allows the IT admins to set customized parameters for each and every VM that is simply fastening the min and max IOPS as required to impose a ceiling on a rouge VM or to check resources for mission-critical VM. Multiple tiers on a single platform can be created at VM level QoS. Earlier service providers used to buy some dedicated gold applications or some dedicated silver applications individually, but with VM-level QoS you can create gold, silver and bronze or any other on single storage device and engage each VM to a tier.</p>
<h3 dir="ltr">Disaster Recovery</h3>
<p dir="ltr">It is essential to have an efficient disaster recovery (DR) plan that should include per application/VM replication with automation and simplicity. An ideal plan should segregate applications or VMs as per their business criticality. When a disaster is seen, mission-critical application need to be very quick and should run in a very short timeframe. This requires Recovery Point Objective (RPO) and Recovery Time Objective (RTO) of such application be summarised to meet the specific SLAs. It is advisable to have a high performance per-application or VM Application replica, so it to be beneficial in getting the critical applications up and running in least possible of time windows .</p>
<p dir="ltr">An Ideal DR plan should also have the ability to automate the workflows like failover pinned migrations and failback. Is it well known fact that the most of the applications in an enterprise environment are virtualized, and meanwhile the DR plan should give the best recommendation on which recovery tools must be utilized for virtual servers.&nbsp;</p>
<h3 dir="ltr">Predictive Data Analytics</h3>
<p dir="ltr">Enterprises or service providers cannot exactly predict what virtualized workloads that might add up or need to be modified in future. They could only guess at performance and capacity requirement and so often these people buy more capacity than required.</p>
<p dir="ltr">Data analytics is something crucial in determining the metrics to make better decision about application performance and storage needs. Predictive analytics is something that enable data center professionals to get a clear picture about the use of capacity and performance, and predict future needs.</p>
<p dir="ltr">Modern technologies like elastic search, enables the application to figure out millions of data points in seconds. Finally, the point is, predictive analytics replaces guess with perfect vision and right approach.</p>
<h3 dir="ltr">Scale-Out Manageability</h3>
<p dir="ltr">IT admins need to simplify the storage management and also need to avoid manual configurations often with respect to LUNs and Volumes as the Virtual Infrastructure keeps increasing to hundreds or thousands of VMs.</p>
<p dir="ltr">VM level storage management enables IT admins to automate the placement of VMs constantly in the respected storage units, taking relevant things into consideration like resources required, space savings and cost in time and which data to move to VMs. So when a VM is migrated, all the related aspects like Screenshots associated, related statistics and Qos Policies should also migrate using a compressed or encoded protocol.</p>
<p dir="ltr">The automation and storage intelligence provided by policy-based VM management combined with advanced analytics and QoS allows enterprises and service providers to often triple or quadruple their virtualized infrastructure without adding a corresponding number of dedicated storage personnel.</p>
<p dir="ltr">Storage analytics and the automation from the policy based VM management combined with advanced analytics and QoS allows IT organisations to multiply their virtual infrastructure without adding more and more number of dedicated storage personnel.</p><p></p>
                      <!--<p>It’s been seven years since I took that supposedly, out of mind call, one fine afternoon of early March 2015. Sitting at the café of a global conglomerate at DLF Gurgaon, I picked that call from a head-hunter and after I hung that barely 10 min call, I chose not to sign on the dotted line of that lucrative offer. Not sure what egged me then to take that daring call, but I did. </p>
                      <p>In this time and age when everybody seems to be on a constant lookout for change in almost anything, the fact that I managed to beat the 7 years’ itch leading to my second long stint in a 24-year long career (Wow, it’s 24 years already!) never fails to surprise people. I started my career with a 10years’ stint and perhaps now at the closing end on career, a 7years’ and still rolling with Pi Datacenters </p>
                      <p>In fact, at times I wonder how I managed to do it, that too twice and why?</p>
                      <p>I think at the core of it is <span style="color: #012E6A;font-weight: 500;">TRUST</span>.</p>
                      <p><span style="color: #012E6A;font-weight: 500;">TRUST</span> that, I want to take up a challenge</p>
                      <p><span style="color: #012E6A;font-weight: 500;">TRUST</span> that, what I am getting into is new and I am going to make it disruptive</p>
                      <p><span style="color: #012E6A;font-weight: 500;">TRUST</span> that, I am convinced with the vision</p>
                      <p> <span style="color: #012E6A;font-weight: 500;">TRUST</span> that, I am not going to leave it half baked</p>
                      <p> <span style="color: #012E6A;font-weight: 500;">TRUST</span> that, I am going to make it count</p>
                      <p> If my appetite for facing the unknown was what got me to take up my first job, my ever aspiration to be a part of something disruptive and historical was what propelled my decision to join Pi. If my first long stay shaped me as a professional that I am today, my stint with Pi is giving me the opportunity to shape the big dream of setting up India’s home grown hyperscale datacenter and enterprise cloud. Thanks to Kalyan Muppaneni (Founder & CEO of Pi), for showing trust in me, when things were intangible and only on papers.</p>
                      <p>  I still find myself as inquisitive to learning and exploring unventured paths, as I was on the 1st day of my career.</p>
                      <p>Today, even after all these years, I am still excited to get to work, hop into those virtual and in-person meetings, engage in interesting discussions, be challenged by situations, take the challenge head on but with respect, hand hold the new breed of professionals and most importantly continue to dream big. With Pi, I never felt like being on a job. It has been about living my personal dream and seeing it come to life. </p>
                      <p> It’s a different level of satisfaction to work with this exciting new breed of young professionals and build an ecosystem (yes,Pi is not a company but an ecosystem). This group is very Intelligent (not artificially) and humane by DNA. We are driven by a strong culture and not just revenue returns. We are aggressive in our approach, but not abrasive in behaviour. We are profitable, but without compromising on values. We do fail, but never fail to learn.</p>
                      <p> It’s a different level of satisfaction to work with this exciting new breed of young professionals and build an ecosystem (yes,Pi is not a company but an ecosystem). This group is very Intelligent (not artificially) and humane by DNA. We are driven by a strong culture and not just revenue returns. We are aggressive in our approach, but not abrasive in behaviour. We are profitable, but without compromising on values. We do fail, but never fail to learn.</p>
                      
                       <p> Over time, my role transformed from being sales focused to revenue focused. From driving people to driving behavioural transformation in people. A hair-line difference to the naked eyes, but a sea difference when seen through our lens. Times have changed, things have become more and more challenging, with higher stakes. I’ve had the opportunity to work with some great minds in the past and even today. I don’t make friends at work, but I have earned relations for life, at Pi, both at the management level and within the larger Pi’oneer community. We have worked smart and partied hard. We are constantly challenging the status quo both internally and externally to reinvent ourselves. I’ve learnt to not get defocused from the actual goal.</p> 
                      <p> When asked what makes me stay longer at a company, I kind of zero in on these 3 aspects:</p>
                      
                      <p><span style="color: #012E6A;font-weight: 500;">1.Vision Driven Companies:</span> Being part of an organisation that is creating milestones and history is something that I just can’t let go. It started 7 years back alongside just handful other pairs of eyes and a dream. I’ve seen that dream extrapolating into a mission. There’s that sense of legacy being created and a constant reminder of how amazing it is to play a role in something great. It goes without saying that I owe it to Pi for giving me this envious opportunity to create history.</p>
                      <p><span style="color: #012E6A;font-weight: 500;">2.Continuous Learning Opportunity:</span> I learn and discover something new every day. It’s one of the perks, I can’t let go either…… </p>
                      <p>    <span style="color: #012E6A;font-weight: 500;">3.Challenging Status Quo:?</span> There is a school of thought that might say, Change is Constant. I chose to be that constant and saw the change upfolding (disruptive, isn’t it?) around me. Every time there have been situations where I wanted to give up, the joy of beating the odds, being at Pi, far outweighed the reasons to look out.</p>
                      <p>To everyone who wants to give up on challenges and find short term escape routes or easier lanes, are most welcome to do so. Just remember that unless you go through fire and hammers, you won’t gold out or become a quartz. You need to be honest and prove yourself. Success and glitters would follow. Doing things that enable you to do what you want and what you’re passionate about, will do wonders to your personal as well as professional lives.</p>
                      <p>Like it’s said, “The magic always happens outside your comfort zone!”</p>
                      <p>You Win Or You Learn ∞!</p>
                      <p>#BeatingThe7YearsItch</p> 
                      <div class="blog-ceo row">
                      <div class="blog-ceo-lt col-md-3">
                             <img src="images/blog-small-img-1.png" alt="blog-small-img-1" width="100" height="100">
                      </div>
                        <div class="blog-ceo-rt col-md-9">
                            <p><span style="color: #012E6A;font-weight: 500;">Debmalya Dey Roy</span></p>
                            <p>Chief Revenue Office & Global Marketing Head</p>
                            <ul class="row">
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            </ul>
                      </div>
                      </div>-->
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