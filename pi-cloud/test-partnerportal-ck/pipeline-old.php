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
          <h4 class="page-title">Pipeline</h4>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12 col-md-12 grid-margin text-right mr-20" style="padding-right: 60px">
          <a href="./new-pipeline">
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
              <table id="pending-pipelines" class="table table table-hover table-bordered" width="100%">
                <thead>
                  <tr class="table-row">
                    <th class="th-sm">Potential ID
                    </th>
                    <th class="th-sm">RBP Name
                    </th>
                    <th class="th-sm">Customer Name
                    </th>
                    <th class="th-sm">Product
                    </th>
                    <th class="th-sm">Stage
                    </th>
                    <th class="th-sm">Monthly <br>Recurring Charges <br>(MRC)
                    </th>
                    <th class="th-sm">One Time Charges<br> (OTC)
                    </th>
                    <th class="th-sm">Annual<br> Recurring Charges<br> (ARC)
                    </th>
                    <th class="th-sm">Annual<br> Contract Value<br> (ACV)
                    </th>
              
                    <th class="th-sm">Total <br>Contract Value<br> (TCV)
                    </th>
                    <th class="th-sm">Contract Period<br> (In Months)
                    </th>
                    <th class="th-sm">Closing Date
                    </th>
                    <th class="th-sm">Customer Type
                    </th>
                    <th class="th-sm">Projected Commission
                    </th>
                    <th class="th-sm" colspan="2">Actions
                    </th>
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

