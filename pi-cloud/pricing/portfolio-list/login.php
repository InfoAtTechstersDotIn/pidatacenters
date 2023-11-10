<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Portfolio List Login</title>
      <link rel="icon" href="favicon.ico" type="image/x-icon">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="../portfolio-list/assets/js/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      <link rel="icon" href="https://pidatacenters.com/wp-content/themes/pidata/favicon.ico">
      <link rel="stylesheet" href="https://103.210.73.84/portfolio-list/assets/css/portfolio.css">
	 <!--  <script  src="https://103.210.73.84/portfolio-list/assets/js/portfoliojs.js"></script> -->
      <script> 
         $(document).ready(function(){
             $(".btn-primary").click(function(){
         		 
         		
         		 var username = $("#txt_uname").val().trim();
                 var password = $("#txt_pwd").val().trim();
         		
         		if(username==''||password==''){
         			alert("All fields are Mandatory");
         		}
         		
                
                 if( username != "" && password != "" ){
                     $.ajax({
                         url:'https://pidatacenters.com/account-managment/calls/controllers/auth/login.php',
                         type:'post',
         				dataType: 'json',
         				ContentType: 'application/json; charset=utf-8',
         				beforeSend: function () {
         				$("#loading-image").show();
         				},
                         data:{username:username,password:password},
                         success:function(data){
         				
                             var msg = "";
         					
         					 
         					  //localStorage.getItem('lastname');
         					
                             if(data.status == "sucess" && data.status_code == 200){
         						localStorage.setItem('user_id', data.profile.user_id);
         					 localStorage.setItem('name', data.profile.name);	
         					 localStorage.setItem('mobile', data.profile.mobile);
         					 localStorage.setItem('status', data.status);
         					 localStorage.setItem('role_name', data.profile['role_name']);
                                 $("#loading-image").hide();
                                 if(data.profile['role_name'] == 'SMC'){
                                     window.location.href = "/portfolio-list/smc.html";
                                 }else if(data.profile['role_name'] == 'Account Manager'){
                                     window.location.href = "/portfolio-list/index.php";
                                 }
                                  
         						 
                             }else{
         						$("#loading-image").hide();
                                 msg = "Invalid username and password!";
                             }
                             $("#message").html(msg);
                         }
                     });
                 }
             }); 
         	
         	 
         });   
                  
      </script>
   </head>
   <body>
      <div id="myDiv">
         <div class="loader" id="loading-image" style="display:none;"></div>
      </div>
      <div class="container-fluid margin_top">
         <div class="row align-items-center mobile_none">
            <div class="col-lg-7 col-12 text-center">
               <!-- Indicators -->
               <img src="../portfolio-list/assets/img/pi-login-pic.png" alt="Logo" alt="Los Angeles" class="img-fluid" width="500" height="500">
            </div>
            <div class="col-lg-4 col-12">
               <h2 style="position: relative;color: #0049a7;font-weight: 1000;font-size: 26px;padding: 9px;text-align: center;" class="ater_heading">PORTFOLIO LIST</h2>
               <div class="card">
                  <div class="card-header cc-card">LOGIN</div>
                  <div class="card-body">
                     <div class="row">
                        <div class="col-md-12">
                           <label>User Name*</label>
                           <input type="text" class="form-control" id="txt_uname" required  name="txt_uname" placeholder="Username" />
                        </div>
                     </div>
                     <div>
                        <div class="row mt-3">
                           <div class="col-md-12">
                              <label>Password*</label>
                              <input type="password" class="form-control" id="txt_pwd" required  name="txt_pwd" placeholder="Password"/>
                           </div>
                        </div>
                     </div>
                     <div class="row mt-3">
                        <div class="col-md-8">
                           <div id="message" style="color: red;font-size: 14px;"></div>
                        </div>
                        <div class="col-md-4 text-right">
                           <button type="button" class="btn btn-primary" value="Submit" name="but_submit" id="but_submit">Submit</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="modal fade" id="myModal" role="dialog">
         <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
               </div>
               <div class="modal-body">
                  <p><strong>Please contact administrator.</strong></p>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div>
      <div class="footer">
         <p></p>
      </div>
   </body>
   <!-- <script type="text/javascript" src="assets/js/login.js"></script> -->
</html>