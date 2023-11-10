<!DOCTYPE html>
<html lang="en">
   <head>
      <title>PORTFOLIO LIST</title>
      <link rel="icon" href="favicon.ico" type="image/x-icon">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
      <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script type="text/javascript" src='https://code.jquery.com/jquery-3.5.1.js'></script>
      <script type="text/javascript" src='https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js'></script>
      <script type="text/javascript" src='https://cdn.datatables.net/fixedcolumns/3.3.1/js/dataTables.fixedColumns.min.js'></script>
      <script type="text/javascript" src='https://cdn.datatables.net/fixedcolumns/3.3.1/js/fixedColumns.bootstrap.min.js'></script>
      <script type="text/javascript" src='https://cdn.datatables.net/fixedcolumns/3.3.1/js/dataTables.fixedColumns.js'></script>
      <link rel="stylesheet" href="https://sweetalert.js.org/assets/css/app.css">
      <script src="https://sweetalert.js.org/assets/sweetalert/sweetalert.min.js" type="text/javascript"></script>
      <script>  
         //window.onload = getId;
           function getId(elem) {
         var id = $(elem).attr("id");
         localStorage.setItem("keyName", id);
         // alert("asdsa");
         
         $(document).ready( function () {  
         var user_id = localStorage.getItem("user_id");		
         var unique_id= localStorage.getItem("keyName");
         //alert(user_id);
         //alert(unique_id);
         $.ajax({
         url:'https://pidatacenters.com/account-managment/calls/controllers/getsinglerecord.php?user_id=1&unique_id=1757',
          type:'get',
         dataType: 'json',
         ContentType: 'application/json; charset=utf-8',
          data:{user_id:user_id,unique_id:unique_id},
           success:function(result){
         //alert(user_id);
         //alert(result.status);
           var msg = "";
         if(result.status == "sucess" && result.status_code == 200){
         //alert("test");
         //alert(JSON.stringify(result));
         var myJson = JSON.stringify(result);
         var result = JSON.parse(myJson)
         // alert(result.data.applications_hosted);  
         //localStorage.setItem('userss', JSON.stringify(data.records));
         // for (i = 0; i < result.length; i++) {
         //	alert(result[0].customer);
           $('#customer_input').val(result.data.customer);
           $('#mrc_input').val(result.data.mrc);
           $('#billing_cycle_input').val(result.data.billing_cycle);
           $('#industry_input').val(result.data.industry);
         
          $('#prod_of_the_customer_input').val(result.data.prod_of_the_customer);
           $('#corporate_office_input').val(result.data.corporate_office);
           $('#services_by_pi_input').val(result.data.services_by_pi);
           $('#applications_hosted_input').val(result.data.applications_hosted);
         
         
          $('#no_of_vm_input').val(result.data.no_of_vm);
           $('#h_one_plus_input').val(result.data.h_one_plus);
           $('#vmware_input').val(result.data.vmware);
           $('#go_live_date_input').val(result.data.go_live_date);
           
           $('#hosted_environment_input').val(result.data.hosted_environment);
           $('#vCPU_input').val(result.data.vCPU);
           $('#memory_input').val(result.data.memory);
           $('#storage_sas_sata_input').val(result.data.storage_sas_sata);
           
           $('#storage_ssd_input').val(result.data.storage_ssd);
           $('#os_input').val(result.data.os);
           $('#db_input').val(result.data.db);
           $('#backup_opted_input').val(result.data.backup_opted);
           
           $('#backup_type_input').val(result.data.backup_type);
           $('#backup_frequency_input').val(result.data.backup_frequency);
           $('#backup_retention_period_input').val(result.data.backup_retention_period);
           $('#backup_status_input').val(result.data.backup_status);
           
           
           $('#backup_storage_input').val(result.data.backup_storage);
           $('#dr_input').val(result.data.dr);
           $('#ha_input').val(result.data.ha);
           $('#bandwidth_input').val(result.data.bandwidth);
           
           $('#customer_contact_details_input').val(result.data.customer_contact_details);
           $('#last_CSAT_suvery_score_input').val(result.data.last_CSAT_suvery_score);
           $('#interest_in_other_products_of_pi_input').val(result.data.interest_in_other_products_of_pi);
           $('#action_items_post_weekly_review_input').val(result.data.action_items_post_weekly_review);
			//}
         }
         else{
                            msg = "Please try after sometime";
                        }
                        $("#message").html(msg);
                    }
                });
         });
         };
         
         $(document).ready( function () { 
			// alert('called');
             
               /*if(!(localStorage.getItem("status") == "sucess")){
                  window.location.href = "login.php";
               }else{ */
                  document.getElementById("userid").innerHTML = localStorage.getItem("user_id");
                  document.getElementById("names1","names2").innerHTML = localStorage.getItem("name");
                  document.getElementById("names2").innerHTML = localStorage.getItem("name");
                  document.getElementById("mobile").innerHTML = localStorage.getItem("mobile");
                  
                  var uid = localStorage.getItem("user_id");
                  $.ajax({
                     url: "https://pidatacenters.com/account-managment/calls/controllers/getacconuntdetails.php?user_id="+uid,
                     method: "GET",
                     dataType: "JSON",
                     success: function (data) {
         			
         //alert(localStorage.getItem('update_id'));
          console.log(typeof(data));
                      //  alert(JSON.stringify(data.records));
         //localStorage.setItem('user', JSON.stringify(data.records.id));
         //localStorage.setItem('user');
         //alert(localStorage.getItem('user');
                        $('#datalist').DataTable({
         	fixedColumns: true,
                           async: false,
                           data: data.data,
          
                           columns: [
                              { title: "S.No" },
                              { title: "Customer" },
                              { title: "MRC"},
                              { title: "Billing Cycle" },
                              { title: "Industry"},
                              { title: "Product/services  of the customer"},
                              { title: "Corporate Office"},
                              { title: "Services by Pi" },
                              { title: "Applications Hosted" },
                              { title: "# of VMs" },
                              { title: "H1+" },
                              { title: "Vmware" }, 
                              { title: "Go Live Date" },
                              { title: "Hosted  Environment" },
                              { title: "vCPU" },
                              { title: "Memory" },
                              { title: "Storage SAS/SATA" },
                              { title: "Storage SSD" },
                              { title: "OS" },
                              { title: "DB" },
                              { title: "Backup opted(Yes/No)" },
                              { title: "Backup Type" },
                              { title: "Backup Frequency" },
                              { title: "Backup retention period" },
                              { title: "Backup status" },
                              { title: "Back-up Storage  (GB)" }, 
                              { title: "DR" },
                              { title: "HA" },
                              { title: "Bandwidth" },
                              { title: "Customer contact details" },
                              { title: "Last CSAT Suvery Score" },                    
                              { title: "Comments on Interest in other products of Pi" },
                              { title: "Action Items post weekly review" },
                              { title: "Update" },
                              { title: "Delete" },
                           ],
          
          
            
                           "footerCallback": function (row, data, start, end, display) {
                                 var api = this.api(), data;
                                    
                                 // Remove the formatting to get integer data for summation
                                 var intVal = function ( i ) {
                                    return typeof i === 'string' ?
                                    i.replace(/[\$,]/g, '')*1 :
                                    typeof i === 'number' ?
                                    i : 0;
                                 };
             
                                 // Total over all pages
                                 total = api
                                    .column( 2 )
                                    .data()
                                    .reduce( function (a, b) {
                                          return intVal(a) + intVal(b);
                                    }, 0 );
                                 // Total over this page
                                 pageTotal = api
                                       .column( 2, { page: 'current'} )
                                       .data()
                                       .reduce( function (a, b) {
                                          return intVal(a) + intVal(b);
                                       }, 0 );
                        
                                    // Update footer
                                 $( api.column( 2 ).footer() ).html(
                                       'Page Total'+pageTotal.toLocaleString('en-IN', {
                                          maximumFractionDigits: 2,
                                          style: 'currency',
                                          currency: 'INR'
                                       }) +' ( Total '+ total .toLocaleString('en-IN', {
                                          maximumFractionDigits: 2,
                                          style: 'currency',
                                          currency: 'INR'
                                       })+ ' total)'
                                    );
                           },
                          
             "dom": 'Bfrtip'
             , "buttons": [
                      {   extend: 'excelHtml5'
                      ,   title: 'SalesLedgerTransactions'
                      }
                  ]
             , "autoWidth":false
             
             , "info":false
             , "JQueryUI":true
             , "ordering":true
             , "paging":false
             , "scrollY":"500px"
             , "scrollX":"1485px"
             , "scrollCollapse":true
             
             
                        }).columns.adjust();
                     },error: function (error)// 24 25
                     {
                        console.log("Error in Fetching Data:");
                        console.log(error.responseText);
                     }
                  });
             
                  $("#logout_user").click(function(){
                     localStorage.clear();
                     window.location.href = "/portfolio-list/login.php";
                  });
               
             });
             
             
             
             
                      // displayResources.text("Loading data from JSON source...");
          
      </script>
      <style>
         body {
         font-family: 'Roboto', sans-serif;
         }
         .navbar-expand-lg .navbar-collapse {
         display: -ms-flexbox!important;
         display: flex!important;
         -ms-flex-preferred-size: auto;
         justify-content: flex-end;
         flex-basis: auto;
         }
         .dropdown-menu {
         top: 61%;
         left: -55px;
         border-radius: 0px;
         }
         .bg-light {
         background-color: #f8f9fa!important;
         border-bottom: 3px solid #243b98;
         }
         @media (min-width: 992px){
         .col-lg-2 {
         -ms-flex: 0 0 20%;
         flex: 0 0 20%;
         max-width: 20%;
         }}
         label {
         display: inline-block;
         margin-bottom: .5rem;
         font-weight: 500;
         font-size: 14px;
         }
         .table-bordered td, .table-bordered th {
         border: 1px solid #dee2e6;
         font-size: 15px;
         color: black;
         }
         .btn-info {
         color: #fff;
         background-color: #243b98;
         border-color: #243b98;
         font-weight: 500;
         }
         .card-header {
         padding: .75rem 1.25rem;
         margin-bottom: 0;
         background-color: rgb(36, 59, 152);
         border-bottom: 1px solid rgb(36, 59, 152);
         color: white;
         font-weight: 500;
         }
         .btn-info:hover {
         color: #fff;
         background-color: #5466af;
         border-color: #243b98;
         }
         .btn-info.focus, .btn-info:focus {
         box-shadow: 0 0 0 0.2rem rgba(36, 59, 152, 0.5);
         }
         /* width */
         ::-webkit-scrollbar {
         width: 10px;
         }
         /* Track */
         ::-webkit-scrollbar-track {
         background: #f1f1f1; 
         }
         /* Handle */
         ::-webkit-scrollbar-thumb {
         background: #888; 
         }
         /* Handle on hover */
         ::-webkit-scrollbar-thumb:hover {
         background: #555; 
         }
         .dt-buttons{
         position:absolute;
         }
         table.dataTable thead .sorting_asc {
         background: #8b8c90;
         color: white;
         }
         .dataTables_wrapper .dataTables_filter input {
         margin-left: 0.5em;
         border-radius: 0px;
         padding: 5px;
         border: 2px solid #70ae3e;
         }
         table.dataTable tbody td {
         padding: 8px 10px;
         background: white;
         font-weight: 500;
         color: #4d4d4f;
         }
         .navbar-light .navbar-nav .nav-link {
         color: rgba(0,0,0,.5);
         font-weight: 1000;
         }
         table.dataTable thead .sorting {
         background-image: url(../images/sort_both.png);
         background: #8b8c90;
         color: white;
         }
         .dt-button {
         color: white;
         background: #70ae3e;
         font-weight: 1000;
         border: none;
         padding: 4px 20px;
         }
         .close {
         float: right;
         font-size: 1.5rem;
         font-weight: 700;
         line-height: 1;
         color: #fff;
         text-shadow: 0 1px 0 #fff;
         opacity: 1;
         }
         .loader {
         position: fixed;
         left: 0px;
         top: 0px;
         width: 100%;
         height: 100%;
         z-index: 9999;
         opacity: 0.92;
         background: url('/../wp-content/uploads/2020/05/Thumbnails/2.gif') 50% 50% no-repeat rgb(249, 249, 249);
         }
         @media (min-width: 992px){
         .modal-lg, .modal-xl {
         max-width: 1200px;
         }}
      </style>
   </head>
   <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <a class="navbar-brand" href="#"><img src="../portfolio-list/pi_logo.png" style="height: 34px;"></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-user-circle-o"style="font-size: 19px;margin-right: 10px;"></i><label id="names2"></label>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                     <a class="dropdown-item" href="#" data-toggle="modal" data-target="#myModal1">profile</a>
                     <button class="dropdown-item" id="logout_user">logout</button>
                  </div>
               </li>
            </ul>
         </div>
      </nav>
      <div id="myDiv">
         <div class="loader" id="loading-image" style="display:none;"></div>
      </div>
      <div class="modal" id="myModal1">
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
                     <div class="col-lg-4">
                        <label>Userid</label>
                        <div id="userid"></div>
                     </div>
                     <div class="col-lg-4">
                        <label>namme</label>
                        <div id="names1"></div>
                     </div>
                     <div class="col-lg-4">
                        <label>mobile</label>
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
      <div class="container-fluid mt-5">
         <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">ADD NEW PORTFOLIO</button>
         <div id="demo" class="collapse">
            <div class="card">
               <div class="card-body">
                  <div class="row">
                     <div class="col-lg-2">
                        <label>Customer</label>
                        <input class="form-control" name="Customer" id="Customer">
                     </div>
                     <div class="col-lg-2">
                        <label>MRC</label>
                        <input class="form-control" type="number" name="MRC" id="MRC">
                     </div>
                     <div class="col-lg-2">
                        <label>Billig Cycle</label>
                        <input class="form-control" name="Billig_Cycle" id="Billig_Cycle">
                     </div>
                     <div class="col-lg-2">
                        <label>Industry</label>
                        <input class="form-control" name="Industry" id="Industry">
                     </div>
                     <div class="col-lg-2">
                        <label>Product/services of the customer</label>
                        <input class="form-control" name="services_of_the_customer" id="services_of_the_customer">
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-2">
                        <label>Corporate Office</label>
                        <input class="form-control" name="Corporate_Office" id="Corporate_Office">
                     </div>
                     <div class="col-lg-2">
                        <label>Services by Pi</label>
                        <input class="form-control" name="Services_by_Pi" id="Services_by_Pi">
                     </div>
                     <div class="col-lg-2">
                        <label>Applications Hosted</label>
                        <input class="form-control" name="Applications_Hosted" id="Applications_Hosted">
                     </div>
                     <div class="col-lg-2">
                        <label># of VMs</label>
                        <input class="form-control" name="VMs" id="VMs">
                     </div>
                     <div class="col-lg-2">
                        <label>H1+</label>
                        <input class="form-control" name="h1" id="h1">
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-2">
                        <label>Vmware</label>
                        <input class="form-control" name="Vmware" id="Vmware">
                     </div>
                     <div class="col-lg-2">
                        <label>Go Live date</label>
                        <input class="form-control" type="text" placeholder="yyyy-mm-dd" name="Live_date" id="Live_date">
                     </div>
                     <div class="col-lg-2">
                        <label>Hosted  Environment</label>
                        <input class="form-control" name="Hosted_Environment" id="Hosted_Environment">
                     </div>
                     <div class="col-lg-2">
                        <label>vCPU</label>
                        <input class="form-control" type="number" name="vCPU" id="vCPU">
                     </div>
                     <div class="col-lg-2">
                        <label>Memory</label>
                        <input class="form-control" type="number" name="Memory" id="Memory">
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-2">
                        <label>Storage SAS/SATA</label>
                        <input class="form-control" type="number" name="SAS_SATA" id="SAS_SATA">
                     </div>
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
                        <input class="form-control" name="Backup_opted" id="Backup_opted">
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-2">
                        <label>Backup Type</label>
                        <input class="form-control" name="Backup_Type" id="Backup_Type">
                     </div>
                     <div class="col-lg-2">
                        <label>Backup Frequency</label>
                        <input class="form-control" name="Backup_Frequency" id="Backup_Frequency">
                     </div>
                     <div class="col-lg-2">
                        <label>Backup retention period</label>
                        <input class="form-control"  name="Backup_retention" id="Backup_retention">
                     </div>
                     <div class="col-lg-2">
                        <label>Backup status</label>
                        <input class="form-control" name="Backup_status" id="Backup_status">
                     </div>
                     <div class="col-lg-2">
                        <label>Back-up Storage (GB)</label>
                        <input class="form-control" name="Back_up" id="Back_up">
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-2">
                        <label>DR</label>
                        <input class="form-control" name="DR" id="DR">
                     </div>
                     <div class="col-lg-2">
                        <label>AH</label>
                        <input class="form-control" name="AH" id="AH">
                     </div>
                     <div class="col-lg-2">
                        <label>Bandwidth</label>
                        <input class="form-control" name="Bandwidth" id="Bandwidth">
                     </div>
                     <div class="col-lg-2">
                        <label>Customer contact details</label>
                        <textarea class="form-control" name="Customer_contact" id="Customer_contact"></textarea>
                     </div>
                     <div class="col-lg-2">
                        <label>Last CSAT Suvery Score</label>
                        <input class="form-control" name="CSAT" id="CSAT">
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-3">
                        <label>Comments on Interest in other products of Pi</label>
                        <textarea class="form-control" name="Interest" id="Interest"></textarea>
                     </div>
                     <div class="col-lg-2">
                        <label>Action Items post weekly review</label>
                        <textarea class="form-control" name="Action" id="Action"></textarea>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12 text-center mt-3">
                        <button class="btn btn-primary" onclick="validate()">SUBMIT</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="card mt-3">
            <div id="result"></div>
            <div class="card-header">PORTFOLIO LIST</div>
            <div class="card-body">
               <div class="table-responsive">
                  <table id="datalist" class="display table table-bordered table-striped" style="width:100%">
                     <thead>
                        <tr>
                           <th>S.NO</th>
                           <th style="min-width:250px;">Customer</th>
                           <th style="min-width:350px;">MRC</th>
                           <th style="min-width:250px;">Billing Cycle</th>
                           <th style="min-width:250px;">Industry</th>
                           <th style="min-width:250px;">Product/services  of the customer</th>
                           <th style="min-width:250px;">Corporate Office</th>
                           <th style="min-width:250px;">Services by Pi</th>
                           <th style="min-width:250px;">Applications Hosted</th>
                           <th style="min-width:250px;"># of VMs</th>
                           <th style="min-width:250px;">H1+</th>
                           <th style="min-width:250px;">Vmware</th>
                           <th style="min-width:250px;">Go Live Date</th>
                           <th style="min-width:250px;">Hosted  Environment</th>
                           <th style="min-width:250px;">vCPU</th>
                           <th style="min-width:250px;">Memory</th>
                           <th style="min-width:250px;">StorageSAS/SATA</th>
                           <th style="min-width:250px;">Storage SSD </th>
                           <th style="min-width:250px;">OS</th>
                           <th style="min-width:250px;">DB</th>
                           <th style="min-width:250px;">Backup opted(Yes/No)</th>
                           <th style="min-width:250px;">Backup Type</th>
                           <th style="min-width:250px;">Backup Frequency</th>
                           <th style="min-width:250px;">Backup retention period </th>
                           <th style="min-width:250px;">Backup status</th>
                           <th style="min-width:250px;">Back-up Storage  (GB) </th>
                           <th style="min-width:250px;">DR</th>
                           <th style="min-width:250px;">HA</th>
                           <th style="min-width:250px;">Bandwidth</th>
                           <th style="min-width:250px;">Customer contact details</th>
                           <th style="min-width: 316px;">Last CSAT Suvery Score</th>
                           <th style="min-width: 316px;">Comments on Interest in other products of Pi</th>
                           <th style="min-width: 316px;">Action Items post weekly review</th>
                           <th style="min-width: 100px;">Update</th>
                           <th style="min-width: 100px;">Delete</th>
                        </tr>
                     </thead>
                     <tfoot>
                        <tr>
                           <th colspan="2" style="text-align:right">Total:</th>
                           <th colspan="33"></th>
                        </tr>
                     </tfoot>
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
      </div> 
      <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog modal-lg">
         <!-- Modal content-->
         <div class="modal-content">
            <div class="modal-header">
              
               <h4 class="modal-title">Modal Header</h4>
			   <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
               <div class="row">
                  <div class="col-md-3">
                     <label>Customer</label>
                     <input class="form-control" name="Customer" id="customer_input">
                  </div>
                  <div class="col-md-3"> 
                     <label>MRC</label>
                     <input class="form-control" name="Customer" id="mrc_input">
                  </div>
                  <div class="col-md-3">
                     <label>Billig Cycle</label>
                     <input class="form-control" name="Customer" id="billing_cycle_input">
                  </div>
                  <div class="col-md-3">
                     <label>Industry</label>
                     <input class="form-control" name="Customer" id="industry_input">
                  </div>
               </div>
               <div class="row">
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
                     <input class="form-control" name="Customer" id="services_by_pi_input">
                  </div>
                  <div class="col-md-3">
                     <label>Applications Hosted</label>
                     <input class="form-control" name="Customer" id="applications_hosted_input">
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-3">
                     <label># of VMs</label>
                     <input class="form-control" name="Customer" id="no_of_vm_input">
                  </div>
                  <div class="col-md-3">
                     <label>H1+</label>
                     <input class="form-control" name="Customer" id="h_one_plus_input">
                  </div>
                  <div class="col-md-3">
                     <label>Vmware</label>
                     <input class="form-control" name="Customer" id="vmware_input">
                  </div>
                  <div class="col-md-3">
                     <label>Go Live date</label>
                     <input class="form-control" name="Customer" id="go_live_date_input">
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-3">
                     <label>Hosted Environment</label>
                     <input class="form-control" name="Customer" id="hosted_environment_input">
                  </div>
                  <div class="col-md-3">
                     <label>vCPU</label>
                     <input class="form-control" name="Customer" id="vCPU_input">
                  </div>
                  <div class="col-md-3">
                     <label>Memory</label>
                     <input class="form-control" name="Customer" id="memory_input">
                  </div>
                  <div class="col-md-3">
                     <label>Storage SAS/SATA</label>
                     <input class="form-control" name="Customer" id="storage_sas_sata_input">
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-3">
                     <label>Storage SSD</label>
                     <input class="form-control" name="Customer" id="storage_ssd_input">
                  </div>
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
                     <input class="form-control" name="Customer" id="backup_opted_input">
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-3">
                     <label>Backup Type</label>
                     <input class="form-control" name="Customer" id="backup_type_input">
                  </div>
                  <div class="col-md-3">
                     <label>Backup Frequency</label>
                     <input class="form-control" name="Customer" id="backup_frequency_input">
                  </div>
                  <div class="col-md-3">
                     <label>Backup retention period</label>
                     <input class="form-control" name="Customer" id="backup_retention_period_input">
                  </div>
                  <div class="col-md-3">
                     <label>Backup status</label>
                     <input class="form-control" name="Customer" id="backup_status_input">
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-3">
                     <label>Back-up Storage (GB)</label>
                     <input class="form-control" name="Customer" id="backup_storage_input">
                  </div>
                  <div class="col-md-3">
                     <label>DR</label>
                     <input class="form-control" name="Customer" id="dr_input">
                  </div>
                  <div class="col-md-3">
                     <label>AH</label>
                     <input class="form-control" name="Customer" id="ha_input">
                  </div>
                  <div class="col-md-3">
                     <label>Bandwidth</label>
                     <input class="form-control" name="Customer" id="bandwidth_input">
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-3">
                     <label>Customer contact details</label>
                     <input class="form-control" name="Customer" id="customer_contact_details_input">
                  </div>
                  <div class="col-md-3">
                     <label>Last CSAT Suvery Score</label>
                     <input class="form-control" name="Customer" id="last_CSAT_suvery_score_input">
                  </div>
                  <div class="col-md-3">
                     <label>Comments on Interest in other products of Pi</label>
                     <input class="form-control" name="Customer" id="interest_in_other_products_of_pi_input">
                  </div>
                  <div class="col-md-3">
                     <label>Action Items post weekly review</label>
                     <input class="form-control" name="Customer" id="action_items_post_weekly_review_input">
                  </div>
               </div>
			   <div class="row">
				<div class="col-md-12 text-center">
				<button type="button" class="btn btn-primary"  onclick="update()">Update</button>
				</div>
			   </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-default"  data-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div>
	  </div>
   </body>
   <script>
      function validate() {
      	// alert("test");
      
      	Customer_obj = document.getElementById('Customer').value.trim();
      	MRC_obj = document.getElementById('MRC').value.trim();
      	Billig_Cycle_obj = document.getElementById('Billig_Cycle').value.trim();
      	Industry_obj = document.getElementById('Industry').value.trim();
      	services_of_the_customer_obj = document.getElementById('services_of_the_customer').value.trim();
      
      	Corporate_Office_obj = document.getElementById('Corporate_Office').value.trim();
      	Services_by_Pi_obj = document.getElementById('Services_by_Pi').value;
      	Applications_Hosted_obj = document.getElementById('Applications_Hosted').value.trim();
      	VMs_obj = document.getElementById('VMs').value.trim();
      	h1_obj = document.getElementById('h1').value.trim();
      	Vmware_obj = document.getElementById('Vmware').value.trim();
      
      	Live_date_obj = document.getElementById('Live_date').value.trim();
      	Hosted_Environment_obj = document.getElementById('Hosted_Environment').value.trim();
      	vCPU_obj = document.getElementById('vCPU').value;
      	Memory_obj = document.getElementById('Memory').value.trim();
      	SAS_SATA_obj = document.getElementById('SAS_SATA').value.trim();
      	SSD_obj = document.getElementById('SSD').value.trim();
      
      	OS_obj = document.getElementById('OS').value.trim();
      	DB_obj = document.getElementById('DB').value.trim();
      	Backup_opted_obj = document.getElementById('Backup_opted').value.trim();
      	Backup_Type_obj = document.getElementById('Backup_Type').value;
      	Backup_Frequency_obj = document.getElementById('Backup_Frequency').value.trim();
      	Backup_retention_obj = document.getElementById('Backup_retention').value.trim();
      	Backup_status_obj = document.getElementById('Backup_status').value.trim();
      	Back_up_obj = document.getElementById('Back_up').value.trim();
      
      	DR_obj = document.getElementById('DR').value.trim();
      	AH_obj = document.getElementById('AH').value.trim();
      	Bandwidth_obj = document.getElementById('Bandwidth').value;
      	Customer_contact_obj = document.getElementById('Customer_contact').value.trim();
      	CSAT_obj = document.getElementById('CSAT').value.trim();
      	Interest_obj = document.getElementById('Interest').value;
      	Action_obj = document.getElementById('Action').value.trim();
      
      	if (Customer_obj == '' || MRC_obj == '' || Billig_Cycle_obj == '' || Industry_obj == '' || services_of_the_customer_obj == '' ||
      		Corporate_Office_obj == '' || Services_by_Pi_obj == '' || Customer_obj == '' || Applications_Hosted_obj == '' || VMs_obj == '' ||
      		h1_obj == '' || Vmware_obj == '' || Live_date_obj == '' || Hosted_Environment_obj == '' || vCPU_obj == '' || Memory_obj == '' ||
      		SAS_SATA_obj == '' || SSD_obj == '' || OS_obj == '' || DB_obj == '' || Backup_opted_obj == '' || Backup_Type_obj == '' || Backup_Frequency_obj == '' ||
      		Backup_retention_obj == '' || Backup_status_obj == '' || Back_up_obj == '' || DR_obj == '' || AH_obj == '' || Bandwidth_obj == '' ||
      		Customer_contact_obj == '' || CSAT_obj == '' || Interest_obj == '' || Action_obj == '') {
      
      		alert("All Fields Are Mandatory", "error");
      		return false;
      	}
      
      
      	// atpos = p_bemail.indexOf("@");
      	// dotpos = p_bemail.lastIndexOf(".");
      	// if (atpos < 1 || (dotpos - atpos < 2)) {
      
      	// alert("", "Please Enter A Valid Corporate Email Address", "error");
      	// return false;
      	// } if (!(phone.match(/^[6789]\d{9}$/))) {
      
      	// alert("", "Please Enter A Valid Phone Number", "error");
      	// return false;
      	// } else {
      
      
      	input = {
      		"user_id": localStorage.getItem("user_id"),
      		"Customer_key": Customer_obj,
      		"MRC_key": MRC_obj,
      		"Billig_Cycle_key": Billig_Cycle_obj,
      		"Industry_key": Industry_obj,
      		"services_of_the_customer_key": services_of_the_customer_obj,
      		"Corporate_Office_key": Corporate_Office_obj,
      		"Services_by_Pi_key": Services_by_Pi_obj,
      
      		"Applications_Hosted_key": Applications_Hosted_obj,
      		"VMs_key": VMs_obj,
      		"h1_key": h1_obj,
      		"Vmware_key": Vmware_obj,
      		"Live_date_key": Live_date_obj,
      		"Hosted_Environment_key": Hosted_Environment_obj,
      		"vCPU_key": vCPU_obj,
      
      		"Memory_key": Memory_obj,
      		"SAS_SATA_key": SAS_SATA_obj,
      		"SSD_key": SSD_obj,
      		"OS_key": OS_obj,
      		"DB_key": DB_obj,
      		"Backup_opted_key": Backup_opted_obj,
      		"Backup_Type_key": Backup_Type_obj,
      
      		"Backup_Frequency_key": Backup_Frequency_obj,
      		"Backup_retention_key": Backup_retention_obj,
      		"Backup_status_key": Backup_status_obj,
      		"Back_up_key": Back_up_obj,
      		"DR_key": DR_obj,
      		"AH_key": AH_obj,
      		"Bandwidth_key": Bandwidth_obj,
      
      		"Customer_contact_key": Customer_contact_obj,
      		"CSAT_key": CSAT_obj,
      		"Interest_key": Interest_obj,
      		"Action_key": Action_obj
      
      
      	};
      	console.log(JSON.stringify(input));
      	// alert(JSON.stringify(input));
      	// console.log(JSON.stringify(input));
      
      
      	$.ajax({
      
      		url: "https://pidatacenters.com/account-managment/calls/controllers/activeaccounts.php",
      		type: "POST",
      		data: input,
      		dataType: 'json',
      		ContentType: 'application/json; charset=utf-8',
      		beforeSend: function () {
      			$("#loading-image").show();
      		},
      
      
      		success: function (data) {
      			// alert("comming");
      			if (data.status == "err" && data.status_code == 201) {
      				alert("Sorry", "Please try again", "err");
      				console.log(JSON.stringify(input));
      				$("#loading-image").hide();
      			} else if (data.status == "sucess" && data.status_code == 200) {
      				swal("Good job!", "You successfully added new customer", "success").then(function(){
      				location.reload();
      				});
      				// alert(JSON.stringify(data));
      				// alert(JSON.stringify(input));
      				$("#loading-image").hide();
      			} else if (data.status == "error" && data.status_code == 503) {
      				alert("Sorry", "Something went wrong", "error");
      				$("#loading-image").hide();
      			}
      		},
      		error: function (data) {
      			// alert('error');
      			// alert("erroee")
      			alert(data.message);
      			return false;
      		}
      	});
      
      	return true;
      }
	  
	  
	    function update() {
      	alert("test");
      
      	Customer_obj = document.getElementById('customer_input').value.trim();
      	MRC_obj = document.getElementById('mrc_input').value.trim();
      	Billig_Cycle_obj = document.getElementById('billing_cycle_input').value.trim();
      	Industry_obj = document.getElementById('industry_input').value.trim();
      	services_of_the_customer_obj = document.getElementById('prod_of_the_customer_input').value.trim();
      
      	Corporate_Office_obj = document.getElementById('corporate_office_input').value.trim();
      	Services_by_Pi_obj = document.getElementById('services_by_pi_input').value;
      	Applications_Hosted_obj = document.getElementById('applications_hosted_input').value.trim();
      	VMs_obj = document.getElementById('no_of_vm_input').value.trim();
      	h1_obj = document.getElementById('h_one_plus_input').value.trim();
      	Vmware_obj = document.getElementById('vmware_input').value.trim();
      
      	Live_date_obj = document.getElementById('go_live_date_input').value.trim();
      	Hosted_Environment_obj = document.getElementById('hosted_environment_input').value.trim();
      	vCPU_obj = document.getElementById('vCPU_input').value;
      	Memory_obj = document.getElementById('memory_input').value.trim();
      	SAS_SATA_obj = document.getElementById('storage_sas_sata_input').value.trim();
      	SSD_obj = document.getElementById('storage_ssd_input').value.trim();
      
      	OS_obj = document.getElementById('os_input').value.trim();
      	DB_obj = document.getElementById('db_input').value.trim();
      	Backup_opted_obj = document.getElementById('backup_opted_input').value.trim();
      	Backup_Type_obj = document.getElementById('backup_type_input').value;
      	Backup_Frequency_obj = document.getElementById('backup_frequency_input').value.trim();
      	Backup_retention_obj = document.getElementById('backup_retention_period_input').value.trim();
      	Backup_status_obj = document.getElementById('backup_status_input').value.trim();
      	Back_up_obj = document.getElementById('backup_storage_input').value.trim();
      
      	DR_obj = document.getElementById('dr_input').value.trim();
      	AH_obj = document.getElementById('ha_input').value.trim();
      	Bandwidth_obj = document.getElementById('bandwidth_input').value;
      	Customer_contact_obj = document.getElementById('customer_contact_details_input').value.trim();
      	CSAT_obj = document.getElementById('last_CSAT_suvery_score_input').value.trim();
      	Interest_obj = document.getElementById('interest_in_other_products_of_pi_input').value;
      	Action_obj = document.getElementById('action_items_post_weekly_review_input').value.trim();
      
      	if (Customer_obj == '' || MRC_obj == '' || Billig_Cycle_obj == '' || Industry_obj == '' || services_of_the_customer_obj == '' ||
      		Corporate_Office_obj == '' || Services_by_Pi_obj == '' || Customer_obj == '' || Applications_Hosted_obj == '' || VMs_obj == '' ||
      		h1_obj == '' || Vmware_obj == '' || Live_date_obj == '' || Hosted_Environment_obj == '' || vCPU_obj == '' || Memory_obj == '' ||
      		SAS_SATA_obj == '' || SSD_obj == '' || OS_obj == '' || DB_obj == '' || Backup_opted_obj == '' || Backup_Type_obj == '' || Backup_Frequency_obj == '' ||
      		Backup_retention_obj == '' || Backup_status_obj == '' || Back_up_obj == '' || DR_obj == '' || AH_obj == '' || Bandwidth_obj == '' ||
      		Customer_contact_obj == '' || CSAT_obj == '' || Interest_obj == '' || Action_obj == '') {
      
      		alert("All Fields Are Mandatory", "error");
      		return false;
      	}
      
      
      	// atpos = p_bemail.indexOf("@");
      	// dotpos = p_bemail.lastIndexOf(".");
      	// if (atpos < 1 || (dotpos - atpos < 2)) {
      
      	// alert("", "Please Enter A Valid Corporate Email Address", "error");
      	// return false;
      	// } if (!(phone.match(/^[6789]\d{9}$/))) {
      
      	// alert("", "Please Enter A Valid Phone Number", "error");
      	// return false;
      	// } else {
      
      
      	input = {
      		"user_id": localStorage.getItem("user_id"),
			"unique_id":localStorage.getItem("keyName"),
      		"Customer_key": Customer_obj,
      		"MRC_key": MRC_obj,
      		"Billig_Cycle_key": Billig_Cycle_obj,
      		"Industry_key": Industry_obj,
      		"services_of_the_customer_key": services_of_the_customer_obj,
      		"Corporate_Office_key": Corporate_Office_obj,
      		"Services_by_Pi_key": Services_by_Pi_obj,
      
      		"Applications_Hosted_key": Applications_Hosted_obj,
      		"VMs_key": VMs_obj,
      		"h1_key": h1_obj,
      		"Vmware_key": Vmware_obj,
      		"Live_date_key": Live_date_obj,
      		"Hosted_Environment_key": Hosted_Environment_obj,
      		"vCPU_key": vCPU_obj,
      
      		"Memory_key": Memory_obj,
      		"SAS_SATA_key": SAS_SATA_obj,
      		"SSD_key": SSD_obj,
      		"OS_key": OS_obj,
      		"DB_key": DB_obj,
      		"Backup_opted_key": Backup_opted_obj,
      		"Backup_Type_key": Backup_Type_obj,
      
      		"Backup_Frequency_key": Backup_Frequency_obj,
      		"Backup_retention_key": Backup_retention_obj,
      		"Backup_status_key": Backup_status_obj,
      		"Back_up_key": Back_up_obj,
      		"DR_key": DR_obj,
      		"AH_key": AH_obj,
      		"Bandwidth_key": Bandwidth_obj,
      
      		"Customer_contact_key": Customer_contact_obj,
      		"CSAT_key": CSAT_obj,
      		"Interest_key": Interest_obj,
      		"Action_key": Action_obj,
			
      
      
      	};
      	console.log(JSON.stringify(input));
      	// alert(JSON.stringify(input));
      	// console.log(JSON.stringify(input));
      
      
      	$.ajax({
      
      		url: "https://pidatacenters.com/account-managment/calls/controllers/editaccountdetails.php",
      		type: "POST",
      		data: input,
      		dataType: 'json',
      		ContentType: 'application/json; charset=utf-8',
      		beforeSend: function () {
      			$("#loading-image").show();
      		},
      
      
      		success: function (data) {
      			// alert("comming");
      			if (data.status == "err" && data.status_code == 201) {
      				alert("Sorry", "Please try again", "err");
      				console.log(JSON.stringify(input));
      				$("#loading-image").hide();
      			} else if (data.status == "sucess" && data.status_code == 200) {
      				swal("Good job!", "You successfully updated customer", "success").then(function(){
      				location.reload();
      				});
      				// alert(JSON.stringify(data));
      				// alert(JSON.stringify(input));
      				$("#loading-image").hide();
      			} else if (data.status == "error" && data.status_code == 503) {
      				alert("Sorry", "Something went wrong", "error");
      				$("#loading-image").hide();
      			}
      		},
      		error: function (data) {
      			// alert('error');
      			// alert("erroee")
      			alert(data.message);
      			return false;
      		}
      	});
      
      	return true;
      }
	  
      $(window).on('load', function () {
      	// alert("window load occurred!");
      	var displayResources = $("#display-resources");
      	var displayResourcessum = $("#display-resources-sum")
         var uid = localStorage.getItem("user_id");
      	
      });
</script>
</html>