<section class="home">
    <div class="webdoor">
        <div class="wrapper">
            <div class="webdoor_pager"></div>
        </div>
    </div>
    <div class="viewMob">
        <section class="galleryMob">
            <div class="titleContent">
                <h2>Galeria</h2><a href="">Veja mais <span>[+]</span></a>
            </div>
            <?php foreach($works as $key=>$work):?>
                <?php echo $this->Html->image('../uploads/files/'.$work['files'][0]['filename'], ['title'=>$work->sheet->project_title]);?>
                <div class="textInfo">
                    <h3><?=$work->sheet->production_company;?></h3>
                    <p><?=$work->description;?></i>
                </div>
                <?php break;?>
            <?php endforeach;?>
        </section>
    </div>
    <div class="viewMob"> 
        <section class="publicationsMob">
            <div class="wrapper">
                <h2>Novidades</h2><a href="">Veja mais <span>[+]</span></a>
            </div>
            <div class="bgNovidades"></div>
            <div class="wrapper">
                <h3>TÍTULO DA NOTICIA</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum maximus fringilla sodales. Maecenas varius urn…</p><i class="icon-arrowHome"><?php echo $this->Html->image('../mobile/images/arrowHome.png')?></i>
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
    </div>
</section>