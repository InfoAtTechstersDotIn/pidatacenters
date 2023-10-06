<?php
  require_once('./config/constants.php') ; 
	require_once('./includes/header.php');
?>

<div class="container-fluid page-body-wrapper" id="page-single-partner">
<?php
	include_once('./includes/sidebar.php');
    $rbp = isset($_GET['f1']) ? $_GET['f1'] : ""; 
?>

<div class="main-panel">
    <div class="content-wrapper">
		<!-- start -->         
		<div class="row page-title-header">
            <div class="col-12">
              <div class="page-header">
                <h4 class="page-title">Partner Details</h4>
              </div>
            </div>
        </div>

        <div class="partner-details">
            <input type="hidden" id="partner" name="partner" value="<?=$rbp?>" />
            <div class="row" id="row-cta">
                <div class="col-sm-12">
                    <div style="float:right;display:flex;">
                    <button type="button" id="" class="btn btn-danger  mr-2 btn-back">Back</button>
		    <div class="hide" id="cta-wrap">
                    <button type="button" id="btn-gen-cert" class="btn btn-default  mr-2 btn-info">Generate Certificate</button>
                    <button type="button" class="btn btn-success mr-2 btn-approve" style="cursor: pointer;">Approve</button>
                    <button type="button" class="btn btn-danger mr-2 btn-reject" style="cursor: pointer;">Reject</button> 
		    </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="card mt-2 mb-2 hide" id="cert-card">
                        <div class="card-header" style="padding: 10px 20px!important;">Certificate</div>
                        <div class="card-body">
                            <div class="row mt-2 mb-2">
                                <div class="col-xs-12 col-md-6">
                                    <!-- <input type="text" class="form-control" id="patnername" placeholder="Name" disabled=""> -->
                                    <a href="" id="lnk-cert"  download>Download Certificate</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
	
	    <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="card mt-2 mb-2">
                        <div class="card-header" style="padding: 10px 20px!important;">Partner Registration Status</div>
                        <div class="card-body">
                            <div class="row mt-2 mb-2">
                                <div class="col-xs-12 col-md-6">
                                    <label for="partnerstatus">Registration Status</label>
                                    <input type="text" class="form-control" id="partnerstatus" placeholder="Status" disabled="" style="text-transform:capitalize;">
                                </div>
                            </div>
                            <div class="row mt-2 mb-2">
                                <div class="col-xs-12 col-md-12">
                                    <div id="rejection-comment-wrap" class="hide">
                                    <label for="rejectionreason">Reason for rejection</label>
                                    <textarea class="form-control" id="rejectionreason" rows="5" placeholder="Reason for rejection" disabled="">

                                    </textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="card mt-2 mb-2">
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
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="card mt-2 mb-2">
                        <div class="card-header" style="padding: 10px 20px!important;">Organisation Details</div>
                        <div class="card-body">
                        <div class="row mt-2 mb-2">
                            <div class="col-xs-12 col-md-6">
                                <label for="ro-at-pi">Relationship Owner @Pi®</label>
                                <input type="text" class="form-control" id="ro-at-pi" placeholder="Relationship Owner @Pi®" disabled="">
                            </div>

                            <div class="col-xs-12 col-md-6">
                                <label for="compname">Company Name</label>
                                <input type="text" class="form-control" id="compname" placeholder="Company Name" disabled="">
                            </div>
                            
                            </div>
                            <div class="row  mt-2 mb-2">
                            <div class="col-xs-12 col-sm-12">
                                <label for="compdesc">Company Description</label>
                                <textarea rows="5" class="form-control" id="compdesc" placeholder="Company Description" disabled=""></textarea>
                            </div>
                            
                            </div>
                            <div class="row  mt-2 mb-2">
                                <div class="col-md-6 col-sm-12">
                                    <label for="compwebsite">Company Website</label>
                                    <input type="text" class="form-control" id="compwebsite" placeholder="Company Website" disabled="">
                                </div>    
                                <div class="col-xs-12 col-md-6">
                                    <label for="comphqadd">Company Headquarter Address</label>
                                    <input type="text" class="form-control" id="comphqadd" placeholder="Company Headquarter Address" disabled="">
                                </div>
                                
                            </div>
                            <div class="row  mt-2 mb-2">
                                <div class="col-xs-12 col-md-6">
                                    <label for="zip">Zip/Postal Code</label>
                                    <input type="text" class="form-control" id="zip" placeholder="Zip/Postal Code" disabled="">
                                </div>

                                <div class="col-xs-12 col-md-6">
                                    <label for="country">Country</label>
                                    <input type="text" class="form-control" id="country" placeholder="Country" disabled="">
                                </div>
                                
                            </div>
                            <div class="row  mt-2 mb-2">
                                <div class="col-xs-12 col-md-6">
                                    <label for="state">State</label>
                                    <input type="text" class="form-control" id="state" placeholder="State" disabled="">
                                </div>

                                <div class="col-xs-12 col-md-6">
                                    <label for="city">City</label>
                                    <input type="text" class="form-control" id="city" placeholder="City" disabled="">
                                </div>
                                
                            </div>
                            <div class="row  mt-2 mb-2">
                                <div class="col-xs-12 col-md-6">
                                    <label for="empstrength">Employee Strength</label>
                                    <input type="text" class="form-control" id="empstrength" placeholder="Employee Strength" disabled="">
                                </div>

                                <div class="col-xs-12 col-md-6">
                                    <label for="annualrevenue">Annual Revenue(INR Crs)</label>
                                    <input type="text" class="form-control" id="annualrevenue" placeholder="Annual Revenue" disabled="">
                                </div>
                                
                            </div>
                            <div class="row  mt-2 mb-2">
                                <div class="col-xs-12 col-md-6">
                                    <label for="indusvert">Industry Vertical</label>
                                    <input type="text" class="form-control" id="indusvert" placeholder="Industry Vertical" disabled="">
                                </div>

                                <div class="col-xs-12 col-md-6">
                                    <label for="lob">Line of Business</label>
                                    <input type="text" class="form-control mb-2" id="lob" placeholder="Line of Business" disabled="">
				    <input type="text" class="form-control hide" id="lob_other" placeholder="Line of Business" disabled="">
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
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="card mt-2 mb-2">
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
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="card mt-2 mb-2">
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
                            <div class="row  mt-2 mb-2">
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <label for="agreement_doc">RBPP Agreement</label>
                                    <div class="form-control"><a href="" download id="agreement_doc"></a></div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <label for="nda_doc">NDA Document</label>
                                    <div class="form-control"><a href="" download id="nda_doc"></a></div>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <!-- Modals -->
    <div class="db-popup hide" id="rejectpop">
        <div class="pop-cont">
            <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Reject Registration</h4>
                <form class="forms-sample">
                    <input type="hidden" name="partnerid" id="partnerid" value="" />
                    <div class="row">
                    <div class="form-group col-md-6 col-sm-12">
                    <label for="exampleInputName1">Partner Name</label>
                    <input type="text" class="form-control" id="partnername" placeholder="Name" disabled="">
                    </div>
                    <div class="form-group col-md-6 col-sm-12">
                    <label for="exampleInputEmail3">Partner Email</label>
                    <input type="email" class="form-control" id="partneremail" placeholder="Email" disabled="">
                    </div>
                    </div>
                    <div class="row">
                    <div class="form-group col-md-12 col-sm-12">
                    <label for="exampleInputName1">Reason for Rejection</label>
                    <textarea class="form-control" id="exampleTextarea1" rows="2" required></textarea>
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
                    <label for="exampleInputEmail3">Partner Email</label>
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
</div>
  
<?php
  include_once('./includes/footer.php');
?>
<script src="<?=BASE_URL?>assets/vendors/jquery/jquery.min.js"></script>
<script src="<?=BASE_URL?>assets/js/theme/index-db.js"></script>
<script>
   
document.addEventListener('DOMContentLoaded', function(event) {
  //alert('hi from registration');
  //the event occurred
  let partner = document.getElementById('partner').value;
  initSinglePartner(partner);
});

</script>	
 </body>
</html>