<?php
 include_once('includes/header.php');
?>
<style type="text/css">
	.hb-topHead{
		margin: 36px auto 40px;
	}
	.hb-topHead >h1{
		font-size: 30px;
		margin-bottom: 12px;
	}
	.hb-topHead >p{
		font-size: 16px;
		line-height: 22px;
	}
	.hb-topHead >p+p{
		margin-top: 12px;
	}
	.hb-hb-devWorks{
		margin: 12px auto 36px;
	}
	.hb-devWo >li{
		width: 50%;
		vertical-align: center;
		padding:0 36px;
		margin: 0px auto
	}
	.hb-devWo >li >h2{
		font-size: 26px;
		margin-bottom: 12px;
	}
	.hb-devWo >li >p{
		font-size: 16px;
		line-height: 22px;
	}
	.sfdfd_sdajsd{
		text-align: center;
	}
	.hb-dibsdd{
		width:50%;
		font-size: 0px;
		vertical-align: top;
		margin: 12px auto;
		padding:0px 12px!important;
	}
	.sdhsd_ssdud{
		position: relative;
	    width: 100%;
	    transition: 0.5s;
	    border: 1px solid #ccc;
	    font-size: 0px;
	    border-radius: 8px;
	    padding: 27px;
	    cursor: pointer;

	}
	.jdh_ddksd > p {
	    width: 80px;
	    height: 80px;
	    background: #3708b3;
	    border-radius: 8px;
	    padding: 12px;
	}
	.sdhsd_ssdud:hover {
	    background-color: #3708b3;
	}
	.sdhsd_ssdud:hover .djdf_sdusd >h3{
		color: #fff;
	}
	.sdhsd_ssdud:hover .djdf_sdusd >p{
		color: #d5cef7;
	}
	.djdf_sdusd{
		padding-left: 18px;
	}
	.jdh_ddksd , .djdf_sdusd{
		display: inline-block;
		font-size: 16px;
		line-height: 22px;
		vertical-align: top;
		width: 80%;
		text-align: left;
	}
	.jdh_ddksd{
		width: 20%;
	}
	.djdf_sdusd >h3{
		font-size: 18px;
		margin-bottom: 12px;
	}
	.djdf_sdusd >p{
		line-height: 24px;
		font-size: 16px;
	}
	.hb-sdhsdhsd{
		font-size: 30px;
		margin: 20px auto 36px;
		text-align: center;
	}
	.jdh_ddksd >p >img{
		max-width: 100%;
		display: block;
	}
	@media (max-width:767px){
		.hb-devWo >li , .hb-dibsdd{
			width: 100%;
		}
		.hb-dibsdd{
			margin: 12px auto;
		}
		.hb-devWo >li{
			padding: 12px 14px;
		}
	}
</style>

<div class="hb-bannerCont">
	<div class="hb-bannerImgCont">
		<div class="hb-bannerImg">
			<!--<picture>
			     <source media="(max-width: 768px)" srcset="./harbour1/images/banners/devops_mbanner.png">
			      <img  src="./harbour1/images/banners/devops_banner.png" alt="Harbour1 Cloud Backup as a Service Banner" style="width:100%">
      		</picture>-->
      			<picture>
			     <source media="(max-width: 768px)" srcset="./<?= $config['subFolderName'] ?>/images/banners/devops-banner.jpg">
			      <img  src="./<?= $config['subFolderName'] ?>/images/banners/devops-banner.jpg" alt="Harbour1 Cloud Backup as a Service Banner" style="width:100%">
      		</picture>
      		<h2>DevOps</h2>
		</div>		
	</div>
</div>



	<section id="hb_products_Lists">
		<div class="container">
			<div class="hb-productHead text-center">
				<h1>End-to-end DevOps solution on Harbour1<sup>®</sup></h1>
				<p>DevOps is a portmanteau of “development & operations”, it is also a union of best practices and tools which are put in place to improve enterprise performance to deliver applications, products, and services faster. This agility empowers enterprises to serve their clients better and be competitive in the market. DevOps practice on Harbour1<sup>®</sup>  eliminates the barriers between development and operations team. Under its unified model, development and operations team work collectively all through the software application life cycle, starting from testing an application to launching it.</p>
			</div>

		</div>
	</section>


