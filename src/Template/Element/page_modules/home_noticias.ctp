	<div class="container bordaN" ng-init="getPosts()">
    <h1><?=$component->caption?></h1>
    <?php foreach ($posts as $post): ?>
    <div class="col-md-3 col-sm-6 col-xs-12 pointer" ng-repeat="post in posts.data" ui-sref="blog.view({postId: post.id})">
      <!-- <div class="important" ng-show="{{post.important}}">
        <div class="seta-3"></div>
        <p>
          IMPORTANTE
        </p>
        <img src="assets/images/star.png" alt="">
      </div> -->
      <figure class="min-234">
      <?php if(isset($post['files'][0])):?>
        <?php echo $this->Html->image('../uploads/files/'.$post['files'][0]['filename'], ['class'=>'img-responsive"', 'data-uid'=>$post['files'][0]['id']]);?>
      <?php else:?>
        <?php echo $this->Html->image('Site.../images/jusprev-default-blog.png', ['class'=>'img-responsive']);?>
      <?php endif;?>
      </figure>
      <!-- <img src="{{post.file_name}}" alt="{{post.alternative_text}}" class="img-responsive"> -->
      <!-- <h2>{{post.title}}</h2> -->
      <h2><?=$post->title?></h2>
      <!-- <p>{{post.description | cut:true:100:'...'}}</p> -->
      <p><?=$post->description?></p>
      <div class="data">
        <p><span><?= $this->FormatDate->formatDate($post->publish_date,'just_day');?><?= $this->FormatDate->formatDate($post->publish_date,'de_mes_ano');?></span> por  <?php //=$post->authors->name ?></p>
      </div>
      <?=$this->Html->link('LER TUDO',['controller' => 'posts', 'action' => 'view', $post->id], ['class'=>'btn btn-primary']); ?>
    </div>
    <?php endforeach;?>

  </div>
  <div class="container">
    <div class="trapezioinvertido">
      <?php echo $this->Html->link(
      'VEJA MAIS NOTÍCIAS',
      ['controller' => 'Posts', 'action' => 'index', '_full' => true],
      ['escape' => false]
      ); ?>
    </div>
  </div>
