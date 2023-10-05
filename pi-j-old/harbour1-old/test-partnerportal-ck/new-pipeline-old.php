<?php
  require_once('./config/constants.php') ; 
  include_once('includes/header.php');
?>

<div class="container-fluid page-body-wrapper">
<?php
  include_once('includes/sidebar.php');
?>

<div class="main-panel">
  <div class="content-wrapper">

    <!-- start -->         
    <div class="row page-title-header">
      <div class="col-12">
        <div class="page-header">
          <h4 class="page-title">Add Pipeline</h4>
        </div>
      </div>
    </div>

<!--    **************************  -->  

    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <form class="forms-sample" id="frm-new-pipeline">
              <div class="row">
                <div class="form-group col-md-4 col-sm-12">
                  <label for="POTENTIALID">Potential Id </label>
                  <input type="text" class="form-control" id="ppotentialid" readonly name="ppotentialid">
                </div>
                <div class="form-group col-md-4 col-sm-12">
                  <label for="RBP Region">RBP Name</label>
                  <input type="text" class="form-control" id="rbpname" name="rbpname" required>
                </div>
                <div class="form-group col-md-4 col-sm-12">
                  <label for="RBP Region">RBP Region</label>
                  <select class="form-control " id="rbpregion" name="rbpregion" required>
                  </select>
                </div>  
              </div>

              <div class="row">
                <div class="form-group col-md-4 col-sm-12">
                  <label for="Sales Owner">Sales Owner</label>
                  <input type="text" class="form-control" id="salesowner" name="salesowner" required>
                </div>
                <div class="form-group col-md-4 col-sm-12">
                  <label for="cregion">Customer Region</label>
                  <select class="form-control " id="cregion" name="cregion" required>
                        <!-- <option>Telangana</option>
                        <option>Andhra Pradesh</option>
                        <option>Kerala</option>
                        <option>Mumbai</option>
                        <option>Bengaluru</option> -->   
                  </select>
                </div>
              
                <div class="form-group col-md-4 col-sm-12">
                  <label for="Customer Name">Customer Name</label>
                  <input type="text" class="form-control" id="customerName" name="customername" required>
                </div>
              </div>

              <div class="row">
                <div class="form-group col-md-4 col-sm-12">
                  <label for="Customer email ID">Customer email ID</label>
                  <input type="email" class="form-control" id="customeremilid" name="customeremilid" required>
                </div>
                <div class="form-group col-md-4 col-sm-12">
                  <label for="Business Industry">Business Industry</label>
                  <select class="form-control " id="industry" name="industry" required>
                      <!-- <option value="-1">Select Business Industry </option>
                      <option value="Government">Government</option>
                      <option value="BFSI">BFSI</option>
                      <option value="IT & ITES">IT & ITES</option>
                      <option value="Telecom">Telecom</option>
                      <option value="Hospitality & Services">Hospitality & Services</option>
                      <option value="Healthcare & Pharma">Healthcare & Pharma</option>
                      <option value="Media & Entertainment">Media & Entertainment</option>
                      <option value="Education">Education</option>
                      <option value="Manufacturing & Energy">Manufacturing & Energy</option>
                      <option value="Retail & eCommerce">Retail & eCommerce</option>
                      <option value="FMCG">FMCG</option> -->
                  </select>
                </div>
                <div class="form-group col-md-4 col-sm-12">
                  <label for="Account Type">Account Type</label>
                  <select class="form-control " id="cracTypeegion" name="cactype" required>
                    <!-- <option value="-1">Select Account Type </option>
                    <option value="large-enterprise-cust">Enterprise Customer - Large</option>
                    <option value="government">Government</option> -->
                  </select>
                </div>
              </div>
              
              <div class="row">
                <div class="form-group col-md-4 col-sm-12">
                  <label for="Service Business Unit (SBU)">Service Business Unit (SBU)</label>
                  <select class="form-control " id="sbu" onchange="updateSbuProducts()" name="sbu" required>
                    <!-- <option value="-1">Select SBU </option> -->
                      <!-- <option>Cloud</option>
                      <option>Colocation</option>
                      <option>Consulting</option>
                      -->
                  </select>
                </div>
                <div class="form-group col-md-4 col-sm-12">
                  <label for="Product">Product</label>
                  <select class="form-control " id="cProduct" name="cproduct" required>
                    <!-- <option value="-1">Select SBU </option> -->
                      <!-- <option>Cloud</option>
                      <option>Colocation</option>
                      <option>Consulting</option> -->
                  </select>
                </div>
                <div class="form-group col-md-4 col-sm-12">
                  <label for="Opportunity Details">Opportunity Details</label>
                  <input type="test" class="form-control" id="ooppDetails" name="ooppdetails" >
                </div>
              </div>

              <div class="row">
                <div class="form-group col-md-4 col-sm-12">
                  <label for="Stage">Stage</label>
                  <select class="form-control " id="pStage" name="pstage" required>
                    <!-- <option value="-1">Select Stage </option>
                    <option value="Prospect">Prospect</option>
                    <option value="Proposal to be Submitted">Proposal to be Submitted</option>
                    <option value="Proposal Submitted">Proposal Submitted</option>
                    <option value="Negotiation">Negotiation</option>
                    <option value="Shortlisted">Shortlisted</option>
                    <option value="PO received Payment Pending">PO received Payment Pending</option>
                    <option value="Closed Won Payent Received">Closed Won (Payent Received)</option>
                    <option value="On Hold">On Hold</option>
                    <option value="Closed Dropped">Closed Dropped</option>
                    <option value="Closed Lost to Competition">Closed Lost to Competition</option>                            -->
                  </select>
                </div>
                <div class="form-group col-md-4 col-sm-12">
                  <label for="Rating">Rating</label>
                  <select class="form-control " id="pRating" onchange="updateRatingProbability()" name="prating" required>
                      <!-- <option value="-1">Select Rating </option>
                      <option value="hot">Hot - Closure within 30 days   </option>
                      <option value="warm">Warm - Closure within 31-90 days</option>
                      <option value="cold">Cold - Prospective beyond 90 days</option>
                      <option value="win">Win</option>
                      <option value="passive">Passive - yet to establish connect  </option>
                      <option value="lost">Lost</option>
                      <option value="dropped">Dropped</option> -->
                  </select>
                </div>
                <div class="form-group col-md-4 col-sm-12">
                  <label for="Probability (%)">Probability (%)</label>
                  <input type="test" class="form-control" id="probability" disabled="" required>
                </div>
              </div>

              <div class="row">
                <div class="form-group col-md-4 col-sm-12">
                  <label for="MRC">MRC</label>
                  <input type="number" class="form-control calVal" id="pmrc" min=0 name="pmrc" required>
                </div>
                <div class="form-group col-md-4 col-sm-12">
                  <label for="OTC">OTC</label>
                  <input type="number" class="form-control calVal" id="potc" min=0 name="potc" required>
                </div>
                <div class="form-group col-md-4 col-sm-12">
                  <label for="ARCr">ARC</label>
                  <input type="number" class="form-control calVal" id="parc" min=0 name="parc" required>
                </div>
              </div>

              <div class="row"> 
                <div class="form-group col-md-4 col-sm-12">
                  <label for="Annual Contract Value (ACV)">Annual Contract Value (ACV)</label>
                  <input type="number" class="form-control" id="pacv" disabled="" name="pacv">
                </div>
                <div class="form-group col-md-4 col-sm-12">
                  <label for="Total Contract Value (TCV)">Total Contract Value (TCV)</label>
                  <input type="number" class="form-control" id="ptcv" disabled="" name="ptcv">
                </div>
                <div class="form-group col-md-4 col-sm-12">
                  <label for="Contract Period (Months)">Contract Period in Months</label>
                  <select class="form-control calValSelect" id="cpinmonths" name="cpinmonths">
                    <!-- <option value="-1">Select Contract Period in Months </option>
                    <option value="12">12</option>
                    <option value="24">24</option>
                    <option value="36">36</option>
                    <option value="48">48</option>
                    <option value="60">60</option> -->
                  </select>
                </div>
              </div>

              <div class="row">
                <div class="form-group col-md-4 col-sm-12">
                  <label for="Annual Contract Value (ACV)">Payment Terms</label>
                  <select class="form-control " id="paymentterm" name="paymentterm" required>
                    <!-- <option value="-1">Select Payment Term</option>
                    <option value="monthly-advance">Monthly Advance</option>
                    <option value="quaterly-advanc">Quarterly Advance</option>  
                    <option value="half-yearly-advance">Half Yearly Advance</option>
                    <option value="annual-advance">Annual Advance</option>  
                    <option value="full-advance">100% Advance</option> -->
                  </select>
                </div>
                <div class="form-group col-md-4 col-sm-12">
                  <label for="MRC">Opportunity Date</label>
                  <input type="date" class="form-control" id="podate" name="podate" required>
                </div>
                <div class="form-group col-md-4 col-sm-12">
                  <label for="Proposal  Date">Proposal  Date</label>
                  <input type="date" class="form-control" id="pprdate" name="pprdate" required>
                </div>
              </div>

              <div class="row">
                <div class="form-group col-md-4 col-sm-12">
                  <label for="Closing Date">Closing Date</label>
                  <input type="date" class="form-control" id="pClosingdate" name="pclosingdate" required>
                </div>
                <div class="form-group col-md-4 col-sm-12">
                  <label for="Customer Type">Customer Type</label>
                  <select class="form-control " id="cpcusttype" name="cpcusttype" required>
                    <!-- <option value="-1">Select Customer Type</option>
                    <option value="new-logo">New Logo</option>
                    <option value="existing-logo">Existing Logo</option> -->
                  </select>
                </div>
                
                <div class="form-group col-md-4 col-sm-12">
                  <label for="Commission Type">Commission Type</label>
                  <select class="form-control " id="cmmsontype" name="cmmsontype" required>
                    <!-- <option value="-1">Select Commission Type</option>
                    <option value="recurring">Recurring</option>
                    <option value="onetime">Onetime</option> -->
                  </select>
                </div>      
              </div>

              <div class="row">
                <div class="form-group col-md-4 col-sm-12">
                  <label for="MRC">Projected Commission</label>
                  <input type="number" class="form-control" id="projectedcms" disabled="" >
                </div>
                <div class="form-group col-md-4 col-sm-12">
                  <label for="Proposal  Date">Customer Website</label>
                  <input type="url" class="form-control" id="ppcWebsite" name="ppcwebsite" required>
                </div>
              </div>

              <button type="submit" class="btn btn-success mr-2">Submit</button>
              <button type="button" class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>
    </div>  

<?php
  include_once('includes/footer.php');
?>  

<script>

document.addEventListener('DOMContentLoaded', function(event) {
  initPipelineForm();
});
</script>

  </body>
</html>