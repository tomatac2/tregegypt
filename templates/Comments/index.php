<div class="categories index content  row card-margin">
<div class="col-sm-12">
<div class="card">
<div class="card-header">
    <h3 class="float-right mt-1 mr-1 card-toolbar side-nav-item"><?= __('التعليقات') ?></h3>

</div>

<div class="comments index content">
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('رقم') ?></th>
                    <th><?= $this->Paginator->sort('المقال') ?></th>
                    <th><?= $this->Paginator->sort('التعليق') ?></th>
                    <th><?= $this->Paginator->sort('الاسم') ?></th>
                    <th><?= $this->Paginator->sort('البريد الالكترونى') ?></th>
                    <th class="actions"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($comments as $comment): ?>
                <tr>
                    <td><?= $this->Number->format($comment->id) ?></td>
                    <td> <?=$comment->article->title?></td>
                    <td><?= h($comment->comment) ?></td>
                    <td><?= h($comment->name) ?></td>
                    <td><?= h($comment->email) ?></td>
                    <td class="actions">
                        <?= $this->Form->postLink(__('حذف'), ['action' => 'delete', $comment->id ], ['confirm' => __('تأكيد الحذف؟', $comment->id) ,'class'=>'btn btn-rounded btn-outline-danger']) ?>
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
