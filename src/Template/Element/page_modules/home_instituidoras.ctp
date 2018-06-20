<div class="container">
	<h1><?=$component->caption?></h1>
	<div class="slider">
		<div class="slick-slider-instituidoras" settings="slickDepoimentos">
			<?php foreach($affiliates as $affiliate):?>
			<?php if(isset($affiliate['files'][0])):?>
			<div class="col-md-6" ng-repeat="depoimento in depoimentos">
				
				<a href="<?=$affiliate->website?>">
					<?php echo $this->Html->image('../uploads/files/'.$affiliate['files'][0]['filename'], ['class'=>'img-responsive"', 'data-uid'=>$affiliate['files'][0]['id']]);?>
				</a>
				
			</div>
			<?php endif;?>
			<?php endforeach;?>
		</div>
	</div>
	<div class="col-md-12">
		<?php echo $this->Html->link(
		'VER TODAS',
		['controller' => 'Pages', 'action' => 'instituidoras', '_full' => true],
		['class' => 'btn btn-primary', 'escape' => false]
		); ?>
	</div>
</div>
</div>
