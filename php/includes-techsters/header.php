
<!DOCTYPE html>
<html lang="en">

<head>
<?php
$site_url="http://localhost/pidatacenters-main/"
?>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="php/includes-techsters/header-styles.css">
    <link rel="stylesheet" type="text/css" href="php/includes-techsters/footer-styles.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $site_url?>press-style.css">

    <link rel="stylesheet" type="text/css" href="<?php echo $site_url?>css/picloud/styles.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $site_url?>css/picloud/style-2.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $site_url?>css/picloud/minified/common.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $site_url?>css/picloud/minified/darkmode.css">


    <link rel="stylesheet" type="text/css" href="<?php echo $site_url?>press-style.css">



    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css" type="https://103.210.75.115/text/css">
    <link rel="stylesheet" href="https://103.210.75.115/css/menu.css" type="text/css">
    <link rel="stylesheet" href="https://103.210.75.115/css/main-test.css" type="text/css">
    <link rel="stylesheet" href="https://kenwheeler.github.io/slick/slick/slick.css" type="text/css">
    <link rel="stylesheet" href="https://kenwheeler.github.io/slick/slick/slick-theme.css" type="text/css">
    <!-- <link rel="stylesheet" href="https://103.210.75.115/css/style-test.css" type="text/css"> -->
    <link href="https://103.210.75.115/press-style.css" rel="stylesheet">
    <link href="https://103.210.75.115/css/responsive-test.css" rel="stylesheet" type="text/css">
    <link rel="canonical" href="<?php echo $seo_canonical; ?>" />