<!-- View Modal -->
<div class="db-popup hide" id="pipeline-reviewpop">
	<div class="pop-cont">
		<div class="col-md-12 grid-margin stretch-card">
      <div class="card">
      <div class="header-controls clearfix" style="text-align: right; position:relative;padding:10px;">
            <span class="btn btn-close" style="float:right;width:20px;height:20px;">X</span>
        </div>
        <div class="card-body">
          <h4 class="card-title">Pipeline Review</h4>
          <!-- <form class="forms-sample"> -->
            <div class="row">
              <div class="form-group col-md-4 col-sm-12">
                <label for="exampleInputName1">Potential ID</label>
                <input type="text" class="form-control" id="potential-id" placeholder="Potential ID" disabled="">
              </div>
              <div class="form-group col-md-4 col-sm-12">
                <label for="exampleInputName1">RBP Name</label>
                <input type="text" class="form-control" id="rbpname" placeholder="RBP Name" disabled="">
              </div>
              <div class="form-group col-md-4 col-sm-12">
                <label for="exampleInputEmail3">RBP State</label>
                <input type="text" class="form-control" id="rbpstate" placeholder="RBP State" disabled="">
              </div>
              
            </div>

            <div class="row">   
              <div class="form-group col-md-4 col-sm-12">
                <label for="exampleInputEmail3">Sales Owner</label>
                <input type="text" class="form-control" id="salesowner" placeholder="Sales Owner" disabled="">
              </div>
              <div class="form-group col-md-4 col-sm-12">
                <label for="exampleInputEmail3">Customer State</label>
                <input type="text" class="form-control" id="customerstate" placeholder="Customer State" disabled="">
              </div>

              <div class="form-group col-md-4 col-sm-12">
                <label for="exampleInputEmail3">Customer Name</label>
                <input type="text" class="form-control" id="custname" placeholder="Customer Name" disabled="">
              </div>
            </div>

            <div class="row">
              <div class="form-group col-md-4 col-sm-12">
                <label for="exampleInputEmail3">Customer Email</label>
                <input type="text" class="form-control" id="custemail" placeholder="Customer Email" disabled="">
              </div>
              <div class="form-group col-md-4 col-sm-12">
                <label for="exampleInputEmail3">Business Industry</label>
                <input type="text" class="form-control" id="business-industry" placeholder="Business Industry" disabled="">
              </div>
              <div class="form-group col-md-4 col-sm-12">
                <label for="exampleInputEmail3">Account Type</label>
                <input type="text" class="form-control" id="account-type" placeholder="Account Type" disabled="">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-4 col-sm-12">
                <label for="exampleInputEmail3">Service Business Unit (SBU)</label>
                <input type="text" class="form-control" id="sbu" placeholder="Service Business Unit" disabled="">
              </div>
              <div class="form-group col-md-4 col-sm-12">
                <label for="exampleInputEmail3">Product</label>
                <input type="email" class="form-control" id="product" placeholder="Product" disabled="">
              </div>
              <div class="form-group col-md-4 col-sm-12">
                <label for="exampleInputName1">Stage</label>
                <input type="text" class="form-control" id="stage" placeholder="Stage" disabled="">
              </div>
              
            </div>

            <div class="row">
              <div class="form-group col-md-4 col-sm-12">
                <label for="exampleInputEmail3">Rating</label>
                <input type="text" class="form-control" id="rating" placeholder="Rating" disabled="">
              </div>

              <div class="form-group col-md-4 col-sm-12">
                <label for="exampleInputEmail3">Monthly Recurring Charges (MRC)</label>
                <input type="text" class="form-control" id="mrc" placeholder="MRC" disabled="">
              </div>
              <div class="form-group col-md-4 col-sm-12">
                <label for="exampleInputName1">One Time Charges <br/> (OTC)</label>
                <input type="text" class="form-control" id="otc" placeholder="OTC" disabled="">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-4 col-sm-12">
                <label for="exampleInputEmail3">Annual Recurring Charges <br/> (ARC)</label>
                <input type="text" class="form-control" id="arc" placeholder="ARC" disabled="">
              </div>
              <div class="form-group col-md-4 col-sm-12">
                <label for="exampleInputName1">Annual Contract Value <br/> (ACV)</label>
                <input type="text" class="form-control" id="acv" placeholder="ACV" disabled="">
              </div>
              <div class="form-group col-md-4 col-sm-12">
                <label for="exampleInputEmail3">Total Contract Value <br/> (TCV)</label>
                <input type="text" class="form-control" id="tcv" placeholder="TCV" disabled="">
              </div>
            </div>

            <div class="row">  
              <div class="form-group col-md-4 col-sm-12">
                <label for="exampleInputName1">Contract Period <br/> (In Months)</label>
                <input type="text" class="form-control" id="contract-period" placeholder="Contract Period" disabled="">
              </div>
              <div class="form-group col-md-4 col-sm-12">
                <label for="exampleInputName1">Payment Term</label>
                <input type="text" class="form-control" id="payment-term" placeholder="Payment Term" disabled="">
              </div>
            </div>

            <div class="row">
              <div class="form-group col-md-4 col-sm-12">
                <label for="exampleInputEmail3">Opportunity Date <br/> </label>
                <input type="text" class="form-control" id="opportunity-dt" placeholder="Opportunity Date" disabled="">
              </div>  
              <div class="form-group col-md-4 col-sm-12">
                <label for="exampleInputEmail3">Proposal Date <br/> </label>
                <input type="text" class="form-control" id="proposal-dt" placeholder="Proposal Date" disabled="">
              </div>
              <div class="form-group col-md-4 col-sm-12">
                <label for="exampleInputEmail3">Closing Date <br/> </label>
                <input type="text" class="form-control" id="closing-dt" placeholder="Closing Date" disabled="">
              </div>
            </div>

            <div class="row">
              <div class="form-group col-md-4 col-sm-12">
                <label for="exampleInputName1">Customer Type</label>
                <input type="text" class="form-control" id="customer-type" placeholder="Customer Type" disabled="">
              </div>
              <div class="form-group col-md-4 col-sm-12">
                <label for="exampleInputName1">Commission Type</label>
                <input type="text" class="form-control" id="commission-type" placeholder="Commission Type" disabled="">
              </div>         
              <div class="form-group col-md-4 col-sm-12">
                <label for="exampleInputEmail3">Projected Commission</label>
                <input type="text" class="form-control" id="projected-comm" placeholder="Projected Commission" disabled="">
              </div>
            </div>

            <div class="row">
              <div class="form-group col-md-6 col-sm-12">
                <label for="exampleInputName1">Customer website</label>
                <input type="text" class="form-control" id="customer-website" placeholder="Customer Website" disabled="">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-12 col-sm-12">
                <label for="exampleInputName1">Opportunity Details</label>
                <input type="text" class="form-control" id="oppor-details" placeholder="Opportunity Details" disabled="">
              </div>
            </div>

            <button type="button" class="btn btn-light btn-close" style="cursor: pointer;" >Close</button>
          <!-- </form> -->
        </div>
      </div>
    </div>
	</div>
