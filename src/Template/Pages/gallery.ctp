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
            <li><a href="?c=filme">Filme</a></li>
            <li><a href="?c=impresso">Impresso</a></li>
            <li><a href="?c=marketing direto">Marketing Direto</a></li>
            <li><a href="?c=digital">Digital</a></li>
            <li><a href="?c=outdoor">Outdoor</a></li>
            <li><a href="?c=radio">Rádio</a></li>
            <li><a href="?c=content">Content</a></li>
            <li><a href="?c=experimento">Experimento</a></li>
            <li><a href="?c=integrada">Integrada</a></li>
            <li><a href="?c=design">Design</a></li>
          </ul>
        </div>
        <h1 class="page_title">GALERIA</h1>
      </div>
    </div>
    <section class="main_gallery">
      <div class="wrapper">
        <div class="info_news">
          <div class="slider_news">
            <?php foreach($featured_works as $work):?>
            <div class="item"><span class="tag">DESTAQUE// IMPRESSO</span>
              <h3 class="title"><?=$work->sheet->project_title?></h3>
              <p class="hint"><?=$work->sheet->advertiser?></p>
              <p class="hint"><?=$work->sheet->production_company?></p><a class="view_more" href="#">VEJA MAIS [+]</a>
            </div>
            <?php endforeach;?>
          </div>
        </div>
        <div class="media">
          <div class="slider">
            <?php foreach($featured_works as $work):?>
              <?php echo $this->Html->image('../uploads/files/'.$work['files'][0]['filename']);?>
            <?php endforeach;?>
          </div>
        </div>
      </div>
    </section>
    <div class="row_send">
      <div class="wrapper">
        <p>Quer aparecer nos destaques do CCRJ?</p><a class="send_link" href="#">ENVIE SUA PEÇA</a>
      </div>
    </div>
    <section class="others_galleries">
      <div class="wrapper">
        <h4 class="title"><?=$selected_category!=null?$selected_category:'Recentes'?>//</h4>
        <div class="cards_galleries">
          <?php foreach($works as $work):?>
          <div class="card_item">
            <div class="media"><?=$this->Html->image('Site.../images/galeria1.png', ['alt'=>'']);?>
              <p><strong><?=$work->sheet->avertiser?>// </strong><span><?=$work->sheet->project_title?></span></p>
            </div><a class="view_more" href="#">VEJA MAIS [+]</a>
          </div>
          <?php endforeach;?>
        </div>
      </div>
    </section>
  </section>