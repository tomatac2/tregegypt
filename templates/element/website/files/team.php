<div class="row gy-5">

<?php foreach($teams as $team){?>
<div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="600">
  <div class="team-member">
    <div class="member-img">
      <img src="<?=URL.$team["photo"]?>" class="img-fluid" alt="">
    </div>
    <div class="member-info">
      <h4><?=$team["name"]?></h4>
      <span> <?=$team["career"]?></span>
    </div>
  </div>
</div><!-- End Team Member -->
<?php }?>


</div>