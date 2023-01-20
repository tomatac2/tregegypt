<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\About $about
 */
?>
<div class="row card card-margin ">
<div class="column-responsive column-80 card-body ">
    <aside class="column">
    
    </aside>
    <div class="card-bod">
        <div class="about form content">
            <?= $this->Form->create($about) ?>
            <fieldset>
                <legend><?= __('عن الموقع') ?></legend>
                <?php
                    echo $this->Form->control('اسم المستخدم ',['name'=>'username','class'=>"form-control" , 'value'=>$about->username]);
                    echo $this->Form->control('كلمة المرور ',['name'=>'password','class'=>"form-control", 'value'=>"123456" /**$about->password */ , 'type'=>'password']);
                    echo $this->Form->control('رابط الفيس بوك ',['name'=>'facebook','class'=>"form-control", 'value'=>$about->facebook]);
                    echo $this->Form->control('رابط توتير ',['name'=>'twitter','class'=>"form-control", 'value'=>$about->twitter]);
                    echo $this->Form->control('رابط انستجرام ',['name'=>'instgram','class'=>"form-control", 'value'=>$about->instgram]);
                    echo $this->Form->control('رابط اليوتيوب ',['name'=>'youtube','class'=>"form-control", 'value'=>$about->youtube]);
                    echo $this->Form->control('رابط تطبيق الاندرويد',['name'=>'andriod','class'=>"form-control", 'value'=>$about->andriod]);
                    echo $this->Form->control('رابط تطبيق IOS',['name'=>'ios','class'=>"form-control", 'value'=>$about->ios]);
                    echo '<div class="input text"><label for="alnwan-balrby">عن التطبيق اسفل الصفحة بالانجليزى</label><textarea type="text" name="about_footer" class="form-control txtEdtior" >'.$about->about_footer.'</textarea></div>';
                    echo '<div class="input text"><label for="alnwan-balrby">عن التطبيق اسفل الصفحة  بالعربى</label><textarea type="text" name="about_footer_ar" class="form-control txtEdtior">'.$about->about_footer_ar.'</textarea></div>';
                    echo '<div class="input text"><label for="alnwan-balrby">عن التطبيق اعلى الصفحة  بالانجليزى</label><textarea type="text" name="about" class="form-control txtEdtior">'.$about->about.'</textarea></div>';
                    echo '<div class="input text"><label for="alnwan-balrby">عن التطبيق اعلى الصفحة  بالعربى</label><textarea type="text" name="about_ar" class="form-control txtEdtior">'.$about->about_ar.'</textarea></div>';
                ?>
            </fieldset>
            <br>
            <?= $this->Form->button(__('حفظ'),['class'=>'btn btn-primary mr-2' , 'style'=>'width:100px']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
