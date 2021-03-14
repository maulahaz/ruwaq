<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- <meta http-equiv="Content-Type"  content="text/html; charset=iso-8859-6"> -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
    <!-- Datatable -->
	<link rel="stylesheet" href="<?=base_url(); ?>/assets/datatables/dataTables.bootstrap4.min.css">
    <!-- Gyrocode Datatable Checkboxes-->
    <link href="<?= base_url(); ?>/assets/gyrocode-checkboxes/dataTables.checkboxes.css" rel="stylesheet">

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
    <!-- breadcrumb Start-->
    <!-- <div class="page-notification">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Category</a></li> 
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div> -->
    <!-- breadcrumb End -->
    <?php  
        if(isset($isi)){ $this->load->view($isi);}
    ?>

    </main>
    
    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-padding">
            <div class="header-area">
                <div class="main-header ">
                    <div class="header-top d-lg-block d-none">

                    </div>
                   <div class="header-bottom header-bottom2 ">

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

    <!-- JS Datatable -->
    <script src="<?= base_url(); ?>assets/datatables/jquery.dataTables.min.js"></script>
    <!-- Gyrocode Datatable Checkboxes-->
    <script src="<?= base_url(); ?>/assets/gyrocode-checkboxes/dataTables.checkboxes.min.js"></script>

    <!-- JS untuk CKEditor -->
    <script src="<?= base_url(); ?>assets/ckeditor/ckeditor.js"></script>
    
    <!-- Custom -->
    <?php  
        if(isset($jsFile)){ $this->load->view($jsFile);}
    ?>
    </body>
</html>