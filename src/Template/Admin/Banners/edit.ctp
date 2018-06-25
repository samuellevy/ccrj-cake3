<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <h4 class="title">Editar Banner</h4>
        </div>
        <div class="content">
          <?= $this->Form->create($banner, ['type'=>'file']) ?>

          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <?php echo $this->Form->control('title', ['class'=>'form-control', 'label'=>'Título', 'maxlength'=>'85']);?>
              </div>
            </div>
          </div>

          <div class="row">

            <div class="col-md-9">
              <div class="form-group">
                <label>Banner</label><br/>
                <figure class="form-box-img">
                  <?php if(isset($banner['capas'][0])):?>
                    <button type="button" class="btn btn-danger btn-fill remove" data-uid="<?=$banner['capas'][0]['id'];?>">Remover</button>
                    <?php echo $this->Html->image('../uploads/files/'.$banner['capas'][0]['filename'], ['class'=>'form-img', 'data-uid'=>$banner['capas'][0]['id']]);?>
                  <?php else:?>
                    <img class="img-rounded form-img" src="http://via.placeholder.com/750x220">
                  <?php endif;?>
                  <?php echo $this->Form->file('files.1.filename', ['class'=>'form-file']);?>
                  <?php echo $this->Form->hidden('files.1.entity', ['class'=>'form-file', 'value'=>'Banner']);?>
                  <?php echo $this->Form->hidden('files.1.obs', ['class'=>'form-file', 'value'=>'Banner']);?>
                </figure>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-9">
              <div class="form-group">
                <?= $this->Form->button(__('Send'), ['class'=>'btn btn-info btn-fill pull-right']) ?>
              </div>
            </div>
          </div>

          <div class="clearfix"></div>
          <?= $this->Form->end() ?>
        </div>
      </div>
    </div>
  </div>
</div>
