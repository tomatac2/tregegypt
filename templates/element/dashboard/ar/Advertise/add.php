<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Advertise $advertise
 */
?>
<div class="row card card-margin ">
    <div class="column-responsive column-80 card-body ">

    <aside class="column card-header">
        <div class="side-nav float-right card-toolbar side-nav-item">
            <h4 class="heading card-title"><?= __('اضافة إعلان جديد') ?></h4>
        </div>
        <?= $this->Html->link(__('كل الاعلانات'), ['action' => 'index'], ['class' => ' button float-left btn btn-rounded btn-outline-primary     ' ]) ?>
    </aside>

    
    <div class="column-responsive column-80">
        <div class="advertise form content">
            <?= $this->Form->create($advertise,['type'=>'file']) ?>
            <fieldset>
              
                <?php
                    echo $this->Form->control('url',['class'=>"form-control"]);
                    echo $this->Form->control('img',['class'=>"form-control",'type'=>'file']);
                    echo $this->Form->label('type');
                ?>
          
                <select name="type" class="form-control" style="padding:2px">
                    <?php foreach($type as $v):?>
                    <option value="<?=$v?>"><?=$v=="horizontal"?"أفقى":"عمودى"?></option>
                    <?php endforeach;?>
                </select>
            
                <?php echo $this->Form->control('page',['class'=>"form-control",'type'=>'number']); ?>
            </fieldset>
            <br>
            <?= $this->Form->button(__('حفظ'),['class'=>'btn btn-primary mr-2' , 'style'=>'width:100px']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
