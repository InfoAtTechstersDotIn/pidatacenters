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
            <h4 class="page-title">Joint Marketing Collateral Request </h4>
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
            <form id="frm-gtm-collateral-req" enctype="multipart/form-data">
              <div class="row">
                <div class="form-group col-md-4 col-sm-12">
                  <label for="fevent-name" class="required" >Event Name </label>
                  <input type="text" class="form-control" id="fevent-name" name="gtm_event_name" required />
                </div>
                <div class="form-group col-md-4 col-sm-12">
                  <label for="fcollateral-name" class="required" >Collateral Name </label>
                  <input type="text" class="form-control" id="fcollateral-name" name="gtm_collateral_name" required />
                </div>
                <div class="form-group col-md-4 col-sm-12">
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
                <div class="form-group col-md-4 col-sm-12">
                  <label for="fcollateral-types" class="required" >Collateral Type</label>
                  <select class="form-control " id="fcollateral-types" name="gtm_collateral_types[]" multiple required>
                    <option value="Brochure">Brochure</option>
                    <option value="Flyer">Flyer (Single Pager)</option>
                    <option value="EDM">EDM</option>
                  </select>
                </div>
                <div class="form-group col-md-4 col-sm-12">
                  <label for="fobjective" class="required" >Objective</label>
                  <textarea class="form-control" id="fobjective" name="gtm_collateral_objective" required></textarea>
                </div>
                <div class="form-group col-md-4 col-sm-12">
                  <label for="ftarget-audience" class="required" >Target Audience</label>
                  <textarea class="form-control" id="ftarget-audience" name="gtm_target_audience" required></textarea>
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
</script> 

</body>
</html>