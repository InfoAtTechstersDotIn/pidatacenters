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
                <h4 class="page-title">Add Collaterals</h4>
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
                       <div class="form-group col-md-6 col-sm-12">
                        <label for="Objective">Collaterals Title</label>
                        <input type="text" class="form-control calVal" id="title" required>
                      </div>
					  </div>
					  <div class="row">
                        <div class="form-group col-md-6 col-sm-12">
                        <label for="Audience">Collaterals Decription</label>
                        <textarea class="form-control"  rows="5" id="editor" required></textarea>
						</div>
					</div>
					<div class="row">
                       <div class="form-group col-md-6 col-sm-12">
                        <label for="Audience sponsers">Collaterals mage</label><br>
                         <input type="file" id="cleardemo">
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

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>
  tinymce.init({
    selector: 'textarea#editor',
    menubar: false
  });
</script>