<section class="internal clubnews fix_header">
  <section class="featured_news">
    <div class="info_news">
      <h1 class="page_title">NOVIDADES</h1>
      <div class="slider_news">
        <?php foreach($posts as $key=>$post):?>
          <div class="item">
            <div class="head"><span>00/00/00 às 00h00</span><a href="#"><?=$this->Html->image('Site.../images/fb.png', ['alt'=>'']);?></a><a href="#"><?=$this->Html->image('Site.../images/tw.png', ['alt'=>'']);?></a></div>
            <h3 class="title"><?=$post->title;?> </h3>
            <p class="desc"><?=$post->description;?></p><a class="view_more" href="#">VEJA MAIS [+]</a>
          </div>
          <?php if($key==2) break; ?>
        <?php endforeach;?>
      </div>
    </div>
    <div class="media">
      <div class="slider">
        <?php foreach($posts as $post):?>
            <?php echo $this->Html->image('../uploads/files/'.$post['files'][0]['filename']);?>
            <?php if($key==2) break; ?>
        <?php endforeach;?>
      </div>
    </div>
  </section>
  <section class="news">
    <div class="wrapper">
      <div class="cards type2">
        <?php foreach($posts as $key=>$post):?>
          <?php if($key > 2):?>
            <div class="card_item"><span class="date">00/00/00 às 00h00</span>
              <h4 class="title"><?=$post->title;?></h4>
              <p class="desc"><?=$post->description;?></p>
              <div class="media"><?php echo $this->Html->image('../uploads/files/'.$post['files'][0]['filename']);?></div><a class="view_more" href="#">VEJA MAIS [+]</a>
            </div>
          <?php endif;?>
        <?php endforeach;?>
      </div>
    </div>
  </section>
</section>