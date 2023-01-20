<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Comment[]|\Cake\Collection\CollectionInterface $comments
 */
?>
<div class="comments index content row card-margin">
<div class="col-sm-12">
<div class="card">
<div class="card-header">
<h3  class="mt-1 mr-1 button  card-toolbar side-nav-item"><?= __('التعليقات') ?></h3>
 </div>
    <div class="table-responsive">
    <table class="table widget-8">
            <thead>
                <tr>
                    <th style="color: #2459ff;"><?= 'اسم المقالة' ?></th>
                    <th style="color: #2459ff;"><?='التعليق' ?></th>
                    <th style="color: #2459ff;"><?= 'تاريخ الانشاء' ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($comments as $comment): ?>
                <tr>
                    <td><?= $comment->article->subject_ar ?></td>
                    <td><?= h($comment->comment) ?></td>
                    <td><?= h($comment->created) ?></td>

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

    <p><?= $this->Paginator->counter(__('مجموع التعليقات ( {{count}} )')) ?></p>
    </div>
    </div></div></div>
