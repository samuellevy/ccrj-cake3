<!--Acesso-->
<div class="acesso">
  <div class="container-fluid no-padding bgAcesso">
    <div class="container">
      <div class="col-md-10 col-sm-12">
        <h1>BEM-VINDO AO CLUBE DE VANTAGENS</h1>
      </div>
      <div class="col-md-2 col-sm-12 form">
        <form action="">
          <input class="envio-form pull-right" type="submit" value="SAIR">
        </form>
      </div>
    </div>
  </div>
</div>

<!--Filtro-->
<div class="container no-padding">

  <div id="custom-search-input">
    <div class="input-group">
      <input type="text" class="form-control input-lg input-search-clube" placeholder="O que você está proucurando?" />
      <span class="input-group-btn">
        <button class="btn btn-info btn-lg btn-search-clube" type="button">
          BUSCAR
        </button>
      </span>
    </div>
  </div>

  <div class="filtro">
    <form>
      <h5>Filtrar por:</h5>
      <div class="form-group">
        <?php foreach ($categorias as $categoria): ?>
          <label>
            <input type="checkbox" id="<?=$categoria->name?>">
            <span class="label-text"><?=$categoria->name?></span>
          </label>
        <?php endforeach; ?>
        <!--<input type="submit" value="LIMPAR">-->
      </div>
    </form>

    <div class="boxOpcoes col-md-12">
      <?php foreach($clubes as $clube):?>
        <div class="col-md-4 box col-sm-6 no-padding" data-object="<?php echo $clube->category->name;?>">
          <?php if(isset($clube['files'][0])):?>
            <?php echo $this->Html->image('../uploads/files/'.$clube['files'][0]['filename'], ['class'=>'form-img', 'data-uid'=>$clube['files'][0]['id']]);?>
          <?php else:?>
            <img alt="270x270" data-src="holder.js/270x270" class="img-rounded form-img" src="http://via.placeholder.com/270x270">
          <?php endif;?>
          <h3><?=$clube->name?></h3>
          <p><?=substr(htmlspecialchars($clube->description,ENT_QUOTES),0,280);?>...</p>
          <!-- <div class="desconto"><?=substr(htmlspecialchars($clube->advantage,ENT_QUOTES),0,45);?></div> -->
          <div class="cidade"><?=$clube->city_uf;?></div>
          <a href="#" id="item-<?php echo $clube->id;?>" class="btn btn-primary" role="button">SAIBA MAIS</a>
        </div>
      <?php endforeach;?>
      <div class="col-md-12 no-padding">
        <!-- <button class="btn btn-info btn-lg" type="button">CARREGAR MAIS</button> -->
      </div>
    </div>
  </div>
</div>
