<?php
$seo_title = "Rent a Rack Services: Secure and Scalable Rack Solutions";
$seo_description = "Explore our Rent a Rack services offering secure and scalable solutions. Find tailored rack options designed to meet your hosting needs. Choose the ideal rack solution for your business infrastructure";
$seo_keywords = "rent a rack, rack pricing, colocation racks, full rack colocation pricing, rackspace colocation, colocation rack space pricing, rack hosting, data centre rack space costs";
?>



<?php include('php/includes-techsters/header.php'); ?>



<style>
    .banners_content.gpu_hide {
        display: none;
    }

    .modal4,
    .modal5 {
        display: none;
        position: fixed;
        z-index: 1111;
        padding-top: 100px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        backdrop-filter: blur(3px);
    }

    .modal-content4,
    .modal-content5 {
        margin: 30px auto;
        display: block;
        width: 80%;
        max-width: 335px;
    }

    .close4,
    .close5 {
        position: absolute;
        top: 45px;
        right: 35px;
        color: #000000;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
        cursor: pointer;
    }

    .close4 :hover,
    .close4 :focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
    }

    .close5 :hover,
    .close5 :focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
    }

    @media screen and (max-width:991px) {
        .about-banner img {
            height: 440px;
            object-fit: unset;
        }
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
                    <img src="images/b-1.svg" alt="rank-1-b" width="211" height="1520" class="rent-blue">
                    <img src="images/g-1.svg" alt="rank-1-b" width="211" height="1520" class="rent-green">
                    <a href="checkout.php?id=1">BUY NOW</a>
                </li>
                <li>
                    <img src="images/b-2.svg" alt="rank-1-b" width="211" height="1520" class="rent-blue">
                    <img src="images/g-2.svg" alt="rank-1-b" width="211" height="1520" class="rent-green">
                    <a href="checkout.php?id=2">BUY NOW</a>
                </li>
                <li>
                    <img src="images/b-3.svg" alt="rank-1-b" width="211" height="1520" class="rent-blue">
                    <img src="images/g-3.svg" alt="rank-1-b" width="211" height="1520" class="rent-green">
                    <a href="checkout.php?id=3">BUY NOW</a>
                </li>
                <li>
                    <img src="images/b-4.svg" alt="rank-1-b" width="211" height="1520" class="rent-blue">
                    <img src="images/g-4.svg" alt="rank-1-b" width="211" height="1520" class="rent-green">
                    <a href="checkout.php?id=4">BUY NOW</a>
                </li>
                <li>
                    <img src="images/b-5.svg" alt="rank-1-b" width="211" height="1520" class="rent-blue">
                    <img src="images/g-5.svg" alt="rank-1-b" width="211" height="1520" class="rent-green">
                    <a href="checkout.php?id=5">BUY NOW</a>
                </li>
                <li>
                    <img src="images/b-6.svg" alt="rank-1-b" width="211" height="1520" class="rent-blue">
                    <img src="images/g-6.svg" alt="rank-1-b" width="211" height="1520" class="rent-green" id="myImg">
                    <a href="checkout.php?id=6">BUY NOW</a>
                </li>
                <li>
                    <img src="images/b-7.svg" alt="rank-1-b" width="211" height="1520" class="rent-blue">
                    <img src="images/g-7.svg" alt="rank-1-b" width="211" height="1520" class="rent-green" id="myImg2">
                    <a href="checkout.php?id=7">BUY NOW</a>
                </li>
            </ul>
            <center style="position: relative; top: -50px;font-size:10px;margin-left:75px">*All Prices are Excluding Convenience Fee & Taxes</center>
        </div>
        <div id="myModal4" class="modal4">
            <span class="close4">x</span>
            <img class="modal-content4" id="img01">
        </div>
        <div id="myModal5" class="modal5">
            <span class="close5">x</span>
            <img class="modal-content5" id="img02">
        </div>
    </div>
</div>

<!--what-is-noc starts here -->
<div class="what-is-noc">



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

<script>
    var modal = document.getElementById('myModal4');
    var img = document.getElementById('myImg');
    var modalImg = document.getElementById("img01");
    img.onclick = function() {
        modal.style.display = "block";
        modalImg.src = "images/b-6-popup.svg";
    }

    var close = document.getElementsByClassName("close4")[0];
    close.onclick = function() {
        modal.style.display = "none";
    }
</script>

<script>
    var modal2 = document.getElementById('myModal5');
    var img2 = document.getElementById('myImg2');
    var modalImg2 = document.getElementById("img02");
    img2.onclick = function() {
        modal2.style.display = "block";
        modalImg2.src = "images/b-7-popup.svg";
    }

    var close2 = document.getElementsByClassName("close5")[0];
    close2.onclick = function() {
        modal2.style.display = "none";
    }
</script>

</body>

</html>