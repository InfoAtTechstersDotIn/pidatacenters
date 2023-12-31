	<?php
 include_once('includes/header.php');
?>
		<div class="hb-bannerCont">
			<div class="hb-bannerImgCont">
				<div class="hb-bannerImg">
				<!--<picture>
			     <source media="(max-width: 768px)" srcset="./harbour1/images/banners/bc_banner.png">
			      <img src="./harbour1/images/banners/bc_banner.png" alt="Harbour1 Cloud Backup as a Service Banner" style="width:100%" height="210">
      		</picture>-->
      			<picture>
			     <source media="(max-width: 768px)" srcset="./<?= $config['subFolderName'] ?>/images/banners/business-continuity-banner.jpg">
			      <img  src="./<?= $config['subFolderName'] ?>/images/banners/business-continuity-banner.jpg" alt="Harbour1 Cloud Backup as a Service Banner" style="width:100%">
      		</picture>
      		<h2>Business Continuity</h2>
				</div>
				
			</div>
		</div>
	<section id="hb_products_Lists">
		<div class="container">
			<div class="hb-productHead text-center">
				<h1> Prevention is better than cure</h1>
				<p>IT disasters can be natural or inflicted by human error. Any such threat, causing a data center failure, server corruption, or cyber attacks can be expensive for your business. They not only disrupt your operations, but also cause permanent data loss, damage your reputation and impact your revenue. With business continuity on Harbour1<sup>®</sup>, enterprises can ensure that adverse effect on their business runtime is minimalistic and  they get to return to full operational state in no time.</p>
			</div>
			<div class="hb-childProducts">
				<h2 class="text-center">Explore our Business Continuity Products</h2>
				<!-- <p class="text-center">Address your growing infrastructure needs, regional expansions, and redundancy plans</p> -->
				<div id="outer" class="skltbs-theme-light">
			        <ul class="skltbs-tab-group list-inline text-center">
			          <li class="skltbs-tab-item current">
			            <button class="skltbs-tab tab-link" data-tab="tab-1">Disaster Recovery</button>
			          </li>
			          <li class="skltbs-tab-item">
			            <button class="skltbs-tab tab-link" data-tab="tab-2">Backup</button>
			          </li>
			           <li class="skltbs-tab-item">
			            <button class="skltbs-tab tab-link" data-tab="tab-3">High Availability (HA)</button>
			          </li>
			          

			        </ul>
			        <div class="skltbs-panel-group">
			          <div class="skltbs-panel current " id="tab-1">
			            <ul class="hb-productSec list-inline">
			            	<li>
			            		<div class="hb-leftCont hb_ppCont">
			            			<span>
			            				<img src="./harbour1/images/product-images/dr_img.png" alt="workspace">
			            			</span>
			            		</div>
			            	</li>
			            	<li>
			            		<div class="hb-rightCont hb_ppCont">
			            			<h3>Disaster Recovery</h3>
			            			<p>Harbour1<sup>®</sup>  offers Disaster Recovery as a Service(DRaaS) ensuring near zero business disruption in case of an outage. DRaaS provides rapid failover and failback for your IT environment across infrastructure , applications and processes. Choose from active-active,  active-passive or cold DR to balance business needs and TCO. Enterprises get to leverage multi availability zones of Harbour1<sup>®</sup>  to design an effective Near and Far DR policy.</p>
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
			            						<img src="./harbour1/images/product-page-icons/bc/cd.svg" alt="onesize">
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
			            						<img src="./harbour1/images/product-page-icons/bc/rf.svg" alt="low">
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
			            						<img src="./harbour1/images/product-page-icons/bc/drd.svg"  alt="workspace">
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
			            					<img src="./harbour1/images/Tick.svg"  alt="workspace">
			            				</span>
			            				<p>Protection from various cyber attacks and threats </p>
			            			</div>
			            		</li>
			            		<li>
			            			<div class="hb-idealFet">
			            				<span>
			            					<img src="./harbour1/images/Tick.svg"  alt="workspace">
			            				</span>
			            				<p>Regulatory compliance for running mission critical workloads</p>
			            			</div>
			            		</li>
			            		<li>
			            			<div class="hb-idealFet">
			            				<span>
			            					<img src="./harbour1/images/Tick.svg"  alt="workspace">
			            				</span>
			            				<p>Safeguard your data against natural calamitiess</p>
			            			</div>
			            		</li>
			            		<li>
			            			<div class="hb-idealFet">
			            				<span>
			            					<img src="./harbour1/images/Tick.svg"  alt="workspace">
			            				</span>
			            				<p>Databases &  other apps requiring faster I/O</p>
			            			</div>
			            		</li>
			            	</ul>
			            </div>
			          </div>
			          <div class="skltbs-panel" id="tab-2">
			          <ul class="hb-productSec list-inline">
			            	<li>
			            		<div class="hb-leftCont hb_ppCont">
			            			<h3 >Backup</h3>
			            			
			            			<p>Harbour1® backup service offers a cost-effective way to protect mission critical data and applications from unplanned downtime. By copying and storing wide range of workloads across different zones, enterprises are assured of reinstating the files in case of a disruption. The benefit of regular data backup is its reliability. Automated backup on Harbour1® takes any possibility of human error or backup misses, out of the equation. This assures enterprises of the steadiness of data availability and being up-to-date .</p>
			            		</div>
			            	</li>
			            	<li>
			            		<div class="hb-rightCont hb_ppCont">
			            			<span>
			            				<img src="./harbour1/images/product-images/backup_img.png" alt="workspace">			            			</span>
			            		
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
			            						<img src="./harbour1/images/product-page-icons/bc/eou.svg"  alt="workspace">
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
			            						<img src="./harbour1/images/product-page-icons/bc/hcb.svg"  alt="workspace">
			            					</p>
			            					<div class="hb-featCont">
			            						<h6>Hybrid backup solution</h6>
			            						<p>Single point  solution for your workloads running on cloud and on-premise</p>
			            					</div>
			            				</div>
			            			</div>
			            		</li>
			            		<li>
			            			<div class="hb-featureBox">
			            				<div class="hb-featTopHeader">
			            					<p class="hb-featLogo">
			            						<img src="./harbour1/images/product-page-icons/bc/fdb.svg"  alt="workspace">
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
			            <div class="hb-features" >
			            	<h3 class="text-center">Use cases for Backup</h3>
			            	<ul class="list-inline hb-idealList">
			            		<li>
			            			<div class="hb-idealFet">
			            				<span>
			            					<img src="./harbour1/images/Tick.svg"  alt="workspace">
			            				</span>
			            				<p>Protection from ransomware </p>
			            			</div>
			            		</li>
			            		<li>
			            			<div class="hb-idealFet">
			            				<span>
			            					<img src="./harbour1/images/Tick.svg"  alt="workspace">
			            				</span>
			            				<p>In-house server breakdown </p>
			            			</div>
			            		</li>
			            		<li>
			            			<div class="hb-idealFet">
			            				<span>
			            					<img src="./harbour1/images/Tick.svg"  alt="workspace">
			            				</span>
			            				<p>Cold storage of data</p>
			            			</div>
			            		</li>
			            		<li>
			            			<div class="hb-idealFet">
			            				<span>
			            					<img src="./harbour1/images/Tick.svg"  alt="workspace">
			            				</span>
			            				<p>Protection from ransomware  </p>
			            			</div>
			            		</li>
			            	</ul>
			            </div>
			            
			          </div> 
			           <div class="skltbs-panel" id="tab-3">
			          <ul class="hb-productSec list-inline">
			          	<li>
			            		<div class="hb-rightCont hb_ppCont">
			            			<span>
			            				<img src="./harbour1/images/product-images/ha_img.png" alt="workspace">
			            			</span>
			            		
			            		</div>
			            	</li>	
			            	<li>
			            		<div class="hb-leftCont hb_ppCont">
			            			<h3 >High Availability (HA)</h3>
			            			
			            			<p> High Availability on Harbour1® uses specific components and methods to ensure the best possible performance of the system, during high traffic, power outages or equipment failure. It ensures, redundancy of systems and data, through multiple machines on clusters, as well as load balancing of workloads. This ensured no server within the cluster ever gets overloaded. Users are assured of seamless access to applications deployed on HA, even in times of high load, ensuring maximum stability and availability. All elements of HA on Harbour1® goes through rigorous testing of components and services to ensure high performance and security.</p>
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
			            						<img src="./harbour1/images/onesize.svg"  alt="workspace">
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
			            						<img src="./harbour1/images/onesize.svg"  alt="workspace">
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
			            						<img src="./harbour1/images/onesize.svg"  alt="workspace">
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
			            <div class="hb-features" >
			            	<h3 class="text-center">Use cases for High Availability</h3>
			            	<ul class="list-inline hb-idealList">
			            		<li>
			            			<div class="hb-idealFet">
			            				<span>
			            					<img src="./harbour1/images/Tick.svg"  alt="workspace">
			            				</span>
			            				<p>100% availability of mission-critical workloads  </p>
			            			</div>
			            		</li>
			            		<li>
			            			<div class="hb-idealFet">
			            				<span>
			            					<img src="./harbour1/images/Tick.svg"  alt="workspace">
			            				</span>
			            				<p>Maximum productivity and reliability  </p>
			            			</div>
			            		</li>
			            		<li>
			            			<div class="hb-idealFet">
			            				<span>
			            					<img src="./harbour1/images/Tick.svg"  alt="workspace">
			            				</span>
			            				<p>Updates and fixes with zero downtime</p>
			            			</div>
			            		</li>
			            		<li>
			            			<div class="hb-idealFet">
			            				<span>
			            					<img src="./harbour1/images/Tick.svg"  alt="workspace">
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

	<?php
	include_once('includes/footer.php');
?>
