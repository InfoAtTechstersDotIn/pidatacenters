<?php
$seo_title = "Private Cloud";
$seo_description = "";
$seo_keywords = "";
?>



<?php include('php/includes-techsters/header.php'); ?>



<style>
	@media (max-width: 599px) {
		.get-in-touch-lft:first-child {
			width: 100%;
			padding: 0 0 20px;
			float: none;
		}

		.get-in-touch-rit a {
			display: block;
			margin: 0 auto;
		}

		.footer-about .col-md-3 {
			-webkit-flex: 0 0 100%;
			float: none;
			max-width: 100%;
			width: 100%;
		}
	}


	/* Style the tab */
	.tab {
		overflow: hidden;
		display: flex;
		justify-content: center;
		align-items: center;
	}

	/* Style the buttons that are used to open the tab content */
	.tab button {
		border: none;
		cursor: pointer;
		padding: 14px 16px;
		font-size: 15px;
		color: #fff;
		font-weight: 700;
	}

	/* Change background color of buttons on hover */
	.tab button:hover {
		background-color: #ddd;
	}

	/* Create an active/current tablink class */
	.tab button.active {
		background-color: #ccc;
	}

	/* Style the tab content */
	.tabcontent {
		padding: 6px 12px;
		display: none;
	}

	.skltbs-panel .active {
		display: block;
	}

	.skltbs-tab-item.active,
	.skltbs-tab-item.active:after,
	.skltbs-tab-item.active:before {
		background-color: #76b543 !important;
	}
</style>




