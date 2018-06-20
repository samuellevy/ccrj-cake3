<div class="sidebar col-md-4">

  <!--Search-->
  <div id="custom-search-input">
    <form>
      <input type="text" class="form-control input-lg" placeholder="O que você está proucurando?" />
      <span class="input-group-btn">
        <button class="btn btn-info btn-lg" type="submit">
          <i class="fa fa-search" aria-hidden="true"></i>
        </button>
      </span>
    </form>
  </div>

  <!--Categorias-->
  <div class="categorias">
    <h1>Categorias</h1>
    <ul>
      <a href="<?=$this->Url->build("/posts");?>">
        <li <?=$category_id==null?"class='active'":""?>>Todos</li>
      </a>
      <?php foreach ($categories_post as $category): ?>
      <a href="<?=$this->Url->build("/posts/?type=".$category->slug);?>">
        <li <?=$category->id==$category_id?"class='active'":""?>>
          <?=$category->category?>
        </li>
      </a>
      <?php endforeach;?>
    </ul>
  </div>

  <!--Tags-->
  <!-- <div class="tags">
    <h1>Tags</h1>
    <div class="post-tag">
      <?php foreach($tags as $tag): ?>
      <a><?=$tag->name?></a>
      <?php endforeach;?>
    </div>
  </div> -->

  <!--Populares-->
  <div class="postPopulares">
    <h1>Posts mais populares</h1>
    <?php foreach ($popular_posts as $post): ?>
    <div class="boxpost">
      <h2>
        <?php echo $this->Html->link(
        $post->title,
        ['controller' => 'posts', 'action' => 'view', $post->id, '_full' => true]
        ); ?>
      </h2>
      <div class="data"><?=$this->FormatDate->formatDate($post->publish_date, 'pt-numbers')?></div>
      <!-- <div class="post-tag">
        <?php foreach($post->blog_post_tags as $post_tag): ?>
        <a href="#"><?=$post_tag->blog_tag->name;?></a>
        <?php endforeach; ?>
      </div> -->
    </div>
    <?php endforeach;?>

  </div>

</div>
