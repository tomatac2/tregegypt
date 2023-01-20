<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Advertise[]|\Cake\Collection\CollectionInterface $advertise
 */
?>
<div class="advertise index content row card-margin">
<div class="col-sm-12">
<div class="card">
<div class="card-header">
    <h3  class="mt-1 mr-1 button  card-toolbar side-nav-item"><?= __('الاعلانات') ?></h3>
    <?= $this->Html->link(__('اضافة اعلان جديد'), ['action' => 'add'], ['class' => 'button float-right  btn btn-rounded btn-outline-primary mt-1 mr-1 button']) ?>
</div>
    <div class="table-responsive">
    <table class="table widget-8">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('رقم') ?></th>
                    <th><?= $this->Paginator->sort('لينك الاعلان') ?></th>
                    <th><?= $this->Paginator->sort('الصورة') ?></th>
                    <th><?= $this->Paginator->sort('نوع الاعلان') ?></th>
                    <th><?= $this->Paginator->sort('رقم الصفحة') ?></th>
                    <th class="actions"><?= __('الخيارات') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($advertise as $advertise): ?>
                <tr>
                    <td><?= $this->Number->format($advertise->id) ?></td>
                    <td><a target="_blank" href="<?= h($advertise->url) ?>">URL</a></td>
                    <td><img src="<?= URL.h($advertise->img) ?>" style="width:100px;height:60px;min-width:100px;min-height:60px" ></td>
                    <td><?= $advertise->type == "horizontal"? "أفقى" : "عمودى"  ?></td>
                    <td><?= $advertise->page ?></td>

                    <td class="actions">
                        <?= $this->Html->link(__('تحديث'), ['action' => 'edit', $advertise->id],[ 'class'=>'btn btn-rounded btn-outline-primary']) ?>
                        <?= $this->Form->postLink(__('حذف'), ['action' => 'delete', $advertise->id], ['confirm' => __('تأكيد الحذف ?', $advertise->id),'class'=>'btn btn-rounded btn-outline-danger']) ?>
                    </td>
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

    <p><?= $this->Paginator->counter(__('مجموع الاعلانات ( {{count}} )')) ?></p>
    </div>
</div>
</div>
