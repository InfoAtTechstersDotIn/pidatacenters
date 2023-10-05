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
                <h4 class="page-title">Add Videos</h4>
              </div>
            </div>
			<div class="col-sm-12 col-md-12 grid-margin text-right mr-20" style="padding-right: 60px">
             <a href="./videos-view">
               <button type="button" class="btn btn-icons btn-rounded btn-success pi-view" title="VIEW" style="cursor: pointer;width:10%;">
                    Back
               </button>
             </a>
          </div>
        </div>

<!--    **************************  -->  

      <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form class="forms-fund-req">
                    
                   
                    <div class="row">
                       <div class="form-group col-md-6 col-sm-12">
                        <label for="Objective">Video Title</label>
                        <input type="text" class="form-control calVal"  Placeholder="Enter Video Title" id="title" >
                      </div>
					  </div>
					   <div class="row">
                       <div class="form-group col-md-6 col-sm-12">
                        <label for="Objective">Video URL</label>
                        <input type="text" class="form-control calVal"  Placeholder="Enter Video URL" id="url" >
                      </div>
					  </div>
					
					<div class="row">
                       <div class="form-group col-md-6 col-sm-12">
                        <label for="Audience sponsers">Upload Video</label><br>
                         <input type="file" id="cleardemo">
                      </div>
                     </div>
					 <div class="row page-title-header">
            <div class="col-12">
              <div class="page-header">
                
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