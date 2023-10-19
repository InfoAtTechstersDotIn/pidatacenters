<?php
include_once('includes/header.php');

?>

<style>
	.hb-productHead {
		max-width: 80%;
		margin: 0 auto;
	}

	.hb-block2 {
		display: block;
	}

	.hb-block1 {
		display: none !important;
	}

	.stick {
		border-radius: 80px;
		max-width: 38% !important;
		margin-top: 70px;
	}

	.get-in-touch-blk {
		max-width: 945px;
		margin: 0 auto;
		background: #2680EB;
		border-radius: 80px;
		padding: 10px;
		border: 20px solid #ffffff;
	}

	.get-in-touch {
		margin: 0 0 -74px 0;
		position: relative;
	}

	.get-in-touch-lft {
		max-width: 70%;
	}

	.get-in-touch-lft p {
		font-size: 31.5px;
		line-height: 20px;
		padding-top: 29px;
		text-align: center;
	}

	.get-in-touch-rit a {
		font-size: 25.5px;
		line-height: 36px;
		background: #ECECEC;
		border-radius: 39px;
		height: 40px;
		text-align: center;
		color: #2680EB;
		width: 160px;
		margin: 0;
	}

	.get-in-touch-rit {
		max-width: 100%;
	}

	.appoinment li:nth-child(1) {
		width: 100% !important;
	}

	.appoinment li:nth-child(2) {
		width: 20% !important;
	}

	.appoinment {
		padding: 0px !important;
	}

	.appoinment h2 {
		padding: 0px 0px 0px 0px !important;
		font-size: 25px;
		line-height: 36px !important;
		text-align: center;
	}

	.dark ul {
		color: #ccc;
	}

	.dark h1 {
		color: #d5cef7 !important;
	}

	.owl-dots {
		position: absolute;
		top: 10px;
		margin: 30px auto;
		left: 0;
		right: 0;
	}

	.hb-productSec {
		max-width: 80% !important;
	}

	.hb-featLogo {
		width: 23% !important;
	}

	.hb-featCont h6 {
		text-align: center;
	}

	.sch-your {
		width: 500px;
		margin: 0 auto;
		display: block;
	}

	.essent {
		margin-top: 50px;
		float: right !important;
		width: auto !important;
	}

	.prem {
		width: auto !important;
		float: right !important;
	}

	@media (max-width:767px) {
		.hb-block1 {
			display: block !important;
		}

		.hb-block2 {
			display: none !important;
		}

		.get-in-touch-lft:first-child {
			width: 100% !important;
			max-width: 100% !important;
		}

		.get-in-touch-lft p {
			font-size: 15px !important;
			line-height: 21px !important;
			padding: 0 0 10px !important;
			text-align: center !important;
		}

		.get-in-touch-rit a {
			line-height: 38px !important;
			height: 38px !important;
			width: 150px !important;
			margin: 10px auto !important;
			font-size: 16px !important;
			display: block;
		}

		.footer-about .col-md-3 {
			-webkit-flex: 0 0 100% !important;
			float: none !important;
			width: 100% !important;
			text-align: center !important;
			max-width: 100% !important;
		}

		h1 {
			font-size: 25px !important;
			padding: 0 !important;
		}
	}

	@media (max-width:599px) {
		.hb-navmenu {
			left: -360px;
		}

		.hb-childProducts2 .tabBlock-tab {
			width: 100% !important;
			text-align: center;
			margin: 5px 0px;
		}

		.multi-cld-key2 li {
			width: 100%;
			text-align: center;
		}

		.hb-leftCont>span>img {
			display: block;
		}

		.sch-your {
			width: 400px;
			margin: 0 auto;
			display: block;
		}

		.hb-logo {
			width: 50% !important;
		}

		.hb-featTopHeader {
			text-align: center;
		}

		.templine>li {
			width: 100% !important;
			display: block !important;
			;
			margin: 10px 0px !important;
		}

		.essent {
			margin-top: 50px;
			float: none !important;
			width: auto;
		}

		.prem {
			width: auto !important;
			float: none !important;
		}

		.only-support li {
			word-break: break-all;
		}

		.only-support li br {
			display: none !important;
		}

		.range {
			display: block;
		}


	}

	.hb-boxCont {
		box-shadow: none;
	}



	/*Newly added styles*/

	body {
		font-family: 'Roboto', sans-serif !important;
	}

	.content_1 {
		max-width: 80%;
		margin: 0 auto;

	}

	.content_1 .para {
		font-size: 16px;
		margin: 30px 50px;
		text-align: justify;
	}

	.content_1 h2 {
		text-align: center;
		font-size: 32px;
		color: #76b543;
	}

	.range {
		display: grid;
		grid-template-columns: auto auto auto;
		align-content: space-between;
		gap: 30px;
		margin: 30px 0;
	}

	.range h2 {
		color: #535353;
		font-size: 19px;
	}

	.range p {
		margin: 20px 0 18px 0;
		font-size: 16px;
	}

	.change {
		padding: 19px;
		box-shadow: 1px 2px 3px #5e9c42;
	}

	.content_1 span {
		position: absolute;
	}

	.head {
		position: relative;
		text-align: center;
	}

	.head b {
		padding-left: 55px;
		font-size: 22px;
	}

	.para-2 {
		text-align: center;
	}

	.hb-childProducts2 .tabBlock-tab.is-active,
	.tabBlock-tab.is-active:after,
	.tabBlock-tab.is-active:before {
		background-color: #223f97 !important;
	}

	.hb-childProducts2 .tabBlock-tab:hover,
	.tabBlock-tab:hover:after,
	.tabBlock-tab:hover:before {
		background-color: #223f97 !important;
	}

	.hb-childProducts2 .tabline {
		border-bottom: solid #76b543 !important;
	}


	.points {
		display: flex;
		justify-content: center;
		align-items: center;
		flex-direction: column;
	}

	.cards {
		width: 100%;
		display: flex;
		flex-wrap: wrap;
		justify-content: space-around;
	}

	.card {
		margin: 40px;
		position: relative;
		max-width: 425px;
		max-height: 425px;
		box-shadow: 1px 0px 20px -6px #76b543;
		cursor: pointer;
	}

	.card-title {
		display: block;
		text-align: center;
		color: #76b543;
		background-color: #80808038;
		padding: 2%;
		border-top-right-radius: 4px;
		border-top-left-radius: 4px;
	}

	.card img {
		width: 80%;
		height: 80%;
		object-fit: contain;
		display: block;
		padding: 0 0 0 30px;
		position: relative;
	}

	.card-desc {
		display: block;
		font-size: 1rem;
		line-height: 1.4rem;
		position: absolute;
		height: 0;
		top: 0;
		opacity: 0;
		padding: 15px 8%;
		background-color: white;
		/* overflow-y: scroll; */
		transition: 0.8s ease;
		color: #223f97;
	}

	.desc-2 {
		padding: 80px 8%;
	}

	.card:hover .card-desc {
		opacity: 1;
		height: 100%;
		/* border: 1px solid #76b543; */
	}

	h1 {
		font-size: 2.8rem;
		color: #fff;
		margin: 40px 0 20px 0;
		text-align: center;
	}

	@media only screen and (min-width: 1200px) and (max-width: 1450px) {
		.change {
			padding: 15px;
		}

		.range h2 {
			font-size: 16px;
		}

		.range p {
			margin: 15px 0 18px 0;
			font-size: 15px;
		}

		.img {
			width: 60px;
		}

		.head b {
			font-size: 18px;
		}

	}

	.appoinment {
		background-color: #223f97 !important;
	}

	.hb-productSec>li {
		margin: 10px auto !important;
	}

	.sch-your {
		width: 400px !important;
	}

	.hb-featuresList>li {
		border-top: 5px solid #223f97 !important;
	}
