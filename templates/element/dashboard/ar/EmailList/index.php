<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\emailLists[]|\Cake\Collection\CollectionInterface $emailListss
 */
?>
<div class="emailListss index content row card-margin">
<div class="col-sm-12">
<div class="card">
<div class="card-header">
<h3  class="mt-1 mr-1 button  card-toolbar side-nav-item"><?= __('القائمة البريدية') ?></h3>
 </div>
    <div class="table-responsive">
    <table class="table widget-8">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('البريد الإلكترونى') ?></th>
                    <th><?= $this->Paginator->sort('تاريخ الانشاء') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($emailList as $emailLists): ?>
                <tr>
                    <td><?= h($emailLists->email) ?></td>
                    <td><?= h($emailLists->created) ?></td>

                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
    <ul class="pagination"  style="padding-right: 10px;" >
       <?= $this->Paginator->first('<< ' ) ?>
       <?= $this->Paginator->prev('< ') ?>
       <?= $this->Paginator->numbers() ?>
       <?= $this->Paginator->next(' >') ?>
       <?= $this->Paginator->last(' >>') ?>
    </ul>

    <p  style="    padding-right: 10px;"><?= $this->Paginator->counter(__('مجموع البريد الإلكترونى ( {{count}} )')) ?></p>
    </div>
    </div></div></div>
