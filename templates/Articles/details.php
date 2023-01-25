<main id="main">

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <ol>
        <li><a href="<?=URL?>">الرئيسية</a></li>
        <li><a href="<?=URL.'category'.'/'.$article["category"]["id"].'/'.str_replace(" ","-",$article["category"]["name"])?>"><?=$article["category"]["name"]?></a></li>
        <li><a href="<?=URL.'details'.'/'.$article["id"].'/'.str_replace(" ","-",$article["title"])?>"><?=$article["title"]?></a></li>
      </ol>
    </div>

  </div>
</div><!-- End Breadcrumbs -->

<!-- ======= Blog Details Section ======= -->
<section id="blog" class="blog">
  <div class="container" data-aos="fade-up">

    <div class="row g-5">

      <div class="col-lg-8">

        <article class="blog-details">

          <div class="post-img">
            <img src="<?=URL.$article["photo"]?>" alt="" class="img-fluid">
          </div>


          <div class="meta-top">
            <ul>
              <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="">أدمن</a></li>
              <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href=""><time datetime="2020-01-01"><?=$article["created_at"]?></time></a></li>
              <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href=""><?= $article["comments_count"] > 0 ? $article["comments_count"] : "لا يوجد تعليقات" ?></a></li>
            </ul>
          </div><!-- End meta top -->

          <div class="content">
               <?= $article["long_desc"] ?>
          </div><!-- End post content -->



        <div class="comments"> <?=$this->element('website/files/comments')?> </div><!-- End blog comments -->

      </div>

      <?php echo $this->element('website/files/shortcut/left_side')?>
    </div>

  </div>
</section><!-- End Blog Details Section -->

</main><!-- End #main -->