</style>

<div class="hb-bannerCont">
	<div class="hb-bannerImgCont">
		<div class="hb-bannerImg">
			<!--	<picture>
			     <source media="(max-width: 768px)" srcset="./pi-cloud/images/banners/Web-banner-Ai.png">
			      <img  src="./pi-cloud/images/banners/Web-banner-Ai.png" alt="pi cloud Cloud Backup as a Service Banner" style="width:100%">
      		</picture>-->
			<picture>
				<source media="(max-width: 768px)" srcset="./<?= $config['subFolderName'] ?>/images/banners/multi-cloud-img.jpg">
				<img src="./<?= $config['subFolderName'] ?>/images/banners/multi-cloud-img.jpg" alt="pi cloud Cloud Backup as a Service Banner" style="width:100%">
				<h2>Multi Cloud Managed Services </h2>
			</picture>
		</div>
	</div>
</div>

<div class="content_1 col-md-12">
	<!-- <p class="para">
		Pi Datacenters take pride in offering comprehensive Multi Cloud Managed Services that empower your organization with unparalleled control, security, and efficiency in the digital realm. Our team of experts is dedicated to optimizing your cloud infrastructure, ensuring its performance, and safeguarding your data.
	</p> -->
	<p class="para">
		Pi Datacenters takes pride in offering comprehensive Multi Cloud Managed Services that empower your organization with unparalleled control, security, and efficiency in the digital realm. Pi represents the foundation upon which your organization's digital dreams are realized. We don't just offer services; we offer solutions that redefine the very essence of cloud management. Our team of experienced experts is committed to your digital journey's success. We understand that in the digital world, control is not just an option; it's imperative. With Pi Datacenters, you gain the ability to harness unparalleled control over your cloud infrastructure.

	</p>
	<p class="para">
		We recognize the critical role that security plays in maintaining your online fortress, and hence, we employ advanced security protocols to safeguard your data against the myriad threats that loom in the digital world. With Pi Datacenters, your data remains impervious to ever-evolving challenges, ensuring that your business operations are uninterrupted. Your cloud infrastructure's performance directly influences your business's success. Our team, well-versed in the intricate world of cloud computing, meticulously fine-tunes your setup. With Pi Datacenters, you can expect nothing less than unparalleled performance, ensuring a seamless user experience and the ability to meet your customers' demands effectively.
	</p>
	<p class="para">In a world fueled by data and connectivity, Pi Datacenters is not just a service provider; we are your strategic partner in achieving digital excellence. Our Multi Cloud Managed Services are meticulously crafted to not only meet your requirements but to exceed them. We are dedicated to your success, and our expertise is your competitive edge in the digital arena. Welcome to a new era of cloud management with Pi Datacenters. Your journey to digital greatness begins here.</p>
	<h2>Our Range Of Services </h2>

