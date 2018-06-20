<!--Banner-->
<section class="banner">
	<picture>
		<!--[if IE 9]><video style="display: none;"><![endif]-->
		<source srcset="<?=$this->Url->image('Site.../images/banner-home-320.jpg');?>" media="(max-width: 600px)" ui-sref="institucional"/>
			<!--[if IE 9]><video style="display: none;"><![endif]-->
			<source srcset="<?=$this->Url->image('Site.../images/banner-home-768.jpg');?>" media="(max-width: 768px)" ui-sref="institucional"/>
				<!--[if IE 9]><video style="display: none;"><![endif]-->
				<source srcset="<?=$this->Url->image('Site.../images/banner-home-1366.jpg');?>" media="(max-width: 1400px)" ui-sref="institucional"/>
					<!--[if IE 9]></video><![endif]-->
					<img src="<?=$this->Url->image('Site.../images/banner-home.jpg');?>" width="1920" class="img-responsive" alt="Jusprev"/ ui-sref="institucional"/>
				</picture>
			</section>

			<!--Membros-->
			<section class="membros">
				<div class="container">

				</div>
			</section>

			<!--O que é a Jusprev-->
			<section class="jusprev">
				<div class="container-fluid no-padding">
					<div class="col-md-6 no-padding">
						<h1>O QUE É A JUSPREV?</h1>
						<p>
							A JUSPREV é a Previdência Associativa do Ministério Público, da Justiça Brasileira e dos Auditores Fiscais da Receita Federal do Brasil, lançada oficialmente em 06 de dezembro de 2007.
						</p>
						<p>
							A entidade traz consigo a chancela da maior união formal de Associações de Carreiras Jurídicas Públicas e de Auditoria Fiscal do Brasil, na defesa do interesse comum de seus associados, familiares e do desenvolvimento nacional. Tem por objetivo a administração e a execução de planos de benefícios de natureza previdenciária e sem fins lucrativos.
						</p>
						<?php echo $this->Html->link(
							'SAIBA MAIS',
							['controller' => 'Pages', 'action' => 'institucional', '_full' => true],
							['class' => 'btn btn-primary', 'escape' => false]
						); ?>
					</div>
					<div class="col-md-6 no-padding">
						<img src="<?=$this->Url->image('Site.../images/img-jusprev.png');?>" class="img-responsive" alt="O que é a Jusprev"/>
					</div>
				</div>
			</section>

			<!--Numeros-->
			<section class="numeros">
				<div class="container">
					<div class="col-md-2">
						<strong>30 mil</strong><br>
						Membros
					</div>
					<div class="col-md-2">
						<strong>56</strong><br>
						Instituidoras
					</div>
					<div class="col-md-2">
						<strong>13,48%</strong><br>
						Rentabilidade anual
					</div>
					<div class="col-md-2">
						<strong>150 milhões</strong><br>
						Patrimônio de cobertura
					</div>
					<div class="col-md-2">
						<div class="mais">
							<strong>mais de</strong>
						</div>
						<strong>22 milhões</strong><br>
						Aporte (contribuições complementares)
					</div>
					<div class="col-md-2">
						<strong>16,7 milhões</strong><br>
						de recursos transferidos
					</div>
					<p>*Valores e números aferidos até 31/12/2016</p>
				</div>
			</section>

			<!--O que é previdência privada? -->
			<section class="previdencia">
				<div class="container-fluid no-padding">
					<div class="col-md-6 no-padding">
						<img src="<?=$this->Url->image('Site.../images/img-oque-previdencia.jpg');?>" class="img-responsive" alt="O que é previdência privada?"/>
					</div>
					<div class="col-md-6 no-padding">
						<h1>O QUE É PREVIDÊNCIA<br> PRIVADA?</h1>
						<p>
							A previdência privada é uma forma de aposentadoria que não está<br> ligada ao sistema do Instituto Nacional do Seguro Social (INSS) ou ao<br> Regime Próprio de Previdência Social (RPPS). Ela é complementar à<br> previdência pública. O setor de previdência privada é fiscalizado pela<br> Superintendência Nacional de Previdência Complementar (PREVIC).
						</p>
						<?php echo $this->Html->link(
							'SAIBA MAIS',
							['controller' => 'Pages', 'action' => 'planjus', '_full' => true],
							['class' => 'btn btn-primary', 'escape' => false]
						); ?>
					</div>
				</div>
			</section>


			<!--Vantangens -->
			<section class="vantangens">
				<div class="container-fluid no-padding">
					<div class="col-md-6 no-padding">
						<h1>VANTAGENS</h1>
						<p>
							Quando o assunto é ter um futuro tranquilo e confortável, inevitavelmente você vai considerar fazer – ou não – uma previdência privada. O principal atrativo da previdência privada é a possibilidade de pagar menos imposto para acumular um valor maior no futuro.
						</p>
						<p>
							Os planos de previdência não entram em inventários, não pagam Imposto Sobre Transmissão Causa Mortis e Doação de Quaisquer Bens e Direitos (ITCMD) e por isso devem ser avaliados no planejamento financeiro para sucessão.
						</p>
						<?php echo $this->Html->link(
							'SAIBA MAIS',
							['controller' => 'Pages', 'action' => 'beneficios', '_full' => true],
							['class' => 'btn btn-primary', 'escape' => false]
						); ?>
					</div>
					<div class="col-md-6 no-padding">
						<img src="<?=$this->Url->image('Site.../images/img-previdencia.jpg');?>" class="img-responsive" alt="O que é previdência privada?"/>
					</div>
				</div>
			</section>

			<!--Depoimentos -->
			<section class="depoimentos">
				<div class="container">
					<h1>DEPOIMENTOS</h1>
					<div ng-controller="DepoimentosController" ng-init="getTestimonials()">
						<div class="slick-slider-depoimentos" ng-if="depoimentosLoaded" settings="slickDepoimentos">

							<?php foreach($testimonials as $testimonial):?>
								<div class="col-md-6 testimony">
									<?php if(isset($testimonial['files'][0])):?>
										<?php echo $this->Html->image('uploads/'.$testimonial['files'][0]['filename'], ['class'=>'img-responsive circle"', 'data-uid'=>$testimonial['files'][0]['id']]);?>
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
			</section>

			<!--Noticias -->
			<section class="noticias" ng-controller="BlogController">
				<div class="container bordaN" ng-init="getPosts()">
					<h1>NOTÍCIAS</h1>
					<?php foreach ($posts as $post): ?>
						<div class="col-md-3 col-sm-6 col-xs-12 pointer" ng-repeat="post in posts.data" ui-sref="blog.view({postId: post.id})">
							<!-- <div class="important" ng-show="{{post.important}}">
							<div class="seta-3"></div>
							<p>
							IMPORTANTE
						</p>
						<img src="assets/images/star.png" alt="">
					</div> -->
					<?php if(isset($post['files'][0])):?>
						<?php echo $this->Html->image('uploads/'.$post['files'][0]['filename'], ['class'=>'img-responsive"', 'data-uid'=>$post['files'][0]['id']]);?>
					<?php else:?>
						<?php echo $this->Html->image('Site.../images/jusprev-default-blog.png', ['class'=>'img-responsive']);?>
					<?php endif;?>
					<!-- <img src="{{post.file_name}}" alt="{{post.alternative_text}}" class="img-responsive"> -->
					<!-- <h2>{{post.title}}</h2> -->
					<h2><?=$post->title?></h2>
					<!-- <p>{{post.description | cut:true:100:'...'}}</p> -->
					<p><?=$post->description?></p>
					<div class="data">
						<p><span><?= $this->FormatDate->formatDate($post->publish_date,'just_day');?><?= $this->FormatDate->formatDate($post->publish_date,'de_mes_ano');?></span> por  <?php //=$post->authors->name ?></p>
					</div>
					<a ui-sref="blog.view({postId: post.id})" class="btn btn-primary" role="button">LER TUDO</a>
				</div>
			<?php endforeach;?>

		</div>
		<div class="container">
			<div class="trapezioinvertido">
				<?php echo $this->Html->link(
					'VEJA MAIS NOTÍCIAS',
					['controller' => 'Posts', 'action' => 'index', '_full' => true],
					['escape' => false]
				); ?>
			</div>
		</div>
	</section>


	<!--Instituidoras participantes -->
	<section class="instituidoras">
		<div class="container">
			<h1>INSTITUIDORAS PARTICIPANTES</h1>
			<div ng-controller="InstituidorasController">
				<div class="slick-slider-instituidoras" ng-if="depoimentosLoaded" settings="slickDepoimentos">
					<?php foreach($affiliates as $affiliate):?>
						<div class="col-md-6" ng-repeat="depoimento in depoimentos">
							<?php if(isset($affiliate['files'][0])):?>
								<?php echo $this->Html->image('uploads/'.$affiliate['files'][0]['filename'], ['class'=>'img-responsive"', 'data-uid'=>$affiliate['files'][0]['id']]);?>
							<?php endif;?>
						</p>
					</div>
				<?php endforeach;?>
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
</section>
