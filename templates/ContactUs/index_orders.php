<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ContactU> $contactUs
 */
?>
<div class="categories index content  row card-margin">
<div class="col-sm-12">
<div class="card">
<div class="card-header">
    <h3 class="float-right mt-1 mr-1 card-toolbar side-nav-item"><?= __('طلبات المنتجات') ?></h3>

</div>

<br>
    <div class="table-responsive">
        <table> 
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('الرقم') ?></th>
                    <th><?= $this->Paginator->sort('الاسم كامل') ?></th>
                    <th><?= $this->Paginator->sort('البريد الالاكترونى') ?></th>
                    <th><?= $this->Paginator->sort('رقم الهاتف') ?></th>
                    <th><?= $this->Paginator->sort('المنتج') ?></th>
                    <th><?= $this->Paginator->sort('ملاحظات') ?></th>
                    <th><?= $this->Paginator->sort('التاريخ') ?></th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($contactUs as $contactU): ?>
                <tr>
                    <td><?= $this->Number->format($contactU->id) ?></td>
                    <td><?= h($contactU->full_name) ?></td>
                    <td><?= h($contactU->email) ?></td>
                    <td><?= h($contactU->mobile) ?></td>
                    <td><?= h($contactU->message) ?></td>
                    <td><?= h($contactU->notes) ?></td>
                    <td><?= h($contactU->created) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ') ?>
            <?= $this->Paginator->prev('< ') ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(' >') ?>
            <?= $this->Paginator->last(' >>') ?>
        </ul>
    </div>
</div>
</div>
</div>
</div>
