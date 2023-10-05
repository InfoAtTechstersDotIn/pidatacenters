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
                <h4 class="page-title">Joint Marketing Collateral Proposal</h4>
              </div>
            </div>
        </div>

<!--    **************************  -->  

      <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form class="forms-fund-req">
                     <div class="row">
                      <div class="form-group col-md-4 col-sm-12">
                        <label for="Event Name">Event Name </label>
                        <input type="email" class="form-control" id="jpmgfEventName">
                      </div>
                      <div class="form-group col-md-4 col-sm-12">
                        <label for="Event Name">Collateral Name</label>
                        <input type="email" class="form-control" id="jpmgfEventName">
                      </div>
                      <div class="form-group col-md-4 col-sm-12">
                        <label for="RBP Region">Select Product / Service</label>
                        <select class="form-control " id="jpmgfundproduct">
                             <option>Backup Service</option>
                             <option>DR ON CLOUD</option>
                             <option>NOC as Service</option>
                             <option>SAP HANA as Service</option>
                             <option>Storage</option>
                             
                      </select>
                    
                     </div>
                   </div>
                     <div class="row">
                      <div class="form-group col-md-4 col-sm-12">
                        <label for="RBP Region">Select Value</label>
                        <select class="form-control " id="jpmgfundproduct">
                             <option>Backup Service</option>
                             <option>DR ON CLOUD</option>
                             <option>NOC as Service</option>
                             <option>SAP HANA as Service</option>
                             <option>Storage</option>
                             
                      </select>
                    
                      </div>
                        <div class="form-group col-md-4 col-sm-12">
                        <label for="RBP Region">Total Estimate Event Cost</label>
                        <input type="number" class="form-control" id="jpmgfeventcost">
                      </div>
                       <div class="form-group col-md-4 col-sm-12">
                        <label for="Objective">Objective</label>
                        <textarea class="form-control" id="jpmgfObjective"></textarea>
                      </div>
                        
                     </div>
                     <div class="row">
                       <div class="form-group col-md-4 col-sm-12">
                        <label for="Audience">Target Audience</label>
                        <textarea class="form-control" id="jpmgftargetAud"></textarea>
                      </div>
                       <div class="form-group col-md-4 col-sm-12">
                        <label for="Audience sponsers">Additional Sponsors(if any)</label>
                        <textarea class="form-control" id="jpmgFaddSpo"></textarea>
                      </div>
                       <div class="form-group col-md-4 col-sm-12">
                        <label for="Audience sponsers">Partner's Ownership</label>
                        <textarea class="form-control" id="jpmgFaddSpo"></textarea>
                      </div>
                     </div>
                    <div class="row">
                       <div class="form-group col-md-3 col-sm-12">
                        <label for="Audience sponsers">Pi Ownership</label>
                        <textarea class="form-control" id="jpmgFaddSpo"></textarea>
                      </div>
                       <div class="form-group col-md-3 col-sm-12">
                        <label for="Objective">Deliverables For Partner</label>
                        <textarea class="form-control" id="jpmgfDeliverablesPart"></textarea>
                      </div>
                        <div class="form-group col-md-3 col-sm-12">
                        <label for="Audience">Deliverables For Pi</label>
                        <textarea class="form-control" id="jpmgfDeliverablespi"></textarea>
                      </div>
                       <div class="form-group col-md-3 col-sm-12">
                        <label for="Audience sponsers">Additional Comments</label>
                        <textarea class="form-control" id="jpmgfDeliverablesComments"></textarea>
                      </div>
                     </div>

                     <div class="row">
                       <h5 class="grid-margin text-primary" style="padding-left: 16px; font-size: 14px;">Executive Contact For The Campaign:</h5>
                     </div>
                      <div class="row">
                        <div class="form-group col-md-3 col-sm-12">
                        <label for="name">Name</label>
                        <input type="text" class="form-control calVal" id="jpmgfName">
                      </div>
                      <div class="form-group col-md-3 col-sm-12">
                        <label for="Eamil Id">Email ID</label>
                        <input type="email" class="form-control calVal" id="jpmgfuEmail" >
                      </div>
                        <div class="form-group col-md-3 col-sm-12">
                        <label for="Mobile Number">Mobile Number</label>
                        <input type="number" class="form-control calVal" id="jpmgfMn" >
                      </div>
                      <div class="form-group col-md-3 col-sm-12">
                        <label for="Designation">Designation</label>
                        <input type="text" class="form-control calVal" id="jpmgfuDe" >
                      </div>
                     </div>
                     
                    <div class="row">
                       <h5 class="grid-margin text-primary" style="padding-left: 16px; font-size: 14px;">Marketing Contact For The Campaign:</h5>
                     </div>
                      <div class="row">
                        <div class="form-group col-md-4 col-sm-12">
                        <label for="name">Name</label>
                        <input type="text" class="form-control calVal" id="jpmgfmName">
                      </div>
                      <div class="form-group col-md-4 col-sm-12">
                        <label for="Eamil Id">Email ID</label>
                        <input type="email" class="form-control calVal" id="jpmgfu,Email" >
                      </div>
                        <div class="form-group col-md-4 col-sm-12">
                        <label for="Mobile Number">Mobile Number</label>
                        <input type="number" class="form-control calVal" id="jpmgfmMn" >
                      </div>
                     
                     </div>
                     <div class="row">
                       <h5 class="grid-margin text-primary" style="padding-left: 16px; font-size: 14px;">Success Metrics:</h5>
                     </div>
                     <div  >
                         <div class="row">
                          <div class="form-group col-md-6 col-sm-12">
                          <label for="Eamil Id">Enter Parameter</label>
                          <textarea class="form-control" id="jpmgfparam"></textarea>
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                          <label for="Mobile Number">Enter Metric</label>
                         <textarea class="form-control" id="jpmgfmetric"></textarea>
                        </div>
                         
                       </div>
                     </div>
                     <div class="row">
                       <h5 class="grid-margin text-primary" style="padding-left: 16px; font-size: 14px;">Event Activities:</h5>
                     </div>
                     <div  >
                         <div class="row">
                          <div class="form-group col-md-3 col-sm-12">
                          <label for="Eamil Id">Enter Location Covered  </label>
                          <textarea class="form-control" id="jpmgflocCover"></textarea>
                        </div>
                        <div class="form-group col-md-3 col-sm-12">
                          <label for="Mobile Number">Enter Social Media </label>
                         <textarea class="form-control" id="jpmgfSocilaMedi"></textarea>
                        </div>
                          <div class="form-group col-md-3 col-sm-12">
                          <label for="EPrint Media  d">Enter Print Media   </label>
                          <textarea class="form-control" id="jpmgfPrntMe"></textarea>
                        </div>
                        <div class="form-group col-md-3 col-sm-12">
                          <label for="Mobile Number">Enter Institutional Branding </label>
                         <textarea class="form-control" id="jpmgfInstuBrand"></textarea>
                        </div>
                         
                       </div>
                     </div>

                    



                      <button type="submit" class="btn btn-success mr-2">Submit</button>
                      <span class="btn btn-light">Cancel</span>
                    </form>
                  </div>
                </div>
              </div>
      </div>  


 


    
       

<?php
  include_once('includes/footer.php');
?>  