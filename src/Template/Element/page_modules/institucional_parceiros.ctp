<div class="container">
  <h1><?=$component->caption?></h1>
  <div class="box-parceiros">

    <div class="row">
      <?php foreach($parceiros as $parceiro):?>
        <div>
          <?php if(isset($parceiro['files'][0])):?>
            <a href="<?=$parceiro->site?>">
              <?php echo $this->Html->image('../uploads/files/'.$parceiro['files'][0]['filename'], ['class'=>'img-responsive"', 'data-uid'=>$parceiro['files'][0]['id']]);?>
            </a>
          <?php endif;?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
