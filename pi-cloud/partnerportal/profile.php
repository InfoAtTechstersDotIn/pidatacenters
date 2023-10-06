<?php
  require_once('./config/constants.php') ; 
	require_once('./includes/header.php');
?>

<div class="container-fluid page-body-wrapper" id="page-partner-profile">
<?php
	include_once('./includes/sidebar.php');
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
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="card mt-2 mb-2 hide" id="cert-card">
                        <div class="card-header">Certificate</div>
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
                    <div class="card mt-2 mb-2" id="card-personal-info">
                        <div class="card-header">
                            <span>Personal Information</span>
                            <span class="sec-btn-wrap"><button type="button" class="btn btn-primary" id="btnEditPI">Edit</button></span>
                        </div>
                        <div class="card-body">
                            <form id="frm-personal-info">
                                <input type="hidden" id="partner-ref" name="partner_ref" value="" />
                            <div class="row mt-2 mb-2">
                                <div class="col-xs-12 col-md-6">
                                    <label for="patnername">Partner Name</label>
                                    <input type="text" class="form-control" id="patnername" name="partnername" placeholder="Name" disabled="">
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="jobtitle">Job Title</label>
                                    <input type="text" class="form-control" id="jobtitle"  name="jobtitle" placeholder="Job Title" disabled="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <label for="partneremail">Business Email</label>
                                    <input type="email" class="form-control" id="partneremail" name="partneremail" placeholder="Email" disabled="">
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="partnermobile">Mobile</label>
                                    <input type="text" class="form-control" id="partnermobile"  name="partnermobile" placeholder="Mobile" disabled="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <span class="sec-btn-wrap mt-5 mb-2"><button type="button" class="btn btn-primary btn-hidden" id="btn-save-pi">Save</button></span>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="card mt-2 mb-2">
                        <div class="card-header" id="card-OD">Organisation Details</div>
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
                        <div class="card-header" id="card-tech-info">Technical Information</div>
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
                        <div class="card-header" id="card-bus-case">Business Case</div>
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
                                    <label for="agreement_doc">Agreement Document</label>
                                    <div class="form-control"><a href="" download id="agreement_doc" disabled></a></div>
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

  
<?php
  include_once('./includes/footer.php');
?>
</div>
<script src="<?=BASE_URL?>assets/vendors/jquery/jquery.min.js"></script>
<script src="<?=BASE_URL?>assets/js/theme/index-db.js"></script>
<script>
   
document.addEventListener('DOMContentLoaded', function(event) {
  //alert('hi from registration');
  //the event occurred
  //let partner = document.getElementById('partner').value;
  initPartnerProfile();
});

</script>	
 </body>
</html>