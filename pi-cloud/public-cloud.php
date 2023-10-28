<?php
include_once('includes/header.php');

?>

<style>
    .product {
        /* max-width: 1365px; */
        max-width: 1453px;
        padding: 30px 0;
    }

    .hb-productHead {
        max-width: 1000px;
        margin: 0 auto;
    }

    .box {
        display: flex;
        grid-template-columns: auto auto auto;
        gap: 20px;
        padding: 20px 0;
        justify-content: center;
        margin: 10px 0;
    }

    .jCont h4 {
        font-size: 19px;
        min-height: 50px;
        color: #76b543;
    }

    .jCont {
        box-shadow: 0px 0px 6px 0px grey;
        padding: 25px 8px;
        text-align: center;
    }

    .jCont:hover {
        box-shadow: 0px 0px 6px 0px #223f97;
        transform: scale(1.05);
        transition: all 0.5s ease-in-out;
    }

    .jCont img {
        width: 60px;
        height: auto;
        margin: 15px 0;
    }

    .jCont p {
        font-size: 15px;
    }

    .hb-featuresList>li {
        border-top: 5px solid #223f97 !important;
    }

    .skltbs-tab-item.current,
    .skltbs-tab-item.current,
    .skltbs-tab-item.current:after,
    .skltbs-tab-item.current:before {
        background-color: #76b543 !important;
    }

    .skltbs-tab-item:hover,
    .skltbs-tab-item:hover:after,
    .skltbs-tab-item:hover:before {
        background-color: #76b543 !important;
    }

    .skltbs-tab-group {
        border-bottom: solid #216733 !important;
    }

    .hb-productHead {
        max-width: 85%;
        margin: 0 auto;
        text-align: justify;
    }

    .hb-productHead>.main-text {
        font-size: 19px !important;
        font-weight: bold;
        text-align: center;
    }

    .hb-block2 {
        display: block;
    }

    .hb-block1 {
        display: none !important;
    }

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

    .hb-childProducts {
        padding-top: 0 !important;
    }

    .appoinment {
        background-color: #223f97 !important;
    }

    .hb-productSec>li {
        margin: 10px auto !important;
    }

    /*.sch-your {
    width: 400px !important;
} */

    .sch-your {
        width: 180px !important;
    }

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

    @media (max-width: 450px) {
        .box {
            display: block;
        }

        .jCont {
            margin-top: 10px;
        }

        .jCont:hover {
            box-shadow: 0px 0px 6px 0px #223f97;
            transform: scale(1);
        }

        .owl-dots {
            top: -10px;
        }
    }

    .jCont2 h4 {
        color: #223f97;
    }

    .skltbs-tab-item {
        background-color: #223f97 !important;
    }

    .skltbs-tab-item:after,
    .skltbs-tab-item:before {
        background-color: #223f97 !important;
    }

    .skltbs-tab-item>button {
        color: #fff !important;
    }

    .owl-dot>span {
        background-color: #223f97 !important;
    }

    .hb-CerSetion>h4 {
        margin-top: 30px !important;
    }

    .owl-dot.active>span {
        opacity: 1;
        background-color: #76b543 !important;
    }

    .owl-dot>span {
        background-color: #223f97 !important;
        opacity: 1 !important;
    }

    .slick-prev:before,
    .slick-next:before {
        color: black !important;
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


<div class="container">
</div>
<br>
<h3 class="text-center" style="font-size: 28px; margin: 20px 0;">Why Choose <span style="color: #76b543;">Pi Public Cloud Services</span>?</h3>

<div class="hb-productHead">
    <p>Pi Multi Cloud, the flagship offering from Pi DATACENTERSÂ®, presents a distinctive proposition to enterprises seeking an optimized cloud hosting strategy. By seamlessly orchestrating diverse workloads across multiple premier cloud providers, it empowers businesses to harness the full spectrum of advantages each provider offers while effectively counterbalancing any inherent limitations.
        This dynamic multi-cloud hosting approach stands as a testament to our commitment to innovation and client-centric solutions. It's a strategy designed to amplify the operational strengths of each cloud provider, allowing enterprises to capitalize on a finely tuned ecosystem that enhances their operational efficiency. </p><br>

    <p>In the pursuit of technological excellence, Pi Multi Cloud casts a wide net of services and features, thus providing clients with an expansive toolkit to craft their cloud environment precisely as per their requirements. This abundance translates into augmented flexibility and scalability, two attributes that have become paramount in navigating the fluid landscape of modern business.
        At the heart of the Pi Multi Cloud computing paradigm lie several integral elements, each meticulously integrated to bolster our clients' capabilities in today's dynamic business landscape. The fusion of cutting-edge technology, strategic vision, and unwavering commitment to excellence creates an environment where businesses can not only thrive but also pioneer new horizons of success.
        In the ever-changing realm of cloud technology, Pi emerges not just as a solution but as a strategyâ€”one that is primed to propel enterprises forward by harnessing the collective power of multiple cloud providers. It's a paradigm shift that redefines the boundaries of what's possible, equipping businesses with a competitive edge that is as adaptable as it is resilient. </p>

</div>


<div class="container product">
    <div class="row">
        <!-- <h3 class="text-center" style="font-size: 28px; margin: 20px 0;">Why Choose Pi Public Cloud Services? </h3> -->

        <div class="box">
            <div class="jCont col-md-2">
                <h4>Global Reach and Accessibility</h4>
                <img src="../images/public-cloud-icons/GRA.svg">
                <p>Our public cloud services offer a vast global network of data centers, ensuring low-latency access to your applications and data from anywhere in the world. Enjoy the freedom to reach a broader audience and expand your business on a global scale. </p>
            </div>
            <div class="jCont jCont2 col-md-2">
                <h4>Unmatched Scalability </h4>
                <img src="../images/public-cloud-icons/US.svg">
                <p>Experience unparalleled scalability with our public cloud solutions. As your business grows, our cloud infrastructure seamlessly adapts to handle increasing workloads and user demands, allowing you to stay agile and responsive. </p>
            </div>
            <div class="jCont col-md-2">
                <h4>Cost-Efficiency</h4>
                <img src="../images/public-cloud-icons/CE.svg">
                <p>Eliminate the need for expensive hardware and infrastructure investments. With our pay-as-you-go pricing model, you only pay for the resources you consume, optimizing your IT budget and reducing operational costs. </p>
            </div>
            <div class="jCont jCont2 col-md-2">
                <h4>High Performance</h4>
                <img src="../images/public-cloud-icons/HP.svg">
                <p>Enjoy blazing-fast performance and reliability with our state-of-the-art public cloud infrastructure. Our cutting-edge technologies and robust data centers ensure that your applications and services perform at their best. </p>
            </div>
            <div class="jCont col-md-2">
                <h4>Security and Compliance</h4>
                <img src="../images/public-cloud-icons/SAC.svg">
                <p>Security is our top priority. Rest assured that your data and applications are protected by multiple layers of security controls, encryption, and regular security updates. We comply with industry standards and regulations to keep your data safe. </p>
            </div>
        </div>
    </div>

</div>







<div class="container product">
    <div class="row">
        <h3 class="text-center" style="font-size: 28px; margin: 20px 0;">Service <span style="color: #76b543;">Offerings</span> </h3>

        <div class="box">
            <div class="jCont col-sm-2">
                <h4>Infrastructure</h4>
                <img src="../images/public-cloud-icons/PCI-2.svg">
                <p>Leverage our secure and scalable public cloud infrastructure to deploy and manage your applications, websites, and databases. Experience the flexibility and power of the cloud with a wide range of compute, storage, and networking options. </p>
            </div>
            <div class="jCont jCont2 col-sm-2">
                <h4>Storage </h4>
                <img src="../images/public-cloud-icons/PCS.svg">
                <p>Store, backup, and share your data with ease using our reliable public cloud storage solutions. Enjoy high availability, data redundancy, and automatic backups to safeguard your critical information. </p>
            </div>
            <div class="jCont col-sm-2">
                <h4>Computing</h4>
                <img src="../images/public-cloud-icons/PCC.svg">
                <p>Take advantage of our on-demand computing resources to run applications and workloads without the need for physical servers. Our public cloud computing services offer flexibility and cost-effectiveness for your business. </p>
            </div>
            <div class="jCont jCont2 col-sm-2">

                <h4>Analytics</h4>
                <img src="../images/public-cloud-icons/PCA.svg">
                <p>Unlock valuable insights from your data with our public cloud analytics services. Analyze large datasets, gain actionable intelligence, and make data-driven decisions to fuel your business growth. </p>
            </div>
            <div class="jCont col-sm-2">
                <h4>AI and Machine Learning</h4>
                <img src="../images/public-cloud-icons/PC-AI-ML (1).svg">
                <p> Embrace the power of artificial intelligence and machine learning with our public cloud AI services. Build smart applications, automate processes, and enhance user experiences using cutting-edge AI technologies. </p>
            </div>
            <div class="jCont jCont2 col-sm-2">
                <h4>Security and Compliance</h4>
                <img src="../images/public-cloud-icons/PCS-C.svg">
                <p>Trust in our robust security measures to protect your data and applications. Our public cloud security services include identity and access management, threat detection, and compliance support. </p>
            </div>

        </div>
    </div>

</div>


<div class="hb-productHead text-center">
    <p class="main-text">Experience the limitless possibilities of the cloud with Pi Public Cloud Services. Let our cloud experts guide you on your digital transformation journey.</p>
</div>
<div class="hb-btn_cl" style="text-align: center; margin-top: 20px;"><a href="images/new-multi-cloud-brochure-2.pdf" class="global-button" target="_blank">
        Download Brochure
    </a>

</div>
<div class="hb-features">
    <h3 class="text-center">Key <span style="color: #76b543;">Features</span></h3>
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

<div class="hb-btn_cl" style="text-align: center; margin-top: 20px;"><a href="contact-us.php" class="global-button">Contact Us</a>
    <!-- <span><a href="images/Multi-Cloud-Brochure.pdf" class="sch-your global-button" target="_blank">
                Download Brochure
    </a></span> -->
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
                <button class="skltbs-tab tab-link" data-tab="tab-3">Why Multi-Cloud @Pi</button>
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
                                    <img src="./pi-cloud/images/product-images/Google28.png" alt="certfication" style="max-width:100%;">
                                </a>
                            </div>

                            <div class="item" style="">
                                <a href="https://pi-cloud.in/multi-cloud#cloudinfo">
                                    <img src="./pi-cloud/images/product-images/Oracle28.png" alt="certfication" style="max-width:100%;">
                                </a>
                            </div>

                            <div class="item" style="">
                                <a href="https://pi-cloud.in/multi-cloud#cloudinfo">
                                    <img src="./pi-cloud/images/product-images/Azure28.png" alt="certfication" style="max-width:100%;">
                                </a>
                            </div>





                        </div>

                </ul>

            </div>
            <div class="skltbs-panel" id="tab-2">
                <ul class="hb-productSec list-inline">
                    <div class="hb-leftCont hb_ppCont">
                        <p>The Pi Multi-Cloud Ecosystem simplifies the management of cloud environments by providing a centralized view of your workloads across multiple clouds. This platform allows you to monitor performance and optimize your environment for cost control.</p>

                        <p>By streamlining cloud management and reducing complexity, it enhances operational efficiency, freeing up valuable resources for innovation and growth. With a unified view of your cloud environments, you can focus on achieving your business objectives without getting bogged down in day-to-day tasks.</p>
                        <p>Whether you're migrating to the cloud, optimizing your existing cloud infrastructure, or managing multiple clouds, it provides the tools and a unified view you need to succeed in today's digital landscape. With Pi Cloud, you can simplify cloud management, improve ROI, and achieve business objectives with ease.</p>
                        <span>
                            <!--<img src="images/product-images/containers_img.png" alt="workspace">-->
                            <img src="../pi-cloud/images/product-images/single-pane-of-glass-new.png" alt="workspace">
                        </span>
                    </div>

                </ul>


            </div>
            <div class="skltbs-panel" id="tab-3">
                <ul class="hb-productSec list-inline">
                    <div class="hb-leftCont hb_ppCont">


                        <p>In today's fast-paced business landscape, it's critical for organizations to be able to quickly adapt and scale to keep up with changing market demands. That's where Pi Multi-Cloud Ecosystem comes in: by providing a unified view for workload management across various cloud environments, businesses can streamline their operations, improve data sovereignty and compliance, and optimize their costs. </p>
                        <p>With Pi Cloud's platform-agnostic approach, businesses have the flexibility to choose the best cloud environment for each workload while still maintaining complete control and visibility. The seamless integration of private and public clouds means there's no need to sacrifice security or privacy for affordability.</p>
                        <p>The Pi Multi-Cloud Ecosystem offers a comprehensive platform for efficient workload management, giving businesses the tools they need to stay agile and competitive in today's digital age. Choose Pi Cloud and experience the benefits of a single pane of glass view for your business.</p>

                        <span>
                            <img src="../pi-cloud/images/product-images/why-multi-cloud-new.png" alt="workspace">
                        </span>
                    </div>

                </ul>


            </div>

            <!-- <div id="servicemodel"></div>
            </div> -->


        </div>

    </div>


    <div class="hb-certication">
        <div class="container">
            <div class="hb-CerSetion">
                <h4 class="text-center">Technology <span style="color: #76b543;">Partners</span></h4>

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
                                    <!--  <img src="./<?= $config['subFolderName'] ?>/images/logo/18.png" alt="uptime"> -->
                                    <img src="./<?= $config['subFolderName'] ?>/images/product-images/azure28.png" alt="A-La-Carte-Model-4" style="width: 85px;">


                                </span>

                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="hb-boxCont text-center" style="min-height:auto">
                            <a href="javascript:void(0)" style="cursor: auto;">
                                <span>
                                    <!--  <img src="./<?= $config['subFolderName'] ?>/images/logo/18.png" alt="uptime">  -->

                                    <img src="./pi-cloud/images/product-images/Google212.png" alt="A-La-Carte-Model-3" style="width: 85px;">


                                </span>

                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="hb-boxCont text-center" style="min-height:auto">
                            <a href="javascript:void(0)" style="cursor: auto;">
                                <span>
                                    <!--  <img src="./<?= $config['subFolderName'] ?>/images/logo/18.png" alt="uptime"> -->

                                    <img src="./pi-cloud/images/product-images/AES212.png" alt="A-La-Carte-Model-1" style="width: 85px;">

                                </span>

                            </a>
                        </div>
                    </li>



                </ul>
            </div>
        </div>
    </div>

    <!-- <a href="images/Multi-Cloud-Brochure.pdf" class="sch-your" target="_blank">
        <ul class="hb-productSec list-inline appoinment stick">
            <li>
                <div class="hb-leftCont hb_ppCont">
                    <h2>Download Brochure</h2>
                </div>
            </li>

        </ul>
    </a>   -->



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