<?php include"header.php";?>
<?php include"sidebar.php";?>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">
 <div class="page-content">
       <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Create Job</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Job</a></li>
                                        <li class="breadcrumb-item active">Add</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->


                    <div class="row">

                        <!--end col-->
                        <div class="col-xxl-9">
                            <div class="card mt-xxl-n5">
                                <div class="card-header">
                                    <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab" aria-selected="false">
                                                <i class="fas fa-home"></i> New Job
                                            </a>
                                        </li>


                                    </ul>
                                </div>



                                <?php
           $status = "OK"; //initial status
$msg="";
           if(ISSET($_POST['save'])){
$job_title = mysqli_real_escape_string($con,$_POST['job_title']);
$job_location = mysqli_real_escape_string($con,$_POST['job_location']);
$job_experience = mysqli_real_escape_string($con,$_POST['job_experience']);
$date = mysqli_real_escape_string($con,$_POST['date']);
$job_detail = mysqli_real_escape_string($con,$_POST['job_detail']);
$job_skills = mysqli_real_escape_string($con,$_POST['job_skills']);
$job_requirement = mysqli_real_escape_string($con,$_POST['job_requirement']);




$uploads_dir = 'uploads/blog';

        $tmp_name = $_FILES["ufile"]["tmp_name"];
        // basename() may prevent filesystem traversal attacks;
        // further validation/sanitation of the filename may be appropriate
        $name = basename($_FILES["ufile"]["name"]);
        $random_digit=rand(0000,9999);
        $new_file_name=$random_digit.$name;

        move_uploaded_file($tmp_name, "$uploads_dir/$new_file_name");

if($status=="OK")
{
$qf=mysqli_query($con,"INSERT INTO why_us (job_title,job_location,job_experience,date,job_detail,job_skills,job_requirement) VALUES ('$job_title','$job_location','$job_experience','$date','$job_detail','$job_skills','$job_requirement')");




		if($qf){
		    	$errormsg= "
<div class='alert alert-success alert-dismissible alert-outline fade show'>
                  Job has been added successfully.
                  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                  </div>
 "; //printing error if found in validation

		}
        else{
            $errormsg= "
            <div class='alert alert-danger alert-dismissible alert-outline fade show'>
                       Some Technical Glitch Is There. Please Try Again Later Or Ask Admin For Help.
                       <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                       </div>"; //printing error if found in validation

        }
	}

        elseif ($status!=="OK") {
            $errormsg= "
<div class='alert alert-danger alert-dismissible alert-outline fade show'>
                     ".$msg." <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button> </div>"; //printing error if found in validation


    }
    else{
			$errormsg= "
      <div class='alert alert-danger alert-dismissible alert-outline fade show'>
                 Some Technical Glitch Is There. Please Try Again Later Or Ask Admin For Help.
                 <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                 </div>"; //printing error if found in validation


		}
           }
           ?>



                                <div class="card-body p-4">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                        <?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
						{
						print $errormsg;
						}
   ?>
              <form action="" method="post" enctype="multipart/form-data">
                                                <div class="row">
                                              <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Job Title</label>
                                                            <input type="text" class="form-control"  name="job_title" placeholder="Enter Job Title" required>
                                                        </div>
                                                    </div>

                                               

                                                    

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Location</label>
                                                            <input type="text" class="form-control" placeholder="Enter job Location" name="job_location" required>
                                                        </div>
                                                    </div>
													 <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Experience</label>
                                                            <input type="text" class="form-control" name="job_experience" placeholder="Enter Job experice">
                                                        </div>
                                                    </div>
													 <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Date</label>
                                                            <input type="date" class="form-control" name="date" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Job description</label>
                                                            <textarea class="form-control"  name="job_detail" rows="3" ></textarea>
                                                        </div>
                                                    </div>
                                                     <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Essential Knowledge, Skills</label>
                                                            <textarea class="form-control"  name="job_skills" rows="3" ></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Requirements</label>
                                                            <textarea class="form-control"  name="job_requirement" rows="3" ></textarea>
                                                        </div>
                                                    </div>

                                                    <!--end col-->
                                                    <div class="col-lg-12">
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <button type="submit" name="save" class="btn btn-primary">Create Job</button>

                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </form>
                                        </div>
                                        <!--end tab-pane-->

                                        <!--end tab-pane-->

                                        <!--end tab-pane-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>


                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <?php include"footer.php";?>
