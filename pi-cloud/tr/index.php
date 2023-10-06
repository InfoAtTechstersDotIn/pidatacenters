<?php


include_once('includes/header.php');
?>

<script
    type="module"
    src="https://cdn.jsdelivr.net/npm/@pwabuilder/pwainstall"
></script>
<!-- banner section starts here -->
<div class="hb-bannerCont">
    <div class="hb-bannerImgCont">
        <div class="hb-bannerImg">
            <picture>
                <source media="(max-width: 767px)"
                        srcset="./<?= $config['subFolderName'] ?>/images/banners/generic-cloud-services-main-harbour1-main.jpg">
                <img src="./<?= $config['subFolderName'] ?>/images/banners/generic-cloud-services-main-harbour1-main.jpg"
                     alt="Harbour1 Cloud Backup as a Service Banner" style="width:100%">
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
            <!--<h1> Ecosystem</h1>-->
            <p>In today’s digitally driven economy, cloud services have assumed significance for the right reasons.
                With enterprises focusing on their core and emphasizing a quicker time to market, the need for
                flexibility in access, scalability in capacity, agility in performance, business continuity, and cost
                efficiency are rightly addressed by the adoption of cloud-native strategies.</p>
            <p>Harbour 1®, powered by <a href="https://pidatacenters.com/" target="_blank"
                                          style="color: #61a924;font-weight: 700;border-bottom: 1px solid;">Pi
                    Datacenters</a>, India’s first Enterprise Cloud Platform, is now a Multi-Cloud Ecosystem,
                providing seamlessly integrated, platform agnostic and fully managed private and public cloud
                environments. It offers a single pane of glass view, quick time-to-market, flexibility, scalability,
                resiliency, business continuity, and cost-efficiency, without compromising critical security or
                regulatory compliance. It mirrors innovation and thought re-engineering, backed by relentless industry
                research and technology assimilations. </p>
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
                            <span>Multi-dimensional and real-time scaling of resources aligned to Enterprise  business needs</span>

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
                            <span>Delivered out of self-owned, multi locale Uptime Institute TIER  IV data centers </span>
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
            <h3 class="text-center">Journey With Harbour1<sup>®</sup></h3>
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
                    <p>Hosted on Harbour1<sup>®</sup>, across three Availability Zones in India</p>
                </div>
            </li>
            <li>
                <div class="hb-statCont  cc-color-2">
                    <h3><span class="Count">20</span><span>+</span></h3>
                    <h4>Banks & NBFCs</h4>
                    <p>Develop, deploy workloads on Harbour1<sup>®</sup> in a complaint environment</p>
                </div>
            </li>
            <li>
                <div class="hb-statCont  cc-color-3">
                    <h3><span class="Count">4</span></h3>
                    <h4>Payment Gateways</h4>
                    <p>Are processing thousands of transactions every second on Harbour1<sup>®</sup></p>
                </div>
            </li>
            <li>
                <div class="hb-statCont  cc-color-4">
                    <h3><span class="Count">4</span></h3>
                    <h4>Smart Cities</h4>
                    <p>With integrated IT, IoT and data on Harbour1<sup>®</sup>, delivering operational and service
                        efficiency to citizens</p>
                </div>
            </li>
            <li>
                <div class="hb-statCont  cc-color-1">
                    <h3><span class="Count">5</span></h3>
                    <h4>A-listed Indian Universities</h4>
                    <p>Leveraging Harbour1<sup>®</sup> to deliver enhanced digital learning experience</p>
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


<div class="hb-certication">
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
</div>


<!-- *******certfications start ************** -->

