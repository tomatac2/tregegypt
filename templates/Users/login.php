<!-- in /templates/Users/login.php -->
<div class="row card card-margin ">
<div class="column-responsive column-80 card-body ">

<div class="users form" style="    text-align: right;">
    <?= $this->Flash->render() ?><br>
    <h3>تسجيل الدخول للوحة التحكم</h3>  <br>
    <?= $this->Form->create() ?>
    <fieldset style="    direction: rtl;">
        <?= $this->Form->control('البريد الالكترونى', ['name'=>'email','required' => true,'class'=>"form-control"]) ?>  <br>
        <?= $this->Form->control('كلمة المرور', ['name'=>'password' ,'type'=>'password','required' => true,'class'=>"form-control"]) ?>
    </fieldset>
    <br>
    <?= $this->Form->submit(__('تسجيل الدخول'),['class'=>'btn btn-primary mr-2',"style"=>"float: left;"]); ?>
    <?= $this->Form->end() ?>

    <?php // $this->Html->link("Add User", ['action' => 'add']) ?>
</div>
</div>
</div>