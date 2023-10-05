<?php include_once('meta-head.php'); ?> 
<!DOCTYPE html>
<html lang="en">
   <head>
   <base href="/" />
      
      <title><?php echo $m_title; ?></title>
      <meta name="description" content="<?php echo $m_desc; ?>">
      <!-- <meta charset="utf-8"> -->
      <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
      <link rel="shortcut icon" type="image/x-icon" href="./images/harbour_logo.png">
       <link rel="apple-touch-icon" href="./images/harbour_logo.png">

       <meta name="keywords" content="harbour" />
      <meta name="theme-color" content="#317EFB"/>

      <!-- -->
     <meta name="robots" content="INDEX, FOLLOW">
     <link rel="canonical" href="<?php echo $meta_url; ?>">
     <meta name="geo.placename" content="Gachibowli, Hyderabad, Telangana, India">
     <meta name="geo.position" content="17.4491;78.3633">
     <meta name="geo.region" content="IN-Telangana">
     <meta name="ICBM" content="17.4491;78.3633">
     <meta property="og:locale" content="en_US">
     <meta property="og:site_name" content="pi-cloud®">
     <meta property="og:title" content="pi-cloud">
      <meta property="og:discription" content="pi-cloud">
     <meta property="og:type" content="Website">
     <meta property="og:url" content="https://www.pi-cloud.in/">
     



      <!-- font awesome cdn-->
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- Global.css is for all pages-->
      <link rel="stylesheet" type="text/css" href="css/global.css">
      <!-- index.css is for homepage only-->
      <link rel="stylesheet" type="text/css" href="css/index.css">
      <!-- products.css is for products and solutions only-->
	  <link rel="stylesheet" type="text/css" href="css/products.css">
      <!-- carousel.css is for index only-->
      <link rel="stylesheet" type="text/css" href="css/carousal.css">
      <!-- products.css is for compute, network, ... only-->
	  <link rel="stylesheet" type="text/css" href="css/productsinfo.css">
      <!-- products.css is for self services and contact us only-->
      <link rel="stylesheet" type="text/css" href="css/self-service.css">
      <!-- products.css is for proffessional services and managed services only-->
    <link rel="stylesheet" type="text/css" href="css/cloud-enabledment.css">
      <!-- products.css is for partners only-->
    <link rel="stylesheet" type="text/css" href="css/patners.css">
    <!-- products.css is for blogs case studies only-->
     <link rel="stylesheet" type="text/css" href="css/knowledgeCenter.css">

    <link rel="manifest"  href="manifest.json">


   <!-- Global site tag (gtag.js) - Google Analytics -->
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-869CH2953X"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-869CH2953X');
</script>
 -->


 <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-66937172-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-66937172-2');
