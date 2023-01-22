<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<div class="">
<div class="column-responsive column-80">



    <div class="column-responsive column-80">
        <div class="products view content">
            <h3><?= h($product->name) ?></h3>
            <table>
                <tr>
                    <td><?= __('اسم  المنتج') ?></td>
                    <td><?= h($product->name) ?></td>
                </tr>
            </table>
            <div class="related" style="margin-top:15px;">
                <h4><?= __('صور المنتج') ?></h4>
                <?php if (!empty($product->product_photos)) : ?>
                <div class="table-responsive">
                    <div  class="col-sm-12">
                        <?php foreach ($product->product_photos as $productPhotos) : ?>
                        <div class="col-sm-4" style="float:right;    padding: 15px;text-align: center;  border: 1px solid white;">
                             <img src="<?= URL.h($productPhotos->photo) ?>" width=150 height=100 alt="">
                            <div class="actions">
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProductPhotos', 'action' => 'delete', $productPhotos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productPhotos->id)]) ?>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>


