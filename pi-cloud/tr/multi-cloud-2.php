<?php
include_once('includes/header.php');

?>

<style>
    .stick {
        border-radius: 80px;
        max-width: 38% !important;
        margin-top: 70px;
    }

    .get-in-touch-blk {
        max-width: 945px;
        margin: 0 auto;
        background: #2680EB;
        border-radius: 80px;
        padding: 10px;
        border: 20px solid #ffffff;
    }

    .get-in-touch {
        margin: 0 0 -74px 0;
        position: relative;
    }

    .get-in-touch-lft {
        max-width: 70%;
    }

    .get-in-touch-lft p {
        font-size: 31.5px;
        line-height: 20px;
        padding-top: 29px;
        text-align: center;
    }

    .get-in-touch-rit a {
        font-size: 25.5px;
        line-height: 36px;
        background: #ECECEC;
        border-radius: 39px;
        height: 40px;
        text-align: center;
        color: #2680EB;
        width: 160px;
        margin: 0;
    }

    .get-in-touch-rit {
        max-width: 100%;
    }

    .appoinment li:nth-child(1) {
        width: 100% !important;
    }

    .appoinment li:nth-child(2) {
        width: 20% !important;
    }

    .appoinment {
        padding: 0px !important;
    }

    .appoinment h2 {
        padding: 0px 0px 0px 0px !important;
        font-size: 25px;
        line-height: 36px !important;
        text-align: center;
    }

    .dark ul {
        color: #ccc;
    }

    .dark h1 {
        color: #d5cef7 !important;
    }

    .owl-dots {
        position: absolute;
        top: 10px;
        margin: 30px auto;
        left: 0;
        right: 0;
    }

    .hb-productSec {
        max-width: 80% !important;
    }

    .hb-featLogo {
        width: 23% !important;
    }

    .hb-featCont h6 {
        text-align: center;
    }

    .sch-your {
        width: 500px;
        margin: 0 auto;
        display: block;
    }

    .essent {
        margin-top: 50px;
        float: right !important;
        width: auto !important;
    }

    .prem {
        width: auto !important;
        float: right !important;
    }

    @media (max-width:599px) {
        .hb-navmenu {
            left: -360px;
        }

        .hb-childProducts2 .tabBlock-tab {
            width: 100% !important;
            text-align: center;
            margin: 5px 0px;
        }

        .multi-cld-key2 li {
            width: 100%;
            text-align: center;
        }

        .hb-leftCont>span>img {
            display: block;
        }

        .sch-your {
            width: 400px;
            margin: 0 auto;
            display: block;
        }

        .hb-logo {
            width: 50% !important;
        }

        .hb-featTopHeader {
            text-align: center;
        }

        .templine>li {
            width: 100% !important;
            display: block !important;
            ;
            margin: 10px 0px !important;
        }

        .essent {
            margin-top: 50px;
            float: none !important;
            width: auto;
        }

        .prem {
            width: auto !important;
            float: none !important;
        }

        .only-support li {
            word-break: break-all;
        }

        .only-support li br {
            display: none !important;
        }

    }
</style>

<div class="hb-bannerCont">
    <div class="hb-bannerImgCont">
        <div class="hb-bannerImg">
            <!--	<picture>
			     <source media="(max-width: 768px)" srcset="./pi-cloud/images/banners/Web-banner-Ai.png">
			      <img  src="./pi-cloud/images/banners/Web-banner-Ai.png" alt="pi-cloud Cloud Backup as a Service Banner" style="width:100%">
      		</picture>-->
            <picture>
                <source media="(max-width: 768px)" srcset="./<?= $config['subFolderName'] ?>/images/banners/multi-cloud-img.jpg">
                <img src="./<?= $config['subFolderName'] ?>/images/banners/multi-cloud-img.jpg" alt="pi-cloud Cloud Backup as a Service Banner" style="width:100%">
                <h2>Public Cloud</h2>
            </picture>
        </div>
    </div>
</div>

