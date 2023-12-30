<?php
$seo_title = "";
$seo_description = "";
$seo_keywords = "";
$seo_robots = "index, follow";
$seo_canonical = "https://pidatacenters.com/coal-carriers-chips-the-crisis";
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
    <div class="case-block-main greenshape1">

      <img src="dashboard/uploads/2710kiran.jpg" alt="blog-1-img" width="450" height="248">
      <p>The economic turmoil caused by the COVID has significantly disrupted the ecosystem on the whole. The post-pandemic situation in India and other countries has been an eye opener on the significance of having a stable supply chain.</p>
      <p>I have chosen three important categories that explain the fragility of the complex global supply chain.</p>
      <p><b>1.Coal Shortage and Energy Crisis</b></p>
      <p>Since the post-pandemic scenario, the power consumption in India jumped by almost 17% in the last 2 months in comparison to the same period during 2019. The country’s 135 coal fired power plants supply 70% of India’s electricity. To overcome the crisis, we need to use a mix of coal and clean sources of energy.</p>
      <p>Shortages in power supply can lead the country into a deep and wide crisis leading to dire consequences and even a possible blackout. India recently had a close call due to coal shortages.</p>
      <p>Eliminating external dependencies on imports and shifting focus on natural resources and green energy supplies like wind, solar and hydro power can help us in the long run to overcome the crisis. Innovative approaches should be adopted that will aid during catastrophic risk events.</p>
      <p>With 70% of the consumption powered by coal, is India ready for this challenge? The answer is – YES. Over the next 10 years India should move toward a model where 100% of the India’s power production is not dependent on imports. India should move towards a 75% clean energy model.</p>
      <p><b>2. Semiconductor Chip Shortage</b></p>
      <p>Chips/microprocessors are tiny components that go into many of the items we use on a daily basis such as smartphones, Laptops, refrigerators, automobiles etc. This is a valuable component and its demand spiked due to increased consumption during and post COVID.</p>
      <p>Why the shortage? The demand has been outstripping supply. There’s a significant shortage in mass production of chips due to COVID. These chips are made at huge fabs or foundries as they’re otherwise known. The production is made way ahead of time based on future projected demand and any changes to those demand/supply cycles due to sudden increase in demand would create imbalance just like in the case of COVID. Thus, causing the shortage.</p>
      <p>People are in the perception that semiconductor market is one single market but the fact is there are 20 to 30 separate markets that are oriented by technology. A typical Design and Manufacturing cycle of chips typically takes close to a year or more and involves giant fabs, and several billions in investments. To make matters worse, chip factories themselves have also been hit by the lockdowns during the pandemic.</p>
      <p>There are two ways in which this crisis is solved- First one is we build more factories, typically to build a new factory, it takes about 3-4 years so there is some new capacity that’s coming online. India needs to seriously get into semiconductor manufacturing. India is discussing this topic for almost 25 years with very minimal progress even towards the first step. In the short term if we start seeing demand for PCs, smartphones, and servers decline as people go back to work, that’s another way to solve this crisis, maybe a bit faster.</p>
      <p>Over the next 5 to 10 years India should be self-reliant (Local manufacturing). With so much talent and young work force and favorable manufacturing incentives and policies India needs to have a strong roadmap to manufacture chips locally in India and even export. Just like how Make in India cars are being exported from India.</p>
      <p><b>3. Carriers – Global Supply chain complexity</b></p>
      <p>In the recent past supply chains worldwide has come to its knees due to various issues. One such example is caused by the container ship that got stuck in the Suez canal that blocked thousands of ships for many days. This one incident had proved how dependent the countries have become on the worldwide supply chain.</p>
      <p>India needs to create its own local supply chain for all types of raw material that goes into food to electronics and create local green supply chain. India should remove dependency on imported coal to avoid major catastrophize that could be a result of many reasons including geo political issues.</p>
      <p> Enabling local manufacturing can really cut down on external dependency. It’s imperative that India, in the next 10 years, gets self-sustained and makes use of the local supply chain infrastructure. The time taken to import certain complex goods like electronics and servers take 10 to 12 weeks which should be reduced to less than 3 weeks if produced locally.</p>
      <p>Such approaches will have a powerful impact on the supply chain. India has the skill and tools to overcome issues and bring more positive impact when the country grapples to overcome such challenges.</p>
      <p><b>Conclusion-</b></p>
      <p>It’s about time India holistically becomes as self-reliant as possible. Especially for essential commodities that runs our life on a daily basis. The recent issues with coal shortages to chip shortages could have had a catastrophic impact on Indian economy, India had a very close call and time to reflect with action.</p>
      <p>India has the natural and human resources and is a technology power house (if it actually leverages its potential). If India can manufacture COVID vaccine locally why not Chips and the rest.</p>
      <p>I look forward to a self-reliant India that pushes a green supply chain into action!!</p>





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