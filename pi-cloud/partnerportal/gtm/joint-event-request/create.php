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
            <h4 class="page-title">GTM Joint Event Request</h4>
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
                    <form class="forms-fund-req" id="frm-joint-event-req" enctype="multipart/data-form">
                        <div class="row">
                            <div class="form-group col-md-4 col-sm-12">
                                <label for="je-event-name" class="required">Event Name </label>
                                <input type="text" class="form-control" id="je-event-name" name="je_event_name" required>
                            </div>
                            <div class="form-group col-md-4 col-sm-12">
                                <label for="je-product" class="required">Select Product / Service</label>
                                <select class="form-control mb-2" id="je-product" name="gtm_je_products" onchange="triggerOnChange()" required>
                                    <option value="Cloud Services">Cloud Services</option>
                                    <option value="Datacenter Services (Colocation)">Datacenter Services (Colocation)</option>
                                    <option value="Managed Services">Managed Services</option>
                                    <option value="Other">Other</option>
                                </select>
                                <input type="text" id="prod-other" name="gtm_je_prod_other" class="form-control hide" />
                            </div>
                            <div class="form-group col-md-4 col-sm-12">
                                <label for="je-proj-cost" class="required">Total Estimate Project Cost (In INR Lakhs) </label>
                                <input type="number" class="form-control" id="je-proj-cost" name="je_proj_cost" min="0" step="any" required>

                                <input id="fileInput" name="budget_plan_doc" type="file" style="visibility: hidden; width: 1px; height: 1px" />
                                <a id="lnk-file-upload" href="javascript:void(0)" >Upload budget plan document</a><small>(Files must be less than 2MB in size)</small>
                                <div><span id="spnFilePath" class="clear-on-form-reset"></span></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4 col-sm-12">
                                <label for="je-objective" class="required">Objective</label>
                                <textarea class="form-control" id="je-objective" name="je_objective" required></textarea>
                            </div>
                            <div class="form-group col-md-4 col-sm-12">
                                <label for="je-audience" class="required">Target Audience</label>
                                <textarea class="form-control" id="je-audience" name="je_audience" required></textarea>
                            </div>
                            <div class="form-group col-md-4 col-sm-12">
                                <label for="je-existing-sponsors" class="required">Existing Sponsors</label>
                                <textarea class="form-control" id="je-existing-sponsors" name="je_existing_sponsors" required></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4 col-sm-12">
                                <label for="je-part-deliverables" class="required">Deliverables For Partner</label>
                                <textarea class="form-control" id="je-part-deliverables" name="je_part_deliverables" required></textarea>
                            </div>
                            <div class="form-group col-md-4 col-sm-12">
                                <label for="je-pi-deliverables" class="required">Deliverables For Pi</label>
                                <textarea class="form-control" id="je-pi-deliverables" name="je_pi_deliverables" required></textarea>
                            </div>
                            <div class="form-group col-md-4 col-sm-12">
                                <label for="je-comments" class="required">Additional Comments</label>
                                <textarea class="form-control" id="je-comments" name="je_comments" required></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <h5 class="grid-margin text-primary" style="padding-left: 16px; font-size: 14px;">Executive Contact For The Campaign:</h5>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-3 col-sm-12">
                                <label for="je-exec-name" class="required">Name</label>
                                <input type="text" class="form-control" id="je-exec-name" name="je_exec_name" required>
                            </div>
                            <div class="form-group col-md-3 col-sm-12">
                                <label for="Eamil Id" class="required">Email ID</label>
                                <input type="email" class="form-control" id="je-exec-email" name="je_exec_email" required >
                            </div>
                            <div class="form-group col-md-3 col-sm-12">
                                <label for="je-exec-mob" class="required">Mobile Number</label>
                                <input type="number" class="form-control " id="je-exec-mob" name="je_exec_mob" required>
                            </div>
                            <div class="form-group col-md-3 col-sm-12">
                                <label for="je-exec-desig" class="required">Designation</label>
                                <input type="text" class="form-control calVal" id="je-exec-desig" name="je_exec_desig" required>
                            </div>
                        </div>
                    
                        <div class="row">
                            <h5 class="grid-margin text-primary" style="padding-left: 16px; font-size: 14px;">Marketing Contact For The Campaign:</h5>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4 col-sm-12">
                                <label for="je-mark-name" class="required">Name</label>
                                <input type="text" class="form-control" id="je-mark-name" name="je_mark_name" required>
                            </div>
                            <div class="form-group col-md-4 col-sm-12">
                                <label for="je-mark-email" class="required">Email ID</label>
                                <input type="email" class="form-control" id="je-mark-email" name="je_mark_email" required >
                            </div>
                            <div class="form-group col-md-4 col-sm-12">
                                <label for="je-mark-mob" class="required">Mobile Number</label>
                                <input type="number" class="form-control" id="je-mark-mob" name="je_mark_mob" required >
                            </div>
                        </div>
                        <div class="row">
                            <h5 class="grid-margin text-primary" style="padding-left: 16px; font-size: 14px;">Success Metrics:</h5>
                         </div>
                        <div class="row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="je-success-params" class="required">Enter Success Parameters</label>
                                <textarea class="form-control" id="je-success-params" name="je_success_params" required></textarea>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="je-success-metrics" class="required">Enter Success Metrics</label>
                                <textarea class="form-control" id="je-success-metrics" name="je_success_metrics" required></textarea>
                            </div> 
                        </div>
                        <div class="row">
                            <h5 class="grid-margin text-primary" style="padding-left: 16px; font-size: 14px;">Event Activities:</h5>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-3 col-sm-12">
                                <label for="je-loc" class="required">Enter Location Covered  </label>
                                <textarea class="form-control" id="je-loc" name="je_loc" required></textarea>
                            </div>
                            <div class="form-group col-md-3 col-sm-12">
                                <label for="je-social-media" class="required">Enter Social Media </label>
                                <textarea class="form-control" id="je-social-media" name="je_social_media" required></textarea>
                            </div>
                            <div class="form-group col-md-3 col-sm-12">
                                <label for="je-print-media" class="required">Enter Print Media   </label>
                                <textarea class="form-control" id="je-print-media" name="je_print_media" required></textarea>
                            </div>
                            <div class="form-group col-md-3 col-sm-12">
                                <label for="je-inst-branding" class="required">Enter Institutional Branding </label>
                                <textarea class="form-control" id="je-inst-branding" name="je_inst_branding" required> </textarea>
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
    chkProdValue(document.getElementById('je-product').value);
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