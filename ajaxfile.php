
<style>
.modal-dialog {
	margin: 6.75rem auto;
    padding: 50px 0px;
}
.modal{z-index:99999999999}
.modal-backdrop {
	z-index:auto;
}
.modal-dialog {
    max-width: 80%;
	background: rgb(0 0 0 / 90%);
}

</style>
    <?php
$servername = "localhost";
$username = "marcom";
$password = "TR*viv3mo?!q";
$dbname = "search8c_pi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
<?php
$userid = $_POST['userid'];
$sql = 	"select * from testimonials where id=".$userid;
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result)){

?>


<div class="director-cnt row">
          <div class="director-lt col-md-4">
             <img src="dashboard/uploads/<?php echo $row['ufile'];?>" alt="testimonial-img-1" width="729" height="943">
              <div class="director-lt-cnt">
                  
                  <!--<ul class="row social-icons">
                                    <li class="col-4">
                                        <a href="#">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                     <li class="col-4">
                                        <a href="#">
                                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>-->
              </div>
          </div>
      <div class="director-rt col-md-8">
          <!--<h3>Lorem ipsum dolor</h3>-->
            <p><?php echo $row['description'];?></p>
			<h3><?php echo $row['name'];?></h3>
                  <p><?php echo $row['designation'];?></p>
				   <p><?php echo $row['company_name'];?></p>
          </div>
        </div>
		
		<?php
}
?>