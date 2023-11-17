<head>
  <style>
    #myBtn2 {
      display: none;
    }
  </style>
</head>



<?php include('php/includes-techsters/header.php'); ?>

<?php
// $servername = "localhost";
$servername = "172.20.119.52";
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
<style>
  .ga-vd ul li {
    padding: 14px;
  }
</style>
<!-- main starts here -->
<div class="about-banner">
  <div class="about-banner-blk">
    <img src="images/video.jpg" alt="videos-bann22" width="1920" height="210">
    <h2>Pi Videos</h2>

  </div>
</div>
<!--what-is-noc starts here -->

<div class="knowledge-hub-videos1 knowledge-gallery1 videoss">
  <div class="container">
    <div class="knowledge-hub-videos-top">
      <!--<h3 style="color:#414141">Our <span style="color:#7BBC42">Pi Videos</span></h3><br>-->
      <!--<p style="color:#242424">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dui mauris, vehicula vel commodo at, sollicitudin<br> sed magna. Quisque nec ligula ligula. Ut tincidunt molestie auctor. Morbi in lacus sit amet odio ornare tincidunt ut<br> vitae nunc. Praesent iaculis luctus nisl, quis</p>-->
    </div>
    <br>
    <ul class="slider ga-vd">
      <li>
        <ul class="row">

          <li class="col-md-4">
            <a href="#modal-1">
              <img src="images/1.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>
          <li class="col-md-4">
            <a href="#modal-2">
              <img src="images/2.png" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>
          <li class="col-md-4">
            <a href="#modal-3">
              <img src="images/3.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>


        </ul>
      </li>
      <li>
        <ul class="row">
          <li class="col-md-4">
            <a href="#modal-4">
              <img src="images/4.png" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>
          <li class="col-md-4">
            <a href="#modal-5">
              <img src="images/5.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>
          <li class="col-md-4">
            <a href="#modal-6">
              <img src="images/6.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>
        </ul>
      </li>
      <li>
        <ul class="row">
          <li class="col-md-4">
            <a href="#modal-7">
              <img src="images/7.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>
          <li class="col-md-4">
            <a href="#modal-8">
              <img src="images/8.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>
          <li class="col-md-4">
            <a href="#modal-9">
              <img src="images/9.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true"></i>
              </div>
            </a>
          </li>

        </ul>
      </li>
      <li>
        <ul class="row">

          <li class="col-md-4">
            <a href="#modal-10">
              <img src="images/10.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>
          <li class="col-md-4">
            <a href="#modal-11">
              <img src="images/11.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>
          <li class="col-md-4">
            <a href="#modal-12">
              <img src="images/12.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>
        </ul>
      </li>
      <li>
        <ul class="row">
          <li class="col-md-4">
            <a href="#modal-13">
              <img src="images/13.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>
          <li class="col-md-4">
            <a href="#modal-14">
              <img src="images/14.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>
          <li class="col-md-4">
            <a href="#modal-15">
              <img src="images/15.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>

        </ul>
      </li>
      <li>
        <ul class="row">

          <li class="col-md-4">
            <a href="#modal-16">
              <img src="images/16.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>
          <li class="col-md-4">
            <a href="#modal-17">
              <img src="images/17.PNG" alt="kh-video-3" width="500" height="360" style="width:383px;height:298px">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>
          <li class="col-md-4">
            <a href="#modal-18">
              <img src="images/18.PNG" alt="kh-video-3" width="500" height="360" style="width:383px;height:298px">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>
        </ul>
      </li>
      <li>
        <ul class="row">
          <li class="col-md-4">
            <a href="#modal-19">
              <img src="images/19.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>
          <li class="col-md-4">
            <a href="#modal-20">
              <img src="images/20.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>
          <li class="col-md-4">
            <a href="#modal-21">
              <img src="images/21.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>

        </ul>
      </li>
      <li>
        <ul class="row">

          <li class="col-md-4">
            <a href="#modal-22">
              <img src="images/22.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>
          <li class="col-md-4">
            <a href="#modal-23">
              <img src="images/23.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>
          <li class="col-md-4">
            <a href="#modal-24">
              <img src="images/24.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>
        </ul>
      </li>
      <li>
        <ul class="row">
          <li class="col-md-4">
            <a href="#modal-25">
              <img src="images/25.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>
          <li class="col-md-4">
            <a href="#modal-26">
              <img src="images/26.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>
          <li class="col-md-4">
            <a href="#modal-27">
              <img src="images/27.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>

        </ul>
      </li>
      <li>
        <ul class="row">
          <li class="col-md-4">
            <a href="#modal-25">
              <img src="images/25.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>
          <li class="col-md-4">
            <a href="#modal-26">
              <img src="images/26.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>
          <li class="col-md-4">
            <a href="#modal-27">
              <img src="images/27.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>

        </ul>
      </li>
      <li>
        <ul class="row">
          <li class="col-md-4">
            <a href="#modal-31">
              <img src="images/31.PNG" alt="kh-video-3" width="500" height="360" style="width:383px;height:298px">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>
          <li class="col-md-4">
            <a href="#modal-32">
              <img src="images/32.PNG" alt="kh-video-3" width="500" height="360" style="width:383px;height:298px">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>
          <li class="col-md-4">
            <a href="#modal-33">
              <img src="images/33.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>

        </ul>
      </li>
      <li>
        <ul class="row">

          <li class="col-md-4">
            <a href="#modal-34">
              <img src="images/34.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>
          <li class="col-md-4">
            <a href="#modal-35">
              <img src="images/35.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>
          <li class="col-md-4">
            <a href="#modal-36">
              <img src="images/36.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>
        </ul>
      </li>
      <li>
        <ul class="row">
          <li class="col-md-4">
            <a href="#modal-37">
              <img src="images/37.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>
          <li class="col-md-4">
            <a href="#modal-38">
              <img src="images/38.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>
          <li class="col-md-4">
            <a href="#modal-39">
              <img src="images/39.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>

        </ul>
      </li>
      <li>
        <ul class="row">

          <li class="col-md-4">
            <a href="#modal-40">
              <img src="images/40.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>
          <li class="col-md-4">
            <a href="#modal-41">
              <img src="images/41.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>
          <li class="col-md-4">
            <a href="#modal-42">
              <img src="images/42.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>
        </ul>
      </li>
      <li>
        <ul class="row">
          <li class="col-md-4">
            <a href="#modal-43">
              <img src="images/43.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>
          <li class="col-md-4">
            <a href="#modal-44">
              <img src="images/44.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>
          <li class="col-md-4">
            <a href="#modal-45">
              <img src="images/45.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>

        </ul>
      </li>
      <li>
        <ul class="row">

          <li class="col-md-4">
            <a href="#modal-46">
              <img src="images/46.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>
          <li class="col-md-4">
            <a href="#modal-47">
              <img src="images/47.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>
          <li class="col-md-4">
            <a href="#modal-48">
              <img src="images/48.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>
        </ul>
      </li>
      <li>
        <ul class="row">
          <li class="col-md-4">
            <a href="#modal-49">
              <img src="images/49.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>
          <li class="col-md-4">
            <a href="#modal-50">
              <img src="images/50.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>
          <li class="col-md-4">
            <a href="#modal-51">
              <img src="images/51.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>

        </ul>
      </li>
      <li>
        <ul class="row">

          <li class="col-md-4">
            <a href="#modal-52">
              <img src="images/52.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>
          <li class="col-md-4">
            <a href="#modal-53">
              <img src="images/53.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>
          <li class="col-md-4">
            <a href="#modal-54">
              <img src="images/54.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>
        </ul>
      </li>
      <li>
        <ul class="row">
          <li class="col-md-4">
            <a href="#modal-55">
              <img src="images/55.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>
          <li class="col-md-4">
            <a href="#modal-55">
              <img src="images/55.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>
          <li class="col-md-4">
            <a href="#modal-56">
              <img src="images/56.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>

        </ul>
      </li>
      <li>
        <ul class="row">

          <li class="col-md-4">
            <a href="#modal-57">
              <img src="images/57.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>
          <li class="col-md-4">
            <a href="#modal-58">
              <img src="images/58.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>
          <li class="col-md-4">
            <a href="#modal-59">
              <img src="images/59.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>
        </ul>
      </li>
      <li>
        <ul class="row">
          <li class="col-md-4">
            <a href="#modal-60">
              <img src="images/60.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>
          <li class="col-md-4">
            <a href="#modal-61">
              <img src="images/61.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>
          <li class="col-md-4">
            <a href="#modal-62">
              <img src="images/62.PNG" alt="kh-video-3" width="500" height="360">
              <div class="play-icon">
                <i class="fa fa-play" aria-hidden="true" style="color:#df7c7c"></i>
              </div>
            </a>
          </li>

        </ul>
      </li>

    </ul>



    <!--<ul class="row">
                            <li class="col-md-4">
                                 <a href="#modal-2">
                                 <img src="images/video-4.png" alt="kh-video-1" width="500" height="360">
                                 </a>
                             </li>
                             <li class="col-md-4">
                                  <a href="#modal-3">
                                 <img src="images/video-5.png" alt="kh-video-2" width="500" height="360">
                                 </a>
                             </li>
                             <li class="col-md-4">
                                  <a href="#modal-4">
                                 <img src="images/video-6.png" alt="kh-video-3" width="500" height="360">
                                 </a>
                                
                             </li>    
                                </ul>-->
    <!--<li>
                           <ul class="row">
                            <li class="col-md-4">
                                 <img src="images/video-1.png" alt="kh-video-1" width="500" height="360">
                             </li>
                             <li class="col-md-4">
                                 <img src="images/video-2.png" alt="kh-video-2" width="500" height="360">
                             </li>
                             <li class="col-md-4">
                                 <img src="images/video-3.png" alt="kh-video-3" width="500" height="360">
                             </li>    
                                </ul>
								<br>
								 <ul class="row">
                            <li class="col-md-4">
                                 <img src="images/video-4.png" alt="kh-video-1" width="500" height="360">
                             </li>
                             <li class="col-md-4">
                                 <img src="images/video-5.png" alt="kh-video-2" width="500" height="360">
                             </li>
                             <li class="col-md-4">
                                 <img src="images/video-6.png" alt="kh-video-3" width="500" height="360">
                             </li>    
                                </ul>
                    </li>-->
    <!--<li>
                               <ul class="row">
                            <li class="col-md-4">
                                 <img src="images/video-1.png" alt="kh-video-1" width="500" height="360">
                             </li>
                             <li class="col-md-4">
                                 <img src="images/video-2.png" alt="kh-video-2" width="500" height="360">
                             </li>
                             <li class="col-md-4">
                                 <img src="images/video-3.png" alt="kh-video-3" width="500" height="360">
                             </li>    
                                </ul>
								<br>
								 <ul class="row">
                            <li class="col-md-4">
                                 <img src="images/video-4.png" alt="kh-video-1" width="500" height="360">
                             </li>
                             <li class="col-md-4">
                                 <img src="images/video-5.png" alt="kh-video-2" width="500" height="360">
                             </li>
                             <li class="col-md-4">
                                 <img src="images/video-6.png" alt="kh-video-3" width="500" height="360">
                             </li>    
                                </ul>
                    </li>-->
  </div>
