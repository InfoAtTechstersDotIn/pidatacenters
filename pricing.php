<?php
$seo_title = "Pricing";
$seo_description = "";
$seo_keywords = "";

?>

<?php include('php/includes-techsters/header.php'); ?>

<head>
    <!-- Google Tag Manager -->
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
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5J7TD3KS');
    </script>
    <!-- End Google Tag Manager -->

    <script type="text/javascript">
        _linkedin_partner_id = "4836476";
        window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
        window._linkedin_data_partner_ids.push(_linkedin_partner_id);
    </script>
    <script type="text/javascript">
        (function(l) {
            if (!l) {
                window.lintrk = function(a, b) {
                    window.lintrk.q.push([a, b])
                };
                window.lintrk.q = []
            }
            var s = document.getElementsByTagName("script")[0];
            var b = document.createElement("script");
            b.type = "text/javascript";
            b.async = true;
            b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
            s.parentNode.insertBefore(b, s);
        })(window.lintrk);
    </script>
    <noscript> <img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=4836476&fmt=gif" /> </noscript>

</head>

<!-- main starts here -->
<div class="about-banner">
    <div class="about-banner-blk">
        <img src="images/datacenter-services.png" alt="datacenter-services" width="1920" height="210" class="datacenter-services-img">
        <h1>Pricing</h1>
    </div>
</div>

<div class="pricing-tabs">
    <div class="container">
        <div class="row">
            <div class="col-md-4 my-3">
                <img src="images/pricing-cloud-server.webp">
                <h2>Cloud Sever</h2>
                <a href="./pi-cloud/pricing/#/cloudServers" target="_blank">Buy Now</a>
            </div>
            <div class="col-md-4 my-3">
                <img src="images/pricing-cloud-storage.webp">
                <h2>Cloud Storage</h2>
                <a href="./pi-cloud/pricing/#/cloudStorage" target="_blank">Buy Now</a>
            </div>
            <div class="col-md-4 my-3">
                <img src="images/pricing-rent-a-rack.webp">
                <h2>Rent A Rack</h2>
                <a href="rent-a-rack-pricing.php" target="_blank">Buy Now</a>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-4 my-3">
                <img src="images/pricing-rent-a-server.webp">
                <h2>Rent A Sever</h2>
                <a href="rent-a-server-pricing.php" target="_blank">Buy Now</a>
            </div>
            <div class="col-md-4 my-3">
                <img src="images/pricing-rent-gpu-server.webp">
                <h2>Rent GPU Servers</h2>
                <a href="https://picloud.ai/" target="_blank">Buy Now</a>
            </div>
        </div>
    </div>
</div>


<?php include('php/includes-techsters/footer.php'); ?>

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

</body>

</html>