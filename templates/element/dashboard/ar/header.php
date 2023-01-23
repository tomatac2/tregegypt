<?php echo $this->element('dashboard/ar/css_ar') ?>


<div class="main-container">
<div class="container-fluid page-body-wrapper">
<div class="profile-overlay" style="max-width: 100%;">
<div class="title-head">
<h4>الملف الشخصى</h4>


</div>
<div class="profile-header" style="min-height: 200px;">
<div class="d-flex justify-content-between">
<i data-feather="arrow-left-circle" class="profile-close text-white"></i>
</div>
<div class="user-info" style="padding:0">
<div class="user-pic" style="padding:0">
	<img src=" <?=  URL.'dashboard/dist/images/logo-white-small.png' ?>" alt="Profile Picture" class="rounded-circle"/>
</div>
<div class="primary-info text-center">
	<h3 style="margin-bottom: 1rem;"><a class="name d-block" href="<?=URL.'about/edit/1'?>"><?=$thisUser['username']?></a></h3>
	<h5 style="margin-bottom: 1rem;"><a class="btn btn-primary mr-2" style="color:white"  href="<?=URL.'about/edit/1'?>">تحديث</a></h5>
	<h5 style="margin-bottom: 1rem;"><a class="btn btn-info mr-2" style="color:white"  href="<?php echo URL.'dashboard?lang=en' ?>">English</a></h5>
	<h5 style="margin-bottom: 0;"><a class="btn btn-danger mr-2" style="color:white"  href="<?=URL.'users/logout'?>">تسجيل خروج</a></h5>
 </div>
</div>

</div>
<div class="profile-body">
<div class="body-wrapper">

<div class="account-stat"  style="padding:0">
	<h5 style="text-align: right;">روابط</h5>
	<ul class="highlight-list" style="margin-left: 10px;">
			<li class="highlight-item">
					<div class="highlight-thumbnail">
							<div class="highlight-icon bg-soft-primary">
									<i data-feather="facebook" class="text-primary"></i>
							</div>
					</div>
					<div class="highlight-item-content">
							<small><?=$about["facebook"]?></small>
					</div>
			</li>
			<li class="highlight-item">
					<div class="highlight-thumbnail">
							<div class="highlight-icon bg-soft-primary">
									<i data-feather="twitter" class="text-primary"></i>
							</div>
					</div>
					<div class="highlight-item-content">
							<small><?=$about["twitter"]?></small>
					</div>
			</li>
			<li class="highlight-item">
					<div class="highlight-thumbnail">
							<div class="highlight-icon bg-soft-danger">
									<i data-feather="youtube" class="text-danger"></i>
							</div>
					</div>
					<div class="highlight-item-content">
							<small><?=$about["youtube"]?></small>
					</div>
			</li>
		
			<li class="highlight-item">
					<div class="highlight-thumbnail">
							<div class="highlight-icon bg-soft-danger" style="background: purple;">
									<i data-feather="instagram" class="text-danger " style="background: purple;"></i>
							</div>
					</div>
					<div class="highlight-item-content">
							<small><?=$about["instgram"]?></small>
					</div>
			</li>
		

	
	</ul>
</div>



</div>
</div>
</div>
<div class="settings-overlay">
 
 <div class="settings-body">

<div class="tab-content p-3 task-scroll-container" id="nav-tabContent">
<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-task-tab">
	<div class="task-list-container">
		 
	</div>
</div>
 
</div>
</div>
</div>
<div class="sidebar-overlay"></div>
<!-- partial -->

<nav class="navbar fixed-top d-flex flex-row" style="right:auto;margin-left: auto;width:100%">
<div class="navbar-menu-container d-flex align-items-center justify-content-center">
<div class="text-center navbar-brand-container align-items-center justify-content-center">
<!-- <a class="brand-logo" href="<?=URL?>dashboard"><img src="<?=URL?>dashboard/dist/images/logo-white-small.png" alt="بلوج"
											title="بلوج"/></a> -->
</div>
<div class="sub-header">
<h4 class="page-title text-center">لوحة التحكم</h4>
</div>
<!-- partial:../../partials/_navbar.html -->
<ul class="navbar-nav navbar-nav-right">

<li class="nav-item nav-profile ml-3">
	<a class="nav-link" href="#" id="profileToolbar">
			<i data-feather="user" class="mx-0"></i>
	</a>
</li>
 
