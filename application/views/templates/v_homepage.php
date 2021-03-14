<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $title ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>t_awesomemagz/assets/img/favicon.ico">

	<!-- CSS here -->
	<link rel="stylesheet" href="<?= base_url(); ?>t_awesomemagz/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>t_awesomemagz/assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>t_awesomemagz/assets/css/slicknav.css">
    <link rel="stylesheet" href="<?= base_url(); ?>t_awesomemagz/assets/css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url(); ?>t_awesomemagz/assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="<?= base_url(); ?>t_awesomemagz/assets/css/gijgo.css">
    <link rel="stylesheet" href="<?= base_url(); ?>t_awesomemagz/assets/css/animate.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>t_awesomemagz/assets/css/animated-headline.css">
	<link rel="stylesheet" href="<?= base_url(); ?>t_awesomemagz/assets/css/magnific-popup.css">
	<link rel="stylesheet" href="<?= base_url(); ?>t_awesomemagz/assets/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>t_awesomemagz/assets/css/themify-icons.css">
	<link rel="stylesheet" href="<?= base_url(); ?>t_awesomemagz/assets/css/slick.css">
	<link rel="stylesheet" href="<?= base_url(); ?>t_awesomemagz/assets/css/nice-select.css">
	<link rel="stylesheet" href="<?= base_url(); ?>t_awesomemagz/assets/css/style.css">
    <style>
        .more a{
            color: #ff2300;
            cursor: pointer;
            /* float: right; */
        }
        .more a:hover{
            /* color: #eff5f8; */
            text-decoration: underline;
        }
    </style>

