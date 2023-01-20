
<div class="categories index content  row card-margin">
<div class="col-sm-12">
<div class="card">
<div class="card-header">
<h3 class="float-right mt-1 mr-1 card-toolbar side-nav-item"><?= __('التصنيفات') ?></h3>
<?= $this->Html->link(__('اضافة تصنيف'), ['action' => 'add'], ['class' => 'button float-right  btn btn-rounded btn-outline-primary  button ']) ?>

</div>
    <div class="table-responsive">
    <table class="table widget-8">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('الاسم بالعربى') ?></th>
                    <th class="actions" style="padding-right:20px"><?= __('خيارات') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($agents as $category): ?>
                <tr>
                    <td><?= h($category->name_ar) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('تعديل'), ['action' => 'edit', $category->id] ,[ 'class'=>'btn btn-rounded btn-outline-primary']) ?>
                        <?= $this->Form->postLink(__('حذف'), ['action' => 'delete', $category->id ], ['confirm' => __('تأكيد الحذف؟', $category->id) ,'class'=>'btn btn-rounded btn-outline-danger']) ?>
                    </td>
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
        <p><?= $this->Paginator->counter(__('مجموع التصنيفات ( {{count}} )')) ?></p>
    </div>
</div>
</div>
</div>

