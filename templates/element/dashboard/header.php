<?php 
    echo $this->element('dashboard/ar/header')  ;
?>


<style>

@font-face { font-family: 'NotoKufiArabic'; 
			 src: url('<?=URL?>font/NotoKufiArabic-VariableFont_wght.ttf'); } 

       body , h1 , h3 , h2 , h4 , h5 , h6 , p  , a {
        font-family: 'NotoKufiArabic' !important ;
       }
th a {    line-height: normal;  }
    .table thead th, .jsgrid .jsgrid-table thead th {  vertical-align: middle !important;}
        .navbar-container .primary .nav .nav-item .nav-link{    height: 43px !important}
        .navbar-container .primary .nav{    margin-top: 15px;}
        .highlight-list .highlight-item .highlight-item-content{width: 100%;}
        .navbar-container .secondary .nav-wrapper .nav .nav-item .nav-link { margin-top: 0.625rem !important;padding: 0.5625rem 0.875rem !important;}

   
    td{    padding: 20px;border: 1px solid ; }
.actions > a{    border: 1px solid; padding: 5px;}
table>thead>tr{    text-align: center;}
</style>

