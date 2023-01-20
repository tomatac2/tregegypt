<style>
    @font-face {
        font-family: cairo;
        src: url(<?=URL?>fonts/cairo/Cairo-Regular.ttf);
    }
    /* html {direction: rtl; } */
    h1, h2, h3, h4, h5, body, .navbar-toggleable-md .navbar-nav .nav-link,
    .market-header, .btn, .dropdown-item, .form-control, p , div.tab button ,
    span {font-family:cairo !important}
    .main-panel { left: 0;  right: auto;}
    html{  direction: rtl;}
    .navbar .navbar-menu-container .navbar-nav.navbar-nav-right{margin-right: auto !important;margin-left: 0 !important;}
    .profile-overlay.active{left: 0;right: auto;}
    @media (max-width: 1024px){
        .navbar-container {
           display:none     
          }
        .navbar-container.active {
            right: 0 !important; left:auto ;     display:flex

        }
    }
    @media (min-width: 1024px){
        .navbar-container{right: 0;left:auto}
        .navbar-container {
          
          }
          .main-panel{    width: calc(100% - (220px)) !important;}

    }

    .input , legend {    text-align: right;}
    .content-wrapper{text-align: right;direction: rtl;}

    td{line-height: 18px !important;    text-align: right !important;}
    .widget-8 tr th {text-align: right !important;}
    /* .navbar-container .secondary .nav-wrapper .nav .nav-item.active {background: none;} */
</style>