</head>
<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <!-- <img src="<?//base_url(); ?>t_awesomemagz/assets/img/logo/loder.png" alt=""> -->
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
                                            <a href="<?= base_url(); ?>"><img src="<?= base_url(); ?>/assets/img/Ruwaiskita-2.png" alt="" class="img-fluid" style="width: 200px"></a>
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
                                   <?php require('u_top_menu.php') ?>
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
                                    <!-- <a href="index.html"><img src="<?//base_url(); ?>t_awesomemagz/assets/img/logo/logo-mobile.png" alt=""></a> -->
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
                    
                    <!--  -->
                    <?php if($qrySliders->num_rows() > 0) :?>
                        <?php foreach ($qrySliders->result() as $row) : ?>
                            <div class="single-sliders">
                                <div class="single-baner-nw mb-30 text-center">
                                    <div class="banner-img-cap">
                                        <div class="banner-img" style="min-height:400px">

                                            <img src="<?= ($row->Picture == "") ? base_url('assets/img/noimage.jpg') : base_url('uploads/slider/').$row->Picture ; ?>" alt="" style="height:360px">
                                            <?php if($row->Video_url != "") : ?>
                                            <!--video link -->
                                            <div class="video-icon">
                                                <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=fikyqu93YGY" data-animation="bounceIn" data-delay=".4s"><i class="fas fa-play"></i></a>
                                            </div>
                                            <?php endif;  ?>
                                        </div>
                                        <div class="banner-cap">
                                            <p><?=$row->Slider_title;?></p>
                                            <h3><a href="<?=$row->Target_url;?>"><?=$row->Tagline;?></a></h3>
                                            <!-- <h3><a href="<?//base_url('artikel/view/').$row->Target_url;?>"><?=$row->Tagline;?></a></h3> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                            <p>List Headline belum di perbaharui.</p>
                    <?php endif; ?>
                    <!--  -->
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
                            <h2>Ruwais kita</h2>
                        </div>
                    </div>
                </div>
                <!-- Slider -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="latest-slider">
                            <div class="slider-active">
                                <!-- LOPP: LATEST POST -->
                                <?php 
                                $ruwaisPics = ['Ruwais Housing' => 'ruwais-housing-1.jpg',
                                'Ruwais Housing' => 'ruwais-housing-2.png',
                                'Ruwais Mall' => 'ruwais-housing-3.jpg',
                                'Ruwais Housing Map' => 'ruwais-housing-4.jpg',
                                'Ruwais Building' => 'ruwais-housing-5.jpg',];
                                ?>
                                <?php //if($qryLatest->num_rows() > 0) :?>
                                    <?php //$x = 1; foreach ($qryLatest->result() as $row) : ?>
                                    <?php $x = 1; foreach ($ruwaisPics as $key => $value) : ?>
                                    <?php if($x < 10):  ?>
                                    <!-- Single slider -->
                                    <div class="single-slider">
                                        <div class="trending-top mb-30">
                                            <div class="trend-top-img text-center">
                                                <img src="<?= base_url('assets/img/').$value ?>" alt="" style="width:100%; height:100%; object-fit: cover">
                                                <div class="trend-top-cap">
                                                    <span class="bgr" data-animation="fadeInUp" data-delay=".2s" data-duration="1000ms"></span>
                                                    <h2><a href="post_details.html" data-animation="fadeInUp" data-delay=".4s" data-duration="1000ms"><?= $key ?></a></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php $x++; endforeach; ?>
                                <?php //else: ?>
                                        <!-- <p>List Latest Post belum di perbaharui.</p> -->
                                <?php //endif; ?>
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
                                            <img src="<?= base_url(); ?>/assets/img/about-us.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single-baner-nw2 mb-30">
                                    <div class="banner-img-cap2">
                                        <div class="banner-cap2 banner-cap3">
                                            <p>About Us</p>
                                           <h3><a href="post_details.html">Sebuah komunitas anak bangsa di salah satu jazirah arabia</a></h3>
                                            <p class="normal">Sebuah komunitas anak bangsa di salah satu jazirah arabia</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single-baner-nw2 mb-30">
                                    <div class="banner-img-cap2">
                                        <div class="banner-cap2 banner-cap3">
                                            <p>Selamat Datang</p>
                                            <h3><a href="post_details.html">Ruwais kita adalah sebuah komunitas kecil warga Indonesia yang berada di sebelah timur negara Uni Emirat Arab, tepatnya di Al-Ruwais. </a></h3>
                                            <p  class="normal">Al-Ruwais adalah sebuah remote area yang merupakan komunitas pekerja karyawan ADNOC, sebuah perusahaan besar UAE seperti Pertamina nya di Indonesia.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single-baner-nw2 mb-30 ">
                                    <div class="banner-img-cap2">
                                        <div class="banner-img">
                                            <img src="<?= base_url(); ?>t_awesomemagz/assets/img/gallery/latest-post02.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Latest Posts End-->

        <!-- Nwes slider Start -->
        <style>
            .mhz-img{
              position: relative;  
            }
            .mhz-center-text {
              position: absolute;
              top: 80%;
              left: 50%;
              transform: translate(-50%, -50%);
              font-size: 2rem;
              color: #fff;
              text-shadow: 2px 2px 4px #000;
            }
        </style>
        <div class="nes-slider-area pt-80 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="news-slider-active">
                            <?php if($qryCateg->num_rows() > 0) :?>
                                <?php foreach ($qryCateg->result() as $row) : ?>
                                <div class="single-news-slider mhz-img">
                                    <div class="news-img">
                                        <a href="<?=base_url('artikel/categ/').$row->Slug ?>"><img src="<?= ($row->Picture == "") ? base_url('assets/img/noimage.jpg') : (strpos($row->Picture, 'unsplash') == TRUE) ? $row->Picture : base_url('assets/img/').$row->Picture; ?>" alt="" style="width:280px;"></a>
                                    </div>
                                    <div class="mhz-center-text"><?=$row->Categ_name; ?></div>
                                </div>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <p>Category List Empty</p>
                            <?php endif; ?>

                            
                            <!-- <div class="single-news-slider">
                                <div class="news-img">
                                    <a href="category.html"><img src="<?//base_url(); ?>t_awesomemagz/assets/img/gallery/news-slider2.png" alt=""></a>
                                </div>
                            </div> -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nwes slider End -->

        <!-- Latest Articles Start -->
        <div class="top-post-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-tittle mb-35">
                            <h2>Artikel</h2>

                        </div>
                    </div>
                </div>
                <div class="row justify-content-lg-between">
                    <!-- Blog card: -->
                    <div class="col-lg-8 col-md-8">
                        <?php if($qryArtikel->num_rows() > 0) :?>
                            <?php foreach ($qryArtikel->result() as $row) : ?>
                            <?php $gbrArtikel = $row->Picture;?>
                        <!-- single-job-content -->
                        <div class="single-job-items mb-30">
                            <div class="job-items">
                                <div class="company-img" style="width:230px; height:150px; padding:0 10px;">

