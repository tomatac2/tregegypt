<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article $article
 */
?>
<div class="row card card-margin ">
<div class="column-responsive column-80 card-body ">
<aside class="column">
         <div class="side-nav">
            <?= $this->Form->postLink(
                __('حذف'),
                ['action' => 'delete', $article->id],
                ['confirm' => __('تأكيد الحذف؟', $article->id), 'class' => 'button float-left btn btn-rounded btn-outline-danger mt-1 ml-1    card-toolbar side-nav-item']
            ) ?>
            <?= $this->Html->link(__('كل المقالات'), ['action' => 'index'], ['class' => 'button float-left btn btn-rounded btn-outline-primary mt-1 ml-1    card-toolbar side-nav-item']) ?>
            </div>
        </aside>
    <div class="card-bod">
        <div class="articles form content">
            <?= $this->Form->create($article,['type'=>'file']) ?>
            <fieldset>
            <h4 class="heading card-title"><?= __('تعديل') ?></h4>
                 <?php
                    echo $this->Form->control('التصنيف', ['name'=>'category_id',"value"=>$article->category_id,'options' => $categories, 'empty' => true,'class'=>"form-control"]);
                    echo $this->Form->control('العنوان بالانجليزى',['name'=>'subject',"value"=>$article->subject,'class'=>"form-control"]);
                    echo $this->Form->control('العنوان بالعربى',['name'=>'subject_ar',"value"=>$article->subject_ar,'class'=>"form-control"]);
                    echo $this->Form->control('الوصف المختصر بالانجليزى',['name'=>'highlight',"value"=>$article->highlight,'class'=>"form-control"]);
                    echo $this->Form->control('الوصف المختصر بالعربى',['name'=>'highlight_ar',"value"=>$article->highlight_ar,'class'=>"form-control"]);
                    echo '<div class="input text"><label for="alnwan-balrby">الموضوع بالانجليزى</label><textarea type="text" name="body" class="form-control txtEdtior" >'.$article->body.'</textarea></div>';
                    echo '<div class="input text"><label for="alnwan-balrby">الموضوع بالعربى</label><textarea type="text" name="body_ar" class="form-control txtEdtior">'.$article->body_ar.'</textarea></div>';
                    echo $this->Form->control('نوع المقال',['name'=>'type_id',"value"=>$article->type_id,'options'=>$types,'class'=>"form-control"]);
                    echo $this->Form->control('رابط اليوتيوب',['name'=>'videoEmbedCode',"value"=>$article->videoEmbedCode,'placeholder'=>'type url of video here','class'=>"form-control "]);
                    echo $article->videoEmbedCode?'<iframe width="320" height="215" src="'.$article->videoEmbedCode.'"></iframe>':"";
                    echo $this->Form->control('الصورة',['name'=>'photo',"value"=>$category->photo,'class'=>"form-control",'type'=>'file']);
                    echo'<img src="'.URL.h($article->photo).'" style="width:100px;height:60px;min-width:100px;min-height:60px" >';
                 ?>
            </fieldset><br>
             <?= $this->Form->button(__('حفظ'),['class'=>'btn btn-primary mr-2' , 'style'=>'width:100px']) ?>

            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