</div>

<div class="container content_1">
	<div class="row range">
		<div class="col-md-4 change">

			<span><img src="../images/managed-services-icons/CM.svg" class="img" width="70"></span>
			<p class="head"><b>Compute Management </b></p>
			<p class="para-2">Efficiently manage the availability, performance, and fine-tuning of your cloud resources. We specialize in setting up high availability, managing licensing, monitoring, alerting, reporting, logging, analysis, dashboarding, health checks, and more. </P>

		</div>
		<div class="col-md-4 change">

			<span><img src="../images/managed-services-icons/SM.svg" class="img" class="img" width="70"></span>
			<p class="head"><b>Security Management </b></p>
			<p class="para-2">Rest easy with our robust security management services. We identify and mitigate unsanctioned apps, enforce policies, and monitor your cloud data. Our services include anti-virus and anti-malware updates to keep your infrastructure secure.</P>

		</div>
		<div class="col-md-4 change">

			<span><img src="../images/managed-services-icons/BM.svg" class="img" width="70"></span>
			<p class="head"><b>Backup Management </b></p>
			<p class="para-2">Protect your critical assets with our comprehensive backup solutions. We ensure backups for all your applications, workloads, and data. Our self-serve and on-demand restore options come with robust SLAs.</P>

		</div>
		<div class="col-md-4 change">

			<span><img src="../images/managed-services-icons/NM.svg" class="img" width="70"></span>
			<p class="head"><b>Network Management </b></p>
			<p class="para-2">Optimize your virtual network for seamless communication among VMs and the internet. We handle subnet management, NSG (Network Security Group) management, and firewall management. </P>

		</div>
		<div class="col-md-4 change">

			<span><img src="../images/managed-services-icons/IM.svg" class="img" class="img" width="70"></span>
			<p class="head"><b>Identity Management </b></p>
			<p class="para-2">Effortlessly manage user accounts, federate identities across your organization's LOB (Line of Business) apps, and implement role-based access controls.</p>
		</div>
		<div class="col-md-4 change">
			<span><img src="../images/managed-services-icons/STORAGE-M.svg" class="img" class="img" width="70"></span>
			<p class="head"><b>Storage Management </b></p>
			<p class="para-2">Optimize data usage and access patterns to maximize cost savings. Identify and move stale data to more economical storage areas, helping you manage your storage budget effectively. </P>

		</div>
		<div class="col-md-4 change">
			<span><img src="../images/managed-services-icons/SOM.svg" class="img" class="img" width="70"></span>
			<p class="head"><b>Server OS Management </b></p>
			<p class="para-2">Ensure the continuous updating and troubleshooting of server operating systems for peak performance. </p>

		</div>
		<div class="col-md-4 change">
			<span><img src="../images/managed-services-icons/MM.svg" class="img" class="img" width="70"></span>
			<p class="head"><b>Monitoring Management </b></p>
			<p class="para-2">Gain insights into your VMs with complete monitoring of CPU utilization, memory usage, storage IOPS, and OS performance. </P>

		</div>
		<div class="col-md-4 change">
			<span><img src="../images/managed-services-icons/CONFIG-M.svg" class="img" width="70"></span>
			<p class="head"><b>Configuration Management </b></p>
			<p class="para-2">Keep your software up-to-date, enforce configuration and security policies, and manage patching, updates, password resets, and resource right-sizing. </P>

		</div>
		<div class="col-md-4 change">
			<span><img src="../images/managed-services-icons/BSA.svg" class="img" width="70"></span>
			<p class="head"><b>Basic Support Availability </b></p>
			<p class="para-2">Benefit from our 8x5 support for billing and invoicing inquiries, as well as 24x7 L1/L2 support for break-fix issues. Reach out through phone, email, or web support tickets. </P>

		</div>
		<div class="col-md-4 change">
			<span><img src="../images/managed-services-icons/CHANGE-M.svg" class="img" width="70"></span>
			<p class="head"><b>Change Management </b></p>
			<p class="para-2"> We ensure that proposed changes are scheduled based on business priorities, infrastructure impact, and service risk, minimizing disruptions to your IT services. </P>

		</div>
	</div>

