<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <h4 class="title">Works</h4>
          <p class="category"></p>
        </div>
        <div class="content table-responsive table-full-width">
          <table class="table table-hover table-striped">
            <thead>
              <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sender_name', ['label'=>'Categoria']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('sender_email', ['label'=>'Título']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('publish_date', ['label'=>'Data de Publicação']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('created', ['label'=>'Data de Criação']) ?></th>
                <th scope="col" class="actions"><?= __('Opções') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($works as $work): ?>
                <tr>
                  <td><?= $this->Number->format($work->id) ?></td>
                  <td><?= $work->sender_name; ?></td>
                  <td><?= $work->sender_email; ?></td>
                  <td><?= h($this->FormatDate->formatDate($work->publish_date, 'pt-numbers')) ?></td>
                  <td><?= h($work->created) ?></td>
                  <td class="actions">
                    <?php //= $this->Html->link(__('Ver'), ['action' => 'view', $work->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $work->id]) ?>
                    <?= $this->Form->workLink(__('Remover'), ['action' => 'delete', $work->id], ['confirm' => __('Are you sure you want to delete # {0}?', $work->id)]) ?>
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
