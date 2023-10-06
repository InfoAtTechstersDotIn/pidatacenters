<?php

 //echo "Test";exit;
 include_once('includes/db-config.php');


 $data = new Databases;
 $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
 $uri_segments = explode('/', $uri_path);
 

 $postid = $uri_segments[2];
 $post = $data->select_single('posts', $postid);
 include_once('includes/header.php');
?>

<div class="hb-bannerCont">
	<div class="hb-bannerImgCont">
		<div class="hb-bannerImg">
			<picture>
			     <source media="(max-width: 768px)" srcset="images/banners/news_mbanner.png">
			      <img  src="images/banners/news_banner.png" alt="pi-cloud Cloud Backup as a Service Banner" style="width:100%">
      		</picture>
		</div>		
	</div>
</div>

<div class="hb-newsSection">
	<div class="container">
			<div class="hb-newsContSection">
			  <div class="hb-newsDate">
					<div class="hb-NewsDesData">
						<!--<div class="news-date">
							<h3><?php //echo date("M", strtotime($relatedNews["customDate"])); ?><span> <?php //echo date("d", strtotime($relatedNews["customDate"])); ?></span> </h3>
						</div>-->
					</div>

					<div class="hb-newsContDes hb-newsInf">
						<h2><?php echo $post["title"]; ?></h2>
						<span><?php //echo date("d M Y, l", strtotime($relatedNews["customDate"])); ?></span>
						<h4>
							<img src="https://pi-cloud.in/dashboard/public/imgs/<?php echo $post["full_img"]; ?>" alt="news">
						</h4>
						<?php echo $post["detail"]; ?>


						<ul class="list-inline  hb-bSin  text-left" style="margin:48px auto"> 
		                    <li><a href="javascript:void(0)"  class="linkedin"> <img src="images/menu-icons/linkedin_ico.svg" alt='linkedin'></a></li>
		                    <li><a href="javascript:void(0)"  class="twitter"> <img src="images/menu-icons/twitter_ico.svg" alt='twitter'></a></li>
		                    <li><a href="https://www.youtube.com/channel/UCcrUri8y8maUmz3P_9uCeJg" target="_blank"> <img src="images/menu-icons/youtube_ico.svg" alt='youtube'></a></li>
		                         
		                    <li><a href="javascript:void(0)"> <img src="images/menu-icons/Instagram_ico.svg" alt='insta'></a></li>
		                    <li><a href="javascript:void(0)"  class="facebook"> <img src="images/menu-icons/facebook_ico.svg" alt='facebook'></a></li>
	                 </ul>

					</div>
			  </div>
				<div class="hb-newsThumb hb-relatedArticals">
					<h4>Related News</h4>
					<ul class="hb-relaArt">
					<?php  
						//category type 2 is for news page
						$news_data = $data->selectLimit('posts','2','4'); 
						if(count($news_data)>0){
                            foreach ($news_data as $relatedNews) {

								//checking loaded news post is in the related news except loaded post remaining will load
                                if ($relatedNews["id"] != $post["id"]) {
                                    ?>	
						<li class="hb-reLists">
								<div class="hb-arThub" >
									<p>
										<img src="https://pi-cloud.in/dashboard/public/imgs/<?php echo $relatedNews["thumb"]; ?>" alt="image">
									</p>
								</div>
								<div class="hb-ContI">
									<a href="./news-info/<?php echo $relatedNews["id"]; ?>/<?php echo $data->create_slug($relatedNews["title"]) ?>" class="hb-CliLink"><?php echo $relatedNews["title"]; ?></a>
									<p class="hb-nePd"><?php echo substr(strip_tags($relatedNews["detail"]), 0, 20); ?>...</p>
									<p class="hb-nThD"><?php echo date("d M Y, l", strtotime($relatedNews["customDate"])); ?></p>
								</div>
						</li>
					<?php
                                }
                            }
					}
					else{
						echo "no posts";
					} 
					?>
					</ul>
				</div>
			</div>
	</div>
</div>

<?php
	include_once('includes/footer.php');
?>
