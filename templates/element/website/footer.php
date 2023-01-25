
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <img src="<?=URL?>assets/egy/imgs/logo-2.png" alt=""><br> 
              <p>
              شركة تريج مصر الأفضل في مصر في مجال تصنيع وإنتاج وتطوير أبواب وشبابيك UPVC لجميع أنواع وأشكال وتصاميم الشبابيك والنوافذ.
              </p>
              
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>منتجات الشركة</h4>
            <ul>
              <?php foreach($products as $product):?>
                <li><i class="bi bi-chevron-right"></i> <a href="<?=URL.'company-products/'.$product["id"].'/'.str_replace(' ','-',$product["name"])?>"><?=$product["name"]?></a></li>
              <?php endforeach;?>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>الأخبار & المقالات</h4>
            <ul>
            <?php foreach($last3Articles as $k=> $last3Articles):?>
              <?php if($k < 2){?>
                <li>
                    <img style="width: 50px;border-radius: 50%;" src="<?=URL.$last3Articles["photo"]?>" alt="">
                   <a href="<?=URL.'details/'.$last3Articles["id"].'/'.str_replace(' ','-',$last3Articles["title"])?>"><?=$last3Articles["title"]?><br><br><?=$last3Articles["created_at"]?></a>     
              </li>
              <?php }?>
              <?php endforeach;?>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>بيانات التواصل</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i>عنوان الشركة العاشر من رمضان، المنطقة الصناعية الثالثة A2، قطعة رقم 3 - 5 - 17</li>
              <li><i class="bi bi-chevron-right"></i>البريد الإلكترونيinfo@tregegypt.com</li>
              <li><i class="bi bi-chevron-right"></i>رقم الهاتف 01003213639</li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="footer-legal text-center">
      <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div class="copyright">
          جميع الحقوق محفوظة <strong><span>تريج مصر</span></strong>  © 2023  


          </div>

        </div>

      </div>
    </div>

  </footer><!-- End Footer -->

  <style>
     .footer-info > p , .footer-content > div > div > div > h4 , .footer-content > div > div > div  > ul >li > a ,  .footer-content > div > div > div > p { color: white !important;}
      .footer-content h4::after{    width: 100px;    right: 0;    left: auto;}
      .footer .footer-content .footer-links ul i{    padding-left: 10px;}
       .footer-links ul a {padding-right: 5px;}
  </style>
  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <!----ar-->
  <!-- <script src="<?=URL?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!----ar-->


  <script src="<?=URL?>assets/vendor/aos/aos.js"></script>
  <script src="<?=URL?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?=URL?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?=URL?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?=URL?>assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?=URL?>assets/js/main.js"></script>

</body>

</html>