<section id="hb_products_Lists">
    <div class="container">
        <div class="hb-productHead text-center multi-cld">
            <!--<h1>Multi-Cloud Services</h1>
                <!--<p>Harbour 1Â®, India's first Enterprise Cloud Platform, is now a leading multi-cloud ecosystem powered by Pi DATACENTERSÂ®. Our platform provides businesses with the flexibility to utilize both private and public clouds, seamlessly integrated with a comprehensive management suite. The industry today recognizes the business and compliance significance of data localization and data sovereignty within the ambit of the law of land of India. We ensure that our customers can trust us with the safekeeping of their data and being compliant.</p>

<p>Our Multi-Cloud Ecosystem is designed to be platform agnostic, ensuring that all our products and services are fully integrated under one umbrella. This approach ensures flexibility, scalability, and high redundancy, making it the ideal solution for businesses across various industry verticals.
</p>

<p>We take pride in our relentless industry research and technology assimilations, which has translated into our platform to mirror innovation and thought re-engineering. Our self-owned multi-local TIER IV Software-Defined Data Centers (SDDC) across India ensure that we can offer high-quality services to our customers while keeping their data safe.
</p>

<p>Our Multi-Cloud Ecosystem has been a safe harbor for enterprises with diverse needs. We strive to empower businesses with the tools they need to succeed in today's fast-paced digital landscape. The numerous used cases of enterprises trusting and partnering with us in infusing their business goals and staying ahead of the curve are testimonials in themselves. 
</p>-->
            <p>Harbour 1Â®, India's first Enterprise Cloud Platform, is now a leading multi-cloud ecosystem powered by Pi DATACENTERSÂ®. Our platform provides businesses with the flexibility to utilize both private and public clouds, seamlessly integrated with a comprehensive management suite. Our Multi-Cloud Ecosystem has been a safe harbor for enterprises with diverse needs and is designed to be platform-agnostic, ensuring that all our products and services are fully integrated under one umbrella. This approach ensures flexibility, scalability, and high redundancy, making it the ideal solution for businesses across various industry verticals. We strive to empower businesses with the tools they need to succeed in today's fast-paced digital landscape.</p>

            <p>The industry today recognizes the business and compliance significance of data localization and data sovereignty within the ambit of the law of land of India. We ensure that our customers can trust us with the safekeeping of their data and being compliant. The numerous used cases of enterprises trusting and partnering with us in infusing their business goals and staying ahead of the curve are testimonials in themselves. We take pride in our relentless industry research and technology assimilations, which have translated into our platform to mirror innovation and thought re-engineering. Our self-owned, multi-local TIER IV Software-Defined Data Centers (SDDC) across India ensure that we can offer high-quality services to our customers while keeping their data safe.</p>
        </div>
        <br><br>

        <div class="hb-productHead text-center">
            <h1 style="padding:20px 0 0 0;color:#1a1a1a">Benefits</h1>
            <!--<p>Harbour 1Â® offers enterprises the luxury of hosting diverse workloads seamlessly across providers, thereby maximizing the benefits gained from each provider's strengths and mitigating their weaknesses.This approach to multi-cloud hosting also ensures that businesses have access to a wider range of services and features, resulting in increased flexibility and scalability for their operations. 
				The key features of our cloud computing approach encompass several critical elements that enable our clients to operate in today's rapidly evolving business environment.</p>-->
            <p>Harbour 1Â® offers enterprises the luxury of hosting diverse workloads seamlessly across multiple cloud providers, thereby maximizing the benefits gained from each cloud provider's strengths and mitigating their weaknesses.This approach to multi-cloud hosting also ensures that businesses have access to a wider range of services and features, resulting in increased flexibility and scalability for their operations.
                The key features of Harbour 1Â®â€™s cloud computing approach encompass several critical elements that enable our clients to operate in today's rapidly evolving business environment.</p>
        </div>

        <div class="hb-features">
            <h3 class="text-center">Key Features</h3>
            <ul class="list-inline hb-featuresList multi-cld-key">
                <li>
                    <div class="hb-featureBox">
                        <div class="hb-featTopHeader">
                            <p class="hb-featLogo">
                                <img src="./pi-cloud/images/combination25.png" alt="scale">
                            </p>
                            <div class="hb-featCont">
                                <h6>Combination of Private and Public Cloud</h6>

                            </div>
                        </div>
                        <p style="text-align:center;">Our approach to cloud computing consists of both private and public clouds, allowing clients to simultaneously leverage the flexibility of the public cloud and the robustness of the private cloud for their diverse workloads in a fully managed environment with a single pane of glass view.</p>
                    </div>
                </li>
                <li>
                    <div class="hb-featureBox">
                        <div class="hb-featTopHeader">
                            <p class="hb-featLogo">
                                <img src="./pi-cloud/images/diverse25.png" alt="economics">
                            </p>
                            <div class="hb-featCont">
                                <h6>Diverse Workload Hosting Locations</h6>

                            </div>
                        </div>
                        <p style="text-align:center;">Our platform enables customers to diversify their workload hosting locations, providing them with the flexibility and scalability necessary to succeed in today's competitive market.</p>
                    </div>
                </li>
                <li>
                    <div class="hb-featureBox">
                        <div class="hb-featTopHeader">
                            <p class="hb-featLogo">
                                <img src="./pi-cloud/images/cross25.png" alt="Self">
                            </p>
                            <div class="hb-featCont">
                                <h6>Cross-Geographical Cloud Integration</h6>

                            </div>
                        </div>
                        <p style="text-align:center;">We provide cross-geographical cloud integration to enable seamless workload management for our customers across various locations.</p>
                    </div>
                </li>
                <li>
                    <div class="hb-featureBox">
                        <div class="hb-featTopHeader">
                            <p class="hb-featLogo">
                                <img src="./pi-cloud/images/self25.png" alt="scale">
                            </p>
                            <div class="hb-featCont">
                                <h6>Self-Service Provision</h6>

                            </div>
                        </div>
                        <p style="text-align:center;">Our self-service provision enables customers to scale and manage their workloads via self-service, granting them complete control over their resources.</p>
                    </div>
                </li>
                <li>
                    <div class="hb-featureBox">
                        <div class="hb-featTopHeader">
                            <p class="hb-featLogo">
                                <img src="./pi-cloud/images/cost25.png" alt="economics">
                            </p>
                            <div class="hb-featCont">
                                <h6>Cost Optimization and Competitive Pricing</h6>

                            </div>
                        </div>
                        <p style="text-align:center;">At Harbour 1Â®, we understand the importance of cost optimization and competitive pricing. We work closely with our customers to ensure that they are getting the best value for their investment without sacrificing the quality of our services.</p>
                    </div>
                </li>
                <li>
                    <div class="hb-featureBox">
                        <div class="hb-featTopHeader">
                            <p class="hb-featLogo">
                                <img src="./pi-cloud/images/optimal25.png" alt="Self">
                            </p>
                            <div class="hb-featCont">
                                <h6>Optimal Mix Of Services From Multiple Cloud Platforms</h6>

                            </div>
                        </div>
                        <p style="text-align:center;">Our team is well-versed in the latest technologies and can help you find the optimal mix of services from across cloud platforms to meet your specific business needs. This strategy ensures that you do not overspend on unnecessary services while still having access to the tools and resources you need to succeed in the current digital landscape.</p>
                    </div>
                </li>
            </ul>
        </div>



        <div class="hb-childProducts" id="Managed">

            <!-- <p class="text-center">Address your growing infrastructure needs, regional expansions, and redundancy plans</p> -->
            <div id="outer" class="skltbs-theme-light" data-skeletabs='{ "startIndex": 3 }'>
                <ul class="skltbs-tab-group list-inline text-center templine">
                    <li class="skltbs-tab-item current">
                        <button class="skltbs-tab tab-link" data-tab="tab-1">Managed Multi-Cloud Services </button>
                    </li>
                    <li class="skltbs-tab-item">
                        <button class="skltbs-tab tab-link" data-tab="tab-2">Single Pane Of Glass</button>
                    </li>
                    <li class="skltbs-tab-item">
                        <button class="skltbs-tab tab-link" data-tab="tab-3">Why Multi-Cloud On Harbour 1Â®</button>
                    </li>

                </ul>
                <div class="skltbs-panel-group">
                    <div class="skltbs-panel current " id="tab-1">
                        <ul class="hb-productSec list-inline">
                            <div class="hb-leftCont hb_ppCont">
                                <p>Harbour 1Â® Managed Multi-Cloud Services offer businesses the flexibility to choose from multiple cloud providers, including AWS, Azure, Google Cloud, and Oracle, while ensuring seamless integration and efficient management of all cloud services.</p>
                                <p>Our managed multi-cloud services are designed to meet the growing demand for scalable, secure, and high-performance cloud computing solutions. Our team of cloud specialists has extensive expertise in designing, implementing, and managing multi-cloud environments, helping businesses optimize their cloud infrastructure to achieve their desired outcomes.</p>
                                <p>Our managed multi-cloud services offer businesses the peace of mind they need to focus on their core activities while we manage their cloud environment. If you're looking for a reliable and efficiently managed multi-cloud service provider, Harbour 1Â® is the perfect partner for your business.</p><br>
                                <!--<span>
                          <img src="images/product-images/Managed-multi-cloud-system-new.png" alt="multi-cloud-ecosystem" class="multi-cloud-ecosystem">
                          
                          	</span>-->
                                <div class="owl-carousel" id="cloudinfo">
                                    <div class="item" style="">

                                        <a href="https://pi-cloud.in/multi-cloud#cloudinfo"> <img src="./pi-cloud/images/product-images/AWS28.png" alt="certfication" style="max-width:100%;margin-top: 70px;"></a>

                                    </div>
                                    <div class="item" style="">

                                        <a href="https://pi-cloud.in/multi-cloud#cloudinfo"><img src="./pi-cloud/images/product-images/Managed-multi-cloud-system2856.png" alt="certfication" style="max-width:100%;margin-top: 70px;"></a>

                                    </div>
                                    <div class="item" style="">
                                        <a href="https://pi-cloud.in/multi-cloud#cloudinfo">
                                            <img src="./pi-cloud/images/product-images/Google28.png" alt="certfication" style="max-width:100%;margin-top:70px;">
                                        </a>
                                    </div>

                                    <div class="item" style="">
                                        <a href="https://pi-cloud.in/multi-cloud#cloudinfo">
                                            <img src="./pi-cloud/images/product-images/Oracle28.png" alt="certfication" style="max-width:100%;margin-top:70px;">
                                        </a>
                                    </div>

                                    <div class="item" style="">
                                        <a href="https://pi-cloud.in/multi-cloud#cloudinfo">
                                            <img src="./pi-cloud/images/product-images/Azure28.png" alt="certfication" style="max-width:100%;margin-top:70px;">
                                        </a>
                                    </div>





                                </div>

                        </ul>

                    </div>
                    <div class="skltbs-panel" id="tab-2">
                        <ul class="hb-productSec list-inline">
                            <div class="hb-leftCont hb_ppCont">
                                <p>The Harbour 1Â® Multi-Cloud Ecosystem simplifies the management of cloud environments by providing a centralized view of your workloads across multiple clouds. This platform allows you to monitor performance and optimize your environment for cost control.</p>

                                <p>By streamlining cloud management and reducing complexity, Harbour 1Â® enhances operational efficiency, freeing up valuable resources for innovation and growth. With a unified view of your cloud environments, you can focus on achieving your business objectives without getting bogged down in day-to-day tasks.</p>
                                <p>Whether you're migrating to the cloud, optimizing your existing cloud infrastructure, or managing multiple clouds, Harbour 1Â® provides the tools and unified view you need to succeed in today's digital landscape. With Harbour 1Â®, you can simplify cloud management, improve ROI, and achieve business objectives with ease.</p>
                                <span>
                                    <!--<img src="images/product-images/containers_img.png" alt="workspace">-->
                                    <img src="./pi-cloud/images/product-images/single-pane-of-glass.png" alt="workspace">
                                </span>
                            </div>

                        </ul>


                    </div>
                    <div class="skltbs-panel" id="tab-3">
                        <ul class="hb-productSec list-inline">
                            <div class="hb-leftCont hb_ppCont">


                                <p>In today's fast-paced business landscape, it's critical for organizations to be able to quickly adapt and scale to keep up with changing market demands. That's where Harbour 1Â® Multi-Cloud Ecosystem comes in: by providing a unified view for workload management across various cloud environments, businesses can streamline their operations, improve data sovereignty and compliance, and optimize their costs. </p>
                                <p>With Harbour 1's platform-agnostic approach, businesses have the flexibility to choose the best cloud environment for each workload while still maintaining complete control and visibility. The seamless integration of private and public clouds means there's no need to sacrifice security or privacy for affordability.</p>
                                <p>The Harbour 1Â® Multi-Cloud Ecosystem offers a comprehensive platform for efficient workload management, giving businesses the tools they need to stay agile and competitive in today's digital age. Choose pi-cloud and experience the benefits of a single pane of glass view for your business.</p>

                                <span>
                                    <img src="./pi-cloud/images/product-images/Managed-Services-Models-c.png" alt="workspace">
                                </span>
                            </div>

                        </ul>


                    </div>
                    <div id="servicemodel"></div>
                </div>

                <br><br>
                <br><br>

            </div>

        </div>
        <div>
            <h1 class="text-center" style="padding:100px 0 0;color:#1a1a1a;font-size:45px">Managed Services </h1>
            <ul class="hb-productSec list-inline">
                <li>
                    <div class="hb-leftCont hb_ppCont">
                        <span>
                            <img src="./pi-cloud/images/product-images/Managed-Services-Models.png" alt="tickmark">
                        </span>
                    </div>
                </li>
                <li>
                    <div class="hb-rightCont hb_ppCont">

                        <p style="text-align:left;">Our Managed Services offer varied models to cater to unique business needs of enterprises. These include the A La Carte, Dedicated Resource, Tiered, Elastic (Pay-Per-Use), and Monitoring Only models. This is to ensure that businesses could focus on their core activities while our managed services ecosystem takes care of the smooth operations and service availability of the IT infrastructure landscape.</p>
                    </div>
                </li>
            </ul>
        </div>




        <div class="hb-childProducts2">

            <div class="tabBlock">
                <div class="tabline">
                    <ul class="tabBlock-tabs nav-tabs feature-tab  border-bottom-0 d-flex flex-wrap justify-content-center list-inline" data-tabs="tabs">
                        <li class="tabBlock-tab is-active animatable fadeInUp">
                            <a class="nav-link" data-toggle="tab">Tiered Model
                            </a>
                        </li>
                        <li class="tabBlock-tab  animatable fadeInUp">
                            <a class="nav-link" data-toggle="tab">Elastic Model
                            </a>
                        </li>
                        <li class="tabBlock-tab  animatable fadeInUp">
                            <a class="nav-link" data-toggle="tab">Dedicated Model
                            </a>
                        </li>
                        <li class="tabBlock-tab  animatable fadeInUp">
                            <a class="nav-link" data-toggle="tab">A La Carte Model
                            </a>
                        </li>

                        <li class="tabBlock-tab  animatable fadeInUp">
                            <a class="nav-link" data-toggle="tab">Monitoring Only Model
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content tabBlock-content">
                    <div class="tabBlock-pane">
                        <ul class="hb-productSec list-inline">
                            <div class="hb-leftCont hb_ppCont">
                                <p style="text-align:center">
                                    Provides different tiers of service levels based on the business's needs, ensuring that you pay only for the services you require.Â 
                                </p>
                                <!--<span>
			            				<img src="images/product-images/TIERED-MODEL.png" alt="advanced">
			            			</span>-->


                            </div>

                        </ul>
                        <ul class="hb-productSec list-inline">

                            <li>
                                <div class="hb-rightCont hb_ppCont">
                                    <!--<b>Essentials</b><br>-->

                                    <ul style=" list-style-type: circle;list-style-position:outside;font-size: 15px;
    line-height: 22px;word-break: break-all;">
                                        <li>24 X 7 support with 2 hours critical response</li>
                                        <li>Basic IT support (OS Patching, OS Updates, OS Management, Virtual Machines, Disks, Basic Configuration Management, Incident<br> Management)</li>
                                        <li>30 days backup</li>
                                        <li>Proactive infrastructure monitoring and alerting</li>
                                        <li>Monthly health reports and dashboards</li>
                                        <li>Basic anti-virus and anti-malware support</li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="hb-leftCont hb_ppCont">
                                    <span>
                                        <img src="./pi-cloud/images/product-images/essesntials28.png" alt="tickmark" class="essent">
                                    </span>
                                </div>
                            </li>
                        </ul>
                        <ul class="hb-productSec list-inline" style="margin-top:30px">

                            <li>
                                <div class="hb-leftCont hb_ppCont">
                                    <span>
                                        <img src="./pi-cloud/images/product-images/Advanced28.png" alt="tickmark" style="width:auto;">
                                    </span>
                                </div>
                            </li>
                            <li>
                                <div class="hb-rightCont hb_ppCont">
                                    <!--<b>Advanced:</b>-->

                                    <ul style=" list-style-type: circle;list-style-position:outside;font-size: 14px;
    line-height: 22px;" class="only-support">
                                        <li>24 X 7 support with 1 hour critical response</li>
                                        <li>Advanced IT Support (OS Patching, OS Updates, OS Management, Virtual Machines, Virtual Machine scales, Availability Sets, Disks, Virtual <br>Networks, WAF, Identity Management, Configuration Management,<br> Incident Management, Problem Management, Change Management)</li>

                                        <li>Shared TAM and architect support</li>
                                        <li>Unlimited backup, self-serve point-in-time restore</li>
                                        <li>Proactive infrastructure monitoring and alerting</li>
                                        <li>Monthly health reports and dashboards.</li>
                                        <li>Advanced anti-virus and anti-malware support</li>
                                    </ul>
                                </div>
                            </li>

                        </ul>
                        <ul class="hb-productSec list-inline">

                            <li>
                                <div class="hb-rightCont hb_ppCont" style="margin-top:70px;">
                                    <!--<b>Premium</b><br>-->

                                    <ul style=" list-style-type: circle;list-style-position:outside;font-size: 15px;
    line-height: 22px;word-break: break-all;">
                                        <li>24 X 7 support with 30 minutes critical response</li>
                                        <li>Level-3 escalation advanced support</li>
                                        <li>Proactive capacity planning, performance and cost optimization</li>
                                        <li>Shared TAM and architect support</li>
                                        <li>Unlimited backup, self-serve point-in-time restore</li>
                                        <li>Proactive infrastructure monitoring and alerting</li>
                                        <li>Monthly health reports and dashboards</li>
                                        <li>Deep security (WAF, DDoS, Threat analytics, anti-virus, anti-malware, email and web protection)</li>
                                        <li>Proactive run book authoring</li>
                                        <li>Advanced operational intelligence and custom dashboard on usage, performance, governance, and cost</li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="hb-leftCont hb_ppCont">
                                    <span>
                                        <img src="./pi-cloud/images/product-images/Premium28.png" alt="tickmark" class="prem" style="">
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tabBlock-pane">
                        <ul class="hb-productSec list-inline">
                            <div class="hb-leftCont hb_ppCont">
                                <p style="text-align:center">
                                    Allows businesses to pay only for what they use, making it a cost-effective model.
                                </p>
                                <span>
                                    <img src="./pi-cloud/images/product-images/Elastic-Model28.png" alt="advanced">
                                </span>


                            </div>

                        </ul>

                    </div>

                    <div class="tabBlock-pane">
                        <ul class="hb-productSec list-inline">
                            <div class="hb-leftCont hb_ppCont">
                                <p style="text-align:center">
                                    This model provides businesses with devoted resources for managing their workloads, ensuring they receive the necessary attention.
                                </p>
                                <!--<span>
			            				<img src="images/product-images/Monitoring-Only-Model-new-d.png" alt="advanced">
			            			</span>-->

                                <br>
                                <br>
                                <ul class="list-inline hb-featuresList multi-cld-key" style="margin-top:40px;">
                                    <li>
                                        <div class="hb-featureBox">
                                            <div class="hb-featTopHeader">
                                                <p class="hb-featLogo" style="width:auto !important;text-align:center">
                                                    <img src="./pi-cloud/images/Service-Monitoring11.png" alt="scale" style="max-width:50%;">
                                                </p>
                                                <div class="hb-featCont" style="width:100%;text-align:Center">
                                                    <h6 style="min-height:50px">Service Monitoring</h6>

                                                </div>
                                            </div>
                                            <ul style=" list-style-type: circle;list-style-position:outside;width: 100% !important;margin: 0 auto;">
                                                <li>Numerous dashboards and logs, records the status of resources.</li>
                                                <li>In daily work, a consolidated monitoring of the systems and services operated is achieved by means of service monitoring.</li>

                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="hb-featureBox">
                                            <div class="hb-featTopHeader">
                                                <p class="hb-featLogo" style="width:auto !important;text-align:center">
                                                    <img src="./pi-cloud/images/Hourly-Support11.png" alt="scale" style="max-width:50%;">
                                                </p>
                                                <div class="hb-featCont" style="width:100%;text-align:Center">
                                                    <h6 style="min-height:50px">Hourly Support</h6>

                                                </div>
                                            </div>
                                            <p style="text-align:center;">Monitoring has three models of support:</p>
                                            <ul style="list-style-type: circle;list-style-position: inside;width: 100% !important;margin: 0 auto;padding: 10px 8px;">
                                                <li>24/7</li>
                                                <li>16/7</li>
                                                <li>8/7</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="hb-featureBox">
                                            <div class="hb-featTopHeader">
                                                <p class="hb-featLogo" style="width:auto !important;text-align:center">
                                                    <img src="./pi-cloud/images/Third-Party-Integration11.png" alt="scale" style="max-width:50%;">
                                                </p>
                                                <div class="hb-featCont" style="width:100%;text-align:Center">
                                                    <h6 style="min-height:50px">Third Party Integration</h6>

                                                </div>
                                            </div>
                                            <ul style="list-style-type: circle;list-style-position:outside;width: 100% !important;margin: 0 auto;text-align:left;">
                                                <li>Monitoring includes three unique parameters around Performance Metrics, Log Analytics, and Application Insights.</li>
                                                <li>Provide powerful end-to-end monitoring of applications and other crucial components.</li>
                                                <li>Third party applications can also be integrated for monitoring.</li>
                                            </ul>
                                        </div>
                                    </li>



                                </ul>
                            </div>

                        </ul>

                    </div>

                    <div class="tabBlock-pane">
                        <ul class="hb-productSec list-inline" style="max-width:100%;">
                            <div class="hb-leftCont hb_ppCont">
                                <p style="text-align:center">
                                    Allows businesses to select specific services they require, providing flexibility in the services chosen.
                                </p>
                                <!--<span>
			            				<img src="images/product-images/A-La-Carte-Model.png" alt="advanced">
			            			</span>-->
                                <ul class="list-inline multi-cld-key2">
                                    <li>
                                        <div class="hb-featureBox">
                                            <img src="./pi-cloud/images/product-images/A-La-Carte-Model-128.png" alt="A-La-Carte-Model-1" style="max-width:240px">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="hb-featureBox">
                                            <img src="./pi-cloud/images/product-images/A-La-Carte-Model-228.png" alt="A-La-Carte-Model-2" style="max-width:240px">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="hb-featureBox">
                                            <img src="./pi-cloud/images/product-images/A-La-Carte-Model-328.png" alt="A-La-Carte-Model-3" style="max-width:240px">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="hb-featureBox">
                                            <img src="./pi-cloud/images/product-images/A-La-Carte-Model-428.png" alt="A-La-Carte-Model-4" style="max-width:240px">
                                        </div>
                                    </li>
                                    <li class=" emty-blk"></li>
                                    <li>
                                        <div class="hb-featureBox">
                                            <img src="./pi-cloud/images/product-images/A-La-Carte-Model-528.png" alt="A-La-Carte-Model-5" style="max-width:240px">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="hb-featureBox">
                                            <img src="./pi-cloud/images/product-images/A-La-Carte-Model-628.png" alt="A-La-Carte-Model-6" style="max-width:240px">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="hb-featureBox">
                                            <img src="./pi-cloud/images/product-images/A-La-Carte-Model-728.png" alt="A-La-Carte-Model-7" style="max-width:240px">
                                        </div>
                                    </li>
                                    <li class="emty-blk"></li>
                                </ul>


                            </div>

                        </ul>

                    </div>

                    <div class="tabBlock-pane">
                        <!--<ul class="hb-productSec list-inline">
			            		<div class="hb-leftCont hb_ppCont">
                                    <p style="text-align:center">
