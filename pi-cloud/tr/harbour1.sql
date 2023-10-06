-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jul 13, 2023 at 05:30 AM
-- Server version: 10.5.17-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `harbour1`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `detail`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Blogs', 'post page', '', '2021-03-23 01:41:18', '2021-03-25 05:52:39'),
(2, 'news', 'news category page', '', '2021-03-23 01:41:28', '2021-03-23 01:41:28'),
(3, 'case studies', 'case studies page category', '', '2021-03-23 01:41:39', '2021-03-23 01:41:39');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` bigint(20) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2021_03_02_155918_create_categories_table', 1),
(11, '2021_03_02_160409_create_posts_table', 1),
(12, '2021_03_02_160926_create_comments_table', 1),
(14, '2021_03_26_095252_add_keywords_to_posts__table', 2),
(15, '2021_03_29_063703_add_custom_date_to_posts_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('srikanth.komakula25@gmail.com', '$2y$10$9nhIw8DqejgawKrxGj5izOlTHFuBmXU0joSldlkKTKnX0LsYL3WhW', '2022-05-26 01:57:39');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `cat_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `metaTitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metaDesc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customDate` timestamp NULL DEFAULT NULL,
  `keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=703 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `cat_id`, `title`, `thumb`, `full_img`, `detail`, `tags`, `status`, `metaTitle`, `metaDesc`, `customDate`, `keywords`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '12 Reasons Why Enterprises Should Adopt Cloud…', 'Bhaskars-Blog-Post.jpg', 'Bhaskars-Blog-Post.jpg', '<p>Having spent the last couple of months with experts in the industry and talking to many customers, I thought I will make a humble attempt to put together a few points on why enterprises should adopt cloud on a robust infrastructure base of a professional Data Center. A dozen reasons for you to choose from!</p>\n\n<b>1. CapEx to OpEx</b>\n<p>With your infrastructure on the cloud, you are freed up from huge Capex spendings. You can now leverage the huge infrastructure available with cloud players and convert your spending to Opex with the desired frequency.</p>\n\n<b>2. Scale at Will</b>\n<p>You can start with your bare minimum requirement and scale up and down as per the need.  That’s the beauty of having your infrastructure on the cloud.  Keep your focus on scaling the business and your cloud provider will take care of scaling your infrastructure for your business.</p>\n\n<b>3. Pay As You Go (PAYG)</b>\n<p><a href="https://harbour1.in/">Cloud services</a> are offered in PAYG model where the users are charged based on their usage, perhaps hourly, per minute etc. You don’t have to lock yourself and pay for something you don’t need, and you don’t use. You are free to provision resources during peak time and de-provision it when it’s no more required. (eCommerce sites leverage this during holiday sales). Industry averages tell that across the globe, on-premise infrastructure utilization is around 15%, can you believe this!</p>\n\n<b>4. Time-To-Market</b>\n<p>With cloud computing, you can push your product or services quickly to the market. This is the time for you, to include “cloud first” in your “Go to market” strategy as it removes obstacles and lowers entry barriers irrespective of the scale of your business.</p>\n\n<b>5. Security</b>\n<p>There are multiple myths concerning the security of applications/data on the cloud. We have seen many enterprises suffering recently due to virus attacks in their own premises. Cloud operators today, take extra care in every possible form. By deploying various security measures at Network, Server levels and physical levels, they ensure that their customers’ data is highly and rightly secured.  While the fear of a CIO/CTO is understandable, it’s only the trust issue and not the technology issue!</p>\n\n<b>6. High Availability</b>\n<p><a href="https://harbour1.in/">Cloud technologies</a> and solutions are evolving every day ensuring real-time and high data availability round the clock & 365 days.  For example, Cloud Services deployed on Tier IV Datacenter commits 99.995% availability today.</p>\n\n<b>7. Disaster Recovery</b>\n<p>Most of the enterprises today, do not have a DR strategy, owing to costs and lack of knowledge. We have seen in the very recent past, losses suffered by organizations, for lack of a DR. Hence DR on the cloud, with the right cloud partner thus comes as an aid to you, to educate and design the right strategy for your business, at a significantly lower TCO.</p>\n\n<b>8. Leverage Technology</b>\n<p>With your infrastructure and applications hosted on the cloud, you are in the ecosystem where there is continuous innovation available on a click. Many technology advancements are taken care of and implemented by your cloud partner.</p>\n\n<b>9. Different Skills</b>\n<p>Easily you must have more than 10+ different skilled personnel to ensure you cover every part of your on-premise infrastructure.  This is again an overhead and productivity deterrent while you want to focus on your business and skills required to enhance your business.  The ease of operation of a cloud is significantly high when compared to an on-premise physical infrastructure.</p>\n\n<b>10. Multiple Vendors</b>\n<p>Can you imagine how many vendors you must deal in negotiations, ensuring SLA’s are met etc by having your infrastructure on-premise?  Easily 10+, do you want to do that instead of focussing on your business and leave everything to your cloud partner.</p>\n\n<b>11. Let The Experts Handle</b>\n<p>Most of the organizations have their own IT teams and they want to have their infrastructure in their own premises as they feel that they are capable of handling and are in control.  Yes, they are but the only element they miss out is the experience and the best practices that Cloud operators bring in by handling hundreds of customers day in day out.</p>  \n\n<b>12. Eco-Friendly</b>\n<p>Finally, there are enterprises who are looking to move to the cloud to have a tick-mark on being Eco-friendly and reduce the carbon footprint as Cloud servers are optimally used.  You can compare the PUE metric between your premise and cloud operator to see it for yourself.  If we must believe the research, moving all or part of a large organisation’s business to the cloud would lower the CO2 emissions by 3000 metric tonnes within 5 years, which is equivalent to 6000 cars off the road.</p>\n\n<p>\n<img src="https://harbour1.in/dashboard/public/imgs/Bhaskar-photo-compressor-300x300.jpg" style="width:150px;height:150px;"><br>\n \n\nWritten By<br>\n\nwhy enterprises should adopt cloud</br>\n\nBhaskar Vadlamani,</br>\n\nChief Customer Officer,<br>\n\nPi DATACENTERS<br>\n</p>\n\n<p>For media inquiries, please write to us at <a href="mail:marcom@pidatacenters.com">marcom@pidatacenters.com</a></p>', '', 1, '12 Reasons Why Enterprises Should Adopt Cloud…', NULL, '2017-11-17 18:30:00', NULL, NULL, NULL),
(2, 1, 1, 'What’s The Fuss (WTF), About This New WhatsApp Privacy Policy!!', '1616672056t.png', '1616672056m.png', '<p>Ok, so as we were moving closer to settling the score with COVID (hopefully the vaccine thing would work), I was thinking, what’snext getting the world’s attention …</p>\r\n\r\n<p>And BOOMMM!! We have WhatsApp and its data privacy fuss that gripped the world over night …</p>\r\n\r\n<p><b>So, What It’sAll About?</b></p>\r\n\r\n<p>A recent, WhatsApp privacy policy update got people into tizzy. The common translation wasthatWhatsApp, now a Facebook company, is going to give Facebook, the access to all our personal messages and Facebook can use it, the way they want for their business interest.</p>\r\n\r\n<p>Mind it, only European Union (EU) counties have been kept out of this newness…</p>\r\n\r\n<p>Interesting, isn’t it?</p>\r\n\r\n<p>I think we should give it to the GDPR (with hefty penalties), and how seriously it was implemented in EU. Others have some learning and catch up to do.</p>\r\n\r\n<p>So,let’s first get this thing correct. WhatsApp, as per declaration, uses end-to-end encryption (E2EE) to secure all messages on its platform. Its only the sender and receiver who can read the content of the messages. Facebook may still make use of data, like, who we are chatting to on WhatsApp and for how much time, our current location, preferred locations, where all do we visit frequently etc. Predominantly data that’s accessible through IP tracking.</p>\r\n\r\n<p>Make no mistake, Google, Microsoft,and many others, already have it …</p>\r\n\r\n<p>While WhatsApp or Facebook cannot read the messages, but if we are backingup our WhatsApp chats on other platforms, like a Google Drive, OneDrive or iCloud, there is no guarantee of encryption. And let’s be honest, we all have backed up our chats on those open platformsatsomeor the other point of time. Just that we did not realise the privacy thing till one, Mr Musk decided to release the cat amongst the pigeons. Putting in on only WhatsApp, might not be fair, by all means.</p>\r\n\r\n<p>Now let’s look at the sharing of financial information, mentioned in the policy. The financial informationto be shared is pertaining to WhatsApp Pay, the new in-app payment feature,that WhatsApp is bringing on (still a WIP). This is just like GPay or PayTM. It does not mean that Facebook is trying to hack into our bank accounts.Down the line, businesses would also be able to integrate WhatsApp chat through Facebook.  So, we can take a chill pill on this too.</p>\r\n\r\n<p><b>What’s Next ?</b></p>\r\n<p>It’stotally up to us, if we want to get off WhatsApp just because of this policy update and not because of the productive time we all waste on it,otherwise (I am myself no exception). If that’s so, then we should seriously contemplate exiting Facebook, all messengers and even Instagram too. Because they collect a lot more data than WhatsApp and way more personal ones.</p>\r\n\r\n<p>On any boring day, if you want to surprise yourself, you must not miss reading the Google privacy policy and decide whether you still want to use Google, in any form. Do not forget to grab your Coffee. You would need it for divine strength while you read. Go through the policies of all the apps that we use and treat yourself with theextent of data they have already collected about us. And they continue to do so, as you are reading this.</p>\r\n\r\n<p>It’sa hair line,that separates being privacy savvy and being paranoid, when not being online, is no more an option.</p>\r\n\r\n<p>If wewant the convenience of free applications, we need to be aware that we are paying with our data. <b>Nothing comes free!</b></p>', 'harbour1, Pi Datacenters', 1, 'What’s The Fuss (WTF), About This New WhatsApp Privacy Policy!!', 'Pi blogs act as a great source of information for the people who are interested to know the latest updates and trends in the data center and cloud industry"', '2021-01-21 18:30:00', '', '2021-03-25 06:04:16', '2021-05-05 01:01:15'),
(3, 1, 2, 'Pi unveils Harbour1® (Enterprise Cloud Platform @Pi®) at The BFSI Datacenter & Cloud summit ‘17', '1616748028t.jfif', '1616748028m.jfif', '<p><strong style="color: #7b7f85; font-family: Roboto, sans-serif; font-size: 16px; text-align: justify;"><em>Mumbai, March 2, 2017</em></strong><span style="color: #7b7f85; font-family: Roboto, sans-serif; font-size: 16px; text-align: justify;">&ndash; The BFSI Datacenter &amp; Cloud summit &lsquo;17 held in Mumbai, India attracted Cxo level participations &nbsp;&nbsp;from large BFSI enterprises, both from Public and Private sectors, along with the presence of Tech giants and data center &amp; cloud service providers. The role of datacenters and cloud in marveling the operational excellence and end user services for the BFSI industry has been the essence of the event.&nbsp; The conference staged multiple discussions between the industry leaders and the technology specialists around specific demands posed by BFSI industry.</span></p>\r\n<p style="margin: 0px; padding: 0px 0px 15px; font-size: 16px; color: #7b7f85; line-height: 28px; text-align: justify; font-family: Roboto, sans-serif;">Pi, in its role of a &nbsp;key partner at the summit, presented to the forum, it&rsquo;s ahead of the curve and industry solution stack. Their OpenStack-based Enterprise Class Cloud Platform Harbour1&nbsp;was unveiled to the industry in a glittering ceremony at the conference, by Mr. Kalyan Muppaneni, Founder &amp; CEO, Pi. As a part of the panel, Mr. Sunder Muthevi, Vice president Product Strategy and IT, addressed the major security concerns of BFSI fraternity and highlighted the right fit solutions offered by Pi, for the industry.</p>\r\n<p style="margin: 0px; padding: 0px 0px 15px; font-size: 16px; color: #7b7f85; line-height: 28px; text-align: justify; font-family: Roboto, sans-serif;">With the ever-evolving technology needs of BFSI industry, the event held a significance in bridging the gap between the industry, its evolving needs, and the enablers.</p>', 'harbour1, Pi Datacenters', 1, 'Pi unveils Harbour1® (Enterprise Cloud Platform @Pi®) at The BFSI Datacenter & Cloud summit ‘17', 'India’s first enterprise cloud, Harbour1® mirrors, innovation, and thought re-engineering, backed by relentless industry research and technology assimilations.', '2017-05-07 18:30:00', 'india', '2021-03-26 03:10:28', '2021-04-20 01:08:38'),
(4, 1, 3, 'Cloud Migration from Global Public Cloud Provider to Harbour1®', '1616751818t.png', 'case_1616751818.pdf', '<p>Cloud Migration from Global Public Cloud Provider to Harbour1&reg;</p>', 'harbour1, Pi Datacenters', 0, 'Cloud Migration from Global Public Cloud Provider to Harbour1®', 'Cloud Migration from Global Public Cloud Provider to Harbour1®', '2020-06-16 18:30:00', 'Cloud', '2021-03-26 04:13:38', '2021-03-29 01:34:12'),
(5, 1, 1, 'The World Before and After COVID', '0-1-2.png', '0-1-2.png', '<p>Our global home has witnessed innumerable historical milestones across the ages, spanning political upheavals and wars to epidemics and pandemics. From the oldest recorded Typhoid Epidemic in 430 BC Athens, a series of plagues between 165 AD and 541 AD, to Black Death in 1350, Cholera Pandemic in 1817, Spanish Flu in 1918 and the most recent ongoing COVID-19 pandemic, our planet has rolled <b>out wave after wave of adversities on its inhabitants.</b> From a political vantage point too, humankind has witnessed scores of battles for power, the most recent ones being the two World Wars and the 9/11 terror attack on the USA.</p>\n\n<p>If we were to travel from our planet’s Pre-Christ days to the modern 21st century, we would surely see how each event has had an impact on people in all aspects of life. From industrial revolutions to socio-economic transformations, <b>human beings have always adapted towards self-preservation.</b> Consider for example the G.I Generation of the early 1900s who lived through WW-I and WW-II. They have witnessed indescribable shifts in economy, livelihood, security, and lifestyle because of the devastating effects of two back-to-back wars. Especially after World War II, with the death of 4% (80 million) of the world’s 2 billion population, innumerable factories were destroyed in a bid to dismantle the economic viability of Europe and Asia. In fact, the aftermath of the Second World War is still impacting many peoples’ lives and political decisions around the globe, even though it is over 65 years to the day.</p>\n\n<p>Yet another dark day in world history, much closer to our present times, was the 9/11 Terror Attack on America in 2001. <b>That singular event has changed the world as we knew it forever.</b> Commerce, travel and tourism, and in particular, security and border surveillance became extremely stringent and rigid. New laws were made and implemented in a matter of days. Routine travel activities such as passenger screening at airports, immigration protocols were tightened overnight not only in America but in countries around the world.</p> \n\n<p>9/11 also witnessed <b>immense growth in technological evolution.</b> New laws and political legislatures were passed spanning business, commerce, banking, trade, travel, healthcare, and other occupational fields. As flesh-and-blood humans transformed into electronic profiles, newer more robust technologies that could ensure reliability, safety, and security of the digital world became the need of the hour. Billions of dollars were invested in the research and production of cutting-edge technologies like Machine Learning, Data Science, Automation, and Artificial Intelligence. And today if we are able to skim through arduous time-taking physical tasks with just the press of a button, a voice command, or the click of a mouse, we owe our thanks to not one but several such committed research initiatives. The world transitioned from manual screenings to fully automated Artificial Intelligence screening at airports and public places. </p>\n\n<p>Indeed, the world has undergone quite deep transformations in less than 100 years! So, wouldn’t it be worthwhile to ponder over the possible aftermaths of the ongoing COVID-19 pandemic, and the kind of world we might be stepping out into once this phase is just another page in history? COVID-19, which originated in December 2019 from China’s Wuhan City, has held the world in a paralytic embrace for over 4 months now. This air-borne life-threatening disease attacks only human beings thus discouraging us from coming into close contact with each other. As a result, places that require people to work in groups and communities are currently out of limits. <b>The modern mechanized human way of life has been brought to a standstill. </b></p>\n\n<p>For the first time in 100 years, COVID-19 has turned the world’s focus away from physical security due to criminal activities and terror attacks on human health in the face of <b>possible bio-warfare caused by an invisible micro-organism </b>– the Corona Virus. Human deaths aside, the impact of the novel COVID-19 is being felt across all socio-economic strata in all fields of life from travel and hospitality to e-commerce and entertainment. More than 100 countries have imposed travel restrictions on foreign visitors for business or pleasure. While the travel industry is the worst hit globally, the FMCG production industry is unable to meet consumer demands due to the dip in workforce attendance. Multinational Corporations in the IT, ITES, Finance, and other sectors have suspended all major business operations for an uncertain period of time.</p>\n\n<p>While it is true that the human community is still coming to terms with this new epidemic of historical significance, work is already in progress to dampen the consequences of the global lockdown. Once again, the world is turning to technology to devise more advanced features that can help businesses operate even in these despairing global conditions. New paradigms in Cloud Computing, stepping up AI, Machine Learning, and Cyber Security is happening as we speak in order to safeguard people’s health and ensure longevity.<b> New pathways are being channelized in the realm of cloud-based technologies,</b> which allows employees to work even in the absence of a physical workspace. Once again, billions of dollars will be invested to arrive on newer cloud solutions to combat future pandemics, epidemics in real-time</p>\n\n<p style="font-style:italic"><b>“The future is heading towards increasingly sustainable Cloud technologies that can power global economies and keep the wheels of human life running. Just as the world transitioned from manual activities to digital clicks post 9/11, the transition from modern physical technologies to advanced cloud-based virtual systems will be further accelerated post COVID-19.”</b></p>\n\n<p>So, why not use this lockdown period to <b>prepare for the future,</b> because when this pandemic is fully over, the future will already be here i.e. a new way of living, working, commuting and conducting business, with Cloud and Datacenters taking the center stage!!</p>\n\n<p>For media inquiries, please write to us at <a href="mail:marcom@pidatacenters.com">marcom@pidatacenters.com</a></p>', 'The World Before and After COVID', 1, 'The World Before and After COVID', 'The World Before and After COVID', '2021-04-17 18:30:00', NULL, NULL, NULL),
(6, 1, 1, 'ARTIFICIAL INTELLIGENCE IN DATCENTERS – THE WAY FORWARD', 'ceo-blog.png', 'ceo-blog.png', '<p>Datacenters have emerged as the lifeline for organizations when the 90s heralded a massive technology boom, spanning micro to macro businesses, across the globe. With the advent of technology-oriented businesses, came multi-layered data dependency. As new organizations demanded market space and existing ones expanded, a proportionate evolution of the need of data management, complete with hardware and software necessities, also grew. This new market trend beckoned innovative breakthroughs in the form of Internet of Things (IoT), Artificial Intelligence (AI), Blockchain, and others.</p>\n\n\n<p>But the best was yet to come. And it did, under cover of the novel Coronavirus. Covid-19 wrapped a stifling cloak over all business markets around the world, preventing people from physically assembling under one roof and, instead, locked them up at homes to work remotely. Companies developed new ways of conducting business both locally and globally, as consumers resorted to online buying and cashless transactions. This led to an unpredicted rise in data consumption, catalysed further by a plethora of interconnected devices and applications that came into the picture.</p>\n<p>If this was the early 90s, when datacenters were just large rooms filled with networked micro-computers, data management would have been a nightmarish disaster. Thankfully, datacenter infrastructure has adapted to the increasingly networked world of today. Therefore, we can expect more from technologically modern ambience, which boasts of application hosting, portable design, as well as power and cooling efficiency.</p>\n\n\n<b>Powering Datacentre Efficiency the AI / ML Way</b>\n<p>But there is more to this technological metamorphosis that’s perking up everybody’s interests. And there are just two words for it – Artificial Intelligence! In an age when AI is the popular answer to hundreds of domestic, industrial, and professional amenities, why shouldn’t datacentres be in the groove? In fact, business leaders will find it worthwhile if they rapidly align their corporate landscapes with the inescapable increase of data demands if they want to embrace the future profitably.</p>\n<p>AI is already re-defining datacentre management by factoring in new efficiencies in human effort, operations, workload distribution, and energy management, by using a clever combination of automation, machine learning, and predictive analysis.</p>\n\n\n<b>Artificial Intelligence and Human intelligence</b>\n<p>In their days of simplicity, even the most high-end datacentre could be run by just a few qualified professionals. But with the increased complexity in datacentre demands, datacentres must now allow an automated culture to take over. The reason for this is not human ineptitude, but so that professionals can invest their expertise in more demanding activities of DC management. Automation also allows companies to cut down on their staffing requirements and invest human resources in other areas. While AI can be used in automation, human intelligence can be used in R&D and, in times like Covid, human dependency can be curbed without sacrificing efficiency. Also, AI can then take centre stage in DC management where human resources are limited.</p>\n\n\n<b>Overcoming Operational Unpredictability</b>\n<p>Downtime – a word which spells customer dissatisfaction; loss of revenue, credibility and reputation; and even possible client loss. But businesses can turn tables in their favour by introducing AI powered Machine Learning and Predictive Analysis to create channels for long-term sustenance and profitability. Predictive analytics are crucial to a proactive business approach which can help servers develop and improve upon their innate intelligence to predict highs and lows of consumer demand accurately and dictate efficiency protocols to mitigate downtime risks.</p>\n\n\n<b>Handling Workloads Efficiently</b>\n<p>With the help of AI, organizations can also optimize their server performance by devising productive ways of disk utilization, network bandwidth, etc. When these tasks were performed by human-generated algorithms, workload distribution posed several inefficiencies, which can depreciate operational viability of the company. With AI, data-processing operations across 1000s of servers is possible with minimal human intervention.</p>\n\n\n<b>Bolstering Energy Management</b>\n<p>The biggest battle a traditional datacentre faces is that of energy consumption. An enormous quantity of power is utilised in running a server’s computational and storage functions. The silent killers, however, are the cooling systems which are essential in maintaining workable temperatures within the infrastructure for glitch-free operations. However, introducing AI into this traditional datacentre setup, the result can be overwhelming – double digit percentage reduction in cooling without lowering server performance saving millions of dollars in energy costs every year.</p>\n\n<p>AI can also optimize datacentre design and utilization by identifying frequency of application usage, determining the most efficient way for performing tasks, demarcating applications which consume most power, and so on.</p>\n\n\n<b>Creating Intelligent DC Infrastructure – The Way Forward</b>\n<p>Given the numerous ways in which AI, ML, and Predictive Analytics can empower business management and profitability, it is easy to see why companies are rapidly embracing these technologies and customizing them further to suit their own unique business needs. Surely AI-dependent datacenters explorations is the way forward and is already the new baseline by which organizations are going to measure their growth and sustainability.</b>', 'ARTIFICIAL INTELLIGENCE IN DATCENTERS – THE WAY FORWARD', 1, 'ARTIFICIAL INTELLIGENCE IN DATCENTERS – THE WAY FORWARD', 'demo', '2021-04-30 18:30:00', 'demo', '2021-05-11 18:30:00', '2021-05-12 18:30:00'),
(7, 1, 1, 'How is Cloud transforming businesses', 'blog-how.png', 'blog-how.png', '<p>Cloud technology is playing a vital role in enhancing the business organisations’ capability in the areas of data management quality and in ensuring cost-efficient customer services. With the right cloud strategy, backed by a fit-to-purpose cloud solution, the enterprises are now getting equipped with distributed cloud computing technologies and robust <a href="https://harbour1.in/storage">cloud storage solutions</a>.</p>\n\n<p>Recent reports suggest that more than 40% of the data professionals are inclined to committing to investments in cloud technologies. More than 70% of the businesses who are using cloud technology are interested in upgrading their inhouse infrastructure into a full stack cloud solution  to ensure business continuity. In a recent survey by TechWorld conducted among the Chief Technical Officers of fortune 500 companies, it is observed that more than 80% of the respondents have increased annual budgets to integrate cloud computing, into their IT landscape.</p>\n\n<p>Multi-cloud / Hybrid cloud strategy has brought about a positive transition for enterprises across industry verticals. Enterprises are investing time and money on data innovation to achieve organisational and operational efficiency. Let’s glance at some of the top ways in which data centers and cloud computing is revolutionizing the business world</p>\n<b>1. Achieving optimal capability in operations</b>\n<p>Cloud computing solutions ensure that the scalability factor of the company has a high degree of flexibility. Cloud / Hybrid Cloud offered by the top cloud data centres empower business of all sizes and domains to shift their operations to the cloud platform from a more native inhouse arrangement.</p>\n<p><a href="https://harbour1.in/">Cloud computing</a> gives enterprises enhanced agility through its on-demand, self-service enabled delivery models. This allows organisations to deploy resources near real time, avoiding operations delays and cost escalation. Advantage of various cloud native analytical and AI tools, help in deriving insights into the business intelligence aspects, thus enabling effective decision making.</p>\n<p>Real time data processing, scalable data storage, data redundancy, disaster recovery and business continuity plans are some of the key derives that any enterprise get, while they choose to park their data on cloud with a credible service provider. Let’s not forget the data analytics, that is available on demand for enterprises to keep themselves future ready.</p>\n<b>2. Reduction in cost</b>\n<p>Cost effectiveness is the hallmark of the best data centres in cloud computing space. Third party cloud computing providers ensure that business organisations need not take the extra financial burden of maintaining adequate infrastructure and to bear the exponential cost of having an army of IT professionals on their rolls. While smaller businesses can enhance their operational viability and profitability by outsourcing their data keeping on cloud, the big boys of the business world can, look avoiding spending large dollars in building incumbent infrastructure to meet their dynamic IT demands. They can ride on service provider’s cloud infrastructure, be further agile & competitive in their respective markets. </p>\n<b>3. Reinforced security and storage</b>\n<p>User security and safety are paramount to data centres with cloud computing. Highly qualified professionals working for cloud service providers ensure that sensitive files, classified documents and valuable data are stored in an encrypted model through distributed network and storage architecture. The data is not stored on a singular device which makes enforcement of user access and encryption easier for the business organisations. Firewall technology and anti-malware act as virtual sentinels which protect the integrity of the cloud infrastructure.</p>\n \n<b>4. Renewed flexibility</b>\n<p>Modern pandemic circumstances have introduced the concept of how remote working employees can increase the profitability of the company. Cloud has formed the pivotal link between office infrastructure, remote working employees and to ensure seamless communication and business continuity. Cloud computing has played a decisive role in ensuring that business deliver seamless services and user experience is undeterred .The demand surges and sinks  are seamlessly managed through the scale at will persona of cloud.</p>\n \n<b>5. Operational Excellence</b>\n<p>As enterprises adopt cloud to move up the value chain, its important that there is thorough feasibility study done well ahead of time. The solution should be customised to ensure there is synergy established between the cloud solution and the enterprise’s functions and processes. While cloud computing does create tremendous value for any business, but it’s as good as how much its realized post implemented and being operational, That is, when business operations are actually being carried out on cloud.  Once implemented and established this would add to the overall TCO optimisation & ROI enhancement, helping the businesses to run better, grow faster, and be more innovative.</p>\n<p>Cloud data centres have become a versatile platform that creates a generation of satisfied customers who are loyal to the business brand and generate a larger network. The future of the business world depends on the engine of cloud computing and making sure that competition among companies can generate a richer customer experience.</p>\n', 'How is Cloud transforming businesses', 1, 'How is Cloud transforming businesses', 'How is Cloud transforming businesses', '2021-06-11 18:30:00', NULL, NULL, NULL),
(66, 1, 2, 'Emerging Technologies to Disrupt Industries – Sunder Muthevi', 'Sunder-Muthevi-Speaking-to-VARINDIA-on-Emerging-Technologies-Disrupting-Industries_FB.png', 'Sunder-Muthevi-Speaking-to-VARINDIA-on-Emerging-Technologies-Disrupting-Industries_FB.png', '<p>In a recent interaction with VARINDIA – India’s frontline IT Magazine, Sunder Muthevi, Chief Technology Officer at Pi shared his thoughts about Emerging Technologies & Security Landscape.</p>\n<p>While explaining how corporates should remain prepared for protecting themselves from potential threats, Sunder said, “The high adoption of IoT by corporates, forced enterprises to change existing IT architecture that in turn introduces new threats and enhances old ones. Organizations should identify authentication risks, establish identity assurance requirements and employ metrics. Organizations should develop enterprise wide data security governance programs by identifying data security policy gaps and seeking cyber insurance when appropriate. It is also critical for the enterprises to maintain the asset inventory details as the surveys conducted in the past proved that most of cyber-attacks are caused by insecure device available on their own network. Enterprises should define proactive approach to these vulnerabilities.”</p>\n\n<p>VARINDIA E-Magazine | May 2019.</p>', '', 1, 'Emerging Technologies to Disrupt Industries – Sunder Muthevi', NULL, '2019-05-07 18:30:00', NULL, '2019-05-07 18:30:00', NULL),
(67, 1, 2, 'Kalyan being conferred, CEO Of The Year, Information Technology Industry, by World Leadership Congress', 'A1_Preses-Release.jfif', 'A1_Preses-Release.jfif', '<span style="display:contents;line-height:2"><a href="https://pidatacenters.com/ceos-corner/">Kalyan Muppaneni,</a> Chairman & CEO, Pi DATACENTERS, gets awarded the coveted <a href="https://pidatacenters.com/">CEO Of The Year Award for Information Technology Industry</a> by World Leadership Congress.</span>\n\n<p>Deservingly so, Kalyan is a visionary, technology leader and an industry veteran of more than 2 decades, including 15+years in leadership roles with Intel Corporation in the Silicon Valley, US.</p>\n\n<span style="display:contents;line-height:2">He is the mind and man behind <a href="https://pidatacenters.com/">Pi DATACENTERS</a>, Asia’s Largest Uptime Institute Certified TIER IV Data Center and <a href="https://harbour1.in/">Harbour1®</a>, India’s first Enterprise Cloud Platform</span>\n\n<p>His extensive experience in multiple disciplines of IT, backed with strong business acumen and global organizational leadership, makes him stand out.</p>\n\n<p>Kalyan has been leading the organization, towards amplifying a quality digital footprint in India and contributing towards accelerating the cloud journey of Indian enterprises. Through his aspiration to bring in world-class standards to India and be able to contribute in taking digitization to the last mile, Kalyan is contributing significantly to the Digital-India & Make-In India crusade</p>', 'Kalyan being conferred, CEO Of The Year, Information Technology Industry, by World Leadership Congress', 1, 'Kalyan being conferred, CEO Of The Year, Information Technology Industry, by World Leadership Congress', 'demo', '2021-04-07 18:30:00', 'demo', NULL, NULL),
(68, 1, 2, 'Pi Continues to be a Great Place to Work®', 'pi-gptw.jpeg', 'pi-gptw.jpeg', '<p>Pi® has synonymized work culture activism. It fosters employees to open up to new challenges and learning as they take up the trajectory of the work life. It nurtures each employee through unique learning vectors, depending on the employee’s, personality and aptitude. Pi® thrives to create a workplace that values and empowers it’s employees. A tireless effort to change the job landscape, that makes work an experience to relish. As a work place, Pi® echoes, clear vision , mission and orientation. A healthy and positive workplace that adds to productivity, flexibility and resilience. As an organization Pi® believes in trust and hence employees are encouraged to take control over what they are doing and own it. This is reciprocated with employees taking higher responsibility for their own productivity.</p>\n\n<p>Being respected and valued, adds to the zeal that makes Pi® a <a href="https://www.greatplacetowork.in/get-certified/certified-organizations/#mid-size">Great Place To Work®!</a></p>', 'Pi Continues to be a Great Place to Work®', 1, 'Pi Continues to be a Great Place to Work®', 'demo', '2021-04-25 18:30:00', 'demo', NULL, NULL),
(69, 1, 3, 'Cloud Migration From Global Public Cloud Provider To Harbour1', 'thumb1.png', 'migration.pdf', '', 'demo', 1, 'Cloud Migration From Global Public Cloud Provider To Harbour1', NULL, NULL, NULL, NULL, NULL),
(70, 1, 3, 'Wi-Fi on Cloud', 'thumb2.png', 'wifi.pdf', '', '', 1, 'Wi-Fi On Cloud', NULL, NULL, NULL, NULL, NULL),
(691, 1, 1, 'The 10 Commandments', 'thumb-ten.jpeg', 'commendments.png', 'The 10 key guidance points that would help you take informed decision to enable cloud strategy for your enterprise. This can be  help you build a  comprehensive business case with data facts', '', 1, '', NULL, '2022-03-14 18:30:00', NULL, '2022-02-17 18:30:00', NULL),
(692, 1, 3, 'Robert Bosch', 'robert.jpeg', 'case-study-robert-bosch-new.pdf', 'Robert Bosch', 'Robert Bosch', 1, 'Robert Bosch', 'test', NULL, NULL, NULL, NULL),
(693, 1, 3, 'Public Cloud to Harbour1', 'cloud.jpeg', 'public-cloud-to-harbour1-migration.pdf', 'Public Cloud to Harbour1', 'Public Cloud to Harbour1', 1, 'Public Cloud to Harbour1', NULL, NULL, NULL, NULL, NULL),
(694, 1, 3, 'Genus Power Infrastructures Ltd', 'case-study-genus1.png', 'genus-case-study.pdf', 'Genus Power Infrastructures Ltd', 'Genus Power Infrastructures Ltd', 1, 'Genus Power Infrastructures Ltd', 'Genus Power Infrastructures Ltd', NULL, NULL, NULL, NULL),
(695, 1, 3, '\r\nEnabling Advanced Banking Processes', 'enable.jpeg', 'case-study-on-enabling-advanced-banking-processes.pdf', NULL, 'Enabling Advanced Banking Processes', 1, 'Enabling Advanced Banking Processes', 'Enabling Advanced Banking Processes', NULL, NULL, NULL, NULL),
(696, 1, 3, 'Oaknet Healthcare', 'oaknet.jpeg', 'oaknet-healthcare.pdf', NULL, '', 1, '', NULL, NULL, NULL, NULL, NULL),
(697, 1, 3, 'One of India''s Largest Small Finance Bank', 'small.jpeg', 'case-study-on-one-of-indias-largest-small-finance-banks.pdf', NULL, '', 1, 'One of India''s largest Small Finance Bank', 'One of India''s largest Small Finance Bank', NULL, NULL, NULL, NULL),
(698, 1, 3, 'Making A Bank Digitally Powerful', 'making.jpeg', 'Case_Study_on_Making__Bank_Digitally_Powerful.pdf', NULL, '', 1, 'Making A Bank Digitally Powerful', 'Making A Bank Digitally Powerful', NULL, NULL, NULL, NULL),
(699, 1, 3, 'Agro Chemical Enterprise', 'case-study-agrochemical1.jpg', 'agro-chemical.pdf', 'Agro Chemical Enterprise', 'Agro Chemical Enterprise', 1, 'Agro Chemical Enterprise', 'Agro Chemical Enterprise', NULL, NULL, NULL, NULL),
(700, 1, 3, 'Pharma & Biotech Enterprise', 'biotech.png', 'case_study_july.pdf', 'Pharma & Biotech Enterprise', 'Pharma Biotech Enterprise', 1, 'Pharma & Biotech Enterprise', 'Pharma & Biotech Enterprise', NULL, 'Pharma, Biotech, Enterprise', NULL, NULL),
(701, 1, 3, 'E-commerce Enterprise', 'e-commerce.png', 'e-commerce-enterprice.pdf', 'E-commerce Enterprise', 'E-commerce Enterprise', 1, 'E-commerce Enterprise', 'E-commerce Enterprise', NULL, NULL, NULL, NULL),
(702, 1, 3, 'Beauty& Wellness Enterprise', 'artboard.png', 'beauty-wellness-enterprise.pdf', 'beauty-wellness-enterprise', '', 1, 'beauty-wellness-enterprise', 'beauty-wellness-enterprise', '2022-09-18 18:30:00', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@testcom', NULL, 1, '$2y$10$eapeNSKYQn4eNc79TqtsFu7oiixi3cRtz.EUPnfcuk2Kmt76y/gW6', NULL, '2021-03-23 01:21:47', '2021-03-23 01:21:47'),
(2, 'user', 'user@test.com', NULL, 0, 'test123', NULL, '2021-03-23 01:21:47', '2021-03-23 01:21:47'),
(3, 'srikanth', 'srikanth.komakula25@gmail.com', NULL, 1, '$2y$10$3joLukAPnMN4/4TRjXorSOoCFHj8xIk97oMCyXDHxZG.ARCOqir4q', NULL, '2022-05-26 02:02:17', '2022-05-26 02:02:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=703;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
