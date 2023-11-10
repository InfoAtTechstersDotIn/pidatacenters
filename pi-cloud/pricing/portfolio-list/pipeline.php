<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Pi Portfolio List</title>
      <link rel="icon" href="favicon.ico" type="image/x-icon">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" href="https://pidatacenters.com/wp-content/themes/pidata/favicon.ico">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="../portfolio-list/assets/js/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="../portfolio-list/assets/js/pipeline.js"></script> 
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
      <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
      <link rel="stylesheet" href="https://103.210.73.84/portfolio-list/assets/css/portfolio.css">
      <link rel="stylesheet" href="https://sweetalert.js.org/assets/css/app.css">
      <script src="https://sweetalert.js.org/assets/sweetalert/sweetalert.min.js" type="text/javascript"></script>
      <style>
         .css_list_1 {
         text-align: center;
         position: relative;
         top: 40px;
         color: #263499;
         font-weight: 700;
         font-size: 28px;
         }
         table.dataTable thead th, table.dataTable thead td {
         padding: 10px 18px;
         border-bottom: 1px solid #111;
         background: #ffffff;
         color: white;
         text-align: center;
         border: 1px solid #e4e5e7;
         }
      </style>
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
         <h3 class="css_list_1">Pipeline</h3>
         <table class="table table-bordered table-striped" id="datalist">
            <thead>
               <tr>
                  <th style="width: 35px;min-width: 35px;"> S.No</th>
                  <th>customer</th>
                  <th style="background-color: #263499;color: white;">MRC</th>
                  <th style="width: 165px;min-width: 165px;">Service Offering</th>
                  
                  <th>Status</th>
				  <th>Remarks</th>
                  <th style="width:45px;min-width:45px;">Button</th>
                  <th style="width:45px;min-width:45px;">Button</th>
               </tr>
            </thead>
            <thead>
               <tr>
                  <td></td>
                  <td><input class="form-control" name="customer" id="customer" type="text" placeholder="Enter Customer"></td>
				  <td><input class="form-control" name="mrc" id="mrc" type="text" placeholder="Enter MRC"  onkeypress="CheckNumeric(event);"></td>
                  <td>
                     <select id="service" name="service" class="form-control">
                        <option value="select">select</option>
                        <option value="colocation">colocation</option>
                        <option value="cloud">cloud</option>
						 <option value="Managed services">Managed services</option>
                     </select>
                  </td>
                  <td>
				  
				  <select id="status" name="status" class="form-control">
                        <option value="select">select</option>
                        <option value="open">open</option>
                        <option value="closed">closed</option>
				  </select>
				  
				  </td>
                  <td><input class="form-control" name="remarks" id="remarks" type="test" placeholder="Enter remarks"></td>
                 
                  <td colspan="2"><button class="btn btn-success btn-sm"  onclick="actionitem()">ADD</button></td>
               </tr>
            </thead>
         </table>
         <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
               <!-- Modal content-->
               <div class="modal-content">
                  <div class="modal-header" style="background: rgb(36, 59, 152);color: white;padding: 8px 12px;">
                     <h4 class="modal-title">UPDATE ACCOUNT</h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                     <div class="row">
                        <div class="col-md-6">
                           <label>Customer</label>
                           <input class="form-control" name="customer-input" id="customer-input" placeholder="Enter customer">
                        </div>
                        <div class="col-md-6">
                           <label>MRC</label>
						   <input class="form-control" name="mrc-input" type="text" id="mrc-input" placeholder="Enter MRC" onkeypress="CheckNumeric(event);">
                          
                        </div>
                     </div>
                     <div class="row mt-3">
                        <div class="col-md-6">
                           <label>Service Offering</label>
                           <select id="service-input" name="service-input" class="form-control">
                               <option value="select">select</option>
                        <option value="colocation">colocation</option>
                        <option value="cloud">cloud</option>
						 <option value="Managed services">Managed services</option>
                           </select>
                        </div>
                        <div class="col-md-6">
                           <label>status</label>
                           <select id="status-input" name="status-input" class="form-control">
                        <option value="select">select</option>
                        <option value="open">open</option>
                        <option value="closed">closed</option>
				  </select>
                        </div>
                     </div>
                     <div class="row mt-3">
                        <div class="col-md-12"> 
                           <label>Remarks</label>
                           <input class="form-control" type="text" name="remarks-input" id="remarks-input" placeholder="Enter Remarks">
                        </div>
                     </div>
                     <div class="row mt-3">
                        <div class="col-md-12 text-center">
                           <button type="button" class="btn btn-primary"  onclick="update()">Update</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
   <footer>
   </footer>
</html>