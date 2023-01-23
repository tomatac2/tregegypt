<div class="row card card-margin ">
<div class="column-responsive column-80 card-body ">

         <aside class="column card-header">
            <div class="col-sm-6"><legend><?= __('إضافة تصنيف جديد') ?></legend></div>
            <div class="col-sm-6"><?= $this->Html->link(__('التصنيفات'), ['action' => 'index'],['class' => ' button float-left btn btn-rounded btn-outline-primary mt-1 mr-1    card-toolbar side-nav-item' ]) ?></div>
        </aside>

     <div class="column-responsive column-80">
        <div class="categories form content">
            <?= $this->Form->create($category) ?>
            <fieldset>
                <?php
              echo $this->Form->control('اسم ',["name"=>"name", "value"=>$category["name"],'class'=>"form-control"]); echo '<br>';

                ?>
            </fieldset>
            <?= $this->Form->button(__('حفظ'),['class'=>'btn btn-primary mr-2']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
</div>
