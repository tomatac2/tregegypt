 <div class="reply-form">

<h4>اترك تعليقاً</h4>
<form action="" method="POST" >
  <div class="row">
    <div class="col-md-6 form-group">
      <input name="name" type="text" class="form-control" placeholder="الاسم*" required="">
    </div>
    <div class="col-md-6 form-group">
      <input name="email" type="email" class="form-control" placeholder="البريد الالكترونى *" required="">
    </div>
  </div>
  <div class="row">
    <div class="col form-group">
      <textarea name="comment" class="form-control" placeholder="التعليق *" required=""></textarea>
    </div>
  </div>
  <input type="hidden" name="_csrfToken" value="<?=$this->request->getAttribute('csrfToken')?>">
  <button type="submit" class="btn btn-primary">ارسل</button>

</form>

</div>

<br>


    <h4 class="comments-count">  التعليقات</h4>
<div style="    max-height: 300px; overflow-y: scroll;">
    <?php foreach($comments as $comt):?>
    <div id="comment-1" class="comment">
        <div class="d-flex">
            <div class="comment-img"><img src="assets/img/blog/comments-1.jpg" alt=""></div>
            <div>
                <h5><a href=""><?=$comt["name"]?></a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> </a></h5>
                <time datetime="2020-01-01"><?=$comt["created_at"]?></time>
                <p><?=$comt["comment"]?> </p>
            </div>
        </div>
    </div><!-- End comment #1 -->
    <?php endforeach;?>
</div>