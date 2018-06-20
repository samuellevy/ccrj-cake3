<div class="ui-view">
	<!-- <div class="loading" ng-show="hasRequest">Carregando&#8230;</div> -->
	<!--Banner-->
	<section class="banner">
		<picture>
			<source srcset="<?=$this->Url->image('Site.../images/banner-blogInterna-320.jpg');?>" media="(max-width: 600px)">
				<source srcset="<?=$this->Url->image('Site.../images/banner-blogInterna-768.jpg');?>" media="(max-width: 768px)">
					<!-- <source srcset="<?=$this->Url->image('Site.../images/banner-blogInterna-1366.jpg');?>" media="(max-width: 1400px)"> -->
					<img src="<?=$this->Url->image('Site.../images/banner-blogInterna.jpg');?>" width="1920" class="img-responsive" alt="Jusprev"/>
				</picture>
			</section>

			<!--Blog Interna-->
			<section class="blogInterna">

				<div class="container no-padding">

					<!--Sidebar-->
					<?= $this->element('Site.blog-sidebar');?>

					<!--Post-->
					<div class="col-md-8">
						<div class="noticiaAberta">
							<div class="boxNoticias">

								<div class="col-md-12 border">
									<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Brazilian_National_Congress.jpg/1024px-Brazilian_National_Congress.jpg" alt=""/>
									<div class="col-md-6 col-sm-6 no-padding">
										<div class="data">
											<div class="dia"><span>00</span></div>
											<div class="mesAno">jan de 0000</div> <!--colocar sempre nesse padrão-->
										</div>
									</div>
									<div class="col-md-6 col-sm-6 no-padding">
										<div class="tags"><span><a href="#">{{tag.tag}}</a></span></div>
										<div class="autor"><strong>Autor:</strong><br>{{post.author}}</div>
									</div>
								</div>

								<div class="col-md-12 no-padding">
									<h4>{{post.title}}</h4>
									<div>{{post.content}}</div>
									<hr>
								</div>

								<div class="col-md-12 compartilhar">
									<span>Share:</span>
									<?php echo $this->Html->link(
										$this->Html->image('Site.../images/twiiter-img.jpg'), 'http://www.twitter.com', array('escape' => false)
									); ?>
									<?php echo $this->Html->link(
										$this->Html->image('Site.../images/facebook.jpg'), 'http://www.facebook.com', array('escape' => false)
									); ?>
								</div>

							</div>
						</div>
					</div>

				</div>
			</section>
		</div>
