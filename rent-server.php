<?php include('php/inner-header.php'); ?>







<!-- main starts here -->

<div class="about-banner">
   <div class="container">
      <div class="about-banner-blk">
         <!--  <img src="images/istockphoto-1356466745-612x612.jpg" alt="soc-banner" width="1920" height="210" style="max-width:612px;height:auto;margin:0 auto;">-->
         <h2>SOC</h2>
         <ul class="slider-rent">
            <li>
               <img src="images/rank-1-b.png" alt="rank-1-b" width="211" height="1520" class="rent-blue">
               <img src="images/rank-1-g.png" alt="rank-1-b" width="211" height="1520" class="rent-green">
               <a href="#">BUY NOW</a>
            </li>
            <li>
               <img src="images/rank-2-b.png" alt="rank-1-b" width="211" height="1520" class="rent-blue">
               <img src="images/rank-2-g.png" alt="rank-1-b" width="211" height="1520" class="rent-green">
               <a href="#">BUY NOW</a>
            </li>
            <li>
               <img src="images/rank-3-b.png" alt="rank-1-b" width="211" height="1520" class="rent-blue">
               <img src="images/rank-3-g.png" alt="rank-1-b" width="211" height="1520" class="rent-green">
               <a href="#">BUY NOW</a>
            </li>
            <li>
               <img src="images/rank-4-b.png" alt="rank-1-b" width="211" height="1520" class="rent-blue">
               <img src="images/rank-4-g.png" alt="rank-1-b" width="211" height="1520" class="rent-green">
               <a href="#">BUY NOW</a>

            </li>
            <li>
               <img src="images/rank-5-b.png" alt="rank-1-b" width="211" height="1520" class="rent-blue">
               <img src="images/rank-5-g.png" alt="rank-1-b" width="211" height="1520" class="rent-green">
               <a href="#">BUY NOW</a>
            </li>
            <li>
               <img src="images/rank-6-b.png" alt="rank-1-b" width="211" height="1520" class="rent-blue">
               <img src="images/rank-6-g.png" alt="rank-1-b" width="211" height="1520" class="rent-green">
               <a href="#">BUY NOW</a>
            </li>

            <li>
               <img src="images/rank-7-b.png" alt="rank-1-b" width="211" height="1520" class="rent-blue">
               <img src="images/rank-7-g.png" alt="rank-1-b" width="211" height="1520" class="rent-green">
               <a href="#">BUY NOW</a>
            </li>

         </ul>

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
         autoplaySpeed: 1000,

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