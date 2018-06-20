<div class="container">
  <h1><?=$component->caption?></h1>

  <div class="col-md-3">
    <img src="<?=$this->Url->image('Site.../images/img-institucional.jpg');?>" alt="" class="center-block" />
  </div>
  <div class="col-md-9">
    <?php foreach($documents as $document):?>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <div class="divDownloads">
        <p><?=$document->title?></p>
      </div>
      <div class="bntDownloads">
        <a href="<?=$this->Url->image('../documents/');?><?=$document->Files['filename']?>" target="_blank">DOWNLOAD</a>
      </div>
    </div>
    <?php endforeach;?>
  </div>

</div>
