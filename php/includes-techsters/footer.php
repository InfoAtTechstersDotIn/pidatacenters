<?php
$site_url = "http://localhost/pidatacenters/"
?>


<div class="footer-block">


    <div class="get_in">
        <div class="container">

            <div class="get_in_touch">
                <div class="questions">
                    <p>Questions? We're here to help.</p>

                    <p> <button class="question_button"><a href="<?php echo $site_url ?>contact-us.php"> Get In Touch </a></button></p>
                </div>
            </div>

        </div>
    </div>
    <div class="container mt-sm-5 ">
        <div class="row footer_row">
            <div class="col-md-3 ">
                <ul>
                    <li>
                        <a href="<?php echo $site_url ?>case-studies.php">Case Studies</a>
                        <a href="<?php echo $site_url ?>blogs.php">Blogs</a>
                        <a href="<?php echo $site_url ?>press-releases.php">News</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 ">
                <ul>
                    <li>
                        <a href="<?php echo $site_url ?>certifications.php">Certifications</a>
                        <a href="<?php echo $site_url ?>awards&recognition.php">Awards</a>
                        <a href="<?php echo $site_url ?>testimonial.php">Testimonials</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 ">
                <ul>
                    <li>
                        <a href="<?php echo $site_url ?>about.php">About us</a>
                        <a href="<?php echo $site_url ?>leadership.php">Leadership</a>
                        <a href="<?php echo $site_url ?>data-center-infrastructure-services.php">Services</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 ">
                <ul>
                    <li>
                        <a href="<?php echo $site_url ?>partners.php">Partners</a>
                        <a href="<?php echo $site_url ?>contact-us.php">Reach Us</a>
                        <a href="<?php echo $site_url ?>privacy-policy.php">Policies</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="copy_rights">
            <p>©2023 Pi DATACENTERS® Pvt. Ltd. All rights reserved</p>
        </div>
        <div class="footer_icons">
            <br>
            <ul class="icons_footer">
                <div class="font_icons">
                    <li>
                        <a href="https://www.linkedin.com/company/pidatacenters/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </li>
                </div>
                <div class="font_icons">
                    <li>
                        <a href="https://twitter.com/Pi_DATACENTERS" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                </div>
                <div class="font_icons">
                    <li>
                        <a href="https://www.facebook.com/PiDATACENTERS/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                </div>
                <div class="font_icons">
                    <li>
                        <a href="https://www.youtube.com/@pi_datacenters" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                    </li>
                </div>
                <div class="font_icons">
                    <li>
                        <a href="https://api.whatsapp.com/send?phone=+918712630334&text=Hi, I need more information on Pidatacenters" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                    </li>
                </div>
            </ul>
        </div>
    </div>
</div>



</body>


<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UJ3+5qZdambSKQ6F9BkUQaE/9I5U5jL2a6c4Z8z+UvYsAl5v+z5X8SZIpxLqZ7x" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->




<script>
    // Get the modal
    var modall = document.getElementById("myModal2");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn2");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close2")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
        modall.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modall.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modall) {
            modall.style.display = "none";
        }
    }
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>



<script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js'></script>
<script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>
<script src='./pi-cloud/js/index.js'></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="https://pidatacenters.com/js/custom.js"></script>
<script src="https://pidatacenters.com/js/main.js"></script>








</html>