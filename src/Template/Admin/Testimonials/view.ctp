<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Testimonial'), ['action' => 'edit', $testimonial->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Testimonial'), ['action' => 'delete', $testimonial->id], ['confirm' => __('Are you sure you want to delete # {0}?', $testimonial->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Testimonials'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Testimonial'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="testimonials view large-9 medium-8 columns content">
    <h3><?= h($testimonial->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($testimonial->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country') ?></th>
            <td><?= h($testimonial->country) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($testimonial->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($testimonial->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($testimonial->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($testimonial->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($testimonial->description)); ?>
    </div>
</div>
