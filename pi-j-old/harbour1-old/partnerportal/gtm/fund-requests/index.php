<?php
  require_once('../../config/constants.php') ; 
  include_once('../../includes/header.php');
?>
<div class="container-fluid page-body-wrapper" id="page-gtm-fr">
<?php
  include_once('../../includes/sidebar.php');
?>

<div class="main-panel">
  <div class="content-wrapper">

        <!-- start -->         
    <div class="row page-title-header">
      <div class="col-12">
        <div class="page-header">
          <h4 class="page-title">GTM Fund Requests</h4>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12 col-md-12 grid-margin text-right mr-20" style="padding-right: 60px">
          <a href="javascript:history.back()" >
            <button type="button" class="btn btn-icons btn-rounded btn-danger" title="VIEW" style="cursor: pointer;">
                <i class="mdi mdi-arrow-left" style="
                    font-size: 24px;
                    display: inline-block;
                    line-height: 20px;
                    margin-left: -2px;cursor: pointer;"></i>
            </button>
          </a>
          <a href="./create">
            <button type="button" class="btn btn-icons btn-rounded btn-success" title="VIEW" style="cursor: pointer;">
                <i class="mdi mdi-plus" style="
                    font-size: 24px;
                    display: inline-block;
                    line-height: 20px;
                    margin-left: -2px;cursor: pointer;"></i>
            </button>
          </a>
      </div>
    </div>

    <div class="row  col-md-12 col-sm-12 col-12 grid-margin">
      <div class="card" style="width:100%;">
        <div class="card-body">
          <div class="row">
            <div class="col-md-12 col-12 table-responsive">
              <table id="gtm-fund-requests" class="table table table-hover table-bordered" width="100%">
                <thead>
                  <tr class="table-row">
                    <th class="th-sm" colspan="2">Action</th>
                    <th class="th-sm">Project Name</th>
                    <th class="th-sm">Product/Service</th>
                    <th class="th-sm" style="line-height:15px;">Total Estimated Project Cost<br/><span style="font-size:10px;">( in lakhs )</span></th>
                    <th class="th-sm">Target Market</th>
                    <th class="th-sm">GTM Fund Requested to Pi<br/><span style="font-size:10px;">( in lakhs )</span></th>
                  </tr>
                </thead>
                <tbody>
                
                </tbody>
              </table>
            </div>            
          </div>
        </div>    
      </div>
    </div>
<div>

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
            <div style="float:right;" class="cta-permissions hide">
              <button type="button" class="btn btn-success mr-2 btn-approve" style="cursor: pointer;">Approve</button>
              <button type="button" class="btn btn-danger mr-2 btn-reject" style="cursor: pointer;">Reject</button> 
            </div>
          </div>
          <form class="forms-sample">
            <input type="hidden" id="row-cnt" value="" />
            <div class="card mt-5 mb-5">
              <div class="card-header" style="padding: 10px 20px!important;">Event Fund Request</div>
              <div class="card-body">
                <div class="row mt-2 mb-2">
                  <div class="col-xs-12 col-md-4">
                    <label for="fProjectName">Project Name</label>
                    <input type="text" class="form-control" id="fProjectName" placeholder="Project Name" disabled="">
                  </div>
                  <div class="col-xs-12 col-md-4">
                    <label for="fundproduct">Product/Service</label>
                    <input type="text" class="form-control" id="fundproduct" placeholder="Product/Service" disabled="">
                    <input type="text" class="form-control hide mt-2" id="prod-other-view" placeholder="Product/Service" disabled="">
                  </div>
                
                  <div class="col-xs-12 col-md-4">
                    <label for="fproj-cost">Total Estimate Project Cost (In INR Lakhs)</label>
                    <input type="number" class="form-control" id="fproj-cost" placeholder="Total Estimated Event Cost" disabled="">
                    <span id="budget-plan-doc-wrap" class="hide">Budget Plan: <a id="fr-budget-plan-doc" href="" download></a></span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <label for="fobjective">Objective</label>
                    <textarea rows="5" class="form-control" id="fobjective" disabled=""></textarea>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <label for="ftarget-market">Target Market</label>
                    <textarea rows="5" class="form-control" id="ftarget-market" disabled=""></textarea>
                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <label for="fpart-ownership">Partner's Ownership</label>
                    <textarea rows="5" class="form-control" id="fpart-ownership" disabled=""></textarea>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <label for="fexisting-sponsors">Existing Sponsors</label>
                    <textarea rows="5" class="form-control" id="fexisting-sponsors" disabled=""></textarea>
                  </div>
                  
                </div>

                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <label for="fspon-deliverables">Existing Sponsor Deliverables</label>
                    <textarea rows="5" class="form-control" id="fspon-deliverables" disabled=""></textarea>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <label for="fpi-deliverables">Deliverables For Pi</label>
                    <textarea rows="5" class="form-control" id="fpi-deliverables" disabled=""></textarea>
                  </div>
                  
                </div>

                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <label for="ffund-requested">GTM Fund Requested to Pi (In INR Lakhs) </label>
                    <input type="number" class="form-control" id="ffund-requested" disabled="" />
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <label for="fcomments">Additional Comments</label>
                    <textarea rows="5" class="form-control" id="fcomments" disabled=""></textarea>
                  </div>
                </div>

              </div>
            </div>
          
            <div class="card mt-5 mb-5">
              <div class="card-header"  style="padding: 10px 20px!important;">Executive Contact For The Campaign:</div>
              <div class="card-body">
                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <label for="fExecName">Name</label>
                    <input type="text" class="form-control" id="fExecName" disabled="" />
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <label for="fExecEmail">Email ID</label>
                    <input type="email" class="form-control" id="fExecEmail" disabled="" />
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <label for="fExecMob">Mobile Number</label>
                    <input type="text" class="form-control" id="fExecMob" disabled="" />
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <label for="fExecDesig">Designation</label>
                    <input type="text" class="form-control" id="fExecDesig" disabled="" />
                  </div>
                </div>
              </div>
            </div>

            <div class="card mt-5 mb-5">
              <div class="card-header"  style="padding: 10px 20px!important;">Marketing Contact For The Campaign:</div>
              <div class="card-body">
                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <label for="fMarkName">Name</label>
                    <input type="text" class="form-control" id="fMarkName" disabled="" />
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <label for="fMarkEmail">Email ID</label>
                    <input type="email" class="form-control" id="fMarkEmail" disabled="" />
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <label for="fMarkMob">Mobile Number</label>
                    <input type="text" class="form-control" id="fMarkMob" disabled="" />
                  </div>
                  
                </div>
              </div>
            </div>

            <div class="card mt-5 mb-5">
              <div class="card-header"  style="padding: 10px 20px!important;">Success Metrics:</div>
              <div class="card-body">
                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <label for="fparam">Enter Success Parameters</label>
                    <textarea rows="5" class="form-control" id="fparam" disabled="" ></textarea>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <label for="fmetric">Enter Success Metrics</label>
                    <textarea rows="5" class="form-control" id="fmetric" disabled="" ></textarea>
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

