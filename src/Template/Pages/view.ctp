<?php if($page->type > 0):?>
  <section class="page">
    <?php foreach($page->pages_components as $component):?>
      <?=$component->content;?>
    <?php endforeach;?>
  </section>
<?php elseif($page->type == 0):?>
  <section class="page" id="Home">
  	<?php foreach($page->pages_components as $component):?>
  		<!--<?=$component->caption;?>-->

  		<?php if($component->component_id == 1):?>
  		<article class="<?=$component->class;?>">
  			<?php if(($component->class == 'jusprev')||($component->class == 'previdencia')||($component->class == 'vantagens')):?>
  				<div class="container">
  					<?=$component->content;?>
  				</div>
  			<?php else:?>
  				<?=$component->content;?>
  			<?php endif?>
  		</article>

  		<?php elseif($component->component_id == 2):?>
  			<article class="<?=$component->class;?>">
  				<?=$this->element("page_modules/".$component->content, ['component'=>$component]);?>
  			</article>
  		<?php endif;?>
  	<?php endforeach;?>
  </section>
<?php endif?>
