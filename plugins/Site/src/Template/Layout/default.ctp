<?php $site_name = "JUSPREV"; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <base href="<?=$this->request->webroot;?>">

  <meta charset="UTF-8">
  <title>
      <?=$site_name?>
  </title>

  <!-- Open Graph -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="">
  <meta property="og:description" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <meta http-equiv="content-type" content="application/vnd.ms-excel; charset=UTF-8">

  <!-- Schema -->
  <script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "WebPage",
    "name": "",
    "description": "",
    "url": "",
    "image": ""
  }
  </script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>

  <!-- Viewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Favicon -->
  <link rel="icon" href="<?=$this->Url->image('Site.../images/favicon.png');?>">

  <!-- CSS -->
  <?= $this->Html->css('Site.main.css?build='.uniqid()) ?>

  <!-- JS -->
  <?= $this->Html->script('Site.slick.js?build='.uniqid()) ?>
  <?= $this->Html->script('Site.main.js?build='.uniqid()) ?>

  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P464FQ');</script>
<!-- End Google Tag Manager -->
</head>

<body id="topo">

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P464FQ"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.9&appId=657296890979116";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Start Turn the device div -->
    <div class="turnDeviceNotification"></div>
    <!-- End Turn the device div -->
    <div class="container navbar-container">
      <header scroll>
        <?php echo $this->Element('Site.nav') ?>
      </header>
    </div>

    <!-- Start Dinanmical content -->
    <div ui-view>
      <?= $this->Flash->render() ?>
      <?= $this->fetch('content') ?>
    </div>
    <!-- End Dinanmical content -->

    <footer>
      <div class="container">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <ul class="no-padding">
              <div class="container no-padding">
                <li>
                  <div class="yamm-content">
                    <div class="row no-padding">
                      <ul class="col-sm-3 col-xs-12 no-padding list-unstyled">
                        <li>
                          <h4>NOSSOS SERVIÇOS</h4>
                          <hr>
                        </li>
                        <li><?php echo $this->Html->link(
                          'Plano exclusivo - PLANJUS',
                          ['controller' => 'Pages', 'action' => 'planjus', '_full' => true]
                        ); ?></li>
                        <li><?php echo $this->Html->link(
                          'Portabilidade',
                          ['controller' => 'Pages', 'action' => 'portabilidade', '_full' => true]
                        ); ?></li>
                        <li><?php echo $this->Html->link(
                          'Benefícios',
                          ['controller' => 'Pages', 'action' => 'beneficios', '_full' => true]
                        ); ?></li>
                        <li><?php echo $this->Html->link(
                          'FALE CONOSCO',
                          ['controller' => 'Pages', 'action' => 'contato', '_full' => true],
                          ['class' => 'btn btn-primary', 'role' => 'button']
                        ); ?></li>
                        <!-- <li><img src="images/logo-previc.jpg" class="img-responsive" alt=""/></li> -->
                      </ul>
                      <ul class="col-sm-2 col-xs-12 list-unstyled menuBg">
                        <li><?php echo $this->Html->link(
                          'Institucional',
                          ['controller' => 'Pages', 'action' => 'institucional', '_full' => true]
                        ); ?></li>
                        <li><?php echo $this->Html->link(
                          'Nossos Números',
                          ['controller' => 'Pages', 'action' => 'numeros', '_full' => true]
                        ); ?></li>
                        <li><?php echo $this->Html->link(
                          'Clube de Vantagens',
                          ['controller' => 'Pages', 'action' => 'clube', '_full' => true]
                        ); ?></li>
                        <li><?php echo $this->Html->link(
                          'Instituidoras',
                          ['controller' => 'Pages', 'action' => 'instituidoras', '_full' => true]
                        ); ?></li>
                        <li><?php echo $this->Html->link(
                          'Comunicação',
                          ['controller' => 'Posts', 'action' => 'index', '_full' => true]
                        ); ?></li>
                        <li><?php echo $this->Html->link(
                          'Contato',
                          ['controller' => 'Pages', 'action' => 'contato', '_full' => true]
                        ); ?></li>
                      </ul>
                      <ul class="col-sm-3 list-unstyled">
                        <!-- <li ng-init="getLastReport()">
                          <h4>{{report.title}}</h4>
                          <hr>
                        </li>
                        <li><a ng-bind="formatMonthYear(report.created_at)"></a></li>
                        <li><a href="{{report.file_name}}" target="_blank" class="btn btn-primary" role="button">FAÇA O DOWNLOAD</a></li> -->

                        <li>
                          <h4>OUTROS</h4>
                          <hr>
                        </li>
                        <li><a href="https://www.meufuturo.net.br/jusprev/simulador/renda/" target="_blank">Simulador de aposentadoria</a></li>
                        <li><a href="https://www.meufuturo.net.br/jusprev/simulador/educacional/" target="_blank">Simulador de renda educacional</a></li>
                        <li><a href="http://www4.planalto.gov.br/legislacao" target="_blank">Legislação</a></li>
                      </ul>
                      <ul class="col-sm-3 col-xs-12 list-unstyled facebook">
                        <div class="fb-page" data-href="https://www.facebook.com/jusprev/?ref=br_rs" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/jusprev/?ref=br_rs" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/jusprev/?ref=br_rs">Jusprev Previdência Complementar Associativa</a></blockquote></div>
                      </ul>
                    </div>
                  </div>
                </li>
              </div>
            </ul>
          </li>
        </ul>

        <div class="container copyright no-padding">
          <div class="col-md-11 no-padding">
            <p>Copyright 2017 - JUSPREV</p>
          </div>
          <div class="col-md-11 col-xs-12">
            <p class="text">Rua: Mateus Leme, nº 2018, Térreo, Centro Cívico, Curitiba – PR CEP. 80530-010 Fone: (41) 3252-3400 / Fax: (41) 3252-8910 / Email: jusprev@jusprev.org.br
            <br/>CENTRAL DE RELACIONAMENTO COM O PARTICIPANTE: 0800 052 34 34</p>
            </p>
          </div>
          <div class="col-md-1">
            <a href="http://www.3aworldwide.com.br/" target="_blank">
              <!-- <img src="images/logo-3aww.jpg" class="img-responsive" alt=""/> -->
            </a>
          </div>
        </div>
      </div>
    </footer>
  </body>

  </html>
