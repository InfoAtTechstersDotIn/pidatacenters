<?php
$seo_title = "Careers - Pi Datacenters | Work with us at India's Best Data Center & Cloud ";
$seo_description = "Work with us at Pi Datacenters - India's Best Data Center Services provider, which allows you to explore opportunities in cloud services, Infrastructure Management, DevOps, Azure, and many more.";
$seo_keywords = "Data center services, cloud services, data center sercices provider, cloud services provider in india";
?>

<?php ob_start(); ?>
<?php include('php/inner-header.php'); ?>
<!-- main starts here -->
<?php
$servername = "localhost";
$username = "marcom";
$password = "TR*viv3mo?!q";
$dbname = "search8c_pi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<div class="about-banner">
    <div class="about-banner-blk">
        <img src="images/work-with-us-banner.jpg" alt="work-with-us-banner" width="1920" height="210">
        <h2>Work With Us</h2>

    </div>
</div>
<div class="about-banner-img">
    <img src="images/workwithus-banner.png" alt="workwithus-banner" width="186" height="76">
</div>
<!--what-is-noc starts here -->
<div class="workwithus-blk">
    <div class="container">
        <div class="workwithus-main">
            <h3><span style="color: #7BBC42;font-weight:400;">Career</span> Opportunities</h3>
            <div class="career-opportunities">
                <ul class="row">
                    <li class="col-md-8">
                        <input type="text" placeholder="Type Job, role, skill">
                    </li>
                    <li class="col-md-2">
                        <input type="text" placeholder="Location">
                    </li>
                    <li class="col-md-2">
                        <button>Search</button>
                    </li>
                </ul>
            </div>

            <div class="career-opportunities2">
                <ul class="row">

                    <?php

                    $r = "SELECT * from why_us ORDER BY id DESC";
                    $g = mysqli_query($conn, $r) or die(mysql_error());
                    if (mysqli_num_rows($g) > 0) {
                        while ($row = mysqli_fetch_array($g)) {
                            $id = "$row[id]";
                            $job_title = "$row[job_title]";
                            $job_experience = "$row[job_experience]";
                            $job_location = "$row[job_location]";
                            $date = "$row[date]";
                            $ufile = "$row[ufile]";
                    ?>
                            <li class="col-md-10">
                                <div class="career-opportunities2-cnt">
                                    <ul class="row">

                                        <li class="col-md-5">
                                            <strong><?php print($job_title); ?></strong>
                                        </li>
                                        <li class="col-md-2">
                                            <span>Experience :<?php print($job_experience); ?></span>
                                        </li>
                                        <li class="col-md-2">
                                            <span>Location : <?php print($job_location); ?></span>
                                        </li>
                                        <li class="col-md-3">
                                            <span>Job created date :<?php print($date); ?></span>
                                        </li>


                                    </ul>
                                </div>
                            </li>
                            <li class="col-md-2" style="margin:5px 0px;">
                                <a href="job-details.php?id=<?php print($id); ?>">Apply</a>
                            </li>
                            </li>
                    <?php

                        }
                    } else {
                        echo "<span>No Blogs</span>";
                    }

                    $conn->close();
                    ?>
                </ul>
            </div>
            <!--<div class="career-opportunities2">
                        <ul class="row">
                            <li class="col-md-10">
                                 <div class="career-opportunities2-cnt">
                                <ul class="row">
                                    <li class="col-md-5">
                                        <strong>Back End Developer (Remote)</strong>
                                    </li>
                                    <li class="col-md-2">
                                        <span>Experience : 2 - 3 Years</span>
                                    </li>
                                    <li class="col-md-2">
                                         <span>Location : Mumbai</span>
                                    </li>
                                    <li class="col-md-3">
                                         <span>Job created date : 20/07/2022</span>
                                    </li>
                                </ul>
                                </div>
                            </li>
                            <li class="col-md-2">
                                     <a href="job-details.php">Apply</a>
                            </li>
                        </ul>
                    </div>-->

            <!--<div class="career-opportunities2">
                        <ul class="row">
                            <li class="col-md-10">
                                 <div class="career-opportunities2-cnt">
                                <ul class="row">
                                    <li class="col-md-5">
                                        <strong>Diversity, Equity & Inclusion Manager (Office)</strong>
                                    </li>
                                    <li class="col-md-2">
                                        <span>Experience : 5 - 6 Years</span>
                                    </li>
                                    <li class="col-md-2">
                                         <span>Location : Pune</span>
                                    </li>
                                    <li class="col-md-3">
                                         <span>Job created date : 20/07/2022</span>
                                    </li>
                                </ul>
                                </div>
                            </li>
                            <li class="col-md-2">
                                     <a href="job-details.php">Apply</a>
                            </li>
                        </ul>
                    </div>-->
            <!--<div class="career-opportunities2">
                        <ul class="row">
                            <li class="col-md-10">
                                 <div class="career-opportunities2-cnt">
                                <ul class="row">
                                    <li class="col-md-5">
                                        <strong>Director of Client Development (100% REMOTE)</strong>
                                    </li>
                                    <li class="col-md-2">
                                        <span>Experience : 4 - 6 Years</span>
                                    </li>
                                    <li class="col-md-2">
                                         <span>Location : Delhi</span>
                                    </li>
                                    <li class="col-md-3">
                                         <span>Job created date : 20/07/2022</span>
                                    </li>
                                </ul>
                                </div>
                            </li>
                            <li class="col-md-2">
                                    <a href="job-details.php">Apply</a>
                            </li>
                        </ul>
                    </div>-->

            <!--<div class="career-opportunities2">
                        <ul class="row">
                            <li class="col-md-10">
                                 <div class="career-opportunities2-cnt">
                                <ul class="row">
                                    <li class="col-md-5">
                                        <strong>Client Development Manager (100% REMOTE)</strong>
                                    </li>
                                    <li class="col-md-2">
                                        <span>Experience : 4 - 6 Years</span>
                                    </li>
                                    <li class="col-md-2">
                                         <span>Location : Hyderabad</span>
                                    </li>
                                    <li class="col-md-3">
                                         <span>Job created date : 20/07/2022</span>
                                    </li>
                                </ul>
                                </div>
                            </li>
                            <li class="col-md-2">
                                     <a href="job-details.php">Apply</a>
                            </li>
                        </ul>
                    </div>-->
            <!--<div class="career-opportunities2">
                        <ul class="row">
                            <li class="col-md-10">
                                 <div class="career-opportunities2-cnt">
                                <ul class="row">
                                    <li class="col-md-5">
                                        <strong>Staff Accountant (Office)</strong>
                                    </li>
                                    <li class="col-md-2">
                                        <span>Experience : 4 - 6 Years</span>
                                    </li>
                                    <li class="col-md-2">
                                         <span>Location : Channai</span>
                                    </li>
                                    <li class="col-md-3">
                                         <span>Job created date : 20/07/2022</span>
                                    </li>
                                </ul>
                                </div>
                            </li>
                            <li class="col-md-2">
                                     <a href="job-details.php">Apply</a>
                            </li>
                        </ul>
                    </div>-->
        </div>
    </div>
