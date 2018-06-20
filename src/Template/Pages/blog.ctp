<div class="ui-view">
	<!-- <div class="loading">Carregando&#8230;</div> -->
	<!--Banner-->
	<section class="banner">
		<picture>
			<img src="<?=$this->Url->image('Site.../images/banner-blogInterna.jpg');?>" width="1920" class="img-responsive" alt="Jusprev"/>
		</picture>
	</section>

	<!--Blog-->
	<section class="blog">

		<div class="container no-padding">

			<!--Sidebar-->
			<?= $this->element('Site.blog-sidebar');?>

			<!--Noticias-->
			<div class="col-md-8">
				<div class="listBlog">
					<!--div class="boxNoticias">
					<h1>Nenhum post encontrado</h1>
				</div-->
				<?php foreach ($posts as $post): ?>
					<div class="boxNoticias">
						<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Brazilian_National_Congress.jpg/1024px-Brazilian_National_Congress.jpg" class="img-responsive" alt=""/>
						<div class="col-md-2 bordaRight">
							<div class="data">
								<div class="dia"><span>00</span></div>
								<div class="mesAno"><?=$post->publish_date?></div> <!--manter esse padrão-->
							</div>
							<div class="tags">
								<span>
									<?php
									foreach($post->blog_post_tags as $post_tag):
										echo($post_tag->tag->name . "<br/>");
									endforeach;
									?>
								</span>
							</div>
							<div class="autor"><strong>Autor:</strong><br> <?=$post->author->name?></div>
						</div>
						<div class="col-md-9">
							<h4><?=$post->title?></h4>
							<p><?=$post->description?></p>
							<?php echo $this->Html->link(
								'LER MATÉRIA COMPLETA',
								['controller' => 'Pages', 'action' => 'post', '_full' => true],
								['class' => 'btn btn-primary', 'escape' => false]
							); ?>
						</div>
					</div>
				<?php endforeach;?>

				<div class="col-md-12 no-padding">
					<div class="paginator" style="text-align: center;">
						<ul class="pagination">
							<?= $this->Paginator->first('<< ' . __('primeiro')) ?>
							<?= $this->Paginator->prev('< ' . __('anterior')) ?>
							<?= $this->Paginator->numbers() ?>
							<?= $this->Paginator->next(__('próximo') . ' >') ?>
							<?= $this->Paginator->last(__('último') . ' >>') ?>
							<br/>
							<?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} registro(s) de {{count}}')]) ?>
						</ul>
					</div>
					<!-- <button class="btn btn-info btn-lg" type="button">CARREGAR MAIS</button> -->
				</div>
			</div>
		</div>

	</div>

</section>

</div>
