<section id="portfolio" class="portfolio" data-aos="fade-up">

<div class="container-fluid" data-aos="fade-up" data-aos-delay="200">

  <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">
    <h2 style="text-align:center"><?=$name?></h2><br>
    <div class="row g-0 portfolio-container">
      <?php foreach($photos as $photo){ 
        ?>
      <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item ">
        <img src="<?=URL.$photo["photo"]?>" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4><?=$photo["name"]?></h4>
          <a href="<?=URL.$photo["photo"]?>" title="<?=$photo["name"]?>" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
        </div>
      </div><!-- End Portfolio Item -->
      <?php } ?>
 
    </div><!-- End Portfolio Container -->

  </div>

</div>
</section><!-- End Portfolio Section -->



<style>
  .portfolio .portfolio-item .portfolio-info .preview-link, .portfolio .portfolio-item .portfolio-info .details-link{    right: auto;    left: 50px;}
</style>