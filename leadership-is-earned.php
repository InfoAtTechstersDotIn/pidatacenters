<?php
$seo_title = "";
$seo_description = "";
$seo_keywords = "";
$seo_robots = "index, follow";
$seo_canonical = "https://pidatacenters.com/leadership-is-earned.-its-neither-a-promotion-nor-a-pay-raise!";
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
    <h1>Blogs</h1>

  </div>
</div>
<!--board-of-directors starts here -->
<div class="case-block">
  <div class="container">
    <div class="case-block-main greenshape1 added-tags-blog">

      <img src="dashboard/uploads/2494Leadership is earned.png" alt="blog-1-img" width="450" height="248">

      <h2>Leadership is Earned. It’s Neither a Promotion Nor a Pay Raise !</h2>
      <p>
        “A leader is one who knows the way, goes the way and shows the way.” The essence of good leadership lies in these golden words by John C. Maxwell. A leader is also someone who helps you find a way even if he doesn’t know the way. Though our professional and personal experiences might condition us into believing that a leader is someone who controls, manages and issues instructions from a pedestal, the truth is quite surprising. Leaders can emerge from anywhere in the organization. They do not necessarily have to be managers or C-Level Executives. It could be your teammate or a fresher, who can excel as a leader and create a positive impact on the company’s ecosystem.</p>
      <p>Your value as a leader lies in the foresight, vision and energy with which you drive an idea towards reality. The idea could be simple, but the impact should be powerful and accepted well by majority of stakeholders. And the one significant quality that drives this acceptance is influence. Irrespective of the hierarchical position you hold, as a leader you must be able to leverage your people skills and demonstrate the value of the idea. The leader’s capacity to influence must transcend hierarchical authorities and make believers of everyone within the boundaries of communication.</p>
      <p>In the game of cricket, Sachin Tendulkar is a name that immediately comes to mind when we talk about leadership and influence. He contributed to Indian Cricket for over 2 decades, with world records of 51 centuries in test matches and 49 centuries in ODIs. Cricket lovers referred to him as “God”. Yet, he stepped down from captaincy to give that position to a fellow player. However, his leadership influence was always visible and made significant impact over the years. He knew it was more important. He made his presence felt through action rather than title. Perseverance, hard work, accountability zeal, humility and approachability were some of his most influential traits that made him a great leader in cricket. He proved himself as a leader, even without earning accolades as a captain.</p>
      <p>Though the qualities of a good leader are many, they are all interconnected at their deepest levels. Honesty, transparency, courage and confidence – none are independent of each other. They all lead to other valuable traits such as good communication skills, mentorship, and goal achievement. One does not necessarily have to be a Manager or a C-Level Executive to create the right degree of impact or influence. </p>
      <p>In fact, we all have it within us to be the next best leader the world has ever seen!</p>


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