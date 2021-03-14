<!DOCTYPE html>
<!--
	Resto by GetTemplates.co
	URL: https://gettemplates.co
-->
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ruwaiskita</title>
    <meta name="description" content="Resto">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- External CSS -->
    <link rel="stylesheet" href="<?= base_url() ;?>t_restomaster/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="<?= base_url() ;?>t_restomaster/vendor/select2/select2.min.css">
    <link rel="stylesheet" href="<?= base_url() ;?>t_restomaster/vendor/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/brands.css">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Josefin+Sans:300,400,700">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url() ;?>t_restomaster/css/style.min.css">
    <link rel="stylesheet" href="<?= base_url() ;?>t_restomaster/css/news-slider.css">

    <!-- Modernizr JS for IE8 support of HTML5 elements and media queries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

</head>
<body>
    <div class="container">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">RuwaisKita</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?=base_url(); ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('warung/listing'); ?>">Warung</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('artikel'); ?>">Artikel</a>
      </li>
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Menu-3
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Warung</a>
          <a class="dropdown-item" href="#">Sub menu-2</a>
          <a class="dropdown-item" href="#">Sub menu-3</a>
        </div>
      </li> -->
    </ul>
  </div>
</nav>

</div>
    <?php  
        if(isset($isi)){ $this->load->view($isi);}
    ?>    

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
<script src="<?= base_url() ;?>t_restomaster/vendor/bootstrap/popper.min.js"></script>
<script src="<?= base_url() ;?>t_restomaster/vendor/bootstrap/bootstrap.min.js"></script>
<script src="<?= base_url() ;?>t_restomaster/vendor/select2/select2.min.js "></script>
<script src="<?= base_url() ;?>t_restomaster/vendor/owlcarousel/owl.carousel.min.js"></script>
<script src="https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Datatable -->
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<!-- Main JS -->
<script src="<?= base_url() ;?>t_restomaster/js/app.min.js "></script>
<script src="<?= base_url() ;?>t_restomaster/js/news-slider.js "></script>
<script>

// $(document).ready(function(){
    // $(".owl-carousel").owlCarousel({
    //  autoplay: true
    // });

    $(".myslider").owlCarousel({
        autoplay: true,
        items:3,
        nav:true,
        // dots:true,
        // navText:["<i class='fa fa-arrow-left'></i>","<i class='fa fa-arrow-right'></i>"],
        loop:true,
    });

    $(".slider-13").owlCarousel({
        autoplay: true,
        items:3,
        nav:true,
        // dots:true,
        // navText:["<i class='fa fa-arrow-left'></i>","<i class='fa fa-arrow-right'></i>"],
        loop:true,
    });

    $( ".owl-prev").html('<i class="fa fa-chevron-left"></i>');
    $( ".owl-next").html('<i class="fa fa-chevron-right"></i>');


// });

</script>
<?php  
    if(isset($jsFile)){ $this->load->view($jsFile);}
?>

</body>
</html>