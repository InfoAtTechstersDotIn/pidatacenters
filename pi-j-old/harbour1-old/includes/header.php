<?php include_once('meta-head.php'); ?>
<?php $config = require_once('config.php'); ?>

<!DOCTYPE html>
<html lang="en" >
<head>
    <base href="/"/>
    <title><?php echo $m_title; ?></title>
    <meta name="description" content="<?php echo $m_desc; ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="./<?= $config['subFolderName'] ?>/images/favidata.png">
    <link rel="apple-touch-icon" href="./<?= $config['subFolderName'] ?>/images/favidata.png">
    <meta name="keywords" content="<?php echo $m_keywords; ?>"/>
    <meta name="theme-color" content="#317EFB"/>
    <meta name="robots" content="INDEX, FOLLOW">
    <link rel="canonical" href="<?php echo $meta_url; ?>">
    <meta name="geo.placename" content="Gachibowli, Hyderabad, Telangana, India">
    <meta name="geo.position" content="17.4491;78.3633">
    <meta name="geo.region" content="IN-Telangana">
    <meta name="ICBM" content="17.4491;78.3633">
    <meta property="og:locale" content="en_US">
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
    <meta property="og:title" prefix="og: http://ogp.me/ns#" content="<?php echo $m_title; ?>">
    <meta property="og:discription" prefix="og: http://ogp.me/ns#" content="<?php echo $m_desc; ?>">
    <meta property="og:type" prefix="og: http://ogp.me/ns#" content="Website">
    <meta property="og:url" prefix="og: http://ogp.me/ns#" content="<?php echo $meta_url; ?>">
    <?php echo ($m_thumb=="") ? '<meta property="og:image" content="https://harbour1.in/images/banners/index_banner.png"/>' : '<meta property="og:image"content="https://harbour1.in/dashboard/public/imgs/'.$m_thumb.'"/>'; ?>
    <meta name="twitter:title" property="og:title" content="<?php echo $m_title; ?>"/>
    <meta name="twitter:description" property="og:discription" content="<?php echo $m_desc; ?>"/>
    <meta property="og:type" content="Website">
    <meta property="og:url" name="twitter:url" content="<?php echo $meta_url; ?>">
    <?php echo ($m_thumb=="") ? '<meta property="og:image" name="twitter:image" content="https://harbour1.in/images/banners/index_banner.png"/>' : '<meta property="og:image" name="twitter:image" content="https://harbour1.in/dashboard/public/imgs/'.$m_thumb.'"/>'; ?>
    <meta name="facebook:title" property="og:title" content="<?php echo $m_title; ?>"/>
    <meta name="facebook:description" property="og:discription" content="<?php echo $m_desc; ?>"/>
    <meta property="og:type" content="Website">
    <meta property="og:url" name="facebook:url" content="<?php echo $meta_url; ?>">
    <?php echo ($m_thumb=="") ? '<meta property="og:image" name="facebook:image" content="https://harbour1.in/images/banners/index_bannerf.png"/>' : '<meta property="og:image" name="facebook:image" content="https://harbour1.in/dashboard/public/imgs/'.$m_thumb.'"/>'; ?>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./<?= $config['subFolderName'] ?>/css/minified/darkmode.css">
    <link rel="stylesheet" type="text/css" href="./<?= $config['subFolderName'] ?>/css/minified/common.min.css?v=1.1">
    <link rel="manifest" href="manifest.json">
    <link rel="stylesheet" type="text/css" href="https://kenwheeler.github.io/slick/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="https://kenwheeler.github.io/slick/slick/slick-theme.css">

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-66937172-2"></script>
    <script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}gtag('js',new Date());gtag('config','UA-66937172-2');</script>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-MTSDVCZ');</script>
    <script>
        gtag('config', 'AW-874994481/9mjCCI6DrOoDELG2naED', {
            'phone_conversion_number': '8978517793'
        });
    </script>
    <script type="text/javascript">
        (function(c,l,a,r,i,t,y){
            c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
            t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
            y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
        })(window, document, "clarity", "script", "gjmtoumna9");
    </script>
    <style>
        .hb-logo{width:14% !important;}
        .hb-navmenu{width:76% !important;}
        @media (max-width:1920px){
            .hb-logo{width:14% !important;}
            .hb-navmenu{width:76% !important;}
        }
        @media (max-width:1350px){

            .hb-logo{width:14% !important;}
            .hb-navmenu{width:76% !important;}
            .hb-navLists>li {padding:0px 8px !important;}
        }
        @media (max-width:1250px){
            .hb-logo{width:14% !important;}
            .hb-navmenu{width:76% !important;}
            .hb-navLists>li {padding:0px 8px !important;}
        }

        @media (max-width: 1230px) and (min-width: 800px){
            .hb-navLists>li>a {
                padding:26px 0px !important;
            }
            .hb-navLists>li {padding:0px 8px !important;}
        }

    </style>
