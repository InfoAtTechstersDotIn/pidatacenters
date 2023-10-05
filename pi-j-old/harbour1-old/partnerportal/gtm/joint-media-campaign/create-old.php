<?php
  require_once('../../config/constants.php') ; 
	include_once('../../includes/header.php');
?>

<div class="container-fluid page-body-wrapper dashboard-page">
<?php
	include_once('../../includes/sidebar.php');
?>

<div class="main-panel">
  <div class="content-wrapper">     
    <div class="row page-title-header">
        <div class="col-12">
          <div class="page-header">
            <h4 class="page-title">Joint Media Campaign Request</h4>
          </div>
        </div>
    </div>

<!--    **************************  -->  
    
    <div class="row">
      <div class="col-sm-12">
      <div class="buttons-wrap mb-2" style="text-align:right;">
        <!-- <a href="<?=BASE_URL?>gtm/fund-requests/" class="btn btn-danger mb-2">Back</a> -->

        <a href="javascript:history.back()" >
          <button type="button" class="btn btn-icons btn-rounded btn-danger" title="VIEW" style="cursor: pointer;">
              <i class="mdi mdi-arrow-left" style="
                  font-size: 24px;
                  display: inline-block;
                  line-height: 20px;
                  margin-left: -2px;cursor: pointer;"></i>
          </button>
        </a>
      </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <form id="frm-gtm-media-campaign-req" class="gtm-forms" enctype="multipart/form-data">
              <div class="row">
                <div class="form-group col-md-4 col-sm-12">
                  <label for="fProjectName" class="required">Project Name </label>
                  <input type="text" class="form-control" id="fProjectName" name="gtm_proj_name" required />
                </div>
                <div class="form-group col-md-4 col-sm-12">
                  <label for=fundproduct" class="required">Select Product / Service</label>
                  <select class="form-control mb-2" id="fundproduct" name="gtm_mcampaign_products" onchange="triggerOnChange()" required>
                    <option value="Cloud Services">Cloud Services</option>
                    <option value="Datacenter Services (Colocation)">Datacenter Services (Colocation)</option>
                    <option value="Managed Services">Managed Services</option>
                    <option value="Other">Other</option>
                  </select>
                  <input type="text" id="prod-other" name="gtm_mcampaign_prod_other" class="form-control hide" />
                </div>
                <div class="form-group col-md-4 col-sm-12">
                  <label for="fproj-cost" class="required">Total Estimate Project Cost</label>
                  <input type="number" class="form-control" id="fproj-cost" name="gtm_mcampaign_proj_cost"  min="0" step="any" required>
                  
                  <input id="fileInput" name="budget_plan_doc"  type="file" style="visibility: hidden; width: 1px; height: 1px" />
                  <a id="lnk-file-upload" href="javascript:void(0)" >Upload budget plan document</a>
                  <div><span id="spnFilePath" class="clear-on-form-reset"></span></div>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-4 col-sm-12">
                  <label for="fobjective" class="required">Objective</label>
                  <textarea class="form-control" id="fobjective" name="gtm_mcampaign_objective"></textarea>
                </div>
                <div class="form-group col-md-4 col-sm-12">
                  <label for="ftarget-mrket" class="required">Target Market</label>
                  <textarea class="form-control" id="ftarget-market" name="gtm_mcampaign_market"></textarea>
                </div>
                <div class="form-group col-md-4 col-sm-12">
                  <label for="fpart-ownership" class="required">Partner's Ownership</label>
                  <textarea class="form-control" id="fpart-ownership" name="gtm_mcampaign_part_ownership"></textarea>
                </div>
                
              </div>
              <div class="row">
                <div class="form-group col-md-4 col-sm-12">
                  <label for="fexisting-sponsors" class="required">Existing Sponsors</label>
                  <textarea class="form-control" id="fexisting-sponsors" name="gtm_mcampaign_sponsors"></textarea>
                </div>
                <div class="form-group col-md-4 col-sm-12">
                  <label for="fspon-deliverables" class="required">Existing Sponsor Deliverables</label>
                  <textarea class="form-control" id="fspon-deliverables" name="gtm_mcampaign_spon_deliverables"></textarea>
                </div>
                <div class="form-group col-md-4 col-sm-12">
                  <label for="fpi-deliverables" class="required">Deliverables For Pi</label>
                  <textarea class="form-control" id="fpi-deliverables" name="gmt_mcampaign_pi_deliverables"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-4 col-sm-12">
                  <label for="ffund-requested">GTM Fund Requested to Pi (In INR Lakhs) </label>
                  <input type="number" class="form-control" id="ffund-requested" name="gtm_mcampaign_fund_requested" >
                </div>

                <div class="form-group col-md-4 col-sm-12">
                  <label for="fcomments" class="required">Additional Comments</label>
                  <textarea class="form-control" id="fcomments" name="gtm_mcampaign_comments"></textarea>
                </div>
              </div>

              <div class="row">
                <h5 class="grid-margin text-primary" style="padding-left: 16px; font-size: 14px;">Executive Contact For The Campaign:</h5>
              </div>
              <div class="row">
                <div class="form-group col-md-3 col-sm-12">
                  <label for="fExecName" class="required">Name</label>
                  <input type="text" class="form-control" id="fExecName" name="gtm_mcampaign_exe_name" required />
                </div>
                <div class="form-group col-md-3 col-sm-12">
                  <label for="fExecEmail" class="required">Email ID</label>
                  <input type="email" class="form-control" id="fExecEmail" name="gtm_mcampaign_exe_email" required />
                </div>
                  <div class="form-group col-md-3 col-sm-12">
                  <label for="fExecMob" class="required">Mobile Number</label>
                  <input type="number" class="form-control" id="fExecMob" name="gtm_mcampaign_exe_mob" required>
                </div>
                <div class="form-group col-md-3 col-sm-12">
                  <label for="fExecDesig" class="required">Designation</label>
                  <input type="text" class="form-control" id="fExecDesig" name="gtm_mcampaign_exe_desig" required>
                </div>
              </div>
                
              <div class="row">
                <h5 class="grid-margin text-primary" style="padding-left: 16px; font-size: 14px;">Marketing Contact For The Campaign:</h5>
              </div>
              <div class="row">
                <div class="form-group col-md-4 col-sm-12">
                  <label for="fMarkName" class="required">Name</label>
                  <input type="text" class="form-control" id="fMarkName" name="gtm_mcampaign_mark_name" required>
                </div>
                <div class="form-group col-md-4 col-sm-12">
                  <label for="fMarkEmail" class="required">Email ID</label>
                  <input type="email" class="form-control " id="fMarkEmail" name="gtm_mcampaign_mark_email" required>
                </div>
                  <div class="form-group col-md-4 col-sm-12">
                  <label for="fMarkMob" class="required">Mobile Number</label>
                  <input type="number" class="form-control" id="fMarkMob" name="gtm_mcampaign_mark_mob" required>
                </div>
              </div>
              <div class="row">
                <h5 class="grid-margin text-primary" style="padding-left: 16px; font-size: 14px;">Success Metrics:</h5>
              </div>
              <!-- <div> -->
              <div class="row">
                <div class="form-group col-md-6 col-sm-12">
                  <label for="fparam" class="required">Enter Success Parameters</label>
                  <textarea class="form-control" id="fparam" name="gtm_mcampaign_success_params" required></textarea>
                </div>
                <div class="form-group col-md-6 col-sm-12">
                  <label for="fmetric" class="required">Enter Success Metrics</label>
                  <textarea class="form-control" id="fmetric" name="gtm_mcampaign_success_metrics" required></textarea>
                </div>
              </div>

              <div class="row">
                <h5 class="grid-margin text-primary" style="padding-left: 16px; font-size: 14px;">Target Media Houses:</h5>
              </div>
              <div class="row">
                <div class="form-group col-md-6 col-sm-12">
                  <label for="fmed-house-online" class="required">Online</label>
                  <textarea class="form-control" id="fmed-house-online" name="gtm_mcampaign_media_online" reqquired></textarea>
                </div>
                <div class="form-group col-md-6 col-sm-12">
                  <label for="fmed-house-offline" class="required">Offline</label>
                  <textarea class="form-control" id="fmed-house-offline" name="gtm_mcampaign_media_offline" required></textarea>
                </div>
              </div>

              <div class="buttons-wrap" style="text-align:right;">
                <a href="javascript:history.back();" class="mb-2">
                  <button type="button" class="btn btn-danger">Back</button>
                </a>
                
                <button type="submit" class="btn btn-success mr-2">Submit</button>
                <span class="btn btn-light btn-cancel">Cancel</span>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>  

<?php
  include_once('../../includes/footer.php');
?>  
<script>
  document.addEventListener('DOMContentLoaded', function(event) {
    triggerOnChange();
  });

  function triggerOnChange(){
      //alert(document.getElementById('je-product').value);
    chkProdValue(document.getElementById('fundproduct').value);
  }
  
  window.onload = function () {
    var btn = document.getElementById("lnk-file-upload");
    var fileupload = document.getElementById('fileInput');
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