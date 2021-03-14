<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $title ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>/t_awesomemagz/assets/img/favicon.ico">

	<!-- CSS here -->
	<link rel="stylesheet" href="<?= base_url(); ?>/t_awesomemagz/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>/t_awesomemagz/assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>/t_awesomemagz/assets/css/slicknav.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/t_awesomemagz/assets/css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/t_awesomemagz/assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/t_awesomemagz/assets/css/gijgo.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/t_awesomemagz/assets/css/animate.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/t_awesomemagz/assets/css/animated-headline.css">
	<link rel="stylesheet" href="<?= base_url(); ?>/t_awesomemagz/assets/css/magnific-popup.css">
	<link rel="stylesheet" href="<?= base_url(); ?>/t_awesomemagz/assets/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>/t_awesomemagz/assets/css/themify-icons.css">
	<link rel="stylesheet" href="<?= base_url(); ?>/t_awesomemagz/assets/css/slick.css">
	<link rel="stylesheet" href="<?= base_url(); ?>/t_awesomemagz/assets/css/nice-select.css">
	<link rel="stylesheet" href="<?= base_url(); ?>/t_awesomemagz/assets/css/style.css">
</head>
<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <!-- <img src="<?//base_url(); ?>/t_awesomemagz/assets/img/logo/loder.png" alt=""> -->
                    <img src="<?= base_url(); ?>/assets/img/Ruwaiskita-text.png" alt="">
                </div>
            </div>
        </div>
    </div> 
    <!-- Preloader Start-->
    <header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
                <div class="header-top ">
                   <div class="container-fluid">
                       <div class="col-xl-12">
                            <div class="row d-flex justify-content-lg-between align-items-center">
                                <div class="header-info-left">
                                    <li class="d-none d-lg-block">
                                        <!-- <div class="form-box f-right ">
                                            <input type="text" name="Search" placeholder="Cari...">
                                            <div class="search-icon">
                                                <i class="ti-search"></i>
                                            </div>
                                        </div> -->
                                        <div class="logo">
                                            <a href="<?= base_url(); ?>"><img src="<?= base_url(); ?>/assets/img/Ruwaiskita-2.png" alt="" class="img-fluid" style="width: 385px"></a>
                                        </div>
                                    </li>
                                </div>
                                <div class="header-info-mid">
                                    <!-- logo -->
                                    <!-- <div class="logo">
                                        <a href="<?//base_url(); ?>"><img src="<?//base_url(); ?>/assets/img/Ruwaiskita-2.png" alt="" class="img-fluid" style="width: 385px"></a>
                                    </div> -->
                                </div>
                                <div class="header-info-right d-flex align-items-center">
                                   <ul>                                          
                                       <li><a href="<?= base_url('aboutus'); ?>">Tentang kita</a></li>
                                       <li><a href="<?= base_url('contactus'); ?>">Kontak</a></li>
                                       <li><a href="<?= base_url('auths/signin'); ?>">Sign-in / Sign-up</a></li>
                                   </ul>
                                   <!-- Social -->
                                   <div class="header-social">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                            </div>
                       </div>
                   </div>
                </div>
               <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <!-- logo 2 -->
                                <div class="logo2">
                                    <a href="<?= base_url(); ?>"><img src="<?= base_url(); ?>/assets/img/Ruwaiskita-2.png" alt="" class="img-fluid" style="width: 250px"></a>
                                </div>
                                <!-- logo 3 -->
                                <div class="logo3 d-block d-sm-none">
                                    <!-- <a href="index.html"><img src="<?//base_url(); ?>/t_awesomemagz/assets/img/logo/logo-mobile.png" alt=""></a> -->
                                    <a href="<?= base_url(); ?>"><img src="<?= base_url(); ?>/assets/img/Ruwaiskita-text.png" alt=""></a>
                                </div>
                                <!-- Main-menu -->
                                <div class="main-menu text-center d-none d-lg-block">
                                    <?php require('u_nav_menu.php') ?>
                                </div>
                            </div> 
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>
    <main>
        <!-- Banner News Area Start -->
        <div class="banner-news">
            <div class="container-fluid p-0">
                <div class="banner-slider-active no-gutters ">

                    <div class="single-sliders">
                        <div class="single-baner-nw mb-30 text-center">
                            <div class="banner-img-cap">
                                <div class="banner-img">
                                    <img src="<?= base_url(); ?>/uploads/img/zayedwater.png" alt="">
                                    <!--video iocn -->
                                    <div class="video-icon">
                                        <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=fikyqu93YGY" data-animation="bounceIn" data-delay=".4s"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="banner-cap">
                                    <p>Zayed Water</p>
                                    <h3><a href="#">The natural oasis of Falaj Al Mualla that lies at the foothills of the legendary Hajar Mountains.</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="single-sliders">
                        <div class="single-baner-nw mb-30 text-center">
                            <div class="banner-img-cap">
                                <div class="banner-img">
                                    <img src="<?= base_url(); ?>/t_awesomemagz/assets/img/gallery/banner-cap2.png" alt="">
                                </div>
                                <div class="banner-cap">
                                    <p>Trending</p>
                                   <h3><a href="post_details.html">The pomelo case: scope of plant variety rights in China</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-sliders">
                        <div class="single-baner-nw mb-30 text-center">
                            <div class="banner-img-cap">
                                <div class="banner-img">
                                    <img src="<?= base_url(); ?>/t_awesomemagz/assets/img/gallery/banner-cap3.png" alt="">
                                    <!--video iocn -->
                                    <div class="video-icon">
                                        <a class="popup-video btn-icon" href="#" data-animation="bounceIn" data-delay=".4s"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="banner-cap">
                                    <p>Trending</p>
                                    <h3><a href="#">Valuable lessons to take away from COVID-19</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-sliders">
                        <div class="single-baner-nw mb-30 text-center">
                            <div class="banner-img-cap">
                                <div class="banner-img">
                                    <img src="<?= base_url(); ?>/t_awesomemagz/assets/img/gallery/banner-cap4.png" alt="">
                                </div>
                                <div class="banner-cap">
                                    <p>Trending</p>
                                    <h3><a href="#">Building on consumer preferences shaped by the pandemic</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-sliders">
                        <div class="single-baner-nw mb-30 text-center">
                            <div class="banner-img-cap">
                                <div class="banner-img">
                                    <img src="<?= base_url(); ?>/t_awesomemagz/assets/img/gallery/banner-cap2.png" alt="">
                                    <!--video iocn -->
                                    <div class="video-icon">
                                        <a class="popup-video btn-icon" href="#" data-animation="bounceIn" data-delay=".4s"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="banner-cap">
                                    <p>Trending</p>
                                    <h3><a href="#">Building on consumer preferences shaped by the pandemic</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner News Area End -->
        <!-- Latest Posts Area -->
        <div class="latest-posts pt-80 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-tittle mb-35">
                            <h2>Latest Posts</h2>
                        </div>
                    </div>
                </div>
                <!-- Slider -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="latest-slider">
                            <div class="slider-active">
                                <!-- Single slider -->
                                <div class="single-slider">
                                    <div class="trending-top mb-30">
                                        <div class="trend-top-img text-center">
                                            <img src="<?= base_url(); ?>/t_awesomemagz/assets/img/gallery/latest-post.png" alt="">
                                            <div class="trend-top-cap">
                                                <span class="bgr" data-animation="fadeInUp" data-delay=".2s" data-duration="1000ms">Design</span>
                                                <h2><a href="post_details.html" data-animation="fadeInUp" data-delay=".4s" data-duration="1000ms">Calling time on irresponsible junk food advertising to children</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single slider -->
                                <div class="single-slider">
                                    <div class="trending-top mb-30">
                                        <div class="trend-top-img text-center">
                                            <img src="<?= base_url(); ?>/t_awesomemagz/assets/img/gallery/latest-post.png" alt="">
                                            <div class="trend-top-cap">
                                                <span class="bgr" data-animation="fadeInUp" data-delay=".2s" data-duration="1000ms">Design</span>
                                                <h2><a href="post_details.html"  data-animation="fadeInUp" data-delay=".4s" data-duration="1000ms">Calling time on irresponsible junk food advertising to children</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- smoll items -->
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single-baner-nw2 mb-30 ">
                                    <div class="banner-img-cap2">
                                        <div class="banner-img">
                                            <img src="<?= base_url(); ?>/t_awesomemagz/assets/img/gallery/latest-post2.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single-baner-nw2 mb-30">
                                    <div class="banner-img-cap2">
                                        <div class="banner-cap2 banner-cap3">
                                            <p>Trending</p>
                                           <h3><a href="post_details.html">The pomelo case: scope of plant variety rights in China</a></h3>
                                            <p class="normal">Passion for their subjects from the subtleties of regional Thai home cooking to the intersection of food and queer culture.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single-baner-nw2 mb-30">
                                    <div class="banner-img-cap2">
                                        <div class="banner-cap2 banner-cap3">
                                            <p>Technology</p>
                                            <h3><a href="post_details.html">Valuable lessons to take away from COVID-19</a></h3>
                                            <p  class="normal">Passion for their subjects from the subtleties of regional Thai home cooking to the intersection of food and queer culture.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single-baner-nw2 mb-30 ">
                                    <div class="banner-img-cap2">
                                        <div class="banner-img">
                                            <img src="<?= base_url(); ?>/t_awesomemagz/assets/img/gallery/latest-post02.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-baner-nw2 mb-30 text-center">
                            <div class="banner-img-cap2">
                                <div class="banner-img">
                                    <img src="<?= base_url(); ?>/t_awesomemagz/assets/img/gallery/latest-post3.png" alt="">
                                </div>
                                <div class="banner-cap2">
                                    <p>Technology</p>
                                    <h3><a href="post_details.html">Calling time on irresponsible junk food advertising to children</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-baner-nw2 mb-30 text-center">
                            <div class="banner-img-cap2">
                                <div class="banner-img">
                                    <img src="<?= base_url(); ?>/t_awesomemagz/assets/img/gallery/latest-post4.png" alt="">
                                </div>
                                <div class="banner-cap2">
                                    <p>Design</p>
                                    <h3><a href="post_details.html">Researchers control cattle microbiome  to reduce greenhouse gases</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Latest Posts End-->

        <!-- Nwes slider Start -->
        <div class="nes-slider-area pt-80 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="news-slider-active">
                            <div class="single-news-slider">
                                <div class="news-img">
                                    <a href="category.html"><img src="<?= base_url(); ?>/t_awesomemagz/assets/img/gallery/news-slider1.png" alt=""></a>
                                </div>
                            </div>
                            <div class="single-news-slider">
                                <div class="news-img">
                                    <a href="category.html"><img src="<?= base_url(); ?>/t_awesomemagz/assets/img/gallery/news-slider2.png" alt=""></a>
                                </div>
                            </div>
                            <div class="single-news-slider">
                                <div class="news-img">
                                    <a href="category.html"><img src="<?= base_url(); ?>/t_awesomemagz/assets/img/gallery/news-slider3.png" alt=""></a>
                                </div>
                            </div>
                            <div class="single-news-slider">
                                <div class="news-img">
                                    <a href="category.html"><img src="<?= base_url(); ?>/t_awesomemagz/assets/img/gallery/news-slider4.png" alt=""></a>
                                </div>
                            </div>
                            <div class="single-news-slider">
                                <div class="news-img">
                                    <a href="category.html"><img src="<?= base_url(); ?>/t_awesomemagz/assets/img/gallery/news-slider1.png" alt=""></a>
                                </div>
                            </div>
                            <div class="single-news-slider">
                                <div class="news-img">
                                    <a href="category.html"><img src="<?= base_url(); ?>/t_awesomemagz/assets/img/gallery/news-slider2.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nwes slider End -->
        
        <!-- Top Posts Start -->
        <div class="top-post-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-tittle mb-35">
                            <h2>Top Posts</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-lg-between">
                    <div class="col-lg-8 col-md-8">

                        <!-- single-job-content -->
                        <div class="single-job-items mb-30">
                            <div class="job-items">
                                <div class="company-img">
                                    <a href="#"><img src="<?= base_url(); ?>/uploads/img/zayedwater.png" style="width: 260px" alt=""></a>
                                </div>
                                <div class="job-tittle">
                                    <span>Healthy</span>
                                    <a href="post_details.html"><h4>LIVE HEALTHY with Zayed Water.</h4></a>
                                    <p>The natural oasis of Falaj Al Mualla that lies at the foothills of the legendary Hajar Mountains. Enriched naturally with essential minerals and low sodium, ...</p>
                                </div>
                            </div>
                        </div>

                        <!-- single-job-content -->
                        <div class="single-job-items mb-30">
                            <div class="job-items">
                                <div class="company-img">
                                    <a href="#"><img src="<?= base_url(); ?>/t_awesomemagz/assets/img/gallery/top-psot2.png" alt=""></a>
                                </div>
                                <div class="job-tittle">
                                    <span>Trending</span>
                                    <a href="post_details.html"><h4>The pomelo case:scope of plant variety rights in China</h4></a>
                                    <p>We present things in a way that isn’t sensational, said Ms. Cham mavanijakul, 20, whose family has roots...</p>
                                </div>
                            </div>
                        </div>
                        <!-- single-job-content -->
                        <div class="single-job-items mb-30">
                            <div class="job-items">
                                <div class="company-img">
                                    <a href="#"><img src="<?= base_url(); ?>/t_awesomemagz/assets/img/gallery/top-psot3.png" alt=""></a>
                                </div>
                                <div class="job-tittle">
                                    <span>Trending</span>
                                    <a href="post_details.html"><h4>The pomelo case:scope of plant variety rights in China</h4></a>
                                    <p>We present things in a way that isn’t sensational, said Ms. Cham mavanijakul, 20, whose family has roots...</p>
                                </div>
                            </div>
                        </div>
                        <!-- single-job-content -->
                        <div class="single-job-items mb-30">
                            <div class="job-items">
                                <div class="company-img">
                                    <a href="#"><img src="<?= base_url(); ?>/t_awesomemagz/assets/img/gallery/top-psot4.png" alt=""></a>
                                </div>
                                <div class="job-tittle">
                                    <span>Trending</span>
                                    <a href="post_details.html"><h4>The pomelo case:scope of plant variety rights in China</h4></a>
                                    <p>We present things in a way that isn’t sensational, said Ms. Cham mavanijakul, 20, whose family has roots...</p>
                                </div>
                            </div>
                        </div>
                        <!-- single-job-content -->
                        <div class="single-job-items mb-30">
                            <div class="job-items">
                                <div class="company-img">
                                    <a href="#"><img src="<?= base_url(); ?>/t_awesomemagz/assets/img/gallery/top-psot5.png" alt=""></a>
                                </div>
                                <div class="job-tittle">
                                    <span>Trending</span>
                                    <a href="post_details.html"><h4>The pomelo case:scope of plant variety rights in China</h4></a>
                                    <p>We present things in a way that isn’t sensational, said Ms. Cham mavanijakul, 20, whose family has roots...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="google-add mb-40">
                            <img src="<?= base_url(); ?>/t_awesomemagz/assets/img/gallery/Ad.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Posts End -->

        <!-- Want To work -->
        <section class="wantToWork-area gray-bg ">
            <div class="container">
                <div class="wants-wrapper w-padding2">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-6 col-lg-7 col-md-10">
                            <div class="wantToWork-caption wantToWork-caption2">
                                <h2>Daftar, untuk mendapatkan informasi terkini.</h2>
                                <p>Ingin mendapatkan variasi dalam berita?, silahkan ikuti kami..</p>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-12">
                            <form action="#" class="search-box">
                                <div class="input-form">
                                    <input type="text" placeholder="Daftarkan email mu">
                                </div>
                                <div class="search-form">
                                    <a href="#">Subscribe</a>
                                </div>	
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Want To work End -->

    </main>
    
    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-padding">
            <div class="header-area">
                <div class="main-header ">
                    <div class="header-top d-lg-block d-none">
                       <div class="container">
                           <div class="col-xl-12">
                                <div class="row d-flex justify-content-between align-items-center">
                                    <div class="header-info-left d-flex justify-content-center">
                                        <!-- Social -->
                                        <div class="header-social">
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        </div>
                                    </div>
                                    <div class="header-info-mid">
                                        <!-- logo -->
                                        <div class="logo">
                                        
                                            <a href="<?= base_url(); ?>"><img src="<?= base_url(); ?>/assets/img/Ruwaiskita-2.png" alt="" class="img-fluid" style="width: 385px"></a>
                                        </div>
                                    </div>
                                    <div class="header-info-right d-flex align-items-center">
                                       <ul>                                          
                                           <li><a href="about.html">About</a></li>
                                           <li><a href="contact.html">Contact</a></li>
                                       </ul>
                                    </div>
                                </div>
                           </div>
                       </div>
                    </div>
                   <div class="header-bottom header-bottom2 ">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <!-- Main-menu -->
                                    <div class="main-menu text-center">
                                        <?php require('u_nav_menu.php') ?>
                                        
                                    </div>
                                </div> 
                            </div>
                        </div>
                   </div>
                </div>
           </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-lg-8">
                            <div class="footer-copy-right text-center">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script>. Template ini dari <i class="fa fa-heart" aria-hidden="true"></i><a href="https://colorlib.com" target="_blank">Colorlib</a> dan di kembangkan oleh MHz untuk Ruwaiskita.
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>

    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src="<?= base_url(); ?>/t_awesomemagz/assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="<?= base_url(); ?>/t_awesomemagz/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?= base_url(); ?>/t_awesomemagz/assets/js/popper.min.js"></script>
    <script src="<?= base_url(); ?>/t_awesomemagz/assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="<?= base_url(); ?>/t_awesomemagz/assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="<?= base_url(); ?>/t_awesomemagz/assets/js/owl.carousel.min.js"></script>
    <script src="<?= base_url(); ?>/t_awesomemagz/assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="<?= base_url(); ?>/t_awesomemagz/assets/js/wow.min.js"></script>
    <script src="<?= base_url(); ?>/t_awesomemagz/assets/js/animated.headline.js"></script>
    <script src="<?= base_url(); ?>/t_awesomemagz/assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="<?= base_url(); ?>/t_awesomemagz/assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="<?= base_url(); ?>/t_awesomemagz/assets/js/jquery.nice-select.min.js"></script>
    <script src="<?= base_url(); ?>/t_awesomemagz/assets/js/jquery.sticky.js"></script>
    <!-- Progress -->
    <script src="<?= base_url(); ?>/t_awesomemagz/assets/js/jquery.barfiller.js"></script>
    
    <!-- counter , waypoint,Hover Direction -->
    <script src="<?= base_url(); ?>/t_awesomemagz/assets/js/jquery.counterup.min.js"></script>
    <script src="<?= base_url(); ?>/t_awesomemagz/assets/js/waypoints.min.js"></script>
    <script src="<?= base_url(); ?>/t_awesomemagz/assets/js/jquery.countdown.min.js"></script>
    <script src="<?= base_url(); ?>/t_awesomemagz/assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="<?= base_url(); ?>/t_awesomemagz/assets/js/contact.js"></script>
    <script src="<?= base_url(); ?>/t_awesomemagz/assets/js/jquery.form.js"></script>
    <script src="<?= base_url(); ?>/t_awesomemagz/assets/js/jquery.validate.min.js"></script>
    <script src="<?= base_url(); ?>/t_awesomemagz/assets/js/mail-script.js"></script>
    <script src="<?= base_url(); ?>/t_awesomemagz/assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="<?= base_url(); ?>/t_awesomemagz/assets/js/plugins.js"></script>
    <script src="<?= base_url(); ?>/t_awesomemagz/assets/js/main.js"></script>
    
    </body>
</html>