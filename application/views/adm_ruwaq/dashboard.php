<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
          <?= $page_title; ?>
      </h1>

      <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Examples</a></li>
          <li class="active">Blank page</li>
      </ol>
    
    </section><!-- /content-header -->

    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"><?= $page_title; ?></h3>
          <h3>
            <?php 
            if(isset($flash)){ echo $flash;}
            ?>
          </h3>
          
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
            title="Collapse">
            <i class="fa fa-minus"></i></button>
            <!-- <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button> -->
          </div><!-- /box-tools -->

        </div><!-- /box-header with-border -->
    	  <div class="box-body">

  		    <h1>Selamat Datang di Admin Page</h1>


        </div> <!-- /.box-body -->
    
        <div class="box-footer">
          <!-- Footer Content is here-->
        </div> <!-- /.box-footer-->

      </div> <!-- /.box -->

    </section><!-- /.content -->

</div> <!-- /.content-wrapper -->
