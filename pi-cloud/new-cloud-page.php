<?php
include_once('includes/header.php');
?>

<script type="module" src="https://cdn.jsdelivr.net/npm/@pwabuilder/pwainstall"></script>
<style type="text/css">
    .get-in-touch-blk {
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
        color: #ffffff;
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
        /*background:#4c8713*/
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
    }
</style>
<!-- banner section starts here -->
<div class="hb-bannerCont">
    <div class="hb-bannerImgCont">
        <div class="hb-bannerImg">
            <picture>
                <source media="(max-width: 767px)" srcset="./<?= $config['subFolderName'] ?>/images/banners/generic-cloud-services-main-harbour1-main.jpg">
                <img src="./<?= $config['subFolderName'] ?>/images/banners/generic-cloud-services-main-harbour1-main.jpg" alt="pi-cloud Cloud Backup as a Service Banner" style="width:100%">
                <h2> Cloud</h2>
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
<div class="hb-cloudPlatform">
    <div class="container">
        <div class="hb-cloudCont text-center">
            <p>In today's digitally driven economy, cloud services have assumed significance for the right reasons. Enterprises, in their pursuit of streamlined operations and accelerated time-to-market, recognize the indispensable value that cloud solutions bring. The imperatives of access flexibility, capacity scalability, performance agility, unwavering business continuity, and prudent cost-effectiveness find their optimal resolution through the strategic adoption of cloud-native approaches.
            </p>
            <p>
                Introducing "Pi Cloud," the embodiment of these ideals, brought to you by Pi Datacenters. As the nation's premier Enterprise Cloud Platform, Pi Cloud transcends the singular, evolving into a Multi Cloud Ecosystem that ushers in a new era of seamless integration. This ecosystem successfully converges diverse platforms, both private and public, with a platform-agnostic approach. Not merely content with integration, Pi Cloud goes further, assuming the role of a fully managed sanctuary for your cloud environments. The hallmark of Pi Cloud is its holistic view, effortlessly attainable through a single pane of glass. This vantage point offers more than just a snapshot; it's a panoramic window into your digital infrastructure. Swift time-to-market is the anthem here, offering enterprises the competitive edge they seek. As you march ahead in your operational journey, Pi Cloud is your steadfast companion, a testament to what happens when vision meets innovation.</p>
        </div>

        <!--four--->

        <style>
            .cloud-icon {
                background: linear-gradient(to top, #223f97, #76b543);
                padding: 25px;
                text-align: center;
                border-radius: 183px;
                width: 130px;
                height: auto;
                margin-bottom: 20px;
                animation: Shake 0.5s linear infinite;
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
                background-color: #223f971f;
                border-radius: 10px;
            }

            .cloud-page-1,
            .cloud-page-2,
            .cloud-page-3 {
                display: grid;
                grid-template-columns: auto auto auto;
                text-align: center;
                gap: 20px;
                padding-top: 10px;
                justify-content: center;
            }

            .text-center {
                text-align: justify;
                max-width: 95%;
                margin: 0 auto;
            }

            .cloud-page h4 {
                margin: 10px 0;
                font-size: 18px;
            }

            .hb-journeyCont>h3 {
                text-align: center;
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
        </style>

        <div class="hb-journey">
            <div class="container">
                <div class="hb-journeyCont">
                    <h3 class="text-center">Service <span style="color: #76b543;">Offerings</span></h3>
                </div>
                <ul class="cloud-page-1">
                    <li class="cloud">
                        <div class="cloud-icon"><img src="../images/managed-services-icons/CIE.svg" alt="onesize"></div>
                        <h4>Cloud Infrastructure Excellence</h4>
                        <p>Immerse your applications, websites, and databases in our dependable and scalable cloud infrastructure. Revel in high availability, automatic backups, and effortless resource management. </p>
                    </li>

                    <li class="cloud">
                        <div class="cloud-icon"><img src="../images/managed-services-icons/CSB.svg" alt="onesize"></div>
                        <h4>Cloud Storage Brilliance </h4>
                        <p>Entrust your data to the cloud's secure integration. Our flexible storage solutions grant seamless access and file sharing while upholding data redundancy and compliance. </p>
                    </li>

                    <li class="cloud">
                        <div class="cloud-icon"><img src="../images/managed-services-icons/CBR.svg" alt="onesize"></div>
                        <h4>Cloud Backup and Resilience</h4>
                        <p>Fortify your business against data loss and downtime through our cloud backup and disaster recovery prowess. Bounce back swiftly from unexpected incidents, minimizing operational disruptions. </p>
                    </li>

                    <li class="cloud">
                        <div class="cloud-icon"><img src="../images/managed-services-icons/SCM.svg" alt="onesize"></div>
                        <h4>Seamless Cloud Migration</h4>
                        <p>Delegate the seamless migration of your current systems and applications to our cloud experts. Transition gracefully, minimizing business hiccups.</p>
                    </li>

                    <li class="cloud">
                        <div class="cloud-icon"><img src="../images/managed-services-icons/CSM.svg" alt="onesize"></div>
                        <h4>Cloud Security Mastery</h4>
                        <p>Shield your cloud infrastructure and data with our holistic security services. From identity and access management to threat vigilance and compliance assurance, we're your comprehensive guardians. </p>
                    </li>

                    <li class="cloud">
                        <div class="cloud-icon"><img src="../images/managed-services-icons/PCCS.svg" alt="onesize"></div>
                        <h4>Personalized Cloud Consulting and Support</h4>
                        <p>Our cloud connoisseurs stand by, ready to offer tailored guidance and consistent support for your cloud expedition. Expert assistance is just a step away. </p>
                    </li>

                </ul>
            </div>
        </div>








        <div class="hb-journey">
            <div class="container">
                <div class="hb-journeyCont">
                    <h3 class="text-center">Why Embrace <span style="color: #76b543;">Pi Cloud Services?<span> </h3>
                </div>
                <ul class="cloud-page-2">
                    <li class="cloud">
                        <div class="cloud-icon"><img src="../images/managed-services-icons/scalability (2).svg" alt="onesize"></div>
                        <h4>Scalability</h4>
                        <p>Bid farewell to hardware restraints and costly upgrades. Our cloud solutions provide scalable infrastructure that grows hand in hand with your business, be it through seasonal surges or exponential expansion. </p>
                    </li>

                    <li class="cloud">
                        <div class="cloud-icon"><img src="../images/managed-services-icons/BF.svg" alt="onesize"></div>
                        <h4>Boundless Flexibility: </h4>
                        <p>Unleash the liberty to work anytime, anywhere. Our cloud services grant seamless access to your data, apps, and resources from any device with an internet tether. Be productive and collaborative, regardless of your team's location. </p>
                    </li>

                    <li class="cloud">
                        <div class="cloud-icon"><img src="../images/managed-services-icons/CEI.svg" alt="onesize"></div>
                        <h4>Cost-Effective Ingenuity</h4>
                        <p>Sharpen your IT budget with our budget-friendly cloud solutions. Pay for what you use and dodge upfront hardware expenses. The pay-as-you-go model maximizes your investment's worth. </p>
                    </li>
                </ul>

                <ul class="cloud-page-3">
                    <li class="cloud">
                        <div class="cloud-icon"><img src="../images/managed-services-icons/RFLS.svg" alt="onesize"></div>
                        <h4>Reliability and Fortress-Level Security</h4>
                        <p>Trust in the safety of your data within our cloud realm. Our potent security protocols, routine backups, and disaster recovery plans shield your critical data from potential threats, ensuring unceasing business flow. </p>
                    </li>

                    <li class="cloud">
                        <div class="cloud-icon"><img src="../images/managed-services-icons/TTP.svg" alt="onesize"></div>
                        <h4 style="text-align:center">Top-Tier Performance</h4>
                        <p> Immerse yourself in top-notch performance and diminished latency through our high-speed cloud infrastructure. Our cutting-edge data centers and advanced technology ensure a prime user experience for your services and applications. </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="hb-cloudCont text-center">
    <p><b>Embark on Tomorrow's Computing with Pi Cloud Services </b> </p>
    <p>Ditch conventional IT constraints and embrace cloud agility and innovation. Let's propel your enterprise to unprecedented altitudes through the cloud's prowess! </p>
</div>

<div class="hb-coudBoxes">
    <ul class="list-inline hb-boxLists">
        <li>
            <div class="hb-boxCont text-center">
                <a href="javascript:void(0)" style="cursor: auto;">
                    <span>
                        <img src="./<?= $config['subFolderName'] ?>/images/Ba20.png" alt="data">
                    </span>
                    <span><strong>Data Localisation</strong></span>
                    <span>Absolute regulatory compliance to the digital data protection laws of land, of India!!</span>
                </a>
            </div>
        </li>

        <li>
            <div class="hb-boxCont text-center">
                <a href="javascript:void(0)" style="cursor: auto;">
                    <span>
                        <img src="./<?= $config['subFolderName'] ?>/images/Ba21.png" alt="scale">
                    </span>
                    <span><strong>Flexibility @ Core</strong></span>
                    <span>Get the built-in flexibility of a public cloud, while being on board a secured private cloud</span>

                </a>
            </div>
        </li>
        <li>
            <div class="hb-boxCont text-center">
                <a href="javascript:void(0)" style="cursor: auto;">
                    <span>
                        <img src="./<?= $config['subFolderName'] ?>/images/Ba22.png" alt="scale">
                    </span>
                    <span><strong>Hypervisor of Choice</strong></span>
                    <span> Enterprises get to pick the hypervisor of choice for thier workloads</span>

                </a>
            </div>
        </li>
        <li>
            <div class="hb-boxCont text-center">
                <a href="javascript:void(0)" style="cursor: auto;">
                    <span>
                        <img src="./<?= $config['subFolderName'] ?>/images/Ba23.png" alt="scale">
                    </span>
                    <span><strong>Scale @ Will</strong></span>
                    <span>Multi-dimensional and real-time scaling of resources aligned to Enterprise business needs</span>

                </a>
            </div>
        </li>
        <li>
            <div class="hb-boxCont text-center">
                <a href="javascript:void(0)" style="cursor: auto;">
                    <span>
                        <img src="./<?= $config['subFolderName'] ?>/images/Ba24.png" alt="multi">
                    </span>
                    <span><strong>Multi-Tiered Security</strong></span>
                    <span>Zoned security layers protecting data from vulnerabilities and threats</span>

                </a>
            </div>
        </li>
        <li>
            <div class="hb-boxCont text-center">
                <a href="javascript:void(0)" style="cursor: auto;">
                    <span>
                        <img src="./<?= $config['subFolderName'] ?>/images/Ba25.png" alt="uptime">
                    </span>
                    <span><strong>99.995% Uptime Availability</strong></span>
                    <span>Delivered out of self-owned, multi locale Uptime Institute TIER IV data centers </span>
                </a>
            </div>
        </li>
    </ul>
</div>
</div>
</div>
<!-- *******Journey starts here************** -->
<div class="hb-journey">
    <div class="container">
        <div class="hb-journeyCont">
            <h3 class="text-center">Journey With Pi Cloud</h3>
            <ul class="hb-journeyList list-inline">
                <li class="hb-ListJouney">
                    <div class="hb-Jimg">
                        <p>
                            <img src="./<?= $config['subFolderName'] ?>/images/homepage/1.png" alt="onesize">
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
                            <img src="./<?= $config['subFolderName'] ?>/images/homepage/2.png" alt="migration">
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
                            <img src="./<?= $config['subFolderName'] ?>/images/homepage/3.png" alt="selfService">
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
                            <img src="./<?= $config['subFolderName'] ?>/images/homepage/4.png" alt="futureReady">
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
<!-- banner Enterprise Cloud Platform start here -->
<div class="hb-stats">
    <div class="container">
        <ul class="list-inline hb-statLists ">
            <li>
                <div class="hb-statCont  cc-color-1">
                    <h3><span class="Count">14800</span><span>+</span></h3>
                    <h4>Mission Critical Workloads </h4>
                    <p>Hosted on Pi Cloud, across three Availability Zones in India</p>
                </div>
            </li>
            <li>
                <div class="hb-statCont  cc-color-2">
                    <h3><span class="Count">20</span><span>+</span></h3>
                    <h4>Banks & NBFCs</h4>
                    <p>Develop, deploy workloads on Pi Cloud in a complaint environment</p>
                </div>
            </li>
            <li>
                <div class="hb-statCont  cc-color-3">
                    <h3><span class="Count">4</span></h3>
                    <h4>Payment Gateways</h4>
                    <p>Are processing thousands of transactions every second on Pi Cloud</p>
                </div>
            </li>
            <li>
                <div class="hb-statCont  cc-color-4">
                    <h3><span class="Count">4</span></h3>
                    <h4>Smart Cities</h4>
                    <p>With integrated IT, IoT and data on Pi Cloud, delivering operational and service
                        efficiency to citizens</p>
                </div>
            </li>
            <li>
                <div class="hb-statCont  cc-color-1">
                    <h3><span class="Count">5</span></h3>
                    <h4>A-listed Indian Universities</h4>
                    <p>Leveraging Pi Cloud<sup>®</sup> to deliver enhanced digital learning experience</p>
                </div>
            </li>
            <li>
                <div class="hb-statCont  cc-color-2">
                    <h3><span class="Count">30</span><span>%</span></h3>
                    <h4>TCO Optimal</h4>
                    <p>Compared to any major cloud service provider across the globe</p>
                </div>
            </li>
        </ul>
    </div>
</div>


<!-- *******certfications start ************** -->
<div class="hb-certication">
    <div class="container">
        <div class="hb-CerSetion">
            <h4 class="text-center">Our Certifications</h4>
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
                                <img src="./<?= $config['subFolderName'] ?>/images/1.png" alt="data">
                            </span>

                        </a>
                    </div>
                </li>

                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
                            <span>
                                <img src="./<?= $config['subFolderName'] ?>/images/2.png" alt="scale">
                            </span>


                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
                            <span>
                                <img src="./<?= $config['subFolderName'] ?>/images/3.png" alt="scale">
                            </span>


                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
                            <span>
                                <img src="./<?= $config['subFolderName'] ?>/images/4.png" alt="scale">
                            </span>


                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
                            <span>
                                <img src="./<?= $config['subFolderName'] ?>/images/5.png" alt="multi">
                            </span>

                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
                            <span>
                                <img src="./<?= $config['subFolderName'] ?>/images/6.png" alt="uptime">
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
            <h4 class="text-center">Technology Partners</h4>

            <ul class="list-inline hb-boxLists slider-info">
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
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
                            <span>
                                <!--<img src="./<?= $config['subFolderName'] ?>/images/logo/18.png" alt="uptime">-->
                                <img src="./<?= $config['subFolderName'] ?>/images/product-images/azure28.png" alt="A-La-Carte-Model-4" style="width:100px">


                            </span>

                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
                            <span>
                                <!--<img src="./<?= $config['subFolderName'] ?>/images/logo/18.png" alt="uptime">-->
                                <img src="./pi-cloud/images/product-images/Google212.png" alt="A-La-Carte-Model-3" style="width:100px">


                            </span>

                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
                            <span>
                                <!--<img src="./<?= $config['subFolderName'] ?>/images/logo/18.png" alt="uptime">-->
                                <img src="./pi-cloud/images/product-images/AES212.png" alt="A-La-Carte-Model-1" style="width:100px">

                            </span>

                        </a>
                    </div>
                </li>



            </ul>
        </div>
    </div>
</div>

<div class="get-in-touch">
    <div class="get-in-touch-main">
        <div class="container">
            <div class="get-in-touch-blk row">
                <div class="get-in-touch-lft">
                    <p>Questions? We're here to help.</p>
                </div>
                <div class="get-in-touch-rit">
                    <a href="contact-us.php">Get in Touch</a>

                </div>
            </div>
        </div>

    </div>
</div>
<!--footer block starts -->
<footer>
    <div class="footer-about about">
        <div class="container">
            <ul class="row">
                <li class="col-md-3">
                    <a href="https://pidatacenters.com/case-studies.php">Case Studies </a><br />
                    <a href="https://pidatacenters.com/blogs.php">Blogs</a><br />
                    <a href="https://pidatacenters.com/press-releases.php">News </a>

                </li>
                <li class="col-md-3">
                    <a href="https://pidatacenters.com/certifications.php">Certifications </a><br />
                    <a href="https://pidatacenters.com/awards&recognition.php">Awards</a><br />
                    <a href="https://pidatacenters.com/testimonial.php">Testimonials</a>

                </li>
                <li class="col-md-3">
                    <a href="https://pidatacenters.com/about.php"> About us</a><br />
                    <a href="https://pidatacenters.com/leadership.php">Leadership </a><br />
                    <a href="https://pidatacenters.com/data-center-infrastructure-services.php">Services</a>

                </li>
                <li class="col-md-3">
                    <a href="https://pi-cloud.in/partners">Partners</a><br />
                    <a href="https://pidatacenters.com/contact-us.php">Reach Us</a><br />
                    <a href="https://pidatacenters.com/privacy-policy.php">Policies</a>
                </li>
            </ul>
            <div style="clear:both;"></div>
            <br />
            <p style="color:#fff;">©2023 Pi DATACENTERS® Pvt. Ltd. All rights reserved</p>
            <ul class="row social-icons">
                <li class="col-2">
                    <a href="https://www.linkedin.com/company/pidatacenters/" target="_blank">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="col-2">
                    <a href="https://twitter.com/Pi_DATACENTERS" target="_blank">
                        <i class="fa fa-twitter" aria-hidden="true"></i>

                    </a>
                </li>
                <li class="col-2">
                    <a href="https://www.facebook.com/PiDATACENTERS/" target="_blank">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="col-2">
                    <a href="https://www.youtube.com/@pi_datacenters" target="_blank">
                        <i class="fa fa-youtube" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="col-2"><a href="https://api.whatsapp.com/send?phone=+918978517793&amp;text=Hi, I need more information on Pidatacenters" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true" style="color:#00a82d"></i></a></li>


            </ul>
        </div>
    </div>
</footer>

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
            slidesToShow: 4,
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

</body>

</html>