<li class="nav-item mobile-sidebar">
	<button class="nav-link navbar-toggler navbar-toggler-right align-self-center" type="button"
			data-toggle="msb-sidebar">
			<i data-feather="align-right"></i>
	</button>
</li>
</ul>
<!-- partial -->
</div>
</nav>
<div class="d-flex w-100">
<nav class="navbar-container flex-row" id="navbar">
<!-- <div class="primary">
<div class="text-center navbar-brand-container d-flex align-items-center justify-content-center">
</div>
<ul class="nav">
	<li class="nav-item">
			<a class="nav-link" href="<?=URL?>dashboard" data-toggle="tooltip" data-placement="right" data-original-title="لوحة التحكم" data-skin-class="tooltip-base">
					<i data-feather="home"></i>
			</a>
	</li>

	<li class="nav-item">
			<a class="nav-link" href="<?=URL?>categories-list" data-toggle="tooltip" data-placement="right" data-original-title=" التصنيفات" data-skin-class="tooltip-base">
					<i data-feather="plus-square"></i>
			</a>
	</li>

	<li class="nav-item">
			<a class="nav-link" href="<?=URL?>articles-list" data-toggle="tooltip" data-placement="right" data-original-title=" المقالات" data-skin-class="tooltip-base">
					<i data-feather="edit-3"></i>
			</a>
	</li>
	<li class="nav-item">
			<a class="nav-link" href="<?=URL?>advertise-list" data-toggle="tooltip" data-placement="right" data-original-title=" الاعلانات" data-skin-class="tooltip-base">
					<i data-feather="grid"></i>
			</a>
	</li>
	<li class="nav-item">
			<a class="nav-link" href="<?=URL?>contacts-list" data-toggle="tooltip" data-placement="right" data-original-title="تواصل العملاء" data-skin-class="tooltip-base">
					<i data-feather="users"></i>
			</a>
	</li>

	<li class="nav-item">
			<a class="nav-link" href="<?=URL?>about/edit/1" data-toggle="tooltip" data-placement="right" data-original-title="تحديث الملف الشخصى" data-skin-class="tooltip-base">
					<i data-feather="settings"></i>
			</a>
	</li>

	<li class="nav-item">
			<a class="nav-link" href="<?=URL?>email-list/index" data-toggle="tooltip" data-placement="right" data-original-title="القائمة البريدية" data-skin-class="tooltip-base">
					<i data-feather="mail"></i>
			</a>
	</li>

	
</ul>
</div> -->
<div class="secondary" style="text-align: right;">
<div class="sub-header">
	<h4>العناصر</h4>
</div>
<div class="nav-wrapper">
	<ul class="nav">
		
		 
			<!------------ categories ---------->
			<li class="nav-item"><a class="nav-link" href="<?=URL?>categories-list"><i data-feather="plus-square"></i> &nbsp;&nbsp;&nbsp;&nbsp;  التصنيفات</a></li>
			<li class="nav-item"><a class="nav-link" href="<?=URL?>articles-list"><i data-feather="edit-3"></i> &nbsp;&nbsp;&nbsp;&nbsp; المقالات</a></li>
			<li class="nav-item"><a class="nav-link" href="<?=URL?>products-list"><i data-feather="agents"></i> &nbsp;&nbsp;&nbsp;&nbsp; منتحات الشركة</a></li>
			<li class="nav-item"><a class="nav-link" href="<?=URL?>agents-list"><i data-feather="agents"></i> &nbsp;&nbsp;&nbsp;&nbsp; الوكلاء</a></li>
			<li class="nav-item"><a class="nav-link" href="<?=URL?>team-list"><i data-feather="agents"></i> &nbsp;&nbsp;&nbsp;&nbsp; فريق العمل</a></li>
			<li class="nav-item"><a class="nav-link" href="<?=URL?>comments-list"><i data-feather="users"></i> &nbsp;&nbsp;&nbsp;&nbsp; التعليقات</a></li>
			<li class="nav-item"><a class="nav-link" href="<?=URL?>contacts-list"><i data-feather="users"></i> &nbsp;&nbsp;&nbsp;&nbsp; تواصل العملاء</a></li>
			<li class="nav-item"><a class="nav-link" href="<?=URL?>settings"><i data-feather="settings"></i> &nbsp;&nbsp;&nbsp;&nbsp; من نحن</a></li>
	</ul>
</div>
</div>
</nav>
<!-- partial -->
</div>
<div class="main-panel" style="height:100% ">



