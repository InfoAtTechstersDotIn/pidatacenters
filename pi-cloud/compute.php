<style>
.hb-boxCont{min-height:auto;}
@media (max-width: 599px){
.get-in-touch-lft:first-child{width:100%; padding: 0 0 20px;float: none;}
.get-in-touch-rit a{display:block;margin:0 auto;}
.footer-about .col-md-3 {-webkit-flex: 0 0 100%;float: none;max-width: 100%;width: 100%;}
}
</style>
<?php
 include_once('includes/header.php');
?>

<div class="hb-bannerCont">
	<div class="hb-bannerImgCont">
		<div class="hb-bannerImg">
		<!--	<picture>
			     <source media="(max-width: 768px)" srcset="./pi-cloud/images/banners/compute_banner.png">
			      <img  src="./pi-cloud/images/banners/compute_mbanner.png" alt="pi-cloud Cloud Backup as a Service Banner" style="width:100%">
      		</picture>-->
      			<picture>
			     <source media="(max-width: 768px)" srcset="./<?= $config['subFolderName'] ?>/images/banners/compute-banner.jpg">
			      <img  src="./<?= $config['subFolderName'] ?>/images/banners/compute-banner.jpg" alt="pi-cloud Cloud Backup as a Service Banner" style="width:100%">
      		</picture>
      		<h2>Private Cloud</h2>
		</div>		
	</div>
</div>

	<section id="hb_products_Lists">
		<div class="container">
			<div class="hb-productHead text-center">
				<h1>Focus on your business, not IT</h1>
				<p>Let us manage your IT  infrastructure, while you manage your business. Instead of investing into building your IT infrastructure grounds up  and hassling through the maintenance of it, accelerate your digital transformation with high-performance Compute on Pi Cloud<sup></sup>.</p>
			</div>
			<div class="hb-childProducts">
				<h2 class="text-center">Explore our Compute products & services</h2>
				<!-- <p class="text-center">Address your growing infrastructure needs, regional expansions, and redundancy plans</p> -->
				<div id="outer" class="skltbs-theme-light" data-skeletabs='{ "startIndex": 2 }'>
			        <ul class="skltbs-tab-group list-inline text-center">
			          <li class="skltbs-tab-item current">
			            <button class="skltbs-tab tab-link" data-tab="tab-1">Virtual Machines (VMs)</button>
			          </li>
			          <li class="skltbs-tab-item">
			            <button class="skltbs-tab tab-link" data-tab="tab-2">Containers</button>
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
			            			<div class="hb-idealFet" >
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
			            			<h3 >Containers</h3>
			            			
			            			<p>Pi Cloud<sup></sup> offers a robust container orchestration and management technology to deploy and manage containers at scale. The environment provisioned on Pi Cloud enables developers to use abstraction and isolation technology to package an application, and all the files needed to run it, in a way that isolates the application from the underlying host OS.  </p>
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
			            						<img src="images/scale-3.svg" alt="scale-3">
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
			            						<p>Predictable  environments that are isolated from other applications</p>
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
			            				<p>Application packaging format  for DevOps </p>
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
			        </div>
      			</div>
			</div>
		</div>
	</section>
<div class="hb-certication partner">
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
								  <!--<img src="./<?= $config['subFolderName'] ?>/images/logo/18.png" alt="uptime">-->
<img src="./<?= $config['subFolderName'] ?>/images/product-images/azure28.png" alt="A-La-Carte-Model-4" style="width:100px">


								</span>

                        </a>
                    </div>
                </li>
 <li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
								<span>
								  <!--<img src="./<?= $config['subFolderName'] ?>/images/logo/18.png" alt="uptime">-->
<img src="./pi-cloud/images/product-images/Google212.png" alt="A-La-Carte-Model-3" style="width:100px">


								</span>

                        </a>
                    </div>
                </li>
<li>
                    <div class="hb-boxCont text-center" style="min-height:auto">
                        <a href="javascript:void(0)" style="cursor: auto;">
								<span>
								  <!--<img src="./<?= $config['subFolderName'] ?>/images/logo/18.png" alt="uptime">-->
<img src="./pi-cloud/images/product-images/AES212.png" alt="A-La-Carte-Model-1" style="width:100px">

								</span>

                        </a>
                    </div>
                </li>



            </ul>
        </div>
    </div>
</div>


<?php
	include_once('includes/footer.php');
?>
