<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Pi Portfolio List</title>
      <link rel="icon" href="favicon.ico" type="image/x-icon">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" href="https://pidatacenters.com/wp-content/themes/pidata/favicon.ico">
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://sweetalert.js.org/assets/css/app.css">
      <script src="https://sweetalert.js.org/assets/sweetalert/sweetalert.min.js" type="text/javascript"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
     <script src="../portfolio-list/assets/js/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
      <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
      <script type="text/javascript" src='https://cdn.datatables.net/fixedcolumns/3.3.1/js/dataTables.fixedColumns.min.js'></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script type="text/javascript" src='https://code.jquery.com/jquery-3.5.1.js'></script>
      <script type="text/javascript" src='https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js'></script>
      <script type="text/javascript" src='https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js'></script>
      <script type="text/javascript" src='https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js'></script>
      <script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js'></script>
      <script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js'></script>
      <script type="text/javascript" src='https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js'></script>
      <script type="text/javascript" src='https://cdn.datatables.net/fixedcolumns/3.3.1/js/dataTables.fixedColumns.min.js'></script>
      <script type="text/javascript" src='https://cdn.datatables.net/fixedcolumns/3.3.1/js/fixedColumns.bootstrap.min.js'></script>
      <script type="text/javascript" src='https://cdn.datatables.net/fixedcolumns/3.3.1/js/dataTables.fixedColumns.js'></script>
	  <link rel="stylesheet" href="https://103.210.73.84/portfolio-list/assets/css/portfolio.css">
     <script type="text/javascript" src="/portfolio-list/assets/js/portfoliojs.js?V139894fg2"></script>
	  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
		<link rel="stylesheet" href="https://datatables.net/media/css/site.css">
       <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
		<link rel="stylesheet" href="https://datatables.net/media/css/site.css">
		
		<script type="text/javascript" src='https://cdn.jsdelivr.net/gh/jeffreydwalter/ColReorderWithResize@9ce30c640e394282c9e0df5787d54e5887bc8ecc/ColReorderWithResize.js'></script>
		<style>
		body {
margin: 0;
font-family: 'Roboto',sans-serif;
font-size: 1rem;
font-weight: 500;
background-color: #f8f8f9 !important;
padding-bottom:0px !important;
}

			table.dataTable thead tr th:nth-child(3).sorting_desc  {
    background-image: url(/portfolio-list/assets/img/sort_both.png);
}
		
		.fa-arrow-down-animated {
    animation-name: collapse-icon-animation;
    animation-duration: 0.15s;
    animation-direction: normal;
    animation-timing-function: linear;
    animation-fill-mode:forwards;
}

.fa-arrow-up-animated {
    animation-name: collapse-icon-animation-reverse;
    animation-duration: 0.25s;
    animation-direction: normal;
    animation-timing-function: linear;
    animation-fill-mode:forwards;
}

@keyframes collapse-icon-animation {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(180deg);
    }
}

@keyframes collapse-icon-animation-reverse {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}

		
		</style>

