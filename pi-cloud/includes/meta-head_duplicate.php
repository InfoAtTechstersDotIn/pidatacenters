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
                $m_title = "pi-cloudÂ®-The enterprise cloud platform | pi-cloudÂ® @ The Edge";
                $m_desc = "pi-cloud India's first enterprise cloud, mirrors innovation, & thought re-engineering, backed by relentless industry research & technology assimilations. A one stop shop with an array of products & services to meet enterprise business needs. Know more here";
                $m_keywords = "pi-cloud the edge,pi-cloud,best pi-cloud solution, pi-cloud edge in india,pi-cloud edge.";
                 break;
            
            case "products-home":
                $m_title = "Products pi-cloud- Compute, Network, Storage, Cyber Security & more";
                $m_desc = "Platform agnostic product stack on pi-cloud is designed and developed keeping in mind the business challenges faced by enterprises. Compute, Network, Storage, Cyber Security, SAP on Cloud, Business Continuity, DevOps, End User Computing & more.";
                $m_keywords="hybrid edge computing,content delivery network,Cloud Technology Service";
                break;
            
            case "compute":
                $m_title = "Best Cloud Edge Computing in India- pi-cloud | Cloud Computing Services";
                $m_desc = "Our Cloud Computing Services manage your IT infrastructure. Instead of investing into building your IT infrastructure grounds up and hassling through the maintenance of it, accelerate your digital transformation with high-performance Compute on pi-cloud";
                $m_keywords="Cloud at the edge computing, Best cloud edge computing in india";
                break;
            
            case "network":
                $m_title = "Network Service Provider | pi-cloud For Networking and Cyber Security";
                $m_desc = "Bridge the gap between your business & IT. Explore our cloud networking and cyber security products and solutions Address your growing infrastructure needs, regional expansions, and redundancy plans with pi-cloud, the top network service provider. ";
                $m_keywords="networking and cyber security,Network service provider,Top network service provider In india";
                break;    

            case "storage":
                $m_title = "Cloud Storage Solutions | pi-cloud- The Best Cloud Storage Service Provider";
                $m_desc = "Transform your business with Cloud Storage Solutions on pi-cloud. The best cloud storage service provider presents varied storage formats to hold, organize and present data with objective driven distinct features and capabilities.";
                $m_keywords="cloud storage solutions ,cloud storage service provider,best cloud storage";
                break;
            
            case "security":
                $m_title = "Cyber security | Products | pi-cloudÂ®";
                $m_desc = "In today's connected world, cyber attacks are occurring once in every 14 seconds. With more connected devices in this world than people, there is an increased reliance on the internet, wireless network standards, smart devices and IoT. ";
                break;

            case "saponcloud":
                $m_title = "SAP | Products | pi-cloud®";
                $m_desc = ". It won't be an exaggeration to say that multi layered cyber security mechanisms and skilled experts are the last line of defense, for digital data assets of enterprises. I";
                break;
            
            case "business-continuity":
                $m_title = "Business Continuity by pi-cloud | Security & Prevention from Data Disasters";
                $m_desc = "pi-cloud protects you from disruptions, data loss & consequently loss of revenue. With business continuity on pi-cloud®, enterprises can ensure that adverse effects on their business runtime are minimalistic and they get to return to full operational state in no time. ";
		$m_keywords = "Custom Deployment, Low Business Risk,DR Drills in Telanaga,business continuity in Telangana.";
                break;

            case "devops":
                $m_title = "Development & Operations by pi-cloud | CI, CD, Microservices and more";
                $m_desc = "pi-cloud offers Continuous Integration(CI), Continuous Delivery(CD), Microservices, Infrastructure as Code, Monitoring & logging, Communication & Collaboration services in Hyderabad for an optimized business processing experience.;";
		$m_keywords = "Continuous Integration(CI),Continuous Delivery(CD) in hyderabad,Microservices,Infrastructure as Code, Monitoring and Logging, Communication and Collaboration.";
                break;
            
            case "endusercomputing":
                $m_title = "Remote Workplaces by pi-cloud | Work anytime, anywhere on any device";
                $m_desc = "End User Computing services on pi-cloud®, offers managed Virtual Desktop Infrastructure(VDI) environment on cloud, enabling users to work anytime, anywhere and on any device. Get seamless remote access to your workstation today. ";
		$m_keywords = "Workspace Streaming, Remote Access, endusercomputing, Remote & mobile workforce, Regulatory Compliance, Secure Access to Workspace.";
                break;

            case "partners":
                $m_title = "Pi Partner Program - pi-cloud | Partner with us to maximise your advantage";
                $m_desc = "Partner up with us and explore the latest innovation, experiencing the benefits of cloud based data storage & networks. Gain the best advantages with the leading Content Delivery Network in India! Be a pi-cloud partner today!"; 
		$m_keywords = "Partners, best partners In Telangana, pi-cloud Partners, unique pi-cloud partners.";
                break;
				
	    case "partner-register":
                $m_title = "Pi Partner Registration - pi-cloud | Partner Up, Progress & Profit with us";
                $m_desc = "The Pi Partner Program gives you a new prospect of growth along with the ever growing data center leader in India. We expand your horizons to help you become industry leaders in your own fields. Join the leading Data Center to optimize your business process"; 
		$m_keywords = "Partner register, partner login, best partner registers, partner resisters in Telangana.";
                break;
            
            case "industry-solutions":
                $m_title = "Industry Solutions By pi-cloud | Customised Solutions To Suit Business Needs";
                $m_desc = "Solve your toughest enterprise challenges irrespective of your industry, organisation type and location with our best Industry Solutions. pi-cloud- The best industry solutions provider.";
                $m_keywords="harbour industries solutions , industries solutions";
                break;



            case "404":
                $m_title = "Page Not Found pi-cloudÂ®";
                $m_desc = "The URL or its content (such as files or images) was either deleted or moved (without adjusting any internal links accordingly)";
                break;
            
            case "sap":
                $m_title = "SAP Certified Solutions by pi-cloud | Comprehensive Solutions across Industries";
                $m_desc = " Enable digital transformation across your enterprise, for smooth and secured operation of business-critical processes. pi-cloud® offers SAP solutions to assess, migrate, run & optimize SAP workloads. Certified by SAP to host and operate critical enterprise workloads at scale.";
                $m_keywords = "Sap, Systems Applications & Products,sap1, sap certified company in Hyderabad, sap certified in hosting operations.";
				break;

            case "ip-exchange":
                $m_title = "IP Exchange Services - pi-cloud | Internet Exchange with End to End Design.";
                $m_desc = " Improved network speeds, security & efficiency with End to End design by the leading Enterprise Cloud Platform in India. Internet Exchange-enabled services for fast & secure IP Exchange via IP based Network-to-Network Exchange.";
		$m_keywords = "Ip exchange service providers, Ip exchange service in Telangana, Ip exchange service, Ip exchange provider.";
                break;

            case "videos":
                $m_title = "Videos - pi-cloud | India's First Indigenous CDN";
                $m_desc = "Hear from the CEO and many innovators about the migration to cloud based services. Change the way you think about data with CEO Talks about the spread of Cloud Services in enteprises & government services alike.";
		$m_keywords = "videos,ceo videos,pi-cloud videos, pi-cloud videos in Hyderabad,Ceo pi-cloud video in Telangana.";
                break;


             case "contact-us":
                $m_title = "Contact Us - pi-cloud | Speak to a CDN expert & solve your requirements today";
                $m_desc = " Contact us at pi-cloud, speak to us for solutions in cloud data storage, management & networking. Be a part of India's 1st Indigenous Content Delivery Network Today! Optimize your business processes & be a part of the future with cloud networking. ";
		$m_keywords = "Contact us, best contact us in Hyderabad, contact us forum";
                break;

	    case "managed-services":
                $m_title = " Cloud Management by pi-cloud | Let us manage your cloud requirements";
                $m_desc = " Cloud Enablement Services on pi-cloud® takes care of end to end cloud adoption, migration and management, allowing enterprises to focus on their core. With the shift to cloud data, managing the new data ecosystem gets more challenging. We are here to help. ";
		$m_keywords = "managed service, managaed service,Cloud Migration service In Telangana,best managed service providers.";
                break;

           case "case-studies":
                $m_title = " Case Studies - pi-cloud | Know the impact of cloud services in Industries";
                $m_desc = "Case studies dealing with the impact of cloud based services on large scale Industries, Cloud migration to pi-cloud. The impact of Wifi on Cloud in e-learning & education enterprises in Telangana, India";
		$m_keywords ="simple case-studies ,case-studies, pi-cloud case-studies center, pi-cloud case-studies center in Telangana.";
                break;

            case "news":
                $m_title = " News - pi-cloud | Catch the latest updates first from our channels now!";
                $m_desc = " The latest news with regular updates about pi-cloud, the first Indigenous Content Delivery Network, with blazing fast speeds, multi-tiered security and lowest costs across India. The best and first network of its kind!";
		$m_keywords = " News,pi-cloud news,best pi-cloud news,pi-cloud news in Telangana.";
                break;
				
	   case "testimonials":
                $m_title = " Testimonials - pi-cloud | India's First Indigenous CDN ";
                $m_desc = " Hear from the users of India's 1st Content Delivery Network(CDN). Hear all about the impact of pi-cloud on enterprise-scale businesses throughout the country. For optimized business processes, communication & much more! Get pi-cloud to streamline your business today!";
		$m_keywords ="testimonials,pi-cloud testimonials,best testimonials in Hyderabad,pi-cloud testimonials";
                break;




            case "blogs":
                $m_title = "Blog - pi-cloud | Latest Knowledge on Data Storage & Security";
                $m_desc = "The latest information & topics in the world of Data storage, management, security & more. Get to know the trending topics in the world with regular updates on cloud storage services & general tech updates.";
		$m_keywords = "Blog,best pi-cloud blogs in telangana ,knowledge blogs,pi-cloud knowledge blog in Telangana.";
                //$m_keywords = $post["keywords"];
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
                $m_title = "pi-cloudÂ®";
                $m_desc = "In today's digital-driven economy, cloud services have assumed significance for right reasons. With enterprises focusing on to their core and emphasizing on quicker time to market, the need for flexibility in access, scalability in capacity, agility in performance, business continuity and cost efficiency, are rightly addressed by adoption of cloud-native strategies.";
                break; 
        }

      ?>