<?php
$seo_title = "pi-cloud®";
$seo_description = "";
$seo_keywords = "";
?>




<?php include('php/includes-techsters/header.php'); ?>





<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.css" integrity="sha512-pmAAV1X4Nh5jA9m+jcvwJXFQvCBi3T17aZ1KWkqXr7g/O2YMvO8rfaa5ETWDuBvRq6fbDjlw4jHL44jNTScaKg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
    /* @import url("https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&display=swap"); */



    .swiper-slide {
        background-position: center;
        background-size: cover;
        /* width: 400px !important; */

    }

    .swiper-slide::after {
        position: absolute;
        content: "";
        inset: 0;
        width: 100%;
    }

    .swiper-slide-active::after {
        background: none;
    }

    .swiper-slide>div {
        text-align: center;
        display: none;
        opacity: 0;
    }

    .swiper-slide-active div {
        display: block;
        opacity: 1;
    }

    .swiper-slide h2 {
        font-size: 1.2rem;
        /* font-family: "Libre Baskerville", serif; */
        position: relative;
    }

    .swiper-slide h2::after {
        position: absolute;
        content: "";
        bottom: -20px;
        left: 50%;
        transform: translateX(-50%);
        height: 2px;
        background: linear-gradient(#e66465, #9198e5);
    }

    @keyframes line {
        0% {
            width: 0;
        }

        100% {
            width: 100%;
        }
    }

    .swiper-slide-active h2::after {
        animation: line 0.5s linear forwards;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        object-fit: cover;
        /* box-shadow: 0px 3px 17px rgb(0 0 0 / 25%);
            border-radius: 50%;
            aspect-ratio: 1/1; */
    }

    .swiper-slide a {
        color: #ffffff;
        background: #76b543;
        padding: 10px;
        text-decoration: none;
        border-radius: 10px;
        font-weight: 500;
        position: relative;
        left: 80px;
        top: 10px;
    }

    .swiper-3d {
        perspective: 1000px;
    }

    .arrow {
        position: absolute;
        top: 5%;
        font-size: 30px;
        background-color: #76b543;
        border-radius: 15px;
        padding: 0px 30px;
        color: #fff;
        cursor: pointer;
    }

    .left {
        right: 25%;
    }

    .right {
        right: 20%;
    }

    .swiper-button-prev {
        background: #76b543;
        color: white;
        border-radius: 50%;
        top: 40%;
        left: 3px;
        width: 40px;
        height: 40px;
        box-shadow: 0px 2px 11px rgb(0 0 0 / 17%);
    }

    .swiper-button-prev::after {
        font-size: 1.4rem;
        content: "";
    }

    .svg-img {
        width: 25px;
    }

    .swiper-button-next {
        background: #76b543;
        color: white;
        border-radius: 50%;
        top: 40%;
        right: 2px;
        width: 40px;
        height: 40px;
        box-shadow: 0px 2px 11px rgb(0 0 0 / 17%);
    }

    .swiper-button-next::after {
        font-size: 1.4rem;
        content: "";
    }

    svg {
        width: 25px;
    }


    @media (min-width: 768px) {
        .swiper-slide h2 {
            font-size: 2rem;
        }
    }


    .swiper-slide .rent-blue {
        display: block !important;
    }


    .swiper-slide.swiper-slide-visible.swiper-slide-fully-visible.swiper-slide-active .rent-blue {
        display: none !important;
    }

    .swiper-slide .rent-green {
        /* visibility: hidden; */
        display: none;
    }


    .swiper-slide.swiper-slide-visible.swiper-slide-fully-visible.swiper-slide-active .rent-green {
        /* visibility: visible; */
        display: block !important;


    }


    .rent_server_page {
        width: 100%;
        position: relative;
        max-width: 70%;
        margin: auto;
        overflow-x: hidden;
        margin-top: 130px;
        /* border: 1px solid; */
        padding: 10px 0px;
        height: 100%;
        height: auto;
    }

    .banners_content.gpu_hide {
        display: none;
    }

    .swiper {
        position: relative;
        top: 0px;
        left: 0px !important;
        width: 100%;
        max-width: 90%;
        height: 100% !important;
        /* padding: 0px 217px; */
    }


    /* .swiper-slide.swiper-slide-visible.swiper-slide-fully-visible.swiper-slide-active {
 
    margin: 0px 0px;
} */


    .swiper-slide-active div {
        display: block;
        opacity: 1;
        margin-bottom: 15px;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        padding-right: 30px;
    }


    .fees_taxes_para {

        text-align: center;
        padding: 20px 0px;
        position: relative;
        color: #000;
    }

    @media screen and (max-width:992px) {
        .swiper-slide a {
            left: 45px;
        }
    }

    @media screen and (max-width:768px) {
        .swiper-slide a {
            left: 49px;
        }
    }

    @media screen and (max-width:599px) {
        .swiper-slide a {
            left: 28px;
            font-size: 10px;
            line-height: 1;
        }

        .swiper-button-prev {
            top: 51%;
            width: 26px;
            height: 26px;
        }

        .swiper-button-next {
            top: 51%;
            width: 26px;
            height: 26px;
        }
    }
</style>
</head>

<body>

    <section class="rent_server_page">

        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/1-B.svg" alt="rank-1-b" class="rent-blue">
                    <img src="images/1-G.svg" alt="rank-1-b" class="rent-green">
                    <div>
                        <a href="checkout.php?id=1">BUY NOW</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="images/2-B.svg" alt="rank-1-b" class="rent-blue">
                    <img src="images/2-G.svg" alt="rank-1-b" class="rent-green">
                    <div>
                        <a href="checkout.php?id=2">BUY NOW</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="images/3-B.svg" alt="rank-1-b" class="rent-blue">
                    <img src="images/3-G.svg" alt="rank-1-b" class="rent-green">
                    <div>
                        <a href="checkout.php?id=3">BUY NOW</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="images/4-B.svg" alt="rank-1-b" class="rent-blue">
                    <img src="images/4-G.svg" alt="rank-1-b" class="rent-green">
                    <div>
                        <a href="checkout.php?id=4">BUY NOW</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="images/5-B.svg" alt="rank-1-b" class="rent-blue">
                    <img src="images/5-G.svg" alt="rank-1-b" class="rent-green">
                    <div>
                        <a href="checkout.php?id=5">BUY NOW</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="images/6-B.svg" alt="rank-1-b" class="rent-blue">
                    <img src="images/6-G.svg" alt="rank-1-b" class="rent-green">
                    <div>
                        <a href="checkout.php?id=6">BUY NOW</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="images/7-B.svg" alt="rank-1-b" class="rent-blue">
                    <img src="images/7-G.svg" alt="rank-1-b" class="rent-green">
                    <div>
                        <a href="checkout.php?id=7">BUY NOW</a>
                    </div>
                </div>
            </div>
        </div>

        <p class="fees_taxes_para">*All Prices are Excluding Convenience Fee & Taxes</p>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 svg-img">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
            </svg>

        </div>
        <div class="swiper-button-next">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 svg-img">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
            </svg>

        </div>


    </section>
    <?php include('php/includes-techsters/footer.php'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js" integrity="sha512-Ysw1DcK1P+uYLqprEAzNQJP+J4hTx4t/3X2nbVwszao8wD+9afLjBQYjz7Uk4ADP+Er++mJoScI42ueGtQOzEA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            loop: true,
            autoplay: false,
            autoplayspeed: 3000,
            slidesPerView: 1, // Set the number of visible slides
            spaceBetween: 30, // Set the space between slides
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 100,
                modifier: 4,
                slideShadows: false
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            },
            keyboard: {
                enabled: true
            },
            mousewheel: {
                thresholdDelta: 70
            },
            initialSlide: 0,
            on: {
                click(event) {
                    swiper.slideTo(this.clickedIndex);
                }
            },
            breakpoints: {
                640: {
                    slidesPerView: 1
                }
            }
        });
    </script>




    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            loop: true,
            autoplay: false,
            autoplayspeed: 3000,
            slidesPerView: "3",
            slidesPerView: 3, // Set the number of visible slides
            spaceBetween: "30", // Set the space between slides
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 100,
                modifier: 4,
                slideShadows: false
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            },
            keyboard: {
                enabled: true
            },
            mousewheel: {
                thresholdDelta: 70
            },
            initialSlide: 0,
            on: {
                click(event) {
                    swiper.slideTo(this.clickedIndex);
                }
            },
            breakpoints: {
                640: {
                    slidesPerView: 3
                }
            }
        });
    </script>

</body>

</html>