</div>







<div>
	<h1 class="text-center mt-5" style="padding:0px 0 0;color:#1a1a1a;font-size:45px; margin-top: 90px;">Managed Services Models</h1>
	<ul class="hb-productSec list-inline">
		<li>
			<div class="hb-leftCont hb_ppCont">
				<span>
					<img src="./pi-cloud/images/product-images/Managed-Services-Models.png" alt="tickmark">
				</span>
			</div>
		</li>
		<li>
			<div class="hb-rightCont hb_ppCont">

				<p style="text-align:left;">Our Managed Services offer varied models to cater to unique business needs of enterprises. These include the A La Carte, Dedicated Resource, Tiered, Elastic (Pay-Per-Use), and Monitoring Only models. This is to ensure that businesses could focus on their core activities while our managed services ecosystem takes care of the smooth operations and service availability of the IT infrastructure landscape.</p>
			</div>
		</li>
	</ul>
</div>




<div class="hb-childProducts2">

	<div class="tabBlock">
		<div class="tabline">
			<ul class="tabBlock-tabs nav-tabs feature-tab  border-bottom-0 d-flex flex-wrap justify-content-center list-inline" data-tabs="tabs">
				<li class="tabBlock-tab is-active animatable fadeInUp">
					<a class="nav-link" data-toggle="tab">Tiered Model
					</a>
				</li>
				<li class="tabBlock-tab  animatable fadeInUp">
					<a class="nav-link" data-toggle="tab">Elastic Model
					</a>
				</li>
				<li class="tabBlock-tab  animatable fadeInUp">
					<a class="nav-link" data-toggle="tab">Dedicated Model
					</a>
				</li>
				<li class="tabBlock-tab  animatable fadeInUp">
					<a class="nav-link" data-toggle="tab">A La Carte Model
					</a>
				</li>

				<li class="tabBlock-tab  animatable fadeInUp">
					<a class="nav-link" data-toggle="tab">Monitoring Only Model
					</a>
				</li>
			</ul>
		</div>
		<div class="tab-content tabBlock-content">
			<div class="tabBlock-pane">
				<ul class="hb-productSec list-inline">
					<div class="hb-leftCont hb_ppCont">
						<p style="text-align:center">
							Provides different tiers of service levels based on the business's needs, ensuring that you pay only for the services you require.Â 
						</p>
						<!--<span>
			            				<img src="images/product-images/TIERED-MODEL.png" alt="advanced">
			            			</span>-->


					</div>

				</ul>
				<div class="points">
					<div class="cards">
						<div class="card">
							<h2 class="card-title">ESSENTIALS</h2>
							<img src="../images/managed-services-icons/dashboard-ms.svg" alt="">
							<p class="card-desc desc-2">
								&#187; 24 X 7 support with 2 hours critical response<br>
								&#187; Basic IT support (OS Patching, OS Updates, OS Management, Virtual Machines, Disks, Basic Configuration Management, &Incident<br> Management)<br>
								&#187; 30 days backup<br>
								&#187; Proactive infrastructure monitoring and alerting<br>
								&#187; Monthly health reports and dashboards<br>

								&#187; Basic anti-virus and anti-malware support<br>
							</p>
						</div>
						<div class="card">
							<h2 class="card-title">ADVANCED</h2>
							<img src="../images/managed-services-icons/city-ms.svg" alt="">
							<p class="card-desc">
								&#187; 24 X 7 support with 1 hour critical response<br>
								&#187; Advanced IT Support (OS Patching, OS Updates, OS Management, Virtual Machines, Virtual Machine scales, Availability Sets, Disks, Virtual <br>Networks, WAF, Identity Management, Configuration Management,<br> Incident Management, Problem Management, Change Management)<br>
								&#187; Shared TAM and architect support<br>
								&#187; Unlimited backup, self-serve point-in-time restore<br>
								&#187; Proactive infrastructure monitoring and alerting<br>
								&#187; Monthly health reports and dashboards.<br>
								&#187; Advanced anti-virus and anti-malware support</p>
						</div>
						<div class="card">
							<h2 class="card-title">PREMIUM</h2>
							<img src="../images/managed-services-icons/premium-service-ms.svg" alt="">
							<p class="card-desc">
								&#187; 24 X 7 support with 30 minutes critical response</br>
								&#187; Level-3 escalation advanced support</br>
								&#187; Proactive capacity planning, performance and cost optimization</br>
								&#187; Shared TAM and architect support</br>
								&#187; Unbrmited backup, self-serve point-in-time restore</br>
								&#187; Proactive infrastructure monitoring and alerting</br>
								&#187; Monthly health reports and dashboards</br>
								&#187; Deep security (WAF, DDoS, Threat analytics, anti-virus, anti-malware, email and web protection)</br>
								&#187; Proactive run book authoring</br>
								&#187; Advanced operational intelligence and custom dashboard on usage, performance, governance, and cost
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="tabBlock-pane">
				<ul class="hb-productSec list-inline">
					<div class="hb-leftCont hb_ppCont">
						<p style="text-align:center">
							Allows businesses to pay only for what they use, making it a cost-effective model.
						</p>
						<span>
							<img src="./pi-cloud/images/product-images/Elastic-Model28.png" alt="advanced">
						</span>


					</div>

				</ul>

			</div>

			<div class="tabBlock-pane">
				<ul class="hb-productSec list-inline">
					<div class="hb-leftCont hb_ppCont">
						<p style="text-align:center">
							This model provides businesses with devoted resources for managing their workloads, ensuring they receive the necessary attention.
						</p>
						<!--<span>
			            				<img src="images/product-images/Monitoring-Only-Model-new-d.png" alt="advanced">
			            			</span>-->

						<br>
						<br>
						<ul class="list-inline hb-featuresList multi-cld-key" style="margin-top:40px;">
							<li>
								<div class="hb-featureBox">
									<div class="hb-featTopHeader">
										<p class="hb-featLogo" style="width:auto !important;text-align:center">
											<img src="./pi-cloud/images/Service-Monitoring11.png" alt="scale" style="max-width:50%;">
										</p>
										<div class="hb-featCont" style="width:100%;text-align:Center">
											<h6 style="min-height:50px">Service Monitoring</h6>

										</div>
									</div>
									<ul style=" list-style-type: circle;list-style-position:outside;width: 100% !important;margin: 0 auto;">
										<li>Numerous dashboards and logs, records the status of resources.</li>
										<li>In daily work, a consolidated monitoring of the systems and services operated is achieved by means of service monitoring.</li>

									</ul>
								</div>
							</li>
							<li>
								<div class="hb-featureBox">
									<div class="hb-featTopHeader">
										<p class="hb-featLogo" style="width:auto !important;text-align:center">
											<img src="./pi-cloud/images/Hourly-Support11.png" alt="scale" style="max-width:50%;">
										</p>
										<div class="hb-featCont" style="width:100%;text-align:Center">
											<h6 style="min-height:50px">Hourly Support</h6>

										</div>
									</div>
									<p style="text-align:center;">Monitoring has three models of support:</p>
									<ul style="list-style-type: circle;list-style-position: inside;width: 100% !important;margin: 0 auto;padding: 10px 8px;">
										<li>24/7</li>
										<li>16/7</li>
										<li>8/7</li>
									</ul>
								</div>
							</li>
							<li>
								<div class="hb-featureBox">
									<div class="hb-featTopHeader">
										<p class="hb-featLogo" style="width:auto !important;text-align:center">
											<img src="./pi-cloud/images/Third-Party-Integration11.png" alt="scale" style="max-width:50%;">
										</p>
										<div class="hb-featCont" style="width:100%;text-align:Center">
											<h6 style="min-height:50px">Third Party Integration</h6>

										</div>
									</div>
									<ul style="list-style-type: circle;list-style-position:outside;width: 100% !important;margin: 0 auto;text-align:left;">
										<li>Monitoring includes three unique parameters around Performance Metrics, Log Analytics, and Application Insights.</li>
										<li>Provide powerful end-to-end monitoring of applications and other crucial components.</li>
										<li>Third party applications can also be integrated for monitoring.</li>
									</ul>
								</div>
							</li>



						</ul>
					</div>

				</ul>

			</div>

			<div class="tabBlock-pane">
				<ul class="hb-productSec list-inline" style="max-width:100%;">
					<div class="hb-leftCont hb_ppCont">
						<p style="text-align:center">
							Allows businesses to select specific services they require, providing flexibility in the services chosen.
						</p>
						<!--<span>
			            				<img src="images/product-images/A-La-Carte-Model.png" alt="advanced">
			            			</span>-->
						<ul class="list-inline multi-cld-key2">
							<li>
								<div class="hb-featureBox">
									<img src="./pi-cloud/images/product-images/A-La-Carte-Model-128.png" alt="A-La-Carte-Model-1" style="max-width:240px">
								</div>
							</li>
							<li>
								<div class="hb-featureBox">
									<img src="./pi-cloud/images/product-images/A-La-Carte-Model-228.png" alt="A-La-Carte-Model-2" style="max-width:240px">
								</div>
							</li>
							<li>
								<div class="hb-featureBox">
									<img src="./pi-cloud/images/product-images/A-La-Carte-Model-328.png" alt="A-La-Carte-Model-3" style="max-width:240px">
								</div>
							</li>
							<li>
								<div class="hb-featureBox">
									<img src="./pi-cloud/images/product-images/A-La-Carte-Model-428.png" alt="A-La-Carte-Model-4" style="max-width:240px">
								</div>
							</li>
							<li class=" emty-blk"></li>
							<li>
								<div class="hb-featureBox">
									<img src="./pi-cloud/images/product-images/A-La-Carte-Model-528.png" alt="A-La-Carte-Model-5" style="max-width:240px">
								</div>
							</li>
							<li>
								<div class="hb-featureBox">
									<img src="./pi-cloud/images/product-images/A-La-Carte-Model-628.png" alt="A-La-Carte-Model-6" style="max-width:240px">
								</div>
							</li>
							<li>
								<div class="hb-featureBox">
									<img src="./pi-cloud/images/product-images/A-La-Carte-Model-728.png" alt="A-La-Carte-Model-7" style="max-width:240px">
								</div>
							</li>
							<li class="emty-blk"></li>
						</ul>


					</div>

				</ul>

			</div>

			<div class="tabBlock-pane">
				<!--<ul class="hb-productSec list-inline">
			            		<div class="hb-leftCont hb_ppCont">
                                    <p style="text-align:center">
