<main id="main">

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <ol>
        <li><a href="<?=URL?>">الرئيسية</a></li>
        <li><a href="blog.html"><?=$article["category"]["name"]?></a></li>
        <li><?=$article->title?></li>
      </ol>
    </div>

  </div>
</div><!-- End Breadcrumbs -->

<!-- ======= Blog Details Section ======= -->
<section id="blog" class="blog">
  <div class="container" data-aos="fade-up">

    <div class="row g-5">

      <div class="col-lg-12">
       
      
        <article class="blog-details">
        <?php  echo $this->element("website/files/portoflio" ,["name"=>$product["name"],"photos"=>$product["product_photos"]]) ?>
        </article>
      </div>

    </div>

  </div>
</section><!-- End Blog Details Section -->

</main><!-- End #main -->
