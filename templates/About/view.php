<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\About $about
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit About'), ['action' => 'edit', $about->name], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete About'), ['action' => 'delete', $about->name], ['confirm' => __('Are you sure you want to delete # {0}?', $about->name), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List About'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New About'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="about view content">
            <h3><?= h($about->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($about->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Short Desc') ?></th>
                    <td><?= h($about->short_desc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Facebook') ?></th>
                    <td><?= h($about->facebook) ?></td>
                </tr>
                <tr>
                    <th><?= __('Twitter') ?></th>
                    <td><?= h($about->twitter) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address') ?></th>
                    <td><?= h($about->address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($about->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mobile') ?></th>
                    <td><?= h($about->mobile) ?></td>
                </tr>
                <tr>
                    <th><?= __('Logo') ?></th>
                    <td><?= h($about->logo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Photo') ?></th>
                    <td><?= h($about->photo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Workers') ?></th>
                    <td><?= $this->Number->format($about->workers) ?></td>
                </tr>
                <tr>
                    <th><?= __('Engineers') ?></th>
                    <td><?= $this->Number->format($about->engineers) ?></td>
                </tr>
                <tr>
                    <th><?= __('Projects') ?></th>
                    <td><?= $this->Number->format($about->projects) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Long Desc') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($about->long_desc)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