<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>



    <div class="header desktop">
        <div class="container-fluid">
            <div class="row px-2">
                <div class="col-lg-2">
                    <div class="logo">
                        <a href="https://pidatacenters.com">
                            <img src="https://www.pidatacenters.com/images/logo-wt.png" alt="logo">
                        </a>
                    </div>
                </div>


                <div class="col-lg-10 d-flex  justify-content-end  align-items-center ">
                    <nav id="" class="nav_items">
                        <ul class="nav_items_ul">
                            <li>
                                <a href="#" class="fonts"></a>
                            </li>

                            <li class=""><a href="https://pidatacenters.com/"><i class="fa fa-home" style="color:black"></i></a></li>

                            <li>
                                <a href="#" class="drop-arrow ">
                                    newDATA CENTER


                                </a>
                                <div class="drop-down">
                                    <ul>
                                        <li>
                                            <a href="<?php echo $site_url ?>data-center-infrastructure-services.php">Colocation</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $site_url ?>data-center-infrastructure-services-advisory.php">Data Center Infrastructure & Services</a>
                                        </li>
                                        <li>
                                            <a href="">Consulting & Data Center Build <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                            <div class="sub_drop_down">
                                                <ul>
                                                    <li>
                                                        <a href="<?php echo $site_url ?>dc-design-planning.php">Data Center Design & Planning</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo $site_url ?>dc-build.php">Data Center Build & Operate</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <!-- <li>
                                <a href="https://pidatacenters.com/data-center-infrastructure-services.php">COLOCATION</a>
                            </li> -->
                            <li>
                                <a href="#" class="drop-arrow">CLOUD</a>
                                <div class="drop-down">
                                    <ul>
                                        <li>
                                            <a href="<?php echo $site_url ?>public-cloud.php">Public Cloud</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $site_url ?>compute.php">Private Cloud</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $site_url ?>sap.php">SAP on Cloud</a>
                                        </li>

                                        <li>
                                            <a href="<?php echo $site_url ?>industry-solutions.php">Industry Solutions</a>
                                        </li>


                                        <li>
                                            <!-- <a href="#">Other Could Services</a> -->
                                        </li>
                                        <li>
                                            <a href="#">Cloud Enablement</a>
                                        </li>
                                    
                                        <li>
                                            <a href="#">Cloud Certifications</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="drop-arrow">MANAGED SERVICES</a>
                                <div class="drop-down">
                                    <ul>
                                        <li>
                                            <a href="#">Multi Cloud Managed Services</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $site_url ?>rims.php">RIMS</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $site_url ?>noc.php">NOC</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $site_url ?>soc.php">SOC</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $site_url ?>devops.php">DevOps</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="drop-arrow">PRODUCTS</a>
                                <div class="drop-down">
                                    <ul>
                                        <li>
                                            <a href="#">Cyber Security</a>
                                        </li>
                                        <li>
                                            <a href="#">Internet Exchange (IPX)</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $site_url ?>harbourfront-services.php">HarbourFront (CDN)</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $site_url ?>pi-work-spaces.php">Pi Workspaces (VDI)</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="drop-arrow">PRICING</a>
                                <div class="drop-down">
                                    <ul>
                                        <li>
                                            <a href="#">Cloud Servers</a>
                                        </li>
                                        <li>
                                            <a href="#">Cloud Storage</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $site_url ?>rent-server.php">Rent A Server</a>
                                        </li>
                                        <li>
                                            <a href="https://picloud.ai/">Rent GPU Servers</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#" class="fonts"><i class="fa fa-bars" aria-hidden="true"></i></a>
                                <div class="drop-down drop_down_bars">
                                    <ul>
                                        <li>
                                            <a >About <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                            <div class="sub_drop_down  ">
                                                <ul>
                                                    <li>
                                                        <a href="<?php echo $site_url ?>about.php">About us</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo $site_url ?>leadership.php">Leadership</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo $site_url ?>awards-recognition.php">Awards &amp; Recognition</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo $site_url ?>testimonial.php">Testimonials</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo $site_url ?>certifications.php">Certifications</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="<?php echo $site_url ?>ceo-corner.php"> CEO Corner</a>
                                        </li>
                                        <li>
                                            <a href="#"> Partner Portal</a>
                                        </li>

                                        <li>
                                            <a href="#">Knowledge Center <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                            <div class="sub_drop_down">
                                                <ul>
                                                    <li>
                                                        <a href="<?php echo $site_url ?>case-studies.php">Case Studies</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo $site_url ?>blogs.php">Blogs</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo $site_url ?>whitepapers.php">Whitepapers</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo $site_url ?>brochure.php">Brochure</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo $site_url ?>">Knowledge Hub</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <a href="#">Media <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                            <div class="sub_drop_down">
                                                <ul>
                                                    <li>
                                                        <a href="<?php echo $site_url ?>press-releases.php">Press Release</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo $site_url ?>gallery.php">Gallery</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo $site_url ?>videos.php">Videos</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <a href="#">Policies <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                            <div class="sub_drop_down">
                                                <ul>
                                                    <li>
                                                        <a href="<?php echo $site_url ?>privacy-policy.php">Privacy Policy</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo $site_url ?>acceptable-use-policy.php">Acceptable Use Policy</a>
                                                    </li>


                                                    <li><a href="<?php echo $site_url ?>terms-conditions.php">Terms and Conditions</a></li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <a href="#">Career <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                            <div class="sub_drop_down">
                                                <ul>
                                                    <li>
                                                        <a href="<?php echo $site_url ?>life-at-pi.php">Life at Pi</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo $site_url ?>work-with-us.php">Openings</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <a href="<?php echo $site_url ?>contact-us.php">Contact us</a>
                                        </li>

                                </div>
                            </li>
                        </ul>
                    </nav>
                    <span class="hamburger" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
                </div>
            </div>
        </div>
    </div>


    <!-- ********************************************************** -->

    <div class="header mobile">
        <div class="container-fluid m-0 p-0">
            <div class="row">
                <div class="col-lg-3">
                    <div class="logo">
                        <a href="https://pidatacenters.com">
                            <img src="https://www.pidatacenters.com/images/logo-wt.png" alt="logo">
                        </a>
                    </div>
                </div>


                <div class="col-lg-9">
                    <nav id="mySidenav" class="sidenav">
                        <ul>
                            <li>
                                <a href="index.php" class="fonts">HOME</a>
                            </li>
                            <li class="accordion">
                                <a href="#" class="drop-arrow ">
                                    DATA CENTER <i class="fa fa-caret-down" aria-hidden="true"></i>


                                </a>
                            </li>
                            <div class="panel">
                                <ul>
                                    <li>
                                        <a href="#">Colocation</a>
                                    </li>
                                    <li>
                                        <a href="#">Data Center Infrastructure & Services</a>
                                    </li>
                                    <li class="accordion">
                                        <a href="#">Consulting & Data Center Build </a>
                                    </li>

                                    <div class="panel sub_d_down">
                                        <ul>
                                            <li>
                                                <a href="#">Data Center Design & Planning</a>
                                            </li>
                                            <li>
                                                <a href="#">Data Center Build & Operate</a>
                                            </li>
                                        </ul>
                                    </div>
                                </ul>
                            </div>
                            </li>
                            <li class="accordion">
                                <a href="#" class="drop-arrow">CLOUD</a>

                            </li>
                            <div class="panel ">
                                <ul>
                                    <li>
                                        <a href="#">Public Cloud</a>
                                    </li>
                                    <li>
                                        <a href="#">Private Cloud</a>
                                    </li>
                                    <li>
                                        <a href="#">SAP on Cloud</a>
                                    </li>
                                    <li>
                                        <a href="#">Other Could Services</a>
                                    </li>
                                    <li>
                                        <a href="#">Cloud Certifications</a>
                                    </li>
                                    <li>
                                        <a href="#">Industry Solutions</a>
                                    </li>
                                    <li>
                                        <a href="#">Cloud Enablement</a>
                                    </li>
                                </ul>
                            </div>

                            <li class="accordion">
                                <a href="#" class="drop-arrow">MANAGED SERVICES</a>
                            </li>
                            <div class=" panel">
                                <ul>
                                    <li>
                                        <a href="#">Multi Cloud Managed Services</a>
                                    </li>
                                    <li>
                                        <a href="#">RIMS</a>
                                    </li>
                                    <li>
                                        <a href="#">NOC</a>
                                    </li>
                                    <li>
                                        <a href="#">SOC</a>
                                    </li>
                                    <li>
                                        <a href="#">DevOps</a>
                                    </li>
                                </ul>
                            </div>

                            <li class="accordion">
                                <a href="#" class="drop-arrow">PRODUCTS</a>
                            </li>

                            <div class="panel">
                                <ul>
                                    <li>
                                        <a href="#">Cyber Security</a>
                                    </li>
                                    <li>
                                        <a href="#">Internet Exchange (IPX)</a>
                                    </li>
                                    <li>
                                        <a href="#">HarbourFront (CDN)</a>
                                    </li>
                                    <li>
                                        <a href="#">Pi Workspaces (VDI)</a>
                                    </li>
                                </ul>
                            </div>
                            <li class="accordion">
                                <a href="#" class="drop-arrow">PRICING</a>
                            </li>
                            <div class="panel">
                                <ul>
                                    <li>
                                        <a href="#">Cloud Servers</a>
                                    </li>
                                    <li>
                                        <a href="#">Cloud Storage</a>
                                    </li>
                                    <li>
                                        <a href="#">Rent A Server</a>
                                    </li>
                                    <li>
                                        <a href="#">Rent GPU Servers</a>
                                    </li>
                                </ul>
                            </div>


                            <li class="accordion">
                                <a href="#" class="fonts"><i class="fa fa-bars " aria-hidden="true"></i> <span class="m_info">MORE INFORMATION</span></a>
                            </li>
                            <div class=" panel">
                                <ul>
                                    <li class="accordion">
                                        <a href="#">About </a>

                                    </li>
                                    <div class="sub_d_down panel  ">
                                        <ul>
                                            <li>
                                                <a href="#">About us</a>
                                            </li>
                                            <li>
                                                <a href="#">Leadership</a>
                                            </li>
                                            <li>
                                                <a href="#">Awards &amp; Recognition</a>
                                            </li>
                                            <li>
                                                <a href="#">Testimonials</a>
                                            </li>
                                            <li>
                                                <a href="#">Certifications</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <li>
                                        <a href="#"> CEO Corner</a>
                                    </li>
                                    <li>
                                        <a href="#"> Partner Portal</a>
                                    </li>

                                    <li class="accordion">
                                        <a href="#">Knowledge Center </a>

                                    </li>
                                    <div class="sub_d_down panel">
                                        <ul>
                                            <li>
                                                <a href="#">Case Studies</a>
                                            </li>
                                            <li>
                                                <a href="#">Blogs</a>
                                            </li>
                                            <li>
                                                <a href="#">Whitepapers</a>
                                            </li>
                                            <li>
                                                <a href="#">Brochure</a>
                                            </li>
                                            <li>
                                                <a href="#">Knowledge Hub</a>
                                            </li>
                                        </ul>
                                    </div>


                                    <li class="accordion">
                                        <a href="#">Media </a>
                                        <div class="sub_d_down panel">
                                            <ul>
                                                <li>
                                                    <a href="#">Press Release</a>
                                                </li>
                                                <li>
                                                    <a href="#">Gallery</a>
                                                </li>
                                                <li>
                                                    <a href="#">Videos</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="accordion">
                                        <a href="#">Policies </a>
                                    </li>
                                    <div class="sub_d_down panel">
                                        <ul>
                                            <li>
                                                <a href="#">Privacy Policy</a>
                                            </li>
                                            <li>
                                                <a href="#">Acceptable Use Policy</a>
                                            </li>
                                        </ul>
                                    </div>


                                    <li class="accordion">
                                        <a href="#">Career </a>
                                    </li>
                                    <div class="sub_d_down panel">
                                        <ul>
                                            <li>
                                                <a href="#">Life at Pi</a>
                                            </li>
                                            <li>
                                                <a href="#">Openings</a>
                                            </li>
                                        </ul>
                                    </div>


                                    <li>
                                        <a href="#">Contact us</a>
                                    </li>


                                </ul>
                            </div>
                    </nav>
                    <span class="hamburger" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
                </div>
            </div>
        </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        function openNav() {
            var sidenav = document.getElementById("mySidenav");

            if (sidenav.style.display === "flex") {
                sidenav.style.display = "none";
            } else {
                sidenav.style.display = "flex";
            }
        }

        function closeNav() {
            document.getElementById("mySidenav").style.display = "none";
        }
    </script>






    <script>
        var acc = document.getElementsByClassName("accordion");

        for (var i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;

                if (panel.style.display === "block") {
                    panel.style.display = "none"; // Hide the panel
                } else {
                    panel.style.display = "block"; // Show the panel
                }


            });
        }
    </script>





		<!-- BANNERS BUTTONS -->

		<div class="banners_content gpu_hide" style=>
			<p>
				<a id="myBtn2" style="color: #223f97
