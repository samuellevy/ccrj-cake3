<nav class="navbar yamm navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-hamburg">
        <button type="button" class="navbar-toggle collapsed">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
    </div>

    <div class="container">

      <div class="navbar-header">
        <?php echo $this->Html->link(
          $this->Html->image('Site.../images/logo-susprev.png',['class'=>'img-responsive', 'alt'=>'Jusprev']),
          ['controller' => 'Pages', 'action' => 'home', '_full' => true],
          ['class' => 'navbar-brand', 'escape' => false]
        ); ?>
      </div>

      <div class="navbar-collapse">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="home-link">
              <?php echo $this->Html->link(
                $this->Html->image('Site.../images/img-home.jpg',['class'=>'img-responsive', 'alt'=>'Home']),
                ['controller' => 'pages', 'action' => 'home', '_full' => true],
                ['class' => 'navbar-brand', 'escape' => false]
              ); ?>
            </li>
            <?php foreach($menu as $item):?>
              <li class="dropdown">
                <a href="<?= $this->Menu->build($item);?>"><div class="menu-item"><p><?=$item->title?></p></div></a>
                <?php if(!empty($item['child_menu'])): ?>
                  <ul class="dropdown-menu">
                    <div class="container no-padding">
                      <?php foreach($item['child_menu'] as $child):?>
                        <li><a href="<?= $this->Menu->build($child);?>"><div class="menu-item"><p><?=$child->title?></p></div></a></li>
                      <?php endforeach;?>
                    </div>
                  </ul>
                <?php endif;?>
              </li>
            <?php endforeach;?>
          </ul>
        </div>
      </div>

      <div class="navbar-mobile">
        <ul>
          <li class="home-link">
            <?php echo $this->Html->link(
              $this->Html->image('Site.../images/img-home.jpg',['class'=>'img-responsive', 'alt'=>'Home']),
              ['controller' => 'Pages', 'action' => 'home', '_full' => true],
              ['class' => 'navbar-brand', 'escape' => false]
            ); ?>
          </li>
          <?php foreach($menu as $item):?>
            <li><a href="<?= $this->Url->build($item->url);?>" class="menu-pai"><?=$item->title?></a></li>
              <?php if(!empty($item['child_menu'])): ?>
                <?php foreach($item['child_menu'] as $child):?>
                  <li><a href="<?= $this->Url->build($child->url);?>"><?=$child->title?></a></li>
                <?php endforeach;?>
              <?php endif;?>
          <?php endforeach;?>
        </ul>
      </div>

    </div>
  </div>
</div>
</nav>
