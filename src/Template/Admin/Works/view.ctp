<?php //die(debug($work));?>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <h2><?=$work->sheet->project_title;?></h2>
          <p><?= h($this->FormatDate->formatDate($work->created, 'blog-date')); ?></p>
          <p><strong>Nome: </strong><?=$work->sender_name;?></p>
          <p><strong>Email: </strong><?=$work->sender_email;?></p>
          <p><strong>Cliente: </strong><span><?=$work->sheet->advertiser;?></span></p>
          <p><strong>Agência: </strong><span><?=$work->sheet->production_company;?></span></p>
          <p><strong>Descrição: </strong><?=$work->description;?></p>
          <p><strong>Direção de Criação: </strong><?=$work->sheet->creative_director;?></p>
          <p><strong>Direção de Arte: </strong><?=$work->sheet->art_director;?></p>
          <p><strong>Redação: </strong><?=$work->sheet->writer;?></p>
          <p><strong>Ilustração: </strong><?=$work->sheet->illustator;?></p>
          <p><strong>Fotografia: </strong><?=$work->sheet->photographer;?></p>
          <p><strong>Produtora de Áudio: </strong><?=$work->sheet->music_producer;?></p>
          <p><strong>Produtora de Vídeo: </strong><?=$work->sheet->video_producer;?></p>
          <p><strong>Estúdio: </strong><?=$work->sheet->post_production_company;?></p>
          <div class="images">
            <?php foreach($work->files as $file):?>
              <?php echo $this->Html->image('../uploads/files/'.$file['filename']);?>
            <?php endforeach;?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
