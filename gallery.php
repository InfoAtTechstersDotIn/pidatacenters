<?php
$seo_title = "pi-cloud®";
$seo_description = "";
$seo_keywords = "";
?>




<head>
  <style>
    #myBtn2 {
      display: none;
    }
  </style>
</head>
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
<!-- main starts here -->
<div class="about-banner">
  <div class="about-banner-blk">
    <img src="images/gallery-banner.jpg" alt="gallery-ban11" width="1920" height="210">
    <h2>Pi Gallery</h2>

  </div>
</div>
<!--what-is-noc starts here -->

<div class="knowledge-hub-videos1 knowledge-gallery1">
  <div class="container">
    <div class="knowledge-hub-videos-top">
      <!--<h3 style="color:#414141">Our <span style="color:#7BBC42">Pi Gallery</span></h3><br>-->
      <!--<p style="color:#242424">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dui mauris, vehicula vel commodo at, sollicitudin<br> sed magna. Quisque nec ligula ligula. Ut tincidunt molestie auctor. Morbi in lacus sit amet odio ornare tincidunt ut<br> vitae nunc. Praesent iaculis luctus nisl, quis</p>-->
    </div>
    <br>
    <ul class="ga-vd">
      <li>
        <ul class="row">
          <?php

          $r = "SELECT * from testimony ORDER BY id DESC";
          $g = mysqli_query($conn, $r) or die(mysql_error());
          if (mysqli_num_rows($g) > 0) {
            while ($row = mysqli_fetch_array($g)) {
              $id = "$row[id]";

              $ufile = "$row[ufile]";

          ?>
              <li class="col-md-4" style="padding:10px 10px;">
                <img src="dashboard/uploads/<?php print($ufile); ?>" alt="kh-gallery-1" width="500" height="360">
              </li>
          <?php

            }
          } else {
            echo "<span>No Gallery Images</span>";
          }

          $conn->close();
          ?>
          <!--<li class="col-md-4">
                                 <img src="images/gallery-2.png" alt="kh-gallery-2" width="500" height="360">
                             </li>
                             <li class="col-md-4">
                                 <img src="images/gallery-3.png" alt="kh-gallery-3" width="500" height="360">
                             </li> -->

        </ul>

        <!--<ul class="row">
                            <li class="col-md-4">
                                 <img src="images/gallery-4.png" alt="kh-gallery-1" width="500" height="360">
                             </li>
                             <li class="col-md-4">
                                 <img src="images/gallery-5.png" alt="kh-gallery-2" width="500" height="360">
                             </li>
                             <li class="col-md-4">
                                 <img src="images/gallery-6.png" alt="kh-gallery-3" width="500" height="360">
                             </li>    
                                </ul>-->
      </li>
      <!--            <li>-->
      <!--                       <ul class="row">-->
      <!--                    <li class="col-md-4">-->
      <!--                         <img src="images/gallery-1.png" alt="kh-video-1" width="500" height="360">-->
      <!--                     </li>-->
      <!--                     <li class="col-md-4">-->
      <!--                         <img src="images/gallery-2.png" alt="kh-video-2" width="500" height="360">-->
      <!--                     </li>-->
      <!--                     <li class="col-md-4">-->
      <!--                         <img src="images/gallery-3.png" alt="kh-video-3" width="500" height="360">-->
      <!--                     </li>    -->
      <!--                        </ul>-->
      <!--<br>-->
      <!-- <ul class="row">-->
      <!--                    <li class="col-md-4">-->
      <!--                         <img src="images/gallery-4.png" alt="kh-gallery-1" width="500" height="360">-->
      <!--                     </li>-->
      <!--                     <li class="col-md-4">-->
      <!--                         <img src="images/gallery-5.png" alt="kh-gallery-2" width="500" height="360">-->
      <!--                     </li>-->
      <!--                     <li class="col-md-4">-->
      <!--                         <img src="images/gallery-6.png" alt="kh-gallery-3" width="500" height="360">-->
      <!--                     </li>    -->
      <!--                        </ul>-->
      <!--            </li>-->
      <!--            <li>-->
      <!--                        <ul class="row">-->
      <!--                    <li class="col-md-4">-->
      <!--                         <img src="images/gallery-1.png" alt="kh-gallery-1" width="500" height="360">-->
      <!--                     </li>-->
      <!--                     <li class="col-md-4">-->
      <!--                         <img src="images/gallery-2.png" alt="kh-gallery-2" width="500" height="360">-->
      <!--                     </li>-->
      <!--                     <li class="col-md-4">-->
      <!--                         <img src="images/gallery-3.png" alt="kh-gallery-3" width="500" height="360">-->
      <!--                     </li>    -->
      <!--                        </ul>-->
      <!--<br>-->
      <!-- <ul class="row">-->
      <!--                    <li class="col-md-4">-->
      <!--                         <img src="images/gallery-4.png" alt="kh-gallery-1" width="500" height="360">-->
      <!--                     </li>-->
      <!--                     <li class="col-md-4">-->
      <!--                         <img src="images/gallery-5.png" alt="kh-gallery-2" width="500" height="360">-->
      <!--                     </li>-->
      <!--                     <li class="col-md-4">-->
      <!--                         <img src="images/gallery-6.png" alt="kh-gallery-3" width="500" height="360">-->
      <!--                     </li>    -->
      <!--                        </ul>-->
      <!--            </li>-->

    </ul>
  </div>
</div>
<br>
<br>
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
  $(document).ready(function() {
    $('.slider1').slick({
      slidesToShow: 4,
      dots: true,
      arrows: false,
      //adaptiveHeight: true,
      responsive: [{
          breakpoint: 768,
          settings: {
            arrows: false,
            slidesToShow: 2
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
  const accordion = document.getElementsByClassName('knowledge-hub-faqs-cnt');

  for (i = 0; i < accordion.length; i++) {
    accordion[i].addEventListener('click', function() {
      this.classList.toggle('active')
    })
  }
</script>
</body>

</html>