<!-- Klo GAK ADA gambar, mk pake noimage.jpg  -->
<!-- Klo ADA gambar, mk :  -->
<!-- Klo gambar uploadan, maka goto: base_url('uploads/artikel/') -->
<!-- Link gambar ada yg dari Splash.com -->
<!-- Klo gambar dr splash, maka langsung http:splash.com -->

                                    <a href="<?=base_url('artikel/view/').$row->URL;?>"><img src="<?= ($gbrArtikel != '') ? ((strpos($row->Picture, 'unsplash') == TRUE) ? $gbrArtikel : base_url('uploads/artikel/').$gbrArtikel) : base_url('assets/img/noimage.jpg'); ?>" alt="" style="width:100%; height:100%; object-fit: fill"></a>
                                    

                                </div>
                                <div class="job-tittle">
                                    <span><a href="<?=base_url('artikel/categ/').$row->Category ?>" style="color:#999;"><?=$row->Category;?></a> | <i style="text-transform: capitalize;">Posted <?= get_nice_date($row->Date_posted, "mydate") ?>, by. <?=$row->Author;?></i></span>
                                    <a href="<?=base_url('artikel/view/').$row->URL;?>"><h4><?=$row->Title;?></h4></a>
                                    <p><?=$row->Headline;?></p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <?php else: ?>
                            <p>List Artikel belum di perbaharui.</p>
                        <?php endif; ?>
                        <div class="more"><a href="<?=base_url('artikels');?>">More Artikels...</a></div>

                        <!--Pagination Start: By CI -->
                        <!-- <div class="pagination-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="single-wrap d-flex justify-content-center">
                                            <?//post_pagination("Artikel", 2); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div> -->
                        <!--Pagination End  -->

                    </div>
                    <!-- Blog card End -->


                    <!-- Banner: -->
                    <div class="col-lg-3 col-md-3">
                        <div class="google-add mb-40">
                            <img src="<?= base_url(); ?>assets/img/pasang-iklan-disini.png" alt="">
                        </div>
                    </div>
                    <!-- Banner End -->
                </div>
            </div>
        </div>
        <!-- Top Posts End -->
        
        <!-- Warung Area -->
        <div class="latest-posts pt-80 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-tittle mb-35">
                            <h2>Warung</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Each dagangan: -->
                    <?php if($qryDagangan->num_rows() > 0) :?>
                            <?php foreach ($qryDagangan->result() as $row) : ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-baner-nw2 mb-30">
                            <div class="banner-img-cap2">
                                <div class="banner-img" style="width:330px;height:200px;">
                                    <img src="<?= base_url('uploads/warung/').$row->Picture ;?>" style="width:100%;height:100%; object-fit: cover; " alt="">
                                </div>
                                <div class="banner-cap2">
                                    <p style="color: red">Dhs.<?= $row->Price ?>/ <?= $row->uom ?><span class="float-right" style="color: grey;">Stok: Indent</span></p>
                                   <small>Warung : Umi Ahyar</small><br>
                                   <h3><a href="post_details.html"><?= $row->Item ?></a></h3>
                                    <p class="blog-text" style="text-transform: normal !important;"><?= $row->Descr ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p>List Dagangan belum di perbaharui.</p>
                    <?php endif; ?>
                    
                    
                </div>
            </div>
        </div>
        <!-- Warung End-->

        <!-- Subscribe Email: -->
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
        <!-- Subscribe Email End -->

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

    <script src="<?= base_url(); ?>t_awesomemagz/assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="<?= base_url(); ?>t_awesomemagz/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?= base_url(); ?>t_awesomemagz/assets/js/popper.min.js"></script>
    <script src="<?= base_url(); ?>t_awesomemagz/assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="<?= base_url(); ?>t_awesomemagz/assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="<?= base_url(); ?>t_awesomemagz/assets/js/owl.carousel.min.js"></script>
    <script src="<?= base_url(); ?>t_awesomemagz/assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="<?= base_url(); ?>t_awesomemagz/assets/js/wow.min.js"></script>
    <script src="<?= base_url(); ?>t_awesomemagz/assets/js/animated.headline.js"></script>
    <script src="<?= base_url(); ?>t_awesomemagz/assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="<?= base_url(); ?>t_awesomemagz/assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="<?= base_url(); ?>t_awesomemagz/assets/js/jquery.nice-select.min.js"></script>
    <script src="<?= base_url(); ?>t_awesomemagz/assets/js/jquery.sticky.js"></script>
    <!-- Progress -->
    <script src="<?= base_url(); ?>t_awesomemagz/assets/js/jquery.barfiller.js"></script>
    
    <!-- counter , waypoint,Hover Direction -->
    <script src="<?= base_url(); ?>t_awesomemagz/assets/js/jquery.counterup.min.js"></script>
    <script src="<?= base_url(); ?>t_awesomemagz/assets/js/waypoints.min.js"></script>
    <script src="<?= base_url(); ?>t_awesomemagz/assets/js/jquery.countdown.min.js"></script>
    <script src="<?= base_url(); ?>t_awesomemagz/assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="<?= base_url(); ?>t_awesomemagz/assets/js/contact.js"></script>
    <script src="<?= base_url(); ?>t_awesomemagz/assets/js/jquery.form.js"></script>
    <script src="<?= base_url(); ?>t_awesomemagz/assets/js/jquery.validate.min.js"></script>
    <script src="<?= base_url(); ?>t_awesomemagz/assets/js/mail-script.js"></script>
    <script src="<?= base_url(); ?>t_awesomemagz/assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="<?= base_url(); ?>t_awesomemagz/assets/js/plugins.js"></script>
    <script src="<?= base_url(); ?>t_awesomemagz/assets/js/main.js"></script>
    
    </body>
</html>