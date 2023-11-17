<?php include('php/inner-header.php');?>
<?php
// $servername = "localhost";
$servername = "172.20.119.52";
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
         <!-- main starts here -->
         
         <div class="about-banner">
                 <div class="about-banner-blk">
                      <img src="images/work-with-us-banner.jpg" alt="work-with-us-banner" width="1920" height="210">
                        <h2>Job Detail</h2>
                     
                 </div>
         </div>
          
          <!--what-is-noc starts here -->
          <div class="seniour-uxui-designer">
          <div class="container">
		   <?php

$todo= mysqli_real_escape_string($conn,$_GET['id']);

$r="SELECT * from why_us where id= '$todo'";
$k=mysqli_query($conn,$r)or die(mysql_error());

if(mysqli_num_rows($k)>0)
{
while($row=mysqli_fetch_object($k))
{
?>
              <div class="seniour-uxui-designer-main">
                  <h3> <?php echo $row->job_title;?></h3>
                  <!--<p>Write a short and catchy paragraph about your company. Make sure to provide information about the company’s culture, perks, <br> and benefits. Include office hours, remote working possibilities, and anything else you think makes your company interesting.</p>-->
                  <div class="job-description">
                    <h4>Job Description :</h4>
                       <div class="job-description-phera">
					     <?php echo $row->job_detail;?>
                      <!--<p>We are looking for a user-experience (UX) designer able to understand our business requirements and any technical limitations, as well as be responsible for conceiving and conducting user research, interviews and surveys, and translating them into sitemaps, user flows, customer journey maps, wireframes, mockups and prototypes. The UX designer will also be expected to design the overall functionality of the product, and in order to ensure a great user experience, iterate upon it in accordance with user-testing. {{Add any specific experience here.</p>-->
                      </div>
                  </div>
                  <img src="images/job-details-img.png" alt="job-details-img" width="1460" height="608">
                  <div class="job-description">
                    <h4>Essential Knowledge, Skills, Experience</h4>
                       <div class="job-description-phera">
					   <?php echo $row->job_skills;?>
                      <!--<p> &#9679; Translate concepts into user flows, wireframes, mockups and prototypes that lead to intuitive user experiences.</p>
                      <p> &#9679; Facilitate the client’s product vision by researching, conceiving, sketching, prototyping and user-testing experiences for digital products.</p>
                      <p> &#9679; Design and deliver wireframes, user stories, user journeys, and mockups optimized for a wide range of devices and interfaces.</p>
                      <p> &#9679; Identify design problems and devise elegant solutions.</p>
                      <p> &#9679; Make strategic design and user-experience decisions related to core, and new, functions and features.</p>
                      <p> &#9679; Take a user-centered design approach and rapidly test and iterate your designs.</p>
                      <p> &#9679; Collaborate with other team members and stakeholders.</p>
                      <p> &#9679; Ask smart questions, take risks and champion new ideas.</p>-->
                      </div>
                  </div>
                  <div class="job-description">
                    <h4>Requirements</h4>
                       <div class="job-description-phera">
					   <?php echo $row->job_requirement;?>
                      <!--<p> &#9679; Translate concepts into user flows, wireframes, mockups and prototypes that lead to intuitive user experiences.</p>
                      <p> &#9679; Facilitate the client’s product vision by researching, conceiving, sketching, prototyping and user-testing experiences for digital products.</p>
                      <p> &#9679; Design and deliver wireframes, user stories, user journeys, and mockups optimized for a wide range of devices and interfaces.</p>
                      <p> &#9679; Identify design problems and devise elegant solutions.</p>
                      <p> &#9679; Make strategic design and user-experience decisions related to core, and new, functions and features.</p>
                      <p> &#9679; Take a user-centered design approach and rapidly test and iterate your designs.</p>
                      <p> &#9679; Collaborate with other team members and stakeholders.</p>
                      <p> &#9679; Ask smart questions, take risks and champion new ideas.</p>-->
                      </div>
                  </div>
                    <a href="apply-job.php?id=<?php echo $row->id;?>" class="apply">Apply</a>
              </div>
			    <?php

}
}
else
{
echo "<span>No Job Details</span>";


}
$conn->close();
?>
          </div>
          </div>
          
     
  <?php include('php/footer.php');?>
          
          
         
          
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
  responsive: [
    {
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
             wow = new WOW(
                       {
                           animateClass: 'animated',
                           offset: 100,
                           mobile: true
                       }
               );
               wow.init(); 
             }); 
              
      </script>
   </body>
</html>