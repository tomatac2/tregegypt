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
            <h4 class=" heading card-title float-left"><?= __('تعديل') ?></h4>
        </div>
        <?= $this->Form->postLink(
            __('حذف'),
            ['action' => 'delete', $advertise->id],
            ['confirm' => __('تأكيد الحذف؟', $advertise->id), 'class' => 'button float-left btn btn-rounded btn-outline-danger   ']
        ) ?>
        <?= $this->Html->link(__('كل الإعلانات'), ['action' => 'index'], ['class' => 'button float-left btn btn-rounded btn-outline-primary  ']) ?>
    </aside>

    <div class="column-responsive column-80 ">
         <div class="advertise form content">
            <?= $this->Form->create($advertise,['type'=>'file']) ?>
            <fieldset>
                <?php
                    echo $this->Form->control('رابط الإعلان',['name'=>'url','value'=>$advertise->url,'class'=>"form-control"]);
                    echo $this->Form->control('الصورة',['name'=>'img','value'=>$advertise->img,'class'=>"form-control",'type'=>'file']);
                    echo $this->Form->control('رقم الصفحة',['name'=>'page','value'=>$advertise->page,'class'=>"form-control"]);
                    echo '<label class="float-right">نوع الإعلان</label>';
                    ?>
                    <select name="type" class="form-control" style="    padding: 2px;">
                    <?php foreach($type as $v):?>
                    <option  value="<?=$v?>" <?= $advertise["type"]==$v ? "selected":"" ?> ><?=$v=="horizontal"?"أفقى":"عمودى"?></option>
                    <?php endforeach;?>
                </select>
                <br>
                <?php   echo'<img src="'.URL.h($advertise->img).'" style="width:100px;height:60px;min-width:100px;min-height:60px" >'; ?>
            </fieldset><br>
            <?= $this->Form->button(__('حفظ'),['class'=>'btn btn-primary mr-2']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
 