Provides businesses with monitoring services while allowing them to manage their workloads themselves.
</p>
			            			<span>
			            				<img src="images/product-images/Dedicated-Model.png" alt="advanced">
			            			</span>
                                    
                                    
			            		</div>
			            	
			            </ul>-->
				<p style="text-align:center">
					Provides businesses with monitoring services while allowing them to manage their workloads themselves.
				</p>
				<ul class="hb-productSec list-inline" style="margin-top:30px">

					<li>
						<div class="hb-leftCont hb_ppCont">
							<span>
								<img src="./pi-cloud/images/product-images/Dedicated-Model.png" alt="tickmark" style="width:auto;">
							</span>
						</div>
					</li>
					<li>
						<div class="hb-rightCont hb_ppCont">
							<!--<b>Advanced:</b>-->
							<p> Offers IT professionals/engineers that will fully concentrate on the client's needs. Client has full management control over the project and IT professionals / engineers. These resources come at a fixed cost based on the level of experience. </p>
							<p>These resources can be aligned for all three models of support:</p><br>

							<ul style=" list-style-type: circle;list-style-position:outside;font-size: 18px;
    line-height: 22px;padding:0px 16px;">
								<li>24/7</li>
								<li>16/7</li>
								<li>8/7 </li>

							</ul>
						</div>
					</li>

				</ul>

			</div>
		</div>

	</div>