<footer class="footer_bg_color">
    <div class="container">
        <ul class="list-inline hb-footerList">
            <li>
                <div class="hb-footerImgSec">
                    <a href="./<?= $config['subFolderName'] ?>/"><img src="./<?= $config['subFolderName'] ?>/images/har-foot.png" alt="harbour1"></a>
                    <p>Harbour1® mirrors, innovation, thought re-engineering, backed by relentless industry research
                        and technology assimilations. It incubates, flexibility, scalability, high redundancy and being
                        platform agnostic, into all our products and services</p>
                    <div class="hb-socialLinks hb-footerSlinks" style="margin:26px 0; text-align: left;">
                        <ul class="list-inline ">
                            <li style="padding-left:0px;"><a href="https://www.linkedin.com/company/harbour1%C2%AE/"
                                                             target="_blank" rel="noreferrer"> <img
                                        src="./<?= $config['subFolderName'] ?>/images/menu-icons/linkedin_ico.svg"
                                        alt='linkedin'></a></li>
                            <li><a href="https://twitter.com/Harbour1Cloud" target="_blank" rel="noreferrer"> <img
                                        src="./<?= $config['subFolderName'] ?>/images/menu-icons/twitter_ico.svg"
                                        alt='twitter'></a></li>
                            <li><a href="https://www.youtube.com/channel/UCcrUri8y8maUmz3P_9uCeJg" target="_blank "
                                   rel="noreferrer"> <img
                                        src="./<?= $config['subFolderName'] ?>/images/menu-icons/youtube_ico.svg"
                                        alt='youtube'></a></li>
                            <li><a href="https://www.instagram.com/harbour1.in/"> <img
                                        src="./<?= $config['subFolderName'] ?>/images/menu-icons/Instagram_ico.svg"
                                        alt='insta'></a></li>
                            <li><a href="https://www.facebook.com/Harbour1-100292348760092/" target="_blank"
                                   rel="noreferrer"> <img
                                        src="./<?= $config['subFolderName'] ?>/images/menu-icons/facebook_ico.svg"
                                        alt='facebook'></a></li>
                        </ul>
                    </div>
                    <!--<a href="javascript:void(0)" class="share-button">
                      <img src="./<?= $config['subFolderName'] ?>/images/appstore.png" alt="appstore">
                    </a>-->
                </div>
            </li>

            <li>
                <b>PRODUCTS</b>
                <ul class="hb-infooterList">
                    <li>
                        <a href="./<?= $config['subFolderName'] ?>/compute">Compute</a>
                    </li>
                    <li>
                        <a href="./<?= $config['subFolderName'] ?>/network">Network</a>
                    </li>
                    <li>
                        <a href="./<?= $config['subFolderName'] ?>/storage">Storage</a>
                    </li>
                    <li>
                        <a href="./<?= $config['subFolderName'] ?>/security">Cyber Security</a>
                    </li>
                    <li>
                        <a href="./<?= $config['subFolderName'] ?>/sap">SAP on Cloud</a>
                    </li>
                    <li>
                        <a href="./<?= $config['subFolderName'] ?>/business-continuity">Business Continuity</a>
                    </li>
                    <li>
                        <a href="./<?= $config['subFolderName'] ?>/devops">DevOps</a>
                    </li>
                    <li>
                        <a href="./<?= $config['subFolderName'] ?>/endusercomputing">End User Computing</a>
                    </li>
                </ul>
            </li>


            <li>
                <b>INDUSTRY <br>SOLUTIONS</b>
                <ul class="hb-infooterList">
                    <li>
                        <a href="./<?= $config['subFolderName'] ?>/industry-solutions">BFSI</a>
                    </li>
                    <li>
                        <a href="./<?= $config['subFolderName'] ?>/industry-solutions">e-Commerce</a>
                    </li>
                    <li>
                        <a href="./<?= $config['subFolderName'] ?>/industry-solutions">IT / ITES</a>
                    </li>
                    <li>
                        <a href="./<?= $config['subFolderName'] ?>/industry-solutions">Manufacturing</a>
                    </li>
                    <li>
                        <a href="./<?= $config['subFolderName'] ?>/industry-solutions">Education</a>
                    </li>
                    <li>
                        <a href="./<?= $config['subFolderName'] ?>/industry-solutions">Healthcare</a>
                    </li>

                </ul>
            </li>


            <li>
                <b>CLOUD<br> ENABLEMENT</b>
                <ul class="hb-infooterList">
                    <li>
                        <a href="./<?= $config['subFolderName'] ?>/managed-services">Managed Services</a>
                    </li>
                    <li>
                        <a href="./<?= $config['subFolderName'] ?>/managed-services">Professional Services</a>
                    </li>
                </ul>
                <b style="padding-top: 36px">PRICING</b>
                <ul class="hb-infooterList">
                    <li>
                        <a href="./<?= $config['subFolderName'] ?>/pricing/#/cloudServers">Cloud Servers</a>
                    </li>
                    <li>
                        <a href="./<?= $config['subFolderName'] ?>pricing/#/cloudStorage">Cloud Storage</a>
                    </li>
                </ul>
                <b style="padding-top: 36px">Multi-Cloud</b>
                <ul class="hb-infooterList">
                    <li>
                        <a href="./<?= $config['subFolderName'] ?>multi-cloud#Managed"> Managed Multi-Cloud Services</a>
                    </li>
                    <li>
                        <a href="./<?= $config['subFolderName'] ?>multi-cloud#servicemodel"> Managed Services Models</a>
                    </li>
                </ul>

            </li>


            <li>
                <b>OTHERS</b>
                <ul class="hb-infooterList">
                    <li>
                        <a href="javascript:void(0)">Availability Zones</a>
                    </li>
                    <li>
                        <a href="./<?= $config['subFolderName'] ?>/ip-exchange">Internet Exchange</a>
                    </li>

                </ul>
                <b style="padding-top: 46px">KNOWLEDGE CENTER</b>
                <ul class="hb-infooterList">
                    <li>
                        <a href="./<?= $config['subFolderName'] ?>/blogs">Blog</a>
                    </li>
                    <li>
                        <a href="./<?= $config['subFolderName'] ?>/case-studies">Case Studies</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">Testimonials</a>
                    </li>
                    <li>
                        <a href="./<?= $config['subFolderName'] ?>/videos">Videos</a>
                    </li>

                    <li>
                        <a href="./<?= $config['subFolderName'] ?>/news">News</a>
                    </li>
                    <li>
                        <a href="https://pidatacenters.com/acceptable-use-policy/" target="_blank">Acceptable Use
                            Policy</a>
                    </li>
                    <li>
                        <a href="./<?= $config['subFolderName'] ?>/contact-us">Contact Us</a>
                    </li>

                    <li>
                </ul>
            </li>


        </ul>

        <ul class="list-inline hb-powerBy-snas">
            <li>
                <p>© 2023. All Rights Reserved.</p>
            </li>
            <li class="text-right">
                <a href="https://pidatacenters.com/"><img src="./<?= $config['subFolderName'] ?>/images/hpi_white.png"
                                                          alt="pidata"></a>
            </li>
        </ul>
    </div>
