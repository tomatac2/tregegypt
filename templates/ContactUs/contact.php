

<main id="main" style="margin-top:100px;">

<!-- ======= Blog Details Section ======= -->
<section id="blog" class="blog">
<div class="container">

    <div class="row gy-5 gx-lg-5">

    <div class="col-lg-4">
    <h2 style="text-align: center;">تواصل معنا</h2>
        <p style="text-align: center;font-size:14px;color:#f7730e !important">يسعدنا الإجابة على كافة استفساراتكم وطلباتكم!</p>
        <ul>
            <li style="list-style: none;padding-top: 5px;"><strong>رقم الهاتف:</strong> <br><span>01003213639</span></li>
            <li style="list-style: none;padding-top: 5px;"> <strong>البريد الإلكتروني: </strong><br> <span>info@tregegypt.com</span></li>
            <li style="list-style: none;padding-top: 5px;"> <strong>العنوان :</strong><br> <span>العاشر من رمضان، المنطقة الصناعية الثالثة A2،
قطعة رقم 3 - 5 - 17</span></li>
        </ul>
    </div>

     
    <div class="col-lg-6" >
        <form action="" method="POST"  >


            <div class="col-md-12 form-group">
                <input type="text" name="full_name" class="form-control" id="name" placeholder="الاسم الكامل (مطلوب)" required="">
            </div>
            <br>
            <div class="col-md-12 form-group">
                    <input type="email" style="    text-align: right;" class="form-control" name="email" id="email" placeholder="البريد الإلكتروني (مطلوب)" required="">
            </div>  
            <br>
            <div class="col-md-12 form-group">
                    <input type="text" style="    text-align: right;" class="form-control" name="subject" id="subject" placeholder="الموضوع" >
            </div>  
            <br>
            <div class="col-md-12 form-group">
                <textarea style="text-align: right;" class="form-control" name="message" id="message" placeholder="رسالتك"></textarea>
        </div>  
            <br>
 
        <input type="hidden" name="_csrfToken" value="<?=$this->request->getAttribute('csrfToken')?>">
        <br>
        <div class="text-center"><button type="submit" class="btn" style="background: #f7730e;color: white;padding: 10px;width: 70%;"> ارسل الآن </button></div>
        </form>
    </div><!-- End Contact Form -->

    </div>

</div>
</section>

</main>
