<?php
include_once('includes/header.php');
?>
<!-- header section ends here -->
<!-- banner section starts here -->
<div class="hb-bannerCont">
   <div class="hb-bannerImgCont">
      <div class="hb-bannerImg">
         <picture>
            <source media="(max-width: 767px)" srcset="./<?= $config['subFolderName'] ?>/images/banners/Products-new.png">
            <img src="./<?= $config['subFolderName'] ?>/images/banners/Products-new.png" alt="pi-cloud Cloud Backup as a Service Banner" style="width:100%">
            <h2>Other Cloud Services</h2>
         </picture>
      </div>
   </div>
</div>
<!-- banner section end here -->
<div id="banner-content" style="display: none;">
   <div class="container">
      <div class="hb-bannerInfo">
         <p class="text-center">Pi-Cloud<sup></sup> offers a broad set of global cloud-based products including compute, storage, databases, analytics, networking, mobile, developer tools, management tools, IoT, security and enterprise applications. Pi Cloud<sup></sup> is trusted by the many enterprises, governments and startups to power a wide variety of workloads including: web and mobile applications, data processing and warehousing, storage, disaster recovery and many others.
         </p>
      </div>
      <ul class="hb-bannerList list-inline">
         <li>
            <h3>Customized solution</h3>
            <p>Enterprises who require to host Enterprise workloads closer to last mile can choose products, services & Availability Zone(s) that suits Enterprise needs</p>
         </li>
         <li>
            <h3>Business Continuity</h3>
            <p>Be prepared for the unexpected with Pi Cloud<sup></sup> enabling DR, secure remote work etc to ensure Enterprise business is up and running all time</p>
         </li>
         <li>
            <h3>Internet exchange @ Pi-cloud<sup></sup></h3>
            <p>IX peering at our data centers ensures our customers are directly connected to the global fiber backbone thereby reducing latency and data transfer costs</p>
         </li>
      </ul>
   </div>
