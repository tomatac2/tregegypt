<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
?>
<div class="row card card-margin ">
<div class="column-responsive column-80 card-body ">

    <aside class="column card-header">
        <div class="col-sm-6"><legend><?= __('تحديث منتج جديد') ?></legend></div>
        <div class="col-sm-6"><?= $this->Html->link(__('المنتجات'), ['action' => 'index'],['class' => ' button float-left btn btn-rounded btn-outline-primary mt-1 mr-1    card-toolbar side-nav-item' ]) ?></div>
    </aside>

    <div class="card-bod" style="margin-top:25px;">
        <div class="categories form content">
            <?= $this->Form->create($product,["type"=>'file']) ?>
            <fieldset>
                <?php
                    echo $this->Form->control('اسم المنتج',["value"=>$product["name"],"name"=>"name",'class'=>"form-control"]); echo '<br>';
                    echo $this->Form->control('صور المنتج',["name"=>"photo[]","multiple"=>"multiple","type"=>'file','class'=>"form-control"]);echo '<br>';
                ?>
                <div>
                    <div class="col-sm-12">
                    <?php foreach($product["product_photos"] as  $k=>$v ): ?>
                        <div class="col-sm-4" style="float:right;    padding: 15px;text-align: center;  border: 1px solid white;">
                          <img src="<?=URL.$v["photo"]?>" style="width: 100px;height:100px" alt="">
                        </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </fieldset>  <br>
            <?= $this->Form->button(__('تحديث'),['class'=>'btn btn-primary mr-2']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
</div>