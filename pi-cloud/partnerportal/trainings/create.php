<?php
  require_once('../config/constants.php') ; 
?>
<!DOCTYPE html>
<html lang="en">
  	<head>
	  	<?php include_once('../includes/head.php'); ?>
		<!-- <script src="https://cdn.ckeditor.com/ckeditor5/29.1.0/classic/ckeditor.js"></script> -->
		<script src="//cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>
	</head>
	<body>
		<?php include_once('../includes/header1.php');?>
		<div class="container-fluid page-body-wrapper">
			<?php
            include_once('../includes/sidebar.php');
            ?>

			<div class="main-panel" id="page-kc-training-create">
				<div class="content-wrapper">

					<div class="row page-title-header">
						<div class="col-12">
							<div class="page-header">
								<h4 class="page-title">Training</h4>
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
						</div>
					</div>
					

					<div class="row">
						<div class="col-xs-12 col-sm-12">
							<div class="card mt-2 card-new-training mb-5" style="width:100%;">
								<div class="card-body">
									<form id="frm-training-create">
										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<label class="required">Training Title</label>
													<input class="form-control" type="text" id="training-title" name="training_title" placeholder="Enter Training Title" required />
												</div>
											</div>

											<div class="col-sm-6">
												<div class="form-group">
													<label class="required">Training Date</label>
													<input class="form-control" type="date" id="training-date" name="training_date" placeholder="Enter Training Date"  required/>
												</div>
											</div>
										</div>

                                        <div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<label class="required">Start Time</label>
													<input class="form-control" type="time" id="training-st-time" name="training_st_time" placeholder="Training Start Time" required />
												</div>
											</div>

											<div class="col-sm-6">
												<div class="form-group">
													<label class="">Training Date</label>
													<input class="form-control" type="time" id="training-end-time" name="training_end_time" placeholder="Training End Time"  />
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-12 col-md-12">
												<div class="form-group">
													<label class="required">Training Content</label>
													<textarea class="form-control" id="training-content" name="training_content" required>
													</textarea>
													<script>
														CKEDITOR.replace("training-content",{
                                                            removeButtons: 'Image,Flash'
                                                        });											
													</script>
												</div>
											</div>
										</div>

										<div class="buttons-wrap" style="text-align:right;">
											<a href="javascript:history.back();" class="mb-2">
											<button type="button" class="btn btn-danger">Back</button>
											</a>
											
											<button type="submit" class="btn btn-success mr-2">Submit</button>
											<span class="btn btn-light btn-cancel">Cancel</span>
										</div>

									</form>
								</div>    
							</div>
						</div>
					</div>

					<?php
					include_once('../includes/footer.php');
					?>  
                </div>
			</div>
		</div>
	</body>
</html>