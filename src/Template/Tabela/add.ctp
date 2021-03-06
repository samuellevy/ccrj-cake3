<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tabela'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Dentro'), ['controller' => 'Dentro', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Dentro'), ['controller' => 'Dentro', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tabela form large-9 medium-8 columns content">
    <?= $this->Form->create($tabela) ?>
    <fieldset>
        <legend><?= __('Add Tabela') ?></legend>
        <?php
            echo $this->Form->control('nome');
        ?>
        <?php
            echo $this->Form->control('dentro.0.nome');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
