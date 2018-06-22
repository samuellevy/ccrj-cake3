<section class="internal">
  <section class="opinion">
    <div class="wrapper">
      <div class="writer">
        <div class="media"><?=$this->Html->image('Site.../images/writer_internal.png', ['alt'=>'']);?></div>
        <div class="text" style='display: none;'>
          <p>“Aliquam imperdiet vel dolor sit amet tincidunt. Donec maximus et leo sed commodo. Suspendisse potenti. Maecenas suscipit massa a lectus aliquam semper. Duis volutpat auctor ante at pulvinar. Pellentesque volutpat sit amet qua.”</p>
        </div>
      </div>
      <article class="article">
        <h2 class="name"><?=$testimonials[0]['name'];?></h2>
        <p class="helper"><?=$testimonials[0]['subtitle'];?></p>
        <div class="social_media"><span>Compartilhe:</span><a href="#"><?=$this->Html->image('Site.../images/fb.png', ['alt'=>'']);?></a><a href="#"><?=$this->Html->image('Site.../images/tw.png', ['alt'=>'']);?></a></div>
        <div class="content_area">
          <?=$testimonials[0]['testimony'];?>
        </div>
        <div class="social_media right"><span>Compartilhe:</span><a href="#"><?=$this->Html->image('Site.../images/fb.png', ['alt'=>'']);?></a><a href="#"><?=$this->Html->image('Site.../images/tw.png', ['alt'=>'']);?></a></div>
      </article>
    </div>
  </section>
  <section class="others_opinions">
    <div class="wrapper">
      <div class="cards">
        <?php foreach($testimonials as $key=>$testimonial):?>
          <?php if($key>0):?>
            <div class="card_item">
              <div class="media"><?=$this->Html->image('Site.../images/writer_internal.png', ['alt'=>'']);?></div>
              <h4 class="title"><?=$testimonial->name;?></h4>
              <p class="desc"><?=$testimonial->subtitle?></p><a class="view_more" href="#">VEJA MAIS [+]</a>
            </div>
          <?php endif;?>
        <?php endforeach;?>
      </div>
    </div>
  </section>
</section>