</div>
<br>
<br>
<?php include('php/includes-techsters/footer.php'); ?>
<div id="modal-1" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">Kalyan Muppaneni,Founder & CEO, Pi Datacenters at CII Telecom Summit Dec 2022</h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/jBe11lBUsR8">
              </iframe>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="modal-2" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">Pi Employee Video</h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/4ak5pKlfxVg">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>
<div id="modal-3" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h5 class="text-center">Take A Tour Of Pi DATACENTERS - Asia's Largest Uptime Institute TIER IV Certified Data Center </h5>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/QVmcE4FXS9E">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>
<div id="modal-4" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h2 class="text-center">Key Differentiators of pi-cloudÂ® Cloud</h2>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/7kLjRZ04z7A">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>
<div id="modal-5" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h2 class="text-center" style="font-size:20px;">Kalyan Muppaneni, Founder & CEO, Pi at International Annual Tech Fest VIT University, AP</h2>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/aDjnMwJDz38">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>
<div id="modal-6" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">Sharing glimpses of Pi at ASSOCHAM Data Centre & Cloud Infra Summit'22</h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/4tbObi6UHWo">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>
<div id="modal-7" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">Blood Donation Camp</h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/cZZ5aCeDtm0">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div id="modal-8" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">CFO Vision & Innovation Summit & Awards 2022
              </h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/eC0NvIbgj8Q">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>