<div style="padding: 24px 0">
	<div class="container">

	<h3 class="hb-sdhsdhsd"> Practices</h3>
	<ul class="list-inline sfdfd_sdajsd">
		<li class="hb-dibsdd">
			<div class="sdhsd_ssdud">
				<div class="jdh_ddksd">
				<p>
					<img src="./harbour1/images/product-page-icons/devops/ci.svg" alt="cicd">
				</p>
			</div>
			<div class="djdf_sdusd">
				<h3>Continuous Integration(CI)</h3>
				<P>CI is a DevOps software development best practice, enabling developers to intertwine code changes into a common repository, for testing. The whole purpose of the integration is to address the bugs quickly thus enhancing quality of the software, by reducing the time to check and release new updates.</P>
			</div>
			</div>
		</li>
		<li class="hb-dibsdd">
			<div class="sdhsd_ssdud">
				<div class="jdh_ddksd">
				<p>
					<img src="./harbour1/images/product-page-icons/devops/cd.svg" alt="cicd">
				</p>
			</div>
			<div class="djdf_sdusd">
				<h3>Continuous Delivery(CD)</h3>
				<P>CD is a software development practice where changes in application are automatically built, tested, and prepared for a release to production. It expands upon continuous integration by deploying all code changes to a testing environment and/or a production environment after the build stage. </P>
			</div>
			</div>
		</li>
		<li class="hb-dibsdd">
			<div class="sdhsd_ssdud">
				<div class="jdh_ddksd">
				<p>
						<img src="./harbour1/images/product-page-icons/devops/micro.svg" alt="cicd">
				</p>
			</div>
			<div class="djdf_sdusd">
				<h3>Microservices</h3>
				<P>Each service runs in its own process and communicates with other services through a  HTTP-based API. Microservices are built around business capabilities and enterprises can use different frameworks or programming languages to package microservices.</P>
			</div>
			</div>
		</li>
		<li class="hb-dibsdd">
			<div class="sdhsd_ssdud">
				<div class="jdh_ddksd">
				<p>
					<img src="./harbour1/images/product-page-icons/devops/iac.svg" alt="cicd">
				</p>
			</div>
			<div class="djdf_sdusd">
				<h3>Infrastructure as Code</h3>
				<P>Provision and manage infrastructure using code, version control and continuous integration. Cloud-native API-driven model enables developers and system administrators to interact with infrastructure programmatically, and at scale, instead of needing to manually set up and configure resources. </P>
			</div>
			</div>
		</li>
		<li class="hb-dibsdd">
			<div class="sdhsd_ssdud">
				<div class="jdh_ddksd">
				<p>
					<img src="./harbour1/images/product-page-icons/devops/mon.svg" alt="cicd">
				</p>
			</div>
			<div class="djdf_sdusd">
				<h3>Monitoring and Logging </h3>
				<P>With monitoring & logging in place, enterprises understand how changes or updates impact end-users. It helps shedding insights into the root causes of problems or unexpected changes. Creating alerts or performing real-time analysis of this data also helps enterprises to monitor their services proactively.</P>
			</div>
			</div>
		</li>
		<li class="hb-dibsdd">
			<div class="sdhsd_ssdud">
				<div class="jdh_ddksd">
				<p>
					<img src="./harbour1/images/product-page-icons/devops/cola.svg" alt="cicd">
				</p>
			</div>
			<div class="djdf_sdusd">
				<h3>Communication and Collaboration</h3>
				<P>Development teams can share information and facilitate communications around project tracking systems through chat. This helps speed up communication across developers, operations, and even other teams like marketing or sales, allowing all stakeholders in an enterprise to closely on goals </P>
			</div>
			</div>
		</li>
		
	</ul>
</div>
</div>




<?php
	include_once('includes/footer.php');
?>
