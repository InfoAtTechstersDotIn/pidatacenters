<?php
include_once('includes/header.php');
?>


<div class="hb-bannerCont">
	<div class="hb-bannerImgCont">
		<div class="hb-bannerImg">
			<!--	<picture>
			     <source media="(max-width: 768px)" srcset="./pi-cloud/images/banners/storage_mbanner.png">
			      <img  src="./pi-cloud/images/banners/storage_banner.png" alt="pi-cloud Cloud Backup as a Service Banner" style="width:100%">
      		</picture>-->
			<picture>
				<source media="(max-width: 768px)" srcset="./<?= $config['subFolderName'] ?>/images/banners/storage-banner.jpg">
				<img src="./<?= $config['subFolderName'] ?>/images/banners/storage-banner.jpg" alt="pi-cloud Cloud Backup as a Service Banner" style="width:100%">
			</picture>
			<h2>Storage</h2>
		</div>
	</div>
</div>

<section id="hb_products_Lists">
	<div class="container">
		<div class="hb-productHead text-center">
			<h1>Go practically limitless capacity with Pi Cloud</h1>
			<p>Data is the lifeline of any business and it is important to consider how enterprises store data, based on enterprise business needs. Pi Cloud allows enterprises to select storage of choice that meets business objectives. Pi Cloud presents varied storage formats to hold, organize and present data with objective driven distinct features and capabilities.</p>
		</div>
		<div class="hb-childProducts">
			<h2 class="text-center">Explore our storage solutions</h2>
			<!-- <p class="text-center">Address your growing infrastructure needs, regional expansions, and redundancy plans</p> -->
			<div id="outer" class="skltbs-theme-light" data-skeletabs='{ "startIndex": 2 }'>
				<ul class="skltbs-tab-group list-inline text-center">
					<li class="skltbs-tab-item current">
						<button class="skltbs-tab tab-link" data-tab="tab-1">Block Storage</button>
					</li>
					<li class="skltbs-tab-item">
						<button class="skltbs-tab tab-link" data-tab="tab-2">Object Storage</button>
					</li>
					<li class="skltbs-tab-item">
						<button class="skltbs-tab tab-link" data-tab="tab-3">File Storage</button>
					</li>


				</ul>
				<div class="skltbs-panel-group">
					<div class="skltbs-panel current " id="tab-1">
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
					<div class="skltbs-panel" id="tab-2">
						<ul class="hb-productSec list-inline">
							<li>
								<div class="hb-leftCont hb_ppCont">
									<h3>Object Storage</h3>

									<p> Today’s digital world requires data archiving and backing-up of unstructured data. Media and web contents like email, videos, image files, web pages and sensor data produced by IoT has taken the center stage. Object storage on Pi Cloud is ideal for archiving data that does not change frequently. </p>
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
					<div class="skltbs-panel  " id="tab-3">
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
	</div>
</section>
<?php
include_once('includes/footer.php');
?>