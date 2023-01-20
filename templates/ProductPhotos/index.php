<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ProductPhoto> $productPhotos
 */
?>
<div class="productPhotos index content">
    <?= $this->Html->link(__('New Product Photo'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Product Photos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('product_id') ?></th>
                    <th><?= $this->Paginator->sort('photo') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productPhotos as $productPhoto): ?>
                <tr>
                    <td><?= $this->Number->format($productPhoto->id) ?></td>
                    <td><?= $productPhoto->has('product') ? $this->Html->link($productPhoto->product->name, ['controller' => 'Products', 'action' => 'view', $productPhoto->product->id]) : '' ?></td>
                    <td><?= h($productPhoto->photo) ?></td>
                    <td><?= h($productPhoto->name) ?></td>
                    <td><?= h($productPhoto->created) ?></td>
                    <td><?= h($productPhoto->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $productPhoto->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $productPhoto->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $productPhoto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productPhoto->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
