<?php
$seo_title = "Cloud";
$seo_description = "";
$seo_keywords = "";
?>



<?php include('php/includes-techsters/header.php'); ?>

<script type="module" src="https://cdn.jsdelivr.net/npm/@pwabuilder/pwainstall"></script>
<style type="text/css">
    /* .get-in-touch-blk {
        max-width: 945px;
        margin: 0 auto;
        background: #2680EB;
        border-radius: 80px;
        padding: 10px;
        border: 20px solid #ffffff;
    }

    .get-in-touch-lft {
        float: left;
    }

    .get-in-touch-lft:first-child {
        width: 70%;
        color: #fff;
    }

    .get-in-touch {
        margin: 0 0 -74px 0;
        position: relative;
    }

    .get-in-touch-lft p {
        font-size: 31.5px;
        line-height: 35px;
        padding-top: 29px;
        text-align: center;
    }

    .get-in-touch-rit a {
        font-size: 25.5px;
        line-height: 40px;
        background: #ECECEC;
        border-radius: 39px;
        height: 40px;
        text-align: center;
        color: #2680EB;
        width: 200px;
        margin: 0;
    }

    .footer-about {
        background: url(../images/footer-bg.png) no-repeat center;
        width: 100%;
        padding: 10px 0 0;
        background-size: cover;
    }

    .footer-about ul {
        max-width: 875px;
        margin: 0 auto;
    }

    .footer-about ul li a {
        margin: 0 0 15px;
        color: #ffffff !important;
        text-align: center;
    }

    .footer-about p {
        text-align: center;
        padding: 5px 0 0px;
    }

    .social-icons {
        max-width: 150px !important;
        padding: 20px 0 0;
    }

    .social-icons li a i {
        max-width: 100px;
        color: #ffffff;
        opacity: 1;
    }

    .white-bg #nav-icon span {
        background: #223f97;
    }

    .col-md-1 {
        -webkit-flex: 0 0 8.33333%;
    }

    .col-md-2 {
        -webkit-flex: 0 0 16.66667%;
    }

    .col-md-3 {
        -webkit-flex: 0 0 25%;
    }

    .col-md-4 {
        -webkit-flex: 0 0 33.33333%;
    }

    .col-md-5 {
        -webkit-flex: 0 0 41.66667%;
    }

    .col-md-6 {
        -webkit-flex: 0 0 50%;
    }

    .col-md-7 {
        -webkit-flex: 0 0 58.33333%;
    }

    .col-md-8 {
        -webkit-flex: 0 0 66.66667%;
    }

    .col-md-9 {
        -webkit-flex: 0 0 75%;
    }

    .col-md-10 {
        -webkit-flex: 0 0 83.33333%;
    }

    .col-md-11 {
        -webkit-flex: 0 0 91.66667%;
    }

    .col-md-12 {
        -webkit-flex: 0 0 100%;
    }

    .hb-certication.partner .hb-boxCont {
        box-shadow: none;
    }

    .footer-about .col-md-3 {
        -webkit-flex: 0 0 45%;
        float: left;
        width: 40%;
        text-align: center;
    }

    footer {
        width: 100%;
        padding: 10px 0;
    }

    .footer-cnt {
        padding-bottom: 60px
    }

    .footer-nav>li {
        width: 18%;
        margin-right: 2%;
        float: left;
        color: #fff;
    }

    .footer-nav>li h4 {
        font-size: 19px;
        margin-bottom: 20px
    }

    .footer-nav li a {
        display: block;
        font-size: 16px;
        color: #83A6BF;
        padding-bottom: 10px
    }

    .col-md-8 {
        -webkit-flex: 0 0 66.66667%;
    }

    .footer-nav li a:hover {
        color: #fff
    }

    .footer-about {
        background: url("https://pidatacenters.com/images/footer-bg.png") no-repeat center;
    }

    .footer-bottom {
        width: 100%;
        border-top: 1px solid #516877;
        padding: 25px 0 0 0;
        color: #fff
    }

    .footer-about .col-md-3 {
        -webkit-flex: 0 0 25%;
        float: left;
    }

    .col-md-3 {
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%;
    }

    .footer-bottom p {
        font-size: 15px;
        color: #83A6BF;
        line-height: 30px
    }

    .footer-bottom p a {
        color: #83A6BF
    }

    .footer-bottom .lft,
    .footer-bottom .lft p {
        display: flex;
        justify-content: center;
        line-height: 25px;
    }

    .footer-bottom p a:hover {
        color: #fff
    }

    .footer-bottom .powered {
        float: right;
        display: block;
        padding-bottom: 0
    }

    .social-icons {
        display: flex;
        justify-content: center;
    }

    .social-icons a {
        display: block;
        float: left;
        margin-left: 8px;
        width: 25px;
        height: 25px;
        background: url(../images/social.png) no-repeat 0 0;
        opacity: .6
    }

    .social-icons .fb {
        background-position: -93px 0px
    }

    .social-icons .twr {
        background-position: -31px 0px
    }

    .social-icons .tube {
        background-position: -125px 0px
    }

    .social-icons .gp {
        background-position: -64px 0px
    }

    .social-icons .in {
        background-position: 0px 0px
    }

    .social-icons a:hover {
        opacity: 1;
        -webkit-transform: translateY(-3px);
    }

    @media (max-width:991px) {
        .get-in-touch-lft:first-child {
            width: 100%;
            padding: 0 0 20px;
            float: none;
        }

        .get-in-touch-rit a {
            display: block;
            margin: 0 auto;
        }

        .footer-about .col-md-3 {
            -webkit-flex: 0 0 100%;
            float: none;
            max-width: 100%;
            width: 100%;
        }

        .hb-Jimg {
            display: none;
        }

        .hb-jCont {
            width: 100%;
        }
    } */

    .hb-btn_cl>a {
        background-color: #223f97;
        padding: 12px 19px;
        color: #fff;
        font-size: 16px;
        text-transform: capitalize;
        font-weight: bold;
        text-align: center;
        border-radius: 6px;
        z-index: 1;
        margin: 0 10px;
    }

    .slick-prev:before,
    .slick-next:before {
        color: black !important;
    }

    .slick-dots {
        width: auto;
        height: 20px;
        padding: 0;
        display: flex;
        display: flex;
        top: 105%;
        left: 45%;
        margin: 30px 0px;
    }

    .slick-dots li button:before {
        opacity: 1;
        font-size: 10px;
        color: #76b543;
    }

    .slick-dots li.slick-active button:before {
        opacity: 1;
        color: #223f97;
        transform: scale(1.5);
    }

    .slick-initialized .slick-slide {
        display: flex;
    }

    .slide .slick-slide {
        transform: scale(0.8);
        transition: all 0.4s ease-in-out;
    }

    .slide .slick-slide .cloud-icon {
        background-color: grey;
    }


    .slide .slick-slide,
    .slide .slick-slide[aria-hidden="true"]:not(.slick-cloned)~.slick-cloned[aria-hidden="true"] {
        transform: scale(0.8, 0.8);
        transition: all 0.4s ease-in-out;
    }

    .slide .slick-center,
    .slide .slick-slide[aria-hidden="true"]:not([tabindex="-1"])+.slick-cloned[aria-hidden="true"] {
        transform: scale(1.1);
    }

    .slide .slick-current.slick-active {
        transform: scale(1.1);
    }

    .slide .slick-current.slick-active .cloud-icon {
        background-color: #223f97;
        animation: Shake 0.5s linear infinite;
    }


    .on-hover:hover {
        background-color: #ffffff8c;
        box-shadow: 1px 0px 3px grey;
    }

    .on-hover:hover .hb-Jimg>p>img {
        background-image: linear-gradient(#223f97, #76b543);
    }

    .hb-boxCont {
        min-height: 0px;
    }

    .hb-boxCont>a>span>img {
        max-width: 140px !important;
    }



    .cloud2 .cloud-icon2 {
        background: linear-gradient(#76b543, #5e9c42);
    }

    .cloud-icon {
        background: #223f97;

        box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset,
            rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset,
            rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset,
            rgba(0, 0, 0, 0.06) 0px 2px 1px,
            rgba(0, 0, 0, 0.09) 0px 4px 2px,
            rgba(0, 0, 0, 0.09) 0px 8px 4px,
            rgba(0, 0, 0, 0.09) 0px 16px 8px,
            rgba(0, 0, 0, 0.09) 0px 32px 16px;
    }


    .hb-journeyCont>h3 {
        margin-bottom: 10px;
        margin-top: 35px;
        padding: 20px;
    }

    /* new styles after adding new header */
    /* cloud pages changes banner {
        margin-top: 129px;
    } add inline for banner part*/

    .hb-forMobile {
        display: none;
    }

    .intro {
        background-color: #f8f7f7;
        padding: 36px 0;
        margin-top: -48px;
    }

    .hb-cloudCont.text-center.new-data {
        text-align: justify;
        max-width: 90%;
        margin: 0 auto;
    }

    .hb-boxCont:hover {
        transform: scale(1.01);
    }

    .hb-cloudCont.text-center.new-data p {
        color: black;
        font-size: 16px;
        text-align: justify;
    }

    ul.list-inline.hb-statLists {
        font-size: 0px;
        position: relative;
    }

    .list-inline li {
        width: 33.33%;
        font-size: 14px;
        text-align: center;
        padding: 16px 24px;
        vertical-align: top;
        /* display: inline-block; */
    }

    .hb-statCont {
        position: relative;
        text-align: center;
    }

    .hb-stats {
        padding: 36px 0 0 0;
    }

    .cc-color-1 h3,
    .cc-color-1 h4,
    .cc-color-1 p {
        color: #0b5a84;
    }

    .cc-color-2 h3,
    .cc-color-2 h4,
    .cc-color-2 p {
        color: #108174;
    }

    .cc-color-3 h3,
    .cc-color-3 h4,
    .cc-color-3 p {
        color: #43721a;
    }

    .cc-color-4 h3,
    .cc-color-4 h4,
    .cc-color-4 p {
        color: #2f1dac;
    }


    .hb-statCont>h3 {
        font-size: 54px;
        font-weight: bold;
    }

    .hb-statCont>h4 {
        margin: 14px auto 10px;
        font-size: 24px;
        font-weight: bold;
    }

    .hb-statCont>p {
        font-size: 16px;
        text-align: center;
    }

    .hb-journey {
        margin: 0 auto;
        padding: 0;
    }

    .hb-journeyCont {
        max-width: 90%;
        margin: 0 auto;
    }

    .hb-journeyCont>h3 {
        margin-bottom: 10px;
        margin-top: 35px;
        padding: 20px;
        color: black;
        font-weight: bold;
    }

    .cloud-icon,
    .cloud-icon2 {
        background: #223f97;
        padding: 25px;
        text-align: center;
        border-radius: 90px;
        width: 100px;
        height: auto;
        margin-bottom: 20px;
    }


    .cloud-icon2 {
        background: radial-gradient(#a29bfe, #1B1464, #a29bfe, #1B1464);
    }

    .cloud-icon img {
        width: 80px;
    }

    .cloud {
        display: flex;
        align-items: center;
        flex-direction: column;
        padding: 15px;
    }

    .cloud:hover {
        background-color: #ffffff00;
        border-radius: 10px;
        cursor: pointer;
    }

    .cloud:hover .cloud-icon2 {
        animation: Shake 0.5s linear infinite;
    }

    .cloud:hover .cloud h4 {
        color: #76b543;
    }

    .cloud:hover .cloud p {
        color: #223f97;
    }

    .cloud2:hover {
        box-shadow: 1px 1px 6px grey;
        border-radius: 20px;
    }

    .new-data {
        text-align: justify;
        max-width: 95%;
        margin: 0 auto;
    }


    .text-center {
        margin-top: 20px;
        color: black;
        font-size: 35px;
        font-weight: bold;
    }

    .cloud-page-1 h4,
    .cloud-page-2 h4,
    .cloud-page-3 h4 {
        margin: 10px 0;
        font-size: 18px;
        color: black;
        font-weight: bold;
        text-align: center;
    }

    .cloud-page-1 p,
    .cloud-page-2 p,
    .cloud-page-3 p {
        font-size: 16px;
        color: black;
        text-align: center;
        line-height: 1.3rem;
    }

    @keyframes Shake {
        0% {
            transform: rotate(5deg);
        }

        25% {
            transform: rotate(-6deg);
        }

        50% {
            transform: rotate(5deg);
        }

        75% {
            transform: rotate(-6deg);
        }

        100% {
            transform: rotate(5deg);
        }
    }

    .hb-coudBoxes {
        position: relative;
    }

    .hb-boxLists {
        position: relative;
        font-size: 0px;
        margin-top: 0;
    }

    .hb-boxLists>li {
        position: relative;
        width: 33.33%;
        vertical-align: top;
        padding: 12px;
        font-size: 14px;
    }

    .hb-boxCont {
        min-height: 0px;
    }

    .hb-boxCont {
        position: relative;
        background-color: #fff;
        transition: .5s;
        border-radius: 16px;
        box-shadow: 0 4px 12px rgb(0 0 0 / 12%), 0 0 2px rgb(0 0 0 / 8%);
        height: 100%;
        padding: 20px 24px;
    }

    .hb-boxCont>a>span>strong {
        display: block;
        padding-top: 24px;
        font-size: 20px;
        font-weight: 700;
    }

    .text-center {
        margin-top: 20px;
        left: 0;
        right: 0;
    }

    .text-center a {
        color: #272b3f;
        text-decoration: none;
        display: inline-block;
    }

    .hb-boxCont>a>span {
        display: block;
    }

    .hb-boxCont>a>span>img {
        max-width: 220px;
        display: block;
        text-align: center;
        margin: 0 auto;
    }

    .hb-boxCont>a>span>img {
        max-width: 140px !important;
    }

    .hb-boxCont>a>span:last-child {
        max-width: 380px;
        margin: 12px auto;
        text-align: center;
        font-size: 16px;
        font-weight: 400;
    }

    .text-center2 {
        margin-top: 35px;
        font-size: 28px;
        color: black;
        font-weight: bold;
    }

    .text-center p {
        font-size: 18px;
        text-align: center;
        color: black;
    }

    .hb-journeyList {
        font-size: 0px;
        position: relative;
    }

    .hb-journeyList>li {
        position: relative;
        font-size: 0;
        vertical-align: top;
        width: 50%;
        padding: 28px 20px;
    }

    .hb-Jimg,
    .hb-jCont {
        display: inline-block;
        width: 20%;
        vertical-align: middle;
        font-size: 14px;
    }

    .hb-Jimg>p>img {
        max-width: 80px;
        padding: 16px;
        background-color: #223f97;
        border-radius: 8px;
    }

    .hb-jCont {
        width: 80%;
    }

    .hb-jCont>h4 {
        font-size: 22px;
        color: #535353;
        text-align: left;
        font-weight: bold;
    }

    .hb-jCont>p {
        font-size: 16px;
        color: #535353;
        margin-top: 8px;
        line-height: 24px;
    }

    .slick-dots li {
        margin: 0;
    }

    .section-content {
        text-align: center;
    }

    .section-content h3 {
        font-size: 54px;
        font-weight: bold;
    }

    .section-content h4 {
        margin: 14px auto 10px;
        font-size: 24px;
        font-weight: bold;
    }

    .section-content p {
        font-size: 16px;
        text-align: center;
    }

    .hb-coudBoxes .cloud-boxes {
        margin-bottom: 15px;
    }

    .hb-cloudCont>p+p {
        margin-top: 0px !important;
    }

    .hb-CerSetion .slick-slide {
        height: 165px;
    }

    /* responsive */
    @media screen and (max-width:1050px) {}

    @media screen and (max-width:992px) {

        .hb-Jimg {
            width: 30%;
        }

        .hb-jCont>h4 {
            font-size: 20px;
            text-align: center;
        }

        .hb-jCont>p {
            line-height: 20px;
            text-align: center;
        }

        .section-content h4 {
            line-height: 1.5rem;
        }
    }

    @media screen and (max-width:768px) {
        .slick-track {
            top: 8px;
        }

        .slick-dots {
            left: 40%;
        }

        .hb-Jimg {
            width: 40%;
        }

        .hb-jCont>h4 {
            font-size: 19px;
            text-align: center;
        }

        .hb-Jimg>p>img {
            max-width: 100px;
        }

        .hb-jCont>p {
            text-align: center;
        }

        .text-center p {
            line-height: 1.5rem;
        }
    }

    @media screen and (max-width:599px) {

        .hb-cloudCont.text-center.new-data p {
            line-height: 20px;
        }

        .hb-journeyCont>h3 {
            line-height: 2rem;
        }

        .text-center2 {
            line-height: 2.1rem;
            margin-bottom: 15px;
        }

        .text-center p {
            line-height: 1.5rem;
        }

        .slick-dots {
            top: 100%;
            left: 29%;
        }


        .journey_with_picloud .hb-ListJouney {

            width: 100% !important;
            float: left;
        }
    }
</style>
<!-- banner section starts here -->
<div class="hb-bannerCont">
    <div class="hb-bannerImgCont">
        <div class="hb-bannerImg">
            <picture>
                <!-- <source media="(max-width: 767px)" srcset="./<?= $config['subFolderName'] ?>/images/banners/generic-cloud-services-main-harbour1-main.jpg">
                <img src="./<?= $config['subFolderName'] ?>/images/banners/generic-cloud-services-main-harbour1-main.jpg" alt="pi-cloud Cloud Backup as a Service Banner" style="width:100%"> -->

                <source media="(max-width: 768px)" srcset="./pi-cloud/images/banners/generic-cloud-services-main-harbour1-main.jpg">
                <img src="./pi-cloud/images/banners/generic-cloud-services-main-harbour1-main.jpg" alt="pi-cloud Cloud Backup as a Service Banner" style="width:100%;">
                <h1> Cloud</h1>
            </picture>
        </div>
        <div class="hb-forMobile">
            <div class="">
                <ul class="list-inline hb-mobileContList">
                    <li>
                        <a href="./<?= $config['subFolderName'] ?>/products-home">
                            <strong>Products</strong>
                            <span>On-Demand | Scale @Will</span>
                        </a>
                    </li>
                    <li>
                        <a href="./<?= $config['subFolderName'] ?>/industry-solutions">
                            <strong>Industry Solutions</strong>
                            <span>Tailored | Compliant | Agile</span>
                        </a>
                    </li>
                    <li>
                        <a href="./<?= $config['subFolderName'] ?>/managed-services">
                            <strong>Cloud Enablement</strong>
                            <span>Build | Operate | Accelerate</span>
                        </a>
                    </li>
                    <li>
                        <a href="./<?= $config['subFolderName'] ?>/pricing">
                            <strong>Pricing</strong>
                            <span>Calculator | TCO Optimized</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>
<!-- banner section end here -->
<!-- banner Enterprise Cloud Platform start here -->
<div class="hb-cloudPlatform ">
    <div class="container">
        <div class="hb-cloudCont text-center new-data">
            <p>In today's digitally driven economy, cloud services have assumed significance for the right reasons. Enterprises, in their pursuit of streamlined operations and accelerated time-to-market, recognize the indispensable value that cloud solutions bring. The imperatives of access flexibility, capacity scalability, performance agility, unwavering business continuity, and prudent cost-effectiveness find their optimal resolution through the strategic adoption of cloud-native approaches.
            </p>
            <p>
                Introducing "Pi Cloud," the embodiment of these ideals, brought to you by Pi Datacenters. As the nation's premier Enterprise Cloud Platform, Pi Cloud transcends the singular, evolving into a Multi Cloud Ecosystem that ushers in a new era of seamless integration. This ecosystem successfully converges diverse platforms, both private and public, with a platform-agnostic approach. Not merely content with integration, Pi Cloud goes further, assuming the role of a fully managed sanctuary for your cloud environments. The hallmark of Pi Cloud is its holistic view, effortlessly attainable through a single pane of glass. This vantage point offers more than just a snapshot; it's a panoramic window into your digital infrastructure. Swift time-to-market is the anthem here, offering enterprises the competitive edge they seek. As you march ahead in your operational journey, Pi Cloud is your steadfast companion, a testament to what happens when vision meets innovation.</p>
        </div>

        <div class="hb-stats">
            <div class="container">
                <div class="row hb-statLists">
                    <div class="col-md-4 section-content cc-color-1">
                        <h3><span class="Count">14800</span><span>+</span></h3>
                        <h4>Mission Critical Workloads </h4>
                        <p>Hosted on Pi Cloud, across three Availability Zones in India</p>
                    </div>


                    <div class="col-md-4 section-content cc-color-2">
                        <h3><span class="Count">20</span><span>+</span></h3>
                        <h4>Banks & NBFCs</h4>
                        <p>Develop, deploy workloads on Pi Cloud in a complaint environment</p>
                    </div>


                    <div class="col-md-4 section-content cc-color-3">
                        <h3><span class="Count">4</span></h3>
                        <h4>Payment Gateways</h4>
                        <p>Are processing thousands of transactions every second on Pi Cloud</p>
                    </div>



                    <div class="col-md-4  section-content cc-color-4">
                        <h3><span class="Count">4</span></h3>
                        <h4>Smart Cities</h4>
                        <p>With integrated IT, IoT and data on Pi Cloud, delivering operational and service
                            efficiency to citizens</p>
                    </div>


                    <div class="col-md-4  section-content cc-color-1">
                        <h3><span class="Count">5</span></h3>
                        <h4>A-listed Indian Universities</h4>
                        <p>Leveraging Pi Cloud to deliver enhanced digital learning experience</p>
                    </div>


                    <div class="col-md-4  section-content cc-color-2">
                        <h3><span class="Count">30</span><span>%</span></h3>
                        <h4>TCO Optimal</h4>
                        <p>Compared to any major cloud service provider across the globe</p>
                    </div>


                </div>

            </div>

        </div>

        <!--four--->

        <div class="hb-journey">
            <div class="container slide-hov">
                <div class="hb-journeyCont">
                    <h3 class="text-center">Service <span style="color: #76b543;">Offerings</span></h3>
                </div>
                <ul class="cloud-page-1 slide">
                    <li class="cloud">
                        <div class="cloud-icon"><img src="images/managed-services-icons/CIE.svg" alt="onesize"></div>
                        <h4>Infrastructure Excellence</h4>
                        <p>Immerse your applications, websites, and databases in our dependable and scalable cloud infrastructure. Revel in high availability, automatic backups, and effortless resource management. </p>
                    </li>

                    <li class="cloud">
                        <div class="cloud-icon"><img src="images/managed-services-icons/CSB.svg" alt="onesize"></div>
                        <h4>Storage Brilliance </h4>
                        <p>Entrust your data to the cloud's secure integration. Our flexible storage solutions grant seamless access and file sharing while upholding data redundancy and compliance. </p>
                    </li>

                    <li class="cloud">
                        <div class="cloud-icon"><img src="images/managed-services-icons/CBR.svg" alt="onesize"></div>
                        <h4>Backup and Resilience</h4>
                        <p>Fortify your business against data loss and downtime through our cloud backup and disaster recovery prowess. Bounce back swiftly from unexpected incidents, minimizing operational disruptions. </p>
                    </li>

                    <li class="cloud">
                        <div class="cloud-icon"><img src="images/managed-services-icons/SCM.svg" alt="onesize"></div>
                        <h4>Seamless Migration</h4>
                        <p>Delegate the seamless migration of your current systems and applications to our cloud experts. Transition gracefully, minimizing business hiccups.</p>
                    </li>

                    <li class="cloud">
                        <div class="cloud-icon"><img src="images/managed-services-icons/CSM.svg" alt="onesize"></div>
                        <h4>Security Mastery</h4>
                        <p>Shield your cloud infrastructure and data with our holistic security services. From identity and access management to threat vigilance and compliance assurance, we're your comprehensive guardians. </p>
                    </li>

                    <li class="cloud">
                        <div class="cloud-icon"><img src="images/managed-services-icons/PCCS.svg" alt="onesize"></div>
                        <h4>Personalized Consulting and Support</h4>
                        <p>Our cloud connoisseurs stand by, ready to offer tailored guidance and consistent support for your cloud expedition. Expert assistance is just a step away. </p>
                    </li>

                </ul>
            </div>
        </div>


        <div class="hb-btn_cl" style="text-align: center; margin-top: 10px; padding-top: 50px;"><a href="contact-us.php" class="global-button">Reach Us</a>
        </div>

        <div class="hb-cloudCont text-center" style="text-align:center;">
            <h3 class="text-center2">Embark on Tomorrow's Computing with <span style="color: #76b543;">Pi Cloud Services</span></h3>
            <p>Ditch conventional IT constraints and embrace cloud agility and innovation. Let's propel your enterprise to unprecedented altitudes through the cloud's prowess! </p>
        </div>


        <div class="hb-coudBoxes">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 cloud-boxes">
                        <div class="hb-boxCont text-center">
                            <a href="javascript:void(0)" style="cursor: auto;">
                                <span>
                                    <img src="./pi-cloud/images/new-localization-01.svg" alt="data">
                                </span>
                                <span><strong>Data Localisation</strong></span>
                                <span>Absolute regulatory compliance to the digital data protection laws of land, of India!!</span>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 cloud-boxes">
                        <div class="hb-boxCont text-center">
                            <a href="javascript:void(0)" style="cursor: auto;">
                                <span>
                                    <img src="./pi-cloud/images/new-flexibility-01.svg" alt="scale">
                                </span>
                                <span><strong>Flexibility @ Core</strong></span>
                                <span>Get the built-in flexibility of a public cloud, while being on board a secured private cloud</span>

                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 cloud-boxes">
                        <div class="hb-boxCont text-center">
                            <a href="javascript:void(0)" style="cursor: auto;">
                                <span>
                                    <img src="./pi-cloud/images/new-hypervisor-of-choice-01.svg" alt="scale">
                                </span>
                                <span><strong>Hypervisor of Choice</strong></span>
                                <span> Enterprises get to pick the hypervisor of choice for thier workloads</span>

                            </a>
                        </div>
                    </div>



                    <div class="col-md-4 cloud-boxes">
                        <div class="hb-boxCont text-center">
                            <a href="javascript:void(0)" style="cursor: auto;">
                                <span>
                                    <img src="./pi-cloud/images/new-scalability-01.svg" alt="scale">
                                </span>
                                <span><strong>Scale @ Will</strong></span>
                                <span>Multi-dimensional and real-time scaling of resources aligned to Enterprise business needs</span>

                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 cloud-boxes">
                        <div class="hb-boxCont text-center">
                            <a href="javascript:void(0)" style="cursor: auto;">
                                <span>
                                    <img src="./pi-cloud/images/new-multi-tiered-security-01.svg" alt="multi">
                                </span>
                                <span><strong>Multi-Tiered Security</strong></span>
                                <span>Zoned security layers protecting data from vulnerabilities and threats</span>

                            </a>
                        </div>
                    </div>


                    <div class="col-md-4 cloud-boxes">
                        <div class="hb-boxCont text-center">
                            <a href="javascript:void(0)" style="cursor: auto;">
                                <span>
                                    <img src="./pi-cloud/images/new-uptime-01.svg" alt="uptime">
                                </span>
                                <span><strong>99.995% Uptime Availability</strong></span>
                                <span>Delivered out of self-owned, multi locale Uptime Institute TIER IV data centers </span>
                            </a>
                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- *******Journey starts here************** -->

        <div class="hb-journey on-hover">
            <div class="container">
                <div class="hb-journeyCont">
                    <h3 class="text-center">Journey With <span style="color: #76b543;">Pi Cloud<span></h3>
                    <ul class="hb-journeyList list-inline journey_with_picloud">
                        <li class="hb-ListJouney">
                            <div class="hb-Jimg">
                                <p>
                                    <img src="./pi-cloud/images/homepage/1.png" alt="onesize">
                                </p>
                            </div>
                            <div class="hb-jCont">
                                <h4>One Size Doesn't Fit All</h4>
                                <p>Start Enterprise custom journey with a unique cloud adoption framework </p>
                            </div>
                        </li>
                        <li class="hb-ListJouney">
                            <div class="hb-Jimg">
                                <p>
                                    <img src="./pi-cloud/images/homepage/2.png" alt="migration">
                                </p>
                            </div>
                            <div class="hb-jCont">
                                <h4>Any To Any Migration</h4>
                                <p>Migration of servers, apps, databases & other workloads with diverse tools, techniques &
                                    technologies </p>
                            </div>
                        </li>
                        <li class="hb-ListJouney">
                            <div class="hb-Jimg">
                                <p>
                                    <img src="./pi-cloud/images/homepage/3.png" alt="selfService">
                                </p>
                            </div>
                            <div class="hb-jCont">
                                <h4>Self Service</h4>
                                <p>Provision, scale and manage Enterprise workloads through a self service </p>
                            </div>
                        </li>
                        <li class="hb-ListJouney">
                            <div class="hb-Jimg">
                                <p>
                                    <img src="./pi-cloud/images/homepage/4.png" alt="futureReady">
                                </p>
                            </div>
                            <div class="hb-jCont">
                                <h4>Future Ready</h4>
                                <p>Take advantage of emerging technologies like AI & ML, Cloud computing, IoT and Data
                                    Analytics </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- *******Journey ends ************** -->




        <div class="hb-journey">
            <div class="container">
                <div class="hb-journeyCont">
                    <h3 class="text-center">Why Embrace <span style="color: #76b543;">Pi Cloud Services?<span> </h3>
                </div>
                <ul class="row cloud-page-2">
                    <li class="col-md-4 cloud cloud2">
                        <div class="cloud-icon2"><img src="images/managed-services-icons/scalability (2).svg" alt="onesize"></div>
                        <h4>Scalability</h4>
                        <p>Bid farewell to hardware restraints and costly upgrades. Our cloud solutions provide scalable infrastructure that grows hand in hand with your business, be it through seasonal surges or exponential expansion. </p>
                    </li>

                    <li class="col-md-4 cloud cloud2">
                        <div class="cloud-icon2"><img src="images/managed-services-icons/BF.svg" alt="onesize"></div>
                        <h4>Boundless Flexibility </h4>
                        <p>Unleash the liberty to work anytime, anywhere. Our cloud services grant seamless access to your data, apps, and resources from any device with an internet tether. Be productive and collaborative, regardless of your team's location. </p>
                    </li>

                    <li class="col-md-4 cloud cloud2">
                        <div class="cloud-icon2"><img src="images/managed-services-icons/CEI.svg" alt="onesize"></div>
                        <h4>Cost-Effective Ingenuity</h4>
                        <p>Sharpen your IT budget with our budget-friendly cloud solutions. Pay for what you use and dodge upfront hardware expenses. The pay-as-you-go model maximizes your investment's worth. </p>
                    </li>
                </ul>

                <ul class="row cloud-page-3">
                    <li class="col-md-6 cloud cloud2">
                        <div class="cloud-icon2"><img src="images/managed-services-icons/RFLS.svg" alt="onesize"></div>
                        <h4>Reliability and Fortress-Level Security</h4>
                        <p>Trust in the safety of your data within our cloud realm. Our potent security protocols, routine backups, and disaster recovery plans shield your critical data from potential threats, ensuring unceasing business flow. </p>
                    </li>

                    <li class="col-md-6 cloud cloud2">
                        <div class="cloud-icon2"><img src="images/managed-services-icons/TTP.svg" alt="onesize"></div>
                        <h4 style="text-align:center">Top-Tier Performance</h4>
                        <p> Immerse yourself in top-notch performance and diminished latency through our high-speed cloud infrastructure. Our cutting-edge data centers and advanced technology ensure a prime user experience for your services and applications. </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

</div>
</div>

<!-- *******certfications start ************** -->
<div class="hb-certication">
    <div class="container">
        <div class="hb-CerSetion">
            <h4 class="text-center">Our <span style="color: #76b543;">Certifications<span>
            </h4>
            <!--<div class="owl-carousel">
           <div class="item">
                  <a href="#">
                    <img src="./<?= $config['subFolderName'] ?>/images/1.png" alt="certfication">
                  </a>
            </div>
            <div class="item">
                  <a href="#">
                    <img src="./<?= $config['subFolderName'] ?>/images/2.png" alt="certfication">
                  </a>
            </div>
            <div class="item">
                  <a href="#">
                    <img src="./<?= $config['subFolderName'] ?>/images/3.png" alt="certfication">
                  </a>
            </div>
            <div class="item">
                  <a href="#">
                    <img src="./<?= $config['subFolderName'] ?>/images/4.png" alt="certfication">
                  </a>
            </div>
            <div class="item">
                  <a href="#">
                    <img src="./<?= $config['subFolderName'] ?>/images/5.png" alt="certfication">
                  </a>
            </div>
            <div class="item">
                  <a href="#">
                    <img src="./<?= $config['subFolderName'] ?>/images/6.png" alt="certfication">
                  </a>
            </div>
            <div class="item">
                  <a href="#">
                    <img src="./<?= $config['subFolderName'] ?>/images/7.png" alt="certfication">
                  </a>
            </div>
        </div>-->
            <ul class="list-inline hb-boxLists">
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
                            <span>
                                <img src="./pi-cloud/images/1.png" alt="data">
                            </span>

                        </a>
                    </div>
                </li>

                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
                            <span>
                                <img src="./pi-cloud/images/2.png" alt="scale">
                            </span>


                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
                            <span>
                                <img src="./pi-cloud/images/3.png" alt="scale">
                            </span>


                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
                            <span>
                                <img src="./pi-cloud/images/4.png" alt="scale">
                            </span>


                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
                            <span>
                                <img src="./pi-cloud/images/5.png" alt="multi">
                            </span>

                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
                            <span>
                                <img src="./pi-cloud/images/6.png" alt="uptime">
                            </span>

                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>


<!--<div class="hb-certication">
    <div class="container">
        <div class="hb-CerSetion">
            <h4 class="text-center">Our Technology Partners</h4>

            <ul class="list-inline hb-boxLists">
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
     								<span>
     									<img src="./<?= $config['subFolderName'] ?>/images/logo/1.png" alt="data">
     								</span>

                        </a>
                    </div>
                </li>

                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
							<span>
							  <img src="./<?= $config['subFolderName'] ?>/images/logo/2.png" alt="scale">
							</span>


                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
							<span>
							  <img src="./<?= $config['subFolderName'] ?>/images/logo/3.png" alt="scale">
							</span>


                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
							<span>
							  <img src="./<?= $config['subFolderName'] ?>/images/logo/4.png" alt="scale">
							</span>


                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
						  	<span>
							  <img src="./<?= $config['subFolderName'] ?>/images/logo/5.png" alt="multi">
							</span>

                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
								<span>
								  <img src="./<?= $config['subFolderName'] ?>/images/logo/6.png" alt="uptime">
								</span>

                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
								<span>
								  <img src="./<?= $config['subFolderName'] ?>/images/logo/7.png" alt="uptime">
								</span>

                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
								<span>
								  <img src="./<?= $config['subFolderName'] ?>/images/logo/8.png" alt="uptime">
								</span>

                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
								<span>
								  <img src="./<?= $config['subFolderName'] ?>/images/logo/9.png" alt="uptime">
								</span>

                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
								<span>
								  <img src="./<?= $config['subFolderName'] ?>/images/logo/10.png" alt="uptime">
								</span>

                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
								<span>
								  <img src="./<?= $config['subFolderName'] ?>/images/logo/11.png" alt="uptime">
								</span>

                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
								<span>
								  <img src="./<?= $config['subFolderName'] ?>/images/logo/12.png" alt="uptime">
								</span>

                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
								<span>
								  <img src="./<?= $config['subFolderName'] ?>/images/logo/13.png" alt="uptime">
								</span>

                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
								<span>
								  <img src="./<?= $config['subFolderName'] ?>/images/logo/14.png" alt="uptime">
								</span>

                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
								<span>
								  <img src="./<?= $config['subFolderName'] ?>/images/logo/15.png" alt="uptime">
								</span>

                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
								<span>
								  <img src="./<?= $config['subFolderName'] ?>/images/logo/16.png" alt="uptime">
								</span>

                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
								<span>
								  <img src="./<?= $config['subFolderName'] ?>/images/logo/17.png" alt="uptime">
								</span>

                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
								<span>
								  <img src="./<?= $config['subFolderName'] ?>/images/logo/18.png" alt="uptime">
								</span>

                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>-->
<div class="hb-certication partner">
    <div class="container">
        <div class="hb-CerSetion">
            <h4 class="text-center">Technology <span style="color: #76b543;">Partners<span></h4>

            <ul class="list-inline hb-boxLists slider-info">
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
                            <span>
                                <img src="./pi-cloud/images/logo/1.png" alt="data">
                            </span>

                        </a>
                    </div>
                </li>

                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
                            <span>
                                <!-- <img src="./<?= $config['subFolderName'] ?>/images/logo/2.png" alt="scale"> -->
                                <img src="./pi-cloud/images/logo/2.png" alt="scale">
                            </span>


                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
                            <span>
                                <img src="./pi-cloud/images/logo/3.png" alt="scale">
                            </span>


                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
                            <span>
                                <img src="./pi-cloud/images/logo/4.png" alt="scale">
                            </span>


                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
                            <span>
                                <img src="./pi-cloud/images/logo/5.png" alt="multi">
                            </span>

                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
                            <span>
                                <img src="./pi-cloud/images/logo/6.png" alt="uptime">
                            </span>

                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
                            <span>
                                <img src="./pi-cloud/images/logo/7.png" alt="uptime">
                            </span>

                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
                            <span>
                                <img src="./pi-cloud/images/logo/8.png" alt="uptime">
                            </span>

                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
                            <span>
                                <img src="./pi-cloud/images/logo/9.png" alt="uptime">
                            </span>

                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
                            <span>
                                <img src="./pi-cloud/images/logo/10.png" alt="uptime">
                            </span>

                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
                            <span>
                                <img src="./pi-cloud/images/logo/11.png" alt="uptime">
                            </span>

                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
                            <span>
                                <img src="./pi-cloud/images/logo/12.png" alt="uptime">
                            </span>

                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
                            <span>
                                <img src="./pi-cloud/images/logo/13.png" alt="uptime">
                            </span>

                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
                            <span>
                                <img src="./pi-cloud/images/logo/14.png" alt="uptime">
                            </span>

                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
                            <span>
                                <img src="./pi-cloud/images/logo/15.png" alt="uptime">
                            </span>

                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
                            <span>
                                <img src="./pi-cloud/images/logo/16.png" alt="uptime">
                            </span>

                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
                            <span>
                                <img src="./pi-cloud/images/logo/17.png" alt="uptime">
                            </span>

                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
                            <span>
                                <img src="./pi-cloud/images/logo/18.png" alt="uptime">
                            </span>

                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
                            <span>
                                <!--<img src="./<?= $config['subFolderName'] ?>/images/logo/18.png" alt="uptime">-->
                                <img src="./pi-cloud/images/product-images/azure28.png" alt="A-La-Carte-Model-4" style="width:70px">


                            </span>

                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
                            <span>
                                <!--<img src="./<?= $config['subFolderName'] ?>/images/logo/18.png" alt="uptime">-->
                                <img src="./pi-cloud/images/product-images/Google212.png" alt="A-La-Carte-Model-3" style="width:70px">


                            </span>

                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
                            <span>
                                <!--<img src="./<?= $config['subFolderName'] ?>/images/logo/18.png" alt="uptime">-->
                                <img src="./pi-cloud/images/product-images/AES212.png" alt="A-La-Carte-Model-1" style="width:70px">

                            </span>

                        </a>
                    </div>
                </li>



            </ul>
        </div>
    </div>
</div>

<!--footer block starts -->
<?php include('php/includes-techsters/footer.php'); ?>

<!-- *******certfications start ************** -->

<div class="share-dialog">
</div>
<div id="overlay"></div>
<div class="scrollbar"></div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js'></script>
<script src='./<?= $config['subFolderName'] ?>/js/index.js'></script>
<script src="https://pidatacenters.com/js/main-pi.js"></script>
<script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>
<script>
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('service-worker.js')
            .then(function(registration) {
                console.log('Registration successful, scope is:', registration.scope);
            })
            .catch(function(error) {
                console.log('Service worker registration failed, error:', error);
            });
    }


    var section = document.querySelector('.hb-statLists');
    var hasEntered = false;

    window.addEventListener('scroll', (e) => {
        var shouldAnimate = (window.scrollY + window.innerHeight) >= section.offsetTop;

        if (shouldAnimate && !hasEntered) {
            hasEntered = true;

            $('.Count').each(function() {
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 4000,
                    easing: 'swing',
                    step: function(now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });

        }
    });
</script>
<script type="text/javascript">
    const shareButton = document.querySelector('.share-button');
    const shareDialog = document.querySelector('.share-dialog');

    shareButton.addEventListener('click', event => {
        if (navigator.share) {
            navigator.share({
                    title: 'pi-cloud App',
                    text: 'pi-cloud app test',
                    url: 'https://play.google.com/store/apps/details?id=com.pistore.pi'
                }).then(() => {
                    console.log('Thanks for sharing!');
                })
                .catch(console.error);
        } else {
            shareDialog.classList.add('is-open');
        }
    });
</script>
<script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "BreadcrumbList",
        "itemListElement": [{
                "@type": "ListItem",
                "position": 1,
                "name": "pi-cloud",
                "item": "https://pi-cloud.in/"
            },
            {
                "@type": "ListItem",
                "position": 2,
                "name": "Storage",
                "item": "https://pi-cloud.in/storage"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Network",
                "item": "https://pi-cloud.in/network"
            },
            {
                "@type": "ListItem",
                "position": 4,
                "name": "Cyber Security",
                "item": "https://pi-cloud.in/security"
            },
            {
                "@type": "ListItem",
                "position": 5,
                "name": "Compute",
                "item": "https://pi-cloud.in/compute"
            },
            {
                "@type": "ListItem",
                "position": 6,
                "name": "Blogs",
                "item": "https://pi-cloud.in/blogs"
            },
            {
                "@type": "ListItem",
                "position": 7,
                "name": "Contact us",
                "item": "https://pi-cloud.in/contact-us"
            }
        ]
    }
</script>
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "pi-cloud",
        "url": "https://pi-cloud.in/",
        "logo": "https://pi-cloud.in/images/harbour_logo.png",
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+91 8632347555",
            "contactType": "customer service",
            "areaServed": "IN",
            "availableLanguage": "en"
        },
        "sameAs": [
            "https://www.facebook.com/pi-cloud.in/",
            "https://twitter.com/pi-cloudCloud",
            "https://www.instagram.com/pi-cloud.in/",
            "https://www.youtube.com/channel/UCcrUri8y8maUmz3P_9uCeJg"
        ]
    }
</script>
<script src='./harbour1/js/index.js'></script>
<script>
    $(document).ready(function() {
        $('.slider-info').slick({
            dots: false,
            arrows: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            vertical: false,
            verticalSwiping: false,
            autoplay: true,
            autoplaySpeed: 1000,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }]

        });

    });
</script>


<script>
    $('.slide').slick({
        dots: true,
        arrows: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
        speed: 300,
        centerMode: true,
        centerPadding: '30px',
        useTransform: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
</script>

</body>

</html>