<div class="db-popup hide" id="editpop">
  <div class="pop-cont">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="header-controls clearfix" style="text-align: right; position:relative;padding:10px;">
          <span class="btn btn-close" style="float:right;width:20px;height:20px;">X</span>
        </div>
        <div class="card-body">
          <div class="card-title clearfix">
            <h4 style="float:left; width:50%;font-size:14px;font-weight:500;">Edit</h4>
            
          </div>
          <form id="frm-fund-request-edit" class="forms-sample">
            <input type="hidden" name="fund_req_id" id="fund-req-id" value="" />
            <div class="card mt-5 mb-5">
              <div class="card-header" style="padding: 10px 20px!important;">Event Fund Request</div>
              <div class="card-body">
                <div class="row mt-2 mb-2">
                  <div class="col-xs-12 col-md-4">
                    <label for="fProjectName">Project Name</label>
                    <input type="text" class="form-control" id="fProjectName" placeholder="Project Name" name="gtm_proj_name" required>
                  </div>
                  <div class="col-xs-12 col-md-4">
                    <label for="fundproduct">Product/Service</label>
                    <!-- <input type="text" class="form-control" id="fundproduct" placeholder="Product/Service" name="gtm_fundreq_products" required> -->
                    <select class="form-control mb-2" id="fundproduct" name="gtm_fundreq_products" onchange="triggerOnChange()" required>
                      <option value="Cloud Services">Cloud Services</option>
                      <option value="Datacenter Services (Colocation)">Datacenter Services (Colocation)</option>
                      <option value="Managed Services">Managed Services</option>
                      <option value="Other">Other</option>
                    </select>
                    <input type="text" id="prod-other" name="gtm_fundreq_prod_other" class="form-control hide" />
                  </div>
                
                  <div class="col-xs-12 col-md-4">
                    <label for="fproj-cost">Total Estimate Project Cost (In INR Lakhs)</label>
                    <input type="number" class="form-control" id="fproj-cost" placeholder="Total Estimated Event Cost" name="gtm_fundreq_proj_cost" min="0" step="any" required>
                    
                    <input id="fileInput" name="budget_plan_doc" type="file" style="visibility: hidden; width: 1px; height: 1px" />
                    <a id="lnk-file-upload" href="javascript:void(0)" >Upload budget plan document</a><small>(Files must be less than 2MB in size)</small>
                    <div><span id="spnFilePath" class="clear-on-form-reset"></span></div>
                    <div><span id="budget-plan-doc-wrap" class="hide">Budget Plan: <a id="fr-budget-plan-doc" href="" download></a></span></div>
                    
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <label for="fobjective">Objective</label>
                    <textarea rows="5" class="form-control" id="fobjective" name="gtm_fundreq_objective" required></textarea>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <label for="ftarget-market">Target Market</label>
                    <textarea rows="5" class="form-control" id="ftarget-market" name="gtm_fundreq_market" required></textarea>
                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <label for="fpart-ownership">Partner's Ownership</label>
                    <textarea rows="5" class="form-control" id="fpart-ownership" name="gtm_fundreq_part_ownership" required></textarea>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <label for="fexisting-sponsors">Existing Sponsors</label>
                    <textarea rows="5" class="form-control" id="fexisting-sponsors" name="gtm_fundreq_sponsers" required></textarea>
                  </div>
                  
                </div>

                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <label for="fspon-deliverables">Existing Sponsor Deliverables</label>
                    <textarea rows="5" class="form-control" id="fspon-deliverables" name="gtm_fundreq_spon_deliverables" required></textarea>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <label for="fpi-deliverables">Deliverables For Pi</label>
                    <textarea rows="5" class="form-control" id="fpi-deliverables" name="gmt_fundreq_pi_deliverables" required></textarea>
                  </div>
                  
                </div>

                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <label for="ffund-requested">GTM Fund Requested to Pi (In INR Lakhs) </label>
                    <input type="number" class="form-control" id="ffund-requested" name="gtm_fundreq_fund_requested"  />
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <label for="fcomments">Additional Comments</label>
                    <textarea rows="5" class="form-control" id="fcomments" name="gtm_fundreq_comments" required></textarea>
                  </div>
                </div>

              </div>
            </div>
          
            <div class="card mt-5 mb-5">
              <div class="card-header"  style="padding: 10px 20px!important;">Executive Contact For The Campaign:</div>
              <div class="card-body">
                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <label for="fExecName">Name</label>
                    <input type="text" class="form-control" id="fExecName" name="gtm_fundreq_exe_name" required />
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <label for="fExecEmail">Email ID</label>
                    <input type="email" class="form-control" id="fExecEmail" name="gtm_fundreq_exe_email" required />
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <label for="fExecMob">Mobile Number</label>
                    <input type="text" class="form-control" id="fExecMob" name="gtm_fundreq_exe_mob" required />
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <label for="fExecDesig">Designation</label>
                    <input type="text" class="form-control" id="fExecDesig" name="gtm_fundreq_exe_desig" required />
                  </div>
                </div>
              </div>
            </div>

            <div class="card mt-5 mb-5">
              <div class="card-header"  style="padding: 10px 20px!important;">Marketing Contact For The Campaign:</div>
              <div class="card-body">
                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <label for="fMarkName">Name</label>
                    <input type="text" class="form-control" id="fMarkName" name="gtm_fundreq_mark_name" required />
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <label for="fMarkEmail">Email ID</label>
                    <input type="email" class="form-control" id="fMarkEmail" name="gtm_fundreq_mark_email" required />
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <label for="fMarkMob">Mobile Number</label>
                    <input type="text" class="form-control" id="fMarkMob" name="gtm_fundreq_mark_mob" required />
                  </div>
                  
                </div>
              </div>
            </div>

            <div class="card mt-5 mb-5">
              <div class="card-header"  style="padding: 10px 20px!important;">Success Metrics:</div>
              <div class="card-body">
                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <label for="fparam">Enter Success Parameters</label>
                    <textarea rows="5" class="form-control" id="fparam" name="gtm_fundreq_success_params" required ></textarea>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <label for="fmetric">Enter Success Metrics</label>
                    <textarea rows="5" class="form-control" id="fmetric" name="gtm_fundreq_success_metrics" required ></textarea>
                  </div>
                </div>
                
              </div>
            </div>
            <button type="submit" class="btn btn-success mr-2">Submit</button>
            <button type="button" class="btn btn-light btn-close" style="cursor: pointer;" >Close</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="db-popup hide" id="fr-rejectpop">
  <div class="pop-cont">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Rejection Confirmation ( For internal use only )</h4>
          <form class="forms-sample" id="frm-fr-reject-conf">
            <input type="hidden" name="frid" id="frid" value="" />
            <div class="row">
              <div class="form-group col-md-12 col-sm-12">
                <label for="fr-rejection-msg">Reason for rejection</label>
                <textarea class="form-control" id="fr-rejection-msg" name="fr_rejection_msg" rows="2"></textarea>
              </div>      
            </div>
            <button type="submit" class="btn btn-danger mr-2" style="cursor: pointer;">Confirm Rejection</button>
            <button type="button" class="btn btn-light btn-close" style="cursor: pointer;" >Close</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


<?php
  include_once('../../includes/footer.php');
?>  
<!-- <script src="<?=BASE_URL?>assets/vendors/jquery/jquery-3.6.0.min.js"></script> -->
<script>
document.addEventListener('DOMContentLoaded', function(event) {
  initGtmFundRequestList(); 
});

function triggerOnChange(){
    //alert(document.getElementById('je-product').value);
  //chkProdValue(document.getElementById('fundproduct').value);
  chkProdValue($('#editpop #fundproduct').val());
}

window.onload = function () {
    var btn = document.getElementById("lnk-file-upload");
    var fileupload = document.getElementById('fileInput');
    //var filePath = document.getElementById('je-budget-plan-doc');
    var filePath = document.getElementById('spnFilePath');
    
    btn.addEventListener('click', function(){
      fileupload.click();
    });

    fileupload.addEventListener('change', function() {
      var fileName = fileupload.value.split('\\')[fileupload.value.split('\\').length - 1];
      filePath.innerHTML = "<b>Selected File: </b>" + fileName;
    });
  }


</script>	


  </body>
</html>