</div>
<!--   <div class="hb-certication">
    <div class="container">
        <div class="hb-CerSetion">
            <h4 class="text-center">Technology Partners</h4>

            <ul class="list-inline hb-boxLists slider-info">
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
     								<span>
     									<img src="./<?= $config['subFolderName'] ?>/images/logo/1.png" alt="data">
     								</span>

                        </a>
                    </div>
                </li>

                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
							<span>
							  <img src="./<?= $config['subFolderName'] ?>/images/logo/2.png" alt="scale">
							</span>


                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
							<span>
							  <img src="./<?= $config['subFolderName'] ?>/images/logo/3.png" alt="scale">
							</span>


                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
							<span>
							  <img src="./<?= $config['subFolderName'] ?>/images/logo/4.png" alt="scale">
							</span>


                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
						  	<span>
							  <img src="./<?= $config['subFolderName'] ?>/images/logo/5.png" alt="multi">
							</span>

                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
								<span>
								  <img src="./<?= $config['subFolderName'] ?>/images/logo/6.png" alt="uptime">
								</span>

                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
								<span>
								  <img src="./<?= $config['subFolderName'] ?>/images/logo/7.png" alt="uptime">
								</span>

                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
								<span>
								  <img src="./<?= $config['subFolderName'] ?>/images/logo/8.png" alt="uptime">
								</span>

                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
								<span>
								  <img src="./<?= $config['subFolderName'] ?>/images/logo/9.png" alt="uptime">
								</span>

                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
								<span>
								  <img src="./<?= $config['subFolderName'] ?>/images/logo/10.png" alt="uptime">
								</span>

                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
								<span>
								  <img src="./<?= $config['subFolderName'] ?>/images/logo/11.png" alt="uptime">
								</span>

                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
								<span>
								  <img src="./<?= $config['subFolderName'] ?>/images/logo/12.png" alt="uptime">
								</span>

                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
								<span>
								  <img src="./<?= $config['subFolderName'] ?>/images/logo/13.png" alt="uptime">
								</span>

                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
								<span>
								  <img src="./<?= $config['subFolderName'] ?>/images/logo/14.png" alt="uptime">
								</span>

                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
								<span>
								  <img src="./<?= $config['subFolderName'] ?>/images/logo/15.png" alt="uptime">
								</span>

                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
								<span>
								  <img src="./<?= $config['subFolderName'] ?>/images/logo/16.png" alt="uptime">
								</span>

                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
								<span>
								  <img src="./<?= $config['subFolderName'] ?>/images/logo/17.png" alt="uptime">
								</span>

                        </a>
                    </div>
                </li>
                <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
								<span>
								  <img src="./<?= $config['subFolderName'] ?>/images/logo/18.png" alt="uptime">
								</span>

                        </a>
                    </div>
                </li>
   <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
								<span>
								  <img src="./<?= $config['subFolderName'] ?>/images/product-images/azure28.png" alt="A-La-Carte-Model-4" style="width:100px">


								</span>

                        </a>
                    </div>
                </li>
 <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
								<span>
								 <img src="./pi-cloud/images/product-images/Google212.png" alt="A-La-Carte-Model-3" style="width:100px">


								</span>

                        </a>
                    </div>
                </li>
