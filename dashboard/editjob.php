<?php
include"header.php";
$todo=  mysqli_real_escape_string($con,$_GET['id']);
include"sidebar.php";

?>

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
                                <h4 class="mb-sm-0">Edit Blog</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Blog</a></li>
                                        <li class="breadcrumb-item active">Edit</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <?php
					 $query="SELECT * FROM  why_us where id='$todo' ";


 $result = mysqli_query($con,$query);
$i=0;
while($row = mysqli_fetch_array($result))
{
	$id="$row[id]";
	$job_title="$row[job_title]";
	$job_location="$row[job_location]";
    $job_experience="$row[job_experience]";
    $date="$row[date]";
    $job_detail="$row[job_detail]";
    $job_skills="$row[job_skills]";
    $job_requirement="$row[job_requirement]";
}
  ?>

                    <div class="row">

                        <!--end col-->
                        <div class="col-xxl-9">
                            <div class="card mt-xxl-n5">
                                <div class="card-header">
                                    <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab" aria-selected="false">
                                                <i class="fas fa-home"></i> Edit Blog
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
            
 /*
$uploads_dir = 'uploads';

        $tmp_name = $_FILES["ufile"]["tmp_name"];
        // basename() may prevent filesystem traversal attacks;
        // further validation/sanitation of the filename may be appropriate
        $name = basename($_FILES["ufile"]["name"]);
        $random_digit=rand(0000,9999);
        $new_file_name=$random_digit.$name;

        move_uploaded_file($tmp_name, "$uploads_dir/$new_file_name");*/

if($status=="OK")
{
$qb=mysqli_query($con,"update why_us set job_title='$job_title', job_location='$job_location', job_experience='$job_experience',date='$date', job_detail='$job_detail', job_skills='$job_skills', job_requirement='$job_requirement' where id='$todo'");


		if($qb){
		    	$errormsg= "
<div class='alert alert-success alert-dismissible alert-outline fade show'>
                 Job Updated successfully.
                  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                  </div>
 "; //printing error if found in validation

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
                                                            <label for="firstnameInput" class="form-label"> Job Title</label>
                                                            <input type="text" class="form-control" id="firstnameInput" name="job_title" value="<?php print $job_title ?>" placeholder="Enter Job Title">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">  Job Location</label>
                                                            <!--<textarea class="form-control" id="exampleFormControlTextarea5" name="blog_desc" rows="2"><?php //print $blog_desc ?></textarea>-->
                                                            <input type="text" class="form-control" id="firstnameInput" name="job_location" value="<?php print $job_location ?>" placeholder="Enter Job Location">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label"> Job Experience</label>
                                                            <input type="text" class="form-control" id="firstnameInput" name="job_experience" value="<?php print $job_experience ?>" placeholder="Enter Job Experience">
                                                  
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Date</label>
                                                            <input type="date" class="form-control" value="<?php print $date ?>" name="date" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Job description</label>
                                                            
                                                            <textarea class="form-control" id="exampleFormControlTextarea5" name="job_detail" rows="3"><?php print $job_detail ?></textarea>
                                                        </div>
                                                    </div>
                                                     <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Essential Knowledge, Skills</label>
                                                            <textarea class="form-control" id="exampleFormControlTextarea5" name="job_skills" rows="3"><?php print $job_skills ?></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Requirements</label>
                                                            <textarea class="form-control" id="exampleFormControlTextarea5" name="job_requirement" rows="3"><?php print $job_requirement ?></textarea>
                                                        </div>
                                                    </div>



                                                    <!--end col-->

                                                    <!--end col-->
                                                    <div class="col-lg-12">
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <button type="submit" name="save" class="btn btn-primary">Update Blog</button>

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
