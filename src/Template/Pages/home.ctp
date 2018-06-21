<div class="webdoor">
	<div class="wrapper">
	<div class="item"><?=$this->Html->image('Site.../images/home_webdoor.jpg');?></div>
	<div class="webdoor_pager"></div>
	<div class="brand_layer">
		
		<?php for ($i = 0; $i < 5; $i++):?>	
			<div class="row right">
				<?php for ($j = 0; $j < 5; $j++):?>
					<?=$this->Html->image('Site.../images/bandeira_b.png');?>
				<?php endfor; ?>
			</div>

			<div class="row left">
				<?php for ($j = 0; $j < 5; $j++):?>
					<?=$this->Html->image('Site.../images/bandeira_a.png');?>
				<?php endfor; ?>
			</div>
		<?php endfor; ?>

	</div>
	<div class="webdoor_footer"><a class="arrow" href="#"><?=$this->Html->image('Site.../images/arrow_wd.png');?></a></div>
	</div>
</div>
<section class="gallery_featured">
	<div class="wrapper"><a class="close_gallery" href="#"></a>
	<div class="section_title">
		<h2 class="title"> <span>Galeria</span></h2><a class="view_more" href="#">VEJA MAIS <span>[+]</span></a>
	</div>
	<?php foreach($works as $key=>$work):?>
	<div class="gallery_item item-<?=$key+1?>">
		<div class="media">
			<?php echo $this->Html->image('../uploads/files/'.$work['files'][0]['filename']);?>
		</div>
		<div class="text">
		<p class="name"><?=$work->sheet->production_company?></p>
		<p class="description"><?=$work->description?></p>
		</div>
	</div>
	<?php endforeach;?>


	</div>
</section>
<section class="new_publications">
	<div class="wrapper">
	<div class="section_title">
		<h2 class="title"><span>novi <br> dades</span></h2>
		<a class="view_more" href="#">VEJA MAIS <span>[+]</span></a>
	</div>
	<div class="main_post">
		<div class="media"><?=$this->Html->image('Site.../images/image_2.png');?></div>
	</div>
	<div class="publications">
		<div class="wrapper">
		<div class="featured_new">
			<h4 class="title">TÍTULO DA NOTÍCIA</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum maximus fringilla sodales. Maecenas varius urn…</p>
		</div>
		<ul class="list">
			<li class="item"> 
			<p> <strong>DESTAQUE // </strong><span> 6 diretores de criação comentam as mudanças no Cannes Lions</span></p><a class="view_more" href="#">VEJA MAIS [+]</a>
			</li>
			<li class="item"> 
			<p> <strong>DESTAQUE // </strong><span> 6 diretores de criação comentam as mudanças no Cannes Lions</span></p><a class="view_more" href="#">VEJA MAIS [+]</a>
			</li>
			<li class="item"> 
			<p> <strong>DESTAQUE // </strong><span> 6 diretores de criação comentam as mudanças no Cannes Lions</span></p><a class="view_more" href="#">VEJA MAIS [+]</a>
			</li>
		</ul>
		</div>
	</div>
	</div>
</section>
<?php foreach($testimonials as $testimonial):?>
<section class="opinion_featured">
	<div class="media">
	<div class="writer"><?php echo $this->Html->image('../uploads/files/'.$testimonial['files'][0]['filename']);?>/div>
	</div>
	<div class="wrapper">
	<div class="section_title">
		
		<div class="wrap">
			<h2 class="title"> <span>opinião</span></h2><a class="view_more" href="#">VEJA MAIS <span>[+]</span></a>
			<p class="name"><strong class="name"><?=$testimonial->name;?></strong><small class="info"><?=$testimonial->subtitle?></small></p>
			<p class="desc"><?=substr($testimonial->testimony,0,100)?>...</p>
		</div>
		
	</div>
	</div>
</section>
<?php endforeach;?>