<?php
$seo_title = "";
$seo_description = "";
$seo_keywords = "";
$seo_robots = "index, follow";
$seo_canonical = "https://pidatacenters.com/the-world-before-and-after-covid";
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
    <h2>Blogs</h2>

  </div>
</div>
<!--board-of-directors starts here -->
<div class="case-block">
  <div class="container">
    <div class="case-block-main greenshape1">

      <img src="dashboard/uploads/4402The world before &amp; after covid.png" alt="blog-1-img" width="450" height="248">

      <p>Our global home has witnessed innumerable historical milestones across the ages, spanning political upheavals and wars to epidemics and pandemics. From the oldest recorded Typhoid Epidemic in 430 BC Athens, a series of plagues between 165 AD and 541 AD, to Black Death in 1350, Cholera Pandemic in 1817, Spanish Flu in 1918 and the most recent ongoing COVID-19 pandemic, our planet has rolled out wave after wave of adversities on its inhabitants. From a political vantage point too, humankind has witnessed scores of battles for power, the most recent ones being the two World Wars and the 9/11 terror attack on the USA.</p>
      <p>If we were to travel from our planet’s Pre-Christ days to the modern 21st century, we would surely see how each event has had an impact on people in all aspects of life. From industrial revolutions to socio-economic transformations, human beings have always adapted towards self-preservation. Consider for example the G.I Generation of the early 1900s who lived through WW-I and WW-II. They have witnessed indescribable shifts in economy, livelihood, security, and lifestyle because of the devastating effects of two back-to-back wars. Especially after World War II, with the death of 4% (80 million) of the world’s 2 billion population, innumerable factories were destroyed in a bid to dismantle the economic viability of Europe and Asia. In fact, the aftermath of the Second World War is still impacting many peoples’ lives and political decisions around the globe, even though it is over 65 years to the day.</p>
      <p>Yet another dark day in world history, much closer to our present times, was the 9/11 Terror Attack on America in 2001. That singular event has changed the world as we knew it forever. Commerce, travel and tourism, and in particular, security and border surveillance became extremely stringent and rigid. New laws were made and implemented in a matter of days. Routine travel activities such as passenger screening at airports, immigration protocols were tightened overnight not only in America but in countries around the world. </p>
      <p>9/11 also witnessed immense growth in technological evolution. New laws and political legislatures were passed spanning business, commerce, banking, trade, travel, healthcare, and other occupational fields. As flesh-and-blood humans transformed into electronic profiles, newer more robust technologies that could ensure reliability, safety, and security of the digital world became the need of the hour. Billions of dollars were invested in the research and production of cutting-edge technologies like Machine Learning, Data Science, Automation, and Artificial Intelligence. And today if we are able to skim through arduous time-taking physical tasks with just the press of a button, a voice command, or the click of a mouse, we owe our thanks to not one but several such committed research initiatives. The world transitioned from manual screenings to fully automated Artificial Intelligence screening at airports and public places. </p>
      <p>Indeed, the world has undergone quite deep transformations in less than 100 years! So, wouldn’t it be worthwhile to ponder over the possible aftermaths of the ongoing COVID-19 pandemic, and the kind of world we might be stepping out into once this phase is just another page in history? COVID-19, which originated in December 2019 from China’s Wuhan City, has held the world in a paralytic embrace for over 4 months now. This air-borne life-threatening disease attacks only human beings thus discouraging us from coming into close contact with each other. As a result, places that require people to work in groups and communities are currently out of limits. The modern mechanized human way of life has been brought to a standstill. </p>
      <p>For the first time in 100 years, COVID-19 has turned the world’s focus away from physical security due to criminal activities and terror attacks on human health in the face of possible bio-warfare caused by an invisible micro-organism – the Corona Virus. Human deaths aside, the impact of the novel COVID-19 is being felt across all socio-economic strata in all fields of life from travel and hospitality to e-commerce and entertainment. More than 100 countries have imposed travel restrictions on foreign visitors for business or pleasure. While the travel industry is the worst hit globally, the FMCG production industry is unable to meet consumer demands due to the dip in workforce attendance. Multinational Corporations in the IT, ITES, Finance, and other sectors have suspended all major business operations for an uncertain period of time.</p>
      <p>While it is true that the human community is still coming to terms with this new epidemic of historical significance, work is already in progress to dampen the consequences of the global lockdown. Once again, the world is turning to technology to devise more advanced features that can help businesses operate even in these despairing global conditions. New paradigms in Cloud Computing, stepping up AI, Machine Learning, and Cyber Security is happening as we speak in order to safeguard people’s health and ensure longevity. New pathways are being channelized in the realm of cloud-based technologies, which allows employees to work even in the absence of a physical workspace. Once again, billions of dollars will be invested to arrive on newer cloud solutions to combat future pandemics, epidemics in real-time.</p>
      <p>"The future is heading towards increasingly sustainable Cloud technologies that can power global economies and keep the wheels of human life running. Just as the world transitioned from manual activities to digital clicks post 9/11, the transition from modern physical technologies to advanced cloud-based virtual systems will be further accelerated post COVID-19."</p>
      <p>So, why not use this lockdown period to prepare for the future, because when this pandemic is fully over, the future will already be here i.e. a new way of living, working, commuting and conducting business, with Cloud and Datacenters taking the center stage!!</p>



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