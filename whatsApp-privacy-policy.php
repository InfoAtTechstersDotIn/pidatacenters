<?php
$seo_title = "";
$seo_description = "";
$seo_keywords = "";
$seo_robots = "index, follow";
$seo_canonical = "https://pidatacenters.com/what’s-the-fuss-wtf-about-this-new-whatsapp-privacy-policy!!";
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

      <img src="dashboard/uploads/8111A1_1515-x-855.png" alt="blog-1-img" width="450" height="248">

      <h2>What’s the Fuss (WTF), About this New WhatsApp Privacy Policy!!</h2>

      <p>Ok, so as we were moving closer to settling the score with COVID (hopefully the vaccine thing would work), I was thinking, what’snext getting the world’s attention …</p>
      <p>And BOOMMM!! We have WhatsApp and its data privacy fuss that gripped the world over night …</p>
      <p>So, What It’sAll About?</p>
      <p>A recent, WhatsApp privacy policy update got people into tizzy. The common translation wasthatWhatsApp, now a Facebook company, is going to give Facebook, the access to all our personal messages and Facebook can use it, the way they want for their business interest.</p>
      <p>Mind it, only European Union (EU) counties have been kept out of this newness…</p>
      <p>Interesting, isn’t it?</p>
      <p>I think we should give it to the GDPR (with hefty penalties), and how seriously it was implemented in EU. Others have some learning and catch up to do.</p>
      <p>So,let’s first get this thing correct. WhatsApp, as per declaration, uses end-to-end encryption (E2EE) to secure all messages on its platform. Its only the sender and receiver who can read the content of the messages. Facebook may still make use of data, like, who we are chatting to on WhatsApp and for how much time, our current location, preferred locations, where all do we visit frequently etc. Predominantly data that’s accessible through IP tracking.</p>
      <p>Make no mistake, Google, Microsoft,and many others, already have it …</p>
      <p>While WhatsApp or Facebook cannot read the messages, but if we are backingup our WhatsApp chats on other platforms, like a Google Drive, OneDrive or iCloud, there is no guarantee of encryption. And let’s be honest, we all have backed up our chats on those open platformsatsomeor the other point of time. Just that we did not realise the privacy thing till one, Mr Musk decided to release the cat amongst the pigeons. Putting in on only WhatsApp, might not be fair, by all means.</p>
      <p>Now let’s look at the sharing of financial information, mentioned in the policy. The financial informationto be shared is pertaining to WhatsApp Pay, the new in-app payment feature,that WhatsApp is bringing on (still a WIP). This is just like GPay or PayTM. It does not mean that Facebook is trying to hack into our bank accounts.Down the line, businesses would also be able to integrate WhatsApp chat through Facebook. So, we can take a chill pill on this too.</p>
      <p>What’s Next ?</p>
      <p>It’stotally up to us, if we want to get off WhatsApp just because of this policy update and not because of the productive time we all waste on it,otherwise (I am myself no exception). If that’s so, then we should seriously contemplate exiting Facebook, all messengers and even Instagram too. Because they collect a lot more data than WhatsApp and way more personal ones.</p>
      <p>On any boring day, if you want to surprise yourself, you must not miss reading the Google privacy policy and decide whether you still want to use Google, in any form. Do not forget to grab your Coffee. You would need it for divine strength while you read. Go through the policies of all the apps that we use and treat yourself with theextent of data they have already collected about us. And they continue to do so, as you are reading this.</p>
      <p>It’sa hair line,that separates being privacy savvy and being paranoid, when not being online, is no more an option.</p>
      <p>If wewant the convenience of free applications, we need to be aware that we are paying with our data. Nothing comes free!</p>







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