<?php
include_once('includes/header.php');

?>

<!-- <?php include('php/inner-header.php'); ?> -->


<style>
    .hb-productHead {
        max-width: 80%;
        margin: 0 auto;
    }

    .hb-block2 {
        display: block;
    }

    .hb-block1 {
        display: none !important;
    }




    /*changed margin */

    .stick {
        border-radius: 80px;
        max-width: 38% !important;
        margin-top: 0;
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

    @media (max-width:767px) {
        .hb-block1 {
            display: block !important;
        }

        .hb-block2 {
            display: none !important;
        }

        .get-in-touch-lft:first-child {
            width: 100% !important;
            max-width: 100% !important;
        }

        .get-in-touch-lft p {
            font-size: 15px !important;
            line-height: 21px !important;
            padding: 0 0 10px !important;
            text-align: center !important;
        }

        .get-in-touch-rit a {
            line-height: 38px !important;
            height: 38px !important;
            width: 150px !important;
            margin: 10px auto !important;
            font-size: 16px !important;
            display: block;
        }

        .footer-about .col-md-3 {
            -webkit-flex: 0 0 100% !important;
            float: none !important;
            width: 100% !important;
            text-align: center !important;
            max-width: 100% !important;
        }

        h1 {
            font-size: 25px !important;
            padding: 0 !important;
        }
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

    .hb-boxCont {
        box-shadow: none;
    }

    .icons-1 ul li:nth-child(1):before {
        position: absolute;
        left: 55px;
        top: 8px;
        content: "";
        background: url("../images/public-cloud-icons/GRA.svg") no-repeat;
        background-size: contain;
        width: 65px;
        height: 65px;
    }

    .icons-1 ul li:nth-child(2):before {
        position: absolute;
        left: 55px;
        top: 16px;
        content: "";
        background: url("../images/public-cloud-icons/US.svg") no-repeat;
        background-size: contain;
        width: 60px;
        height: 60px;

    }

    .icons-1 ul li:nth-child(3):before {
        position: absolute;
        left: 55px;
        top: 8px;
        content: "";
        background: url("../images/public-cloud-icons/CE.svg") no-repeat;
        background-size: contain;
        width: 65px;
        height: 65px;
    }

    .icons-1 ul li:nth-child(4):before {
        position: absolute;
        left: 55px;
        top: 8px;
        content: "";
        background: url("../images/public-cloud-icons/HP.svg") no-repeat;
        background-size: contain;
        width: 65px;
        height: 65px;
    }

    .icons-1 ul li:nth-child(5):before {
        position: absolute;
        left: 150px;
        top: 11px;
        content: "";
        background: url("../images/public-cloud-icons/SAC.svg") no-repeat;
        background-size: contain;
        width: 65px;
        height: 65px;
    }

    .hb-journeyList {
        box-shadow: 0px 0px 10px 0px grey;
    }

    .hb-jCont>p {
        margin-top: 30px !important;
    }

    .icons-2 ul li:nth-child(1):before {
        position: absolute;
        left: 65px;
        top: 7px;
        content: "";
        background: url("../images/public-cloud-icons/PCI-2.svg") no-repeat;
        background-size: contain;
        width: 60px;
        height: 60px;
    }

    .icons-2 ul li:nth-child(2):before {
        position: absolute;
        left: 65px;
        top: 7px;
        content: "";
        background: url("../images/public-cloud-icons/PCS.svg") no-repeat;
        background-size: contain;
        width: 60px;
        height: 60px;
    }

    .icons-2 ul li:nth-child(3):before {
        position: absolute;
        left: 52px;
        top: 0px;
        content: "";
        background: url("../images/public-cloud-icons/PCC.svg") no-repeat;
        background-size: contain;
        width: 75px;
        height: 75px;
    }

    .icons-2 ul li:nth-child(4):before {
        position: absolute;
        left: 65px;
        top: 7px;
        content: "";
        background: url("../images/public-cloud-icons/PCA.svg") no-repeat;
        background-size: contain;
        width: 60px;
        height: 60px;
    }

    .icons-2 ul li:nth-child(5):before {
        position: absolute;
        left: 65px;
        top: 7px;
        content: "";
        background: url("../images/public-cloud-icons/PC-AI-ML\ \(1\).svg") no-repeat;
        background-size: contain;
        width: 60px;
        height: 60px;
    }

    .icons-2 ul li:nth-child(6):before {
        position: absolute;
        left: 65px;
        top: 7px;
        content: "";
        background: url("../images/public-cloud-icons/PCS-C.svg") no-repeat;
        background-size: contain;
        width: 60px;
        height: 60px;
    }
</style>

<div class="hb-bannerCont">
    <div class="hb-bannerImgCont">
        <div class="hb-bannerImg">
            <!--	<picture>
			     <source media="(max-width: 768px)" srcset="./pi-cloud/images/banners/Web-banner-Ai.png">
			      <img  src="./pi-cloud/images/banners/Web-banner-Ai.png" alt="pi cloud Cloud Backup as a Service Banner" style="width:100%">
      		</picture>-->
            <picture>
                <source media="(max-width: 768px)" srcset="./<?= $config['subFolderName'] ?>/images/banners/multi-cloud-img.jpg">
                <img src="./<?= $config['subFolderName'] ?>/images/banners/multi-cloud-img.jpg" alt="pi cloud Cloud Backup as a Service Banner" style="width:100%">
                <h2>Public Cloud</h2>
            </picture>
        </div>
    </div>
</div>

<section id="hb_products_Lists">
    <div class="container">
        <!--<div class="hb-productHead text-center multi-cld">
				<!--<h1>Multi-Cloud Services</h1>
                <!--<p>Pi Cloud, India's first Enterprise Cloud Platform, is now a leading multi-cloud ecosystem powered by Pi DATACENTERSÂ®. Our platform provides businesses with the flexibility to utilize both private and public clouds, seamlessly integrated with a comprehensive management suite. The industry today recognizes the business and compliance significance of data localization and data sovereignty within the ambit of the law of land of India. We ensure that our customers can trust us with the safekeeping of their data and being compliant.</p>

<p>Our Multi-Cloud Ecosystem is designed to be platform agnostic, ensuring that all our products and services are fully integrated under one umbrella. This approach ensures flexibility, scalability, and high redundancy, making it the ideal solution for businesses across various industry verticals.
</p>

<p>We take pride in our relentless industry research and technology assimilations, which has translated into our platform to mirror innovation and thought re-engineering. Our self-owned multi-local TIER IV Software-Defined Data Centers (SDDC) across India ensure that we can offer high-quality services to our customers while keeping their data safe.
</p>

<p>Our Multi-Cloud Ecosystem has been a safe harbor for enterprises with diverse needs. We strive to empower businesses with the tools they need to succeed in today's fast-paced digital landscape. The numerous used cases of enterprises trusting and partnering with us in infusing their business goals and staying ahead of the curve are testimonials in themselves. 
</p>-->
        <!--<p>Pi Cloud, India's first Enterprise Cloud Platform, is now a leading multi-cloud ecosystem powered by Pi DATACENTERSÂ®. Our platform provides businesses with the flexibility to utilize both private and public clouds, seamlessly integrated with a comprehensive management suite. Our Multi-Cloud Ecosystem has been a safe harbor for enterprises with diverse needs and is designed to be platform-agnostic, ensuring that all our products and services are fully integrated under one umbrella. This approach ensures flexibility, scalability, and high redundancy, making it the ideal solution for businesses across various industry verticals. We strive to empower businesses with the tools they need to succeed in today's fast-paced digital landscape.</p>

<p>The industry today recognizes the business and compliance significance of data localization and data sovereignty within the ambit of the law of land of India. We ensure that our customers can trust us with the safekeeping of their data and being compliant. The numerous used cases of enterprises trusting and partnering with us in infusing their business goals and staying ahead of the curve are testimonials in themselves. We take pride in our relentless industry research and technology assimilations, which have translated into our platform to mirror innovation and thought re-engineering. Our self-owned, multi-local TIER IV Software-Defined Data Centers (SDDC) across India ensure that we can offer high-quality services to our customers while keeping their data safe.</p>-->
    </div>
    <br>

    <div class="hb-productHead text-center">
        <!--<h1 style="padding:20px 0 0 0;color:#1a1a1a">Benefits</h1>-->
        <!--<p>Pi Cloud offers enterprises the luxury of hosting diverse workloads seamlessly across providers, thereby maximizing the benefits gained from each provider's strengths and mitigating their weaknesses.This approach to multi-cloud hosting also ensures that businesses have access to a wider range of services and features, resulting in increased flexibility and scalability for their operations. 
				The key features of our cloud computing approach encompass several critical elements that enable our clients to operate in today's rapidly evolving business environment.</p>-->
        <!--<p>Pi Cloud offers enterprises the luxury of hosting diverse workloads seamlessly across multiple cloud providers, thereby maximizing the benefits gained from each cloud provider's strengths and mitigating their weaknesses.This approach to multi-cloud hosting also ensures that businesses have access to a wider range of services and features, resulting in increased flexibility and scalability for their operations.
				The key features of Pi-Cloudâ€™s cloud computing approach encompass several critical elements that enable our clients to operate in today's rapidly evolving business environment.</p>-->
        <p>Pi Multi Cloud, the flagship offering from Pi DATACENTERSÂ®, presents a distinctive proposition to enterprises seeking an optimized cloud hosting strategy. By seamlessly orchestrating diverse workloads across multiple premier cloud providers, it empowers businesses to harness the full spectrum of advantages each provider offers while effectively counterbalancing any inherent limitations. </p><br>
        <p>This dynamic multi-cloud hosting approach stands as a testament to our commitment to innovation and client-centric solutions. It's a strategy designed to amplify the operational strengths of each cloud provider, allowing enterprises to capitalize on a finely tuned ecosystem that enhances their operational efficiency. </p><br>
        <p>In the pursuit of technological excellence, Pi Multi Cloud casts a wide net of services and features, thus providing clients with an expansive toolkit to craft their cloud environment precisely as per their requirements. This abundance translates into augmented flexibility and scalability, two attributes that have become paramount in navigating the fluid landscape of modern business. </p><br>
        <p>At the heart of the Pi Multi Cloud computing paradigm lie several integral elements, each meticulously integrated to bolster our clients' capabilities in today's dynamic business landscape. The fusion of cutting-edge technology, strategic vision, and unwavering commitment to excellence creates an environment where businesses can not only thrive but also pioneer new horizons of success. </p><br>
        <p>In the ever-changing realm of cloud technology, Pi emerges not just as a solution but as a strategyâ€”one that is primed to propel enterprises forward by harnessing the collective power of multiple cloud providers. It's a paradigm shift that redefines the boundaries of what's possible, equipping businesses with a competitive edge that is as adaptable as it is resilient. </p>

    </div>
    <div class="hb-journey">
        <div class="container">
            <div class="hb-journeyCont icons-1">
                <h3 class="text-center">Why Choose Pi Public Cloud Services? </h3>
                <ul class="hb-journeyList list-inline">
                    <li class="hb-ListJouney box1">
                        <div class="hb-Jimg">
                            <!--<p>
                            <img src="./pi-cloud/images/homepage/1.png" alt="onesize">
                        </p>-->
                        </div>
                        <div class="hb-jCont">
                            <h4>Global Reach and Accessibility</h4>
                            <p>Our public cloud services offer a vast global network of data centers, ensuring low-latency access to your applications and data from anywhere in the world. Enjoy the freedom to reach a broader audience and expand your business on a global scale. </p>
                        </div>
                    </li>
                    <li class="hb-ListJouney box2">
                        <div class="hb-Jimg">
                            <!--<p>
                            <img src="./pi-cloud/images/homepage/2.png" alt="migration">
                        </p>-->
                        </div>
                        <div class="hb-jCont">
                            <h4>Unmatched Scalability </h4>
                            <p>Experience unparalleled scalability with our public cloud solutions. As your business grows, our cloud infrastructure seamlessly adapts to handle increasing workloads and user demands, allowing you to stay agile and responsive. </p>
                        </div>
                    </li>
                    <li class="hb-ListJouney">
                        <div class="hb-Jimg">
                            <!--<p>
                            <img src="./pi-cloud/images/homepage/3.png" alt="selfService">
                        </p>-->
                        </div>
                        <div class="hb-jCont">
                            <h4>Cost-Efficiency</h4>
                            <p>Eliminate the need for expensive hardware and infrastructure investments. With our pay-as-you-go pricing model, you only pay for the resources you consume, optimizing your IT budget and reducing operational costs. </p>
                        </div>
                    </li>
                    <li class="hb-ListJouney">
                        <div class="hb-Jimg">
                            <!--<p>
                            <img src="./pi-cloud/images/homepage/4.png" alt="futureReady">
                        </p>-->
                        </div>
                        <div class="hb-jCont">
                            <h4>High Performance</h4>
                            <p>Enjoy blazing-fast performance and reliability with our state-of-the-art public cloud infrastructure. Our cutting-edge technologies and robust data centers ensure that your applications and services perform at their best. </p>
                        </div>
                    </li>
                    <li class="hb-ListJouney" style="margin:0 auto; display:block">
                        <div class="hb-Jimg">
                            <!--<p>
                            <img src="./pi-cloud/images/homepage/4.png" alt="futureReady">
                        </p>-->
                        </div>
                        <div class="hb-jCont">
                            <h4 style="text-align:center">Security and Compliance</h4>
                            <p style="text-align:center;">Security is our top priority. Rest assured that your data and applications are protected by multiple layers of security controls, encryption, and regular security updates. We comply with industry standards and regulations to keep your data safe. </p>
                        </div>
                    </li>
                    <!--<li class="hb-ListJouney">
                    <div class="hb-Jimg">
                       
                    </div>
                    <div class="hb-jCont">
                        <h4>Personalized Cloud Consulting and Support</h4>
                        <p>Our cloud connoisseurs stand by, ready to offer tailored guidance and consistent support for your cloud expedition. Expert assistance is just a step away.  </p>
                    </div>
                </li>-->


                </ul>
            </div>
        </div>
    </div>

    <div class="hb-journey">
        <div class="container">
            <div class="hb-journeyCont icons-2">
                <h3 class="text-center">Pi Public Cloud Services Offerings:</h3>
                <ul class="hb-journeyList list-inline">
                    <li class="hb-ListJouney">
                        <div class="hb-Jimg">
                            <!--<p>
                            <img src="./pi-cloud/images/homepage/1.png" alt="onesize">
                        </p>-->
                        </div>
                        <div class="hb-jCont">
                            <h4>Public Cloud Infrastructure</h4>
                            <p>Leverage our secure and scalable public cloud infrastructure to deploy and manage your applications, websites, and databases. Experience the flexibility and power of the cloud with a wide range of compute, storage, and networking options. </p>
                        </div>
                    </li>
                    <li class="hb-ListJouney">
                        <div class="hb-Jimg">
                            <!--<p>
                            <img src="./pi-cloud/images/homepage/2.png" alt="migration">
                        </p>-->
                        </div>
                        <div class="hb-jCont">
                            <h4>Public Cloud Storage </h4>
                            <p>Store, backup, and share your data with ease using our reliable public cloud storage solutions. Enjoy high availability, data redundancy, and automatic backups to safeguard your critical information. </p>
                        </div>
                    </li>
                    <li class="hb-ListJouney">
                        <div class="hb-Jimg">
                            <!--<p>
                            <img src="./pi-cloud/images/homepage/3.png" alt="selfService">
                        </p>-->
                        </div>
                        <div class="hb-jCont">
                            <h4>Public Cloud Computing</h4>
                            <p>Take advantage of our on-demand computing resources to run applications and workloads without the need for physical servers. Our public cloud computing services offer flexibility and cost-effectiveness for your business. </p>
                        </div>
                    </li>
                    <li class="hb-ListJouney">
                        <div class="hb-Jimg">
                            <!--<p>
                            <img src="./pi-cloud/images/homepage/4.png" alt="futureReady">
                        </p>-->
                        </div>
                        <div class="hb-jCont">
                            <h4>Public Cloud Analytics</h4>
                            <p>Unlock valuable insights from your data with our public cloud analytics services. Analyze large datasets, gain actionable intelligence, and make data-driven decisions to fuel your business growth. </p>
                        </div>
                    </li>
                    <li class="hb-ListJouney">
                        <div class="hb-Jimg">
                            <!--<p>
                            <img src="./pi-cloud/images/homepage/4.png" alt="futureReady">
                        </p>-->
                        </div>
                        <div class="hb-jCont">
                            <h4>Public Cloud AI and Machine Learning</h4>
                            <p> Embrace the power of artificial intelligence and machine learning with our public cloud AI services. Build smart applications, automate processes, and enhance user experiences using cutting-edge AI technologies. </p>
                        </div>
                    </li>
                    <li class="hb-ListJouney">
                        <div class="hb-Jimg">

                        </div>
                        <div class="hb-jCont">
                            <h4>Public Cloud Security and Compliance</h4>
                            <p>Trust in our robust security measures to protect your data and applications. Our public cloud security services include identity and access management, threat detection, and compliance support. </p>
                        </div>
                    </li>


                </ul>
            </div>
        </div>
    </div>
    <div class="hb-productHead text-center">
        <p>Experience the limitless possibilities of the cloud with Pi Public Cloud Services. Let our cloud experts guide you on your digital transformation journey. Contact us today to discover how our public cloud solutions can accelerate your business success. Unleash innovation and agility with the power of the public cloud! </p>
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
                    <p style="text-align:center;">At Pi Cloud, we understand the importance of cost optimization and competitive pricing. We work closely with our customers to ensure that they are getting the best value for their investment without sacrificing the quality of our services.</p>
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
                    <button class="skltbs-tab tab-link" data-tab="tab-3">Why Multi-Cloud On Pi Cloud</button>
                </li>

            </ul>
            <div class="skltbs-panel-group">
                <div class="skltbs-panel current " id="tab-1">
                    <ul class="hb-productSec list-inline">
                        <div class="hb-leftCont hb_ppCont">
                            <p>Pi Cloud Managed Multi-Cloud Services offer businesses the flexibility to choose from multiple cloud providers, including AWS, Azure, Google Cloud, and Oracle, while ensuring seamless integration and efficient management of all cloud services.</p>
                            <p>Our managed multi-cloud services are designed to meet the growing demand for scalable, secure, and high-performance cloud computing solutions. Our team of cloud specialists has extensive expertise in designing, implementing, and managing multi-cloud environments, helping businesses optimize their cloud infrastructure to achieve their desired outcomes.</p>
                            <p>Our managed multi-cloud services offer businesses the peace of mind they need to focus on their core activities while we manage their cloud environment. If you're looking for a reliable and efficiently managed multi-cloud service provider, Pi Cloud is the perfect partner for your business.</p><br>
                            <!--<span>
                          <img src="images/product-images/Managed-multi-cloud-system-new.png" alt="multi-cloud-ecosystem" class="multi-cloud-ecosystem">
                          
                          	</span>-->
                            <div class="owl-carousel" id="cloudinfo">
                                <div class="item" style="">

                                    <a href="https://pi-cloud.in/multi-cloud#cloudinfo"> <img src="./pi-cloud/images/product-images/AWS28.png" alt="certfication" style="max-width:100%;"></a>

                                </div>
                                <div class="item" style="">

                                    <a href="https://pi-cloud.in/multi-cloud#cloudinfo"><img src="dashboard/uploads/services/8-infographics-2-latest.png" alt="certfication" style="max-width:100%;"></a>

                                </div>
                                <div class="item" style="">
                                    <a href="https://pi-cloud.in/multi-cloud#cloudinfo">
                                        <img src="./pi-cloud/images/product-images/Google28.png" alt="certfication" style="max-width:100%;margin-top:70px;">
                                    </a>
                                </div>

                                <div class="item" style="">
                                    <a href="https://pi-cloud.in/multi-cloud#cloudinfo">
                                        <img src="./pi-cloud/images/product-images/Oracle28.png" alt="certfication" style="max-width:100%;">
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
                            <p>The Pi Cloud Multi-Cloud Ecosystem simplifies the management of cloud environments by providing a centralized view of your workloads across multiple clouds. This platform allows you to monitor performance and optimize your environment for cost control.</p>

                            <p>By streamlining cloud management and reducing complexity, Pi Cloud enhances operational efficiency, freeing up valuable resources for innovation and growth. With a unified view of your cloud environments, you can focus on achieving your business objectives without getting bogged down in day-to-day tasks.</p>
                            <p>Whether you're migrating to the cloud, optimizing your existing cloud infrastructure, or managing multiple clouds, Pi Cloud provides the tools and unified view you need to succeed in today's digital landscape. With Harbour 1Â®, you can simplify cloud management, improve ROI, and achieve business objectives with ease.</p>
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


                            <p>In today's fast-paced business landscape, it's critical for organizations to be able to quickly adapt and scale to keep up with changing market demands. That's where Pi Cloud Multi-Cloud Ecosystem comes in: by providing a unified view for workload management across various cloud environments, businesses can streamline their operations, improve data sovereignty and compliance, and optimize their costs. </p>
                            <p>With Pi Cloud's platform-agnostic approach, businesses have the flexibility to choose the best cloud environment for each workload while still maintaining complete control and visibility. The seamless integration of private and public clouds means there's no need to sacrifice security or privacy for affordability.</p>
                            <p>The Pi Cloud Multi-Cloud Ecosystem offers a comprehensive platform for efficient workload management, giving businesses the tools they need to stay agile and competitive in today's digital age. Choose pi cloud and experience the benefits of a single pane of glass view for your business.</p>

                            <span>
                                <img src="./pi-cloud/images/product-images/Managed-Services-Models-c.png" alt="workspace">
                            </span>
                        </div>

                    </ul>


                </div>

                <div id="servicemodel"></div>
            </div>
            <br><br><br>
            <br><br><br>



        </div>

    </div>


    <div class="hb-certication">
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
                                    <img src="./<?= $config['subFolderName'] ?>/images/logo/18.png" alt="uptime">
                                    <img src="./<?= $config['subFolderName'] ?>/images/product-images/azure28.png" alt="A-La-Carte-Model-4" style="width:100px">


                                </span>

                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="hb-boxCont text-center" style="min-height:auto">
                            <a href="javascript:void(0)" style="cursor: auto;">
                                <span>
                                    <img src="./<?= $config['subFolderName'] ?>/images/logo/18.png" alt="uptime">
                                    <img src="./pi-cloud/images/product-images/Google212.png" alt="A-La-Carte-Model-3" style="width:100px">


                                </span>

                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="hb-boxCont text-center" style="min-height:auto">
                            <a href="javascript:void(0)" style="cursor: auto;">
                                <span>
                                    <img src="./<?= $config['subFolderName'] ?>/images/logo/18.png" alt="uptime">
                                    <img src="./pi-cloud/images/product-images/AES212.png" alt="A-La-Carte-Model-1" style="width:100px">

                                </span>

                            </a>
                        </div>
                    </li>



                </ul>
            </div>
        </div>
    </div>

    <a href="images/Multi-Cloud-Brochure.pdf" class="sch-your" target="_blank">
        <ul class="hb-productSec list-inline appoinment stick">
            <li>
                <div class="hb-leftCont hb_ppCont">
                    <h2>Download Brochure</h2>
                </div>
            </li>

        </ul>
    </a>



    </div>


</section>
<?php
include_once('includes/footer.php');
?>


<!-- <?php include('php/footer.php'); ?> -->

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js'></script>
<script src='./pi-cloud/js/index.js'></script>
<script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>

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