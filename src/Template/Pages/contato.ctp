<!--Banner-->
<section class="banner">
  <picture>
    <source srcset="<?=$this->Url->image('Site.../images/banner-contato-320.jpg');?>" media="(max-width: 600px)">
    <source srcset="<?=$this->Url->image('Site.../images/banner-contato-768.jpg');?>" media="(max-width: 768px)">
    <source srcset="<?=$this->Url->image('Site.../images/banner-contato-1366.jpg');?>" media="(max-width: 1400px)">
    <img src="<?=$this->Url->image('Site.../images/banner-contato.jpg');?>" width="1920" class="img-responsive" alt="Jusprev"/>
	</picture>
</section>

<!--Formulário-->
<section class="form-contato">
	<div class="container">
    <?= $this->Form->create($message) ?>
      <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
        <span class="form-label">Seu nome</span>
        <div class="field-form">
          <?php echo $this->Form->control('name', ['label'=>false, 'autocomplete'=>'off']);?>
        </div>
        <span class="form-label">Seu e-mail</span>
        <div class="field-form">
          <?php echo $this->Form->control('email', ['label'=>false, 'autocomplete'=>'off']);?>
        </div>
        <span class="form-label">Seu Telefone</span>
        <div class="field-form">
          <?php echo $this->Form->control('phone', ['label'=>false, 'autocomplete'=>'off']);?>
        </div>
        <?php if($type != 'nova_instituidora'):?>
          <span class="form-label">Escolha sua instituidora</span>
          <div class="field-select">
            <?php echo $this->Form->hidden('institute_id', ['type'=>'text', 'autocomplete'=>'off', 'id'=>'id_value']);?>
            <input id="associacao-search" type="text" placeholder="Selecione" autocomplete="off"><i class="caret pull-right" id="associacao-search-i"></i>
            <ul id="associacao-list">
              <?php foreach($institutes as $institute):?>
                  <li id="<?=$institute->id?>"><?=$institute->name?></li>
              <?php endforeach ?>
            </ul>
          </div>
        <?php endif;?>
      </div>

      <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
        <span class="form-label">Assunto:</span>
        <div class="field-form">
          <?php echo $this->Form->control('subject', ['label'=>false, 'autocomplete'=>'off']);?>
        </div>
				<span class="form-label">Escreva sua mensagem aqui</span>
				<div class="field-textarea">
					<?php echo $this->Form->control('message', ['label'=>false, 'autocomplete'=>'off']);?>
				</div>
        <?= $this->Form->button(__('Enviar'), ['class'=>'envio-form']) ?>
			</div>

      <div class="clearfix"></div>

    <?= $this->Form->end() ?>
	</div>
</section>

<!--Mapa-->
<section class="mapa-contato">
	<div class="container">
		<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3603.8643952352486!2d-49.27373238445025!3d-25.40934938379782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce6a7a70afc39%3A0x631e2e08b9b09d25!2sR.+Mateus+Leme%2C+2018+-+S%C3%A3o+Francisco%2C+Curitiba+-+PR%2C+80530-010!5e0!3m2!1spt-BR!2sbr!4v1496435613499" width="600" height="395" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
</section>
