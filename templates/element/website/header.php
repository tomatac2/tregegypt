<!DOCTYPE html>
<html lang="ar"  dir="rtl">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>تريج مصر</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?=URL?>assets/egy/imgs/logo.png" rel="icon">
  <link href="<?=URL?>assets/egy/imgs/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->


  <!---ar----->
    <!-- <link href="<?=URL?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
  <!---ar----->

  <link href="<?=URL?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?=URL?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?=URL?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?=URL?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Variables CSS Files. Uncomment your preferred color scheme -->
  <link href="<?=URL?>assets/css/variables.css" rel="stylesheet">
  <!-- <link href="<?=URL?>assets/css/variables-blue.css" rel="stylesheet"> -->
  <!-- <link href="<?=URL?>assets/css/variables-green.css" rel="stylesheet"> -->
  <link href="<?=URL?>assets/css/variables-orange.css" rel="stylesheet">
  <!-- <link href="<?=URL?>assets/css/variables-purple.css" rel="stylesheet"> -->
  <!-- <link href="<?=URL?>assets/css/variables-red.css" rel="stylesheet"> -->
  <!-- <link href="<?=URL?>assets/css/variables-pink.css" rel="stylesheet"> -->

  <!-- Template Main CSS File -->
  <link href="<?=URL?>assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: HeroBiz - v2.4.0
  * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="<?=URL?>assets/img/logo.png" alt=""> -->
        <img src="<?=URL?>assets/egy/imgs/logo-2.png" alt="">
      </a>

      <nav id="navbar" class="navbar col-lg-8">
        <ul>

        

          <li><a class="nav-link scrollto" href="<?=URL?>">الرئيسية</a></li>
          <li class="dropdown"><a href="#"><span>عن الشركة</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="<?=URL.'agents'?>">الوكلاء</a></li>
              <li style="border:none"><a href="<?=URL.'get-product'?>">اطلب منتجاتنا</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="index.html#portfolio">المدونة</a></li>
          <li class="dropdown"><a href="#"><span>منتجاتنا</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="<?=URL.'products/27/شبابيك-uPVC'?>"> شبابيك uPVC </a></li>
              <li style="border:none"><a href="<?=URL.'products/30/أبواب-uPVC'?>"> أبواب uPVC</a></li>
            </ul>
          </li>         
          <li><a class="nav-link scrollto" href="<?=URL.'contact'?>"> تواصل معنا</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->


    </div>
  </header><!-- End Header -->


  <style>

    @font-face { font-family: 'NotoKufiArabic'; 
			 src: url('<?=URL?>font/NotoKufiArabic-VariableFont_wght.ttf'); } 

       body , h1 , h3 , h2 , h4 , h5 , h6 , p  , a {
        font-family: 'NotoKufiArabic' !important ;color:black !important;
       }
    .mobile-nav-toggle {
      right: auto;
       left: 20px;
    }
  
    @media (max-width: 1279px){
      .mobile-nav-active .navbar{
      right: 0;
    }
    }

    #header{    background: #f7730e;}
  .mobile-nav-toggle , .nav-link{color:white !important}
  .img>img{    width: 100%;
    height: 300px;}

    .scroll-top {right: auto;left: 15px;}

    .navbar a i, .navbar a:focus i{    margin-right: 5px;    margin-left: 0px;}
    .dropdown>a{color:white !important;}

    @media (min-width: 1280px){
    .navbar .dropdown ul {
      left: auto;right: 0;    background: #ffffff;
    }
    .navbar .dropdown ul li {border-bottom: 1px solid #ddd;}

    .navbar .dropdown a:hover, .navbar .dropdown .active, .navbar .dropdown .active:focus, .navbar .dropdown:hover>a{   color:white !important; background: #ff0000 !important;}
    }
    .blog .blog-details .meta-top i{    margin-left: 8px;     margin-right: 8px;}
  </style>