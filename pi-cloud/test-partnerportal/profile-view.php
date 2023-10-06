<style>
.active{color:green;padding:5px 10px;font-weight:bold;border-radius:2px;}
.deactive{color:red;padding:5px 10px;font-weight:bold;border-radius:2px;}
.table th, .table td {text-align:center;}
</style>
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
                <h4 class="page-title">Profile view</h4>
              </div>
            </div>
			
        </div>
		
        
        <div class="row  col-md-12 col-sm-12 col-12 grid-margin">
          <div class="card" style="width:100%;">
          <div class="card-body">
           <div class="row">
            <div class="col-md-12 col-12 table-responsive">
            <table id="pending-registrtaion" class="table table table-hover table-bordered" width="100%">
          <thead>
            <tr>
              <th class="th-sm">S.No
              </th>
              <th class="th-sm">Partner Id
              </th>
               <th class="th-sm">Name
              </th>
              
              <th class="th-sm">Role
              </th>
			   <th class="th-sm">Action
              </th>
			  </th>
			   <th class="th-sm">Staus
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Partner-Id-1 </td>
              <td>Siva</td>
              <td>Developer</td>
              
              <td>
                <button type="button" class="btn btn-icons btn-rounded btn-success pi-view"  style="background-color:#2196f3 !important"><a href="./profile-all"><i class="mdi mdi-eye" style="color:white;"></i></a></button>
               <button type="button" class="btn btn-icons btn-rounded btn-info pi-edit"  title="EDIT" style="cursor: pointer;">
                     <i class="mdi mdi-account-edit"></i>
               </button>
			    <button type="button" class="btn btn-icons btn-rounded btn-success pi-view" title="VIEW" style="cursor: pointer;">
                     <i class="mdi mdi-delete"></i>
               </button>
			  
              </td>
<td>
<a id='1' class='factive active1' style='cursor: pointer;'>
  <i class='fa fa-circle pactive' aria-hidden='true' style="font-style:unset;font-weight:bold;"	title='Active'>Active</i></a>
</td>			  
            </tr>    
            <tr>
              <td>2</td>
              <td>Partner-Id-2</td>
              <td>Teja</td>
              <td>Quality Manager</td>
              
               <td>
               <button type="button" class="btn btn-icons btn-rounded btn-success pi-view"  style="background-color:#2196f3 !important"><a href="./profile-all"><i class="mdi mdi-eye" style="color:white;"></i></a></button>
               <button type="button" class="btn btn-icons btn-rounded btn-info pi-edit"  title="EDIT" style="cursor: pointer;">
                     <i class="mdi mdi-account-edit"></i>
               </button>
			     <button type="button" class="btn btn-icons btn-rounded btn-success pi-view" title="VIEW" style="cursor: pointer;">
                     <i class="mdi mdi-delete"></i>
               </button>
			   		   
              </td>
<td>
<a id='1' class='factive active1' style='cursor: pointer;'>
  <i class='fa fa-circle pactive' aria-hidden='true' style="font-style:unset;font-weight:bold;"	title='Active'>Active</i></a>
</td>			  
            </tr>    
            <tr>
             <td>3</td>
              <td>Partner-Id-3</td>
              <td>Ravi</td>
              <td>Tester</td>
                
               <td>
                  <button type="button" class="btn btn-icons btn-rounded btn-success pi-view" data-toggle="modal" data-target="#myModal" style="background-color:#2196f3 !important"><i class="mdi mdi-eye"></i></button>
               <button type="button" class="btn btn-icons btn-rounded btn-info pi-edit"  title="EDIT" style="cursor: pointer;">
                     <i class="mdi mdi-account-edit"></i>
               </button>
			     <button type="button" class="btn btn-icons btn-rounded btn-success pi-view" title="VIEW" style="cursor: pointer;">
                     <i class="mdi mdi-delete"></i>
               </button>
			
              </td>
<td>
<a id='1' class='factive active1' style='cursor: pointer;'>
  <i class='fa fa-circle pactive' aria-hidden='true' style="font-style:unset;font-weight:bold;"	title='Active'>Active</i></a>
</td>			  
            </tr>    
            <tr>
             <td>4</td>
              <td>Partner-Id-4</td>
              <td>Ramaya</td>
              <td> Manager</td>
               
               <td>
                     </button>
			  		   <button type="button" class="btn btn-icons btn-rounded btn-success pi-view"  style="background-color:#2196f3 !important"><a href="./profile-all"><i class="mdi mdi-eye" style="color:white;"></i></a></button>
               <button type="button" class="btn btn-icons btn-rounded btn-info pi-edit"  title="EDIT" style="cursor: pointer;">
                     <i class="mdi mdi-account-edit"></i>
               </button>
			    <button type="button" class="btn btn-icons btn-rounded btn-success pi-view" title="VIEW" style="cursor: pointer;">
                     <i class="mdi mdi-delete"></i>
         
			  
              </td>
<td>
<a id='1' class='factive active1' style='cursor: pointer;'>
  <i class='fa fa-circle pactive' aria-hidden='true' style="font-style:unset;font-weight:bold;"	title='Active'>Active</i></a>
</td>				  
            </tr>           
           

           
           
            <tr>
              <td>5</td>
              <td>Partner-Id-5</td>
              <td>Raju</td>              
			  <td>Accounts</td>
             
               <td>
                    </button>
			   		   <button type="button" class="btn btn-icons btn-rounded btn-success pi-view"  style="background-color:#2196f3 !important"><a href="./profile-all"><i class="mdi mdi-eye" style="color:white;"></i></a></button>
               <button type="button" class="btn btn-icons btn-rounded btn-info pi-edit"  title="EDIT" style="cursor: pointer;">
                     <i class="mdi mdi-account-edit"></i>
               </button>
			     <button type="button" class="btn btn-icons btn-rounded btn-success pi-view" title="VIEW" style="cursor: pointer;">
                     <i class="mdi mdi-delete"></i>
          
			   
              </td> 
<td>
<a id='1' class='factive active1' style='cursor: pointer;'>
  <i class='fa fa-circle pactive' aria-hidden='true' style="font-style:unset;font-weight:bold;"	title='Active'>Active</i></a>
</td>			  
            </tr>    
           
        </table>
      </div>            
           </div>
        </div>    
        </div>
        </div>
        <div>
            <!-- Modal -->
    


 




<?php
  include_once('includes/footer.php');
?>  