</div>
<!-- banner section ends here -->
<div class="explore-dept" style="margin: 48px auto 12px;">
   <div class="container">
      <div class="ex-deptCont">
         <div class="ex-dept-Left">
            <h1 class="heading_text"> Explore Wide Range of<span style="display: block;">Products</h1>
            <p class="heading-para">Platform agnostic product stack on Pi Cloud is designed and developed keeping in mind the business challenges faced by enterprises. Now businesses can pick suitable products to scale, grow and meet industry demands with ease, efficiency and optimised TCO.
            </p>
         </div>
         <div class="ex-dept-Right" id="test">
            <ul class="list-inline ">
               <!--<li class="dept-list-group eg-heiAuto">
                  <div class="dept-list">
                     <div class="grid_view">
                        <p class="plus_ico"><img src="./pi-cloud/images/TopPicks.svg" alt="TopPicks"/></p>
                        <h2>Top Picks</h2>
                        <p class="hb-grHead">The Most Featured</p>
                     </div>
                     <div class="full-cont hwi">
                        <div class="dep-moreInfp">
                           <h2>Top Picks</h2>
                           <p>Most featured products and services on pi-cloud<sup>Â®</sup></p>
                        </div>
                        <ul class="list-inline child_deptCont">
                           <li>
                                   <h3><a href="./<?= $config['subFolderName'] ?>/compute">Virtual Machines</a></h3>
                                        <p>Develop, deploy & scale enterprise workloads on cloud</p>
                                             </li>
                                              <li>
                                                <h3><a href="#">pi-cloud<sup>Â®</sup> @ The Edge</a></h3>
                                                <p>Bring  agility and innovation to last mile</p>
                                             </li>
                                            
                                              <li>
                                                 <h3><a href="./<?= $config['subFolderName'] ?>/business-continuity">Disaster Recovery</a></h3>
                                                 <p>Keep enterprise business running in times of natural or man-made  disasters</p>
                                             </li>
                                              <li>
                                                <h3><a href="./<?= $config['subFolderName'] ?>/sap">S4HANA</a></h3>
                                                <p>Future-ready infra for memory intensive SAP workloads </p>
                                             </li>
                                              <li>
                                                <h3><a href="./<?= $config['subFolderName'] ?>/security">SOC (SIEM-enabled) </a></h3>
                                                <p>Aggregates and analyzes activity from network devices, servers etc</p>
                                             </li>
                                             
                                              <li>
                                                <h3><a href="./<?= $config['subFolderName'] ?>/network">HarbourFront<sup>TM</sup></a></h3>
                                                <p>Deliver high speed quality content, agonistic of device and location</p>
                                             </li>
                        </ul>
                     </div>
                  </div>
               </li>-->
               <!--<li class="dept-list-group eg-heiAuto">
                  <div class="dept-list">
                     <div class="grid_view">
                        <p class="plus_ico"><img src="./pi-cloud/images/Compute.svg" alt="Compute"/></p>
                        <h2>Compute </h2>
                        <p class="hb-grHead">VMs | Containers | Edge | Hybrid</p>
                     </div>
                     <div class="full-cont hwi">
                        <div class="dep-moreInfp">
                           <h2>Compute</h2>
                           <p>Scale enterprise compute on demand, develop and manage enterprise containerized applications faster with integrated tools.. <a href="./<?= $config['subFolderName'] ?>/compute">Learn More ></a></p>
                        </div>
                        <ul class="list-inline child_deptCont">
                           <li>
                              <h3><a href="./<?= $config['subFolderName'] ?>/compute">Virtual Machines</a></h3>
                              <p>Develop, deploy & scale enterprise workloads in cloud</p>
                           </li>
                           <li>
                              <h3><a href="./<?= $config['subFolderName'] ?>/compute">Containers</a></h3>
                              <p>Deployment, management, scaling, and networking of containers</p>
                           </li>
                           <li>
                              <h3><a href="#">P-Cloud<sup></sup> @ The Edge</a></h3>
                              <p>Bring the agility and innovation to last mile</p>
                           </li>
                        </ul>
                     </div>
                  </div>
               </li>-->
               <li class="dept-list-group eg-heiAuto">
                  <div class="dept-list">
                     <div class="grid_view">
                        <p class="plus_ico"><img src="./pi-cloud/images/Network.svg" alt="Network" /></p>
                        <h2>Network </h2>
                        <p class="hb-grHead"> Connect | Scale | Secure</p>
                     </div>
                     <div class="full-cont hwi">
                        <div class="dep-moreInfp">
                           <h2>Network </h2>
                           <p>Connect, scale and secure enterprise networks.. <a href="./<?= $config['subFolderName'] ?>/network">Learn More ></a></p>
                        </div>
                        <ul class="list-inline child_deptCont">
                           <li>
                              <h3><a href="./<?= $config['subFolderName'] ?>/network">HarbourFront (HF)</a></h3>
                              <p>Deliver quality content anywhere and on any device</p>
                           </li>
                           <li>
                              <h3><a href="./<?= $config['subFolderName'] ?>/network">Load Balancing</a></h3>
                              <p>Distribute enterprise traffic to achieve fault tolerance</p>
                           </li>
                           <li>
                              <h3><a href="./<?= $config['subFolderName'] ?>/network">Virtual Private Network </a></h3>
                              <p>Remote access & site-site VPN for enterprise</p>
                           </li>
                           <li>
                              <h3><a href="./<?= $config['subFolderName'] ?>/network">SD-WAN</a></h3>
                              <p>Software-defined approach to managing the WAN</p>
                           </li>
                           <li>
                              <h3><a href="./<?= $config['subFolderName'] ?>/network">MPLS</a></h3>
                              <p>Virtual private circuit for mission critical workloads</p>
                           </li>
                           <li>
                              <h3><a href="./<?= $config['subFolderName'] ?>/network">Direct Connect </a></h3>
                              <p>Dedicated route from enterprise on -premises to Pi Cloud<sup></sup></p>
                           </li>
                           <li>
                              <h3><a href="./<?= $config['subFolderName'] ?>/network">Firewall as a Service</a></h3>
                              <p>URL filtering | IPS/IDS | DNS security | Anti-malware</p>
                           </li>
                           <li>
                              <h3><a href="./<?= $config['subFolderName'] ?>/network">Wifi on Cloud</a></h3>
                              <p>Manage enterprise-grade Wi-Fi networks across sites on Pi Cloud<sup></sup></p>
                           </li>
                        </ul>
                     </div>
                  </div>
               </li>
               <li class="dept-list-group eg-heiAuto">
                  <div class="dept-list">
                     <div class="grid_view">
                        <p class="plus_ico"><img src="./pi-cloud/images/Storage.svg" alt="Storage" /></p>
                        <h2>Storage </h2>
                        <p class="hb-grHead"> Object | Block | File | Backup</p>
                     </div>
                     <div class="full-cont hwi">
                        <div class="dep-moreInfp">
                           <h2>Storage </h2>
                           <p>Get secure, massively scalable cloud storage for enterprise data, apps, and workloads.. <a href="./<?= $config['subFolderName'] ?>/storage">Learn More ></a></p>
                        </div>
                        <ul class="list-inline child_deptCont">
                           <li>
                              <h3><a href="./<?= $config['subFolderName'] ?>/storage">Elastic Volume Service </a></h3>
                              <p>Scalable virtual block-based storage for most of enterprise use cases</p>
                           </li>
                           <li>
                              <h3><a href="./<?= $config['subFolderName'] ?>/storage">Object Storage Service</a></h3>
                              <p>Highly reliable, and secure object storage capabilities at low cost</p>
                           </li>
                           <li>
                              <h3><a href="./<?= $config['subFolderName'] ?>/storage">Scalable File Service </a></h3>
                              <p>Fully managed hosting of sharable file storage (Linux File System)</p>
                           </li>
                        </ul>
                     </div>
                  </div>
               </li>
               <li class="dept-list-group eg-heiAuto">
                  <div class="dept-list">
                     <div class="grid_view">
                        <p class="plus_ico"><img src="./pi-cloud/images/Security.svg" alt="Security" /></p>
                        <h2> Cyber Security </h2>
                        <p class="hb-grHead"> Infra | End-point | Apps | Manage</p>
                     </div>
                     <div class="full-cont hwi">
                        <div class="dep-moreInfp">
                           <h2> Cyber Security & compliance </h2>
                           <p>Multiple layers of protection spread across the workloads, networks, programs, or data ..<a href="./<?= $config['subFolderName'] ?>/security">Learn More ></a></p>
                        </div>
                        <ul class="list-inline child_deptCont">
                           <li>
                              <h3><a href="./<?= $config['subFolderName'] ?>/security">Vulnerability Assessment & Penetration Testing </a></h3>
                              <p>Exploit vulnerabilities in a system to determine the flaws</p>
                           </li>
                           <li>
                              <h3><a href="./<?= $config['subFolderName'] ?>/security">Firewall as a Service</a></h3>
                              <p>URL filtering | IPS/IDS | DNS security | Anti-malware</p>
                           </li>
                           <li>
                              <h3><a href="./<?= $config['subFolderName'] ?>/security">Web Application Firewall</a></h3>
                              <p>Filters, monitors, and blocks HTTP traffic to and from a web application</p>
                           </li>
                           <li>
                              <h3><a href="./<?= $config['subFolderName'] ?>/security">SOC (SIEM-enabled) </a></h3>
                              <p>Aggregates and analyzes activity from network devices, servers etc</p>
                           </li>
                           <li>
                              <h3><a href="./<?= $config['subFolderName'] ?>/security">MicroVault & DataVault</a></h3>
                              <p>Protect data/processes on servers with active exfiltration protection</p>
                           </li>
                           <li>
                              <h3><a href="./<?= $config['subFolderName'] ?>/security">Identity & Access management</a></h3>
                              <p>Least-privileged permissions for actions across enterprise resources</p>
                           </li>
                           <li>
                              <h3><a href="./<?= $config['subFolderName'] ?>/security">Anti-DDoS</a></h3>
                              <p>Mitigate from perpetrators who seek to make a systems resource unavailable</p>
                           </li>
                           <li>
                              <h3><a href="./<?= $config['subFolderName'] ?>/security">Anti-virus</a></h3>
                              <p>Next generation anti-malware software for enterprise systems</p>
                           </li>
                        </ul>
                     </div>
                  </div>
               </li>
               <!--<li class="dept-list-group eg-heiAuto">
                  <div class="dept-list">
                     <div class="grid_view">
                        <p class="plus_ico"><img src="./pi-cloud/images/SAP.svg" alt="SAP"/></p>
                        <h2>SAP on Cloud</h2>
                        <p class="hb-grHead">  Infra | HANA | Support </p>
                     </div>
                     <div class="full-cont hwi">
                        <div class="dep-moreInfp">
                           <h2>SAP on Cloud </h2>
                           <p>Connect cloud and on-premises infrastructure and services to provide enterprise customers and users the best possible experience.. <a href="./<?= $config['subFolderName'] ?>/sap">Learn More ></a></p>
                        </div>
                        <ul class="list-inline child_deptCont">
                          <li>
                                                <h3><a href="./<?= $config['subFolderName'] ?>/sap">HANA</a></h3>
                                                <p>Next generation database for enterprise mission critical workloads</p>
                                             </li>
                                             <li>
                                                <h3><a href="./<?= $config['subFolderName'] ?>/sap">S4HANA</a></h3>
                                                <p>Future-ready Enterprise Resource Planning (ERP) system </p>
                                             </li>
                                              <li>
                                                <h3><a href="./<?= $config['subFolderName'] ?>/sap">Fiori</a></h3>
                                                <p>Set of tools and guidelines to create apps for any platform faster than ever</p>
                                             </li>
                                              <li>
                                                <h3><a href="./<?= $config['subFolderName'] ?>/sap">B4HANA</a></h3>
                                                <p>Net generation Business Warehouse(BW) on HANA</p>
                                             </li>
                                              <li>
                                                <h3><a href="./<?= $config['subFolderName'] ?>/sap">ERP Central Component (ECC)</a></h3>
                                                <p>ERP central component on HANA / DB2 / Oracle / ASE / MSSQL</p>
                                             </li>
                                              <li>
                                                <h3><a href="./<?= $config['subFolderName'] ?>/sap">SAP Business One</a></h3>
                                                <p>Business management software designed for small and medium-sized enterprises</p>
                                             </li>
                                              <li>
                                                <h3><a href="./<?= $config['subFolderName'] ?>/sap">Solution Manager</a></h3>
                                                <p>End-to-end application lifecycle management to streamline business processes</p>
                                             </li>
                                              <li>
                                                <h3><a href="./<?= $config['subFolderName'] ?>/sap">PI/PO, BI/BW, SCM, CRM, DMS</a></h3>
                                                <p>Explore other SAP solutions on Pi Cloud<sup></sup> to transform enterprise business</p>
                                             </li>
                        </ul>
                     </div>
                  </div>
               </li>-->
               <li class="dept-list-group eg-heiAuto">
                  <div class="dept-list">
                     <div class="grid_view">
                        <p class="plus_ico"><img src="./pi-cloud/images/BCP.svg" alt="BCP" /></p>
                        <h2>Business Continuity </h2>
                        <p class="hb-grHead"> HA | DR | People | Processes </p>
                     </div>
                     <div class="full-cont hwi">
                        <div class="dep-moreInfp">
                           <h2>Business Continuity</h2>
                           <p>Ensure enterprise workloads are safe from various cyber and physical threats and are up and running all the time..<a href="./<?= $config['subFolderName'] ?>/business-continuity">Learn More ></a></p>
                        </div>
                        <ul class="list-inline child_deptCont">
                           <li>
                              <h3><a href="./<?= $config['subFolderName'] ?>/business-continuity">Disaster Recovery</a></h3>
                              <p>Keep enterprise business running in times of Man-made or natural Disasters</p>
                           </li>
                           <li>
                              <h3><a href="./<?= $config['subFolderName'] ?>/business-continuity">Backup</a></h3>
                              <p>Incremental backup solution to restore the original after a data loss event</p>
                           </li>
                           <li>
                              <h3><a href="./<?= $config['subFolderName'] ?>/business-continuity">High Availability</a></h3>
                              <p>Scalable virtual block storage based on a distributed architecture</p>
                           </li>
                        </ul>
                     </div>
                  </div>
               </li>
               <li class="dept-list-group eg-heiAuto">
                  <div class="dept-list">
                     <div class="grid_view">
                        <p class="plus_ico"><img src="./pi-cloud/images/DevOps.svg" alt="DevOps" /></p>
                        <h2>DevOps </h2>
                        <p class="hb-grHead"> HA | DR | People | Processes </p>
                     </div>
                     <div class="full-cont hwi">
                        <div class="dep-moreInfp">
                           <h2>DevOps</h2>
                           <p>Get secure, massively scalable cloud storage for enterprise data, apps, and workloads..<a href="./<?= $config['subFolderName'] ?>/devops">Learn More ></a></p>
                        </div>
                        <ul class="list-inline child_deptCont">
                           <li>
                              <h3> <a href="./<?= $config['subFolderName'] ?>/devops">Continuous Integration</a></h3>
                              <p>For developers to merge and integrate their code changes into central repository, real-time</p>
                           </li>
                           <li>
                              <h3> <a href="./<?= $config['subFolderName'] ?>/devops">Continuous Delivery</a></h3>
                              <p>Code changes are automatically built, tested, and prepared for production releases</p>
                           </li>
                           <li>
                              <h3> <a href="./<?= $config['subFolderName'] ?>/devops">Microservices</a></h3>
                              <p>Design approach to build single application, as set of small services</p>
                           </li>
                           <li>
                              <h3> <a href="./<?= $config['subFolderName'] ?>/devops">Infrastructure as Code</a></h3>
                              <p>Infrastructure is provisioned and managed through code minimizing manual interventions and errors</p>
                           </li>
                           <li>
                              <h3> <a href="./<?= $config['subFolderName'] ?>/devops">Monitoring & Logging</a></h3>
                              <p>Monitor logs and metrics to track applications and infrastructure performance</p>
                           </li>
                           <li>
                              <h3> <a href="./<?= $config['subFolderName'] ?>/devops">Communication & Collaboration</a></h3>
                              <p>Bringing together the workflows and responsibilities of development and operations</p>
                           </li>
                        </ul>
                     </div>
                  </div>
               </li>
               <li class="dept-list-group eg-heiAuto">
                  <div class="dept-list">
                     <div class="grid_view">
                        <p class="plus_ico"><img src="./pi-cloud/images/EUC.svg" alt="EUC" /></p>
                        <h2>End User Computing </h2>
                        <p class="hb-grHead"> VDI | Secure Access | Thin-clients </p>
                     </div>
                     <div class="full-cont hwi">
                        <div class="dep-moreInfp">
                           <h2>End user computing</h2>
                           <p>Virtual desktop infrastructure & application streaming through secured access ..<a href="./<?= $config['subFolderName'] ?>/endusercomputing">Learn More ></a></p>
                        </div>
                        <ul class="list-inline child_deptCont">
                           <li>
                              <h3><a href="./<?= $config['subFolderName'] ?>/endusercomputing">Workspaces</a></h3>
                              <p>Enables businesses to consolidate desktops in data center</p>
                           </li>
                           <li>
                              <h3><a href="./<?= $config['subFolderName'] ?>/endusercomputing">App Streaming</a></h3>
                              <p>Stream desktop application to a browser and deliver better experience to enterprise users</p>
                           </li>
                           <li>
                              <h3><a href="./<?= $config['subFolderName'] ?>/endusercomputing">Remote Access Gateway </a></h3>
                              <p>Enterprise mobility and secure access from any device working on any network</p>
                           </li>
                        </ul>
                     </div>
                  </div>
               </li>
            </ul>
         </div>
      </div>
      </li>
      </ul>
   </div>
</div>
</div>
</div>
<!--       **************Footer*************-->
<?php
include_once('includes/footer.php');
?>