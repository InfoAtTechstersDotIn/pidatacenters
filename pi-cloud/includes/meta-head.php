<?php

$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$domain_addr = "https://pi-cloud.in";
$meta_url = $domain_addr.$uri_path;
//print_r($meta_url);exit;
$uri_segments = explode('/', $uri_path);
//echo  $uri_segments[1];
//$uri_seg = $uri_segments[2];
$uri_seg = $uri_segments[1];
$m_thumb = "";
//echo $uri_seg;
        switch($uri_seg){
            case "":
                $m_title = "Harbour 1 &#174; - The Multi-Cloud Ecosystem";
                $m_desc = "Harbour 1 &#174; India�s first enterprise cloud and now a Multi-Cloud ecosystem, mirrors innovation, & thought re-engineering, backed by relentless industry research & technology assimilations.";
                $m_keywords = "Pi-Cloud the edge,Pi-Cloud,best Pi-Cloud solution, Pi-Cloud edge  in india,Pi-Cloud edge, Software defined";
                 break;
            
            case "products-home":
                $m_title = "Products Pi-Cloud Compute, ECS, Network, Storage, Cyber Security & More";
                $m_desc = "Platform agnostic product stack on Pi-Cloud is designed & developed keeping in mind the business challenges faced by enterprises. Compute(ECS), Network, Storage, Cyber Security,SAP on Cloud, Disaster Recovery(DR), Business Continuity(BCP), End User Computing & more.";
                $m_keywords="Cloud, ECS, Cyber sercurity service,Cyber Security & Scalable for e-commerce in India,cyber security services in India,business continuity service in India,business continuity service, DR, Disaster Recovery, BCP";
                break;
            
            case "compute":
                $m_title = "Best Enterpise Cloud Provider In India- Pi-Cloud | Edge Cloud Computing";
                $m_desc = "Our Cloud services deliver realtime compute for your businesses to run undisrupted.Instead of investing into building your IT infrastructure grounds up & hassling through the maintenance of it, accelerate your high-performance digital transformation with pi-cloud®.";
                $m_keywords="Cloud at the edge, Edge computing, Best cloud edge computing in india, Best cloud service provider in India, cloud edge,cloud computing service";
                break;
            
            case "network":
                $m_title = "Network Service Provider | Pi-Cloud For Networking And Cyber Security";
                $m_desc = "Bridge the gap between your business & IT. Explore our cloud networking and cyber security products and solutions
				Address your growing infrastructure needs, regional expansions, and redundancy plans with Pi-Cloud, the top network service provider on cloud.";
                $m_keywords="networking and cyber security,Network service provider,Top network service provider In india,best cloud network service in Hyderabad,cloud networking service.";
                break;    

            case "storage":
                $m_title = "Cloud Storage Solutions | Pi-Cloud- The Best Cloud Storage Service Provider";
                $m_desc = "Transform your business with Cloud Storage Solutions on Pi-Cloud. Presenting enterprises the best in class cloud storage service, with varied storage formats to hold, organize and present data with objective driven distinct features and capabilities.";
                $m_keywords = "cloud storage solutions ,cloud storage service provider,best cloud storage,Best cloud storage providers in India, Best cloud storage providers in hyderabad,cloud storage providers, Software defined storage";
                break;
            
            case "security":
                $m_title = "Cyber Security | Products | Pi-Cloud";
                $m_desc = "In today's connected world, cyber attacks are occurring once in every 14 seconds. With more connected devices in this world than people, there is an increased reliance on the internet, wireless network standards, smart devices and IoT. ";
                break;

            case "saponcloud":
                $m_title = "SAP | Products | Pi-Cloud";
                $m_desc = ". It won't be an exaggeration to say that multi layered cyber security mechanisms and skilled experts are the last line of defense, for digital data assets of enterprises. I";
                break;
            
            case "business-continuity":
                $m_title = "Business Continuity On Pi-Cloud | Prevention From Unpredicted Disruptions";
                $m_desc = "Workloads on Pi-Cloud makes enterprises immune to business disruptions, data loss & loss of revenue. Its business continuity solutions assures, zero to minimilistic adverse effects on business runtime during disasters.Return to full operational state is seamless";
				$m_keywords = "Custom Deployment, Low Business Risk,DR Drills ,business continuity, BCP, Best Business Continuity service provider in India";
                break;

            case "devops":
                $m_title = "DevOps On Pi-Cloud | CI, CD, Microservices and More";
                $m_desc = "Pi-Cloud offers Continuous Integration(CI), Continuous Delivery(CD), Microservices, Infrastructure as Code, Monitoring & logging, Communication & Collaboration services on cloud for an optimized business processing experience.";
				$m_keywords = "Continuous Integration(CI),Continuous Delivery(CD) in hyderabad,Microservices,Infrastructure as Code, Monitoring and Logging, Communication and Collaboration, Cloud";
                break;
            
            case "endusercomputing":
                $m_title = "Remote Workspace On Pi-Cloud | Work Anytime, Anywhere On Any Device";
                $m_desc = "End User Computing services on Pi-Cloud, offers managed Virtual Desktop Infrastructure(VDI) environment on cloud, enabling users to work anytime, anywhere and on any device. Get seamless remote access to your workstation today.";
				$m_keywords = "Workspace Streaming, Remote Access, endusercomputing, Remote & mobile workforce, Regulatory Compliance, Secure Access to Workspace.";
                break;

            case "partners":
                $m_title = "Pi Partner Program - Pi-Cloud | Partner Us To Move Up The Client Value Chain";
                $m_desc = "Pi Partner Program enables partners to offer elaborate cloud & data center solution stack for clients.Flexible benefit plans to support & contribute to partner GTM strategy. Enabling partners to generate more business & higher profitablity.Be a Pi-Cloud partner today! ";
				$m_keywords = "Partners, best partner programe , Pi-Cloud Partners, unique Pi-Cloud partners, Registered Business Partner, Channel Partner, Reseller , Cloud Business";
                break;
            
            case "industry-solutions":
                $m_title = "Industry Solutions By Pi-Cloud | Customised Solutions To Suit Business Needs";
                $m_desc = "Pi-Cloud- The best industry cloud solutions provider.With our best in class Industry Cloud Solutions, now you can solve your toughest digital challenges, irrespective of your industry, organisation type and location. We make businesses win over business challenges";
                $m_keywords = "industry solutions , industries solutions, best Industry solutions In India, best Industry solution In India , community cloud, industry cloud solution, Meity";
                break;



            case "404":
                $m_title = "Page Not Found Pi-Cloud";
                $m_desc = "The URL or its content (such as files or images) was either deleted or moved (without adjusting any internal links accordingly)";
                break;
            
            case "sap":
                $m_title = "SAP Certified Cloud Solutions On Pi-Cloud | Host Your SAP Workloads On Cloud";
                $m_desc = "Pi-Cloud offers integrated SAP on cloud, solutions, to assess, migrate, run & optimize SAP workloads. The SAP certified cloud, hosts and operates critical enterprise workloads at scale to support your digital transformation";
				$m_keywords = "Sap, Systems Applications & Products,sapB1, sap certified company in Hyderabad, sap certified in hosting operations, SAP on cloud, SAP HANA, SAP certified cloud provider";
                break;

            case "ip-exchange":
                $m_title = "IP Exchange Services - Pi-Cloud | Internet Exchange With End To End Design";
                $m_desc = " Improved network speeds, security & efficiency with End to End design by the leading Enterprise Cloud Platform in India. Internet Exchange-enabled services for fast & secure IP Exchange via IP based Network-to-Network Exchange.";
				$m_keywords = "Ip exchange service providers, Ip exchange service in Telangana, Ip exchange service, Ip exchange provider.";
                break;

            case "videos":
                $m_title = "Videos - Pi-Cloud | Interesting Technology & Trends Videos For You";
                $m_desc = "Hear business leaders and innovators talk on varied topics, touching every walk of our professional and personal lives";
				$m_keywords = "videos,ceo videos,Pi-Cloud videos, Pi-Cloud videos in Hyderabad,Indian CEO , Indian CEOs,  CEO Talks, Tech Videos in India";
                break;


             case "contact-us":
                $m_title = "Contact Us - Pi-Cloud | We Would Love To Head From You";
                $m_desc = "Contact us at Pi-Cloud, speak to us for solutions in cloud data storage, management & networking. Be a part of India's 1st Indigenous Content Delivery Network Today! Optimize your business processes & be a part of the future with cloud networking.";
				$m_keywords = "Contact us, best contact us in Hyderabad, contact us forum";
                break;


            case "managed-services":
                $m_title = "Cloud Enablement Services On Pi-Cloud | Making Cloud Adoption Seamless";
                $m_desc = "Cloud Enablement Services on Pi-Cloud, is an integrated stack of Managed Services & Professional Services. It takes care of end to end cloud adoption, migration & management. We make the shift to cloud and operate on cloud seamless. ";
				$m_keywords = "managed service, managaed service,Cloud Migration service In Telangana,best managed service providers, best managed service providers in India, best managed service provider in India , Professional services, Cloud migration";
                break;

           case "case-studies":
                $m_title = "Case Studies - Pi-Cloud | Enterprises Speak On Their Experience With Pi-Cloud";
                $m_desc = "Case studies dealing with the impact of cloud based services on large scale enterprises. Cloud migration to Pi-Cloud. The impact of next generation cloud services on  enterprises, across India & globally";
				$m_keywords = "simple case-studies ,case-studies, Pi-Cloud case studies center, Pi-Cloud case-studies center in Telangana, cloud case studies in India , TCO optimisation , Cloud migration, AWS , Azure , GCP, Google cloud";
                break;

            case "news":
                $m_title = " News - Pi-Cloud | Catch The Latest Updates First On Our Channels Now!";
                $m_desc = "The latest news with regular updates about Pi-Cloud, India's First Enterprise Cloud, with multi-tiered security, realtime provisioning and multi zone availability";
				$m_keywords = " News,pi-cloud® news,best Pi-Cloud news,Pi-Cloud news in Telangana. Tech News, News In India , Cloud News , Data Center News";
                break;




            case "blogs":
                $m_title = "Blog - Pi-Cloud | Latest Knowledge On Disruptive Technologies & Trends";
                $m_desc = "The latest information & topics from the world of People, Processes & Policies. Get to know the global trending topics along with regular snippnets on cloud trends & general tech updates.";
                $m_keywords = $post["keywords"];
                $m_thumb = $post["thumb"];
                break;
                
            case "blog-info":
                $m_title =  $post["metaTitle"];
                $m_desc = $post["metaDesc"];
                $m_keywords = $post["keywords"];
                $m_thumb = $post["thumb"];            
                break;
            
            case "news-info":
                $m_title =  $post["metaTitle"];
                $m_desc = $post["metaDesc"];
                $m_keywords = $post["keywords"];
                $m_thumb = $post["thumb"];
                break;

           

            default:
                $m_title = "pi-cloud®";
                $m_desc = "In today's digital-driven economy, cloud services have assumed significance for right reasons. With enterprises focusing on to their core and emphasizing on quicker time to market, the need for flexibility in access, scalability in capacity, agility in performance, business continuity and cost efficiency, are rightly addressed by adoption of cloud-native strategies.";
                break; 
        }

      ?>