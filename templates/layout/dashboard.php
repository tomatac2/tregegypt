<?php //   <?= $thisUser ?  $this->Html->Link("logout",['controller'=>'Users','action'=>'logout' ])  :  ""  ?>


<!DOCTYPE html>
<html lang="ar">

<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>تريج مصر- لوحة التحكم</title>
		<!-- inject:css -->
		<link rel="stylesheet" href="<?=URL?>dashboard/dist/css/vendor.styles.css">
		<link rel="stylesheet" href="<?=URL?>dashboard/dist/css/demo/dark-template.css">
		<!-- endinject -->
		<link rel="shortcut icon" href="<?=URL?>assets/egy/imgs/logo.png"/>
        <meta name="csrf-token" content="<?=$this->request->getCookieParams()['csrfToken']?>">


        <style>
        .pagination .active a{color: #ffc107 !important;}
        .pagination li{  padding: 5px;   }
.cake-debug{    position: absolute;    z-index: 999999999999999;}
      .select , .datetime , .number{  min-width : 70%}
        .navbar-container .secondary .nav-wrapper .nav .nav-item.active .nav-link {
    color: #b4badc;
}
            .widget-8 tr th{    text-align: center;}
            .widget-8 tbody tr td {    text-align: center;}
            .actions{  text-align: center;}
            .actions a { margin-top : 5px ;  }

            textarea { min-height : 300px;}
            .content ,.card  { height : 100% }
            html {
            background: #293551;
            }
            .error{
            text-align: center !important;
            color: white !important;
            padding: 14px !important;
            background: #ff00008f !important;
            }
            .success {
            text-align: center !important;
            color: white !important;
            padding: 14px !important;
            background: green !important;
}
.content-wrapper{    background: #0b1835;}
</style>
<?= $this->fetch('meta') ?>
<?= $this->fetch('css') ?>
<?= $this->fetch('script') ?>
</head>
<body>

<?php 
if($thisUser):
    echo $this->element('dashboard/header');

else: echo'<style>html , .content-wrapper{background: #0b1733;}.card{padding: 60px !important;}</style>';
endif;
?>

<div class="content-wrapper" >
<?= $this->Flash->render() ?>
<?= $this->fetch('content') ?>

</div>


<?php 
if($thisUser):
    echo $this->element('dashboard/footer');
endif;
?>
<!-- End custom js for this page-->
<script>
    $('.txtEdtior').summernote({
  fontSizes: ['8', '9', '10', '11', '12', '14', '18','20','22','24','26','28','30'],
  toolbar: [
    ['style', ['bold', 'italic', 'underline', 'clear']],
    ['fontsize', ['fontsize']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['height', ['height']],
    ['insert', ['link', 'picture', 'video']],
    ['view', ['fullscreen', 'codeview', 'help']],
    ['table', ['table']]

  ]
});
</script>

<script>
$( document ).ready(function() {
	
	
		if( "<?php echo $this->request->getParam('action')?>" == "dashboard" ){
			$('.nav-item').removeClass("active");
			$('.dashboard').addClass("active");
		}
	});
</script>

</body>

</html>


</style>