</head>
<body>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MTSDVCZ" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<header>
    <div class="hb-headCount">
        <div class="hb-logo"> <a href="/"> <img src="./<?= $config['subFolderName'] ?>/images/main-logo.png" alt="Harbour1®" class="logo-light"> <img src="./<?= $config['subFolderName'] ?>/images/dark-logo.png" alt="Harbour1®" class="logo-dark"></a></div>
        <div class="hb-navmenu ">
            <ul class="list-inline hb-navLists">
                <!--<li> <a href="/multi-cloud" class="tColor" target="_blank">Multi-Cloud</a></li>-->
                <li>
                    <a href="./<?= $config['subFolderName'] ?>/multi-cloud" class="tColor hasDroparrow">Multi-Cloud</a>
                    <div class="hb-megaDropdown dNone">
                        <div class="hb-megaDropCont">
                            <div class="hb-listDropdown">
                                <div class="hb-listCont">
                                    <ul class="list-inline hb-indDrpLists">
                                        <li class="backtoMenu">back to menu</li>
                                        <li>
                                            <div class="hb-drpIndCont">
                                                <span> <a href="./<?= $config['subFolderName'] ?>/multi-cloud#Managed"> <img src="./<?= $config['subFolderName'] ?>/images/menu-icons/MMS.png" alt="euc" style=""> </a> </span>
                                                <h3><a href="./<?= $config['subFolderName'] ?>/multi-cloud#Managed" > Managed Multi-Cloud Services</a></h3>
                                                <p>Revolutionize your cloud infrastructure with seamless integration and high-performance computing solutions.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="hb-drpIndCont">
                                                <span> <a href="./<?= $config['subFolderName'] ?>/multi-cloud#servicemodel"> <img src="./<?= $config['subFolderName'] ?>/images/menu-icons/MSM.png" alt="euc" style=""> </a> </span>
                                                <h3><a href="./<?= $config['subFolderName'] ?>/multi-cloud#servicemodel"> Managed Services Models</a></h3>
                                                <p>Maximize your business potential with our tailored managed services.</p>
                                            </div>
                                        </li>




                                    </ul>
                                </div>
                                <div class="hb-suggested">
                                    <div class="hb-suggestCont">
                                        <h3>Knowledge Center</h3>
                                        <ul class="list-inline hb-blogCont">
                                            <li>
                                                <div class="hb-suggBox"> <a href="./<?= $config['subFolderName'] ?>/blogs"> <strong>Blog</strong> <span>Read through some intriguing insights </span> </a></div>
                                            </li>
                                            <li>
                                                <div class="hb-suggBox"> <a href="./<?= $config['subFolderName'] ?>/case-studies"> <strong>Case Studies</strong> <span>Know how enterprises are gaining operational excellence with Harbour1<sup>®</sup> </span> </a></div>
                                            </li>
                                            <li>
                                                <div class="hb-suggBox"> <a href="javascript:void(0)"> <strong>Testimonials</strong> <span>Listen to our enterprise customers</span> </a></div>
                                            </li>
                                            <li>
                                                <div class="hb-suggBox"> <a href="./<?= $config['subFolderName'] ?>/videos"> <strong>Videos</strong> <span>View some engaging videos on industry trends</span> </a></div>
                                            </li>
                                            <li>
                                                <div class="hb-suggBox"> <a href="./<?= $config['subFolderName'] ?>/news"> <strong>News</strong> <span>Explore the buzz around Harbour1<sup>®</sup></span> </a></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="./<?= $config['subFolderName'] ?>/products-home" class="tColor hasDroparrow">Private Cloud Products</a>
                    <div class="hb-megaDropdown dNone">
                        <div class="hb-megaDropCont">
                            <div class="hb-listDropdown">
                                <div class="hb-listCont">
                                    <ul class="list-unstyled">
                                        <li class="backtoMenu">back to menu</li>
                                        <!--<li>
                                           <a href="/products-home">Top Picks</a>
                                           <div class="hb-inlineDropDown">
                                              <div class="hb-inlineDrpCont">
                                                 <span> <a href="./products-home"> <img src="./<?= $config['subFolderName'] ?>/images/menu-icons/toppicks_ico.png" alt="products"> </a> </span>
                                                 <h2> <a href="./products-home">Top Picks</a></h2>
                                                 <p>Most featured on Harbour 1<sup>®</sup></p>
                                                 <ul class="list-inline hb-ibDrpList ">

                                                    <li>
                                                       <h3><a href="/harbourfront-cdn">Harbour1<sup>®</sup> @ The Edge</a></h3>
                                                       <p>Bring agility and innovation to the last mile</p>
                                                    </li>
                                                     <li>
                                                       <h3><a href="/multi-cloud">Multi-Cloud</a></h3>
                                                       <p>India's first Enterprise Cloud and now a Multi-Cloud Ecosystem</p>
                                                    </li>
                                                    <li>
                                                       <h3><a href="/business-continuity">Disaster Recovery</a></h3>
                                                       <p>Keep your business running in times of natural or man-made disasters</p>
                                                    </li>
                                                    <li>
                                                       <h3><a href="/sap">SAP on Harbour 1®</a></h3>
                                                       <p>Anchor your business in the harbor of success</p>
                                                    </li>
                                                    <li>
                                                       <h3><a href="/security">Cyber Security (SIEM & XDR Enabled) </a></h3>
                                                       <p>Keeping your business safe in the cyber sea</p>
                                                    </li>
                                                    <li>
                                                       <h3><a href="/case-studies">Case Studies</a></h3>
                                                       <p>Know how enterprises are gaining operational excellence with Harbour1®</p>
                                                    </li>
                                                 </ul>
                                              </div>
                                           </div>
                                        </li>-->
                                        <li>
                                            <a href="./<?= $config['subFolderName'] ?>./compute">Compute</a>
                                            <div class="hb-inlineDropDown">
                                                <div class="hb-inlineDrpCont">
                                                    <span> <a href="./<?= $config['subFolderName'] ?>/compute"> <img src="./<?= $config['subFolderName'] ?>/images/menu-icons/compute_ico.png" alt="products"> </a> </span>
                                                    <h2> <a href="./<?= $config['subFolderName'] ?>/compute">Compute</a></h2>
                                                    <p>Deploy, run and scale your mission critical workloads on the go</p>
                                                    <ul class="list-inline hb-ibDrpList ">
                                                        <li>
                                                            <h3><a href="./<?= $config['subFolderName'] ?>/compute">Virtual Machines</a></h3>
                                                            <p>Develop, deploy & scale your workloads in cloud</p>
                                                        </li>
                                                        <li>
                                                            <h3><a href="./<?= $config['subFolderName'] ?>/compute">Containers</a></h3>
                                                            <p>Deployment, management, scaling, and networking of containers</p>
                                                        </li>
                                                        <li>
                                                            <h3><a href="#">Harbour1<sup>®</sup> @ The Edge</a></h3>
                                                            <p>Bring the agility and innovation to last mile</p>
                                                        </li>
                                                        <!--<li>
                                                          <h3><a href="https://harbour1lite.supersite2.myorderbox.com/">Public Cloud</a></h3>
                                                          <p>Enhanced Efficiency, Agility & Automation @Core For Your Projects On Cloud</p>
                                                          <p>Global Edge Cloud Presence Across 3 Continents</p>
                                                          <p>US I Europe I Asia Powered by</p>

                                                           <span> <a href="/compute"> <img src="./<?= $config['subFolderName'] ?>/images/menu-icons/pi-logo-200x201.jpg" alt="products" style="width:60px;height:60px"> </a> </span>

                                                       </li>-->
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="./<?= $config['subFolderName'] ?>/network">Network</a>
                                            <div class="hb-inlineDropDown">
                                                <div class="hb-inlineDrpCont">
                                                    <span> <a href="./<?= $config['subFolderName'] ?>/network"> <img src="./<?= $config['subFolderName'] ?>/images/menu-icons/network_ico.png" alt="products"> </a> </span>
                                                    <h2><a href="./<?= $config['subFolderName'] ?>/network">Network</a></h2>
                                                    <p>Connect, scale and secure your enterprise networks</p>
                                                    <ul class="list-inline hb-ibDrpList ">
                                                        <li>
                                                            <h3><a href="./<?= $config['subFolderName'] ?>/network">HarbourFront<sup>TM</sup>(CDN)</a></h3>
                                                            <p>Deliver quality content anywhere and on any device</p>
                                                        </li>
                                                        <li>
                                                            <h3><a href="./<?= $config['subFolderName'] ?>/network">Load Balancing</a></h3>
                                                            <p>Distribute enterprise traffic to achieve fault tolerance</p>
                                                        </li>
                                                        <li>
                                                            <h3><a href="./<?= $config['subFolderName'] ?>/network">Virtual Private Network </a></h3>
                                                            <p>Remote access & site-site VPN for your enterprise</p>
                                                        </li>
                                                        <li>
                                                            <h3><a href="./<?= $config['subFolderName'] ?>/network">SD-WAN</a></h3>
                                                            <p>Software-defined approach to managing the WAN</p>
                                                        </li>
                                                        <li>
                                                            <h3><a href="./<?= $config['subFolderName'] ?>/network">MPLS</a></h3>
                                                            <p>Virtual private circuit for mission critical workloads</p>
                                                        </li>
                                                        <li>
                                                            <h3><a href="./<?= $config['subFolderName'] ?>/network">Direct Connect </a></h3>
                                                            <p>Dedicated route from your on -premises to Harbour1<sup>®</sup></p>
                                                        </li>
                                                        <li>
                                                            <h3><a href="./<?= $config['subFolderName'] ?>/network">Firewall as a Service</a></h3>
                                                            <p>URL filtering | IPS/IDS | DNS security | Anti-malware</p>
                                                        </li>
                                                        <li>
                                                            <h3><a href="./<?= $config['subFolderName'] ?>/network">Wifi on Cloud</a></h3>
                                                            <p>Manage enterprise-grade Wi-Fi networks across sites on Harbour1<sup>®</sup></p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="./<?= $config['subFolderName'] ?>/storage">Storage</a>
                                            <div class="hb-inlineDropDown">
                                                <div class="hb-inlineDrpCont">
                                                    <span> <a href="./<?= $config['subFolderName'] ?>/storage"> <img src="./<?= $config['subFolderName'] ?>/images/menu-icons/storage_ico.png" alt="products"> </a> </span>
                                                    <h2><a href="./<?= $config['subFolderName'] ?>/storage">Storage</a></h2>
                                                    <p>Get secure, massively scalable cloud storage for your data, apps, and workloads</p>
                                                    <ul class="list-inline hb-ibDrpList ">
                                                        <li>
                                                            <h3><a href="./<?= $config['subFolderName'] ?>/storage">Elastic Volume Service </a></h3>
                                                            <p>Scalable virtual block-based storage for most of your use cases</p>
                                                        </li>
                                                        <li>
                                                            <h3><a href="./<?= $config['subFolderName'] ?>/storage">Object Storage Service</a></h3>
                                                            <p>Highly reliable, and secure object storage capabilities at low cost</p>
                                                        </li>
                                                        <li>
                                                            <h3><a href="./<?= $config['subFolderName'] ?>/storage">Scalable File Service </a></h3>
                                                            <p>Fully managed hosting of sharable file storage (Linux File System)</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="./<?= $config['subFolderName'] ?>/security"> Cyber Security</a>
                                            <div class="hb-inlineDropDown">
                                                <div class="hb-inlineDrpCont">
                                                    <span> <a href="./<?= $config['subFolderName'] ?>/security"> <img src="./<?= $config['subFolderName'] ?>/images/menu-icons/cs_ico.png" alt="products"> </a> </span>
                                                    <h2> <a href="./<?= $config['subFolderName'] ?>/security"> Cyber Security</a></h2>
                                                    <p>Multiple layers of protection spread across the workloads, networks, programs, or data</p>
                                                    <ul class="list-inline hb-ibDrpList ">
                                                        <li>
                                                            <h3><a href="./<?= $config['subFolderName'] ?>/security">Vulnerability Assessment & Penetration Testing </a></h3>
                                                            <p>Exploit vulnerabilities in a system to determine the flaws</p>
                                                        </li>
                                                        <li>
                                                            <h3><a href="./<?= $config['subFolderName'] ?>/security">Firewall as a Service</a></h3>
                                                            <p>URL filtering | IPS/IDS | DNS security | Anti-malware</p>
                                                        </li>
                                                        <li>
                                                            <h3><a href="./<?= $config['subFolderName'] ?>/security">Web Application Firewall</a></h3>
                                                            <p>Filters, monitors, and blocks HTTP traffic to and from a web application</p>
                                                        </li>
                                                        <li>
                                                            <h3><a href="./<?= $config['subFolderName'] ?>/security">SOC (SIEM-enabled) </a></h3>
                                                            <p>Aggregates and analyzes activity from network devices, servers etc</p>
                                                        </li>
                                                        <li>
                                                            <h3><a href="./<?= $config['subFolderName'] ?>/security">MicroVault & DataVault</a></h3>
                                                            <p>Protect data/processes on servers with active exfiltration protection</p>
                                                        </li>
                                                        <li>
                                                            <h3><a href="./<?= $config['subFolderName'] ?>/security">Identity & Access management</a></h3>
                                                            <p>Least-privileged permissions for actions across your resources</p>
                                                        </li>
                                                        <li>
                                                            <h3><a href="./<?= $config['subFolderName'] ?>/security">Anti-DDoS</a></h3>
                                                            <p>Mitigate from perpetrators who seek to make a systems resource unavailable</p>
                                                        </li>
                                                        <li>
                                                            <h3><a href="./<?= $config['subFolderName'] ?>/security">Anti-virus</a></h3>
                                                            <p>Next generation anti-malware software for your systems</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <!--<li>
                                           <a href="/sap">SAP on Harbour1<sup>®</sup></a>
                                           <div class="hb-inlineDropDown">
                                              <div class="hb-inlineDrpCont">
                                                 <span> <a href="/sap"> <img src="./<?= $config['subFolderName'] ?>/images/menu-icons/sap_ico.png" alt="products"> </a> </span>
                                                 <h2> <a href="#765">SAP on Harbour1<sup>®</sup></a></h2>
                                                 <p>Facilitate effective data processing and information flow across enterprises</p>
                                                 <ul class="list-inline hb-ibDrpList ">
                                                    <li>
                                                       <h3><a href="/sap">HANA</a></h3>
                                                       <p>Next generation database for your mission critical workloads</p>
                                                    </li>
                                                    <li>
                                                       <h3><a href="/sap">S4HANA</a></h3>
                                                       <p>Future-ready Enterprise Resource Planning (ERP) system</p>
                                                    </li>
                                                    <li>
                                                       <h3><a href="/sap">Fiori</a></h3>
                                                       <p>Set of tools and guidelines to create apps for any platform faster than ever</p>
                                                    </li>
                                                    <li>
                                                       <h3><a href="/sap">B4HANA</a></h3>
                                                       <p>Net generation Business Warehouse(BW) on HANA</p>
                                                    </li>
                                                    <li>
                                                       <h3><a href="/sap">ERP Central Component (ECC)</a></h3>
                                                       <p>ERP central component on HANA / DB2 / Oracle / ASE / MSSQL</p>
                                                    </li>
                                                    <li>
                                                       <h3><a href="/sap">SAP Business One</a></h3>
                                                       <p>Business management software designed for small and medium-sized enterprises</p>
                                                    </li>
                                                    <li>
                                                       <h3><a href="/sap">Solution Manager</a></h3>
                                                       <p>End-to-end application lifecycle management to streamline business processes</p>
                                                    </li>
                                                    <li>
                                                       <h3><a href="/sap">PI/PO, BI/BW, SCM, CRM, DMS</a></h3>
                                                       <p>Explore other SAP solutions on Harbour1<sup>®</sup> to transform your business</p>
                                                    </li>
                                                 </ul>
                                              </div>
                                           </div>
                                        </li>-->
                                        <li>
                                            <a href="./<?= $config['subFolderName'] ?>/business-continuity">Business Continuity</a>
                                            <div class="hb-inlineDropDown">
                                                <div class="hb-inlineDrpCont">
                                                    <span> <a href="./<?= $config['subFolderName'] ?>/business-continuity"> <img src="./<?= $config['subFolderName'] ?>/images/menu-icons/bc_ico.png" alt="products"> </a> </span>
                                                    <h2> <a href="./<?= $config['subFolderName'] ?>/business-continuity">Business Continuity</a></h2>
                                                    <p>Ensure your workloads are safe from various cyber and physical threats and are up and running all the time</p>
                                                    <ul class="list-inline hb-ibDrpList ">
                                                        <li>
                                                            <h3><a href="./<?= $config['subFolderName'] ?>/business-continuity">Disaster Recovery</a></h3>
                                                            <p>Keep your business running in times of Man-made or natural Disasters</p>
                                                        </li>
                                                        <li>
                                                            <h3><a href="./<?= $config['subFolderName'] ?>/business-continuity">Backup</a></h3>
                                                            <p>Incremental backup solution to restore the original after a data loss event</p>
                                                        </li>
                                                        <li>
                                                            <h3><a href="./<?= $config['subFolderName'] ?>/business-continuity">High Availability</a></h3>
                                                            <p>Scalable virtual block storage based on a distributed architecture</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="./<?= $config['subFolderName'] ?>/devops">DevOps</a>
                                            <div class="hb-inlineDropDown">
                                                <div class="hb-inlineDrpCont">
                                                    <span> <a href="./<?= $config['subFolderName'] ?>/devops"> <img src="./<?= $config['subFolderName'] ?>/images/menu-icons/devops_ico.png" alt="devops"> </a> </span>
                                                    <h2> <a href="./<?= $config['subFolderName'] ?>/devops">DevOps</a></h2>
                                                    <p>Cultural philosophies, practices, and tools to deliver applications and services at high velocit</p>
                                                    <ul class="list-inline hb-ibDrpList ">
                                                        <li>
                                                            <h3> <a href="./<?= $config['subFolderName'] ?>/devops">Continuous Integration</a></h3>
                                                            <p>For developers to merge and integrate their code changes into central repository, real-time</p>
                                                        </li>
                                                        <li>
                                                            <h3> <a href="./<?= $config['subFolderName'] ?>/devops">Continuous Delivery</a></h3>
                                                            <p>Code changes are automatically built, tested, and prepared for production releases</p>
                                                        </li>
                                                        <li>
                                                            <h3> <a href="./<?= $config['subFolderName'] ?>/devops">Microservices</a></h3>
                                                            <p>Design approach to build single application, as set of small services</p>
                                                        </li>
                                                        <li>
                                                            <h3> <a href="./<?= $config['subFolderName'] ?>/devops">Infrastructure as Code</a></h3>
                                                            <p>Infrastructure is provisioned and managed through code minimizing manual interventions and errors</p>
                                                        </li>
                                                        <li>
                                                            <h3> <a href="./<?= $config['subFolderName'] ?>/devops">Monitoring & Logging</a></h3>
                                                            <p>Monitor logs and metrics to track applications and infrastructure performance</p>
                                                        </li>
                                                        <li>
                                                            <h3> <a href="./<?= $config['subFolderName'] ?>/devops">Communication & Collaboration</a></h3>
                                                            <p>Bringing together the workflows and responsibilities of development and operations</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="./<?= $config['subFolderName'] ?>/endusercomputing">End User Computing</a>
                                            <div class="hb-inlineDropDown">
                                                <div class="hb-inlineDrpCont">
                                                    <span> <a href="./<?= $config['subFolderName'] ?>/endusercomputing"> <img src="./<?= $config['subFolderName'] ?>/images/menu-icons/euc_ico.png" alt="euc"> </a> </span>
                                                    <h2><a href="./<?= $config['subFolderName'] ?>/endusercomputing">End user computing</a></h2>
                                                    <p>Virtual desktop infrastructure & application streaming through secured access</p>
                                                    <ul class="list-inline hb-ibDrpList ">
                                                        <li>
                                                            <h3><a href="./<?= $config['subFolderName'] ?>/endusercomputing">Workspaces</a></h3>
                                                            <p>Enables businesses to consolidate desktops in data center</p>
                                                        </li>
                                                        <li>
                                                            <h3><a href="./<?= $config['subFolderName'] ?>/endusercomputing">App Streaming</a></h3>
                                                            <p>Stream desktop application to a browser and deliver better experience to your users</p>
                                                        </li>
                                                        <li>
                                                            <h3><a href="./<?= $config['subFolderName'] ?>/endusercomputing">Remote Access Gateway </a></h3>
                                                            <p>Enterprise mobility and secure access from any device working on any network</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="hb-seeAllproducts"> <a href="./<?= $config['subFolderName'] ?>/products-home"> see all products (50+)</a></div>
                                </div>
                                <div class="hb-suggested">
                                    <div class="hb-suggestCont">
                                        <h3>Knowledge Center</h3>
                                        <ul class="list-inline hb-blogCont">
                                            <li>
                                                <div class="hb-suggBox"> <a href="/blogs"> <strong>Blog</strong> <span>Read through some intriguing insights </span> </a></div>
                                            </li>
                                            <li>
                                                <div class="hb-suggBox"> <a href="./<?= $config['subFolderName'] ?>/case-studies"> <strong>Case Studies</strong> <span>Know how enterprises are gaining operational excellence with Harbour1<sup>®</sup></span> </a></div>
                                            </li>
                                            <li>
                                                <div class="hb-suggBox"> <a href="javascript:void(0)"> <strong>Testimonials</strong> <span>Listen to our enterprise customers</span> </a></div>
                                            </li>
                                            <li>
                                                <div class="hb-suggBox"> <a href="./<?= $config['subFolderName'] ?>/videos"> <strong>Videos</strong> <span>View some engaging videos on industry trends</span> </a></div>
                                            </li>
                                            <li>
                                                <div class="hb-suggBox"> <a href="./<?= $config['subFolderName'] ?>/news"> <strong>News</strong> <span>Explore the buzz around Harbour1<sup>®</sup></span> </a></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="javascript:void(0)" class="tColor hasDroparrow">Industry Solutions</a>
                    <div class="hb-megaDropdown dNone">
                        <div class="hb-megaDropCont">
                            <div class="hb-listDropdown">
                                <div class="hb-listCont">
                                    <ul class="list-inline hb-indDrpLists">
                                        <li class="backtoMenu">back to menu</li>
                                        <li>
                                            <div class="hb-drpIndCont">
                                                <span> <a href="./<?= $config['subFolderName'] ?>/industry-solutions"> <img src="./<?= $config['subFolderName'] ?>/images/menu-icons/bfsi_ico.png" alt="euc"> </a> </span>
                                                <h3><a href="./<?= $config['subFolderName'] ?>/industry-solutions"> BFSI</a></h3>
                                                <p>Cloud solutions focused on regulatory compliance, innovation & cyber security</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="hb-drpIndCont">
                                                <span> <a href="./<?= $config['subFolderName'] ?>/industry-solutions"> <img src="./<?= $config['subFolderName'] ?>/images/menu-icons/ecommerce_ico.png" alt="euc"> </a> </span>
                                                <h3><a href="./<?= $config['subFolderName'] ?>/industry-solutions"> e-Commerce</a></h3>
                                                <p>Scalable and secured resources to beat the peak with enhanced user experience</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="hb-drpIndCont">
                                                <span> <a href="./<?= $config['subFolderName'] ?>/solutions"> <img src="./<?= $config['subFolderName'] ?>/images/menu-icons/it_ico.png" alt="euc"> </a> </span>
                                                <h3><a href="./<?= $config['subFolderName'] ?>/industry-solutions">IT / ITES</a></h3>
                                                <p>Accelerate the pace of innovation by incorporating cloud into your existing infra</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="hb-drpIndCont">
                                                <span> <a href="./<?= $config['subFolderName'] ?>/industry-solutions"> <img src="./<?= $config['subFolderName'] ?>/images/menu-icons/manufacturing_ico.png" alt="euc"> </a> </span>
                                                <h3><a href="./<?= $config['subFolderName'] ?>/industry-solutions"> Manufacturing</a></h3>
                                                <p>Enable smart factories, optimize your production and achieve faster go to market</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="hb-drpIndCont">
                                                <span> <a href="./<?= $config['subFolderName'] ?>/industry-solutions"> <img src="./<?= $config['subFolderName'] ?>/images/menu-icons/education_ico.png" alt="euc"> </a> </span>
                                                <h3><a href="./<?= $config['subFolderName'] ?>/industry-solutions"> Education</a></h3>
                                                <p>Accelerate your digital transformation with remote learning and virtual labs</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="hb-drpIndCont">
                                                <span> <a href="./<?= $config['subFolderName'] ?>/industry-solutions"> <img src="./<?= $config['subFolderName'] ?>/images/menu-icons/healthcare_ico.png" alt="euc"> </a> </span>
                                                <h3><a href="./<?= $config['subFolderName'] ?>/industry-solutions"> Healthcare</a></h3>
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
                                                <div class="hb-suggBox"> <a href="./<?= $config['subFolderName'] ?>/blogs"> <strong>Blog</strong> <span>Read through some intriguing insights </span> </a></div>
                                            </li>
                                            <li>
                                                <div class="hb-suggBox"> <a href="./<?= $config['subFolderName'] ?>/case-studies"> <strong>Case Studies</strong> <span>Know how enterprises are gaining operational excellence with Harbour1<sup>®</sup> </span> </a></div>
                                            </li>
                                            <li>
                                                <div class="hb-suggBox"> <a href="javascript:void(0)"> <strong>Testimonials</strong> <span>Listen to our enterprise customers</span> </a></div>
                                            </li>
                                            <li>
                                                <div class="hb-suggBox"> <a href="./<?= $config['subFolderName'] ?>/videos"> <strong>Videos</strong> <span>View some engaging videos on industry trends</span> </a></div>
                                            </li>
                                            <li>
                                                <div class="hb-suggBox"> <a href="./<?= $config['subFolderName'] ?>/news"> <strong>News</strong> <span>Explore the buzz around Harbour1<sup>®</sup></span> </a></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="javascript:void(0)" class="tColor hasDroparrow" >Cloud Enablement</a>
                    <div class="hb-megaDropdown ">
                        <div class="hb-megaDropCont">
                            <div class="hb-listDropdown">
                                <div class="hb-listCont">
                                    <ul class="list-inline hb-indDrpLists hb-menusIm">
                                        <li class="backtoMenu">back to menu</li>
                                        <li class="mob-none">
                                            <div class="hb-drpIndCont hb-menusideImg ">
                                                <span class="hb-celo"> <img src="./<?= $config['subFolderName'] ?>/images/menu-icons/ces_ico.png" alt="Managed services"> </span>
                                                <p style="text-align: justify;"> Managing your IT infrastructure comes at a cost, both in terms of hard dollars and resources. By outsourcing migrations and day-to-day operational management, enterprises can streamline processes, free up resources and, most importantly focus on their core business initiatives.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="hb-drpIndCont hb-menusideImg">
                                                <span class="hb-celo"> <img src="./<?= $config['subFolderName'] ?>/images/menu-icons/ps.png" alt="Managed services"> </span>
                                                <h3><a href="./<?= $config['subFolderName'] ?>/managed-services"> Professional Services</a></h3>
                                                <p style="margin-top: 8px">Accelerate your cloud strategy, migration and digital transformation with expert guidance</p>
                                                <!-- <div class="hb-desk"> -->
                                                <span class="hb-celo" style="margin-top: 18px;"> <img src="./<?= $config['subFolderName'] ?>/images/menu-icons/ms.png" alt="Managed services"> </span>
                                                <h3 class="hb-cso"><a href="./<?= $config['subFolderName'] ?>/managed-services" style="font-size: 18px;color: #545454">Managed Services</a></h3>
                                                <p style="line-height: 22px;"> Let us operate Harbour1<sup>®</sup> on your behalf so that you can focus on your core business</p>
                                                <!-- </div> -->
                                            </div>
                                        </li>
                                        <li class="mob-none">
                                            <div class="hb-drpIndCont hb-menusideImg " ></div>
                                        </li>
                                        <li class="hb-clto">
                                            <div class="hb-drpIndCont hb-menusideImg hb-mo">
                                                <h3><a href="./<?= $config['subFolderName'] ?>/managed-services">Managed Services</a></h3>
                                                <!-- <p>Accelerate your cloud strategy, migration and digital transformation with expert guidance</p> -->
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="hb-suggested">
                                    <div class="hb-suggestCont">
                                        <h3>Knowledge Center</h3>
                                        <ul class="list-inline hb-blogCont">
                                            <li>
                                                <div class="hb-suggBox"> <a href="./<?= $config['subFolderName'] ?>/blogs"> <strong>Blog</strong> <span>Read through some intriguing insights </span> </a></div>
                                            </li>
                                            <li>
                                                <div class="hb-suggBox"> <a href="./<?= $config['subFolderName'] ?>/case-studies"> <strong>Case Studies</strong> <span>Know how enterprises are gaining operational excellence with Harbour1<sup>®</sup> </span> </a></div>
                                            </li>
                                            <li>
                                                <div class="hb-suggBox"> <a href="javascript:void(0)"> <strong>Testimonials</strong> <span>Listen to our enterprise customers</span> </a></div>
                                            </li>
                                            <li>
                                                <div class="hb-suggBox"> <a href="./<?= $config['subFolderName'] ?>/videos"> <strong>Videos</strong> <span>View some engaging videos on industry trends</span> </a></div>
                                            </li>
                                            <li>
                                                <div class="hb-suggBox"> <a href="./<?= $config['subFolderName'] ?>/news"> <strong>News</strong> <span>Explore the buzz around Harbour1<sup>®</sup></span> </a></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li> <a href="./<?= $config['subFolderName'] ?>/pricing" class="tColor" target="_blank">Private Cloud Pricing</a></li>
                <li> <a href="./<?= $config['subFolderName'] ?>/partners" class="tColor">Partners</a></li>
                <!--<li> <a href="https://console.piclouddns.com" rel="noopener" class="tColor" target="_blank">Self Service</a></li>-->
            </ul>
            <div class="hb-slideMenuCo">
                <div class="hb-slideCo">
                    <ul class="hb-slideInfo">
                        <li><a href="javascript:void(0)">Avalability Zones(AZ)</a></li>
                        <li><a href="./<?= $config['subFolderName'] ?>/ip-exchange">Internet Exchange</a></li>
                        <li>
                            <a href="javascript:void(0)" class="hb-slideArrow hb-knMob">Knowledge Center</a>
                            <ul class="hb-inDrpCo">
                                <li class="backtoMenu">back to menu</li>
                                <li><a href="./<?= $config['subFolderName'] ?>/blogs">Blog</a></li>
                                <li><a href="./<?= $config['subFolderName'] ?>/case-studies">Case Studies</a></li>
                                <li><a href="javascript:void(0)">Testimonials</a></li>
                                <li><a href="./<?= $config['subFolderName'] ?>/videos">Videos</a></li>
                                <li><a href="./<?= $config['subFolderName'] ?>/news">News</a></li>
                                <li> <a href="https://pidatacenters.com/acceptable-use-policy/" target="_blank">Acceptable Use Policy</a></li>
                            </ul>
                        </li>
                        <li> <a href="https://console.piclouddns.com"  target="_blank">Self Service</a></li>
                        <li><a href="./<?= $config['subFolderName'] ?>/contact-us">Contact Us</a></li>
                    </ul>
                    <div class="hb-socialLinks">
                        <ul class="list-inline text-center">
                            <li><a href="https://www.linkedin.com/company/harbour1%C2%AE/" target="_blank" rel="noreferrer"> <img src="./<?= $config['subFolderName'] ?>/images/menu-icons/linkedin_ico.svg" alt='linkedin'></a></li>
                            <li><a href="https://twitter.com/Pi_DATACENTERS" target="_blank" rel="noreferrer"> <img src="./<?= $config['subFolderName'] ?>/images/menu-icons/twitter_ico.svg" alt='twitter'></a></li>
                            <li><a href="https://www.youtube.com/channel/UCcrUri8y8maUmz3P_9uCeJg" target="_blank " rel="noreferrer"> <img src="./<?= $config['subFolderName'] ?>/images/menu-icons/youtube_ico.svg" alt='youtube'></a></li>
                            <li><a href="https://www.instagram.com/harbour1.in/"> <img src="./<?= $config['subFolderName'] ?>/images/menu-icons/Instagram_ico.svg" alt='insta'></a></li>
                            <li><a href="https://www.facebook.com/Harbour1-100292348760092/" target="_blank" rel="noreferrer"> <img src="./<?= $config['subFolderName'] ?>/images/menu-icons/facebook_ico.svg" alt='facebook'></a></li>
                        </ul>
                    </div>
                    <div class="hb-slidepowerdBy text-right"> <span><a href="https://pidatacenters.com/"> <img src="./<?= $config['subFolderName'] ?>/images/menu-icons/powerdby-logo.png" alt="pilogo" class="logo-light"> <img src="./<?= $config['subFolderName'] ?>/images/hpi_white.png" alt="pilogo" class="logo-dark"> </a></span></div>
                </div>
            </div>
        </div>
        <div class="hb-mobi-view">
            <div class="modeSwitch"> <label class="switch"> <input type="checkbox" onclick="darkLight()" id="checkBox" > <span class="slider"></span> </label></div>
            <p class="hb_mobile-view-btn" style="display: inline-block;vertical-align: middle;"><i class="fa fa-bars" aria-hidden="true"></i> <i class="fa fa-times" aria-hidden="true"></i></p>
        </div>
        <div class="eg-hambur text-left">
            <div class="modeSwitch"> <label class="switch"> <input type="checkbox" onclick="darkLight()" id="checkBox" > <span class="slider"></span> </label></div>
            <p class="hb-exploreMore mobile-view-btn hb-topss" style="font-size: 22px;cursor: pointer;display: inline-block;vertical-align: middle;"><i class="fa fa-bars har" aria-hidden="true"></i><i class="fa fa-times clo" aria-hidden="true"></i></p>
        </div>
    </div>
</header>
<style type="text/css">.modeSwitch {
        display: inline-block;
        padding-right: 24px;
        vertical-align: middle
    }
    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
        border-radius: 20px
    }
    .switch input {
        opacity: 0;
        width: 0;
        height: 0
    }
    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        border-radius: 25px;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s
    }
    .slider:before {
        position: absolute;
        content: '';
        background-image: url(https://res.cloudinary.com/siva5456/image/upload/v1618373990/moon.png);
        height: 24px;
        width: 24px;
        left: 4px;
        background-size: contain;
        background-repeat: no-repeat;
        bottom: 4px;
        -webkit-transition: .4s;
        transition: .4s
    }
    input:checked+.slider {
        background-color: #2196F3
    }
    input:focus+.slider {
        box-shadow: 0 0 1px #2196F3
    }
    input:checked+.slider:before  ,   input:checked+.dark .slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
        background-image: url(https://res.cloudinary.com/siva5456/image/upload/v1618373990/sun.png)
    }
    .slider.round {
        border-radius: 34px
    }
    .slider.round:before {
        border-radius: 50%
    }
</style>