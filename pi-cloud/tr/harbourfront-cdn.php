
<?php
 include_once('includes/header.php');
?>


<style>
	.text-center{
		text-align: center;
	}
	.pi-customNewsLetter{
		position: relative;
		margin: 36px auto
	}
	.pi-customNewsLetter >span{
		position: relative;
		display: block;
		max-width: 50%;
		margin: 0px auto;
	}
	.pi-customNewsLetter >span  >img{
		max-width: 100%;
	}
	.pi-customNewsLetter >p{
		max-width: 70%;
		line-height: 20px;
		  font-size: 16px;
	
    color: #7b7f85;
    padding-bottom: 15px;
    line-height: 28px;

		margin: 0px auto
	}
	.pi-customNewsLetter >h3{
		color: #2f1dac;
		margin: 24px auto 12px;
		font-size: 20px;
	}
	.hb-conts{
		margin: 36px auto;
		position: relative;
	}
	.hb-conts >h1{
		font-size: 30px;
		color:#4285f4;
		margin-bottom: 16px; 
	}
	.hb-conts >h2{
		font-size: 20px;
    color: #545454;
    line-height: 29px;
    margin: 24px auto;
	}
	.hb-conts >p{
	    font-size: 16px;
	
    color: #7b7f85;
    padding-bottom: 15px;
    line-height: 28px;
    }
	.row{
		width: 100%;
		font-size: 0px;

	}

	.col-md-6{
		display: inline-block;
		width: 50%;
		vertical-align: top;
		font-size: 14px;
	}
	.hb-ctafromContact{
		display: block;
		padding:12px 16px;
		border-radius: 6px;
		background-color: #2f1dac;
		width: 300px;
		margin:0px auto 20px;
		cursor: pointer;
		color: #fff;
		font-weight: bold;
	}
	@media (max-width: 767px){
			.col-sm-12{
		width: 100%;
		font-size: 14px;

	}
	picture{
		float: none;
		padding-top: 42px;
	}
	.hb-conts >h1{
		font-size: 24px;
		color:#4285f4;
	}
	.hb-conts >h1>span{
		display: block;
	}
	}
</style>
<!-- 	
your page code -->


<div class="pi-image-banner">



			<picture>
			    <source media="(max-width: 768px)" srcset="images/banners/banner-one.jpeg">
			     <a href="https://us02web.zoom.us/webinar/register/WN_A9X3Ym3BSZ2OLqLYBnIBUQ" target="_blank" style="display:block"><img  src="images/banners/banner-one.jpeg" alt="Harbour1 Cloud Backup as a Service Banner" style="width:100%"></a>
      		</picture>
</div>





	<div class="container">
		<div class="text-center hb-conts">
			
			
			<h2>Now Start Your Journey With <br> India's First Indigenous Content Delivery Network (CDN)   On Cloud <br>At INR 1.6/GB</h2>
			<a href="/contact-us" class="hb-ctafromContact" target="_blank">Talk To Our Experts Now</a>
			<p>Accelerate your performance with HarbourFront<sup>TM</sup> CDN for on-demand content delivery with real-time analytics.</p>
			<p>HarbourFront<sup>TM</sup> CDN on cloud, delivers enhanced user experience for dynamic web applications and websites, by geographically distributing the network and caching data spatially relative to end users. It enables enterprises to accelerate live or on-demand media streaming and push data-rich content locally. Auto mapping of network conditions and intelligent routing of user traffic to our nearest edge location, allows enterprises to leverage cached or dynamic content. 30+ Points of Presence across the globe are interconnected to deliver sub-single digit millisecond latency and high availability to end-users</p>
		</div>
	</div>
<section>
	<div class="container">
		<div class="row text-center">
			
			<div class="col-md-6 col-sm-12 pi-customNewsLetter">
				<span style="">
					<img src="images/banners/cdn_1s.png" alt="cdns">
				</span>
				<h3>Web Acceleration</h3>
				<p>Accelerate your web performance and delivery over distributed network across the globe</p>
			</div>
			<div class="col-md-6 col-sm-12 pi-customNewsLetter">
				<span style="">
					<img src="images/banners/cdn_2s.png" alt="cdns">
				</span>
				<h3>File Download Optimisation</h3>
				<p>Enable faster and reliable downloads at end-user level, where scale and trans-continetal delivery is important</p>
			</div>
			<div class="col-md-6 col-sm-12 pi-customNewsLetter">
				<span style="">
					<img src="images/banners/cdn_3s.png" alt="cdns">
				</span>
				<h3>On-Demand Streaming</h3>
				<p>Low latency on-demand streaming, enabling enterprises to deliver file based video, audio and apps over the wire.,</p>
			</div>
			<div class="col-md-6 col-sm-12 pi-customNewsLetter">
				<span style="">
					<img src="images/banners/cdn_4s.png" alt="cdns">
				</span>
				<h3>Live Streaming</h3>
				<p>Stream live events (news, broadcasts & sports events) over the internet and scale at will to cope with large audiences.</p>
			</div>
		</div>
	</div>
</section>


<?php
	include_once('includes/footer.php');
?>