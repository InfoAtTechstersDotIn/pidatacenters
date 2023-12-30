<?php
$seo_title = "";
$seo_description = "";
$seo_keywords = "";
$seo_robots = "index, follow";
$seo_canonical = "https://pidatacenters.com/let’s-break-the-myths-of-cloud-security";
$og_sitename = "https://pidatacenters.com";
$og_type = "website";
$og_title = "";
$og_description = "";
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
<style>
  #myBtn2 {
    display: none;
  }
</style>


<!-- main starts here -->
<div class="about-banner">
  <div class="about-banner-blk">
    <img src="images/blogs-banner.jpg" alt="blogs-banner" width="1920" height="210">
    <h1>Blogs</h1>

  </div>
</div>
<!--board-of-directors starts here -->
<div class="case-block">
  <div class="container">
    <div class="case-block-main greenshape1">

      <img src="https://pidatacenters.com/dashboard/uploads/2740Let%E2%80%99s-Break-The-Myths-Of-Cloud-Security-250x139.png" alt="blog-1-img" width="450" height="248">
      <p></p>
      <p dir="ltr">Cloud computing provides the best solution to a number of long-standing challenges like scalability, true elasticity, barriers to entry, technology refreshes and cost savings. Along with the numerous benefits cloud offers, it also brings in some challenges in adoption to cloud technology, owing to lack of a total understanding. Pertaining to the abstract nature of the cloud, major challenges are perceived to be in security.</p>
      <p dir="ltr">But to go by facts, Security in the cloud often exceeds the security of an on-premise or legacy facility. It is high time the myth about cloud security is dusted off.</p>
      <p dir="ltr">One very basic reason for the questions raised on cloud security is that it cannot be seen or touched. For a long time, Federal IT teams are trying to put their trust in cloud providers, and that can understandably create questions and worries.</p>
      <p dir="ltr">To help dispel those concerns, let’s have a look at four of the reasons how and why an <!--<a href="https://pidatacenters.com/products-pi-data-centers/self-service-provisioning/iaas-infrastructure-as-a-service/">-->infrastructure-as-a-service (IaaS)<!--</a>--> cloud environment is high secure.</p>
      <p dir="ltr">Hypervisors</p>
      <p dir="ltr">The hypervisor is the software which lets multiple virtual machine instances to run on one physical hardware. The main job of a hypervisor is to abstract the hardware and separate each virtual machine “tenants” as securely as possible.</p>
      <p dir="ltr">The hypervisor has a minimal attach surface, which makes it very secure and it ultimately prevents any exposure of the virtual machine instances.</p>
      <p dir="ltr">Hypervisors have been in use for a long time, and constant testing over time has further made the security strong. Unlike default operating systems that have confirmed vulnerabilities almost daily, there have been hardly ever any report of confirmed breach of hypervisors since the advent of commercial clouds.</p>
      <p dir="ltr">Transparency</p>
      <p dir="ltr">There was a time when someone used to forget adding the server to the inventory which created security nightmare, but this is physically impossible in the case of commercial cloud environment. With cloud, one can never hide or forget about the servers, workstations, firewalls or any other device in a cloud setup.</p>
      <p dir="ltr">The whole network is, at all times, completely visible which makes your security posture enhanced by a maximum measure. There is so much transparency that people are now finding it difficult to manage all the data; but again it is easily solvable with your cloud partner.</p>
      <p dir="ltr">Configuration Management :</p>
      <p dir="ltr">To manage the configurations is a point of high importance for any environment to be secure. The time consumed for spinning off a server, configuring it and locking is significant in a traditional or legacy environment. Once the configuration is locked, minor changes required also can cause serious problems and security threats.</p>
      <p dir="ltr">In the scenario of a cloud, the turnaround time for creating or replicating configurations is significantly low and is automated. This not only ensures quick go to market but also hassle free upgradations or transformations which head towards fewer chances of security breaches.</p>
      <p dir="ltr">&nbsp;Compliance with standards :</p>
      <p dir="ltr">The current information security framework, in sync with the booming cloud technologies, is emerging continuously.&nbsp; With the technology renaissance in the industry, the standards are evolving at a faster pace. Compliance to some of these standards initiatives like ISO 27001 , <!--<a href="https://pidatacenters.com/news/pi-datacenters-receives-hipaa-security-compliance-certification/">-->HIPAA<!--</a>--> and many more can give your enterprise an assurance of security with the cloud you are hosted in. It is a mutual cognizance that is required between the Cloud provider and the customer about the security standards that are applicable to their respective environments.</p>
      <p dir="ltr">Enterprises should understand their in-house requirements in detail and choose a service provider who is secure and compliant of standards related to their critical applications/vertical.</p>
      <p dir="ltr">It is always a two-way responsibility</p>
      <p dir="ltr">Partner with your provider in enhancing the data security of your organization. It is always a two-way responsibility in augmenting the security.</p>
      <p dir="ltr">It is the responsibility of the IaaS provider to ensure the security of infrastructure up the Hypervisor and the major responsibility of the applications and operating system which run on top of the hypervisor is always with the enterprise.</p>
      <p dir="ltr">You have a complete control on what is put in the cloud. This makes your role more responsible in terms of data, applications that are hosted on the cloud and the authentication of the same. Encryption of the data IP on transit and in rest can ensure higher security. Right and consistent security access controls for your data must be in place and regularly audited.</p>
      <p dir="ltr">By taking care of the complete infrastructure , IaaS provider gives you enough time to spend focusing on what is of high importance to an enterprise, the application level security.</p>
      <p dir="ltr">The case with PaaS and SaaS :</p>
      <p dir="ltr">While an IaaS provider can see through your physical infrastructure and the product under that, PaaS and SaaS providers have a higher level of access to your frameworks and data.</p>
      <p dir="ltr">So, it is of high importance that you, as the owner need to have effective application and infrastructural level security controls. The vendor personnel who access your premises/environment, the tools they use, or any other exposures that you might have, needs to be policy sanitized and covered enough to ensure you have a secured ride on the cloud.</p>
      <p>&nbsp;</p>
      <p></p>
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
                    <input type="text">
                  </li>
                  <li class="col-md-6">
                    <label>Company Name</label>
                    <input type="text">
                  </li>
                  <li class="col-md-6">
                    <label>Mobile No</label>
                    <input type="text">
                  </li>
                  <li class="col-md-6">
                    <label>Email Address</label>
                    <input type="text">
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
  $(document).ready(function(e) {
    var TabBlock = {
      s: {
        animLen: 200
      },

      init: function() {
        TabBlock.bindUIActions();
        TabBlock.hideInactive();
      },

      bindUIActions: function() {
        $('.tabBlock-tabs').on('click', '.tabBlock-tab', function() {
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
      responsive: [{
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
    wow = new WOW({
      animateClass: 'animated',
      offset: 100,
      mobile: true
    });
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
  $(function() {
    var fx = function fx() {
      $(".stat-number").each(function(i, el) {
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
          step: function(now, fx) {
            $(el).text(Math.ceil(now));
          },
          complete: function() {
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
  $(document).ready(function() {
    $('nav ul li a').click(function() {
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