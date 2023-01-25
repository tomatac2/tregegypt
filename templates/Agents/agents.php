<main id="main">

<!-- ======= Blog Details Section ======= -->
<section id="blog" class="blog" style="margin-top:35px">
  <div class="container" data-aos="fade-up">

    <div class="row g-5">

      <div class="col-lg-12">
       
        <h2>الوكلاء والموزعين</h2>
        <p>قائمة الوكلاء والموزعين والوكلاء لشركة Treg Egypt الوكيل الحصري لـ Polywin داخل مصر.</p>
        <br>
        <article class="blog-details">
        <?php foreach($agents as $agent){    ?>

          <div class="content" style="padding: 15px;box-shadow: 0 4px 16px rgba(var(--color-black-rgb), 0.1);margin: 50px 0 50px;">

                <ul>
                    <li><h3><?=$agent->name?></h3></li>
                    <li><img style="max-height: 250px;"src="<?=URL.$agent["photo"]?>" alt="" class="img-fluid"></li>
                    <li>إسم الموزع : <span><?=$agent["name"]?></span></li>
                    <li>المحافظة     : <span><?=$agent["area"]?></span></li>
                    <li>العنوان         : <span><?=$agent["address"]?></span></li>
                    <li>الهاتف          : <span><?=$agent["mobile"]?></span></li>
                </ul>
          </div><!-- End post content -->

          <?php } ?>
        </article>
      </div>

    </div>

  </div>
</section><!-- End Blog Details Section -->

</main><!-- End #main -->


<style>
    .content>ul>li{list-style: none;margin: 15px 10px 5px 0px;}
    ol,ul{ padding-right: 0;}
</style>