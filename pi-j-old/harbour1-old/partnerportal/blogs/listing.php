<?php
  require_once('../config/constants.php') ; 
?>
<!DOCTYPE html>
<html lang="en">
  	<head>
	  	<?php include_once('../includes/head.php'); ?>
		<!-- <script src="https://cdn.ckeditor.com/ckeditor5/29.1.0/classic/ckeditor.js"></script> -->
		<script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
	</head>
	<body>
		<?php include_once('../includes/header1.php');?>
		<div class="container-fluid page-body-wrapper">
			<?php
            include_once('../includes/sidebar.php');
            ?>

<div class="main-panel" id="page-kc-blog-listing">
  <div class="content-wrapper">

    <!-- start -->         
    <div class="row page-title-header">
      <div class="col-12">
        <div class="page-header">
          <h4 class="page-title">Blogs</h4>
        </div>
      </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-12 text-right mr-20">
            <a href="javascript:history.back()" >
            <button type="button" class="btn btn-icons btn-rounded btn-danger" title="VIEW" style="cursor: pointer;">
                <i class="mdi mdi-arrow-left" style="
                    font-size: 24px;
                    display: inline-block;
                    line-height: 20px;
                    margin-left: -2px;cursor: pointer;"></i>
            </button>
            </a>

            <a href="./create">
            <button type="button" class="btn btn-icons btn-rounded btn-success" title="VIEW" style="cursor: pointer;">
                <i class="mdi mdi-plus" style="
                    font-size: 24px;
                    display: inline-block;
                    line-height: 20px;
                    margin-left: -2px;cursor: pointer;"></i>
            </button>
          </a>
        </div>
    </div>
  <div>

  <div class="row">
      <div class="col-xs-12 col-sm-12">
      <div class="card mt-2" style="width:100%;">
        <div class="card-body">
          <div class="row">
            <div class="col-md-12 col-12 table-responsive">
              <table id="table-kc-blogs" class="table table table-hover table-bordered" width="100%">
                <thead>
                  <tr class="table-row">
                    <th class="th-sm">S.NO</th>
                    <th class="th-sm">Title</th>
                    <th class="th-sm">Publish Date</th>
                    <th class="th-sm">Author</th>
                    <th class="th-sm">Status</th>
                    <th class="th-sm">Actions</th>
                  </tr>
                </thead>
                <tbody>
                
                </tbody>
              </table>
            </div>            
          </div>
        </div>    
      </div>
      </div>
  </div>


  <div class="db-popup hide" id="editpop">
    <div class="pop-cont">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card mt-2 card-new-blog" style="width:100%;">
          <div class="header-controls clearfix" style="text-align: right; position:relative;padding:10px;">
            <span class="btn btn-close" style="float:right;width:20px;height:20px;">X</span>
          </div>
          <div class="card-body">
            <div class="card-title clearfix">
              <h4 style="float:left; width:50%;font-size:14px;font-weight:500;">Edit Blog</h4>
            </div>

            <form id="frm-blog-edit">
              <input type="hidden" name="blog_ref" id="blog-ref" value="" />
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="required">Blog Title</label>
                    <input class="form-control" type="text" id="blog-title" name="blog_title" placeholder="Enter Blog Title" required />
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="">Blog Author</label>
                    <input class="form-control" type="text" id="blog-author" name="blog_author" placeholder="Enter Blog Author"  />
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="required">Blog Image<small> (preferable size: 759 X 429 px)</small></label>
                    <input class="form-control" type="file" name="blog_banner" />
                    <div><span id="existing-img"><a href="" target="_blank"></a> </span></div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <span>Has External Link?
                    <input type="checkbox" id="is-ext-link" name="is_ext_link" /></span>
                    <input type="text" class="form-control" id="external-link" name="external_link" placeholder="Enter external link" />
                  </div>
                </div>

              </div>

              <div class="row">
                <div class="col-sm-12 col-md-12">
                  <div class="form-group">
                    <label class="required">Blog Short Text</label>
                    <textarea class="form-control" id="blog-short-desc" name="blog_short_desc" required>
                    </textarea>
                    <script>
                      CKEDITOR.replace("blog-short-desc");
                    </script>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-12 col-md-12">
                  <div class="form-group">
                    <label>Blog Description</label>
                    <textarea class="form-control" id="blog-desc" name="blog_desc">
                    </textarea>
                    <script>
                      CKEDITOR.replace("blog-desc");										
                    </script>
                  </div>
                </div>
              </div>

              <div class="buttons-wrap" style="text-align:right;"> 
                <span class="btn btn-light btn-close">Close</span>            
                <button type="submit" class="btn btn-success mr-2">Submit</button>
                <span class="btn btn-light btn-cancel">Cancel</span>
              </div>

            </form>
          </div>    
        </div>
      </div>
    </div>
  </div>

<?php
  include_once('../includes/footer.php');
?> 
</div>
<script>
document.addEventListener('DOMContentLoaded', function(event) {
  initKCBlogsListing(); 
});
</script>
</body>
</html>
