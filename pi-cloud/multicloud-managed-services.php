<?php
include_once('includes/header.php');

?>

<style>
	.hb-bannerImg h2 {
		left: 2% !important;
		font-size: 45px !important;
	}

	.hb-leftCont>span>img {
		max-height: 345px !important;
	}

	.hb-productHead {
		max-width: 80%;
		margin: 0 auto;
	}

	.hb-block2 {
		display: block;
	}

	.hb-block1 {
		display: none !important;
	}

	.stick {
		border-radius: 80px;
		max-width: 38% !important;
		margin-top: 70px;
	}

	.get-in-touch-blk {
		max-width: 945px;
		margin: 0 auto;
		background: #2680EB;
		border-radius: 80px;
		padding: 10px;
		border: 20px solid #ffffff;
	}

	.get-in-touch {
		margin: 0 0 -74px 0;
		position: relative;
	}

	.get-in-touch-lft {
		max-width: 70%;
	}

	.get-in-touch-lft p {
		font-size: 31.5px;
		line-height: 20px;
		padding-top: 29px;
		text-align: center;
	}

	.get-in-touch-rit a {
		font-size: 25.5px;
		line-height: 36px;
		background: #ECECEC;
		border-radius: 39px;
		height: 40px;
		text-align: center;
		color: #2680EB;
		width: 160px;
		margin: 0;
	}

	.get-in-touch-rit {
		max-width: 100%;
	}

	.appoinment li:nth-child(1) {
		width: 100% !important;
	}

	.appoinment li:nth-child(2) {
		width: 20% !important;
	}

	.appoinment {
		padding: 0px !important;
	}

	.appoinment h2 {
		padding: 0px 0px 0px 0px !important;
		font-size: 25px;
		line-height: 36px !important;
		text-align: center;
	}

	.dark ul {
		color: #ccc;
	}

	.dark h1 {
		color: #d5cef7 !important;
	}

	.owl-dots {
		position: absolute;
		top: 10px;
		margin: 30px auto;
		left: 0;
		right: 0;
	}

	.hb-productSec {
		max-width: 88% !important;
	}

	.hb-featLogo {
		width: 23% !important;
	}

	.hb-featCont h6 {
		text-align: center;
	}

	.sch-your {
		width: 500px;
		margin: 0 auto;
		display: block;
	}

	.essent {
		margin-top: 50px;
		float: right !important;
		width: auto !important;
	}

	.prem {
		width: auto !important;
		float: right !important;
	}

	.hb-boxCont {
		box-shadow: none;
	}

	/*Newly added styles*/

	body {
		font-family: 'Roboto', sans-serif !important;
	}


	.hb-childProducts2 .tabline {
		border-bottom: solid #216733 !important;
	}

	.points {
		display: flex;
		justify-content: center;
		align-items: center;
		flex-direction: column;
	}

	.cards {
		width: 100%;
		display: flex;
		/* flex-wrap: wrap; */
		justify-content: space-around;
		margin-bottom: 20px;
	}

	.card {
		margin: 20px;
		position: relative;
		max-width: 425px;
		min-height: 425px;
		box-shadow: 1px 0px 20px -6px #76b543;
		cursor: pointer;
	}

	.card-title {
		display: block;
		text-align: center;
		color: #76b543;
		background-color: #80808038;
		padding: 2%;
		border-top-right-radius: 4px;
		border-top-left-radius: 4px;
	}

	.card img {
		width: 100%;
		height: 80%;
		object-fit: contain;
		display: block;
		padding: 0 0 0 30px;
		position: relative;
	}

	.card-desc {
		display: block;
		font-size: 1rem;
		line-height: 1.4rem;
		position: absolute;
		height: 0;
		top: 0;
		opacity: 0;
		padding: 15px 8%;
		background-color: white;
		/* overflow-y: scroll; */
		transition: 0.8s ease;
		color: #000;
		text-indent: -0.7rem;
		/* background: linear-gradient(#223f97, #76b543); */
		background: #e3e3e3;
	}

	.card ul li {
		list-style-type: none;
	}

	.card:hover .card-desc {
		opacity: 1;
		height: 100%;
		display: flex;
		justify-content: center;
		flex-direction: column;

	}

	h1 {
		font-size: 2.8rem;
		color: #fff;
		margin: 40px 0 20px 0;
		text-align: center;
	}

	.appoinment {
		background-color: #223f97 !important;
	}

	.hb-productSec>li {
		margin: 10px auto !important;
	}

	.sch-your {
		width: 400px !important;
	}

	.hb-featuresList>li {
		border-top: 5px solid #223f97 !important;
	}

	.hb-childProducts2 .tabBlock-tab {
		background-color: #223f97 !important;
	}

	.hb-childProducts2 .tabBlock-tab:hover,
	.tabBlock-tab:hover:after,
	.tabBlock-tab:hover:before {
		background-color: #223f97 !important;
	}

	.hb-childProducts2 .tabBlock-tab:after,
	.tabBlock-tab:before {
		background-color: #223f97 !important;
	}

	.hb-childProducts2 .tabBlock-tab.is-active,
	.tabBlock-tab.is-active:after,
	.tabBlock-tab.is-active:before {
		background-color: #76b543 !important;
	}

	.hb-childProducts2 .tabBlock-tab:hover,
	.tabBlock-tab:hover:after,
	.tabBlock-tab:hover:before {
		background-color: #76b543 !important;
	}

	.hb-childProducts2 .nav-link {
		color: #fff;
	}

	.card p {
		text-align: center;
		background-color: #e3e3e3;
		padding: 11px;
		color: #223f97;
		font-size: 18px;
		font-weight: bold;
		border-bottom-right-radius: 4px;
		border-bottom-left-radius: 4px;
		bottom: 0;

	}

	.hb-featureBox h3,
	.hb-featureBox h5 {
		text-align: center;
	}


	.services {
		position: relative;
		font-family: 'Roboto', sans-serif !important;
	}

	.boxes,
	.boxes-2 {
		display: flex;
		flex-wrap: wrap;
		flex-direction: row;
		justify-content: center;
	}


	.boxes li,
	.boxes-2 li {
		list-style-type: none;
		width: 30%;
		margin: 10px 9px;
		vertical-align: top;
		font-size: 14px;
		box-shadow: 3px 3px 4px #76b543;
		background-color: #fff;
		cursor: pointer;
	}

	.card-box {
		padding: 12px;
	}

	.box-icon {
		position: relative;
		font-size: 0px;
		margin: 10px auto;
	}

	.card-icon {
		width: 23% !important;
	}

	.card-icon,
	.card-head {
		display: inline-block;
		width: 70%;
		vertical-align: top;
		/* font-size: 14px; */
	}

	.card-icon>img {
		max-width: 70px;
		vertical-align: bottom;
	}

	.card-head>h6 {
		font-size: 18px;
		padding-top: 20px;
	}

	.card-head>h6 {
		min-height: 40px;
		text-align: center;

	}

	.content_1 .para {
		font-size: 16px;
		margin: 30px 50px;
		text-align: justify;
	}

	.content_1 h2 {
		text-align: center;
		font-size: 32px;
		color: #76b543;
		margin: 20px;
	}

	.content_1 {
		max-width: 90%;
		margin: 0 auto;

	}

	.main-mon {
		display: flex;
		justify-content: center;
		flex-direction: row;
	}

	.mon {
		width: 20%;
	}


	.mon-model {
		display: flex;
		justify-content: center;
		align-items: center;
		margin-bottom: 10px;
	}

	.Monitoring {
		width: 1000px;
		position: relative;
		display: flex;
		justify-content: space-between;
	}

	.Monitoring .card-2 {
		position: relative;
		cursor: pointer;
	}

	.Monitoring .card-2 .face {
		width: 300px;
		height: 200px;
		transition: 0.5s;
	}

	.Monitoring .card-2 .face.face1 {
		position: relative;
		background-color: #fff;
		display: flex;
		justify-content: center;
		align-items: center;
		z-index: 1;
		transform: translateY(100px);
	}

	.Monitoring .card-2:hover .face.face1 {
		transform: translateY(0);
		background-color: #76b543;
	}

	.Monitoring .card-2:hover .face.face1 .content .hide {
		display: block;
	}

	.Monitoring .card-2:hover .face.face1 .content .show {
		display: none;
	}

	.Monitoring .card-2:hover h3 {
		color: #fff !important;
	}


	.Monitoring .card-2 .face.face1 .content {
		text-align: center;
		transition: 0.5s;
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
	}

	.Monitoring .card-2:hover .face.face1 .content {
		opacity: 1;
	}

	.Monitoring .card-2 .face.face1 .content img {
		max-width: 80px;
		border-radius: 10px;
	}

	.Monitoring .card-2 .face.face1 .content .show {
		display: block;
	}

	.Monitoring .card-2 .face.face1 .content .hide {
		display: none;
	}

	.Monitoring .card-2 .face.face1 .content h3 {
		margin: 10px 0 0;
		padding: 0;
		color: #000;
		text-align: center;
		font-size: 1.5em;
	}


	.Monitoring .card-2 .face.face2 {
		position: relative;
		background: #fff;
		display: flex;
		justify-content: center;
		align-items: center;
		padding: 30px;
		box-sizing: border-box;
		box-shadow: 0px 1px 13px rgba(0, 0, 0, 0.8);
		transform: translateY(-100px);
	}

	.Monitoring .card-2:hover .face.face2 {
		transform: translateY(0);
	}

	.Monitoring .card-2 .face.face2 .content p {
		margin: 0;
		padding: 0;
	}

	.content a {
		display: inline-block;
		text-decoration: none;
		font-weight: 600;
		color: #fff;
		padding: 5px 10px;
		background-color: #223f97;
		margin-top: 10px;
		border-radius: 20px;
		font-size: 15px;
	}

	.Monitoring .card-2:hover .content a {
		display: none !important;
	}

	.Monitoring .card-2 .face.face2 .content a:hover {
		background: #333;
		color: #fff;
	}

	.content ul li {
		padding: 5px 0;
	}



	.flipping {
		display: flex;
		justify-content: space-evenly;
		align-items: center;
		flex-direction: row;
		margin: 30px;
	}

	.flip-card {
		background-color: transparent;
		width: 300px;
		height: 300px;
		perspective: 1000px;
	}

	.flip-card-inner {
		position: relative;
		width: 100%;
		height: 100%;
		text-align: center;
		transition: transform 0.6s;
		transform-style: preserve-3d;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
	}

	.flip-card:hover .flip-card-inner {
		transform: rotateY(180deg);
	}

	.flip-card-front,
	.flip-card-back {
		position: absolute;
		width: 100%;
		height: 100%;
		-webkit-backface-visibility: hidden;
		backface-visibility: hidden;
	}

	.flip-card-front {
		color: black;
		border: 2px solid #76b543;
	}

	.flip-card-back {
		background-color: #223f97;
		color: white;
		transform: rotateY(180deg);
	}

	.new-list {
		list-style-type: circle;
		list-style-position: outside;
		width: 100% !important;
		margin: 0 auto;
		height: 100%;
		display: flex;
		justify-content: center;
		flex-direction: column;
		text-align: left;
		padding: 30px;
		line-height: 1.5rem;
	}

	.carte-model {
		margin-top: 30px;
	}

	.model-2 {
		display: grid;
		grid-template-columns: auto auto auto auto;
		justify-content: center;
		margin: 70px;
		gap: 55px;
	}

	.model-3 {
		display: grid;
		grid-template-columns: auto auto auto;
		justify-content: center;
		margin: 70px;
		gap: 55px;
	}

	.carte-content {
		box-shadow: 0px 0px 15px grey;
		border-radius: 40px 40px;
		width: 275px;
	}

	.carte-head {
		background: linear-gradient(to left, #223f97, #0000ff8c);
		padding: 15px;
		color: #fff;
		height: 105px;
		text-align: center;
		border-radius: 40px 40px 0 0;
	}

	.read {
		padding: 10px 15px;
		overflow: hidden;
		width: 100%;
	}

	.read ul {
		text-align: justify;
		list-style: none;
	}

	.read ul li::before {
		content: "\2022";
		color: #76b543;
		font-size: 25px;
		font-weight: bold;
		display: inline-block;
		width: 1em;
	}

	.read li span {
		color: grey;
		font-size: 12px;
	}

	.elastic-model {
		display: grid;
		justify-content: center;
		align-items: center;
		grid-template-columns: auto auto;
		gap: 40px;
		padding: 20px;
		margin: 40px 40px 45px 40px;
	}

	.elastic {
		background-color: #fff;
		padding: 20px;
		text-align: center;
		height: 150px;
		width: 380px;
		border-radius: 60px;
		box-shadow: -1px 0px 11px 1px #223f97;
		position: relative;
	}

	.elastic-2 {
		background-color: #fff;
		padding: 25px;
		text-align: center;
		height: 150px;
		width: 380px;
		border-radius: 60px;
		box-shadow: -1px 0px 11px 1px #76b543;
		position: relative;
	}

	.circle {
		position: absolute;
		width: 100px;
		height: 100px;
		color: #fff;
		bottom: -55px;
		background-color: #223f97;
		right: 265px;
		border-radius: 100%;
		text-align: center;
		padding: 5px;
		display: flex;
		justify-content: center;
		align-items: center;
	}

	.circle-2 {
		position: absolute;
		width: 100px;
		height: 100px;
		background-color: #76b543;
		color: #fff;
		border-radius: 100%;
		text-align: center;
		padding: 5px;
		display: flex;
		justify-content: center;
		align-items: center;
		bottom: -55px;
		right: 15px;
	}

	.hb-btn_cl>a {
		background-color: #223f97;
		padding: 12px 19px;
		color: #fff;
		font-size: 16px;
		text-transform: capitalize;
		font-weight: bold;
		text-align: center;
		border-radius: 6px;
		z-index: 1;
		margin: 0 10px;
	}

	@media (max-width:599px) {
		.hb-navmenu {
			left: -360px;
		}

		.hb-childProducts2 .tabBlock-tab {
			width: 100% !important;
			text-align: center;
			margin: 5px 0px;
		}

		.multi-cld-key2 li {
			width: 100%;
			text-align: center;
		}

		.hb-leftCont>span>img {
			display: block;
		}

		.sch-your {
			width: 400px;
			margin: 0 auto;
			display: block;
		}

		.hb-logo {
			width: 50% !important;
		}

		.hb-featTopHeader {
			text-align: center;
		}

		.templine>li {
			width: 100% !important;
			display: block !important;
			;
			margin: 10px 0px !important;
		}

		.essent {
			margin-top: 50px;
			float: none !important;
			width: auto;
		}

		.prem {
			width: auto !important;
			float: none !important;
		}

		.only-support li {
			word-break: break-all;
		}

		.only-support li br {
			display: none !important;
		}

		.range {
			display: block;
		}

		/* newly added */
		.cards {
			flex-wrap: wrap !important;
		}

		.elastic-model {
			grid-template-columns: auto;
			gap: 65px;
		}

		.elastic,
		.elastic-2 {
			width: 350px;
			margin: 15px 10px 0 10px;
		}

		.circle {
			right: 259px;
		}

		.flipping {
			display: block;
			margin: 35px;
		}

		.flip-card {
			margin: 10px;
		}

		.model-2 {
			display: block;
			margin: 20px 50px;
		}

		.model-3 {
			display: block;
			margin: 20px 50px;
		}

		.carte-content {
			margin: 15px 0;
		}

		.Monitoring {
			display: block;
		}

		.hb-bannerImg h2 {
			left: 2% !important;
			font-size: 18px !important;
		}

		.content_1 .para {
			margin: 30px 20px;
		}

		.boxes,
		.boxes-2 {
			display: block;
		}

		.card-box {
			box-shadow: -3px 0px 8px #76b543;
		}

		.model-2,
		.model-3 {
			justify-content: center;
			align-items: center;
			display: flex;
			flex-direction: column;
			gap: 0;
		}

		.card-head>h6 {
			font-size: 16px;
		}

		.card-icon {
			width: 20% !important;
		}

		.Monitoring {
			width: auto;
		}

		.points {
			margin-bottom: 20px;
		}

		.card {
			min-height: 460px;
		}

		.card p {
			padding: 15px;
		}
	}

	@media only screen and (max-width: 650px) {

		.boxes li,
		.boxes-2 li {
			list-style-type: none;
			width: 95% !important;
			margin: 10px 12px;

		}

	}

	@media (min-width:650px) and (max-width:768px) {
		.hb-bannerImg h2 {
			left: 2% !important;
			font-size: 35px !important;
		}
	}

	@media (min-width:768px) and (max-width:990px) {
		.hb-bannerImg h2 {
			left: 2% !important;
			font-size: 35px !important;
		}
	}


	@media (max-width:768px) {
		.hb-block1 {
			display: block !important;
		}

		.hb-block2 {
			display: none !important;
		}

		.get-in-touch-lft:first-child {
			width: 100% !important;
			max-width: 100% !important;
		}

		.get-in-touch-lft p {
			font-size: 15px !important;
			line-height: 21px !important;
			padding: 0 0 10px !important;
			text-align: center !important;
		}

		.get-in-touch-rit a {
			line-height: 38px !important;
			height: 38px !important;
			width: 150px !important;
			margin: 10px auto !important;
			font-size: 16px !important;
			display: block;
		}

		.footer-about .col-md-3 {
			-webkit-flex: 0 0 100% !important;
			float: none !important;
			width: 100% !important;
			text-align: center !important;
			max-width: 100% !important;
		}

		h1 {
			font-size: 25px !important;
			padding: 0 !important;
		}

		.elastic,
		.elastic-2 {
			width: 320px;
			padding: 10px;

		}

		.circle {
			bottom: -61px;
			right: 208px;
		}

		.new-list {
			padding: 25px;
		}

		.card-icon>img {
			max-width: 50px;
		}

	}

	/* newly added */
	@media (max-width:990px) {
		.cards {
			flex-wrap: wrap;
		}

		.flip-card {
			margin: 15px 5px;
		}

		.model-2,
		.model-3 {
			grid-template-columns: auto auto;
		}

		.card-icon>img {
			max-width: 50px;
		}

		.Monitoring .card-2 .face {
			width: 235px;
			height: 284px;
			margin: 0px 10px;
		}

		.Monitoring .card-2 .face.face1 {
			transform: translateY(180px);
		}

		.Monitoring .card-2 .face.face1 .content h3 {
			font-size: 1.3em;
		}
	}

	@media (max-width:1024px) {
		.card-icon>img {
			max-width: 50px;
		}
	}
</style>

<div class="hb-bannerCont">
	<div class="hb-bannerImgCont">
		<div class="hb-bannerImg">
			<!--	<picture>
			     <source media="(max-width: 768px)" srcset="./pi-cloud/images/banners/Web-banner-Ai.png">
			      <img  src="./pi-cloud/images/banners/Web-banner-Ai.png" alt="pi cloud Cloud Backup as a Service Banner" style="width:100%">
      		</picture>-->
			<picture>
				<source media="(max-width: 768px)" srcset="./<?= $config['subFolderName'] ?>/images/banners/Multi-cloud-managed-services-models-banner.jpg">
				<img src="./<?= $config['subFolderName'] ?>/images/banners/Multi-cloud-managed-services-models-banner.jpg" alt="pi cloud Cloud Backup as a Service Banner" style="width:100%">
				<h2>Multi Cloud Managed Services </h2>
			</picture>
		</div>
	</div>
</div>

<div class="content_1 col-md-12">
	<!-- <p class="para">
		Pi Datacenters take pride in offering comprehensive Multi Cloud Managed Services that empower your organization with unparalleled control, security, and efficiency in the digital realm. Our team of experts is dedicated to optimizing your cloud infrastructure, ensuring its performance, and safeguarding your data.
	</p> -->
	<p class="para">
		Pi Datacenters takes pride in offering comprehensive Multi Cloud Managed Services that empower your organization with unparalleled control, security, and efficiency in the digital realm. Pi represents the foundation upon which your organization's digital dreams are realized. We don't just offer services; we offer solutions that redefine the very essence of cloud management. Our team of experienced experts is committed to your digital journey's success. We understand that in the digital world, control is not just an option; it's imperative. With Pi Datacenters, you gain the ability to harness unparalleled control over your cloud infrastructure.

	</p>
	<p class="para">
		We recognize the critical role that security plays in maintaining your online fortress, and hence, we employ advanced security protocols to safeguard your data against the myriad threats that loom in the digital world. With Pi Datacenters, your data remains impervious to ever-evolving challenges, ensuring that your business operations are uninterrupted. Your cloud infrastructure's performance directly influences your business's success. Our team, well-versed in the intricate world of cloud computing, meticulously fine-tunes your setup. With Pi Datacenters, you can expect nothing less than unparalleled performance, ensuring a seamless user experience and the ability to meet your customers' demands effectively.
	</p>
	<p class="para">In a world fueled by data and connectivity, Pi Datacenters is not just a service provider; we are your strategic partner in achieving digital excellence. Our Multi Cloud Managed Services are meticulously crafted to not only meet your requirements but to exceed them. We are dedicated to your success, and our expertise is your competitive edge in the digital arena. Welcome to a new era of cloud management with Pi Datacenters. Your journey to digital greatness begins here.</p>
	<h2>Our Range Of Services </h2>

</div>



<div class="services content_1">
	<ul class="boxes">
		<li>
			<div class="card-box">
				<div class="box-icon">
					<p class="card-icon">
						<img src="../images/managed-services-icons/CM.svg" class="img" width="70">
					</p>
					<div class="card-head">
						<h6>Compute Management</h6>

					</div>
				</div>
				<p style="text-align:center; font-size: 17px;">Efficiently manage the availability, performance, and fine-tuning of your cloud resources. We specialize in setting up high availability, managing licensing, monitoring, alerting, reporting, logging, analysis, dashboarding, health checks, and more.</p>
			</div>
		</li>
		<li>
			<div class="card-box">
				<div class="box-icon">
					<p class="card-icon">
						<img src="../images/managed-services-icons/SM.svg" class="img" width="70">
					</p>
					<div class="card-head">
						<h6>Security Management</h6>

					</div>
				</div>
				<p style="text-align:center; font-size: 17px;">Rest easy with our robust security management services. We identify and mitigate unsanctioned apps, enforce policies, and monitor your cloud data. Our services include anti-virus and anti-malware updates to keep your infrastructure secure.</p>
			</div>
		</li>
		<li>
			<div class="card-box">
				<div class="box-icon">
					<p class="card-icon">
						<img src="../images/managed-services-icons/BM.svg" class="img" width="70">
					</p>
					<div class="card-head">
						<h6>Backup Management</h6>

					</div>
				</div>
				<p style="text-align:center; font-size: 17px;">Protect your critical assets with our comprehensive backup solutions. We ensure backups for all your applications, workloads, and data. Our self-serve and on-demand restore options come with robust SLAs.</p>
			</div>
		</li>
		<li>
			<div class="card-box">
				<div class="box-icon">
					<p class="card-icon">
						<img src="../images/managed-services-icons/NM.svg" class="img" width="70">
					</p>
					<div class="card-head">
						<h6>Network Management</h6>

					</div>
				</div>
				<p style="text-align:center; font-size: 17px;">Optimize your virtual network for seamless communication among VMs and the internet. We handle subnet management, NSG (Network Security Group) management, and firewall management.</p>
			</div>
		</li>
		<li>
			<div class="card-box">
				<div class="box-icon">
					<p class="card-icon">
						<img src="../images/managed-services-icons/IM.svg" class="img" width="70">
					</p>
					<div class="card-head">
						<h6>Identity Management</h6>

					</div>
				</div>
				<p style="text-align:center; font-size: 17px;">Effortlessly manage user accounts, federate identities across your organization's LOB (Line of Business) apps, and implement role-based access controls.</p>
			</div>
		</li>
		<li>
			<div class="card-box">
				<div class="box-icon">
					<p class="card-icon">
						<img src="../images/managed-services-icons/STORAGE-M.svg" class="img" width="70">
					</p>
					<div class="card-head">
						<h6>Storage Management</h6>

					</div>
				</div>
				<p style="text-align:center; font-size: 17px;">Optimize data usage and access patterns to maximize cost savings. Identify and move stale data to more economical storage areas, helping you manage your storage budget effectively.</p>
			</div>
		</li>
		<li>
			<div class="card-box">
				<div class="box-icon">
					<p class="card-icon">
						<img src="../images/managed-services-icons/SOM.svg" class="img" width="70">
					</p>
					<div class="card-head">
						<h6>Server OS Management</h6>

					</div>
				</div>
				<p style="text-align:center; font-size: 17px;">Ensure the continuous updating and troubleshooting of server operating systems for peak performance.</p>
			</div>
		</li>
		<li>
			<div class="card-box">
				<div class="box-icon">
					<p class="card-icon">
						<img src="../images/managed-services-icons/MM.svg" class="img" width="70">
					</p>
					<div class="card-head">
						<h6>Monitoring Management</h6>

					</div>
				</div>
				<p style="text-align:center; font-size: 17px;">Gain insights into your VMs with complete monitoring of CPU utilization, memory usage, storage IOPS, and OS performance.</p>
			</div>
		</li>
		<li>
			<div class="card-box">
				<div class="box-icon">
					<p class="card-icon">
						<img src="../images/managed-services-icons/CONFIG-M.svg" class="img" width="70">
					</p>
					<div class="card-head">
						<h6>Configuration Management</h6>

					</div>
				</div>
				<p style="text-align:center; font-size: 17px;">Keep your software up-to-date, enforce configuration and security policies, and manage patching, updates, password resets, and resource right-sizing.</p>
			</div>
		</li>
	</ul>
	<ul class="boxes-2">
		<li>
			<div class="card-box">
				<div class="box-icon">
					<p class="card-icon">
						<img src="../images/managed-services-icons/BSA.svg" class="img" width="70">
					</p>
					<div class="card-head">
						<h6>Basic Support Availability</h6>

					</div>
				</div>
				<p style="text-align:center; font-size: 17px;">Benefit from our 8x5 support for billing and invoicing inquiries, as well as 24x7 L1/L2 support for break-fix issues. Reach out through phone, email, or web support tickets.</p>
			</div>
		</li>
		<li>
			<div class="card-box">
				<div class="box-icon">
					<p class="card-icon">
						<img src="../images/managed-services-icons/CHANGE-M.svg" class="img" width="70">
					</p>
					<div class="card-head">
						<h6>Change Management</h6>

					</div>
				</div>
				<p style="text-align:center; font-size: 17px;">We ensure that proposed changes are scheduled based on business priorities, infrastructure impact, and service risk, minimizing disruptions to your IT services.</p>
			</div>
		</li>
	</ul>
</div>







<div>
	<h1 class="text-center mt-5" style="padding:0px 0 0;color:#1a1a1a;font-size:45px; margin-top: 90px;">Managed Services Models</h1>
	<ul class="hb-productSec list-inline">
		<li>
			<div class="hb-leftCont hb_ppCont">
				<span>
					<img src="../pi-cloud/images/product-images/Managed-Services-Models-New.png" alt="tickmark">
				</span>
			</div>
		</li>
		<li>
			<div class="hb-rightCont hb_ppCont">

				<p style="text-align:left;">Our Managed Services offer varied models to cater to unique business needs of enterprises. These include the A La Carte, Dedicated Resource, Tiered, Elastic (Pay-Per-Use), and Monitoring Only models. This is to ensure that businesses could focus on their core activities while our managed services ecosystem takes care of the smooth operations and service availability of the IT infrastructure landscape.</p>
			</div>
		</li>
	</ul>
</div>

<div class="hb-btn_cl" style="text-align: center; margin-top: 20px;"><a href="images/new-multi-cloud-brochure-2.pdf" class="global-button" target="_blank">
		Download Brochure
	</a>

</div>


<div class="hb-childProducts2">

	<div class="tabBlock">
		<div class="tabline">
			<ul class="tabBlock-tabs nav-tabs feature-tab  border-bottom-0 d-flex flex-wrap justify-content-center list-inline" data-tabs="tabs">
				<li class="tabBlock-tab is-active animatable fadeInUp">
					<a class="nav-link" data-toggle="tab">Tiered Model
					</a>
				</li>
				<li class="tabBlock-tab  animatable fadeInUp">
					<a class="nav-link" data-toggle="tab">Elastic Model
					</a>
				</li>
				<li class="tabBlock-tab  animatable fadeInUp">
					<a class="nav-link" data-toggle="tab">Dedicated Model
					</a>
				</li>
				<li class="tabBlock-tab  animatable fadeInUp">
					<a class="nav-link" data-toggle="tab">A La Carte Model
					</a>
				</li>

				<li class="tabBlock-tab  animatable fadeInUp">
					<a class="nav-link" data-toggle="tab">Monitoring Only Model
					</a>
				</li>
			</ul>
		</div>
		<div class="tab-content tabBlock-content">
			<div class="tabBlock-pane">
				<ul class="hb-productSec list-inline">
					<div class="hb-leftCont hb_ppCont">
						<p style="text-align:center">
							Provides different tiers of service levels based on the business's needs, ensuring that you pay only for the services you require.Ã‚Â 
						</p>
						<!--<span>
			            				<img src="images/product-images/TIERED-MODEL.png" alt="advanced">
			            			</span>-->


					</div>

				</ul>
				<div class="points">
					<div class="cards">
						<div class="card">
							<h2 class="card-title">ESSENTIALS</h2>
							<img src="../images/managed-services-icons/essesntials-new.png" alt="">
							<p>Know More</p>
							<ul class="card-desc col-md-4">
								<li><span>&#187;</span> 24 X 7 support with 2 hours critical response</li>
								<li><span>&#187;</span> Basic IT support (OS Patching, OS Updates, OS Management, Virtual Machines, Disks, Basic Configuration Management, &Incident Management)
								<li><span>&#187;</span> 30 days backup</li>
								<li><span>&#187;</span> Proactive infrastructure monitoring and alerting</li>
								<li><span>&#187;</span> Monthly health reports and dashboards</li>

								<li><span>&#187;</span> Basic anti-virus and anti-malware support</li>
							</ul>
						</div>
						<div class="card">
							<h2 class="card-title">ADVANCED</h2>
							<img src="../images/managed-services-icons/Advanced-new.png" alt="">
							<p>Know More</p>
							<ul class="card-desc col-md-4">
								<li><span>&#187;</span> 24 X 7 support with 1 hour critical response</li>
								<li><span>&#187;</span> Advanced IT Support (OS Patching, OS Updates, OS Management, Virtual Machines, Virtual Machine scales, Availability Sets, Disks, Virtual Networks, WAF, Identity Management, Configuration Management, Incident Management, Problem Management, Change Management)</li>
								<li><span>&#187;</span> Shared TAM and architect support</li>
								<li><span>&#187;</span> Unlimited backup, self-serve point-in-time restore</li>
								<li><span>&#187;</span> Proactive infrastructure monitoring and alerting</li>
								<li><span>&#187;</span> Monthly health reports and dashboards.</li>
								<li><span>&#187;</span> Advanced anti-virus and anti-malware support</li>
							</ul>
						</div>
						<div class="card">
							<h2 class="card-title">PREMIUM</h2>
							<img src="../images/managed-services-icons/Premium-New.png" alt="">
							<p>Know More</p>
							<ul class="card-desc col-md-4">
								<li><span>&#187;</span> 24 X 7 support with 30 minutes critical response</li>
								<li><span>&#187;</span> Level-3 escalation advanced support</li>
								<li><span>&#187;</span> Proactive capacity planning, performance and cost optimization</li>
								<li><span>&#187;</span> Shared TAM and architect support</li>
								<li><span>&#187;</span> Unbrmited backup, self-serve point-in-time restore</li>
								<li><span>&#187;</span> Proactive infrastructure monitoring and alerting</li>
								<li><span>&#187;</span> Monthly health reports and dashboards</li>
								<li><span>&#187;</span> Deep security (WAF, DDoS, Threat analytics, anti-virus, anti-malware, email and web protection)</li>
								<li><span>&#187;</span> Proactive run book authoring</li>
								<li><span>&#187;</span> Advanced operational intelligence and custom dashboard on usage, performance, governance, and cost</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="tabBlock-pane">
				<p style="text-align:center">
					Allows businesses to pay only for what they use, making it a cost-effective model.
				</p>
				<div class="elastic-model">
					<div class="elastic" style="border-radius: 90px 30px 30px 90px;">
						<div class="circle">

							<img src="../images/managed-services-icons/subscribe.svg" width="60">

						</div>
						<div class="elastic-head">
							<h2 style="margin-bottom: 10px;">Subscription Fee</h2>
						</div>
						<div class="elastic-content">
							<p>Subscribe to the elastic model with a nominal monthly fee that provides access to all kinds of cloud services</p>
						</div>
					</div>
					<div class="elastic-2" style="border-radius: 30px 90px 90px 30px;">
						<div class="circle-2">

							<img src="../images/managed-services-icons/hand.svg" width="60">

						</div>
						<div class="elastic-head">
							<h2 style="margin-bottom: 10px;">Pay-Per-Use</h2>
						</div>
						<div class="elastic-content">
							<p>Pay only for the services used, and the billing is done only for the number of hours used</p>
						</div>
					</div>
				</div>

			</div>

			<div class="tabBlock-pane">
				<p style="text-align:center">
					This model provides businesses with devoted resources for managing their workloads, ensuring they receive the necessary attention.
				</p>
				<div class="flipping">
					<div class="flip-card">
						<div class="flip-card-inner">
							<div class="flip-card-front">
								<img src="../pi-cloud/images/Service-Monitoring11.png" alt="scale" style="max-width:50%; margin-top: 30px;">
								<h2 style="margin-bottom: 20px;">Service Monitoring</h2>
								<a style="background-color: #223f97; color: #fff; padding: 5px 10px; border-radius: 15px;">Know More</a>
							</div>
							<div class="flip-card-back">
								<ul class="new-list">
									<li>Numerous dashboards and logs, records the status of resources.</li>
									<li>In daily work, a consolidated monitoring of the systems and services operated is achieved by means of service monitoring.</li>

								</ul>
							</div>
						</div>
					</div>

					<div class="flip-card">
						<div class="flip-card-inner">
							<div class="flip-card-front">
								<img src="../pi-cloud/images/Hourly-Support11.png" alt="scale" style="max-width:50%; margin-top: 30px;">
								<h2 style="margin-bottom: 20px;">Hourly Support</h2>
								<a style="background-color: #223f97; color: #fff; padding: 5px 10px; border-radius: 15px;">Know More</a>
							</div>
							<div class="flip-card-back">
								<ul class="new-list list-2">
									<p style="text-align:center; color: #fff; padding-top: 40px;">Monitoring has three models of support:</p>
									<li>24/7</li>
									<li>16/7</li>
									<li>8/7</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="flip-card">
						<div class="flip-card-inner">
							<div class="flip-card-front">
								<img src="../pi-cloud/images/Third-Party-Integration11.png" style="max-width:50%; margin-top: 30px;">
								<h2 style="margin-bottom: 20px;">Third Party Integration</h2>
								<a style="background-color: #223f97; color: #fff; padding: 5px 10px; border-radius: 15px;">Know More</a>
							</div>
							<div class="flip-card-back">
								<ul class="new-list">
									<li>Monitoring includes three unique parameters around Performance Metrics, Log Analytics, and Application Insights.</li>
									<li>Provide powerful end-to-end monitoring of applications and other crucial components.</li>
									<li>Third party applications can also be integrated for monitoring.</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

			</div>

			<div class="tabBlock-pane">


				<p style="text-align:center">
					Allows businesses to select specific services they require, providing flexibility in the services chosen.
				</p>
				<div class="carte-model">
					<div class="model-2">
						<div class="carte-content">
							<div class="carte-head">
								<h3 style="margin: 5px 0 10px 0;">Application & DB Migration</h3>
								<h5>Depending on business requirements, a
									fully customized app and database
									migration model is available.
								</h5>
							</div>
							<div class="read">
								<ul style="text-align: justify;">
									<li>Add-On Service <span>(Service Type)</span></li>
									<li>PER VM/NODE <span>(Pricing Model)</span></li>
									<li>Monthly <span>(Pricing Type)</span></li>
								</ul>
							</div>
						</div>
						<div class="carte-content">
							<div class="carte-head">
								<h3 style="margin: 5px 0 10px 0;">Database Services</h3>
								<h5>Cosmos DB, MySQL, MS-SQL, Maria DB,
									PostgreSQL, Redies, Data Factories
								</h5>
							</div>
							<div class="read">
								<ul>
									<li>Add-On Service <span>(Service Type)</span></li>
									<li>PER Service/NODE <span>(Pricing Model)</span></li>
									<li>Monthly <span>(Pricing Type)</span></li>
								</ul>
							</div>
						</div>
						<div class="carte-content">
							<div class="carte-head">
								<h3 style="margin: 25px;">Container Services</h3>
							</div>
							<div class="read">
								<ul>
									<li>Add-On Service <span>(Service Type)</span></li>
									<li>PER Service/NODE <span>(Pricing Model)</span></li>
									<li>Monthly <span>(Pricing Type)</span></li>
								</ul>
							</div>
						</div>
						<div class="carte-content">
							<div class="carte-head">
								<h3 style="margin: 10px 0 10px 0;">Analytics</h3>
								<h5>(Data Engineering Services)
								</h5>
							</div>
							<div class="read">
								<ul>
									<li>Add-On Service <span>(Service Type)</span></li>
									<li>PER Service/NODE <span>(Pricing Model)</span></li>
									<li>Monthly <span>(Pricing Type)</span></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="model-3">
						<div class="carte-content">
							<div class="carte-head">
								<h3 style="margin: 25px;">DevOps Services</h3>
							</div>
							<div class="read">
								<ul>
									<li>Add-On Service <span>(Service Type)</span></li>
									<li>PER Project/APP <span>(Pricing Model)</span></li>
									<li>Monthly <span>(Pricing Type)</span></li>
								</ul>
							</div>
						</div>
						<div class="carte-content">
							<div class="carte-head">
								<h3 style="margin: 25px;">Managed Application Services</h3>
							</div>
							<div class="read">
								<ul>
									<li>Add-On Service <span>(Service Type)</span></li>
									<li>PER VM/NODE <span>(Pricing Model)</span></li>
									<li>Monthly <span>(Pricing Type)</span></li>
								</ul>
							</div>
						</div>
						<div class="carte-content">
							<div class="carte-head">
								<h3 style="margin: 25px;">Disaster Recovery Services</h3>
							</div>
							<div class="read">
								<ul>
									<li>Add-On Service <span>(Service Type)</span></li>
									<li>PER VM/NODE <span>(Pricing Model)</span></li>
									<li>Monthly <span>(Pricing Type)</span></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

			</div>

			<div class="tabBlock-pane">
				<p style="text-align:center">
					This model provides businesses with devoted resources for managing their workloads, ensuring they receive the necessary attention.
				</p>
				<div class="small-content" style="text-align: center; max-width: 65%; margin: 20px auto; color: #223f97; font-weight: 600; padding: 25px; background: #8080801f; box-shadow: 2px 0px 14px 0px #76b543;">
					<p style="padding: 20px 0 0 0;">Offers IT professionals/engineers that will fully concentrate on the client's needs. Client has full management control over the project and IT professionals / engineers. These resources come at a fixed cost based on the level of experience.</p>
					<p style="padding: 10px; color: #000;">These resources can be aligned for all three models of support: </p>
					<ul style="list-style-type: none; max-width: 95%; margin: 0 auto; display: grid; grid-template-columns: auto auto auto; justify-content: center;">
						<!-- <li>24/7</li>
						<li>16/7</li>
						<li>8/7</li> -->
						<li style="width: 45px; padding: 4px; box-shadow: 0px 1px 3px 1px grey; background-color: #223f97; color: #fff; margin: 5px;">24/7</li>
						<li style="width: 45px; padding: 4px; box-shadow: 0px 1px 3px 1px grey; background-color: #76b543; color: #fff; margin: 5px;">16/7</li>
						<li style="width: 45px; padding: 4px; box-shadow: 0px 1px 3px 1px grey; background-color: #223f97; color: #fff; margin: 5px;">8/7</li>
					</ul>
				</div>
				<div class="mon-model">
					<div class="Monitoring">
						<div class="card-2">
							<div class="face face1">
								<div class="content">
									<img class="show" src="../images/managed-services-icons/service-monitoring-new.png">
									<img class="hide" src="../images/managed-services-icons/service-monitoring2-new.png">
									<h3>Service Monitoring</h3>
									<a>Read More</a>
								</div>
							</div>
							<div class="face face2">
								<div class="content">
									<ul style=" list-style-type: circle;list-style-position:outside;width: 100% !important;margin: 0 auto; color: #223f97;">
										<li>Numerous dashboards and logs, records the status of resources.</li>
										<li>In daily work, a consolidated monitoring of the systems and services operated is achieved by means of service monitoring.</li>

									</ul>

								</div>
							</div>
						</div>
						<div class="card-2">
							<div class="face face1">
								<div class="content">
									<img class="show" src="../images/managed-services-icons/hourly-support-new.png">
									<img class="hide" src="../images/managed-services-icons/hourly-support2-new.png">
									<h3>Hourly Support</h3>
									<a>Read More</a>
								</div>
							</div>
							<div class="face face2">
								<div class="content">
									<p style="text-align:center; color: #223f97;">Monitoring has three models of support:</p>
									<ul style="list-style-type: circle;list-style-position: inside;width: 100% !important;margin: 0 auto;padding: 10px 8px; color: #223f97;">
										<li>24/7</li>
										<li>16/7</li>
										<li>8/7</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="card-2">
							<div class="face face1">
								<div class="content">
									<img class="show" src="../images/managed-services-icons/third-party-new.png">
									<img class="hide" src="../images/managed-services-icons/third-party2-new.png">
									<h3>Third Party Integration</h3>
									<a>Read More</a>
								</div>
							</div>
							<div class="face face2">
								<div class="content">
									<ul style="list-style-type: circle;list-style-position:outside;width: 100% !important;margin: 0 auto;text-align:left; color: #223f97;">
										<li>Monitoring includes three unique parameters around Performance Metrics, Log Analytics, and Application Insights.</li>
										<li>Provide powerful end-to-end monitoring of applications and other crucial components.</li>
										<li>Third party applications can also be integrated for monitoring.</li>
									</ul>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- <a href="images/Multi-Cloud-Brochure.pdf" class="sch-your" target="_blank">
				<ul class="hb-productSec list-inline appoinment stick">
					<li>
						<div class="hb-leftCont hb_ppCont">
							<h2>Download Brochure</h2>
						</div>
					</li>
					
				</ul>
			</a> -->

			<!--<div class="get-in-touch">
                  <div class="get-in-touch-main">
                       <div class="container">
                           <div class="get-in-touch-blk row">
                                <div class="get-in-touch-lft">
                                    <p >Questions? We're here to help.</p>
                               </div>
                               <div class="get-in-touch-rit">
                                   <a href="contact-us.php">Get in Touch</a>
                            
                                </div>
                           </div>
                      </div>  
                      
              </div>
          </div>-->

		</div>


		</section>
		<?php
		include_once('includes/footer.php');
		?>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js'></script>
		<script src='./pi-cloud/js/index.js'></script>
		<script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>

		<script>
			$(document).ready(function(e) {
				var TabBlock = {
					s: {
						animLen: 200
					},

					init: function() {
						TabBlock.bindUIActions();
						TabBlock.hideInactive();
					},

					bindUIActions: function() {
						$('.tabBlock-tabs').on('click', '.tabBlock-tab', function() {
							TabBlock.switchTab($(this));
						});
					},

					hideInactive: function() {
						var $tabBlocks = $('.tabBlock');

						$tabBlocks.each(function(i) {
							var
								$tabBlock = $($tabBlocks[i]),
								$panes = $tabBlock.find('.tabBlock-pane'),
								$activeTab = $tabBlock.find('.tabBlock-tab.is-active');

							$panes.hide();
							$($panes[$activeTab.index()]).show();
						});
					},

					switchTab: function($tab) {
						var $context = $tab.closest('.tabBlock');

						if (!$tab.hasClass('is-active')) {
							$tab.siblings().removeClass('is-active');
							$tab.addClass('is-active');

							TabBlock.showPane($tab.index(), $context);
						}
					},

					showPane: function(i, $context) {
						var $panes = $context.find('.tabBlock-pane');

						// Normally I'd frown at using jQuery over CSS animations, but we can't transition between unspecified variable heights, right? If you know a better way, I'd love a read it in the comments or on Twitter @johndjameson
						$panes.slideUp(TabBlock.s.animLen);
						$($panes[i]).slideDown(TabBlock.s.animLen);
					}
				};

				$(function() {
					TabBlock.init();
				});
			});
		</script>
		<script>
			$(document).ready(function() {
				$('.slider-info').slick({
					dots: false,
					arrows: true,
					slidesToShow: 4,
					slidesToScroll: 1,
					vertical: false,
					verticalSwiping: false,
					autoplay: true,
					autoplaySpeed: 1000,
					responsive: [{
						breakpoint: 768,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 1
						}
					}]

				});

			});
		</script>