<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <?= $this->Html->css('Site.main.css'); ?>
    <title>Home</title>
  </head>
  <body>
    <?=$this->element('header');?>
    <div class="webdoor">
      <div class="wrapper">
        <div class="item"><img src="images/home_webdoor.jpg" title="Destaque 1"></div>
        <div class="webdoor_pager"></div>
        <div class="brand_layer">
          <div class="row right"><img src="images/bandeira_b.png"><img src="images/bandeira_b.png"><img src="images/bandeira_b.png"><img src="images/bandeira_b.png"><img src="images/bandeira_b.png">
          </div>
          <div class="row left"><img src="images/bandeira_a.png"><img src="images/bandeira_a.png"><img src="images/bandeira_a.png"><img src="images/bandeira_a.png"><img src="images/bandeira_a.png">
          </div>
          <div class="row right"><img src="images/bandeira_b.png"><img src="images/bandeira_b.png"><img src="images/bandeira_b.png"><img src="images/bandeira_b.png"><img src="images/bandeira_b.png">
          </div>
          <div class="row left"><img src="images/bandeira_a.png"><img src="images/bandeira_a.png"><img src="images/bandeira_a.png"><img src="images/bandeira_a.png"><img src="images/bandeira_a.png">
          </div>
          <div class="row right"><img src="images/bandeira_b.png"><img src="images/bandeira_b.png"><img src="images/bandeira_b.png"><img src="images/bandeira_b.png"><img src="images/bandeira_b.png">
          </div>
          <div class="row left"><img src="images/bandeira_a.png"><img src="images/bandeira_a.png"><img src="images/bandeira_a.png"><img src="images/bandeira_a.png"><img src="images/bandeira_a.png">
          </div>
          <div class="row right"><img src="images/bandeira_b.png"><img src="images/bandeira_b.png"><img src="images/bandeira_b.png"><img src="images/bandeira_b.png"><img src="images/bandeira_b.png">
          </div>
          <div class="row left"><img src="images/bandeira_a.png"><img src="images/bandeira_a.png"><img src="images/bandeira_a.png"><img src="images/bandeira_a.png"><img src="images/bandeira_a.png">
          </div>
          <div class="row right"><img src="images/bandeira_b.png"><img src="images/bandeira_b.png"><img src="images/bandeira_b.png"><img src="images/bandeira_b.png"><img src="images/bandeira_b.png">
          </div>
          <div class="row left"><img src="images/bandeira_a.png"><img src="images/bandeira_a.png"><img src="images/bandeira_a.png"><img src="images/bandeira_a.png"><img src="images/bandeira_a.png">
          </div>
        </div>
        <div class="webdoor_footer"><a class="arrow" href="#"><img src="images/arrow_wd.png"></a></div>
      </div>
    </div>
    <section class="gallery_featured">
      <div class="wrapper"><a class="close_gallery" href="#"></a>
        <div class="section_title">
          <h2 class="title"> <span>Galeria</span></h2><a class="view_more" href="#">VEJA MAIS <span>[+]</span></a>
        </div>
        <div class="gallery_item item-1">
          <div class="media"><img src="images/gallery_3.jpg"></div>
          <div class="text">
            <p class="name">AGENCY XXXXX</p>
            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum maximus fringilla sodales. Maecenas varius urn…</p>
          </div>
        </div>
        <div class="gallery_item item-2">
          <div class="media"><img src="images/gallery_2.jpg"></div>
          <div class="text">
            <p class="name">AGENCY XXXXX</p>
            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum maximus fringilla sodales. Maecenas varius urn…</p>
          </div>
        </div>
        <div class="gallery_item item-3">
          <div class="media"><img src="images/gallery_3.jpg"></div>
          <div class="text">
            <p class="name">AGENCY XXXXX</p>
            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum maximus fringilla sodales. Maecenas varius urn…</p>
          </div>
        </div>
      </div>
    </section>
    <section class="new_publications">
      <div class="wrapper">
        <div class="section_title">
          <h2 class="title"> <span>novi <br> dades</span></h2><a class="view_more" href="#">VEJA MAIS <span>[+]</span></a>
        </div>
        <div class="main_post">
          <div class="media"><img src="images/image_2.jpg" alt=""></div>
        </div>
        <div class="publications">
          <div class="wrapper">
            <div class="featured_new">
              <h4 class="title">TÍTULO DA NOTÍCIA</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum maximus fringilla sodales. Maecenas varius urn…</p>
            </div>
            <ul class="list">
              <li class="item"> 
                <p> <strong>DESTAQUE // </strong><span> 6 diretores de criação comentam as mudanças no Cannes Lions</span></p><a class="view_more" href="#">VEJA MAIS [+]</a>
              </li>
              <li class="item"> 
                <p> <strong>DESTAQUE // </strong><span> 6 diretores de criação comentam as mudanças no Cannes Lions</span></p><a class="view_more" href="#">VEJA MAIS [+]</a>
              </li>
              <li class="item"> 
                <p> <strong>DESTAQUE // </strong><span> 6 diretores de criação comentam as mudanças no Cannes Lions</span></p><a class="view_more" href="#">VEJA MAIS [+]</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section class="opinion_featured">
      <div class="media">
        <div class="writer"><img src="images/home_writer.jpg" alt=""></div>
      </div>
      <div class="wrapper">
        <div class="section_title">
          <h2 class="title"> <span>opinião</span></h2><a class="view_more" href="#">VEJA MAIS <span>[+]</span></a>
          <p class="name"><strong class="name">BRUNO OPPIDO</strong><small class="info">EM ARTIGO EXCLUSIVO PARA O CCRJ</small></p>
          <p class="desc">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum maximus de fringilla sodales. Maecenas varius urnar…”</p>
        </div>
      </div>
    </section>
    <?=$this->element('footer');?>
    <?= $this->Html->script('Site.main.js'); ?>
  </body>
</html>