<li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
								<span>
								  <img src="./pi-cloud/images/product-images/AES212.png" alt="A-La-Carte-Model-1" style="width:100px">

								</span>

                        </a>
                    </div>
                </li>



            </ul>
        </div>
    </div>
</div> -->

<!--<ul class="hb-productSec list-inline appoinment">
			            	<li>
			            		<div class="hb-leftCont hb_ppCont">
			            			<h2>Letâ€™s Book Your Appointment With us Now!</h2>
                    <a href="#">Schedule A Visit</a>
			            		</div>
			            	</li>
			            	<li>
			            		<div class="hb-rightCont hb_ppCont">
			            			
			            			 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque laoreet, ipsum a laoreet malesuada, ipsum mauris ultrices libero, vitae efficitur lacus enim a arcu. </p>
			            		</div>
			            	</li>
			            </ul> -->


<!--<h1 class="text-center" style="padding:30px 0 0;color:#545454;">Technology Partners</h1>-->
<!--<ul class="hb-productSec list-inline">
			            		<div class="hb-leftCont hb_ppCont">
                                
			            												<ul class="list-inline multi-cld-key2">
			            		<li>
			            			<div class="hb-featureBox" style="text-align:center">
			            				<img src="./pi-cloud/images/product-images/AES212.png" alt="A-La-Carte-Model-1" style="width:100px">
			            			</div>
			            		</li>
			            		<li>
			            			<div class="hb-featureBox" style="text-align:center">
			            				<img src="./pi-cloud/images/product-images/Oracle288.png" alt="A-La-Carte-Model-2" style="width:150px">
			            			</div>
			            		</li>
			            		<li>
			            			<div class="hb-featureBox" style="text-align:center">
			            				<img src="./pi-cloud/images/product-images/Google212.png" alt="A-La-Carte-Model-3" style="width:100px">
			            			</div>
			            		</li>
                                <li>
			            			<div class="hb-featureBox" style="text-align:center">
			            				<img src="./<?= $config['subFolderName'] ?>/images/product-images/azure28.png" alt="A-La-Carte-Model-4" style="width:100px">
			            			</div>
			            		</li>
                                       
			            	</ul>
                                    
                                    
			            		</div>
			            	
			            </ul> -->
