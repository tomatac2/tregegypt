<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductPhoto $productPhoto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Product Photo'), ['action' => 'edit', $productPhoto->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Product Photo'), ['action' => 'delete', $productPhoto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productPhoto->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Product Photos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Product Photo'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productPhotos view content">
            <h3><?= h($productPhoto->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Product') ?></th>
                    <td><?= $productPhoto->has('product') ? $this->Html->link($productPhoto->product->name, ['controller' => 'Products', 'action' => 'view', $productPhoto->product->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Photo') ?></th>
                    <td><?= h($productPhoto->photo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($productPhoto->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($productPhoto->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($productPhoto->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($productPhoto->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
