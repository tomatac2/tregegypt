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
                    echo $this->Form->control('التصنيف', ["name"=>"category_id",'options' => $categories,'class'=>"form-control", 'empty' => true]);
                    echo $this->Form->control('العنوان', ["name"=>"title",'class'=>"form-control"]);
                    echo $this->Form->control('وصف مختصر', ["name"=>"short_desc",'type'=>'textarea','class'=>"form-control"]);
                    echo $this->Form->control('وصف كامل', ["name"=>"long_desc",'type'=>'textarea','class'=>"form-control txtEdtior"]);
                    echo $this->Form->control('صورة المقال', ["name"=>"photo",'type'=>'file','class'=>"form-control"]);
                ?>
                
            <div id="container" class="example example_markup">

          <div class="bs-example">
            <label for="">كلمات مفتاحية</label>
            <input class="form-control" type="text" name="tags" value="" data-role="tagsinput" />
          </div>

          </div>
            </fieldset>
            <?= $this->Form->button(__('حفظ'),['class'=>'btn btn-primary mr-2']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
</div>


<?=$this->element('dashboard/tags')?>