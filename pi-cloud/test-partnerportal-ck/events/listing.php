<?php
  require_once('../config/constants.php') ; 
?>
<!DOCTYPE html>
<html lang="en">
  	<head>
	  	<?php include_once('../includes/head.php'); ?>
          <script src="//cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>
	</head>
	<body>
		<?php include_once('../includes/header1.php');?>
		<div class="container-fluid page-body-wrapper">
			<?php
            include_once('../includes/sidebar.php');
            ?>

<div class="main-panel" id="page-kc-events-listing">
  <div class="content-wrapper">

    <!-- start -->         
    <div class="row page-title-header">
      <div class="col-12">
        <div class="page-header">
          <h4 class="page-title">Trainings</h4>
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
      <div class="card mt-2 mb-5" style="width:100%;">
        <div class="card-body">
          <div class="row">
            <div class="col-md-12 col-12 table-responsive">
              <table id="table-kc-events" class="table table table-hover table-bordered" width="100%">
                <thead>
                  <tr class="table-row">
                    <th class="th-sm">S.NO</th>
                    <th class="th-sm">Title</th>
                    <th class="th-sm">Date</th>
                    <th class="th-sm">Actions</th>
                    <th class="th-sm">Status</th>
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

            <form id="frm-event-edit">
              <input type="hidden" name="event_ref" id="event-ref" value="" />
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="required">Event Title</label>
                    <input class="form-control" type="text" id="event-title" name="event_title" placeholder="Enter Event Title" required />
                  </div>
                </div>
                
              </div>

              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label class="required">Event Date</label>
                    <input class="form-control" type="date" id="event-date" name="event_date" placeholder="Enter Event Date"  required/>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label class="required">Start Time</label>
                    <input class="form-control" type="time" id="event-st-time" name="event_st_time" placeholder="Event Start Time" required />
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="form-group">
                    <label class="">End Time</label>
                    <input class="form-control" type="time" id="event-end-time" name="event_end_time" placeholder="Event End Time"  />
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-12 col-md-12">
                  <div class="form-group">
                    <label class="required">Event Content</label>
                    <textarea class="form-control" id="event-content" name="event_content" required>
                    </textarea>
                    <script>
                      CKEDITOR.replace("event-content",{
                          removeButtons: 'Image,Flash'
                      });											
                    </script>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <label class="">Event Banner</label>
                    <input class="form-control" type="file" id="event-banner" name="event_banner" />
                    <span>Current banner: <a id="cur-event-banner" href="" target="_blank"></a></span>
                  </div>
                </div>
              </div>

              <div class="buttons-wrap" style="text-align:right;">
                <a href="javascript:history.back();" class="mb-2">
                <button type="button" class="btn btn-danger">Back</button>
                </a>
                
                <button type="submit" class="btn btn-success mr-2">Submit</button>
                <!-- <span class="btn btn-light btn-cancel">Cancel</span> -->
                <button type="button" class="btn btn-light btn-close">Close</span>
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
  initKCEventsListing(); 
});
</script>
</body>
</html>
