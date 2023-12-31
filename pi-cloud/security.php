<?php
include_once('includes/header.php');
?>

<div class="hb-bannerCont">
	<div class="hb-bannerImgCont">
		<div class="hb-bannerImg">
			<!--<picture>
			     <source media="(max-width: 768px)" srcset="./pi-cloud/images/banners/cs_mbanner.png">
			      <img  src="./pi-cloud/images/banners/cs_banner.png" alt="pi-cloud Cloud Backup as a Service Banner" style="width:100%">
      		</picture>-->
			<picture>
				<source media="(max-width: 768px)" srcset="./<?= $config['subFolderName'] ?>/images/banners/cyber-security-banner.jpg">
				<img src="./<?= $config['subFolderName'] ?>/images/banners/cyber-security-banner.jpg" alt="pi-cloud Cloud Backup as a Service Banner" style="width:100%">
			</picture>
			<h2>Cyber Security</h2>
		</div>
	</div>
</div>

<section id="hb_products_Lists">
	<div class="container">
		<div class="hb-productHead text-center">
			<h1>Modern day battlefield is on the web</h1>
			<p>In today's connected world, cyber attacks are occurring once in every 14 seconds. With more connected devices In this world than people on earth,
				there is an increased reliance on the internet, wireless network standards, smart devices and IoT. This has increased the threat vector of enterprises, making them vulnerable to a wide range of risk stemming from cyber threats, disrupting operations and damaging reputation of any enterprise. It won't be an exaggeration to say that multi layered cyber security mechanisms and skilled experts are the last line of defense, for digital data assets of enterprises. It makes the difference between digital harmony and digital chaos</p>
		</div>
		<div class="hb-childProducts">
			<h2 class="text-center">Explore our enterprise-grade cyber security products</h2>
			<p class="text-center" style="padding-top: 12px;">Multiple layers of protection spread across the systems, users and operations</p>
			<div id="outer" class="skltbs-theme-light" data-skeletabs='{ "startIndex": 2 }'>
				<ul class="skltbs-tab-group list-inline text-center">
					<li class="skltbs-tab-item current">
						<button class="skltbs-tab tab-link" data-tab="tab-1">Infrastructure </button>
					</li>
					<li class="skltbs-tab-item">
						<button class="skltbs-tab tab-link" data-tab="tab-2">Application </button>
					</li>
					<li class="skltbs-tab-item">
						<button class="skltbs-tab tab-link" data-tab="tab-3"> End-point </button>
					</li>
					<li class="skltbs-tab-item">
						<button class="skltbs-tab tab-link" data-tab="tab-4"> Management </button>
					</li>

				</ul>
				<div class="skltbs-panel-group">
					<div class="skltbs-panel current" id="tab-1">
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
					<div class="skltbs-panel" id="tab-2">
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
									<p>WAF service on Pi Cloud<sup></sup> monitors, logs and analyses the HTTP traffic between enterprise application and internet. It aims to protect against vulnerabilities in the application by filtering out malicious traffic. WAF on pi-cloud<sup>Â®</sup> protects web applications from cross-site forgery, cross-site-scripting (XSS), file inclusion, and SQL injection, among others that may sabotage important transactions and steal sensitive data. </p>
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
					<div class="skltbs-panel" id="tab-3">
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
										<img src="images/product-images/edr_img.png" alt="workspace">
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
					<div class="skltbs-panel" id="tab-4">
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
		</div>
	</div>
</section>
<?php
include_once('includes/footer.php');
?>