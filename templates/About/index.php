<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\About> $about
 */
?>
<div class="about index content">
    <?= $this->Html->link(__('New About'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('About') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('short_desc') ?></th>
                    <th><?= $this->Paginator->sort('facebook') ?></th>
                    <th><?= $this->Paginator->sort('twitter') ?></th>
                    <th><?= $this->Paginator->sort('address') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('mobile') ?></th>
                    <th><?= $this->Paginator->sort('logo') ?></th>
                    <th><?= $this->Paginator->sort('workers') ?></th>
                    <th><?= $this->Paginator->sort('engineers') ?></th>
                    <th><?= $this->Paginator->sort('projects') ?></th>
                    <th><?= $this->Paginator->sort('photo') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($about as $about): ?>
                <tr>
                    <td><?= h($about->name) ?></td>
                    <td><?= h($about->short_desc) ?></td>
                    <td><?= h($about->facebook) ?></td>
                    <td><?= h($about->twitter) ?></td>
                    <td><?= h($about->address) ?></td>
                    <td><?= h($about->email) ?></td>
                    <td><?= h($about->mobile) ?></td>
                    <td><?= h($about->logo) ?></td>
                    <td><?= $this->Number->format($about->workers) ?></td>
                    <td><?= $this->Number->format($about->engineers) ?></td>
                    <td><?= $this->Number->format($about->projects) ?></td>
                    <td><?= h($about->photo) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $about->name]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $about->name]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $about->name], ['confirm' => __('Are you sure you want to delete # {0}?', $about->name)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
