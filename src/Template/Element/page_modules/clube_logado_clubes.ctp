<?php foreach($clubes as $clube):?>
<div class="modal-clube" data-target="item-<?php echo $clube->id;?>">
  <div class="content">
    <div class="wrap">
      <div class="close-btn">x</div>

        <?=$clube->body?>
        <?php if(!empty($clube->local)): ?>
          <div class="map col-md-12">
            <h3>Como chegar?</h3>
            <?=$clube->local?>
          </div>
        <?php endif;?>

    </div>
  </div>
</div>
<?php endforeach;?>
