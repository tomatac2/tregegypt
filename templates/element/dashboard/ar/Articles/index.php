<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article[]|\Cake\Collection\CollectionInterface $articles
 */
?>
<div class="articles index content row card-margin">
<div class="col-sm-12">
<div class="card">
<div class="card-header">
    <h3 class="mt-1 mr-1 button  card-toolbar side-nav-item"><?= __('المقالات') ?></h3>
    <?= $this->Html->link(__('اضافة مقال جديد'), ['action' => 'add'], ['class' => 'button float-right  btn btn-rounded btn-outline-primary mt-1 mr-1 button ']) ?>

    </div>
    <div class="table-responsive">
    <table class="table widget-8">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('التصنيف بالعربى') ?></th>
                    <th><?= $this->Paginator->sort('العنوان بالعربى') ?></th>
                    <th><?= $this->Paginator->sort('وصف مختصر بالعربى') ?></th>
                    <th><?= $this->Paginator->sort('صورة') ?></th>
                    <th><?= $this->Paginator->sort('عدد المشاهدات') ?></th>
                    <th><?= $this->Paginator->sort('النوع') ?></th>
                    <th><?= $this->Paginator->sort('رابط اليوتيوب ') ?></th>
                    <th><?= $this->Paginator->sort('تاريخ الانشاء') ?></th>
                    <th class="actions"><?= __('الخيارات') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($articles as $article): ?>
                <tr>
                    <td><?= $article->category->name_ar?></td>
                    <td style="text-align: center !important;"><?= h($article->subject_ar) ?></td>
                    <td><p style="width:200px;"><?= h($article->highlight_ar) ?></p></td>
                    <td><img src="<?= URL.h($article->photo) ?>" style="width:100px;height:60px;min-width:100px;min-height:60px" ></td>
                    <td style="text-align: center !important;"><?= $this->Number->format($article->viewers) ?></td>
                    <td><?= h($article->type->name == "Article"?"مقال":"فيديو") ?></td>
                    <td><?= h($article->videoEmbedCode)?'<iframe width="280" height="170" src="'.$article->videoEmbedCode.'"></iframe>':"---" ?></td>
                    <td><?= h($article->created) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('تعديل'), ['action' => 'edit', $article->id],[ 'class'=>'btn btn-rounded btn-outline-primary']) ?>
                        <?= $this->Form->postLink(__('حذف'), ['action' => 'delete', $article->id], ['confirm' => __('تأكيد الحذف؟', $article->id),'class'=>'btn btn-rounded btn-outline-danger']) ?>
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

    <p><?= $this->Paginator->counter(__('مجموع المقالات ( {{count}} )')) ?></p>
    </div>
    </div>
    </div>
    </div>
