<h1><?=$component->caption?></h1>
<div class="container">
  <h5>Diretoria Executiva:</h5>
  <?php foreach ($team_top as $member): ?>
    <div class="col-md-4 col-sm-4">
      <?php if(isset($member['files'][0])):?>
        <?php echo $this->Html->image('../uploads/files/'.$member['files'][0]['filename'], ['class'=>'img-responsive circle picture none-picture"', 'data-uid'=>$member['files'][0]['id']]);?>
      <?php else:?>
        <img alt="user" class="img-responsive circle picture none-picture" src="http://www.free-icons-download.net/images/user-icon-27998.png">
      <?php endif;?>
      <p>
        <strong><?=$member['name']?></strong><br>
        <?=$member['role']?>
      </p>
    </div>
  <?php endforeach; ?>
</div>

<div class="timeSlider">
  <div class="container">
    <?php foreach ($departments as $department): ?>
      <?php
      $members_count = 0;
      foreach ($department['team'] as $member){
        $members_count = 1;
        break;
      }
      if ($members_count != 0):?>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <h5><?=$department['name']?>:</h5>
        <ul>
          <?php foreach ($department['team'] as $member): ?>
            <li>
              <strong><?=$member['name']?></strong><br>
              <?=$member['role']?>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endif;?>
    <?php endforeach; ?>
  </div>
</div>
