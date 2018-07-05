<section class="newsInfo">
    <div class="wrapper">
        <h2 class="titlePrimary">NOVIDADES</h2>
        <h3><?=$post->title;?></h3>
        <h4><?=$post->description;?></h4>
    </div>
    <div class="imageInfo">
        <?php echo $this->Html->image('../mobile/images/image_user.png')?>
        <div class="wrapper">
        <ul> 
            <li><a href="" id="sharesFace"> <i class="icon-facebook"></i></a></li>
            <li><a href="" id="sharesTwitter"> <i class="icon-twitter"></i></a></li>
        </ul>
        </div>
    </div>
    <div class="wrapper">
        <p class="date"><span>12/05/2018 </span>às <strong>00h00</strong></p>
        <?=$post->content;?>
        <div class="relatedNews">
            <!-- <h3>Relacionadas</h3>
            <div class="relatedNews__box"> 
                <h2>Nome da notícia//</h2>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est eopksio…</p><i class="icon-arrow"></i>
            </div>
            <div class="relatedNews__box"> 
                <h2>Nome da notícia//</h2>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est eopksio…</p><i class="icon-arrow"></i>
            </div>
            <div class="relatedNews__box"> 
                <h2>Nome da notícia//</h2>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est eopksio…</p><i class="icon-arrow"></i>
            </div> -->
        </div>
    </div>
</section>