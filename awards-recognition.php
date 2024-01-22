<?php
$seo_title = "Awards and Recognition - Pi";
$seo_description = "Discover the awards, accolades, and recognition earned by Your Company Name for excellence in our industry.";
$seo_keywords = "awards, recognition, accolades, achievements, honors, industry awards, company achievements";
?>


<?php include('php/includes-techsters/header.php'); ?>

<head>
  <style>
    #myBtn2 {
      display: none;
    }
  </style>
</head>


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
    <img src="images/awardsandrecognition-banner.jpg" alt="awardsandrecognition-banner" width="1920" height="210">
    <h1>Awards & Recognition</h1>

  </div>
</div>
<!--board-of-directors starts here -->
<div class="awards-block pb-0">
  <div class="container">
    <div class="awards-block-main">
      <div class="tabBlock">
        <ul class="tabBlock-tabs nav-tabs feature-tab  border-bottom-0 d-flex flex-wrap justify-content-center" data-tabs="tabs">
          <li class="tabBlock-tab is-active animatable fadeInUp">
            <a class="nav-link" data-toggle="tab">Awards
            </a>
          </li>
          <li class="tabBlock-tab  animatable fadeInUp">
            <a class="nav-link" data-toggle="tab">Recognition
            </a>
          </li>
        </ul>
        <div class="tab-content tabBlock-content">
          <div class="tabBlock-pane">
            <p>
              At the helm of DC infrastructure innovation across the globe, Pi DATACENTERS&#174; has earned numerous accolades and certifications, setting the highest benchmarks for Cloud & DC Infrastructure.</p>
            <ul class="row certifications-desktop">
              <?php

              $r = "SELECT * from  awards";
              $g = mysqli_query($conn, $r) or die(mysql_error());
              if (mysqli_num_rows($g) > 0) {
                while ($row = mysqli_fetch_array($g)) {
                  $id = "$row[id]";
                  $title = "$row[title]";
                  $description = "$row[description]";
                  $year = "$row[year]";
                  $ufile = "$row[ufile]";
              ?>
                  <li class="col-md-4" style="padding:12px">
                    <div class="hover-award">
                      <h2><?php print($title); ?></h2>
                      <p><?php print($description); ?></p>
                      <span><?php print($year); ?></span>
                    </div>
                    <figure>
                      <img src="dashboard/uploads/blog/<?php print($ufile); ?>" alt="award-1" width="645" height="766">
                    </figure>
                  </li>
              <?php

                }
              } else {
                echo "<span>No Awards</span>";
              }

              $conn->close();
              ?>
              <!--<li class="col-md-4">
                                  <div class="hover-award">
                                    <h5>Datacenter Dynamics</h5>
                                    <p>India's Best Multi-Tenant Data Center</p>
                                    <span>2019</span>
                                </div>
                                <figure>
                                  <img src="images/award-2.png" alt="award-2" width="645" height="766">
                                </figure>
                             </li>
                              <li class="col-md-4">
                                  <div class="hover-award">
                                    <h5>CIOReview India</h5>
                                    <p>Company Of The Year 2018 In IaaS Vertical</p>
                                    <span>2018</span>
                                </div>
                                <figure>
                                  <img src="images/award-3.png" alt="award-3" width="645" height="766">
                                </figure>
                             </li>
                              <li class="col-md-4">
                                  <div class="hover-award">
                                    <h5>India's Most Promising Brand</h5>
                                    <p>UK Asia Business Summit </p>
                                    <span>2018</span>
                                </div>
                                <figure>
                                  <img src="images/award-4.png" alt="award-4" width="645" height="766">
                                </figure>
                             </li>
                             <li class="col-md-4">
                                 <div class="hover-award">
                                    <h5>Start-Up of the Year</h5>
                                    <p>TV5 Business Leader Awards</p>
                                    <span>2017</span>
                                </div>
                                <figure>
                                  <img src="images/award-5.png" alt="award-5" width="645" height="766">
                                </figure>
                             </li>
                             <li class="col-md-4">
                                 <div class="hover-award">
                                    <h5>Leading CMO of the Year</h5>
                                    <p>Enterprise IT CMO Leadership Awards</p>
                                    <span>2017</span>
                                </div>
                                <figure>
                                  <img src="images/award-6.png" alt="award-6" width="645" height="766">
                                </figure>
                             </li>
                              <li class="col-md-4">
                                  <div class="hover-award">
                                    <h5>Upcoming Cloud Service Provider in Asia</h5>
                                    <p>Datacloud Asia</p>
                                    <span>2017</span>
                                </div>
                                <figure>
                                  <img src="images/award-7.png" alt="award-7" width="645" height="766">
                                </figure>
                             </li>-->
            </ul>
            <ul class="slider certifications-mbl">
              <li class="col-md-4">
                <div class="hover-award">
                  <h2>CIOReview India</h2>
                  <p>20 Most Promising Cloud Solution Providers</p>
                  <span>2020</span>
                </div>
                <figure>
                  <img src="images/award-1.png" alt="award-1" width="645" height="766">
                </figure>
              </li>
              <li class="col-md-4">
                <div class="hover-award">
                  <h2>Datacenter Dynamics</h2>
                  <p>India's Best Multi-Tenant Data Center</p>
                  <span>2019</span>
                </div>
                <figure>
                  <img src="images/award-2.png" alt="award-2" width="645" height="766">
                </figure>
              </li>
              <li class="col-md-4">
                <div class="hover-award">
                  <h2>CIOReview India</h2>
                  <p>Company Of The Year 2018 In IaaS Vertical</p>
                  <span>2018</span>
                </div>
                <figure>
                  <img src="images/award-3.png" alt="award-3" width="645" height="766">
                </figure>
              </li>
              <li class="col-md-4">
                <div class="hover-award">
                  <h2>India's Most Promising Brand</h2>
                  <p>UK Asia Business Summit </p>
                  <span>2018</span>
                </div>
                <figure>
                  <img src="images/award-4.png" alt="award-4" width="645" height="766">
                </figure>
              </li>
              <li class="col-md-4">
                <div class="hover-award">
                  <h2>Start-Up of the Year</h2>
                  <p>TV5 Business Leader Awards</p>
                  <span>2017</span>
                </div>
                <figure>
                  <img src="images/award-5.png" alt="award-5" width="645" height="766">
                </figure>
              </li>
              <li class="col-md-4">
                <div class="hover-award">
                  <h2>Leading CMO of the Year</h2>
                  <p>Enterprise IT CMO Leadership Awards</p>
                  <span>2017</span>
                </div>
                <figure>
                  <img src="images/award-6.png" alt="award-6" width="645" height="766">
                </figure>
              </li>
              <li class="col-md-4">
                <div class="hover-award">
                  <h2>Upcoming Cloud Service Provider in Asia</h2>
                  <p>Datacloud Asia</p>
                  <span>2017</span>
                </div>
                <figure>
                  <img src="images/award-7.png" alt="award-7" width="645" height="766">
                </figure>
              </li>
            </ul>
          </div>
          <div class="tabBlock-pane">
            <p>Recognized as one of the leading Data Center service providers across the globe, Pi DATACENTERSÂ® is a renowned organization within the Cloud & DC Infrastructure community. </p>
            <ul class="row certifications-desktop">

              <li class="col-md-4">
                <div class="hover-award rec">
                  <h2>Recognized By CIOReview India</h2>
                  <p>Company Of The Year In IaaS Vertical</p>
                </div>
                <figure>
                  <img src="images/645x766_1r.jpg" alt="recognition-1" width="645" height="766">
                </figure>
              </li>
              <li class="col-md-4">
                <div class="hover-award rec">
                  <h2>Recognized By GPTW</h2>
                  <p>One Of Indiaâ€™s Top 50 IT Companies To Work With</p>
                </div>
                <figure>
                  <img src="images/645x766_3it.jpg" alt="recognition-2" width="645" height="766">
                </figure>
              </li>
              <li class="col-md-4">
                <div class="hover-award rec">
                  <h2>Recognized By GPTW</h2>
                  <p>One Of India's Top 50 Great Mid-Size Workplaces</p>
                </div>
                <figure>
                  <img src="images/mid.png" alt="recognition-3" width="645" height="766">
                </figure>
              </li>
              <li class="col-md-4">
                <div class="hover-award rec">
                  <h2>Recognized By GPTW</h2>
                  <p>One Of Indiaâ€™s Best Mid-Sized Organizations</p>
                </div>
                <figure>
                  <img src="images/645x766_6r.jpg" alt="recognition-3" width="645" height="766" class="reg-im">
                </figure>
              </li>
              <li class="col-md-4">
                <div class="hover-award rec">
                  <h2>Included in Gartner's Market Guide</h2>
                  <p>Top Data Center Service Providers in India</p>
                </div>
                <figure>
                  <img src="images/645x766_2rr.jpg" alt="recognition-2" width="645" height="766" class="reg-im">
                </figure>
              </li>

              <li class="col-md-4">
                <div class="hover-award">
                  <h2>Title</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  <span>Year</span>
                </div>
                <figure>
                  <img src="images/recognition-1.png" alt="recognition-1" width="645" height="766">
                </figure>
              </li>

            </ul>
            <ul class="slider certifications-mbl">
              <li class="col-md-4">
                <div class="hover-award">
                  <h2>Recognized By CIOReview India</h2>
                  <p>Company Of The Year In IaaS Vertical</p>
                </div>
                <figure>
                  <img src="images/645x766_1r.jpg" alt="recognition-1" width="645" height="766">
                </figure>
              </li>
              <li class="col-md-4">
                <div class="hover-award">
                  <h2>Recognized By GPTW</h2>
                  <p>One Of Indiaâ€™s Top 50 IT Companies To Work With</p>
                </div>
                <figure>
                  <img src="images/645x766_3it.jpg" alt="recognition-2" width="645" height="766">
                </figure>
              </li>
              <li class="col-md-4">
                <div class="hover-award">
                  <h2>Recognized By GPTW</h2>
                  <p>One Of India's Top 50 Great Mid-Size Workplaces</p>
                </div>
                <figure>
                  <img src="images/mid.png" alt="recognition-3" width="645" height="766">
                </figure>
              </li>
              <li class="col-md-4">
                <div class="hover-award">
                  <h2>Recognized By GPTW</h2>
                  <p>One Of Indiaâ€™s Best Mid-Sized Organizations</p>
                </div>
                <figure>
                  <img src="images/645x766_6r.jpg" alt="recognition-3" width="645" height="766" class="reg-im">
                </figure>
              </li>
              <li class="col-md-4">
                <div class="hover-award">
                  <h2>Included in Gartner's Market Guide</h2>
                  <p>Top Data Center Service Providers in India</p>
                </div>
                <figure>
                  <img src="images/645x766_2rr.jpg" alt="recognition-2" width="645" height="766" class="reg-im">
                </figure>
              </li>
            </ul>
          </div>
        </div>

      </div>


    </div>
  </div>

  <!--footer block starts -->


  <?php include('php/includes-techsters/footer.php'); ?>


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
    $('.center').slick({
      slidesToShow: 3,
      centerMode: true,
      dots: true,
      arrows: false,
      swipe: true,
      //  infinite: true,
      swipeToSlide: true,
      //adaptiveHeight: true,
      responsive: [{
          breakpoint: 768,
          settings: {
            arrows: false,
            centerMode: true,
            slidesToShow: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows: false,
            centerMode: true,
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
</body>

</html>