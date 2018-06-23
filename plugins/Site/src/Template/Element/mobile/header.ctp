<?php
if($configs['action']!='home'){
    $logo = 'logo-mobile.png';
}else{
    $logo = 'logo.png';
}
?>
<div class="menuMob">
    <section class="inforTop">
    <div class="wrapper"><?=$this->Html->image('Site.../mobile/images/logo-mobile.png');?>
        <div class="clouseLightBox"><i class="icon-clouse"></i></div>
    </div>
    </section>
    <section class="search">
    <div class="wrapper">
        <input type="search" placeholder="Oque você está procurando?"><i class="icon-search"></i>
    </div>
    </section>
    <ul class="list">
        <?=$this->element('navigation');?>
    </ul>
    <div class="social">
    <ul>
        <li><a href="#" alt="Facebook"> <i class="icon-facebook"></i></a></li>
        <li><a href="#" alt="Instagram"> <i class="icon-instagram"></i></a></li>
        <li><a href="#" alt="twitter"> <i class="icon-twitter"></i></a></li>
    </ul>
    </div>
</div>
<header id="header">
    <div class="wrapper">
    <div class="logo"><a href="#"><?=$this->Html->image('Site.../mobile/images/'.$logo);?></a></div>
    <nav id="main_nav">
        <div class="viewMob"><i class="icon-menu"></i></div>
    </nav>
</header>