<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContactU[]|\Cake\Collection\CollectionInterface $contactUs
 */
?>
<div class="comments index content row card-margin">
<div class="col-sm-12">
<div class="card">
    <div class="card-header">
        <h3 class="mt-1 mr-1 button  card-toolbar side-nav-item"><?= __('تواصل العملاء') ?></h3>
    </div>
    <div class="table-responsive">
        <table class="table widget-8">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('الاسم') ?></th>
                    <th><?= $this->Paginator->sort('البريد الالكترونى') ?></th>
                    <th><?= $this->Paginator->sort('رقم الهاتف') ?></th>
                    <th><?= $this->Paginator->sort('العنوان') ?></th>
                    <th><?= $this->Paginator->sort('الرسالة') ?></th>
                    <th><?= $this->Paginator->sort('تاريخ الانشاء') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contactUs as $contactU): ?>
                <tr>
                    <td><?= h($contactU->name) ?></td>
                    <td><?= h($contactU->email) ?></td>
                    <td><?= h($contactU->phone) ?></td>
                    <td><?= h($contactU->subject) ?></td>
                    <td><?= h($contactU->message) ?></td>
                    <td><?= h($contactU->created) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
        <?= $this->Paginator->first('<< ' ) ?>
        <?= $this->Paginator->prev('< ') ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next(' >') ?>
        <?= $this->Paginator->last(' >>') ?>
    </ul>

    <p><?= $this->Paginator->counter(__('مجموع تواصل العملاء ( {{count}} )')) ?></p>
    </div>
    </div></div></div>