<div id="modal-9" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">A glimpse of Pi's 8 years journey!
              </h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/dO2l6GF22W0">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>
<div id="modal-10" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">Mega Walk-in Drive @ Pi Data Centers Amaravati
              </h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/dJKRJV4R3nw">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div id="modal-11" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">Foundation Day Celebrations @ Vijayawada
              </h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/qLdlCB_L7dA">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>


<div id="modal-12" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">R&R Employee
              </h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/HqNiWz3YFp8">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>
<div id="modal-13" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">Pi'Oscope - On The Move
              </h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/G2A4UE1szQw">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>
<div id="modal-14" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">Client Testimonial - In Conversation with Group CTO, Kirloskar Management Services
              </h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/3mr5MEyHSgo">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div id="modal-15" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">Bring Your Own Ganesha @ Pi
              </h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/QrcnnclX1Kw">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div id="modal-16" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">Pi@ ASSOCHAM Smart Datacenters & Cloud Infrastructure Summit 2022 Part II
              </h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/qZLAHkj0-_A">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div id="modal-17" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">Pi @ ASSOCHAM India Smart Datacenters & Cloud Infrastructure Summit 2022
              </h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/jj5EinwFz-Y">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div id="modal-18" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">Kalyan Muppaneni, Founder & CEO, Pi Datacenters, speaks at CII - Part II
              </h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/jj5EinwFz-Y">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div id="modal-19" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">Kalyan Muppaneni, Founder & CEO, Pi Datacenters, speaks at CII - Part II
              </h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/x1eJMnhb_0A">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div id="modal-20" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">Fun @ Pi #employeeengagement #worklifebalance #fun
              </h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/rl5v6wA6Seo">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div id="modal-21" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">World Environment Day, 5th June 2022
              </h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/YGMs0ewxhbg">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>


