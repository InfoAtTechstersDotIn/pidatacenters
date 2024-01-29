<?php
$seo_title = "Pi Data Center Solutions: Secure, Scalable, Reliable Infrastructure";
$seo_description = "Discover state-of-the-art data center solutions with Pi. Explore our secure, scalable, and reliable infrastructure designed to meet the demanding requirements of modern businesses.";
$seo_keywords = "data center, data center solutions, secure infrastructure, scalable data center, reliable infrastructure, modern businesses";
?>

<?php include('php/includes-techsters/header.php'); ?>


<style>
    body {
        font-family: 'Roboto', sans-serif !important;
    }

    .anchor-tag {
        background-color: blue;
        color: white;
        width: 100px;
        text-align: center;
        padding: 10px;
        font-size: 15px;
        border-radius: 5px;
        position: absolute;
        top: 120px;
        left: 40px;
        text-transform: uppercase;
        font-weight: bold;
    }

    .anchor-tag:hover {
        color: white;
    }

    .modal-content {
        background-color: transparent !important;
        margin: 0 auto !important;
        border: none !important;
    }

    .new-services {
        margin: 40px 0;
        padding: 0 25px;
        text-align: center;
    }

    .service-box {
        box-shadow: 0px 0px 20px grey;
        border-radius: 20px;
        padding: 30px;
        transform: scale(0.8);
    }

    .service-box:hover {
        transform: scale(1);
        transition: all 0.5s ease-in-out;
    }

    .service-box h2 {
        font-size: 28px;
        line-height: 2.5rem;
        color: #000;
        font-weight: bold;
    }

    .service-box p {
        font-size: 18px;
        text-align: center;
        padding: 15px 0;
        color: #000;
        line-height: 1.5rem;
    }

    .link-btn {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .link-btn a {
        background-color: #223f97;
        color: #fff;
        padding: 10px 15px;
        border-radius: 10px;
    }

    .link-btn a:hover {
        background-color: #76b543;
    }
</style>

<!-- main starts here -->
<div class="about-banner">
    <div class="about-banner-blk">
        <img src="images/datacenter-services.png" alt="datacenter-services" width="1920" height="210" class="datacenter-services-img">
        <h1>Data Center</h1>
    </div>
</div>

<div class="new-services">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="service-box h-100">
                    <h2>Data Center <br>Infrastructure & Services</h2>
                    <p>Embark on a data-driven journey where innovation meets precision. From groundbreaking design strategies to seamless execution, we redefine data center excellence. Explore a world where your data's potential knows no bounds.
                    </p>
                    <div class="link-btn"> <a href="datacenter-infrastructure.php">Know More</a></div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="service-box h-100">

                    <h2>
                        Colocation Services
                    </h2>
                    <p>Explore a new era in Colocation Services. From private suites tailored for high compliance to plug-and-play whitespace, we offer flexible solutions for enterprises. Whether you seek control with caged options or modular rack colocation, we are your partner in scaling seamlessly. Experience hands-and-feet support for operational ease.
                    </p>
                    <div class="link-btn"> <a href="datacenter-colocation-services.php">Know More</a></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-box h-100">
                    <h2>
                        Data Center <br>Consulting & Build
                    </h2>

                    <p>Revolutionize your data center vision with Pi's unparalleled consulting services. As architects of the world's fourth-largest Tier 4 data center, we bring in-house expertise, end-to-end support, and 8 levels of security. Elevate your project with Pi, where excellence meets innovation.</p>
                    <div class="link-btn"> <a href="datacenter-design-planning-consultancy.php">Know More</a></div>
                </div>
            </div>

        </div>

    </div>
</div>




<div class="about-locations-blk" style="margin-top: 20px;">
    <div class="container">
        <div class="about-locations-main">
            <h2>About Locations</h2>

            <div class="tabBlock">

                <div class="tab-content tabBlock-content">
                    <ul class="tabBlock-tabs nav-tabs feature-tab  border-bottom-0 d-flex flex-wrap justify-content-center" data-tabs="tabs">
                        <li class="tabBlock-tab is-active animatable fadeInUp col-4" style="cursor:pointer"> <!--flip-box-->
                            <a class="nav-link" data-toggle="tab"> <!--flip-box-inner-->
                                <div class="hide-icon1"> <!--flip-box-front-->
                                    <img src="images/green-amaravati.png" alt="dc-icon-img-1" width="80" height="80">
                                    <h3>Vijayawada</h3>
                                </div>
                                <!-- <div class="flip-box-back">
                                                                    </div> -->
                                <div class="hide-icon2 front-image">
                                    <img src="images/blue-amaravati.png" alt="dc-icon-img-1" width="80" height="80">
                                    <h3>Vijayawada</h3>
                                </div>
                            </a>
                        </li>

                        <li class="tabBlock-tab animatable fadeInUp col-4" style="cursor:pointer">
                            <a class="nav-link" data-toggle="tab">
                                <div class="hide-icon1">
                                    <img src="images/charminar-green.svg" class="hyd" alt="dc-icon-img-1" width="80" height="80">
                                    <h3>Hyderabad</h3>
                                </div>

                                <div class="hide-icon2 front-image">
                                    <img src="images/charminar-blue.svg" class="hyd" alt="dc-icon-img-1" width="80" height="80">
                                    <h3>Hyderabad</h3>
                                </div>
                            </a>
                        </li>
                        <li class="tabBlock-tab  animatable fadeInUp col-4" style="cursor:pointer">
                            <a class="nav-link" data-toggle="tab">

                                <div class="hide-icon1">
                                    <img src="images/green-kochi.png" alt="dc-icon-img-1" width="80" height="80">
                                    <h3>Kochi</h3>
                                </div>

                                <div class="hide-icon2 front-image">
                                    <img src="images/blue-kochi.png" alt="dc-icon-img-1" width="80" height="80">
                                    <h3>Kochi</h3>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="tabBlock-pane">
                        <div class="locations-cnt row">
                            <div class="locations-cnt-lt col-md-6">
                                <div class="amaravathi-dc-top">
                                    <h4>Vijayawada Data Center <span>(Vijayawada, Andhra Pradesh)</span></h4>
                                    <ul>
                                        <li>
                                            <p>Uptime Institute Tier IV Certified</p>
                                        </li>
                                        <li>
                                            <p>Built on 10 acres datacenter campus (1st and only in India)</p>
                                        </li>
                                        <li>
                                            <p>No of Racks : Upto 5000</p>
                                        </li>
                                        <li>
                                            <p>Built Up Area : 50,00,00 Sq.ft</p>
                                        </li>
                                        <li>
                                            <p>Power Capacity : Upto 60 MW (dedicated in campus substation)</p>
                                        </li>
                                        <li>
                                            <p>Security Levels : Eight Levels Of Stringent Security Layers</p>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <div class="locations-cnt-rt col-md-6">
                                <div class="features-of-amaravathi-top">
                                    <img src="images/feature.png" alt="feature" width="852" height="432">
                                </div>
                                <div class="features-of-amaravathi-btm">
                                    <h4>Salient <span style="color:#76b543;">Features</span></h4>

                                    <p>1. 2N fault tolerant modular architecture providing at least 48 hoursâ€™ power outage protection.</p>
                                    <p>2. Utility power through independent routes from dual substations</p>
                                    <p>3. Lowest power cost in the Industry</p>


                                    <a href="#modal-1">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabBlock-pane">
                        <div class="locations-cnt row">
                            <div class="locations-cnt-lt col-md-6">
                                <div class="amaravathi-dc-top">
                                    <h4 class="hyderabad">Hyderabad Data Center <span> (Financial District)</span></h4>
                                    <ul>
                                        <li>
                                            <p>Uptime Institute Tier III Design Compliant (Build To Suit)</p>
                                        </li>

                                        <li>
                                            <p>No. of Racks: 83 </p>
                                        </li>
                                        <li>
                                            <p>White Tile Area: 2,100 sq. Ft. </p>
                                        </li>
                                        <li>
                                            <p>Expandable Rack Capacity: 200 (Additional) </p>
                                        </li>
                                        <li>
                                            <p>Expandable White Tile Area: 5000 sq. Ft. (Additional Capacity) </p>
                                        </li>
                                        <li>
                                            <p>Power Capacity: 3 MW </p>
                                        </li>
                                        <li>
                                            <p>Security Levels: Four Levels of Stringent Security Layers </p>
                                        </li>
                                        <li>
                                            <p>Rated Power Density per Rack: 6 - 10 KVA </p>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <div class="locations-cnt-rt col-md-6">
                                <div class="features-of-amaravathi-top">
                                    <img src="images/hyderabad-dc-2.jpg" class="hyd-dc" alt="feature" width="852" height="432">
                                </div>
                                <div class="features-of-amaravathi-btm">
                                    <h4>Salient <span style="color:#76b543;">Features</span> </h4>

                                    <p>1. N+1 Fault Tolerant Modular Architecture provides at least 48 hours of Power Outage Protection. </p>
                                    <p>2. Utility Power through Independent Routes from Dual Substations </p>
                                    <p>3. 2N Uninterruptible UPS, DG set and Redundant Utility Power </p>
                                    <p>4. N+1 cooling system redundancy for better temperature management</p>
                                    <p>5. Global standard uptime of 99.982%</p>


                                    <a href="#modal-3">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabBlock-pane">
                        <div class="locations-cnt row">
                            <div class="locations-cnt-lt col-md-6">
                                <div class="amaravathi-dc-top">
                                    <h4 class="kdc">Kochi Data Center <span>(Kottapuram Road, Aroor)</span></h4>
                                    <ul>
                                        <li>
                                            <p>Uptime Institute Tier 3 Design Compliant</p>
                                        </li>
                                        <li>
                                            <p>No of Racks 200</p>
                                        </li>
                                        <li>
                                            <p>Built-Up Area 20,000 Sq.ft</p>
                                        </li>
                                        <li>
                                            <p>Power Capacity: 3MW
                                            </p>
                                        </li>
                                        <li>
                                            <p>Security Levels: Eight Levels Of Stringent Security Layers</p>
                                        </li>

                                    </ul>
                                </div>

                            </div>
                            <div class="locations-cnt-rt col-md-6">
                                <div class="features-of-amaravathi-top">
                                    <img src="images/kochi-img.jpg" alt="feature" width="852" height="432">
                                </div>
                                <div class="features-of-amaravathi-btm">
                                    <h4>Salient <span style="color:#76b543;">Features</span></h4>

                                    <p>1.N+1 fault-tolerant modular architecture provides at least 48 hours of power outage protection.</p>
                                    <p>2.Utility power through independent routes from dual substations</p>


                                    <a href="#modal-2">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Reach Us CTA -->
<div class="gpu_hide contact-form-cta">
    <p>
        <a id="reach-btn" data-toggle="modal" data-target="#myModal">Reach Us</a>
    </p>
</div>
<!-- Reach Us CTA Ends-->

<div class="about-data-center-infrastructure-blk dc">
    <div class="container">
        <div class="about-data-center-infrastructure-main">
            <h2> Data Center <span style="color: #7BBC42;font-weight: 500;">Infrastructure </span></h2>
            <div class="infrastructure row align-middle">

                <div class="infrastructure-rt col-md-12">
                    <img src="images/data-center-infrastructure-v3.png" alt="data-center-infrastructure-v3" width=" 986" height="751">
                </div>
            </div>

        </div>

    </div>
</div>

<div class="knowledge-hub-videos1 knowledge-galleryde">
    <div class="container">
        <div class="knowledge-hub-videos-top">
            <h2 style="color:white;text-align:center">Design Considerations</h2><br>

        </div>
        <br>
        <ul class="">
            <li>
                <ul class="row">
                    <li class="col-md-4">
                        <div class="design-con">
                            <div class="in-icon">
                                <img src="images/main-iconf.png" alt="" class="icon-css">
                            </div>
                            <div class="inner-teli242">

                                <h3 class="p-su">Data Hall</h3>
                                <p class="public111">Room Temperature :<span style="color:#7D7D7D;"> 22+/-2 deg. C</span></p>
                                <p class="public222">Relative Humidity:<span style="color:#7D7D7D;"> 50+/-10%</span></p>
                                <p class="demo-info">(controlled by de-humidifiers)</p>


                            </div>
                        </div>
                    </li>
                    <li class="col-md-4">
                        <div class="design-con">
                            <div class="in-icon">
                                <img src="images/main-iconf2.png" alt="" class="icon-css">
                            </div>
                            <div class="inner-teli242">

                                <h3 class="p-su">UPS Switch Rooms</h3>
                                <p class="public111">Room Temperature :<span style="color:#7D7D7D;"> 22+/-2 deg. C</span></p>
                                <p class="public222">Relative Humidity:<span style="color:#7D7D7D;"> 50+/-10%</span></p>



                            </div>
                        </div>
                    </li>
                    <li class="col-md-4">
                        <div class="design-con">
                            <div class="in-icon">
                                <img src="images/main-iconf3.png" alt="" class="icon-css">
                            </div>
                            <div class="inner-teli242">

                                <h3 class="p-su">Battery Room</h3>
                                <p class="public111">Room Temperature :<span style="color:#7D7D7D;"> 22+/-2 deg. C</span></p>
                                <p class="public222">Relative Humidity:<span style="color:#7D7D7D;"> 50+/-10%</span></p>



                            </div>
                        </div>
                    </li>
                </ul>

                <ul class="row sec-info">
                    <li class="col-md-2">

                    </li>
                    <li class="col-md-4">
                        <div class="design-con">
                            <div class="in-icon">
                                <img src="images/main-iconf4.png" alt="" class="icon-css">
                            </div>
                            <div class="inner-teli242">

                                <h3 class="p-su">Chilled Water (CHW)</h3><br>
                                <p class="public111">Supply Temperature :<span style="color:#7D7D7D;"> 8 deg. C</span></p>
                                <p class="public222">Return Temperature :<span style="color:#7D7D7D;"> 10 deg. C</span></p>



                            </div>
                        </div>
                    </li>
                    <li class="col-md-4">
                        <div class="design-con">
                            <div class="in-icon">
                                <img src="images/main-iconf5.png" alt="" class="icon-css">
                            </div>
                            <div class="inner-teli242">

                                <h3 class="p-su">Office & All <br>Other Air-Conditioned Rooms</h3>
                                <p class="public111">Room Temperature :<span style="color:#7D7D7D;"> 22+/-2 deg. C</span></p>
                                <p class="public222">Relative Humidity:<span style="color:#7D7D7D;"> Less than 70 deg. C</span></p>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>

<!-- RFQ CTA -->
<div class="gpu_hide contact-form-cta">
    <p>
        <a id="myBtn2" data-toggle="modal" data-target="#myModal2">Request For Quote</a>
    </p>
</div>
<!-- RFQ CTA Ends-->

<div class="our-features">
    <div class="container-fluid">
        <div class="our">
            <h2 style="text-align:center;color:black">Our <span style="color:#7BBC42">Features</span></h2><br>
        </div>
        <ul class="row">
            <li class="col-md-4">
                <div class="inner-teli244">
                    <div class="row fire">
                        <div class="col-md-4">
                            <div class="fir-icon">
                                <img src="images/icon-eye.png" class="icon-css">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="fir-icon-incor">
                                <h3>Security & Surveillance</h3>
                            </div>
                        </div>
                    </div>
                    <br>
                    <p class="paraclass1">24x7 Physical, Personnel & Vehicular Security</p>
                    <p class="paraclass1">Automated Bollards</p>
                    <p class="paraclass1">Vehicles Scanning at Main Entrance with Number & Driver's photo captured</p>
                    <p class="paraclass1">IP-based CCTV System</p>
                    <p class="paraclass1">Entire premise under Surveillance Monitoring</p>
                    <p class="paraclass1">Visitors Entry With Mandatory Photo ID</p>
                    <p class="paraclass1">Bio Authentication</p>
                    <p class="paraclass1">Full Body Scanner</p>
                    <p class="paraclass1">Baggage & Mail Scanners</p>
                    <p class="paraclass1">Mantrap</p>
                </div>

            </li>
            <li class="col-md-4">
                <div class="inner-teli244">
                    <div class="row fire">
                        <div class="col-md-4">
                            <div class="fir-icon">
                                <img src="images/fire.png" class="icon-css">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="fir-icon-incor">
                                <h3>Fire Safety/ Suppersion</h3>
                            </div>
                        </div>
                    </div>
                    <br>
                    <p class="paraclass1">VESDA and Multiple Fire Detection System</p>
                    <p class="paraclass1">Clean Agent &#8220; Novec 1230 Gas suppression &#8221;</p>


                </div>

            </li>
            <li class="col-md-4">
                <div class="inner-teli244">
                    <div class="row fire">
                        <div class="col-md-4">
                            <div class="fir-icon">
                                <img src="images/tv.png" class="icon-css">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="fir-icon-incor">
                                <h3>SCADA/DCIM</h3>
                            </div>
                        </div>
                    </div>
                    <br>
                    <p class="paraclass1">HVAC and Chiller Monitoring</p>
                    <p class="paraclass1">Energy Meter Monitoring</p>
                    <p class="paraclass1">DG Monitoring</p>
                    <p class="paraclass1">HSD Monitoring</p>
                    <p class="paraclass1">Transformer Monitoring</p>
                    <p class="paraclass1">UPS Monitoring</p>
                    <p class="paraclass1">PDU Monitoring</p>
                    <p class="paraclass1">Battery Monitoring</p>
                    <p class="paraclass1">All HVAC, Electrical, Fuel, Fire Safety and Security</p>


                </div>

            </li>
        </ul>
        <ul class="row sec-info">
            <li class="col-md-4">
                <div class="inner-teli244">
                    <div class="row fire">
                        <div class="col-md-4">
                            <div class="fir-icon">
                                <img src="images/fiber.png" class="icon-css">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="fir-icon-incor">
                                <h3>Fiber Connectivity</h3>
                            </div>
                        </div>
                    </div>
                    <br>

                    <p class="paraclass1">ISP of Choice (Carrier Neutral)</p>
                    <p class="paraclass1">TATA, Airtel, Reliance, BSNL, RailTel, IDEA</p>
                    <p class="paraclass1">Fiber Cables from redundant fiber paths into redundant "Meet Me" rooms</p>

                </div>

            </li>
            <li class="col-md-4">
                <div class="inner-teli244">
                    <div class="row fire">
                        <div class="col-md-4">
                            <div class="fir-icon">
                                <img src="images/admin.png" class="icon-css">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="fir-icon-incor">
                                <h3>Administrative</h3>
                            </div>
                        </div>
                    </div>
                    <br>
                    <p class="paraclass1">NOC</p>
                    <p class="paraclass1">SOC</p>
                    <p class="paraclass1">Dedicated Customer Seating Modules</p>
                    <p class="paraclass1">Meeting Rooms</p>
                    <p class="paraclass1">Staging Room</p>
                    <p class="paraclass1">Video Conference</p>
                    <p class="paraclass1">Storage Area</p>

                </div>

            </li>
            <li class="col-md-4">
                <div class="inner-teli244">
                    <div class="row fire">
                        <div class="col-md-4">
                            <div class="fir-icon">
                                <img src="images/other.png" class="icon-css">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="fir-icon-incor">
                                <h3>Other Critical Features</h3>
                            </div>
                        </div>
                    </div>
                    <br>
                    <p class="paraclass1">WLD (Water Leak Detection)</p>
                    <p class="paraclass1">OLD (Oil Leak Detection)</p>
                    <p class="paraclass1">Rodent Control</p>
                    <p class="paraclass1">Dust-free Zones</p>



                </div>

            </li>
        </ul>

    </div>
</div>
<div class="dc-download-brochure">
    <div class="dc-download-brochure-mian">
        <div class="dc-download-brochure-left">
            <h2>Data Center Portfolio</h2>
        </div>
        <div class="dc-download-brochure-right text-center">
            <!-- <a href="images/dc-services-portfolio.pdf" target="_blank">Download Brochure</a> -->
            <a href="images/new-data-center-services-portfolio-2.2.pdf" target="_blank">Download Brochure</a>
        </div>
    </div>
</div>
<div class="knowledge-hub-videos1 knowledge-galleryd d-none">
    <div class="container">
        <div class="knowledge-hub-videos-top">
            <h2 style="color:#414141;text-align:center"><span style="color:#7BBC42;font-weight:500;">Benefits</span> Of Our Colocation <br>Services</h2><br>

        </div>
        <br>
        <ul class="">
            <li>
                <ul class="row">
                    <li class="col-md-4">
                        <div class="inner-teli241">
                            <div class="modular-architecture">
                                <img src="images/ben1.png" alt="Public Cloud To Share" class="icon-css1">
                            </div>
                            <h3 class="p-su">Modular Architecture</h3>
                            <p class="public1">Modular Private Data Suites with capacities of 60 Racks and 120 Racks each, with total facility capacity of up to 5000 Racks. Each suite is dedicated or a multi-tenant environment in itself.</p>

                        </div>
                    </li>
                    <li class="col-md-4">
                        <div class="inner-teli241">
                            <div class="modular-architecture">
                                <img src="images/icon_modular.png" alt="Public Cloud To Share" class="icon-css1">
                            </div>
                            <h3 class="p-su">SCADA/DCIM</h3>
                            <p class="public1">Pi Vijayawada is a 100% automated SCADA/DCIM facility wherein all electrical, mechanical, HVAC, fire safety, security and surveillance equipment are monitored live and can be controlled instantly with a click of a button from the Global Command Center located within the facility.</p>

                        </div>
                    </li>
                    <li class="col-md-4">
                        <div class="inner-teli241">
                            <div class="modular-architecture">
                                <img src="images/ben2.png" alt="Public Cloud To Share" class="icon-css1">
                            </div>
                            <h3 class="p-su">Uncompromised Security</h3>
                            <p class="public1">8 levels of stringent security from the main entrance to the data racks. All Data suites and NOCs are provided with biometric/physical key access and are monitored and managed by the iBMS.</p>

                        </div>
                    </li>
                </ul>
                <ul class="row">
                    <li class="col-md-4">
                        <div class="inner-teli241">
                            <div class="modular-architecture">
                                <img src="images/ben4.png" alt="Public Cloud To Share" class="icon-css1">
                            </div>
                            <h3 class="p-su">Dedicated NOCs</h3>
                            <p class="public1">Exclusive Customer-NOCs for Enterprises to manage their network, systems, applications and security in a private secured environment.</p>

                        </div>
                    </li>
                    <li class="col-md-4">
                        <div class="inner-teli241">
                            <div class="modular-architecture">
                                <img src="images/ben5.png" alt="Public Cloud To Share" class="icon-css1">
                            </div>
                            <h3 class="p-su">Rapid Deployment</h3>
                            <p class="public1">Plug-And-Play private suites enable customers to quickly colocate their IT infrastructure at Pi, rather than taking months at traditional data centers.
                            </p>

                        </div>
                    </li>
                    <li class="col-md-4">
                        <div class="inner-teli241">
                            <div class="modular-architecture">
                                <img src="images/contract.png" alt="Public Cloud To Share" class="icon-css1">
                            </div>
                            <h3 class="p-su">Low Total Cost-Of-Ownership</h3>
                            <p class="public1">Innovative data center design, better PUE, low Power cost and Flexible business model translate to significant cost savings for our customers.</p>

                        </div>
                    </li>
                </ul>



            </li>



        </ul>
    </div>
</div>






<div class="knowledge-hub-videos1 knowledge-galleryd">
    <div class="container">
        <div class="knowledge-hub-videos-top">
            <h2 style="color:#414141;text-align:center">Our Infrastructure <span style="color:#7BBC42;font-weight:500;">Partners</span></h2><br>

        </div>
        <br>
        <ul class="clients-imgs">
            <li>
                <ul class="row">
                    <li class="col-md-3 col-6">

                        <img src="images/siem.png" alt="Public Cloud To Share" class="icon-css1"><br>


                    </li>
                    <li class="col-md-3 col-6">

                        <img src="images/powerica.png" alt="Public Cloud To Share" class="icon-css1 "><br>


                    </li>
                    <li class="col-md-3 col-6">

                        <img src="images/abb.png" alt="Public Cloud To Share" class="icon-css1"><br>


                    </li>
                    <li class=" col-md-3 col-6">

                        <img src="images/sc.png" alt="Public Cloud To Share" class="icon-css1"><br>


                    </li>
                </ul>
                <ul class="row">

                    <li class="col-md-2 col-6">

                        <img src="images/delta.png" alt="Public Cloud To Share" class="icon-css2 "><br>


                    </li>
                    <li class="col-md-2 col-6">

                        <img src="images/cumm.png" alt="Public Cloud To Share" class="icon-css2 "><br>


                    </li>
                    <li class="col-md-3 col-6">

                        <img src="images/hw.png" alt="Public Cloud To Share" class="icon-css2 "><br>


                    </li>
                    <li class="col-md-3 col-6">

                        <img src="images/cuma.png" alt="Public Cloud To Share" class="icon-css2 "><br>


                    </li>
                    <li class="col-md-2 col-6">

                        <img src="images/netrack.png" alt="Public Cloud To Share" class="icon-css2 "><br>


                    </li>


                </ul>



            </li>



        </ul>
    </div>
</div>

<div class="knowledge-hub-videos1 knowledge-galleryd">
    <div class="container">
        <div class="knowledge-hub-videos-top">
            <h2 style="color:#414141;text-align:center">Our Technology <span style="color:#7BBC42;font-weight:500;">Partners</span></h2><br>

        </div>
        <br>
        <ul class="clients-imgs">
            <li>
                <ul class="row justify-content-center">
                    <li class="col-lg-2 col-6">
                        <img src="images/our-technology-partners-9.png" alt="Public Cloud To Share" class="icon-css1"><br>
                    </li>
                    <li class="col-lg-2 col-6">
                        <img src="images/Dell.png" alt="Public Cloud To Share" class="icon-css1"><br>
                    </li>
                    <li class="col-lg-2 col-6">
                        <img src="images/IBM.png" alt="Public Cloud To Share" class="icon-css1"><br>
                    </li>
                    <li class="col-lg-2 col-6">
                        <img src="images/our-technology-partners-7.png" alt="Public Cloud To Share" class="icon-css1"><br>
                    </li>
                    <li class="col-lg-2 col-6">
                        <img src="images/our-technology-partners-5.png" alt="Public Cloud To Share" class="icon-css1"><br>
                    </li>
                    <li class="col-lg-2 col-6">
                        <img src="images/our-technology-partners-8.png" alt="Public Cloud To Share" class="icon-css1"><br>
                    </li>
                    <li class="col-lg-2 col-6">
                        <img src="images/Oracle.png" alt="Public Cloud To Share" class="icon-css1"><br>
                    </li>
                    <li class="col-lg-2 col-6">
                        <img src="images/Paloalto.png" alt="Public Cloud To Share" class="icon-css1"><br>
                    </li>
                    <li class="col-lg-2 col-6">
                        <img src="images/hp.png" alt="Public Cloud To Share" class="icon-css1"><br>
                    </li>
                    <li class="col-lg-2 col-6">
                        <img src="images/our-technology-partners-12.png" alt="Public Cloud To Share" class="icon-css1"><br>
                    </li>
                    <li class="col-lg-2 col-6">
                        <img src="images/our-technology-partners-1.png" alt="our-technology-partners" class="icon-css1"><br>
                    </li>

                    <li class="col-lg-2 col-6">
                        <img src="images/our-technology-partners-14.png" alt="Public Cloud To Share" class="icon-css1"><br>
                    </li>
                    <li class="col-lg-2 col-6">
                        <img src="images/Akamai.png" alt="Public Cloud To Share" class="icon-css1"><br>
                    </li>

                    <li class="col-lg-2 col-6">
                        <img src="images/our-technology-partners-10.png" alt="Public Cloud To Share" class="icon-css1"><br>
                    </li>

                    <li class="col-lg-2 col-6">
                        <img src="images/our-technology-partners-6.png" alt="Public Cloud To Share" class="icon-css1"><br>
                    </li>
                    <li class="col-lg-2 col-6">
                        <img src="images/our-technology-partners-4.png" alt="Public Cloud To Share" class="icon-css1"><br>
                    </li>

                    <li class="col-lg-2 col-6">
                        <img src="images/our-technology-partners-2.png" alt="Public Cloud To Share" class="icon-css1"><br>
                    </li>













                    <!--<li class="col-lg-2 col-6">	
							<img src="images/our-technology-partners-13.png" alt="Public Cloud To Share" class="icon-css1"><br>
						 </li>-->

                    <li class="col-lg-2 col-6">
                        <img src="images/our-technology-partners-15.png" alt="Public Cloud To Share" class="icon-css1"><br>
                    </li>

                </ul>
    </div>
</div>


<!--footer block starts -->




<?php include('php/includes-techsters/footer.php'); ?>


<div id="modal-1" class="modalDialog">
    <div class="fill-your-details">

        <div class="modal-content">
            <div class="modal-container">
                <a href="#close" title="Close" class="close">x</a>
                <div class="modal-body">
                    <div class=" row">
                        <div class="fill-your-details-cnt features">
                            <h4>Salient <span style="color:#76b543;">Features</span></h4>
                            <p>1. 2N fault tolerant modular architecture providing at least 48 hours&#8217 power outage protection.</p>
                            <p>2. Utility power through independent routes from dual substations</p>
                            <p>3. Lowest power cost in the Industry</p>
                            <p>4. 2N UPS and generator provisioning</p>
                            <p>5. 2N cooling system redundancy for better temperature management in line with ASHARE standards</p>
                            <p>6. Global standard uptime of 99.995%</p>
                            <p>7. World class BMS, DCIM Surveillance & Vesda systems with automated monitoring & AI based analytics</p>
                            <p>8. Location Advantage : On golden quadrilateral and 1KM from Nh35, through which undersea cable from Chennai to East India is routed. Assuring network abundance</p>
                            <p>9. Heterogenous ISP interconnects through dual meet me rooms (All major ISPs operating in India)</p>
                            <p>10. Each ISP connected to the data center with 100 gig clear connectivity through dual redundant routes</p>
                            <p>11. Internet Exchange with Global CDN and Google Peering</p>
                            <p>12. Business Continuity bay areas for enterprises for zero operational disruption</p>
                            <p>13. Global command center & dedicated customer NOCs for 24x7 monitoring and support</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="modal-2" class="modalDialog">
    <div class="fill-your-details">

        <div class="modal-content">
            <div class="modal-container">
                <a href="#close" title="Close" class="close">x</a>
                <div class="modal-body">
                    <div class=" row">
                        <div class="fill-your-details-cnt features">
                            <h4>Salient <span style="color:#76b543;">Features</span></h4>
                            <p>1. N+1 fault-tolerant modular architecture provides at least 48 hours&#8217 of power outage protection.</p>
                            <p>2.Utility power through independent routes from dual substations</p>
                            <p>3. 2N ups and N+1 generator provisioning</p>
                            <p>4. N+1 cooling system redundancy for better temperature management</p>
                            <p>5. Global standard uptime of 99.982%</p>
                            <p>6. World-class DCIM , BMS, & Vesda systems for automated monitoring & analytics</p>
                            <p>7. Undersea cable landing station zone with network abundance
                            </p>
                            <p>8. Heterogenous ISP interconnects through dual meet-me rooms</p>
                            <p>9. (All major ISPs operating in India)</p>
                            <p>10. Each ISP connected to the data center with 50 gig clear connectivity through dual redundant routes
                            </p>
                            <p>11. Business Continuity bay areas for enterprises for zero operational disruption</p>
                            <p>12. Datacenter connected to both local and global command centers for seamless operation</p>
                            <!--<p>13. Global command center & dedicated customer NOCs for 24x7 monitoring and support</p>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="modal-3" class="modalDialog">
    <div class="fill-your-details">

        <div class="modal-content">
            <div class="modal-container">
                <a href="#close" title="Close" class="close">x</a>
                <div class="modal-body">
                    <div class=" row">
                        <div class="fill-your-details-cnt features">
                            <h4>Salient <span style="color:#76b543;">Features</span></h4>

                            <p>1. N+1 Fault Tolerant Modular Architecture provides at least 48 hours&#8217 Power Outage Protection. </p>
                            <p>2. Utility Power through Independent Routes from Dual Substations </p>
                            <p>3. 2N Uninterruptible UPS, DG set and Redundant Utility Power </p>
                            <p>4. N+1 cooling system redundancy for better temperature management </p>
                            <p>5. Global standard uptime of 99.95% </p>
                            <p>6. World-class DCIM, BMS, & VESDA systems for Automated Monitoring & Analytics </p>
                            <p>7. FAS, VESDA, NOVEC 1230 Fire Suppression, IBMS, CCTV, WLD & Rodent Monitoring. </p>
                            <p>8. Heterogeneous Multi Gig ISP interconnected through dual meet-me rooms (All major ISP operating in India)</p>
                            <p>9. Business Continuity Bay Areas for Enterprises for Zero Operational Disruption </p>
                            <p>10. A datacenter connected to both Local and Global Command Centers for Seamless Operation </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
    const modalBox = document.querySelector(".modal-container");
    const modalBtn = document.querySelector(".modal-btn");
    const closeBtn = document.querySelector(".close-btn");

    modalBtn.addEventListener("click", () => {
        modalBox.style = "display: block;";
    });

    closeBtn.addEventListener("click", () => {
        modalBox.style = "display: none;";
    });

    window.addEventListener("click", (e) => {
        if (e.target == modalBox) {
            modalBox.style = "display: none;";
        }
    });
</script>

</body>

</html>