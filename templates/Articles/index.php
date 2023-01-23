
<div class="categories index content  row card-margin">
<div class="col-sm-12">
<div class="card">
<div class="card-header">
    <h3 class="float-right mt-1 mr-1 card-toolbar side-nav-item"><?= __('المقالات') ?></h3>
    <?= $this->Html->link(__('اضافة مقال جديد'), ['action' => 'add'], ['class' => 'button float-right  btn btn-rounded btn-outline-primary  button ']) ?>

</div>

<div class="articles index content">
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('رقم') ?></th>
                    <th><?= $this->Paginator->sort('التصنيف') ?></th>
                    <th><?= $this->Paginator->sort('العنوان') ?></th>
                    <th><?= $this->Paginator->sort('وصف مختصر') ?></th>
                    <th><?= $this->Paginator->sort('الصورة') ?></th>
                    <th><?= $this->Paginator->sort('كلمات مفتاحية') ?></th>
                    <th><?= $this->Paginator->sort('تاريخ الانشاء') ?></th>
                    <th class="actions"><?= __('الخيارات') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($articles as $article): ?>
                <tr>
                    <td><?= $this->Number->format($article->id) ?></td>
                    <td><?= $article->category->name ?></td>
                    <td><?= h($article->title) ?></td>
                    <td><?= h($article->short_desc) ?></td>
                    <td><img src="<?=URL?><?= h($article->photo) ?>" height="150" width="150" alt=""></td>
                    <td><?= h($article->tags) ?></td>
                    <td><?= h($article->created) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('تعديل'), ['action' => 'edit', $article->id]) ?>
                        <?= $this->Form->postLink(__('حذف'), ['action' => 'delete', $article->id], ['confirm' => __('سيتم حذف المقال رقم: # {0}?', $article->id)]) ?>
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
