<?php echo $this->element('website/header') ?>
<?= $this->fetch('content') ?>
<?= $this->Flash->render() ?>
<?php echo $this->element('website/footer') ?>


<style>
     .error { position: fixed;
    top: 82px !important;
    z-index: 99999999999999;
    background: #ff000099;
    color: white;
    width: 20%;
    padding: 20px;
} 
     .success { position: fixed;
    top: 82px !important;
    z-index: 99999999999999;
    background: #21e791c2;
    color: white;
    width: 20%;
    padding: 20px;
} 
</style>