</footer>
<div class="share-dialog">
</div>
<div id="overlay"></div>
<div class="scrollbar"></div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js'></script>
<script src='./<?= $config['subFolderName'] ?>/js/index.js'></script>
<script>
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('service-worker.js')
            .then(function (registration) {
                console.log('Registration successful, scope is:', registration.scope);
            })
            .catch(function (error) {
                console.log('Service worker registration failed, error:', error);
            });
    }


    var section = document.querySelector('.hb-statLists');
    var hasEntered = false;

    window.addEventListener('scroll', (e) => {
        var shouldAnimate = (window.scrollY + window.innerHeight) >= section.offsetTop;

        if (shouldAnimate && !hasEntered) {
            hasEntered = true;

            $('.Count').each(function () {
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 4000,
                    easing: 'swing',
                    step: function (now) {
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
                title: 'Harbour1 App',
                text: 'harbour1 app test',
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
        "itemListElement": [
            {
                "@type": "ListItem",
                "position": 1,
                "name": "Harbour1",
                "item": "https://harbour1.in/"
            },
            {
                "@type": "ListItem",
                "position": 2,
                "name": "Storage",
                "item": "https://harbour1.in/storage"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Network",
                "item": "https://harbour1.in/network"
            },
            {
                "@type": "ListItem",
                "position": 4,
                "name": "Cyber Security",
                "item": "https://harbour1.in/security"
            },
            {
                "@type": "ListItem",
                "position": 5,
                "name": "Compute",
                "item": "https://harbour1.in/compute"
            },
            {
                "@type": "ListItem",
                "position": 6,
                "name": "Blogs",
                "item": "https://harbour1.in/blogs"
            },
            {
                "@type": "ListItem",
                "position": 7,
                "name": "Contact us",
                "item": "https://harbour1.in/contact-us"
            }
        ]
    }
</script>
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Harbour1",
        "url": "https://harbour1.in/",
        "logo": "https://harbour1.in/images/harbour_logo.png",
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+91 8632347555",
            "contactType": "customer service",
            "areaServed": "IN",
            "availableLanguage": "en"
        },
        "sameAs": [
            "https://www.facebook.com/Harbour1.in/",
            "https://twitter.com/Harbour1Cloud",
            "https://www.instagram.com/harbour1.in/",
            "https://www.youtube.com/channel/UCcrUri8y8maUmz3P_9uCeJg"
        ]
    }
</script>

</body>
</html>



