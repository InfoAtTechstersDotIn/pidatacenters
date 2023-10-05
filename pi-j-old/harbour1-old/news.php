<?php
	include_once('includes/db-config.php');
 	include_once('includes/header.php');

	 $data = new Databases;
?>

<div class="hb-bannerCont">
	<div class="hb-bannerImgCont">
		<div class="hb-bannerImg">
			<picture>
			     <source media="(max-width: 768px)" srcset="images/banners/news_mbanner.png">
			      <img  src="images/banners/news_banner.png" alt="Harbour1 Cloud Backup as a Service Banner" style="width:100%">
      		</picture>
		</div>		
	</div>
</div>

<div class="hb-newsSection">
	<div class="container">
		<ul >
		<?php  
		//category type 2 is for news page
			$news_data = $data->select('posts','2'); 
			if(count($news_data)>0){
				foreach ($news_data as $post) {
					?>			
				<li class="hb-newsContSection">
				  <div class="hb-newsDate">
						<div class="hb-NewsDesData">
							<div class="news-date">
							
								<h3><?php echo date("M", strtotime($post["customDate"])); ?><span> <?php echo date("d", strtotime($post["customDate"])); ?></span> </h3>
							</div>
						</div>
						<div class="hb-newsContDes">
							<h2><?php echo $post["title"]; ?></h2>
							<span><?php echo date("d M Y, l", strtotime($post["customDate"])); ?></span>
							<ul class="list-inline  hb-bSin  text-left" style="margin:12px 0  24px;"> 
		                    <li><a href="javascript:void(0)"  class="linkedin"> <img src="images/menu-icons/linkedin_ico.svg" alt='linkedin'></a></li>
		                    <li><a href="javascript:void(0)"  class="twitter"> <img src="images/menu-icons/twitter_ico.svg" alt='twitter'></a></li>
		                    <li><a href="https://www.youtube.com/channel/UCcrUri8y8maUmz3P_9uCeJg" target="_blank"> <img src="images/menu-icons/youtube_ico.svg" alt='youtube'></a></li>
		                         
		                    <li><a href="javascript:void(0)"> <img src="images/menu-icons/Instagram_ico.svg" alt='insta'></a></li>
		                    <li><a href="javascript:void(0)"  class="facebook"> <img src="images/menu-icons/facebook_ico.svg" alt='facebook'></a></li>
	                 </ul> 	
							<p><?php echo substr(strip_tags($post["detail"]), 0, 120); ?>...</p>
							<div class="hb-neRedMor">
								<a href="./news-info/<?php echo $post["id"]; ?>/<?php echo $data->create_slug($post["title"]) ?>">ReadMore</a>
							</div>
						</div>
						
				  </div>
					<div class="hb-newsThumb">
						<p>
						<img src="https://harbour1.in/dashboard/public/imgs/<?php echo $post["thumb"]; ?>" alt="news">
						</p>
					</div>
				</li>
				<?php
				}
				
			}
			else{
				echo "no posts";
			} 
            ?>
		</ul>
	</div>
</div>

<?php
	include_once('includes/footer.php');
?>
