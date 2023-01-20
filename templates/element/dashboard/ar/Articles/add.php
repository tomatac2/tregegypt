<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article $article
 */
?>
<div class="row card card-margin ">
<div class="column-responsive column-80 card-body ">

    <aside class="column card-header">
        <div class="side-nav float-right card-toolbar side-nav-item">
            <h4 class="heading card-title"><?= __('اضافة مقال جديد') ?></h4>
        </div>
        <?= $this->Html->link(__('كل المقالات'), ['action' => 'index'],  ['class' => ' button float-left btn btn-rounded btn-outline-primary mt-1 mr-1    ' ]) ?>

    </aside>
    <div class="card-body">
        <div class="articles form content">
            <?= $this->Form->create($article,['type'=>'file']) ?>
            <fieldset>
                <?php
                    echo $this->Form->control('التصنيف', ["name"=>"category_id",'options' => $categories, 'empty' => true ,'class'=>"form-control"]);
                    echo $this->Form->control('العنوان بالانجليزى',["name"=>"subject",'class'=>"form-control"]);
                    echo $this->Form->control('العنوان بالعربى',["name"=>"subject_ar",'class'=>"form-control"]);
                    echo $this->Form->control('وصف مختصر بالانجليزيى' ,["name"=>"highlight",'class'=>"form-control"]);
                    echo $this->Form->control('وصف مختصر بالعربى' ,["name"=>"highlight_ar",'class'=>"form-control"]);
                    echo '<div class="input text"><label for="alnwan-balrby">الموضوع بالانجليزى</label><textarea type="text" name="body" class="form-control txtEdtior" ></textarea></div>';
                    echo '<div class="input text"><label for="alnwan-balrby">الموضوع بالعربى</label><textarea type="text" name="body_ar" class="form-control txtEdtior"></textarea></div>';
                    echo $this->Form->control('نوع المقال',["name"=>"type_id",'options'=>$types,'class'=>"form-control "]);
                    echo $this->Form->control('رايط اليوتيوب',["name"=>"videoEmbedCode",'placeholder'=>'type url of video here','class'=>"form-control "]);
                    echo $this->Form->control('الصورة',["name"=>"photo",'class'=>"form-control",'type'=>'file']);
                 ?>
            </fieldset>
            <br>
            <?= $this->Form->button(__('حفظ'),['class'=>'btn btn-primary mr-2' , 'style'=>'width:100px']) ?>

            <?= $this->Form->end() ?>
        </div>
    </div>
</div>


</div>
