<?php include('php/inner-header.php'); ?>


<style>
   .banners_content.gpu_hide {
      display: none;
   }

   @media screen and (max-width:599px) {

      .slick-track {
         left: -23px !important;
      }

      .slider-rent a {
         margin-right: 50px !important;
      }
   }
</style>

<!-- main starts here -->

<div class="about-banner">
   <div class="container">
      <div class="about-banner-blk pt-3">
         <!--  <img src="images/istockphoto-1356466745-612x612.jpg" alt="soc-banner" width="1920" height="210" style="max-width:612px;height:auto;margin:0 auto;">-->
         <h2>SOC</h2>

         <ul class="slider-rent">
            <li>
               <img src="images/1-B.svg" alt="rank-1-b" width="211" height="1520" class="rent-blue">
               <img src="images/1-G.svg" alt="rank-1-b" width="211" height="1520" class="rent-green">
               <a href="checkout.php?id=1">BUY NOW</a>
            </li>
            <li>
               <img src="images/2-B.svg" alt="rank-1-b" width="211" height="1520" class="rent-blue">
               <img src="images/2-G.svg" alt="rank-1-b" width="211" height="1520" class="rent-green">
               <a href="checkout.php?id=2">BUY NOW</a>
            </li>
            <li>
               <img src="images/3-B.svg" alt="rank-1-b" width="211" height="1520" class="rent-blue">
               <img src="images/3-G.svg" alt="rank-1-b" width="211" height="1520" class="rent-green">
               <a href="checkout.php?id=3">BUY NOW</a>
            </li>
            <li>
               <img src="images/4-B.svg" alt="rank-1-b" width="211" height="1520" class="rent-blue">
               <img src="images/4-G.svg" alt="rank-1-b" width="211" height="1520" class="rent-green">
               <a href="checkout.php?id=4">BUY NOW</a>
            </li>
            <li>
               <img src="images/5-B.svg" alt="rank-1-b" width="211" height="1520" class="rent-blue">
               <img src="images/5-G.svg" alt="rank-1-b" width="211" height="1520" class="rent-green">
               <a href="checkout.php?id=5">BUY NOW</a>
            </li>
            <li>
               <img src="images/6-B.svg" alt="rank-1-b" width="211" height="1520" class="rent-blue">
               <img src="images/6-G.svg" alt="rank-1-b" width="211" height="1520" class="rent-green">
               <a href="checkout.php?id=6">BUY NOW</a>
            </li>
            <li>
               <img src="images/7-B.svg" alt="rank-1-b" width="211" height="1520" class="rent-blue">
               <img src="images/7-G.svg" alt="rank-1-b" width="211" height="1520" class="rent-green">
               <a href="checkout.php?id=7">BUY NOW</a>
            </li>
         </ul>
         <center style="position: relative; top: -50px;font-size:10px;margin-left:75px">*All Prices are Excluding Convenience Fee & Taxes</center>
      </div>
   </div>
</div>

<!--what-is-noc starts here -->
<div class="what-is-noc">




   <?php include('php/footer.php'); ?>

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
      $('.slider-rent').slick({
         centerMode: true,
         dots: false,
         arrows: true,
         infinite: true,
         slidesToShow: 3,
         slidesToScroll: 1,
         autoplay: true,
         autoplaySpeed: 3000,

         responsive: [{
            breakpoint: 768,
            settings: {
               slidesToShow: 1,
               slidesToScroll: 1
            }
         }]
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