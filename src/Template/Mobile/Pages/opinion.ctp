<section class="opniao">
    <section class="opinionTop">
        <div class="opinionTop__image">
        <div class="wrapper">
            <h2 class="titlePrimary">Opnião</h2>
        </div>
        </div>
        <div class="opinionTop__text">
        <div class="wrapper">
            <h2 class="titlePrimary"><?=$testimonials[0]['name']?></h2>
            <h3><?=$testimonials[0]['subtitle']?></h3>
            <p><?=$testimonials[0]['quote']?></p>
        </div>
        </div>
    </section>
    <div class="wrapper">
        <section class="moreOpinion">
        <?php foreach($testimonials as $key=>$testimonial):?>
            <?php if($key>0):?>
            <div class="moreOpinion__box"><?php echo $this->Html->image('../mobile/images/image_user.png')?>
                <h2><?=$testimonial->name;?></h2>
                <h3><?=$testimonial->subtitle;?></h3>
                <p><?=$testimonial->quote;?></p>
                <a href="<?=$this->Url->build(["controller" => "pages","action" => "galleryread", $testimonial->id]);?>" alt="Opnião de Bruno Oppido">Veja mais <span>[+]</span></a>
            </div>
            <?php endif;?>
        <?php endforeach;?>
        </section>
    </div>
</section>