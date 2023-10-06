<?php
  require_once('../../config/constants.php') ; 
  include_once('../../includes/header.php');
?>
<div class="container-fluid page-body-wrapper" id="page-gtm-media-collateral">
<?php
  include_once('../../includes/sidebar.php');
?>

<div class="main-panel" >
  <div class="content-wrapper">

        <!-- start -->         
    <div class="row page-title-header">
      <div class="col-12">
        <div class="page-header">
          <h4 class="page-title">Joint Media Collateral Requests</h4>
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
              <table id="gtm-media-collateral-requests" class="table table table-hover table-bordered" width="100%">
                <thead>
                  <tr class="table-row">
                    <th class="th-sm" colspan="2">Action</th>
                    <th class="th-sm">Event Name</th>
                    <th class="th-sm">Collateral Name</th>
                    <th class="th-sm">Collateral Type</th>
                    <th class="th-sm">Products/Services</th>
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
            <div style="float:right;"class="cta-permissions hide">
              <button type="button" class="btn btn-success mr-2 btn-approve" style="cursor: pointer;">Approve</button>
              <button type="button" class="btn btn-danger mr-2 btn-reject" style="cursor: pointer;">Reject</button> 
            </div>
          </div>
          <form class="forms-sample">
            <input type="hidden" id="row-cnt" value="" />
            <div class="card mt-5 mb-5">
              <div class="card-header" style="padding: 10px 20px!important;">Joint Media Collateral Request</div>
              <div class="card-body">
                <div class="row mt-2 mb-2">
                  <div class="col-xs-12 col-md-4">
                    <label for="fevent-name">Event Name</label>
                    <input type="text" class="form-control" id="fevent-name" placeholder="Event Name" disabled="">
                  </div>
                  <div class="col-xs-12 col-md-4">
                    <label for="fcollateral-name">Collateral Name</label>
                    <input type="text" class="form-control" id="fcollateral-name" placeholder="Collateral Name" disabled="">
                  </div>
                  <div class="col-xs-12 col-md-4">
                    <label for="fcollateral-product">Product/Service</label>
                    <input type="text" class="form-control mb-2" id="fcollateral-product" placeholder="Product/Service" disabled="">
                    <input type="text" id="prod-other-view" name="gtm_fundreq_prod_other" class="form-control hide" />
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <label for="fcollateral-types">Collateral Type(s)</label>
                    <textarea rows="5" class="form-control" id="fcollateral-types" disabled=""></textarea>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <label for="fobjective">Objective</label>
                    <textarea rows="5" class="form-control" id="fobjective" disabled=""></textarea>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <label for="ftarget-audience">Target Audience</label>
                    <textarea rows="5" class="form-control" id="ftarget-audience" disabled=""></textarea>
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
          <form class="forms-sample" id="frm-jm-collateral-edit">
            <input type="hidden" name="jm_colatteral_req_id" id="jm-collateral-req-id" value="" />
            <div class="card mt-5 mb-5">
              <div class="card-header" style="padding: 10px 20px!important;">Joint Media Collateral Request</div>
              <div class="card-body">
                <div class="row mt-2 mb-2">
                  <div class="col-xs-12 col-md-4">
                    <label for="fevent-name">Event Name</label>
                    <input type="text" class="form-control" id="fevent-name"  name="gtm_event_name" placeholder="Event Name" required>
                  </div>
                  <div class="col-xs-12 col-md-4">
                    <label for="fcollateral-name">Collateral Name</label>
                    <input type="text" class="form-control" id="fcollateral-name" name="gtm_collateral_name" placeholder="Collateral Name" required>
                  </div>
                  <div class="col-xs-12 col-md-4">
                    <label for="fcollateral-product" class="required" >Select Product / Service</label>
                    <select class="form-control mb-2" id="fcollateral-product" name="gtm_collateral_product" onchange="triggerOnChange()" required>
                      <option value="Cloud Services">Cloud Services</option>
                      <option value="Datacenter Services (Colocation)">Datacenter Services (Colocation)</option>
                      <option value="Managed Services">Managed Services</option>
                      <option value="Other">Other</option>
                    </select>
                    <input type="text" id="prod-other" name="gtm_collateral_prod_other" class="form-control hide" />
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <label for="fcollateral-types" class="required" >Collateral Type</label>
                    <select class="form-control " id="fcollateral-types" name="gtm_collateral_types[]" multiple required>
                      <option value="Brochure">Brochure</option>
                      <option value="Flyer">Flyer (Single Pager)</option>
                      <option value="EDM">EDM</option>
                    </select>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <label for="fobjective">Objective</label>
                    <textarea rows="5" class="form-control" id="fobjective"  name="gtm_collateral_objective" required></textarea>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <label for="ftarget-audience">Target Audience</label>
                    <textarea rows="5" class="form-control" id="ftarget-audience"  name="gtm_target_audience" required></textarea>
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
<div class="db-popup hide" id="collateral-rejectpop">
        <div class="pop-cont">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Rejection Confirmation ( For internal use only )</h4>
                <form class="forms-sample" id="frm-collateral-reject-conf">
                  <input type="hidden" name="collateralid" id="collateralid" value="" />
                  <div class="row">
                    <div class="form-group col-md-12 col-sm-12">
                      <label for="collateral-rejection-msg">Reason for rejection</label>
                      <textarea class="form-control" id="collateral-rejection-msg" name="collateral_rejection_msg" rows="2"></textarea>
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
  initGtmCollateralRequestList(); 
});
 
function triggerOnChange(){
    //alert(document.getElementById('fcollateral-product').value);
  chkProdValue($('#editpop #fcollateral-product').val());
}
</script>	


  </body>
</html>