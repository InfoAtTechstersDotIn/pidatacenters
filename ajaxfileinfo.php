
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
$sql = 	"select * from  social where id=".$userid;
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result)){

?>


<div class="director-cnt row">
          <div class="col-md-12">
		  <h4 class="text-center" style="font-size:20px;"><?php echo $row['youtube_title'];?></h4>
             <iframe  class="youtube-al" src="<?php echo $row['youtube_link'];?>"></iframe>
             
          </div>
  
        </div>
		
		<?php
}
?>