<div id="modal-22" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">Developing cybersecurity expertise of the corporate boards
              </h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/2JBKOxD8XaE">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div id="modal-23" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">LIVE webinar on Container as Service, Simplifying The Workflow for Applications
              </h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/Ss3W8gRy9zY">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>


<div id="modal-24" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">Pi'Oneers Walk the Talk
              </h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/p72tbovtJlU">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div id="modal-25" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">Frozen in Memories...Pi'Oscope: The Leadership Connect 2021
              </h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/4l13rjHy-Cg">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div id="modal-26" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">Marketing Professional of the Year - IT Excellence Awards - CRO & Global Marketing Head - Pi
              </h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/o-GXgr1Jgn4">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div id="modal-27" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">Cloud Company of the Year 2021 - Pi Datacenters - pi-cloud - IT Excellence Awards
              </h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/PdO6CtFanM0">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div id="modal-28" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">Kalyan Muppaneni on NewsX speaking about Making India A Global Data Hub Presented By ASSOCHAM
              </h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/PvFpX8cXS60">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>


<div id="modal-29" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">When you are at Pi, Be the Pi'oneer
              </h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/yLRlR8LP8KY">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>
<div id="modal-30" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">SAP Infra Webinar | pi-cloudÂ® | Pi Data Centers

              </h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/N1xrLGQpv-U">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div id="modal-31" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">HR Speaks on GPTW

              </h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/W0S_k__ejpk">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div id="modal-32" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">CEO Talks: What makes Pi a great place to work?

              </h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/17vC-LzUi6M">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div id="modal-33" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">The all new pi-cloudÂ® website is NOW LIVE!

              </h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/qkq1D8h-lec">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>