;">Request For Quote</a>
				<a id="reach-btn" data-toggle="modal" data-target="#myModal" style="color: #223f97
;">Reach Us</a>
			</p>
		</div>

		<!-- Modal -->
		<div class="modal pop_up fade" id="myModal" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Reach Us</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
						<form action="https://clientele.techsters.in/public/api/client_forms" method="post" enctype="multipart/form-data">
							<label for="name">Name:</label>
							<input type="text" id="name" name="Name" required>


							<label for="number">Mobile:</label>
							<input type="tel" id="number" name="Number" pattern="[0-9]{10}" required>


							<label for="email">Email:</label>
							<input type="email" id="email" name="Email" required>


							<label for="message">Message:</label>
							<textarea id="message" name="Message" rows="4" required></textarea>


							<input class="sub_mit" type="submit" value="Submit">

							<input type="hidden" name="techsters_subject" value="Reach Us Form Leads" />
							<input type="hidden" name="form_unique_id" value="1ef13057-52fd-11ee-a4b0-525400b78afc" � />
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- BANNERS BUTTONS -->




		<!-- Modal two-->
		<div class="modal pop_up fade" id="myModal2" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title global-button"> Request For Quote</h4>
						<button type="button" class="close2" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
						<form action="https://clientele.techsters.in/public/api/client_forms" method="post" enctype="multipart/form-data">
							<label for="name">Name:</label>
							<input type="text" id="name2" name="Name" required>

							<label for="number">Company Name</label>
							<input type="text" id="companyname" name="CompanyName" required>

							<label for="email">Professional Email:</label>
							<input type="email" id="email2" name="Email" required>

							<label for="number">Mobile:</label>
							<input type="tel" id="number2" name="Number" pattern="[0-9]{10}" required>

							<label for="message">Upload Configuration Document</label>
							<input type="file" required name="Configuration Document">



							<input class="sub_mit" type="submit" value="Submit">

							<input type="hidden" name="techsters_subject" value="Request For Quote Form Leads" />
							<input type="hidden" name="form_unique_id" value="86497a91-7e3b-11ee-a0ca-525400b78afc" />
						</form>
					</div>
				</div>
			</div>
		</div>





		<!-- ******************************************************************************************************** -->
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