<?php //die(debug($banner));?>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <h4 class="title"><?=$banner->title?> </h4>
          <?php if(isset($banner['files'][0])):?>
            <button type="button" class="btn btn-info btn-fill btn-edit"> <?= $this->Html->link(__('Editar'), ['action' => 'edit', $banner->id]) ?></button>
            <?= $this->Html->image('../uploads/files/'.$banner['files'][0]['filename'], ['class'=>'view-image']);?>
          <?php else:?>
            <img class="img-rounded form-img" src="http://via.placeholder.com/750x220">
          <?php endif;?>
        </div>
      </div>
    </div>
  </div>
</div>
