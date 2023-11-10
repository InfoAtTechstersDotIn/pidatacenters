<!doctype html>
<html>

<head lang="en">
    <meta charset="utf-8">
    <title>Pi Portfolio List</title>

    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
    <link rel="icon" href="https://pidatacenters.com/wp-content/themes/pidata/favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

    <link rel="stylesheet" type="text/css" href="assets/css/uploadstyles.css?v" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<link rel="stylesheet" href="https://103.210.73.84/portfolio-list/assets/css/portfolio.css">
<script>

    $(document).ready( function () {   
		
        if(!(localStorage.getItem("status") == "sucess")){
           window.location.href = "login.php";
        }else{
            $("#logout_user").click(function(){
                localStorage.clear();
                window.location.href = "/portfolio-list/login.php";
            });
        }

    });
</script>


    <style>
        

        .loader_img_cont {
            width: 76px;
            height: 38px;
            border-radius: 4px;
            text-align: center;
            float: right;
            background: #fff;
            padding: 10px 0px;
        }
    </style>

</head>

<body>
    
		<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color:#e7ecef;border-bottom: 2px solid #17a2b8;">

  <img src="../portfolio-list/assets/img/pi_logo.png" style="height: 34px;" class="d-inline-block align-top" alt="Pi Logo">
  <span class="uname" style="font-size: 1.6rem;"></span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="justify-content: flex-end;">
    <div class="navbar-nav">
      
      
	 <ul class="navbar-nav">
                    <li class="nav-item">

                        <a class="nav-link" id="home" href="index.php"><strong>Home</strong> <i class="fa fa-home font_css" aria-hidden="true"></i></a>
                    </li>
                    

                   

						<li class="nav-item">
						<a id="logout_user" class="nav-link" href="#"><strong>Logout</strong> <i class="fas fa-sign-out-alt font_css" aria-hidden="true"></i></a>
					</li>
                </ul>
    </div>
  </div>
  
</nav>
		
		
<div class="container">

		

        <br>


        <div class="main_content">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6">
                    <div class="card">
					<div class="card-header css-header">Import Data</div>
					<div class="card-body">		
						
					
                        <!-- <h4>Thank you for Registering! </h4>
                        <p>To finish the procedure, you are requested to upload the .zip folder, with all the documents mentioned in the last mail.</p> -->

                        <form id="form" action="" method="post" enctype="multipart/form-data">
                            <!-- <input id="uploadImage" type="file" name="image" /> -->
                            <input id="user_id" name='user_id' type="hidden" value="<?php echo $partnerid; ?>" />
                            <div class="m-t-10">
                                
                                <div class="row justify-content-start">
                                    <div class="col-md-8">
                                        <input type="file" name="example1" class="form-control p-1" />
                                    </div>
									
									<div class="col-md-4">
									 <button type="button" id="form_submit" class="btn btn-primary btn-css">
                                        Submit
                                    </button>
									</div>
                                </div>
								<div class="row">
										<div class="col-md-12">
									<small><strong>Note: Upload  .xlx or .xlsx file only.<strong></small>
								</div>
								</div>
                            </div>
                           
                                <div class="col-md-12" style="padding-left: 0;display: flex;align-items: center;color: red;">
                                    <!-- Your first column here -->
                                    <p><span id="err"></span><br>
                                        <span id="err1"></span> </p>
                                </div>
                                <div class="col-md-4 text-right">
                                    <!-- Your second column here -->
                                   

                                    <div id='loader' style='display: none;'>
                                        <div class="loader_img_cont">
                                            <img src='assets/images/Loading_icon.gif' width='76px'>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-right m-t-10">
                                    <!-- Image loader -->


                                    <!-- Button trigger modal -->

                                    <!-- <input id='send' class="btn btn-success"data-toggle="modal" data-target="#myModal" type="submit" value="Upload"> -->
                                    <!-- Image loader -->


                                </div>
                           
                        </form>



                    </div>
                </div>
				</div>
            </div>
        </div>

    </div>
</body>

<script>
    $(document).ready( function () {         
        if(!(localStorage.getItem("status") == "sucess")){
            window.location.href = "login.php";
        }
    });
    $("#form_submit").on('click', (function(e) {
        e.preventDefault();
        document.getElementById("user_id").value = localStorage.getItem("user_id");
        // Get form
        var form = $('#form')[0];

        // Create an FormData object 
        var data = new FormData(form);
        $.ajax({
            // url: "/slimportal/public/partner/fileupload",
            url: 'https://pidatacenters.com/account-managment/calls/controllers/importdataxl.php',
            type: "POST",
            // data:  new FormData(this),
            data: data,

            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function() {

                // $("#err").fadeOut();
                // $("#form_submit").hide();
                $("#send").hide();
                // $("#loader").show();
                $("#form_submit").text("Please Wait...");
                $('#form_submit').prop('disabled', true);
            },
            success: function(data) {
                //alert(data);
                data = JSON.parse(data)
                console.log(data);
                if (data['status'] == 'err') {
                        // view uploaded file.
                        $("#form")[0].reset();
                        // $("#err").html(data['message']).fadeIn();
                        $("#err").html('Something went wrong').fadeIn();
                        $("#err1").html('Please try after sometime!').fadeIn();
                        $('#mesg').html(data['message']);
                        $('#exampleModal').modal("show");
                        $("#form_submit").show();
                        $("#loader").hide();
                        $("#form_submit").text("Upload");
                        $('#form_submit').prop('disabled', false);
                } else if (data[0]['status'] == 'success') {
                    $("#form")[0].reset();
                    $("#loader").hide();
                    // $("#err").html(data['message']).fadeIn();
                    $("#err").html('Documents Uploaded Sucessfully <a href="https://103.210.73.84/portfolio-list/index.php"> Back to home<a>').fadeIn();
                    // $("#err1").html('Please Check Your E-Mail.').fadeIn();
                    $('#mesg').html(data[0]['message']);
                    $('#exampleModal').modal("show");
                    $("#form_submit").text("Success");
                    $('#form_submit').prop('disabled', true);
                    // setTimeout(function() {
                    //     window.location = 'index.html';
                    // }, 5000);
                }

            },
            error: function(e) {
                $("#err").html(e).fadeIn();
            }
        });
    }));
	
	$('a#logout_user_1').on('click', function () {
		window.location.href = "controllers/logout.php";
	});
	
</script>

</html>