<div class="picloud_pages">
	<div class="hb-bannerCont">
		<div class="hb-bannerImgCont">
			<div class="hb-bannerImg">
				<!--	<picture>
			     <source media="(max-width: 768px)" srcset="./pi-cloud/images/banners/compute_banner.png">
			      <img  src="./pi-cloud/images/banners/compute_mbanner.png" alt="pi-cloud Cloud Backup as a Service Banner" style="width:100%">
      		</picture>-->
				<picture>
					<source media="(max-width: 768px)" srcset="https://pidatacenters.com/pi-cloud/images/banners/compute-banner.jpg">
					<img src="https://pidatacenters.com/pi-cloud/images/banners/compute-banner.jpg" alt="pi-cloud Cloud Backup as a Service Banner" style="width:100%">
				</picture>
				<h1>Private Cloud</h1>
			</div>
		</div>
	</div>

	<section id="hb_products_Lists">
		<div class="container">
			<div class="hb-productHead text-center">
				<h2>Focus On Your Business, Not IT</h2>
				<p>Let us manage your IT infrastructure while you manage your business. Instead of investing in building your IT infrastructure and hassling through its maintenance, accelerate your digital transformation with high-performance Compute on Pi Cloud.</p>
			</div>
			<div class="hb-childProducts">
				<h2 class="text-center compute_page_h2">Explore a Wide Range of Compute Products & Services</h2>
				<p class="text-center" style="margin-top: 15px;">
					Platform agnostic product stack on Pi Cloud is designed and developed keeping in mind the business challenges faced by enterprises. Now businesses can pick suitable products to scale, grow and meet industry demands with ease, efficiency and optimized TCO.</p>
				<div id="outer" class="skltbs-theme-light" data-skeletabs='{ "startIndex": 2 }'>
					<ul class="skltbs-tab-group list-inline text-center">
						<li class="skltbs-tab-item current">
							<button class="skltbs-tab tab-link" data-tab="tab-1">Virtual Machines (VMs)</button>
						</li>
						<li class="skltbs-tab-item">
							<button class="skltbs-tab tab-link" data-tab="tab-2">Containers</button>
						</li>

						<li class="skltbs-tab-item">
							<button class="skltbs-tab tab-link" data-tab="tab-3">Network</button>
						</li>
						<li class="skltbs-tab-item">
							<button class="skltbs-tab tab-link" data-tab="tab-4">Storage</button>
						</li>
						<li class="skltbs-tab-item">
							<button class="skltbs-tab tab-link" data-tab="tab-5">Cyber Security</button>
						</li>
						<li class="skltbs-tab-item">
							<button class="skltbs-tab tab-link" data-tab="tab-6">Business Continuity</button>
						</li>
						<li class="skltbs-tab-item">
							<button class="skltbs-tab tab-link" data-tab="tab-7">DevOps</button>
						</li>
						<li class="skltbs-tab-item">
							<button class="skltbs-tab tab-link" data-tab="tab-8">End User Computing</button>
						</li>



					</ul>
					<div class="skltbs-panel-group">
						<div class="skltbs-panel current " id="tab-1">
							<ul class="hb-productSec list-inline">
								<li>
									<div class="hb-leftCont hb_ppCont">
										<span>
											<img src="./pi-cloud/images/product-images/vm_img.png" alt="tickmark">
										</span>
									</div>
								</li>
								<li>
									<div class="hb-rightCont hb_ppCont">
										<h3>Virtual Machines</h3>
										<p>Accelerate your digital transformation with Virtual servers offering a stable, secure, highly available and easy to deploy environments for your data and applications. Multiple operating systems (OS) environments can co-exist on the same machine. Pick a hypervisor of your choice and integrate your multi cloud environments with Pi Cloud. VMs on Pi Cloud, ensure enterprise application provisioning, continuous availability, near zero maintenance and ease of data recovery. It delivers seamless availability of services withstanding demand spikes. </p>
									</div>
								</li>
							</ul>
							<div class="hb-features">
								<h3 class="text-center">Features</h3>
								<ul class="list-inline hb-featuresList">
									<li>
										<div class="hb-featureBox">
											<div class="hb-featTopHeader">
												<p class="hb-featLogo">
													<img src="./pi-cloud/images/scale-3.svg" alt="scale">
												</p>
												<div class="hb-featCont">
													<h6>Auto scaling</h6>
													<p>Upscale and downsize your resources on a click</p>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="hb-featureBox">
											<div class="hb-featTopHeader">
												<p class="hb-featLogo">
													<img src="./pi-cloud/images/Economics.svg" alt="economics">
												</p>
												<div class="hb-featCont">
													<h6>Scale of economics</h6>
													<p>Optimal TCO without compromising on quality and availability</p>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="hb-featureBox">
											<div class="hb-featTopHeader">
												<p class="hb-featLogo">
													<img src="./pi-cloud/images/Self.svg" alt="Self">
												</p>
												<div class="hb-featCont">
													<h6>Simple service interface</h6>
													<p>Configure and optimise your capacity with minimal friction</p>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="hb-features">
								<h3 class="text-center">VMs are Ideal for</h3>
								<ul class="list-inline hb-idealList">
									<li>
										<div class="hb-idealFet">
											<span>
												<img src="./pi-cloud/images/Tick.svg" alt="tickmark">
											</span>
											<p>Running cloud-native applications </p>
										</div>
									</li>
									<li>
										<div class="hb-idealFet">
											<span>
												<img src="./pi-cloud/images/Tick.svg" alt="tickmark">
											</span>
											<p>Web hosting</p>
										</div>
									</li>
									<li>
										<div class="hb-idealFet">
											<span>
												<img src="./pi-cloud/images/Tick.svg" alt="tickmark">
											</span>
											<p>Developing & testing workloads</p>
										</div>
									</li>
									<li>
										<div class="hb-idealFet">
											<span>
												<img src="./pi-cloud/images/Tick.svg" alt="tickmark">
											</span>
											<p>Databases & other apps requiring faster I/O</p>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="skltbs-panel" id="tab-2">
							<ul class="hb-productSec list-inline">
								<li>
									<div class="hb-leftCont hb_ppCont">
										<h3>Containers</h3>

										<p>Pi Cloud<sup></sup> offers a robust container orchestration and management technology to deploy and manage containers at scale. The environment provisioned on Pi Cloud enables developers to use abstraction and isolation technology to package an application, and all the files needed to run it, in a way that isolates the application from the underlying host OS. </p>
									</div>
								</li>
								<li>
									<div class="hb-rightCont hb_ppCont">
										<span>
											<img src="./pi-cloud/images/product-images/containers_img.png" alt="workspace">
										</span>

									</div>
								</li>
							</ul>
							<div class="hb-features">
								<h3 class="text-center">Features</h3>
								<ul class="list-inline hb-featuresList">
									<li>
										<div class="hb-featureBox">
											<div class="hb-featTopHeader">
												<p class="hb-featLogo">
													<img src="./pi-cloud/images/scale-3.svg" alt="scale-3">
												</p>
												<div class="hb-featCont">
													<h6>Lightweight</h6>
													<p>Achieve high server efficiency and optimize investment on server and licencing costs</p>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="hb-featureBox">
											<div class="hb-featTopHeader">
												<p class="hb-featLogo">
													<img src="./pi-cloud/images/Economics.svg" alt="economics">
												</p>
												<div class="hb-featCont">
													<h6>Run anywhere</h6>
													<p>On developers machine, on- premise or on hybrid cloud environments</p>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="hb-featureBox">
											<div class="hb-featTopHeader">
												<p class="hb-featLogo">
													<img src="./pi-cloud/images/Self.svg" alt="Self">
												</p>
												<div class="hb-featCont">
													<h6>Secure & consistent</h6>
													<p>Predictable environments that are isolated from other applications</p>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="hb-features">
								<h3 class="text-center">Use cases for containers</h3>
								<ul class="list-inline hb-idealList">
									<li>
										<div class="hb-idealFet">
											<span>
												<img src="./pi-cloud/images/Tick.svg" alt="tickmark">
											</span>
											<p>Isolating workloads with Microservices </p>
										</div>
									</li>
									<li>
										<div class="hb-idealFet">
											<span>
												<img src="./pi-cloud/images/Tick.svg" alt="tickmark">
											</span>
											<p>Application packaging format for DevOps </p>
										</div>
									</li>
									<li>
										<div class="hb-idealFet">
											<span>
												<img src="./pi-cloud/images/Tick.svg" alt="tickmark">
											</span>
											<p>Packaging applications for cloud migration </p>
										</div>
									</li>
									<li>
										<div class="hb-idealFet">
											<span>
												<img src="./pi-cloud/images/Tick.svg" alt="tickmark">
											</span>
											<p>Hybrid applications & Platform as a Service </p>
										</div>
									</li>
								</ul>
							</div>

						</div>


						<!-- NEW TAB - NETWORK STARTS -->

						<div class="skltbs-panel" id="tab-3">

							<div class="container">
								<div class="hb-productHead text-center">
									<h2>Bridge The Gap Between Your Business & IT</h2>
									<p>In the recent years there has been acceleration in the frequency, diversity, and impact of disruptions. Let us plan, build and manage your networks to help your enterprise respond to the unexpected. Our software-defined network services makes it possible to create, provision and manage networks flawlessly. It continues to leverage while continuing to leverage the underlying physical network as the packet-forwarding backplane. Pi Cloud also enables enterprises to gain end-to-end visibility and analysis of applications, users, and devices across the network.</p>
									<div class="hb-childProducts">
										<h2 class="text-center">Cloud Networking Products & Solutions

										</h2>
										<p class="text-center hb_ilp">Address your growing infrastructure needs, regional expansions, and redundancy plans</p>
									</div>
								</div>



								<!-- Tab links -->
								<div class="tab skltbs-tab-group">
									<button class="tablinks skltbs-tab-item active" onclick="openCity(event, 'Scale')">Scale</button>
									<button class="tablinks skltbs-tab-item" onclick="openCity(event, 'Connect')">Connect</button>
									<button class="tablinks skltbs-tab-item" onclick="openCity(event, 'Secure')">Secure</button>
								</div>


								<!-- Tab content -->
								<div id="Scale" class="tabcontent active">
									<ul class="hb-productSec list-inline">
										<li>
											<div class="hb-leftCont hb_ppCont">
												<span>
													<img src="./pi-cloud/images/product-images/sdwan_img.png" alt="workspace">
												</span>
											</div>
										</li>
										<li>
											<div class="hb-rightCont hb_ppCont">
												<h3>Software Defined WAN (SD-WAN)</h3>
												<h5><strong>Improved network speed, enhanced security</strong></h5>
												<p>Pi Cloud, with its underlying Software Defined infrastructure has integrated SD-WAN to its architecture. It has enabled network admins to use bandwidth more efficiently, ensuring high performance for critical applications without compromising on security or data privacy. The unified WAN backbone delivers comprehensive analytics across the enterprise backbone. </p>
											</div>
										</li>
										<li>
											<div class="hb-leftCont hb_ppCont">
												<h3>Multiprotocol Label Switching (MPLS)</h3>
												<h5><strong>Reliable connectivity for real-time applications</strong></h5>
												<p>MPLS on Pi Cloud enables enterprises to build advanced and intelligent networks that deliver a wide variety of services over a single infrastructure. This solution can be utilized for bandwidth adjustment, to reduce network congestion and increase quality of service. Enterprises with diverse access links can be added on an MPLS edge without changing their current environments. </p>
											</div>
										</li>
										<li>
											<div class="hb-rightCont hb_ppCont">
												<span>
													<img src="./pi-cloud/images/product-images/mpls_img.png" alt="workspace">
												</span>
											</div>
										</li>
										<li>
											<div class="hb-leftCont hb_ppCont">
												<span>
													<img src="./pi-cloud/images/product-images/directconnect_img.png" alt="workspace">
												</span>
											</div>
										</li>
										<li>
											<div class="hb-rightCont hb_ppCont">
												<h3>Direct Connect (P2P)</h3>
												<h5><strong>Dedicated connection from your premises to Pi Cloud</strong></h5>
												<p>Seamless and secure Point to Point ethernet connection ensures your premise is directly connected to Pi Cloud. Enterprises can also establish private connectivity between Pi Cloud and their multi cloud environments. This ensures increased bandwidth throughput up to hundreds of Gigs to meet real-time spikes and eases the transfer of large data sets over the wire. </p>
											</div>
										</li>
										<li>
											<div class="hb-leftCont hb_ppCont">
												<h3>Wifi on Cloud</h3>
												<h5><strong>Centralized and managed wifi solution</strong></h5>
												<p>Pi Cloud allows enterprises to operate its multi-locale wifi environment on cloud. Managing the entire wifi network on cloud is equally seamless. It eliminates the need of having on-premise wireless controller hardware, thereby ensuring swift scalability. It also offers users, an enhanced experience through location-based and context-aware applications, while reducing capex and operational expense with a pay-as-you-go model. </p>
											</div>
										</li>
										<li>
											<div class="hb-rightCont hb_ppCont">
												<span>
													<img src="./pi-cloud/images/product-images/wifioncloud_img.png" alt="workspace">
												</span>
											</div>
										</li>
									</ul>
								</div>

								<div id="Connect" class="tabcontent">
									<ul class="hb-productSec list-inline">
										<li>
											<div class="hb-leftCont hb_ppCont">
												<span>
													<img src="./pi-cloud/images/product-images/cdn_img.png" alt="workspace">
												</span>
											</div>
										</li>
										<li>
											<div class="hb-rightCont hb_ppCont">
												<h3>HarbourFront<sup>TM</sup>(CDN)</h3>
												<h5><strong>Deliver content fast, efficiently and securely</strong></h5>
												<p>Harbourfront<sup>TM</sup><a href="https://pi-cloud.in/harbourfront-cdn">(CDN)</a>, India's first indigenous content service ensures high availability and performace. By geographically distributing a network of proxy servers and caching data spatially relative to end users, Harbourfront<sup>TM</sup>(CDN) ensures ensures high availability and performance. It can be used for content storage and delivery service for web acceleration, file download optimization, transcoding, video on demand and live streaming. <br> <a href="https://pidatacenters.com/harbourfront-services.php" style="color: #fff;/* padding-left: 24px; */padding: 5px 10px;font-size: 14px;border-radius: 29px;background-color: #3d1b9b;">Learn More &gt;</a></p>
											</div>
										</li>
										<li>
											<div class="hb-leftCont hb_ppCont">
												<h3>Load Balancer (LB)</h3>
												<h5><strong>Increased performance and high availability</strong></h5>
												<p>Enterprises can leverage Pi Cloud to distribute workloads and compute resources on hybrid and heterogeneous cloud environments. This service is adopted by enterprises to dynamically manage resource allocation and workload demands. Lower cost of ownership, ease of scale and manageability, are some of its key advantages over conventional on-premise load balancing . </p>
											</div>
										</li>
										<li>
											<div class="hb-rightCont hb_ppCont">
												<span>
													<img src="./pi-cloud/images/product-images/lb_img.png" alt="workspace">
												</span>
											</div>
										</li>


									</ul>
								</div>

								<div id="Secure" class="tabcontent">
									<ul class="hb-productSec list-inline">
										<li>
											<div class="hb-leftCont hb_ppCont">
												<h3>Virtual Private Network (VPN)</h3>
												<h5><strong>Securely access your network resources</strong></h5>
												<p>VPN on Pi Cloud provides anonymity by creating a private network over open internet. It enables enterprises to access their workloads on cloud from anywhere, any time, and through any device, without compromising the security. Masking of internet protocol (IP) address keeps your transactions at bay from intrusion. Network admins can use VPN to gain visibility into network, certificate pinning, and encrypting data </p>
											</div>
										</li>
										<li>
											<div class="hb-rightCont hb_ppCont">
												<span>
													<img src="./pi-cloud/images/product-images/vpn_img.png" alt="workspace">
												</span>
											</div>
										</li>
										<li>
											<div class="hb-leftCont hb_ppCont">
												<span>
													<img src="./pi-cloud/images/product-images/firewall_img.png" alt="workspace">
												</span>
											</div>
										</li>
										<li>
											<div class="hb-rightCont hb_ppCont">
												<h3>Firewall as a Service (FWaaS)</h3>
												<h5><strong>Monitor and control network traffic, basis pre-defined rules</strong></h5>
												<p>FWaaS on Pi Cloud is the first layer of defence for enterprise workloads and eliminates the need for appliance form factor. Our fwaas ensures perimter level security for enterprises at their hub offices,branch locations and end-points. All of these without the need to install additional hardware. </p>
												<p><strong>Features:</strong> URL filtering | Intrusion Prevention | Intrusion Detection | Global Connect</p>
											</div>
										</li>


									</ul>
								</div>

							</div>
						</div>



						<!-- TAB-4 -->

						<div class="skltbs-panel" id="tab-4">

							<div class="container">
								<div class="hb-productHead text-center">
									<h2>Go Practically Limitless Capacity with Pi Cloud</h2>
									<p>Data is the lifeline of any business and it is important to consider how enterprises store data, based on enterprise business needs. Pi Cloud allows enterprises to select storage of choice that meets business objectives. Pi Cloud presents varied storage formats to hold, organize and present data with objective driven distinct features and capabilities.</p>
									<div class="hb-childProducts">
										<h2 class="text-center">Storage Solutions
										</h2>
									</div>
								</div>



								<!-- Tab links -->
								<div class="tab skltbs-tab-group">
									<button class="tablinks skltbs-tab-item active" onclick="openCity(event, 'Block')">Block Storage</button>
									<button class="tablinks skltbs-tab-item" onclick="openCity(event, 'Object')">Object Storage</button>
									<button class="tablinks skltbs-tab-item" onclick="openCity(event, 'File')">File Storage</button>
								</div>

								<!-- Tab content -->
								<div id="Block" class="tabcontent active">
									<ul class="hb-productSec list-inline">
										<li>
											<div class="hb-leftCont hb_ppCont">
												<span>
													<img src="./pi-cloud/images/product-images/block_img.png" alt="tickmark">
												</span>
											</div>
										</li>
										<li>
											<div class="hb-rightCont hb_ppCont">
												<h3>Block Storage</h3>
												<p>This allows enterprises to store data into blocks and then store them with unique identifiers. Block storage on Pi Cloud offers durable, customizable block volumes, attached to virtual servers. Ease of manageability and customization makes them stand out. </p>
											</div>
										</li>
									</ul>
									<div class="hb-features">
										<h3 class="text-center">Features</h3>
										<ul class="list-inline hb-featuresList">
											<li>
												<div class="hb-featureBox">
													<div class="hb-featTopHeader">
														<p class="hb-featLogo">
															<img src="./pi-cloud/images/product-page-icons/st/hp.svg" alt="scale">
														</p>
														<div class="hb-featCont">
															<h6>High Performance</h6>
															<p>Ideal for high-performing, mission-critical applications that require consistent input/output (I/O) performance</p>
														</div>
													</div>
												</div>
											</li>
											<li>
												<div class="hb-featureBox">
													<div class="hb-featTopHeader">
														<p class="hb-featLogo">
															<img src="./pi-cloud/images/product-page-icons/st/dr.svg" alt="economics">
														</p>
														<div class="hb-featCont">
															<h6>Data Retention</h6>
															<p>Retains data even after deletion of virtual server</p>
														</div>
													</div>
												</div>
											</li>
											<li>
												<div class="hb-featureBox">
													<div class="hb-featTopHeader">
														<p class="hb-featLogo">
															<img src="./pi-cloud/images/product-page-icons/st/snap.svg" alt="Self">
														</p>
														<div class="hb-featCont">
															<h6>Snapshot and Resizing</h6>
															<p>Features such as snapshot and resizing, are available for block volumes</p>
														</div>
													</div>
												</div>
											</li>
										</ul>
									</div>
									<div class="hb-features">
										<h3 class="text-center">Use Cases</h3>
										<ul class="list-inline hb-idealList">
											<li>
												<div class="hb-idealFet">
													<span>
														<img src="./pi-cloud/images/Tick.svg" alt="tickmark">
													</span>
													<p>Critical business applications </p>
												</div>
											</li>
											<li>
												<div class="hb-idealFet">
													<span>
														<img src="./pi-cloud/images/Tick.svg" alt="tickmark">
													</span>
													<p>Transactional Databases</p>
												</div>
											</li>
											<li>
												<div class="hb-idealFet">
													<span>
														<img src="./pi-cloud/images/Tick.svg" alt="tickmark">
													</span>
													<p>Workloads that require low-latency</p>
												</div>
											</li>
											<li>
												<div class="hb-idealFet">
													<span>
														<img src="./pi-cloud/images/Tick.svg" alt="tickmark">
													</span>
													<p>Storage-area network (SAN) environments</p>
												</div>
											</li>
										</ul>
									</div>
								</div>


								<div id="Object" class="tabcontent">
									<ul class="hb-productSec list-inline">
										<li>
											<div class="hb-leftCont hb_ppCont">
												<h3>Object Storage</h3>

												<p> Today&#8217;s digital world requires data archiving and backing-up of unstructured data. Media and web contents like email, videos, image files, web pages and sensor data produced by IoT has taken the center stage. Object storage on Pi Cloud is ideal for archiving data that does not change frequently. </p>
											</div>
										</li>
										<li>
											<div class="hb-rightCont hb_ppCont">
												<span>
													<img src="./pi-cloud/images/product-images/object_img.png" alt="workspace">
												</span>

											</div>
										</li>
									</ul>
									<div class="hb-features">
										<h3 class="text-center">Features</h3>
										<ul class="list-inline hb-featuresList">
											<li>
												<div class="hb-featureBox">
													<div class="hb-featTopHeader">
														<p class="hb-featLogo">
															<img src="./pi-cloud/images/product-page-icons/st/dt.svg" alt="scale-3">
														</p>
														<div class="hb-featCont">
															<h6>Data Transfer</h6>
															<p>Simple and flexible transfer of data</p>
														</div>
													</div>
												</div>
											</li>
											<li>
												<div class="hb-featureBox">
													<div class="hb-featTopHeader">
														<p class="hb-featLogo">
															<img src="./pi-cloud/images/product-page-icons/st/sc.svg" alt="economics">
														</p>
														<div class="hb-featCont">
															<h6>Scalability</h6>
															<p>Scalability (upto PBs) and distributed access</p>
														</div>
													</div>
												</div>
											</li>
											<li>
												<div class="hb-featureBox">
													<div class="hb-featTopHeader">
														<p class="hb-featLogo">
															<img src="./pi-cloud/images/product-page-icons/st/md.svg" alt="Self">
														</p>
														<div class="hb-featCont">
															<h6>Supports Metadata</h6>
															<p>Supports custom Metadata and various attributes</p>
														</div>
													</div>
												</div>
											</li>
										</ul>
									</div>
									<div class="hb-features">
										<h3 class="text-center">Use cases </h3>
										<ul class="list-inline hb-idealList">
											<li>
												<div class="hb-idealFet">
													<span>
														<img src="./pi-cloud/images/Tick.svg" alt="tickmark">
													</span>
													<p>Petabyte-scale data volumes</p>
												</div>
											</li>
											<li>
												<div class="hb-idealFet">
													<span>
														<img src="./pi-cloud/images/Tick.svg" alt="tickmark">
													</span>
													<p>Highly distributed systems</p>
												</div>
											</li>
											<li>
												<div class="hb-idealFet">
													<span>
														<img src="./pi-cloud/images/Tick.svg" alt="tickmark">
													</span>
													<p>Static Websites</p>
												</div>
											</li>
											<li>
												<div class="hb-idealFet">
													<span>
														<img src="./pi-cloud/images/Tick.svg" alt="tickmark">
													</span>
													<p>Distributed Storage systems </p>
												</div>
											</li>
										</ul>
									</div>
								</div>

								<div id="File" class="tabcontent">
									<ul class="hb-productSec list-inline">
										<li>
											<div class="hb-leftCont hb_ppCont">
												<span>
													<img src="./pi-cloud/images/product-images/file_img.png" alt="tickmark">
												</span>
											</div>
										</li>
										<li>
											<div class="hb-rightCont hb_ppCont">
												<h3>File Storage</h3>
												<p>A hierarchical storage methodology used to organize and store data on a incompute storage or network-attached storage. File storage on Pi Cloud is a Linux file system, and is the predominant human-readable storage format. </p>
											</div>
										</li>
									</ul>
									<div class="hb-features">
										<h3 class="text-center">Features</h3>
										<ul class="list-inline hb-featuresList">
											<li>
												<div class="hb-featureBox">
													<div class="hb-featTopHeader">
														<p class="hb-featLogo">
															<img src="./pi-cloud/images/product-page-icons/st/os.svg" alt="scale">
														</p>
														<div class="hb-featCont">
															<h6>Organised Storage</h6>
															<p>Hierarchical file storage works well with easily organized structured data</p>
														</div>
													</div>
												</div>
											</li>
											<li>
												<div class="hb-featureBox">
													<div class="hb-featTopHeader">
														<p class="hb-featLogo">
															<img src="./pi-cloud/images/product-page-icons/st/mas.svg" alt="economics">
														</p>
														<div class="hb-featCont">
															<h6>Multi Access and Sharing</h6>
															<p>Allows multiple user access to the same file data parked at distinct locations</p>
														</div>
													</div>
												</div>
											</li>
											<li>
												<div class="hb-featureBox">
													<div class="hb-featTopHeader">
														<p class="hb-featLogo">
															<img src="./pi-cloud/images/product-page-icons/st/snap.svg" alt="Self">
														</p>
														<div class="hb-featCont">
															<h6>Cost Effective</h6>
															<p>Eliminates the cost of maintaining in-house hardware</p>
														</div>
													</div>
												</div>
											</li>
										</ul>
									</div>
									<div class="hb-features">
										<h3 class="text-center">Use Cases</h3>
										<ul class="list-inline hb-idealList">
											<li>
												<div class="hb-idealFet">
													<span>
														<img src="./pi-cloud/images/Tick.svg" alt="tickmark">
													</span>
													<p>Local file sharing</p>
												</div>
											</li>
											<li>
												<div class="hb-idealFet">
													<span>
														<img src="./pi-cloud/images/Tick.svg" alt="tickmark">
													</span>
													<p>Centralized file collaboration</p>
												</div>
											</li>
											<li>
												<div class="hb-idealFet">
													<span>
														<img src="./pi-cloud/images/Tick.svg" alt="tickmark">
													</span>
													<p>Hot & Cold Backup</p>
												</div>
											</li>
											<li>
												<div class="hb-idealFet">
													<span>
														<img src="./pi-cloud/images/Tick.svg" alt="tickmark">
													</span>
													<p>Newtwork-attached storage systems</p>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>

						</div>
					</div>


					<!-- TAB-5 -->
					<!-- Tab links -->
					<div class="skltbs-panel" id="tab-5">

						<div class="container">
							<div class="hb-productHead text-center">
								<h2>Modern Day Battlefield Is on The Web </h2>
								<p>In today's connected world, cyber attacks are occurring once in every 14 seconds. With more connected devices In this world than people on earth,
									there is an increased reliance on the internet, wireless network standards, smart devices and IoT. This has increased the threat vector of enterprises, making them vulnerable to a wide range of risk stemming from cyber threats, disrupting operations and damaging reputation of any enterprise. It won't be an exaggeration to say that multi layered cyber security mechanisms and skilled experts are the last line of defense, for digital data assets of enterprises. It makes the difference between digital harmony and digital chaos</p>
								<div class="hb-childProducts">
									<h2 class="text-center">Enterprise-grade Cyber Security Products</h2>
									<p class="text-center" style="padding-top: 12px;">Multiple layers of protection spread across the systems, users and operations</p>
								</div>
							</div>


							<div class="tab skltbs-tab-group">
								<button class="tablinks skltbs-tab-item active" onclick="openCity(event, 'Infrastructure')">Infrastructure</button>
								<button class="tablinks skltbs-tab-item" onclick="openCity(event, 'Application')">Application</button>
								<button class="tablinks skltbs-tab-item" onclick="openCity(event, 'End-point')">End-point</button>
								<button class="tablinks skltbs-tab-item" onclick="openCity(event, 'Management')">Management</button>
							</div>

							<!-- Tab content -->
							<div id="Infrastructure" class="tabcontent active">
								<ul class="hb-productSec list-inline">
									<li>
										<div class="hb-leftCont hb_ppCont">
											<span>
												<img src="./pi-cloud/images/product-images/firewall_img.png" alt="workspace">
											</span>
										</div>
									</li>
									<li>
										<div class="hb-rightCont hb_ppCont">
											<h3>Firewall as a Service (FWaaS)</h3>
											<h5><strong>Monitor and control network traffic, basis pre-defined rules</strong></h5>
											<p>FWaaS on Pi Cloud<sup></sup> is the first layer of defence for enterprise workloads and eliminates the need for appliance form factor. Network admins can ensure virtual firewall is available at hub office, branch locations and end-points, without the need to install additional hardware. </p>
											<p><strong>Features:</strong> URL filtering | Intrusion Prevention | Intrusion Detection | Global Connect</p>
										</div>
									</li>
									<li>
										<div class="hb-leftCont hb_ppCont">
											<h3>Anti-DDoS</h3>
											<h5><strong>Mitigation from Distributed Denial of Service(DDoS) attacks</strong></h5>
											<p>Anti-DDoS on Pi Cloud<sup></sup>, secures websites, applications, and entire network while ensuring the performance of legitimate traffic is not compromised. It is designed to protect enterprise network, transport and application Layer </p>
											<p><strong>DDoS Protection for:</strong> Network infrastructure, web assets (HTTP/HTTPs), and for any application such as FTP, SSH, VoIP, gaming, or any application running over a TCP/UDP protocol, on enterprise cloud and on-premise networks</p>

										</div>
									</li>
									<li>
										<div class="hb-leftCont hb_ppCont">
											<span>
												<img src="./pi-cloud/images/product-images/ddos_img.png" alt="workspace">
											</span>
										</div>
									</li>
								</ul>
							</div>

							<div id="Application" class="tabcontent">
								<ul class="hb-productSec list-inline">
									<li>
										<div class="hb-leftCont hb_ppCont">
											<span>
												<img src="./pi-cloud/images/product-images/av_img.png" alt="workspace">

											</span>
										</div>
									</li>
									<li>
										<div class="hb-rightCont hb_ppCont">
											<h3>Antivirus Software</h3>
											<h5><strong>Prevent, detect, and remove malware</strong></h5>
											<p>Being connected to internet also opens up avenues for increased threat vector. Pi Cloud<sup></sup> antivirus software scans for security and performance issues and ensures enterprise systems, data and end-users are malware-safe and immune to the zero-day vulnerabilities. </p>
											<p><strong>Protection against: </strong> Browser hijackers | Ransomware | Keyloggers | Backdoors | Rootkits | Trojan horses | Worms | Malicious LSPs | Adware and spyware</p>
										</div>
									</li>
									<li>
										<div class="hb-leftCont hb_ppCont">
											<h3>Web Application Firewall (WAF)</h3>
											<h5><strong>Filter , monitor and block unsolicited http traffic</strong></h5>
											<p>WAF service on Pi Cloud<sup></sup> monitors, logs and analyses the HTTP traffic between enterprise application and internet. It aims to protect against vulnerabilities in the application by filtering out malicious traffic. WAF on Pi Cloud protects web applications from cross-site forgery, cross-site-scripting (XSS), file inclusion, and SQL injection, among others that may sabotage important transactions and steal sensitive data. </p>
										</div>
									</li>
									<li>
										<div class="hb-rightCont hb_ppCont">
											<span>
												<img src="./pi-cloud/images/product-images/waf_img.png" alt="workspace">
											</span>
										</div>
									</li>


								</ul>
							</div>

							<div id="End-point" class="tabcontent">
								<ul class="hb-productSec list-inline">
									<li>
										<div class="hb-leftCont hb_ppCont">
											<span>
												<img src="./pi-cloud/images/product-images/epp_img.png" alt="workspace">
											</span>
										</div>
									</li>
									<li>
										<div class="hb-rightCont hb_ppCont">
											<h3>Endpoint Protection Platform (EPP)</h3>
											<h5><strong>Integrated suite of endpoint protection technologies</strong></h5>
											<p>EPP on Pi Cloud<sup></sup> provides essential security for many types of endpoints, from smartphones to printers. It is an integrated suite of technologies, such as antivirus, data encryption, intrusion prevention, and data loss prevention. EPP framework includes data sharing between endpoint protection technologies, this provides a more effective approach than a collection of siloed security products that lack the ability to communicate.</p>
										</div>
									</li>
									<li>
										<div class="hb-leftCont hb_ppCont">
											<h3>Endpoint Detection and Response (EDR)</h3>
											<h5><strong>Securely access Enterprise network resources</strong></h5>
											<p>Reduce the time to detect and respond to threats with EDR on Pi-cloud<sup></sup>. It provides additional tools to hunt for threats, forensically analyse intrusions and respond swiftly and effectively to attacks. </p>
											<p><strong>Features: </strong> Simplify deployment | Incident response | Gain visibility into emerging threats | AI-guided investigations | Automated processes
											</p>
										</div>
									</li>
									<li>
										<div class="hb-rightCont hb_ppCont">
											<span>
												<img src="./pi-cloud/images/product-images/edr_img.png" alt="workspace">
											</span>
										</div>
									</li>
									<li>
										<div class="hb-leftCont hb_ppCont">
											<span>
												<img src="./pi-cloud/images/product-images/iam_img.png" alt="workspace">
											</span>
										</div>
									</li>
									<li>
										<div class="hb-rightCont hb_ppCont">
											<h3>Identity & Access Management (IAM)</h3>
											<h5><strong>Securely manage access across enterprise IT resources</strong></h5>
											<p>IAM on Pi Cloud<sup></sup> is a periphery security to the cloud. It acts as a foundation to a secured and fully compliant cloud architecture. Admins can create and manage end-users, groups, relative policies and use permissions to allow or deny their access . </p>
											<p><strong>Use Cases: </strong> Multi-factor Authentication(MFA) | Granular access controls | Monitor & analyze access | Privileged-user file & resources access </p>
										</div>
									</li>


								</ul>
							</div>


							<div id="Management" class="tabcontent">
								<ul class="hb-productSec list-inline">
									<li>
										<div class="hb-leftCont hb_ppCont">
											<span>
												<img src="./pi-cloud/images/product-images/soc_img.png" alt="workspace">
											</span>
										</div>
									</li>
									<li>
										<div class="hb-rightCont hb_ppCont">
											<h3>Security Operations Center (SOC)</h3>
											<h5><strong>Detect, analyze, and respond to cybersecurity incidents</strong></h5>
											<p>Security Information and Event Management (SIEM) enabled SOC on Pi Cloud<sup></sup> is a centralized 24x7 function to continuously monitor and enhance the enterprise security posture for an organization, while preventing, detecting, analyzing, and responding to cybersecurity incidents. </p>
											<p><strong>Features: </strong> Monitoring & assessment | Advanced intelligence gathering | Forensics | Contingency planning | Malware protection </p>
										</div>
									</li>
									<li>
										<div class="hb-leftCont hb_ppCont">
											<h3>Vulnerability Assessment(VA) & Penetration Testing(PT)</h3>
											<h5><strong>Comprehensive evaluation of cyber-threat readiness</strong></h5>
											<p>VA allows enterprises to scan, identify and prioritize vulnerabilities and threats early on, to ensure, most critical vulnerabilities are fixed first. Pen Test or ethical hacking, is an authorized simulated cyberattack on a computer system, performed to evaluate the security of the enterprise infrastructure and end-users.</p>
										</div>
									</li>
									<li>
										<div class="hb-rightCont hb_ppCont">
											<span>
												<img src="./pi-cloud/images/product-images/vapt_img.png" alt="workspace">
											</span>
										</div>
									</li>
									<li>
										<div class="hb-leftCont hb_ppCont">
											<span>
												<img src="./pi-cloud/images/product-images/vault_img.png" alt="workspace">

											</span>
										</div>
									</li>
									<li>
										<div class="hb-rightCont hb_ppCont">
											<h3>MicroVault (MV) & DataVault (DV)</h3>
											<h5><strong>Eliminate exposure of servers, data and processes </strong></h5>
											<p>Protect data and processes from tampering, unauthorized access and destruction. Movement is restrained by containerizing the user into a secure shell/vault, while zero trust segmentation prevents lateral movement and elevation of user accounts. In contrast to MV, which is built for servers, DV is designed as a secure file repository for the executive teams, vital business functions, IP protection, and critical backups.</p>
										</div>
									</li>
								</ul>
							</div>

						</div>
					</div>

					<!-- TAB-6 -->

					<div class="skltbs-panel" id="tab-6">

						<div class="container">
							<div class="hb-productHead text-center">
								<h2> Prevention Is Better Than Cure </h2>
								<p>IT disasters can be natural or inflicted by human error. Any such threat, causing a data center failure, server corruption, or cyber attacks can be expensive for your business. They not only disrupt your operations, but also cause permanent data loss, damage your reputation and impact your revenue. With business continuity on Pi Cloud<sup></sup>, enterprises can ensure that adverse effect on their business runtime is minimalistic and they get to return to full operational state in no time.</p>
								<div class="hb-childProducts">
									<h2 class="text-center">Business Continuity Products
									</h2>
								</div>
							</div>
							<div class="tab skltbs-tab-group">
								<button class="tablinks skltbs-tab-item active" onclick="openCity(event, 'Disaster')">Disaster Recovery</button>
								<button class="tablinks skltbs-tab-item" onclick="openCity(event, 'Backup')">Backup</button>
								<button class="tablinks skltbs-tab-item" onclick="openCity(event, 'High')">High Availability (HA)</button>
							</div>

							<!-- Tab content -->
							<div id="Disaster" class="tabcontent active">
								<ul class="hb-productSec list-inline">
									<li>
										<div class="hb-leftCont hb_ppCont">
											<span>
												<img src="./pi-cloud/images/product-images/dr_img.png" alt="workspace">
											</span>
										</div>
									</li>
									<li>
										<div class="hb-rightCont hb_ppCont">
											<h3>Disaster Recovery</h3>
											<p>Pi Cloud<sup></sup> offers Disaster Recovery as a Service(DRaaS) ensuring near zero business disruption in case of an outage. DRaaS provides rapid failover and failback for your IT environment across infrastructure , applications and processes. Choose from active-active, active-passive or cold DR to balance business needs and TCO. Enterprises get to leverage multi availability zones of Pi Cloud<sup></sup> to design an effective Near and Far DR policy.</p>
										</div>
									</li>
								</ul>
								<div class="hb-features">
									<h3 class="text-center">Features</h3>
									<ul class="list-inline hb-featuresList">
										<li>
											<div class="hb-featureBox">
												<div class="hb-featTopHeader">
													<p class="hb-featLogo">
														<img src="./pi-cloud/images/product-page-icons/bc/cd.svg" alt="onesize">
													</p>
													<div class="hb-featCont">
														<h6>Custom Deployment</h6>
														<p>Recovery of business-critical applications and data within prescribed RPO and RTO your business needs</p>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="hb-featureBox">
												<div class="hb-featTopHeader">
													<p class="hb-featLogo">
														<img src="./pi-cloud/images/product-page-icons/bc/rf.svg" alt="low">
													</p>
													<div class="hb-featCont">
														<h6>Low Business Risk</h6>
														<p>Optimal TCO without compromising on quality and availability</p>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="hb-featureBox">
												<div class="hb-featTopHeader">
													<p class="hb-featLogo">
														<img src="./pi-cloud/images/product-page-icons/bc/drd.svg" alt="workspace">
													</p>
													<div class="hb-featCont">
														<h6>DR Drills </h6>
														<p>Periodic drills enable operational readiness and use cases to improve resiliency and recovery time</p>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
								<div class="hb-features">
									<h3 class="text-center" id="test">Use cases for Disaster recovery</h3>
									<ul class="list-inline hb-idealList">
										<li>
											<div class="hb-idealFet">
												<span>
													<img src="./pi-cloud/images/Tick.svg" alt="workspace">
												</span>
												<p>Protection from various cyber attacks and threats </p>
											</div>
										</li>
										<li>
											<div class="hb-idealFet">
												<span>
													<img src="./pi-cloud/images/Tick.svg" alt="workspace">
												</span>
												<p>Regulatory compliance for running mission critical workloads</p>
											</div>
										</li>
										<li>
											<div class="hb-idealFet">
												<span>
													<img src="./pi-cloud/images/Tick.svg" alt="workspace">
												</span>
												<p>Safeguard your data against natural calamitiess</p>
											</div>
										</li>
										<li>
											<div class="hb-idealFet">
												<span>
													<img src="./pi-cloud/images/Tick.svg" alt="workspace">
												</span>
												<p>Databases & other apps requiring faster I/O</p>
											</div>
										</li>
									</ul>
								</div>
							</div>

							<div id="Backup" class="tabcontent">
								<ul class="hb-productSec list-inline">
									<li>
										<div class="hb-leftCont hb_ppCont">
											<h3>Backup</h3>

											<p>Pi Cloud backup service offers a cost-effective way to protect mission critical data and applications from unplanned downtime. By copying and storing wide range of workloads across different zones, enterprises are assured of reinstating the files in case of a disruption. The benefit of regular data backup is its reliability. Automated backup on Pi Cloud takes any possibility of human error or backup misses, out of the equation. This assures enterprises of the steadiness of data availability and being up-to-date .</p>
										</div>
									</li>
									<li>
										<div class="hb-rightCont hb_ppCont">
											<span>
												<img src="./pi-cloud/images/product-images/backup_img.png" alt="workspace"> </span>

										</div>
									</li>
								</ul>
								<div class="hb-features">
									<h3 class="text-center">Features</h3>
									<ul class="list-inline hb-featuresList">
										<li>
											<div class="hb-featureBox">
												<div class="hb-featTopHeader">
													<p class="hb-featLogo">
														<img src="./pi-cloud/images/product-page-icons/bc/eou.svg" alt="workspace">
													</p>
													<div class="hb-featCont">
														<h6>Ease of use</h6>
														<p>Schedule, manage and restore centrally from one interface</p>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="hb-featureBox">
												<div class="hb-featTopHeader">
													<p class="hb-featLogo">
														<img src="./pi-cloud/images/product-page-icons/bc/hcb.svg" alt="workspace">
													</p>
													<div class="hb-featCont">
														<h6>Hybrid backup solution</h6>
														<p>Single point solution for your workloads running on cloud and on-premise</p>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="hb-featureBox">
												<div class="hb-featTopHeader">
													<p class="hb-featLogo">
														<img src="./pi-cloud/images/product-page-icons/bc/fdb.svg" alt="workspace">
													</p>
													<div class="hb-featCont">
														<h6>Flexible backup options</h6>
														<p>Restore your entire workloads or specific files and folders for a given duration window</p>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
								<div class="hb-features">
									<h3 class="text-center">Use cases for Backup</h3>
									<ul class="list-inline hb-idealList">
										<li>
											<div class="hb-idealFet">
												<span>
													<img src="./pi-cloud/images/Tick.svg" alt="workspace">
												</span>
												<p>Protection from ransomware </p>
											</div>
										</li>
										<li>
											<div class="hb-idealFet">
												<span>
													<img src="./pi-cloud/images/Tick.svg" alt="workspace">
												</span>
												<p>In-house server breakdown </p>
											</div>
										</li>
										<li>
											<div class="hb-idealFet">
												<span>
													<img src="./pi-cloud/images/Tick.svg" alt="workspace">
												</span>
												<p>Cold storage of data</p>
											</div>
										</li>
										<li>
											<div class="hb-idealFet">
												<span>
													<img src="./pi-cloud/images/Tick.svg" alt="workspace">
												</span>
												<p>Protection from ransomware </p>
											</div>
										</li>
									</ul>
								</div>
							</div>

							<div id="High" class="tabcontent">
								<ul class="hb-productSec list-inline">
									<li>
										<div class="hb-rightCont hb_ppCont">
											<span>
												<img src="./pi-cloud/images/product-images/ha_img.png" alt="workspace">
											</span>

										</div>
									</li>
									<li>
										<div class="hb-leftCont hb_ppCont">
											<h3>High Availability (HA)</h3>

											<p> High Availability on Pi Cloud uses specific components and methods to ensure the best possible performance of the system, during high traffic, power outages or equipment failure. It ensures, redundancy of systems and data, through multiple machines on clusters, as well as load balancing of workloads. This ensured no server within the cluster ever gets overloaded. Users are assured of seamless access to applications deployed on HA, even in times of high load, ensuring maximum stability and availability. All elements of HA on Pi Cloud goes through rigorous testing of components and services to ensure high performance and security.</p>
										</div>
									</li>

								</ul>
								<div class="hb-features">
									<h3 class="text-center">Features</h3>
									<ul class="list-inline hb-featuresList">
										<li>
											<div class="hb-featureBox">
												<div class="hb-featTopHeader">
													<p class="hb-featLogo">
														<img src="./pi-cloud/images/onesize.svg" alt="workspace">
													</p>
													<div class="hb-featCont">
														<h6>HA clustering</h6>
														<p>Cloud servers customized and grouped to support workloads with zero or minimal downtime</p>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="hb-featureBox">
												<div class="hb-featTopHeader">
													<p class="hb-featLogo">
														<img src="./pi-cloud/images/onesize.svg" alt="workspace">
													</p>
													<div class="hb-featCont">
														<h6>No single point of failure</h6>
														<p>The redundancy built in by enterprise grade HA softwares provides clusters, ensuring service continuity</p>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="hb-featureBox">
												<div class="hb-featTopHeader">
													<p class="hb-featLogo">
														<img src="./pi-cloud/images/onesize.svg" alt="workspace">
													</p>
													<div class="hb-featCont">
														<h6>Monitoring & Detection</h6>
														<p>Follow the sun monitoring of all servers, resource pools and workloads for preventive detection of possible failures</p>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
								<div class="hb-features">
									<h3 class="text-center">Use cases for High Availability</h3>
									<ul class="list-inline hb-idealList">
										<li>
											<div class="hb-idealFet">
												<span>
													<img src="./pi-cloud/images/Tick.svg" alt="workspace">
												</span>
												<p>100% availability of mission-critical workloads </p>
											</div>
										</li>
										<li>
											<div class="hb-idealFet">
												<span>
													<img src="./pi-cloud/images/Tick.svg" alt="workspace">
												</span>
												<p>Maximum productivity and reliability </p>
											</div>
										</li>
										<li>
											<div class="hb-idealFet">
												<span>
													<img src="./pi-cloud/images/Tick.svg" alt="workspace">
												</span>
												<p>Updates and fixes with zero downtime</p>
											</div>
										</li>
										<li>
											<div class="hb-idealFet">
												<span>
													<img src="./pi-cloud/images/Tick.svg" alt="workspace">
												</span>
												<p>Updates and fixes with zero downtime </p>
											</div>
										</li>
									</ul>
								</div>
							</div>

						</div>
					</div>


					<!-- TAB-7 -->

					<div class="skltbs-panel" id="tab-7">

						<div class="container">
							<div class="hb-productHead text-center">
								<h2>
									End-to-end DevOps Solution on Pi Cloud
								</h2>
								<p>DevOps is a portmanteau of &#8220;development & operations&#8221;, it is also a union of best practices and tools which are put in place to improve enterprise performance to deliver applications, products, and services faster. This agility empowers enterprises to serve their clients better and be competitive in the market. DevOps practice on Pi Cloud eliminates the barriers between development and operations team. Under its unified model, development and operations team work collectively all through the software application life cycle, starting from testing an application to launching it.</p>
								<!-- <div class="hb-childProducts">
								<h2 class="text-center">Explore our storage solutions</h2>
							</div> -->
							</div>
							<div style="padding: 24px 0">
								<div class="container">

									<h2 class="hb-sdhsdhsd"> Practices</h2>
									<ul class="list-inline sfdfd_sdajsd">
										<li class="hb-dibsdd">
											<div class="sdhsd_ssdud">
												<div class="jdh_ddksd">
													<p>
														<img src="./pi-cloud/images/product-page-icons/devops/ci.svg" alt="cicd">
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
														<img src="./pi-cloud/images/product-page-icons/devops/cd.svg" alt="cicd">
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
														<img src="./pi-cloud/images/product-page-icons/devops/micro.svg" alt="cicd">
													</p>
												</div>
												<div class="djdf_sdusd">
													<h3>Microservices</h3>
													<P>Each service runs in its own process and communicates with other services through a HTTP-based API. Microservices are built around business capabilities and enterprises can use different frameworks or programming languages to package microservices.</P>
												</div>
											</div>
										</li>
										<li class="hb-dibsdd">
											<div class="sdhsd_ssdud">
												<div class="jdh_ddksd">
													<p>
														<img src="./pi-cloud/images/product-page-icons/devops/iac.svg" alt="cicd">
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
														<img src="./pi-cloud/images/product-page-icons/devops/mon.svg" alt="cicd">
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
														<img src="./pi-cloud/images/product-page-icons/devops/cola.svg" alt="cicd">
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
						</div>
					</div>

					<!-- TAB-8 -->

					<div class="skltbs-panel" id="tab-8">
						<div class="container">
							<div class="hb-productHead text-center">
								<h2> Digital Workplace Is The New Normal</h2>
								<p>Teams today are working remotely and on the go. Without proper visibility into the complex multi-vendor work environments, it's a daunting task to figure out what&#8217;s wrong and who&#8217;s responsible. End User Computing services on Pi Cloud, offers managed Virtual Desktop Infrastructure(VDI) environment on cloud, enabling users for anytime, anywhere and from any device operation.</p>
								<div class="hb-childProducts">
									<h2 class="text-center">End User Computing Products & Services</h2>
								</div>
							</div>
							<div class="tab skltbs-tab-group">
								<button class="tablinks skltbs-tab-item active" onclick="openCity(event, 'Workspace')">Workspace</button>
								<button class="tablinks skltbs-tab-item" onclick="openCity(event, 'App')">App Streaming</button>
								<button class="tablinks skltbs-tab-item" onclick="openCity(event, 'Remote')">Remote Access</button>
							</div>

							<!-- Tab content -->
							<div id="Workspace" class="tabcontent active">
								<ul class="hb-productSec list-inline">
									<li>
										<div class="hb-leftCont hb_ppCont">
											<span>
												<img src="./pi-cloud/images/product-images/workspace_img.png" alt="workspace">
											</span>
										</div>
									</li>
									<li>
										<div class="hb-rightCont hb_ppCont">
											<h3>Workspace</h3>
											<p>Workspace is a Desktop-as-a-Service solution for provisioning virtual desktops with the choice of OS, configuration for workforces across the globe to operate seamlessly. Enterprise admins can manage users, applications, images, and policies. Enterprises no longer need to negotiate complicated hardware deployments.</p>
										</div>
									</li>
								</ul>
								<div class="hb-features">
									<h3 class="text-center">Features</h3>
									<ul class="list-inline hb-featuresList">
										<li>
											<div class="hb-featureBox">
												<div class="hb-featTopHeader">
													<p class="hb-featLogo">
														<img src="./pi-cloud/images/product-page-icons/euc/cm.svg" alt="onesize">
													</p>
													<div class="hb-featCont">
														<h6>Centralised Management</h6>
														<p>Configure, apply software patches and enforce policies centrally</p>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="hb-featureBox">
												<div class="hb-featTopHeader">
													<p class="hb-featLogo">
														<img src="./pi-cloud/images/product-page-icons/euc/e2ev.svg" alt="low">
													</p>
													<div class="hb-featCont">
														<h6>End to End Visibility</h6>
														<p>Find out the root cause of incidents and isolate threats in real-time</p>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="hb-featureBox">
												<div class="hb-featTopHeader">
													<p class="hb-featLogo">
														<img src="./pi-cloud/images/product-page-icons/euc/ce.svg" alt="euc">
													</p>
													<div class="hb-featCont">
														<h6>Consistent Experience </h6>
														<p>Run environment of your choice on PCs, tablets, smartphones and thin clients, alike.</p>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
								<div class="hb-features">
									<h3 class="text-center" id="test">Use cases for Workspace</h3>
									<ul class="list-inline hb-idealList">
										<li>
											<div class="hb-idealFet">
												<span>
													<img src="./pi-cloud/images/Tick.svg" alt="euc">
												</span>
												<p>Enable Bring Your Own Device (BYOD)</p>
											</div>
										</li>
										<li>
											<div class="hb-idealFet">
												<span>
													<img src="./pi-cloud/images/Tick.svg" alt="euc">
												</span>
												<p>Vendor & partner access</p>
											</div>
										</li>
										<li>
											<div class="hb-idealFet">
												<span>
													<img src="./pi-cloud/images/Tick.svg" alt="euc">
												</span>
												<p>Task or shift workforce</p>
											</div>
										</li>
										<li>
											<div class="hb-idealFet">
												<span>
													<img src="./pi-cloud/images/Tick.svg" alt="euc">
												</span>
												<p>Thin-client computing</p>
											</div>
										</li>
									</ul>
								</div>
							</div>

							<div id="App" class="tabcontent">
								<ul class="hb-productSec list-inline">
									<li>
										<div class="hb-leftCont hb_ppCont">
											<h3>App Streaming</h3>

											<p>App streaming is a non-persistent virtualisation solution that enables enterprise to centrally manage the desktop applications and deliver them to user across the globe, irrespective of the device they are using</p>
										</div>
									</li>
									<li>
										<div class="hb-rightCont hb_ppCont">
											<span>
												<img src="./pi-cloud/images/product-images/appstreaming_img.png" alt="workspace">
											</span>

										</div>
									</li>
								</ul>
								<div class="hb-features">
									<h3 class="text-center">Features</h3>
									<ul class="list-inline hb-featuresList">
										<li>
											<div class="hb-featureBox">
												<div class="hb-featTopHeader">
													<p class="hb-featLogo">
														<img src="./pi-cloud/images/product-page-icons/euc/simple.svg" alt="euc">
													</p>
													<div class="hb-featCont">
														<h6>Ease of operation</h6>
														<p>Configure, apply software patches and enforce policies centrally</p>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="hb-featureBox">
												<div class="hb-featTopHeader">
													<p class="hb-featLogo">
														<img src="./pi-cloud/images/product-page-icons/euc/ux.svg" alt="euc">
													</p>
													<div class="hb-featCont">
														<h6>Enhanced user experience</h6>
														<p>Apps are highly responsive to provide a frictionless workspace</p>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="hb-featureBox">
												<div class="hb-featTopHeader">
													<p class="hb-featLogo">
														<img src="./pi-cloud/images/product-page-icons/euc/secure.svg" alt="euc">
													</p>
													<div class="hb-featCont">
														<h6>Secure apps and data</h6>
														<p>Encryption while streaming ensures data travels secured over the wire across networks</p>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
								<div class="hb-features">
									<h3 class="text-center">Use cases for Backup</h3>
									<ul class="list-inline hb-idealList">
										<li>
											<div class="hb-idealFet">
												<span>
													<img src="./pi-cloud/images/Tick.svg" alt="euc">
												</span>
												<p>Deliver Software as a Service (SaaS)</p>
											</div>
										</li>
										<li>
											<div class="hb-idealFet">
												<span>
													<img src="./pi-cloud/images/Tick.svg" alt="euc">
												</span>
												<p>Run 3D design and Research software without investing on a expensive workstation </p>
											</div>
										</li>
										<li>
											<div class="hb-idealFet">
												<span>
													<img src="./pi-cloud/images/Tick.svg" alt="euc">
												</span>
												<p>Trials, demos, and training of your applications with zero installations.</p>
											</div>
										</li>
										<li>
											<div class="hb-idealFet">
												<span>
													<img src="./pi-cloud/images/Tick.svg" alt="euc">
												</span>
												<p>Deliver Software as a Service (SaaS)</p>
											</div>
										</li>
									</ul>
								</div>
							</div>

							<div id="Remote" class="tabcontent">
								<ul class="hb-productSec list-inline">
									<li>
										<div class="hb-leftCont hb_ppCont">
											<h3>Remote Access</h3>

											<p> Zero trust based gateway to access your workspaces & applications, irrespective of your location. It enhances enterprise mobility that allows end users to login securely and switch devices if needed. Admins can monitor the environment seamlessly and identify malicious activity from in-house or external users</p>
										</div>
									</li>
									<li>
										<div class="hb-rightCont hb_ppCont">
											<span>
												<img src="./pi-cloud/images/product-images/remoteaccess_img.png" alt="workspace">
											</span>

										</div>
									</li>
								</ul>
								<div class="hb-features">
									<h3 class="text-center">Features</h3>
									<ul class="list-inline hb-featuresList">
										<li>
											<div class="hb-featureBox">
												<div class="hb-featTopHeader">
													<p class="hb-featLogo">
														<img src="./pi-cloud/images/product-page-icons/euc/zt.svg" alt="euc">
													</p>
													<div class="hb-featCont">
														<h6>Zero Trust Access</h6>
														<p>Secure access to desktops, apps and network anywhere, anytime.</p>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="hb-featureBox">
												<div class="hb-featTopHeader">
													<p class="hb-featLogo">
														<img src="./pi-cloud/images/product-page-icons/euc/sso.svg" alt="euc">
													</p>
													<div class="hb-featCont">
														<h6>Single sign on</h6>
														<p>For virtual desktops and apps to ensure strong end point control</p>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="hb-featureBox">
												<div class="hb-featTopHeader">
													<p class="hb-featLogo">
														<img src="./pi-cloud/images/product-page-icons/euc/sa.svg" alt="euc">
													</p>
													<div class="hb-featCont">
														<h6>Strong Authentication</h6>
														<p>Enabling Multi Factor Authentication for Identity management</p>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
								<div class="hb-features">
									<h3 class="text-center">Use cases for Remote Access</h3>
									<ul class="list-inline hb-idealList">
										<li>
											<div class="hb-idealFet">
												<span>
													<img src="./pi-cloud/images/Tick.svg" alt="euc">
												</span>
												<p>Remote & mobile workforce </p>
											</div>
										</li>
										<li>
											<div class="hb-idealFet">
												<span>
													<img src="./pi-cloud/images/Tick.svg" alt="euc">
												</span>
												<p>Regulatory Compliance</p>
											</div>
										</li>
										<li>
											<div class="hb-idealFet">
												<span>
													<img src="./pi-cloud/images/Tick.svg" alt="euc">
												</span>
												<p>Secure Access to Workspace</p>
											</div>
										</li>
										<li>
											<div class="hb-idealFet">
												<span>
													<img src="./pi-cloud/images/Tick.svg" alt="euc">
												</span>
												<p>Updates and fixes with zero downtime </p>
											</div>
										</li>
									</ul>
								</div>
							</div>

						</div>
					</div>




				</div>
			</div>
	</section>

</div>

<script>
	function openCity(evt, cityName) {
		var i, tabcontent, tablinks;
		tabcontent = evt.currentTarget.parentElement.parentElement.getElementsByClassName('tabcontent');
		for (i = 0; i < tabcontent.length; i++) {
			tabcontent[i].style.display = "none";
		}
		tablinks = evt.currentTarget.parentElement.getElementsByClassName('tablinks');
		for (i = 0; i < tablinks.length; i++) {
			tablinks[i].className = tablinks[i].className.replace(" active", "");
		}
		document.getElementById(cityName).style.display = "block";
		evt.currentTarget.className += " active";
	}


	// document.getElementById("defaultOpen").click();


	// document.getElementById("defaultOpenn").click();

	// document.getElementsByClassName("defaultOpen").click();
</script>

<?php include('php/includes-techsters/footer.php'); ?>