Provides businesses with monitoring services while allowing them to manage their workloads themselves.
</p>
			            			<span>
			            				<img src="images/product-images/Dedicated-Model.png" alt="advanced">
			            			</span>
                                    
                                    
			            		</div>
			            	
			            </ul>-->
                        <p style="text-align:center">
                            Provides businesses with monitoring services while allowing them to manage their workloads themselves.
                        </p>
                        <ul class="hb-productSec list-inline" style="margin-top:30px">

                            <li>
                                <div class="hb-leftCont hb_ppCont">
                                    <span>
                                        <img src="./pi-cloud/images/product-images/Dedicated-Model.png" alt="tickmark" style="width:auto;">
                                    </span>
                                </div>
                            </li>
                            <li>
                                <div class="hb-rightCont hb_ppCont">
                                    <!--<b>Advanced:</b>-->
                                    <p> Offers IT professionals/engineers that will fully concentrate on the client's needs. Client has full management control over the project and IT professionals / engineers. These resources come at a fixed cost based on the level of experience. </p>
                                    <p>These resources can be aligned for all three models of support:</p><br>

                                    <ul style=" list-style-type: circle;list-style-position:outside;font-size: 18px;
    line-height: 22px;padding:0px 16px;">
                                        <li>24/7</li>
                                        <li>16/7</li>
                                        <li>8/7 </li>

                                    </ul>
                                </div>
                            </li>

                        </ul>

                    </div>
                </div>

            </div>
        </div>
        <!--<ul class="hb-productSec list-inline appoinment">
			            	<li>
			            		<div class="hb-leftCont hb_ppCont">
			            			<h2>Letâ€™s Book Your Appointment With us Now!</h2>
                    <a href="#">Schedule A Visit</a>
			            		</div>
			            	</li>
			            	<li>
			            		<div class="hb-rightCont hb_ppCont">
			            			
			            			 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque laoreet, ipsum a laoreet malesuada, ipsum mauris ultrices libero, vitae efficitur lacus enim a arcu. </p>
			            		</div>
			            	</li>
			            </ul> -->


        <br><br>
        <br><br>

        <h1 class="text-center" style="padding:30px 0 0;color:#545454;">Technology Partners</h1>
        <ul class="hb-productSec list-inline">
            <div class="hb-leftCont hb_ppCont">

                <!--<span>
			            				<img src="images/product-images/A-La-Carte-Model.png" alt="advanced">
			            			</span>-->
                <ul class="list-inline multi-cld-key2">
                    <li>
                        <div class="hb-featureBox" style="text-align:center">
                            <img src="./pi-cloud/images/product-images/AES212.png" alt="A-La-Carte-Model-1" style="width:100px">
                        </div>
                    </li>
                    <li>
                        <div class="hb-featureBox" style="text-align:center">
                            <img src="./pi-cloud/images/product-images/Oracle288.png" alt="A-La-Carte-Model-2" style="width:150px">
                        </div>
                    </li>
                    <li>
                        <div class="hb-featureBox" style="text-align:center">
                            <img src="./pi-cloud/images/product-images/Google212.png" alt="A-La-Carte-Model-3" style="width:100px">
                        </div>
                    </li>
                    <li>
                        <div class="hb-featureBox" style="text-align:center">
                            <img src="./<?= $config['subFolderName'] ?>/images/product-images/azure28.png" alt="A-La-Carte-Model-4" style="width:100px">
                        </div>
                    </li>

                </ul>


            </div>

        </ul>
        <a href="images/Multi-Cloud-Brochure.pdf" class="sch-your" target="_blank">
            <ul class="hb-productSec list-inline appoinment stick">
                <li>
                    <div class="hb-leftCont hb_ppCont">
                        <h2>Download Brochure</h2>
                        <!--<a href="#">Schedule A Visit</a>-->
                    </div>
                </li>
                <!--<li>
			            		<div class="hb-rightCont hb_ppCont">
			            			
			            			  <div class="get-in-touch-rit">
                                   <a href="https://pi-cloud.in/contact-us">Click Here</a>
                            
                                </div>
			            		</div>
			            	</li>-->
            </ul>
        </a>

        <!--<div class="get-in-touch">
                  <div class="get-in-touch-main">
                       <div class="container">
                           <div class="get-in-touch-blk row">
                                <div class="get-in-touch-lft">
                                    <p >Questions? We're here to help.</p>
                               </div>
                               <div class="get-in-touch-rit">
                                   <a href="contact-us.php">Get in Touch</a>
                            
                                </div>
                           </div>
                      </div>  
                      
              </div>
          </div>-->

    </div>


</section>
<?php
include_once('includes/footer.php');
?>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js'></script>
<script src='./pi-cloud/js/index.js'></script>

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