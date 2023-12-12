<?php
$seo_title = "";
$seo_description = "";
$seo_keywords = "";
$seo_robots = "index, follow";
$seo_canonical = "https://pidatacenters.com/decentralization-of-indias-infrastructure";
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
    <h2>Blogs</h2>

  </div>
</div>
<!--board-of-directors starts here -->
<div class="case-block">
  <div class="container">
    <div class="case-block-main greenshape1">

      <img src="dashboard/uploads/2051PRO (4).jpg" alt="blog-1-img" width="450" height="248">

      <p>The early 2000’s saw a trend of rapid industrialization on Indian soil. Software, Information Technology, E-Commerce, Banking, Pharmaceuticals, Manufacturing, Trade, and several other types of domains, received a boost that had never been witnessed before. From our country’s leaders and decision-makers to the small-town professional – everyone accepted the outcomes of globalization eagerly and for the first time in decades, they dared to dream big. Growth and development meant there would be a lot more room for opportunities in every field, domain, and industry. They would bring with them economic, financial and social advancements. And that is exactly what happened.</p>
      <p>For a start, however, this unprecedented influx of industries and corporate establishments had to be accommodated. In response, cities extended their boundaries. They brought outlying towns and villages, which had lived independently up until then, into their fold. They were swept into the melee of unchecked growth and development, without warning, and the trend still continues to define our societal life.</p>
      <p>However, the growth and spread of geographical territories happened disproportionately. From over 100 major and minor cities in India, only a few selected cities were earmarked for this digital and industrial (r)evolution. These include Mumbai, Delhi, Kolkata, Bangalore, Hyderabad, Chennai, Pune, Lucknow, Ahmedabad, Kanpur, and a few others. In fact, Mumbai, which is the largest and most populated city in India today, was just half the size of Kolkata in the mid-1900s!</p>
      <p>What kind of scenario does this unrestrained progress and advancement create for the citizens of India today? What does it have in store for our youth and young professionals?</p>
      <p>The answer can be given in just two words – Excessive Centralization.</p>
      <p>Today, most young men and women with a professional degree, seek opportunities in infrastructurally robust cities. Whether they are from a small town or a minor city, they want to realize their careers and earn their fortunes away from their native town. Why? Because small towns and cities lack opportunities for individual growth and development. As a result, it is the Tier-I (metropolitan) that are enduring the outcomes of unrestricted human migration. The blatant truth is that the migratory population in any of our Tier-I cities averages more than its native equivalent.</p>
      <p>For every new individual or family that relocates into a big city, the city must be able to provide housing; food; utilities like water, electricity, gas; roads, vehicles; healthcare, education, internet, broadband, and other civic amenities. In order to provide these facilities, more and more service providers are required to achieve the demand-supply balance. This ultimately creates congested and claustrophobic living conditions for everyone. Not only that, overpopulated cities also result in an increase in crime rate and violence; decreased personal and social well-being; depletion of natural resources such as water, clean soil and fresh air; and choked drainage systems, all of which can lead to health hazards of epidemic proportions.</p>
      <p>Highways and roads take an additional beating as they become targets of frequent maintenance activities. Roads need to be repeatedly laid down to accommodate traffic needs. They are frequently dug up every six months’ at least to install new fiber optic telecommunication lines and piping systems. These are only some of the glaring outcomes of excessive centralization across all Tier-I cities in our country today.</p>
      <p>Is there a way out of this distressing state of affairs?</p>
      <p>Decentralizing India!</p>
      <p>Decentralization is indeed the need of the hour if we want to save our cities and make them more breathable and liveable. Each and every city needs to become completely self-sufficient. Be it education, career opportunities, or civic amenities, the citizen of every small town and city must be able to create a way of life for himself and his family. Instead of converging a wide range of growth opportunities into a selected number of cities and burdening their limited infrastructure, the scale of expansion and development can be distributed equally amongst all towns and cities so that the country prospers as a whole.</p>
      <p>Migration and relocation should never be the first option on the To Do List of a townsperson. Only then can we control and moderate the unrestricted congestion of our times. When people find opportunities to pursue their careers, vocations, and interests in their own hometowns, they will no longer feel the need to move away. In the process, the town will also benefit, as these professionals will contribute positively to its growth and development.</p>
      <p>Cities that are already well-developed and self-sustaining can also establish certain regulations to decongest their boundaries. A good step would be for State and Central Government Bodies to regulate the population density per zip code. Then the magnitude of infrastructure required to sustain this population should be decided. This would include facilities and amenities such as the number of houses, vehicles, schools, hospitals, malls, roads, means of transport, number of transport vehicles, businesses, etc. These numbers should be capped and no new infrastructure be permitted once the maximum capacity of a given zip code is reached</p>
      <p>This form of regulated and lawful decongestion would not only increase opportunities for individual growth but would also help our cities breathe easy and unburden core civic bodies from any superfluous responsibilities of sector management. It is high time our civic and government bodies came together to develop our Tier II and Tier III cities, so that our nation can become sustainable for our children and coming generations.</p>








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