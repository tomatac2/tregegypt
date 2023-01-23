<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Category> $categories
 */
?>
<div class="categories index content  row card-margin">
<div class="col-sm-12">
<div class="card">
<div class="card-header">
    <h3 class="float-right mt-1 mr-1 card-toolbar side-nav-item"><?= __('التصنيفات') ?></h3>
    <?= $this->Html->link(__('اضافة تصنيف'), ['action' => 'add'], ['class' => 'button float-right  btn btn-rounded btn-outline-primary  button ']) ?>

</div>

    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('رقم') ?></th>
                    <th><?= $this->Paginator->sort('الاسم') ?></th>
                    <th class="actions"><?= __('الخيارات') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categories as $category): ?>
                <tr>
                    <td><?= $this->Number->format($category->id) ?></td>
                    <td><?= h($category->name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('تعديل'), ['action' => 'edit', $category->id]) ?>
                        <?= $this->Form->postLink(__('حذف'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('الاول')) ?>
            <?= $this->Paginator->prev('< ' . __('السابق')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('التالى') . ' >') ?>
            <?= $this->Paginator->last(__('الاخير') . ' >>') ?>
        </ul>
    </div>
    </div>
</div>
</div>
