<?php
$seo_title = "";
$seo_description = "";
$seo_keywords = "";
$seo_robots = "index, follow";
$seo_canonical = "https://pidatacenters.com/economy-needs-inclusive-growth-from-rural-india";
$og_sitename = "https://pidatacenters.com";
$og_type = "website";
$og_title = "";
$og_description = "";
?>


<?php include('php/includes-techsters/header.php'); ?>



<?php

//$servername = "localhost";
$servername = "172.20.119.52";

$username = "marcom";
$password = "TR*viv3mo?!q";
$dbname = "search8c_pi";


$conn = new mysqli($servername, $username, $password, $dbname);

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
    <h2>Blogs</h2>

  </div>
</div>
<!--board-of-directors starts here -->
<div class="case-block">
  <div class="container">
    <div class="case-block-main greenshape1">

      <img src="dashboard/uploads/9764Economy needs inclusive growth from rural-India.png" alt="blog-1-img" width="450" height="248">
      <p>“India lives in its villages”, stated the father of the nation decades ago which still holds true. The Indian economy has been on a growth trajectory over the last couple of decades. Prime Minister Narendra Modi's vision of making India a $5 trillion economy and a global economic powerhouse by 2024-25 is "challenging" but "realizable", stated the Finance Minister - Nirmala Sitharaman.
      </p>
      <p>However, for this national dream to be realized, India needs inclusive growth from its rural corners. It is imperative that all sectors across rural/urban India contribute to its full potential on various development projects through social, cultural and technological transformations. India has one billion populations and there needs to be a way to make every single citizen of India a stakeholder in this economic growth, to be able to reach the audacious goal of a $5T economy. Youths across rural India need to play a significant role in this economic journey just like their counterparts across the major cities. Only when rural India contributes to its full potential, can we realize the $5T dream.</p>
      <p>So, is this doable? And if yes, then what is the way forward? In order to attain the $ 5T economy dream, we need to power up both the Digital and Physical Infrastructure of rural geographies equally.</p>

      <h3>Digital Infrastructure</h3>
      <p>As India gears up for an era of increased digitalization, the issue of holistic and inclusive economic growth remains a pivotal concern. Digital India – a program launched to transform India into a digitally empowered society and knowledge economy, is gradually taking a steer from all angles. Has Digital India really reached the last mile?</p>
      <p>Few of the digital initiatives like DigiLocker, MyGov, and e-Sign services were executed. But the question is, how many are in the loop. Post demonetization, the country witnessed precipitous adaptation to digital payments. While shopping and paying bills can now be easily performed online using a smartphone, people in rural areas still find it more convenient to use cash for daily transactions. According to IAMAI, only 16% of users from rural India have accessed the internet for digital payments until now. Moreover, some perceive the internet pertinent to people who are educated enough to use mobile phones or to make transactions with large sums of money. The advantages of a few other initiatives like Video Conferencing Solutions, E-commerce, Content delivery platforms, digital classrooms, et.al have still not reached the rural population. </p>
      <p>Today, the internet has become a necessity and not an option. Affordable bandwidth (wired & wireless), digital awareness, and intuitive delivery medium must be implemented in order to rule out the rural-urban divide.</p>
      <p>Digital technologies will transform the global flow of goods, services, money, and people. According to analysts, the digital India plan could boost the country's GDP significantly. These digital initiatives in rural-India will play a major role in India becoming a $5T economy.</p>
      <h3>Physical Infrastructure</h3>
      <p>Even today, the quantity and quality of the infrastructure facilities are substantially lower in rural areas than in urban areas. There must be an improvement in basic infrastructures, such as roads, transport, electricity, communications, healthcare, water and sanitation for the development and well-being of the rural population. Seamless connectivity to the core national highway network will create decentralized development corridors. Even today, it takes several days to reach many places in India. Decentralization is indeed the need of the hour.</p>
      <p>Air travels are not luxury anymore but an economic necessity for business. There must be seamless regional air connectivity from Tier 1 to Tier-II & III cities to travel from one business corridor to another seamlessly.</p>
      <h3>Conclusion</h3>
      <p>There is no denying the fact that there is an urgent need to boost India’s rural economy. This will foster inclusive economic growth, enhance the standard of living, reduce the discrepancy between the rural and urban India, and narrow the gap between the rich and the poor. A special focus to make rural India a key stakeholder in all sectors of economic activity will enable a significant contribution to India’s dream of a $5T economy. </p>
      <p>India’s population, while perceived as a weakness, can catapult India to a $5T economy if taken advantage of its potential. Reaching a $5T economy without inclusive growth from rural India will further widen the gap between the rich and the poor. Time to architect a comprehensive Rural-India inclusive growth strategy.</p>



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