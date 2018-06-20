<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <?= $this->Html->css('Site.main.css'); ?>
    <title>Envie sua peça</title>
  </head>
  <body class="internal white_header">
    <header class="interna" id="header">
      <div class="wrapper">
        <div class="logo"><a href="#"><img src="images/logo_small.png"></a></div>
        <nav id="main_nav">
          <ul class="list">
            <li class="list-item"><a class="link active" href="#"><span>O clube</span></a></li>
            <li class="list-item"><a class="link" href="#"><span>Galeria</span></a></li>
            <li class="list-item"><a class="link" href="#"><span>Novidades</span></a></li>
            <li class="list-item"><a class="link" href="#"><span>OPINIÃO</span></a></li>
            <li class="list-item"><a class="link" href="#"><span>Envie sua peça</span></a></li>
            <li class="list-item"><a class="link" href="#"><span>Contato</span></a></li>
          </ul>
          <form class="form_area search_header">
            <div class="form_item">
              <label class="label">
                <input class="input_text" type="text" placeholder="pesquisar">
                <button class="action" type="submit"></button>
              </label>
            </div>
          </form>
        </nav>
      </div>
    </header>
    <?= $this->fetch('content'); ?>
    <footer id="footer">
      <div class="wrapper">
        <p>Todos os direitos reservados © CCRJ</p>
        <div class="wrap"><a href="#"><img src="images/f_fb.png" alt=""></a><a href="#"><img src="images/f_tw.png" alt=""></a><a href="#"><img src="images/ins.png" alt=""></a><a class="link" href="">ASSOCIE-SE</a></div>
      </div>
    </footer>
    <?= $this->Html->script('Site.main.js'); ?>
  </body>
</html>