</script>

      <!-- slider cdn-->
      <!-- -->
      <!-- animation cdn cdn-->

  </head>
    <body>
      <header>
         <div class="hb-headCount">
            <div class="hb-logo">
               <a href="/">
               <img src="images/harbour_logo.png"  alt="pi-cloud®">
               </a>
            </div>
            <div class="hb-navmenu ">
               <ul class="list-inline hb-navLists">
                  <li>
                     <a href="#" class="tColor hasDroparrow">Products</a>
                     <div class="hb-megaDropdown dNone">
                       <div class="hb-megaDropCont">
                          <div class="hb-listDropdown">
                             <div class="hb-listCont">
                                <ul class="list-unstyled">
                                  <li class="backtoMenu">back to menu</li>
                                   <li>
                                      <a href="/products-home">Top Picks</a>
                                      <div class="hb-inlineDropDown">
                                        <div class="hb-inlineDrpCont">
                                            <span>
                                              <a href="./products-home">
                                                 <img src="images/menu-icons/toppicks_ico.png" alt="products">
                                               </a>
                                            </span>
                                            <h2> <a href="./products-home">Top Picks</a></h2>
                                             <p>Most featured products and services on Harour1<sup>®</sup></p>
                                            
                                             
                                          <ul class="list-inline hb-ibDrpList ">
                                             <li>
                                                <h3><a href="/compute">Virtual Machines</a></h3>
                                                <p>Develop, deploy & scale your workloads in cloud</p>
                                             </li>
                                             <li>
                                                <h3><a href="/compute">Containers</a></h3>
                                                <p>Deployment, management, scaling, and networking of containers</p>
                                             </li>
                                              <li>
                                                 <h3><a href="/business-continuity">Disaster Recovery</a></h3>
                                                 <p>Keep your business running in times of Man-made or natural Disasters</p>
                                             </li>
                                              <li>
                                                <h3><a href="/sap">S4HANA</a></h3>
                                                <p>Future-ready infra for memory intensive SAP workloads </p>
                                             </li>
                                              <li>
                                                <h3><a href="/security">SOC (SIEM-enabled) </a></h3>
                                                <p>Aggregates and analyzes activity from network devices, servers etc</p>
                                             </li>
                                              <li>
                                                <h3><a href="#">pi-cloud<sup>®</sup> @ The Edge</a></h3>
                                                <p>Bring the agility and innovation to last mile</p>
                                             </li>
                                             
                                          </ul>
                                       </div>
                                      </div>
                                   </li>



                                   
                                    <li>
                                      <a href="./compute">Compute</a>
                                       <div class="hb-inlineDropDown">
                                        <div class="hb-inlineDrpCont">
                                          <span>
                                            <a href="/compute">
                                              <img src="images/menu-icons/compute_ico.png" alt="products">
                                             </a>
                                            </span>
                                            <h2> <a href="/compute">Compute</a></h2>
                                             <p>Deploy, run and scale your mission critical workloads on the go</p>
                                            
                                             
                                          <ul class="list-inline hb-ibDrpList ">
                                             <li>
                                                <h3><a href="/compute">Virtual Machines</a></h3>
                                                <p>Develop, deploy & scale your workloads in cloud</p>
                                             </li>
                                             <li>
                                                <h3><a href="/compute">Containers</a></h3>
                                                <p>Deployment, management, scaling, and networking of containers</p>
                                             </li>
                                             
                                             <li>
                                                <h3><a href="#">pi-cloud<sup>®</sup> @ The Edge</a></h3>
                                                <p>Bring the agility and innovation to last mile</p>
                                             </li>
                                          </ul>
                                       </div>
                                      </div>
                                   </li>



                                    <li>
                                      <a href="/network">Network</a>
                                     <div class="hb-inlineDropDown">
                                        <div class="hb-inlineDrpCont">
                                         <span>
                                            <a href="/network">
                                              <img src="images/menu-icons/network_ico.png" alt="products">
                                            </a>
                                            </span>
                                            <h2><a href="/network">Network</a></h2>
                                             <p>Connect, scale and  secure your enterprise networks</p>
                                            
                                             
                                          <ul class="list-inline hb-ibDrpList ">
                                            <li>
                                                <h3><a href="/network">HarbourFront (HF)</a></h3>
                                                <p>Deliver quality content anywhere and on any device</p>
                                             </li>
                                             <li>
                                                <h3><a href="/network">Load Balancing</a></h3>
                                                <p>Distribute enterprise traffic to achieve fault tolerance</p>
                                             </li>
                                             <li>
                                                <h3><a href="/network">Virtual Private Network  </a></h3>
                                                <p>Remote access & site-site VPN for your enterprise</p>
                                             </li>
                                             <li>
                                                <h3><a href="/network">SD-WAN</a></h3>
                                                <p>Software-defined approach to managing the WAN</p>
                                             </li>
                                             <li>
                                                <h3><a href="/network">MPLS</a></h3>
                                                <p>Virtual private circuit for mission critical workloads</p>
                                             </li>
                                             <li>
                                                <h3><a href="/network">Direct Connect </a></h3>
                                                <p>Dedicated route from your on -premises to pi-cloud<sup>®</sup></p>
                                             </li>
                                              <li>
                                                <h3><a href="/network">Firewall as a Service</a></h3>
                                                <p>URL filtering | IPS/IDS | DNS security | Anti-malware</p>
                                             </li>
                                             <li>
                                                <h3><a href="/network">Wifi on Cloud</a></h3>
                                                <p>Manage enterprise-grade Wi-Fi networks across sites on pi-cloud<sup>®</sup></p>
                                             </li>
                                          </ul>
                                       </div>
                                      </div>
                                   </li>



                                    <li>
                                      <a href="/storage">Storage</a>
                                       <div class="hb-inlineDropDown">
                                        <div class="hb-inlineDrpCont">
                                           <span>
                                              <a href="/storage">
                                               <img src="images/menu-icons/storage_ico.png" alt="products">
                                              </a>
                                            </span>
                                            <h2><a href="/storage">Storage</a></h2>
                                             <p>Get secure, massively scalable cloud storage for your data, apps, and workloads</p>
                                            
                                             
                                          <ul class="list-inline hb-ibDrpList ">
                                            <li>
                                                <h3><a href="/storage">Elastic Volume Service </a></h3>
                                                <p>Scalable virtual block-based storage for most of your use cases</p>
                                             </li>
                                             <li>
                                                <h3><a href="/storage">Object Storage Service</a></h3>
                                                <p>Highly reliable, and secure object storage capabilities at low cost</p>
                                             </li>
                                             <li>
                                                <h3><a href="/storage">Scalable File Service </a></h3>
                                                <p>Fully managed hosting of sharable file storage (Linux File System)</p>
                                             </li>
                                          </ul>
                                       </div>
                                      </div>
                                   </li>



                                    <li>
                                      <a href="/security"> Cyber Security</a>
                                      <div class="hb-inlineDropDown">
                                        <div class="hb-inlineDrpCont">
                                         <span>
                                            <a href="/security">
                                              <img src="images/menu-icons/cs_ico.png" alt="products">
                                            </a>
                                            </span>
                                            <h2>  <a href="/security"> Cyber Security</a></h2>
                                             <p>Multiple layers of protection spread across the workloads, networks, programs, or data</p>
                                            
                                             
                                          <ul class="list-inline hb-ibDrpList ">
                                             <li>
                                                <h3><a href="/security">Vulnerability Assessment & Penetration Testing </a></h3>
                                                <p>Exploit vulnerabilities in a system to determine the flaws</p>
                                             </li>
                                             <li>
                                                <h3><a href="/security">Firewall as a Service</a></h3>
                                                <p>URL filtering | IPS/IDS | DNS security | Anti-malware</p>
                                             </li>
                                             <li>
                                                <h3><a href="/security">Web Application Firewall</a></h3>
                                                <p>Filters, monitors, and blocks HTTP traffic to and from a web application</p>
                                             </li>
                                              <li>
                                                <h3><a href="/security">SOC (SIEM-enabled) </a></h3>
                                                <p>Aggregates and analyzes activity from network devices, servers etc</p>
                                             </li>
                                             <li>
                                                <h3><a href="/security">MicroVault & DataVault</a></h3>
                                                <p>Protect data/processes on servers with active exfiltration protection</p>
                                             </li>
                                             <li>
                                                <h3><a href="/security">Identity & Access management</a></h3>
                                                <p>Least-privileged permissions for actions across your resources</p>
                                             </li>
                                              <li>
                                                <h3><a href="/security">Anti DDoS</a></h3>
                                                <p>Mitigate from perpetrators who seek to make a systems resource unavailable</p>
                                             </li>
                                             <li>
                                                <h3><a href="/security">Antivirus</a></h3>
                                                <p>Next generation anti-malware software for your systems</p>
                                             </li>
                                          </ul>
                                       </div>
                                      </div>
                                   </li>



                                    <li>
                                      <a href="/sap">SAP on Cloud</a>
                                      <div class="hb-inlineDropDown">
                                        <div class="hb-inlineDrpCont">
                                           <span>
                                            <a href="/sap">
                                              <img src="images/menu-icons/sap_ico.png" alt="products">
                                            </a>
                                            </span>
                                            <h2> <a href="#765">SAP on Cloud</a></h2>
                                             <p>Connect cloud and on-premises infrastructure and services to provide your customers and users the best possible experience</p>
                                            
                                             
                                          <ul class="list-inline hb-ibDrpList ">
                                             <li>
                                                <h3><a href="/sap">S4HANA</a></h3>
                                                <p>Future-ready infra for memory intensive SAP workloads </p>
                                             </li>
                                             <li>
                                                <h3>Fiori</h3>
                                                <p>Equips designers and developers with a set of tools and guidelines to create apps for any platform faster than ever</p>
                                             </li>
                                             <li>
                                                <h3>VB4HANA</h3>
                                                <p>Net generation Business Warehouse(BW) on HANA</p>
                                             </li>
                                             <li>
                                                <h3>ERP Central Component (ECC)</h3>
                                                <p>ERP central component on HANA / DB2 / Oracle / ASE / MSSQL</p>
                                             </li>
                                             <li>
                                                <h3>SAP Business One on SQL / HANA DB</h3>
                                                <p>Business management software designed for small and medium-sized enterprises</p>
                                             </li>
                                             <li>
                                                <h3>Solution Manager</h3>
                                                <p>For end-to-end application lifecycle management to streamline business processes, increasing efficiency and decreasing risk</p>
                                             </li>
                                             <li>
                                                <h3>PI/PO, BI/BW, SCM, CRM, DMS</h3>
                                                <p>Our</p>
                                             </li>
                                          </ul>
                                       </div>
                                      </div>
                                   </li>





                                    <li>
                                      <a href="/business-continuity">Business Continuity</a>
                                     <div class="hb-inlineDropDown">
                                        <div class="hb-inlineDrpCont">
                                          <span>
                                             <a href="/business-continuity">
                                              <img src="images/menu-icons/bc_ico.png" alt="products">
                                             </a>
                                            </span>
                                            <h2> <a href="/business-continuity">Business Continuity</a></h2>
                                             <p>Ensure your workloads are safe from various cyber and physical threats and are up and running all the time</p>
                                            
                                             
                                          <ul class="list-inline hb-ibDrpList ">
                                              <li>
                                                 <h3><a href="/business-continuity">Disaster Recovery</a></h3>
                                                 <p>Keep your business running in times of Man-made or natural Disasters</p>
                                             </li>
                                           <li>
                                             <h3><a href="/business-continuity">Backup</a></h3>
                                             <p>Incremental backup solution to restore the original after a data loss event</p>
                                           </li>
                                           <li> 
                                             <h3><a href="/business-continuity">High Availability</a></h3>  
                                             <p>Scalable virtual block storage based on a distributed architecture</p>
                                           </li>
                                       </ul>
                                       </div>
                                      </div>
                                   </li>




                                  




                                   <li>
                                      <a href="/devops">DevOps</a>
                                     <div class="hb-inlineDropDown">
                                        <div class="hb-inlineDrpCont">
                                          <span>
                                            <a href="/devops">
                                              <img src="images/menu-icons/devops_ico.png" alt="devops">
                                            </a>
                                            </span>
                                            <h2> <a href="/devops">DevOps</a></h2>
                                             <p>Scale your compute on demand, develop and manage your containerized applications faster with integrated tools</p>
                                            
                                             
                                          <ul class="list-inline hb-ibDrpList ">
                                             <li>
                                                <h3> <a href="/devops">Virtual Machines</a></h3>
                                                <p>Scalable on demand virtual cloud servers</p>
                                             </li>
                                             <li>
                                                <h3> <a href="/devops">Containers</a></h3>
                                                <p>Easily run containerized applications or build microservices</p>
                                             </li>
                                             <li>
                                                <h3>pi-cloud<sup>®</sup> On-Premise</h3>
                                                <p>Run pi-cloud<sup>®</sup> infrastructure and services at your premises for a truly consistent hybrid experience</p>
                                             </li>
                                             <li>
                                                <h3>pi-cloud<sup>®</sup> @ The Edge (CTA)</h3>
                                                <p>Bring the agility and innovation of pi-cloud<sup>®</sup> closer  to last mile</p>
                                             </li>
                                          </ul>
                                       </div>
                                      </div>
                                   </li>



                                   <li>



                                      <a href="/endusercomputing">End user computing</a>
                                      <div class="hb-inlineDropDown">
                                        <div class="hb-inlineDrpCont">
                                           <span>
                                            <a href="/endusercomputing">
                                              <img src="images/menu-icons/euc_ico.png" alt="euc">
                                              </a>
                                            </span>
                                            <h2><a href="/endusercomputing">End user computing</a></h2>
                                             <p>Virtual desktop infrastructure & application streaming through secured access</p>
                                            
                                             
                                          <ul class="list-inline hb-ibDrpList ">
                                             <li>
                                                <h3><a href="/endusercomputing">Workspaces</a></h3>
                                                <p>Enables businesses to consolidate desktops in data center</p>
                                             </li>
                                             <li>
                                                <h3><a href="/endusercomputing">App Streaming</a></h3>
                                                <p>Stream desktop application to a browser and deliver better experience to your users</p>
                                             </li>
                                             <li>
                                                <h3><a href="/endusercomputing">Remote Access Gateway </a></h3>
                                                <p>Enterprise mobility and secure access from any device working on any network</p>
                                             </li>
                                            

                                          </ul>
                                         
                                       </div>
                                      </div>
                                   </li>
                                </ul>
                                 <div class="hb-seeAllproducts">
                                             <a href="/products-home"> see all products (50+)</a>
                                          </div>
                             </div>
                             <div class="hb-suggested">
                               <div class="hb-suggestCont">
                                  <h3>Knowledge Center</h3>
                                  <ul class="list-inline hb-blogCont">
                                     <li>
                                        <div class="hb-suggBox">
                                           <a href="/blogs">
                                              <strong>Blog</strong>
                                              <span>Read through some intriguing insights<!--  from industry pundits --> </span>
                                           </a>
                                        </div>
                                     </li>
                                      <li>
                                        <div class="hb-suggBox">
                                           <a href="/case-studies">
                                              <strong>Case Studies</strong>
                                              <span>Know, how enterprises across industry, <!-- size and locations, are innovating with pi-cloud<sup>®</sup>  --></span>
                                           </a>
                                        </div>
                                     </li>
                                     <li>
                                        <div class="hb-suggBox">
                                           <a href="#">
                                              <strong>Testimonials</strong>
                                              <span>Listen to our enterprise customers<!--  speaking about their journey with pi-cloud<sup>®</sup> --></span>
                                           </a>
                                        </div>
                                     </li>
                                     <li>
                                        <div class="hb-suggBox">
                                           <a href="/videos">
                                              <strong>Videos</strong>
                                              <span>Explore the buzz around pi-cloud<sup>®</sup></span>
                                           </a>
                                        </div>
                                     </li>
                                     <li>
                                        <div class="hb-suggBox">
                                           <a href="/news">
                                              <strong>News</strong>
                                              <span>Explore the buzz around pi-cloud<sup>®</sup></span>
                                           </a>
                                        </div>
                                     </li>
                                      
                                  </ul>
                                 <!--  <div class="hb-hambourBox">
                                      <div class="hb-suggBox">
                                           <a href="#">
                                              <strong>Training</strong>
                                              <span>Run pi-cloud infrastructure and services at your premises for a truly consistent hybrid experi</span>
                                           </a>
                                        </div>
                                  </div> -->
                               </div>
                             </div>
                          </div>
                       </div>
                     </div>





















                  </li>
                  <li>
                     <a href="#" class="tColor hasDroparrow">Industry Solutions</a>




                         <div class="hb-megaDropdown dNone">
                       <div class="hb-megaDropCont">
                          <div class="hb-listDropdown">
                             <div class="hb-listCont">
                               <ul class="list-inline hb-indDrpLists">
                                <li class="backtoMenu">back to menu</li>
                                  <li>
                                     <div class="hb-drpIndCont">
                                       <span>
                                          <a href="/solutions">
                                              <img src="images/menu-icons/bfsi_ico.png" alt="euc">
                                            </a>
                                        </span>
                                        <h3><a href="/solutions"> BFSI</a></h3>                                        
                                        <p>Cloud solutions focused on regulatory compliance, innovation & cyber security</p>
                                     </div>
                                  </li>
                                  <li>
                                     <div class="hb-drpIndCont">
                                        <span>
                                            <a href="/solutions">
                                              <img src="images/menu-icons/ecommerce_ico.png" alt="euc">
                                            </a>
                                        </span>
                                        <h3><a href="/solutions"> e-Commerce</a></h3>
                                        <p>Scalable and secured resources to beat the peak with enhanced user experience</p>
                                     </div>
                                  </li>
                                   <li>
                                     <div class="hb-drpIndCont"> 
                                       <span>
                                          <a href="/solutions">
                                              <img src="images/menu-icons/it_ico.png" alt="euc">
                                            </a>
                                        </span>
                                        <h3><a href="/solutions">IT / ITES</a></h3>
                                        <p>Accelerate the pace of innovation by incorporating cloud into your existing infra</p>
                                     </div>
                                  </li>
                                   <li>
                                     <div class="hb-drpIndCont">
                                      <span>
                                          <a href="/solutions">
                                              <img src="images/menu-icons/manufacturing_ico.png" alt="euc">
                                            </a>
                                        </span>
                                        <h3><a href="/solutions"> Manufacturing</a></h3>
                                        <p>Enable smart factories, optimize your production and achieve faster go to market</p>
                                     </div>
                                  </li>
                                   <li>
                                     <div class="hb-drpIndCont">
                                       <span>
                                          <a href="/solutions">
                                              <img src="images/menu-icons/education_ico.png" alt="euc">
                                            </a>
                                        </span>
                                        <h3><a href="/solutions"> Education</a></h3>
                                        <p>Accelerate your digital transformation with remote learning and virtual labs</p>
                                     </div>
                                  </li>
                                  <li>
                                     <div class="hb-drpIndCont">
                                       <span>
                                          <a href="/solutions">
                                              <img src="images/menu-icons/healthcare_ico.png" alt="euc">
                                            </a>
                                        </span>
                                        <h3><a href="/solutions"> Healthcare</a></h3>
                                        <p>Improve your compliance and safeguard your systems, research & customer data</p>
                                     </div>
                                  </li>
                               </ul>
                             </div>
                             <div class="hb-suggested">
                               <div class="hb-suggestCont">
                                  <h3>Knowledge Center</h3>
                                  <ul class="list-inline hb-blogCont">
                                     <li>
                                        <div class="hb-suggBox">
                                           <a href="/blogs">
                                              <strong>Blog</strong>
                                              <span>Read through some intriguing insights<!--  from industry pundits --> </span>
                                           </a>
                                        </div>
                                     </li>
                                      <li>
                                        <div class="hb-suggBox">
                                           <a href="/case-studies">
                                              <strong>Case Studies</strong>
                                              <span>Know, how enterprises across industry, <!-- size and locations, are innovating with pi-cloud<sup>®</sup>  --></span>
                                           </a>
                                        </div>
                                     </li>
                                     <li>
                                        <div class="hb-suggBox">
                                           <a href="#">
                                              <strong>Testimonials</strong>
                                              <span>Listen to our enterprise customers<!--  speaking about their journey with pi-cloud<sup>®</sup> --></span>
                                           </a>
                                        </div>
                                     </li>
                                      <li>
                                        <div class="hb-suggBox">
                                           <a href="/videos">
                                              <strong>Videos</strong>
                                              <span>Explore the buzz around pi-cloud<sup>®</sup></span>
                                           </a>
                                        </div>
                                     </li>
                                     <li>
                                        <div class="hb-suggBox">
                                           <a href="/news">
                                              <strong>News</strong>
                                              <span>Explore the buzz around pi-cloud<sup>®</sup></span>
                                           </a>
                                        </div>
                                     </li>
                                     
                                  </ul>
                                 <!--  <div class="hb-hambourBox">
                                      <div class="hb-suggBox">
                                           <a href="#">
                                              <strong>Training</strong>
                                              <span>Run pi-cloud infrastructure and services at your premises for a truly consistent hybrid experi</span>
                                           </a>
                                        </div>
                                  </div> -->
                               </div>
                             </div>
                          </div>
                       </div>
                     </div>





                  </li>
                  <li>
                     <a href="#" class="tColor hasDroparrow" >Cloud Enablement</a>


                      <div class="hb-megaDropdown ">
                       <div class="hb-megaDropCont">
                          <div class="hb-listDropdown">
                             <div class="hb-listCont">
                               <ul class="list-inline hb-indDrpLists hb-menusIm">
                                  <li class="backtoMenu">back to menu</li>
                                  <li class="mob-none">
                                     <div class="hb-drpIndCont hb-menusideImg ">
                                        <span class="hb-celo">
                                          <img src="images/menu-icons/ces_ico.png">
                                        </span>
                                      
                                        <p style="text-align: justify;">
                                          Managing your IT infrastructure comes at a cost, both in terms of hard dollars and resources. By outsourcing migrations and day-to-day operational management, enterprises  can streamline processes,  free up resources and, most importantly focus on their core business initiatives.</p>
                                     </div>
                                  </li>

                                  <li>
                                     <div class="hb-drpIndCont hb-menusideImg">
                                       
                                        <h3><a href="managed-services">Managed Services</a></h3>
                                        <p>
                                          Let us operate pi-cloud<sup>®</sup> on your behalf so that you can focus on your core business</p>
                                     </div>
                                  </li>
                                  <li class="mob-none">
                                     <div class="hb-drpIndCont hb-menusideImg " >
                                     </div>
                                  </li>
                                   <li class="hb-clto">
                                     <div class="hb-drpIndCont hb-menusideImg">
                                    
                                        <h3><a href="#">Professional Services</a></h3>
                                        <p>Accelerate your cloud strategy, migration and digital transformation with expert guidance</p>
                                     </div>
                                  </li>
                                  
                                  
                               </ul>                             </div>
                             <div class="hb-suggested">
                               <div class="hb-suggestCont">
                                  <h3>Knowledge Center</h3>
                                  <ul class="list-inline hb-blogCont">
                                     <li>
                                        <div class="hb-suggBox">
                                           <a href="/blogs">
                                              <strong>Blog</strong>
                                              <span>Read through some intriguing insights<!--  from industry pundits --> </span>
                                           </a>
                                        </div>
                                     </li>
                                      <li>
                                        <div class="hb-suggBox">
                                           <a href="/case-studies">
                                              <strong>Case Studies</strong>
                                              <span>Know, how enterprises across industry, <!-- size and locations, are innovating with pi-cloud<sup>®</sup>  --></span>
                                           </a>
                                        </div>
                                     </li>
                                     <li>
                                        <div class="hb-suggBox">
                                           <a href="#">
                                              <strong>Testimonials</strong>
                                              <span>Listen to our enterprise customers<!--  speaking about their journey with pi-cloud<sup>®</sup> --></span>
                                           </a>
                                        </div>
                                     </li>
                                     <li>
                                        <div class="hb-suggBox">
                                           <a href="/videos">
                                              <strong>Videos</strong>
                                              <span>Explore the buzz around pi-cloud<sup>®</sup></span>
                                           </a>
                                        </div>
                                     </li>
                                     <li>
                                        <div class="hb-suggBox">
                                           <a href="/news">
                                              <strong>News</strong>
                                              <span>Explore the buzz around pi-cloud<sup>®</sup></span>
                                           </a>
                                        </div>
                                     </li>
                                      
                                  </ul>
                                 <!--  <div class="hb-hambourBox">
                                      <div class="hb-suggBox">
                                           <a href="#">
                                              <strong>Training</strong>
                                              <span>Run pi-cloud infrastructure and services at your premises for a truly consistent hybrid experi</span>
                                           </a>
                                        </div>
                                  </div> -->
                               </div>
                             </div>
                          </div>
                       </div>
                     </div>

                  </li>
                  <li>
                     <a href="/pricing" class="tColor" target="_blank">Pricing</a>
                  </li>
                  <li>
                     <a href="/partners" class="tColor">Partners</a>
                  </li>
                 
                  <li>
                     <a href="https://console.piclouddns.com" rel="noopener" class="tColor" target="_blank">Self Service</a>
                  </li>    
               </ul>
               <div class="hb-slideMenuCo">
                    <div class="hb-slideCo">
                      <ul class="hb-slideInfo">
                        <li><a href="#">Avalability Zones(AZ)</a></li>
                         <li><a href="/ip-exchange/#siva">Internet Exchange</a></li>
                        <li><a href="/contact-us">Contact Us</a></li>
                        <li>
                            <a href="#" class="hb-slideArrow hb-knMob">Knowledge Center</a>
                            <ul class="hb-inDrpCo">
                              <li class="backtoMenu">back to menu</li>
                              <li><a href="./blogs">Blog</a></li>
                              <li><a href="./case-studies">Case Studies</a></li>
                              <li><a href="#">Testimonials</a></li>
                              <li><a href="./videos">Videos</a></li>
                              <li><a href="./news">News</a></li>
                            </ul>
                        </li>
                      </ul>
                     <div class="hb-socialLinks">
                     
                        <ul class="list-inline  text-center">
                        
                          <li><a href="https://www.linkedin.com/company/pidatacenters" target="_blank" rel="noreferrer"> <img src="images/menu-icons/linkedin_ico.svg" alt='linkedin'></a></li>
                          <li><a href="https://twitter.com/Pi_DATACENTERS" target="_blank" rel="noreferrer"> <img src="images/menu-icons/twitter_ico.svg" alt='twitter'></a></li>
                          <li><a href="https://www.youtube.com/channel/UCcrUri8y8maUmz3P_9uCeJg" target="_blank " rel="noreferrer"> <img src="images/menu-icons/youtube_ico.svg" alt='youtube'></a></li>
                         
                          <li><a href="#"> <img src="images/menu-icons/Instagram_ico.svg" alt='insta'></a></li>
                           <li><a href="https://web.facebook.com/pidatacenters" target="_blank" rel="noreferrer"> <img src="images/menu-icons/facebook_ico.svg" alt='facebook'></a></li>

                      </ul>
                     </div>
                     <div class="hb-slidepowerdBy text-right">
                        
                        <span><a href="https://pidatacenters.com/">
                          <img src="images/menu-icons/powerdby-logo.png" alt="pilogo">
                        </a></span> 
                     </div>
                    </div>
                  </div>
            </div>
            <div class="hb-mobi-view">
                  <p class="hb_mobile-view-btn"><i class="fa fa-bars" aria-hidden="true"></i> <i class="fa fa-times" aria-hidden="true"></i></p>
             </div>
            <div class="eg-hambur text-left">
                  <p class="hb-exploreMore mobile-view-btn hb-topss" style="font-size: 22px;cursor: pointer;"><i class="fa fa-bars har" aria-hidden="true"></i><i class="fa fa-times clo" aria-hidden="true"></i></p>
                  

            </div>   
                  </div>
      </header>
      	<!-- header section ends here -->   