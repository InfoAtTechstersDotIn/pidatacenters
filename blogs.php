<?php
$seo_title = "Blog - Pi Datacenter | Breakthroughs & Latest Digital India trends in Hyderabad ";
$seo_description = "Check out the latest blogs by Pi Datacenters. Here's a blog by your Ideal Data Center Partner with everything about the global market of data centers in India, Data storage & analytics trends, Artificial Intelligence & other latest news from the Indian Technology world.";
$seo_keywords = "Ideal Data Center Partner, importance of Data Centers, global market for data centers, data center market, data center physical security, data centers in india, data center network";
?>



<?php include('php/includes-techsters/header.php'); ?>

<head>
    <style>
        #myBtn2 {
            display: none;
        }


        strong {
            font-style: normal !important;
            font-weight: normal !important;
        }

        .subscribe-btn {
            position: absolute;
            top: 57%;
            left: 12%;
            border: none;
            background-color: #fff;
            width: 130px;
            height: 35px;
            font-size: 14px;
            color: #223f97;
            font-weight: bold;
            border-radius: 5px;
            outline: none !important;
        }

        .subscribe .sub-btn-2 {
            position: absolute;
            top: -71px;
            left: 141px;
            font-size: 14px;
            border: none;
            background-color: #fff;
            width: 130px;
            height: 35px;
            color: #223f97 !important;
            font-weight: bold;
            border-radius: 5px;
            outline: none !important;
        }

        @media screen and (max-width:991px) {
            .subscribe .sub-btn-2 {
                top: -38px;
                left: 162px;
            }
        }

        @media screen and (max-width:768px) {
            .subscribe .sub-btn-2 {
                top: -38px;
                left: 162px;
            }
        }

        @media screen and (max-width:599px) {
            .subscribe .modal-content {
                width: 100% !important;
            }

            .subscribe .sub-btn-2 {
                top: -38px;
                left: 170px;
            }
        }

        .subscribe .modal-content {
            background: none;
            margin: 0 auto;
            padding: 20px;
            border: none;
            width: 80%;
        }

        .subscribe .sub-close {
            border: none;
            font-size: 22px;
            background: #000;
            color: #fff;
            font-weight: bold;
            outline: none !important;
            text-align: right;
            padding: 0px 10px;
            border-radius: 20px;
        }

        .subscribe .modal-header {
            display: flex;
            justify-content: center;
        }

        .subscribe .modal-title {
            color: #223f97;
            font-weight: bold;
            font-size: 25px;
        }

        .subscribe .modal-body p {
            color: #000;
            font-size: 18px;
            line-height: 1.5rem;
            text-align: center;
        }

        #thanks-msg .modal-body p {
            color: #000;
            font-size: 18px;
            line-height: 1.5rem;
            text-align: center;
            padding: 10px 0;
        }

        .subscribe label {
            display: flex;
            margin-bottom: 10px;
        }

        .subscribe input {
            width: 100%;
            background-color: #fff;
            border: 1px solid #0000002e;
            border-radius: 10px;
            outline: none;
            padding: 8px 10px;
            margin-bottom: 10px;
            text-align: left;
        }

        .subscribe .check-box {
            width: 5% !important;
        }

        .subscribe .sub_mit {
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

        .subscribe .modal-dialog {
            margin-top: 0%;
        }

        .subscribe .okay-btn {
            justify-content: center;
        }

        .subscribe .close-btn {
            border: none;
            outline: none !important;
            background-color: #223f97;
            color: #fff;
            padding: 6px 20px;
            border-radius: 10px;
            font-size: 20px;
        }

        .subscribe .times-btn {
            text-align: right;
        }
    </style>
</head>
<!-- main starts here -->
<div class="about-banner">
    <div class="about-banner-blk">
        <img src="images/blogs-banner.jpg" alt="blogs-banner" width="1920" height="210">
        <h1>Blogs</h1>

        <!-- popup -->
        <div class="container subscribe">
            <button type="button" class="sub-btn-2" data-toggle="modal" data-target="#subscribe2">Subscribe</button>
            <div class="modal fade" id="subscribe2" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="times-btn"><button type="button" class="sub-close" data-g-dismiss="modal">&times;</button></div>
                        <div class="modal-header">
                            <h4 class="modal-title">Subscribe</h4>
                        </div>
                        <div class="modal-body" id="form-sub">
                            <form onsubmit="handleSubmit()">
                                <label for="name">First Name:</label>
                                <input type="text" id="fname" name="Firstname" required><br>


                                <label for="number">Last Name:</label>
                                <input type="text" id="lname" name="Lastname" required><br>


                                <label for="email">Email:</label>
                                <input type="email" id="email" name="Email" required><br>

                                <label for="checkbox"><input type="checkbox" required name="checkbox" class="check-box">I Agree with The <a href="terms-conditions.php" target="_blank" style="color: #CB4721;"> &nbsp;Terms and Conditions</a></label><br>

                                <input class="sub_mit submit-detials" type="submit" value="Submit">
                            </form>
                        </div>
                        <script defer>
                            const handleSubmit = () => {
                                event.preventDefault();
                                localStorage.setItem('subscribedFormSubmited', true);
                                $('#subscribe2').hide();
                                $('#thanks-msg').show();
                            }
                        </script>
                        <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- popup Ends-->

        <!-- Thank you popup -->
        <div class="container subscribe">
            <div class="modal fade" id="thanks-msg" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="times-btn"><button type="button" class="sub-close" data-dismiss="modal">&times;</button></div>
                        <div class="modal-body">
                            <p>Thank you for joining our community of forward-thinkers! Get ready to explore a future of knowledge and innovation with our upcoming content.
                                Welcome aboard!</p>
                        </div>
                        <div class="modal-footer okay-btn">
                            <button type="button" class="close-btn" data-dismiss="modal">Okay</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Thank you popup Ends-->

    </div>
</div>
<!--board-of-directors starts here -->
<div class="case-block">
    <div class="container">
        <div class="case-block-main greenshape">
            <ul class="row">

                <!-- new blog -->
                <li class="col-md-4">
                    <div class="case-content">
                        <figure>
                            <img src="dashboard/uploads/people-centric.png" alt="blog-img-1" width="450" height="248">
                        </figure>
                        <h4>Celebrating Nine Years of Transforming India's Tech Landscape </h4>
                        <p></p>
                        <p><strong>At Pi Datacenters, we recently commemorated a significant milestone - nine years of unwavering commitment to revolutionizing the world of Cloud Computing and Data Infrastructure Solutions in India.</strong></p>
                        <p></p>
                        <a href="people-centric-approach.php" class="read-more">Read More</a>
                    </div>
                </li>

                <li class="col-md-4">
                    <div class="case-content">
                        <figure>
                            <img src="dashboard/uploads/data-protection-bill.png" alt="blog-img-1" width="450" height="248">
                        </figure>
                        <h4>Digital Personal Data Protection (DPDP) Bill </h4>
                        <p></p>
                        <p><strong>The Digital Personal Data Protection (DPDP) Bill marks a significant milestone in India's journey toward establishing comprehensive data privacy and protection regulations. As the country's first law specifically dedicated to data privacy, the DPDP Bill aims to safeguard personal data and enhance the rights of individuals.</strong></p>
                        <p></p>
                        <a href="digital-personal-data-protection-bill.php" class="read-more">Read More</a>
                    </div>
                </li>


                <li class="col-md-4">
                    <div class="case-content">
                        <figure>
                            <img src="dashboard/uploads/Parnership-with-oracle.png" alt="blog-img-1" width="450" height="248">
                        </figure>
                        <!--<span class="date">23 Apr, 2022</span>-->
                        <h4>Transforming Business Dynamics: The Pi-Oracle Strategic Partnership </h4>
                        <!--<p>It&#8217;s been seven years since I took that supposedly, out of mind call, one fine afternoon of early March 2015. Sitting at the cafÃ© of a global conglomerate at DLF Gurgaon, I picked that call from a head-hunter and after</p>-->
                        <p></p>
                        <p>In the dynamic landscape of cloud computing and data management, the partnership between Pi Datacenters and Oracle emerges as a paradigm of innovation and reliability.</p>
                        <p></p>
                        <a href="Pi-oracle-strategic-partnership.php" class="read-more">Read More</a>
                        <!--<span class="edit">Posted by Admin in Cloud Managed Services, Data Center</span>-->
                        <!--<p><small>Share</small> 0 comment</p>-->
                    </div>
                </li>



                <li class="col-md-4">
                    <div class="case-content">
                        <figure>
                            <img src="dashboard/uploads/banner-data.png" alt="blog-img-1" width="450" height="248">
                        </figure>
                        <!--<span class="date">23 Apr, 2022</span>-->
                        <h4>Finding the Ideal Data Center: The Reliability &amp; Scalability Aspects</h4>
                        <!--<p>It&#8217;s been seven years since I took that supposedly, out of mind call, one fine afternoon of early March 2015. Sitting at the cafÃ© of a global conglomerate at DLF Gurgaon, I picked that call from a head-hunter and after</p>-->
                        <p></p>
                        <p>The importance of Data Centers continues to increase as more businesses and individuals rely on them for data storage, processing, and access.</p>
                        <p></p>
                        <a href="data-center-reliability-and-scalability.php" class="read-more">Read More</a>
                        <!--<span class="edit">Posted by Admin in Cloud Managed Services, Data Center</span>-->
                        <!--<p><small>Share</small> 0 comment</p>-->
                    </div>
                </li>

                <li class="col-md-4">
                    <div class="case-content">
                        <figure>
                            <img src="dashboard/uploads/9764Economy needs inclusive growth from rural-India.png" alt="blog-img-1" width="450" height="248">
                        </figure>
                        <!--<span class="date">23 Apr, 2022</span>-->
                        <h4>$5T Economy Needs Inclusive Growth from Rural-India</h4>
                        <!--<p>It&#8217;s been seven years since I took that supposedly, out of mind call, one fine afternoon of early March 2015. Sitting at the cafÃ© of a global conglomerate at DLF Gurgaon, I picked that call from a head-hunter and after</p>-->
                        <p></p>
                        <p><strong id="docs-internal-guid-a617d0e5-7fff-4857-9c5a-b4f39d644281">&#8216;India lives in its villages&#8217;, stated the father of the nation decades ago which still holds true. The Indian economy has been on a growth trajectory over the last couple of decades. Prime Minister Narendra Modi&#8217;s vision of making India</strong></p>
                        <p></p>
                        <a href="growth-from-rural-India.php" class="read-more">Read More</a>
                        <!--<span class="edit">Posted by Admin in Cloud Managed Services, Data Center</span>-->
                        <!--<p><small>Share</small> 0 comment</p>-->
                    </div>
                </li>

                <li class="col-md-4">
                    <div class="case-content">
                        <figure>
                            <img src="dashboard/uploads/2494Leadership is earned.png" alt="blog-img-1" width="450" height="248">
                        </figure>
                        <!--<span class="date">23 Apr, 2022</span>-->
                        <h4>Leadership is Earned. It&#8217;s Neither a Promotion Nor a Pay Raise !</h4>
                        <!--<p>It&#8217;s been seven years since I took that supposedly, out of mind call, one fine afternoon of early March 2015. Sitting at the cafÃ© of a global conglomerate at DLF Gurgaon, I picked that call from a head-hunter and after</p>-->
                        <p></p>
                        <p>&#8216;A leader is one who knows the way, goes the way and shows the way.&#8217; The essence of good leadership lies in these golden words by John C. Maxwell. A leader is also someone who helps you find a way even if he doesn&#8217;t know the way.</p>
                        <p></p>
                        <a href="leadership-is-earned.php" class="read-more">Read More</a>
                        <!--<span class="edit">Posted by Admin in Cloud Managed Services, Data Center</span>-->
                        <!--<p><small>Share</small> 0 comment</p>-->
                    </div>
                </li>

                <li class="col-md-4">
                    <div class="case-content">
                        <figure>
                            <img src="dashboard/uploads/4402The world before &amp; after covid.png" alt="blog-img-1" width="450" height="248">
                        </figure>
                        <!--<span class="date">23 Apr, 2022</span>-->
                        <h4>The World Before and After COVID</h4>
                        <!--<p>It&#8217;s been seven years since I took that supposedly, out of mind call, one fine afternoon of early March 2015. Sitting at the cafÃ© of a global conglomerate at DLF Gurgaon, I picked that call from a head-hunter and after</p>-->
                        <p></p>
                        <p>Our global home has witnessed innumerable historical milestones across the ages, spanning political upheavals and wars to epidemics and pandemics. From the oldest recorded Typhoid Epidemic in 430 BC Athens</p>
                        <p></p>
                        <a href="world-and-COVID.php" class="read-more">Read More</a>
                        <!--<span class="edit">Posted by Admin in Cloud Managed Services, Data Center</span>-->
                        <!--<p><small>Share</small> 0 comment</p>-->
                    </div>
                </li>

                <li class="col-md-4">
                    <div class="case-content">
                        <figure>
                            <img src="dashboard/uploads/1821Deb-Sir-blog-creative.png" alt="blog-img-1" width="450" height="248">
                        </figure>
                        <!--<span class="date">23 Apr, 2022</span>-->
                        <h4>How Did I Beat the 7 Years&#8217; Itch @ Work?</h4>
                        <!--<p>It&#8217;s been seven years since I took that supposedly, out of mind call, one fine afternoon of early March 2015. Sitting at the cafÃ© of a global conglomerate at DLF Gurgaon, I picked that call from a head-hunter and after</p>-->
                        <p></p>
                        <p><strong id="docs-internal-guid-2909ddca-7fff-3698-8c55-e3d2278631b0">It&#8217;s been seven years since I took that supposedly, out of mind call, one fine afternoon of early March 2015. Sitting at the caf© of a global conglomerate at DLF Gurgaon, I picked that call from a head-hunter and afte</strong></p>
                        <p></p>
                        <a href="the-seven-years-itch.php" class="read-more">Read More</a>
                        <!--<span class="edit">Posted by Admin in Cloud Managed Services, Data Center</span>-->
                        <!--<p><small>Share</small> 0 comment</p>-->
                    </div>
                </li>

                <li class="col-md-4">
                    <div class="case-content">
                        <figure>
                            <img src="dashboard/uploads/2697blog-creative-1080x582-1.png" alt="blog-img-1" width="450" height="248">
                        </figure>
                        <!--<span class="date">23 Apr, 2022</span>-->
                        <h4>Metaverse Influx Into Data Center Innovation</h4>
                        <!--<p>It&#8217;s been seven years since I took that supposedly, out of mind call, one fine afternoon of early March 2015. Sitting at the cafÃ© of a global conglomerate at DLF Gurgaon, I picked that call from a head-hunter and after</p>-->
                        <p></p>
                        <p><strong id="docs-internal-guid-16a938fd-7fff-72db-2864-56143bb2ed92">Let&#8217;s talk about &#8216;Metaverses&#8217; First, let&#8217;s get a common misconception out of the way. There isn&#8217;t just one &#8216;Metaverse&#8217;. Let me elaborate. Metaverse&#8217; as a term was coined by author Neal Stephenson in his science-fiction novel &#8216;Snow Crash&#8217;, back in</strong></p>
                        <p></p>
                        <a href="metaverse-into-data-center-innovation.php" class="read-more">Read More</a>
                        <!--<span class="edit">Posted by Admin in Cloud Managed Services, Data Center</span>-->
                        <!--<p><small>Share</small> 0 comment</p>-->
                    </div>
                </li>

                <li class="col-md-4">
                    <div class="case-content">
                        <figure>
                            <img src="dashboard/uploads/6750pi-blog.jpeg" alt="blog-img-1" width="450" height="248">
                        </figure>
                        <!--<span class="date">23 Apr, 2022</span>-->
                        <h4>Pi Data Centers Launches One Platform Container Services &#8216;K8SaaS&#8217; On Cloud</h4>
                        <!--<p>It&#8217;s been seven years since I took that supposedly, out of mind call, one fine afternoon of early March 2015. Sitting at the cafÃ© of a global conglomerate at DLF Gurgaon, I picked that call from a head-hunter and after</p>-->
                        <p></p>
                        <p><strong id="docs-internal-guid-b052dcc4-7fff-524e-c108-96d96c372699">One Platform Container Services &#8216;K8SaaS&#8217; On Cloud</strong></p>
                        <p></p>
                        <a href="platform-container-services.php" class="read-more">Read More</a>
                        <!--<span class="edit">Posted by Admin in Cloud Managed Services, Data Center</span>-->
                        <!--<p><small>Share</small> 0 comment</p>-->
                    </div>
                </li>

                <li class="col-md-4">
                    <div class="case-content">
                        <figure>
                            <img src="dashboard/uploads/2710kiran.jpg" alt="blog-img-1" width="450" height="248">
                        </figure>
                        <!--<span class="date">23 Apr, 2022</span>-->
                        <h4>Coal, Carriers, Chips &amp; The Crisis</h4>
                        <!--<p>It&#8217;s been seven years since I took that supposedly, out of mind call, one fine afternoon of early March 2015. Sitting at the cafÃ© of a global conglomerate at DLF Gurgaon, I picked that call from a head-hunter and after</p>-->
                        <p></p>
                        <p><strong id="docs-internal-guid-ac16cfe1-7fff-41ff-39cd-d0bac3e2a4b4">The economic turmoil caused by the COVID has significantly disrupted the ecosystem on the whole. The post-pandemic situation in India and other countries has been an eye opener on the significance of having a stable supply chain. I have chosen</strong></p>
                        <p></p>
                        <a href="coal-carriers-chips-and-the-crisis.php" class="read-more">Read More</a>
                        <!--<span class="edit">Posted by Admin in Cloud Managed Services, Data Center</span>-->
                        <!--<p><small>Share</small> 0 comment</p>-->
                    </div>
                </li>

                <li class="col-md-4">
                    <div class="case-content">
                        <figure>
                            <img src="dashboard/uploads/4606foot-i.jpg" alt="blog-img-1" width="450" height="248">
                        </figure>
                        <!--<span class="date">23 Apr, 2022</span>-->
                        <h4>Why Colocation is the Key to Reducing your Carbon Footprint</h4>
                        <!--<p>It&#8217;s been seven years since I took that supposedly, out of mind call, one fine afternoon of early March 2015. Sitting at the cafÃ© of a global conglomerate at DLF Gurgaon, I picked that call from a head-hunter and after</p>-->
                        <p></p>
                        <p><strong id="docs-internal-guid-2455d798-7fff-e787-7d2f-b42ffac548f6">Climate change has been a cause for concern over the last decade. This in turn, has given organisations and consumers alike ample reason to be able to demonstrate their potential for sustenance. Sustainability automatically gets you to veer towards reducing</strong></p>
                        <p></p>
                        <a href="colocation-to-reducing-carbon-footprint.php" class="read-more">Read More</a>
                        <!--<span class="edit">Posted by Admin in Cloud Managed Services, Data Center</span>-->
                        <!--<p><small>Share</small> 0 comment</p>-->
                    </div>
                </li>

                <li class="col-md-4">
                    <div class="case-content">
                        <figure>
                            <img src="dashboard/uploads/48creative-1-1.png" alt="blog-img-1" width="450" height="248">
                        </figure>
                        <!--<span class="date">23 Apr, 2022</span>-->
                        <h4>Data Migration Challenges and Methods To Overcome Them</h4>
                        <!--<p>It&#8217;s been seven years since I took that supposedly, out of mind call, one fine afternoon of early March 2015. Sitting at the cafÃ© of a global conglomerate at DLF Gurgaon, I picked that call from a head-hunter and after</p>-->
                        <p></p>
                        <p><strong id="docs-internal-guid-7a0153d3-7fff-3cea-02ed-c9b19d6f39d9">Cloud technology offers diverse advantages to businesses to maintain the competitive streak. Management cost reduction, scaling of technology, achieving efficiency peaks and maintaining low cost of operations are a few advantages to count on. Business journalists indicate that data migration</strong></p>
                        <p></p>
                        <a href="data-migration-methods.php" class="read-more">Read More</a>
                        <!--<span class="edit">Posted by Admin in Cloud Managed Services, Data Center</span>-->
                        <!--<p><small>Share</small> 0 comment</p>-->
                    </div>
                </li>

                <li class="col-md-4">
                    <div class="case-content">
                        <figure>
                            <img src="dashboard/uploads/9435ceo-blog.png" alt="blog-img-1" width="450" height="248">
                        </figure>
                        <!--<span class="date">23 Apr, 2022</span>-->
                        <h4>Artificial Intelligence In Data Centers - The Way Forward</h4>
                        <!--<p>It&#8217;s been seven years since I took that supposedly, out of mind call, one fine afternoon of early March 2015. Sitting at the cafÃ© of a global conglomerate at DLF Gurgaon, I picked that call from a head-hunter and after</p>-->
                        <p></p>
                        <p><strong id="docs-internal-guid-72c0243a-7fff-e5b6-ef2e-d2cfd3fa5fbc">Data centers have emerged as the lifeline for organizations when the 90s heralded a massive technology boom, spanning micro to macro businesses, across the globe. With the advent of technology-oriented businesses, came multi-layered data dependency. As new organizations demanded market space</strong></p>
                        <p></p>
                        <a href="artificial-intelligence-in-data-centers.php" class="read-more">Read More</a>
                        <!--<span class="edit">Posted by Admin in Cloud Managed Services, Data Center</span>-->
                        <!--<p><small>Share</small> 0 comment</p>-->
                    </div>
                </li>

                <li class="col-md-4">
                    <div class="case-content">
                        <figure>
                            <img src="dashboard/uploads/8111A1_1515-x-855.png" alt="blog-img-1" width="450" height="248">
                        </figure>
                        <!--<span class="date">23 Apr, 2022</span>-->
                        <h4>What&#8217;s the Fuss (WTF), About this New WhatsApp Privacy Policy!!</h4>
                        <!--<p>It&#8217;s been seven years since I took that supposedly, out of mind call, one fine afternoon of early March 2015. Sitting at the cafÃ© of a global conglomerate at DLF Gurgaon, I picked that call from a head-hunter and after</p>-->
                        <p></p>
                        <p><strong id="docs-internal-guid-d9798011-7fff-6028-c0c6-dcf4c41944c4">Ok, so as we were moving closer to settling the score with COVID (hopefully the vaccine thing would work), I was thinking, what&#8217;snext getting the world&#8217;s attention &#8217;¦ And BOOMMM!! We have WhatsApp and its data privacy fuss that gripped</strong></p>
                        <p></p>
                        <a href="whatsApp-privacy-policy.php" class="read-more">Read More</a>
                        <!--<span class="edit">Posted by Admin in Cloud Managed Services, Data Center</span>-->
                        <!--<p><small>Share</small> 0 comment</p>-->
                    </div>
                </li>

                <li class="col-md-4">
                    <div class="case-content">
                        <figure>
                            <img src="dashboard/uploads/1927kalyan-blog-1-pic.png" alt="blog-img-1" width="450" height="248">
                        </figure>
                        <!--<span class="date">23 Apr, 2022</span>-->
                        <h4>India&#8217;s Data Center Infrastructure &#8216;The Key for Post COVID-19 Economic Era</h4>
                        <!--<p>It&#8217;s been seven years since I took that supposedly, out of mind call, one fine afternoon of early March 2015. Sitting at the cafÃ© of a global conglomerate at DLF Gurgaon, I picked that call from a head-hunter and after</p>-->
                        <p></p>
                        <p><strong id="docs-internal-guid-40e89254-7fff-c3b0-475b-7f4ca3703769">COVID-19 has definitely set in motion an unprecedented and extraordinary play of events in every sphere that involves humankind. Be it education, healthcare, technology, banking, entertainment, travel &amp; tourism or even something as ordinary as household shopping. These and other</strong></p>
                        <p></p>
                        <a href="data-center-infrastructure-post-COVID-19.php" class="read-more">Read More</a>
                        <!--<span class="edit">Posted by Admin in Cloud Managed Services, Data Center</span>-->
                        <!--<p><small>Share</small> 0 comment</p>-->
                    </div>
                </li>

                <li class="col-md-4">
                    <div class="case-content">
                        <figure>
                            <img src="dashboard/uploads/1945B1_Blog.png" alt="blog-img-1" width="450" height="248">
                        </figure>
                        <!--<span class="date">23 Apr, 2022</span>-->
                        <h4>India&#8217;s Data is its National Treasure that Needs Strict Data-Localization</h4>
                        <!--<p>It&#8217;s been seven years since I took that supposedly, out of mind call, one fine afternoon of early March 2015. Sitting at the cafÃ© of a global conglomerate at DLF Gurgaon, I picked that call from a head-hunter and after</p>-->
                        <p></p>
                        <p><strong id="docs-internal-guid-01b3fd7d-7fff-2cb6-a038-c1b8cbb02a3e">In February 2019, FireEye &#8216; a US cybersecurity firm &#8217; &#8216; zeroed in on a hacker tagged only as &#8216;fallensky519&#8217; who was on the Most Wanted List for stealing personal data of 6.8 million users from an Indian healthcare website.</strong></p>
                        <p></p>
                        <a href="data-localization.php" class="read-more">Read More</a>
                        <!--<span class="edit">Posted by Admin in Cloud Managed Services, Data Center</span>-->
                        <!--<p><small>Share</small> 0 comment</p>-->
                    </div>
                </li>

                <li class="col-md-4">
                    <div class="case-content">
                        <figure>
                            <img src="dashboard/uploads/8225PRO (6).jpg" alt="blog-img-1" width="450" height="248">
                        </figure>
                        <!--<span class="date">23 Apr, 2022</span>-->
                        <h4>Edge Data Centers to Spark off The Smart City Boom</h4>
                        <!--<p>It&#8217;s been seven years since I took that supposedly, out of mind call, one fine afternoon of early March 2015. Sitting at the cafÃ© of a global conglomerate at DLF Gurgaon, I picked that call from a head-hunter and after</p>-->
                        <p></p>
                        <p><strong id="docs-internal-guid-b60ebc0e-7fff-7e01-c273-c3890d462bb7">&#8216;Smart Cities&#8217; is one of the most popular and emerging use cases of data centers, especially in India. There are more than 100 &#8216;Smart City&#8217; projects being already announced and more than 500 &#8216;Amrut Town&#8217; projects are being planned in</strong></p>
                        <p></p>
                        <a href="edge-data-centers.php" class="read-more">Read More</a>
                        <!--<span class="edit">Posted by Admin in Cloud Managed Services, Data Center</span>-->
                        <!--<p><small>Share</small> 0 comment</p>-->
                    </div>
                </li>

                <li class="col-md-4">
                    <div class="case-content">
                        <figure>
                            <img src="dashboard/uploads/2051PRO (4).jpg" alt="blog-img-1" width="450" height="248">
                        </figure>
                        <!--<span class="date">23 Apr, 2022</span>-->
                        <h4>Decentralization of India&#8217;s Infrastructure</h4>
                        <!--<p>It&#8217;s been seven years since I took that supposedly, out of mind call, one fine afternoon of early March 2015. Sitting at the cafÃ© of a global conglomerate at DLF Gurgaon, I picked that call from a head-hunter and after</p>-->
                        <p></p>
                        <p><strong id="docs-internal-guid-f1d10dcb-7fff-ad99-1516-4d815f7a1692">The early 2000&#8217;s saw a trend of rapid industrialization on Indian soil. Software, Information Technology, E-Commerce, Banking, Pharmaceuticals, Manufacturing, Trade, and several other types of domains, received a boost that had never been witnessed before.&nbsp;</strong></p>
                        <p></p>
                        <a href="decentralization-of-infrastructure.php" class="read-more">Read More</a>
                        <!--<span class="edit">Posted by Admin in Cloud Managed Services, Data Center</span>-->
                        <!--<p><small>Share</small> 0 comment</p>-->
                    </div>
                </li>

                <li class="col-md-4">
                    <div class="case-content">
                        <figure>
                            <img src="dashboard/uploads/8168PRO (3).jpg" alt="blog-img-1" width="450" height="248">
                        </figure>
                        <!--<span class="date">23 Apr, 2022</span>-->
                        <h4>Top 10 Trends in Digital India 2019 &#8217; “ By Kalyan Muppaneni, Founder &amp; CEO, Pi</h4>
                        <!--<p>It&#8217;s been seven years since I took that supposedly, out of mind call, one fine afternoon of early March 2015. Sitting at the cafÃ© of a global conglomerate at DLF Gurgaon, I picked that call from a head-hunter and after</p>-->
                        <p></p>
                        <p><strong id="docs-internal-guid-51524d97-7fff-34c1-7a32-5e2379798beb">2019 is going to see a significant leap in the current digital India trends. Some of the technologies are already going mainstream. These life-enhancing smarter technologies will further boost our productivity and enhance our daily living conditions.&nbsp;</strong></p>
                        <p></p>
                        <a href="trends-in-digital-India.php" class="read-more">Read More</a>
                        <!--<span class="edit">Posted by Admin in Cloud Managed Services, Data Center</span>-->
                        <!--<p><small>Share</small> 0 comment</p>-->
                    </div>
                </li>

                <li class="col-md-4">
                    <div class="case-content">
                        <figure>
                            <img src="dashboard/uploads/5452PRO (2).jpg" alt="blog-img-1" width="450" height="248">
                        </figure>
                        <!--<span class="date">23 Apr, 2022</span>-->
                        <h4>12 Reasons Why Enterprises Should Adopt Cloud</h4>
                        <!--<p>It&#8217;s been seven years since I took that supposedly, out of mind call, one fine afternoon of early March 2015. Sitting at the cafÃ© of a global conglomerate at DLF Gurgaon, I picked that call from a head-hunter and after</p>-->
                        <p></p>
                        <p><strong id="docs-internal-guid-e1e51040-7fff-5fd1-f8e5-fede4c416e03">Having spent the last couple of months with experts in the industry and talking to many customers, I thought I will make a humble attempt to put together a few points on why enterprises should adopt cloud on a robust</strong></p>
                        <p></p>
                        <a href="why-enterprises-should-adopt-cloud.php" class="read-more">Read More</a>
                        <!--<span class="edit">Posted by Admin in Cloud Managed Services, Data Center</span>-->
                        <!--<p><small>Share</small> 0 comment</p>-->
                    </div>
                </li>

                <li class="col-md-4">
                    <div class="case-content">
                        <figure>
                            <img src="dashboard/uploads/6180PRO (1).jpg" alt="blog-img-1" width="450" height="248">
                        </figure>
                        <!--<span class="date">23 Apr, 2022</span>-->
                        <h4>With Pi You Don&#8217;t WannaCry</h4>
                        <!--<p>It&#8217;s been seven years since I took that supposedly, out of mind call, one fine afternoon of early March 2015. Sitting at the cafÃ© of a global conglomerate at DLF Gurgaon, I picked that call from a head-hunter and after</p>-->
                        <p></p>
                        <p><strong id="docs-internal-guid-04d0aa5e-7fff-4383-8f1b-1f635588e278">The &#8216;WannaCry&#8217; ransomware attack &#8217;“ one of the largest ever cyber attacks brought computer systems across the globe to their knees, locking people out of their data and demanding that they pay a ransom or lose everything. More than 200,000</strong></p>
                        <p></p>
                        <a href="wannacry-ransomware.php" class="read-more">Read More</a>
                        <!--<span class="edit">Posted by Admin in Cloud Managed Services, Data Center</span>-->
                        <!--<p><small>Share</small> 0 comment</p>-->
                    </div>
                </li>

                <li class="col-md-4">
                    <div class="case-content">
                        <figure>
                            <img src="dashboard/uploads/468PRO.jpg" alt="blog-img-1" width="450" height="248">
                        </figure>
                        <!--<span class="date">23 Apr, 2022</span>-->
                        <h4>How to Kickback Procrastination?</h4>
                        <!--<p>It&#8217;s been seven years since I took that supposedly, out of mind call, one fine afternoon of early March 2015. Sitting at the cafÃ© of a global conglomerate at DLF Gurgaon, I picked that call from a head-hunter and after</p>-->
                        <p></p>
                        <p><strong id="docs-internal-guid-e864fb98-7fff-624e-912d-ac7a72e8d3e4">Being lazy is good, exciting and interesting. It is the best feeling always. Be lazy, be happy, stay in comfort. The word is procrastination, coined around 1588 A.D, but being widely used in 20th century. It is the after effects</strong></p>
                        <p></p>
                        <a href="kickback-procrastination.php" class="read-more">Read More</a>
                        <!--<span class="edit">Posted by Admin in Cloud Managed Services, Data Center</span>-->
                        <!--<p><small>Share</small> 0 comment</p>-->
                    </div>
                </li>

                <li class="col-md-4">
                    <div class="case-content">
                        <figure>
                            <img src="dashboard/uploads/9644810X450PX.jpg" alt="blog-img-1" width="450" height="248">
                        </figure>
                        <!--<span class="date">23 Apr, 2022</span>-->
                        <h4>Unknown Water - My Experience</h4>
                        <!--<p>It&#8217;s been seven years since I took that supposedly, out of mind call, one fine afternoon of early March 2015. Sitting at the cafÃ© of a global conglomerate at DLF Gurgaon, I picked that call from a head-hunter and after</p>-->
                        <p></p>
                        <p>First let me categorically state that this is my first honest attempt at blogging. Guess there are always certain things which are new and so is my experience that I want to share with you all. I think it was</p>
                        <p></p>
                        <a href="experience.php" class="read-more">Read More</a>
                        <!--<span class="edit">Posted by Admin in Cloud Managed Services, Data Center</span>-->
                        <!--<p><small>Share</small> 0 comment</p>-->
                    </div>
                </li>

                <li class="col-md-4">
                    <div class="case-content">
                        <figure>
                            <img src="dashboard/uploads/8853the-art-of.png" alt="blog-img-1" width="450" height="248">
                        </figure>
                        <!--<span class="date">23 Apr, 2022</span>-->
                        <h4>Starting a day unplanned? Not the right thing to do!!</h4>
                        <!--<p>It&#8217;s been seven years since I took that supposedly, out of mind call, one fine afternoon of early March 2015. Sitting at the cafÃ© of a global conglomerate at DLF Gurgaon, I picked that call from a head-hunter and after</p>-->
                        <p></p>
                        <p><strong id="docs-internal-guid-eb45c09b-7fff-fb90-e6cd-c1f1366d5489">&#8216;Failing to plan can be planning to fail&#8217; We should device a habit of planning the day in advance. This lets us know the top agenda tasks for the day before we start. To operate on memory is not advisable</strong></p>
                        <p></p>
                        <a href="starting-a-day-unplanned.php" class="read-more">Read More</a>
                        <!--<span class="edit">Posted by Admin in Cloud Managed Services, Data Center</span>-->
                        <!--<p><small>Share</small> 0 comment</p>-->
                    </div>
                </li>

                <li class="col-md-4">
                    <div class="case-content">
                        <figure>
                            <img src="dashboard/uploads/2SNOW-Spring-OPEN-TRAILS-992F200-OPEN-LIFTS-132F37-SNOW-DEPTH-198cm-BASE-198cm-SUMMIT.png" alt="blog-img-1" width="450" height="248">
                        </figure>
                        <!--<span class="date">23 Apr, 2022</span>-->
                        <h4>Demystifying Goods &amp; Services Tax (GST)</h4>
                        <!--<p>It&#8217;s been seven years since I took that supposedly, out of mind call, one fine afternoon of early March 2015. Sitting at the cafÃ© of a global conglomerate at DLF Gurgaon, I picked that call from a head-hunter and after</p>-->
                        <p></p>
                        <p><strong id="docs-internal-guid-cd050eeb-7fff-3987-0794-a11c7d7b4a06">Goods and Services Tax (GST) is the latest buzz in Indian commerce today. To explain simply, Goods and Services Tax (GST) is a comprehensive tax levied on manufacture, sale and consumption of goods and services at a national level. Through</strong></p>
                        <p></p>
                        <a href="demystifying-GST.php" class="read-more">Read More</a>
                        <!--<span class="edit">Posted by Admin in Cloud Managed Services, Data Center</span>-->
                        <!--<p><small>Share</small> 0 comment</p>-->
                    </div>
                </li>

                <li class="col-md-4">
                    <div class="case-content">
                        <figure>
                            <img src="dashboard/uploads/1232Stockholm.png" alt="blog-img-1" width="450" height="248">
                        </figure>
                        <!--<span class="date">23 Apr, 2022</span>-->
                        <h4> Transformational Leadership at your Workplace</h4>
                        <!--<p>It&#8217;s been seven years since I took that supposedly, out of mind call, one fine afternoon of early March 2015. Sitting at the cafÃ© of a global conglomerate at DLF Gurgaon, I picked that call from a head-hunter and after</p>-->
                        <p></p>
                        <p><strong id="docs-internal-guid-13b7f422-7fff-ffb7-8291-e2ec9707b739">Transformational leadership is an efficient and effective hand holding that enables the team to undergo a transformation and inspires them to explore the uncharted waters. Transformational leaders inspire great fidelity and confidence in their followers. When to use the transformational</strong></p>
                        <p></p>
                        <a href="transformational-leadership.php" class="read-more">Read More</a>
                        <!--<span class="edit">Posted by Admin in Cloud Managed Services, Data Center</span>-->
                        <!--<p><small>Share</small> 0 comment</p>-->
                    </div>
                </li>

                <li class="col-md-4">
                    <div class="case-content">
                        <figure>
                            <img src="https://pidatacenters.com/dashboard/uploads/2740Let%E2%80%99s-Break-The-Myths-Of-Cloud-Security-250x139.png" alt="blog-img-1" width="450" height="248">
                        </figure>
                        <!--<span class="date">23 Apr, 2022</span>-->
                        <h4>Let&#8217;s Break The Myths Of Cloud Security</h4>
                        <!--<p>It&#8217;s been seven years since I took that supposedly, out of mind call, one fine afternoon of early March 2015. Sitting at the cafÃ© of a global conglomerate at DLF Gurgaon, I picked that call from a head-hunter and after</p>-->
                        <p></p>
                        <p><strong id="docs-internal-guid-1a3b16df-7fff-3059-be3e-79e79a7dcd25">Cloud computing provides the best solution to a number of long-standing challenges like scalability, true elasticity, barriers to entry, technology refreshes and cost savings. Along with the numerous benefits cloud offers, it also brings in some challenges in adoption to</strong></p>
                        <p></p>
                        <a href="myths-of-cloud-security.php" class="read-more">Read More</a>
                        <!--<span class="edit">Posted by Admin in Cloud Managed Services, Data Center</span>-->
                        <!--<p><small>Share</small> 0 comment</p>-->
                    </div>
                </li>

                <li class="col-md-4">
                    <div class="case-content">
                        <figure>
                            <img src="dashboard/uploads/853ALE-HOUSE.png" alt="blog-img-1" width="450" height="248">
                        </figure>
                        <!--<span class="date">23 Apr, 2022</span>-->
                        <h4>Essentials Factors in Building an Agile Data Center</h4>
                        <!--<p>It&#8217;s been seven years since I took that supposedly, out of mind call, one fine afternoon of early March 2015. Sitting at the cafÃ© of a global conglomerate at DLF Gurgaon, I picked that call from a head-hunter and after</p>-->
                        <p></p>
                        <p><strong id="docs-internal-guid-12b0687b-7fff-3330-4273-e400f192a256">If we look at the scenario of data centers, nearly 75% of all the workloads of DC are Virtualized and this would further increase without any doubt. The major challenge IT admins generally face is that conventional storage is not</strong></p>
                        <p></p>
                        <a href="building-an-agile-data-center.php" class="read-more">Read More</a>
                        <!--<span class="edit">Posted by Admin in Cloud Managed Services, Data Center</span>-->
                        <!--<p><small>Share</small> 0 comment</p>-->
                    </div>
                </li>

                <li class="col-md-4">
                    <div class="case-content">
                        <figure>
                            <img src="dashboard/uploads/1947Industry-Adoption-to-Cloud-Platform-1.png" alt="blog-img-1" width="450" height="248">
                        </figure>
                        <!--<span class="date">23 Apr, 2022</span>-->
                        <h4>Industry Adoption to Cloud Platform - Trends &amp; Facts</h4>
                        <!--<p>It&#8217;s been seven years since I took that supposedly, out of mind call, one fine afternoon of early March 2015. Sitting at the cafÃ© of a global conglomerate at DLF Gurgaon, I picked that call from a head-hunter and after</p>-->
                        <p></p>
                        <p><strong id="docs-internal-guid-09e6d716-7fff-9e11-03ca-57caaf464204">Cloud Platform: Market intelligence today shows a constant rise in public cloud IaaS revenues at a 28.2% CAGR from 2015-2020, from $12.6 billion to $43.6 billion. The staggering hike in numbers owes to the fact that nearly 2/3 of</strong></p>
                        <p></p>
                        <a href="adoption-to-cloud-platform.php" class="read-more">Read More</a>
                        <!--<span class="edit">Posted by Admin in Cloud Managed Services, Data Center</span>-->
                        <!--<p><small>Share</small> 0 comment</p>-->
                    </div>
                </li>

                <li class="col-md-4">
                    <div class="case-content">
                        <figure>
                            <img src="dashboard/uploads/486Positive-Work-Environment-Boosts-the-Productivity.jpg" alt="blog-img-1" width="450" height="248">
                        </figure>
                        <!--<span class="date">23 Apr, 2022</span>-->
                        <h4>Positive-Work-Environment-Boosts-the-Productivity</h4>
                        <!--<p>It&#8217;s been seven years since I took that supposedly, out of mind call, one fine afternoon of early March 2015. Sitting at the cafÃ© of a global conglomerate at DLF Gurgaon, I picked that call from a head-hunter and after</p>-->
                        <p></p>
                        <p><strong id="docs-internal-guid-44b87a9a-7fff-308a-ac7e-5897d310c854">Positive Work Environment: Organizations today are goal driven entities. They strive to perform the best and make the most out of every thing with an end goal of making profits , which is made possible only with the contribution of</strong></p>
                        <p></p>
                        <a href="positive-work-environment.php" class="read-more">Read More</a>
                        <!--<span class="edit">Posted by Admin in Cloud Managed Services, Data Center</span>-->
                        <!--<p><small>Share</small> 0 comment</p>-->
                    </div>
                </li>

                <li class="col-md-4">
                    <div class="case-content">
                        <figure>
                            <img src="dashboard/uploads/2454blog-images.jpg" alt="blog-img-1" width="450" height="248">
                        </figure>
                        <!--<span class="date">23 Apr, 2022</span>-->
                        <h4>Managed Services: Created a Great Buzz in the IT Industry</h4>
                        <!--<p>It&#8217;s been seven years since I took that supposedly, out of mind call, one fine afternoon of early March 2015. Sitting at the cafÃ© of a global conglomerate at DLF Gurgaon, I picked that call from a head-hunter and after</p>-->
                        <p></p>
                        <p><strong id="docs-internal-guid-3a909168-7fff-85f0-b0d7-6b3b1cb909b3">Managed services have generated significant buzz in the IT industry over the last few years. In this business model, managed service providers (MSP) viz. systems integrators and solution providers take over all or part of a customer&#8217;s technologies and manage</strong></p>
                        <p></p>
                        <a href="managed-services-in-the-IT-industry.php" class="read-more">Read More</a>
                        <!--<span class="edit">Posted by Admin in Cloud Managed Services, Data Center</span>-->
                        <!--<p><small>Share</small> 0 comment</p>-->
                    </div>
                </li>
                <!--<li class="col-md-4">
                                 <div class="case-content">
                                <figure>
                                    <img src="images/blog-img-2.png" alt="blog-img-2" width="450" height="248">
                                </figure>
                                   <span class="date">09 Apr, 2022</span>
                                    <h4>Metaverse Influx Into Datacenter Innovation</h4>
                                    <p>Let&#8217;s talk about &#8217;˜Metaverses&#8217; First, let&#8217;s get a common misconception out of the way. There isn&#8217;t just one &#8217;˜Metaverse&#8217;. Let me elaborate. Metaverse&#8217; as a term was coined by author Neal Stephenson in his science-fiction novel &#8217;˜Snow Crash&#8217;, back in</p>
                                    <a href="#" class="read-more">Read More</a>
                                    <span class="edit">Posted by Admin in Cloud Managed Services, Data Center</span>
                                    <p><small>Share</small> 0 comment</p>
                                 </div>
                             </li>-->
                <!--<li class="col-md-4">
                                <div class="case-content">
                                <figure>
                                    <img src="images/blog-img-3.png" alt="blog-img-3" width="450" height="248">
                                </figure>
                                   <span class="date">29 Dec, 2021</span>
                                    <h4>Pi Datacenters Launches One Platform Container Services &#8217;˜K8SaaS&#8217; On Cloud</h4>
                                    <p>Pi Kubernetes Container as a Service is a cloud-based one platform framework that allows software developers and IT departments of any organisation to rapidly deploy Kubernetes clusters for building new applications and deploying them on heterogenous</p>
                                    <a href="#" class="read-more">Read More</a>
                                    <span class="edit">Posted by Admin in Modern Technology</span>
                                    <p><small>Share</small> 0 comment</p>
                                 </div>
                             </li>
                                 <li class="col-md-4">
                                <div class="case-content">
                                <figure>
                                    <img src="images/blog-img-4.png" alt="blog-img-4" width="450" height="248">
                                </figure>
                                   <span class="date">03 Nov, 2021</span>
                                    <h4>Coal, Carriers, Chips, & The Crisis</h4>
                                    <p>The economic turmoil caused by the COVID has significantly disrupted the ecosystem on the whole. The post-pandemic situation in India and other countries has been an eye opener on the significance of having a stable supply chain. I have chosen</p>
                                    <a href="#" class="read-more">Read More</a>
                                    <span class="edit">Posted by Admin in Industry</span>
                                    <p><small>Share</small> 0 comment</p>
                                 </div>
                             </li>-->
                <!--<li class="col-md-4">
                               <div class="case-content">
                                <figure>
                                    <img src="images/blog-img-5.png" alt="blog-img-5" width="450" height="248">
                                </figure>
                                    <span class="date">09 Sep, 2021</span>
                                    <h4>Why Colocation Is The Key To Reducing Your Carbon Footprint</h4>
                                    <p>Climate change has been a cause for concern over the last decade. This in turn, has given organisations and consumers alike ample reason to be able to demonstrate their potential for sustenance. Sustainability automatically gets you to veer towards reducing</p>
                                    <a href="#" class="read-more">Read More</a>
                                    <span class="edit">Posted by Admin in Green Energy</span>
                                    <p><small>Share</small> 0 comment</p>
                                 </div>
                             </li>-->
                <!--<li class="col-md-4">
                                <div class="case-content">
                                <figure>
                                    <img src="images/blog-img-6.png" alt="blog-img-6" width="450" height="248">
                                </figure>
                                   <span class="date">23 Apr, 2022</span>
                                    <h4>Data Migration Challenges And Methods To Overcome Them</h4>
                                    <p>Cloud technology offers diverse advantages to businesses to maintain the competitive streak. Management cost reduction, scaling of technology, achieving efficiency peaks and maintaining low cost of operations are a few advantages to count on...</p>
                                    <a href="#" class="read-more">Read More</a>
                                    <span class="edit">Posted by Admin in Cloud Migration</span>
                                    <p><small>Share</small> 0 comment</p>
                                 </div>
                             </li>-->


            </ul>
        </div>
    </div>
</div>

<!-- popup -->
<div class="container subscribe">
    <div class="modal fade" id="subscribe" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="times-btn"><button type="button" class="sub-close" data-dismiss="modal">&times;</button></div>
                <div class="modal-header">
                    <h4 class="modal-title">Subscribe</h4>
                </div>
                <div class="modal-body">
                    <p>Be a visionary reader – subscribe to be the first to glimpse into our upcoming Blogs.</p>
                </div>
            </div>

        </div>
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
                                        <button>Download case study</button>
                                    </li>
                                </ul>
                            </form>
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
<script>
    /* jQuery
================================================== */
    $(function() {
        $('.acc__title').click(function(j) {

            var dropDown = $(this).closest('.acc__card').find('.acc__panel');
            $(this).closest('.acc').find('.acc__panel').not(dropDown).slideUp();

            if ($(this).hasClass('active')) {
                $(this).removeClass('active');
            } else {
                $(this).closest('.acc').find('.acc__title.active').removeClass('active');
                $(this).addClass('active');
            }

            dropDown.stop(false, true).slideToggle();
            j.preventDefault();
        });
    });
</script>
<script>
    $(function() {
        var fx = function fx() {
            $(".stat-number").each(function(i, el) {
                var data = parseInt(this.dataset.n, 10);
                var props = {
                    "from": {
                        "count": 0
                    },
                    "to": {
                        "count": data
                    }
                };
                $(props.from).animate(props.to, {
                    duration: 3000 * 1,
                    step: function(now, fx) {
                        $(el).text(Math.ceil(now));
                    },
                    complete: function() {
                        if (el.dataset.sym !== undefined) {
                            el.textContent = el.textContent.concat(el.dataset.sym)
                        }
                    }
                });
            });
        };

        var reset = function reset() {
            //console.log($(this).scrollTop())
            if ($(this).scrollTop() > 1990) {
                $(this).off("scroll");
                fx()
            }
        };

        $(window).on("scroll", reset);
    });
</script>
<script>
    $(document).ready(function() {
        $('nav ul li a').click(function() {
            $('nav ul li a').removeClass("active");
            $(this).addClass("active");
        });
    });
</script>
<!-- <script>
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
</script> -->

<script>
    $(window).on('load', function() {
        if (!localStorage.getItem('subscribedFormSubmited')) {
            $('#subscribe').show();
        } else {
            $('.modal').hide();
        }
    });
    $('.sub-close').on('click', function() {
        $('.modal').hide();
    });
</script>

<script>
    $(document).ready(function() {

        $('.close-btn, .sub-close').on('click', function() {
            $('#thanks-msg').hide();
        });
    });
</script>
</body>

</html>