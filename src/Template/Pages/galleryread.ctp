<section class="internal gallery white_header">
  <div class="filter">
    <div class="wrapper">
      <div class="wrap">
        <form class="form_area filter_form">
          <div class="form_item">
            <label class="label">
              <input class="input_text" type="text" placeholder="Procure pelo cliente ou campanha">
              <button class="action" type="submit"></button>
            </label>
          </div>
        </form>
        <ul class="list">
          <li><a href="<?=$this->Url->build(["controller" => "pages","action" => "gallery"]);?>?c=filme">Filme</a></li>
          <li><a href="<?=$this->Url->build(["controller" => "pages","action" => "gallery"]);?>?c=impresso">Impresso</a></li>
          <li><a href="<?=$this->Url->build(["controller" => "pages","action" => "gallery"]);?>?c=marketing direto">Marketing Direto</a></li>
          <li><a href="<?=$this->Url->build(["controller" => "pages","action" => "gallery"]);?>?c=digital">Digital</a></li>
          <li><a href="<?=$this->Url->build(["controller" => "pages","action" => "gallery"]);?>?c=outdoor">Outdoor</a></li>
          <li><a href="<?=$this->Url->build(["controller" => "pages","action" => "gallery"]);?>?c=radio">Rádio</a></li>
          <li><a href="<?=$this->Url->build(["controller" => "pages","action" => "gallery"]);?>?c=content">Content</a></li>
          <li><a href="<?=$this->Url->build(["controller" => "pages","action" => "gallery"]);?>?c=experimento">Experimento</a></li>
          <li><a href="<?=$this->Url->build(["controller" => "pages","action" => "gallery"]);?>?c=integrada">Integrada</a></li>
          <li><a href="<?=$this->Url->build(["controller" => "pages","action" => "gallery"]);?>?c=design">Design</a></li>
        </ul>
      </div>
      <h1 class="page_title">GALERIA</h1>
    </div>
  </div>
  <section class="main_gallery_view">
    <div class="wrapper">
      <div class="content">
        <div class="head"><span><?= h($this->FormatDate->formatDate($work->created, 'blog-date')); ?></span><span class="share">Compartilhe:</span><a href="#"><?=$this->Html->image('Site.../images/fb.png', ['alt'=>'']);?></a><a href="#"><?=$this->Html->image('Site.../images/tw.png', ['alt'=>'']);?></a></div>
        <h2 class="name"><?=$work->sheet->project_title;?></h2>
        <p class="hint"><strong>Cliente: </strong><span><?=$work->sheet->advertiser;?></span></p>
        <p class="hint"><strong>Agência: </strong><span><?=$work->sheet->production_company;?></span></p>
        <h3 class="title">DESCRIÇÃO</h3>
        <p class="desc"><?=$work->description;?></p>
        <h3 class="title">FICHA TÉCNICA</h3>
        <ul class="list">
          <li class="item"> <span>Direção de Criação:</span><span> <?=$work->sheet->creative_director;?></span></li>
          <li class="item"> <span>Direção de Arte:</span><span> <?=$work->sheet->art_director;?></span></li>
          <li class="item"> <span>Redação:</span><span> <?=$work->sheet->writer;?></span></li>
          <li class="item"> <span>Ilustração:</span><span> <?=$work->sheet->illustator;?></span></li>
          <li class="item"> <span>Fotografia:</span><span> <?=$work->sheet->photographer;?></span></li>
          <li class="item"> <span>Produtora de Áudio:</span><span> <?=$work->sheet->music_producer;?></span></li>
          <li class="item"> <span>Produtora de Vídeo:</span><span> <?=$work->sheet->video_producer;?></span></li>
          <li class="item"> <span>Estúdio:</span><span> <?=$work->sheet->post_production_company;?></span></li>
        </ul>
      </div>
      <div class="wrap">
        <div class="slider">
          <!-- MAIN SLIDES-->
          <div class="main_slider">
            <?php if(isset($work->files)):?>
              <?php foreach($work->files as $file):?>
                <div><?php echo $this->Html->image('../uploads/files/'.$file['filename']);?></div>
              <?php endforeach;?>
            <?php endif;?>
            <?php if(isset($work->medias)):?>
              <?php foreach($work->medias as $media):?>
                <iframe src="<?=$media['url'];?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
              <?php endforeach;?>
            <?php endif;?>
          </div>
          <!-- THUMBNAILS-->
          <div class="slider-nav-thumbnails">
            <?php if(isset($work->files)):?>
              <?php foreach($work->files as $file):?>
                <div><?php echo $this->Html->image('../uploads/files/'.$file['filename']);?></div>
              <?php endforeach;?>
            <?php endif;?>
            <?php if(isset($work->medias)):?>
              <?php foreach($work->medias as $media):
                $videoURL = $media['url'];
                $urlArr = explode("/",$videoURL);
                $urlArrNum = count($urlArr);
                $youtubeVideoId = $urlArr[$urlArrNum - 1];
                $thumbURL = 'http://img.youtube.com/vi/'.$youtubeVideoId.'/maxresdefault.jpg';
                echo $this->Html->image($thumbURL);
              endforeach;?>
            <?php endif;?>
            
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="others_galleries">
    <div class="wrapper">
      <!-- <h4 class="title">RELACIONADAS//</h4> -->
      <div class="cards_galleries">

        <div class="card_item">
          <!-- <div class="media"><?=$this->Html->image('Site.../images/galeria1.png', ['alt'=>'']);?>
            <p><strong>CLIENTE// </strong><span>Nome da Campanha</span></p>
          </div><a class="view_more" href="#">VEJA MAIS [+]</a> -->
        </div>

      </div>
    </div>
  </section>
</section>
