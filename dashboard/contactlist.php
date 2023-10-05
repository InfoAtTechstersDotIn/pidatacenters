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
                                <h4 class="mb-sm-0">Contact Page Leads</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">All</a></li>
                                        <li class="breadcrumb-item active">Contact Page Leads</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Contact Page Leads</h5>
                                </div>
                                <div class="card-body">
                                    <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th data-ordering="false">Date</th>
                                                <th data-ordering="false">Name</th>
                                                <th data-ordering="false">Email</th>
                                                <th data-ordering="false">Phone</th>
                                                <th>Message</th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                        <?php
				   $q="SELECT * FROM  contact_us ORDER BY id DESC";


 $r120 = mysqli_query($con,$q);

while($ro = mysqli_fetch_array($r120))
{

	$id ="$ro[id]";
	$date ="$ro[date_info]";
	$name ="$ro[name]";
    $email = "$ro[email]";
    $phone = "$ro[phone]";
	$message = "$ro[message]";


  print "<tr>

<td>
				  $date
				  </td>
                
				  <td>
				  $name
				  </td>
                  <td>
				  $email
				  </td>
                  <td>
				  $phone
				  </td>
				   <td>
				  $message
				  </td>


          


				  </tr>";

  }
  ?>




                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->




                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <?php include"footer.php";?>
