<div class="container">
		<h1><?=$component->caption?></h1>
		<div>
			<div class="slick-slider-depoimentos" settings="slickDepoimentos">

				<?php foreach($testimonials as $testimonial):?>
					<div class="col-md-6 testimony">
						<?php if(isset($testimonial['files'][0])):?>
							<?php echo $this->Html->image('../uploads/files/'.$testimonial['files'][0]['filename'], ['class'=>'img-responsive circle"', 'data-uid'=>$testimonial['files'][0]['id']]);?>
						<?php else:?>
							<img alt="270x270" data-src="holder.js/270x270" class="img-responsive circle picture none-picture" src="http://www.free-icons-download.net/images/user-icon-27998.png">
						<?php endif;?>
						<p>
							<?=$testimonial['testimony']?>
						</p>
						<p>
							<strong><?=$testimonial['name']?></strong><br>
							<?=$testimonial['role']?>
						</p>
					</div>
				<?php endforeach;?>
			</div>
		</div>
	</div>
