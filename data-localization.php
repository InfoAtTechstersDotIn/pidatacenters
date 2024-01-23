<?php
$seo_title = "";
$seo_description = "";
$seo_keywords = "";
$seo_robots = "index, follow";
$seo_canonical = "https://pidatacenters.com/Indias-data-is-its-national-treasure-that-needs-strict-data-localization";
$og_sitename = "https://pidatacenters.com";
$og_type = "website";
$og_title = "";
$og_description = "";
?>

<?php include('php/includes-techsters/header.php'); ?>


<?php
// $servername = "localhost";

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

      <img src="dashboard/uploads/1945B1_Blog.png" alt="blog-1-img" width="450" height="248">

      <h2>India’s Data is its National Treasure that Needs Strict Data-Localization</h2>

      <p>In February 2019, FireEye – a US cybersecurity firm – zeroed in on a hacker tagged only as ‘fallensky519’ who was on the Most Wanted List for stealing personal data of 6.8 million users from an Indian healthcare website. A few months later, in October, a Singapore-based cybersecurity company – Group IB – spotted over 1.3 million credit and debit card details from Indian banks for sale at $100 apiece. A month later in November, Facebook and Twitter were the unlucky targets of malicious third-party apps who were stealing user data using One Audience and Mobiburn SDKs.</p>
      <p>What then do these nefarious data breaches predict for the future of data privacy and data security in our ever-evolving technological world? Who is to be held responsible for data maneuverability with criminal intent? Is it the user, the government’s regulatory laws, or just the fact that sensitive data is not always stored at the source of its birth but entrusted to foreign countries for safe-keeping?</p>
      <p>This is where data localization and data sovereignty come into the picture. Data localization is the act of physically storing data – electronic or otherwise – within the borders of the country where it was created. Data sovereignty is a symbolic concept which makes data subservient to the laws and governance structures of the country where it resides.</p>
      <p>Countries like China, US, Russia, Brazil and Indonesia have already implemented or are in the process of implementing stringent data localization laws. In fact, Europe has a new data protection regime that caps cross-border data flows to countries that do not have foolproof data protection laws in place. Similarly, China administers strict policies for data localization for companies to function.</p>
      <p>The driving purpose of data localization is to protect personal and financial information of the country’s citizens and residents from foreign eyes. It also enforces local governments and regulators with the right to summon and use the data as and when required. This holds especially true in the area of law enforcement. Agencies should have instant access to information to gather incriminatory evidence against criminals, without getting entangled into time-consuming legal procedures of the nation hosting data generated in India. When sensitive data is not localized, law enforcers are compelled to rely on Mutual Legal Assistance Treaties or MLATs to access critical data, which in turn delays justice. However, access to local law enforcement should also be regulated and tracked strictly so that the provision is not misused.</p>
      <p>In 2018, the RBI made it compulsory for all payments-related data to be stored only in India. This included credit card payments as well as all electronic and digital payment services. This strict ruling was a reflection of the Data Protection Law drafted by Srikrishna Committee in 2018. The Committee’s Data Protection Act sought to protect sensitive citizen data by storing it locally. An independent regulatory body called Data Protection Authority (DPA) would become responsible for the enforcement and effective implementation of the Act with heavy penalties for violations. Accordingly, the Aadhaar Act would also be amended to support these changes.</p>
      <p>RBI’s diktat perked up the business interests of global and domestic conglomerates and technology giants. Global investors began to strategize and secure investment opportunities in the India data center industry. Given the high demand from data localization, India needs to forge ahead and ramp up its data center capacity by at least 5 times in the next 5 to 7 years so as to handle the massive amount of data influx. The global industry is estimated to reach $228 billion in the next 5 years. The maximum impact and contribution is foretold to be by China and India whose burgeoning population will directly impact digital data traffic, IoT growth, and cloud services thereby fueling huge economic growth in the APAC region.</p>
      <p>India is poised to holistically become the top 3 data economies in the world over the next 10 years. Headed for exponential growth, India will need to avoid single point of failure where its data and datacenters are distributed to multiple regions across the country that has sustainable infrastructure, especially to support sustainable data localization</p>
      <p>While India’s data localization is opposed by many lobby groups, one cannot deny that India’s data is its national treasure and needs to be protected with strict cross-border regulation.</p>








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