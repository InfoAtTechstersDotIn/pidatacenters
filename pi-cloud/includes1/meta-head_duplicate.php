<?php

$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$domain_addr = "https://harbour1.in";
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
                $m_title = "Harbour1Â®-The enterprise cloud platform | Harbour1Â® @ The Edge";
                $m_desc = "Harbour1 India's first enterprise cloud, mirrors innovation, & thought re-engineering, backed by relentless industry research & technology assimilations. A one stop shop with an array of products & services to meet enterprise business needs. Know more here";
                $m_keywords = "harbour1 the edge,harbour1,best harbour1 solution, harbour1 edge in india,harbour1 edge.";
                 break;
            
            case "products-home":
                $m_title = "Products Harbour1- Compute, Network, Storage, Cyber Security & more";
                $m_desc = "Platform agnostic product stack on Harbour1 is designed and developed keeping in mind the business challenges faced by enterprises. Compute, Network, Storage, Cyber Security, SAP on Cloud, Business Continuity, DevOps, End User Computing & more.";
                $m_keywords="hybrid edge computing,content delivery network,Cloud Technology Service";
                break;
            
            case "compute":
                $m_title = "Best Cloud Edge Computing in India- Harbour1 | Cloud Computing Services";
                $m_desc = "Our Cloud Computing Services manage your IT infrastructure. Instead of investing into building your IT infrastructure grounds up and hassling through the maintenance of it, accelerate your digital transformation with high-performance Compute on Harbour1";
                $m_keywords="Cloud at the edge computing, Best cloud edge computing in india";
                break;
            
            case "network":
                $m_title = "Network Service Provider | Harbour1 For Networking and Cyber Security";
                $m_desc = "Bridge the gap between your business & IT. Explore our cloud networking and cyber security products and solutions Address your growing infrastructure needs, regional expansions, and redundancy plans with Harbour1, the top network service provider. ";
                $m_keywords="networking and cyber security,Network service provider,Top network service provider In india";
                break;    

            case "storage":
                $m_title = "Cloud Storage Solutions | Harbour1- The Best Cloud Storage Service Provider";
                $m_desc = "Transform your business with Cloud Storage Solutions on Harbour1. The best cloud storage service provider presents varied storage formats to hold, organize and present data with objective driven distinct features and capabilities.";
                $m_keywords="cloud storage solutions ,cloud storage service provider,best cloud storage";
                break;
            
            case "security":
                $m_title = "Cyber security | Products | Harbour1Â®";
                $m_desc = "In today's connected world, cyber attacks are occurring once in every 14 seconds. With more connected devices in this world than people, there is an increased reliance on the internet, wireless network standards, smart devices and IoT. ";
                break;

            case "saponcloud":
                $m_title = "SAP | Products | Harbour1®";
                $m_desc = ". It won't be an exaggeration to say that multi layered cyber security mechanisms and skilled experts are the last line of defense, for digital data assets of enterprises. I";
                break;
            
            case "business-continuity":
                $m_title = "Business Continuity by Harbour1 | Security & Prevention from Data Disasters";
                $m_desc = "Harbour1 protects you from disruptions, data loss & consequently loss of revenue. With business continuity on Harbour1®, enterprises can ensure that adverse effects on their business runtime are minimalistic and they get to return to full operational state in no time. ";
		$m_keywords = "Custom Deployment, Low Business Risk,DR Drills in Telanaga,business continuity in Telangana.";
                break;

            case "devops":
                $m_title = "Development & Operations by Harbour1 | CI, CD, Microservices and more";
                $m_desc = "Harbour1 offers Continuous Integration(CI), Continuous Delivery(CD), Microservices, Infrastructure as Code, Monitoring & logging, Communication & Collaboration services in Hyderabad for an optimized business processing experience.;";
		$m_keywords = "Continuous Integration(CI),Continuous Delivery(CD) in hyderabad,Microservices,Infrastructure as Code, Monitoring and Logging, Communication and Collaboration.";
                break;
            
            case "endusercomputing":
                $m_title = "Remote Workplaces by Harbour1 | Work anytime, anywhere on any device";
                $m_desc = "End User Computing services on Harbour1®, offers managed Virtual Desktop Infrastructure(VDI) environment on cloud, enabling users to work anytime, anywhere and on any device. Get seamless remote access to your workstation today. ";
		$m_keywords = "Workspace Streaming, Remote Access, endusercomputing, Remote & mobile workforce, Regulatory Compliance, Secure Access to Workspace.";
                break;

            case "partners":
                $m_title = "Pi Partner Program - Harbour1 | Partner with us to maximise your advantage";
                $m_desc = "Partner up with us and explore the latest innovation, experiencing the benefits of cloud based data storage & networks. Gain the best advantages with the leading Content Delivery Network in India! Be a Harbour1 partner today!"; 
		$m_keywords = "Partners, best partners In Telangana, harbour1 Partners, unique Harbour1 partners.";
                break;
				
	    case "partner-register":
                $m_title = "Pi Partner Registration - Harbour1 | Partner Up, Progress & Profit with us";
                $m_desc = "The Pi Partner Program gives you a new prospect of growth along with the ever growing data center leader in India. We expand your horizons to help you become industry leaders in your own fields. Join the leading Data Center to optimize your business process"; 
		$m_keywords = "Partner register, partner login, best partner registers, partner resisters in Telangana.";
                break;
            
            case "industry-solutions":
                $m_title = "Industry Solutions By Harbour1 | Customised Solutions To Suit Business Needs";
                $m_desc = "Solve your toughest enterprise challenges irrespective of your industry, organisation type and location with our best Industry Solutions. Harbour1- The best industry solutions provider.";
                $m_keywords="harbour industries solutions , industries solutions";
                break;



            case "404":
                $m_title = "Page Not Found Harbour1Â®";
                $m_desc = "The URL or its content (such as files or images) was either deleted or moved (without adjusting any internal links accordingly)";
                break;
            
            case "sap":
                $m_title = "SAP Certified Solutions by Harbour1 | Comprehensive Solutions across Industries";
                $m_desc = " Enable digital transformation across your enterprise, for smooth and secured operation of business-critical processes. Harbour1® offers SAP solutions to assess, migrate, run & optimize SAP workloads. Certified by SAP to host and operate critical enterprise workloads at scale.";
                $m_keywords = "Sap, Systems Applications & Products,sap1, sap certified company in Hyderabad, sap certified in hosting operations.";
				break;

            case "ip-exchange":
                $m_title = "IP Exchange Services - Harbour1 | Internet Exchange with End to End Design.";
                $m_desc = " Improved network speeds, security & efficiency with End to End design by the leading Enterprise Cloud Platform in India. Internet Exchange-enabled services for fast & secure IP Exchange via IP based Network-to-Network Exchange.";
		$m_keywords = "Ip exchange service providers, Ip exchange service in Telangana, Ip exchange service, Ip exchange provider.";
                break;

            case "videos":
                $m_title = "Videos - Harbour1 | India's First Indigenous CDN";
                $m_desc = "Hear from the CEO and many innovators about the migration to cloud based services. Change the way you think about data with CEO Talks about the spread of Cloud Services in enteprises & government services alike.";
		$m_keywords = "videos,ceo videos,harbour1 videos, harbour1 videos in Hyderabad,Ceo harbour1 video in Telangana.";
                break;


             case "contact-us":
                $m_title = "Contact Us - Harbour1 | Speak to a CDN expert & solve your requirements today";
                $m_desc = " Contact us at Harbour1, speak to us for solutions in cloud data storage, management & networking. Be a part of India's 1st Indigenous Content Delivery Network Today! Optimize your business processes & be a part of the future with cloud networking. ";
		$m_keywords = "Contact us, best contact us in Hyderabad, contact us forum";
                break;

	    case "managed-services":
                $m_title = " Cloud Management by Harbour1 | Let us manage your cloud requirements";
                $m_desc = " Cloud Enablement Services on Harbour1® takes care of end to end cloud adoption, migration and management, allowing enterprises to focus on their core. With the shift to cloud data, managing the new data ecosystem gets more challenging. We are here to help. ";
		$m_keywords = "managed service, managaed service,Cloud Migration service In Telangana,best managed service providers.";
                break;

           case "case-studies":
                $m_title = " Case Studies - Harbour1 | Know the impact of cloud services in Industries";
                $m_desc = "Case studies dealing with the impact of cloud based services on large scale Industries, Cloud migration to Harbour1. The impact of Wifi on Cloud in e-learning & education enterprises in Telangana, India";
		$m_keywords ="simple case-studies ,case-studies, harbour1 case-studies center, harbour1 case-studies center in Telangana.";
                break;

            case "news":
                $m_title = " News - Harbour1 | Catch the latest updates first from our channels now!";
                $m_desc = " The latest news with regular updates about Harbour1, the first Indigenous Content Delivery Network, with blazing fast speeds, multi-tiered security and lowest costs across India. The best and first network of its kind!";
		$m_keywords = " News,Harbour1 news,best harbour1 news,harbour1 news in Telangana.";
                break;
				
	   case "testimonials":
                $m_title = " Testimonials - Harbour1 | India's First Indigenous CDN ";
                $m_desc = " Hear from the users of India's 1st Content Delivery Network(CDN). Hear all about the impact of Harbour1 on enterprise-scale businesses throughout the country. For optimized business processes, communication & much more! Get Harbour1 to streamline your business today!";
		$m_keywords ="testimonials,Harbour1 testimonials,best testimonials in Hyderabad,Harbour1 testimonials";
                break;




            case "blogs":
                $m_title = "Blog - Harbour1 | Latest Knowledge on Data Storage & Security";
                $m_desc = "The latest information & topics in the world of Data storage, management, security & more. Get to know the trending topics in the world with regular updates on cloud storage services & general tech updates.";
		$m_keywords = "Blog,best harbour1 blogs in telangana ,knowledge blogs,harbour1 knowledge blog in Telangana.";
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
                $m_title = "Harbour1Â®";
                $m_desc = "In today's digital-driven economy, cloud services have assumed significance for right reasons. With enterprises focusing on to their core and emphasizing on quicker time to market, the need for flexibility in access, scalability in capacity, agility in performance, business continuity and cost efficiency, are rightly addressed by adoption of cloud-native strategies.";
                break; 
        }

      ?>