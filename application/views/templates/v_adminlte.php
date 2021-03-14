<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $page_title ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url(); ?>t_adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url(); ?>t_adminlte/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url(); ?>t_adminlte/bower_components/Ionicons/css/ionicons.min.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?= base_url(); ?>t_adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url(); ?>t_adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url(); ?>t_adminlte/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= base_url(); ?>t_adminlte/dist/css/skins/_all-skins.min.css">

  <!-- JS untuk CKEditor -->
  <script src="<?= base_url(); ?>assets/ckeditor/ckeditor.js"></script>
  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?= base_url(); ?>" class="logo" target="_blank">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>RK</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Ruwaiskita</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <?php  
              $usrPhoto = $this->session->userdata('ses_Photo');
              if($usrPhoto != ""){
              ?>
                <img src="<?= base_url('uploads/members/').$usrPhoto; ?>" class="user-image">
              <?php  
              }else{ 
              ?>
                <img src="<?= base_url().'assets/img/theuser.png'; ?>" class="user-image">        
              <?php  
              }
              ?>
              <span class="hidden-xs"><strong><?= $this->session->userdata('ses_Name');?></strong></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <?php  
                $usrPhoto = $this->session->userdata('ses_Photo');
                if($usrPhoto != ""){
                ?>
                  <img src="<?= base_url('uploads/members/').$usrPhoto; ?>" class="img-circle">
                <?php  
                }else{ 
                ?>
                  <img src="<?= base_url().'assets/img/theuser.png'; ?>" class="img-circle">        
                <?php  
                }
                ?>
                <p>
                  <?= $this->session->userdata('ses_UserID');?> - <?= $this->session->userdata('userlevel');?>
                  <small><?= $this->session->userdata('ses_Name');?></small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <!-- <a href="#" class="btn btn-default btn-flat">Profile</a> -->
                </div>
                <div class="pull-right">
                  <a href="<?= base_url('adm_ruwaiskita/logout') ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <?php  
          // $usrPhoto = $this->session->userdata('ses_Photo');
          if($usrPhoto != ""){
          ?>
            <img src="<?= base_url('uploads/members/').$usrPhoto; ?>" class="img-circle">
          <?php  
          }else{ 
          ?>
            <img src="<?= base_url().'assets/img/theuser.png'; ?>" class="img-circle">        
          <?php  
          }
          ?>
        </div>
        <div class="pull-left info">
          <p><strong><?= $this->session->userdata('ses_Name');?></strong></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <li><a href="<?= base_url('adm_ruwaiskita/dashboard') ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-envelope"></i>
            <span>Inbox</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('pesan/manage') ?>"><i class="fa fa-cog"></i> Atur</a></li>
            <li><a href="<?= base_url('pesan/create') ?>"><i class="fa fa-plus"></i> Tambah Baru</a></li>
          </ul>
        </li>        
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-money"></i>
            <span>Uangkas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('uangkas/manage') ?>"><i class="fa fa-cog"></i> Atur</a></li>
            <li><a href="<?= base_url('uangkas/create') ?>"><i class="fa fa-plus"></i> Tambah Baru</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-repeat"></i>
            <span>Event</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('event/manage') ?>"><i class="fa fa-cog"></i> Atur</a></li>
            <li><a href="<?= base_url('event/create') ?>"><i class="fa fa-plus"></i> Tambah Baru</a></li>
          </ul>
        </li>        

        <li class="treeview">
          <a href="#">
            <i class="fa fa-photo"></i>
            <span>Galeri/Sliders</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('webpages/undercon') ?>"><i class="fa fa-cog"></i> Atur Galeri</a></li>
            <li><a href="<?= base_url('webpages/undercon') ?>"><i class="fa fa-cog"></i> Atur Slider</a></li>

          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-photo"></i>
            <span>Members</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('members/manage') ?>"><i class="fa fa-cog"></i> Atur Member</a></li>

          </ul>
        </li>

        <li><a href="<?= base_url('artikel/manage') ?>"><i class="fa fa-file"></i> <span> Artikel</span></a></li>
        <li><a href="<?= base_url('categories/manage') ?>"><i class="fa fa-file"></i> <span> Categories</span></a></li>
        <li><a href="<?= base_url('phone/manage') ?>"><i class="fa fa-file"></i> <span> Telepon</span></a></li>

        <li><a href="<?= base_url('webconfig/manage') ?>"><i class="fa fa-cog"></i> <span> Web Configuration</span></a></li>
        
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

    <?php  
        // require_once('content.php');
        if(isset($isi)){ $this->load->view($isi);}
    ?>


  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016, Template by <a href="https://adminlte.io">Almsaeed Studio</a> - AdminLTE.</strong> All rights
    reserved.
  </footer>

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?= base_url(); ?>t_adminlte/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url(); ?>t_adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url(); ?>t_adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>t_adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- bootstrap datepicker -->
<script src="<?= base_url(); ?>t_adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- SlimScroll -->
<script src="<?= base_url(); ?>t_adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url(); ?>t_adminlte/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url(); ?>t_adminlte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url(); ?>t_adminlte/dist/js/demo.js"></script>
<script src="<?= base_url(); ?>assets/js/mhz.js"></script>
<script>
  $(document).ready(function () {
    //------------------------------------------
    //-------- Date picker
    //------------------------------------------
    $('.myDatepicker').datepicker({
      autoclose: true,
      format: 'dd-M-yyyy',
    });

    //------------------------------------------
    //-------- Mulit select checkbox
    //------------------------------------------
    $('#select_all').on('click',function(){
          if(this.checked){
              $('.checkbox').each(function(){
                  this.checked = true;
              });
          }else{
             $('.checkbox').each(function(){
              this.checked = false;
          });
         }
     });
      
    $('.checkbox').on('click',function(){
          if($('.checkbox:checked').length == $('.checkbox').length){
              $('#select_all').prop('checked',true);
          }else{
              $('#select_all').prop('checked',false);
          }
      });

    function delete_confirm(){
        if($('.checkbox:checked').length > 0){
            var result = confirm("Are you sure to delete selected users?");
            if(result){
                return true;
            }else{
                return false;
            }
        }else{
            alert('Select at least 1 record to delete.');
            return false;
        }
    };

  });

</script>
<?php  
  if(isset($jsFile)){ $this->load->view($jsFile);}
?>
</body>
</html>
