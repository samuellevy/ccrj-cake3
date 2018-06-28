<div class="webdoor">
	<div class="wrapper">
	<div class="item">
		<?php echo $this->Html->image('../uploads/files/'.$banners[0]['files'][0]['filename']);?>
	</div>
	<div class="webdoor_mask"></div>
	<div class="webdoor_footer"><a class="arrow" href="#"><?=$this->Html->image('Site.../images/arrow_wd.png');?></a></div>
	</div>
</div>
<section class="gallery_featured">
	<div class="wrapper"><a class="close_gallery" href="#"></a>
		<div class="section_title">
			<h2 class="title"> <span>Galeria</span></h2><a class="view_more" href="<?=$this->Url->build(["controller" => "pages","action" => "gallery"]);?>">VEJA MAIS <span>[+]</span></a>
		</div>
		<?php foreach($works as $key=>$work):?>
			<div class="gallery_item item-<?=$key+1?>">
				<a href="<?=$this->Url->build(["controller" => "pages","action" => "galleryread", $work->id]);?>">
					<div class="media">
						<?php if(isset($work['files'][0])):?>
							<?php echo $this->Html->image('../uploads/files/'.$work['files'][0]['filename']);?>
						<?php endif;?>
						<?php if(isset($work['medias'][0])):
							$videoURL = $work['medias'][0]['url'];
							$urlArr = explode("/",$videoURL);
							$urlArrNum = count($urlArr);
							$youtubeVideoId = $urlArr[$urlArrNum - 1];
							$thumbURL = 'http://img.youtube.com/vi/'.$youtubeVideoId.'/maxresdefault.jpg';
							echo $this->Html->image($thumbURL);
						endif;?>
					</div>
					<div class="text">
						<p class="name"><?=$work->sheet->production_company?></p>
						<p class="description"><?=substr($work->description,0,100);?>...</p>
					</div>
				</a>
			</div>
		<?php endforeach;?>
	</div>
</section>
<section class="new_publications">
	<div class="wrapper">
		<div class="section_title">
			<h2 class="title"><span>novi <br> dades</span></h2>
			<a class="view_more" href="<?=$this->Url->build(["controller" => "pages","action" => "news"]);?>">VEJA MAIS <span>[+]</span></a>
		</div>
		<div class="main_post">
			<div class="media">
				<?php echo $this->Html->image('../uploads/files/'.$posts[0]['files'][0]['filename']);?>
			</div>
		</div>
		<div class="publications">
			<div class="wrapper">
				<div class="featured_new">
					<h4 class="title"><?=$posts[0]->title;?></h4>
					<p><?=$posts[0]->description;?></p>
				</div>
				<ul class="list">
					<?php foreach($posts as $key=>$post):?>
					<?php if($key!=0):?>
					<li class="item"> 
						<p><strong>DESTAQUE // </strong><span> <?=$post->title;?></span></p>
						<a class="view_more" href="<?=$this->Url->build(["controller" => "pages","action" => "newsread",$post->id]);?>">VEJA MAIS [+]</a>
					</li>
					<?php endif;?>
					<?php endforeach;?>
				</ul>
			</div>
		</div>
	</div>
</section>
<?php foreach($testimonials as $testimonial):?>
<section class="opinion_featured">
	<div class="media">
		<div class="writer"><?php echo $this->Html->image('../uploads/files/'.$testimonial['files'][0]['filename']);?></div>
		<div class="mask_opiniao"></div>
	</div>
	<div class="wrapper">
		<div class="section_title">
			<div class="wrap">
				<h2 class="title"> <span>opinião</span></h2><a class="view_more" href="#">VEJA MAIS <span>[+]</span></a>
				<p class="name"><strong class="name"><?=$testimonial->name;?></strong><small class="info"><?=$testimonial->subtitle?></small></p>
				<p class="desc">"<?=substr(strip_tags($testimonial->quote),0,100)?>..."</p>
			</div>
		</div>
	</div>
</section>
<?php endforeach;?>