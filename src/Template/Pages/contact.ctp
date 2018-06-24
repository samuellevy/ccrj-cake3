
  <section class="internal contact">
    <section id="contato">
      <div class="wrapper">
        <h1 class="page_title">Contato</h1>
        <?php foreach($contacts as $contact):?>
          <li>
            <p><?=$contact->title;?>//</p>
            <span><?=$contact->email;?></span>
          </li>
        <?php endforeach;?>
      </div>
    </section>
  </section>
