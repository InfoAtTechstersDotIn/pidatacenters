<?php
$seo_title = "Download Brochure - Pi Datacenters | Explore our Product Portfolio";
$seo_description = "Download the Pi Datacenters' latest brochure and explore everything you need to know about data center services, infrastructure, and management in India. Get to know about our unique solutions and advanced product range. Download the brochure today!";
$seo_keywords = "Product Portfolio, Data Center Services, data center infrastructure, data centers in india";
?>
<?php include('php/includes-techsters/header.php'); ?>

<!-- main starts here -->
<div class="about-banner">
  <div class="about-banner-blk">
    <img src="images/brochure.jpg" alt="brochure-ban11" width="1920" height="210">
    <h1>Brochure</h1>

  </div>
</div>

<div class="brochure-tabs">
  <div class="container">
    <div class="row">
      <div class="col-md-4 mt-4">
        <h2>Product Portfolio</h2>
        <img src="images/brochure-img-1.png" alt="brochure-img-1">
        <a href="product-portfolio.php">Know More</a>
      </div>

      <div class="col-md-4 mt-4">
        <h2>Data Center Services Portfolio</h2>
        <img src="images/brochure-img-2.png" alt="brochure-img-2">
        <a href="data-center-services-portfolio.php">Know More</a>
      </div>

      <div class="col-md-4 mt-4">
        <h2>Multi-Cloud Services</h2>
        <img src="images/multi-cloud-copy.png" alt="multi-cloud">
        <a href="multi-cloud-services.php">Know More</a>
      </div>

      <div class="col-md-4 mt-4">
        <h2>IT Managed Services</h2>
        <img src="images/it-managed-services.png" alt="it-managed-services">
        <a href="it-managed-services.php">Know More</a>
      </div>

      <div class="col-md-4 mt-4">
        <h2>Pi Snapshot</h2>
        <img src="images/pi-snapshot.png" alt="pi-snapshot">
        <a href="pi-snapshot.php">Know More</a>
      </div>
    </div>
  </div>
</div>

<!-- <div class="brochure-block"> 
   <ul class="py-5 brochure-btns tabs-btns">
      <li><button>1</button></li>
      <li><button>2</button></li>
      <li><button>3</button></li>
      <li><button>4</button></li>
      <li><button>5</button></li>
    </ul>

  </div>
</div> -->


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
                    <button>Download Brochure</button>
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
<!-- 
<script>
  $(document).ready(function() {
    $('.tabs-content').hide();
    $('.tabs-content:first').show();
    $('.tabs-btns li:first').addClass('active');
    $('.tabs-btns li').click(function(event) {
      index = $(this).index();
      $('.tabs-btns li').removeClass('active');
      $(this).addClass('active')
      $('.tabs-content').hide();
      $('.tabs-content').eq(index).show();
    });
  });
</script> -->

</body>

</html>