<div id="modal-34" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">HarbourFront, Indiaâ€™s First Indigenous CDN On Cloud. Another 1st From Pi DATACENTERS

              </h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/NxHgdxbgBqY">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div id="modal-35" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">Happy Diwali from Pi DATACENTERS !

              </h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/abOQtrPYgdk">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div id="modal-36" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">Colocation & Cloud Services Mega Launch Webinar in association with BroadGroup and Intel Corporation

              </h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/IA2M9k4ZkSo">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>


<div id="modal-37" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">Disaster Recovery Summit 2018, Bangalore, Dec 20, 2018

              </h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/3wvjd4NBNPg">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>



<div id="modal-38" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">Why you should NOT delay your cloud journey? Explained by senior leaders from Intel and Pi

              </h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/Zr3EHUgem_k">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div id="modal-39" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">How Is Pi Ensuring Seamless Operations During COVID?
              </h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/I8qtxSt8gZo">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div id="modal-40" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">Pi Workspaces - The Next Generation VDI Solution
              </h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/rKbvkHmkWzw">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>
<div id="modal-41" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">pi-cloudÂ® - Enterprise Cloud Platform @PiÂ®
              </h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/FTYyytOtHEc">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div id="modal-42" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">Rural-India's Growth is Critical for India's $5T economy - Kalyan Muppaneni, Chairman & CEO, Pi
              </h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/S3XH-WPdd2A">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div id="modal-43" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">Merry Christmas Wishes from Pi!
              </h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/QCGQJ-R0UfU">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>
<div id="modal-44" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">Pi celebrates it's 5 years anniversary with a High 'V'
              </h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/5V86osftiBM">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>


<div id="modal-45" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">#FreedomForAll
              </h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/_YU2aThL28Q">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>


<div id="modal-46" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">CEO Talks Series - Episode 3
              </h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/8j-6C4Z9kTY">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>


<div id="modal-47" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">Kalyan Muppaneni, Founder & CEO, Pi DATACENTERS Shares His Views About Digital India
              </h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/kHGZG2sqZLQ">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div id="modal-48" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">CEO Talk Series - Episode 2
              </h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/sTW2bYcnMnM">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>


<div id="modal-49" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">CEO Talk Series - Episode 1
              </h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/C3zaz2S4E9c">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>


<div id="modal-49" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">CEO Talk Series - Episode 1
              </h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/C3zaz2S4E9c">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div id="modal-50" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">Pi DATACENTERS: India's 1st Greenfield & World's 4th Largest Uptime Institute TIER IV Data Center
              </h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/EX3qYLug8js">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div id="modal-51" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">Staying Prepared for Disaster - Location Matters the Most!
              </h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/Kvy9ZQ48ckU">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div id="modal-52" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">Location of Primary DC Site annd DR Site must be of strategic importance
              </h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/Jq0zPKFkiLQ">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>


<div id="modal-53" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">Check Live Data Center Latency | Pi DATACENTERS</h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/6fcLpo4JbxU">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div id="modal-54" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">Welcome Note by Kalyan Muppaneni, Founder & CEO, Pi DATACENTERS at Cyber Security Conclave, Mumbai</h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/UtyDTucyaPg">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div id="modal-55" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">Take Your Leap To Digital Transformation With pi-cloud | Go Cloud!</h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/MpNn0HkxvSU">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div id="modal-56" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">Pi Amaravati, Asia's Largest Uptime Institute TIER IV Certified Data Center.</h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/kTKIzs7KZwM">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>
<div id="modal-57" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">IT leaders from BFSI industry being felicitated at BFSI Data center & Cloud Summit â€˜2017</h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/84UPRo3VzGY">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>


