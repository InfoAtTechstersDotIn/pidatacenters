<?php
$seo_title = "Download Brochure - Pi Datacenters | Explore our Product Portfolio";
$seo_description = "Download the Pi Datacenters' latest brochure and explore everything you need to know about data center services, infrastructure, and management in India. Get to know about our unique solutions and advanced product range. Download the brochure today!";
$seo_keywords = "Product Portfolio, Data Center Services, data center infrastructure, data centers in india";
?>
<?php include('php/includes-techsters/header.php'); ?>
<style>
    .modal-content {
        background: none;
        margin: 0 auto;
        border: none;
    }
</style>
<!-- main starts here -->
<div class="about-banner">
    <div class="about-banner-blk">
        <img src="images/brochure.jpg" alt="brochure-ban11" width="1920" height="210">
        <h1>Brochure</h1>

    </div>
</div>

<div class="brochure-block">
    <div class="container">
        <div class="tabs-content">
            <div class="row">
                <div class="col-md-6  mobile-view-show">
                    <img src="images/brochure-img-1.png" alt="brochure-img-1" width="661" height="446" style="box-shadow: 0 0 3px grey;">
                </div>
                <div class="col-md-6">
                    <div>
                        <h2>Product Portfolio:</h2>
                        <p style="color:#242424 !important;" class="py-2">Are you looking for a reliable and secure datacenter and cloud provider for your business? </p>
                        <p style="color:#242424 !important;">Look no further than Pi DATACENTERS&#174;! Our team of experts has put together a comprehensive product portfolio featuring state-of-the-art datacenters and a range of cloud services. From colocation to managed services, we have a solution to fit the needs of your organization.</p>
                        <a href="#modal-1" onclick="document.getElementById('File_Downloaded').value = '<?php echo $each ?>'" ;>Download Brochure</a>
                    </div>
                </div>
                <div class="col-md-6 mobile-view-hide">
                    <img src="images/brochure-img-1.png" alt="brochure-img-1" width="661" height="446" style="box-shadow: 0 0 3px grey;">
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('php/includes-techsters/footer.php'); ?>

<!-- <div id="modal-1" class="modalDialog">
    <div class="fill-your-details">

        <div class="modal-content">
            <div class="modal-container">
                <a href="#close" title="Close" class="close">x</a>
                <div class="modal-body">
                    <div class=" row">
                        <div class="fill-your-details-cnt">
                            <h4>Fill Your Details</h4>
                            <form>
                                <ul class="row">
                                    <li class="col-md-6">
                                        <label>Full Name</label>
                                        <input type="text">
                                    </li>
                                    <li class="col-md-6">
                                        <label>Company Name</label>
                                        <input type="text">
                                    </li>
                                    <li class="col-md-6">
                                        <label>Mobile No</label>
                                        <input type="text">
                                    </li>
                                    <li class="col-md-6">
                                        <label>Email Address</label>
                                        <input type="text">
                                    </li>
                                    <li class="col-12">
                                        <button>Download Brochure</button>
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div id="modal-1" class="modalDialog">
    <div class="fill-your-details">
        <div class="modal-content" style="margin: 5% 0%;width:100%">
            <div class="modal-container">
                <a href="#close" title="Close" class="close">x</a>
                <div class="modal-body">
                    <div class=" row">
                        <div class="fill-your-details-cnt" style="width: 100%;">
                            <h4>Fill Your Details</h4>
                            <form onsubmit="return myFunction()" id="contactForm" action="https://clientele.techsters.in/public/api/client_forms" method="post">
                                <input type="text" name="name" style="width: 100%;border-radius:5px" placeholder=" Full Name" required=""><br /><br />
                                <input type="tel" name="number" style="width: 100%;border-radius:5px" placeholder=" Phone" pattern="[0-9]{10}" required=""><br /><br />
                                <input id="email_address" type="email" name="email" style="width: 100%;border-radius:5px" placeholder=" Email Address" required=""><br /><br />
                                <input type="text" name="website" style="width: 100%;border-radius:5px" placeholder=" Company Website" required=""><br /><br />
                                <textarea name="message" style="width: 100%;border-radius:5px" rows="4" placeholder=" Message" required=""></textarea><br /><br />
                                <input class="btn" style="width: 100%;border-radius:5px" type="submit" value="Submit">
                                <input type="hidden" name="downloaded" id="File_Downloaded" value="">
                                <input type="hidden" name="techsters_subject" value="PiDataCenters - Case Studies">
                                <input type="hidden" name="form_unique_id" value="1ef13057-52fd-11ee-a4b0-525400b78afc">
                            </form>
                            <script>
                                function myFunction() {
                                    let email_address = document.getElementById('email_address').value;
                                    if (email_address.includes('gmail') || email_address.includes('yahoo') || email_address.includes('outlook') ||
                                        email_address.includes('hotmail') || email_address.includes('live') || email_address.includes('aol')) {
                                        alert('Invalid Email Address, Please use your Work Email');
                                        return false;
                                    } else {
                                        let File_Downloaded = document.getElementById('File_Downloaded').value;
                                        let URL = 'case_study_files/' + File_Downloaded + '.pdf';
                                        window.open(URL);
                                    }
                                }
                            </script>
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

</body>

</html>