<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
?>
<div class="row card card-margin ">
<div class="column-responsive column-80 card-body ">

<aside class="column card-header">
       
            <h4 class="mt-1 mr-1 card-toolbar side-nav-item heading" ><?= __('اضافة تصنيف جديد') ?></h4>
       
        <?= $this->Html->link(__('كل التصنيفات'), ['action' => 'index'],['class' => ' button btn btn-rounded btn-outline-primary' ]) ?>
    </aside>
    <div class="card-bod">
        <div class="categories form content">
            <?= $this->Form->create($category) ?>
            <fieldset>
                <?php
                    echo $this->Form->control(('الاسم بالانجليزى'),['class'=>"form-control" , 'name'=>'name']);
                    echo $this->Form->control('الاسم بالعربى',['class'=>"form-control", 'name'=>'name_ar']);
                ?>
            </fieldset>  <br>
            <?= $this->Form->button(__('حفظ'),['class'=>'btn btn-primary mr-2 w-100vw' , 'style'=>'width:100px']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
</div>
