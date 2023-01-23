<div class="row gy-5">
<?php foreach($products as $k=>$v): ?>
    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
    <div class="service-item">
        <div class="img">
        <img src="<?=URL.$v["product_photos"][0]['photo']?>" class="img-fluid" alt="">
        </div>
        <div class="details position-relative">
        <div class="icon">
            <i class="bi bi-activity"></i>
        </div>
        <a href="#" class="stretched-link">
            <h3><?=$v["name"]?></h3>
        </a>
        <p>كل ماتريد معرفته عن . <?=$v["name"]?></p>
        </div>
    </div>
    </div><!-- End Service Item -->
<?php endforeach;?>

</div>