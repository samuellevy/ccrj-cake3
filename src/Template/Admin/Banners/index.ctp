<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <h4 class="title">Banners</h4>
          <p class="category"></p>
        </div>
        <div class="content table-responsive table-full-width">
          <table class="table table-hover table-striped">
            <thead>
              <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('titulo', ['label'=>'Título']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('created', ['label'=>'Data de Criação']) ?></th>
                <th scope="col" class="actions"><?= __('Opções') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($banners as $banner): ?>
                <tr>
                  <td><?= $this->Number->format($banner->id) ?></td>
                  <td><?= h($banner->title) ?></td>
                  <td><?= h($banner->created) ?></td>
                  <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $banner->id]) ?> | 
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $banner->id]) ?> | 
                    <?= $this->Form->postLink(__('Remover'), ['action' => 'delete', $banner->id], ['confirm' => __('Are you sure you want to delete # {0}?', $banner->id)]) ?>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>

          <div class="paginator">
            <ul class="pagination">
              <?= $this->Paginator->first('<< ' . __('primeiro')) ?>
              <?= $this->Paginator->prev('< ' . __('anterior')) ?>
              <?= $this->Paginator->numbers() ?>
              <?= $this->Paginator->next(__('próximo') . ' >') ?>
              <?= $this->Paginator->last(__('último') . ' >>') ?>
              <li><a href="<?= $this->Url->build(["action" => "add"]);?>">Novo</a></li>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
