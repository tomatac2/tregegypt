<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Advertise $advertise
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Advertise'), ['action' => 'edit', $advertise->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Advertise'), ['action' => 'delete', $advertise->id], ['confirm' => __('Are you sure you want to delete # {0}?', $advertise->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Advertise'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Advertise'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="advertise view content">
            <h3><?= h($advertise->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Url') ?></th>
                    <td><?= h($advertise->url) ?></td>
                </tr>
                <tr>
                    <th><?= __('Img') ?></th>
                    <td><?= h($advertise->img) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($advertise->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
