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
                <h4 class="page-title">Registration</h4>
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
				       <th class="th-sm">Patner Type
				      </th>
				      <th class="th-sm">Partner Email 
				      </th>
				      <th class="th-sm">Date of Registrtaion
				      </th>
				      <th class="th-sm">
				      </th>
				      <th class="th-sm">
				      </th>
				      <th class="th-sm">
				      </th>
				      <th class="th-sm" colspan="2">
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
		 <div class="db-popup hide" id="rejectpop">
		 	<div class="pop-cont">
		 	 <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Reject Registration ( For internal use only )</h4>
                    <form class="forms-sample">
                      <input type="hidden" name="partnerid" id="partnerid" value="" />
                      <div class="row">
                      	<div class="form-group col-md-6 col-sm-12">
                        <label for="exampleInputName1">Partner Name</label>
                        <input type="text" class="form-control" id="partnername" placeholder="Name" disabled="">
                      </div>
                      <div class="form-group col-md-6 col-sm-12">
                        <label for="exampleInputEmail3">Partner Eamil</label>
                        <input type="email" class="form-control" id="partneremail" placeholder="Email" disabled="">
                      </div>
                      </div>
                       <div class="row">
                      	<div class="form-group col-md-12 col-sm-12">
                        <label for="exampleInputName1">Reason for Cancelation</label>
			<textarea class="form-control" id="exampleTextarea1" rows="2"></textarea>
                      </div>      
                      </div>
                      <button type="submit" class="btn btn-danger mr-2" style="cursor: pointer;">Reject</button>
                      <button type="button" class="btn btn-light btn-close" style="cursor: pointer;" >Close</button>
                    </form>
                  </div>
                </div>
              </div>
		 	</div>
		 </div>


		<div class="db-popup hide" id="approvepop">
		 	<div class="pop-cont">
		 	  <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Approve</h4>
              <form class="forms-sample" enctype="multipart/form-data" id="reg-approve-form" >
                <input type="hidden" name="partner" id="partner" value="" />
                <div class="row">
                  <div class="form-group col-md-6 col-sm-12">
                    <label for="exampleInputName1">Partner Name</label>
                    <input type="text" class="form-control" id="partnername" placeholder="Name" readonly="" >
                  </div>
                  <div class="form-group col-md-6 col-sm-12">
                    <label for="exampleInputEmail3">Partner Eamil</label>
                    <input type="email" class="form-control" id="partneremail" placeholder="Email" disabled="">
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-md-12 col-sm-12">
                    <label for="certattach">Upload Certificate</label>
                    <input type="file" name="certdoc" id="certdoc" class="form-control" />
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-md-12 col-sm-12">
                    <button type="submit" id="btn-reg-approve" class="btn btn-success mr-2" style="cursor: pointer;">Approve</button>
                    <button type="button" class="btn btn-light btn-close" style="cursor: pointer;" >Close</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          </div>
		 	</div>
		 </div>
    </div>

		 <div class="db-popup hide" id="reviewpop">
		 	<div class="pop-cont">
		 	 <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                <div class="header-controls clearfix" style="text-align: right; position:relative;padding:10px;">
                    <span class="btn btn-close" style="float:right;width:20px;height:20px;">X</span>
                </div>
                  <div class="card-body">
                    <h4 class="card-title">Review</h4>
                    <form class="forms-sample">
                      <div class="row">
                      	<div class="form-group col-md-6 col-sm-12">
                        <label for="exampleInputName1">Partner Name</label>
                        <input type="text" class="form-control" id="patnername" placeholder="Name" disabled="">
                      </div>
                      <div class="form-group col-md-6 col-sm-12">
                        <label for="exampleInputEmail3">Partner Eamil</label>
                        <input type="email" class="form-control" id="partneremail" placeholder="Email" disabled="">
                      </div>
                      </div>
                        <div class="row">
                      	<div class="form-group col-md-6 col-sm-12">
                        <label for="exampleInputName1">Job Title</label>
                        <input type="text" class="form-control" id="partnerdesignation" placeholder="Name" disabled="">
                      </div>
                      <div class="form-group col-md-6 col-sm-12">
                        <label for="exampleInputEmail3">Partner Mobile</label>
                        <input type="text" class="form-control" id="partnermob" placeholder="Email" disabled="">
                      </div>
                      </div>
                       <div class="row">
                      	<div class="form-group col-md-6 col-sm-12">
                        <label for="exampleInputName1">Company Name</label>
                        <input type="text" class="form-control" id="comp_name" placeholder="Name" disabled="">
                      </div>
                      <div class="form-group col-md-6 col-sm-12">
                        <label for="exampleInputEmail3">Company Website</label>
                        <input type="text" class="form-control" id="comp_website" placeholder="Email" disabled="">
                      </div>
                      </div>
                       <div class="row">
                      	<div class="form-group col-md-6 col-sm-12">
                        <label for="exampleInputName1">Company Description</label>
                        <input type="text" class="form-control" id="comp_desc" placeholder="Name" disabled="">
                      </div>
                      <div class="form-group col-md-6 col-sm-12">
                        <label for="exampleInputEmail3">Company Headquaters</label>
                        <input type="text" class="form-control" id="comp_hq" placeholder="Email" disabled="">
                      </div>
                      </div>
                      <div class="row">
                      	<div class="form-group col-md-6 col-sm-12">
                        <label for="exampleInputName1">Postal Code</label>
                        <input type="text" class="form-control" id="comp_zipcode" placeholder="Name" disabled="">
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                          <label for="exampleInputEmail3">Country</label>
                          <input type="text" class="form-control" id="comp_country" placeholder="Email" disabled="">
                        </div>
                      </div>
                      <div class="row">
                      	<div class="form-group col-md-6 col-sm-12">
                        <label for="exampleInputName1">State</label>
                        <input type="text" class="form-control" id="comp_state" placeholder="Name" disabled="">
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                          <label for="exampleInputEmail3">City</label>
                          <input type="text" class="form-control" id="comp_city" placeholder="Email" disabled="">
                        </div>
                      </div>

                      <div class="row">
                      	<div class="form-group col-md-6 col-sm-12">
                        <label for="exampleInputName1">Employee Strength</label>
                        <input type="text" class="form-control" id="comp_empstrength" placeholder="Name" disabled="">
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                          <label for="exampleInputEmail3">Annual Revenue</label>
                          <input type="text" class="form-control" id="comp_anrevenue" placeholder="Email" disabled="">
                        </div>
                      </div>

		      <button type="button" class="btn btn-success mr-2 btn-approve" style="cursor: pointer;">Approve</button>
                      <button type="button" class="btn btn-danger mr-2 btn-reject" style="cursor: pointer;">Reject</button>                      
 		      <button type="button" class="btn btn-light btn-close" style="cursor: pointer;" >Close</button>
                    </form>
                  </div>
                </div>
              </div>
		 	</div>
		 </div>

    <div class="db-popup hide" id="certpop">
		 	<div class="pop-cont">
		 	  <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Generate Certificate</h4>
              <form class="forms-sample" id="frm-gen-cert">
                <input type="hidden" name="partner" id="partner-idx" value="" />
                <div class="row">
                  <div class="form-group col-sm-12">
                    <label for="expdate">Expiry Date</label>
                    <input type="date" class="form-control" id="expdate" placeholder="Expiry Date" required>
                  </div>  
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <button type="submit" class="btn btn-success mr-2" style="cursor: pointer;">Generate Certificate</button>
                    <button type="button" class="btn btn-light btn-close" style="cursor: pointer;" >Close</button>
                  </div>
                </div>                 
              </form>
            </div>
          </div>
        </div>
		 	</div>
		 </div>
       





<?php
  include_once('../includes/footer.php');
?>
<script src="<?=BASE_URL?>assets/vendors/jquery/jquery.min.js"></script>
<script src="<?=BASE_URL?>assets/js/theme/index-db.js"></script>
     <script>
   
document.addEventListener('DOMContentLoaded', function(event) {
  //alert('hi from registration');
  //the event occurred
  getRegistrations("pending");
});
 

</script>	

 </body>
</html>