<a href="images/Multi-Cloud-Brochure.pdf" class="sch-your" target="_blank">
	<ul class="hb-productSec list-inline appoinment stick">
		<li>
			<div class="hb-leftCont hb_ppCont">
				<h2>Download Brochure</h2>
				<!--<a href="#">Schedule A Visit</a>-->
			</div>
		</li>
		<!--<li>
			            		<div class="hb-rightCont hb_ppCont">
			            			
			            			  <div class="get-in-touch-rit">
                                   <a href="https://pi-cloud.in/contact-us">Click Here</a>
                            
                                </div>
			            		</div>
			            	</li>-->
	</ul>
</a>

<!--<div class="get-in-touch">
                  <div class="get-in-touch-main">
                       <div class="container">
                           <div class="get-in-touch-blk row">
                                <div class="get-in-touch-lft">
                                    <p >Questions? We're here to help.</p>
                               </div>
                               <div class="get-in-touch-rit">
                                   <a href="contact-us.php">Get in Touch</a>
                            
                                </div>
                           </div>
                      </div>  
                      
              </div>
          </div>-->

</div>


</section>
<?php
include_once('includes/footer.php');
?>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js'></script>
<script src='./pi-cloud/js/index.js'></script>
<script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>

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
	$(document).ready(function() {
		$('.slider-info').slick({
			dots: false,
			arrows: true,
			slidesToShow: 4,
			slidesToScroll: 1,
			vertical: false,
			verticalSwiping: false,
			autoplay: true,
			autoplaySpeed: 1000,
			responsive: [{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
			}]

		});

	});
</script>