</div>

<?php

if (isset($_POST['button']) && isset($_FILES['attachment'])) {
    $from_email         = 'noreply@pidatacenters.com'; //from mail, sender email address
    $recipient_email = 'recruitment@pidatacenters.com'; //recipient email address

    //Load POST data from HTML form
    $sender_name = $_POST["sender_name"]; //sender name
    $reply_to_email = $_POST["sender_email"]; //sender email, it will be used in "reply-to" header
    $firstname = $_POST["fname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $position = $_POST["position"];
    $subject     = "Job Application -" . $firstname . "Position-" . $position; //subject for the email
    $message = "Firstname:  " . $firstname . "\r\n" . "Email:  " . $email . "\r\n" . "Phone:  " . $phone . "\r\n" . "Applied Position:  " . $position;

    /*Always remember to validate the form fields like this
	if(strlen($sender_name)<1)
	{
		die('Name is too short or empty!');
	}
	*/
    //Get uploaded file data using $_FILES array
    $tmp_name = $_FILES['attachment']['tmp_name']; // get the temporary file name of the file on the server
    $name     = $_FILES['attachment']['name']; // get the name of the file
    $size     = $_FILES['attachment']['size']; // get size of the file for size validation
    $type     = $_FILES['attachment']['type']; // get type of the file
    $error     = $_FILES['attachment']['error']; // get the error (if any)

    //validate form field for attaching the file
    if ($error > 0) {
        die('Upload error or No files uploaded');
    }

    //read from the uploaded file & base64_encode content
    $handle = fopen($tmp_name, "r"); // set the file handle only for reading the file
    $content = fread($handle, $size); // reading the file
    fclose($handle);                 // close upon completion

    $encoded_content = chunk_split(base64_encode($content));
    $boundary = md5("random"); // define boundary with a md5 hashed value

    //header
    $headers = "MIME-Version: 1.0\r\n"; // Defining the MIME version
    $headers .= "From:" . $from_email . "\r\n"; // Sender Email
    $headers .= "Reply-To: " . $reply_to_email . "\r\n"; // Email address to reach back
    $headers .= "Content-Type: multipart/mixed;"; // Defining Content-Type
    $headers .= "boundary = $boundary\r\n"; //Defining the Boundary

    //plain text
    $body = "--$boundary\r\n";
    $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
    $body .= chunk_split(base64_encode($message));

    //attachment
    $body .= "--$boundary\r\n";
    $body .= "Content-Type: $type; name=" . $name . "\r\n";
    $body .= "Content-Disposition: attachment; filename=" . $name . "\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n";
    $body .= "X-Attachment-Id: " . rand(1000, 99999) . "\r\n\r\n";
    $body .= $encoded_content; // Attaching the encoded file with email

    $sentMailResult = mail($recipient_email, $subject, $body, $headers);

    if ($sentMailResult) {
        echo "<h3 style='color:green;text-align:Center'>Application Sent Successfully.<h3>";
        // unlink($name); // delete the file after attachment sent.
        header("Location:https://pidatacenters.com/thank-you-applied.php");
    } else {
        die("Sorry but the email could not be sent.
					Please go back and try again!");
    }
}
?>



<div class="apply-for-position">
    <div class="apply-for-position-main">
        <h4>Apply for a Position</h4>

        <form enctype="multipart/form-data" method="POST" action="">
            <ul class="row">
                <li class="col-md-6">
                    <input type="text" name="fname" placeholder="First Name*" required style="background-color:none !important;">
                </li>
                <li class="col-md-6">
                    <input type="text" name="lname" placeholder="Last Name*" required style="background-color:none !important;">
                </li>
                <li class="col-md-6">
                    <input type="text" name="email" placeholder="Your Email*" required style="background-color:none !important;">
                </li>
                <li class="col-md-6">
                    <input type="text" name="phone" placeholder="Contact Number*" pattern="^[0-9]{10}$" required style="background-color:none !important;">
                </li>

                <li class="col-md-6">
                    <input type="text" name="position" placeholder="Position*" required style="background-color:none !important;">
                </li>
                <li class="col-md-6">
                    <input type="file" name="attachment" required style="background-color:none !important;">
                </li>
                <li class="col-12">
                    <!-- <iframe src="//searchmarketingsolved.com/Forms/gfembed/?f=25" width="100%" height="500" frameBorder="0" class="gfiframe"></iframe>
                    <script src="//searchmarketingsolved.com/Forms/wp-content/plugins/gravity-forms-iframe-develop/assets/scripts/gfembed.min.js" type="text/javascript"></script> -->
                </li>
                <li class="col-12">
                    <textarea name="message" placeholder="Massage About You"></textarea>
                </li>
                <li class="col-12">
                    <input type="submit" name="button" value="submit">
                </li>
            </ul>
        </form>
    </div>
</div>



<?php include('php/footer.php'); ?>




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
    $(document).ready(function() {
        $('.slider').slick({
            slidesToShow: 1,
            dots: true,
            arrows: false,
            //adaptiveHeight: true,
            responsive: [{
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        slidesToShow: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        slidesToShow: 1
                    }
                }
            ]
        });


        //animation
        wow = new WOW({
            animateClass: 'animated',
            offset: 100,
            mobile: true
        });
        wow.init();
    });
</script>
</body>

</html>