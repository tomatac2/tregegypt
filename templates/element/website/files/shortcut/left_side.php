<div class="col-lg-4">

<div class="sidebar">


<div class="sidebar-item recent-posts">
    <h3 class="sidebar-title">أحدث المقالات</h3>

    <div class="mt-3">

    <?php foreach($last3Articles as $k=>$v):?>
      <div class="post-item">
        <img src="<?=URL.$v["photo"]?>" height="80" width="80" class="flex-shrink-0" style="border-radius:50%;">
        <div style="padding: 10px;">
          <h4><a href="<?=URL.'details/'.$v->id.'/'.str_replace(' ','-',$v->title)?>"><?=$v["title"]?></a></h4>
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
            <li style="    border-bottom: 1px solid #ddd;padding-bottom: 10px;"><a href="<?=URL?>category/<?=$category->id.'/'.str_replace(' ','-',$category->name)?>"><?=$category->name?> <span></span></a></li>
        <?php endforeach;?>
    

    </ul>
  </div><!-- End sidebar categories-->

  <div class="sidebar-item tags">
    <h3 class="sidebar-title">الكلمات المفتاحية</h3>
    <ul class="mt-3">
        <?php
        $tags ? $article["tags"] = $tags : "";
        foreach(explode(',',$article["tags"]) as $k=>$v){?>
            <li><a><?=$v?></a></li>
        <?php }?>
    
    </ul>
  </div><!-- End sidebar tags-->

</div><!-- End Blog Sidebar -->

</div>