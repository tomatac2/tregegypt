<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Products'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Product'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="products view content">
            <h3><?= h($product->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($product->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($product->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($product->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mobile') ?></th>
                    <td><?= h($product->mobile) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Product Photos') ?></h4>
                <?php if (!empty($product->product_photos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Product Id') ?></th>
                            <th><?= __('Photo') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($product->product_photos as $productPhotos) : ?>
                        <tr>
                            <td><?= h($productPhotos->id) ?></td>
                            <td><?= h($productPhotos->product_id) ?></td>
                            <td><?= h($productPhotos->photo) ?></td>
                            <td><?= h($productPhotos->name) ?></td>
                            <td><?= h($productPhotos->created) ?></td>
                            <td><?= h($productPhotos->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ProductPhotos', 'action' => 'view', $productPhotos->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ProductPhotos', 'action' => 'edit', $productPhotos->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProductPhotos', 'action' => 'delete', $productPhotos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productPhotos->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
