<?php include('php/inner-header.php');?>
<style>
    .all-click {
    background: #2680EB;
    border: 0;
    color: #ffffff;
    padding: 15px;
    text-align: center;
    width: 100%;
    display: block;
    border-radius: 38px;
    width: 175px;
    margin: 1;
    font-size: 30px;
}
.personal-information ul li{margin:0px 0px 20px 0px;}
</style>
         <!-- main starts here -->
          <div class="about-banner">
                 <div class="about-banner-blk">
                      <img src="images/work-with-us-banner.jpg" alt="work-with-us-banner" width="1920" height="210">
                         <h2></h2>
                     
                 </div>
         </div>
          <!--what-is-noc starts here -->
          <div class="seniour-uxui-designer">
          <div class="container">
              <div class="seniour-uxui-designer-main">
                  
                  <div class="personal-information">
                    <h4>Personal Information</h4>
                    <form action="thankyou.php" method="post" enctype="multipart/form-data">
                        <ul class="row">
                            <li class="col-md-6">
                                <label>Full Name</label>
                                <input type="text" name="fullname" style="background:none;" required>
                            </li>
                             <li class="col-md-6">
                                <label>Email Address</label>
                                <input type="text" name="email" required  style="background:none;">
                            </li>
                             <li class="col-md-6">
                                <label>Contact number</label>
                                <input type="text" name="phone" required  style="background:none;">
                            </li>
                             <li class="col-md-6">
                                <label>Department</label>
                                <input type="text" name="department">
                            </li>
                             <li class="col-12">
                                <input type="file" name="attachment"  required  style="background:none;">
                            </li>
                            <li class="col-12">
                                <label>Message</label>
                               <textarea name="message"></textarea>
                            </li>
                        </ul>  
                    
                </div>
                  
                  <div class="personal-information">
                    <h4>Education Information</h4>
                 
                        <ul class="row">
                            <li class="col-12">
                                <label>Education Information</label>
                                <input type="text" name="education-infor" required  style="background:none;">
                            </li>
                             <li class="col-md-6">
                                <label>Degree</label>
                                <input type="text" name="degree" required  style="background:none;">
                            </li>
                             <li class="col-md-6">
                                <label>Specialization</label>
                                <input type="text" name="specialization" required  style="background:none;">
                            </li>
                            
                             <li class="col-md-6">
                                <ul class="row">
                                    <li class="col-md-6">
                                        <label>From</label>
                                        <input type="text" placeholder="YYYY" name="from_year" required  style="background:none;">
                                    </li>
                                    <li class="col-md-6">
                                        <label>To</label>
                                        <input type="text" placeholder="YYYY" name="to_year" required  style="background:none;">
                                    </li>
                                 </ul>
                            </li>
                             <li class="col-md-6">
                                <label>Department</label>
                                <input type="text" name="department2"  style="background:none;">
                            </li>
                            <!--<li class="col-6">-->
                            <!--   <a href="#">Add Another</a>-->
                            <!--</li>-->
                        </ul>  
                    
                </div>
                  
                  <div class="personal-information">
                    <h4>Work History</h4>
                   
                        <ul class="row">
                            <li class="col-md-6">
                                <label>Job Title</label>
                                <input type="text" name="job-title">
                            </li>
                             <li class="col-md-6">
                                <label>Employement Type</label>
                                <input type="text" name="emp-type">
                            </li>
                             <li class="col-md-6">
                                <label>Company</label>
                                <input type="text" name="company">
                            </li>
                             <li class="col-md-6">
                                <label>Location</label>
                                <input type="text" name="location">
                            </li>
                            <li class="col-12">
                                <div class="l-content">
                        <input type="checkbox" id="agree" class="c-check__checkbox">
                                    <span>I am Currently Working in this role</span>
                        </div>
                            </li>
                            <li class="col-md-6">
                                <label>Start Date</label>
                                <input type="text" name="start-date">
                            </li>
                             <li class="col-md-6">
                                <label>End Date</label>
                                <input type="text" name="end-date">
                            </li>
                            <li class="col-12">
                                <label>Role & Responsibilities</label>
                               <textarea name="role"></textarea>
                            </li>
                            <li class="col-12">
                                <button type="submit" class="all-click" name="submit">Submit</button>
                            </li>
                        </ul>  
                    </form>
                </div>
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