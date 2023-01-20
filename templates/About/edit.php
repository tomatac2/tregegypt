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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $about->name],
                ['confirm' => __('Are you sure you want to delete # {0}?', $about->name), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List About'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="about form content">
            <?= $this->Form->create($about) ?>
            <fieldset>
                <legend><?= __('Edit About') ?></legend>
                <?php
                    echo $this->Form->control('short_desc');
                    echo $this->Form->control('facebook');
                    echo $this->Form->control('twitter');
                    echo $this->Form->control('address');
                    echo $this->Form->control('email');
                    echo $this->Form->control('mobile');
                    echo $this->Form->control('logo');
                    echo $this->Form->control('long_desc');
                    echo $this->Form->control('workers');
                    echo $this->Form->control('engineers');
                    echo $this->Form->control('projects');
                    echo $this->Form->control('photo');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