<div id="modal-58" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">Watch Pi work its magic at BFSI Data center and cloud summit 2017
              </h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/VuITdzI2mI8">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div id="modal-59" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">Pi On The Panel - " Role of Data Center & Cloud in Banking Industry"</h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/8H6JiRReS58">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div id="modal-60" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">Infrastructure as a Service (IaaS) | Pi DATACENTERS"</h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/K67P_9CGyuA">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div id="modal-61" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">Data Center Maintenance | Pi DATACENTERS</h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/Ju0upxoRjEk">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div id="modal-62" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">x</a>
    <div class="modal-content">
      <div class="modal-container">
        <div class="modal-body">
          <div class="director-cnt row">
            <div class="col-md-12">
              <h4 class="text-center" style="font-size:20px;">Life @Pi</h4>
              <iframe class="youtube-al" src="https://www.youtube.com/embed/Z7izR66YuFA">
              </iframe>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>







  <!--footer ends-->
</div>
<!-- wrapper ends -->
<script src="js/wow.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/main-pi.js"></script>
<script>
  $(document).ready(function() {
    $('.slider1').slick({
      slidesToShow: 4,
      dots: true,
      arrows: false,
      //adaptiveHeight: true,
      responsive: [{
          breakpoint: 768,
          settings: {
            arrows: false,
            slidesToShow: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows: false,
            slidesToShow: 1
          }
        }
      ]
    });


    //animation
    wow = new WOW({
      animateClass: 'animated',
      offset: 100,
      mobile: true
    });
    wow.init();
  });
</script>
<script>
  $(document).ready(function() {
    $('.slider').slick({
      slidesToShow: 1,
      dots: false,
      arrows: true,
      //adaptiveHeight: true,
      responsive: [{
          breakpoint: 768,
          settings: {
            arrows: true,
            slidesToShow: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows: true,
            slidesToShow: 1
          }
        }
      ]
    });


    //animation
    wow = new WOW({
      animateClass: 'animated',
      offset: 100,
      mobile: true
    });
    wow.init();
  });
</script>
<script>
  $(document).ready(function(e) {
    var TabBlock = {
      s: {
        animLen: 200
      },

      init: function() {
        TabBlock.bindUIActions();
        TabBlock.hideInactive();
      },

      bindUIActions: function() {
        $('.tabBlock-tabs').on('click', '.tabBlock-tab', function() {
          TabBlock.switchTab($(this));
        });
      },

      hideInactive: function() {
        var $tabBlocks = $('.tabBlock');

        $tabBlocks.each(function(i) {
          var
            $tabBlock = $($tabBlocks[i]),
            $panes = $tabBlock.find('.tabBlock-pane'),
            $activeTab = $tabBlock.find('.tabBlock-tab.is-active');

          $panes.hide();
          $($panes[$activeTab.index()]).show();
        });
      },

      switchTab: function($tab) {
        var $context = $tab.closest('.tabBlock');

        if (!$tab.hasClass('is-active')) {
          $tab.siblings().removeClass('is-active');
          $tab.addClass('is-active');

          TabBlock.showPane($tab.index(), $context);
        }
      },

      showPane: function(i, $context) {
        var $panes = $context.find('.tabBlock-pane');

        // Normally I'd frown at using jQuery over CSS animations, but we can't transition between unspecified variable heights, right? If you know a better way, I'd love a read it in the comments or on Twitter @johndjameson
        $panes.slideUp(TabBlock.s.animLen);
        $($panes[i]).slideDown(TabBlock.s.animLen);
      }
    };

    $(function() {
      TabBlock.init();
    });
  });
</script>
<script>
  const accordion = document.getElementsByClassName('knowledge-hub-faqs-cnt');

  for (i = 0; i < accordion.length; i++) {
    accordion[i].addEventListener('click', function() {
      this.classList.toggle('active')
    })
  }
</script>
<div class="modal fade" id="empModal1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body2"></div>
      <!--<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">close</button>
			</div>-->
    </div>
  </div>
</div>
<script>
  $(document).ready(function() {
    $(".userinfo").click(function() {
      var userid = $(this).data('id');
      //alert(userid);
      $.ajax({
        url: 'ajaxfileinfo',
        type: 'post',
        data: {
          userid: userid
        },
        success: function(response) {
          $('.modal-body2').html(response);
          $('#empModal1').modal('show');
        }

      });
    });
  });
</script>

</body>

</html>