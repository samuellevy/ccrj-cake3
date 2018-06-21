<section id="envie">
    <div class="wrapper">
    <h1 class="page_title">ENVIE SUA PEÇA</h1>
        <?= $this->Form->create($work, ['type'=>'file', 'class'=>'form_area send']) ?>
        <div class="column">
        <h3 class="title">CONTATO</h3>
        <div class="form_item">
            <?=$this->Form->control('sender_name', ['class'=>'input_text', 'placeholder'=>'Nome Completo', 'label'=>false]);?>
        </div>
        <div class="form_item">
            <?=$this->Form->control('sender_email', ['class'=>'input_text', 'placeholder'=>'E-mail', 'label'=>false]);?>
        </div>
        <h3 class="title">DESCRIÇÃO DA PEÇA</h3>
        <div class="form_item">
            <?=$this->Form->control('description', ['class'=>'input_text', 'placeholder'=>'', 'label'=>false]);?>
        </div>
        </div>
        <div class="column">
        <h3 class="title">FICHA TÉCNICA</h3>
        <div class="form_item">
            <?=$this->Form->control('sheet.advertiser', ['class'=>'input_text', 'placeholder'=>'Cliente', 'label'=>false]);?>
        </div>
        <div class="form_item">
            <?=$this->Form->control('sheet.project_title', ['class'=>'input_text', 'placeholder'=>'Título', 'label'=>false]);?>
        </div>
        <div class="form_item">
            <?=$this->Form->control('sheet.production_company', ['class'=>'input_text', 'placeholder'=>'Agência', 'label'=>false]);?>
        </div>
        <div class="form_item">
            <?=$this->Form->control('sheet.creative_director', ['class'=>'input_text', 'placeholder'=>'Direção de criação', 'label'=>false]);?>
        </div>
        <div class="form_item">
            <?=$this->Form->control('sheet.art_director', ['class'=>'input_text', 'placeholder'=>'Direção de arte', 'label'=>false]);?>
        </div>
        <div class="form_item">
            <?=$this->Form->control('sheet.writer', ['class'=>'input_text', 'placeholder'=>'Redação', 'label'=>false]);?>
        </div>
        </div>
        <div class="column">
        <div class="form_item">
            <?=$this->Form->control('sheet.illustrator', ['class'=>'input_text', 'placeholder'=>'Ilustração', 'label'=>false]);?>
        </div>
        <div class="form_item">
            <?=$this->Form->control('sheet.photographer', ['class'=>'input_text', 'placeholder'=>'Fotografia', 'label'=>false]);?>
        </div>
        <div class="form_item">
            <?=$this->Form->control('sheet.music_producer', ['class'=>'input_text', 'placeholder'=>'Produtora de áudio', 'label'=>false]);?>
        </div>
        <div class="form_item">
            <?=$this->Form->control('sheet.video_producer', ['class'=>'input_text', 'placeholder'=>'Produtora de vídeo', 'label'=>false]);?>
        </div>
        <div class="form_item">
            <?=$this->Form->control('sheet.post_production_company', ['class'=>'input_text', 'placeholder'=>'Estúdio', 'label'=>false]);?>
        </div>
        <div class="form_item select">
            <?=$this->Form->control('sheet.category_id', ['class'=>'input_text', 'label'=>false, 'options'=>$categories]);?>
        </div>
        </div>
        <div class="wrap">
        <div class="row_send_file">
            <div class="form_item file">
            <label class="custom-file-upload"><img src="images/doc.png" alt=""><span class="file_text">Envie seu arquivo</span>
                <?php echo $this->Form->file('files.0.filename', ['class'=>'form-file']);?>
                <?php echo $this->Form->hidden('files.0.entity', ['class'=>'form-file', 'value'=>'Work']);?>
                <?php echo $this->Form->hidden('files.0.obs', ['class'=>'form-file', 'value'=>'Photo']);?>
            </label><span class="hint">O arquivo deve ter no máximo XXMB e estar no formato jpeg.</span>
            </div><span class="separator">Ou</span>
            <div class="form_item">
            <input class="input_link" type="text" placeholder="Link do Youtube ou Vimeo">
            </div>
        </div>
        </div>
        <div class="row_action"><a class="add_file" href="#">Adicionar mais arquivos</a>
        <button class="send" type="submit">Enviar</button>
        </div>
    </form>
    </div>
</section>