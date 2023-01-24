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

      <div class="col-lg-8">
       
      
        <article class="blog-details">
        <?php foreach($articles as $article){?>
          <div class="post-img" style="max-width:400px">
            <img src="<?=URL.$article["photo"]?>" alt="" class="img-fluid">
          </div>


          <div class="meta-top">
            <ul>
              <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="">أدمن</a></li>
              <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href=""><time datetime="2020-01-01"><?=$article["created_at"]?></time></a></li>
              <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href=""><?= $article["comments_count"] > 0 ? $article["comments_count"] : "لا يوجد تعليقات" ?></a></li>
            </ul>
          </div><!-- End meta top -->

          <div class="content" style="
          padding: 30px;box-shadow: 0 4px 16px rgba(var(--color-black-rgb), 0.1);margin: 50px 0 50px;">
               <?= $article["short_desc"] ?>
                <div style="float:left">
                    <a href="<?=URL.'details/'.$article["id"].'/'.str_replace(' ','-',$article["title"])?>" class="readmore stretched-link"><span style="    color: #f7730e !important">قراءة أكثر</span></a>
                </div>
          </div><!-- End post content -->

          <?php } ?>
        </article>
      </div>

      <?php echo $this->element('website/files/shortcut/left_side')?>
    </div>

  </div>
</section><!-- End Blog Details Section -->

</main><!-- End #main -->
