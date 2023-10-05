<style>
.active{color:green;padding:5px 10px;font-weight:bold;border-radius:2px;}
.deactive{color:red;padding:5px 10px;font-weight:bold;border-radius:2px;}
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
                <h4 class="page-title">Events</h4>
              </div>
            </div>
        </div>
		<div class="row">
          <div class="col-sm-12 col-md-12 grid-margin text-right mr-20" style="padding-right: 60px">
             <a href="./events-Add">
               <button type="button" class="btn btn-icons btn-rounded btn-success pi-view" title="VIEW" style="cursor: pointer;">
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
            <table id="pending-registrtaion" class="table table table-hover table-bordered" width="100%">
          <thead>
            <tr>
              <th class="th-sm">S.No
              </th>
              <th class="th-sm">Title
              </th>
               <th class="th-sm">Description
              </th>
              
              <th class="th-sm">Date
              </th>
			   <th class="th-sm">Actions
              </th>
			  </th>
			   <th class="th-sm">Staus
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Title One</td>
              <td>Description One</td>
              <td>12-06-2021</td>
              
              <td>
               
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
              <td>Title Two</td>
              <td>Description Two</td>
              <td>13-06-2021</td>
              
               <td>
               
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
              <td>Title Three</td>
              <td>Description Three</td>
              <td>14-06-2021</td>
                
               <td>
               
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
              <td>Title Four</td>
              <td>Description Four</td>
              <td>15-06-2021</td>
               
               <td>
               
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
              <td>5</td>
              <td>Title Five</td>
              <td>Description Five</td>
              <td>16-06-2021</td>
             
               <td>
               
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
