<?php
  require_once('../config/constants.php') ; 
	require_once('../includes/header.php');
?>

<div class="container-fluid page-body-wrapper">
<?php
	include_once('../includes/sidebar.php');
?>

<div class="main-panel">
    <div class="content-wrapper">

				<!-- start -->         
		<div class="row page-title-header">
            <div class="col-12">
              <div class="page-header">
                <h4 class="page-title">Approved Registrations</h4>
              </div>
            </div>
        </div>
        <div class="row  col-md-12 col-sm-12 col-12 grid-margin">
          <div class="card" style="width:100%;">
        	<div class="card-body">
        	 <div class="row">
        		<div class="col-md-12 col-12 table-responsive">
        		<table id="pending-registrtaion" class="table table table-hover  table-bordered" width="100%">
				  <thead>
				    <tr>
				      <th class="th-sm">Partner Name
				      </th>
				      <th class="th-sm">Partner Admin
				      </th>
				       <th class="th-sm">Partner Type
				      </th>
				      <th class="th-sm">Partner Email 
				      </th>
				      <th class="th-sm">Date of Registration
				      </th>
				      <th class="th-sm">
				      </th>
				    </tr>
				  </thead>
				  <tbody>
				</table>
			</div>	        	
       		 </div>
     	  </div>  	
   			</div>
        </div>
        <div>
        	  <!-- Modal -->
	    <div class="db-popup hide" id="reviewpop">
		 	<div class="pop-cont">
		 	  <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="header-controls clearfix" style="text-align: right; position:relative;padding:10px;">
              <span class="btn btn-close" style="float:right;width:20px;height:20px;">X</span>
            </div>
            <div class="card-body">
              <div class="card-title clearfix">
                <h4 style="float:left; width:50%;font-size:14px;font-weight:500;">Review</h4>
              </div>
              <form class="forms-sample">
                <div class="card mt-5 mb-5">
                  <div class="card-header" style="padding: 10px 20px!important;">Personal Information</div>
                  <div class="card-body">
                    <div class="row mt-2 mb-2">
                      <div class="col-xs-12 col-md-6">
                        <label for="patnername">Partner Name</label>
                        <input type="text" class="form-control" id="patnername" placeholder="Name" disabled="">
                      </div>
                      <div class="col-md-6 col-sm-12">
                        <label for="jobtitle">Job Title</label>
                        <input type="text" class="form-control" id="jobtitle" placeholder="Job Title" disabled="">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xs-12 col-md-6">
                        <label for="partneremail">Business Email</label>
                        <input type="email" class="form-control" id="partneremail" placeholder="Email" disabled="">
                      </div>
                      <div class="col-md-6 col-sm-12">
                        <label for="partnermobile">Mobile</label>
                        <input type="text" class="form-control" id="partnermobile" placeholder="Mobile" disabled="">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="card mt-5 mb-5">
                  <div class="card-header" style="padding: 10px 20px!important;">Organisation Details</div>
                  <div class="card-body">
                    <div class="row mt-2 mb-2">
                      <div class="col-xs-12 col-md-6">
                        <label for="compname">Company Name</label>
                        <input type="text" class="form-control" id="compname" placeholder="Company Name" disabled="">
                      </div>
                      <div class="col-md-6 col-sm-12">
                        <label for="compwebsite">Company Website</label>
                        <input type="text" class="form-control" id="compwebsite" placeholder="Company Website" disabled="">
                      </div>
                    </div>
                    <div class="row  mt-2 mb-2">
                      <div class="col-xs-12 col-sm-12">
                        <label for="compdesc">Company Description</label>
                        <textarea rows="5" class="form-control" id="compdesc" placeholder="Company Description" disabled=""></textarea>
                      </div>
                      
                    </div>
                    <div class="row  mt-2 mb-2">
                      <div class="col-xs-12 col-md-6">
                        <label for="comphqadd">Company Headquarter Address</label>
                        <input type="text" class="form-control" id="comphqadd" placeholder="Company Headquarter Address" disabled="">
                      </div>
                      <div class="col-xs-12 col-md-6">
                        <label for="zip">Zip/Postal Code</label>
                        <input type="text" class="form-control" id="zip" placeholder="Zip/Postal Code" disabled="">
                      </div>
                    </div>
                    <div class="row  mt-2 mb-2">
                      <div class="col-xs-12 col-md-6">
                        <label for="country">Country</label>
                        <input type="text" class="form-control" id="country" placeholder="Country" disabled="">
                      </div>
                      <div class="col-xs-12 col-md-6">
                        <label for="state">State</label>
                        <input type="text" class="form-control" id="state" placeholder="State" disabled="">
                      </div>
                    </div>
                    <div class="row  mt-2 mb-2">
                      <div class="col-xs-12 col-md-6">
                        <label for="city">City</label>
                        <input type="text" class="form-control" id="city" placeholder="City" disabled="">
                      </div>
                      <div class="col-xs-12 col-md-6">
                        <label for="empstrength">Employee Strength</label>
                        <input type="text" class="form-control" id="empstrength" placeholder="Employee Strength" disabled="">
                      </div>
                    </div>
                    <div class="row  mt-2 mb-2">
                      <div class="col-xs-12 col-md-6">
                        <label for="annualrevenue">Annual Revenue(INR Crs)</label>
                        <input type="text" class="form-control" id="annualrevenue" placeholder="Annual Revenue" disabled="">
                      </div>
                      <div class="col-xs-12 col-md-6">
                        <label for="indusvert">Industry Vertical</label>
                        <input type="text" class="form-control" id="indusvert" placeholder="Industry Vertical" disabled="">
                      </div>
                    </div>
                    <div class="row  mt-2 mb-2">
                      <div class="col-xs-12 col-md-6">
                        <label for="lob">Line of Business</label>
                        <input type="text" class="form-control" id="lob" placeholder="Line of Business" disabled="">
                      </div>
                    </div>
                    <div class="row  mt-2 mb-2">
                      <div class="col-xs-12 col-md-12">
                        <label for="clientbase">Preferred Client Base</label>
                        <input type="text" class="form-control" id="clientbase" placeholder="Preferred Client Base" disabled="">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="card mt-5 mb-5">
                  <div class="card-header" style="padding: 10px 20px!important;">Technical Information</div>
                  <div class="card-body">
                    <div class="row mt-2 mb-2">
                      <div class="col-xs-12 col-sm-12">
                        <label for="usecase">Use Case Expertise</label>
                        <textarea rows="5" class="form-control" id="usecase" placeholder="Use Case Expertise" disabled=""></textarea>
                      </div>
                    </div>
                    <div class="row  mt-2 mb-2">
                      <div class="col-xs-12 col-sm-12">
                        <label for="techexpertise">Technical Expertise</label>
                        <textarea rows="5" class="form-control" id="techexpertise" placeholder="Technical Expertise" disabled=""></textarea>
                      </div>
                    </div>
                    <div class="row  mt-2 mb-2">
                      <div class="col-xs-12 col-sm-12">
                        <label for="profservices">Professional Services Offered</label>
                        <textarea rows="5" class="form-control" id="profservices" placeholder="Professional Services Offered" disabled=""></textarea>
                      </div>
                    </div>
                    <div class="row  mt-2 mb-2">
                      <div class="col-xs-12 col-sm-12">
                        <label for="interestedservices">Interested Services/Products @Pi</label>
                        <textarea rows="5" class="form-control" id="interestedservices" placeholder="Interested Services/Products @Pi" disabled=""></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="card mt-5 mb-5">
                  <div class="card-header" style="padding: 10px 20px!important;">Business Case</div>
                  <div class="card-body">
                    <div class="row mt-2 mb-2">
                      <div class="col-xs-12 col-sm-12">
                        <label for="businesscase">Business Case</label>
                        <textarea class="form-control" id="businesscase" placeholder="Business Case" disabled=""></textarea>
                      </div>
                    </div>
                    <div class="row  mt-2 mb-2">
                      <div class="col-xs-12 col-sm-12">
                        <label for="payoutmodel">Preferred Pay Out Model</label>
                        <input type="text" class="form-control" id="payoutmodel" placeholder="Pay Out Model" disabled="" />
                      </div>
                    </div>  
                  </div>
                </div>               
 		            <button type="button" class="btn btn-light btn-close" style="cursor: pointer;" >Close</button>
              </form>
            </div>
          </div>
        </div>
	</div>
	</div>

<?php
  include_once('../includes/footer.php');
?>	
<script>
document.addEventListener('DOMContentLoaded', function(event) {
  //alert('hi from approved  registration');
  //the event occurred
  getRegistrations("approved");
});
 

</script>	


   </body>
</html>