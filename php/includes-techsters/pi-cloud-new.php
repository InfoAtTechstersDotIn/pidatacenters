<?php include_once('meta-head.php'); ?>
<?php $config = require_once('config.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/" />
    <title><?php echo $m_title; ?></title>
    <meta name="description" content="<?php echo $m_desc; ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="./<?= $config['subFolderName'] ?>/images/favidata.png">
    <link rel="apple-touch-icon" href="./<?= $config['subFolderName'] ?>/images/favidata.png">
    <meta name="keywords" content="<?php echo $m_keywords; ?>" />
    <meta name="theme-color" content="#317EFB" />
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
    <meta property="og:type" prefix="og: http://ogp.me/ns#" content="Website">
    <meta property="og:url" prefix="og: http://ogp.me/ns#" content="<?php echo $meta_url; ?>">
    <?php echo ($m_thumb == "") ? '<meta property="og:image" content="https://pi-cloud.in/images/banners/index_banner.png"/>' : '<meta property="og:image"content="https://pi-cloud.in/dashboard/public/imgs/' . $m_thumb . '"/>'; ?>
    <meta name="twitter:title" property="og:title" content="<?php echo $m_title; ?>" />
    <meta name="twitter:description" property="og:discription" content="<?php echo $m_desc; ?>" />
    <meta property="og:type" content="Website">
    <meta property="og:url" name="twitter:url" content="<?php echo $meta_url; ?>">
    <?php echo ($m_thumb == "") ? '<meta property="og:image" name="twitter:image" content="https://pi-cloud.in/images/banners/index_banner.png"/>' : '<meta property="og:image" name="twitter:image" content="https://pi-cloud.in/dashboard/public/imgs/' . $m_thumb . '"/>'; ?>
    <meta name="facebook:title" property="og:title" content="<?php echo $m_title; ?>" />
    <meta name="facebook:description" property="og:discription" content="<?php echo $m_desc; ?>" />
    <meta property="og:type" content="Website">
    <meta property="og:url" name="facebook:url" content="<?php echo $meta_url; ?>">
    <?php echo ($m_thumb == "") ? '<meta property="og:image" name="facebook:image" content="https://pi-cloud.in/images/banners/index_bannerf.png"/>' : '<meta property="og:image" name="facebook:image" content="https://pi-cloud.in/dashboard/public/imgs/' . $m_thumb . '"/>'; ?>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./<?= $config['subFolderName'] ?>/css/minified/darkmode.css">
    <link rel="stylesheet" type="text/css" href="./<?= $config['subFolderName'] ?>/css/minified/common.min.css?v=1.1">
    <link rel="manifest" href="manifest.json">
    <link rel="stylesheet" type="text/css" href="https://kenwheeler.github.io/slick/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="https://kenwheeler.github.io/slick/slick/slick-theme.css">
    <link rel="stylesheet" href="https://pidatacenters.com/css/menu.css" type="text/css">


    <script async src="https://www.googletagenanager.com/gtag/js?id=UA-66937172-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-66937172-2');
    </script>
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MTSDVCZ');
    </script>
    <script>
        gtag('config', 'AW-874994481/9mjCCI6DrOoDELG2naED', {
            'phone_conversion_number': '8978517793'
        });
    </script>
    <script type="text/javascript">
        (function(c, l, a, r, i, t, y) {
            c[a] = c[a] || function() {
                (c[a].q = c[a].q || []).push(arguments)
            };
            t = l.createElement(r);
            t.async = 1;
            t.src = "https://www.clarity.ms/tag/" + i;
            y = l.getElementsByTagName(r)[0];
            y.parentNode.insertBefore(t, y);
        })(window, document, "clarity", "script", "gjmtoumna9");
    </script>
    <style>
        .hb-logo {
            width: 14% !important;
        }

        .hb-navmenu {
            width: 76% !important;
        }

        @media (max-width:1920px) {
            .hb-logo {
                width: 14% !important;
            }

            .hb-navmenu {
                width: 76% !important;
            }
        }

        @media (max-width:1350px) {

            .hb-logo {
                width: 14% !important;
            }

            .hb-navmenu {
                width: 76% !important;
            }

            .hb-navLists>li {
                padding: 0px 8px !important;
            }
        }

        @media (max-width:1250px) {
            .hb-logo {
                width: 14% !important;
            }

            .hb-navmenu {
                width: 76% !important;
            }

            .hb-navLists>li {
                padding: 0px 8px !important;
            }
        }

        @media (max-width: 1230px) and (min-width: 800px) {
            .hb-navLists>li>a {
                padding: 26px 0px !important;
            }

            .hb-navLists>li {
                padding: 0px 8px !important;
            }
        }

        @media (max-width: 599px) {
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
        }

        @media (max-width: 991px) {

            .header-lt a img {
                max-width: 70px !important;
            }

            .hb-bannerCont {
                margin-top: 77px !important;
            }

            header {
                padding: 10px 0 !important;
            }

            .mobile-nav>ul>li,
            nav>ul>li>ul.sub-menu {
                border: 1px solid #b7becd !important;
                text-align: left;
                padding: 0 10px !important;
            }

            .hb-bannerImg h2 {
                font-size: 25px !important;
            }

            nav a#pull:after {
                right: -40px !important;
                bottom: -20px !important;
            }

            nav {
                float: right;
                margin-right: 20px;
                margin-top: 2px;
            }

            nav li {
                float: left;
            }

            nav>ul>li {
                margin: 0 5px;
                transition: all 0.3s ease-out 0s;
                -moz-transition: all 0.3s ease-out 0s;
                -webkit-transition: all 0.3s ease-out 0s;
                -o-transition: all 0.3s ease-out 0s;
                padding: 0 10px;
            }

            nav>ul>li>a {
                color: #011c54;
                font-size: 14px;
                display: block;
                font-weight: 700;
                line-height: 28px;
                padding: 0 0;
                transition: all 0.3s ease-out 0s;
                -moz-transition: all 0.3s ease-out 0s;
                -webkit-transition: all 0.3s ease-out 0s;
                -o-transition: all 0.3s ease-out 0s;
            }

            /*nav > ul > li.current-menu-item > a:after {content:''; position:absolute; bottom:0px; left:15%; width:70%; height:4px; background:#59971b; border-radius:2px; opacity:1; transition: all 0.3s ease-out 0s;  -moz-transition: all 0.3s ease-out 0s;  -webkit-transition: all 0.3s ease-out 0s; -o-transition: all 0.3s ease-out 0s; }*/
            nav>ul>li:hover a:after {
                opacity: 0
            }

            nav>ul>li.current-menu-item>a {
                border-bottom: 2px solid #59971b
            }

            .header .container {
                position: relative
            }

            .sub-menu-icon {
                position: absolute;
                right: 10px;
                top: 10px;
                width: 20px;
                height: 20px;
                z-index: 99;
                background: url(../images/filter-arrow.png) no-repeat 1px 1px;
                cursor: pointer;
            }

            /*=============== sub menu ==================*/
            nav>ul>li>ul.sub-menu {
                position: static;
                width: 100%;
                height: auto;
                top: 92px;
                left: 0 !important;
                background: #011d32;
                background: rgba(255, 255, 255, 0.9);
                border-radius: 3px;
                display: none;
                box-sizing: border-box;
                padding: 20px;
                box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.18);
                /* border: 1px solid #08395F;*/
            }

            nav>ul>li>ul.sub-menu li a {
                position: relative
            }

            /*nav>ul>li > ul.sub-menu li a:hover:after {content:''; position:absolute; bottom:0px; left:9%; width:86%; height:1px; background:#59971b; border-radius:2px; opacity:1; transition: all 0.3s ease-out 0s;  -moz-transition: all 0.3s ease-out 0s;  -webkit-transition: all 0.3s ease-out 0s; -o-transition: all 0.3s ease-out 0s;  }*/
            .sub-menu-2>.sub-menu>li {
                position: relative
            }

            .sub-menu-2>.sub-menu>li:last-child:after {
                display: none
            }

            .sub-menu-2>.sub-menu>li:after {
                content: '';
                position: absolute;
                right: 0;
                top: 36px;
                height: 2px;
                background: url(../images/menu-border-line.png) no-repeat center top;
                height: 100%;
                width: 2px;
                opacity: 1;
            }

            .enment-menu>.sub-menu {
                left: auto !important;
                right: 0;
                width: 450px
            }

            .enment-menu>.sub-menu>li {
                width: 200px
            }

            .sub-two-col {
                width: 400px !important
            }

            .sub-two-col>ul>li {
                width: 50%
            }

            .enment-menu .sub-two-col {
                width: 355px !important
            }

            nav>ul>li>ul.sub-menu>li>a {
                font-size: 16px;
                font-weight: 600;
                margin-right: 0;
                text-align: left;
                display: block;
            }

            .sub-two-col {
                width: 40% !important
            }

            .sub-menu-2>ul.sub-menu>li>a {
                border-bottom: 1px solid #A0BFD4;
            }

            .sub-two-col>a {
                text-align: center !important
            }

            .mobile-nav>ul>li:hover {
                color: #59971B
            }

            nav>ul>li:hover a {
                border-bottom: none
            }

            .single-menu {
                position: relative
            }

            .single-menu .sub-menu {
                top: 40px;
                width: 235px;
                border-radius: 0;
                padding: 20px 25px;
            }

            .single-menu.menu-item-14 .sub-menu {
                width: 175px;
            }

            nav>ul>li {
                border: 1px solid transparent;
            }

            .single-menu .sub-menu li {
                width: 100%;
                text-align: left;
            }

            .single-menu .sub-menu li a {
                margin-bottom: 0;
                font-weight: 400;
                padding: 10px 0;
                font-size: 15px
            }

            .last-menu .sub-menu {
                right: 0;
                left: auto !important;
            }

            .lt-ie9 nav>ul ul ul {
                top: 0;
                display: block !important
            }

            .newlinespan {
                display: block;
            }

            .menu-item-187 .sub-menu {
                width: 340px !important;
            }

            nav>ul ul li a {
                text-align: left;
                padding-left: 14px;
            }

            .menu-item-187 .sub-menu li {
                border-right: 1px solid #e4e4e4;
                box-sizing: border-box;
            }

            .menu-item-187 .sub-menu li:nth-child(2n) {
                border-right: none;
            }

            .hiddenli {
                visibility: hidden !important;
            }

            .upnav {
                top: 71px !important;
            }

            .upnav-1 {
                top: 40px !important;
            }

            /* Theming the menu */
            ul#nav {
                float: right;
                font-size: 14px;
                border-width: 0 5px 0 5px;
                margin-top: 15px;
            }

            ul#nav ul {
                background: #f4f6f7;
            }

            nav>ul ul ul {
                top: 0;
                margin: 0 0 0 0;
                border-radius: 0 !important
            }

            ul#nav ul li a {
                padding: 6px 15px;
                font-size: 12px;
                text-transform: none;
            }

            ul#nav ul li {
                width: 200px;
            }

            ul#nav li a:hover,
            ul#nav li a:focus {
                color: #FFF;
                background: #32669b;
            }

            ul#nav span.sf-arrow {
                top: 20px;
                right: 3px;
                background-image: url(../images/arrows-menu.png);
            }

            ul#nav ul span.sf-arrow {
                right: 12px;
                top: 16px;
            }

            nav>ul {
                none !important;
                font-size: 10px;
            }

            nav>ul li {
                display: block;
                list-style: none;
                float: left;
            }

            nav>ul li:hover {
                visibility: inherit;
                /* fixes IE7 'sticky bug' */
            }

            nav>ul a {
                display: block;
            }

            nav>ul ul a {
                padding: 10px 10px;
                line-height: 16px;
                font-size: 15px;
                zoom: 1;
                /* IE6/7 fix */
            }

            nav>ul ul li {
                float: left;
                /* Must always be floated otherwise there will be a rogue 1px margin-bottom in IE6/7 */
                width: 20%;
                padding: 0 !important;
                /*border-bottom:solid 1px #e4e4e4;*/
                padding-top: 0px !important;
                width: 100%
            }

            nav>ul ul li:last-child {
                border-bottom: none;
            }

            nav>ul ul li ul li {
                width: 95%;
                ;
            }

            nav>ul li:hover ul,
            nav>ul li:focus ul,
            nav>ul li.sf-hover ul {
                /*first level*/
                left: auto;
            }

            nav>ul li:hover ul ul,
            nav>ul li:focus ul ul,
            nav>ul li.sf-hover ul ul {
                left: -999999px;
            }

            nav>ul ul li:hover ul,
            nav>ul ul li:focus ul,
            nav>ul ul li.sf-hover ul {
                /*second level*/
                left: auto;
            }

            nav>ul ul li:hover ul ul,
            nav>ul ul li:focus ul ul,
            nav>ul ul li.sf-hover ul ul {
                left: -999999px;
            }

            nav>ul ul ul li:hover ul,
            nav>ul ul ul li:focus ul,
            nav>ul ul ul li.sf-hover ul {
                /*third level*/
                left: auto;
            }

            nav>ul ul ul li:hover ul ul,
            nav>ul ul ul li:focus ul ul,
            nav>ul ul ul li.sf-hover ul ul {
                left: -999999px;
            }

            nav>ul ul ul ul li:hover ul,
            nav>ul ul ul ul li:focus ul,
            nav>ul ul ul ul li.sf-hover ul {
                /*fourth level*/
                left: auto;
            }

            nav>ul ul ul ul li:hover ul ul,
            nav>ul ul ul ul li:focus ul ul,
            nav>ul ul ul ul li.sf-hover ul ul {
                left: -999999px;
            }

            /* autoArrows CSS */
            span.sf-arrow {
                width: 7px;
                height: 7px;
                position: absolute;
                top: 8px;
                right: 0;
                display: block;
                /*background:url(images/arrows-black.png) no-repeat 0 0;*/
                overflow: hidden;
                /* making sure IE6 doesn't overflow and expand the box */
                font-size: 1px;
            }

            ul ul span.sf-arrow {
                right: 12px;
                top: 7px;
                background-position: 0 100%;
            }

            .srch {
                float: right;
                margin-top: 6px;
            }

            nav .current_page_item a:after {
                opacity: 1
            }

            nav .p-sub-menu {
                position: relative;
            }

            nav .p-sub-menu .sub-menu {
                float: left;
                width: 170px;
                left: -172px !important;
                color: black;
                right: 0px;
                position: absolute;
                top: 0 !important;
                background: #011d32;
                background: rgba(1, 29, 50, 0.9);
                display: none;
                border: 1px solid #08395F;
                padding: 20px 0 !important
            }

            nav .p-sub-menu .sub-menu .sub-menu {
                left: -172px !important
            }

            nav .p-sub-menu .sub-menu li {
                position: relative;
            }

            nav .pricing-menu .sub-menu {
                padding: 10px 0
            }

            nav .pricing-menu li a {
                padding: 10px 20px !important
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MTSDVCZ" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <header class="cloud-header">
        <div class="header-block">
            <div class="container">
                <div class="header-dtls">
                    <div class="header-lt ">
                        <a href="https://pidatacenters.com">
                            <img src="images/logo-wt.png" alt="logo" width="186" height="76">
                        </a>
                    </div>
                    <div class="header-rt">
                        <nav>
                            <ul class="clear">
                                <li class=""><a href="https://pidatacenters.com/"><i class="fa fa-home" style="color:black"></i></a></li>


                                <li><a href="JavaScript:void(0);" class=" drop-arrow">DATA CENTER</a>
                                    <div class="drop-down">
                                        <ul>
                                            <li>
                                                <a href="data-center-infrastructure-services.php">Colocation</a>
                                            </li>
                                            <li>
                                                <a href="data-center-infrastructure-services-advisory.php">Data Center Infrastructure & Services</a>
                                            </li>

                                            <li class="down-ar">
                                                <a href="JavaScript:void(0);">Consulting & Data Center Build
                                                </a>
                                                <div class="drop-down2">
                                                    <ul>
                                                        <li>
                                                            <a href="dc-design-planning.php">Data Center Design & Planning</a>
                                                        </li>
                                                        <li>
                                                            <a href="dc-build.php">Data Center Build & Operate</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <!--<li><a href="https://pi-cloud.in/" target="_blank">CLOUD</a></li>-->

                                <li class=""><a href="./pi-cloud/" class=" drop-arrow">CLOUD</a>
                                    <div class="drop-down">
                                        <ul>
                                            <li>


                                                <!-- <a href="./pi-cloud/multi-cloud">Public Cloud</a>  -->

                                                <a href="./pi-cloud/public-cloud">Public Cloud</a>




                                            </li>
                                            <li>
                                                <a href="./pi-cloud/compute">Private Cloud</a>
                                            </li>
                                            <li><a href="./pi-cloud/sap">SAP on Cloud</a></li>
                                            <li><a href="./pi-cloud/products-home">Other Could Services</a></li>
                                            <li>
                                                <a href="./pi-cloud/industry-solutions">Industry Solutions</a>
                                            </li>

                                            <li>
                                                <a href="./pi-cloud/managed-services">Cloud Enablement</a>
                                            </li>
                                            <li>
                                                <a href="certifications.php"> Cloud Certifications</a>
                                            </li>

                                            <!--<li>
                                        <a href="ceo-corner.php">
                                            CEO Corner
                                        </a>
                                    </li>-->
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="JavaScript:void(0);" class=" drop-arrow">MANAGED SERVICES</a>
                                    <div class="drop-down">
                                        <ul>
                                            <li>
                                                <a href="./pi-cloud/multicloud-managed-services">Public Cloud Managed Services</a>

                                            </li>
                                            <li>
                                                <a href="rims.php">RIMS</a>
                                            </li>
                                            <!--
                                    <li>
                                        <a href="#">Public Cloud Support</a>
                                    </li>
-->
                                            <li>
                                                <a href="noc.php">NOC</a>
                                            </li>
                                            <li>
                                                <a href="soc.php">SOC</a>
                                            </li>
                                            <li>
                                                <a href="devops.php">DevOps</a>
                                            </li>

                                        </ul>
                                    </div>

                                </li>
                                <li>

                                    <a href="JavaScript:void(0);" class=" drop-arrow">PRODUCTS</a>
                                    <div class="drop-down">
                                        <ul>
                                            <li><a href="./pi-cloud/security">Cyber Security</a></li>
                                            <li><a href="./pi-cloud/ip-exchange">Internet Exchange (IPX)</a></li>
                                            <li>
                                                <a href="harbourfront-services.php">HarbourFront (CDN)</a>
                                            </li>
                                            <li>
                                                <a href="pi-work-spaces.php">Pi Workspaces (VDI)</a>
                                            </li>
                                        </ul>
                                    </div>


                                </li>
                                <li><a href="JavaScript:void(0);" class=" drop-arrow">PRICING</a>
                                    <div class="drop-down">
                                        <ul>
                                            <li>
                                                <a href="./pi-cloud/pricing/#/cloudServers">Cloud Servers</a>
                                            </li>
                                            <li>
                                                <a href="./pi-cloud/pricing/#/cloudStorage">Cloud Storage</a>
                                            </li>
                                            <li>
                                                <a href="rent-server.php">Rent A Server</a>
                                            </li>
                                            <li>
                                                <a href="rent-server.php">Rent GPU Servers</a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>

                                <li><a href="JavaScript:void(0);"><i class="fa fa-bars" aria-hidden="true"></i></a>
                                    <div class="drop-down drop-down3">
                                        <ul>
                                            <li class="down-ar">
                                                <a href="JavaScript:void(0);">About</a>
                                                <div class="drop-down2 drop-down4">
                                                    <ul>
                                                        <li>
                                                            <a href="about.php">About us</a>
                                                        </li>

                                                        <li>
                                                            <a href="leadership.php">Leadership</a>
                                                        </li>

                                                        <li>
                                                            <a href="awards-recognition.php">Awards &amp; Recognition</a>
                                                        </li>

                                                        <li>
                                                            <a href="testimonial.php">Testimonials</a>
                                                        </li>
                                                        <li>
                                                            <a href="certifications.php">Certifications</a>
                                                        </li>




                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="ceo-corner.php">
                                                    CEO Corner
                                                </a>

                                            </li>
                                            <li>
                                                <a href="./pi-cloud/partners">Partner Portal</a>
                                            </li>

                                            <li class="down-ar">
                                                <a href="JavaScript:void(0);">Knowledge Center</a>
                                                <div class="drop-down2 drop-down4">
                                                    <ul>
                                                        <li>
                                                            <a href="case-studies.php">Case Studies</a>
                                                        </li>
                                                        <li>
                                                            <a href="blogs.php">Blogs</a>
                                                        </li>

                                                        <li>
                                                            <a href="whitepapers.php">Whitepapers</a>
                                                        </li>

                                                        <li>
                                                            <a href="brochure.php">Brochure</a>
                                                        </li>
                                                        <li>
                                                            <a href="knowledge-hub">Knowledge Hub</a>
                                                        </li>



                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="down-ar">
                                                <a href="JavaScript:void(0);">Media</a>
                                                <div class="drop-down2 drop-down4">
                                                    <ul>
                                                        <li>
                                                            <a href="press-releases.php">Press Release</a>
                                                        </li>
                                                        <li>
                                                            <a href="gallery.php">Gallery</a>
                                                        </li>
                                                        <li>
                                                            <a href="videos.php">Videos</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="down-ar">
                                                <a href="JavaScript:void(0);">Policies</a>
                                                <div class="drop-down2 drop-down4">
                                                    <ul>
                                                        <li>
                                                            <a href="https://pidatacenters.com/privacy-policy/">Privacy Policy</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://pidatacenters.com/acceptable-use-policy/">Acceptable Use Policy</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="down-ar">
                                                <a href="JavaScript:void(0);">Career</a>
                                                <div class="drop-down2 drop-down4">
                                                    <ul>
                                                        <li>
                                                            <a href="life-at-pi.php">Life at Pi</a>
                                                        </li>
                                                        <li>
                                                            <a href="work-with-us.php">Openings</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="contact-us.php">Contact us</a>

                                            </li>

                                        </ul>
                                    </div>

                                </li>

                            </ul>
                        </nav>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <!--<div class="menu">
                 <div id="nav-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                 </div>
              </div>-->
        <nav style="display:flex;" class="mobile-nav">
            <ul class="mobile-only_dd">
                <li id="nav-menu-item-3451" class="main-menu-item  menu-item-even menu-item-depth-0 menu-item menu-item-type-custom menu-item-object-custom"><a href="index.php" class="menu-link main-menu-link">HOME</a></li>
                <li id="nav-menu-item-3432" class="main-menu-item  menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children"><a href="JavaScript:void(0);" class="menu-link main-menu-link">DATA CENTER</a><span class="sub-menu-icon"></span>
                    <ul class="sub-menu menu-odd  menu-depth-1">
                        <li id="nav-menu-item-3444" class="sub-menu-item  menu-item-odd menu-item-depth-1 menu-item menu-item-type-custom menu-item-object-custom"><a href="data-center-infrastructure-services.php" class="menu-link sub-menu-link">Colocation</a></li>
                        <li id="nav-menu-item-3444" class="sub-menu-item  menu-item-odd menu-item-depth-1 menu-item menu-item-type-custom menu-item-object-custom"><a href="data-center-infrastructure-services-advisory.php" class="menu-link sub-menu-link">Data Center Infrastructure and Services</a></li>
                        <li id="nav-menu-item-3444" class="sub-menu-item  menu-item-odd menu-item-depth-1 menu-item menu-item-type-custom menu-item-object-custom"><a href="JavaScript:void(0);" class="menu-link sub-menu-link">Consulting & Data Center Build</a>
                            <span class="sub-menu-icon"></span>
                            <ul class="sub-menu menu-even sub-sub-menu menu-depth-2">
                                <li id="nav-menu-item-3869" class="sub-menu-item sub-sub-menu-item menu-item-even menu-item-depth-2 menu-item menu-item-type-custom menu-item-object-custom"><a href="dc-design-planning.php" class="menu-link sub-menu-link">Data Center Design &amp; Planning</a></li>
                                <li id="nav-menu-item-3870" class="sub-menu-item sub-sub-menu-item menu-item-even menu-item-depth-2 menu-item menu-item-type-custom menu-item-object-custom"><a href="dc-build.php" class="menu-link sub-menu-link">Data Center Build & Operate</a></li>
                                <!--<li id="nav-menu-item-3870" class="sub-menu-item sub-sub-menu-item menu-item-even menu-item-depth-2 menu-item menu-item-type-custom menu-item-object-custom"><a href="#" class="menu-link sub-menu-link">Internet Exchange (IPX)</a></li>
		<li id="nav-menu-item-3870" class="sub-menu-item sub-sub-menu-item menu-item-even menu-item-depth-2 menu-item menu-item-type-custom menu-item-object-custom"><a href="pi-work-spaces.php" class="menu-link sub-menu-link">Pi Workspaces</a></li>-->

                            </ul>
                        </li>


                    </ul>
                </li>
                <li id="nav-menu-item-14" class="main-menu-item  menu-item-even menu-item-depth-0 single-menu menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children"><a title="ABOUT US" href="./pi-cloud/" class="menu-link main-menu-link">CLOUD</a><span class="sub-menu-icon"></span>
                    <ul class="sub-menu menu-odd  menu-depth-1">
                        <li id="nav-menu-item-172" class="sub-menu-item  menu-item-odd menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page"><a title="Leadership" href="./pi-cloud/multi-cloud" class="menu-link sub-menu-link">Public Cloud</a></li>
                        <li id="nav-menu-item-843" class="sub-menu-item  menu-item-odd menu-item-depth-1 menu-item menu-item-type-custom menu-item-object-custom"><a title="News" href="./pi-cloud/compute" class="menu-link sub-menu-link">Private Cloud</a></li>
                        <li id="nav-menu-item-843" class="sub-menu-item  menu-item-odd menu-item-depth-1 menu-item menu-item-type-custom menu-item-object-custom"><a title="News" href="./pi-cloud/sap" class="menu-link sub-menu-link">SAP on Cloud</a></li>
                        <li id="nav-menu-item-843" class="sub-menu-item  menu-item-odd menu-item-depth-1 menu-item menu-item-type-custom menu-item-object-custom"><a title="News" href="./pi-cloud/products-home" class="menu-link sub-menu-link">Other Could Services</a></li>
                        <li id="nav-menu-item-843" class="sub-menu-item  menu-item-odd menu-item-depth-1 menu-item menu-item-type-custom menu-item-object-custom"><a title="News" href="certifications.php" class="menu-link sub-menu-link">Cloud Certifications</a></li>
                        <li id="nav-menu-item-2899" class="sub-menu-item  menu-item-odd menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page"><a title="Awards and Recognition" href="./pi-cloud/industry-solutions" class="menu-link sub-menu-link">Industry Solutions</a></li>
                        <li id="nav-menu-item-3416" class="sub-menu-item  menu-item-odd menu-item-depth-1 menu-item menu-item-type-custom menu-item-object-custom"><a title="Careers" href="./pi-cloud/managed-services" class="menu-link sub-menu-link">Cloud Enablement</a></li>
                        <!--<li id="nav-menu-item-2853" class="sub-menu-item  menu-item-odd menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page"><a title="Certifications" href="certifications.php" class="menu-link sub-menu-link">Partner Portal</a></li>-->
                        <!--<li id="nav-menu-item-2853" class="sub-menu-item  menu-item-odd menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page">
                                        <a href="ceo-corner.php" class="menu-link sub-menu-link">
                                            CEO Corner
                                        </a>
                                    </li>-->

                    </ul>
                </li>
                <!--<li id="nav-menu-item-14" class="main-menu-item  menu-item-even menu-item-depth-0 single-menu menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children"><a title="ABOUT US" href="#" class="menu-link main-menu-link">DATA CENTER</a><span class="sub-menu-icon"></span>
<ul class="sub-menu menu-odd  menu-depth-1">
	<li id="nav-menu-item-172" class="sub-menu-item  menu-item-odd menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page"><a title="Leadership" href="#" class="menu-link sub-menu-link">Data center Infrastructure</a></li>
	<li id="nav-menu-item-843" class="sub-menu-item  menu-item-odd menu-item-depth-1 menu-item menu-item-type-custom menu-item-object-custom"><a title="News" href="#" class="menu-link sub-menu-link">Data center Services</a></li>
	<li id="nav-menu-item-2899" class="sub-menu-item  menu-item-odd menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page"><a title="Awards and Recognition" href="#" class="menu-link sub-menu-link">Consulting & DC Build</a></li>
	
	
</ul>
</li>-->



                <!--<li id="nav-menu-item-3868" class="main-menu-item  menu-item-even menu-item-depth-0 menu-item menu-item-type-custom menu-item-object-custom"><a href="https://pi-cloud.in/" class="menu-link main-menu-link">CLOUD</a></li>-->

                <li id="nav-menu-item-3445" class="sub-menu-item  menu-item-odd menu-item-depth-1 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a href="JavaScript:void(0);" class="menu-link sub-menu-link">MANAGED SERVICES</a><span class="sub-menu-icon"></span>
                    <ul class="sub-menu menu-even sub-sub-menu menu-depth-2">
                        <li id="nav-menu-item-3870" class="sub-menu-item sub-sub-menu-item menu-item-even menu-item-depth-2 menu-item menu-item-type-custom menu-item-object-custom"><a href="./pi-cloud/multi-cloud#servicemodel" class="menu-link sub-menu-link">Public Cloud
                                Managed

                                Services</a></li>
                        <li id="nav-menu-item-3869" class="sub-menu-item sub-sub-menu-item menu-item-even menu-item-depth-2 menu-item menu-item-type-custom menu-item-object-custom"><a href="rims.php" class="menu-link sub-menu-link">RIMS</a></li>
                        <!--		<li id="nav-menu-item-3870" class="sub-menu-item sub-sub-menu-item menu-item-even menu-item-depth-2 menu-item menu-item-type-custom menu-item-object-custom"><a href="#" class="menu-link sub-menu-link">Public Cloud Support</a></li>-->
                        <li id="nav-menu-item-3871" class="sub-menu-item sub-sub-menu-item menu-item-even menu-item-depth-2 menu-item menu-item-type-custom menu-item-object-custom"><a href="noc.php" class="menu-link sub-menu-link">NOC</a></li>
                        <li id="nav-menu-item-3872" class="sub-menu-item sub-sub-menu-item menu-item-even menu-item-depth-2 menu-item menu-item-type-custom menu-item-object-custom"><a href="soc.php" class="menu-link sub-menu-link">SOC</a></li>
                        <li id="nav-menu-item-3872" class="sub-menu-item sub-sub-menu-item menu-item-even menu-item-depth-2 menu-item menu-item-type-custom menu-item-object-custom"><a href="devops.php" class="menu-link sub-menu-link">DevOps</a></li>

                    </ul>
                </li>

                <li id="nav-menu-item-3445" class="sub-menu-item  menu-item-odd menu-item-depth-1 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a href="JavaScript:void(0);" class="menu-link sub-menu-link">PRODUCTS</a><span class="sub-menu-icon"></span>
                    <ul class="sub-menu menu-even sub-sub-menu menu-depth-2">
                        <li id="nav-menu-item-3869" class="sub-menu-item sub-sub-menu-item menu-item-even menu-item-depth-2 menu-item menu-item-type-custom menu-item-object-custom"><a href="./pi-cloud/security" class="menu-link sub-menu-link">Cyber Security</a></li>
                        <!--		<li id="nav-menu-item-3870" class="sub-menu-item sub-sub-menu-item menu-item-even menu-item-depth-2 menu-item menu-item-type-custom menu-item-object-custom"><a href="#" class="menu-link sub-menu-link">Public Cloud Support</a></li>-->
                        <li id="nav-menu-item-3871" class="sub-menu-item sub-sub-menu-item menu-item-even menu-item-depth-2 menu-item menu-item-type-custom menu-item-object-custom"><a href="./pi-cloud/ip-exchange" class="menu-link sub-menu-link">Internet Exchange (IPX)</a></li>
                        <li id="nav-menu-item-3872" class="sub-menu-item sub-sub-menu-item menu-item-even menu-item-depth-2 menu-item menu-item-type-custom menu-item-object-custom"><a href="harbourfront-services.php" class="menu-link sub-menu-link">HarbourFront (CDN)</a></li>
                        <li id="nav-menu-item-3872" class="sub-menu-item sub-sub-menu-item menu-item-even menu-item-depth-2 menu-item menu-item-type-custom menu-item-object-custom"><a href="pi-work-spaces.php" class="menu-link sub-menu-link">Pi Workspaces (VDI)</a></li>

                    </ul>
                </li>


                <li id="nav-menu-item-14" class="main-menu-item  menu-item-even menu-item-depth-0 single-menu menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children"><a title="ABOUT US" href="JavaScript:void(0);" class="menu-link main-menu-link">PRICING</a><span class="sub-menu-icon"></span>
                    <ul class="sub-menu menu-odd  menu-depth-1">
                        <li id="nav-menu-item-172" class="sub-menu-item  menu-item-odd menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page"><a title="Leadership" href="./pi-cloud/pricing/#/cloudServers" class="menu-link sub-menu-link">Cloud servers</a></li>
                        <li id="nav-menu-item-843" class="sub-menu-item  menu-item-odd menu-item-depth-1 menu-item menu-item-type-custom menu-item-object-custom"><a title="News" href="./pi-cloud/pricing/#/cloudStorage" class="menu-link sub-menu-link">Cloud Storage</a></li>
                        <li id="nav-menu-item-843" class="sub-menu-item  menu-item-odd menu-item-depth-1 menu-item menu-item-type-custom menu-item-object-custom"><a title="News" href="rent-server.php" class="menu-link sub-menu-link">Rent A Server</a></li>
                        <li id="nav-menu-item-843" class="sub-menu-item  menu-item-odd menu-item-depth-1 menu-item menu-item-type-custom menu-item-object-custom"><a title="News" href="rent-server.php" class="menu-link sub-menu-link">Rent GPU Servers</a></li>


                    </ul>
                </li>

                <li id="nav-menu-item-3432" class="main-menu-item  menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children"><a href="JavaScript:void(0);" class="menu-link main-menu-link">MORE INFORMATION</a><span class="sub-menu-icon"></span>
                    <ul class="sub-menu menu-odd  menu-depth-1">

                        <li id="nav-menu-item-3444" class="sub-menu-item  menu-item-odd menu-item-depth-1 menu-item menu-item-type-custom menu-item-object-custom"><a href="JavaScript:void(0);" class="menu-link sub-menu-link">About us</a>
                            <span class="sub-menu-icon"></span>
                            <ul class="sub-menu menu-even sub-sub-menu menu-depth-2">
                                <li id="nav-menu-item-3869" class="sub-menu-item sub-sub-menu-item menu-item-even menu-item-depth-2 menu-item menu-item-type-custom menu-item-object-custom"><a href="about.php" class="menu-link sub-menu-link">About us</a></li>
                                <li id="nav-menu-item-3870" class="sub-menu-item sub-sub-menu-item menu-item-even menu-item-depth-2 menu-item menu-item-type-custom menu-item-object-custom"><a href="leadership.php" class="menu-link sub-menu-link">Leadership </a></li>
                                <li id="nav-menu-item-3870" class="sub-menu-item sub-sub-menu-item menu-item-even menu-item-depth-2 menu-item menu-item-type-custom menu-item-object-custom"><a href="awards-recognition.php" class="menu-link sub-menu-link">Awards & Recognition</a></li>
                                <li id="nav-menu-item-3870" class="sub-menu-item sub-sub-menu-item menu-item-even menu-item-depth-2 menu-item menu-item-type-custom menu-item-object-custom"><a href="testimonial.php" class="menu-link sub-menu-link">Testimonials</a></li>
                                <li id="nav-menu-item-3870" class="sub-menu-item sub-sub-menu-item menu-item-even menu-item-depth-2 menu-item menu-item-type-custom menu-item-object-custom"><a href="certifications.php" class="menu-link sub-menu-link">Certifications</a></li>
                                <!--<li id="nav-menu-item-3870" class="sub-menu-item sub-sub-menu-item menu-item-even menu-item-depth-2 menu-item menu-item-type-custom menu-item-object-custom"><a href="ceo-corner.php" class="menu-link sub-menu-link">
                                            CEO Corner
                                        </a></li>-->



                            </ul>
                        </li>
                        <li id="nav-menu-item-3873" class="sub-menu-item  menu-item-odd menu-item-depth-1 menu-item menu-item-type-custom menu-item-object-custom"><a href="ceo-corner.php" class="menu-link sub-menu-link"> CEO Corner</a></li>
                        <li id="nav-menu-item-3873" class="sub-menu-item  menu-item-odd menu-item-depth-1 menu-item menu-item-type-custom menu-item-object-custom"><a href="./pi-cloud/partners" class="menu-link sub-menu-link"> Partner Portal</a></li>
                        <li id="nav-menu-item-3444" class="sub-menu-item  menu-item-odd menu-item-depth-1 menu-item menu-item-type-custom menu-item-object-custom"><a href="JavaScript:void(0);" class="menu-link sub-menu-link">Knowledge Center</a>
                            <span class="sub-menu-icon"></span>
                            <ul class="sub-menu menu-even sub-sub-menu menu-depth-2">
                                <li id="nav-menu-item-3869" class="sub-menu-item sub-sub-menu-item menu-item-even menu-item-depth-2 menu-item menu-item-type-custom menu-item-object-custom"><a href="case-studies.php" class="menu-link sub-menu-link">Case Studies</a></li>
                                <li id="nav-menu-item-3870" class="sub-menu-item sub-sub-menu-item menu-item-even menu-item-depth-2 menu-item menu-item-type-custom menu-item-object-custom"><a href="blogs.php" class="menu-link sub-menu-link">Blogs </a></li>
                                <li id="nav-menu-item-3870" class="sub-menu-item sub-sub-menu-item menu-item-even menu-item-depth-2 menu-item menu-item-type-custom menu-item-object-custom"><a href="whitepapers.php" class="menu-link sub-menu-link">Whitepapers</a></li>
                                <li id="nav-menu-item-3870" class="sub-menu-item sub-sub-menu-item menu-item-even menu-item-depth-2 menu-item menu-item-type-custom menu-item-object-custom"><a href="brochure.php" class="menu-link sub-menu-link">Brochure</a></li>
                                <li id="nav-menu-item-3870" class="sub-menu-item sub-sub-menu-item menu-item-even menu-item-depth-2 menu-item menu-item-type-custom menu-item-object-custom"><a href="knowledge-hub.php" class="menu-link sub-menu-link">Knowledge Hub</a></li>



                            </ul>
                        </li>
                        <li id="nav-menu-item-3445" class="sub-menu-item  menu-item-odd menu-item-depth-1 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a href="JavaScript:void(0);" class="menu-link sub-menu-link">Media</a><span class="sub-menu-icon"></span>
                            <ul class="sub-menu menu-even sub-sub-menu menu-depth-2">
                                <li id="nav-menu-item-3869" class="sub-menu-item sub-sub-menu-item menu-item-even menu-item-depth-2 menu-item menu-item-type-custom menu-item-object-custom"><a href="press-releases.php" class="menu-link sub-menu-link">Press Release</a></li>
                                <li id="nav-menu-item-3870" class="sub-menu-item sub-sub-menu-item menu-item-even menu-item-depth-2 menu-item menu-item-type-custom menu-item-object-custom"><a href="gallery.php" class="menu-link sub-menu-link">Gallery</a></li>
                                <li id="nav-menu-item-3871" class="sub-menu-item sub-sub-menu-item menu-item-even menu-item-depth-2 menu-item menu-item-type-custom menu-item-object-custom"><a href="videos.php" class="menu-link sub-menu-link">Videos</a></li>


                            </ul>
                        </li>
                        <li id="nav-menu-item-3445" class="sub-menu-item  menu-item-odd menu-item-depth-1 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a href="JavaScript:void(0);" class="menu-link sub-menu-link">Policies</a><span class="sub-menu-icon"></span>
                            <ul class="sub-menu menu-even sub-sub-menu menu-depth-2">
                                <li id="nav-menu-item-3869" class="sub-menu-item sub-sub-menu-item menu-item-even menu-item-depth-2 menu-item menu-item-type-custom menu-item-object-custom"><a href="privacy-policy.php" class="menu-link sub-menu-link">Privacy Policies</a></li>
                                <li id="nav-menu-item-3870" class="sub-menu-item sub-sub-menu-item menu-item-even menu-item-depth-2 menu-item menu-item-type-custom menu-item-object-custom"><a href="acceptable-use-policy.php" class="menu-link sub-menu-link">Acceptable Use Policy</a></li>


                            </ul>
                        </li>
                        <li id="nav-menu-item-3445" class="sub-menu-item  menu-item-odd menu-item-depth-1 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a href="JavaScript:void(0);" class="menu-link sub-menu-link">Career</a><span class="sub-menu-icon"></span>
                            <ul class="sub-menu menu-even sub-sub-menu menu-depth-2">
                                <li id="nav-menu-item-3869" class="sub-menu-item sub-sub-menu-item menu-item-even menu-item-depth-2 menu-item menu-item-type-custom menu-item-object-custom"><a href="life-at-pi.php" class="menu-link sub-menu-link">Life at Pi</a></li>
                                <li id="nav-menu-item-3870" class="sub-menu-item sub-sub-menu-item menu-item-even menu-item-depth-2 menu-item menu-item-type-custom menu-item-object-custom"><a href="work-with-us.php" class="menu-link sub-menu-link">Openings</a></li>


                            </ul>
                        </li>
                        <li id="nav-menu-item-3873" class="sub-menu-item  menu-item-odd menu-item-depth-1 menu-item menu-item-type-custom menu-item-object-custom"><a href="contact-us.php" class="menu-link sub-menu-link">Contact Us</a></li>

                    </ul>
                </li>



            </ul>
            <a href="JavaScript:void(0);" id="pull" class="nav-icon" title="pull icon"></a>
        </nav>
    </header>






    <div class="side_bar"></div>

    <style type="text/css">
        .hb-bannerImg h2 {
            position: absolute;
            top: 45% !Important;
            left: 4%;
            color: #fff;
            font-size: 55px;
        }

        .hb-productSec {
            max-width: 80% !important;
        }

        .sticky header {
            position: fixed !important;
            background: rgba(0, 0, 0, 0.8);
            top: 0;
            left: 0;
            z-index: 9;
            padding: 15px 15px;
        }

        .sticky .header-lt a img {
            width: 80%;
        }

        */ .desk {
            display: block !important;
        }

        .mob {
            display: none !important;
        }

        header {
            padding: 0px 15px;
            width: 100%;
            position: fixed;
            z-index: 500;
            background: #fff;
            padding-top: 15px;
            padding-bottom: 15px;
        }

        .header-block {}

        .header-dtls {
            padding: 0 0 0px 0;
        }

        .header-lt {
            float: left;
            display: inline-block;
            vertical-align: top;
        }

        .header-lt a {}

        .header-lt a img {
            max-width: 120px;
            height: auto;
        }

        .header-rt {
            float: right;
            display: inline-block;
            vertical-align: top;
            padding: 25px 0 0 0;
        }

        .grid_view:hover {
            background-color: #2680eb !important;
        }

        .skltbs-tab-item.current,
        .skltbs-tab-item.current,
        .skltbs-tab-item.current:after,
        .skltbs-tab-item.current:before {
            background-color: #2680eb !important;
        }

        .skltbs-tab-item:hover,
        .skltbs-tab-item:hover:after,
        .skltbs-tab-item:hover:before {
            background-color: #2680eb !important;
        }

        .skltbs-tab-group {
            border-bottom: solid #2680eb !important;
        }

        .hb-childProducts2 .tabBlock-tab.is-active,
        .tabBlock-tab.is-active:after,
        .tabBlock-tab.is-active:before {
            background-color: #2680eb !important;
        }

        .hb-childProducts2 .tabBlock-tab:hover,
        .tabBlock-tab:hover:after,
        .tabBlock-tab:hover:before {
            background-color: #2680eb !important;
        }

        .hb-childProducts2 .tabline {
            border-bottom: solid #2680eb !important;
        }

        .appoinment {
            background-color: #2680eb !important;
        }

        .hb-featuresList>li {
            border-top: 5px solid #2680eb !important;
        }

        .hb-bannerCont {
            position: relative;
            margin-top: 128px;
        }

        .container {
            width: 95% !important;
        }

        .header-rt ul {}

        .header-rt ul li {
            width: auto !important;
            display: inline-block !important;
            vertical-align: top;
            padding: 12px 24px !Important;
            position: relative;
            z-index: 1;
        }

        .header-rt ul li a {
            font-size: 15px;
            line-height: 22px;
            letter-spacing: 0.5px;
            font-weight: 500;
            color: #000;
            transition: all 0.3s ease-in-out;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -ms-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            font-family: 'Poppins', sans-serif;
        }

        .header-rt ul li a i {
            border-radius: 100%;
            font-size: 23px;
            width: 40px;
            height: 40px;
            color: #000;
            text-align: center;
            padding: 0px 0 0 0;
        }

        .header-rt ul li.call {
            padding: 0;
        }

        .header-rt ul li a:hover {
            color: #000;
        }

        .header-rt ul li.active a {
            color: #000;
        }

        .header-rt ul li:hover .drop_down {
            display: block;
        }

        .drop_down {
            background: #f8f8f8;
            position: absolute;
            left: 0;
            top: 40px;
            width: 300px;
            display: none;
            z-index: 99999;
        }

        .drop_down ul {
            padding: 0px 0 0px 0;
        }

        .drop_down ul li {
            display: block !important;
            padding: 6px 0 6px 13px;
        }

        .drop_down ul li:hover {
            background: #162068;
        }

        .drop_down ul li:hover a {
            color: #fff;
        }

        .drop_down ul li a {
            font-size: 15px;
            line-height: 18px;
            font-family: 'Helvetica';
            text-align: left;
            font-weight: 400;
        }

        .slick-dots li button:before {
            color: #ccc;
            opacity: 1;
        }

        .slick-dots li.slick-active button:before {
            opacity: 1;
            color: #000;
        }

        .header-top {
            background: #da8021;
            height: 55px;
        }

        .button-blk {
            margin: -12px 0 0 0;
            padding: 0px 0 0 0;
        }

        .hb-productHead.text-center.multi-cld h1 {
            color: #1a1a1a !Important;
            font-size: 45px !Important;
        }

        /*--------- block1 -----------------*/
        .banner-blk {}

        .slick-dots {
            width: auto;
            top: 50%;
            left: 32px;
            transform: translateY(-50%);
            -webkit-transform: translateY(-50%);
            height: 270px;
        }

        .slick-dots li {
            display: block;
            margin: 0 0 20px 0;
        }

        .slick-dots li.slick-active a {
            color: #2680EB !important;
            position: relative;
        }

        .slick-dots li a {
            color: #fff !important;
        }

        .slick-dots li.slick-active a:after {
            position: absolute;
            content: '';
            top: 16px;
            right: 10px;
            background: #fff;
            width: 2px;
            height: 38px;
        }

        .slick-dots li.slick-active {
            margin: 0 0 35px 0;
        }

        /*------- block 1 --------------------*/
        .btn-blk {
            padding: 20px 5px 0;
        }

        .btn-blk a {
            background: transparent;
            color: #fff;
            border: 0;
            font-weight: 700;
            border-radius: 5px;
            font-size: 16px;
            line-height: 22px;
            padding: 15px 60px 15px 60px;
            display: inline-block;
            background: #7BBC42;
        }

        .great-blk {
            left: 0;
            right: 0;
            position: absolute;
            width: 85%;
            margin: 0 auto;
            top: 50%;
            transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -webkit-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
        }

        .great-lt {
            padding: 70px 30px 0 0px;
        }

        .great-lt h1 {
            padding: 0 0 25px 110px;
            font-weight: 700;
            position: relative;
        }

        .great-lt h1:after {
            position: absolute;
            left: 0;
            top: 0;
            background: url(../images/gptw-logo.png);
            width: 80px;
            height: 135px;
            content: '';
        }

        .great-lt p {
            padding: 0 0 10px 0;
            text-align: left;
        }

        .great-rt {
            padding: 0px 0px 0 0;
        }

        .great-rt img {
            width: 100%;
            height: 100%;
        }

        /*------- block2 --------*/
        .product-blk {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 85%;
            margin: 0 auto;
        }

        .product-lt {
            padding: 26px 50px 0 0px;
        }

        .product-lt h2 {
            padding: 0 0 26px 0;
        }

        .product-lt p {
            padding: 0 0 35px 0;
        }

        .product-rt {
            padding: 0 10px;
        }

        .product-rt ul li {
            padding: 0 12px;
        }

        .product-blk .slick-prev:before {
            font-family: FontAwesome;
            content: '\f104';
            font-size: 38px;
            color: #fff;
            background: transparent;
            padding: 9px 20px;
        }

        .product-blk .slick-next:before {
            font-family: FontAwesome;
            content: '\f105';
            font-size: 38px;
            padding: 9px 20px;
            color: #fff !important;
            background: transparent;
        }

        .product-blk .slick-prev {
            left: -48px;
        }

        .product-blk .slick-next {}

        .product-blk .slick-slide {
            height: auto !important;
        }

        /*------- block3 ----------------*/
        .center-slider .slick-slide {
            background-color: transparent;
            color: #FFF;
            height: auto;
            margin: 0 15px 0 0;
            display: flex;
            align-items: center;
            justify-content: center;
            transform: scale(0.8);
            opacity: 0.5;
            min-height: 160px;
            transition: all 0.4s ease-in-out;
        }

        .center-slider .slick-slide h3 {
            font-size: 20px;
        }

        .center-slider .slick-slide,
        .center-slider .slick-slide[aria-hidden="true"]:not(.slick-cloned)~.slick-cloned[aria-hidden="true"] {
            transform: scale(0.8, 0.8);
            transition: all 0.4s ease-in-out;
            height: auto !important;
        }

        /* Active center slide (You can change anything here for cenetr slide)*/
        .center-slider .slick-center,
        .center-slider .slick-slide[aria-hidden="true"]:not([tabindex="-1"])+.slick-cloned[aria-hidden="true"] {
            transform: scale(1.1);
            background-color: #000000;
        }

        .center-slider .slick-current.slick-active {
            transform: scale(1.1);
            background: transparent;
            width: 100%;
            opacity: 1;
            height: auto;
            min-height: 250px;
        }

        .services-blk {
            padding: 40px 0;
        }

        .services-blk h2 {
            text-align: center;
            padding: 0 0 30px 0;
        }

        .services-blk p {
            padding: 0 0 40px 0;
            text-align: center;
        }

        .service-in {}

        .service-in p {
            padding: 30px 0 0 0;
        }

        /*----- who blk ---------------*/
        .who-in {
            padding: 40px 0;
        }

        .who-lt {
            padding: 60px 100px 0 0;
        }

        .who-lt h2 {
            padding: 0 0 30px 0;
        }

        .who-lt ul {
            text-align: center;
        }

        .who-lt ul li {
            display: inline-block;
            vertical-align: top;
            padding: 0 10px;
            width: 19%;
        }

        .who-lt ul li h6 {
            color: #fff;
        }

        .who-lt p {
            padding: 0 0 30px 0;
        }

        .who-rt {
            padding: 0 10px;
        }

        /*----- meet blk ------------------*/
        .meet-blk {}

        .meet-lt {
            padding: 50px 150px 0 0;
        }

        .meet-lt h2 {
            padding: 0 0 25px 0;
        }

        .meet-lt p {
            padding: 0 0 20px 0;
        }

        .meet-rt {
            padding: 0 30px;
        }

        /*---- green blk -----------------------*/
        .green-blk {
            padding: 10px 0;
        }

        .green-lt {
            padding: 0 65px 0 14px;
        }

        .green-lt h2 {
            padding: 0 0 15px 0;
        }

        .green-lt p {
            padding: 0 0 15px 0;
        }

        .green-lt ul {}

        .green-lt ul li {
            padding: 0 0 20px 74px;
            position: relative;
        }

        .green-lt ul li:after {
            position: absolute;
            left: 0;
            top: 0;
            background: url(../images/icon.png) no-repeat;
            width: 56px;
            height: 56px;
            content: '';
        }

        .green-rt {
            padding: 0 30px;
        }

        .green-lt ul li h5 {
            color: #fff;
            font-weight: 700;
            font-size: 30px;
            line-height: 35px;
        }

        .backdround-bg {
            height: 100vh;
            position: relative;
            background: url(../images/banner.jpg) no-repeat;
            background-size: cover;
            width: 100% !important;
            height: 100vh;
            padding: 0 120px;
        }

        .backdround-bg1 {
            height: 70px;
            position: absolute;
            background: url(../images/banner.jpg) no-repeat;
            background-size: cover;
            width: 100% !important;
            bottom: 0;
            padding: 0 0;
            box-shadow: 1px 1px 10px #FFF;
        }

        /*---------- contact ---------------*/
        .contack-blk {}

        .contack-in {}

        .contact-lt {}

        .contact-in h3 {
            font-weight: 700;
            padding: 0 0 20px 0;
            color: #fff;
        }

        .contact-lt i {
            font-size: 25px;
            padding: 0 12px 0 0;
        }

        .con {
            padding: 0 0 20px 0;
        }

        .con a {
            color: #fff;
        }

        .con-blk {}

        .con-blk h5 {
            font-size: 20px;
            line-height: 25px;
            color: #fff;
            font-weight: 600;
            padding: 0 0 10px 0;
        }

        .con-blk address {
            color: #fff;
            margin: 0;
            font-size: 16px;
            line-height: 25px;
        }

        .con-lt {
            padding: 0;
        }

        .con-rt {}

        .head {
            padding: 0 0 20px 0;
        }

        .head h2 {
            text-align: center;
            padding: 0 0 25px 0;
        }

        .head p {
            text-align: center;
            padding: 0 0 25px 0;
        }

        .form-in {}

        .form-in h2 {
            text-align: center;
            padding: 0 0 20px 0;
            color: #fff;
            text-transform: uppercase;
            padding: 0 0 20px 0;
            font-weight: 500;
            font-size: 24px;
        }

        .form-in ul {
            padding: 0;
        }

        .form-in ul li {
            list-style: none;
            padding: 0 8px 23px 8px;
            position: relative;
        }

        .form-control {
            display: block;
            width: 100%;
            border: 1px solid #fff;
            background: transparent;
            outline: 0 none;
            font-size: 16px !important;
            line-height: 20px;
            letter-spacing: 0.8px;
            color: #fff;
            padding: 13px 25px !important;
            height: auto !important;
            transition: 0.4s;
            border-radius: 30px;
        }

        .form-in ul li.text .form-control {
            resize: inherit;
            padding: 20px 20px 40px 20px !important;
            line-height: 16px;
        }

        .form-in ::-webkit-input-placeholder {
            color: #fff;
        }

        .form-in ::-moz-placeholder {
            color: #fff;
        }

        .form-in :-ms-input-placeholder {
            color: #fff;
        }

        .form-in :-moz-placeholder {
            color: #fff;
        }

        .button {
            text-align: center;
        }

        .button .btn-in {
            background: #fff;
            color: #707070;
            display: inline-block;
            width: auto;
            padding: 10px 24px !important;
            border: 0 none;
            border-radius: 3px;
        }

        .con-btm {
            padding: 40px 0 0 0;
        }

        .con-btm p {
            font-weight: 600;
        }

        /*-------- footer -----------------------*/
        .footer-links {}

        .footer-links ul {}

        .footer-links ul li {
            display: inline-block;
            vertical-align: top;
            color: #fff;
            font-weight: 500;
            font-size: 20px;
            padding: 0 8px 0 8px;
        }

        .footer-links ul li a {
            display: inline-block;
        }

        .footer-links ul li a i {
            width: 30px;
            display: inline-block;
            height: 30px;
            text-align: center;
            font-size: 16px;
            padding: 7px 0 0 0;
            border-radius: 100%;
            background: #fff;
            color: #000;
        }

        .footer-social-icons {
            position: fixed;
            bottom: 0;
            background: #000000;
            padding: 20px 0;
            border-radius: 20px;
            left: 20px;
        }

        .footer-btm {
            background: #000;
            padding: 20px 20px;
        }

        .footer-btm p {
            color: #fff;
            text-align: center;
        }

        /*sidebar*/
        .side_bar,
        menu {
            display: none;
            text-align: center;
        }

        #nav-icon {
            width: 30px;
            height: 30px;
            position: relative;
            margin: 0px auto;
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            transform: rotate(0deg);
            -webkit-transition: .5s ease-in-out;
            -moz-transition: .5s ease-in-out;
            -o-transition: .5s ease-in-out;
            transition: .5s ease-in-out;
            cursor: pointer;
            display: none;
        }

        #nav-icon span {
            display: block;
            position: absolute;
            height: 3px;
            width: 100%;
            background: #fff;
            border-radius: 9px;
            opacity: 1;
            left: 0;
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            transform: rotate(0deg);
            -webkit-transition: .25s ease-in-out;
            -moz-transition: .25s ease-in-out;
            -o-transition: .25s ease-in-out;
            transition: .25s ease-in-out;
        }

        #nav-icon span:nth-child(1) {
            top: 0px;
        }

        #nav-icon span:nth-child(2) {
            top: 9px;
        }

        #nav-icon span:nth-child(3) {
            top: 18px;
        }

        .open #nav-icon span:nth-child(1) {
            top: 2px;
            -webkit-transform: rotate(135deg);
            -moz-transform: rotate(135deg);
            -o-transform: rotate(135deg);
            transform: rotate(135deg);
        }

        .open #nav-icon span:nth-child(2) {
            opacity: 0;
            left: -60px;
        }

        .open #nav-icon span:nth-child(3) {
            top: 2px;
            transform: rotate(-135deg);
            -moz-transform: rotate(-135deg);
            -ms-transform: rotate(-135deg);
            -o-transform: rotate(-135deg);
            -webkit-transform: rotate(-135deg);
        }

        /*---- popup--------*/

        header.white-bg {
            background: #ffffff;
            position: fixed;
            padding: 10px;
            z-index: 9999999999;
            top: 0;
        }

        header.white-bg .header-rt {
            padding: 25px 0 0;
        }

        header.white-bg .header-rt ul li a i {
            color: #fff;
        }

        header.white-bg .header-rt ul li a {
            color: #fff;
        }

        .about-banner {
            width: 100%;
            background-size: cover;
            padding: 0;
            margin-top: 118px;
        }

        .about-banner h2 {
            color: #ffffff;
            text-align: left;
            font-size: 55px;
            line-height: 62px;
        }

        .who-we-are {
            padding: 35px 25px 5px;
            background: #FFFFFF;
        }

        .who-we-are h2 {
            color: #1A1A1A;
            position: relative;
            text-align: center;
            padding: 0 0 40px;
        }

        /*.who-we-are h2:before{position: absolute;top: -40px;left: 0;right: 0;content: "";width: 100px;height: 5px;background: #2680EB;margin: 0 auto;}*/
        .who-we-are p {
            color: #000000;
            padding: 0 0 20px;
        }

        .pid {
            line-height: 26px;
        }

        .what {
            color: #1A1A1A;
            text-align: center;
            padding: 30px 0px;
        }

        .all-value {
            ;
            padding-bottom: 80px;
            max-width: 1050px;
            margin: -100px auto 0;
        }

        .mission-data {
            position: absolute;
            top: 0;
            background: rgb(34 63 151 / 80%);
            height: 100%;
            width: 100%;
            padding: 24px;
            display: none;
            text-align: center;
        }

        .mission-data h6 {
            padding: 0 0 15px;
            color: white;
            font-weight: 500;
            font-size: 31px;
        }

        .mission-data p {
            padding: 0px 0px;
            font-size: 16px;
            line-height: 20px;
            text-align: center;
        }

        .who-we-are-main {
            max-width: 1050px;
            margin: 0 auto;
        }

        .vision-info {
            position: relative;
            cursor: pointer;
        }

        .vision-info:hover .mission-data {
            display: block;
        }

        .what-drives-us {
            padding: 60px 0px 150px;
            background: #223F97;
        }

        .what-drives-us h2 {
            color: #1A1A1A;
            position: relative;
            text-align: center;
        }

        .what-drives-us h2:before {
            position: absolute;
            top: -40px;
            left: 0;
            right: 0;
            content: "";
            width: 100px;
            height: 5px;
            background: #2680EB;
            margin: 0 auto;
        }

        .what-drives-vission-right {
            padding: 5px 8px 5px 50px;
        }

        .what-drives-vission-right h3 {
            color: #2680EB;
            padding: 0 0 10px;
        }

        .what-drives-vission-right p {
            color: #000000;
        }

        .what-drives-vission {
            padding: 0px 0px 10px;
        }

        .what-drives-mission {
            padding: 0px;
            margin: 0px;
        }

        .what-drives-mission-left {
            padding: 12px 0px
        }

        .what-drives-mission-left h3 {
            color: #2680EB;
            padding: 0 0 10px;
        }

        .what-drives-mission-left p {
            color: #000000;
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

        .get-in-touch-lft p {
            font-size: 31.5px;
            line-height: 20px;
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

        .missin-blk {
            display: none;
        }

        .about-banner.leadership {
            background: url(../images/leadership-banner-img.jpg)no-repeat right;
            width: 100%;
            background-size: cover;
        }


        .board-of-directors {
            padding: 50px 0 0px;
        }

        .board-of-directors h2 {
            color: #1A1A1A;
            position: relative;
            text-align: center;
            padding: 0 0 170px;
        }

        .board-of-directors h2.bod:before {
            display: none;
        }

        .board-of-directors h2:before {
            position: absolute;
            top: -40px;
            left: 0;
            right: 0;
            content: "";
            width: 100px;
            height: 5px;
            background: #2680EB;
            margin: 0 auto;
        }

        .board-of-directors-in {
            background: #E4EBFF;
            text-align: center;
            padding: 20px;
            border-radius: 5px;
            min-height: 245px;
        }

        .board-of-directors-in img {
            margin: -160px auto 0;
            width: auto;
        }

        .board-of-directors-in h4 {
            color: #000000;
            font-size: 18px;
            line-height: 24px;
            font-weight: 700;
            padding: 20px 0 0px;
            min-height: 72px;
        }

        .board-of-directors-in p {
            color: #000000;
            font-size: 14px;
            min-height: 55px;
            font-weight: 400;
            text-align: center;
        }

        .board-of-directors-in ul {
            margin: 0 auto;
        }

        .strategic-core-council {
            background: url(../images/Stratagic-Council_Background2.png)no-repeat;
            width: 100%;
            background-size: cover;
            padding: 80px 50px;
        }

        .strategic-core-council h2 {
            color: #ffffff;
            position: relative;
            text-align: center;
            padding: 0 0 10px;
        }

        .strategic-core-council h2:before {
            position: absolute;
            top: -40px;
            left: 0;
            right: 0;
            content: "";
            width: 100px;
            height: 5px;
            background: #2680EB;
            margin: 0 auto;
        }

        .center1 .slick-slide.slick-current.slick-active.slick-center img {
            transform: scale(1.5);
            width: 70%;
            margin: 0 auto;
        }

        .center .slick-slide.slick-current.slick-active.slick-center img {
            width: 60%;
            margin: 0 auto;
        }

        .slick-list.draggable {
            padding: 0 !important;
            max-width: 100%;
            margin: 0 auto;
            padding: 0px 0 0 !important;
        }

        .center {
            padding: 0px 50px;
        }

        .strategic-core-council .slick-slide img {
            width: 50%;
            margin: 0 auto;
            border: 1px solid #ffffff;
            border-radius: 100%;
            padding: 10px;
        }

        .strategic-core-council .slick-slide.slick-center img {
            border: 1px solid #2680EB;
        }

        .strategic-core-council-cnt {
            padding: 60px 0 0;
        }

        .strategic-core-council-cnt h3 {
            text-align: center;
            font-size: 35px;
            line-height: 37px;
            font-family: 'Roboto', sans-serif;
            font-weight: 700;
            padding: 30px 0 20px;
        }

        .strategic-core-council-cnt p {
            text-align: center;
            font-size: 20px;
            line-height: 24px;
            color: #BFBFBF;
            padding: 0 0 12px;
        }

        .strategic-core-council-cnt ul li a i {
            color: #ffffff;
        }

        .strategic-core-council-cnt ul {
            margin: 0 auto;
            padding: 5px 0;
            width: 60px;
        }

        .strategic-core-council-cnt {
            display: none;
        }

        .slick-slider .slick-slide.slick-center .strategic-core-council-cnt {
            display: block;
        }

        .strategic-core-council .slick-dots {
            left: 0;
            right: 0;
            margin: 0 auto;
            width: 120px;
            bottom: -100px;
            top: auto;
            height: auto;
        }

        .strategic-core-council .slick-dots li.slick-active {
            margin: 0;
        }

        .strategic-core-council .slick-dots li {
            display: inline-block;
        }

        .strategic-core-council .slick-dots li button:before {
            color: #ECECEC;
            border-radius: 100%;
            font-size: 12px;
        }

        .strategic-core-council .slick-dots li.slick-active button:before {
            color: #2680EB;
        }

        .board-of-directors-management h4 {
            color: #223F97;
            font-size: 20px;
            line-height: 22px;
            font-weight: 700;
            padding: 10px 0;
            text-align: center;
        }

        .board-of-directors-management p {
            color: #6E6E6E;
            font-size: 13px;
            line-height: 17px;
            min-height: 52px;
            padding: 0;
            text-align: center;
        }

        .board-of-directors-management ul li a i {
            color: #525252;
        }

        .board-of-directors-main h2.management {
            padding: 0 0 30px 0;
        }

        .board-of-directors-management {
            padding: 0 0 20px;
        }

        .great-lt h2 {
            padding: 0 0 15px;
            text-align: left;
        }

        .banner-blk.mob {
            display: none;
        }

        .block-1 {}

        .slick-vertical .slick-slide {
            border: 0;
        }

        .phone-call {
            right: 52px;
            top: 84px;
            z-index: 9999;
            position: fixed;
        }

        .phone-call img {
            width: 50px;
        }

        .phone-call ul li {
            padding: 10px 0;
        }

        .btn-blk ul li {
            padding: 0 10px;
        }

        .btn-blk ul li a {
            position: relative;
        }

        .btn-blk ul li:first-child a:before {
            content: "";
            left: 14px;
            top: 12px;
            background: url(../images/live-broadcast.png)no-repeat;
            position: absolute;
            width: 28px;
            height: 28px;
        }

        .btn-blk ul li:last-child a:before {
            content: "";
            left: 14px;
            top: 5px;
            background: url(../images/bharath-scren.png)no-repeat;
            position: absolute;
            width: 39px;
            height: 55px;
            background-size: 80%;
        }

        .clients {
            background: #ffffff;
            border-radius: 5px;
            position: absolute;
            right: 53px;
            bottom: 80px;
            padding: 0px 37px;
            width: 1000px;
        }

        .clients ul li {
            padding: 15px 0;
            width: 14.2%;
            display: inline-block;
        }

        .drop-down {
            display: none;
            position: absolute;
            top: 40px;
            left: 0;
            background: #ffffff;
            border-radius: 5px;
            width: 245px;
        }

        .drop-down ul li {
            display: block !important;
            width: 100% !important;
            padding: 10px;
            position: relative;
        }

        .drop-down ul li a {
            color: #000000;
        }

        .drop-down ul li a:hover {
            color: #2680EB;
        }

        .drop-down ul li a i {
            color: #2680EB;
            font-size: 15px;
            padding: 0;
        }

        .header-rt ul li:hover .drop-down {
            display: block;
        }

        .drop-down ul li a:hover {
            color: #2680EB !important;
            position: relative;
        }

        .drop-down ul li.down-ar:after {
            color: #000000;
            position: absolute;
            content: "\f107";
            right: 20px;
            top: 12px;
            font-family: fontawesome;
            font-size: 20px;
        }

        .drop-down ul li.down-ar:hover:after {
            color: #2680EB;
            right: 5px;
        }

        .drop-down ul li.down-ar:after {
            right: 5px;
        }

        .drop-down2 {
            display: none;
            position: absolute;
            top: 13px;
            left: 235px;
            background: #ffffff;
            border-radius: 5px;
            width: 215px;
        }

        .drop-down2 ul li {
            display: block !important;
            width: 100% !important;
        }

        .drop-down2 ul li a {
            color: #000000;
        }

        .drop-down2 ul li a:hover {
            color: #2680EB;
        }

        .drop-down ul li:hover .drop-down2 {
            display: block;
        }

        .product-lt ul li {
            width: 20%;
            padding: 0 15px;
        }

        .product-lt ul li span {
            color: #ffffff;
            font-size: 35px;
            text-align: center;
            display: block;
        }

        .product-lt ul li p {
            font-size: 12px;
            text-align: center;
            line-height: 16px;
            padding: 10px 0;
        }

        .know-more a {
            font-size: 18px;
            line-height: 40px;
            height: 40px;
            border-radius: 28px;
            background: #ffffff;
            color: #000000;
            width: 150px;
            text-align: center;
            margin: 20px auto 0;
            position: relative;
        }

        .datacenter-blk {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 90%;
            margin: 0 auto;
            left: 0;
            right: 0;
        }

        .datacenter-blk h2 {
            text-align: center;
            padding: 0 0 5px;
        }

        .datacenter-blk p {
            text-align: center;
            padding: 10px 0 10px;
            color: #ffffff;
            font-size: 20px;
            line-height: 28px;
            position: relative;
        }

        .know-more a.dc {
            margin: 0px auto;
        }

        .datacenter-main img {
            width: 64% !important;
            margin: 0 auto;
        }

        .datacenter-blk h3 {
            text-align: center;
            font-size: 22px;
            line-height: 24px;
            font-weight: 700;
            padding: 10px 0;
        }

        .clients ul li:nth-child(2),
        .clients ul li:nth-child(3),
        .clients ul li:nth-child(5) {
            padding: 24px 0 0;
        }

        .clients ul li:nth-child(7) {
            padding: 30px 0 0;
        }

        .data-center-img {
            width: 190px !important;
            margin: 0 auto;
            height: auto;
        }

        .hurbour1-img1 {
            width: 225px !important;
            margin: 0 auto;
            height: auto;
        }

        .ceos {}

        .ceos .great-rt {
            padding: 20px 20px;
        }

        .contact-blk-top {
            max-width: 1200px;
            margin: 0 auto;
            padding: 120px 0 0;
        }

        .contact-blk-top h2 {
            text-align: center;
            padding: 0 0 10px;
        }

        .contact-blk-top p {
            text-align: center;
            padding: 0 0 15px;
        }

        .contact-blk {
            padding: 10px 0 0;
        }

        .contact-blk h3 {
            font-size: 18px;
            line-height: 20px;
            font-family: 'Roboto', sans-serif;
            font-weight: 700;
            padding: 0 0 10px;
        }

        .contact-blk-lt p a i {
            color: #ffffff;
            display: inline-block;
        }

        .address-map i {
            color: #ffffff;
            display: inline-block;
        }

        .contact-blk-lt p a {
            color: #ffffff;
            display: inline-block;
            padding: 0 10px;
            border-right: 1px solid #ffffff;
            font-size: 12px;
            line-height: 14px;
        }

        .contact-blk-lt p a.second {
            border: 0;
        }

        .contact-blk-lt p span {
            display: inline-block;
            width: 46%;
        }

        .contact-blk-lt p b {
            font-weight: 700;
            color: #fff;
        }

        .contact-blk-lt p {
            padding: 0 0 10px;
            font-size: 13px;
        }

        .address-map-center {
            padding: 0;
        }

        .contact-blk-rt ul li input {
            display: block;
            width: 100%;
            background: #000000;
            height: 55px;
            line-height: 55px;
            border: 1px solid #787878;
            margin: 0 0 25px 0;
            border-radius: 28px;
            padding: 0 12px;
            font-size: 13px;
        }

        .contact-blk-rt ul li textarea {
            display: block;
            width: 100%;
            background: #000000;
            height: 146px;
            line-height: 55px;
            border: 1px solid #787878;
            margin: 0 0 25px 0;
            border-radius: 28px;
            padding: 0 15px;
            color: #787878;
            resize: none;
            font-size: 13px;
        }

        .contact-blk-rt ul li button {
            display: block;
            width: 150px;
            background: #000000;
            height: 55px;
            line-height: 55px;
            border: 1px solid #787878;
            margin: 0 0 30px 0;
            border-radius: 28px;
            padding: 0 15px;
            color: #ffffff;
            margin-left: auto;
            font-size: 13px;
        }

        .clients ul li img {
            width: 80px;
            margin: 0 auto;
        }

        .great-rt ul {
            margin-left: auto;
        }

        .great-rt ul.ceo-image2 {
            margin-right: 67px;
            margin-top: -56px;
        }

        .great-rt ul.ceo-image3 {
            margin-left: -80px;
            margin-top: -58px;
        }

        .clients ul li:nth-child(1) img,
        .clients ul li:nth-child(4) img,
        .clients ul li:nth-child(6) img {
            width: 63px;
            margin: 0 auto;
        }

        .clients ul li:nth-child(7) img {
            width: 125px;
        }

        .great-rt .slick-initialized .slick-slide {
            padding: 5px;
        }

        .great-rt-in ul li {
            padding: 0;
        }

        .center .slick-track {
            top: 0;
            padding: 0px 0 0;
        }

        .strategic-core-council-cnt1 {
            z-index: 999999;
            position: relative;
            margin: 0 -60%;
            display: none;
        }

        .slick-slider .slick-slide.slick-center .strategic-core-council-cnt1 {
            display: block;
        }

        .datacenter-blk .center {
            padding: 0;
        }

        .datacenter-blk .slick-next:before {
            content: "\f105";
            color: #ffffff;
            font-size: 20px;
            font-family: 'FontAwesome';
            width: 30px;
            height: 30px;
            border-radius: 100%;
            border: 1px solid #ffffff;
            display: block;
            padding: 4px;
        }

        .datacenter-blk .slick-prev:before {
            content: "\f104";
            color: #ffffff;
            font-size: 20px;
            font-family: 'FontAwesome';
            width: 30px;
            height: 30px;
            border-radius: 100%;
            border: 1px solid #ffffff;
            display: block;
            padding: 4px;
        }

        .datacenter-blk .slick-next {
            right: 17%;
            top: auto;
            bottom: 8px;
        }

        .datacenter-blk .slick-prev {
            left: 17%;
            top: auto;
            bottom: 8px;
        }

        .center1 .slick-track {
            top: 80px;
        }

        .center1 .slick-list.draggable {
            padding: 0px 0 130px !important;
        }

        .slick-slider .slick-slide.slick-center {}

        .datacenter-main .center1 img {
            width: 40% !important;
            border: 0;
        }

        .datacenter-blk .center1.slick-slider .slick-slide.slick-center p {
            padding: 110px 0 0;
            font-size: 26px;
            line-height: 26px;
            color: #ffffff;
        }

        .datacenter-blk .center1 p {
            color: #716f6f;
            line-height: 19px !important;
            line-height: 21px !important;
        }

        .bw {
            filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/></filter></svg>#grayscale");
            /* Firefox 10+, Firefox on Android */
            filter: gray;
            /* IE6-9 */
            -webkit-filter: grayscale(1);
            /* Google Chrome, Safari 6+ & Opera 15+ */
            -moz-filter: grayscale(100%);
            -ms-filter: grayscale(100%);
            -o-filter: grayscale(100%);
            filter: grayscale(100%);
        }

        .center1.slick-slider .slick-slide.slick-center .bw {
            filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/></filter></svg>#grayscale");
            /* Firefox 10+, Firefox on Android */
            filter: none !important;
            /* IE6-9 */
            -webkit-filter: grayscale(1);
            /* Google Chrome, Safari 6+ & Opera 15+ */
            -moz-filter: grayscale(100%);
            -ms-filter: grayscale(100%);
            -o-filter: grayscale(100%);
            filter: grayscale(100%);
        }

        .great-lt span {
            color: #ffffff;
            font-size: 32px;
            line-height: 34px;
        }

        .great-rtt .slick-next:before {
            content: "\f105";
            color: #ffffff;
            font-size: 20px;
            font-family: 'FontAwesome';
            width: 30px;
            height: 30px;
            border-radius: 100%;
            border: 1px solid #ffffff;
            display: block;
            padding: 4px;
        }

        .great-rtt .slick-prev:before {
            content: "\f104";
            color: #ffffff;
            font-size: 20px;
            font-family: 'FontAwesome';
            width: 30px;
            height: 30px;
            border-radius: 100%;
            border: 1px solid #ffffff;
            display: block;
            padding: 4px;
        }

        .great-rtt .slick-next {
            right: -37px;
            bottom: auto;
        }

        .great-rtt .slick-prev {
            left: -50px;
            bottom: auto;
        }

        .datacenter-blk .center1.slick-slider .slick-slide.slick-center .strategic-core-council-cnt1 h3 {
            padding: 40px 0 10px;
            font-size: 24px;
            line-height: 26px;
        }

        .header-rt ul li a.active {
            position: relative;
        }

        .header-rt ul li a.active:after {
            content: "";
            width: 100%;
            display: block;
            height: 2px;
            background: #2680EB;
            left: 0;
            bottom: -4px;
            position: absolute;
        }

        .datacenter-blk .center1.slick-slider .slick-slide.slick-center .strategic-core-council-cnt1 p {
            padding: 0 0;
            font-size: 14px;
        }

        .datacenter-main .slick-slide.slick-center img {
            border: 0;
            transition: all 0.3s ease-in-out;
            -webkit-transition: all 0.9s ease-in-out;
            -moz-transition: all 0.9s ease-in-out;
            -ms-transition: all 0.9s ease-in-out;
            -o-transition: all 0.9s ease-in-out;
        }

        .center1 .slick-list {
            top: 0px;
        }

        .datacenter-main.center-block .know-more a.dc {
            margin: 30px auto;
        }

        .datacenter-main.center-block .slick-next {
            bottom: -65px;
        }

        .datacenter-main.center-block .slick-prev {
            bottom: -65px;
        }

        .great-rtt {
            padding: 39px 50px 0px;
        }

        .know-more.ceo a {
            margin: 15px auto 0;
        }

        .great-rt-in {
            max-width: 600px;
            margin-left: auto;
        }

        .strategic-core-council-cnt1 p br {
            display: none;
        }

        .footer-about.footer-bg {
            background: none;
        }

        .footer-copy-rights {
            max-width: 300px;
            margin: 0px auto 0;
        }

        .footer-copy-rights p {
            padding: 0px 0 5px;
            font-size: 11px;
            line-height: 14px;
        }

        .contact-blk-btm {
            padding: 0px 0;
        }

        .contact-blk-btm p {
            text-align: center;
            color: #ffffff;
        }

        .contact-blk-btm p b {
            text-align: center;
            color: #ffffff;
        }

        .letustalk a {
            color: #fff;
            border: 0;
            border-radius: 5px;
            font-size: 16px;
            line-height: 30px;
            background: #7BBC42;
            display: block;
            width: 120px;
            text-align: center;
            height: 30px;
            margin-left: auto;
            margin-right: 23px;
        }

        .footer-about.footer-bg {}

        .footer-about.footer-bg a {
            text-align: center;
            font-size: 17px;
            line-height: 16px;
            margin: 0;
        }

        .foot-menu li {
            padding: 0px 9px;
            float: right;
            border-right: 1px solid #eddfdf;
        }

        .top-foot {
            margin-top: 10px;
        }

        .top-foot ul {
            float: right;
        }

        .this-foot .footer-links {
            float: right;
            width: 100%;
            max-width: 80%;
        }

        .footer-copy-rights p {
            text-align: left;
        }

        .get-in-touch-rit {
            padding: 20px 0;
        }

        .footer-about.about {
            padding: 100px 0 0;
        }

        .board-of-directors-main.board2 {
            max-width: 1300px;
            margin: 0 auto;
        }

        .strategic-core-council {
            position: relative;
            z-index: 999999;
        }

        .strategic-core-council .center .slick-track {
            top: 50px;
        }

        .modal-container {
            display: block;
            position: absolute;
            top: 40px;
            z-index: 99;
            background: rgb(0 0 0 / 90%);
            left: 0;
            padding: 20px;
            width: 100%;
            margin: 0 auto;
            right: 0;
            border-radius: 10px;
        }

        .modal-content {
            position: relative;
            background: transparent;
            width: 80%;
            border: 0;
            margin: 0 auto;
        }

        .modal-header {
            border: 0;
            right: 0;
            padding: 0;
        }

        font-s .director-lt-cnt h3 {
            font-size: 22px;
        }

        .director-rt p {
            font-size: 15px;
            line-height: 25px;
        }

        .director-rt h3 {
            font-size: 20px;
        }

        .modal-header i {
            color: #fff;
            display: block;
            width: 100%;
            text-align: right;
            padding: 20px 20px 0 0;
        }



        /*-- award--*/
        .about-banner.award {
            background: url(../images/awardsandrecognition-banner.jpg) no-repeat center;
            margin: 0;
            margin-top: 118px;
        }

        .awards-block .tabBlock-tab .nav-link {
            color: #414141;
            width: 200px;
            height: 50px;
            line-height: 50px;
            border-radius: 40px;
            text-align: center;
            padding: 0;
            background: #acb8c3;
            cursor: pointer;
        }

        .awards-block .tabBlock-tab {
            padding: 0 10px;
        }

        .awards-block .tabBlock-tab.is-active .nav-link {
            background: #2680EB;
            color: #ffffff;
            width: 200px;
            height: 50px;
            line-height: 50px;
            border-radius: 40px;
            text-align: center;
            padding: 0;
            cursor: pointer;
        }

        .awards-block .tabBlock-tab.is-active .nav-link:hover {
            color: #ffffff;
        }

        .awards-block {
            background: #F1F1F1;
            padding: 60px 0;
        }

        .awards-block-main p {
            color: #000000;
            text-align: center;
            padding: 30px 0;
            max-width: 700px;
            margin: 0 auto;
        }

        .awards-block .tabBlock-pane ul {
            max-width: 1200px;
            margin: 0 auto;
            height: auto;
        }

        .awards-block .tabBlock-pane ul li {
            padding: 0 15px 30px;
        }

        .awards-block .tabBlock-pane ul li img {
            min-height: 510px;
        }

        .about-banner.testimonial {
            background: url(../images/testimonial-banner.jpg)no-repeat center;
        }


        .testimonial-block .tabBlock-tabs {
            padding: 30px 0 30px;
            /* position: absolute; */
            top: -120px;
            left: 200px;
        }

        .testimonial-block .tabBlock-tab {
            padding: 0 10px;
        }

        .testimonial-block .tabBlock-tab .nav-link {
            color: #414141;
            width: 200px;
            height: 50px;
            line-height: 50px;
            border-radius: 40px;
            text-align: center;
            padding: 0;
            background: #acb8c3;
            cursor: pointer;
        }

        .testimonial-block .tabBlock-tab.is-active .nav-link {
            background: #2680EB;
            color: #ffffff;
            width: 200px;
            height: 50px;
            line-height: 50px;
            border-radius: 40px;
            text-align: center;
            padding: 0;
        }

        .testimonial-block .tabBlock-tab.is-active .nav-link:hover {
            color: #ffffff;
        }

        .testimonial-block-main {
            background: #ffffff;
            margin: 0 auto;
            padding: 0px 40px 20px;
            border-radius: 20px;
            max-width: 1200px;
        }

        .testimonial-block h3 {
            color: #000000;
            position: relative;
            text-align: center;
            font-weight: 700;
            padding: 50px 0 20px;
        }

        .testimonial-block h3:before {
            background: #2680EB;
            width: 100px;
            height: 3px;
            left: 0;
            right: 0;
            top: -15px;
            content: "";
            position: absolute;
            margin: 0 auto;
        }

        .testimonial-block p {
            color: #000000;
            text-align: center;
            padding: 0 0 30px;
        }

        .testimonial-content {
            padding: 30px;
            box-shadow: 1px 1px 18px #cccccc;
            margin: 15px 0;
            border-radius: 5px;
            position: relative;
            min-height: 340px;
        }

        .testimonial-content1 {
            padding: 30px;
            box-shadow: 1px 1px 18px #cccccc;
            margin: 15px 0;
            border-radius: 5px;
            position: relative;
        }

        .testimonial-content:before {
            background: url(../images/comas-icon.png);
            width: 35px;
            height: 35px;
            left: -8px;
            top: -19px;
            content: "";
            position: absolute;
        }

        .testimonial-content-rt {
            padding: 30px 0 0;
        }

        .testimonial-content h4 {
            text-align: left;
            color: #242424;
            font-weight: 700;
            font-size: 18px;
            line-height: 18px;
        }

        .testimonial-content p {
            text-align: left;
            color: #242424;
        }

        .testimonial-block-main ul li p {
            text-align: left;
            padding: 10px 0 0;
        }

        .testimonial-block-main .slider ul {
            padding: 20px;
        }

        .testimonial-block-main .slick-dots {
            left: 0;
            right: 0;
            margin: 0 auto;
            width: 120px;
            bottom: -100px;
            top: auto;
            height: auto;
        }

        .testimonial-block-main .slick-dots li.slick-active {
            margin: 0;
        }

        .testimonial-block-main .slick-dots li {
            display: inline-block;
        }

        .testimonial-block-main .slick-dots li button:before {
            color: #ECECEC;
            border-radius: 100%;
            font-size: 12px;
        }

        .testimonial-block-main .slick-dots li.slick-active button:before {
            color: #2680EB;
        }

        .certifications-block h3 {
            color: #000000;
            position: relative;
            text-align: center;
            font-weight: 700;
            padding: 50px 0 20px;
        }

        .certifications-block h3:before {
            background: #2680EB;
            width: 100px;
            height: 3px;
            left: 0;
            right: 0;
            top: 20px;
            content: "";
            position: absolute;
            margin: 0 auto;
        }

        .certifications-block {
            background: #F1F1F1;
            padding: 60px 0;
            margin: 0 0 30px;
        }

        .about-banner.certifications {
            background: url(../images/certification-banner.png) no-repeat center;
            margin-bottom: 0;
        }

        .certifications-block p {
            color: #000000;
            text-align: center;
            padding: 0 0 60px;
        }

        .certifications-block-main {
            max-width: 1000px;
            margin: 0 auto;
        }

        .certifications-block-main ul li {
            padding: 0 10px 20px;
        }

        .certifications-mbl {
            display: none;
        }


        .certifications-block .slick-dots {
            left: 0;
            right: 0;
            margin: 0 auto;
            width: 264px;
            bottom: -70px;
            top: auto;
            height: auto;
        }

        .certifications-block .slick-dots li.slick-active {
            margin: 0;
        }

        .certifications-block .slick-dots li {
            display: inline-block;
        }

        .certifications-block .slick-dots li button:before {
            color: #2680EB;
            border-radius: 100%;
            font-size: 12px;
            opacity: 0.5;
        }

        .certifications-block .slick-dots li.slick-active button:before {
            color: #2680EB;
            opacity: 1;
        }

        .awards-block .slick-dots {
            left: 0;
            right: 0;
            margin: 0 auto;
            width: 210px;
            bottom: -50px;
            top: auto;
        }

        .awards-block .slick-dots li.slick-active {
            margin: 0;
        }

        .awards-block .slick-dots li {
            display: inline-block;
        }

        .awards-block .slick-dots li button:before {
            color: #2680EB;
            border-radius: 100%;
            font-size: 12px;
            opacity: 0.5;
        }

        .awards-block .slick-dots li.slick-active button:before {
            color: #2680EB;
            opacity: 1;
        }

        .drop-arrow {
            position: relative;
            padding: 0 20px 0 0;
        }

        .drop-arrow:before {
            position: absolute;
            top: 0;
            right: 0;
            color: #000;
            content: "\f107";
            font-family: "FontAwesome";
            font-size: 22px;
        }


        .board-of-directors .slick-dots {
            left: 0;
            right: 0;
            margin: 0 auto;
            width: 134px;
            bottom: -66px;
            top: auto;
            height: auto;
        }

        .board-of-directors .slick-dots li.slick-active {
            margin: 0;
        }

        .board-of-directors .slick-dots li {
            display: inline-block;
            width: auto;
            padding: 0;
        }

        .board-of-directors .slick-dots li button:before {
            color: #2680EB;
            border-radius: 100%;
            font-size: 12px;
            opacity: 0.5;
        }

        .board-of-directors .slick-dots li.slick-active button:before {
            color: #2680EB;
            opacity: 1;
        }





        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: unset;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: transparent;
            /* Black w/ opacity */
            left: 0;
            right: 0;
            margin: 0 auto;
        }



        /* The Close Button */
        .close {
            color: #ffffff;
            font-size: 28px;
            font-weight: bold;
            opacity: 1;
            text-align: right;
            border: 0;
            position: absolute;
            right: 15px;
            top: 50px;
            z-index: 9999;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }




        .modalDialog {
            position: fixed;
            font-family: Arial, Helvetica, sans-serif;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.8);
            z-index: -1;
            opacity: 0;
            -webkit-transition: opacity 300ms ease-in;
            -moz-transition: opacity 300ms ease-in;
            transition: opacity 300ms ease-in;
            pointer-events: none;
        }

        .modalDialog:target {
            opacity: 1;
            pointer-events: auto;
            z-index: 99999999999;
        }

        .modalDialog>div {
            width: 100%;
            position: relative;
            margin: 0 auto;
            padding: 5px 20px 13px 20px;
        }

        .close {
            padding: 0;
            color: #ffffff;
            line-height: 25px;
            position: absolute;
            right: 12.5%;
            text-align: center;
            top: 55px;
            width: 24px;
            text-decoration: none;
            background: none;
            font-weight: bold;
        }

        .close:hover {
            color: #4285F4;
        }

        .director-lt-cnt h3 {
            font-size: 30px;
        }

        .reg-im {
            margin-top: 33px;
            width: 375px;
        }

        .awards-block .tabBlock-pane ul li {
            position: relative;
        }

        .awards-block .tabBlock-pane ul li:hover .hover-award {
            display: block;
            top: 6%;
            left: 5%;
        }

        .hover-award {
            position: absolute;
            top: 0;
            left: 0;
            background: rgb(34 63 151 / 95%);
            width: 82%;
            height: 86%;
            display: none;
            padding: 80px 30px;
            text-align: center;
        }

        .hover-award h5 {
            font-size: 30px;
            line-height: 35px;
            color: #ffffff;
        }

        .hover-award p {
            font-size: 20px;
            line-height: 22px;
            color: #ffffff;
        }

        .hover-award span {
            font-size: 24px;
            line-height: 24px;
            color: #ffffff;
        }

        .white-bg .drop-arrow:before {
            color: #000000;
        }


        .about-banner.soc {
            background: url(../images/SOC_Banner.png);
            margin-bottom: 0;
        }

        .about-banner.dev {
            background: url(../images/devops-banner.jpg);
            margin-bottom: 0;
        }

        .about-banner.noc {
            background: url(../images/noc-banner.png);
        }

        .what-is-noc-main {
            max-width: 900px;
            margin: 50px auto;
        }

        .what-is-noc-main h3 {
            color: #000000;
            font-weight: 700;
            padding: 0 0 10px;
        }

        .what-is-noc-main p {
            color: #000000;
            text-align: justify;
        }

        .what-is-noc-lt {
            padding: 0px 15px 0;
        }

        .what-is-noc-rt img {
            padding: 5px;
            border-radius: 40px 0;
        }

        .what-is-noc-rt ul li:first-child img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }


        .lifeatpi-blk {}

        .about-banner.lifeatpi {
            background: url(../images/life-at-pi-banner.jpg);
            background-position: top center;
            z-index: 0;
        }

        .lifeatpi-top {
            max-width: 1100px;
            margin: 0 auto 0px;
            position: relative;
        }

        .lifeatpi-top ul li {
            padding: 15px;
        }

        .lifeatpi-top ul li img {
            padding: 10px;
        }

        .lifeatpi-top h3 {
            color: #000000;
            font-weight: 700;
            margin: 28px 0 0 9px;
            font-size: 52px;
            line-height: 54px;
            position: relative;
        }

        .lifeatpi-top h3:after {
            content: "";
            width: 26%;
            display: block;
            height: 3px;
            background: #7BBC42;
            left: 0;
            bottom: -4px;
            position: absolute;
        }


        .lifeatpi-blk .slick-dots {
            left: 0;
            right: 0;
            margin: 0 auto;
            width: 120px;
            bottom: -100px;
            top: auto;
            height: auto;
        }

        .lifeatpi-blk .slick-dots li.slick-active {
            margin: 0;
        }

        .lifeatpi-blk .slick-dots li {
            display: inline-block;
        }

        .lifeatpi-blk .slick-dots li button:before {
            color: #ECECEC;
            border-radius: 100%;
            font-size: 12px;
        }

        .lifeatpi-blk .slick-dots li.slick-active button:before {
            color: #2680EB;
        }

        .about-lifeatpi {
            padding: 50px 0;
        }

        .about-lifeatpi h3 {
            text-align: center;
            color: #000000;
            font-weight: 700;
            padding: 0 0 30px;
        }

        .about-lifeatpi p {
            color: #000000;
            padding: 0 0 20px;
        }


        .about-lifeatpi .slick-dots {
            left: 0;
            right: 0;
            margin: 0 auto;
            width: 120px;
            bottom: -100px;
            top: auto;
            height: auto;
        }

        .about-lifeatpi .slick-dots li.slick-active {
            margin: 0;
        }

        .about-lifeatpi .slick-dots li {
            display: inline-block;
        }

        .about-lifeatpi .slick-dots li button:before {
            color: #ECECEC;
            border-radius: 100%;
            font-size: 12px;
        }

        .about-lifeatpi .slick-dots li.slick-active button:before {
            color: #2680EB;
        }

        .workwithus-main {
            padding: 50px 0;
        }

        .about-banner.work {
            width: 100%;
            background-size: cover;
            background: #030045;
            height: 150px;
        }

        .about-banner-img {
            max-width: 800px;
            margin: 20px auto 0;
        }

        .career-opportunities ul {
            padding: 0 0 35px 0px;
        }

        .career-opportunities ul li input {
            box-shadow: 0px 0px 5px #00000017;
            color: #ADADAD;
            border: 0;
            width: 100%;
            display: block;
            border-radius: 5px;
            padding: 15px;
        }

        .career-opportunities ul li button {
            background: #2680EB;
            border: 0;
            color: #ffffff;
            padding: 15px;
            text-align: center;
            width: 100%;
            display: block;
            border-radius: 38px;
        }

        .career-opportunities {
            max-width: 1200px;
            margin: 0 auto;
        }

        .career-opportunities2 {
            max-width: 1200px;
            margin: 0 auto 10px;
        }

        .career-opportunities2 ul li ul {}

        .workwithus-main h3 {
            text-align: center;
            color: #000000;
            font-weight: 700;
            padding: 0 0 50px;
        }

        .workwithus-main strong {
            color: #000000;
            font-weight: 700;
            display: block;
            font-size: 16px;
            background: #F8F8F8;
            padding: 15px;
        }

        .career-opportunities2 span {
            color: #000000;
            display: block;
            font-size: 13px;
            background: #F8F8F8;
            padding: 15px 0;
            text-align: center;
        }

        .career-opportunities2 ul li {}

        .career-opportunities2-cnt ul li {
            background: #F8F8F8;
        }

        .career-opportunities2-cnt ul {
            padding: 0 15px;
        }

        .career-opportunities2 ul li a {
            background: #2680EB;
            border: 0;
            color: #ffffff;
            padding: 15px;
            text-align: center;
            width: 100%;
            display: block;
            border-radius: 38px;
        }

        .apply-for-position-main {
            max-width: 1000px;
            margin: 0 auto;
        }

        .apply-for-position-main h4 {
            font-size: 45px;
            line-height: 47px;
            color: #012E6A;
            font-family: 'Roboto', sans-serif;
            text-align: center;
            padding: 0 0 30px;
            font-weight: 700;
        }

        .apply-for-position-main p {
            text-align: center;
            color: #000000;
            padding: 0 0 30px;
        }

        .apply-for-position {
            background: #FAFAFA;
            padding: 50px 0;
        }

        .apply-for-position-main form {
            background: #ffffff;
            border: 1px solid #D3D3D3;
            border-radius: 20px;
            padding: 50px 30px;
        }

        .apply-for-position-main form input {
            display: block;
            width: 100%;
            padding: 15px;
            margin: 0 0 20px;
            border: 1px solid #B6B6B6;
            border-radius: 20px;
        }

        .apply-for-position-main form textarea {
            display: block;
            width: 100%;
            padding: 15px;
            margin: 0 0 20px;
            border: 1px solid #B6B6B6;
            border-radius: 20px;
            color: #242424;
            height: 200px;
            resize: none;
        }

        .apply-for-position-main form button {
            background: #2680EB;
            border: 0;
            color: #ffffff;
            padding: 15px;
            text-align: center;
            width: 100%;
            display: block;
            border-radius: 38px;
            width: 175px;
            margin: 0 auto;
            font-size: 23px;
        }


        .about-banner.job-details {
            background: url(../images/job-details-ban.jpg);
            padding: 150px 160px;
            height: auto;
            margin: 0;
            background-position: center;
            z-index: 0;
        }



        .seniour-uxui-designer-main {
            max-width: 1000px;
            margin: 0 auto;
            padding: 60px 0;
        }

        .seniour-uxui-designer-main h3 {
            text-align: center;
            color: #000000;
            font-weight: 700;
            padding: 0 0 20px;
        }

        .seniour-uxui-designer-main p {
            text-align: center;
            color: #000000;
            padding: 0 0 30px;
        }

        .job-description h4 {
            color: #7BBC42;
            font-size: 20px;
            line-height: 26px;
            background: #E7E7E7;
            display: block;
            padding: 15px;
        }

        .job-description {
            border: 1px solid #C5C5C5;
            margin: 20px 0;
        }

        .job-description p {
            text-align: left;
            padding: 10px 0;
        }

        .job-description-phera {
            padding: 20px 15px;
        }

        .seniour-uxui-designer-main a.apply {
            background: #2680EB;
            border: 0;
            color: #ffffff;
            padding: 15px;
            text-align: center;
            width: 100%;
            display: block;
            border-radius: 38px;
            width: 175px;
            margin: 30px 0 0;
        }

        .personal-information {
            padding: 0 0 50px;
        }

        .personal-information h4 {
            font-size: 45px;
            line-height: 47px;
            color: #7BBC42;
            font-weight: 700;
            padding: 0 0 30px;
        }

        .personal-information input {
            width: 100%;
            display: block;
            height: 40px;
            padding: 0 15px;
            border-radius: 5px;
            border: 1px solid #9C9C9C;
        }

        .personal-information textarea {
            width: 100%;
            display: block;
            height: 100px;
            padding: 0 15px;
            resize: none;
            border-radius: 5px;
            border: 1px solid #9C9C9C;
        }

        .personal-information label {
            font-size: 24px;
            line-height: 26px;
            color: #242424;
        }

        .personal-information form ul li {
            margin: 0 0 20px;
        }

        .personal-information a {
            font-size: 24px;
            line-height: 26px;
            color: #242424;
            border: 1px solid #F1F1F1;
            padding: 10px;
            text-align: center;
        }

        .l-content input {
            width: 20px;
            height: 20px;
            display: inline-block;
            border-radius: 5px;
            border: 1px solid #9C9C9C;
        }

        .l-content span {
            max-width: 500px;
            display: inline-block;
            height: 40px;
            padding: 0 15px;
            font-size: 24px;
            line-height: 26px;
        }

        .personal-information form button {
            background: #2680EB;
            border: 0;
            color: #ffffff;
            padding: 15px;
            text-align: center;
            width: 100%;
            display: block;
            border-radius: 38px;
            width: 175px;
            margin: 0;
            font-size: 30px;
        }

        .personal-information h4 {
            font-size: 30px;
            line-height: 32px;
        }

        .ux-designer {
            background: #012E6A;
            height: 150px;
        }

        .ux-designer p {
            padding: 0 0 5px;
        }


        /*-- rims page starts here--*/
        /*.about-banner.rims{background: url(../images/rims-banner.png)no-repeat center;height: auto;padding: 200px 100px;background-size:cover;}*/
        /*.what-is-rims{padding:0 50px 50px;}*/
        /*.what-is-rims h3{color: #000000;font-weight: 700;padding: 0 0 10px;}*/
        /*.what-is-rims p{color: #000000;}*/
        /*.why-rims{background: #012E6A;border-radius: 300px 0px 0px 300px;padding: 90px;margin-left: 80px;margin-bottom: 30px;}*/
        /*.why-rims h3{font-weight: 700;color: rgb(255 255 255 / 30%);font-size: 65px;}*/
        /*.why-rims h3 span{font-size: 60px;}*/
        /*.why-rims ul{padding: 30px 0 0;max-width: 960px;margin-left: auto;}*/
        /*.why-rims ul li{width: 20%;padding: 0 20px;}*/
        /*.why-rims ul li img{width: auto;margin: 0 auto;}*/
        /*.why-rims ul li p{text-align: center;padding: 20px 0 0;}*/
        /*.our-rim-services{padding: 50px 0 0;background: #F1F1F1;}*/
        /*.our-rim-services h3{color: #000000;font-weight: 700;padding: 0 0 20px 60px;}*/


        /*.our-rim-services .nav-tabs .nav-link{border-radius: 6px;font-size: 24px;color: #000000;padding: 15px 30px;}*/
        /*.our-rim-services .tabBlock-tab.is-active .nav-link{color: #ffffff;background: #7BBC42;border-radius: 35px;}*/
        /*.our-rim-services .tabBlock-tabs{padding: 30px 0 0;}*/
        /*.rims-services-cnt{box-shadow:0px 0px 3px #EBEBEB;background: #ffffff;padding: 45px;border: 1px solid #EBEBEB;}*/
        /*.rims-services-cnt p{color: #242424;text-align: center;}*/
        /*.our-rim-services-tab{padding: 50px 0;}*/
        /*.our-rim-services-tab ul{max-width: 1000px;margin: 0 auto;}*/
        /*.our-rim-services-tab ul li{padding: 0 10px 20px;}*/
        /*.rims-services-cnt img{width:auto;margin: 0 auto;}*/
        /*.rims-services-cnt p{padding: 20px 0 0;}*/
        /*.computer-network{background: #ffffff;}*/
        /*.computer-network-main{max-width: 938px;margin: 0 auto;padding: 0 120px 50px 0;}*/
        /*.computer-network{padding: 60px 0;}*/
        /*.computer-network-main span{color: #7BBC42;font-size: 18px;font-family: 'Roboto', sans-serif;font-weight: normal;line-height: 22px;}*/
        /*.computer-network-main h3{padding: 20px 0;line-height: 32px;}*/
        /*.computer-network-main p{color: #525252;}*/
        /*.computer-network-main a{color: #1C1C1C; width: 100px;border: 1px solid #EBEBEB;text-align: center;height: 30px;line-height: 30px;border-radius: 15px;margin: 10px 0 0 0;}*/
        /*.computer-network-left{padding: 30px 0 0 0;}*/
        /*.computer-network-main.network{padding: 0 0 50px 120px;}*/
        /*.computer-network-main h3 small {font-size: 60%;font-weight: 700;}*/
        /*.row-reverse {display: flex;flex-direction: row-reverse;}*/
        /*.incident-management{padding: 50px 15px;background: #ffffff;}*/
        /*.incident-management h3{text-align: center;}*/
        /*.incident-management-main{max-width: 1000px;margin: 0 auto;}*/
        /*.incident-management-wf ul{box-shadow: 1px 1px 10px #0000000d;padding: 10px;margin: 0 0 10px;background: #ffffff;}*/
        /*.incident-management-wf h4{font-size: 24px;line-height: 26px;color: #000000;padding: 0 0 20px;font-weight: 700;}*/
        /*.incident-management-wf{background: #FAFAFA;border:1px solid #F1F1F1;padding: 38px 20px 40px;}*/
        /*.incident-management-left{padding: 20px 0 0 0;}*/
        /*.incident-management-wf ul li{padding: 0 5px;}*/
        /*.incident-management-wf ul li span{display: block;text-align: center;color: #012E6A;font-weight: 700;}*/
        /*.incident-management-wf ul.p1 li span{color: #000000;font-weight: 400;}*/
        /*.incident-management-left p{color: #012E6A;padding: 20px 0 0;}*/
        /*.drop-down3{left: -201px;right: auto;}*/
        /*.incident-management-main.major{max-width: 700px;margin: 0 160px 0 auto;}*/
        /*.incident-management-main.problem{max-width: 700px;margin: 0 auto 0 160px;}*/
        /*.custom-scheduled-reporting{padding: 50px 20px;}*/
        /*.custom-scheduled-reporting{text-align: center;background: #F1F1F1;}*/
        /*.custom-scheduled-reporting-cnt{box-shadow:1px 1px 5px #0000001A;padding: 20px;background: #ffffff;}*/
        /*.custom-scheduled-reporting-cnt span{color: #7BBC42;font-weight: 700;padding: 0 0 10px;display: block;}*/
        /*.custom-scheduled-reporting-cnt p{color: #707070;}*/
        /*.custom-scheduled-reporting-main{max-width: 1000px;margin: 0 auto;}*/
        /*.custom-scheduled-reporting-main ul{padding: 30px 0 0;}*/
        /*.custom-scheduled-reporting-main ul li{padding:0 15px 30px;}*/
        /*.resource-distribution p{color: #000000;padding: 0 0 10px 130px;position: relative;}*/
        /*.resource-distribution p:after{position: absolute;top: 8px;background: #f1f1f1;height: 5px;border-radius: 5px;content: "";width: 110px;left: 0;}*/
        /*.resource-distribution p:before{position: absolute;top: 8px;background:#498183;height: 5px;border-radius: 5px;content: "";width: 56px;left: 0;z-index: 99;}*/
        /*.resource-distribution p.network:before{background:#45D2DE;width: 46px;}*/
        /*.resource-distribution p.databases:before{background:#409FC4;width: 46px;}*/
        /*.resource-distribution p.erp:before{background:#5F7843;width: 30px;}*/
        /*.resource-distribution p.security:before{background:#64DDB7;width: 56px;}*/
        /*.resource-distribution p.storage:before{background:#314686;width: 30px;}*/
        /*.resource-distribution p.business:before{background:#6B9644;width: 30px;}*/
        /*.resource-distribution p.vendors:before{background:#8AB5E8;width: 30px;}*/
        /*.incident-management.resource{background: #f1f1f1;}*/


        /*.incident-management.resource .incident-management-wf{background: #f1f1f1;padding: 0;}*/
        /*.incident-management.resource .incident-management-right {padding: 0 0 0 100px;}*/
        /*.resource-distribution{background: #ffffff;padding: 20px;}*/
        /*.execution-team-structure{padding: 50px 20px;background: #ffffff;}*/
        /*.execution-team-structure-main{}*/
        /*.execution-team-structure h4{color: rgb(1 46 106 / 5%);font-style: italic;font-size: 60px;font-weight: 700;max-width: 683px;}*/
        /*.execution-team-structure h5{color: #012E6A;margin: -8px 0 0;font-size: 30px;font-weight: 700;max-width: 683px;text-align: center;padding: 0 0 50px;}*/
        /*.execution-team-structure-main{max-width: 900px;margin: 0 auto;}*/
        /*.rims-parameters-cnt{border: 1px solid #4D68EE;background: #F8F9FD;border-radius: 12px;padding: 20px;min-height: 350px;}*/
        /*.rims-parameters-cnt h4{font-size: 22px;color: #000000;font-weight: 700;padding: 0 0 30px;}*/
        /*.avg-productivity{border: 1px solid #E9E9E9;background: #ffffff;margin: 0 0 10px;border-radius: 12px;}*/
        /*.avg-productivity p{font-size: 18px;color: #000000;padding: 10px 10px 10px 24px;}*/
        /*.rims-parameters-cnt p{color: #000000;}*/
        /*.rims-parameters-main{max-width: 1000px;margin: 0 auto;padding: 50px 0;}*/
        /*.rims-parameters-cnt img{width:auto;margin: 0 auto;}*/
        /*.avg-productivity p span{color: #ADADAD;font-size: 12px;position: relative;padding: 0 21px 0 0;}*/
        /*.avg-productivity p span:after{position: absolute;top: -9px;height: 32px;border-radius: 100%;content: "";width: 32px;left: -5px;z-index: 99;border:3px solid #FF8F68;}*/
        /*.green-circle-block{border: 4px solid #7BBC42;width: 135px;height: 135px;margin: 0 auto 30px;border-radius: 100%;padding: 43px 0 0;text-align: center;}*/
        /*.green-circle-block span{font-size:35px;line-height:37px;color: #414141;}*/

        /*.benefits-main{max-width: 1200px;margin: 0 auto;padding: 70px  0;}*/
        /*.benefits-left{}*/
        /*.benefits-left h4{color: rgb(1 46 106 / 5%);font-style: italic;font-size: 60px;font-weight: 700;}*/
        /*.benefits-left h5{color: #012E6A;margin: -8px 0 0;font-size: 30px;font-weight: 700;padding: 0 0 50px;}*/
        /*.benefits-left p{font-size: 14px;}*/
        /*.drop-down4{left: -214px;right: auto;}*/


        /*-- rims page starts here--*/
        .about-banner.rims {
            background: url(../images/RIMS_ban_ban.png)no-repeat;
            height: auto;
        }

        .what-is-rims {
            padding: 0 35px 50px;
        }

        .what-is-rims h3 {
            color: #000000;
            font-weight: 700;
            padding: 0 0 10px;
        }

        .what-is-rims p {
            color: #000000;
        }

        .why-rims {
            padding: 0px 0;
            max-width: 1200px;
            margin: 0 auto;
        }

        .why-rims h3 {
            color: #000000;
            font-weight: 700;
            padding: 0 0 10px
        }

        .why-rims ul {
            padding: 30px 0;
            margin-left: auto;
        }

        .why-rims ul li {
            width: 20%;
            padding: 0 20px;
        }

        .why-rims ul li img {
            width: auto;
            margin: 0 auto;
        }

        .why-rims ul li p {
            text-align: center;
            padding: 20px 0 0;
            color: #707070;
        }

        .our-rim-services {
            padding: 30px 0 0;
        }

        .our-rim-services h3 {
            color: #000000;
            font-weight: 700;
            padding: 0 0 30px;
        }

        .our-rim-services .nav-link p {
            color: #242424;
            text-align: center;
            padding: 10px 0;
        }

        .our-rim-services .tabBlock-tabs {
            max-width: 1100px;
            margin: 0 auto 16px;
            background: #E6E6E6;
            border: 1px solid #cccccc !important;
        }

        .our-rim-services .tabBlock-tabs li {
            width: 20%;
        }

        .our-rim-services .tabBlock-tabs li img {
            width: auto;
            margin: 0 auto;
        }

        .our-rim-services .nav-tabs .nav-link {
            border-radius: 6px;
            font-size: 24px;
            color: #000000;
            padding: 15px 30px;
            cursor: pointer;
        }

        .our-rim-services .tabBlock-tab.is-active .nav-link {
            color: #ffffff;
            background: #ffffff;
            border-top: 5px solid #2680EB;
            border-radius: 0;
        }

        .our-rim-services .tabBlock-tabs {}

        .computer-network-grey-bg {
            background: #F6F6F6;
            padding: 50px 0;
        }

        .computer-network-white-bg {
            padding: 50px 0;
        }

        .rims-services-cnt {
            box-shadow: 0px 0px 3px #EBEBEB;
            background: #ffffff;
            padding: 30px;
            border: 1px solid #EBEBEB;
        }

        .rims-services-cnt p {
            color: #242424;
            text-align: center;
        }

        .our-rim-services-tab {
            padding: 50px 0;
        }

        .our-rim-services-tab ul {
            max-width: 1000px;
            margin: 0 auto;
        }

        .our-rim-services-tab ul li {
            padding: 0 10px 20px;
        }

        .rims-services-cnt img {
            width: auto;
            margin: 0 auto;
        }

        .rims-services-cnt p {
            padding: 20px 0 0;
        }

        .computer-network {
            background: #ffffff;
        }

        .computer-network-main {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 0px 0px 0;
        }

        .computer-network {
            padding: 0px 0;
        }

        .computer-network-main span {
            color: #223F98;
            font-size: 18px;
            font-family: 'Roboto', sans-serif;
            font-weight: 500;
            line-height: 22px;
            padding: 10px 0 10px;
            display: block;
        }

        .computer-network-main h3 {
            padding: 15px 0;
            line-height: 42px;
        }

        .computer-network-main p {
            color: #414141;
            padding: 0 0 15px;
        }

        .computer-network-main a {
            color: #1C1C1C;
            width: 100px;
            border: 1px solid #EBEBEB;
            text-align: center;
            height: 30px;
            line-height: 30px;
            border-radius: 15px;
            margin: 10px 0 0 0;
        }

        .computer-network-left {
            padding: 0px 20px 0 70px;
        }

        .computer-network-right {
            padding: 50px 10px 0;
        }

        .computer-network-main.network {}

        .computer-network-main h3 small {
            font-size: 60%;
            font-weight: 700;
        }

        .row-reverse {
            display: flex;
            flex-direction: row-reverse;
        }

        .incident-management {}

        .incident-management h3 {
            text-align: center;
        }

        .incident-management-main {
            max-width: 1200px;
            margin: 0 auto;
        }

        .incident-management-wf ul {
            box-shadow: 1px 1px 10px #0000000d;
            background: #012E6A;
            margin: 0;
        }

        .incident-management-wf h4 {
            font-size: 24px;
            line-height: 30px;
            color: #000000;
            padding: 0 0 20px;
            font-weight: 700;
        }

        .incident-management-wf {
            padding: 38px 20px 40px;
        }

        .incident-management-left {
            padding: 0px 0 0 0;
        }

        .incident-management-wf ul li {
            padding: 13px 6px;
            border: 1px solid #E1E1E1;
        }

        .incident-management-wf ul li span {
            display: block;
            text-align: center;
            color: #ffffff;
            font-weight: 700;
        }

        .incident-management-wf ul.p1 {
            background: #ffffff;
        }

        .incident-management-wf ul.p1 li span {
            color: #000000;
            font-weight: 400;
        }

        .incident-management-left p {
            color: #012E6A;
            padding: 20px 0 0;
        }

        .drop-down3 {
            left: -201px;
            right: auto;
        }

        .incident-management-main.major {
            max-width: 700px;
            margin: 0 160px 0 auto;
        }

        .incident-management-main.problem {
            max-width: 700px;
            margin: 0 auto 0 160px;
        }

        .custom-scheduled-reporting {
            padding: 50px 20px;
            background: #F0F5EF;
        }

        .custom-scheduled-reporting h2 {
            color: #1C1C1C;
            font-weight: 500;
            padding: 0 0 20px;
            font-size: 40px;
            line-height: 42px;
        }

        .custom-scheduled-reporting p {
            color: #1C1C1C;
            padding: 0 0 10px;
        }

        .custom-scheduled-reporting h4 {
            color: #1C1C1C;
            font-size: 24px;
            font-weight: 500;
            padding: 10px 0 10px;
        }

        .custom-scheduled-reporting-main ul li {
            padding: 0 15px 30px;
        }

        .custom-scheduled-reporting-rt {
            padding: 50px 0;
        }

        .resource-distribution {}

        .resource-distribution-right h2 {
            color: #000000;
            padding: 0 0 20px;
        }

        .resource-distribution-right {
            padding: 130px 0 0;
        }

        .resource-distribution-right span {
            color: #707070;
            position: relative;
            padding: 0px 0 20px 20px;
            display: block;
        }

        .resource-distribution-right ul li span:before {
            background: #42D0DC;
            content: "";
            width: 10px;
            height: 10px;
            left: 2px;
            top: 2px;
            position: absolute;
        }

        .resource-distribution-right ul {
            max-width: 500px;
        }

        .resource-distribution-main {
            max-width: 1200px;
            margin: 0 auto;
        }

        .resource-distribution-right ul li:nth-child(2) span:before {
            background: #457D7F;
        }

        .resource-distribution-right ul li:nth-child(3) span:before {
            background: #49C6F7;
        }

        .resource-distribution-right ul li:nth-child(4) span:before {
            background: #2F4485;
        }

        .resource-distribution-right ul li:nth-child(5) span:before {
            background: #89A2EC;
        }

        .resource-distribution-right ul li:nth-child(6) span:before {
            background: #3862E1;
        }

        .resource-distribution-right ul li:nth-child(7) span:before {
            background: #A4DCF8;
        }

        .resource-distribution-right ul li:nth-child(8) span:before {
            background: #206781;
        }

        .resource-distribution-right p {
            color: #012E6A;
            font-size: 18px;
            font-weight: 500;
            padding: 10px 0 0;
        }

        .resource-distribution.grey {
            background: #F0F5EF;
        }

        .resource-distribution-left h2 {
            color: #000000;
            padding: 0 0 60px;
        }

        .resource-distribution-right.table {
            padding: 102px 0 0px;
        }

        .resource-distribution-left {
            padding: 0 75px 0 0;
        }

        .resource-distribution-right.table img {
            width: auto;
            margin: 0 auto;
        }

        .resource-distribution-left ul li p {
            color: #707070;
            text-align: center;
            padding: 10px 0;
        }

        .resource-distribution-left ul li {
            position: relative;
        }

        .resource-distribution-left ul li:after {
            content: "";
            position: absolute;
            top: 50%;
            background: url(../images/rims/blue-arrow.png) no-repeat;
            width: 64px;
            height: 85px;
            right: -24px;
            left: auto;
            background-size: 70%;
            transform: translateY(-50%);
        }

        .avg-productivity-blk-right h2 {
            color: #242424;
            text-align: center;
            padding: 0 0 40px;
        }

        .avg-productivity-blk-right p {
            color: #012E6A;
            font-size: 18px;
            font-weight: 500;
            padding: 30px 0 0;
            text-align: center;
        }

        .avg-productivity-blk {
            max-width: 1200px;
            margin: 0 auto;
            padding: 30px 0;
        }

        .avg-productivity-blk-right {
            padding: 50px 50px 0;
        }

        .avg-productivity-blk-right.customer img {
            width: auto;
            margin: 0 auto;
        }

        .benefits-main {
            max-width: 1000px;
            margin: 0 auto;
        }

        .benefits-main ul li {
            padding: 15px;
        }

        .benefits-img {
            position: relative;
        }

        .benefits-img:hover p {
            display: block;
        }

        .benefits-img p {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            color: #ffffff;
            padding: 55px 20px 0;
            left: 0;
            right: 0;
            margin: 0 auto;
            text-align: center;
            font-size: 25px;
            line-height: 29px;
            background: rgb(34 63 151 / 90%);
            height: 100%;
            display: none;
        }

        .custom-scheduled-reporting-main {
            max-width: 1200px;
            margin: 0 auto;
        }

        .drop-down4 {
            left: -214px;
            right: auto;
        }

        .resource-distribution.grey {
            padding: 30px 0;
        }

        /*--about-banner privacy-policy--*/
        .about-banner.privacy-policy {
            background: url(../images/privacy-policy.png)no-repeat center;
            background-size: cover;
            background-position: bottom;
            padding: 20px 20px;
        }

        .about-banner.privacy-policy h2 {
            text-align: center;
        }

        .privacy-policy-blk {
            padding: 20px 0;
        }

        .privacy-policy-main {
            max-width: 1000px;
            margin: 0 auto;
            box-shadow: 0px 0px 4px #00000045;
            border-radius: 24px;
            padding: 40px;
        }

        .privacy-policy-main h3 {
            color: #7BBC42;
            font-size: 30px;
            line-height: 32px;
            font-weight: 800;
            padding: 0 0 15px;
        }

        .privacy-policy-main p {
            color: #707070;
            padding: 0 0 20px;
            text-align: justify;
        }

        .privacy-policy-main h4 {
            color: #000000;
            font-size: 18px;
            font-weight: 700;
            padding: 0 0 10px;
        }

        .about-banner.acceptable-policy {
            background: url(../images/policy.png)no-repeat center;
            background-size: cover;
            background-position: bottom;
            height: 140px;
        }

        .about-banner.acceptable-policy h2 {
            text-align: center;
        }

        .about-banner.case-studie {
            background: url(../images/case-studies-ban.png)no-repeat;
            background-size: cover;
            background-position: center;
            margin-bottom: 0;
        }

        .case-block-main {
            max-width: 1200px;
            margin: 0 auto;
            background: #ffffff;
            padding: 50px;
            border-radius: 60px 0 0 0;
        }

        .case-block-main h3 {
            text-align: center;
            color: #242424;
            font-weight: 700;
            padding: 0 0 30px;
        }

        .case-block-main p {
            text-align: center;
            color: #242424;
            padding: 0 0 30px;
        }

        .case-content h4 {
            font-size: 24px;
            line-height: 26px;
            color: #000000;
            font-weight: 500;
            padding: 15px 0 0px;
            min-height: 70px;
        }

        .case-content p {
            font-size: 18px;
            line-height: 20px;
            color: #000000;
            text-align: left;
            padding: 10px 0;
        }

        .case-content a.download {
            background: #2680EB;
            color: #ffffff;
            text-align: center;
            width: 200px;
            font-size: 18px;
            line-height: 40px;
            height: 40px;
            border-radius: 20px;
            margin: 20px 0 0;
            position: relative;
        }

        .case-content a.download:after {
            position: absolute;
            top: 7px;
            right: -95px;
            background: url(../images/share.png) no-repeat;
            width: 28px;
            height: 28px;
            content: "";
        }

        .case-content {
            padding: 25px;
            box-shadow: 1px 1px 18px #cccccc;
            border-radius: 5px;
            min-height: 440px;
        }

        .case-block-main ul li {
            padding: 15px;
        }

        .fill-your-details-cnt {
            background: #ffffff;
        }

        .fill-your-details .modal-container {
            background: #ffffff;
            border-radius: 25px;
            width: 500px;
            padding: 30px;
            position: relative;
        }

        .fill-your-details .close {
            right: 10px;
            top: 12px;
            color: #2680EB;
        }

        .fill-your-details h4 {
            color: #000000;
            font-weight: 700;
            text-align: center;
            padding: 0 0 30px;
            font-size: 18px;
        }

        .fill-your-details button {
            background: #2680EB;
            color: #ffffff;
            text-align: center;
            width: 200px;
            font-size: 18px;
            line-height: 40px;
            height: 40px;
            border-radius: 20px;
            margin: 20px auto 0;
            position: relative;
            border: 0;
            display: block;
        }

        .fill-your-details {
            position: relative;
        }

        .fill-your-details ul li {
            padding: 0 15px 15px;
        }

        .fill-your-details ul li label {
            color: #707070;
            font-weight: 500;
        }

        .fill-your-details ul li input {
            border: 1px solid #e1dddd;
            height: 35px;
            line-height: 35px;
        }

        .case-block-main .slick-dots {
            left: 0;
            right: 0;
            margin: 0 auto;
            width: 120px;
            bottom: -100px;
            top: auto;
            height: auto;
        }

        .case-block-main .slick-dots li.slick-active {
            margin: 0;
        }

        .case-block-main .slick-dots li {
            display: inline-block;
        }

        .case-block-main .slick-dots li button:before {
            color: #ECECEC;
            border-radius: 100%;
            font-size: 12px;
        }

        .case-block-main .slick-dots li.slick-active button:before {
            color: #2680EB;
        }


        .about-banner.blogs {
            background: url(../images/case-studies-ban.png)no-repeat center;
            height: auto;
            background-size: cover;
        }

        .case-block-main.greenshape {
            position: relative;
        }

        .case-block-main.greenshape {
            padding: 37px 40px;
        }

        /*.case-block-main.greenshape:before{position: absolute;top: 0;right: auto;background: #7BBC42;width: 75px;height: 75px;content: "";border-radius: 100% 0 0 0;left: -13px;}*/
        .case-content span {
            font-size: 18px;
            line-height: 20px;
            color: #707070;
            padding: 20px 0 0px 40px;
            display: block;
            position: relative;
        }

        .case-content small {
            font-size: 18px;
            line-height: 20px;
            color: #707070;
            padding: 20px 0 10px 40px;
            display: inline-block;
            position: relative;
        }

        .case-content span.date:before {
            position: absolute;
            top: 10px;
            right: auto;
            background: url(../images/date-icon.png) no-repeat;
            width: 40px;
            height: 40px;
            content: "";
            left: -5px;
        }

        .case-content span.edit:before {
            position: absolute;
            top: 18px;
            right: auto;
            background: url(../images/edit-icon.svg) no-repeat;
            width: 40px;
            height: 40px;
            content: "";
            left: -5px;
        }

        .case-content small:before {
            position: absolute;
            top: 13px;
            right: auto;
            background: url(../images/share.png) no-repeat;
            width: 28px;
            height: 28px;
            content: "";
            left: -5px;
        }

        .case-content a.read-more {
            font-weight: 500;
            color: #012E6A;
            font-size: 18px;
        }

        .case-block-main.greenshape .case-content {
            min-height: 535px;
        }

        .case-block-main.greenshape1 {
            padding: 100px;
            position: relative;
        }

        .case-block-main.greenshape1:after {
            position: absolute;
            top: -23px;
            left: auto;
            background: #7BBC42;
            width: 75px;
            height: 75px;
            content: "";
            border-radius: 0 100% 0 0;
            right: -23px;
            display: none;
        }

        .case-block-main.greenshape1 p {
            text-align: left;
            padding: 10px 0;
        }

        .blog-ceo {
            max-width: 500px;
            padding: 10px 0 0;
        }

        .blog-ceo-rt {
            padding: 0;
        }

        .blog-ceo-rt ul li a i {
            color: #7BBC42;
        }

        .blog-ceo-rt ul li {
            padding: 10px 0 0 20px;
        }

        .blog-ceo-lt img {
            width: auto;
        }





        .about-banner.knowledge {
            background: url(../images/know-hub.png)no-repeat center;
            background-size: cover;
            margin-bottom: 0;
        }

        .about-banner.knowledge {}

        .knowledge-hub-gallery {
            margin: 0;
        }

        .knowledge-hub-gallery-top h3 {
            text-align: center;
            font-weight: 700;
        }

        .knowledge-hub-gallery-top p {
            text-align: center;
            padding: 0 0 30px;
        }

        .knowledge-hub-gallery .slick-dots {
            left: 0;
            right: 0;
            margin: 0 auto;
            width: 120px;
            bottom: -100px;
            top: auto;
        }

        .knowledge-hub-gallery .slick-dots li.slick-active {
            margin: 0;
        }

        .knowledge-hub-gallery .slick-dots li {
            display: inline-block;
        }

        .knowledge-hub-gallery .slick-dots li button:before {
            color: #ECECEC;
            border-radius: 100%;
            font-size: 12px;
        }

        .knowledge-hub-gallery .slick-dots li.slick-active button:before {
            color: #2680EB;
        }

        .article-blk {
            background: #F9F9F9;
            padding: 20px 0;
        }

        .article-blk h2 {
            color: #012E6A;
            text-align: center;
            padding: 0 0 20px;
        }

        .article-blk p {
            color: #414141;
            text-align: center;
            padding: 0 0 40px;
        }

        .latest-block span {
            font-size: 18px;
            color: #ADADAD;
            padding: 20px 0 10px;
            display: block;
            border-bottom: 1px solid #CBCBCB;
            margin-bottom: 10px;
        }

        .article-blk-latest {
            padding: 10px 0;
            margin: 0;
        }

        .latest-block h3 {
            font-size: 22px;
            line-height: 28px;
            color: #000000;
            display: block;
            font-weight: 500;
        }

        .latest-block p {
            padding: 0 0 20px;
            text-align: left;
        }

        .latest-block a {
            color: #7BBC42;
            font-size: 18px;
            font-weight: 500;
        }

        .article-blk-latest-right {
            background: #ffffff;
            padding: 8px;
            border-radius: 8px;
            box-shadow: 0px 0px 6px #0000003D;
        }

        .article-blk-latest-right strong {
            color: #7BBC42;
            font-size: 20px;
            font-style: italic;
            font-weight: 700;
        }

        .new-tranding-rt {
            padding: 0;
        }

        .new-tranding-rt span {
            font-size: 12px;
            color: #ADADAD;
            padding: 10px 0;
            display: block;
        }

        .new-tranding-rt p {
            text-align: left;
            padding: 0;
        }

        .new-tranding {
            padding: 15px 0;
            border-bottom: 1px solid #cccccc;
            margin: 0;
        }

        .new-tranding-lt {
            padding: 0 10px 0 0;
        }

        .article-blk-main .tabBlock {
            padding: 0px 0 0;
            border-top: 1px solid #cccccc;
        }

        .article-blk-main .tabBlock-tab.is-active .nav-link {
            font-size: 25px;
            color: #000000;
            font-weight: 500;
            position: relative;
            border-top: 2px solid #7BBC42;
            border-radius: 0;
            padding: 12px 0;
        }

        .article-blk-main .tabBlock-tab .nav-link {
            font-size: 25px;
            color: #707070;
            font-weight: 400;
            border-top: 2px solid #ffffff;
            padding: 12px 0;
        }

        .article-blk-main .tabBlock-tab {
            padding: 0 20px 0 0;
        }

        .podcast-main {}

        .podcast-main h2 {
            color: #012E6A;
            text-align: center;
            padding: 0 0 20px;
        }

        .podcast-main p {
            text-align: center;
            padding: 0 0 69px;
            color: #414141;
        }

        .podcast-main {
            padding: 50px 0;
        }

        .podcast-top {
            background: #F1F8FF;
            border-radius: 125px;
            box-shadow: 0px 0px 5px #012E6A1F;
            margin: -0 0 50px;
        }

        .podcast-top-lt {
            margin: -48px 0 0 -11px;
            padding: 0;
        }

        .podcast-top-rt {
            padding: 60px 60px 0;
        }

        .podcast-top-rt span {
            color: #7BBC42;
            font-weight: 500;
            padding: 0 0 20px;
            display: block;
        }

        .podcast-top-rt p {
            text-align: left;
            padding: 0 0 20px;
        }

        .podcast-top-rt h3 {
            color: #000000;
            font-weight: 500;
            font-size: 25px;
            line-height: 30px;
            padding: 0 0 20px;
        }

        .podcast-main {
            max-width: 1200px;
            margin: 0 auto;
        }

        .podcast-cnt {
            border-radius: 100px;
            box-shadow: 0px 0px 5px #012E6A1F;
            background: #F9FCFF;
        }

        .podcast-cnt span {
            color: #7BBC42;
            font-weight: 500;
            padding: 0 0 20px;
            display: block;
            text-align: center;
        }

        .podcast-cnt p {
            text-align: center;
            padding: 0 0 20px;
        }

        .podcast-cnt h3 {
            color: #000000;
            font-weight: 500;
            font-size: 25px;
            line-height: 30px;
            padding: 0 16px 20px;
            text-align: center;
        }

        .podcast-cnt img {
            padding: 0px 0 20px;
            margin: 0 0 0;
        }

        .podcast-main .slick-dots {
            left: 0;
            right: 0;
            margin: 0 auto;
            width: 120px;
            bottom: -100px;
            top: auto;
        }

        .podcast-main .slick-dots li.slick-active {
            margin: 0;
        }

        .podcast-main .slick-dots li {
            display: inline-block;
        }

        .podcast-main .slick-dots li button:before {
            color: #ECECEC;
            border-radius: 100%;
            font-size: 12px;
        }

        .podcast-main .slick-dots li.slick-active button:before {
            color: #2680EB;
        }

        .podcast-main ul li {
            padding: 30px 10px 0;
        }

        .knowledge-hub-videos {
            background: url(../images/kn-video.png)no-repeat;
            padding: 65px 0;
            background-size: contain;
        }

        .knowledge-hub-videos-top h3 {
            text-align: center;
            font-weight: 700;
            padding: 0 0 15px;
        }

        .knowledge-hub-videos-top p {
            text-align: center;
            padding: 0 0 40px;
        }

        .knowledge-hub-videos .slick-dots {
            left: 0;
            right: 0;
            margin: 0 auto;
            width: 120px;
            bottom: -100px;
            top: auto;
        }

        .knowledge-hub-videos .slick-dots li.slick-active {
            margin: 0;
        }

        .knowledge-hub-videos .slick-dots li {
            display: inline-block;
        }

        .knowledge-hub-videos .slick-dots li button:before {
            color: #ECECEC;
            border-radius: 100%;
            font-size: 12px;
        }

        .knowledge-hub-videos .slick-dots li.slick-active button:before {
            color: #2680EB;
        }

        .knowledge-hub-faqs-cnt-in {
            display: none;
            padding: 30px 0;
        }

        .knowledge-hub-faqs {
            background: #F9F9F9;
            padding: 50px 0;
            margin: 0 0 30px;
        }

        .knowledge-hub-faqs-main {
            max-width: 1200px;
            margin: 0 auto;
        }

        .knowledge-hub-faqs-main h2 {
            color: #000000;
            text-align: center;
        }

        .knowledge-hub-faqs-main p {
            color: #000000;
            text-align: center;
            padding: 20px 0 50px;
        }

        .knowledge-hub-faqs-cnt {
            margin: 0 0 20px;
        }

        .knowledge-hub-faqs-cnt.active .knowledge-hub-faqs-cnt-in {
            display: block;
            background: #FAFAFA;
            padding: 30px 70px 30px 37px;
            box-shadow: 0px 0px 5px #00000029;
            border-radius: 10px;
            margin: 3px 0 0 0;
        }

        .knowledge-hub-faqs-cnt-in {
            position: relative;
        }

        .knowledge-hub-faqs-cnt-in:after {
            position: absolute;
            right: 15px;
            top: 16px;
            background: url(../images/minus.svg);
            width: 27px;
            height: 27px;
            content: '';
            background-size: contain;
        }

        .knowledge-hub-faqs-cnt h4 {
            color: #012E6A;
            font-weight: 700;
            background: #ffffff;
            padding: 20px;
            box-shadow: 0px 0px 4px #00000029;
            position: relative;
            display: block;
            border-radius: 10px;
        }

        .knowledge-hub-faqs-cnt p {
            color: #707070;
            text-align: left;
            padding: 0;
            line-height: 24px;
        }

        .knowledge-hub-faqs-cnt h4:after {
            position: absolute;
            right: 15px;
            top: 16px;
            background: url(../images/plus.svg);
            width: 27px;
            height: 27px;
            content: '';
            background-size: contain;
        }

        .article-blk-latest-left {
            padding: 0 30px 0 0;
        }

        /*--brochure--*/
        .about-banner.brochure {
            background: url(../images/brochure-ban11.png)no-repeat center;
            background-size: cover;
            margin-bottom: 0;
        }

        .brochure-main {
            max-width: 1200px;
            margin: 0 auto;
            border-radius: 20px;
            padding: 35px;
            background: #ffffff;
        }

        .brochure-main h2 {
            color: #7BBC42;
            text-align: center;
            padding: 0 0 20px;
        }

        .brochure-main p {
            color: #242424;
            text-align: center;
        }

        .brochure-main-cnt-lt {
            padding: 20px 0 0;
        }

        .brochure-main-cnt-lt h3 {
            color: #223F97;
            font-weight: 700;
            padding: 0 0 10px;
            background: #ffffff;
        }

        .brochure-main-cnt-lt p {
            text-align: left;
            color: #000000;
            background: #ffffff;
        }

        .brochure-main-cnt {
            padding: 100px 0 0;
            background: #ffffff;
        }

        .brochure-main-cnt-lt a {
            color: #ffffff;
            font-weight: 400;
            background: #2680EB;
            border-radius: 26px;
            text-align: center;
            height: 40px;
            line-height: 40px;
            font-size: 18px;
            width: 200px;
            margin: 25px auto 0;
        }

        .row-reverse {
            display: flex;
            flex-direction: row-reverse;
        }



        /*pi-gallery css*/
        .about-banner1.knowledge1 {
            background: url(../images/gallery-ban11.png)no-repeat center;
            background-size: cover;
            height: 110px;
            margin: 118px 0 20px;
            padding: 30px 20px;
            text-align: center;
        }

        .knowledge-hub-gallery1 {
            margin: -230px 0 0 0;
        }

        .knowledge-hub-gallery-top1 h3 {
            text-align: center;
            font-weight: 700;
        }

        .knowledge-hub-gallery-top1 p {
            text-align: center;
            padding: 0 0 30px;
        }

        .knowledge-hub-videos1 {
            padding: 50px 30px;
            background-size: contain;
        }

        .knowledge-gallery1 {
            box-shadow: 0px 0px 6px #0000003d;
            border-top-left-radius: 75px;
            background: #ffffff;
            border-bottom-right-radius: 75px;
            max-width: 1300px;
            margin: 30px auto;
        }

        .knowledge-hub-videos-top1 h3 {
            text-align: center;
            font-weight: 700;
        }

        .knowledge-hub-videos-top1 p {
            text-align: center;
            padding: 0 0 30px;
        }

        .knowledge-hub-videos1 .slick-dots {
            left: 0;
            right: 0;
            margin: 0 auto;
            width: 120px;
            bottom: -100px;
            top: auto;
            height: auto;
        }

        .knowledge-hub-videos1.videoss .slick-dots {
            left: 0;
            right: 0;
            margin: 0 auto;
            width: 310px;
            bottom: -100px;
            top: auto;
            height: auto;
        }

        .knowledge-hub-videos1 .slick-dots li.slick-active {
            margin: 0;
        }

        .knowledge-hub-videos1 .slick-dots li {
            display: inline-block;
        }

        .knowledge-hub-videos1 .slick-dots li button:before {
            color: #ECECEC;
            border-radius: 100%;
            font-size: 12px;
        }

        .knowledge-hub-videos1 .slick-dots li.slick-active button:before {
            color: #2680EB;
        }

        /*pi-videos css*/
        .about-banner11.knowledge1 {
            background: url(../images/videos-bann22.png)no-repeat center;
            background-size: cover;
            padding: 30px 20px;
            height: 110px;
            margin: 118px 0 20px;
            text-align: center;
        }

        .youtube-al {
            width: 100%;
            height: 500px
        }

        iframe {
            border: none;
        }



        /*--press-releases--*/
        .about-banner.press-releases {
            background: url(../images/press-ban.png)no-repeat center;
            background-size: cover;
        }

        .press-releases-blk-main {
            max-width: 1200px;
            margin: 20px auto 0;
        }

        .press-releases-blk-main h2 {
            color: #7BBC42;
            text-align: center;
            padding: 0 0 20px;
        }

        .press-releases-blk-main p {
            color: #000000;
        }

        .new-tranding-rt h4 {
            font-size: 20px;
            line-height: 22px;
            color: #000000;
            padding: 0 0 15px;
        }

        .new-tranding-rt a {
            color: #7BBC42;
            font-size: 18px;
            font-weight: 500;
        }

        .new-tranding.border-less {
            border-bottom: 0;
        }

        .press-releases-blk-main ul {
            padding: 50px 0;
            border-top: 1px solid #ECECEC;
        }

        .press-releases-blk-main ul li {
            padding: 20px;
            border-right: 1px solid #ECECEC;
            border-bottom: 1px solid #ECECEC;
        }

        .press-releases-blk-main ul li:nth-child(3),
        .press-releases-blk-main ul li:nth-child(6) {
            border-right: 0;
        }

        .press-releases-blk-main ul li:nth-child(4),
        .press-releases-blk-main ul li:nth-child(5),
        .press-releases-blk-main ul li:nth-child(6) {
            border-bottom: 0;
        }

        #news-1 .modal-container {
            width: 75%;
        }

        .press-releases-popup {
            padding: 10px 0;
        }

        .press-releases-popup h3 {
            font-size: 40px;
            line-height: 50px;
            color: #000000;
            padding: 0px 0 20px;
            display: block;
            font-weight: 500;
        }

        .press-releases-popup p {
            color: #414141;
            padding: 0 0 20px;
            text-align: left;
        }

        .press-releases-popup .blog-ceo-rt p {
            padding: 0 0;
        }

        .press-releases-popup .blog-ceo-rt p span {
            padding: 10px 0 0;
            color: #6E6E6E;
            font-weight: 700;
            font-size: 15px;
        }

        .press-releases-popup span {
            font-size: 18px;
            color: #ADADAD;
            padding: 20px 0 10px;
            display: block;
            margin-bottom: 10px;
        }

        .press-releases-popup .blog-ceo {
            max-width: 250px;
        }


        /*--Harbourfront Services--*/
        .harbour {
            padding-top: 80px !important;
        }

        .about-banner.harbourfront-services {
            background: url(../images/harbour-ban.jpg)no-repeat center;
            background-size: cover;
        }

        .harbourfront-services-main {
            padding: 10px 0 50px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .harbourfront-services-main h3 {
            color: #000000;
            font-weight: 700;
            padding: 0 0 30px;
            text-align: center;
        }

        .harbourfront-right p {
            color: #000000;
            padding: 0 0 20px;
        }

        .harbourfront-right {
            padding: 35px 0 0;
        }

        .start-your-journey {
            background: #012E6A;
            padding: 81px 30px;
        }

        .start-your-journey-main h3 {
            font-size: 30px;
            line-height: 40px;
            color: #FFFFFF;
            font-family: 'Poppins', sans-serif;
            text-align: center;
        }

        .start-your-journey-main h3 span {
            color: #7BBC42;
            font-weight: 400;
        }

        .start-your-journey-main a {
            color: #2680EB;
            background: #ffffff;
            font-size: 20px;
            line-height: 70px;
            height: 70px;
            border-radius: 35px;
            width: 290px;
            text-align: center;
            margin: 40px auto;
        }

        .start-your-journey-main p {
            text-align: center;
        }

        .web-acceleration-main {
            max-width: 1200px;
            margin: 0 auto;
        }

        .web-acceleration-cnt h2 {
            color: #012E6A;
            font-weight: 500;
            padding: 0 0 20px;
        }

        .web-acceleration-cnt p {
            color: #262626;
        }

        .web-acceleration-cnt {
            padding: 120px 15px 0;
        }

        .web-acceleration-main {
            padding: 100px 0 0;
        }

        .web-acceleration-main ul {
            padding: 0 0 30px;
        }

        /*mobile menu*/
        .mobile-only_dd {
            display: none;
        }

        .mobile-nav {
            display: none;
        }

        .foot-menu li:last-child {
            border: 0;
        }


        /*--dc-design-planning--*/
        .about-banner.dc-design-planning {
            background: url(../images/Banner-dc-design-plan.png)no-repeat center;
            background-size: cover;
        }

        .harbourfront-right .info-points {
            padding: 0px;
        }

        .harbourfront-right.dc-design-planning {
            padding: 60px 50px 0;
        }

        .harbourfront.dc-design-planning {
            padding: 0 0 50px;
        }

        .harbourfront h2 {
            color: #000000;
            padding: 0 0 20px;
        }

        .data-center-design-planing {
            padding: 70px 0 0;
        }

        .data-center-design-planing h3 {
            color: #242424;
            font-size: 35px;
            line-height: 37px;
            padding: 0 0 20px 0;
            text-align: left;
            position: relative;
        }

        .data-center-design-planing h3:after {
            position: absolute;
            left: 0;
            top: 17px;
            background: #7BBC42;
            width: 40px;
            height: 4px;
            content: '';
            display: none;
        }

        .data-center-design-planing p {
            color: #000000;
            padding: 0 0 20px;
        }

        .data-center-design-planing-cnt {
            padding: 0 0 30px;
        }

        .explore-our-photo-gallary h2 {
            font-weight: 400;
            color: #242424;
            text-align: center;
            padding: 0 0 40px;
        }

        .explore-our-photo-gallary ul li img {
            min-height: 325px;
        }

        .explore-our-photo-gallary ul li {
            padding: 10px;
        }

        /*--dc-build--*/
        .paraclassinfo {
            padding: 5px 20px !important;
        }

        p.paraclassinfo {
            position: relative;
        }

        p.paraclassinfo:before {
            top: 5px;
            left: 4px;
            right: auto;
            content: "\f111";
            margin: 0 auto;
            font-size: 10px;
            position: absolute;
            font-family: fontawesome;
        }

        .paraclass1 {
            padding: 10px 34px
        }

        .about-banner.dc-build {
            background: url(../images/banner-dc-operate.jpg)no-repeat center;
            background-size: cover;
        }

        .about-banner.dc-operate {
            background: url(../images/dc-operate-banner.png)no-repeat center;
            padding: 150px 150px 200px;
            background-size: cover;
        }

        .data-center-design-planing-cnt span {
            color: #7BBC42;
            font-weight: 700;
            display: inline-block;
        }

        .data-center-design-planing-cnt p {
            display: inline-block;
        }

        .data-center-design-planing p.operate {
            color: #707070;
            padding: 0 0 35px 60px;
            margin: -20px 0 0 0;
        }



        /*--Contact us--*/
        .about-banner1.knowledge11 {
            background: url(../images/Contact-us-banner1.png)no-repeat center;
            background-size: cover;
            height: 110px;
            margin: 118px 0 0;
            padding: 30px 20px;
        }

        .about-banner1.knowledge111 {
            background: url(../images/map-banner.png)no-repeat center;
            padding: 150px 0px;
            background-size: cover;
            margin-top: -45px;
        }

        .write-to-us-main {
            padding: 100px 100px;
            background: #ffffff;
        }

        .contact-information {
            margin-top: 10px;
            padding: 60px 30px 25px 30px;
        }

        .contact-information h3 {
            color: #FFFFFF;
            margin: 0 0 30px 0;
            font-weight: 700;
            font-size: 24px;
            line-height: 28px;
            display: block;
            text-align: left;
            display: inline-block;
            border-bottom: 2px solid #ffffff;
        }

        .contact-information ul li {
            padding: 0 0 15px;
        }

        .contact-information ul li p {
            color: #ffffff;
        }

        .contact-information ul li p i {
            color: #ffffff;
            padding: 0;
            width: 28px;
            display: inline-block;
        }

        .contact-information ul li a {
            color: #ffffff;
        }

        .write-to-us-rt {}

        .write-to-us-rt h2 {
            color: #7BBC42;
            font-weight: 700;
            font-size: 35px;
            line-height: 37px;
            display: block;
            padding: 0 0 30px 15px;
        }

        .write-to-us-rt ul li {
            padding: 0 15px 20px;
        }

        .write-to-us-rt ul li input {
            width: 100%;
            border: 2px solid #0000000D;
            height: 40px;
            padding: 0 10px;
        }

        .write-to-us-rt ul li textarea {
            width: 100%;
            border: 2px solid #0000000D;
            display: block;
            height: 83px;
            resize: none;
        }

        .write-to-us-rt ul li label {
            color: #9B9B9B;
        }

        .write-to-us-rt ul li button {
            color: #ffffff;
            background: #2680EB;
            width: 200px;
            height: 45px;
            text-align: center;
            font-size: 18px;
            line-height: 45px;
            border: 1px solid #ffffff;
            border-radius: 25px;
        }

        .write-to-us {
            max-width: 1100px;
            margin: 0 auto 30px;
            background: #ffffff;
            z-index: 99999;
            position: relative;
            border-radius: 20px;
        }

        .write-to-us-main.branches {
            background: #ffffff;
            padding: 50px 60px 0;
            border-radius: 5px;
        }

        .write-to-us-main.branches .contact-information {
            background: #012E6A;
        }

        .write-to-us-main.branches .contact-information h3 {
            color: #ffffff;
        }

        .write-to-us-main.branches .contact-information ul li p {
            color: #ffffff;
        }

        .write-to-us-main.branches .contact-information ul li p a {
            color: #ffffff;
        }

        .write-to-us-main.branches .contact-information ul li p i {
            color: #ffffff;
            width: 28px;
        }

        p.paraclass {
            position: relative;
        }

        p.paraclass:before {
            top: 10px;
            left: 0;
            right: auto;
            content: "\f041";
            margin: 0 auto;
            font-size: 20px;
            position: absolute;
            font-family: fontawesome
        }

        .paraclass {
            padding: 8px 0px 30px 30px;
            12
        }

        .sel-top {
            padding: 0px;
        }

        .head-off {
            padding: 6px 25px;
            border-radius: 6px;
        }

        .view-location {
            text-align: center;
            color: white;
            border: 2px solid white;
            width: 150px;
            margin: 0 auto;
            padding: 8px;
            border-radius: 5px;
        }




        /*--pi-work-spaces--*/

        .about-banner.pi-work-spaces {
            background: url(../images/Pi-workspaces-banner.jpg)no-repeat center;
            background-size: cover;
        }

        .our-technology ul li img {
            width: auto;
        }

        .our-technology ul li h4 {
            font-size: 22px;
            line-height: 26px;
            color: #000000;
            padding: 20px 0;
            font-weight: 700;
        }

        .our-technology ul li p {
            color: #525252;
        }

        .our-technology-cnt {
            box-shadow: 0px 0px 2px #00000036;
            border-radius: 12px;
            padding: 15px;
            min-height: 362px;
            border: 2px solid #ffffff;
        }

        .our-technology-cnt:hover {
            border: 2px solid #7BBC42;
        }

        .why-work-with-us {
            background: #FAFAFA;
            padding: 50px 0;
        }

        .why-work-with-us h2 {
            color: #000000;
            text-align: center;
            padding: 0 0 30px;
        }

        .why-work-with-us h2 span {
            color: #7BBC42;
            font-weight: 400;
        }

        .our-technology p,
        .why-work-with-us p {
            color: #525252;
        }

        .why-work-with-us-main ul {
            max-width: 1000px;
            margin: 20px auto;
        }

        .why-work-with-us-main ul li {
            padding: 15px;
        }

        .why-work-with-us-main img {
            width: auto;
        }

        .why-work-with-us-main h4 {
            font-size: 22px;
            line-height: 26px;
            color: #000000;
            padding: 20px 0;
            font-weight: 700;
        }

        .why-work-with-us-main p {
            color: #525252;
        }

        .about-pi-workspaces-main {
            padding: 50px;
        }

        .about-pi-workspaces-main h2 {
            color: #000000;
            text-align: center;
            padding: 0 0 20px;
        }

        .about-pi-workspaces-main h2 span {
            color: #7BBC42;
            font-weight: 400;
        }

        .about-pi-workspaces-main p {
            color: #242424;
            padding: 0 0 20px;
        }

        .pi-work-benefits {
            background: url(../images/benefits-bg.png)no-repeat center;
            padding: 100px;
            background-size: cover;
        }

        .pi-work-benefits-main h2 {
            color: #ffffff;
            text-align: center;
            padding: 0 0 30px;
        }

        .pi-work-benefits-cnt {
            background: #ffffff;
            border-radius: 10px;
            padding: 20px;
            min-height: 200px;
            box-shadow: 0px 0px 3px #00000036;
        }

        .pi-work-benefits-cnt span {
            color: #7BBC42;
            font-size: 20px;
            line-height: 24px;
            font-weight: 700;
            text-align: center;
            display: block;
            padding: 0 0 20px;
        }

        .pi-work-benefits-cnt p {
            color: #000000;
            text-align: center;
        }




        /*--data-center-infrastructure--*/
        .about-banner-blk {
            position: relative;
        }

        .about-banner-blk h2 {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            left: 40px;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
        }

        .about-banner.data-center-infrastructure {
            background: url(../images/ban-data-infra.jpg)no-repeat center;
            background-size: cover;
        }

        .about-data-center-infrastructure-blk {
            padding: 0 0 50px;
        }

        .about-data-center-infrastructure-main {
            max-width: 1200px;
            margin: 0 auto;
        }

        .about-data-center-infrastructure-main h2 {
            color: #000000;
            text-align: center;
            padding: 0 0 40px;
        }

        .about-data-center-infrastructure-main p {
            color: #242424;
            padding: 0 0 20px;
        }

        .infrastructure-rt {
            padding: 30px 20px 0;
        }

        .our-video-main {
            max-width: 1000px;
            margin: 40px auto;
        }

        .our-video-main h2 {
            color: #000000;
            text-align: center;
            padding: 0 0 40px;
        }

        .our-video-main p {
            color: #242424;
            padding: 0 0 40px;
            text-align: center;
        }

        .our-video {
            background: #F8F8F8;
            padding: 50px 0;
        }

        .infrastructure-lt.dc {
            padding: 200px 50px 0;
        }

        .about-data-center-infrastructure-blk.dc {
            padding: 50px 0;
        }

        .about-locations-blk {
            background: #012E6A;
            padding: 25px 0;
        }

        .about-locations-blk h2 {
            color: #ffffff;
            padding: 0px 0 20px;
            text-align: center;
        }

        .amaravathi-dc-top {
            background: #ffffff;
            padding: 15px 0px 0;
            border-radius: 10px;
        }

        .amaravathi-dc-top h3 {
            color: #000000;
            font-weight: 700;
            line-height: 34px;
            padding: 0 0 10px 55px;
            position: relative;
            font-size: 25px;
        }

        .amaravathi-dc-top h3 span {
            color: #000000;
            font-size: 18px;
            display: block;
            font-weight: 400;
        }

        .amaravathi-dc-top h3:before {
            position: absolute;
            top: 2px;
            right: auto;
            background: url(../images/blue-amaravati.png) no-repeat;
            width: 60px;
            height: 60px;
            content: "";
            left: 0px;
            background-size: contain;
        }

        .amaravathi-dc-top h3.kdc:before {
            position: absolute;
            top: 10px;
            right: auto;
            background: url(../images/blue-kochi.png) no-repeat;
            width: 50px;
            height: 50px;
            content: "";
            left: 4px;
            background-size: contain;
        }

        .amaravathi-dc-top ul li {
            position: relative;
            padding: 0px 0 7px 55px;
        }

        .amaravathi-dc-top ul li:nth-child(1):before {
            position: absolute;
            top: -6px;
            right: auto;
            background: url(../images/dc-icon-1.png) no-repeat;
            width: 35px;
            height: 35px;
            content: "";
            left: 13px;
            background-size: contain;
        }

        .amaravathi-dc-top ul li:nth-child(2):before {
            position: absolute;
            top: -6px;
            right: auto;
            background: url(../images/dc-icon-2.png) no-repeat;
            width: 35px;
            height: 35px;
            content: "";
            left: 13px;
            background-size: contain;
        }

        .amaravathi-dc-top ul li:nth-child(3):before {
            position: absolute;
            top: -6px;
            right: auto;
            background: url(../images/dc-icon-3.png) no-repeat;
            width: 35px;
            height: 35px;
            content: "";
            left: 13px;
            background-size: contain;
        }

        .amaravathi-dc-top ul li:nth-child(4):before {
            position: absolute;
            top: -6px;
            right: auto;
            background: url(../images/dc-icon-4.png) no-repeat;
            width: 35px;
            height: 35px;
            content: "";
            left: 13px;
            background-size: contain;
        }

        .amaravathi-dc-top ul li:nth-child(5):before {
            position: absolute;
            top: -6px;
            right: auto;
            background: url(../images/dc-icon-5.png) no-repeat;
            width: 35px;
            height: 35px;
            content: "";
            left: 13px;
            background-size: contain;
        }

        .amaravathi-dc-top ul li:nth-child(6):before {
            position: absolute;
            top: -6px;
            right: auto;
            background: url(../images/dc-icon-6.png) no-repeat;
            width: 35px;
            height: 35px;
            content: "";
            left: 13px;
            background-size: contain;
        }

        .amaravathi-dc-top ul li p {
            color: #000000;
            font-size: 15px;
        }

        .amaravathi-dc-top ul {
            padding: 5px 0 0;
        }

        .about-locations-main .tabBlock-tabs {
            width: 49%;
            border-radius: 10px;
            margin: 0px 0 10px 0;
            z-index: 99;
            position: relative;
        }

        .about-locations-main .tabBlock-tabs img {
            width: 60px;
            margin: 0 auto;
        }

        .features-of-amaravathi-top {
            border-radius: 10px;
        }

        .features-of-amaravathi-btm {
            background: #ffffff;
            padding: 32px;
            border-radius: 10px;
            margin: 10px 0 0 0;
        }

        .features-of-amaravathi-btm p {
            color: #000000;
            padding: 0 0 10px;
            text-align: justify;
        }

        .features-of-amaravathi-btm h3 {
            color: #000000;
            font-weight: 700;
            padding: 0 0 10px;
            font-size: 25px;
            line-height: 27px;
        }

        .about-locations-main {
            max-width: 1200px;
            margin: 0 auto;
        }

        .features-of-amaravathi-btm a {
            color: #2680EB;
            font-size: 18px;
        }

        .fill-your-details-cnt p {
            color: #000000;
            padding: 0 0 10px;
        }

        .fill-your-details-cnt h3 {
            color: #000000;
            font-weight: 700;
            padding: 0 0 15px;
        }

        .fill-your-details-cnt.features {
            overflow: scroll;
            height: 500px;
        }

        /*meity page*/

        .about-banner.meity {
            background: url(../images/meity-new-website-banner.png)no-repeat center;
            padding: 160px 150px 266px;
            background-size: cover;
        }

        .what-meity {
            color: #000000;
            font-weight: 700;
            padding: 0 0 30px;
            text-align: center;
        }

        .first-class {
            padding: 0 50px 50px;
        }

        .second-class {
            background: #012E6A;
            border-top-right-radius: 75px;
            border-top: 12px solid #c0dfe4;
            border-bottom: 12px solid #c0dfe4;
            border-bottom-left-radius: 75px;
        }

        .it-meity {
            font-size: 32px;
            margin: 0 auto;
            color: white;
            text-align: center;
            line-height: 36px;
            padding: 30px 0px 140px 0px;
            font-weight: 500;
        }

        .inner-teli {
            box-shadow: 0px 0px 6px #0000003d;
            border-top-left-radius: 75px;
            text-align: center;
            border-bottom-right-radius: 75px;
            padding: 20px;
            background: white;
            min-height: 280px;
        }

        .public {
            color: #012E6A;
            text-align: center;
            padding: 15px 0px;
            line-height: 25px;
        }

        .icon-css {
            width: auto;
            margin: 0 auto;
        }

        .third-class {
            padding-bottom: 80px;
        }

        .multi {
            margin: -95px auto 0;
            max-width: 1200px;
        }

        .fourth-class {
            padding-bottom: 80px;
            background: #F8F8F8;
            padding-top: 40px;
        }

        .inner-teli2 {
            box-shadow: 0px 0px 6px #0000003d;
            text-align: center;
            padding: 12px 0px 20px 0px;
            background: white;
            min-height: 460px;
        }

        .key-main {
            max-width: 1200px;
            margin: 0 auto;
        }

        .emp {
            font-size: 18px;
            color: #7BBC42;
            font-weight: 500;
            padding: 10px 0px;
            min-height: 70px;
        }

        .public1 {
            color: black;
            text-align: center;
            padding: 0px 15px;
            line-height: 25px;
        }

        .about-banner.identi {
            background: url(../images/all-india.png)no-repeat center;
            padding: 170px 100px;
            background-size: cover;
        }

        .all-identi {
            background: white;
            box-shadow: 0px 0px 6px #0000003d;
            border-radius: 10px;
            border-top: 8px solid #7BBC42;
        }

        .about-banner .how {
            background: url(../images/testimonial-banner.jpg)no-repeat center;
            padding: 150px 100px;
            height: 800px;
        }

        .how .nav-tabs li {
            padding: 0px 0px
        }

        .fourth-class ul {
            max-width: 1200px;
            margin: 0 auto;
        }

        .sep-back {
            background: #707070;
            padding: 18px 36px;
            border-radius: 22px;
            cursor: pointer;
        }

        .how-all {
            width: 100px;
            height: 100px;
            padding: 10px;
        }

        .how .nav-tabs .nav-link {
            border: none;
        }

        .all-p-meity {
            text-align: Center;
            font-weight: 500;
        }

        .how .tabBlock-tab.is-active .sep-back {
            background: #7BBC42;
        }

        .provide {
            color: #FFFFFF;
            padding: 50px 50px 0;
        }

        .key-inp {
            font-weight: 700;
            font-size: 45px;
            padding-bottom: 50px;
            color: #012E6A;
        }

        .key-lt {
            padding: 0px;
        }

        .key-bottom {
            text-align: center;
            color: #525252;
            line-height: 24px;
            padding-top: 18px;
        }

        .about-banner-blk-key {
            max-width: 1200px;
            margin: 0 auto;
        }

        .meity-home {
            box-shadow: 0px 0px 6px #0000003d;
            max-width: 500px;
            margin: 0px 0px 15px 0px;
        }

        .inner-teli2 br {
            display: none;
        }

        .first-class {
            padding: 0 15px 30px;
        }

        .meity-home-lt {
            color: #012E6A;
            padding: 12px 9px;
        }

        .meity-home-rt a {
            color: #2680EB;
            border: 1px solid #2680EB;
            padding: 5px;
            border-radius: 20px;
            width: 100px;
            text-align: center;
            margin-top: 5px;
            margin-left: auto;
        }

        .meity-home.be-bg {
            background: #012E6A;
            margin: 0px 0px 15px auto;
        }

        .meity-home-lt p {
            padding: 0px;
        }

        .last-img {
            padding: 55px;
            text-align: center;
            margin: 0 auto;
        }

        .public1 br {
            display: none;
        }


        /*data  center services*/
        .d-psp {
            color: black;
            text-align: center;
        }

        .points-info {
            background: #F1F1F1;
            padding: 50px 0px;
        }

        .partnership-points {
            background: url(../images/banner-5-points.png)no-repeat center;
            padding: 250px 100px;
            background-size: cover;
        }

        .partnership {
            background: url(../images/Data-Center-Services-banner.jpg)no-repeat center;
            background-size: cover;
            margin-bottom: 0;
        }

        .partnership-main ul li:nth-child(2):before {
            top: 56px;
            left: -64px;
            right: auto;
            content: "";
            margin: 0 auto;
            font-size: 20px;
            position: absolute;
            background: url(../images/yellow-arrow.png)no-repeat;
            width: 129px;
            height: 22px;
        }

        .partnership-main ul li:nth-child(3):before {
            top: 56px;
            left: -64px;
            right: auto;
            content: "";
            margin: 0 auto;
            font-size: 20px;
            position: absolute;
            background: url(../images/red-arrow.png)no-repeat;
            width: 129px;
            height: 22px;
        }

        .partnership-main ul li:nth-child(4):before {
            top: 56px;
            left: -64px;
            right: auto;
            content: "";
            margin: 0 auto;
            font-size: 20px;
            position: absolute;
            background: url(../images/skyblue-arrow.png)no-repeat;
            width: 129px;
            height: 22px;
        }

        .partnership-main ul li:nth-child(5):before {
            top: 56px;
            left: -64px;
            right: auto;
            content: "";
            margin: 0 auto;
            font-size: 20px;
            position: absolute;
            background: url(../images/green-arrow.png)no-repeat;
            width: 129px;
            height: 22px;
        }

        /*.partnership-main ul li:nth-child(2):after{top: 16px;left: -61px;right: auto;content: "";margin: 0 auto;font-size: 20px;position: absolute;background: red;width: 61px;height: 2px;}*/
        .partnership-main ul li {
            position: relative;
        }

        .data-center-ser {
            background: #F5F5F5;
            padding-bottom: 100px;
        }

        .data-center-ser-mission {}

        .partnering {
            text-align: center;
            color: #000000;
            font-weight: 700;
            padding: 50px 0px 80px;
        }

        .it-department {}

        .it-departmen-para {
            padding: 100px 20px;
        }

        .it-departmen-para p {
            color: #242424;
            line-height: 26px;
        }

        .knowledge-galleryd {
            border-top-left-radius: 75px;
            background: #ffffff;
            max-width: 1300px;
            margin: 0px auto 0;
        }

        .inner-teli24 {
            box-shadow: 0px 0px 6px #0000003d;
            padding: 12px 0px 20px 0px;
            margin: 10px 10px;
        }

        .public1-v {
            color: #012E6A;
            text-align: center;
            padding: 15px 36px;
            line-height: 25px;
        }

        .icon-css1 {
            width: auto;
            margin: 0 auto;
            padding: 15px 0px;
        }

        .p-su {
            text-align: center;
            font-weight: 700;
            font-size: 15px;
            padding: 0 0 10px;
        }

        .inner-teli241 {
            box-shadow: 0px 0px 6px #0000003d;
            padding: 30px 10px 20px;
            margin: 10px 10px;
            border-radius: 4px;
            border: 2px solid #7BBC42;
            min-height: 550px;
        }

        .icon-css2 {
            width: auto;
            margin: 0 auto;
            padding: 15px 0px;
        }

        .knowledge-galleryde {
            background: #012E6A;
        }

        .inner-teli242 {
            padding: 62px 0px 20px 0px;
            margin: -50px 10px 10px 10px;
            border-radius: 4px;
            background: white;
        }

        .public111 {
            color: #012E6A;
            text-align: center;
            padding: 18px 0px 15px;
            line-height: 25px;
            font-weight: 500;
            border-bottom: 1px solid #CDCDCD;
            margin: 0 auto;
        }

        .public222 {
            color: #012E6A;
            text-align: center;
            padding: 18px 0px 15px;
            line-height: 25px;
            font-weight: 500;
            margin: 0 auto;
        }

        .demo-info {
            font-size: 12px;
            color: #707070;
            text-align: center;
            font-weight: 500;
        }

        .in-icon {
            position: relative;
        }

        .sec-info {
            padding: 40px 0px;
        }

        .our-features {
            background: #F1F1F1;
            padding: 50px 0px 100px;
        }

        .our h3 {
            text-align: center;
            font-weight: 700;
            padding: 0 0 15px;
            color: #000000;
        }

        .fir-icon-incor p {
            font-weight: 700;
            color: black;
            font-size: 16px;
            padding-top: 20px;
        }

        .inner-teli244 {
            padding: 20px 0px 20px 0px;
            border-radius: 4px;
            background: white;
            height: 580px;
            border: 1px solid #D1CECE;
        }

        .inner-teli244 p {
            color: #242424;
        }

        p.paraclass1 {
            position: relative;
        }

        p.paraclass1:before {
            top: 10px;
            left: 18px;
            right: auto;
            content: "\f111";
            margin: 0 auto;
            font-size: 10px;
            position: absolute;
            font-family: fontawesome;
        }

        .paraclass1 {
            padding: 10px 34px
        }

        .partnership-main ul li {
            width: 20%;
        }

        .partnership-main ul li img {
            width: 50%;
            margin: 0 auto;
        }

        .star {
            color: white;
            text-align: center;
            padding: 10px;
            font-size: 20px;
            font-weight: 500;
        }

        .star-one {
            box-shadow: 0px 0px 6px #0000003d;
            padding: 12px 0px 20px 0px;
            margin: 10px 10px;
            border-radius: 4px;
            background: #c8c2c2;
            display: none;
            position: absolute;
            bottom: -200px;
            left: 0;
            right: 0;
            margin: 0 auto;
        }

        .public15 {
            color: black;
            text-align: left;
            padding: 15px 24px;
            line-height: 25px;
        }

        .hero-info {
            position: relative;
        }

        .hero-info:hover .star-one {
            display: block;
        }

        .datacenter-main.hurbour1 img {
            width: 78%;
        }

        .clients-imgs ul li img {
            width: 100%;
        }

        .hide-icon1 {
            display: none;
        }

        .tabBlock-tab.is-active .hide-icon1 {
            display: block;
        }

        .tabBlock-tab.is-active .hide-icon2 {
            display: none;
        }


        .pi-certificates {
            width: 220px;
            margin: 0 auto;
            bottom: 100px;
            left: 60px;
            position: absolute;
        }

        .pi-certificates.right {
            left: auto;
            right: 60px;
        }

        .pi-certificates ul li img {
            width: 55px;
            height: 55px;
            object-fit: contain;
        }

        .hurbour1-pi img {
            width: 200px !important;
        }

        .what-drives-vission-left img {
            border-radius: 40px 0;
        }

        .what-drives-mission-right img {
            border-radius: 40px 0;
        }

        .scc-block {
            padding: 80px 0 0;
        }

        .scc-block ul li {
            width: 20%;
            padding: 0 5px;
        }

        .scc-block img {
            width: 100%;
            border-radius: 100%;
            height: 100%;
            border: 5px solid #ffffff;
        }

        .board-of-directors .social-icons {
            width: 90px;
            padding: 0;
        }

        .linked-in-icon img {
            margin: 0 auto;
            width: auto;
            border: 0;
            border-radius: 0;
        }

        .board-of-directors-management .linked-in-icon img {
            margin: 0 auto;
            width: auto;
        }

        .smc-directors ul li {
            width: 20%;
            padding: 10px;
        }

        .who-we-are-main p {
            text-align: justify;
        }

        .rims-blk p {
            text-align: justify;
        }

        .computer-network-right img {
            border-radius: 40px 0;
        }

        .custom-scheduled-reporting-rt img {
            border-radius: 40px 0;
        }

        .avg-productivity-blk-left img {
            border-radius: 40px 0;
        }

        .harbourfront-left img {
            border-radius: 40px 0;
        }

        .benefits-img img {
            border-radius: 40px 0;
        }

        .benefits-img p {
            border-radius: 40px 0;
        }

        .explore-our-photo-gallary img {
            border-radius: 40px 0;
        }

        .great-rtt img {
            border-radius: 40px 0;
        }

        .vision-info h2 {
            position: absolute;
            left: 20px;
            bottom: 20px;
            font-size: 35px;
        }

        .vision-info:hover h2 {
            display: none;
        }

        .rims-blk {
            padding: 30px 0 0;
        }

        .datacenter-main .center img {
            width: 40% !important;
        }

        .datacenter-main .center .strategic-core-council-cnt1 {
            margin: 0;
        }

        .text-center {
            left: 0;
            right: 0;
        }

        .center1 {
            padding: 20px 0;
        }

        .linked-in-icon img {
            width: auto !important;
            margin: 0 auto;
        }

        .web-acceleration-main ul li img {
            border-radius: 40px 0;
        }

        .brochure-blk .tabBlock-tab .nav-link {
            width: 50px;
            height: 50px;
            border-radius: 100%;
        }

        .brochure-blk .tabBlock-tab.is-active .nav-link {
            width: 50px;
            height: 50px;
            border-radius: 100%;
        }

        h2.ceo-corner {
            text-align: left;
            padding: 10px 0 20px;
        }

        .case-content.ceo-corner {
            min-height: 520px;
        }

        .case-content.ceo-corner h4 {
            font-size: 18px;
            line-height: 24px;
        }

        .ceo-block-blk .slick-dots li.slick-active a {
            background: #2680EB;
            color: #ffffff !important;
            width: 35px;
            height: 35px;
            border-radius: 100%;
            padding: 9px;
        }

        .ceo-block-blk .slick-dots li a {
            background: #D9D9D9;
            color: #000000 !important;
            width: 35px;
            height: 35px;
            border-radius: 100%;
            padding: 9px;
        }

        .ceo-block-blk .slick-dots li {
            width: 20%;
        }

        .ceo-block-blk .slick-dots {
            width: 260px;
            bottom: -95px;
        }

        .ceo-block-blk .slick-dots li.slick-active a:after {
            display: none;
        }

        .great-rtt ul li {
            position: relative;
        }

        .great-rtt h3 {
            right: 0;
            text-align: center;
            bottom: 20px;
            left: 0;
            position: absolute;
            font-size: 25px;
            text-transform: capitalize;
            text-shadow: 2px 2px 1px #212529;
            background: rgb(0 0 0 / 50%);
        }

        .smc-directors-blk {
            width: 10% !important;
        }

        .about-pi-workspaces-main-lt img {
            border-radius: 40px 0;
            padding: 0 0 20px;
        }

        .about-pi-workspaces-main-lt {
            padding: 0;
        }

        .about-pi-workspaces-main-rt {
            padding: 0px 0 0 30px;
        }

        .bw {
            filter: url(data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/></filter></svg>#grayscale);
            filter: gray;
            -webkit-filter: grayscale(1);
            -moz-filter: grayscale(100%);
            -ms-filter: grayscale(100%);
            -o-filter: grayscale(100%);
            filter: grayscale(100%);
        }

        .bw:hover {
            filter: none;
            -webkit-filter: grayscale(0);
            transition: all 0.3s ease-in-out;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -ms-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
        }

        .dc-download-brochure {
            background: url(../images/dc-db.png) no-repeat center;
            width: 100%;
            padding: 60px;
            background-size: cover;
        }

        .dc-download-brochure-left p {
            font-size: 42px;
            line-height: 58px;
            padding: 0;
            text-align: center;
        }

        .dc-download-brochure-right a {
            height: 58px;
            line-height: 58px;
            color: #2680EB;
            background: #ffffff;
            border-radius: 5px;
            width: 200px;
            text-align: center;
            margin: 20px auto 0;
            font-weight: 500;
        }

        .locations-cnt-rt {
            margin: -88px 0 0;
        }

        .features-of-amaravathi-top img {
            border-radius: 10px;
            height: 200px;
        }

        .about-locations-main .tabBlock-tab.is-active a {
            background: #ffffff;
        }

        .about-locations-main .tabBlock-tab a {
            border-radius: 20px;
            background: rgb(237 237 237);
        }

        .testimonial-block .tabBlock-tabs.dcis .nav-link {
            width: auto;
            padding: 0 25px;
        }

        .testimonial-block {
            position: relative;
        }

        .dc-advisory-block {
            padding: 20px 0;
        }

        .dc-advisory-block-rt h3 {
            text-align: left;
            padding: 10px 0;
        }

        .dc-advisory-block-rt p {
            text-align: left;
            color: #000000;
            padding: 0 0 10px 10px;
        }

        .dc-advisory-block-rt h3:before {
            display: none;
        }

        .dc-advisory-block-rt ul li {
            padding: 10px;
        }

        .dc-advisory-block-rt ul li img {
            width: 85px;
            margin: 0 auto;
        }

        .dc-advisory-block-rt ul li p {
            text-align: center;
            padding: 5px 15px;
        }

        .resource-distribution-left img {
            width: auto;
            margin: 0 auto;
        }

        .inner-teli241 p.public1 {
            text-align: center;
        }

        .dc-advisory-block-rt a {
            color: #2680EB;
            border: 1px solid;
            width: 190px;
            height: 52px;
            line-height: 52px;
            border-radius: 7px;
            text-align: center;
            margin: 20px 0 0;
        }

        .great-rt-in.dc {
            height: 460px;
            padding: 20px 0 0;
            max-width: 470px;
        }

        p.dcsi {
            font-size: 25px;
            padding: 20px 0 0;
            text-align: center;
        }

        .certi {
            padding: 0px 30px 0;
        }

        .great-lt span.dc {
            font-size: 17px;
            line-height: 24px;
        }

        .certi ul li {
            width: 20%;
            padding: 5px;
        }

        .infrastructure-rt img {
            max-width: 800px;
            margin: 0 auto;
        }

        .play-icon {
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            margin: 0 auto;
            font-size: 30px;
            transform: translateY(-50%);
        }

        .play-icon i {
            color: #ffffff;
            font-size: 40px;
            text-align: center;
            display: block;
        }

        .ceo-block-blk-tn {
            position: relative;
            padding: 0 10px 15px;
        }

        .about-banner.how {
            background: url(../images/about-banner.png)no-repeat center;
            padding: 60px 0;
            margin: 0;
            background-size: cover;
        }

        .about-banner.how .about-banner-blk h2 {
            position: static;
            top: 0;
            left: 0;
            right: 0;
        }

        .key-resources {
            padding: 50px 0;
        }

        .certi ul li img {
            min-height: 125px;
            object-fit: contain;
        }

        .dc-advisory-block-lt img {
            border-radius: 40px 0;
        }

        .colocation-services-img {
            min-height: 145px;
        }

        .slider-ceo .slick-next:before {
            content: "\f105";
            color: #2680EB;
            font-size: 20px;
            font-family: 'FontAwesome';
            width: 30px;
            height: 30px;
            border-radius: 100%;
            border: 1px solid #2680EB;
            display: block;
            padding: 4px;
        }

        .slider-ceo .slick-prev:before {
            content: "\f104";
            color: #2680EB;
            font-size: 20px;
            font-family: 'FontAwesome';
            width: 30px;
            height: 30px;
            border-radius: 100%;
            border: 1px solid #2680EB;
            display: block;
            padding: 4px;
        }

        .slider-ceo .slick-next {
            left: auto;
            right: 0;
            margin: 0 auto;
            z-index: 99;
        }

        .slider-ceo .slick-prev {
            left: 0;
            right: auto;
            margin: 0 auto;
            z-index: 99;
        }

        .custom-scheduled-reporting-lt {
            padding: 0 80px 0 0;
        }

        .know-more-btn a {
            font-size: 18px;
            line-height: 40px;
            height: 40px;
            border-radius: 28px;
            background: #ffffff;
            color: #000000;
            width: 150px;
            text-align: center;
            margin: 5px auto 0;
            position: relative;
        }

        .harbourfront-services-blk {
            padding: 30px 0;
        }

        .meity-blk {
            padding: 50px;
        }

        .fourth-class ul li {
            padding: 15px;
        }

        .modular-architecture {
            min-height: 180px;
        }

        .great-lt span {
            font-size: 16px;
            line-height: 20px;
        }

        .what-info p {
            font-size: 24px;
            line-height: 30px;
        }

        .footer-copy-rights p a {
            color: #ffffff;
            text-align: left;
        }

        .mobile-headings {
            display: none;
        }

        .top-foot {
            padding: 0;
        }

        .blog-videos {
            max-width: 155px;
            margin: 0 auto;
        }

        .blog-videos img {
            width: 50px;
            margin: 20px auto;
            height: 50px;
            object-fit: contain;
            border-radius: 0;
        }

        .blog-video-icon-hvr2 {
            display: none;
        }

        .blog-videos li a:hover .blog-video-icon-hvr2 {
            display: block;
        }

        .blog-videos li a:hover .blog-video-icon-hvr1 {
            display: none;
        }

        .nav-tabs .nav-link:focus,
        .nav-tabs .nav-link:hover {
            border: 0;
        }

        .nav-tabs .nav-link {
            border: 0;
        }

        .design-con {
            min-height: 355px;
            background: #ffffff;
            padding: 10px;
        }

        .fire {
            margin: 0;
        }

        .strategic-core-council-cnt2 p br {
            display: none;
        }

        .three-dm {
            font-size: 10px !important;
            text-align: left !important;
        }

        article.tabs {
            position: relative;
            display: block;
            width: 100%;
            height: 15em;
            margin: 2em auto;
        }

        article.tabs section {
            width: 100%;
            position: absolute;
            display: block;
            top: 1.8em;
            left: 0;
            padding: 10px 20px;
            background-color: #ddd;
            border-radius: 5px;
            box-shadow: 0 3px 3px rgba(0, 0, 0, 0.1);
            z-index: 0;
        }

        article.tabs section:first-child {
            z-index: 1;
        }

        article.tabs section h2 {
            position: absolute;
            font-size: 20px;
            font-weight: normal;
            height: 1.8em;
            top: -60px;
            left: 10px;
            padding: 0;
            margin: 0;
            border-radius: 5px 5px 0 0;
            height: 50px;
            line-height: 50px;
        }

        article.tabs section:nth-child(2) h2 {
            left: 132px;
        }

        article.tabs section:nth-child(3) h2 {
            left: 254px;
        }

        article.tabs section h2 a {
            display: block;
            width: 100%;
            line-height: 1.8em;
            text-align: center;
            text-decoration: none;
            color: inherit;
            outline: 0 none;
            background: #2680EB;
            color: #ffffff;
            width: 50px;
            height: 50px;
            line-height: 50px;
            border-radius: 40px;
            text-align: center;
            padding: 0;
        }

        article.tabs section,
        article.tabs section h2 {
            -webkit-transition: all 500ms ease;
            -moz-transition: all 500ms ease;
            -ms-transition: all 500ms ease;
            -o-transition: all 500ms ease;
            transition: all 500ms ease;
        }

        article.tabs section:target,
        article.tabs section:target h2 {
            color: #333;
            background-color: #fff;
            z-index: 2;
        }

        .testimonial-block-main .testimonial-block .tabBlock-tabs {
            padding: 0 0 0px 20px;
            position: absolute;
            top: -142px;
        }

        .case-block-main.greenshape .case-content h4 {
            padding: 10px 0 0;
        }

        .case-block-main.greenshape .case-content p {
            padding: 5px 0;
        }


        .testimonial-block1 .tabBlock-tabs {
            padding: 30px 0 30px;
            position: absolute;
            top: -122px;
            left: 85px;
        }

        .testimonial-block1 .tabBlock-tab {
            padding: 0 10px;
        }

        .testimonial-block1 .tabBlock-tab .nav-link {
            color: #414141;
            width: 160px;
            height: 50px;
            line-height: 50px;
            border-radius: 40px;
            text-align: center;
            padding: 0;
            background: #acb8c3;
            cursor: pointer;
        }

        .testimonial-block1 .tabBlock-tab.is-active .nav-link {
            background: #2680EB;
            color: #ffffff;
            width: 160px;
            height: 50px;
            line-height: 50px;
            border-radius: 40px;
            text-align: center;
            padding: 0;
        }

        .testimonial-block1 .tabBlock-tab.is-active .nav-link:hover {
            color: #ffffff;
        }

        .testimonial-block1 .testimonial-block-main {
            background: #ffffff;
            margin: 0 auto;
            padding: 0px 40px 20px;
            border-radius: 20px;
            max-width: 1200px;
            position: relative;
        }

        .testimonial-block1 h3 {
            color: #000000;
            position: relative;
            text-align: center;
            font-weight: 700;
            padding: 50px 0 20px;
        }

        .testimonial-block1 h3:before {
            background: #2680EB;
            width: 100px;
            height: 3px;
            left: 0;
            right: 0;
            top: -15px;
            content: "";
            position: absolute;
            margin: 0 auto;
        }

        .testimonial-content-btm a {
            text-align: left;
            color: #242424;
            font-weight: 700;
            margin: 20px 0 0;
        }

        .director-rt h4 {
            color: #ffffff;
            padding: 10px 0;
        }

        .director-rt h5 {
            color: #ffffff;
            padding: 10px 0;
        }

        .ceo-block-blk ul li p {
            padding: 10px 0;
        }

        .videoss .slick-next:before {
            content: "\f105";
            color: #2680EB;
            font-size: 20px;
            font-family: 'FontAwesome';
            width: 30px;
            height: 30px;
            border-radius: 100%;
            border: 1px solid #2680EB;
            display: block;
            padding: 2px;
        }

        .videoss .slick-prev:before {
            content: "\f104";
            color: #2680EB;
            font-size: 20px;
            font-family: 'FontAwesome';
            width: 30px;
            height: 30px;
            border-radius: 100%;
            border: 1px solid #2680EB;
            display: block;
            padding: 2px;
        }

        .videoss .slick-next {
            left: auto;
            right: -30px;
            margin: 0 auto;
            z-index: 99;
        }

        .videoss .slick-prev {
            left: -40px;
            right: auto;
            margin: 0 auto;
            z-index: 99;
        }

        .ceo-block-blk li {
            padding: 0 10px 20px;
        }

        .ceo-block-blk .case-content a.read-more {
            margin: 15px 0 0;
        }

        .awards-block-main {
            padding: 0 0 25px;
        }

        .harbourfront p {
            color: #000000;
            padding: 15px 0;
            padding-top: 5px !important;
            text-align: justify;
        }

        .what-is-noc-lt ul li {
            position: relative;
            padding: 15px 15px 15px 75px;
        }

        .what-is-noc-lt ul li:nth-child(1):before {
            position: absolute;
            left: 15px;
            top: 5px;
            content: "";
            background: url(../images/socicon-1.png) no-repeat;
            width: 50px;
            height: 50px;
        }

        .what-is-noc-lt ul li:nth-child(2):before {
            position: absolute;
            left: 15px;
            top: 5px;
            content: "";
            background: url(../images/socicon-2.png) no-repeat;
            width: 50px;
            height: 50px;
        }

        .what-is-noc-lt ul li:nth-child(3):before {
            position: absolute;
            left: 15px;
            top: 5px;
            content: "";
            background: url(../images/socicon-3.png) no-repeat;
            width: 50px;
            height: 50px;
        }

        .what-is-noc-lt ul li:nth-child(4):before {
            position: absolute;
            left: 15px;
            top: 5px;
            content: "";
            background: url(../images/socicon-4.png) no-repeat;
            width: 50px;
            height: 50px;
        }

        .what-is-noc-lt ul li:nth-child(5):before {
            position: absolute;
            left: 15px;
            top: 5px;
            content: "";
            background: url(../images/socicon-5.png) no-repeat;
            width: 50px;
            height: 50px;
        }

        .what-is-noc-lt ul li:nth-child(6):before {
            position: absolute;
            left: 15px;
            top: 5px;
            content: "";
            background: url(../images/socicon-6.png) no-repeat;
            width: 50px;
            height: 50px;
        }

        .article-blk-main {
            max-width: 1215px;
            margin: -40px auto 0;
            background: #ffffff;
            padding: 20px;
            border-radius: 5px;
            z-index: 9999;
            position: relative;
        }

        .article-blk-main .slick-next:before {
            content: "\f105";
            color: #2680EB;
            font-size: 20px;
            font-family: 'FontAwesome';
            width: 30px;
            height: 30px;
            border-radius: 100%;
            border: 1px solid #2680EB;
            display: block;
            padding: 4px;
        }

        .article-blk-main .slick-prev:before {
            content: "\f104";
            color: #2680EB;
            font-size: 20px;
            font-family: 'FontAwesome';
            width: 30px;
            height: 30px;
            border-radius: 100%;
            border: 1px solid #2680EB;
            display: block;
            padding: 4px;
        }

        .article-blk-main .slick-next {
            left: auto;
            right: -45px;
            margin: 0 auto;
            z-index: 99;
        }

        .article-blk-main .slick-prev {
            left: -45px;
            right: auto;
            margin: 0 auto;
            z-index: 99;
        }


        .slider-knowledge {
            padding: 35px;
        }

        .slider-knowledge .slick-next:before {
            content: "\f105";
            color: #2680EB;
            font-size: 20px;
            font-family: 'FontAwesome';
            width: 30px;
            height: 30px;
            border-radius: 100%;
            border: 1px solid #2680EB;
            display: block;
            padding: 4px;
        }

        .slider-knowledge .slick-prev:before {
            content: "\f104";
            color: #2680EB;
            font-size: 20px;
            font-family: 'FontAwesome';
            width: 30px;
            height: 30px;
            border-radius: 100%;
            border: 1px solid #2680EB;
            display: block;
            padding: 4px;
        }

        .slider-knowledge .slick-next {
            left: auto;
            right: 50px;
            margin: 0 auto;
            z-index: 99;
            top: 0;
        }

        .slider-knowledge .slick-prev {
            right: 100px;
            left: auto;
            margin: 0 auto;
            z-index: 99;
            top: 0;
        }

        .who-we-are1 {
            padding: 35px 25px 5px;
            background: #FFFFFF;
        }

        .who-we-are1 h2 {
            color: #1A1A1A;
            position: relative;
            text-align: center;
            padding: 0 0 40px;
        }

        /*.who-we-are h2:before{position: absolute;top: -40px;left: 0;right: 0;content: "";width: 100px;height: 5px;background: #2680EB;margin: 0 auto;}*/
        .who-we-are1 p {
            color: #000000;
            padding: 0 0 20px;
        }

        .pid {
            line-height: 26px;
        }

        .what1 {
            color: #1A1A1A;
            text-align: center;
            padding: 30px 0px;
        }

        .all-value1 {
            ;
            padding-bottom: 80px;
            max-width: 1050px;
            margin: -100px auto 0;
        }

        .mission-data1 {
            position: absolute;
            top: 0;
            height: 100%;
            width: 100%;
            padding: 24px;
            display: none;
            text-align: center;
        }

        .mission-data1 h6 {
            padding: 0 0 15px;
            color: white;
            font-weight: 500;
            font-size: 31px;
        }

        .mission-data1 p {
            padding: 0px 0px;
            font-size: 16px;
            line-height: 20px;
            text-align: center;
        }

        .who-we-are-main1 {
            max-width: 1050px;
            margin: 0 auto;
        }

        .what-drives-vission1 {
            padding: 0px 0px 10px;
        }

        .what-drives-mission1 {
            padding: 0px;
            margin: 0px;
        }

        .what-drives-mission-left1 {
            padding: 12px 0px
        }

        .what-drives-mission-left1 h3 {
            color: #2680EB;
            padding: 0 0 10px;
        }

        .what-drives-mission-left1 p {
            color: #000000;
        }

        .latest-block h3:hover {
            border-bottom: 1px solid;
        }

        .slider-knowledge li {
            padding: 7px;
        }

        .slider-knowledge li a {
            padding: 7px;
            font-size: 18px;
            line-height: 18px;
            color: #000000;
            display: block;
            font-weight: 500;
        }

        .slider-knowledge li a.pres-rel:hover {
            text-decoration: underline !important;
        }

        .slider-knowledge li a.pres-rel {
            min-height: 130px;
        }

        .readmore-btn a {
            color: #ffffff !important;
            background: #2680EB;
            width: 125px;
            height: 40px;
            text-align: center;
            font-size: 15px !important;
            line-height: 40px !important;
            border: 1px solid #ffffff;
            border-radius: 25px;
            font-weight: 400 !important;
            padding: 0 !important;
        }

        .whitepapers-blk .case-content {
            min-height: auto;
        }
    </style>


    <style type="text/css">
        .modeSwitch {
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

        input:checked+.slider:before,
        input:checked+.dark .slider:before {
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





    <style>
        .banners_content a {
            background-color: #007bfc;
            padding: 50x 10px;
            width: 180px;
            height: 45px;
            color: #fff;
            text-align: center;
            line-height: 2.8;
            border-radius: 5px;
            font-size: 17px;
            /* margin: 0px 10px; */
            display: inline-flex;
            text-align: center;
            justify-content: center;
            text-decoration: none !important;
            font-weight: 600;
            letter-spacing: 1px;


        }

        .banners_content {
            position: absolute;
            top: 110px;
            left: 60px;
            z-index: 9;
            font-size: 35px;
        }




        /* ************************************ */

        .modal-backdrop {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1040;
            background-color: #000;
            display: none !important;
        }

        div#myModal {
            z-index: 99999999999;
            top: 0px !important;
            zoom: 0.9;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 15% !important;
            width: 100%;
            height: 100%;
            overflow: unset;
            background-color: rgb(0, 0, 0);
            background-color: #842d2d;
            left: 0;
            right: 0;
            margin: 0 auto;
            z-index: 9999999999999;
        }

        .modal-dialog {
            background-color: #bdc3c7 !important;
            background-color: #f2f5f7 !important;
            padding: 20px;
            border-radius: 10px;
            color: #223f97;
            backdrop-filter: blur(42px);
            padding: 0px !important;
        }

        .error {
            color: red;
        }

        .pop_up form label {
            display: flex;
        }

        .pop_up form input {
            width: 100%;
            background-color: #fff;
            border: 1px solid #0000002e;
            border-radius: 10px;
            outline: none;
            padding: 8px 10px;
            margin-bottom: 10px;
            /* border: none; */
            text-align: left;
        }

        .pop_up form textarea {
            width: 100%;
            background-color: #fff;
            border: 1px solid #000;
            border-radius: 10px;
            outline: none;
            padding: 5px 10px;
            text-align: left;
        }

        .pop_up .modal-content {
            position: relative;
            background: transparent;
            width: 90%;
            border: 0;
            margin: 0 auto;
        }


        /* .modal-dialog {
    background-color: #77b903;
    padding: 15px;
    border-radius: 10px;
    color: #223f97;
    backdrop-filter: blur(42px);
} */

        .pop_up button.close {
            background-color: #000;
            text-align: center;
            padding: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 30px;
            color: #fff;
            height: 30px;
            border-radius: 100px;
            margin-top: 15px;
        }

        .pop_up form .sub_mit {
            width: 100%;
            max-width: 50%;
            margin: auto !important;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff !important;
        }

        .pop_up .modal-title {
            font-size: 30px;
            font-family: 'Roboto', sans-serif;
            font-weight: 500;
            color: #223f97;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 15% !important;
            width: 100%;
            height: 100%;
            overflow: unset;
            background-color: rgb(0, 0, 0);
            background-color: #000000a1 !important;
            left: 0;
            right: 0;
            margin: 0 auto;
            z-index: 9999999999999;
        }

        .data_card_left_right {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .space::after {
            content: "";
            position: absolute;
            width: 200px;
            height: 1px;
            top: 0px;
            left: 0px;
            /* background-color: #fff; */
            border: 0.0000001px dotted #ffffff38;
        }

        .plan-button {
            transition: all 0.2s ease !important;
        }

        .plan-button:hover {
            background-color: #223f97 !important;
            color: #fff !important;
        }

        .content {
            max-width: 98%;
            margin: auto;
            margin-bottom: 20px;
            padding: 40px 0px;
            padding-bottom: 0px;
        }

        .pop_up form .sub_mit {
            width: 100%;
            max-width: 50%;
            margin: auto !important;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #223f97;
            color: #fff !important;
        }

        .data_card .title {
            /* text-align: center; */
            font-size: 22px;
            padding: 10px 0px;
            text-align: left;
            color: #223f97;
            color: #216733;
            font-family: 'Roboto', sans-serif;
            font-weight: 700;
            padding-left: 20px;
        }

        .plan_detail {
            /* color: red !important; */
            font-weight: 900 !important;
        }

        #openPopup {
            z-index: 9999;
            position: relative;
        }

        .popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 9999;
        }

        .popup-content {
            background-color: #fff;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            border-radius: 5px;
            text-align: center;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 20px;
            cursor: pointer;
        }
    </style>


    <!-- BANNERS BUTTONS -->

    <div class="banners_content gpu_hide" style=>
        <p>
            <a>Request For Quote</a>
            <a data-toggle="modal" data-target="#myModal">Reach Us</a>
        </p>
    </div>

    <!-- Modal -->
    <div class="modal pop_up fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">GPU On Cloud</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form id="contactForm" action="https://clientele.techsters.in/public/api/client_forms" method="post">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required>
                        <span class="error" id="nameError"></span><br>

                        <label for="number">Mobile:</label>
                        <input type="tel" id="number" name="number" pattern="[0-9]{10}" required>
                        <span class="error" id="numberError"></span><br>

                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                        <span class="error" id="emailError"></span><br>

                        <label for="message">Message:</label>
                        <textarea id="message" name="message" rows="4" required></textarea>
                        <span class="error" id="messageError"></span><br><br>

                        <input class="sub_mit" type="submit" value="Submit">

                        <input type="hidden" name="package" id="package" value="" />
                        <input type="hidden" name="techsters_subject" value="GPU" />
                        <input type="hidden" name="form_unique_id" value="1ef13057-52fd-11ee-a4b0-525400b78afc"   />
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- BANNERS BUTTONS -->

    <button id="openPopup">Open Popup</button>
    <div id="popup" class="popup">
        <div class="popup-content">
            <span class="close" id="closePopup">&times;</span>
            <p>This is a simple popup.</p>
        </div>
    </div>



    <script>
        document.getElementById("openPopup").addEventListener("click", function() {
            document.getElementById("popup").style.display = "block";
        });

        document.getElementById("closePopup").addEventListener("click", function() {
            document.getElementById("popup").style.display = "none";
        });

        window.addEventListener("click", function(event) {
            var popup = document.getElementById("popup");
            if (event.target == popup) {
                popup.style.display = "none";
            }
        });
    </script>