<section class="page" id="Portabilidade">
	<?php foreach($page->pages_components as $component):?>
		<!--<?=$component->caption;?>-->

		<?php if($component->component_id == 1):?>
		<article class="<?=$component->class;?>">
			<?=$component->content;?>
		</article>

		<?php elseif($component->component_id == 2):?>
			<article class="<?=$component->class;?>">
				<?=$this->element("page_modules/".$component->content, ['component'=>$component]);?>
			</article>
		<?php endif;?>
	<?php endforeach;?>
</section>
