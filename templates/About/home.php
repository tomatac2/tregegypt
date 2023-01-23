<section id="hero-animated" class="hero-animated d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
      <h2>تريج مصر</h2>
      <p>شركة تريج مصر الأفضل في مصر في مجال تصنيع وإنتاج وتطوير أبواب وشبابيك UPVC لجميع أنواع وأشكال وتصاميم الشبابيك والنوافذ.</p>
      <img src="<?=URL?>assets/egy/imgs/slider-shape-2-1.png" class="img-fluid animated">
    </div>
  </section>

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about" style="padding:0">
      <div class="container" data-aos="fade-up">

  

        <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-5">
            <div class="about-img ">
              <img src="<?=URL?>assets/egy/imgs/logo.png" class="img-fluid animated" alt="">
            </div>
          </div>

          <div class="col-lg-7">
            <h3 class="pt-0 pt-lg-5">تريج مصر</h3>
            <p>شركتنا هي واحدة من أكبر وأبرز الشركات الرائدة في مجال إنتاج وتطوير أبواب ونوافذ وواجهات جميع أنواع وأشكال وتصاميم من حيث الجودة والذوق مما يتيح للعميل أن يختار ما يناسبه من بين المنتجات لدينا في إطار سياسة الشركة.</p>
              <p>نعمل تحت شعار <strong>نافذة المستقبل</strong></p>
          
        <div  class="col-lg-12">
          <div class="col-lg-2" style="    float: right;"><img src="<?=URL?>assets/egy/imgs/cho3.png" class="img-fluid" alt=""></div> 
          <div   class="col-lg-10"> 
            <p>جاهزون لخدمتكم 24/7تعمل شركة تريج مصر على مدار الساعة، نحن جاهزون لخدمتكم 24 ساعة في اليوم، 7 أيام في الأسبوع.</p>
          </div>
        </div>

          </div>

        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h5>ما الذي نقدمه؟</h5>
          <h2>منتجات الشركة</h2>
          <p>تتميز شركة تريج مصر بتقديمها منتجات الـ PVC من أبواب وشبابيك وواجهات وقطاعات وإكسسوار.</p>
        </div>

        <?php echo $this->element("website/files/products") ?>

      </div>
    </section><!-- End Services Section -->


        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>فريق العمل</h2>
        </div>
        <?php echo $this->element("website/files/team") ?>
     

      </div>
    </section><!-- End Team Section -->



    <!-- ======= Portfolio Section ======= -->
    <?php  // echo $this->element("website/files/portoflio") ?>
    <!-- ======= Recent Blog Posts Section ======= -->

    <?php   echo $this->element("website/files/blog") ?>

  </main><!-- End #main -->