</div>

<!-- Edit Modal -->
<div class="db-popup hide" id="pipeline-editpop">
	<div class="pop-cont">
		<div class="col-md-12 grid-margin stretch-card">
    
      <div class="card">
        <div class="header-controls clearfix" style="text-align: right; position:relative;padding:10px;">
            <span class="btn btn-close" style="float:right;width:20px;height:20px;">X</span>
        </div>
        <div class="card-body">
          
          <h4 class="card-title">Edit Pipeline</h4>
          
          <form class="forms-sample" id="frm-pipeline-edit">
            <input type="hidden" name="pipeline_id" id="pipeline_id" value="" />
            <div class="row">
              <div class="form-group col-md-4 col-sm-12">
                <label for="exampleInputName1">Potential ID</label>
                <input type="text" class="form-control" id="potential-id" placeholder="Potential ID" disabled="">
              </div>
              <div class="form-group col-md-4 col-sm-12">
                <label for="exampleInputName1">RBP Name</label>
                <input type="text" class="form-control" id="rbpname" name="rbpname" placeholder="RBP Name" required>
              </div>
              <div class="form-group col-md-4 col-sm-12">
                <label for="exampleInputEmail3">RBP Region</label>
                <select class="form-control " id="rbpstate" name="rbpstate" required>
                </select>

                <!-- <input type="text" class="form-control" id="rbpstate" name="rbpstate" placeholder="RBP State" > -->
              </div>
              
            </div>

            <div class="row">   
              <div class="form-group col-md-4 col-sm-12">
                <label for="exampleInputEmail3">Sales Owner</label>
                <input type="text" class="form-control" id="salesowner" name="salesowner" placeholder="Sales Owner" required>
              </div>
              <div class="form-group col-md-4 col-sm-12">
                <label for="exampleInputEmail3">Customer State</label>
                <!-- <input type="text" class="form-control" id="customerstate" name="customerstate" placeholder="Customer State" > -->
                <select class="form-control " id="customerstate" name="customerstate" required>
                </select>
              </div>

              <div class="form-group col-md-4 col-sm-12">
                <label for="exampleInputEmail3">Customer Name</label>
                <input type="text" class="form-control" id="custname" name="custname" placeholder="Customer Name" required>
              </div>
            </div>

            <div class="row">
              <div class="form-group col-md-4 col-sm-12">
                <label for="exampleInputEmail3">Customer Email</label>
                <input type="email" class="form-control" id="custemail" name="custemail" placeholder="Customer Email" required>
              </div>
              <div class="form-group col-md-4 col-sm-12">
                <label for="exampleInputEmail3">Business Industry</label>
                <!-- <input type="text" class="form-control" id="business-industry" name="business_industry" placeholder="Business Industry" > -->
                <select class="form-control " id="business-industry" name="business_industry" required>
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
                <label for="exampleInputEmail3">Account Type</label>
                <!-- <input type="text" class="form-control" id="account-type" name="account_type" placeholder="Account Type" > -->
                <select class="form-control " id="account-type" name="account_type" required>
                    <!-- <option value="-1">Select Account Type </option>
                    <option value="large-enterprise-cust">Enterprise Customer - Large</option>
                    <option value="government">Government</option> -->
                  </select>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-4 col-sm-12">
                <label for="exampleInputEmail3">Service Business Unit (SBU)</label>
                <!-- <input type="text" class="form-control" id="sbu" name="sbu" placeholder="Service Business Unit" > -->
                <select class="form-control " id="sbu" onchange="updateSbuProducts()" name="sbu" required>
                    <option value="-1">Select SBU </option>
                      <!-- <option>Cloud</option>
                      <option>Colocation</option>
                      <option>Consulting</option>
                      -->
                  </select>
              </div>
              <div class="form-group col-md-4 col-sm-12">
                <label for="exampleInputEmail3">Product</label>
                <!-- <input type="text" class="form-control" id="product" name="product" placeholder="Product" > -->
                <select class="form-control " id="product" name="product" required>
                    <option value="-1">Select SBU </option>
                      <!-- <option>Cloud</option>
                      <option>Colocation</option>
                      <option>Consulting</option> -->
                  </select>
              </div>
              <div class="form-group col-md-4 col-sm-12">
                <label for="exampleInputName1">Stage</label>
                <!-- <input type="text" class="form-control" id="stage" name="stage" placeholder="Stage" > -->
                <select class="form-control " id="stage" name="stage" required>
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
              
            </div>

            <div class="row">
              <div class="form-group col-md-4 col-sm-12">
                <label for="exampleInputEmail3">Rating</label>
                <!-- <input type="text" class="form-control" id="rating" name="rating" placeholder="Rating" > -->
                <select class="form-control " id="pRating" onchange="updateRatingProbability()" name="rating" required>
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
                <input type="text" class="form-control" id="probability" disabled="" required="">
              </div>

              <div class="form-group col-md-4 col-sm-12">
                <label for="exampleInputEmail3">Monthly Recurring Charges (MRC)</label>
                <input type="text" class="form-control" id="mrc" name="mrc" placeholder="MRC"  required>
              </div>
              <div class="form-group col-md-4 col-sm-12">
                <label for="exampleInputName1">One Time Charges <br/> (OTC)</label>
                <input type="text" class="form-control" id="otc" name="otc" placeholder="OTC" required>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-4 col-sm-12">
                <label for="exampleInputEmail3">Annual Recurring Charges <br/> (ARC)</label>
                <input type="text" class="form-control" id="arc" name="arc" placeholder="ARC"  required>
              </div>
              <div class="form-group col-md-4 col-sm-12">
                <label for="exampleInputName1">Annual Contract Value <br/> (ACV)</label>
                <input type="text" class="form-control" id="acv" name="acv" placeholder="ACV" required>
              </div>
              <div class="form-group col-md-4 col-sm-12">
                <label for="exampleInputEmail3">Total Contract Value <br/> (TCV)</label>
                <input type="text" class="form-control" id="tcv" name="tcv" placeholder="TCV" required>
              </div>
            </div>

            <div class="row">  
              <div class="form-group col-md-4 col-sm-12">
                <label for="exampleInputName1">Contract Period <br/> (In Months)</label>
                <!-- <input type="text" class="form-control" id="contract-period" name="contract_period" placeholder="Contract Period" > -->
                <select class="form-control calValSelect" id="contract-period" name="contract_period" required>
                    <!-- <option value="-1">Select Contract Period in Months </option>
                    <option value="12">12</option>
                    <option value="24">24</option>
                    <option value="36">36</option>
                    <option value="48">48</option>
                    <option value="60">60</option> -->
                  </select>
              </div>
              <div class="form-group col-md-4 col-sm-12">
                <label for="exampleInputName1">Payment Term</label>
                <!-- <input type="text" class="form-control" id="payment-term" name="payment_term" placeholder="Payment Term" > -->
                <select class="form-control " id="payment-term" name="payment_term" required>
                    <!-- <option value="-1">Select Payment Term</option>
                    <option value="monthly-advance">Monthly Advance</option>
                    <option value="quaterly-advanc">Quarterly Advance</option>  
                    <option value="half-yearly-advance">Half Yearly Advance</option>
                    <option value="annual-advance">Annual Advance</option>  
                    <option value="full-advance">100% Advance</option> -->
                  </select>
              </div>
            </div>

            <div class="row">
              <div class="form-group col-md-4 col-sm-12">
                <label for="exampleInputEmail3">Opportunity Date <br/> </label>
                <input type="date" class="form-control" id="opportunity-dt" name="opportunity_dt" placeholder="Opportunity Date" required>
              </div>  
              <div class="form-group col-md-4 col-sm-12">
                <label for="exampleInputEmail3">Proposal Date <br/> </label>
                <input type="date" class="form-control" id="proposal-dt" name="proposal_dt" placeholder="Proposal Date" required>
              </div>
              <div class="form-group col-md-4 col-sm-12">
                <label for="exampleInputEmail3">Closing Date <br/> </label>
                <input type="date" class="form-control" id="closing-dt" name="closing_dt" placeholder="Closing Date" required>
              </div>
            </div>

            <div class="row">
              <div class="form-group col-md-4 col-sm-12">
                <label for="exampleInputName1">Customer Type</label>
                <!-- <input type="text" class="form-control" id="customer-type" name="customer_type" placeholder="Customer Type" > -->
                <select class="form-control " id="customer-type" name="customer_type" required>
                  
                </select>
              </div>
              <div class="form-group col-md-4 col-sm-12">
                <label for="exampleInputName1">Commission Type</label>
                <!-- <input type="text" class="form-control" id="commission-type" name="commission_type" placeholder="Commission Type" > -->
                <select class="form-control " id="commission-type" name="commission_type" required>
                    
                </select>
              </div>         
              <div class="form-group col-md-4 col-sm-12">
                <label for="exampleInputEmail3">Projected Commission</label>
                <input type="text" class="form-control" id="projected-comm" name="projected_comm" placeholder="Projected Commission" required>
              </div>
            </div>

            <div class="row">
              <div class="form-group col-md-6 col-sm-12">
                <label for="exampleInputName1">Customer website</label>
                <input type="text" class="form-control" id="customer-website" name="customer_website" placeholder="Customer Website" required>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-12 col-sm-12">
                <label for="exampleInputName1">Opportunity Details</label>
                <!-- <input type="text" class="form-control" id="oppor-details" name="oppor_details" placeholder="Opportunity Details" > -->
                <textarea name="oppor_details" class="form-control" id="oppo-details"></textarea>
              </div>
            </div>

            <button type="submit" class="btn btn-success btn-save" style="cursor: pointer;" >Save</button>
            <button type="button" class="btn btn-light btn-close" style="cursor: pointer;" >Close</button>
          </form>
        </div>
      </div>
    </div>
	</div>
</div>

<div class="db-popup hide" id="pipe-rejectpop">
  <div class="pop-cont">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Rejection Confirmation</h4>
          <form class="forms-sample">
            <input type="hidden" name="pipelineid" id="pipelineid" value="" />
            <div class="row">
              <div class="form-group col-md-12 col-sm-12">
                <label for="exampleInputName1">Reason for rejection</label>
                <textarea class="form-control" id="pipe-rejection-msg" rows="2"></textarea>
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
  include_once('includes/footer.php');
?>  
<!-- <script src="<?=BASE_URL?>assets/vendors/jquery/jquery-3.6.0.min.js"></script> -->
<script>
document.addEventListener('DOMContentLoaded', function(event) {
  //alert('hi from registration');
  //alert('the event occurred');
  initPipelines();
});
 

</script>	


  </body>
</html>