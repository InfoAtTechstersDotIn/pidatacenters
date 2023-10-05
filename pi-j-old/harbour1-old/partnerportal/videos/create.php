<?php
  require_once('../config/constants.php') ; 
?>
<!DOCTYPE html>
<html lang="en">
  	<head>
	  	<?php include_once('../includes/head.php'); ?>
	</head>
	<body>
		<?php include_once('../includes/header1.php');?>
		<div class="container-fluid page-body-wrapper">
			<?php
            include_once('../includes/sidebar.php');
            ?>

			<div class="main-panel" id="page-kc-video-create">
				<div class="content-wrapper">

					<div class="row page-title-header">
						<div class="col-12">
							<div class="page-header">
								<h4 class="page-title">Add Videos</h4>
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
							<div class="card mt-2 mb-5 card-new-blog" style="width:100%;">
								<div class="card-body">
									<form id="frm-video-create">
										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<label class="required">Video Title</label>
													<input class="form-control" type="text" id="kccs-vid-title" name="kccs_vid_title" placeholder="Enter Video Title" required />
												</div>
											</div>
										</div>

                                        <div class="row">
                                            <div class="col-sm-6">
												<div class="form-group">
													<label class="">Video URL (For Youtube videos)</label>
													<input class="form-control" type="url" id="kccs-vid-ext-url" name="kccs_vid_ext_url" placeholder="Enter Video URL"  />
												</div>
											</div>
                                        </div>

										<div class="row">
											<div class="col-sm-6">
                                        		<div class="video-or-separator"><span>OR</span></div>
											</div>
										</div>
										
                                        <div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<label>Upload Video</label>
													<input class="form-control" type="file" name="kccs_video"  />
												</div>
											</div>
											<div class="col-sm-6">
												<!-- <div class="form-group">
													<label>Upload Video Thumbnail</label>
													<input class="form-control" type="file" name="kccs_vid_thumb"  />
												</div> -->
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