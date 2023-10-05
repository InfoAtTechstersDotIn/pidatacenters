<?php
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
                    <form class="forms-NewPipeline">
                     <div class="row">
                      <div class="form-group col-md-4 col-sm-12">
                        <label for="POTENTIALID">Potential Id </label>
                        <input type="email" class="form-control" id="ppotentialid" disabled="">
                      </div>
                        <div class="form-group col-md-4 col-sm-12">
                        <label for="RBP Region">RBP Name</label>
                        <input type="text" class="form-control" id="rbpname">
                      </div>
                      <div class="form-group col-md-4 col-sm-12">
                        <label for="RBP Region">RBP Region</label>
                        <select class="form-control " id="rbpregion">
                             <option>Telangana</option>
                             <option>Andhra Pradesh</option>
                             <option>Kerala</option>
                             <option>Mumbai</option>
                             <option>Bengaluru</option>
                             
                      </select>
                      </div>
                       
                     </div>
                     <div class="row">
                       <div class="form-group col-md-4 col-sm-12">
                        <label for="Sales Owner">Sales Owner</label>
                        <input type="text" class="form-control" id="salesowner" >
                      </div>
                        <div class="form-group col-md-4 col-sm-12">
                        <label for="cregion">Customer Region</label>
                        <select class="form-control " id="cregion">
                             <option>Telangana</option>
                             <option>Andhra Pradesh</option>
                             <option>Kerala</option>
                             <option>Mumbai</option>
                             <option>Bengaluru</option>
                             
                      </select>
                      </div>
                      
                        <div class="form-group col-md-4 col-sm-12">
                        <label for="Customer Name">Customer Name</label>
                        <input type="text" class="form-control" id="customerName" >
                      </div>
                     </div>
                     <div class="row">
                        <div class="form-group col-md-4 col-sm-12">
                        <label for="Customer email ID">Customer email ID</label>
                        <input type="email" class="form-control" id="customeremilid" >
                      </div>
                       <div class="form-group col-md-4 col-sm-12">
                        <label for="Business Industry">Business Industry</label>
                         <select class="form-control " id="cregion">
                             <option>Select Business Industry </option>
                             <option>IT / ITES</option>
                             <option>Government</option>
                             <option>BFSI</option>
                             <option>FMGC</option>
                             <option>Manufacturing</option>
                      </select>
                      </div>
                       <div class="form-group col-md-4 col-sm-12">
                        <label for="Account Type">Account Type</label>
                         <select class="form-control " id="cracTypeegion">
                             <option>Select Account Type </option>
                             <option>Enterprise Customer - Large</option>
                             <option>Government</option>
                             
                      </select>
                      </div>
                     </div>
                     
                    <div class="row">
                        <div class="form-group col-md-4 col-sm-12">
                        <label for="Service Business Unit (SBU)">Service Business Unit (SBU)</label>
                         <select class="form-control " id="sbu">
                             <option>Select SBU </option>
                             <option>Cloud</option>
                             <option>Colocation</option>
                             <option>Consulting</option>
                             
                      </select>
                      </div>
                       <div class="form-group col-md-4 col-sm-12">
                        <label for="Product">Product</label>
                         <select class="form-control " id="cProduct">
                             <option>Select SBU </option>
                             <option>Cloud</option>
                             <option>Colocation</option>
                             <option>Consulting</option>
                      </select>
                      </div>
                       <div class="form-group col-md-4 col-sm-12">
                        <label for="Opportunity Details">Opportunity Details</label>
                        <input type="test" class="form-control" id="ooppDetails" >
                      </div>
                     </div>

                     <div class="row">
                        <div class="form-group col-md-4 col-sm-12">
                        <label for="Stage">Stage</label>
                         <select class="form-control " id="pStage">
                             <option>Select Stage </option>
                             <option>Prospect</option>
                             <option>Proposal to be Submitted</option>
                             <option>Proposal Submitted</option>
                             <option>Negotiation</option>
                             <option>Shortlisted</option>
                             <option>PO received Payment Pending</option>
                             
                      </select>
                      </div>
                       <div class="form-group col-md-4 col-sm-12">
                        <label for="Rating">Rating</label>
                         <select class="form-control " id="pRating">
                             <option>Select Rating </option>
                             <option>Hot - Closure within 30 days   </option>
                             <option>Warm - Closure within 31-90 days</option>
                             <option>Cold - Prospective beyond 90 days</option>
                              <option>Win</option>
                             <option>Passive - yet to establish connect  </option>
                             <option>Lost</option>
                             <option>Dropped</option>
                      </select>
                      </div>
                       <div class="form-group col-md-4 col-sm-12">
                        <label for="Probability (%)">Probability (%)</label>
                        <input type="test" class="form-control" id="probability" disabled="" >
                      </div>
                     </div>

                      <div class="row">
                        <div class="form-group col-md-4 col-sm-12">
                        <label for="MRC">MRC</label>
                        <input type="number" class="form-control calVal" id="pmrc">
                      </div>
                      <div class="form-group col-md-4 col-sm-12">
                        <label for="OTC">OTC</label>
                        <input type="number" class="form-control calVal" id="potc" >
                      </div>
                        <div class="form-group col-md-4 col-sm-12">
                        <label for="ARCr">ARC</label>
                        <input type="number" class="form-control calVal" id="parc" >
                      </div>
                     </div>

                      <div class="row">
                        
                        <div class="form-group col-md-4 col-sm-12">
                        <label for="Annual Contract Value (ACV)">Annual Contract Value (ACV)</label>
                        <input type="number" class="form-control" id="pacv" disabled="">
                      </div>
                      <div class="form-group col-md-4 col-sm-12">
                        <label for="Total Contract Value (TCV)">Total Contract Value (TCV)</label>
                        <input type="number" class="form-control" id="ptcv" disabled="" >
                      </div>
                       <div class="form-group col-md-4 col-sm-12">
                        <label for="Contract Period (Months)">Contract Period in Months</label>
                        <select class="form-control calValSelect" id="cpinmonths">
                             <option value="">Select Contract Period in Months </option>
                             <option value="12">12</option>
                             <option value="24">24</option>
                             <option value="36">36</option>
                             
                             <option value="48">48</option>
                             <option value="60">60</option>
                            
                         </select>
                        </div>
                       
                     </div>

                     <div class="row">
                      <div class="form-group col-md-4 col-sm-12">
                        <label for="Annual Contract Value (ACV)">Payment Terms</label>
                        <select class="form-control " id="cpcusttype">
                             <option>Select Customer Type</option>
                             <option>Monthly Advanc</option>
                             <option>Quarterly Advance</option>  
                             <option>Half Yearly Advance</option>
                             <option>Annual Advance</option>  
                             <option>100% Advance</option>
                         </select>
                      </div>
                        <div class="form-group col-md-4 col-sm-12">
                        <label for="MRC">Opportunity Date</label>
                        <input type="date" class="form-control" id="podate">
                      </div>
                      <div class="form-group col-md-4 col-sm-12">
                        <label for="Proposal  Date">Proposal  Date</label>
                        <input type="date" class="form-control" id="pprdate" >
                      </div>

                     </div>

                      <div class="row">
                        <div class="form-group col-md-4 col-sm-12">
                        <label for="Closing Date">Closing Date</label>
                        <input type="date" class="form-control" id="pClosingdate" >
                      </div>
                         <div class="form-group col-md-4 col-sm-12">
                        <label for="Customer Type">Customer Type</label>
                        <select class="form-control " id="cpcusttype">
                             <option>Select Customer Type</option>
                             <option>New Logo</option>
                             <option>Existing Logo</option>
                             
                            
                         </select>
                        </div>
                       
                       <div class="form-group col-md-4 col-sm-12">
                        <label for="Commission Type">Commission Type</label>
                        <select class="form-control " id="cmmsontype">
                             <option>Select Commission Type</option>
                             <option>Recurring</option>
                             <option>Onetime</option>
                             
                            
                         </select>
                        </div>
                       
                     </div>

                     <div class="row">
                        <div class="form-group col-md-4 col-sm-12">
                        <label for="MRC">Projected Commission</label>
                        <input type="number" class="form-control" id="projectedcms" disabled="">
                      </div>
                      <div class="form-group col-md-4 col-sm-12">
                        <label for="Proposal  Date">Customer Website</label>
                        <input type="url" class="form-control" id="ppcWebsite" >
                      </div>
                        
                     </div>



                      <button type="submit" class="btn btn-success mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
      </div>  


 


    
       

<?php
  include_once('includes/footer.php');
?>  