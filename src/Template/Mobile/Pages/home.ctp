<section class="home">
    <div class="webdoor">
        <div class="webdoor_front">
        </div>

        <div class="webdoor_pager"><?=$this->Html->image('Site.../images/home_webdoor.jpg');?></div>
    </div>
    <section class="galleryMob">
        <div class="titleContent">
            <h2>Galeria</h2><a href="">Veja mais <span>[+]</span></a>
        </div>

		<?php foreach($works as $key=>$work):?>
            <?php echo $this->Html->image('../uploads/files/'.$work['files'][0]['filename']);?>

            <div class="textInfo">
                <h3><?=$work->sheet->production_company?></h3>
                <p><?=substr($work->description,0,115)?></p><i class="icon-arrowHome"><img src="/ccrj-cake3/site/img/../mobile/images/arrowHome.png" alt="" /></i>
            </div>
		<?php endforeach;?>
    </section>
    <div class="viewMob"> 
        <section class="publicationsMob">
            <div class="imageBack">
                <?php echo $this->Html->image('Site.mobile/Video.jpg');?>
            </div>
            <div class="contentPublic">
                <div class="wrapper">
                    <h2>Novidades</h2><a href="<?=$this->Url->build(["controller" => "pages","action" => "news"]);?>">Veja mais <span>[+]</span></a>
                </div>
                <div class="bgNovidades"></div>
                <div class="wrapper">
                    <?php foreach($posts as $key=>$post):?>
                        <?php if($key!=0):?>
                        
                        <div class="item"> 
                            <h3><?=$post->title;?></h3>
                            <p><?=$post->description;?></p>
                        </div>
                        
                        <?php endif;?>
                    <?php endforeach;?> 
                   
                </div>
            </div>
        </section>
    </div>
    <div class="viewMob"> 
        <section class="publicationsMob opinion">
            <div class="wrapper">
                <h2>Opinião</h2><a href="">Veja mais <span>[+]</span></a>
            </div>
            <div class="bgNovidades"></div>
            <div class="wrapper">
                <h3>TÍTULO DA NOTICIA<span>EM ARTIGO EXCLUSIVO PARA O CCRJ</span></h3>
                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum maximus de fringilla sodales. Maecenas varius urnar…” </p>
            </div>
        </section>

        <?php foreach($testimonials as $testimonial):?>
            <section class="publicationsMob opinion">
                <div class="wrapper">
                    <h2>Opinião</h2><a href="">Veja mais <span>[+]</span></a>
                </div>
                <div class="bgNovidades"></div>
                <div class="wrapper">
                    <h3><?=$testimonial->name;?> <span>EM ARTIGO EXCLUSIVO PARA O CCRJ</span></h3>
                    <p>“<?=substr(strip_tags($testimonial->quote),0,100)?>...” </p>
                </div>
            </section>
        <?php endforeach;?>
        
    </div>
</section>