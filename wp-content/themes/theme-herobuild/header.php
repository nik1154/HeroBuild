<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Supplement - One Page HTML Template</title>
  

  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/css/bootstrap.min.css' ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/css/animate.min.css' ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/css/font-awesome.min.css' ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/css/flexslider.css' ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/css/owl.carousel.css' ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/css/owl.theme.css' ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/css/style.css' ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/css/responsive.css' ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/custom.css' ?>">  


  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->

</head><!--/head-->

<body>
  

<!-- main-navigation -->
<div class="navbar menu-wrap">
  <div class="navbar-header text-center">
    <a class="navbar-brand logo-right" href="#home"><img src="<?php bloginfo('template_directory');?>/img/logo-sidebar.png" alt="logo"></a>
  </div>
    <ul id="main-navigation" class="nav navbar-nav main-navigation">
      <li class="active"><a href="#home">Home</a></li>
      <li><a href="#features">Features</a></li>
      <li><a href="#real-man">Real man</a></li>
      <li><a href="#supplement-facts">Supplement facts</a></li>
      <li><a href="#order-now">Order now</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
    <button class="close-button" id="close-button">Close Menu</button>
</div> <!-- //main-navigation -->


<!-- content wrap -->
<div class="content-wrap">
  <!-- 
  START HOME
  ======================================== -->
  <header id="home">
    <div class="gradient"></div>
    <div class="dotted_bg"></div>

      <!-- navigation -->
      <nav id="main-navbar">
        <div class="container navigation">
          <div class="pull-left">
            <a class="logo-left" href="index.html"><img src="<?php bloginfo('template_directory');?>/img/logo.png" class="img-responsive" alt="logo"></a>
          </div>
          <div class="pull-right menu-icon">
            <button  id="open-button">
              <i class="fa fa-bars"></i>
            </button>             
          </div>
        </div> 
      </nav><!-- //navigation --> <!-- //container -->

      <!-- cover -->
      <div class="container">
       <div class="row cover">
          <div class="col-sm-12">
            <div class="row">
               <div class="col-lg-7 col-md-6 col-sm-4 col-lg-push-5 col-md-push-6 col-sm-push-8 cover-img">
                 <img src="<?php bloginfo('template_directory');?>/img/HerboBuild.png" class="wow fadeInRight img-responsive" data-wow-delay=".25s" alt="main-product">
               </div>
               <div class="col-lg-5 col-md-6 col-sm-8 col-lg-pull-7 col-md-pull-6 col-sm-pull-4">
                 <div class="title">
                   <h1 class="wow fadeInUp" data-wow-delay=".25s">POWER UP NATURALLY</h1>
                   <h4 class="wow fadeInUp" data-wow-delay=".5s">With HerboBuild, your 100% natural bodybuilding supplement</h4>
                 </div>
                 <p class="info wow fadeInLeft" data-wow-delay=".25s">
                 Build muscle naturally with HerboBuild, an Ayurvedic muscle supplement
                 </p>
                 <a href="#certifications" class="wow fadeInLeft btn btn-primary order-button" data-wow-delay=".25s"><span>ORDER NOW</span></a>
                 <a href="#" class="wow fadeInLeft video-button" data-toggle="modal" data-target="#demo-video" data-wow-delay=".5s"><span>Watch The Video</span> <i class="fa fa-play"></i></a>
               </div>
               
             </div>
           </div>
        </div> <!-- //row & cover -->
    </div> <!-- //container -->

    <!-- video modal -->
    <div class="modal fade demo-video" id="demo-video">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">HeroBuild</h4>
          </div>
          <div class="modal-body">
            <iframe src="https://www.youtube.com/embed/Pe0jFDPHkzo" allowfullscreen></iframe>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.end video modal -->
  </header>
  <!-- END HOME ========================== -->
  