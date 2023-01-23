<main id="main">

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <ol>
        <li><a href="index.html">الرئيسية</a></li>
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

          <div class="post-img">
            <img src="<?=URL.$article["photo"]?>" alt="" class="img-fluid">
          </div>


          <div class="meta-top">
            <ul>
              <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">أدمن</a></li>
              <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2020-01-01"><?=$article["created_at"]?></time></a></li>
              <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html"><?= $article["comments_count"] > 0 ? $article["comments_count"] : "لا يوجد تعليقات" ?></a></li>
            </ul>
          </div><!-- End meta top -->

          <div class="content">
               <?= $article["long_desc"] ?>
          </div><!-- End post content -->



        <div class="comments">

          <div class="reply-form">

            <h4>اترك تعليقاً</h4>
            <form action="">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input name="name" type="text" class="form-control" placeholder="الاسم*">
                </div>
                <div class="col-md-6 form-group">
                  <input name="email" type="text" class="form-control" placeholder="البريد الالكترونى *">
                </div>
              </div>
              <div class="row">
                <div class="col form-group">
                  <textarea name="comment" class="form-control" placeholder="التعليق *"></textarea>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">ارسل</button>

            </form>

          </div>


          <h4 class="comments-count">  التعليقات</h4>

<div id="comment-1" class="comment">
  <div class="d-flex">
    <div class="comment-img"><img src="assets/img/blog/comments-1.jpg" alt=""></div>
    <div>
      <h5><a href="">Georgia Reader</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
      <time datetime="2020-01-01">01 Jan,2022</time>
      <p>
        Et rerum totam nisi. Molestiae vel quam dolorum vel voluptatem et et. Est ad aut sapiente quis molestiae est qui cum soluta.
        Vero aut rerum vel. Rerum quos laboriosam placeat ex qui. Sint qui facilis et.
      </p>
    </div>
  </div>
</div><!-- End comment #1 -->


        </div><!-- End blog comments -->

      </div>

      <div class="col-lg-4">

        <div class="sidebar">

    
        <div class="sidebar-item recent-posts">
            <h3 class="sidebar-title">أحدث المقالات</h3>

            <div class="mt-3">

            <?php foreach($last3Articles as $k=>$v):?>
              <div class="post-item">
                <img src="<?=URL.$v["photo"]?>" height="80" width="80" class="flex-shrink-0" style="border-radius:50%;">
                <div style="padding: 10px;">
                  <h4><a href="blog-post.html"><?=$v["title"]?></a></h4>
                  <time datetime="2020-01-01"><?=$v["created_at"]?></time>
                </div>
              </div><!-- End recent post item-->
            <?php endforeach;?>
      

            </div>

          </div><!-- End sidebar recent posts-->


          <div class="sidebar-item categories">
            <h3 class="sidebar-title">التصنيفات</h3>
            <ul class="mt-3">
                <?php foreach($categories as $category):?>
                    <li style="    border-bottom: 1px solid #ddd;padding-bottom: 10px;"><a href="#"><?=$category->name?> <span></span></a></li>
                <?php endforeach;?>
            

            </ul>
          </div><!-- End sidebar categories-->

          <div class="sidebar-item tags">
            <h3 class="sidebar-title">الكلمات المفتاحية</h3>
            <ul class="mt-3">
                <?php foreach(explode(',',$article["tags"]) as $k=>$v){?>
                    <li><a href="#"><?=$v?></a></li>
                <?php }?>
            
            </ul>
          </div><!-- End sidebar tags-->

        </div><!-- End Blog Sidebar -->

      </div>
    </div>

  </div>
</section><!-- End Blog Details Section -->

</main><!-- End #main -->
