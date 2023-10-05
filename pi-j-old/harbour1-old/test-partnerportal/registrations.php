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
                <h4 class="page-title">Registration</h4>
              </div>
            </div>
        </div>
        <div class="row  col-md-12 col-sm-12 col-12 grid-margin">
          <div class="card" style="width:100%;">
        	<div class="card-body">
        	 <div class="row">
        		<div class="col-md-12 col-12 table-responsive">
        		<table id="pending-registrtaion" class="table table table-hover  table-bordered" width="100%">
				  <thead>
				    <tr>
				      <th class="th-sm">Partner Name
				      </th>
				      <th class="th-sm">Partner Admin
				      </th>
				       <th class="th-sm">Patner Type
				      </th>
				      <th class="th-sm">Partner Email 
				      </th>
				      <th class="th-sm">Date of Registrtaion
				      </th>
				      <th class="th-sm">
				      </th>
				      <th class="th-sm">
				      </th>
				      <th class="th-sm">
				      </th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <td>Genus Power</td>
				      <td>Mr R.S Rathore</td>
				      <td>Sl</td>
				      <td>info@genuspower.com</td>
				      <td>28-02-2021</td>
				       <td class="text-center reg-review"><button class="btn btn-default btn-info ">Review</button></td>
				      <td class="text-center reg-approve"><button class="btn btn-default btn-success ">Approve</button></td>
				      <td class="text-center reg-reject"><button class="btn btn-default btn-danger " data-toggle="modal" data-target="#reg-reject" id="">Reject</button></td>
				    </tr>
				     <tr>
				      <td>Natural Group</td>
				      <td>Sumit</td>
				      <td>channel</td>
				      <td>info btn-fw@naturalgroup.com</td>
				      <td>06-02-2021</td>
				      <td class="text-center reg-review"><button class="btn btn-default btn-info ">Review</button></td>
				      <td class="text-center reg-approve"><button class="btn btn-default btn-success ">Approve</button></td>
				      <td class="text-center reg-reject"><button class="btn btn-default btn-danger ">Reject</button></td>
				    </tr>
				    <tr>
				      <td>Time Internet</td>
				      <td>Ankur Takur</td>
				      <td>Sl</td>
				     <td>info btn-fw@times.com</td>
				      <td>06-02-2021</td>
				       <td class="text-center reg-review"><button class="btn btn-default btn-info ">Review</button></td>
				      <td class="text-center reg-approve"><button class="btn btn-default btn-success ">Approve</button></td>
				      <td class="text-center reg-reject"><button class="btn btn-default btn-danger ">Reject</button></td>
				    </tr>
				     <tr>
				      <td>Ariss Global</td>
				      <td>Sathish D</td>
				      <td>Sl</td>
				        <td>info@genuspower.com</td>
				      <td>12-02-2021</td>
				      <td class="text-center reg-review"><button class="btn btn-default btn-info ">Review</button></td>
				      <td class="text-center reg-approve"><button class="btn btn-default btn-success ">Approve</button></td>
				      <td class="text-center reg-reject"><button class="btn btn-default btn-danger ">Reject</button></td>
				    </tr>
				    <tr>
				      <td>DMX Tech</td>
				      <td>Vishuvardan</td>
				      <td>ISV</td>
				      <td>info@dmx.com</td>
				      <td>12-05-2021</td>
				      <td class="text-center reg-review"><button class="btn btn-default btn-info ">Review</button></td>
				      <td class="text-center reg-approve"><button class="btn btn-default btn-success ">Approve</button></td>
				      <td class="text-center reg-reject"><button class="btn btn-default btn-danger ">Reject</button></td>
				    </tr>
				</table>
			</div>	        	
       		 </div>
     	  </div>  	
   			</div>
        </div>
        <div>
        	  <!-- Modal -->
		 <div class="db-popup hide" id="rejectpop">
		 	<div class="pop-cont">
		 	 <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Reject</h4>
                    <form class="forms-sample">
                      <div class="row">
                      	<div class="form-group col-md-6 col-sm-12">
                        <label for="exampleInputName1">Partner Name</label>
                        <input type="text" class="form-control" id="patnername" placeholder="Name" disabled="">
                      </div>
                      <div class="form-group col-md-6 col-sm-12">
                        <label for="exampleInputEmail3">Partner Eamil</label>
                        <input type="email" class="form-control" id="partneremail" placeholder="Email" disabled="">
                      </div>
                      </div>
                       <div class="row">
                      	<div class="form-group col-md-12 col-sm-12">
                        <label for="exampleInputName1">Reson for Cancelation</label>
						<textarea class="form-control" id="exampleTextarea1" rows="2"></textarea>
                      </div>      
                      </div>
                      <button type="submit" class="btn btn-danger mr-2" style="cursor: pointer;">Reject</button>
                      <button class="btn btn-light" style="cursor: pointer;" >Close</button>
                    </form>
                  </div>
                </div>
              </div>
		 	</div>
		 </div>


		 <div class="db-popup hide" id="approvepop">
		 	<div class="pop-cont">
		 	 <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Approve</h4>
                    <form class="forms-sample">
                      <div class="row">
                      	<div class="form-group col-md-6 col-sm-12">
                        <label for="exampleInputName1">Partner Name</label>
                        <input type="text" class="form-control" id="patnername" placeholder="Name" disabled="">
                      </div>
                      <div class="form-group col-md-6 col-sm-12">
                        <label for="exampleInputEmail3">Partner Eamil</label>
                        <input type="email" class="form-control" id="partneremail" placeholder="Email" disabled="">
                      </div>
                      </div>
                       <div class="row">
                      	<div class="form-group col-md-12 col-sm-12">
                        <label for="exampleInputName1">Greet Message</label>
						<textarea class="form-control" id="exampleTextarea1" rows="2"></textarea>
                      </div>      
                      </div>
                      <button type="submit" class="btn btn-success mr-2" style="cursor: pointer;">Approve</button>
                      <button class="btn btn-light" style="cursor: pointer;" >Close</button>
                    </form>
                  </div>
                </div>
              </div>
		 	</div>
		 </div>


		 <div class="db-popup hide" id="reviewpop">
		 	<div class="pop-cont">
		 	 <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Review</h4>
                    <form class="forms-sample">
                      <div class="row">
                      	<div class="form-group col-md-6 col-sm-12">
                        <label for="exampleInputName1">Partner Name</label>
                        <input type="text" class="form-control" id="patnername" placeholder="Name" disabled="">
                      </div>
                      <div class="form-group col-md-6 col-sm-12">
                        <label for="exampleInputEmail3">Partner Eamil</label>
                        <input type="email" class="form-control" id="partneremail" placeholder="Email" disabled="">
                      </div>
                      </div>
                        <div class="row">
                      	<div class="form-group col-md-6 col-sm-12">
                        <label for="exampleInputName1">Partner Name</label>
                        <input type="text" class="form-control" id="patnername" placeholder="Name" disabled="">
                      </div>
                      <div class="form-group col-md-6 col-sm-12">
                        <label for="exampleInputEmail3">Partner Eamil</label>
                        <input type="email" class="form-control" id="partneremail" placeholder="Email" disabled="">
                      </div>
                      </div>
                       <div class="row">
                      	<div class="form-group col-md-6 col-sm-12">
                        <label for="exampleInputName1">Partner Name</label>
                        <input type="text" class="form-control" id="patnername" placeholder="Name" disabled="">
                      </div>
                      <div class="form-group col-md-6 col-sm-12">
                        <label for="exampleInputEmail3">Partner Eamil</label>
                        <input type="email" class="form-control" id="partneremail" placeholder="Email" disabled="">
                      </div>
                      </div>
                       <div class="row">
                      	<div class="form-group col-md-6 col-sm-12">
                        <label for="exampleInputName1">Partner Name</label>
                        <input type="text" class="form-control" id="patnername" placeholder="Name" disabled="">
                      </div>
                      <div class="form-group col-md-6 col-sm-12">
                        <label for="exampleInputEmail3">Partner Eamil</label>
                        <input type="email" class="form-control" id="partneremail" placeholder="Email" disabled="">
                      </div>
                      </div>
                       <div class="row">
                      	<div class="form-group col-md-6 col-sm-12">
                        <label for="exampleInputName1">Partner Name</label>
                        <input type="text" class="form-control" id="patnername" placeholder="Name" disabled="">
                      </div>
                      <div class="form-group col-md-6 col-sm-12">
                        <label for="exampleInputEmail3">Partner Eamil</label>
                        <input type="email" class="form-control" id="partneremail" placeholder="Email" disabled="">
                      </div>
                      </div>

                      <button type="submit" class="btn btn-success mr-2" style="cursor: pointer;">Approve</button>
                      <button type="submit" class="btn btn-danger mr-2" style="cursor: pointer;">Reject</button>
                      <button class="btn btn-light" style="cursor: pointer;" >Close</button>
                    </form>
                  </div>
                </div>
              </div>
		 	</div>
		 </div>
       

<?php
  include_once('includes/footer.php');
?>	