<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
?>
<div class="row card card-margin ">
<div class="column-responsive column-80 card-body ">

<aside class="column card-header">
            <h4 class="mt-1 mr-1 card-toolbar side-nav-item heading"><?= __('تعديل') ?></h4>

           
        <?= $this->Html->link(__('كل التصنيفات'), ['action' => 'index'], ['class' => 'button  btn btn-rounded btn-outline-primary   ']) ?>
        &nbsp;  &nbsp;
        <?= $this->Form->postLink(
                __('حذف'),
                ['action' => 'delete', $category->id],
                ['confirm' => __('تأكيد الحذف؟', $category->id), 'class' => 'button btn btn-rounded btn-outline-danger   ']
            ) ?>
    </aside>
<div class="ponsive column-80 card-body ">

    <div class="card-bod">
        <div class="categories form content">
            <?= $this->Form->create($category) ?>
            <fieldset>
                <?php
                    echo $this->Form->control('الاسم بالانجليزى',["name"=>"name",'class'=>"form-control" ,"value"=>$category->name]);
                    echo $this->Form->control('الاسم بالعربى',["name"=>"name_ar",'class'=>"form-control" ,"value"=>$category->name_ar]);
                ?>
            </fieldset><br>
            <?= $this->Form->button(__('حفظ'),['class'=>'btn btn-primary mr-2 w-100vw' , 'style'=>'width:100px']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
</div>
