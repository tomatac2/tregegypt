<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Product> $products
 */
?>
<div class="categories index content  row card-margin">
<div class="col-sm-12">
<div class="card">

    <div class="card-header">
        <h3 class="float-right mt-1 mr-1 card-toolbar side-nav-item"><?= __('المنتجات') ?></h3>
        <?= $this->Html->link(__('اضافة منتج'), ['action' => 'add'], ['class' => 'button float-right  btn btn-rounded btn-outline-primary  button ']) ?>
    </div>

    <div class="table-responsive">
        <table class="table widget-8">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('الرقم') ?></th>
                    <th><?= $this->Paginator->sort('الاسم') ?></th>
                    <th><?= $this->Paginator->sort('الصور') ?></th>
                    <th><?= $this->Paginator->sort('تاريخ الانشاء') ?></th>
                    <th class="actions" style="padding-right:20px"><?= __('خيارات') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= $this->Number->format($product->id) ?></td>
                    <td><?= h($product->name) ?></td>
                    <td><?= $this->Html->link(__('View'), ['action' => 'view', $product->id]) ?></td>
                    <td><?= h($product->created) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('تعديل'), ['action' => 'edit', $product->id] ,[ 'class'=>'btn btn-rounded btn-outline-primary']) ?>
                        <?= $this->Html->link(__('عرض الصور'), ['action' => 'edit', $product->id] ,[ 'class'=>'btn btn-rounded btn-outline-success']) ?>
                        <?= $this->Form->postLink(__('حذف'), ['action' => 'delete', $product->id ], ['confirm' => __('تأكيد الحذف؟', $product->id) ,'class'=>'btn btn-rounded btn-outline-danger']) ?>
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
</div>
</div>
</div>
