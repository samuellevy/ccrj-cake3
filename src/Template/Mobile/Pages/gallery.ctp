<section class="galery featured">
  <h2 class="titlePrimary">Galeria</h2>
  <section class="searchBox">
    <input type="search" name="search" placeholder="Procure pelo cliente ou campanha"><i class="icon-search"></i>
    <select>
      <option value="Selecione a categoria">Selecione a categoria</option>
      <option value="Lorem inpsum">Lorem inpsum</option>
      <option value="Lorem inpsum">Lorem inpsum</option>
    </select>
  </section>
  <section class="featured">
    <h2>Geral<span></span></h2>

    <?php foreach($featured_works as $work):?>
      <div class="featured__full">
        <a href="<?=$this->Url->build(["controller" => "pages","action" => "galleryread", $work->id]);?>">
            <?php echo $this->Html->image('../uploads/files/'.$work['files'][0]['filename']);?>
          <h3><?=$work->sheet->production_company?>//<span><?=$work->sheet->project_title?></span></h3>
        </a>
      </div>
    <?php endforeach;?>

    <?php foreach($works as $work):?>
      <div class="featured__half">
        <div class="featured__half--50">
          <a href="<?=$this->Url->build(["controller" => "pages","action" => "galleryread", $work->id]);?>">
              <?php echo $this->Html->image('../uploads/files/'.$work['files'][0]['filename']);?>
          </a>
        </div>
      </div>
    <?php endforeach;?>
  </section>
  <section class="sendFeatured">
    <h3>Quer aparecer nos <span>destaques do CCRJ?</span></h3><a href="#">Envie sua peça</a>
  </section>
</section>