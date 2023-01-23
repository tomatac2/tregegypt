
<div class="categories index content  row card-margin">
<div class="col-sm-12">
<div class="card">
<div class="card-header">
    <h3 class="float-right mt-1 mr-1 card-toolbar side-nav-item"><?= __('فريق العمل') ?></h3>
    <?= $this->Html->link(__('اضافة موظف'), ['action' => 'add'], ['class' => 'button float-right  btn btn-rounded btn-outline-primary  button ']) ?>

</div>
<div class="teams index content">
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('رقم') ?></th>
                    <th><?= $this->Paginator->sort('الاسم') ?></th>
                    <th><?= $this->Paginator->sort('التخصص') ?></th>
                    <th><?= $this->Paginator->sort('الصورة') ?></th>
                    <th class="actions"><?= __('خيارات') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($teams as $team): ?>
                <tr>
                    <td><?= $this->Number->format($team->id) ?></td>
                    <td><?= h($team->name) ?></td>
                    <td><?= h($team->career) ?></td>
                    <td><img src="<?=URL?><?= h($team->photo) ?>" height="150" width="150" alt=""></td>
                    <td class="actions">
                        <?= $this->Html->link(__('تعديل'), ['action' => 'edit', $team->id]) ?>
                        <?= $this->Form->postLink(__('حذف'), ['action' => 'delete', $team->id], ['confirm' => __('سيتم حذف الموظف رقم: # {0}?', $team->id)]) ?>
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
    </div>
</div>
</div>
</div>
</div>
