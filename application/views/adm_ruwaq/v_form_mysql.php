<?php 
  $formLocation1 = base_url().'adm_migration/do_migration';
  $formLocation2 = base_url().'adm_migration/submit_sql';
?>

<style>
  th,td{
      text-align: center;
  }
  .btn-select-question:hover{
    cursor: pointer;
  }
</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


  <section class="content">
    <?php $this->view('notification'); ?>
    <!-- Default box -->
    <div class="box">
    
      <div class="box-header with-border">
        <h3 class="box-title"><?= $page_title1; ?></h3>

      </div>

      <?= form_open($formLocation1); ?>

      <div class="box-body">
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">PIN</label>
          <div class="col-sm-3">
            <input type="password" name="pin" class="form-control">
          </div>
        </div>        

        <hr>
        <div class="form-group">
          <!-- <div class="col-md-8"> -->
            <button type="submit" class="btn btn-primary" name="btn_submit" value="Submit">Submit</button>
            <a href="<?=base_url() ?>" class="btn btn-default">Cancel</a>
          <!-- </div>   -->
        </div>

      </div>  <!-- /.box-body -->
      <?= form_close(); ?>

      <div class="box-footer">
        <!-- Footer Content -->
      </div>  <!-- /.box-footer-->
  
    </div><!-- /.box -->
    <div class="box">
    
      <div class="box-header with-border">
        <h3 class="box-title"><?= $page_title2; ?></h3>
      </div>

      <?= form_open($formLocation2); ?>

      <div class="box-body">
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">PIN</label>
          <div class="col-sm-3">
            <input type="password" name="pin" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">SQL</label>
          <div class="col-sm-10">
            <textarea class="form-control" name="sql" cols="30" rows="10"></textarea>
          </div>
        </div>        

        <hr>
        <div class="form-group">
          
          <button type="submit" class="btn btn-primary" name="btn_submit" value="Submit">Submit</button>
          <button type="reset" class="btn btn-warning">Reset</button>
          <a href="<?=base_url() ?>" class="btn btn-default">Cancel</a>
          
        </div>

      </div>  <!-- /.box-body -->
      <?= form_close(); ?>

      <div class="box-footer">
        <!-- Footer Content -->
      </div>  <!-- /.box-footer-->
  
    </div><!-- /.box -->    
  </section>  <!-- /.content -->

</div>  <!-- /.content-wrapper -->

<!-- SHOW MODAL -->
<!-- ============================================================== -->