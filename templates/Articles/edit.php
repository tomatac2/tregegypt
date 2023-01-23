<div class="row card card-margin ">
<div class="column-responsive column-80 card-body ">

        <aside class="column card-header">
            <div class="col-sm-6"><legend><?= __('إضافة مقال') ?></legend></div>
            <div class="col-sm-6"><?= $this->Html->link(__('المقالات'), ['action' => 'index'],['class' => ' button float-left btn btn-rounded btn-outline-primary mt-1 mr-1    card-toolbar side-nav-item' ]) ?></div>
        </aside>
    <div class="column-responsive column-80">
        <div class="articles form content">
            <?= $this->Form->create($article,["type"=>"file"]) ?>
            <fieldset>
                <?php
                    echo $this->Form->control('التصنيف', ["name"=>"category_id","value"=>$article->category_id,'options' => $categories,'class'=>"form-control", 'empty' => true]);
                    echo $this->Form->control('العنوان', ["name"=>"title","value"=>$article->title,'class'=>"form-control"]);
                    echo $this->Form->control('وصف مختصر', ["name"=>"short_desc","value"=>$article->short_desc,'type'=>'textarea','class'=>"form-control"]);
                    echo $this->Form->control('وصف كامل', ["name"=>"long_desc","value"=>$article->long_desc,'type'=>'textarea','class'=>"form-control txtEdtior"]);
                    echo $this->Form->control('صورة المقال', ["name"=>"photo",'type'=>'file','class'=>"form-control"]);
                    echo '<img src="'.URL.$article["photo"].'" height="150" width="150">'; 
                    echo $this->Form->control('كلمات مفتاحية', ["name"=>"tags","value"=>$article->tags,'data-role'=>'tagsinput','class'=>"form-control"]);
               ?>
                
            <!-- <div id="container" class="example example_markup">

          <div class="bs-example">
            <label for="">Tags</label>
            <input class="form-control" type="text" name="tags" value="" data-role="tagsinput" />
          </div>

          </div> -->
            </fieldset>
            <?= $this->Form->button(__('حفظ'),['class'=>'btn btn-primary mr-2']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
</div>


<?=$this->element('dashboard/tags')?>