<!--Já fazem parte-->
<div class="parcerias">
	<div class="container bordaC">
		<h1>TODAS</h1>
		<div class="col-md-12 parcerias-block">
			<?php foreach($affiliates as $affiliate):?>
			<?php if(isset($affiliate['files'][0])):?>
			<div class="col-md-3 margin-30-v parcerias-item">
				
				<a href="<?=$affiliate->site?>">
					<?php echo $this->Html->image('../uploads/files/'.$affiliate['files'][0]['filename'], ['class'=>'img-responsive"', 'data-uid'=>$affiliate['files'][0]['id']]);?>
					<?=$affiliate->name?>
				</a>
				
			</div>
			<?php endif;?>
			<?php endforeach;?>
		</div>
	</div>
</div>