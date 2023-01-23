<section id="recent-blog-posts" class="recent-blog-posts">

<div class="container" data-aos="fade-up">

  <div class="section-header">
    <h2>أخبار & مقالات</h2>
  </div>

  <div class="row">

  <?php foreach($last3Articles as $article){ ?>
    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="600">
      <div class="post-box">
        <div class="post-img"><img src="<?=URL.$article->photo?>" class="img-fluid" alt=""></div>
        <div class="meta">
          <span class="post-date"><?= $article->created_at ?></span>
          <span class="post-author"> / الادمن</span>
        </div>
        <h3 class="post-title"><?=$article["title"]?></h3>
        <p> <?=$article["short_desc"]?></p>
        <a href="blog-details.html" class="readmore stretched-link"><span style="    color: #f7730e !important">قراءة أكثر</span></i></a>
      </div>
    </div>
  <?php }?>
 

  </div>

</div>

</section><!-- End Recent Blog Posts Section -->



<style>
    .post-img>img{width:100%;height:240px;}
</style>