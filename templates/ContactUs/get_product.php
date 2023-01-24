

<main id="main" style="margin-top:100px;">

<!-- ======= Blog Details Section ======= -->
<section id="blog" class="blog">
<h6 style="text-align: center;color:#f7730e !important">يسعدنا خدمتكم</h6>
<h2 style="text-align: center;">اطلب منتجاتنا</h2><br>
<div class="container">

    <div class="row gy-5 gx-lg-5">
 
    <div class="col-lg-6">
        <form action="" method="POST" >
        <div class="row">
            <div class="col-md-6 form-group">
            <input type="text" name="full_name" class="form-control" id="name" placeholder="الاسم الكامل (مطلوب)" required="">
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="البريد الإلكتروني (مطلوب)" required="">
            </div>
        </div>
        <div class="form-group mt-3">
            <input type="text" class="form-control" name="mobile" id="mobile" placeholder="رقم الهاتف (مطلوب)" required="">
        </div>
        <div class="form-group mt-3">
            <input type="text" class="form-control" name="message" id="message" placeholder=" المنتج (مطلوب)" required="">
        </div>
        <div class="form-group mt-3">
            <textarea class="form-control" name="note" placeholder="ملاحظات" ></textarea>
        </div>
 
        <input type="hidden" name="_csrfToken" value="<?=$this->request->getAttribute('csrfToken')?>">
        <br>
        <div class="text-center"><button type="submit" class="btn" style="background: #f7730e;color: white;padding: 10px;width: 70%;">طلب المنتج </button></div>
        </form>
    </div><!-- End Contact Form -->


       
    <div class="col-lg-6">
        <img style="    width: 80%;" src="<?=URL."assets/egy/imgs/about.png"?>" alt="">
    </div>
    </div>

</div>
</section>

</main>
