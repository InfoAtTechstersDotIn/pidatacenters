<?php
  require_once('../../config/constants.php') ; 
  include_once('../../includes/header.php');
?>
<div class="container-fluid page-body-wrapper" id="page-gtm-je">
<?php
  include_once('../../includes/sidebar.php');
?>

<div class="main-panel">
  <div class="content-wrapper">

        <!-- start -->         
    <div class="row page-title-header">
      <div class="col-12">
        <div class="page-header">
          <h4 class="page-title">GTM Joint Event Requests</h4>
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
              <table id="gtm-je-requests" class="table table table-hover table-bordered" width="100%">
                <thead>
                  <tr class="table-row">
                    <th class="th-sm" colspan="2">Actions</th>
                    <th class="th-sm">Project Name</th>
                    <th class="th-sm">Product/Service</th>
                    <th class="th-sm">Total estimated Project Cost</th>
                    <th class="th-sm">Target Market</th>
                    <!-- <th class="th-sm">GTM Fund Requested to Pi</th> -->
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
          <form class="forms-sample" id="frm-je-review">
            <input type="hidden" id="row-cnt" value="" />
            <div class="card mt-5 mb-5">
              <div class="card-header" style="padding: 10px 20px!important;">Joint Event Request</div>
              <div class="card-body">
                <div class="row mt-2 mb-2">
                  <div class="col-xs-12 col-md-4">
                    <label for="je-event-name" class="required">Event Name </label>
                    <input type="text" class="form-control" id="je-event-name" name="je_event_name" required>
                  </div>
                  <div class="col-xs-12 col-md-4">
                    <label for="eventprod">Product/Service</label>
                    <input type="text" class="form-control" id="je-product" placeholder="Product/Service" disabled="">
                    <input type="text" id="prod-other-edit" name="gtm_je_prod_other" class="form-control hide" disabled=""/>
                  </div>
                
                  <div class="col-xs-12 col-md-4">
                    <label for="event-est-cost">Total Estimated Event Cost</label>
                    <input type="text" class="form-control" id="je-proj-cost" placeholder="Total Estimated Event Cost" disabled="">
                    <span id="budget-plan-doc-wrap" class="hide">Budget Plan: <a id="je-budget-plan-doc" href="" download></a></span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <label for="event-objective">Objective</label>
                    <textarea rows="5" class="form-control" id="je-objective" disabled=""></textarea>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <label for="audience">Target Audience</label>
                    <textarea class="form-control" id="je-audience" name="je_audience" disabled></textarea>
                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <label for="sponcors">Existing Sponsors</label>
                    <textarea rows="5" class="form-control" id="je-existing-sponsors" disabled=""></textarea>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <label for="deliverablesforpartner">Deliverables For Partner</label>
                    <textarea rows="5" class="form-control" id="je-part-deliverables" disabled=""></textarea>
                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <label for="deliverablesforpi">Deliverables For Pi</label>
                    <textarea rows="5" class="form-control" id="je-pi-deliverables" disabled=""></textarea>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <label for="comments">Additional Comments</label>
                    <textarea rows="5" class="form-control" id="je-comments" disabled=""></textarea>
                  </div>
                </div>

              </div>
            </div>
          
            <div class="card mt-5 mb-5">
              <div class="card-header"  style="padding: 10px 20px!important;">Executive Contact For The Campaign:</div>
              <div class="card-body">
                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <label for="exec-name">Name</label>
                    <input type="text" class="form-control" id="je-exec-name" disabled="" />
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <label for="exec-email">Email ID</label>
                    <input type="email" class="form-control" id="je-exec-email" disabled="" />
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <label for="exec-mobile">Mobile Number</label>
                    <input type="text" class="form-control" id="je-exec-mob" disabled="" />
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <label for="exec-desig">Designation</label>
                    <input type="text" class="form-control" id="je-exec-desig" disabled="" />
                  </div>
                </div>
              </div>
            </div>

            <div class="card mt-5 mb-5">
              <div class="card-header"  style="padding: 10px 20px!important;">Marketing Contact For The Campaign:</div>
              <div class="card-body">
                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <label for="mark-name">Name</label>
                    <input type="text" class="form-control" id="je-mark-name" disabled="" />
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <label for="mark-email">Email ID</label>
                    <input type="email" class="form-control" id="je-mark-email" disabled="" />
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <label for="mark-mobile">Mobile Number</label>
                    <input type="text" class="form-control" id="je-mark-mob" disabled="" />
                  </div>
                  
                </div>
              </div>
            </div>

            <div class="card mt-5 mb-5">
              <div class="card-header"  style="padding: 10px 20px!important;">Success Metrics:</div>
              <div class="card-body">
                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <label for="success-param">Enter Parameter</label>
                    <textarea rows="5" class="form-control" id="je-success-params" disabled="" ></textarea>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <label for="success-metric">Enter Metric</label>
                    <textarea rows="5" class="form-control" id="je-success-metrics" disabled="" ></textarea>
                  </div>
                </div>
                
              </div>
            </div>

            <div class="card mt-5 mb-5">
              <div class="card-header"  style="padding: 10px 20px!important;">Event Activities:</div>
              <div class="card-body">
                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <label for="event-loc">Enter Location Covered </label>
                    <textarea rows="5" class="form-control" id="je-loc" disabled="" ></textarea>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <label for="event-social-media">Enter Social Media</label>
                    <textarea rows="5" class="form-control" id="je-social-media" disabled="" ></textarea>
                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <label for="event-print-media">Enter Print Media</label>
                    <textarea rows="5" class="form-control" id="je-print-media" disabled="" ></textarea>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <label for="event-inst-branding">Enter Institutional Branding</label>
                    <textarea rows="5" class="form-control" id="je-inst-branding" disabled="" ></textarea>
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
          <form class="forms-sample" id="frm-je-edit" enctype="multipart/form-data">
            <input type="hidden" id="je-req-id" name="je_req_id" />
            <div class="card mt-5 mb-5">
              <div class="card-header" style="padding: 10px 20px!important;">Joint Event Request</div>
              <div class="card-body">
                <div class="row mt-2 mb-2">
                  <div class="col-xs-12 col-md-4">
                    <label for="je-event-name" class="required">Event Name </label>
                    <input type="text" class="form-control" id="je-event-name"  name="je_event_name" required>
                  </div>
                  <div class="col-xs-12 col-md-4">
                    <label for="eventprod">Product/Service</label>
                    <select class="form-control mb-2" id="je-product" name="gtm_je_products" onchange="triggerOnChange()" required>
                      <option value="Cloud Services">Cloud Services</option>
                      <option value="Datacenter Services (Colocation)">Datacenter Services (Colocation)</option>
                      <option value="Managed Services">Managed Services</option>
                      <option value="Other">Other</option>
                    </select>
                    <input type="text" id="prod-other" name="gtm_je_prod_other" class="form-control hide" />
                  </div>
                
                  <div class="col-xs-12 col-md-4">
                    <label for="event-est-cost">Total Estimated Event Cost</label>
                    <input type="text" class="form-control" id="je-proj-cost" placeholder="Total Estimated Event Cost"  name="je_proj_cost" min="0" step="any" required>
                    <!-- <span id="budget-plan-doc-wrap" class="hide">Budget Plan: <a id="je-budget-plan-doc" href="" download></a></span> -->
                    <input id="fileInput" name="budget_plan_doc" type="file" style="visibility: hidden; width: 1px; height: 1px" />
                    <a id="lnk-file-upload" href="javascript:void(0)" >Upload budget plan document</a><small>(Files must be less than 2MB in size)</small>
                    <div><span id="spnFilePath" class="clear-on-form-reset"></span></div>
                    <div><span id="budget-plan-doc-wrap" class="hide">Budget Plan: <a id="je-budget-plan-doc" href="" download></a></span></div>
                    
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <label for="event-objective">Objective</label>
                    <textarea rows="5" class="form-control" id="je-objective" name="je_objective" required></textarea>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <label for="audience">Target Audience</label>
                    <textarea class="form-control" id="je-audience" name="je_audience" required></textarea>
                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <label for="sponcors">Existing Sponsors</label>
                    <textarea rows="5" class="form-control" id="je-existing-sponsors" name="je_existing_sponsors" required></textarea>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <label for="deliverablesforpartner">Deliverables For Partner</label>
                    <textarea rows="5" class="form-control" id="je-part-deliverables"  name="je_part_deliverables" required></textarea>
                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <label for="deliverablesforpi">Deliverables For Pi</label>
                    <textarea rows="5" class="form-control" id="je-pi-deliverables" name="je_pi_deliverables"  required></textarea>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <label for="comments">Additional Comments</label>
                    <textarea rows="5" class="form-control" id="je-comments" name="je_comments" required></textarea>
                  </div>
                </div>

              </div>
            </div>
          
            <div class="card mt-5 mb-5">
              <div class="card-header"  style="padding: 10px 20px!important;">Executive Contact For The Campaign:</div>
              <div class="card-body">
                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <label for="exec-name">Name</label>
                    <input type="text" class="form-control" id="je-exec-name"  name="je_exec_name" required />
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <label for="exec-email">Email ID</label>
                    <input type="email" class="form-control" id="je-exec-email" name="je_exec_email" required />
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <label for="exec-mobile">Mobile Number</label>
                    <input type="text" class="form-control" id="je-exec-mob"  name="je_exec_mob" required />
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <label for="exec-desig">Designation</label>
                    <input type="text" class="form-control" id="je-exec-desig" name="je_exec_desig" required />
                  </div>
                </div>
              </div>
            </div>

            <div class="card mt-5 mb-5">
              <div class="card-header"  style="padding: 10px 20px!important;">Marketing Contact For The Campaign:</div>
              <div class="card-body">
                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <label for="mark-name">Name</label>
                    <input type="text" class="form-control" id="je-mark-name" name="je_mark_name" required />
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <label for="mark-email">Email ID</label>
                    <input type="email" class="form-control" id="je-mark-email" name="je_mark_email" required />
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <label for="mark-mobile">Mobile Number</label>
                    <input type="text" class="form-control" id="je-mark-mob" name="je_mark_mob" required />
                  </div>
                  
                </div>
              </div>
            </div>

            <div class="card mt-5 mb-5">
              <div class="card-header"  style="padding: 10px 20px!important;">Success Metrics:</div>
              <div class="card-body">
                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <label for="success-param">Enter Parameter</label>
                    <textarea rows="5" class="form-control" id="je-success-params" name="je_success_params" required ></textarea>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <label for="success-metric">Enter Metric</label>
                    <textarea rows="5" class="form-control" id="je-success-metrics" name="je_success_metrics"  required ></textarea>
                  </div>
                </div>
                
              </div>
            </div>

            <div class="card mt-5 mb-5">
              <div class="card-header"  style="padding: 10px 20px!important;">Event Activities:</div>
              <div class="card-body">
                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <label for="event-loc">Enter Location Covered </label>
                    <textarea rows="5" class="form-control" id="je-loc"  name="je_loc" required ></textarea>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <label for="event-social-media">Enter Social Media</label>
                    <textarea rows="5" class="form-control" id="je-social-media" name="je_social_media" required ></textarea>
                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <label for="event-print-media">Enter Print Media</label>
                    <textarea rows="5" class="form-control" id="je-print-media" name="je_print_media" required></textarea>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <label for="event-inst-branding">Enter Institutional Branding</label>
                    <textarea rows="5" class="form-control" id="je-inst-branding" name="je_inst_branding" required ></textarea>
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

<div class="db-popup hide" id="je-rejectpop">
  <div class="pop-cont">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Rejection Confirmation ( For internal use only )</h4>
          <form class="forms-sample" id="frm-je-reject-conf">
            <input type="hidden" name="jeid" id="jeid" value="" />
            <div class="row">
              <div class="form-group col-md-12 col-sm-12">
                <label for="je-rejection-msg">Reason for rejection</label>
                <textarea class="form-control" id="je-rejection-msg" name="je_rejection_msg" rows="2"></textarea>
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
  initGTMJointEventRequestList();
 
});

function triggerOnChange(){
// alert('triggerOnChange called '+document.getElementById('je-product-edit').value);
  chkProdValue($('#editpop #je-product').val());
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