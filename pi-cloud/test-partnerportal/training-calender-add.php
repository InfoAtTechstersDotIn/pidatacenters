
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
                <h4 class="page-title">Add Training calender</h4>
              </div>
            </div>
			<div class="col-sm-12 col-md-12 grid-margin text-right mr-20" style="padding-right: 60px">
             <a href="./training-calender-view">
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
                        <label for="Objective">Trainer Name</label>
                        <input type="text" class="form-control calVal" id="title" placeholder="Enter Trainer Name" required >
                      </div>
					  </div>
                    <div class="row">
                       <div class="form-group col-md-6 col-sm-12">
                        <label for="Objective">Training Calender Title</label>
                        <input type="text" class="form-control calVal" id="title" placeholder="Enter Training Title" required >
                      </div>
					  </div>
					  
					 <div class="row">
                        <div class="form-group col-md-6 col-sm-12">
                        <label for="Audience">                        <label for="Objective">Training Calender </label>
 Date</label>
                        <input type="date"  class="form-control"   id="editor" required>
						</div>
					</div>
					 <div class="row">
                       <div class="form-group col-md-6 col-sm-12">
                        <label for="Objective">Training Timings</label><br>
						 <input type="text"  class="form-control"  placeholder="Enter Training Timings" id="editor" required>
                       <!--<select name="time" class="form-control" style="width:100%;padding:5px 0px;border-color:#ced4da !important;color:#495057 !important;border-radius:3px;">
					   <option value="00:00">Choose Your Timings</option>
    <option value="00:00">10AM-11AM</option>
    <option value="00:30">11AM-12PM</option>
    <option value="01:00">12PM-1PM</option>
    <option value="01:30">1PM- 2PM</option>
    <option value="02:00">2PM-3PM</option>
    <option value="02:30">3PM-4PM</option>
    <option value="03:00">4PM-5PM</option>
    <option value="03:30">5PM-6PM</option>
    <option value="04:00">6PM-7PM</option>
    
    
</select>-->

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

<script src="https://cdn.tiny.cloud/1/tw9pern6nrhzkmz3ewtkimej1k35vl9hj6enu6in05nh3qos/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
   });
  </script>