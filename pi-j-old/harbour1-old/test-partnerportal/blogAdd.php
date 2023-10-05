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
                <h4 class="page-title">Add Blog</h4>
              </div>
            </div>
			 <div class="col-sm-12 col-md-12 grid-margin text-right mr-20" style="padding-right: 60px">
             <a href="./blog-view">
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
                        <label for="Objective">Blog Title</label>
                        <input type="text" class="form-control calVal" id="title" Placeholder="Enter Blog Title">
                      </div>
					  </div>
					  <div class="row">
                        <div class="form-group col-md-6 col-sm-12">
                        <label for="Audience">Blog Decription</label>
                        <textarea class="form-control" id="Decription"></textarea>
						</div>
					</div>
					 <div class="row">
                        <div class="form-group col-md-6 col-sm-12">
                        <label for="Audience">Blog Date</label>
                        <input type="date" class="form-control" id="datepicker">
						</div>
					</div>
					 <div class="row">
                        <div class="form-group col-md-6 col-sm-12">
                        <label for="Audience">Blog Author</label>
                        <input type="text" class="form-control" Placeholder="Enter Blog Author" name="Author">
						</div>
					</div>
					<div class="row">
                       <div class="form-group col-md-6 col-sm-12">
                        <label for="Audience sponsers">Blog Image</label><br>
                         <input type="file" id="cleardemo">
                      </div>
                     </div>
					 <div class="row">
                       <div class="form-group col-md-6 col-sm-12">
                        <label for="Audience sponsers">Upload File</label><br>
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