<script>
		$(document).ready(function () {
    $('#toggler-btn').on('click', function(){  
	//alert("test")
      $('#clpse-icon').toggleClass( "fa-arrow-up-animated" );
    });
});
</script>
	
   </head>
   <body> 
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <a class="navbar-brand" href="#"><img src="../portfolio-list/assets/img/pi_logo.png" style="height: 34px;"></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-user-circle-o"style="font-size: 19px;margin-right: 10px;"></i><span>Welcome </span><span id="names2"> </span>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                     <a class="dropdown-item" href="#" data-toggle="modal" data-target="#myModal_1">profile</a>
                     <button class="dropdown-item" id="logout_user">logout</button>
                  </div>
               </li>
            </ul>
         </div>
      </nav>
	  
	  
	 
      <div id="myDiv">
         <div class="loader" id="loading-image" style="display:none;"></div>
      </div>
      <div class="modal" id="myModal_1">
         <div class="modal-dialog">
            <div class="modal-content">
               <!-- Modal Header -->
               <div class="modal-header" style="background: rgb(36, 59, 152);color: white;padding: 8px 12px;">
                  <h5 class="modal-title">USER PROFILE</h5>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
               </div>
               <!-- Modal body -->
               <div class="modal-body">
                  <div class="row">
                     <!-- <div class="col-lg-4">
                        <label>Userid</label>
                        <div id="userid"></div>
                        </div> -->
                     <div class="col-lg-6">
                        <label>Name</label>
                        <div id="names1"></div>
                     </div>
                     <div class="col-lg-6">
                        <label>Mobile</label>
                        <div id="mobile"></div>
                     </div>
                  </div>
               </div>
               <!-- Modal footer -->
               <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div>
	  
      <div class="container-fluid mt-3">
		<div class="row">
		<div class="col-lg-6">
		<a class="btn btn-info rounded-0" href="https://pidatacenters.com/account-managment/calls/controllers/downloadtemplate.php"><span>Download Template</span></a>
		</div>
			<div class="col-lg-6 text-right">
			 <button id="toggler-btn" class="btn btn-info rounded-0" type="button" data-toggle="collapse" data-target="#demo" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span id="clpse-icon" class="fa fa-angle-double-down fa-arrow-down-animated" style="font-size: 21px;margin-right: 8px;"> </span>ADD NEW ACCOUNT
  </button></div>
			</div>
			<div id="demo" class="collapse">
			
            <div class="card rounded-0">
               <div class="card-body">
                  <div class="row">
                     <div class="col-lg-2">
                        <label>Customer</label>
                        <input class="form-control" name="Customer" id="Customer">
                     </div>
                     <div class="col-lg-2">
                        <label>MRC</label>
                        <input class="form-control" type="text" name="MRC" id="MRC" onkeypress="CheckNumeric(event);">
                     </div>
                     <div class="col-lg-2">
                        <label>Billig Cycle</label>
                        <select id="Billig_Cycle" name="Billig_Cycle" class="form-control">
                           <option value="select">select</option>
                           <option value="1 Month (Monthly Advance)">1 Month (Monthly Advance)</option>
                           <option value="1 year (Quarterly Advance)">1 year (Quarterly Advance)</option>
                           <option value="1 year (50% Advance)">1 year (50% Advance)</option>
                           <option value="1 year (100% Advance)">1 year (100% Advance)</option>
                           <option value="1 Month (Monthly debit)">1 Month (Monthly debit)</option>
                           <option value="1 year (Quarterly debit)">1 year (Quarterly debit)</option>
                           <option value="1 year (50% debit)">1 year (50% debit)</option>
                           <option value="1 year (100% debit)">1 year (100% debit)</option>
                        </select>
                     </div>
                     <div class="col-lg-2">
                        <label>Industry</label>
                        <select id="Industry" name="Industry" class="form-control">
                           <option value="select">select</option>
                           <option value="Government">Government</option>
                           <option value="Manufacturing">Manufacturing</option>
                           <option value="Retail">Retail</option>
                           <option value="Transport and Logistics">Transport and Logistics</option>
                           <option value="Education">Education</option>
                           <option value="Healthcare">Healthcare</option>
                           <option value="BFSI">BFSI</option>
                           <option value="Hospitality and Services">Hospitality and Services</option>
                           <option value="Energy & Utilities">Energy & Utilities</option>
                        </select>
                     </div>
                     <div class="col-lg-2">
                        <label>Product/services of the customer</label>
                        <input class="form-control" name="services_of_the_customer" id="services_of_the_customer">
                     </div>
                  </div>
                  <div class="row mt-3">
                     <div class="col-lg-2">
                        <label>Corporate Office</label>
                        <input class="form-control" name="Corporate_Office" id="Corporate_Office">
                     </div>
                     <div class="col-lg-2">
                        <label>Services by Pi</label>
                        <select id="Services_by_Pi" name="Services_by_Pi" class="form-control">
                           <option value="select">select</option>
                           <option value="Colocation Services">Colocation Services</option>
                           <option value="Colud Services">Colud Services</option>
                           <option value="Managed Services">Managed Services</option>
                        </select>
                     </div>
                     <div class="col-lg-2">
                        <label>Applications Hosted</label>
                        <input class="form-control" name="Applications_Hosted" id="Applications_Hosted">
                     </div>
                     <div class="col-lg-2">
                        <label>Vmware</label>
                        <!-- <input class="form-control" onkeyup="sum();" type="number" name="Vmware" id="Vmware"> -->
                        <input class="form-control" onkeyup="sum();" type="number" name="Vmware" id="Vmware">
                     </div>
                     <div class="col-lg-2">
                        <label>H1+</label>
                        <!-- <input class="form-control" onkeyup="sum();" type="number" name="h1" id="h1"> -->
                        <input class="form-control" onkeyup="sum();" type="number" name="h1" id="h1">
                     </div>
                  </div>
                  <div class="row mt-3">
                     <div class="col-lg-2">
                        <label># of VMs</label>
                        <input class="form-control" type="number" placeholder="(Vmware) + (H1+)" name="VMs" id="VMs" disabled>
                     </div>
                     <div class="col-lg-2">
                        <label>Go Live date</label>
                        <input class="form-control" type="date" placeholder="yyyy-mm-dd" name="Live_date" id="Live_date">
                     </div>
                     <!--  <div class="col-lg-2">
                        <label>Hosted  Environment</label>
                        <input class="form-control" name="Hosted_Environment" id="Hosted_Environment">
                        </div> -->
                     <div class="col-lg-2">
                        <label>vCPU</label>
                        <input class="form-control" type="number" name="vCPU" id="vCPU">
                     </div>
                     <div class="col-lg-2">
                        <label>Memory(GB)</label>
                        <input class="form-control" type="number" name="Memory" id="Memory">
                     </div>
                     <div class="col-lg-2">
                        <label>Storage SAS/SATA</label>
                        <input class="form-control" type="number" name="SAS_SATA" id="SAS_SATA">
                     </div>
                  </div>
                  <div class="row mt-3">
                     <div class="col-lg-2">
                        <label>Storage SSD</label>
                        <input class="form-control" type="number" name="SSD" id="SSD">
                     </div>
                     <div class="col-lg-2">
                        <label>OS</label> 
                        <input class="form-control" name="OS" id="OS">
                     </div>
                     <div class="col-lg-2">
                        <label>DB</label>
                        <input class="form-control" name="DB" id="DB">
                     </div>
                     <div class="col-lg-2">
                        <label>Backup opted (Yes/No)</label>
                        <select id="Backup_opted" name="Backup_opted" class="form-control">
                           <option value="select">select</option>
                           <option value="Yes">Yes</option>
                           <option value="No">No</option>
                        </select>
                     </div>
                     <div class="col-lg-2">
                        <label>Backup Type</label>
                       <!-- <input class="form-control" name="Backup_Type" id="Backup_Type"> -->
						
						<select id="Backup_Type" name="Backup_Type" class="form-control">
                           <option value="select">select</option>
                           <option value="Full VM backup">Full VM backup</option>
                           <option value="File & Folder backup">File & Folder backup</option>
						   <option value="Volume level backup">Volume level backup</option>
                        </select>
						
                     </div>
                  </div>
                  <div class="row mt-3">
                     <div class="col-lg-2">
                        <label>Backup Frequency</label>
                       <!-- <input class="form-control" name="Backup_Frequency" id="Backup_Frequency"> -->
						
						<select id="Backup_Frequency" name="Backup_Frequency" class="form-control">
                           <option value="select">select</option>
                           <option value="daily">Daily</option>
                           <option value="weekly">Weekly</option>
						   <option value="monthly">Monthly</option>
                        </select>
                     </div>
                     <div class="col-lg-2">
                        <label>Backup retention period (Months)</label>
                        <input class="form-control"  type="number" name="Backup_retention" id="Backup_retention">
                     </div>
                     <div class="col-lg-2">
                        <label>Backup status</label>
                        <select id="Backup_status" name="Backup_status" class="form-control">
                           <option value="select">select</option>
                           <option value="Running">Running</option>
                           <option value="Not Running">Not Running</option>
                        </select>
                     </div>
                     <div class="col-lg-2">
                        <label>Back-up Storage (GB)</label>
                        <input class="form-control" type="number" name="Back_up" id="Back_up">
                     </div>
                     <div class="col-lg-2">
                        <label>DR</label>
                        <select id="DR" name="DR" class="form-control">
                           <option value="select">select</option>
                           <option value="Yes">Yes</option>
                           <option value="No">No</option>
                        </select>
                     </div>
                  </div>
                  <div class="row mt-3">
                     <div class="col-lg-3">
                        <label>HA (High availability)</label>
                        <!-- <input class="form-control" name="AH" id="AH"> -->
                        <select id="AH" name="AH" class="form-control">
                           <option value="select">select</option>
                           <option value="Yes">Yes</option>
                           <option value="No">No</option>
                        </select>
                     </div>
                     <div class="col-lg-3">
                        <label>Bandwidth(Mbps)</label>
                        <input class="form-control" type="number" name="Bandwidth" id="Bandwidth">
                     </div>
                     <div class="col-lg-3">
                        <label>Customer contact details</label>
                        <textarea class="form-control" name="Customer_contact" id="Customer_contact"></textarea>
                     </div>
                     <div class="col-lg-3">
                        <label>Last CSAT Suvery Score</label>
                        <input class="form-control" name="CSAT" id="CSAT" type="text" onkeypress="return validateFloatKeyPress(this,event);">
                     </div>
                  </div>
                <!--  <div class="row mt-3">
                     <div class="col-lg-6">
                        <label>Comments on Interest in other products of Pi</label>
                        <textarea class="form-control" name="Interest" id="Interest"></textarea>
                     </div>
                     <div class="col-lg-6">
                        <label>Action Items post weekly review</label>
                        <textarea class="form-control" name="Action" id="Action"></textarea>
                     </div>
                  </div> -->
                  <div class="row">
                     <div class="col-lg-12 text-center mt-3">
                        <button class="btn btn-primary" onclick="validate()">SUBMIT</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div style="margin-top: -62px;">
            
				<h3 class="css_list">Customers List </h3>
               <div class="table-responsive">
                  <table id="datalist" class="display table table-striped" style="width:100%">
                     <thead>
                        <tr>
                           <th>S.NO</th>
                           <th>Customer</th>
                           <th style="background-color: #263499;color: white;">MRC (₹)</th>
                           <th>Billing Cycle</th>
                           <th>Industry</th>
                           <th>Product/services  of the customer</th>
                           <th>Corporate Office</th>
                           <th>Services by Pi</th>
                           <th>Applications Hosted</th>
                           <th># of VMs</th>
                           <th>H1+</th>
                           <th>Vmware</th>
                           <th>Go Live Date</th>
                           <!-- <th style="min-width:250px;">Hosted  Environment</th> -->
                           <th>vCPU</th>
                           <th>Memory</th>
                           <th>StorageSAS/SATA</th>
                           <th>Storage SSD </th>
                           <th>OS</th>
                           <th>DB</th>
                           <th>Backup opted(Yes/No)</th>
                           <th>Backup Type</th>
                           <th>Backup Frequency</th>
                           <th>Backup retention period </th>
                           <th>Backup status</th>
                           <th>Back-up Storage  (GB) </th>
                           <th>DR</th>
                           <th>HA</th>
                           <th>Bandwidth</th>
                           <th>Customer contact details</th>
                           <th>Last CSAT Suvery Score</th>
                           <!-- <th>Comments on Interest in other products of Pi</th>
                           <th>Action Items post weekly review</th> -->
                           <th>Update</th>
                           <th>Delete</th>
                        </tr>
                     </thead>
                     <tfoot style="background: white;">
                        <tr><th></th>
                           <th colspan="1" style="text-align:right">Total:</th>
                           <th colspan="30"></th>
                        </tr>
                     </tfoot>
                  
                  </table>
               </div>
               <!--  <div id="display-resources">
                  </div> --->
               <div id="display-resources-sum"></div>
            
         </div>
      </div>
      </div>
      </div>
      <div class="modal fade" id="myModal" role="dialog">
         <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
               <div class="modal-header" style="background: rgb(36, 59, 152);color: white;padding:3px 8px;">
                  <h5>UPDATE ACCOUNT</h5>
                  <button type="button" class="close" data-dismiss="modal" style="margin-top: -8px;margin-right: 0px;">&times;</button>
               </div>
               <div class="modal-body">
                  <div class="row">
                     <div class="col-md-3">
                        <label>Customer</label>
                        <input class="form-control" name="Customer" id="customer_input">
                     </div>
                     <div class="col-md-3"> 
                        <label>MRC</label>
                        <input class="form-control" type="text" name="Customer" id="mrc_iinputss" onkeypress="CheckNumeric(event);">
                     </div>
                     <div class="col-md-3">
                        <label>Billig Cycle</label>
                        <select id="billing_cycle_input" name="billing_cycle_input" class="form-control">
                           <option value="select">select</option>
                           <option value="1 Month (Monthly Advance)">1 Month (Monthly Advance)</option>
                           <option value="1 year (Quarterly Advance)">1 year (Quarterly Advance)</option>
                           <option value="1 year (50% Advance)">1 year (50% Advance)</option>
                           <option value="1 year (100% Advance)">1 year (100% Advance)</option>
                           <option value="1 Month (Monthly debit)">1 Month (Monthly debit)</option>
                           <option value="1 year (Quarterly debit)">1 year (Quarterly debit)</option>
                           <option value="1 year (50% debit)">1 year (50% debit)</option>
                           <option value="1 year (100% debit)">1 year (100% debit)</option>
                        </select>
                     </div>
                     <div class="col-md-3">
                        <label>Industry</label>
                        <!-- <input class="form-control" name="Customer" id="industry_input">  -->
                        <select id="industry_input" name="industry_input" class="form-control">
                           <option value="select">select</option>
                           <option value="Government">Government</option>
                           <option value="Manufacturing">Manufacturing</option>
                           <option value="Retail">Retail</option>
                           <option value="Transport and Logistics">Transport and Logistics</option>
                           <option value="Education">Education</option>
                           <option value="Healthcare">Healthcare</option>
                           <option value="BFSI">BFSI</option>
                           <option value="Hospitality and Services">Hospitality and Services</option>
                           <option value="Energy & Utilities">Energy & Utilities</option>
                        </select>
                     </div>
                  </div>
                  <div class="row mt-2">
                     <div class="col-md-3">
                        <label>Product/services of the customer</label>
                        <input class="form-control" name="Customer" id="prod_of_the_customer_input">
                     </div>
                     <div class="col-md-3">
                        <label>Corporate Office</label>
                        <input class="form-control" name="Customer" id="corporate_office_input">
                     </div>
                     <div class="col-md-3">
                        <label>Services by Pi</label>
                        <!-- <input class="form-control" name="Customer" id="services_by_pi_input"> -->
                        <select id="services_by_pi_input" name="services_by_pi_input" class="form-control">
                           <option value="select">select</option>
                           <option value="Colocation Services">Colocation Services</option>
                           <option value="Colud Services">Colud Services</option>
                           <option value="Managed Services">Managed Services</option>
                        </select>
                     </div>
                     <div class="col-md-3">
                        <label>Applications Hosted</label>
                        <input class="form-control" name="Customer" id="applications_hosted_input">
                     </div>
                  </div>
                  <div class="row mt-2">
                     <div class="col-md-3">
                        <label>Vmware</label>
                        <input class="form-control" type="number" onkeyup="sumupadte();" name="Customer" id="vmware_input">
                     </div>
                     <div class="col-md-3">
                        <label>H1+</label>
                        <input class="form-control" type="number" onkeyup="sumupdate();" name="Customer" id="h_one_plus_input">
                     </div>
                     <div class="col-md-3">
                        <label># of VMs</label>
                        <input class="form-control" type="number" name="Customer" id="no_of_vm_input" disabled>
                     </div>
                     <div class="col-md-3">
                        <label>Go Live date</label>
                        <input class="form-control" name="Customer" type="date" id="go_live_date_input">
                     </div>
                  </div>
                  <div class="row mt-2">
                     <!--  <div class="col-md-3">
                        <label>Hosted Environment</label>
                        <input class="form-control" name="Customer" id="hosted_environment_input">
                        </div> -->
                     <div class="col-md-3">
                        <label>vCPU</label>
                        <input class="form-control" type="number" name="Customer" id="vCPU_input">
                     </div>
                     <div class="col-md-3">
                        <label>Memory</label>
                        <input class="form-control" type="number" name="Customer" id="memory_input">
                     </div>
                     <div class="col-md-3">
                        <label>Storage SAS/SATA</label>
                        <input class="form-control" type="number" name="Customer" id="storage_sas_sata_input">
                     </div>
                     <div class="col-md-3">
                        <label>Storage SSD</label>
                        <input class="form-control" type="number" name="Customer" id="storage_ssd_input">
                     </div>
                  </div>
                  <div class="row mt-2">
                     <div class="col-md-3">
                        <label>OS</label>
                        <input class="form-control" name="Customer" id="os_input">
                     </div>
                     <div class="col-md-3">
                        <label>DB</label>
                        <input class="form-control" name="Customer" id="db_input">
                     </div>
                     <div class="col-md-3">
                        <label>Backup opted (Yes/No)</label>
                        <!-- <input class="form-control" name="Customer" id="backup_opted_input">-->
                        <select id="backup_opted_input" name="backup_opted_input" class="form-control">
                           <option value="select">select</option>
                           <option value="Yes">Yes</option>
                           <option value="No">No</option>
                        </select>
                     </div>
                     <div class="col-md-3">
                        <label>Backup Type</label>
                       <!-- <input class="form-control" name="Customer" id="backup_type_input"> -->
						
						<select id="backup_type_input_1" name="backup_type_input_1" class="form-control">
                           <option value="select">select</option>
                           <option value="Full VM backup">Full VM backup</option>
                           <option value="File & Folder backup">File & Folder backup</option>
						   <option value="Volume level backup">Volume level backup</option>
                        </select>
						
                     </div>
                  </div>
                  <div class="row mt-2">
                     <div class="col-md-3">
                        <label>Backup Frequency</label>
                        <!-- <input class="form-control" name="Customer" id="backup_frequency_input"> -->
						
						<select id="backup_frequency_input" name="backup_frequency_input" class="form-control">
                           <option value="select">select</option>
                           <option value="daily">Daily</option>
                           <option value="weekly">Weekly</option>
						   <option value="monthly">Monthly</option>
                        </select>
                     </div>
                     <div class="col-md-3">
                        <label>Backup retention period</label>
                        <input class="form-control" name="Customer" type="number" id="backup_retention_period_input">
                     </div>
                     <div class="col-md-3">
                        <label>Backup status</label>
                        <!-- <input class="form-control" name="Customer" id="backup_status_input"> -->
                        <select id="backup_status_input" name="backup_status_input" class="form-control">
                           <option value="select">select</option>
                           <option value="Running">Running</option>
                           <option value="Not Running">Not Running</option>
                        </select>
                     </div>
                     <div class="col-md-3">
                        <label>Back-up Storage (GB)</label>
                        <input class="form-control" type="number" name="Customer" id="backup_storage_input">
                     </div>
                  </div>
                  <div class="row mt-2"> 
                     <div class="col-md-3">
                        <label>DR</label>
                        <!-- <input class="form-control" name="Customer" id="dr_input"> -->
                        <select id="dr_input" name="dr_input" class="form-control">
                           <option value="select">select</option>
                           <option value="Yes">Yes</option>
                           <option value="No">No</option>
                        </select>
                     </div>
                     <div class="col-md-3">
                        <label>HA</label>
                        <select id="ha_input" name="ha_input" class="form-control">
                           <option value="select">select</option>
                           <option value="Yes">Yes</option>
                           <option value="No">No</option>
                        </select>
                     </div>
                     <div class="col-md-3">
                        <label>Bandwidth (Mbps)</label>
                        <input class="form-control" type="number" name="Customer" id="bandwidth_input">
                     </div>
                     <div class="col-md-3">
                        <label>Customer contact details</label>
                        <textarea class="form-control" name="Customer" id="customer_contact_details_input"></textarea>
                     </div>
                  </div>
                  <div class="row 	">
                     <div class="col-md-3">
                        <label>Last CSAT Suvery Score</label>
                        <input class="form-control" name="Customer"  type="text" id="last_CSAT_suvery_score_input" onkeypress="return validateFloatKeyPress(this,event);">

                     </div>
					  <div class="col-md-6 text-center mt-3">
                        <button type="button" class="btn btn-primary"  onclick="update()">Update</button>
                     </div>
                    <!--  <div class="col-md-5">
                        <label>Comments on Interest in other products of Pi</label>
                        <textarea class="form-control" name="Customer" id="interest_in_other_products_of_pi_input"></textarea>
                     </div>
                     <div class="col-md-5">
                        <label>Action Items post weekly review</label>
                        <textarea class="form-control" name="Customer" id="action_items_post_weekly_review_input"></textarea>
                     </div> -->
                  </div>
                 
               </div>
            </div>
         </div>
      </div>
	  
   </body>
 
  
</html>