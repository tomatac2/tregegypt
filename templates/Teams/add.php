<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
?>
<div class="row card card-margin ">
<div class="column-responsive column-80 card-body ">

    <aside class="column card-header">
        <div class="col-sm-6"><legend><?= __('إضافة موظف جديد') ?></legend></div>
        <div class="col-sm-6"><?= $this->Html->link(__('فريق العمل'), ['action' => 'index'],['class' => ' button float-left btn btn-rounded btn-outline-primary mt-1 mr-1    card-toolbar side-nav-item' ]) ?></div>
    </aside>

    <div class="card-bod" style="margin-top:25px;">
        <div class="categories form content">
            <?= $this->Form->create($teams,["type"=>'file']) ?>
            <fieldset>
                <?php
                    echo $this->Form->control('اسم الموظف',["name"=>"name",'class'=>"form-control"]); echo '<br>';
                    echo $this->Form->control('التخصص',["name"=>"career",'class'=>"form-control"]); echo '<br>';
                    echo $this->Form->control('الصورة',["name"=>"photo","type"=>'file','class'=>"form-control"]);echo '<br>';
                ?>
            </fieldset>  <br>
            <?= $this->Form->button(__('حفظ'),['class'=>'btn btn-primary mr-2']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
</div>